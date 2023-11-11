<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'email',
        'additional_info'
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'factory_id');
    }
}
