<?php namespace Benrhall\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('contact_number')->nullable();
            $table->string('job_role')->nullable();
        });
    }

    public function down()
    {
        $table->dropDown([
            'contact_number',
            'job_role'
        ]);
    }

}
