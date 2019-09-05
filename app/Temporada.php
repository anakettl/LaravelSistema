<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $fillable = ['numero'];
    public $timestamps = false;
	//no plural pq uma serie tem muitos episorios
    public function episodios()
    {
    	return $this->hasMany(Episodio::class);
    }

    //no singular pq ela pertence a apenas uma serie
    public function serie()
    {
    	return $this->belongsTo(Serie::class);
    }
}
