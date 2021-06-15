@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($Tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Tasks as $Task)
                <tr>
                    <td>{{ $Task->id }}</td>
                    <td>{{ $Task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection
