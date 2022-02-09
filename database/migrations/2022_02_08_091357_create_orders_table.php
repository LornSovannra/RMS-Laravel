<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("employee_id");
            $table->timestamp("order_date");
            $table->string("status");
            $table->integer("print_qty");
            $table->unsignedBigInteger("table_id");

            $table->foreign("employee_id")->references("id")
                -> on("users") -> cascadeOnDelete("cascade");
           /*  $table->foreign("table_id")->references("id")
                -> on("tables") -> cascadeOnDelete("cascade"); */
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}