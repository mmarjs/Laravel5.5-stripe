<?php

namespace GigHighway;

use Codesleeve\Stapler\ORM\EloquentTrait;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Illuminate\Database\Eloquent\Model;

class Image extends Model implements StaplerableInterface
{
    use EloquentTrait;

    protected $appends = ['file_url', 'thumbnail_url'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->hasAttachedFile('file', [
            'styles' => [
                'medium' => '300x300',
                'thumb' => '150x150',
            ]
        ]);
    }

    public function getFullPathAttribute()
    {
        return $this->file_name . $this->file_extension;
    }

    public function getAttributes()
    {
        return parent::getAttributes();
    }

    public function getFileUrlAttribute()
    {
        return $this->file->url();
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->file->url('thumb');
    }
}
// Generate GUID
Image::creating(function(Image $image) {
    $image->guid = uniqid();
});
