<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTransactionData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("INSERT INTO `transaction` (`id`,`car_id`,`staff_id`,`created_at`,`updated_at`) VALUES (1,3,1,'2022-06-17 15:53:01','2022-06-17 15:53:01');");
        DB::statement("INSERT INTO `transaction` (`id`,`car_id`,`staff_id`,`created_at`,`updated_at`) VALUES (2,4,1,'2022-06-07 15:54:21','2022-06-07 15:54:21');");
        DB::statement("INSERT INTO `transaction` (`id`,`car_id`,`staff_id`,`created_at`,`updated_at`) VALUES (3,4,2,'2022-06-01 15:54:22','2022-06-01 15:54:22');");
        DB::statement("INSERT INTO `transaction` (`id`,`car_id`,`staff_id`,`created_at`,`updated_at`) VALUES (4,3,1,'2022-06-12 15:54:25','2022-06-12 15:54:25');");
        DB::statement("INSERT INTO `transaction` (`id`,`car_id`,`staff_id`,`created_at`,`updated_at`) VALUES (5,5,1,'2022-06-10 15:54:34','2022-06-10 15:54:34');");
        DB::statement("INSERT INTO `transaction` (`id`,`car_id`,`staff_id`,`created_at`,`updated_at`) VALUES (6,5,2,'2022-06-03 15:54:35','2022-06-03 15:54:35');");
        DB::statement("INSERT INTO `transaction` (`id`,`car_id`,`staff_id`,`created_at`,`updated_at`) VALUES (7,5,1,'2022-06-04 15:54:36','2022-06-04 15:54:36');");
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
