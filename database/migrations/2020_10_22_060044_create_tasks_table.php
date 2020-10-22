<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('uraian_kegiatan');
            $table->enum('sumber', ['LHR', 'Nadine', 'Instruksi', 'Memo', 'Agenda Rapat', 'SR']);
            $table->string('PIC');
            $table->timestamp('jatuh_tempo');
            $table->string('url_berkas');
            $table->enum('status',['PROSES', 'BELUM', 'SELESAI']);
            $table->enum('approval',['SETUJU', 'BELUM SETUJU', 'TIDAK SETUJU']);
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
        Schema::dropIfExists('tasks');
    }
}
