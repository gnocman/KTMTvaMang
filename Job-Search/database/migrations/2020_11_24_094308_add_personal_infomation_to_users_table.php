<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPersonalInfomationToUsersTable extends Migration
{
    private $tableName = 'users';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->tableName)) {
            $this->editTable();
        }
    }

    private function editTable()
    {
        Schema::table($this->tableName, function (Blueprint $table) {
            $table->string('phone_number', 30)
                ->after('password')
                ->nullable()
                ->index()
                ->comment('Phone Number');
            $table->string('address')
                ->after('phone_number')
                ->nullable()
                ->index()
                ->comment('Phone Number');
            $table->date('date_of_birth')
                ->after('address')
                ->nullable()
                ->comment('Date of birth');
            $table->tinyInteger('gender')
                ->after('date_of_birth')
                ->nullable()
                ->default('2')
                ->comment('0: female | 1: male | 2: other');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable($this->tableName)) {
            $this->dropColumnsAdded();
        }
    }
    private function dropColumnsAdded()
    {
        Schema::table($this->tableName, function (Blueprint $table) {
            $table->dropColumn('phone_number', 'address', 'date_of_birth', 'gender');
        });
    }
}
