<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Psikolog extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticableTrait;

    public $table = 'psikologs';
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'request_consultations'
        )->withPivot(['consultation_date', 'consultation_time']);
    }
}
