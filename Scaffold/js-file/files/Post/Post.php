<?php
namespace AppModels;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
  use HasFactory;
  protected $fillable = ['user_id', 'title', 'description'];
  public function user(){
    return $this->belongsTo(User::class);
  }
}