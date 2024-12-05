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
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Example</title>
</head>
<body>
    <div style="max-width: 800px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
        <a href="{{ url('crud/create') }}">Create </a>
        <h2 style="text-align: center;">User List</h2>
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead>
                <tr>
                    <th style="border: 1px solid #ddd; padding: 10px; background-color: #f2f2f2;">ID</th>
                    <th style="border: 1px solid #ddd; padding: 10px; background-color: #f2f2f2;">Name</th>
                    <th style="border: 1px solid #ddd; padding: 10px; background-color: #f2f2f2;">Email</th>
                    <th style="border: 1px solid #ddd; padding: 10px; background-color: #f2f2f2;">Address</th>
                    <th style="border: 1px solid #ddd; padding: 10px; background-color: #f2f2f2;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 10px;">1</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">John Doe</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">john@example.com</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">123-456-7890</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">123 Main St</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 10px;">2</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">Jane Smith</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">jane@example.com</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">987-654-3210</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">456 Elm St</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</body>
</html>

</body>
</html>
