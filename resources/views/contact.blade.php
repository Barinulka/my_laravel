<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>

    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="name" id="name">
        <input type="email" name="email" id="email">
        <button type="submit">Submit</button>
    </form>

    @if (!empty($_POST))
        @dump($_POST)
    @endif
</body>
</html>