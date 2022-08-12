<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable = [
       'id', 'number','name','as','date','description','status',
    ];

    public function seacrh($query, $name){
        return $query->where('number','LIKE',"%{$name}%");
    }
}
