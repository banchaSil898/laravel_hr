<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('view_employee', function (Blueprint $table) {
            $table->integer('id')->primary();// Primary key
            $table->integer('ep_id');
            $table->string('ep_code', 10)->nullable();
            $table->integer('ep_ref_personal_id')->nullable();
            $table->string('prefix_name_th', 50)->nullable();
            $table->string('prefix_name_en', 50)->nullable();
            $table->string('ps_name_th', 200)->nullable();
            $table->string('ps_lastname_th', 200)->nullable();
            $table->string('ps_name_en', 200)->nullable();
            $table->string('ps_lastname_en', 200)->nullable();
            $table->integer('ep_ref_type_id')->nullable();
            $table->string('type_name', 200)->nullable();
            $table->dateTime('ep_start')->nullable();
            $table->dateTime('ep_end')->nullable();
            $table->dateTime('ep_end_doc')->nullable();
            $table->string('ep_pw', 50)->nullable();
            $table->string('ep_status', 1);
            $table->dateTime('ep_submit_date')->nullable();
            $table->integer('ep_ref_admin_id')->nullable();
            $table->string('ps_name_full', 402);
            $table->integer('position_posit_id')->nullable();
            $table->string('post_name', 255)->nullable();
            $table->integer('position_comp_id')->nullable();
            $table->string('T_Company', 50)->nullable();
            $table->integer('position_sect_id')->nullable();
            $table->string('Section_name', 50)->nullable();
            $table->integer('position_dept_id')->nullable();
            $table->string('dept_name', 50)->nullable();
            $table->string('position_active', 1)->nullable();
            $table->string('position_status', 50)->nullable();
            $table->dateTime('position_start_date')->nullable();
            $table->dateTime('position_resign_date')->nullable();
            $table->integer('contact_id')->nullable();
            $table->text('contact_email')->nullable(); // Use text for longer strings
            $table->string('contact_table', 50)->nullable();
            $table->string('contact_phone', 50)->nullable();
            $table->string('contact_mobile1', 50)->nullable();
            $table->string('contact_mobile2', 50)->nullable();
            $table->integer('contact_personal_id')->nullable();
            $table->string('ps_gender', 50)->nullable();
            $table->string('ps_blood', 10)->nullable();
            $table->string('ps_national_id', 20)->nullable();
            $table->dateTime('ps_national_date_start')->nullable();
            $table->dateTime('ps_national_date_end')->nullable();
            $table->dateTime('ps_birthday')->nullable();
            $table->string('ps_nationality', 50)->nullable();
            $table->string('ps_race', 50)->nullable();
            $table->string('ps_religion', 50)->nullable();
            $table->string('ps_status_marital', 50)->nullable();
            $table->timestamps(); // Add timestamps if needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_employee');
    }
};
