{{-- Pass data into header --}}
{{-- x-header is used since file name is header.blade.php --}}
{{-- componentName variable is defined in Header.php in App folder --}}

{{-- <x-header componentName="{{$name}}"/> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello {{$name}}</h1>
</body>
</html> --}}

@foreach ($name as $data)
<h1>{{$data}}</h1>
@endforeach

<script>
    var data = @json($name);
    console.log(data[0]);
    console.log(data);
</script>
