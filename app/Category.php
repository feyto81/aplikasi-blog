<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Artikel;

class Category extends Model
{
    protected $table = 'table_categories';
    protected $guarded = ['id'];


    public function setSlugAttributes($value)
    {
    	$this->attributes['slug'] = Str::slug($value,'-');
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function Artikel()
    {
        return $this->hasMany(Artikel::class, 'categoris_id','id');
    }
}
