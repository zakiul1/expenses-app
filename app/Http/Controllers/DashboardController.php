<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        $totalAmountCurrentMonth = Expenses::whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->sum('amount');
        return view('dashboard', ['totalAmountCurrentMonth' => $totalAmountCurrentMonth]);
    }
}
