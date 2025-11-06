<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'models';
    
    protected $fillable = ['segment_id', 'name', 'description'];

    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }

    public function technicalSheets()
    {
        return $this->hasMany(TechnicalSheet::class, 'model_id');
    }
}
