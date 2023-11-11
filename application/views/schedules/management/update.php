<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Program Schedule</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/sweetalert/sweetalert2.min.css">
</head>

<body>
<header class="hero">
        <div class="hero-wrap">
            <p class="intro" id="intro">Update Program</p>
            <h1 id="headline">Schedule</h1>
            <a style="color: white;" href="javascript:history.back()">← Go Back</a>
        </div>
    </header>

    <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update a Program Schedule</h3>
                            <form id="scheduleForm" action="process_schedule.php" method="post">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <h6 class="mb-2 text-primary">Program</h6>
                                        <input type="text" class="form-control" name="program" placeholder="Name"  value="Orientation" required>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="mb-2 text-primary">Description</h6>
                                        <input type="text" class="form-control" name="description" placeholder="Description" value="Preparation for AKIC CUP" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-outline">
                                            <h6 class="mb-2 text-primary">Venue</h6>
                                            <input type="text" class="form-control" name="venue" placeholder="Location" value="SLS Gymnasium" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline">
                                            <h6 class="mb-2 text-primary">Date</h6>
                                            <input type="date" class="form-control" name="date" value="2023-06-10" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-outline">
                                            <h6 class="mb-2 text-primary">Time</h6>
                                            <input type="time" class="form-control" name="time" value="14:00" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline">
                                            <h6 class="mb-2 text-primary">End Time</h6>
                                            <input type="time" class="form-control" name="endTime" value="17:00" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
    <div class="form-outline">
        <bR></bR>
        <h6 class="mb-2 text-primary">Require Attendance?</h6>
   
        <input type="checkbox" id="attendanceRequired" name="attendanceRequired" checked>
    </div>
</div>

                                </div>
                                <div class="mt-4 pt-2">
                                    <button type="button" class="btn btn-success" onclick="validateAndSubmit();">Submit</button>
                                    <a class="btn btn-danger" href="index.php?c=Content&m=view_schedules">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/assets/sweetalert/sweetalert2.min.js"></script>
    <script>
        function validateAndSubmit() {
            const form = document.getElementById('scheduleForm');
            if (form.checkValidity()) {
                Swal.fire({
                    title: 'Schedule Updated!',
                    text: 'The schedule has been updated.',
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
</body>
</body>

</html>
