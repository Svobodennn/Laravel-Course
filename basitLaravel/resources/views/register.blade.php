<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Course - Form Validations</title>
</head>
<body>
    <h1>Laravel Course - Form Validations</h1>
    <div style="color: red">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
    <form method="post" action="{{route('register.post')}}">
        @csrf <!-- Required -->
        <div><label for="name">Name Surname</label>
            <input type="text" name="name" value="{{old('name')}}">
        </div>
        <div><label for="">Email</label>
            <input type="email" name="email" value="{{old('email')}}">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
           const input = document.getElementsByName('password')[0];

            input.addEventListener('blur',function (){
                input.type = 'password';
            })
            input.addEventListener('click',function (){
                input.type = 'text';
            })
        });
    </script>
</body>
</html>
