@extends('app')

@section('main')
    <div class="sidebar">
        <ul>
            <li><a link href="{{ route('screen1') }}" onkeyup="search()">Screen 1</a></li>
            <li><a link href="#" onclick="renderTemplate('screen2')">Screen 2</a></li>
            <li><a link href="#" onclick="renderTemplate('screen3')">Screen 3</a></li>
        </ul>
    </div>
    <div class="content">
        <table border="1">
            <tr>
                <td colspan="4" style="align-content: center; padding: 10px 10px 0 0">
                    Search:
                    <input type="text" name="search" id="search" />
                </td>
            </tr>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Notes</th>
            </tr>

            @foreach($result as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->notes }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

@section('customJs')
@endsection

@section('customCss')
    .sidebar {
        width: 20%;
        height: 100vh;
        background-color: lightblue;
        float: left;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .content {
        display: inline-block;
        text-align: center;
        width: 80%;
        height: 100vh;
        background-color: #d6f5d6;
        float: left;
    }
@endsection
