<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Payment extends Model
{
    protected $table = 'payment';
    use HasFactory;
    public function addPayment($data){
        return DB::table($this->table)->insert($data);
    }
}
