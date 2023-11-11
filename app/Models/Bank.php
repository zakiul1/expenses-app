<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'account_no',
        'swift_code',
        'email',
        'phone_no',
        'bank_type'
    ];
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'bank_id');
    }
}
