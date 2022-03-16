<?php

use App\Http\Controllers\Admin\ComposePageController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\MailBoxController;
use App\Http\Controllers\Admin\ReadMailController;
use App\Http\Controllers\Admin\MembersPageController;
use App\Http\Controllers\Admin\AddController;
use App\Http\Controllers\Admin\CreateProductsController;
use App\Http\Controllers\Admin\GenerateDiscountCodeController;
use App\Http\Controllers\Admin\ListVoucherCodeController;
use App\Http\Controllers\Admin\OrderManagementCodeController;
use App\Http\Controllers\Admin\SalesStatementController;
use App\Http\Controllers\Admin\DeleteProductsController;
use App\Http\Controllers\Admin\ListOfProductsController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('//', [DashBoardController::class, 'index'])->name('//');
    Route::get('read-mail', [ReadMailController::class, 'index'])->name('read-mail');
    Route::get('mailbox', [MailBoxController::class, 'index'])->name('mailbox');
    Route::get('compose', [ComposePageController::class, 'index'])->name('compose');
    Route::get('members', [MembersPageController::class, 'index'])->name('members');
    Route::get('Create-Account', [AddController::class, 'index'])->name('add');
    Route::get('create-products', [CreateProductsController::class, 'index'])->name('create-products');
    Route::get('create-voucher', [GenerateDiscountCodeController::class, 'index'])->name('generate-discount-code');
    Route::get('list-voucher', [ListVoucherCodeController::class, 'index'])->name('list-voucher');
    Route::get('order-management', [OrderManagementCodeController::class, 'index'])->name('order-management');
    Route::get('sales-statistics', [SalesStatementController::class, 'index'])->name('sales-statistics');
    Route::get('delete-products', [DeleteProductsController::class, 'index'])->name('delete-products');
    Route::get('list-of-products', [ListOfProductsController::class, 'index'])->name('list-of-products');
    Route::get('login', [LoginController::class, 'index'])->name('login');
    // admin/order/
//    Route::name('order-')->prefix('order')->group(function () {
//        Route::get('management', [OrderManagementCodeController::class, 'index'])->name('management');
//        // order/management (uri) => order-management (name)
//    });
});

