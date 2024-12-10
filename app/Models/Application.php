<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'course_id', 'full_name', 'age', 'phone', 'email', 'application_date', 'status'];

    protected $casts = [
        'application_date' => 'datetime',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Course()
    {
        return $this->belongsTo(Course::class);
    }
}
