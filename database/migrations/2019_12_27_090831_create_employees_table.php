<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'employees', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name');
            $table->date('dob')->nullable();
            $table->string('gender');
            $table->string('phone')->nullable();
            $table->string('address');
            $table->string('email');
            $table->string('password');

            $table->string('employee_id');
            $table->integer('branch_id');
            $table->integer('department_id');
            $table->integer('designation_id');
            $table->string('company_doj')->nullable();
            $table->string('documents')->nullable();

            $table->string('account_holder_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_identifier_code')->nullable();
            $table->string('branch_location')->nullable();
            $table->string('tax_payer_id')->nullable();
            $table->integer('salary_type')->nullable();
            $table->integer('salary')->nullable();
            $table->integer('is_active')->default('1');
            $table->integer('created_by');

            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('num_documento')->nullable();
            $table->date('fecha_vencimiento_id')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('spouse_name')->nullable();
            $table->integer('children')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('driver_license')->nullable();
            $table->string('driver_license_type')->nullable();
            $table->string('has_vehicle')->nullable();
            $table->string('license_plate')->nullable();
            $table->string('nationality')->nullable();
            $table->string('health_conditions')->nullable();
            $table->timestamps();
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
