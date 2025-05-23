<?php

namespace App\Models;

use App\Models\Podcast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;


class ListeningParty extends Model
{
    /** @use HasFactory<\Database\Factories\ListeningPartyFactory> */
    use HasFactory;
    protected $guarded = ['id'];

    protected $casts = [
        'is_active' => 'boolean',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }
    public function podcast(): HasOneThrough
    {
        return $this->hasOneThrough(Podcast::class , Episode::class ,'id','id','episode_id','podcast_id');
    }
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
