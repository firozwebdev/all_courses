<?php
namespace AppModels;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Client extends Model
{
  use HasFactory;
  protected $fillable = ['name:string(30)', 'email:string', '', 'age:integer'];
  public function user(){
    return $this->belongsTo(User::class);
  }
}