<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\VersionUpdater\SelfUpdate;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($post) {
            $post->user()->associate(auth()->user()->id);
    
        });

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chirps()
    {
        return $this->hasMany(Chirp::class);
    }


}
