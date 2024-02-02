@extends('layout.app')

@section('content')
<div class="container">
<h2>Edit Account: {{ $chartOfAccount->account_name }}</h2>
<div class="card bg-light">
    <div class="card-body">
    <!-- If there are any errors, display them -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form method="POST" action="{{ route('chart-of-accounts.update', $chartOfAccount->id) }}" method="post">
        @csrf
        @method('PUT') <!-- Spoofing PUT method because HTML forms do not support PUT natively -->

        <div class="mb-3">
            <label for="account_code" class="form-label"><h5>Account Code:</h5></label>
            <input type="text" id="account_code" name="account_code" value="{{ old('account_code', $chartOfAccount->account_code) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="account_name" class="form-label"><h5>Account Name:</h5></label>
            <input type="text" id="account_name" name="account_name" value="{{ old('account_name', $chartOfAccount->account_name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="account_type" class="form-label"><h5>Account Type:</h5></label>
            <select id="account_type" name="account_type" class="form-control">
                <option value="Asset" {{ $chartOfAccount->account_type == 'Asset' ? 'selected' : '' }}>Asset</option>
                <option value="Liability" {{ $chartOfAccount->account_type == 'Liability' ? 'selected' : '' }}>Liability</option>
                <option value="Equity" {{ $chartOfAccount->account_type == 'Equity' ? 'selected' : '' }}>Equity</option>
                <option value="Revenue" {{ $chartOfAccount->account_type == 'Revenue' ? 'selected' : '' }}>Revenue</option>
                <option value="Expense" {{ $chartOfAccount->account_type == 'Expense' ? 'selected' : '' }}>Expense</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="normal_balance" class="form-label"><h5>Normal Balance:</h5></label>
            <select id="normal_balance" name="normal_balance" class="form-control">
                <option value="Debit" {{ $chartOfAccount->normal_balance == 'Debit' ? 'selected' : '' }}>Debit</option>
                <option value="Credit" {{ $chartOfAccount->normal_balance == 'Credit' ? 'selected' : '' }}>Credit</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success btn-lg">Update Account</button>
    </form>
    </div>
</div>
<a href="{{ route('chart-of-accounts.index') }}" class="btn btn-dark btn-lg mt-3">Back to Chart Of Accounts</a>
</div>
@endsection
