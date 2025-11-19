<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TechnicalSheet extends Model
{
    use HasFactory, SoftDeletes;

    const Development  = 1;
    const Completed = 2;

    protected $fillable = ['status', 'model_id', 'file_name', 'file_path', 'version', 'uploaded_by'];

    public function model()
    {
        return $this->belongsTo(CarModel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
