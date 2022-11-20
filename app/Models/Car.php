<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'model', 'manufacture_id', 'category_id', 'doors', 'direction', 'exchange',
        'airbag', 'abs', 'glass', 'air'
    ];    

    public function manufacture()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
