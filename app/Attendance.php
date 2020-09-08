<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function employees()
    {
        return $this->belongsTo(Employee::class, 'emp_id')->withDefault();
    }

    protected $dates = [
        'in_date', 'out_date'
    ];

}
