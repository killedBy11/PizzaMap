<?php $__env->startSection('content'); ?>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FF851B"><?php echo e(__('Edit Menu Item')); ?></div>

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="/editmenuitem/<?php echo e($company->id); ?>/<?php echo e($product->id); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="product_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Product Name')); ?></label>

                                <div class="col-md-6">
                                    <input value="<?php echo e($product->name); ?>" id="product_name" type="text" class="form-control <?php if ($errors->has('product_name')) :
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
endif; ?>" name="picture" value="<?php echo e(old('picture')); ?>" autocomplete="picture">

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
                                <label for="description" class="col-md-4 col-form-label text-md-right"><?php echo e(("Product Description")); ?></label>

                                <div class="col-md-6">
                                    <textarea id="description" type="text" rows="5" class="form-control <?php if ($errors->has('description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="description" required autocomplete="description"><?php echo e($product->description); ?>

                                    </textarea>
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
                                    <input value="<?php echo e($product->price); ?>" id="price" type="number" min="0" class="form-control" name="price" required autocomplete="price">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="currency" class="col-md-4 col-form-label text-md-right"><?php echo e($product->currency); ?></label>

                                <div class="col-md-6">
                                    <select name="currency">
                                        <option value="USD" selected="selected">United States Dollars</option>
                                        <option value="EUR">Euro</option>
                                        <option value="GBP">United Kingdom Pounds</option>
                                        <option value="DZD">Algeria Dinars</option>
                                        <option value="ARP">Argentina Pesos</option>
                                        <option value="AUD">Australia Dollars</option>
                                        <option value="ATS">Austria Schillings</option>
                                        <option value="BSD">Bahamas Dollars</option>
                                        <option value="BBD">Barbados Dollars</option>
                                        <option value="BEF">Belgium Francs</option>
                                        <option value="BMD">Bermuda Dollars</option>
                                        <option value="BRR">Brazil Real</option>
                                        <option value="BGL">Bulgaria Lev</option>
                                        <option value="CAD">Canada Dollars</option>
                                        <option value="CLP">Chile Pesos</option>
                                        <option value="CNY">China Yuan Renmimbi</option>
                                        <option value="CYP">Cyprus Pounds</option>
                                        <option value="CSK">Czech Republic Koruna</option>
                                        <option value="DKK">Denmark Kroner</option>
                                        <option value="NLG">Dutch Guilders</option>
                                        <option value="XCD">Eastern Caribbean Dollars</option>
                                        <option value="EGP">Egypt Pounds</option>
                                        <option value="FJD">Fiji Dollars</option>
                                        <option value="FIM">Finland Markka</option>
                                        <option value="FRF">France Francs</option>
                                        <option value="DEM">Germany Deutsche Marks</option>
                                        <option value="XAU">Gold Ounces</option>
                                        <option value="GRD">Greece Drachmas</option>
                                        <option value="HKD">Hong Kong Dollars</option>
                                        <option value="HUF">Hungary Forint</option>
                                        <option value="ISK">Iceland Krona</option>
                                        <option value="INR">India Rupees</option>
                                        <option value="IDR">Indonesia Rupiah</option>
                                        <option value="IEP">Ireland Punt</option>
                                        <option value="ILS">Israel New Shekels</option>
                                        <option value="ITL">Italy Lira</option>
                                        <option value="JMD">Jamaica Dollars</option>
                                        <option value="JPY">Japan Yen</option>
                                        <option value="JOD">Jordan Dinar</option>
                                        <option value="KRW">Korea (South) Won</option>
                                        <option value="LBP">Lebanon Pounds</option>
                                        <option value="LUF">Luxembourg Francs</option>
                                        <option value="MYR">Malaysia Ringgit</option>
                                        <option value="MXP">Mexico Pesos</option>
                                        <option value="NLG">Netherlands Guilders</option>
                                        <option value="NZD">New Zealand Dollars</option>
                                        <option value="NOK">Norway Kroner</option>
                                        <option value="PKR">Pakistan Rupees</option>
                                        <option value="XPD">Palladium Ounces</option>
                                        <option value="PHP">Philippines Pesos</option>
                                        <option value="XPT">Platinum Ounces</option>
                                        <option value="PLZ">Poland Zloty</option>
                                        <option value="PTE">Portugal Escudo</option>
                                        <option value="ROL">Romania Leu</option>
                                        <option value="RPG">Romanian Palinca (Gallons)</option>
                                        <option value="RUR">Russia Rubles</option>
                                        <option value="SAR">Saudi Arabia Riyal</option>
                                        <option value="XAG">Silver Ounces</option>
                                        <option value="SGD">Singapore Dollars</option>
                                        <option value="SKK">Slovakia Koruna</option>
                                        <option value="ZAR">South Africa Rand</option>
                                        <option value="KRW">South Korea Won</option>
                                        <option value="ESP">Spain Pesetas</option>
                                        <option value="XDR">Special Drawing Right (IMF)</option>
                                        <option value="SDD">Sudan Dinar</option>
                                        <option value="SEK">Sweden Krona</option>
                                        <option value="CHF">Switzerland Francs</option>
                                        <option value="TWD">Taiwan Dollars</option>
                                        <option value="THB">Thailand Baht</option>
                                        <option value="TTD">Trinidad and Tobago Dollars</option>
                                        <option value="TRL">Turkey Lira</option>
                                        <option value="VEB">Venezuela Bolivar</option>
                                        <option value="ZMK">Zambia Kwacha</option>
                                        <option value="EUR">Euro</option>
                                        <option value="XCD">Eastern Caribbean Dollars</option>
                                        <option value="XDR">Special Drawing Right (IMF)</option>
                                        <option value="XAG">Silver Ounces</option>
                                        <option value="XAU">Gold Ounces</option>
                                        <option value="XPD">Palladium Ounces</option>
                                        <option value="XPT">Platinum Ounces</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gramaj" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gramaj')); ?></label>

                                <div class="col-md-6">
                                    <input value ="<?php echo e($product->gramaj); ?>" id="gramaj" type="number" min="0" class="form-control" name="gramaj" required autocomplete="price">
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Update Menu Item')); ?>

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


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PizzaMap\resources\views/editMenuItem.blade.php ENDPATH**/ ?>