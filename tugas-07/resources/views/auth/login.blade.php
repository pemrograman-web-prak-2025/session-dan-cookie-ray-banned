<!DOCTYPE html>
<html>
<head>
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
  <title>Login</title>
</head>
<body>
  <div class="heading">Login - List of Poisons to Kill Someone You Find Annoying</div>

  <div class="display-form" style="max-width:500px; margin:20px auto; padding:20px;">
    <form action="{{ route('login.post') }}" method="post">
      @csrf

      <p id="text">
        Email:<br>
        <input type="email" name="email" value="{{ old('email') }}" required>
      </p>

      <p id="text">
        Password:<br>
        <input type="password" name="password" required>
      </p>

      <p id="text">
        <label><input type="checkbox" id="remember" name="remember"> Remember me</label>
      </p>

      <button type="submit" class="add-poison" style="width:auto; display:inline-block;">Login</button>
    </form>

    <p id="text">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
  </div>
</body>
</html>
