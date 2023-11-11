<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Tournament List</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>  
  <style>

.table-responsive a{
margin: 2%;
}

  </style>
    <!-- Content -->
<body>
<header class="hero">
<div class="hero-wrap">
<p class="intro" id="intro">Tournament</p>  
<h1 id="headline">List</h1>
<a style="color: white;"href="javascript:history.back()">← Go Back</a>
</div>
</header>



<div class="container py-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card shadow-sm">
      <div class="card-header bg-secondary text-white" style="border-radius: 3px;">
  
      <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>  
       <tr>  
       <th scope="col">Activity</th>
       <th scope="col">Tournament Type</th>
       <th scope="col">Actions</th>
       </tr>
</thead>
  <tr>
    <td>Basketball</td>
    <td>Single-Elimination</td>
      <td><a class="btn btn-primary"href="index.php?c=Content&m=view_bracket">View
      <?php if ($this->session->userdata('type') == 'event coordinator') { ?>
        <a class="btn btn-success"href="index.php?c=Task&m=update_bracket">Merge

        </td>
      <?php } ?>
    </tr>

  <tr>
    <td>E-Games</td>
    <td>Double-Eliminations</td>
    <td><a class="btn btn-primary"href="index.php?c=Content&m=view_bracket2">View
    <?php if ($this->session->userdata('type') == 'event coordinator') { ?>
        <a class="btn btn-success"href="index.php?c=Task&m=update_bracket">Merge

        </td>
      <?php } ?>
  </tr>

    <tr>
    <td>Table Tennis</td>
    <td>Round Robin</td>
    <td><a class="btn btn-primary"href="index.php?c=Content&m=view_bracket3">View
    <?php if ($this->session->userdata('type') == 'event coordinator') { ?>
        <a class="btn btn-success"href="index.php?c=Task&m=update_bracket">Merge

        </td>
      <?php } ?>
  </tr>

</table>
</div>
</div>
</body>