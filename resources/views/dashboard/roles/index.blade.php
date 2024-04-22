@extends('layouts.dashboard.app')
@section('content')

    <div class="container">
        <h1>الأدوار</h1>
        {{-- @can('role-create') --}}
        <a class="btn btn-success" href="{{ route('roles.create') }}">انشاء دور جديد</a>
        {{-- @endcan --}}

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>الاسم</th>
            <th width="280px">التحكم</th>
        </tr>

        @foreach ($roles as $key => $role)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('roles.show', $role->id) }}">عرض</a>
                    {{-- @can('role-edit') --}}
                    <a class="btn btn-primary" href="{{ route('roles.edit', $role->id) }}">تعديل</a>
                    {{-- @endcan --}}
                    {{-- @can('role-delete') --}}
                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    {{-- @endcan --}}
                </td>
            </tr>
        @endforeach
    </table>

    </div>
@endsection
