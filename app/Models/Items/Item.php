<?php

namespace App\Models\Items;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price'
        
    ];

    public function getByName(string $name)
    {
        return $this->where('name',$name)->get();
    }
}
