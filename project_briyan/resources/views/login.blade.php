<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #e0f0ff;">

    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div style="background-color: white; padding: 40px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 300px;">
            <h2 style="text-align: center; color: #007bff;">Login</h2>

            @if(session('error'))
                <p style="color:red; text-align:center;">{{ session('error') }}</p>
            @endif

            <form method="POST" action="/login">
                @csrf
                <label>Email:</label><br>
                <input type="email" name="email" style="width: 100%; padding: 8px; margin: 5px 0 15px 0; border: 1px solid #ccc; border-radius: 5px;"><br>

                <label>Password:</label><br>
                <input type="password" name="password" style="width: 100%; padding: 8px; margin: 5px 0 20px 0; border: 1px solid #ccc; border-radius: 5px;"><br>

                <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px; font-weight: bold;">Login</button>
            </form>
        </div>
    </div>

</body>
</html>
