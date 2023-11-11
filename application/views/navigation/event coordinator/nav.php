<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<script src="https://cdn.tiny.cloud/1/cj7pjrm5lefkecad3157otgiu217x2k4hg06klufj26f69ek/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
      <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-0u/wwyff26puSlvYxFsi1KpHMcukKXzG5lz1z3szg8wwq5GMGGwAy0EBOnCkg7xzKsW+0cFJU3Qcjm09Vd4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/sweetalert/sweetalert2.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
</head>

 
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#122948 !important">
    <div class="container-fluid">
        <a class="FinalFrontierHome" href="index.php?c=Content&m=view_dashboard">AKIC 🏆 CUP</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        House of Wisdom
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="index.php?c=Content&m=view_house_khayyam">Al-Khayyam</a></li>
                        <li><a class="dropdown-item" href="index.php?c=Content&m=view_house_burzjani">Al-Burzjani</a></li>
                        <li><a class="dropdown-item" href="index.php?c=Content&m=view_house_razi">Al-Razi</a></li>
                        <li><a class="dropdown-item" href="index.php?c=Content&m=view_house_haytham">Al-Haytham</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=Content&m=view_events">Event Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=Content&m=view_tournaments">Tournaments</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Guidelines
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="index.php?c=Content&m=view_generalguidelines">General Guidelines</a></li>
                        <li><a class="dropdown-item" href="index.php?c=Content&m=view_eventguidelines">Event Guidelines</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=Content&m=view_schedules">Schedules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=Content&m=view_tabulations">Tabulations and Rankings</a>
                </li>

                <!-- Event Coordinator link pushed to the right -->
                <li class="nav-item ml-auto dropdown">
               
          
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Event Coordinator
                    </a>
                    
                
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                     
                        <li> 
                        <a class="dropdown-item" href="index.php?c=Content&m=view_profile" onMouseOver="this.style.color='grey'" onMouseOut="this.style.color='white'">Profile</a>
                      </li>
                  
                     <li>
                        <a  class="dropdown-item" href="index.php?c=LoginController&m=logout" onclick="return confirmLogout();" onmouseover="this.style.color='red'" onmouseout="this.style.color='white'">Logout</a>
                    </li>
                    
                  </ul>
                
                </li>
            </ul>
        </div>
    </div>
</nav>





<script>
    function confirmLogout() {
        Swal.fire({
            title: 'Logout Confirmation',
            text: 'Are you sure you want to logout?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Logout'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to the logout URL
                window.location.href = 'http://akic-cup.com';
            }
        });



    return false; // Return false to prevent the default action
  }
</script>



<!-- Remove the duplicated jQuery and slim versions -->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>

<!-- Keep only one version of Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Remove unnecessary Font Awesome version -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Remove the slim version of jQuery and use the newer version from the Bootstrap CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Remove the slim version of Popper.js and use the newer version from the Bootstrap CDN -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Use the newer version of Bootstrap from the Bootstrap CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js" integrity="sha384-Dw4VcVS7bVB+jr7pFJRxDEjpfakxJf3HxgCPrNJ4kPT1Dw1eDfwe9SOTLe" crossorigin="anonymous"></script>

<script src="/assets/sweetalert/sweetalert2.min.js"></script>

<!-- Keep the rest of your scripts -->
<script src="assets/js/templatemo.js"></script>

