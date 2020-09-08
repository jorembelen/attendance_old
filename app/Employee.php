<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Employee extends Model
{

    public $table = 'employees';

    // public $primaryKey = 'uuid';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    public $fillable = [
        'name',
        'department',
        'position',
        'address',
        'contact',
        'email',
        'access_code',
        'checkIn_time',
        'checkOut_time'
    ];
    
    public function attedance()
    {
        return $this->hasMany(Attendance::class);
    }
   

    public static function boot()
{
    parent::boot();
    self::creating(function ($model) {
        $model->uuid = (string) Uuid::generate(4);
    });
}

/**
 * Get the route key for the model.
 *
 * @return string
 */
public function getRouteKeyName()
{
    return 'uuid';
}


}
