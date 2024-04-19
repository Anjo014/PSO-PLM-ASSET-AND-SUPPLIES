<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <title>PLM | Delivered Supplies Edit</title>
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
                top: 100px;
                right: 150px;
                width: 1250px;
                height: 520px;
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
                gap: -5px;
                flex-direction: column;
            }
            .input-group label {
                flex-shrink: 0;
                width: 150px; /* adjust as needed */
            }
            .btn1-primary {
                position: fixed;
                top: 630px;
                left: 315px;
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
                top: 630px;
                left: 135px;
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
            <a href="{{url('delivered-supplies-view')}}" class="btn btn1-primary">Cancel</a>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1><strong>Edit Delivered Supply</strong></h1>
                            <form action="{{url('/updatedelivered/'.$delivered->stock_no)}}" class="form-body" method="POST" autocomplete="off">
                                @csrf 
                                @method ('PUT')
                                <div class="input-group">
                                    <div class="input-group">
                                        <label for="stock_no"><strong>Stock No.:</strong></label>
                                        <input type="text" name="stock_no" value="{{ $delivered->stock_no }}" readonly style="width: 345px; height: 32px; background-color: rgba(209,223,255,255); border: 0.5px solid #000; border-radius: 2px; padding-left: 12px; color: rgba(86,93,103,255)">
                                    </div>
                                    <div class="input-group">
                                        <label for="description"><strong>Item Description:</strong></label>
                                        <input type="text" name="description" value="{{ $delivered->description }}" readonly style="width: 345px; height: 32px; background-color: rgba(209,223,255,255); border: 0.5px solid #000; border-radius: 2px; padding-left: 12px; color: rgba(86,93,103,255)">
                                    </div>
                                    <div class="input-group">
                                        <label for="delivery_date"><strong>Delivery Date:</strong></label>
                                        <input type="date" name="delivery_date" value="{{ $delivered->delivery_date }}" class="form-control @error('delivery_date') is-invalid @enderror">
                                        @error('delivery_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <label for="actual_delivery_date"><strong>Actual Delivery Date:</strong></label>
                                        <input type="date" name="actual_delivery_date" value="{{ $delivered->actual_delivery_date }}" class="form-control @error('actual_delivery_date') is-invalid @enderror">
                                        @error('actual_delivery_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <label for="acceptance_date"><strong>Acceptance Date:</strong></label>
                                        <input type="date" name="acceptance_date" value="{{ $delivered->acceptance_date }}" class="form-control @error('acceptance_date') is-invalid @enderror">
                                        @error('acceptance_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <label for="delivered"><strong>Qunatity Delivered:</strong></label>
                                        <input type="text" name="delivered" value="{{ $delivered->delivered }}" class="form-control @error('delivered') is-invalid @enderror">
                                        @error('delivered')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div> 
                                    <div class="input-group">
                                        <label for="iar_no"><strong>IAR No.:</strong></label>
                                        <input type="text" id="iar_no" name='iar_no' value="{{ $delivered->iar_no }}" class="form-control @error('iar_no') is-invalid @enderror">
                                        <button id="generate-iar-no" type="button">Generate IAR No</button>
                                        @error('iar_no')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <label for="item_no"><strong>Item No.:</strong></label>
                                        <input type="text" id="item_no" name='item_no' value="{{ old('item_no', $delivered->item_no) }}" class="form-control @error('item_no') is-invalid @enderror">
                                        <button id="generate-item-no" type="button">Generate Item No</button>
                                        @error('item_no')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <label for="dr_no"><strong>DR No.:</strong></label>
                                        <input type="text" name="dr_no" value="{{ $delivered->dr_no }}" class="form-control @error('dr_no') is-invalid @enderror">
                                        @error('dr_no')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group1">
                                    <div class="input-group">
                                        <label for="unit"><strong>Unit:</strong></label>
                                        <input type="text" name="unit" value="{{ $delivered->unit }}" readonly style="width: 345px; height: 32px; background-color: rgba(209,223,255,255); border: 0.5px solid #000; border-radius: 2px; padding-left: 12px; color: rgba(86,93,103,255)">
                                    </div>
                                    <div class="input-group">
                                        <label for="check_no"><strong>Check No.:</strong></label>
                                        <input type="text" name="check_no" value="{{ $delivered->check_no }}" class="form-control @error('check_no') is-invalid @enderror">
                                        @error('check_no')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <label for="po_no"><strong>PO No.:</strong></label>
                                        <input type="text" name="po_no" value="{{ $delivered->po_no }}" class="form-control @error('po_no') is-invalid @enderror">
                                        @error('po_no')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                    <label for="po_date"><strong>PO Date:</strong></label>
                                        <input type="date" name="po_date" value="{{ $delivered->po_date }}" class="form-control @error('po_date') is-invalid @enderror">
                                        @error('po_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group"> 
                                        <label for="po_amount"><strong>PO Amount:</strong></label>
                                        <input type="text" name="po_amount" value="{{ $delivered->po_amount }}" class="form-control @error('po_amount') is-invalid @enderror">
                                        @error('po_amount')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group"> 
                                        <label for="pr_no"><strong>PR No.:</strong></label>
                                        <input type="text" name="pr_no" value="{{ $delivered->pr_no }}" class="form-control @error('pr_no') is-invalid @enderror">
                                        @error('pr_no')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group"> 
                                        <label for="price_per_purchase_request"><strong>Price Per Purchase Request:</strong></label>
                                        <input type="text" name="price_per_purchase_request" value="{{ $delivered->price_per_purchase_request }}" class="form-control @error('price_per_purchase_request') is-invalid @enderror">
                                        @error('price_per_purchase_request')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group"> 
                                        <label for="bur"><strong>BUR:</strong></label>
                                        <input type="text" name="bur" value="{{ $delivered->bur }}" class="form-control @error('bur') is-invalid @enderror">
                                        @error('bur')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="input-group"> 
                                        <label for="remarks"><strong>Remark:</strong></label>
                                        <input type="text" name="remarks" value="{{ $delivered->remarks }}" class="form-control @error('remarks') is-invalid @enderror">
                                        @error('remarks')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
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
            <script>
                document.querySelector('form').addEventListener('submit', function(event) {
                    var item_no = document.querySelector('input[name="item_no"]').value;
                    var description = document.querySelector('input[name="description"]').value;
                    var unit = document.querySelector('input[name="unit"]').value;
                    var dr_no = document.querySelector('input[name="dr_no"]').value;
                    var check_no = document.querySelector('input[name="check_no"]').value;
                    var po_no = document.querySelector('input[name="po_no"]').value;
                    var po_date = document.querySelector('input[name="po_date"]').value;
                    var po_amount = document.querySelector('input[name="po_amount"]').value;
                    var pr_no = document.querySelector('input[name="pr_no"]').value;
                    var price_per_purchase_request = document.querySelector('input[name="price_per_purchase_request"]').value;
                    var bur = document.querySelector('input[name="bur"]').value;
                    var remark = document.querySelector('input[name="remark"]').value;

                    var message = 'Are you sure you want to EDIT this item:\n' +
                        'Item No: ' + item_no + '\n' +
                        'Description: ' + description + '\n' +
                        'Unit: ' + unit + '\n' +
                        'DR No: ' + dr_no + '\n' +
                        'Check No: ' + check_no + '\n' +
                        'PO No: ' + po_no + '\n' +
                        'PO Date: ' + po_date + '\n' +
                        'PO Amount: ' + po_amount + '\n' +
                        'PR No: ' + pr_no + '\n' +
                        'Price Per Purchase Request: ' + price_per_purchase_request + '\n' +
                        'BUR: ' + bur + '\n' +
                        'Remark: ' + remark +
                        "\nif not select 'cancel'";

                    if (!confirm(message)) {
                        event.preventDefault();
                    }
                });
            </script>
            <script>
                document.getElementById('generate-iar-no').addEventListener('click', function() {
                    fetch('/generate-iar-no')
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('iar_no').value = data.iar_no;
                        });
                });
            </script>
            <script>
            document.getElementById('generate-item-no').addEventListener('click', function() {
                    fetch('/generate-item-no')
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('item_no').value = data.item_no;
                        });
                });
            </script>
        </script>
    </body>
</html>