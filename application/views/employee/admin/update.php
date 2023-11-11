<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Update Employee</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>  
  <body>
  
<header class="hero">
    <div class="hero-wrap">
     <p class="intro" id="intro">Update</p>
         <h1 id="headline">Employee</h1>
         <a style="color: white;"href="javascript:history.back()">← Go Back</a>
        </div>
    </header>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6">
        
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Employee</h3>
                    <form>
                        <div class="row mb-4">
                            <div class="col-12 col-md-4">
                                <div class="form-outline">
                                    <input type="text" id="firstName" class="form-control form-control-lg" value="Mansour" required />
                                    <label class="form-label" for="firstName" >First Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-outline">
                                    <input type="text" id="lastName" class="form-control form-control-lg" value="Balindong" required />
                                    <label class="form-label" for="lastName" >Last Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-outline">
                                    <input type="text" id="middleName" class="form-control form-control-lg"value="B" maxlength="20" required />
                                    <label class="form-label" for="middleName" placeholder="M.I" >Middle Initials</label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Updateitional fields here... -->
                        
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="position" class="form-control form-control-lg" value="Instructor" required />
                                    <label class="form-label" for="position">Position</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="designation" class="form-control form-control-lg" value="Management" required />
                                    <label class="form-label" for="designation" >Designation</label>
                                </div>
                            </div>
                        </div>

                        <!-- Updateitional fields here... -->
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="department" class="form-control form-control-lg" value="Computer Studies" required />
                                    <label class="form-label" for="department">Department</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="contactDetails" class="form-control form-control-lg" value="09296400143" required />
                                    <label class="form-label" for="contactDetails">Contact Details</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <select class="select form-control form-control-lg" required>
                                    <option value="" disabled selected>Choose Role</option>
                                    <option value="2" selected>Management</option>
                                    <option value="3">Event Coordinator</option>
                                    <option value="4">Adviser</option>
                                    <option value="5">Tabulator</option>
                                </select>
                            
                            </div>
                        </div>

                        <div class="mt-4">
                        <a class="btn btn-success btn-lg" onclick="confirmUpdate()">Save</a>
                        <a class="btn btn-danger btn-lg" href="http://akic-cup.com/index.php?c=Content&m=view_employees">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function confirmUpdate() {
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const middleInitial = document.getElementById('middleName').value;
    const position = document.getElementById('position').value;
    const designation = document.getElementById('designation').value;
    const department = document.getElementById('department').value;
    const contactDetails = document.getElementById('contactDetails').value;
    const role = document.querySelector('.select').value;

    // Custom validation logic here
    if (!firstName || !lastName || !middleInitial || !position || !designation || !department || !contactDetails || role === "1") {
        Swal.fire({
            title: 'Error',
            text: 'Please fill out all required fields and select a valid role.',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        });
    } else {
        // Display the input data in the confirmation alert
        Swal.fire({
            title: 'Confirm Update',
            html: `
                <div><b>First Name:</b> ${firstName}</div>
                <div><b>Last Name:</b> ${lastName}</div>
                <div><b>Middle Initial:</b> ${middleInitial}</div>
                <div><b>Position:</b> ${position}</div>
                <div><b>Designation:</b> ${designation}</div>
                <div><b>Department:</b> ${department}</div>
                <div><b>Contact Details:</b> ${contactDetails}</div>
                <div><b>Role:</b> ${role}</div>
            `,
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Employee Updated',
                    text: 'The Employee was successfully updated.',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect after a delay of 1.5 seconds (adjust as needed)
                        setTimeout(function() {
                            window.location.href = 'http://akic-cup.com/index.php?c=Content&m=view_employees';
                        }, 1500);
                    }
                });
            }
        });
    }
}
</script>

</body>
</html>

</body>
</html>