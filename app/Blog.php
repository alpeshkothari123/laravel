<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable = ['name', 'description', 'categories'];

    public function search_data($blog_name, $blog_desc, $blog_date)
    {
        $blog = $this->orderBy('id', 'desc');
        if ($blog_name)
        {
            $blog->where('name', 'like', '%' . $blog_name . '%');
        }
        if ($blog_desc)
        {
            $blog->where('description', 'like', '%' . $blog_desc . '%');
        }
        return $blog->get();
    }

}
