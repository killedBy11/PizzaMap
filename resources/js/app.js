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


///Reviews
(function(e) {
    var t, o = {
            className: "autosizejs",
            append: "",
            callback: !1,
            resizeDelay: 10
        },
        i = '<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',
        n = ["fontFamily", "fontSize", "fontWeight", "fontStyle", "letterSpacing", "textTransform", "wordSpacing", "textIndent"],
        s = e(i).data("autosize", !0)[0];
    s.style.lineHeight = "99px", "99px" === e(s).css("lineHeight") && n.push("lineHeight"), s.style.lineHeight = "", e.fn.autosize = function(i) {
        return this.length ? (i = e.extend({}, o, i || {}), s.parentNode !== document.body && e(document.body).append(s), this.each(function() {
            function o() {
                var t, o;
                "getComputedStyle" in window ? (t = window.getComputedStyle(u, null), o = u.getBoundingClientRect().width, e.each(["paddingLeft", "paddingRight", "borderLeftWidth", "borderRightWidth"], function(e, i) {
                    o -= parseInt(t[i], 10)
                }), s.style.width = o + "px") : s.style.width = Math.max(p.width(), 0) + "px"
            }

            function a() {
                var a = {};
                if (t = u, s.className = i.className, d = parseInt(p.css("maxHeight"), 10), e.each(n, function(e, t) {
                    a[t] = p.css(t)
                }), e(s).css(a), o(), window.chrome) {
                    var r = u.style.width;
                    u.style.width = "0px", u.offsetWidth, u.style.width = r
                }
            }

            function r() {
                var e, n;
                t !== u ? a() : o(), s.value = u.value + i.append, s.style.overflowY = u.style.overflowY, n = parseInt(u.style.height, 10), s.scrollTop = 0, s.scrollTop = 9e4, e = s.scrollTop, d && e > d ? (u.style.overflowY = "scroll", e = d) : (u.style.overflowY = "hidden", c > e && (e = c)), e += w, n !== e && (u.style.height = e + "px", f && i.callback.call(u, u))
            }

            function l() {
                clearTimeout(h), h = setTimeout(function() {
                    var e = p.width();
                    e !== g && (g = e, r())
                }, parseInt(i.resizeDelay, 10))
            }
            var d, c, h, u = this,
                p = e(u),
                w = 0,
                f = e.isFunction(i.callback),
                z = {
                    height: u.style.height,
                    overflow: u.style.overflow,
                    overflowY: u.style.overflowY,
                    wordWrap: u.style.wordWrap,
                    resize: u.style.resize
                },
                g = p.width();
            p.data("autosize") || (p.data("autosize", !0), ("border-box" === p.css("box-sizing") || "border-box" === p.css("-moz-box-sizing") || "border-box" === p.css("-webkit-box-sizing")) && (w = p.outerHeight() - p.height()), c = Math.max(parseInt(p.css("minHeight"), 10) - w || 0, p.height()), p.css({
                overflow: "hidden",
                overflowY: "hidden",
                wordWrap: "break-word",
                resize: "none" === p.css("resize") || "vertical" === p.css("resize") ? "none" : "horizontal"
            }), "onpropertychange" in u ? "oninput" in u ? p.on("input.autosize keyup.autosize", r) : p.on("propertychange.autosize", function() {
                "value" === event.propertyName && r()
            }) : p.on("input.autosize", r), i.resizeDelay !== !1 && e(window).on("resize.autosize", l), p.on("autosize.resize", r), p.on("autosize.resizeIncludeStyle", function() {
                t = null, r()
            }), p.on("autosize.destroy", function() {
                t = null, clearTimeout(h), e(window).off("resize", l), p.off("autosize").off(".autosize").css(z).removeData("autosize")
            }), r())
        })) : this
    }
})(window.jQuery || window.$);




$(function(){

    $('#new-review').autosize({append: "\n"});

    var reviewBox = $('#post-review-box');
    var newReview = $('#new-review');
    var openReviewBtn = $('#open-review-box');
    var closeReviewBtn = $('#close-review-box');
    var ratingsField = $('#ratings-hidden');

    openReviewBtn.click(function(e)
    {
        reviewBox.slideDown(400, function()
        {
            $('#new-review').trigger('autosize.resize');
            newReview.focus();
        });
        openReviewBtn.fadeOut(100);
        closeReviewBtn.show();
    });

    closeReviewBtn.click(function(e)
    {
        e.preventDefault();
        reviewBox.slideUp(300, function()
        {
            newReview.focus();
            openReviewBtn.fadeIn(200);
        });
        closeReviewBtn.hide();

    });


});
