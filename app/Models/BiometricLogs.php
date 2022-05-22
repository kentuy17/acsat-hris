<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class BiometricLogs extends Model
{
    protected $fillable = [
        'date',
        'biometric_id',
        'user_id',
        'device_ip'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'user_id', 'biometric_id');
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }
}
