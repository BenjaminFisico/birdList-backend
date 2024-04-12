<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksListTable extends Migration
{
    public function up()
    {
        Schema::create('tasksList', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('listColor');
            $table->string('listFontColor');
            $table->foreignID('project_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('tasksList');
    }
}