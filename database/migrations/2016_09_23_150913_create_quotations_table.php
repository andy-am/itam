<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('quotations', function (Blueprint $table) {
            Schema::dropIfExists('quotations');
            $table->increments('id');
            $table->integer('author_id')->unsigned();
            $table->text('text', 1000);
            $table->boolean('active')->default(1);
            $table->timestamps();
            $table->foreign("author_id")->references("id")->on("authors")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('quotations');
    }
}
