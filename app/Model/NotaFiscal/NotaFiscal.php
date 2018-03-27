<?php

namespace App\Model\NotaFiscal;

use Illuminate\Database\Eloquent\Model;

class NotaFiscal extends Model
{
    protected $fillable = [
    	'numeroNota',
        'path',
        'user_id',
        'extensao'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
