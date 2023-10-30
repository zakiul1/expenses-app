<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;
    protected $table = 'expenses';
    protected $guarded = []; // Allow all columns to be mass-assigned

    protected
        $fillable = [
            'name',
            'description',
            'employee_id',
            'category_id',
            'amount',
            'expense_date',
            'images_path',
            'documents_path',
        ];


    public function category()
    {
        return $this->belongsTo(ExpensesCategory::class, 'category_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, "employee_id");
    }
}
