<?php

namespace App\Http\Controllers\TtManage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return view("tt-manage.invoice.invoice");
    }
}
