extends('layouts.app')

section('content')
    <h1>My Skills</h1>
    <ul>
        @foreach($skills as $skill)
            <li>{{ $skill->name }} - Description: {{ $skill->description}}</li>
        @endforeach
    </ul>
endsection