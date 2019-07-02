<?php $__env->startSection('title','Welcome'); ?>

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <div class="card">
        <img class="img-fluid card-img" src="<?php echo e(asset('img/pizzabg.jpg')); ?>" alt="Deer in nature">
        <div class="card-img-overlay d-flex">
            <div class="my-auto mx-auto text-center text-white">
                <h1 class="card-title display-1" style="font-size: 8vw">Pizza Map</h1>
                <h4 class="card-text" style="font-size: 3vw">Cauta cea mai buna pizza din oras!</h4>

                    <div class="d-flex justify-content-center size="2vw">
                                <div class="searchbar">
                            <input class="search_input" type="text" name="" placeholder="Search...">
                            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                        </div>
                    </div>

            </div>
        </div>
    </div>

<br>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>See the popular places in Brasov!</h3>
                <br>

    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card flex-row flex-wrap">
        <div class="card-header border-0" style=" width: 200px; height: 200px;">
            <img src="<?php echo e(asset($company->logo)); ?>" style="width: 100%;height: 100%;" alt="">
        </div>
        <div class="card-block  p-3">
            <h4 class="card-title" id="company_name"><?php echo e($company->company_name); ?></h4>
            <p class="card-text" id="company_description"><?php echo e($company->company_description); ?></p>
            <p class="card-text"><small class="text-muted"><?php echo e($company->working_hours); ?></small></p>
            <a href="/companyoverview/<?php echo e($company->id); ?>" class="btn btn-primary">See the menu</a>
        </div>
    </div><br>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div></div></div>


    <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PizzaMap\resources\views/welcome.blade.php ENDPATH**/ ?>