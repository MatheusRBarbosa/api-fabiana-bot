<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_sessions', function (Blueprint $table) {
            $table->integer('groups_id');
            $table->integer('sessions_id');
            
            $table->foreign('groups_id')
                ->references('groups')->on('id')
                ->onDelete('cascade');

            $table->foreign('sessions_id')
                ->references('sessions')->on('id')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups_sessions');
    }
}
