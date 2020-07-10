<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "tb_album";
    protected $primaryKey = 'album_id';
    protected $fillable = ['album_name', 'album_text', 'photo_id'];

    public function Photos(){
    	return $this->belongsTo('App\Photos', 'photo_id');
    }
}
