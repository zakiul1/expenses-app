<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Employee\DepartmentController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Expenses\ExpenseCategory;
use App\Http\Controllers\Expenses\ExpensesTransaction;
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





Route::middleware('auth')->group(function () {

    Route::group(['prefix' => 'expenses'], function () {
        //category Route Start
        Route::get('/category', [ExpenseCategory::class, 'index'])->name('expenses.category');
        Route::post('/category/store', [ExpenseCategory::class, 'store']);
        Route::get('/category/{id}', [ExpenseCategory::class, 'show']);
        Route::post('/category/update/{id}', [ExpenseCategory::class, 'update']);
        Route::post('/category/delete/{id}', [ExpenseCategory::class, 'destroy']);
        //transaction Route Start
        Route::get('/transaction', [ExpensesTransaction::class, 'index'])->name('expenses.transaction');
        Route::post('/transaction/store', [ExpensesTransaction::class, 'store']);
        Route::get('/transaction/details/{id}', [ExpensesTransaction::class, 'detailsViewTransaction'])->name('tnxDetails');
        Route::get('/transaction/details/update/{id}', [ExpensesTransaction::class, 'updateViewTransaction']);
        Route::post('/transaction/update/{id}', [ExpensesTransaction::class, 'updateDataTransaction']);
        Route::post('transaction/delete/{id}', [ExpensesTransaction::class, 'deleteTransaction']);
        Route::get('/transaction/details/documents/download/{id}', [ExpensesTransaction::class, 'downloadDocuments']);
        Route::get('/transaction/details/images/download/{id}', [ExpensesTransaction::class, 'downloadImages']);
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
    });
});






require __DIR__ . '/auth.php';
