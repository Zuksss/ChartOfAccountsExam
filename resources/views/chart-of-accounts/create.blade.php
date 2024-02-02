@extends('layout.app')

@section('content')
<div class="container">
<h2>Create New Account</h2>
<div class="card bg-light">
        <div class="card-body">
    <form method="POST" action="{{ route('chart-of-accounts.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="account_code" class="form-label" ><h5>Account Code:</h5></label>
            <input type="text" id="account_code" name="account_code" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="account_name" class="form-label"><h5>Account Name:</h5></label>
            <input type="text" id="account_name" name="account_name"  class="form-control"required>
        </div>

        <div class="mb-3">
            <label for="account_type" class="form-label"><h5>Account Type:</h5></label>
            <select id="account_type" name="account_type" class="form-control">
                <option value="Asset">Asset</option>
                <option value="Liability">Liability</option>
                <option value="Equity">Equity</option>
                <option value="Revenue">Revenue</option>
                <option value="Expense">Expense</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="normal_balance" class="form-label"><h5>Normal Balance:</h5></label>
            <select id="normal_balance" name="normal_balance" class="form-control">
                <option value="Debit">Debit</option>
                <option value="Credit">Credit</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success btn-lg">Create Account</button>
    </form>
    </div>
 </div>
 <a href="{{ route('chart-of-accounts.index') }}" class="btn btn-dark btn-lg mt-3">Back to Chart Of Accounts</a>
</div>
@endsection

