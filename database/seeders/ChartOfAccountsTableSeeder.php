<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line

class ChartOfAccountsTableSeeder extends Seeder
{
    public function run()
    {
        $accounts = [
        [
            'account_code' => '101', 
            'account_name' => 'Cash', 
            'account_type' => 'Asset', 
            'normal_balance' => 'Debit'
        ],
        [
            'account_code' => '201', 
            'account_name' => 'Accounts Receivable', 
            'account_type' => 'Asset', 'normal_balance' => 'Debit'
        ],
        [
            'account_code' => '301', 
            'account_name' => 'Supplies', 
            'account_type' => 'Asset', 
            'normal_balance' => 
            'Debit'
        ],
        [
            'account_code' => '401', 
            'account_name' => 'Accounts Payable', 
            'account_type' => 'Liability', 
            'normal_balance' => 'Credit'],
        [
            'account_code' => '501', 
            'account_name' => 'Revenue', 
            'account_type' => 'Revenue', 
            'normal_balance' => 'Credit'],
        ];

        // Insert the sample accounts into the "chart_of_accounts" table
        DB::table('chart_of_accounts')->insert($accounts);
    }
}