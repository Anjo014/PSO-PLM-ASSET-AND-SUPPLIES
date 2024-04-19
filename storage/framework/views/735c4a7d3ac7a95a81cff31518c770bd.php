<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <title>CREATE | Supplies in Main</title>
        
        <style>
            body {
                font-family: Arial;
                background-color: #2D349A;
                margin: 0;
                padding: 20px;
                overflow: hidden;
            }
            img {
                position: absolute;
                width: 280px;
                height: 60px;
                left: 15px;
                top: 8px;
            }
            .custom-header {
                position: absolute;
                left: 0px; /* Adjust as needed */
                top: 0px;
                width: 1535px;
                height: 75px;
                flex-shrink: 0;
                background: #FFF;
                border-radius: 0px 0px 12px 12px;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                display: flex;
                justify-content: space-between;
                padding: 0 20px;
                z-index: 2;
            }

            .form-control {
                border-radius: none;
                width: 1084px;
                height: 31px;
                border: 0.5px solid #000;
                background: #D1DFFF;
            }
            .card-body{
                position: fixed;
                top: 120px;
                right: 150px;
                width: 1250px;
                height: 450px;
                flex-shrink: 0;
                border-radius: 8px;
                background: #E6EDFD;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            }
            .input-group {
                top: 25px;
                display: flex;
                align-items: center;
                gap: 10px;
                justify-content: space-between;
                margin: 10px 0;
            }

            .input-group label {
                flex-shrink: 0;
                width: 100px; /* adjust as needed */
            }

            .btn1-primary {
                position: fixed;
                top: 600px;
                left: 355px;
                border-radius: 8px;
                border: 0.5px solid #000;
                background: #D1DFFF;
                width: 194px;
                height: 38px;
                flex-shrink: 0;
            }
            .btn1-primary:hover{
                background-color: #0069d9;
                color: white;
                border: none;
            }

            .btn-primary{
                position: fixed;
                top: 600px;
                left: 135px;
                border-radius: 8px;
                border: 0.5px solid #000;
                background: #D1DFFF;
                width: 194px;
                height: 38px;
                flex-shrink: 0;
                color: black;
            }
        </style>
    </head>
    <body>
        <header class="custom-header">
            <img src="/image/PLMLogo.png" alt="logo">
        </header>
        <div>
            <a href="<?php echo e(url('supplies')); ?>" class="btn btn1-primary">Cancel</a>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card-body">
                        <h1><strong>Main Table</strong></h1>
                        <form action="<?php echo e(url('/supplies-store')); ?>" class="form-body" method="POST" autocomplete="off">
                            <?php echo csrf_field(); ?> 
                            <div class="input-group">
                                <label for="stock_no"><strong>Stock No:</strong></label>
                                <input type="text" name="stock_no" class="form-control <?php $__errorArgs = ['stock_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e($errors->first('stock_no')); ?>">
                            </div>
                            <div class="input-group">
                                <label for="description"><strong>Description:</strong></label>
                                <input type="text" name="description" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e($errors->first('description')); ?>">
                            </div>
                            <div class="input-group">
                                <label for="unit"><strong>Unit:</strong></label>
                                <input type="text" name="unit" class="form-control <?php $__errorArgs = ['unit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e($errors->first('unit')); ?>">
                            </div>
                            <div class="input-group">
                                <label for="balance_before"><strong>Balance Before:</strong></label>
                                <input type="text" name="balance_before" class="form-control <?php $__errorArgs = ['balance_before'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e($errors->first('balance_before')); ?>">
                            </div>
                            <div class="input-group">
                                <label for="delivered"><strong>Delivered:</strong></label>
                                <input type="text" name="delivered" class="form-control <?php $__errorArgs = ['delivered'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e($errors->first('delivered')); ?>">
                            </div>
                            <div class="input-group">
                                <label for="issued"><strong>Issued:</strong></label>
                                <input type="text" name="issued" class="form-control <?php $__errorArgs = ['issued'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e($errors->first('issued')); ?>">
                            </div>
                            <div class="input-group">
                                <label for="balance_after"><strong>Balance After:</strong></label>
                                <input type="text" name="balance_after" class="form-control <?php $__errorArgs = ['balance_after'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e($errors->first('balance_after')); ?>">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary float-end">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $(".btn1-primary").hover(function(){
                    $(this).css("background-color", "blue");
                    $(this).css("color", "white");
                    }, function(){
                    $(this).css("background-color", "");
                    $(this).css("color", "");
                });
            });
        </script>
        <script>
            document.querySelector('form').addEventListener('submit', function(event) {
                var stock_no = document.querySelector('input[name="stock_no"]').value;
                var description = document.querySelector('input[name="description"]').value;
                var unit = document.querySelector('input[name="unit"]').value;
                var balanceBefore = document.querySelector('input[name="balance_before"]').value;
                var delivered = document.querySelector('input[name="delivered"]').value;
                var issued = document.querySelector('input[name="issued"]').value;
                var balance_after = document.querySelector('input[name="balance_after"]').value;

                var message = 'Are you sure you want to ADD this item:\n' +
                    'Stock No: ' + stock_no + '\n' +
                    'Description: ' + description + '\n' +
                    'Unit: ' + unit + '\n' +
                    'Balance Before: ' + balanceBefore + '\n' +
                    'Delivered: ' + delivered + '\n' +
                    'Issued: ' + issued + '\n' +
                    'Balance After: ' + balance_after +
                    "\nif not select 'cancel'";

                if (!confirm(message)) {
                    event.preventDefault();
                }
            });
        </script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\softeng\laravel\plm_inventory\resources\views/pages/supplies/create.blade.php ENDPATH**/ ?>