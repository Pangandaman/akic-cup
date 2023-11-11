<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Update Students</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>  

<header class="hero">
    <div class="hero-wrap">
     <p class="intro" id="intro">Update</p>
         <h1 id="headline">Student</h1>
         <a style="color: white;"href="javascript:history.back()">← Go Back</a>


   </div>
    </header>

    <section class="vh-100 gradient-custom" style="overflow: hidden;">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Form</h3>
                        <form>

                            <div class="row mb-4">
                                <div class="col-md-6">

                                    <div class="form-outline">
                                        <input type="text" id="firstName" class="form-control form-control-lg" />
                                        <label class="form-label" for="firstName">First Name</label>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-outline">
                                        <input type="text" id="lastName" class="form-control form-control-lg" />
                                        <label class="form-label" for="lastName">Last Name</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">

                                    <div class="form-outline">
                                        <input type="password" class="form-control form-control-lg" id="password" />
                                        <label for="password" class="form-label">Password</label>
                                    </div>

                                </div>
                              
                                <div class="col-md-6">

<div class="form-outline">

    <select class="select form-control-lg">
     
        <option value="" disabled selected>Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <br> <label class="form-label" for="house">Gender</label>
</div>

</div>




                                
                                    </div>


                            <div class="row mb-4">
                                <div class="col-md-6">

                                    <div class="form-outline">
                                        <input type="tel" id="phone" class="form-control form-control-lg" />
                                        <label class="form-label" for="phone">Phone</label>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-outline">
                                        <input type="text" id="course" class="form-control form-control-lg" />
                                        <label class="form-label" for="course">Course</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">

                                    <div class="form-outline">
                                        <select class="select form-control-lg">
                                            <option value="" disabled selected>Student Type</option>
                                            <option value="House_id">Participant</option>
                                              <option value="SSC_id" disabled>Student Council</option>
                                        </select>
                                        <br> <label class="form-label" for="house">Affiliation</label>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <!-- Add any additional input or select here if needed -->
                                </div>
                            </div>

                            <div class="mt-4 pt-2">
                                <button style="float: right;" class="btn btn-success" onclick='location.href="Employee.html"'>Submit</button>
                                <button style="float: right;" class="btn btn-danger" onclick='location.href="Employee.html"'>Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>