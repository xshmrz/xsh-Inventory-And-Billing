<?php
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
Route::group(['as' => 'site.', 'prefix' => '', 'middleware' => ['MiddlewareSite']], function () {
Route::get('', ['App\Http\Controllers\Site\Home', 'index'])->name('index');
Route::resource('account', 'App\Http\Controllers\Site\Base\Account');
Route::resource('account-balance', 'App\Http\Controllers\Site\Base\AccountBalance');
Route::resource('account-contact', 'App\Http\Controllers\Site\Base\AccountContact');
Route::resource('account-group', 'App\Http\Controllers\Site\Base\AccountGroup');
Route::resource('account-movement', 'App\Http\Controllers\Site\Base\AccountMovement');
Route::resource('account-type', 'App\Http\Controllers\Site\Base\AccountType');
Route::resource('bank-account', 'App\Http\Controllers\Site\Base\BankAccount');
Route::resource('bank-movement', 'App\Http\Controllers\Site\Base\BankMovement');
Route::resource('cash-movement', 'App\Http\Controllers\Site\Base\CashMovement');
Route::resource('cash-type', 'App\Http\Controllers\Site\Base\CashType');
Route::resource('credit-card-info', 'App\Http\Controllers\Site\Base\CreditCardInfo');
Route::resource('expense', 'App\Http\Controllers\Site\Base\Expense');
Route::resource('income', 'App\Http\Controllers\Site\Base\Income');
Route::resource('income-expense-category', 'App\Http\Controllers\Site\Base\IncomeExpenseCategory');
Route::resource('income-expense-type', 'App\Http\Controllers\Site\Base\IncomeExpenseType');
Route::resource('invoice', 'App\Http\Controllers\Site\Base\Invoice');
Route::resource('invoice-detail', 'App\Http\Controllers\Site\Base\InvoiceDetail');
Route::resource('invoice-payment-method', 'App\Http\Controllers\Site\Base\InvoicePaymentMethod');
Route::resource('invoice-series', 'App\Http\Controllers\Site\Base\InvoiceSeries');
Route::resource('invoice-status', 'App\Http\Controllers\Site\Base\InvoiceStatus');
Route::resource('invoice-type', 'App\Http\Controllers\Site\Base\InvoiceType');
Route::resource('migration', 'App\Http\Controllers\Site\Base\Migration');
Route::resource('online-payment-transaction', 'App\Http\Controllers\Site\Base\OnlinePaymentTransaction');
Route::resource('payment', 'App\Http\Controllers\Site\Base\Payment');
Route::resource('payment-method', 'App\Http\Controllers\Site\Base\PaymentMethod');
Route::resource('payment-provider', 'App\Http\Controllers\Site\Base\PaymentProvider');
Route::resource('payment-status', 'App\Http\Controllers\Site\Base\PaymentStatus');
Route::resource('permission', 'App\Http\Controllers\Site\Base\Permission');
Route::resource('product', 'App\Http\Controllers\Site\Base\Product');
Route::resource('product-brand', 'App\Http\Controllers\Site\Base\ProductBrand');
Route::resource('product-category', 'App\Http\Controllers\Site\Base\ProductCategory');
Route::resource('product-feature', 'App\Http\Controllers\Site\Base\ProductFeature');
Route::resource('refund-transaction', 'App\Http\Controllers\Site\Base\RefundTransaction');
Route::resource('role', 'App\Http\Controllers\Site\Base\Role');
Route::resource('settings', 'App\Http\Controllers\Site\Base\Settings');
Route::resource('stock-count', 'App\Http\Controllers\Site\Base\StockCount');
Route::resource('stock-movement', 'App\Http\Controllers\Site\Base\StockMovement');
Route::resource('stock-warehouse', 'App\Http\Controllers\Site\Base\StockWarehouse');
Route::resource('user', 'App\Http\Controllers\Site\Base\User');
Route::resource('user-activity-log', 'App\Http\Controllers\Site\Base\UserActivityLog');
Route::resource('user-role', 'App\Http\Controllers\Site\Base\UserRole');
});
Route::group(['as' => 'panel.', 'prefix' => 'panel', 'middleware' => ['MiddlewarePanel']], function () {
Route::get('', ['App\Http\Controllers\Panel\Home', 'index'])->name('index');
Route::resource('account', 'App\Http\Controllers\Panel\Base\Account');
Route::resource('account-balance', 'App\Http\Controllers\Panel\Base\AccountBalance');
Route::resource('account-contact', 'App\Http\Controllers\Panel\Base\AccountContact');
Route::resource('account-group', 'App\Http\Controllers\Panel\Base\AccountGroup');
Route::resource('account-movement', 'App\Http\Controllers\Panel\Base\AccountMovement');
Route::resource('account-type', 'App\Http\Controllers\Panel\Base\AccountType');
Route::resource('bank-account', 'App\Http\Controllers\Panel\Base\BankAccount');
Route::resource('bank-movement', 'App\Http\Controllers\Panel\Base\BankMovement');
Route::resource('cash-movement', 'App\Http\Controllers\Panel\Base\CashMovement');
Route::resource('cash-type', 'App\Http\Controllers\Panel\Base\CashType');
Route::resource('credit-card-info', 'App\Http\Controllers\Panel\Base\CreditCardInfo');
Route::resource('expense', 'App\Http\Controllers\Panel\Base\Expense');
Route::resource('income', 'App\Http\Controllers\Panel\Base\Income');
Route::resource('income-expense-category', 'App\Http\Controllers\Panel\Base\IncomeExpenseCategory');
Route::resource('income-expense-type', 'App\Http\Controllers\Panel\Base\IncomeExpenseType');
Route::resource('invoice', 'App\Http\Controllers\Panel\Base\Invoice');
Route::resource('invoice-detail', 'App\Http\Controllers\Panel\Base\InvoiceDetail');
Route::resource('invoice-payment-method', 'App\Http\Controllers\Panel\Base\InvoicePaymentMethod');
Route::resource('invoice-series', 'App\Http\Controllers\Panel\Base\InvoiceSeries');
Route::resource('invoice-status', 'App\Http\Controllers\Panel\Base\InvoiceStatus');
Route::resource('invoice-type', 'App\Http\Controllers\Panel\Base\InvoiceType');
Route::resource('migration', 'App\Http\Controllers\Panel\Base\Migration');
Route::resource('online-payment-transaction', 'App\Http\Controllers\Panel\Base\OnlinePaymentTransaction');
Route::resource('payment', 'App\Http\Controllers\Panel\Base\Payment');
Route::resource('payment-method', 'App\Http\Controllers\Panel\Base\PaymentMethod');
Route::resource('payment-provider', 'App\Http\Controllers\Panel\Base\PaymentProvider');
Route::resource('payment-status', 'App\Http\Controllers\Panel\Base\PaymentStatus');
Route::resource('permission', 'App\Http\Controllers\Panel\Base\Permission');
Route::resource('product', 'App\Http\Controllers\Panel\Base\Product');
Route::resource('product-brand', 'App\Http\Controllers\Panel\Base\ProductBrand');
Route::resource('product-category', 'App\Http\Controllers\Panel\Base\ProductCategory');
Route::resource('product-feature', 'App\Http\Controllers\Panel\Base\ProductFeature');
Route::resource('refund-transaction', 'App\Http\Controllers\Panel\Base\RefundTransaction');
Route::resource('role', 'App\Http\Controllers\Panel\Base\Role');
Route::resource('settings', 'App\Http\Controllers\Panel\Base\Settings');
Route::resource('stock-count', 'App\Http\Controllers\Panel\Base\StockCount');
Route::resource('stock-movement', 'App\Http\Controllers\Panel\Base\StockMovement');
Route::resource('stock-warehouse', 'App\Http\Controllers\Panel\Base\StockWarehouse');
Route::resource('user', 'App\Http\Controllers\Panel\Base\User');
Route::resource('user-activity-log', 'App\Http\Controllers\Panel\Base\UserActivityLog');
Route::resource('user-role', 'App\Http\Controllers\Panel\Base\UserRole');
});
Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard', 'middleware' => ['MiddlewareDashboard']], function () {
Route::get('', ['App\Http\Controllers\Dashboard\Home', 'index'])->name('index');
Route::resource('account', 'App\Http\Controllers\Dashboard\Base\Account');
Route::resource('account-balance', 'App\Http\Controllers\Dashboard\Base\AccountBalance');
Route::resource('account-contact', 'App\Http\Controllers\Dashboard\Base\AccountContact');
Route::resource('account-group', 'App\Http\Controllers\Dashboard\Base\AccountGroup');
Route::resource('account-movement', 'App\Http\Controllers\Dashboard\Base\AccountMovement');
Route::resource('account-type', 'App\Http\Controllers\Dashboard\Base\AccountType');
Route::resource('bank-account', 'App\Http\Controllers\Dashboard\Base\BankAccount');
Route::resource('bank-movement', 'App\Http\Controllers\Dashboard\Base\BankMovement');
Route::resource('cash-movement', 'App\Http\Controllers\Dashboard\Base\CashMovement');
Route::resource('cash-type', 'App\Http\Controllers\Dashboard\Base\CashType');
Route::resource('credit-card-info', 'App\Http\Controllers\Dashboard\Base\CreditCardInfo');
Route::resource('expense', 'App\Http\Controllers\Dashboard\Base\Expense');
Route::resource('income', 'App\Http\Controllers\Dashboard\Base\Income');
Route::resource('income-expense-category', 'App\Http\Controllers\Dashboard\Base\IncomeExpenseCategory');
Route::resource('income-expense-type', 'App\Http\Controllers\Dashboard\Base\IncomeExpenseType');
Route::resource('invoice', 'App\Http\Controllers\Dashboard\Base\Invoice');
Route::resource('invoice-detail', 'App\Http\Controllers\Dashboard\Base\InvoiceDetail');
Route::resource('invoice-payment-method', 'App\Http\Controllers\Dashboard\Base\InvoicePaymentMethod');
Route::resource('invoice-series', 'App\Http\Controllers\Dashboard\Base\InvoiceSeries');
Route::resource('invoice-status', 'App\Http\Controllers\Dashboard\Base\InvoiceStatus');
Route::resource('invoice-type', 'App\Http\Controllers\Dashboard\Base\InvoiceType');
Route::resource('migration', 'App\Http\Controllers\Dashboard\Base\Migration');
Route::resource('online-payment-transaction', 'App\Http\Controllers\Dashboard\Base\OnlinePaymentTransaction');
Route::resource('payment', 'App\Http\Controllers\Dashboard\Base\Payment');
Route::resource('payment-method', 'App\Http\Controllers\Dashboard\Base\PaymentMethod');
Route::resource('payment-provider', 'App\Http\Controllers\Dashboard\Base\PaymentProvider');
Route::resource('payment-status', 'App\Http\Controllers\Dashboard\Base\PaymentStatus');
Route::resource('permission', 'App\Http\Controllers\Dashboard\Base\Permission');
Route::resource('product', 'App\Http\Controllers\Dashboard\Base\Product');
Route::resource('product-brand', 'App\Http\Controllers\Dashboard\Base\ProductBrand');
Route::resource('product-category', 'App\Http\Controllers\Dashboard\Base\ProductCategory');
Route::resource('product-feature', 'App\Http\Controllers\Dashboard\Base\ProductFeature');
Route::resource('refund-transaction', 'App\Http\Controllers\Dashboard\Base\RefundTransaction');
Route::resource('role', 'App\Http\Controllers\Dashboard\Base\Role');
Route::resource('settings', 'App\Http\Controllers\Dashboard\Base\Settings');
Route::resource('stock-count', 'App\Http\Controllers\Dashboard\Base\StockCount');
Route::resource('stock-movement', 'App\Http\Controllers\Dashboard\Base\StockMovement');
Route::resource('stock-warehouse', 'App\Http\Controllers\Dashboard\Base\StockWarehouse');
Route::resource('user', 'App\Http\Controllers\Dashboard\Base\User');
Route::resource('user-activity-log', 'App\Http\Controllers\Dashboard\Base\UserActivityLog');
Route::resource('user-role', 'App\Http\Controllers\Dashboard\Base\UserRole');
});
Route::group(['as' => 'api.', 'prefix' => 'api', 'middleware' => ['MiddlewareApi']], function () {
Route::resource('account', 'App\Http\Controllers\Api\Base\Account');
Route::resource('account-balance', 'App\Http\Controllers\Api\Base\AccountBalance');
Route::resource('account-contact', 'App\Http\Controllers\Api\Base\AccountContact');
Route::resource('account-group', 'App\Http\Controllers\Api\Base\AccountGroup');
Route::resource('account-movement', 'App\Http\Controllers\Api\Base\AccountMovement');
Route::resource('account-type', 'App\Http\Controllers\Api\Base\AccountType');
Route::resource('bank-account', 'App\Http\Controllers\Api\Base\BankAccount');
Route::resource('bank-movement', 'App\Http\Controllers\Api\Base\BankMovement');
Route::resource('cash-movement', 'App\Http\Controllers\Api\Base\CashMovement');
Route::resource('cash-type', 'App\Http\Controllers\Api\Base\CashType');
Route::resource('credit-card-info', 'App\Http\Controllers\Api\Base\CreditCardInfo');
Route::resource('expense', 'App\Http\Controllers\Api\Base\Expense');
Route::resource('income', 'App\Http\Controllers\Api\Base\Income');
Route::resource('income-expense-category', 'App\Http\Controllers\Api\Base\IncomeExpenseCategory');
Route::resource('income-expense-type', 'App\Http\Controllers\Api\Base\IncomeExpenseType');
Route::resource('invoice', 'App\Http\Controllers\Api\Base\Invoice');
Route::resource('invoice-detail', 'App\Http\Controllers\Api\Base\InvoiceDetail');
Route::resource('invoice-payment-method', 'App\Http\Controllers\Api\Base\InvoicePaymentMethod');
Route::resource('invoice-series', 'App\Http\Controllers\Api\Base\InvoiceSeries');
Route::resource('invoice-status', 'App\Http\Controllers\Api\Base\InvoiceStatus');
Route::resource('invoice-type', 'App\Http\Controllers\Api\Base\InvoiceType');
Route::resource('migration', 'App\Http\Controllers\Api\Base\Migration');
Route::resource('online-payment-transaction', 'App\Http\Controllers\Api\Base\OnlinePaymentTransaction');
Route::resource('payment', 'App\Http\Controllers\Api\Base\Payment');
Route::resource('payment-method', 'App\Http\Controllers\Api\Base\PaymentMethod');
Route::resource('payment-provider', 'App\Http\Controllers\Api\Base\PaymentProvider');
Route::resource('payment-status', 'App\Http\Controllers\Api\Base\PaymentStatus');
Route::resource('permission', 'App\Http\Controllers\Api\Base\Permission');
Route::resource('product', 'App\Http\Controllers\Api\Base\Product');
Route::resource('product-brand', 'App\Http\Controllers\Api\Base\ProductBrand');
Route::resource('product-category', 'App\Http\Controllers\Api\Base\ProductCategory');
Route::resource('product-feature', 'App\Http\Controllers\Api\Base\ProductFeature');
Route::resource('refund-transaction', 'App\Http\Controllers\Api\Base\RefundTransaction');
Route::resource('role', 'App\Http\Controllers\Api\Base\Role');
Route::resource('settings', 'App\Http\Controllers\Api\Base\Settings');
Route::resource('stock-count', 'App\Http\Controllers\Api\Base\StockCount');
Route::resource('stock-movement', 'App\Http\Controllers\Api\Base\StockMovement');
Route::resource('stock-warehouse', 'App\Http\Controllers\Api\Base\StockWarehouse');
Route::resource('user', 'App\Http\Controllers\Api\Base\User');
Route::resource('user-activity-log', 'App\Http\Controllers\Api\Base\UserActivityLog');
Route::resource('user-role', 'App\Http\Controllers\Api\Base\UserRole');
});
Route::group(['as' => 'site.', 'prefix' => '', 'middleware' => []], function () {
Route::get('login', ['App\Http\Controllers\Site\Authorize', 'login'])->name('login');
Route::post('login', ['App\Http\Controllers\Site\Authorize', 'loginDo'])->name('loginDo');
Route::get('register', ['App\Http\Controllers\Site\Authorize', 'register'])->name('register');
Route::post('register', ['App\Http\Controllers\Site\Authorize', 'registerDo'])->name('registerDo');
Route::get('lost-password', ['App\Http\Controllers\Site\Authorize', 'lostPassword'])->name('lostPassword');
Route::post('lost-password', ['App\Http\Controllers\Site\Authorize', 'lostPasswordDo'])->name('lostPasswordDo');
Route::get('logout', ['App\Http\Controllers\Site\Authorize', 'logout'])->name('logout');
Route::post('logout', ['App\Http\Controllers\Site\Authorize', 'logoutDo'])->name('logoutDo');
});
Route::group(['as' => 'panel.', 'prefix' => 'panel', 'middleware' => []], function () {
Route::get('login', ['App\Http\Controllers\Panel\Authorize', 'login'])->name('login');
Route::post('login', ['App\Http\Controllers\Panel\Authorize', 'loginDo'])->name('loginDo');
Route::get('register', ['App\Http\Controllers\Panel\Authorize', 'register'])->name('register');
Route::post('register', ['App\Http\Controllers\Panel\Authorize', 'registerDo'])->name('registerDo');
Route::get('lost-password', ['App\Http\Controllers\Panel\Authorize', 'lostPassword'])->name('lostPassword');
Route::post('lost-password', ['App\Http\Controllers\Panel\Authorize', 'lostPasswordDo'])->name('lostPasswordDo');
Route::get('logout', ['App\Http\Controllers\Panel\Authorize', 'logout'])->name('logout');
Route::post('logout', ['App\Http\Controllers\Panel\Authorize', 'logoutDo'])->name('logoutDo');
});
Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard', 'middleware' => []], function () {
Route::get('login', ['App\Http\Controllers\Dashboard\Authorize', 'login'])->name('login');
Route::post('login', ['App\Http\Controllers\Dashboard\Authorize', 'loginDo'])->name('loginDo');
Route::get('register', ['App\Http\Controllers\Dashboard\Authorize', 'register'])->name('register');
Route::post('register', ['App\Http\Controllers\Dashboard\Authorize', 'registerDo'])->name('registerDo');
Route::get('lost-password', ['App\Http\Controllers\Dashboard\Authorize', 'lostPassword'])->name('lostPassword');
Route::post('lost-password', ['App\Http\Controllers\Dashboard\Authorize', 'lostPasswordDo'])->name('lostPasswordDo');
Route::get('logout', ['App\Http\Controllers\Dashboard\Authorize', 'logout'])->name('logout');
Route::post('logout', ['App\Http\Controllers\Dashboard\Authorize', 'logoutDo'])->name('logoutDo');
});
Route::group(['as' => 'api.', 'prefix' => 'api', 'middleware' => []], function () {
Route::get('login', ['App\Http\Controllers\Api\Authorize', 'login'])->name('login');
Route::post('login', ['App\Http\Controllers\Api\Authorize', 'loginDo'])->name('loginDo');
Route::get('register', ['App\Http\Controllers\Api\Authorize', 'register'])->name('register');
Route::post('register', ['App\Http\Controllers\Api\Authorize', 'registerDo'])->name('registerDo');
Route::get('lost-password', ['App\Http\Controllers\Api\Authorize', 'lostPassword'])->name('lostPassword');
Route::post('lost-password', ['App\Http\Controllers\Api\Authorize', 'lostPasswordDo'])->name('lostPasswordDo');
Route::get('logout', ['App\Http\Controllers\Api\Authorize', 'logout'])->name('logout');
Route::post('logout', ['App\Http\Controllers\Api\Authorize', 'logoutDo'])->name('logoutDo');
});
});