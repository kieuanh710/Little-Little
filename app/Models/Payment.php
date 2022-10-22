<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Payment extends Model
{
    protected $table = 'payment';
    use HasFactory;
    public function getAllPayment(){
        return DB::table($this->table)
        ->join('orders', 'orders.name', 'payment.name')
        ->select('orders.name', 'orders.quantity', 'orders.phone', 'orders.date','payment.id', 'payment.cvv')->get();
    }
    public function addPayment($data){
        return DB::table($this->table)->insert($data);
    }
 
}
