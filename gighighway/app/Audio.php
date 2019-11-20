<?php

namespace GigHighway;

use Codesleeve\Stapler\ORM\EloquentTrait;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model implements StaplerableInterface
{
    use EloquentTrait;

    protected $appends = ['file_url'];

    protected $guarded = ['id'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->hasAttachedFile('file');
    }

    public function getAttributes()
    {
        return parent::getAttributes();
    }

    public function getFileUrlAttribute()
    {
        return $this->file->url();
    }
}

Audio::creating(function(Audio $audio) {
    $audio->guid = uniqid();
});
