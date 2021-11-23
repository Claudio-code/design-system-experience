<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    use Uuid;

    /** @var bool */
    public $incrementing = false;

    /** @var string[] */
    protected $fillable = ['date'];
}
