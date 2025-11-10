<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Segment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['subcategory_id', 'name'];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function models()
    {
        return $this->hasMany(CarModel::class);
    }
}
