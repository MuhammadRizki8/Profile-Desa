<html>
  <head>
    <title>Login Admin</title>
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
        <form>
          <div class="mb-3">
            <label class="form-label text-white fw-bold" for="username">
              Username
            </label>
            <input
              class="form-control"
              id="username"
              placeholder="Masukkan username..."
              type="text"
            />
          </div>
          <div class="mb-3">
            <label class="form-label text-white fw-bold" for="password">
              Password
            </label>
            <input
              class="form-control"
              id="password"
              placeholder="Masukkan Password....."
              type="password"
            />
          </div>
          <button class="btn btn-login" type="submit">Login</button>
        </form>
      </div>
    </div>
  </body>
</html>
