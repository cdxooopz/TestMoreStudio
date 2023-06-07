<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStaffData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement("INSERT INTO `staff` (`id`,`name`,`created_at`,`updated_at`) VALUES (1,'นักขาย',NULL,NULL);");
        DB::statement("INSERT INTO `staff` (`id`,`name`,`created_at`,`updated_at`) VALUES (2,'ยอดชาย',NULL,NULL);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
