<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;


class Certificate extends Model
{
    use HasFactory;
    protected $fillable = [
       'id', 'number','name','as','date','description','status',
    ];

    public function scopeFillter($query, array $fillters)
    {
        $query->when($fillters['search'] ?? false, function($query,$search){
            $query->where(function($query) use ($search){
                return $query->where('number','like','%' . $search . '%');
            });
        });
        
    }
}
