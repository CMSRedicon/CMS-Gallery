<?php

namespace Redicon\CMS_Articles\App\Models;
use Illuminate\Database\Eloquent\Model;
use Redicon\CMS_Articles\App\Models\Articles;
use Redicon\CMS_Articles\App\Models\ArticlesSeo;

class ArticlesDescription extends Model
{
   protected $table = 'articles_description';
   protected $visible = ['id', 'article_id', 'url', 'lang', 'name', 'lead', 'description', 'link', 'img_src', 'created_at', 'updated_at'];
   protected $fillable = ['article_id', 'url', 'lang', 'name', 'lead', 'description', 'link', 'img_src', 'created_at', 'updated_at'];

   public function Articles(){
       return $this->belongsTo(Articles::class , 'article_id');
   }

   public function ArticlesSeo(){
       return $this->hasMany(ArticlesSeo::class, 'id', 'articles_description_id');
   }
}
