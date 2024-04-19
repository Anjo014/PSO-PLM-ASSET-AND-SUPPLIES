<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\IssuedController;
use App\Http\Controllers\NotificationController;

use App\Http\Controllers\SuppliesController;
use App\Http\Controllers\AssetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//SUPPLIES
//MAIN TABLE
Route::resource('/displaysupplies', 'SuppliesController');
Route::get('supplies-view', 'SuppliesController@displaysupplies');
Route::get('/addsupplies', 'SuppliesController@addsupply');
Route::post('/storesupplies', 'SuppliesController@storenewsupply');
Route::get('/editsupplies/{pr_no}', 'SuppliesController@editsupply');
Route::put('/updatesupplies/{pr_no}', 'SuppliesController@updatesupply');
Route::get('/deletesupply/{stock_no}', 'SuppliesController@deletesupply');
Route::get('/searchsupply', 'SuppliesController@search');
//Route::get('/calendar', 'SuppliesController@calendar');

//No. Auto-generations
Route::get('/generate-iar-no', [SuppliesController::class, 'generateIARNo']);
Route::get('/generate-stock-no', [SuppliesController::class, 'generateStockNo']);
Route::get('/generate-item-no', [SuppliesController::class, 'generateItemNo']);

Route::get('/generate-item-no', [AssetController::class, 'generateItemNo']);
Route::get('/generate-class-id', [AssetController::class, 'generateClassId']);
Route::get('/generate-asset-iar-no', [AssetController::class, 'generateAssetIARNo']);
Route::get('/generate-property-no', [AssetController::class, 'generatePropertyNo']);
Route::get('/generate-par-no', [AssetController::class, 'generateParNo']);

//ISSUED TABLE
Route::get('issued-supplies-view', 'SuppliesController@displayissued');
Route::get('/searchissued', 'SuppliesController@issuedsearch');
Route::get('/editissued/{stock_no}', 'SuppliesController@editissued');
Route::put('/updateissued/{stock_no}', 'SuppliesController@updateissued');

//DELIVERED TABLE
Route::get('delivered-supplies-view', 'SuppliesController@displaydelivered');
Route::get('/searchdelivered', 'SuppliesController@deliveredsearch');
Route::get('/editdelivered/{stock_no}', 'SuppliesController@editdelivered');
Route::put('/updatedelivered/{stock_no}', 'SuppliesController@updatedelivered');

//FORMS
Route::get('supply-forms-and-reports-generation', 'SuppliesController@forms');
Route::get('/getItemDetails', 'ItemController@getItemDetails');

//ASSETS
//SUPPLIERS
Route::get('suppliers-view', 'SupplierController@displaySuppliers');
Route::get('/addsupplier', 'SupplierController@addSupplier');
Route::post('/storesupplier', 'SupplierController@storeSupplier');
Route::get('/deletesupplier/{id}', 'SupplierController@deleteSupplier');
//MAIN TABLE
Route::resource('/displayasset', 'AssetController');
Route::get('asset-view', 'AssetController@displayasset');
Route::get('/addasset', 'AssetController@addasset');
Route::post('/storeasset', 'AssetController@storenewasset');
Route::get('/editasset/{pr_no}', 'AssetController@editasset');
Route::put('/updateasset/{pr_no}', 'AssetController@updateasset');
Route::get('/deleteasset/{pr_no}', 'AssetController@deleteasset');
Route::get('/searchasset', 'AssetController@search');

//PURCHASE ORDER
Route::get('purchase-order-view', 'AssetController@displaypurchaseorder');
Route::get('/makepurchaseorder', 'AssetController@makePurchaseOrder');
Route::get('/storepurchaseorder', 'AssetController@storePurchaseOrder');
Route::get('/get-description/{itemNo}', 'AssetController@getDescription');

//DELIVERY TABLE
Route::get('delivery-view', 'AssetController@displaydelivery');
Route::get('/editdelivery/{item_no}', 'AssetController@editdelivery');
Route::put('/updatedelivery/{item_no}', 'AssetController@updatedelivery');

//ISSUANCE TABLE
Route::get('issuance-view', 'AssetController@displayissuance');
Route::get('/editissuance/{item_no}', 'AssetController@editissuance');
Route::put('/updateissuance/{item_no}', 'AssetController@updateissuance');

//LOGIN ROUTES
Route::get('/Supply-login', 'PagesController@index');
Route::get('/Asset-login', 'PagesController@assetindex');
Route::get('/register', [AuthController::class, 'register'])->name('register');  
Route::post('/register', [AuthController::class, 'registerPost'])->name('register'); 
Route::get('/login/{portal}', [AuthController::class, 'login'])->name('login');
Route::post('/login/{portal}', [AuthController::class, 'loginPost'])->name('login.post');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/mainpage', function () {
    return view('mainpage');
});

//USER PROFILE
Route::get('/user-profile', 'SuppliesController@displayprofile');

Route::get('/supplies/unit', 'SuppliesController@getUnit');

//ASSET FORMS
Route::get('asset-forms-and-reports-generation', 'AssetController@assetsforms');
Route::get('/assets-pdf', 'AssetController@downloadAssets');
Route::get('/assetpdf-view', 'AssetController@assetPDF');

//PDF
Route::get('/pdf-view', 'SuppliesController@displayPDF');
Route::get('/supplies-pdf', 'SuppliesController@downloadPDF');

Route::post('/generatePDF', 'SuppliesController@generatePDF')->name('generatePDF');
Route::post('/generatePDF1', 'SuppliesController@generatePDF1')->name('generatePDF1');
Route::post('/generatePDF2', 'SuppliesController@generatePDF2')->name('generatePDF2');

//FORMS PAGES
Route::get('/purchase-request-form', 'SuppliesController@PRForm');
Route::get('/requisition-issue-form', 'SuppliesController@RISForm');
Route::get('/inspection-acceptance-report', 'SuppliesController@IARForm');

//ARCHIVE
Route::get('/supplies/archive/{stock_no}/recover', 'SuppliesController@recover')->name('pages.supplies.recover');
Route::delete('/supplies/archive/{stock_no}/forceDelete', 'SuppliesController@forceDelete')->name('pages.supplies.forceDelete');
Route::get('/supplies/archive', 'SuppliesController@archive')->name('pages.supplies.archive');

Route::get('/assets/archive/{item_no}/recover', 'AssetController@recover')->name('pages.assets.recover');
Route::delete('/assets/archive/{item_no}/forceDelete', 'AssetController@forceDelete')->name('pages.assets.forceDelete');
Route::get('/assets/archive', 'AssetController@archive')->name('pages.assets.archive');


Route::get('/generate-barcode', 'SuppliesController@generateBarcode');



