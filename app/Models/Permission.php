<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';

    public function UserPermission(){
        return $this->belongsTo(UserPermission::class, 'id', 'permission_id');
    }
}
