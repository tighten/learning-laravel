<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAliasesTable extends Migration
{
    public function up()
    {
        Schema::create('aliases', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('phone', 20);
            $table->string('address');
            $table->string('cc_type', 50);
            $table->string('cc_number', 100);
            $table->dateTime('cc_expiration');
            $table->string('company', 100);
            $table->string('job_title', 100);
            $table->string('company_email', 100);
            $table->string('username', 100);
            $table->string('password', 100);
            $table->string('ip_address', 100);
            $table->string('mac_address', 100);
            $table->text('profile');
            $table->boolean('burned');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aliases');
    }
}
