<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('sales_id')->unique();
            $table->string('customer_name')->nullable();
            $table->string('customer_cell_number')->nullable();
            $table->string('stylist_name')->nullable();
            $table->string('hair_style_type')->nullable();
            $table->float('amount_due')->nullable();
            $table->date('date_performed')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
