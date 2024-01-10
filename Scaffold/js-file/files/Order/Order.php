<?php
namespace AppModels;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
  use HasFactory;
  protected $fillable = ['order_item:integer', 'qty:integer', 'price:integer'];
  public function user(){
    return $this->belongsTo(User::class);
  }
}