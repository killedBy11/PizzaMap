<?php $__env->startSection('title','Company Menu'); ?>

<?php $__env->startSection('content'); ?>
<br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card mb-3" >
                <img src="<?php echo e(asset('/img/pizza2.jpg')); ?>" class="card-img-top" style=" height: 200px; object-fit: cover" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pizza Bada Bing</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <br><br>

<div class="card flex-row flex-wrap">
    <div class="card-header border-0" style="height: 10vw; width:15vw; object-fit: cover">
        <img src="<?php echo e(asset('/img/pizza1.jpg')); ?>" style="width: 100%;height: 100%;" alt="">
    </div>
    <div class="card-block  p-3">
        <h4 class="card-title" id="itemName">Pizza Grasu</h4>
        <p class="card-text" id="itemDescription">Carne, Carne, Carne, Carne, Carne, Carne, Carne, Carne, Blat</p>
        <p class="card-text"><small class="text-muted">25 LEI</small></p>
        <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
</div>
<br>
            <div class="card md-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-4 itemimage" style="background-image: url(<?php echo e(asset('/img/pizza1.jpg')); ?>)">

                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
<br>



        </div></div></div>

<br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PizzaMap\resources\views/customermenuoverview.blade.php ENDPATH**/ ?>