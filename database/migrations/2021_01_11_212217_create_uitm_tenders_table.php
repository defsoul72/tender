<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUitmTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uitm_tenders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tender_id');
            $table->string("qualifications");
            $table->string("site_visit");
            $table->string("place_sale");
            $table->string("doc_price");
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
        Schema::dropIfExists('uitm_tenders');
    }
}
