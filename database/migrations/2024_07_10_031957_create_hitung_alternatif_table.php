<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHitungAlternatifTable extends Migration
{
    public function up()
    {
        Schema::create('hitung_alternatif', function (Blueprint $table) {
            $table->id();
            $table->string('kode_asuransi');
            $table->string('nama_asuransi');
            $table->float('C1');
            $table->float('C2');
            $table->float('C3');
            $table->float('C4');
            $table->float('C5');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hitung_alternatif');
    }
}
