<?php $__env->startSection('content'); ?>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FF851B"><?php echo e(__('Company Details')); ?></div>

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="card-body" >


                                <div class="form-group row">
                                    <label for="company_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Company Name')); ?></label>

                                    <div class="col-md-6">
                                        <input value='<?php echo e($company->company_name); ?>' type="text" id="company_name" class="form-control <?php if ($errors->has('company_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('company_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="company_name" value="<?php echo e(old('company_name')); ?>" autocomplete="company_name" autofocus>

                                        <?php if ($errors->has('company_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('company_name'); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contact_person_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contact Person Name')); ?></label>

                                    <div class="col-md-6">
                                        <input value="<?php echo e($company->contact_person_name); ?>" type="text" id="contact_person_name" class="form-control <?php if ($errors->has('contact_person_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('contact_person_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="contact_person_name" value="<?php echo e(old('contact_person_name')); ?>" autocomplete="contact_person_name" autofocus>

                                        <?php if ($errors->has('contact_person_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('contact_person_name'); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>

                                    <div class="col-md-6">
                                    <textarea  type="text" rows="2" class="form-control <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="address"  id="address" autocomplete="address" autofocus><?php echo e($company->address); ?>

                                    </textarea>
                                        <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Phone')); ?></label>

                                    <div class="col-md-6">
                                        <input value = '<?php echo e($company->phone); ?>' type="tel" class="form-control <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="phone" value="<?php echo e(old('phone')); ?>" id="phone" autocomplete="phone" autofocus>

                                        <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email_company" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Company E-Mail')); ?></label>

                                    <div class="col-md-6">
                                        <input value='<?php echo e($company->email); ?>' type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email_company" id="email_company" autocomplete="email">

                                        <?php if ($errors->has('email_company')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email_company'); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="website" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Website')); ?></label>

                                    <div class="col-md-6">
                                        <input value="<?php echo e($company->own_website); ?>" type="url" class="form-control <?php if ($errors->has('url')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('url'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="website" value="<?php echo e(old('website')); ?>" id="website" autocomplete="website" autofocus>

                                        <?php if ($errors->has('url')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('url'); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="working_hours" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Working Hours')); ?></label>

                                    <div class="col-md-6">
                                    <textarea rows="9" type="text" class="form-control <?php if ($errors->has('working_hours')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('working_hours'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="working_hours" value="<?php echo e(old('working_hours')); ?>" id="working_hours" autocomplete="working_hours" autofocus><?php echo e($company->working_hours); ?>

                                    </textarea>
                                        <?php if ($errors->has('working_hours')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('working_hours'); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="logo" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Logo')); ?></label>

                                    <div class="col-md-6">
                                        <input type="file" accept="image/jpg, image/png, image/svg" class="form-control <?php if ($errors->has('logo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('logo'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="logo" value="<?php echo e(old('logo')); ?>" id="logo" autocomplete="logo" autofocus>

                                        <?php if ($errors->has('logo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('logo'); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="company_description" maxlength="500" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Company Description')); ?></label>

                                    <div class="col-md-6">
                                    <textarea type="text" class="form-control <?php if ($errors->has('company_description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('company_description'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="company_description" value="<?php echo e(old('company_description')); ?>" id="company_description" autocomplete="company_description" autofocus><?php echo e($company->company_description); ?>

                                    </textarea>
                                        <?php if ($errors->has('company_description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('company_description'); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" >
                                        <?php echo e(__('Update Company Details')); ?>

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



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PizzaMap\resources\views/editcompany.blade.php ENDPATH**/ ?>