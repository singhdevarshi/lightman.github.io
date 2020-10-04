<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblVendorDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_vendor_detail', function (Blueprint $table) {
            $table->vendor_id();
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('vendor_type');
            $table->string('address1');
            $table->string('address2');
            $table->string('state');
            $table->string('city');
            $table->string('zip');
            $table->string('profile_image');
            $table->string('id_proof_type');
            $table->string('id_proof_no')->unique();
            $table->string('id_proof_image');
            
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
        Schema::dropIfExists('tbl_vendor_detail');
    }
}
