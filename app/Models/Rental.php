<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'rental';

    public function getRouteKeyName()
    {
        return 'kode_rental';
    }

    public static function boot()
    {
        parent::boot();
        static::creating(
            function ($model) {
                $model->kode_rental = 'KR-' . rand(100000, 999999);
            }
        );
    }

    // belongs to
    public function getMobil()
    {
        return $this->belongsTo(Mobil::class, 'nopol', 'nopol');
    }
    public function getCustomer()
    {
        return $this->belongsTo(Customer::class, 'nik', 'nik');
    }
}
