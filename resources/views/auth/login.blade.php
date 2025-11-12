<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | Cleanify</title>
<style>
    body { font-family: Arial, sans-serif; background: #f5f5f5; display: flex; justify-content: center; align-items: center; height: 100vh; }
    .login-container { background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); width: 350px; }
    .logo { font-weight: bold; font-size: 2rem; text-align: center; margin-bottom: 1.5rem; }
    input { width: 100%; padding: 0.8rem; margin-bottom: 1rem; border: 1px solid #ccc; border-radius: 5px; }
    button { width: 100%; padding: 0.8rem; background: #FBC02D; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; }
</style>
</head>
<body>
<div class="login-container">
    <div class="logo">CLEANIFY</div>

    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>