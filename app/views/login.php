<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
<style>
  body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(180deg, #c7b7b1, #bca9ad 60%);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px;
    position: relative;
    overflow: hidden;
    min-height: 100vh;
    color: #2c1d19; /* text */
  }

  body::before, body::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    filter: blur(120px);
    opacity: 0.55;
    z-index: 0;
  }

  body::before {
    width: 500px;
    height: 500px;
    background: #73574e; /* primary glow */
    top: -60px;
    left: -120px;
  }

  body::after {
    width: 450px;
    height: 450px;
    background: #5a3f36; /* darker primary */
    bottom: -80px;
    right: -100px;
  }

  .form-container {
    width: 100%;
    max-width: 400px;
    background: linear-gradient(180deg, #e0d6d2, #c7b7b1);
    border-radius: 16px;
    padding: 35px 30px;
    box-shadow: 0 10px 25px rgba(0,0,0,.3);
    z-index: 1;
    animation: fadeIn 0.8s ease forwards;
    opacity: 0;
    border: 1px solid rgba(0,0,0,.08);
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: clamp(22px,3vw,28px);
    font-weight: 600;
    color: #73574e;
  }

  label {
    display: block;
    margin-bottom: 6px;
    font-weight: 500;
    font-size: 13px;
    color: #4a322d;
  }

  input {
    width: 100%;
    padding: 12px 14px;
    margin-bottom: 18px;
    border: 1px solid #8b6f65;
    border-radius: 8px;
    font-size: 14px;
    background: #a89288;
    color: #2c1d19;
    outline: none;
    transition: 0.3s;
  }

  input:focus {
    border-color: #5a3f36;
    background: #fff;
    outline: 2px solid #73574e;
    box-shadow: 0 0 6px rgba(115,87,78,0.3);
  }

  button {
    width: 100%;
    padding: 12px;
    background: linear-gradient(180deg,#73574e,#5a3f36);
    color: white;
    font-size: 16px;
    font-weight: 600;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.3s;
    box-shadow: 0 3px 8px rgba(0,0,0,0.25);
    min-width: 120px;
  }

  button:hover {
    opacity: .9;
    transform: translateY(-2px);
  }

  .error {
    color: red;
    text-align: center;
    margin-bottom: 10px;
    font-size: 14px;
  }

  p {
    text-align: center;
    margin-top: 15px;
    font-size: 14px;
  }

  p a {
    color: #73574e;
    font-weight: 600;
    text-decoration: none;
  }

  p a:hover {
    text-decoration: underline;
  }

  /* Fade-in animation */
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
  }
</style>

</head>
<body>
  <div class="form-container">
    <h2>Login</h2>

    <?php if (!empty($error)) : ?>
      <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <form action="<?= site_url('login') ?>" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>

    <p>Don’t have an account? <a href="<?= site_url('register') ?>">Register here</a></p>
  </div>
</body>
</html>