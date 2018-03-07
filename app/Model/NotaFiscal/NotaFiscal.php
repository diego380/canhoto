<?php

namespace App\Model\NotaFiscal;

use Illuminate\Database\Eloquent\Model;

class NotaFiscal extends Model
{
    protected $fillable = [
    	'cnpj',
    	'razao',
    	'nota_fiscal',
    	'data_emissao',
    	'user_id'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
