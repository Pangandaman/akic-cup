<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Update Activity</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <!-- Content -->
  <body>
    <header class="hero">
      <div class="hero-wrap">
        <p class="intro" id="intro">Update</p>
        <h1 id="headline">Activity</h1>
        <a style="color: white;"href="javascript:history.back()">← Go Back</a>
      </div>
    </header>
  

    <div class="container py-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card shadow-sm">
      <div class="card-header bg-secondary text-white" style="border-radius: 3px;">
      <h4 class="mb-0" ></h4>
    </div>
        
        <div class="card-body">

        <div class="row justify-content-center align-items-center h-100">
    <div class="col-12 col-lg-9 col-xl-7">
      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
      <div class="card-body p-4 p-md-5">
    <h6 class="mb-4 text-primary">Activity Registration</h6>
    <form>
        <!-- Activity Name -->
        <div class="form-outline mb-4">
            <input type="text" id="activityInput" class="form-control form-control-lg" placeholder="Activity Name" required />
        </div>

        <!-- Tournament Type -->
        <div class="mb-4">
            <h6 class="mb-2 text-primary">Tournament Type</h6>
        </div>
        <div class="form-outline mb-4">
            <select id="tournamentType" class="form-control form-control-lg" required>
                <option value="">Select Tournament Type</option>
                <option value="single-bracket">Single Bracket</option>
                <option value="double-elimination">Double Elimination</option>
                <option value="round-robin">Round Robin</option>
                <option value="ranking">Ranking</option>
            </select>
            <br>
            <h6 class="mb-2 text-primary"> Required: <br> <br><a class="btn btn-primary" href="https://challonge.com/tournament/bracket_generator"> Create the Bracket
                </a></h6>
        </div>

        <!-- Event Coordinator -->
        <div class="mb-4">
            <h6 class="mb-2 text-primary">Event Coordinator</h6>
        </div>
        <div class="form-outline mb-4">
            <select id="eventCoordinator" class="form-control form-control-lg" required>
                <option value="">Assign Coordinator</option>
                <option value="mansour-balindong">Mansour Balindong</option>
                <option value="jehanime-macasawang">Jehanime Macasawang</option>
                <option value="other-coordinators">Other example coordinators</option>
            </select>
        </div>

        <div class="mb-4">
            <h6 class="mb-2 text-primary">Set Points</h6>
            <div class="rank-input-group">
                <label for="rank1">🥇 Rank 1:</label>
                <input type="number" id="rank1" class="rank-input" min="0" max="100" required>
                <label for="rank2">🥈 Rank 2:</label>
                <input type="number" id="rank2" class="rank-input" min="0" max="100" required>
                <label for="rank3">🥉 Rank 3:</label>
                <input type="number" id="rank3" class="rank-input" min="0" max="100" required>
                <label for="rank4">🏅 Rank 4:</label>
                <input type="number" id="rank4" class="rank-input" min="0" max="100" required>
            </div>
        </div>

        <!-- Activity Guideline -->
        <div class="mb-4">
            <h6 class="mb-2 text-primary">Activity Guideline</h6>
            <textarea class="form-control" id="textAreaExample1" rows="8" placeholder="Eligibility" required></textarea>
        </div>

        <!-- Mechanics -->
        <div class="mb-4">
            <h6 class="mb-2 text-primary">Mechanics</h6>
            <textarea class="form-control" id="textAreaExample2" rows="8" placeholder="Mechanics" required></textarea>
        </div>
    </form>
</div>

            <!-- Submit and Cancel Buttons -->
            <div class="mt-4 pt-2 d-flex justify-content-end">
             <button class="btn btn-danger" href="javascript:history.back()">Cancel</button>
             <button class="btn btn-success mr-3" id="submitBtn">Submit</button>
            </div>
          </form>

          <script>
    // Function to validate the form and display appropriate messages
    document.getElementById('submitBtn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent form submission for now

        const activityName = document.getElementById('activityInput').value;
        const tournamentType = document.getElementById('tournamentType').value;
        const eventCoordinator = document.getElementById('eventCoordinator').value;
        const rank1 = document.getElementById('rank1').value;
        const rank2 = document.getElementById('rank2').value;
        const rank3 = document.getElementById('rank3').value;
        const rank4 = document.getElementById('rank4').value;
        const eligibility = document.getElementById('textAreaExample1').value;
        const mechanics = document.getElementById('textAreaExample2').value;

        // Check if any of the required fields are empty
        if (!activityName || !tournamentType || !eventCoordinator || !rank1 || !rank2 || !rank3 || !rank4 || !eligibility || !mechanics) {
            Swal.fire({
                title: 'All fields are required',
                text: 'Please fill in all required fields before submitting.',
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        } else {
            // Form is valid, you can submit the form here
            // For example, you can uncomment the following line to submit the form:
             document.querySelector('form').submit();

            // Display a success message and redirect
            Swal.fire({
                title: 'Update Successful',
                text: 'The activity has been updated successfully.',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                // Redirect after the user clicks OK
                window.location.href = 'http://akic-cup.com/index.php?c=Content&m=view_islamic_event';
            });
        }
    });
</script>

        </div>
      </div>
    </div>
  </div>
    
    
    
    
    
      </div>
    </div>
</div>
</div>
</div>
  </body>
  </html>