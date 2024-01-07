<?php
namespace App\Models;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;
class Customer extends Model
{
  use HasFactory;
  protected $fillable = ['name', 'email', 'address', 'age', 'Phone No.'];
  public function user(){
    return $this->belongsTo(User::class);
  }
}