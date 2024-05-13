@extends('layouts.app')

@section('content')
<div class="grid grid-cols-3 divide-x">
    <div>
</div>
    <div>
    <table class="hover: table fixed bg-white">
    <thead>
        <tr>
        <th>#</th>
        <th>Email</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Numer telefonu</th>
        <th>Akcje</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
            <th>{{ $user->id }}</th>
            <td>{{ $user->email }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->phone_number }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
<div>
{{ $users->links() }}
</div>
</div>
@endsection