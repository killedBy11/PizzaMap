<?php $__env->startSection('title','Company Menu'); ?>

<?php $__env->startSection('content'); ?>

    <br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

    <div class="card text-center">
        <div class="card-header" style="background-color: #FF851B">
            <div class="card-title text-left">Company Menu</div>
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#comprof" id="cp">Company Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menuove" id="mo">Menu Overview</a>
                </li>
            </ul>
        </div>


        <div class="card-body" id="comprof" align="left">
            <h5 class="card-title">Company Name</h5>
            <p class="card-text" id="companyName">Bada Bing Pizza</p>
            <hr/>
            <h5 class="card-title">Contact Person Name</h5>
            <p class="card-text" id="contactPersonName">Gigi Becali</p>
            <hr/>
            <h5 class="card-title">Address</h5>
            <p class="card-text" id="address">Str.Racadau Nr.323</p>
            <hr/>
            <h5 class="card-title">Phone Number</h5>
            <p class="card-text" id="phoneNumber">0751 234 567</p>
            <hr/>
            <h5 class="card-title">E-mail</h5>
            <p class="card-text" id="email">badabingpizza@yahoo.com</p>
            <hr/>
            <h5 class="card-title">Website</h5>
            <p class="card-text" id="website">www.badabing.com</p>
            <hr/>
            <h5 class="card-title">Working Hours</h5>
            <p class="card-text" id="workingHours">L-V:8:00-22:00 S-D:9:00-23:00</p>
            <hr/>
            <h5 class="card-title">Logo</h5>
            <img class="img-fluid" id="logo" style="height:150px; margin-top:10px; overflow: hidden;" src="<?php echo e(asset('/img/pizza.svg')); ?>" alt="Logo cannot be found">
            <hr/>
            <h5 class="card-title">Company Description</h5>
            <p class="card-text" id="companyDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <hr/>
            <a href="#" class="btn btn-primary">Edit Profile</a>
        </div>

        <div class="card-body" id="menuove" align="left">
            <a href="/addmenu/<?php echo e($company->id); ?>" class="btn btn-primary">Add Menu Item</a>
            <br><br>
            <div class="card flex-row flex-wrap">
                <div class="card-header border-0" style=" width: 200px; height: 200px;">
                    <img src="<?php echo e(asset('/img/pizza1.jpg')); ?>" style="width: 100%;height: 100%;" alt="">
                </div>
                <div class="card-block  p-3">
                    <h4 class="card-title" id="itemName">Pizza Grasu</h4>
                    <p class="card-text" id="itemDescription">Carne, Carne, Carne, Carne, Carne, Carne, Carne, Carne, Blat</p>
                    <p class="card-text"><small class="text-muted">25 LEI</small></p>
                    <a href="#" class="btn btn-primary">Edit Item</a>
                    <a href="#" class="btn btn-primary">Delete Item</a>
                </div>
            </div>
        </div>



    </div>
            </div></div></div>


    <br><br>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PizzaMap\resources\views/companyoverview.blade.php ENDPATH**/ ?>