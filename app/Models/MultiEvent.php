<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiEvent extends Model
{
    use HasFactory;
    protected $table = 'multi_event';
    protected $guarded = [];
}
