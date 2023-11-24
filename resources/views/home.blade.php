<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .content {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Welcome to Your Home Page!</h1>
        
        <div>
            <h2>User Information:</h2>
            <div>
                <img src="{{ $userData['avatar'] }}" alt="Avatar">
                <p>Name: {{ $userData['name'] }}</p>
                <p>Congratulations! You have successfully logged in.</p>
            </div>
        </div>
    </div>
    <a href="logout">Logout</a>
</body>
</html>