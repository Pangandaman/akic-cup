<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add Activity</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <!-- Content -->
  <body>
    <header class="hero">
      <div class="hero-wrap">
        <p class="intro" id="intro">Add</p>
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
              <input type="text" id="activityInput" class="form-control form-control-lg" placeholder="Activity Name" />
            </div>
            <br>       

              <!-- Tournament Type -->
                        <br>
            <br>

                   <div class="mb-4">
              <h6 class="mb-2 text-primary">Tournament Type</h6>
            </div>
            <div class="form-outline mb-4">
              <select id="tournamentType" class="form-control form-control-lg">
                <option value="">Select Tournament Type</option>
                <option value="single-bracket">Single Bracket</option>
                <option value="double-elimination">Double Elimination</option>
                <option value="round-robin">Round Robin</option>
                <option value="ranking">Ranking</option>
              </select>
            </div>

            <!-- Event Coordinator -->
                    <div class="mb-4">
              <h6 class="mb-2 text-primary">Event Coordinator</h6>
            </div>
            <div class="form-outline mb-4">
              <select id="eventCoordinator" class="form-control form-control-lg">
                <option value="">Assign Coordinator</option>
                <option value="mansour-balindong">Mansour Balindong</option>
                <option value="jehanime-macasawang">Jehanime Macasawang</option>
                <option value="other-coordinators">Other example coordinators</option>
              </select>
            </div>

            <!-- Activity Guideline -->
            <div class="mb-4">
              <h6 class="mb-2 text-primary">Activity Guideline</h6>
              <textarea class="form-control" id="textAreaExample1" rows="8" placeholder="Eligibility"></textarea>
            </div>

            <!-- Mechanics -->
            <div class="mb-4">
              <h6 class="mb-2 text-primary">Mechanics</h6>
              <textarea class="form-control" id="textAreaExample2" rows="8" placeholder="Mechanics"></textarea>
            </div>

            <!-- Submit and Cancel Buttons -->
            <div class="mt-4 pt-2 d-flex justify-content-end">
              <button class="btn btn-success mr-3" onclick='location.href="Management Islamic Event.html"'>Submit</button>
              <button class="btn btn-danger" onclick='location.href="Management Tournaments.html"'>Cancel</button>
            </div>
          </form>
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