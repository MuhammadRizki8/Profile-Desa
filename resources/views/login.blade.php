<html>
  <head>
    <title>Desa Tangsimekar</title>
    <link
      crossorigin="anonymous"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/admin.css" />
  </head>
  <body>
    <div class="bg">
      <div class="login-container">
        <img
          alt="Logo of the organization"
          height="100"
          src="assets/images/logodesa.png"
          width="100"
        />
        <h2>Login Admin</h2>
        <!-- Alert for login error -->
        @if ($errors->has('login'))
        <div class="alert alert-danger" role="alert">
          {{ $errors->first('login') }}
        </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="mb-3">
            <label class="form-label text-white fw-bold" for="name">
              Username
            </label>
            <input
              class="form-control @error('name') is-invalid @enderror"
              id="name"
              name="name"
              placeholder="Masukkan username..."
              type="text"
              value="{{ old('name') }}"
            />
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label text-white fw-bold" for="password">
              Password
            </label>
            <input
              class="form-control @error('password') is-invalid @enderror"
              id="password"
              name="password"
              placeholder="Masukkan Password....."
              type="password"
            />
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <button class="btn btn-login btn-primary w-100" type="submit">Login</button>
        </form>
      </div>
    </div>
  </body>
</html>
