<!doctype html>
<html lang="en">
<?php
    $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    $deliveredData = [];
    $issuedData = [];
    $currentYear = date('Y');

    foreach ($months as $index => $month) {
        $delivered = \App\Models\Asset::whereMonth('updated_at', $index + 1)
                                         ->whereYear('updated_at', $currentYear)
                                         ->sum('delivery_qty');

        $issued = \App\Models\Asset::whereMonth('updated_at', $index + 1)
                                       ->whereYear('updated_at', $currentYear)
                                       ->sum('issue_qty');

        $deliveredData[] = (int)$delivered;
        $issuedData[] = (int)$issued;
    }
?>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <title>PLM | Reports and Forms</title>
        <style>
            body {
                font-family: Arial;
                background-color: #4F74BB;
                margin: 0;
                padding: 20px;
                overflow: hidden;
            }

            .custom-header{
                position: absolute;
                left: 0;
                top: 0;
                width: calc(100% - 20px);
                height: 90px;
                flex-shrink: 0;
                background: #FFF;
                border-radius: 0px 0px 12px 12px;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                display: flex;
                justify-content: space-between;
                padding: 0 20px;
                z-index: 2;
            }
            .side-bar {
                position: absolute;
                left: 0;
                top: 85px;
                border-radius: 9.574px;
                background: #EFF0FF;
                
                width: 444px;
                height: 50px;
                
                justify-content: space-between;
                align-items: center;
                flex-shrink: 0;
            }

            .notifdropdown {
                position: absolute;
                top: 10px;
                left: 500px;
                z-index: 2;
            }
            .btn-outline-warning {
                width: 50px;
                height: 25px;
                font-size: 10px;
                text-align: center;
                padding: 5px;
            }
            .btn-outline-danger {
                width: 50px;
                height: 25px;
                font-size: 10px;
                text-align: center;
                padding: 5px;
            }
            .btn-primary {
                position: absolute;
                text-align: center;
                border:none;
                top: 100px;
                right: 220px;
                height: 40px;
                padding-top: 10px;
                border-radius: 4px;
                background: #EFF0FF;
                color: #000;
                font-size: 14px;
                font-style: normal;
                line-height: normal;
            }
            .btn-primary:hover {
                background-color: #2D349A;
                color: white;
            }
            .dropdown {
                left: 15px;
                top: 220px;
                z-index: 2;
            }
            .custom-header {
                position: absolute;
                left: 0px;
                top: 0px;
                width: 1535px;
                height: 65px;
                flex-shrink: 0;
                background: #FFF;
                border-radius: 0px 0px 12px 12px;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                display: flex;
                justify-content: space-between;
                padding: 0 20px;
                z-index: 2;
            }
            img {
                position: absolute;
                width: 260px;
                height: 50px;
                left: 15px;
                top: 8px;
            }
            .side-bar{
                position: absolute;
                left: 0px;
                top: 45px;
                width: 260.877px;
                height: 1003px;
                flex-shrink: 0;
                background: #2D349A;
                z-index: 1;
            }
            .items a:hover{
                color: #4F74BB !important;
                text-decoration: none;
            }
            .general {
                position: absolute;
                justify-content: center;
                top: 80px;
                left: 300px;
                height: 180px;
                width: 180px;
                background: white;
                padding: 10px;
                border-radius: 8px;
            }
            .specific1 {
                position: absolute;
                justify-content: center;
                top: 80px;
                left: 500px;
                height: 180px;
                width: 180px;
                background: white;
                padding: 10px;
                border-radius: 8px;
            }
            .specific2 {
                position: absolute;
                justify-content: center;
                top: 280px;
                left: 300px;
                height: 180px;
                width: 180px;
                background: white;
                padding: 10px;
                border-radius: 8px;
            }
            .specific3 {
                position: absolute;
                justify-content: center;
                top: 280px;
                left: 500px;
                height: 180px;
                width: 180px;
                background: white;
                padding: 10px;
                border-radius: 8px;
            }
            .specific4 {
                position: absolute;
                justify-content: center;
                top: 480px;
                left: 300px;
                height: 180px;
                width: 180px;
                background: white;
                padding: 10px;
                border-radius: 8px;
            }
            .specific5 {
                position: absolute;
                justify-content: center;
                top: 480px;
                left: 500px;
                height: 180px;
                width: 180px;
                background: white;
                padding: 10px;
                border-radius: 8px;
            }
            .linegraph {
                position: absolute;
                top: 80px;
                right: 50px;
                width: 380px;
                height: 410px;
                border-radius: 8px;
                background: #E6EDFD;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            }
            .piegraph {
                position: absolute;
                top: 80px;
                right: 500px;
                width: 300px;
                height: 275px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 8px;
                background: #E6EDFD;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            }
            .calendar1 {
                position: absolute;
                justify-content: center;
                top: 480px;
                left: 900px;
                height: 300px;
                width: 300px;
                background: white;
                padding: 10px;
                border-radius: 8px;
            }
            .fc {
                margin: 0 auto;
            }
            .form-group {
                margin-bottom: 1rem;
            }
            
        </style>
    </head>
    <body>
        <header class="custom-header">
            <img src="/image/PLMLogo.png" alt="logo">
        </header>
        <div class="side-bar" style="padding: 10px;">
            <h2 style="color: white; text-align: right; font-size: 20px; padding-top: 80px; padding-right: 10px"><strong>Asset Management</strong></h2>
            <div class="items">
                <a class="main" href="/asset-view" style="color: white; background-color: transparent; display: block; text-align: right; padding-right: 10px; font-family: Arial">Main</a>
                <a class="issued" href="/purchase-order-view" style="color: white; background-color: transparent; display: block; text-align: right; padding-right: 10px; font-family: Arial">Purchase Order</a>
                <a class="delivered" href="/delivery-view" style="color: white; background-color: transparent; display: block; text-align: right; padding-right: 10px; font-family: Arial">Delivery</a>
                <a class="issuance" href="/issuance-view" style="color: white; background-color: transparent; display: block; text-align: right; padding-right: 10px; font-family: Arial">Issuance</a>
                <a class="reports&forms" href="asset-forms-and-reports-generation" style="color: #4F74BB; background-color: transparent; display: block; text-align: right; padding-right: 10px; font-family: Arial">Reports and Forms</a>
                <a class="archives" href="<?php echo e(route('pages.supplies.archive')); ?>" style="color: white; background-color: transparent; display: block; text-align: right; padding-right: 10px; font-family: Arial">Archive</a>
            </div>
        </div>
        <div class="general">
            <label style="position: absolute; top: 30px; font-size: 25px; left: 0px; text-align: center; color: #4F74BB;"><strong>General Report</strong></label>
            <a href="<?php echo e(url('/assets-pdf')); ?>" class="btn btn-outline-primary" style="position: absolute; top: 125px; right: 45px;">Generate</a>
        </div>
        <!--
        <div class="specific1">
            <label style="position: absolute; top: 30px; font-size: 25px; left: 0px; text-align: center; color: #4F74BB;"><strong>Purchase Request</strong></label>
            <a class="btn btn-outline-primary" style="position: absolute; top: 125px; right: 45px;" href="<?php echo e(url('/purchase-request-form')); ?>">Generate</a>
        </div>
        <div class="specific2">
            <label style="position: absolute; top: 30px; font-size: 25px; left: 0px; text-align: center; color: #4F74BB;"><strong>Requisition and Issue Slip</strong></label>
            <a href="<?php echo e(url('/requisition-issue-form')); ?>" class="btn btn-outline-primary" style="position: absolute; top: 125px; right: 45px;">Generate</a>
        </div>
        <div class="specific3">
            <label style="position: absolute; top: 10px; font-size: 25px; left: 0px; text-align: center; color: #4F74BB;"><strong>Inspection & Acceptance Report</strong></label>
            <a href="<?php echo e(url('/inspection-acceptance-report')); ?>" class="btn btn-outline-primary" style="position: absolute; top: 125px; right: 45px;">Generate</a>
        </div>
        
        <div class="specific4">
            <label style="position: absolute; top: 30px; font-size: 25px; left: 0px; text-align: center; color: #4F74BB;"><strong>Report...</strong></label>
            <a href="" class="btn btn-outline-primary" style="position: absolute; top: 125px; right: 45px;">Generate</a>
        </div>
        <div class="specific5">
            <label style="position: absolute; top: 30px; font-size: 25px; left: 0px; text-align: center; color: #4F74BB;"><strong>Report...</strong></label>
            <a href="" class="btn btn-outline-primary" style="position: absolute; top: 125px; right: 45px;">Generate</a>
        </div>
        -->
        <div class="linegraph">
            <h6 style="text-align: center;"><strong>Delivery and Issuance Summary</strong></h6>
        <canvas id="myChart"></canvas>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($months, 15, 512) ?>,
                datasets: [{
                    label: 'Delivery',
                    data: <?php echo json_encode($deliveredData, 15, 512) ?>,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false
                }, 
                {
                    label: 'Issuance',
                    data: <?php echo json_encode($issuedData, 15, 512) ?>,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    fill: false
                }]
                },
                options: {
                    aspectRatio: 1,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                                stepSize: 200,
                                }
                        }
                        }
                        }
                        });
        </script>
    
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\softeng\laravel\plm_inventory\resources\views/pages/assets/assetsforms.blade.php ENDPATH**/ ?>