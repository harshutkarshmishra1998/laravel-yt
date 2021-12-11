<?php //dd($id); ?>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Show Posts</h1>
    <p>Post number {{$id}}</p>
</body>
</html> --}}

@extends('layouts.app')

@section('content')
    Show Posts
    <br>
    Post number {{$id}}
@endsection


@section('footer')
    <script type="text/javascript">alert('Post Page')</script>
@endsection
