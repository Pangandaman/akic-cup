<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Students</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>  
  <body>
  
   <header class="hero">
    <div class="hero-wrap">
     <p class="intro" id="intro">Student</p>
         <h1 id="headline">Accounts</h1><a style="color: white;"href="javascript:history.back()">← Go Back</a>
    </div>
    </header>

    <div class="table-container">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white" style="border-radius: 3px;">
                    <?php
if ($this->session->userdata('type') == 'admin') {
?>
    <h4 class="mb-0">
        <a class="btn btn-dark" style="float: right; margin:1%;" href="index.php?c=Task&m=add_officer">Add SSC Officer</a>
    </h4>
<?php
} elseif ($this->session->userdata('type') == 'ssc') {
?>
    <h4 class="mb-0">
        <a class="btn btn-dark" style="float: right; margin:1%;" href="index.php?c=Task&m=add_student">Add Student</a>
    </h4>
<?php
}
?>

                     <div class="input-group mt-2">
<input type="text" id="searchInput" class="form-control" placeholder="Search...">
<button id="searchButton" class="btn btn-primary" onclick="search()">Search</button>
</div>

</div>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover" id="studentTable">
                <div class="sort">
            <label for="sortColumn">Sort : </label>
                <select id="sortColumn" onchange="sortTable()">
                    <option value="0">ID-Number</option>
                    <option value="1">Name</option>
                    <option value="2">Gender</option>
                    <option value="3">Course</option>
                    <option value="4">Member of</option>
                    <option value="5">Account Status</option>
                </select>
                </div>
                <thead>
                <tr>
                    <th scope="col">ID number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Course</th>
                    <th scope="col">Member of</th>
                    <th scope="col">Account Status</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2018-01-0032</td>
                    <td>Pangandaman, Mohammad Amr P.</td>
                    <td>Male</td>
                    <td>0929 6400 143</td>
                    <td>BS-IT</td>
                    <td>Al-Khayyam</td>
      
                    <td><a class="btn btn-success" onclick="toggleActivation(this)">Active</a></td>
                    <td>
                        <a class="btn btn-success" href="index.php?c=Task&m=update_student">Update</a>
                        <a class="btn btn-danger" onclick="confirmRemoveStudent()">Remove</a>
                    </td>
                </tr>
                <tr>
                    <td>2018-01-0033</td>
                    <td>Malang, Wasef  A.</td>
                    <td>Male</td>
                    <td>0911 3420 122</td>
                    <td>BS-BA</td>
                    <td>Al-Razi</td>
                 
                    <td><a class="btn btn-success" onclick="toggleActivation(this)">Active</a></td>
                    <td>
                        <a class="btn btn-success" href="index.php?c=Task&m=update_student">Update</a>
                        <a class="btn btn-danger" onclick="confirmRemoveStudent()">Remove</a>
                    </td>
                </tr>
                <tr>
                    <td>2018-01-0034</td>
                    <td>Abdulwahab, Mohammad Azzam  B.</td>
                    <td>Male</td>
                    <td>0331 1570 142</td>
                    <td>BS-IT</td>
                    <td>Al-Burzjani</td>
                  
                    <td><a class="btn btn-success" onclick="toggleActivation(this)">Active</a></td>
                    <td>
                        <a class="btn btn-success" href="index.php?c=Task&m=update_student">Update</a>
                        <a class="btn btn-danger" onclick="confirmRemoveStudent()">Remove</a>
                    </td>
                </tr>
                <!-- Add more rows here -->
                <tr>
                    <td>2018-01-0035</td>
                    <td>Metmug, Ryan G.</td>
                    <td>Male</td>
                    <td>0443 1274 122</td>
                    <td>BS-IR</td>
                    <td>Student Council </td>
                 
                    <td><a class="btn btn-success" onclick="toggleActivation(this)">Active</a></td>
                    <td>
                        <a class="btn btn-success" href="index.php?c=Task&m=update_student">Update</a>
                        <a class="btn btn-danger" onclick="confirmRemoveStudent()">Remove</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</section>

<script>
    function search() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const rows = document.getElementsByTagName('tr');

        for (let i = 1; i < rows.length; i++) { // Start from index 1 to skip the header row
            const rowData = rows[i].innerText.toLowerCase();
            if (rowData.includes(input)) {
                rows[i].style.display = '';
            } else {
                rows[i].style.display = 'none';
            }
        }
    }
    
</script>

<script>
function confirmRemoveStudent() {
  Swal.fire({
    title: 'Are you sure?',
    text: 'You are about to remove the student. This action cannot be undone.',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Yes',
    cancelButtonText: 'Cancel',
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: 'Student Removed',
        text: 'The Student was successfully removed.',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.isConfirmed) {
          // Redirect or perform any other action after user clicks OK
          window.location.href = 'http://akic-cup.com/index.php?c=Content&m=view_students';
        }
      });
    }
  });
}
</script>
<script>
function toggleActivation(button) {
    Swal.fire({
        title: 'Toggle Activation',
        text: 'Do you want to toggle the activation state of this account?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.isConfirmed) {
            // Toggle the activation state
            if (button.textContent === 'Active') {
                button.textContent = 'Inactive';
                button.classList.remove('btn-success');
                button.classList.add('btn-secondary');
                // Add code here to perform deactivation action
            } else {
                button.textContent = 'Active';
                button.classList.remove('btn-secondary');
                button.classList.add('btn-success');
                // Add code here to perform activation action
            }

            Swal.fire({
                title: 'Account Status Updated',
                text: 'Account status updated successfully.',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        }
    });
}
</script>
<script>
        function sortTable() {
            const table = document.getElementById('studentTable');
            const select = document.getElementById('sortColumn');
            const rows = Array.from(table.rows).slice(1); // Skip the header row
            const columnToSort = parseInt(select.value, 10);

            rows.sort((a, b) => {
                const cellA = a.cells[columnToSort].textContent.trim().toLowerCase();
                const cellB = b.cells[columnToSort].textContent.trim().toLowerCase();
                return cellA.localeCompare(cellB);
            });

            // Clear the table and re-add the sorted rows
            table.tBodies[0].innerHTML = '';
            rows.forEach(row => table.tBodies[0].appendChild(row));
        }
    </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
