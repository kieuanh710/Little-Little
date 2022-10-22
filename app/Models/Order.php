<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        
    ];
    protected $guarded = [];
    public function getAllOrder(){
        return DB::table($this->table)
        ->join('types_ticket', 'orders.idTypeTicket', 'types_ticket.idTicket')
        ->select('orders.*', 'types_ticket.priceTicket');
    }
    public function addOrder($data){
        return DB::table($this->table)->insert($data);
    }
    public function getDetailOrder($id){
        return DB::table($this->table)
        ->where('id', $id)
        ->select('orders.quantity', 'orders.name', 'orders.phone', 'orders.email', 'orders.totalPrice')
        ->get();
    }

}
