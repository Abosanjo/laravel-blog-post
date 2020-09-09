<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Storage;


class Post extends Model
{

  protected $dates = [
      'publish_at'
  ];

  protected $fillable = [
      'title','description','content','image','publish_at','category_id','user_id'
  ];


  public function deleteImage()
  {
      Storage::delete($this->image);

  }

  public function category()
  {
      return $this->belongsTo(Category::class);
  }


  public function user()
  {
      return $this->belongsTo(User::class);

  }

  public function scopePublished($query)
  {
      return $query->where('publish_at','<=',now());
  }

  public function scopeSearched($query)
  {

      $search = request()->query('search');

      if(!$search){
        return $query->published();
      }

      return $query->published()->where('title','like',"%{$search}%");

  }
}
