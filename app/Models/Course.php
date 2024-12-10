<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'start_date', 'duration'];

    public function Users()
    {
        return $this->belongsToMany(User::class, 'applications');
    }

    public function Applications()
    {
        return $this->hasMany(Application::class);
    }
}
