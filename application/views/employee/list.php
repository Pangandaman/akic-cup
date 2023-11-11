<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Employees</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>  
  <body>
  
   <header class="hero">
    <div class="hero-wrap">
     <p class="intro" id="intro">Employee</p>
         <h1 id="headline">List</h1><a style="color: white;"href="javascript:history.back()">← Go Back</a>
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
        <a class="btn btn-dark" style="float: right; margin:1%;" href="index.php?c=Task&m=add_employee">Add Employee</a>
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
        <table class="table table-hover" id="employeeTable">
                 <div class="sort">               
                <label for="sortColumn"> Sort By: </label>
                <select id="sortColumn" onchange="sortTable()">
                    <option value="0">ID-Number</option>
                    <option value="1">Name</option>
                    <option value="2">Position</option>
                    <option value="3">Designation</option>
                    <option value="4">Department</option>
                    <option value="5">Contact Details</option>
                    <option value="6">Account Type</option>
                    <option value="7">Account Status</option>
                </select>
                </div>
                                <thead>
                                        <tr>
                                            <th scope="col">ID-Number</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Position</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Contact Details</th>
                                            <th scope="col">Account Type</th>
                                            <th scope="col">Account Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2015-01-001</td>
                                            <td>Balindong, Mansour B.</td>
                                            <td>Instructor</td>
                                            <td>Management</td>
                                            <td>Computer Studies</td>
                                            <td>09296400143</td>
                                            <td>Management</td>
                                            <td><a class="btn btn-success" onclick="toggleActivation(this)">Active</a></td>
                                            <td class="btn-cell">
                                                <a class="btn btn-success" href="index.php?c=Task&m=update_employee">Update</a>
                                                <a class="btn btn-danger" onclick="confirmRemoveEmployee()">Remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2015-01-002</td>
                                            <td>Macasawang, Jehan Maryam A.</td>
                                            <td>Instructor</td>
                                            <td>Management</td>
                                            <td>Computer Studies</td>
                                            <td>0931432234</td>
                                            <td>Management</td>
                                            <td>    <a class="btn btn-success" onclick="toggleActivation(this)">Active</a></td>
                                            <td class="btn-cell">
                                                <a class="btn btn-success" href="index.php?c=Task&m=update_employee">Update</a>
                                                <a class="btn btn-danger" onclick="confirmRemoveEmployee()">Remove</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                          
                            <script>
function confirmRemoveEmployee() {
  Swal.fire({
    title: 'Are you sure?',
    text: 'You are about to remove the employee. This action cannot be undone.',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Yes',
    cancelButtonText: 'Cancel',
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: 'Employee Removed',
        text: 'The Employee was successfully removed.',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.isConfirmed) {
          // Redirect or perform any other action after user clicks OK
          window.location.href = 'http://akic-cup.com/index.php?c=Content&m=view_employees';
        }
      });
    }
  });
}
</script>
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
            const table = document.getElementById('employeeTable');
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
</body>
</html>


