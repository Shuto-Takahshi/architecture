<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photo extends Model
{
    protected $fillable = [
        'title',
        'body',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
