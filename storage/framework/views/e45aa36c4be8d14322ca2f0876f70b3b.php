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
                width: 700px;
                height: 31px;
                border: 0.5px solid #000;
                background: #D1DFFF;
            }
            .card-body{
                position: fixed;
                top: 250px;
                right: 350px;
                width: 800px;
                height: 200px;
                flex-shrink: 0;
                border-radius: 8px;
                background: #E6EDFD;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            }
            .input-group {
                top: 35px;
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
                top: 530px;
                left: 590px;
                border-radius: 8px;
                border: 0.5px solid #000;
                background: #D1DFFF;
                width: 194px;
                height: 38px;
                flex-shrink: 0;
            }
            .btn1-primary:hover{
                background-color: red;
                color: white;
                border: none;
            }

            .btn-primary{
                position: fixed;
                top: 530px;
                left: 380px;
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
            <a href="<?php echo e(url('supplies-view')); ?>" class="btn btn1-primary">Cancel</a>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card-body">
                        <h1><strong>Main Table</strong></h1>
                        <form action="<?php echo e(url('/storesupplies')); ?>" class="form-body" method="POST" autocomplete="off">
                            <?php echo csrf_field(); ?> 
                            <div class="input-group">
                                <label for="pr_no"><strong>PR No:</strong></label>
                                <select name="pr_no" class="form-control <?php $__errorArgs = ['pr_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="">Select PR No.</option>
                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->pr_no); ?>" <?php echo e(old('pr_no') == $item->pr_no ? 'selected' : ''); ?>>
                                            <?php echo e($item->pr_no); ?><?php echo e($item->added ? '(Added)' : ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="input-group">
                                        <label for="stock_no"><strong>Stock No:</strong></label>
                                        <input type="text" id="stock_no" name='stock_no' class="form-control <?php $__errorArgs = ['stock_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <button id="generate-stock-no" type="button">Generate Stock No</button>
                                        <?php $__errorArgs = ['stock_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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

                var message = 'Are you sure you want to ADD this item:\n' +
                    'Stock No: ' + stock_no + '\n' +
                    'Description: ' + description + '\n' +
                    'Unit: ' + unit + '\n' +
                    "\nif not select 'cancel'";

                if (!confirm(message)) {
                    event.preventDefault();
                }
            });
        </script>

        <script>
                document.getElementById('generate-stock-no').addEventListener('click', function() {
                    fetch('/generate-stock-no')
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('stock_no').value = data.stock_no;
                        });
                });
        </script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\softeng\laravel\plm_inventory\resources\views/pages/supplies/addsupply.blade.php ENDPATH**/ ?>