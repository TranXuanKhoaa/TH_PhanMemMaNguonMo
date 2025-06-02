<?php include 'app/views/shares/header.php'; ?>

<!-- Link Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

<style>
  /* Reset & font */
  body, html {
    height: 100%;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #667eea, #764ba2);
    overflow: hidden;
  }

  /* Background chấm sáng nhẹ */
  body::before {
    content: "";
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: radial-gradient(circle at 20% 20%, rgba(255,255,255,0.08), transparent 25%),
                radial-gradient(circle at 80% 80%, rgba(255,255,255,0.06), transparent 30%);
    pointer-events: none;
    z-index: 0;
  }

  /* Animation fade-in form */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  section.vh-100 {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    position: relative;
    z-index: 1;
    animation: fadeInUp 1s ease forwards;
  }

  .card {
    background: rgba(0,0,0,0.85);
    border-radius: 2rem;
    padding: 3rem 2.5rem;
    width: 100%;
    max-width: 420px;
    box-shadow: 0 12px 32px rgba(102,126,234,0.6);
    position: relative;
    z-index: 2;
  }

  h2 {
    color: #fff;
    font-weight: 600;
    margin-bottom: 0.5rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-align: center;
  }

  p.desc {
    color: #ccc;
    text-align: center;
    margin-bottom: 2rem;
    font-size: 1rem;
  }

  /* Input wrapper for icon + input */
  .input-group {
    position: relative;
    margin-bottom: 1.8rem;
  }

  .input-group input {
    width: 100%;
    padding: 14px 16px 14px 44px;
    border-radius: 12px;
    border: 2px solid transparent;
    background: rgba(255,255,255,0.1);
    color: #fff;
    font-size: 1.1rem;
    transition: all 0.3s ease;
  }

  .input-group input::placeholder {
    color: #ddd;
  }

  .input-group input:focus {
    background: rgba(255,255,255,0.18);
    border-color: #667eea;
    box-shadow: 0 0 12px #667eea;
    outline: none;
  }

  /* Icons inside input */
  .input-group .icon {
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    color: #667eea;
    font-size: 1.2rem;
    pointer-events: none;
  }

  label.form-label {
    color: #ddd;
    font-weight: 600;
    margin-bottom: 6px;
    display: block;
    font-size: 0.95rem;
  }

  /* Forgot password */
  .forgot-password {
    font-size: 0.9rem;
    text-align: right;
    margin-bottom: 2.2rem;
  }

  .forgot-password a {
    color: #aaa;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .forgot-password a:hover {
    color: #667eea;
  }

  /* Button */
  button.btn-login {
    width: 100%;
    padding: 14px 0;
    font-size: 1.2rem;
    font-weight: 700;
    border-radius: 50px;
    border: none;
    background: linear-gradient(45deg, #667eea, #764ba2);
    color: #fff;
    box-shadow: 0 6px 20px rgba(102,126,234,0.7);
    cursor: pointer;
    transition: all 0.35s ease;
  }

  button.btn-login:hover {
    background: linear-gradient(45deg, #5563c1, #5a40a4);
    box-shadow: 0 8px 30px rgba(85,99,193,0.85);
  }

  button.btn-login:active {
    transform: scale(0.98);
  }

  /* Social icons */
  .social-icons {
    text-align: center;
    margin-bottom: 2rem;
  }

  .social-icons a {
    margin: 0 15px;
    font-size: 1.8rem;
    color: #bbb;
    transition: all 0.4s ease;
    display: inline-block;
  }

  /* Gradient text hover on social icons */
  .social-icons a:hover {
    color: transparent;
    background: linear-gradient(45deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    background-clip: text;
    filter: drop-shadow(0 0 5px #667eea);
  }

  /* Sign up link */
  .signup-text {
    color: #aaa;
    text-align: center;
    font-size: 0.95rem;
  }

  .signup-text a {
    color: #667eea;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .signup-text a:hover {
    color: #a3a0ff;
    text-decoration: underline;
  }
</style>

<section class="vh-100">
  <div class="card" role="main" aria-label="Login form">
    <form action="/webbanhang/account/checklogin" method="post" autocomplete="off" novalidate>
      <h2>Login</h2>
      <p class="desc">Please enter your login and password!</p>

      <div class="input-group">
        <label for="username" class="form-label">Username</label>
        <i class="fas fa-user icon"></i>
        <input type="text" id="username" name="username" placeholder="Enter your username" required autocomplete="username" />
      </div>

      <div class="input-group">
        <label for="password" class="form-label">Password</label>
        <i class="fas fa-lock icon"></i>
        <input type="password" id="password" name="password" placeholder="Enter your password" required autocomplete="current-password" />
      </div>

      <div class="forgot-password">
        <a href="#!">Forgot password?</a>
      </div>

      <button type="submit" class="btn-login" aria-label="Login">Login</button>

      <div class="social-icons" aria-label="Social login options">
        <a href="#!" aria-label="Login with Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#!" aria-label="Login with Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#!" aria-label="Login with Google"><i class="fab fa-google"></i></a>
      </div>

      <p class="signup-text">
        Don't have an account? <a href="/webbanhang/account/register">Sign Up</a>
      </p>
    </form>
  </div>
</section>

<!-- Load FontAwesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<?php include 'app/views/shares/footer.php'; ?>
