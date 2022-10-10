<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'types_ticket';
    protected $fillable = [
        'idTicket', 'nameTicket', 'desTicket'
    ];
    protected $guarded = [];
    public function getAllTicket(){
        $tickets = DB::table($this->table)->get();
        return $tickets;
    }

}
