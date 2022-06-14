<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Roles extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function admins()
    {
       return $this->HasMany(Admin::class, 'role_id' ,'id');
    }
}
