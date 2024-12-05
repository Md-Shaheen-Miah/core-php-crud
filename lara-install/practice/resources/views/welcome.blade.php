<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
</head>
<body style="margin: 0%; padding:0%;
">
    <nav style="background-color: #333; padding: 10px;">
        <div style="display: flex; align-items: center; justify-content: space-between; max-width: 1200px; margin: 0 auto;">
            <!-- Logo -->
            <div style="color: white; font-size: 24px; font-weight: bold;">
                MyLaravelApp
            </div>

            <!-- Navigation Links -->
            <div style="display: flex; gap: 20px;">
                <a href="/" style="color: white; text-decoration: none; font-size: 16px;">Home</a>
                <a href="{{ url('crud/view') }}" style="color: white; text-decoration: none; font-size: 16px;">CRUD</a>
                <a href="/services" style="color: white; text-decoration: none; font-size: 16px;">Services</a>

                <a href="/contact" style="color: white; text-decoration: none; font-size: 16px;">Contact</a>
            </div>

            <!-- User Actions -->
            <div style="display: flex; gap: 15px;">
                <a href="/login" style="color: white; text-decoration: none; font-size: 16px;">Login</a>
                <a href="/register" style="color: white; text-decoration: none; font-size: 16px;">Register</a>
            </div>
        </div>
    </nav>
    <h1> this a  home page</h1>
</body>
</html>
