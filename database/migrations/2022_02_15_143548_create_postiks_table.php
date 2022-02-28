<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postiks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('infa');
            $table->string('face');
            $table->integer('count');
            $table->boolean('true')->nullable();
            $table->string('work')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postiks');
    }
}
