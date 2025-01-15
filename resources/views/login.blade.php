<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Human Capital Service</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, #00457C, #007BB3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .login-container {
            background: #fff;
            color: #333;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            padding: 30px;
            text-align: center;
            opacity: 1;
            transition: transform 0.8s, opacity 0.8s;
        }

        .hidden {
            opacity: 0;
            transform: translateY(-100%);
        }

        .login-container img {
            width: 120px;
            margin-bottom: 20px;
        }

        .login-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #00457C;
        }

        .login-container p {
            font-size: 14px;
            margin-bottom: 20px;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 25px;
            font-size: 14px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            background: #00457C;
            color: #fff;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-primary:hover {
            background: #003366;
        }

        footer {
            margin-top: 20px;
            font-size: 12px;
            color: #aaa;
        }
    </style>
</head>

<body>
    <div class="login-container" id="login-container">
        <img src="../../assets/images/logo/pfplen.png" alt="PT Len Industri">
        <h1>Human Capital Service</h1>
        <p>Welcome to PT. Len Industri (Persero). Please log in to continue.</p>
        <form action="/actionLogin" method="POST" >
            {{-- id="login-form" --}}
            @csrf
            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif
            <input type="text" name="email" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn-primary" type="submit">Log In</button>
        </form>
        {{-- <a href="#">Forgot Password?</a> --}}
        <footer>&copy; 2025 PT. Len Industri (Persero). All rights reserved.</footer>
    </div>

    <script>
        // JavaScript untuk animasi dan redirect
        const loginForm = document.getElementById('login-form');
        const loginContainer = document.getElementById('login-container');

        loginForm.addEventListener('submit', (event) => {
            event.preventDefault(); // Mencegah form melakukan refresh
            loginContainer.classList.add('hidden'); // Tambahkan kelas animasi

            // Redirect ke dashboard setelah animasi selesai
            setTimeout(() => {
                window.location.href = '/'; // Ganti dengan URL dashboard Anda
            }, 800); // Waktu sesuai durasi animasi (0.8 detik)
        });
    </script>
</body>

</html>
