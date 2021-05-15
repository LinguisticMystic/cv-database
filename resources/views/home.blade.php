@extends('layout')

@section('title')
    Home
@endsection

<div class="m-4">
    <a href="create">
        Add new CV to list
    </a>
</div>

@if(session()->has('message'))
    <div class="m-4 text-green-600">
        <strong>Success!</strong>
        <span>{{ session()->get('message') }}</span>
    </div>
@endif

<div class="m-4">
    <table>
        <tr class="header-row">
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th>CV created at</th>
            <th>CV updated at</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Print</th>
        </tr>
        @if($people->first())
            @foreach($people as $person)
                <tr class="entry-row">
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->first_name }} {{ $person->last_name }}</td>
                    <td>{{ $person->phone }}</td>
                    <td>{{ $person->email }}</td>
                    <td>{{ $person->created_at }}</td>
                    <td>{{ $person->updated_at }}</td>
                    <td>

                        <form action="/{{ $person->id }}/edit" method="get">
                            <button id="{{ $person->id }}">
                                Edit
                            </button>
                        </form>

                    </td>
                    <td class="px-4 py-3">

                        <form action="/{{ $person->id }}/delete" method="post">
                            @csrf
                            <button type="submit">
                                Delete
                            </button>
                        </form>

                    </td>

                    <td>
                        <a href="/{{ $person->id }}/print" target="_blank">
                            <img src="img/printer-icon-blue.png" width="30px">
                        </a>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>

    {{ $people->links() }}

</div>
