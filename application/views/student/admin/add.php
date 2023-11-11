<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Add SSC Officer</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>  

<head>
    <title>Add SSC Officer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header class="hero">
        <div class="hero-wrap">
            <p class="intro" id="intro">Add</p>
            <h1 id="headline">SSC Officer</h1>
            <a style="color: white;" href="javascript:history.back()">← Go Back</a>
        </div>
    </header>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6">
        
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add SSC Officer</h3>
                    <form>
                        <div class="row mb-4">
                            <div class="col-12 col-md-4">
                                <div class="form-outline">
                                    <input type="text" id="firstName" class="form-control form-control-lg" required />
                                    <label class="form-label" for="firstName">First Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-outline">
                                    <input type="text" id="lastName" class="form-control form-control-lg" required />
                                    <label class="form-label" for="lastName">Last Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-outline">
                                    <input type="text" id="middleName" class="form-control form-control-lg" required />
                                    <label class="form-label" for="middleName" placeholder="M.I">Middle Initials</label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Additional fields here... -->
                 

                        <!-- Additional fields here... -->
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="course" class="form-control form-control-lg" required />
                                    <label class="form-label" for="course">Course</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="contactDetails" class="form-control form-control-lg" required />
                                    <label class="form-label" for="contactDetails">Contact Details</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                        <a class="btn btn-success btn-lg" onclick="confirmAdd()">Save</a>
                        <a class="btn btn-danger btn-lg" href="http://akic-cup.com/index.php?c=Content&m=view_students">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function confirmAdd() {
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const middleInitial = document.getElementById('middleName').value;
    const course = document.getElementById('course').value;
    const contactDetails = document.getElementById('contactDetails').value;

    // Custom validation logic here
    if (!firstName || !lastName || !middleInitial || !course || !contactDetails) {
        Swal.fire({
            title: 'Error',
            text: 'Please fill out all required fields.',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        });
    } else {
        Swal.fire({
            title: 'SSC Officer Added',
            text: 'The SSC Officer was successfully added.',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect after a delay of 1.5 seconds (adjust as needed)
                setTimeout(function() {
                    window.location.href = 'http://akic-cup.com/index.php?c=Content&m=view_students';
                }, 1500);
            }
        });
    }
}
</script>
</body>
</html>

</body>
</html>