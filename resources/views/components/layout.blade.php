<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Boarding {{ $title ?? 'Welcome to JOP_ BOARDING' }}</title>
</head>
<body>
    <h1>Job Boarding</h1>
    <h2>
        <a href="/">Home</a>
        <a href="about">About</a>
        <a href="contact">Contact</a>
    </h2>
    {{ $slot }}
</body>
</html>
