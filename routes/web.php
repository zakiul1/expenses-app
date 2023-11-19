<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Employee\DepartmentController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Expenses\ExpenseCategory;
use App\Http\Controllers\Expenses\ExpensesTransaction;
use App\Http\Controllers\TtManage\BankController;
use App\Http\Controllers\TtManage\BuyerController;
use App\Http\Controllers\TtManage\FactoryController;
use App\Http\Controllers\TtManage\InvoiceController;
use App\Http\Controllers\TtManage\TtManageTransactionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/dashboard');
});



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/expenses', function () {
    return redirect('/dashboard');
});

Route::middleware(['auth', 'admin:admin'])->group(function () {
    Route::get('user/list', [AdminController::class, 'index'])->name('user.list');
    Route::post('user/store', [AdminController::class, 'store']);
    Route::post('user/update/{id}', [AdminController::class, 'update']);
    Route::post('user/delete/{id}', [AdminController::class, 'delete']);
    Route::get('/user/individual/{id}', [AdminController::class, 'getIndividualData']);
    Route::get('/chat', [AdminController::class, 'chat']);
});

Route::middleware(['auth'])->group(function () {


    Route::group(['prefix' => 'expenses'], function () {
        //category Route Start
        Route::get('/category', [ExpenseCategory::class, 'index'])->name('expenses.category');
        Route::post('/category/store', [ExpenseCategory::class, 'store']);
        Route::get('/category/{id}', [ExpenseCategory::class, 'show']);
        Route::post('/category/update/{id}', [ExpenseCategory::class, 'update']);
        Route::post('/category/delete/{id}', [ExpenseCategory::class, 'destroy']);
        //transaction Route Start

        Route::get('/transactions', [ExpensesTransaction::class, 'index'])->name('expenses.transaction');

        Route::post('/transaction/store', [ExpensesTransaction::class, 'store']);
        Route::get('/transaction/details/{id}', [ExpensesTransaction::class, 'detailsViewTransaction'])->name('tnxDetails');
        Route::get('/transaction/details/update/{id}', [ExpensesTransaction::class, 'updateViewTransaction'])->name('expenses.transaction.update');
        Route::post('/transaction/update/{id}', [ExpensesTransaction::class, 'updateDataTransaction']);
        Route::post('transaction/delete/{id}', [ExpensesTransaction::class, 'deleteTransaction']);
        Route::get('/transaction/details/documents/download/{id}', [ExpensesTransaction::class, 'downloadDocuments'])->name('transaction.document.download');
        Route::get('/transaction/details/images/download/{id}', [ExpensesTransaction::class, 'downloadImages'])->name('transaction.images.download');
    });

    Route::group(['prefix' => 'employee'], function () {
        //employee Route
        Route::get('/list', [EmployeeController::class, 'index'])->name('employee.list');
        Route::post('/store', [EmployeeController::class, 'store']);
        //Department Route
        Route::get('/department', [DepartmentController::class, 'index'])->name('employee.department');
        Route::post('/department/store', [DepartmentController::class, 'store']);
        Route::get('/department/{id}', [DepartmentController::class, 'show']);
        Route::post('/department/update/{id}', [DepartmentController::class, 'update']);
        Route::post('/department/delete/{id}', [DepartmentController::class, 'destroy']);
        Route::get('/details/{id}', [EmployeeController::class, 'showEmployeeDetails']);
        Route::post('/update/{id}', [EmployeeController::class, 'updateEmployee']);
        Route::get('/details/update/{id}', [EmployeeController::class, 'showEmployeeUpdateForm']);
        Route::post('/details/delete/{id}', [EmployeeController::class, 'deleteEmploy']);
        Route::get('/download/documents/{id}', [EmployeeController::class, 'downloadDocuments'])->name('employee.download.documents');
        Route::get('/download/infodetails/{id}', [EmployeeController::class, 'downloadInfoDetails'])->name('employee.download.allInfo');
        //attendance Route
        Route::get('/attendance/entry', [AttendanceController::class, 'index'])->name('employee.attendance');
        Route::get('/attendance/update/{id}', [AttendanceController::class, 'previewUpdateData']);
        Route::post('/attendance/store', [AttendanceController::class, 'store']);
        Route::post('/attendance/update/{id}', [AttendanceController::class, 'update']);
        Route::post('/attendance/delete/{id}', [AttendanceController::class, 'destroy']);
    });

    /* TT Manage Route */

    Route::group(['prefix' => 'tt-manage'], function () {
        // route invoices
        Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.list');
        Route::get('/invoice/{id}', [InvoiceController::class, 'getInvoiceData']);
        Route::post('/invoice/store', [InvoiceController::class, 'store']);
        Route::post('/invoice/update/{id}', [InvoiceController::class, 'update']);
        Route::post('/invoice/delete/{id}', [InvoiceController::class, 'destroy']);
        Route::get('/invoice/detail/{id}', [TtManageTransactionController::class, 'getInvoiceDetails'])->name('invoice.details');

        // route invoices Transaction
        Route::post('/invoice/transaction/update/{id}', [TtManageTransactionController::class, 'update']);
        Route::post('/invoice/transaction/store', [TtManageTransactionController::class, 'store']);
        Route::get('/invoice/transaction/{id}', [TtManageTransactionController::class, 'getTransactionData']);
        Route::post('/invoice/transaction/delete/{id}', [TtManageTransactionController::class, 'destroy']);
        Route::get('/invoice/transaction/pdf/{id}', [TtManageTransactionController::class, 'downloadPdfTnx'])->name('tnx.download');

        // route bank
        Route::get('/banks', [BankController::class, 'index'])->name('banks.list');
        Route::get('/bank/{id}', [BankController::class, 'getBankData']);
        Route::post('/bank/store', [BankController::class, 'store']);
        Route::post('/bank/update/{id}', [BankController::class, 'update']);
        Route::post('/bank/delete/{id}', [BankController::class, 'destroy']);
        // route factory
        Route::get('/factories', [FactoryController::class, 'index'])->name('factories.list');
        Route::get('/factory/{id}', [FactoryController::class, 'getFactoryData']);
        Route::post('/factory/store', [FactoryController::class, 'store']);
        Route::post('/factory/update/{id}', [FactoryController::class, 'update']);
        Route::post('/factory/delete/{id}', [FactoryController::class, 'destroy']);
        // route buyers
        Route::get('/buyers', [BuyerController::class, 'index'])->name('buyers.list');
        Route::get('/buyer/{id}', [BuyerController::class, 'getBayerData']);
        Route::post('/buyer/store', [BuyerController::class, 'store']);
        Route::post('/buyer/update/{id}', [BuyerController::class, 'update']);
        Route::post('/buyer/delete/{id}', [BuyerController::class, 'destroy']);

        // route company
        Route::get('/companies', [CompanyController::class, 'index'])->name('companies.list');
        Route::get('/company/{id}', [CompanyController::class, 'getCompanyData']);
        Route::post('/company/store', [CompanyController::class, 'store']);
        Route::post('/company/update/{id}', [CompanyController::class, 'update']);
        Route::post('/company/delete/{id}', [CompanyController::class, 'destroy']);
    });
    /* TT Manage Route */

    Route::get('/generate-pdf', function () {
        $pdf = \PDF::loadView('pdf.createEmployeeDetails');
        return $pdf->download('document.pdf');
    });

});






require __DIR__ . '/auth.php';
