<?php
namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;
class User extends Model
{
  use HasFactory;
  protected $fillable = ['name', 'email', 'password', 'age', 'address'];
  public function user(){
    return $this->belongsTo(User::class);
  }
}