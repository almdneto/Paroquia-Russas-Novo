<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
#[Fillable(['name', 'address', 'image_path'])]
class Location extends Model
{
    use HasFactory;
}
