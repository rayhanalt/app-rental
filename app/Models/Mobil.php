<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'mobil';

    public function getRouteKeyName()
    {
        return 'kode_mobil';
    }

    public static function boot()
    {
        parent::boot();
        static::creating(
            function ($model) {
                $model->kode_mobil = 'KM-' . rand(100000, 999999);
            }
        );
    }
}
