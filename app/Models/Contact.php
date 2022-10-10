<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';

    public function getAllConctact(){
        return DB::table($this->table)->get();
    }
    public function addContact($data){
        return DB::table($this->table)->insert($data);
    }

}
