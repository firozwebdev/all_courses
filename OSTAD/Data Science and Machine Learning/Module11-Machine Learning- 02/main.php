<?php

$fp = fopen('data.txt', 'w');//open file in write mode 

$data = " <?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Post extends Model
{
    use HasFactory;
    protected fillable = [
        'name',
        'email',
        'password',
        'age',
    ];

    public function user(){
        return this->belongsTo(User::class);
    }
}

"; 
fwrite($fp, $data); 



fclose($fp);  
  
echo "File written successfully";  