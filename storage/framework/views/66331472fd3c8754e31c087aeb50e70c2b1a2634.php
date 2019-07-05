<?php $__env->startSection('title','Company Menu'); ?>

<?php $__env->startSection('content'); ?>
    <br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mb-3 shadow" >
                    <img src="<?php echo e(asset($company->logo)); ?>" class="card-img-top" style=" height: 200px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <h3 class="card-title" id="company_name"><?php echo e($company->company_name); ?></h3>
                        <p class="card-text"><i class="fas fa-sticky-note"></i> <?php echo e($company->company_description); ?></p>
                        <p class="card-text"><i class="fas fa-map-marker-alt"></i> <?php echo e($company->address); ?></p>
                        <p class="card-text"><i class="fas fa-clock"></i> <?php echo e($company->working_hours); ?></p>
                    </div>
                </div>
                <br><br>

                <br>


                <div class="row">
                    <div class="col-lg-6">

                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card md-3 shadoww" >
                                <div class="row no-gutters">
                                    <div class="col-12 col-sm-2 itemimage" style="background-image: url(<?php echo e(asset($product->photo)); ?>); min-width:150px; min-height:150px; height:auto">
                                    </div>
                                    <div class="col-12 col-sm-7">
                                    <div class="card-body">
                                        <h4 class="card-title" id="itemName"><?php echo e($product->name); ?></h4>
                                        <p class="card-text" id="itemDescription"><i class="fas fa-sticky-note"></i> <?php echo e($product->description); ?></p>
                                        <p class="card-text"><small class="text-muted"><i class="fas fa-money-bill"></i> <?php echo e($product->price); ?> <?php echo e($product->currency); ?></small></p>
                                        <?php if(auth()->guard()->check()): ?>
                                            <a href="/add-to-cart/<?php echo e($company->id); ?>/<?php echo e($product->id); ?>" class="btn btn-primary">Add to cart</a>
                                            <?php if($order && $order->orderItem()->where('product_id', $product->id)->first()): ?>
                                                <a href="/remove-from-cart/<?php echo e($company->id); ?>/<?php echo e($product->id); ?>" class="btn btn-danger">Remove from cart</a>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <a href="/login" class="btn btn-primary">Add to cart</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <br>
                    <div class="col-lg-6">



                        <div class="col-md-8 col-6-sm order-md-6 mb-8 float-right">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Your cart</span>
                                <span class="badge badge-secondary badge-pill"><?php echo e($order ? $order->orderItem->count() : 0); ?></span>
                            </h4>
                            <?php
                                $total = 0;
                            ?>
                            <ul class="list-group mb-3">
                                <?php if($order): ?>

                                    <?php $__currentLoopData = $order->orderItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $total+=$item->product->price * $item->quantity;
                                        ?>
                                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                            <div style="width: 90%">
                                                <h6 class="my-0"><?php echo e($item->product->name); ?></h6>
                                                <small class="text-muted"><?php echo e($item->product->description); ?></small>
                                            </div>
                                            <span class="text-muted"><?php echo e($item->quantity); ?> x <?php echo e($item->product->price); ?> <?php echo e($item->product->currency); ?></span>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (USD)</span>
                                    <strong>$<?php echo e($total); ?></strong>
                                </li>
                            </ul>

                            <?php if($order): ?>
                                <a href="/checkout/<?php echo e($order->id); ?>" class="btn ml-2 btn-primary text-white">Checkout</a>
                            <?php endif; ?>
                        </div>



                    </div>
                </div>







            </div></div></div>

    <br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PizzaMap\resources\views/customermenuoverview.blade.php ENDPATH**/ ?>