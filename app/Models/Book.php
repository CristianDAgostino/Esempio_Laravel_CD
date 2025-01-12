<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'plot',
        'cover',
        'price',
        'user_id',
    ];

    //un libro appartiene solo ad un utente che l'ha inserita e il nome del metodo sarà all singolare
    public function user(){
        return $this->belongsTo(User::class);
    }
}
