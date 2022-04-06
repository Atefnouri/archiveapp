<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSubfoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subfolders', function (Blueprint $table) {
            $table->foreign(['folderID'], 'folder_subfolder')->references(['folderID'])->on('folders')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subfolders', function (Blueprint $table) {
            $table->dropForeign('folder_subfolder');
        });
    }
}
