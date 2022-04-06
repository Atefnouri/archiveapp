<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->foreign(['sectionID'], 'section_folder')->references(['sectionID'])->on('sections')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['archiveboxID'], 'archive_folder')->references(['archiveboxID'])->on('archiveboxs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->dropForeign('section_folder');
            $table->dropForeign('archive_folder');
        });
    }
}
