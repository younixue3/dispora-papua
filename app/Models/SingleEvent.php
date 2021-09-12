<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleEvent extends Model
{
    use HasFactory;
    protected $table = 'single_event';
    protected $fillable = ['single_event_terbaik_ajang', 'single_event_terbaik_no_pertandingan', 'single_event_terbaik_tahun', 'single_event_terbaik_tempat', 'atlet_id'];
}
