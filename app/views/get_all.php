<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Records</title>
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
      --danger:#b71c1c;
      --success:#2e7d32;
      --radius:12px;
      --shadow:0 6px 18px rgba(0,0,0,.25);
    }

    * { box-sizing:border-box; }

    body {
      margin:0;
      height:100vh;
      width:100vw;
      display:flex;
      flex-direction:column;
      background:linear-gradient(180deg,var(--bg),#bca9ad 90%);
      color:var(--text);
      font:14px/1.5 "Segoe UI", "Playfair Display", Georgia, serif;
    }

    .screen {
      flex:1;
      display:flex;
      flex-direction:column;
      padding:24px;
      background:linear-gradient(180deg,var(--panel),#c7b7b1);
      border:1px solid var(--muted-2);
      border-radius:var(--radius);
      box-shadow:var(--shadow);
      margin:20px;
    }

    /* Student Records heading (h2) */
    h2 {
      margin:0 0 18px;
      font-size:28px; 
      font-weight:700;
      text-align:center;
      font-family:"Poppins", sans-serif;
      color:var(--primary-2);
      letter-spacing:1px;
    }

    .top-actions {
      display:flex;
      justify-content:center;
      align-items:center;
      gap:20px;
      margin-bottom:14px;
    }

    .search-box {
      padding:8px 14px;
      border-radius:var(--radius);
      border:1px solid var(--muted-2);
      font-size:14px;
      outline:none;
      width:220px;
      background:white;
      transition:.2s;
    }

    .search-box:focus {
      border-color:var(--primary);
      box-shadow:0 0 6px rgba(90,63,54,.5);
    }

    .btn {
      padding:8px 14px;
      border:none;
      border-radius:var(--radius);
      cursor:pointer;
      font-size:13px;
      font-weight:600;
      letter-spacing:.3px;
      transition:all .15s ease-in-out;
      box-shadow:inset 0 0 0 rgba(255,255,255,0);
    }
    .btn:hover { transform:translateY(-2px); }
    .btn:active { transform:scale(.96); }

    .btn-add {
      background:linear-gradient(180deg,var(--primary),var(--primary-2));
      color:white;
      box-shadow:0 3px 6px rgba(0,0,0,.2);
    }
    .btn-edit {
      background:linear-gradient(180deg,var(--primary),var(--primary-2));
      color:white;
    }
    .btn-delete {
      background:linear-gradient(180deg,var(--danger),#7f1010);
      color:white;
    }

    .table-wrapper {
      flex:1;
      overflow:auto;
      border-radius:var(--radius);
      box-shadow:var(--shadow);
      border:1px solid var(--muted);
      background:white;
    }

    table {
      width:100%;
      border-collapse:collapse;
      font-size:14px;
      color:var(--text);
      table-layout: fixed;
    }

    th, td {
      padding:12px 14px;
      border:1px solid rgba(0,0,0,.15); /* full border (grid style) */
      text-align:left;
      word-wrap: break-word;
    }

    /* column widths */
    th:nth-child(1), td:nth-child(1) { width:12%; }   /* ID */
    th:nth-child(2), td:nth-child(2) { width:20%; }  /* Firstname */
    th:nth-child(3), td:nth-child(3) { width:20%; }  /* Lastname */
    th:nth-child(4), td:nth-child(4) { width:25%; }  /* Email */
    th:nth-child(5), td:nth-child(5) { width:23%; }  /* Action */

    th {
      background:var(--muted-2);
      color:white;
      font-weight:600;
      text-transform:uppercase;
      font-size:13px;
      letter-spacing:.5px;
      position:sticky;
      top:0;
      z-index:1;
    }

    tr:nth-child(even) { background:rgba(139,111,101,.08); }
    tr:hover { background:rgba(115,87,78,.15); }

    /* Action buttons layout */
    td.actions { text-align: center; }
    td.actions .btn {
      min-width:70px;
      font-size:12px;
      padding:6px 10px;
      margin:0 4px;
    }

    /* Pagination styling */
    .pagination {
      display:flex;
      justify-content:center;
      align-items:center;
      gap:8px;
      padding:14px 0;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .pagination ul {
      list-style:none;     /* tanggal dots */
      display:flex;
      gap:8px;
      padding:0;
      margin:0;
    }

    .pagination li {
      list-style:none;     /* siguradong walang bullets */
    }

    .pagination a, .pagination span {
      display:inline-block;
      min-width:45px;
      text-align:center;
      padding:10px 16px;
      text-decoration:none;
      color:white;
      background:linear-gradient(180deg, var(--primary), var(--primary-2));
      border-radius:var(--radius);
      box-shadow:var(--shadow);
      transition:all .15s ease-in-out;
      cursor:pointer;
    }

    .pagination a:hover {
      opacity:.9;
      transform:translateY(-2px);
    }

    .pagination .active {
      background:linear-gradient(180deg, var(--primary-2), var(--primary));
      cursor:default;
    }

    .pagination .disabled {
      background-color:var(--muted-2);
      cursor:not-allowed;
      box-shadow:none;
    }

    @media (max-width:600px) {
      .search-box { width:140px; }
      th, td { font-size:12px; }
    }
  </style>



</head>
<body>
  <div class="card">
    <h2>Student Records</h2>

   <div class="top-actions">
  <!-- Left: Add Student Button -->
  <a href="<?=site_url('create')?>"><button class="btn btn-add">+ Add Student</button></a>

  <!-- Right: Search Bar -->
  <input type="text" id="searchInput" class="search-box" placeholder="🔍 Search students...">
</div>
    <table id="studentTable"> 
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
      
      <?php foreach($students as $students): ?>
        <tr>
          <td><?=$students['id']; ?></td>
          <td><?=htmlspecialchars($students['first_name']); ?></td>
          <td><?=htmlspecialchars($students['last_name']); ?></td>
          <td><?=htmlspecialchars($students['email']); ?></td>
          <td>
            <a href="<?=site_url('/update/'.$students['id']); ?>" class="btn btn-edit">Edit</a>
            <a href="<?=site_url('/delete/'.$students['id']); ?>" class="btn btn-delete"
               onclick="return confirm('Are you sure you want to delete this record?');">
               Delete
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

  <div class="pagination">
    <?= isset($pagination_links) ? $pagination_links : '' ?>
  </div>
   <script>
let typingTimer;
document.getElementById("searchInput").addEventListener("keyup", function() {
  clearTimeout(typingTimer);
  let keyword = this.value;

  typingTimer = setTimeout(() => {
    fetch("<?= site_url('students/search') ?>?keyword=" + keyword)
      .then(res => res.text())
      .then(data => {
        // Replace table body with DB results
        document.querySelector("#studentTable tbody").innerHTML = data;
      });
  }, 300); // debounce 300ms to avoid too many requests
});
</script>

</body>
</html>
