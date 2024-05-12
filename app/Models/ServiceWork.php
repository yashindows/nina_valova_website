<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceWork extends Model
{
    protected $fillable = ['work_title', 'description', 'price', 'duration'];
    use HasFactory;
}
