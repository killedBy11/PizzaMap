<?php $__env->startSection('content'); ?>
    <br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #FF851B"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?><span style="color:red">*</span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?><span style="color:red">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?><span style="color:red">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?><span style="color:red">*</span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                        <div class="checkbox col-md-4 col-form-label text-md-right">
                            <label style="cursor: pointer; border: 1px solid Orange; background-color: Orange; padding: 5px; border-radius: 5px;"><input type="checkbox" id="check" name="check" value="true" style="display: none;" class="check"><span id="checkLabel">I have a pizza company</span></label>
                        </div>
                        </div>


                        <div class="card-body" id="dummy" >


                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Company Name')); ?><span style="color:red">*</span></label>

                            <div class="col-md-6">
                                <input type="text" id="company_name" class="form-control <?php if ($errors->has('company_name')) :
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
                                <label for="contact_person_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contact Person Name')); ?><span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <input type="text" id="contact_person_name" class="form-control <?php if ($errors->has('contact_person_name')) :
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
                                <label for="address" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?><span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <textarea type="text" rows="2" class="form-control <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="address" value="<?php echo e(old('address')); ?>" id="address" autocomplete="address" autofocus>
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
                                <label for="phone" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Phone')); ?><span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <input type="tel" class="form-control <?php if ($errors->has('phone')) :
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
                                <label for="email_company" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Company E-Mail')); ?><span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control <?php if ($errors->has('email')) :
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
                                <label for="website" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Website')); ?><span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <input type="url" class="form-control <?php if ($errors->has('url')) :
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
                                <label for="working_hours" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Working Hours')); ?><span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <textarea rows="9" type="text" class="form-control <?php if ($errors->has('working_hours')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('working_hours'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="working_hours" value="<?php echo e(old('working_hours')); ?>" id="working_hours" autocomplete="working_hours" autofocus>
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
                                <label for="logo" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Logo')); ?><span style="color:red">*</span></label>

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
                                <label for="company_description" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Company Description')); ?><span style="color:red">*</span></label>

                                <div class="col-md-6">
                                    <textarea type="text" class="form-control <?php if ($errors->has('company_description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('company_description'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="company_description" value="<?php echo e(old('company_description')); ?>" id="company_description" autocomplete="company_description" autofocus>
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
                        <div class="card-body">
                                <p class="col-md-6 col-form-label text-md-right"><span style="color:red">*</span>All fields are required</p>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PizzaMap\resources\views/auth/register.blade.php ENDPATH**/ ?>