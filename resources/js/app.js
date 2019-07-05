/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

function toogleState(checkVal) {
    if(checkVal) {
        $('#checkLabel').text("I don't have a pizza company");
        $('#dummy').css('display', 'block');
        $("#c1, #c2, #c3, #c4, #c5, #c6, #c7, #c8, #c9").prop('required', true);

    }

    else {
        $('#checkLabel').text("I have a pizza company");
        $('#dummy').css('display', 'none');
        $("#c1, #c2, #c3, #c4, #c5, #c6, #c7, #c8, #c9").prop('required', false);

    }

}

function triggerCheckbox(status){
    console.log('status: ', status);
}

$('#dummy').css('display', 'none');
$('#check').on('change', function() {
    var status = this.checked ? true : false;
    toogleState(status);

});

//Menu Company

$( '#menuove' ).hide();
$('#mo').click(
    function ()
    {
        $( '#comprof' ).hide();
        $( '#menuove' ).show();
        $("#mo").attr('class', 'nav-link active');
        $("#cp").attr('class', 'nav-link');
    }
);

$('#cp').click(
    function ()
    {
        $( '#menuove' ).hide();
        $( '#comprof' ).show();
        $("#cp").attr('class', 'nav-link active');
        $("#mo").attr('class', 'nav-link');
    }
);

//Search

$('.search_icon').click(function () {
    var searchquery = $('.search_input').val();
    console.log(searchquery);
    if(searchquery.length >= 3) {
        window.location.replace('/search/' + searchquery + '#result');
    }

})

///NAVBAR

/*var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-50px";
    }
    prevScrollpos = currentScrollPos;
}*/

function testPdf(param){
    html2canvas($("#toprint" + param), {
        onrendered: function(canvas) {
            var imgData = canvas.toDataURL('image/png');
            var doc = new jsPDF('landscape');
            doc.addImage(imgData, 'PDF', 10, 10);
            doc.autoPrint();
            window.open(doc.output('bloburl'), '_blank');
        }
    });

}


$('#print').click(function() {
    var id = $(this).data('theid');
    testPdf(id);

});
