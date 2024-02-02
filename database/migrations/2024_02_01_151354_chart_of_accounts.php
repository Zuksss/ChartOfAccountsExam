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
        //Create Scema

        Schema::create('chart_of_accounts', function(Blueprint $table){
            $table->id(); //primary key, auto-increment
            $table->string('account_code')->unique(); //string, unique
            $table->string('account_name'); //string
            $table->enum('account_type', ['Asset', 'Liability', 'Equity', 'Revenue', 'Expense']); // enum
            $table->enum('normal_balance', ['Debit', 'Credit']); // enum
            $table->timestamps(); //created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chart_of_accounts');
    }
};
