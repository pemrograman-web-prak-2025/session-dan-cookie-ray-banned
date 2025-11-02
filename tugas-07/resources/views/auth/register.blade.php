<!DOCTYPE html>
<html>
<head>
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
  <title>Register</title>
</head>
<body>
  <div class="heading">Register - List of Poisons to Kill Someone You Find Annoying</div>

  <div class="display-form" style="max-width:600px; margin:20px auto; padding:20px;">
    <form action="{{ route('register.post') }}" method="post">
      @csrf

      <p id="text">
        Name:<br>
        <input type="text" name="name" value="{{ old('name') }}" required>
      </p>

      <p id="text">
        Email:<br>
        <input type="email" name="email" value="{{ old('email') }}" required>
      </p>

      <p id="text">
        Password:<br>
        <input type="password" name="password" required>
      </p>

      <p id="text">
        Confirm Password:<br>
        <input type="password" name="password_confirmation" required>
      </p>

      <button type="submit" class="add-poison" style="width:auto; display:inline-block;">Register</button>
    </form>

    <p id="text">Already have an account? <a href="{{ route('login') }}">Login</a></p>
  </div>
</body>
</html>
