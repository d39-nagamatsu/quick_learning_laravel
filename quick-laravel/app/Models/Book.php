<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  use HasFactory;  
  
  protected $fillable = ['isbn', 'title', 'price', 'publisher', 'published'];

  public static $rules = [
    'isbn' => 'required',
    'title' => 'required|string|max:10',
    'price' => 'integer|min:0',
    'publisher' => 'required|in:走跳社,テックCode,ジャパンIT,優丸システム,IT Emotion',
    'published' => 'required|date'
  ];

  // protected $primaryKey = 'isbn';
  // protected $keyType = 'string';
  // public $incrementing = false;

  public function scopePublished($query)
  {
    $query->where('published', '<=', now());
  }

  public function scopePublisher($query, $name)
  {
    $query->where('publisher', $name);
  }

  public function reviews()
  {
    return $this->hasMany(Review::class);
  }
}
