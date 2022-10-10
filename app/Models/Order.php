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
        return DB::table($this->table)->get();
    }
    public function addOrder($data){
        return DB::table($this->table)->insert($data);
    }

}
