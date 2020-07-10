<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $table = "tb_photos";
    protected $primaryKey = 'photo_id';
    protected $fillable = ['photo_date', 'photo_title', 'photo_text', 'post_id'];

    public function Post(){
    	return $this->belongsTo('App\Post', 'post_id');
    }
}
