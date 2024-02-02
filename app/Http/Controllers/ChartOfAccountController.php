<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChartOfAccount;

class ChartOfAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin')->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    // Display a list of all chart of accounts.
    public function index()
    {
        $chartOfAccounts = ChartOfAccount::all();
        return view('chart-of-accounts.index', compact('chartOfAccounts'));
    }

    // Display a form to create a new chart of account.
    public function create()
    {
        return view('chart-of-accounts.create');
    }

    // Store a new chart of account in the database.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'account_code' => 'required|unique:chart_of_accounts',
            'account_name' => 'required',
            'account_type' => 'required|in:Asset,Liability,Equity,Revenue,Expense',
            'normal_balance' => 'required|in:Debit,Credit',
        ]);
    
        $chartOfAccount = ChartOfAccount::create($validatedData);
        return redirect('/chart-of-accounts')->with('success', 'Account created successfully.');
    }

    // Display a form to edit an existing chart of account.
    public function edit(ChartOfAccount $chartOfAccount)
    {
        return view('chart-of-accounts.edit', compact('chartOfAccount'));
    }

    // Update an existing chart of account in the database.
    public function update(Request $request, ChartOfAccount $chartOfAccount)
    {
        $validatedData = $request->validate([
            'account_code' => 'required|unique:chart_of_accounts,account_code,' . $chartOfAccount->id,
            'account_name' => 'required',
            'account_type' => 'required|in:Asset,Liability,Equity,Revenue,Expense',
            'normal_balance' => 'required|in:Debit,Credit',
        ]);
    
        $chartOfAccount->update($validatedData);
        return redirect('/chart-of-accounts')->with('success', 'Account updated successfully.');
    }

    // Delete a chart of account from the database.
    public function destroy(ChartOfAccount $chartOfAccount)
    {
        $chartOfAccount->delete();
        return redirect('/chart-of-accounts')->with('success', 'Account deleted successfully.');
    }

}
