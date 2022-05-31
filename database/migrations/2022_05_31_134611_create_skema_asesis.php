<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSkemaAsesis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skema_asesis', function (Blueprint $table) {
            $table->uuid('id')->primary()->index()->default(DB::raw('uuid_generate_v4()'));
            $table->uuid('event_id')->index();
            $table->uuid('skema_id')->index();
            $table->uuid('asesi_id')->index();
            $table->uuid('asesor_id')->index()->nullable();
            $table->string('asesment_status');
            $table->string('skema_status');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('event_id')->references('id')->on('event');
            $table->foreign('skema_id')->references('id')->on('skemas');
            $table->foreign('asesi_id')->references('id')->on('asesis');
            $table->foreign('asesor_id')->references('id')->on('asesors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skema_asesis');
    }
}
