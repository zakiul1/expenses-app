<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'country',
        'email',
        'phone_number',
        'company_name',
        'additional_info'
    ];
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'buyer_id');
    }
}
