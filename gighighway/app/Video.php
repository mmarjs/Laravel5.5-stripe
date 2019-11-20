<?php

namespace GigHighway;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    protected $guarded = ['id'];
    //
    public function is_vimeo()
    {
        if (strpos($this->externally_hosted_url,'vimeo') === false) {
            return false;
        } else {
            return true;
        }
    }

    public function getVideoKeyAttribute()
    {
        return $this->get_video_id($this->url);
    }

    public function getYoutubeEmbedUrlAttribute()
    {
        return "https://www.youtube.com/embed/".$this->video_key;
    }
    public function getThumbUrlAttribute()
    {
        return "https://img.youtube.com/vi/" . $this->video_key . "/mqdefault.jpg";
    }
    public function get_video_id($url)
    {
        parse_str( parse_url( $url, PHP_URL_QUERY ), $urlVars );
        return $urlVars['v'];
        if (strlen($url) > 11) {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
                return $match[1];
            } else
                return false;
        }

        return $url;

    }
}

Video::creating(function(Video $video) {
    $video->guid = uniqid();
});

Video::saving(function($video) {
    if(!$video->sort_index) {
        $video->sort_index = 0;
    }
});