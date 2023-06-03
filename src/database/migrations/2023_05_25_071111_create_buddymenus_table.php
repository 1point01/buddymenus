<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuddyMenusTable extends Migration
{
    public function up()
    {
        Schema::create('buddymenus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('parent')->nullable();
            $table->integer('order');
            $table->string('routes');
            $table->string('controllers');
            $table->string('route_name');
            $table->boolean('is_super_admin')->default(false);
            $table->timestamps();

//            $table->foreign('parent')->references('id')->on('buddymenus')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('buddymenus');
    }
}
