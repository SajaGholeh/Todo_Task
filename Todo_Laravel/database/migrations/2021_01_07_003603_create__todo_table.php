<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Todo', function (Blueprint $table) {
          $table->id();
          $table->String('Title');
          $table->String('description');
          $table->datetime('dudate');
          $table->unsignedInteger('category_id');
          $table->foreign('category_id')->references('id')->on('categories');
          $table->String('CreatedBy');
          $table->String('UpdatedBy')->nullable();
          $table->tinyInteger('deleted')->default('0');
          $table->timestamps(); //created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Todo');
    }
}
