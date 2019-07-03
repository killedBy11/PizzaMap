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
            <p class="card-text" id="companyName"><?php echo e($company->company_name); ?></p>
            <hr/>
            <h5 class="card-title">Contact Person Name</h5>
            <p class="card-text" id="contactPersonName"><?php echo e($company->contact_person_name); ?></p>
            <hr/>
            <h5 class="card-title">Address</h5>
            <p class="card-text" id="address"><?php echo e($company->address); ?></p>
            <hr/>
            <h5 class="card-title">Phone Number</h5>
            <p class="card-text" id="phoneNumber"><?php echo e($company->phone); ?></p>
            <hr/>
            <h5 class="card-title">E-mail</h5>
            <p class="card-text" id="email"><?php echo e($company->email); ?></p>
            <hr/>
            <h5 class="card-title">Website</h5>
            <p class="card-text" id="website"><a class="NiceHrefLinks" href="<?php echo e($company->own_website); ?>"><?php echo e($company->company_name); ?></a></p>
            <hr/>
            <h5 class="card-title">Working Hours</h5>
            <p class="card-text" id="workingHours"><?php echo e($company->working_hours); ?></p>
            <hr/>
            <h5 class="card-title">Logo</h5>
            <img class="img-fluid" id="logo" style="height:150px; margin-top:10px; overflow: hidden;" src="<?php echo e(asset($company->logo)); ?>" alt="Logo cannot be found">
            <hr/>
            <h5 class="card-title">Company Description</h5>
            <p class="card-text" id="companyDescription"><?php echo e($company->company_description); ?></p>
            <hr/>
            <a href="#" class="btn btn-primary">Edit Profile</a>
        </div>

        <div class="card-body" id="menuove" align="left">
            <a href="/addmenu/<?php echo e($company->id); ?>" class="btn btn-primary">Add Menu Item</a>
            <br><br>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
             <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card md-3" >
                                <div class="row no-gutters">
                                    <div class="col-12 col-sm-2 itemimage" style="background-image: url(<?php echo e(asset($item->photo)); ?>); min-width:150px; min-height:150px; height:auto">
                                    </div>
                                    <div class="col-12 col-sm-7">
                            <div class="card-body">
                                <h4 class="card-title" id="itemName"><?php echo e($item->name); ?></h4>
                                <p class="card-text" id="itemDescription"><?php echo e($item->description); ?></p>
                                <p class="card-text"><small class="text-muted"><?php echo e($item->price); ?> <?php echo e($item->currency); ?></small></p>
                                <a href="#" class="btn btn-primary">Edit Item</a>
                                <form method="POST" style="display: inline-block;" action="/delete-item/<?php echo e($company->id); ?>/<?php echo e($item->id); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="_method" value="delete" />
                                    <input type="submit" class="btn btn-primary" value="Delete"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div></div></div>
        </div>


    </div>
            </div></div></div>


    <br><br>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PizzaMap\resources\views/companyoverview.blade.php ENDPATH**/ ?>