<?php $__env->startSection('content'); ?>
    <br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Access denied!</div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                    Could not access this page.

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PizzaMap\resources\views/accessDenied.blade.php ENDPATH**/ ?>