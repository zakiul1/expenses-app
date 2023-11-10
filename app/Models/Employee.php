<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $fillable = ['first_name', 'last_name', 'email', 'date_of_birth', 'address', 'phone', 'image_path', 'document_path', 'department_id'];

    // Define the "belongs to" relationship with the Department model
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
            public function attendances()
    {
    return $this->hasMany(Attendance::class);
    }


    // Define any other relationships or methods here
}
