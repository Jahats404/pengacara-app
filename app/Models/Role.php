<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_role';
    protected $table = 'roles';
    protected $fillable = ['level'];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'id_role');
    }
}