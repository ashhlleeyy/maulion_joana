<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Student</title>
<style>
  :root{
    --bg:#c7b7b1;
    --panel:#e0d6d2;
    --muted:#a89288;
    --muted-2:#8b6f65;
    --text:#2c1d19;
    --text-dim:#4a322d;
    --primary:#73574e;
    --primary-2:#5a3f36;
    --radius:12px; 
    --shadow:0 6px 18px rgba(0,0,0,.3);
  }

  body {
    background:linear-gradient(180deg,var(--bg),#bca9ad 60%);
    color:var(--text);
    font-family:"Poppins", sans-serif;
    display:flex;
    align-items:center;
    justify-content:center;
    height:100vh;
    margin:0;
  }

  .card {
    background:linear-gradient(180deg,var(--panel),#c7b7b1);
    padding:18px;                   /* dati 22px */
    border-radius:var(--radius);
    box-shadow:var(--shadow);
    width:350px;                    /* dati 500px */
    border:1px solid rgba(0,0,0,.1);
  }

  h2 {
    text-align:center;
    color:var(--primary);
    margin-bottom:16px;
    font-size:22px;                 /* medyo lumiit para match sa box */
    font-weight:600;
  }

  .form-row {
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:12px;
  }

  .form-row label {
    width:90px;
    font-size:13px;                 /* konting liit */
    color:var(--text-dim);
    font-weight:500;
  }

  .form-row input {
    flex:1;
    padding:8px 9px;                /* binawasan para compact */
    border-radius:8px;
    border:1px solid var(--muted-2);
    background:var(--muted);
    color:var(--text);
    font-size:13px;
    font-family:"Poppins", sans-serif;
  }

  .form-row input:focus {
    outline:2px solid var(--primary);
    border-color:var(--primary-2);
  }

  /* Actions container - buttons aligned right */
  .actions {
    display:flex;
    justify-content:flex-end;
    margin-top:12px;
    gap:8px;
  }

  button {
    padding:8px 14px;
    border-radius:8px;
    border:none;
    background:linear-gradient(180deg,var(--primary),var(--primary-2));
    color:#fff;
    font-weight:600;
    cursor:pointer;
    font-size:13px;
    transition:opacity .15s, transform .15s;
  }

  button:hover {
    opacity:.9;
    transform:translateY(-1px);
  }

  /* Back button styled like a regular button */
  a.back-link {
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:8px 14px;
    border-radius:8px;
    background:var(--muted-2);
    color:#fff;
    text-decoration:none;
    font-weight:600;
    font-size:13px;
    transition:opacity .15s, transform .15s;
  }

  a.back-link:hover {
    opacity:.9;
    transform:translateY(-1px);
  }
</style>



</head>
<body>
  <div class="card">
    <h2>Update Student</h2>
    <form action="<?=site_url('/update/'.segment(3));?>" method="POST">

      <div class="form-row">
        <label for="id">ID</label>
        <input type="text" id="id" name="id" value="<?=$student['id'];?>" readonly>
      </div>

      <div class="form-row">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?=$student['first_name'];?>" required>
      </div>

      <div class="form-row">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?=$student['last_name'];?>" required>
      </div>

      <div class="form-row">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?=$student['email'];?>" required>
      </div>

      <div class="actions">
        <button type="submit" class="btn btn-submit">Save Changes</button>
        <a class="back-link" href="<?=site_url('get_all')?>">Back to Records</a>
      </div>
    </form>
  </div>
</body>
</html>
