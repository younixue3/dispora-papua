<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleEvent extends Model
{
    use HasFactory;
    protected $table = 'single_event';
    protected $guarded = [];
}
