<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #3e2c23, #5a4033); /* Espresso to Mocha */
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px;
    position: relative;
    overflow: hidden;
    min-height: 100vh;
  }

  body::before, body::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    filter: blur(120px);
    opacity: 0.5;
    z-index: 0;
  }

  body::before {
    width: 500px;
    height: 500px;
    background: #7b5e57; /* Latte glow */
    top: -60px;
    left: -120px;
  }

  body::after {
    width: 450px;
    height: 450px;
    background: #2c1b13; /* Dark espresso */
    bottom: -80px;
    right: -100px;
  }

  .form-container {
    width: 100%;
    max-width: 400px;
    background: #f5ede6; /* Creamy latte */
    border-radius: 12px;
    padding: 35px 30px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.25);
    z-index: 1;
    animation: fadeIn 0.8s ease forwards;
    opacity: 0;
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 26px;
    font-weight: 700;
    color: #5a4033; /* Mocha brown */
  }

  label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    font-size: 14px;
    color: #3e2c23;
  }

  input {
    width: 100%;
    padding: 12px 14px;
    margin-bottom: 18px;
    border: 1px solid #c2b2a6;
    border-radius: 6px;
    font-size: 15px;
    background: #faf6f2; /* Light latte */
    outline: none;
    transition: 0.3s;
  }

  input:focus {
    border-color: #7b5e57;
    background: #fff;
    box-shadow: 0 0 6px rgba(91,64,51,0.3);
  }

  button {
    width: 100%;
    padding: 12px;
    background: #5a4033; /* Mocha */
    color: white;
    font-size: 16px;
    font-weight: 600;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
    box-shadow: 0 3px 8px rgba(0,0,0,0.25);
  }

  button:hover {
    background: #7b5e57; /* Latte brown */
    transform: translateY(-2px);
  }

  .error {
    color: #b33c2e; /* Reddish brown */
    text-align: center;
    margin-bottom: 10px;
    font-size: 14px;
  }

  p {
    text-align: center;
    margin-top: 15px;
    font-size: 14px;
    color: #3e2c23;
  }

  p a {
    color: #5a4033;
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
    <h2>Register</h2>

    <?php if (!empty($error)): ?>
      <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST" action="/index.php/register">
      <label>Username:</label>
      <input type="text" name="username" placeholder="Enter username" required>

      <label>Password:</label>
      <input type="password" name="password" placeholder="Enter password" required>

      <label>Confirm Password:</label>
      <input type="password" name="confirm_password" placeholder="Re-enter password" required>

      <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="/index.php/login">Login here</a></p>
  </div>
</body>
</html>