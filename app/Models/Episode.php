<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    /** @use HasFactory<\Database\Factories\EpisodeFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    public function podcast()
    {
        return $this->belongsTo(Podcast::class);
    }

    public function listeningParties()
    {
        return $this->hasMany(ListeningParty::class); // listen to episode multiple times 
    }
}
