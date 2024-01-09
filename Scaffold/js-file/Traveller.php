<?php
namespace AppModels;
use App\Models\Traveller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Traveller extends Model
{
  use HasFactory;
  protected $fillable = ['name', 'email', 'address', 'age'];
  public function user(){
    return $this->belongsTo(User::class);
  }
}