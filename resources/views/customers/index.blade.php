@extends('app')

@section('content')
    <div class="card">
        <div class="card-header">
            Customer List
        </div>
        <div class="card-body">
            <a href="{{ route('customers.create') }}" class="btn btn-primary">Create Customer</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Birth Date</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>
                <body>
                @foreach($records as $record)
                    <tr>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->email }}</td>
                        <td>{{ $record->birthdate }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>{{ $record->updated_at }}</td>
                    </tr>
                @endforeach
                </body>
            </table>
        </div>
    </div>
@endsection
