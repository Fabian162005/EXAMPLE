<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
     <!-- Favicon / Logo -->
    <link rel="icon" href="{{ asset('images/logogpcanal.jpg') }}" type="image/jpeg">

  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/admin/loginadmin.css') }}">
</head>
<body>
  <div class="login-container">
    <h2>Admin Login</h2>
    @if(session('error'))
      <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
        <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <label>Usuario</label>
        <input type="text" name="username" required autofocus>
        <label>Contraseña</label>
        <input type="password" name="password" required>
        <button type="submit">Ingresar</button>
        </form>
  </div>
</body>
</html>
