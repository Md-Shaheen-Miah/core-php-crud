<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="/">My Website</a>
        </div>
        <ul class="navbar-links">
            <li><a href="{{ ('/') }}">Home</a></li>
            <li><a href="/">API-creat</a></li>
            <li><a href="/about">CRUD</a></li>
            <li><a href="{{ ('/file-upload') }}">FileUpload</a></li>
            <li><a href="/contact">ImageUpload</a></li>
            <li><a href="/blog">Blog</a></li>
        </ul>
    </nav>
</body>
</html>
