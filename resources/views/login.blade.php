<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        /* Định dạng cho liên kết */
        a {
            text-decoration: none;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        /* Màu cho liên kết Facebook */
        .facebook {
            background-color: #3b5998;
        }

        /* Màu cho liên kết Google */
        .google {
            background-color: #dd4b39;
        }

        /* Căn giữa */
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        /* Khoảng cách giữa hai liên kết */
        .space {
            margin-right: 10px;
        }

        /* Định dạng cho tiêu đề Login */
        h1 {
            text-align: center;
            color: #333333; /* Màu cho tiêu đề */
        }

        /* Định dạng cho nút Login */
        input[type="submit"] {
            background-color: #3498db; /* Màu cho nút Login */
            color: #ffffff; /* Màu chữ cho nút Login */
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Tiêu đề Login căn giữa -->
    <h1>Login</h1>

    <!-- Form đăng nhập tiêu chuẩn căn giữa -->
    <div class="centered">
        <form method="POST">
            <!-- Các trường nhập (ví dụ: email và password) -->
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>

            <input type="submit" value="Login">
        </form>
    </div>

    <hr>

    <!-- Căn giữa liên kết -->
    <div class="centered">
        <!-- Nút đăng nhập bằng Facebook -->
        <a class="facebook" href="{{ route('login.facebook') }}">Facebook</a>
        <span class="space"></span>
        <!-- Đăng nhập bằng Google -->
        <a class="google" href>Google</a>
    </div>
</body>
</html>
