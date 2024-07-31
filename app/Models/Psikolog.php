<?php

namespace App\Models;

use App\Mail\EmailPsikolog;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class Psikolog extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticableTrait;
    use HasEvents;

    public $table = 'psikologs';
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'request_consultations'
        )->withPivot(['consultation_date', 'consultation_time']);
    }

    protected static function boot()
    {
        parent::boot();

        static::saved(function ($model) {
            $model->afterSave();
        });
    }

    public function afterSave()
    {
        if ($this->wasChanged('status_account') && $this->status_account == "Active") {
            $message = 'Berikut adalah kode psikolog anda: ' . $this->code_psikolog;
            $subject = 'Pemberitahuan Konfirmasi Registrasi Psikolog HealMe';

            Mail::to($this->email)->send(new EmailPsikolog($message, $subject));
        }
    }
}
