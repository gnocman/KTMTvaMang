<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelColumnAndActivationColumnToUsersTable extends Migration
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
            $table->tinyInteger('level')
                ->after('password')
                ->default(0)
                ->comment('1 -> Admin | 0 -> User');
            $table->boolean('activation')
                ->after('level')
                ->default(1)
                ->comment('0 -> Disabled | 1 -> Enabled');
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
            $table->dropColumn('two_factor_secret', 'two_factor_recovery_codes');
        });
    }
}
