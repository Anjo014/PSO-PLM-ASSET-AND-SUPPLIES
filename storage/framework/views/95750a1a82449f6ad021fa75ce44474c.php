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
                border-radius: 0.5px;
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
            .container {
                position: relative;
            }
            .input-group {
                top: 7px;
                display: flex;
                align-items: center;
                gap: 10px;
                justify-content: space-between;
                margin: 5px 0;
                width: 500px;
            }
            .input-group1 {
                position: absolute;
                right: 100px;
                top: 65px;
                display: flex;
                align-items: center;  
                justify-content: space-between;
                margin: 5px 0;
                width: 500px;
                flex-direction: column;
            }
            .input-group label {
                flex-shrink: 0;
                width: 150px; /* adjust as needed */
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
                background-color: red;
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
            .btn-primary:hover{
                background-color: green;
                color: white;
                border: none;
            }
        </style>
    </head>
    <body>
        <header class="custom-header">
            <img src="/image/PLMLogo.png" alt="logo">
        </header>
        <div>
            <a href="<?php echo e(url('/supplies-issued')); ?>" class="btn btn1-primary">Cancel</a>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card-body">
                        <h1><strong>Issued Supplies Table</strong></h1>
                        <form action="<?php echo e(url('/supplies-issued-create')); ?>" class="form-body" method="POST" autocomplete="off">
                            <?php echo csrf_field(); ?>
                            <div class="input-group">
                                <label for="stock_no"><strong>Stock No:</strong></label>
                                <select id="stock_no" name="stock_no" style="width: 340px; height: 32px; background-color: rgba(209,223,255,255); border: 0.5px solid #000; border-radius: 2px; padding-left: 12px; color: rgba(86,93,103,255)">
                                    <option value="">Select a Stock No</option>
                                    <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($stock->stock_no); ?>"><?php echo e($stock->stock_no); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="input-group">
                                <label for="date_issuance"><strong>Date of Issuance:</strong></label>
                                <input type="date" name="date_issuance" class="form-control <?php $__errorArgs = ['date_issuance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e($errors->first('date_issuance')); ?>" value="<?php echo e(old('date_issuance')); ?>">
                            </div>
                            <div class="input-group">
                                <label for="requesting_office"><strong>Requesting Office:</strong></label>
                                <input type="text" name="requesting_office" class="form-control <?php $__errorArgs = ['requesting_office'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e($errors->first('requesting_office')); ?>" value="<?php echo e(old('requesting_office')); ?>">
                            </div>
                            <div class="input-group">
                                <label for="report_no"><strong>Report No:</strong></label>
                                <input type="text" name="report_no" class="form-control <?php $__errorArgs = ['report_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e($errors->first('report_no')); ?>" value="<?php echo e(old('report_no')); ?>">
                            </div>
                            <div class="input-group">
                                <label for="ris_no"><strong>RIS No:</strong></label>
                                <input type="text" name="ris_no" class="form-control <?php $__errorArgs = ['ris_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e($errors->first('ris_no')); ?>" value="<?php echo e(old('ris_no')); ?>">
                            </div>
                            <div class="input-group">
                                <label for="description"><strong>Description:</strong></label>
                                <input type="text" id="description" name="description" readonly style="width: 340px; height: 32px; background-color: rgba(209,223,255,255); border: 0.5px solid #000; border-radius: 2px; padding-left: 12px; color: rgba(86,93,103,255)">
                            </div>
                            <div class="input-group">
                                <label for="unit"><strong>Unit:</strong></label>
                                <input type="text" id="unit" name="unit" readonly style="width: 340px; height: 32px; background-color: rgba(209,223,255,255); border: 0.5px solid #000; border-radius: 2px; padding-left: 12px; color: rgba(86,93,103,255)">
                            </div>
                            <div class="input-group">
                                <label for="issued"><strong>Issued:</strong></label>
                                <input type="text" id="issued" name="issued" readonly style="width: 340px; height: 32px; background-color: rgba(209,223,255,255); border: 0.5px solid #000; border-radius: 2px; padding-left: 12px; color: rgba(86,93,103,255)">
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
            document.querySelector('form').addEventListener('submit', function(event) {
                var deliveryDate = document.querySelector('input[name="delivery_date"]').value;
                var actualDeliveryDate = document.querySelector('input[name="actual_delivery_date"]').value;
                var acceptanceDate = document.querySelector('input[name="acceptance_date"]').value;
                var iarNo = document.querySelector('input[name="iar_no"]').value;
                var itemNo = document.querySelector('input[name="item_no"]').value;
                var stockNo = document.querySelector('select[name="stock_no"]').value;
                var description = document.querySelector('input[name="description"]').value;
                var unit = document.querySelector('input[name="unit"]').value;
                var drNo = document.querySelector('input[name="dr_no"]').value;
                var checkNo = document.querySelector('input[name="check_no"]').value;
                var poNo = document.querySelector('input[name="po_no"]').value;
                var poDate = document.querySelector('input[name="po_date"]').value;
                var poAmount = document.querySelector('input[name="po_amount"]').value;
                var prNo = document.querySelector('input[name="pr_no"]').value;
                var pricePerPurchaseRequest = document.querySelector('input[name="price_per_purchase_request"]').value;
                var bur = document.querySelector('input[name="bur"]').value;
                var remarks = document.querySelector('input[name="remarks"]').value;

                var message = 'Are you sure you want to ADD this item:\n' +
                    'Delivery Date: ' + deliveryDate + '\n' +
                    'Actual Delivery Date: ' + actualDeliveryDate + '\n' +
                    'Acceptance Date: ' + acceptanceDate + '\n' +
                    'IAR No: ' + iarNo + '\n' +
                    'Item No: ' + itemNo + '\n' +
                    'Stock No: ' + stockNo + '\n' +
                    'Description: ' + description + '\n' +
                    'Unit: ' + unit + '\n' +
                    'DR No: ' + drNo + '\n' +
                    'Check No: ' + checkNo + '\n' +
                    'PO No: ' + poNo + '\n' +
                    'PO Date: ' + poDate + '\n' +
                    'PO Amount: ' + poAmount + '\n' +
                    'PR No: ' + prNo + '\n' +
                    'Price Per Purchase Request: ' + pricePerPurchaseRequest + '\n' +
                    'BUR: ' + bur + '\n' +
                    'Remarks: ' + remarks +
                    "\nif not select 'cancel'";

                if (!confirm(message)) {
                    event.preventDefault();
                }
            });
        </script>
        <script>
        var stocks = <?php echo json_encode($stocks, 15, 512) ?>;

        document.getElementById('stock_no').addEventListener('change', function() {
            var selectedStockNo = this.value;
            var selectedStock = stocks.find(function(stock) {
                return stock.stock_no === selectedStockNo;
            });
            document.getElementById('unit').value = selectedStock ? selectedStock.unit : '';
            document.getElementById('description').value = selectedStock ? selectedStock.description : '';
            document.getElementById('issued').value = selectedStock ? selectedStock.issued : '';
        });
        </script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\softeng\laravel\plm_inventory\resources\views/pages/supplies/icreate.blade.php ENDPATH**/ ?>