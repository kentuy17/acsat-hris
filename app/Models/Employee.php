<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'photo',
        'name',
        'code',
        'status',
        'gender',
        'department',
        'salary',
        'user_id'
    ];
    
    public function userrole()
    {
        return $this->hasOne('App\Models\UserRole', 'user_id', 'id');
    }

    public function employeeLeaves()
    {
        return $this->hasMany('App\EmployeeLeaves', 'user_id', 'user_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function biometricLogs()
    {
        return $this->hasMany('App\Models\BiometricLogs', 'biometric_id', 'user_id');
    }

}
