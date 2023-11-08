<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', // Add user_id to the fillable array
        'employee_id',
        'check_in',
        'check_out',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    // Add the user relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
