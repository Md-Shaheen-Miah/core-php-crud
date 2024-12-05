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
    <div style="max-width: 500px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
        <h2 style="text-align: center; font-family: Arial, sans-serif;">Contact Us</h2>
        
        <!-- Form starts here -->
        <form action="/submit-contact" method="POST" style="display: flex; flex-direction: column;">
            <!-- Laravel CSRF Token -->
            @csrf

            <!-- Name Field -->
            <label for="name" style="margin-top: 10px; font-size: 16px; color: #333;">Name</label>
            <input type="text"  name="name" placeholder="Enter your name" 
                   style="padding: 10px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">

            <!-- Email Field -->
            <label for="email" style="margin-top: 10px; font-size: 16px; color: #333;">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" 
                   style="padding: 10px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">

            <!-- Phone Field -->
            <label for="phone" style="margin-top: 10px; font-size: 16px; color: #333;">Address</label>
            <input type="text" id="phone" name="adress" placeholder="Enter your phone number" 
                   style="padding: 10px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">

          
            <!-- Submit Button -->
            <button type="submit" 
                    style="margin-top: 15px; padding: 10px; font-size: 16px; color: white; background-color: #333; border: none; border-radius: 4px; cursor: pointer;">
                Submit
            </button>
        </form>
    </div>
</body>
</html>
