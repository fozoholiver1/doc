<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentationsTable extends Migration
{
    /**
     * Run the migrations.
     *app
     * @return void
     */
    public function up()
    {
        Schema::create('documentations', function (Blueprint $table) {
            $table->id()->index();
            $table->foreignId('user_id')->constrained();
            $table->string('device')->nullable();
            $table->string('topic')->nullable();
            $table->string('article')->nullable();
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
        Schema::dropIfExists('documentations');
    }
}
