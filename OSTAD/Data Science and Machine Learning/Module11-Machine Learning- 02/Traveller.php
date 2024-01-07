<?php
namespace App\Models;
use App\Models\Traveller;
use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;
class Traveller extends Model
{
  use HasFactory;
  protected $fillable = ['name', 'email', 'address', 'age', 'fb_id'];
  public function user(){
    return $this->belongsTo(User::class);
  }
}