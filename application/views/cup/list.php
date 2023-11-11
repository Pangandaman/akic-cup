<!DOCTYPE html>
<html lang="en">
   <head>
      <title>List of Cups</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
<header class="hero">
  <div class="hero-wrap">
    <p class="intro" id="intro">AKIC Cup</p>
    <h1 id="headline">List</h1><a style="color: white;"href="javascript:history.back()">← Go Back</a>
  </div>
</header>

   
<div style="overflow-x:auto;">
<div class="container py-5 h-100" >
<table class="table table-striped">
    <thead class="thead-dark" style="background-color: #cea434; color: white;">
  
         <div class="card-body" style="float: right;">
          <button class="btn btn-success" style="cursor:pointer;"onclick="openCup()">
            <p class="card-text" style="color: white;">Open Cup</p>
          </a>
        </div>
<tr>
<th scope="col">Year</th>
<th scope="col">Theme</th>
<th scope="col">Status</th>
<th scope="col">Actions</th>
</tr>
</thead>
  
<tbody>
  <tr>
    <th scope="row">2020</td>
      <td>Pandemic Intrams </td>
      <td style="color:red;">Closed</td>
          <td><a class="btn btn-success" href="index.php?c=Cup&m=view_previous_results">View results</a></td>
    </td>
  </tr>
  <tr>
     <th scope="row">2021</td>
    <td>Last Year's Event?</td>
    <td style="color:red;">Closed</td>
    <td><a class="btn btn-success" href="index.php?c=Cup&m=view_previous_results">View results</a></td>
 </tr>
 <tr>
     <th scope="row">2023</td>
    <td>Year of the Dragon</td>
    <td style="color:Green;">Active</td>
    <td><a class="btn btn-warning">In Progress</a>
    <a class="btn btn-danger" onclick="confirmClose()">Close</a></</td>
 </tr>
          </tbody>
       </table>
     </div>
  </div>


  <script>
  function openCup() {
    Swal.fire({
      title: 'Open Cup',
      html: `
        <input id="cupThemeInput" class="swal2-input" placeholder="Enter Cup Theme" required>
        <div id="cupThemeError" class="swal2-validation-message"></div>
      `,
      icon: 'info',
      showCancelButton: true,
      confirmButtonText: 'Confirm',
      cancelButtonText: 'Cancel',
      focusConfirm: false,
      width: '40%', // Adjust the width as needed
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: 'Cup Opened',
          text: 'The Cup was successfully opened and designated as the current cup.',
          icon: 'success',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'OK',
          width: '40%', // Adjust the width as needed
        }).then(() => {
          // Redirect to the "Dashboard" page (replace with your actual URL)
          window.location.href = 'http://akic-cup.com/index.php?c=Content&m=view_dashboard';
        });
      }
    });
  }
</script>
<script>
function confirmClose() {
        Swal.fire({
            title: 'Close Cup Confirmation',
            text: 'Are you sure you want to close the cup?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect after a delay of 1.5 seconds (adjust as needed)
                setTimeout(function() {
                    window.location.href = 'http://akic-cup.com/index.php?c=Cup&m=view_cups';
                }, 6000);

                Swal.fire({
                    title: 'Cup Closed',
                    text: 'The cup has been officially closed.',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                });
            }
        });
    }
</script>

 </body>
</html>
     

