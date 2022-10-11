<?php

use App\Models\Event;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id("event_id");
            $table->date("date");
            $table->foreignId("agency_id")->references("agency_id")->on("agencies");
            $table->integer("limit");
            $table->timestamps();
        });

        Event::create(["date"=>"2022-10-11", "agency_id"=>3, "limit"=>30]);
        Event::create(["date"=>"2022-09-28", "agency_id"=>1, "limit"=>60]);
        Event::create(["date"=>"2022-10-01", "agency_id"=>2, "limit"=>50]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
