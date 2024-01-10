<?php
namespace AppModels;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Profile extends Model
{
  use HasFactory;
  protected $fillable = ['user_id', 'photo', 'address'];
  public function user(){
    return $this->belongsTo(User::class);
  }
}