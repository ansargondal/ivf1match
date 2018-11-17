<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $primaryKey = false;
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['path'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}