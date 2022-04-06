<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchiveboxsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archiveboxs', function (Blueprint $table) {
            $table->integer('archiveboxID', true);
            $table->string('arcbox_name', 50);
            $table->text('archbox_desc');
            $table->integer('arcbox_shelf');
            $table->string('arcbox_location', 150);
            $table->integer('sectionID')->index('section_archiveBox');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archiveboxs');
    }
}
