<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
  /**
  * Run the migrations.  */
  public function up(): void
  {
    Schema::create(function tableName(modelName){ // table name will be plural
   
    if(modelName.endsWith('s')){
        return modelName
    }else{
        return modelName.toLowerCase() + 's'
    }
  }, function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->rememberToken();
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  */
  public function down(): void
  {
    Schema::dropIfExists('function tableName(modelName){ // table name will be plural
   
    if(modelName.endsWith('s')){
        return modelName
    }else{
        return modelName.toLowerCase() + 's'
    }
  }');
  }
};
