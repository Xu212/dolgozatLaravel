<?php

use App\Models\Agency;
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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id("agency_id");
            $table->string("name");
            $table->string("country");
            $table->string("type");
            $table->timestamps();
        });

        Agency::create(["name"=>"Zene ügynökség", "country"=>"Budapest", "type"=>"zene"]);
        Agency::create(["name"=>"Film ügynökség", "country"=>"Győr", "type"=>"film"]);
        Agency::create(["name"=>"Divat ügynökség", "country"=>"Budapest", "type"=>"divat"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
};
