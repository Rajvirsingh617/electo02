<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class unit extends Model
{
    use HasFactory;
    protected $fillable = ['unit_name', 'unit_desc'];
}
