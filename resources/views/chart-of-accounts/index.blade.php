@extends('layout.app')

@section('content')
<div class="container">
    <h1>Chart of Accounts</h1>
    <div class="mb-3">
        <a class="btn btn-secondary btn-lg"href="{{ route('chart-of-accounts.create')}}" >Create</a>
    </div>
    <table class="table table-striped table-hover table-bordered"> 
        <thead class="table-dark text-center">
            <tr>
                <th>Account Code</th>
                <th>Account Name</th>
                <th>Account Type</th>
                <th>Normal Balance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chartOfAccounts as $account)
                <tr>
                    <td>{{ $account->account_code }}</td>
                    <td>{{ $account->account_name }}</td>
                    <td>{{ $account->account_type }}</td>
                    <td>{{ $account->normal_balance }}</td>
                    <td>
                        <a href="{{ route('chart-of-accounts.edit', $account->id) }}" class="btn btn-light">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form method="POST" action="{{ route('chart-of-accounts.destroy', $account->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-dark" onclick="return confirm('Are you sure you want to delete this course?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-dark btn-lg" href="{{ route('home') }}">Back to Dashboard</a>
</div>
@endsection