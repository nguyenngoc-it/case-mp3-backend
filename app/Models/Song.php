<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $table = 'songs';
    protected $fillable = [
        'song_name',
        'song_imgae',
        'path',
        'singer_id',
        'author',
        'category_id',
        'lyric'
    ];

    public function singer()
    {
        return $this->belongsTo(Singer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function playlists()
    {
        return $this->belongsToMany(Play_list::class,'playLists_songs','song_id','playList_id',);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
