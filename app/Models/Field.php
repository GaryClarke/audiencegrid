<?php // app/Models/Field.php

namespace App\Models;

use Database\Factories\FieldFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    /** @use HasFactory<FieldFactory> */
    use HasFactory;
}
