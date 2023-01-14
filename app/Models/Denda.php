<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denda extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'denda';

    public function getRouteKeyName()
    {
        return 'kode_denda';
    }

    public static function boot()
    {
        parent::boot();
        static::creating(
            function ($model) {
                $model->kode_denda = 'KD-' . rand(100000, 999999);
            }
        );
    }
}
