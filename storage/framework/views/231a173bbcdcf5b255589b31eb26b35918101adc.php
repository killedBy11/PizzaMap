<?php $__env->startSection('content'); ?>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FF851B"><?php echo e(__('Add Menu Item')); ?></div>

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="product_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Product Name')); ?></label>

                                <div class="col-md-6">
                                    <input id="product_name" type="text" class="form-control <?php if ($errors->has('product_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('product_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="product_name" value="<?php echo e(old('product_name')); ?>" required autocomplete="product_name" autofocus>

                                    <?php if ($errors->has('product_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('product_name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="picture" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Picture')); ?></label>

                                <div class="col-md-6">
                                    <input id="picture" type="file" class="form-control <?php if ($errors->has('picture')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('picture'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="picture" value="<?php echo e(old('picture')); ?>" required autocomplete="picture">

                                    <?php if ($errors->has('picture')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('picture'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Product Description')); ?></label>

                                <div class="col-md-6">
                                    <textarea id="description" maxlength="500" type="text" rows="5" class="form-control <?php if ($errors->has('description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="description" required autocomplete="description"></textarea>
                                    <?php if ($errors->has('description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Price')); ?></label>

                                <div class="col-md-6">
                                    <input id="price" type="number" min="0" class="form-control" name="price" required autocomplete="price">
                                </div>
                            </div>

                           <input type="hidden" name="currency" value="USD" />

                            <div class="form-group row">
                                <label for="gramaj" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gramaj')); ?></label>

                                <div class="col-md-6">
                                    <input id="gramaj" type="number" min="0" class="form-control" name="gramaj" required autocomplete="price">
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Add Menu Item')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PizzaMap\resources\views/addmenu.blade.php ENDPATH**/ ?>