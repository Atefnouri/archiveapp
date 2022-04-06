<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToArchiveboxsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('archiveboxs', function (Blueprint $table) {
            $table->foreign(['sectionID'], 'section_archiveBox')->references(['sectionID'])->on('sections')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('archiveboxs', function (Blueprint $table) {
            $table->dropForeign('section_archiveBox');
        });
    }
}
