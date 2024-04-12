<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('listColor');
            $table->string('listFontColor');
            $table->string('defaultTaskColor');
            $table->string('defaultTaskFontColor');
            $table->foreignID('user_id')->comment('Creador del proyecto');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('projects');
    }
}