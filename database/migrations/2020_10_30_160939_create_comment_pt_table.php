<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentPtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_pt', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->integer('pt_id');
            $table->string('content');
            $table->integer('status');
            $table->date('date');
            $table->double('ratting');
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
        Schema::dropIfExists('comment_pt');
    }
}
