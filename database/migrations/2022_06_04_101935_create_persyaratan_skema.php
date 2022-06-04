<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePersyaratanSkema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persyaratan_skema', function (Blueprint $table) {
            $table->uuid('id')->primary()->index()->default(DB::raw('uuid_generate_v4()'));
            $table->uuid('skema_id')->index();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('skema_id')->references('id')->on('skemas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persyaratan_skema');
    }
}
