<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    /** @use HasFactory<\Database\Factories\PodcastFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
    public function listeningParties()
    {
        return $this->hasMany(ListeningParty::class);
    }
}
