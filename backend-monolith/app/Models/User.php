<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable;
    use Authorizable;
    use HasFactory;
    use Uuid;

    /** @var bool */
    public $incrementing = false;

    /** @var string[] */
    protected $fillable = [
        'name',
        'email',
        'avatar',
        'password',
    ];

    /** @var string[] */
    protected $hidden = [
        'password',
    ];
}
