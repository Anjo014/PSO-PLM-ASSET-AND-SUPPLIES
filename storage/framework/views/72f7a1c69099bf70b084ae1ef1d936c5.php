<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <title>PLM | Supplies Main</title>

        <style>
            body {
                font-family: Arial;
                background-color: #4F74BB;
                margin: 0;
                padding: 20px;
                overflow: hidden;
            }

            .custom-header {
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

            .table-container {
                position: absolute;
                left: 300px; /* Adjust as needed */
                top: 180px; /* Adjust as needed */
                max-height: 500px; /* Adjust as needed */
                max-width: 1500px;
                overflow-y: auto;
                overflow-x: hidden;
                border-radius: 15px;
                background-color: white;
            }

            .table-container table {
                border-collapse: collapse;
                width: 1200px;
                height: 550px;
                border-radius: 15px;
                overflow: hidden;
                table-layout: fixed;
                
            }

            .table-container th, .table-container td {
                text-align: center;
                padding: 8px;
                border: 1px solid #ddd;
            }

            .table-container td{
                border-collapse: separate;
                word-wrap: break-word;
            }

            .table-container th {
                position: sticky;
                background-color: #e6edfd;
                font-weight: bold;
            }

            .table-container tbody tr:nth-child(odd) {
                background-color: white;
            }
            .table-container tbody tr:nth-child(even) {
                background-color: #f8f9fc;
            }
            .table-container tbody tr:hover {
                background-color: #dfe0e3;
            }

            .dropdown {
                position: absolute;
                top: 10px;
                left: 10px;
                z-index: 2;
            }
            .btn-outline-warning {
                width: 50px; /* Adjust as needed */
                height: 25px; /* Adjust as needed */
                font-size: 10px; /* Adjust as needed */
                text-align: center;
                padding: 5px;
            }
            .btn-outline-danger {
                width: 50px; /* Adjust as needed */
                height: 25px; /* Adjust as needed */
                font-size: 10px; /* Adjust as needed */
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
            .dropdown {
                left: 15px; /* Adjust as needed */
                top: 220px; /* Adjust as needed */
                z-index: 2;
            }
            .gendropdown {
                top: 100px;
                right: 35px;
                border-radius: 8px;
            }
            .custom-header {
                position: absolute;
                left: 0px; /* Adjust as needed */
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
                left: 0px; /* Adjust as needed */
                top: 45px;
                width: 260.877px;
                height: 1003px;
                flex-shrink: 0;
                background: #2D349A;
                z-index: 1;
            }
            .btn-edit, .btn-delete{
                background-color: #EFF0FF; 
                color: #000;
                font-size: 17px;
                padding: 5px 5px;
                border-radius: 8px;
                text-align: center;
            }
            .btn-edit:hover {
                background-color: green;
                color: white;
            }
            .btn-delete:hover {
                background-color: red;
                color: white;
            }
            .text2{
                position: fixed;
                width: 350px;
                height: 170px;
                left: 94%;
                top: 30px;
                font-family: Arial;
                font-style: normal;
                font-size: 15px;
                line-height: 36px;
                color: white;
                z-index: 3;
            }
            .text2 a{
                color: #2D349A;
                text-decoration: none;
            }
                
        </style>

    </head>
    <body>
            
        <header class="custom-header">
        
            <img src="/image/PLMLogo.png" alt="logo">
        </header>
        <div class="search-bar" style="position: fixed; top: 100px; left: 300px; border-radius: 9.574px; background: #EFF0FF; display: flex; width: 444px; height: 40px; padding: 4.608px 0px 4.608px 9.217px; justify-content: space-between; align-items: center; flex-shrink: 0;">
            <form action="/search" method="get" autocomplete="off">
                <input type="text" style="border: none; background-color: transparent; width: 430px; outline: none;" name="stock_no" placeholder="Search here..." onkeyup="search(event)">
            </form>
        </div>

        <div class="side-bar" style="padding: 10px;">
            <h1 style="color: white; text-align: center; font-size: 32px; padding-top: 30px;"><strong>PLM SUPPLIES</strong></h1>
            <h2 style="color: white; text-align: center; font-size: 20px;">Supplies Main</h2>
        </div>
        <div>
            <h4>
                <a href="<?php echo e(url('/supplies-create')); ?>" class="btn btn-primary"><strong>ADD SUPPLIES</strong></a>
            </h4>
        <div>
        <div class="success-alert" style="position: fixed; top:350px; right:600px; z-index: 4;">
            <?php if(session('status')): ?>
                <div id="alert" class="alert alert-success"><?php echo e(session('status')); ?></div>
                <script>
                    setTimeout(function() {
                        document.getElementById('alert').style.display = 'none';
                    }, 2000);
                </script>
            <?php endif; ?>
        </div>

        <div class="container">
            <div class="table-container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Stock No.</th>
                            <th>Description</th>
                            <th>Unit</th>
                            <th>Balance Before</th>
                            <th>Delivered</th>
                            <th>Issued</th>
                            <th>Balance After</th>
                            <th>Editted Last</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $suppliesmain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suppliesdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($suppliesdata->stock_no); ?></td>
                            <td><?php echo e($suppliesdata->description); ?></td>
                            <td><?php echo e($suppliesdata->unit); ?></td>
                            <td><?php echo e($suppliesdata->balance_before); ?></td>
                            <td><?php echo e($suppliesdata->delivered); ?></td>
                            <td><?php echo e($suppliesdata->issued); ?></td>
                            <td><?php echo e($suppliesdata->balance_after); ?></td>
                            <td><?php echo e($suppliesdata->updated_at); ?></td>
                            <td>
                                <a href="<?php echo e(url('supplies-edit/'.$suppliesdata->stock_no)); ?>" class="btn-edit" style="text-decoration: none;">Edit</a>
                                <a href="<?php echo e(url('supplies-delete/'.$suppliesdata->stock_no)); ?>" class="btn-delete" style="text-decoration: none;" onclick="return confirm('Are you sure you want to delete this data with Stock No. <?php echo e($suppliesdata->stock_no); ?> in the supplies?')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="dropdown" style="position: absolute; border:none;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; border: none; ">
                <strong>Supplies System</strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="top: 10px; left: 10px; background-color: transparent; border: none;">
                <a class="dropdown-item" href="/supplies" style="color: white; background-color: transparent;">Main</a>
                <a class="dropdown-item" href="/supplies-issued" style="color: white; background-color: transparent;">Issued</a>
                <a class="dropdown-item" href="/supplies-delivered" style="color: white; background-color: transparent;">Delivered</a>
            </div>
        </div>

        <div class="gendropdown" style="position: absolute; border:none;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #e6edfd; color: black; border: none; width: 160px; height: 40px;">
                <strong>Generate Form</strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="top: 10px; left: 10px; background-color: transparent; border: none;">
                <a class="dropdown-item" href="#" style="color: black; background-color: #e6edfd; border-radius: 8px 8px 0px 0px;">FORM1</a>
                <a class="dropdown-item" href="#" style="color: black; background-color: #e6edfd;">FORM2</a>
                <a class="dropdown-item" href="#" style="color: black; background-color: #e6edfd; border-radius: 0px 0px 8px 8px">FORM3</a>
            </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
            $("input[type='submit']").hover(function(){
                $(this).css("background-color", "#0069d9");
                $(this).css("color", "white"); // Change font color to white
                }, function(){
                $(this).css("background-color", "");
                $(this).css("color", ""); // Reset font color
            });
            });
        </script>
        <script>
        $(document).ready(function(){
            $(".gendropdown .dropdown-item").hover(function(){
                $(this).css("background-color", "#0069d9");
                $(this).css("color", "white");
                }, function(){
                $(this).css("background-color", "#e6edfd");
                $(this).css("color", "black");
            });
        });
        </script>
        <script>
            $(document).ready(function(){
                $(".dropdown .dropdown-item").hover(function(){
                    $(this).css("background-color", "white");
                    $(this).css("color", "#2D349A");
                    }, function(){
                    $(this).css("background-color", "transparent");
                    $(this).css("color", "white");
                });
            });
        </script>
        <script>
            $(document).ready(function(){
                $("#dropdownMenuButton1").hover(function(){
                    $(this).css("background-color", "#0069d9");
                    $(this).css("color", "white");
                    }, function(){
                    $(this).css("background-color", "#e6edfd");
                    $(this).css("color", "black");
                });
            });
        </script>
    <div class="text2"><a href="/mainpage">  <span> &#8592; </span> Logout</div>   
    </body>
</html><?php /**PATH C:\xampp\htdocs\softeng\laravel\plm_inventory\resources\views/pages/supplies/index.blade.php ENDPATH**/ ?>