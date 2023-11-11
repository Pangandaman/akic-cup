<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Ranking Brackets</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>  
    <!-- Content -->
    <body>


  <header class="hero">
    <div class="hero-wrap">
      <p class="intro" id="intro">Ranking</p>
      <h1 id="headline">Vocal Duet</h1>
      <a style="color: white;" href="javascript:history.back()">← Go Back</a>
    </div>
  </header>



  <div class="container py-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card shadow-sm">
      <div class="card-header bg-secondary text-white" style="border-radius: 3px;">
    
      <div class="card-body">
   
          <div class="table-responsive">
  
            <table class="table table-hover">
              <thead>   
                <tr>
                  <th>Rank</th>
                  <th>House</th>
                  <th>Participants</th>
                  <th>Points</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="rank">
                    <select class="rank-select">
                      <option value="First">1</option>
                      <option value="Second">2</option>
                      <option value="Third">3</option>
                      <option value="Fourth">4</option>
                    </select>
                  </td>
                  <td class="team">Al-Haytham</td>
                      <td class="team">Moira Dela Torre/Amr Pangandaman</td>
                <td class="points"></td>
                </tr>
                <!-- Add similar rows for other teams -->
                <td class="rank">
                    <select class="rank-select">
                      <option value="First">1</option>
                      <option value="Second">2</option>
                      <option value="Third">3</option>
                      <option value="Fourth">4</option>
                    </select>
                  </td>
                  <td class="team">Al-Razi</td>
                                <td class="team">Lea Salonga/Bamboo Manalac</td>
             
                  <td>
                    <span class="points"></span>
                  </td>
                <tr>
                  <!-- Another team row with rank, team name, and points -->
                  <td class="rank">
                    <select class="rank-select">
                      <option value="First">1</option>
                      <option value="Second">2</option>
                      <option value="Third">3</option>
                      <option value="Fourth">4</option>
                    </select>
                  </td>
                  <td class="team">Al-Khayyam</td>
                  <td class="team">Sarah Geronimo/Arnel Pineda</td>
                  <td>
                    <span class="points"></span>
                  </td>
                </tr>
                <!-- Add more team rows here -->
                <td class="rank">
                    <select class="rank-select">
                      <option value="First">1</option>
                      <option value="Second">2</option>
                      <option value="Third">3</option>
                      <option value="Fourth">4</option>
                    </select>
                  </td>
                  <td class="team">Al-Burzjani</td>
                <td class="team">Charice Pempengco/Jovit Baldivino</td>
                  <td>
                    <span class="points"></span>
                  </td>
                  
              </tbody>
     
            </table>
            <hr>
            <?php if ($this->session->userdata('type') == 'event coordinator') { ?>
    <!-- Add Rankings Button -->
    <button id="addRankingsBtn" class="btn btn-success" style="float:right; margin:5%;">Update</button>
   
<?php } ?>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function calculatePoints(rank) {
    if (rank === 'First') return 20;
    if (rank === 'Second') return 15;
    if (rank === 'Third') return 10;
    if (rank === 'Fourth') return 5;
    return 0;
  }

  function updatePoints() {
    const pointsCell = this.parentElement.nextElementSibling.nextElementSibling.querySelector('.points');

    const rank = this.value;
    const points = calculatePoints(rank);
    pointsCell.textContent = points;
  }

  // Attach the event listener to each rank select element
  const rankSelects = document.querySelectorAll('.rank-select');
  rankSelects.forEach(select => {
    select.addEventListener('change', updatePoints);
  });

</script>

 
  
</body>
</html>













