<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name_english');
            $table->string('student_name_bangla')->nullable();
            $table->string('mobile_number');
            $table->string('email')->nullable();
            $table->date('date_of_birth');
            $table->string('birth_certificate')->nullable();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('religion')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('present_school_name')->nullable();
            $table->string('father_name_english');
            $table->string('father_name_bangla')->nullable();
            $table->date('father_date_of_birth')->nullable();
            $table->string('father_nid_number')->nullable();
            $table->string('father_profession')->nullable();
            $table->string('father_contact_number')->nullable();
            $table->string('mother_name_english');
            $table->string('mother_name_bangla')->nullable();
            $table->date('mother_date_of_birth')->nullable();
            $table->string('mother_nid_number')->nullable();
            $table->string('mother_profession')->nullable();
            $table->decimal('parents_yearly_income', 10, 2)->nullable();
            $table->string('present_address_village');
            $table->string('present_address_post_block');
            $table->string('present_address_thana');
            $table->string('present_address_district');
            $table->string('permanent_address_village')->nullable();
            $table->string('permanent_address_post_block')->nullable();
            $table->string('permanent_address_thana')->nullable();
            $table->string('permanent_address_district')->nullable();
            $table->string('class');
            $table->string('group_department')->nullable();
            $table->string('class_section')->nullable();
            $table->string('class_shift')->nullable();
            $table->string('academic_year');
            $table->string('student_quotes')->nullable();
            $table->boolean('get_admission_in_any_institution')->default(false);
            $table->string('student_image')->nullable();
            
        $table->string('student_status')->nullable();
        $table->string('admission_status')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
