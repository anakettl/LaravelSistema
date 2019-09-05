<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
	protected $fillable = ['numero'];
    public $timestamps = false;
	//um episodio pertence a uma temporada
    public function temporada()
    {
    	return $this->belongsTo(Temporada::class);
    }
}
