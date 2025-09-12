<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Student</title>
  <style>
  :root {
    --bg:#c7b7b1;
    --panel:#e0d6d2;
    --muted:#a89288;
    --muted-2:#8b6f65;
    --text:#2c1d19;
    --text-dim:#4a322d;
    --primary:#73574e;
    --primary-2:#5a3f36;
    --radius:16px;
    --shadow:0 10px 25px rgba(0,0,0,.3);
  }
  * { box-sizing:border-box; }

  body {
    margin:0;
    min-height:100svh;
    display:grid;
    place-items:center;
    background:linear-gradient(180deg,var(--bg),#bca9ad 60%);
    color:var(--text);
    font:14px/1.5 "Poppins", sans-serif;
  }

  .card {
    width:min(400px,90vw);
    background:linear-gradient(180deg,var(--panel),#c7b7b1);
    border:1px solid rgba(0,0,0,.08);
    border-radius:var(--radius);
    box-shadow:var(--shadow);
    padding:20px;
  }

  h2 {
    margin:0 0 14px;
    font-size:clamp(22px,3vw,28px);
    text-align:center;
    color:var(--primary);
    font-weight:600;
  }

  form { display:grid; gap:12px; }

  label { 
    font-size:13px; 
    color:var(--text-dim); 
    font-weight:500;
  }

  input[type="text"], input[type="email"] {
    width:100%;
    max-width:100%;
    padding:10px;
    border-radius:8px;
    border:1px solid var(--muted-2);
    background:var(--muted);
    color:var(--text);
    font-size:14px;
    font-family:"Poppins", sans-serif;
  }

  input:focus {
    outline:2px solid var(--primary);
    border-color:var(--primary-2);
  }

  /* Buttons container */
  .actions {
    display:flex;
    justify-content:flex-end;
    gap:10px;
    margin-top:10px;
  }

  .btn {
    padding:8px 14px;
    border:none;
    border-radius:10px;
    cursor:pointer;
    font-size:13px;
    font-weight:600;
    transition:transform .15s, opacity .15s;
  }
  .btn:hover { transform:translateY(-1px); }

  .btn-submit { 
    background:linear-gradient(180deg,var(--primary),var(--primary-2)); 
    color:#fff;
    min-width:120px;
  }

  .back-link {
    display:inline-flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    text-decoration:none;
    font-weight:500;
    padding:8px 12px;
    border-radius:10px;
    background:var(--muted-2);
    transition:opacity .15s;
  }
  .back-link:hover { opacity:.85; }
  </style>

</head>
<body>
  <div class="card">
    <h2>Add Student</h2>
    <form action="<?=site_url('/create');?>" method="POST">
      <div>
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" placeholder="Your first name" required>
      </div>
      <div>
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" placeholder="Your last name" required>
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="you@example.com" required>
      </div>

      <div class="actions">
        <button type="submit" class="btn btn-submit">Save</button>
        <a class="back-link" href="get_all">Back to Records </a>
      </div>
    </form>
  </div>
</body>
</html>
