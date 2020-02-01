<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayHousesTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holiday_houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');

            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')
                ->references('id')->on('Locations');

            $table->Integer('numberOfRooms');
            $table->Integer('numberOfBeds');

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')
                ->references('id')->on('Types');
            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')
                ->references('id')->on('Images');
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
         Schema::table('HolidayHouses', function (Blueprint $table) {
            $table->dropForeign('HolidayHouses_location_id_foreign');
            $table->dropColumn('location_id');
            $table->dropForeign('HolidayHouses_type_id_foreign');
            $table->dropColumn('type_id');
        });
    }
}
