<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCarData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        DB::statement("INSERT INTO `car` (`id`,`brand`,`model`,`created_at`,`updated_at`) VALUES (3,'toyota','cross','2023-06-07 15:06:04','2023-06-07 15:50:55');");
        DB::statement("INSERT INTO `car` (`id`,`brand`,`model`,`created_at`,`updated_at`) VALUES (4,'test','123','2023-06-07 15:38:49','2023-06-07 15:38:49');");
        DB::statement("INSERT INTO `car` (`id`,`brand`,`model`,`created_at`,`updated_at`) VALUES (5,'toyota','camry','2023-06-07 15:46:59','2023-06-07 15:46:59');");
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
