<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = [
        
    ];
    public function getAllEvent(){
        return DB::table($this->table)->get();
    }
    public function getDetailEvent($idEvent){
        $detailEvent = DB::table($this->table)->where('idEvent', $idEvent)->first();
        return $detailEvent;
    }
}
