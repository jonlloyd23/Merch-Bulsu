  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- bootstrap CDN -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
          <!-- CSS -->
          <link rel="stylesheet" href="../styles/login.css">
          <title>Login</title>
  </head>
  <body>
      <!-- login -->
      <section>
      <body>
     <!-- register -->
     <form>
  <h3 class="fs-3">Login Here</h3>

  <label for="username">Username</label>
  <input type="text" placeholder="Email or Phone" id="username">

  <label for="password">Password</label>
  <input type="password" placeholder="Password" id="password">
  <!-- button -->
    <div class="d-flex justify-content-center align-items-center mt-5 mb-0">
        <button type="button"  class="btn btn-secondary btn-md">Login</button>
    </div>
    <!-- register -->
    <div class="d-flex justify-content-center align-items-center mt-2">
    <p>Don't have an account? <a href="./register.php" class="link-info">Register here</a></p>
    </div>
  <div class="social">
    <div class="go"><i class="fab fa-google"></i> Google</div>
    <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
  </div>
</form>
  </section>
  </body>
  </html>