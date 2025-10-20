<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - UKS</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background:#f1f5f9;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .card {
      border-radius: 16px;
      border: none;
      box-shadow: 0 10px 30px rgba(2,132,199,.12);
    }
    .card-header {
      background: rgba(2,132,199,.12);
      color: #075985;
      font-weight: 600;
      font-size: 22px;
      text-align: center;
      border-bottom: none;
    }
    .form-control {
      border-radius: 10px;
      padding: .6rem .9rem;
      border: 1px solid #cbd5e1;
    }
    .btn-primary {
      background: #0284c7;
      border: none;
      border-radius: 10px;
      font-weight: 600;
      padding: .6rem;
    }
    .btn-primary:hover {
      background: #0369a1;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="card p-4">
    <div class="card-header mb-3">
      Login
    </div>
    <div class="card-body">
      @if(session('error')) 
        <div class="alert alert-danger">{{ session('error') }}</div> 
      @endif
      @if(session('success')) 
        <div class="alert alert-success">{{ session('success') }}</div> 
      @endif

      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
          <label>Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group mb-3">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group mb-3">
          <label>Login Sebagai</label>
          <select name="role" id="role" class="form-control" onchange="toggleAdmin()" required>
            <option value="anggota">Anggota</option>
            <option value="admin">Admin</option>
          </select>
        </div>
        <div class="form-group mb-3" id="adminField" style="display:none;">
          <label>Password Admin</label>
          <input type="password" name="admin_password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
</div>

<script>
function toggleAdmin(){
  let role = document.getElementById('role').value;
  document.getElementById('adminField').style.display = role === 'admin' ? 'block' : 'none';
}
</script>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
