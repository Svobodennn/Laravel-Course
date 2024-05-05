<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Course - Request</title>
</head>
<body>
    <h1>Laravel Course - Request</h1>
    <form method="post" action="{{route('contact.post')}}">
        @csrf <!-- Required -->
        <div><label for="name">Name Surname</label>
            <input type="text" name="name"></div>
        <div><label for="">Email</label>
            <input type="email" name="email"></div>
        <div><label for="subject">Contact Options</label>
            <select name="subject" id="subject">
                <option value="Business">Business</option>
                <option value="Support">Support</option>
            </select></div>
        <div><label for="message">Your Message</label>
            <textarea name="message" id="message" cols="30" rows="3"></textarea></div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
