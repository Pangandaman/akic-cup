<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Manage AKIC Cup</title>
</head>
<body>
<header class="hero">
    <div class="hero-wrap">
     <p class="intro" id="intro">Manage</p>
         <h1 id="headline">AKIC CUP</h1>
   </div>
    </header>


    <div class="container">
  <div class="card-deck">
    <div class="card custom-card">
      <div class="card-body">
        <a href="index.php?c=Content&m=view_employees">
          <h5 class="card-title">Manage Employees</h5>
          <p class="card-text">Click here to manage employees.</p>
        </a>
      </div>
    </div>

    <div class="card custom-card">
      <div class="card-body">
        <a href="index.php?c=Cup&m=view_cups">
          <h5 class="card-title">AKIC Cups List</h5>
          <p class="card-text">View the list.</p>
        </a>
      </div>
    </div>

    <div class="card custom-card">
      <div class="card-body">
        <a href="#" onclick="showAlert()">
          <h5 class="card-title">Current Cup</h5>
          <p class="card-text"><a href="index.php?c=Content&m=view_dashboard">View the current cup.</p>
        </a>
      </div>
    </div>
  </div>
</div>






</body>
</html>