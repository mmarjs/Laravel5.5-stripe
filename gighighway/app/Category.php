<?php

namespace GigHighway;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model
{
    protected $casts = ['id' => 'string'];

    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function parents()
    {
        return $this->belongsToMany(Category::class, 'category_relations', 'child_category_id', 'parent_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function children()
    {
        return $this->belongsToMany(Category::class, 'category_relations', 'parent_category_id', 'child_category_id')
            ->orderBy('name','ASC');
    }

    /**
     * Scopes categories with no parent
     *
     * @param Builder $query
     */
    public function scopeTopLevel(Builder $query)
    {
        $query->has('parents', '=', 0);
    }

    /**
     * Scopes categories with children
     *
     * @param Builder $query
     */
    public function scopeWithChildren(Builder $query)
    {
        $query->has('children', '>', 0);
    }

    public static function countPerColumn($columns, $count)
    {
        return floor(round($count / $columns));
    }
}
