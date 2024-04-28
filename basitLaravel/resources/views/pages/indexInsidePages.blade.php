<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Course - View</title>
</head>
<body>
<h1>Inside a folder</h1>
@include('pages.contact',['data'=>'can send'])
    {{$name}}

    @if(isset($surname))
        <h1>{{$surname}}</h1>
   @endif

    @if(isset($names))
        <ul>
        @foreach($names as $name)
            <li>{{ $loop->iteration }} - {{$name}} @if($loop->first == 'Melih') - first name @endif</li>
        @endforeach
            <p>total : {{count($names)}} names</p>
        </ul>
    @endif

    @php
    echo "with php tag";
    @endphp

    <p>html data:</p>
    {!! $blog !!}

</body>
</html>
