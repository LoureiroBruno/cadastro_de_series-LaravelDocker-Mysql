<?php

namespace App\Models;


use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'number'
    ];

    public $timestamps = false;

    public function season()
    {
        return $this->belongsTo(Session::class);

    }

    protected function watched(): Attribute
    {
        return new Attribute(
            get: fn ($watched) => (bool) $watched,
            set: fn ($watched) => (bool) $watched
        );
    }
}