<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Merge Bracket</title>
    <style>
        /* Add custom styles here */
        /* Example: .my-class { property: value; } */
    </style>
</head>

<body>
    <header class="hero">
        <div class="hero-wrap">
            <p class="intro" id="intro">Merge</p>
            <h1 id="headline">Bracket</h1>
            <a style="color: white;" href="javascript:history.back()">← Go Back</a>
        </div>
    </header>

    <!-- Start content -->

        <div class="container">
  
             
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Merge Basketball : Double-Elimination</h3>
    <form id="myForm">
        <div class="row mb-4">
            <div class="col-6">
                <h6 class="mb-2 text-primary">Challonge Link</h6>
                <input type="text" class="form-control" id="challongeLink" placeholder="ex: https://challonge.com/vioo06sh/module" required>
            </div>
        </div>

        <!-- Submit and Cancel Buttons -->
        <div class="mt-4 pt-2 d-flex justify-content-end">
            <button class="btn btn-danger" onclick="history.back()">Cancel</button>
            <button type="submit" class="btn btn-success mr-3" id="submitBtn">Submit</button>
        </div>
    </form>

    <script>
        document.getElementById('myForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission
            const challongeLink = document.getElementById('challongeLink').value;

            if (!challongeLink) {
                Swal.fire({
                    icon: 'error',
                    title: 'Input is required',
                    text: 'Please enter the Challonge Link',
                });
            } else {
                // Perform your form submission here if needed

                // Display success message
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'The Challonge bracket has been merged to the activity.',
                    confirmButtonText: 'OK'
                }).then(() => {
                    // Redirect or perform any other action after success
                    window.location.href = 'http://akic-cup.com/index.php?c=Content&m=view_tournaments';
                });
        }
    });
</script>

    </script>
    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
