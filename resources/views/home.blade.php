@extends('app')

@section('main')
    <div class="sidebar">
        <ul>
            <li><a link href="{{ route('screen1') }}" >Screen 1</a></li>
            <li><a link href="#" onclick="renderTemplate('screen2')">Screen 2</a></li>
            <li><a link href="#" onclick="renderTemplate('screen3')">Screen 3</a></li>
        </ul>
    </div>
    <div class="content">Content area</div>
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
