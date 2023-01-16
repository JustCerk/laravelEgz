<?php

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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('regist_list_id')->constrained();
            $table->string('Sask_nr');
            $table->date('Sask_data');
            $table->foreignId('Sask_type_id')->constrained();
            $table->string('Amtrosios_salies_pav');
            $table->string('Amtrosios_salies_PVM_kodas');
            $table->decimal('Visa_suma',9,2);
            $table->foreignId('p_v_m_type_id')->constrained();
            $table->integer('PVM_proc');
            $table->decimal('PVM_suma',9,2);
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
        Schema::dropIfExists('invoices');
    }
};
