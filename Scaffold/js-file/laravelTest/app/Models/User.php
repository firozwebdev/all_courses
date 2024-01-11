<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
  use HasFactory;
  protected $fillable = ['name', 'email', 'phone_no'];
  public function profile(){
    return $this->oneToOne(Profile::class);
  }
  public function post(){
    return $this->hasMany(Post::class);
  }
}