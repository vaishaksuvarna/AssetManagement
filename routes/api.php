<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\VendorTypeController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\AssettypeController;
use App\Http\Controllers\LabelController;



Route::middleware(['auth:sanctum'])->group(function () {
    //All secure URL's
          
    });

//users
Route::post('user/add',[UsersController::class,'add']);
Route::post('user/{id}/update',[UsersController::class,'update']);
Route::post('user/{id}/delete',[UsersController::class,'destroy']);
Route::post('user/login',[UsersController::class,'loginUser']);
Route::post('user/{id}/block',[UsersController::class,'block']);
Route::post('user/showData',[UsersController::class,'ShowData']);


//vendor
Route::post('vendor/add', [VendorController::class, 'store']);
Route::post('vendor/{id}/update', [VendorController::class, 'update']);
Route::post('vendor/{id}/delete', [VendorController::class, 'destroy']);
Route::post('vendor/showData', [VendorController::class, 'showData']);
 
//VendorType
Route::post('vendorType/add', [VendorTypeController::class, 'store']);
Route::post('vendorType/showData', [VendorTypeController::class, 'showData']);


//Asset
Route::post('asset/add', [AssetController::class, 'store']);
Route::post('asset/{id}/update', [AssetController::class, 'update']);
Route::post('asset/{id}/delete', [AssetController::class, 'destroy']);
Route::post('get', [AssetController::class, 'get']);

//Asset_Type
Route::post('assetType/add',[AssettypeController::class,'add']);
Route::post('assetType/{id}/update',[AssettypeController::class,'update']);
Route::post('assetType/{id}/delete',[AssettypeController::class,'destroy']);
Route::post('assetType/showData',[AssettypeController::class,'ShowData']);

//Department
Route::post('department/add',[DepartmentController::class,'add']);
Route::post('department/{id}/update',[DepartmentController::class,'update']);
Route::post('department/{id}/delete',[DepartmentController::class,'destroy']);
Route::post('department/showData',[DepartmentController::class,'ShowData']);


//Section
Route::post('section/add',[SectionController::class,'add']);
Route::post('section/{id}/update',[SectionController::class,'update']);
Route::post('section/{id}/delete',[SectionController::class,'destroy']);
Route::post('section/showData',[SectionController::class,'ShowData']);

//Lab
Route::post('Label/add',[LabelController::class,'store']);
Route::post('Label/{id}/delete',[LabelController::class,'destroy']);
Route::post('Label/showData',[LabelController::class,'ShowData']);