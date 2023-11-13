<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_of_transaction',
        'value',
        'invoice_id',
        'user_id',
        'transaction_date',
        'company_id',
        'bank_id',
    ];
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
