<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubfoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subfolders', function (Blueprint $table) {
            $table->integer('subfolderID', true);
            $table->string('subfolder_name', 50);
            $table->text('subfolder_desc');
            $table->integer('folderID')->index('folder_subfolder');
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
        Schema::dropIfExists('subfolders');
    }
}
