<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supliers', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('email')->unique();
          $table->timestamp('email_verified_at')->nullable();
          $table->text('alamat');
          $table->string('no_npwp');
          $table->string('password');
          $table->integer('status')->default(1);
          $table->text('token')->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supliers');
    }
}
