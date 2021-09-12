<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SingleEvent;
Use App\Models\MultiEvent;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\CashFlow\Single;

class Atlet extends Model
{
    use HasFactory;
    protected $table = 'atlets';
    protected $guarded = [];
    protected $appends = ['single_event', 'multi_event'];

    public function getSingleEventAttribute(){
        return SingleEvent::where('atlet_id', $this->no_ktp)->count();
    }
    public function getMultiEventAttribute(){
        return MultiEvent::where('atlet_id', $this->no_ktp)->count();
    }
//    public function getCountCommentsAttribute($value)
//    {
//        return SingleEvent::where('atlet_id', 6474012803040002)->count();
//    }
}
