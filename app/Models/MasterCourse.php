<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'days', 'is_certificate', 'is_active'
    ];
}
