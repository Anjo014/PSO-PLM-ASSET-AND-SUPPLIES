<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <title>PLM | Issued Supplies Edit</title>
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
                top: 140px;
                right: 370px;
                width: 800px;
                height: 400px;
                flex-shrink: 0;
                border-radius: 8px;
                background: #E6EDFD;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            }
            .container {
                position: relative;
            }
            .input-group {
                left: 25px;
                top: 5px;
                display: flex;
                align-items: center;
                gap: 2px;
                justify-content: space-between;
                margin: 5px 0;
                width: 600px;
            }
            .input-group label {
                flex-shrink: 0;
                width: 150px; /* adjust as needed */
            }
            .btn1-primary {
                position: fixed;
                top: 570px;
                left: 550px;
                border-radius: 8px;
                border: 0.5px solid #000;
                background: #D1DFFF;
                width: 170px;
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
                top: 570px;
                left: 360px;
                border-radius: 8px;
                border: 0.5px solid #000;
                background: #D1DFFF;
                width: 170px;
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
        <div class ="card-header">
            <a href="<?php echo e(url('issued-supplies-view')); ?>" class="btn btn1-primary">Cancel</a>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1><strong>Edit Issued Supply</strong></h1>
                            <form action="<?php echo e(url('/updateissued/'.$issued->stock_no)); ?>" method="POST" autocomplete="off">
                                <?php echo csrf_field(); ?> 
                                <?php echo method_field('PUT'); ?>
                                <div class="input-group">
                                    <div class="input-group">
                                        <label for="stock_no"><strong>Stock No.:</strong></label>
                                        <input type="text" name="stock_no" value="<?php echo e($issued->stock_no ?? ''); ?>" readonly style="width: 447px; height: 32px; background-color: rgba(209,223,255,255); border: 0.5px solid #000; border-radius: 2px; padding-left: 12px; color: rgba(86,93,103,255)">
                                    </div>
                                    <div class="input-group">
                                        <label for="description"><strong>Item Description:</strong></label>
                                        <input type="text" name="description" value="<?php echo e($issued->description ?? ''); ?>" readonly style="width: 447px; height: 32px; background-color: rgba(209,223,255,255); border: 0.5px solid #000; border-radius: 2px; padding-left: 12px; color: rgba(86,93,103,255)">
                                    </div>
                                    <div class="input-group">
                                        <label for="date_issuance"><strong>Date of Issuance:</strong></label>
                                        <input type="date" name="date_issuance" value="<?php echo e(old('date_issuance', $issued->date_issuance ?? '')); ?>" class="form-control <?php $__errorArgs = ['date_issuance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <?php $__errorArgs = ['date_issuance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="input-group">
                                        <label for="requesting_office"><strong>Requesting Office</strong></label>
                                        <select name="requesting_office" class="form-control <?php $__errorArgs = ['requesting_office'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <option value=""><?php echo e(old('requesting_office', $issued->requesting_office ?? 'Select Office')); ?></option>
                                            <option value="Accounting Office" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'Accounting Office' ? 'selected' : ''); ?>>Accounting Office</option>
                                            <option value="Budget Office" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'Budget Office' ? 'selected' : ''); ?>>Budget Office</option>
                                            <option value="Cash Office/Treasurer's Office" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'Cash Office/Treasurer Office' ? 'selected' : ''); ?>>Cash Office/Treasurer Office</option>
                                            <option value="Corporate Auditor" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'Corporate Auditor' ? 'selected' : ''); ?>>Corporate Auditor</option>
                                            <option value="Human Resource Devt. Office: Chief" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'Human Resource Devt. Office: Chief' ? 'selected' : ''); ?>>Human Resource Devt. Office: Chief</option>
                                            <option value="Internal Audit Office" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'Internal Audit Office' ? 'selected' : ''); ?>>Internal Audit Office</option>
                                            <option value="ICTO: Director & Asst. Vice President" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'ICTO: Director & Asst. Vice President' ? 'selected' : ''); ?>>ICTO: Director & Asst. Vice President</option>
                                            <option value="Library: Main" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'Library: Main' ? 'selected' : ''); ?>>Library: Main</option>
                                            <option value="Physical Facilities & Management Office: Chief" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'Physical Facilities & Management Office: Chief' ? 'selected' : ''); ?>>Physical Facilities & Management Office: Chief</option>
                                            <option value="OVPA: Admin Staff" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'OVPA: Admin Staff' ? 'selected' : ''); ?>>OVPA: Admin Staff</option>
                                            <option value="CA (Accountancy)" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'CA (Accountancy)' ? 'selected' : ''); ?>>CA (Accountancy)</option>
                                            <option value="CAUP (Architecture & Urban Planning)" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'CAUP (Architecture & Urban Planning)' ? 'selected' : ''); ?>>CAUP (Architecture & Urban Planning)</option>
                                            <option value="CBM (Business & Management): Main" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'CBM (Business & Management): Main' ? 'selected' : ''); ?>>CBM (Business & Management): Main</option>
                                            <option value="CET (Engineering & Technology)" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'CET (Engineering & Technology)' ? 'selected' : ''); ?>>CET (Engineering & Technology)</option>
                                            <option value="CET: Computer Laboratory" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'CET: Computer Laboratory' ? 'selected' : ''); ?>>CET: Computer Laboratory</option>
                                            <option value="CEd: Mabuhay Integrated Learning Center" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'CEd: Mabuhay Integrated Learning Center' ? 'selected' : ''); ?>>CEd: Mabuhay Integrated Learning Center</option>
                                            <option value="CHASS (Humanities & Social Sciences)" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'CHASS (Humanities & Social Sciences)' ? 'selected' : ''); ?>>CHASS (Humanities & Social Sciences)</option>
                                            <option value="CM: PLM-Ospital ng Maynila Medical Center" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'CM: PLM-Ospital ng Maynila Medical Center' ? 'selected' : ''); ?>>CM: PLM-Ospital ng Maynila Medical Center</option>
                                            <option value="CPT: Clinic" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'CPT: Clinic' ? 'selected' : ''); ?>>CPT: Clinic</option>
                                            <option value="CS: Science Laboratory" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'CS: Science Laboratory' ? 'selected' : ''); ?>>CS: Science Laboratory</option>
                                            <option value="OSDS: NSTP (DMST and CWTS)" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'OSDS: NSTP (DMST and CWTS)' ? 'selected' : ''); ?>>OSDS: NSTP (DMST and CWTS)</option>
                                            <option value="OVPAA: VP for Academic Affairs" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'OVPAA: VP for Academic Affairs' ? 'selected' : ''); ?>>OVPAA: VP for Academic Affairs</option>
                                            <option value="SSC Supreme Student Council" <?php echo e(old('requesting_office', $issued->requesting_office ?? '') == 'SSC Supreme Student Council' ? 'selected' : ''); ?>>SSC Supreme Student Council</option>
                                        </select>
                                        <?php $__errorArgs = ['requesting_office'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="input-group">
                                        <label for="report_no"><strong>Report No:</strong></label>
                                        <input type="text" name="report_no" value="<?php echo e(old('report_no', $issued->report_no ?? '')); ?>" class="form-control <?php $__errorArgs = ['report_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <?php $__errorArgs = ['report_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="input-group">
                                        <label for="ris_no"><strong>RIS No:</strong></label>
                                        <input type="text" name="ris_no" value="<?php echo e(old('ris_no', $issued->ris_no ?? '')); ?>" class="form-control <?php $__errorArgs = ['ris_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <?php $__errorArgs = ['ris_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="input-group">
                                        <label for="issued"><strong>Quantity Issued:</strong></label>
                                        <input type="text" name="issued" value="<?php echo e(old('issued', $issued->issued ?? '')); ?>" class="form-control <?php $__errorArgs = ['issued'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <?php $__errorArgs = ['issued'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.querySelector('form').addEventListener('submit', function(event) {
                var item_no = document.querySelector('input[name="date_issuance"]').value;
                var description = document.querySelector('input[name="requesting_office"]').value;
                var date_issuance = document.querySelector('input[name="report_no"]').value;
                var requesting_office = document.querySelector('input[name="ris_no"]').value;
                var report_no = document.querySelector('input[name="issued"]').value;
                    

                var message = 'Are you sure you want to EDIT this item:\n' +
                    'Item No: ' + item_no + '\n' +
                    'Description: ' + description + '\n' +
                    'Date of Issuance: ' + date_issuance + '\n' +
                    'Requesting Office: ' + requesting_office + '\n' +
                    'Report No: ' + report_no + '\n' +
                    'RIS No: ' + ris_no + '\n' +
                    'Quantity Issued: ' + issued + '\n' +
                    "\nif not select 'cancel'";

                if (!confirm(message)) {
                    event.preventDefault();
                }
            });
        </script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\softeng\laravel\plm_inventory\resources\views/pages/supplies/editissued.blade.php ENDPATH**/ ?>