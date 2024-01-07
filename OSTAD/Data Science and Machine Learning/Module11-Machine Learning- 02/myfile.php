<?php
namespace App\Models;
use App\Models\MyUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;
class Post extends Model{
  use HasFactory;
  protected $fillable = [ 'name','email','password','age',];
  public function user(){
    return $this->belongsTo(User::class);
  }
}