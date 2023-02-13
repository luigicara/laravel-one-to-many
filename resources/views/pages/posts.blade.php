@extends('layouts.main-layout')

@section('content')
    
    <h1 class="mt-5">Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li class="my-5">
                <h3>{{ $post -> title }}</h3>            
                <div>{{ $post -> body }}</div>
                <br>
                <h4>User</h4> 
                {{ $post -> person -> name }} - {{ $post -> person -> mail }}
                <br>
                Phone: {{ $post -> person -> personDetail -> phone }}
                <br>
                Address: {{ $post -> person -> personDetail -> address }}
                <hr>
            </li>
        @endforeach
    </ul>

@endsection