<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BiometricLogs extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\Employee', 'biometric_id', 'id');
    }
}
