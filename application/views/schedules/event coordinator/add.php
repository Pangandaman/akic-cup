<!DOCTYPE html>
<html lang="en">

<head>
    <title>Schedules</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/sweetalert/sweetalert2.min.css">
</head>

<body>
    <header class="hero">
        <div class="hero-wrap">
            <p class="intro" id="intro">Add</p>
            <h1 id="headline">Schedule</h1>
            <a style="color: white;" href="javascript:history.back()">← Go Back</a>
        </div>
    </header>

    <!--start content-->

   
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Schedule</h3>
                        <form id="scheduleForm" action="process_schedule.php" method="post">

                            <div class="row mb-4">
                                <div class="col-6">
                                    <h6 class="mb-2 text-primary">Activity</h6>
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-6">
                                    <h6 class="mb-2 text-primary">Description</h6>
                                    <input type="text" class="form-control" placeholder="Description" required>
                                </div>
                            </div>
                                <div class="row mb-4">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <h6 class="mb-2 text-primary">Team 1</h6>
                                            <select class="form-control" required>
                                                <option>Select House</option>
                                                <option>Al-Razi</option>
                                                <option>Al-Haytham</option>
                                                <option>Al-Khayyam</option>
                                                <option>Al-Burzjani</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <h6 class="mb-2 text-primary">Team 2</h6>
                                            <select class="form-control" required>
                                                <option>Select House</option>
                                                <option>Al-Razi</option>
                                                <option>Al-Haytham</option>
                                                <option>Al-Khayyam</option>
                                                <option>Al-Burzjani</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                          

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-outline">
                                        <h6 class="mb-2 text-primary">Venue</h6>
                                        <input type="text" class="form-control" placeholder="Location" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-outline">
                                        <h6 class="mb-2 text-primary">Date</h6>
                                        <input type="date" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-outline">
                                        <h6 class="mb-2 text-primary">Time</h6>
                                        <input type="time" class="form-control" min="09:00" max="18:00" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-outline">
                                        <h6 class="mb-2 text-primary">End Time</h6>
                                        <input type="time" class="form-control" min="09:00" max="18:00" required>
                                    </div>
                                </div>
                            </div>

                             <div class="mt-4 pt-2">
                                    <a type="button" class="btn btn-success" onclick="validateAndSubmit();">Submit</a>
                                    <a class="btn btn-danger" href="index.php?c=Content&m=view_schedules">Cancel</a>
                                </div>
    <script>
        function validateAndSubmit() {
            const form = document.getElementById('scheduleForm');
            if (form.checkValidity()) {
                Swal.fire({
                    title: 'Schedule Added!',
                    text: 'The schedule has been added.',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // form.submit();
                             // Redirect after a delay of 1.5 seconds (adjust as needed)
            setTimeout(function() {
                window.location.href = 'http://akic-cup.com/index.php?c=Content&m=view_schedules';
            }, 1500);
                    }
                });
            } else {
                // Trigger HTML5 form validation
                form.reportValidity();
            }
        }
    </script>
</div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<script src="/assets/sweetalert/sweetalert2.min.js"></script>