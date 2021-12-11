{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact Page</h1>
</body>
</html> --}}

@extends('layouts.app')

@section('content')
    Contact Page
@endsection

@section('data')
    @if(count($people))
        <ul>
            @foreach ($people as $people)
                {{$people}}
            @endforeach
        </ul>
    @endif
@endsection

{{-- Whatever will be on the @section('content') will be included in app.blade in @yield('content') --}}

@section('footer')
    <script type="text/javascript">alert('Contact Page')</script>
@endsection
