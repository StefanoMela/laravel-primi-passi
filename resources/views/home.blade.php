<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.navbar')
    <h1> {{ $class }}</h1>

    <ul>
        @forelse ($students as $student)
        <li>{{ $student}} </li>
        @empty
        <li>No students yet</li>
        @endforelse
    </ul>

</body>

</html>