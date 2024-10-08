<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'key',
        'role_id'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
