<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->unsignedBigInteger('invoice_id');
            $table->unsignedBigInteger('fruit_id');
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('amount');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('invoice_id')
                ->references('id')
                ->on('invoices')
                ->onUpdate('cascade')
                ->onDelete('cascade')
            ;

            $table->foreign('fruit_id')
                ->references('id')
                ->on('fruits')
                ->onUpdate('cascade')
                ->onDelete('cascade')
            ;
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_details');
    }
}
