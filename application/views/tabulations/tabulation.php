<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Tabulations & Rankings</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>  
    <!-- Content -->
<body>
<header class="hero">
   <div class="hero-wrap">
      <p class="intro" id="intro">Tabulations</p>
      <h1 id="headline">& Rankings</h1>
      <a style="color: white;"href="javascript:history.back()">← Go Back</a>
   </div>
   
</header>

<div style="overflow-x:auto;">
<div class="container py-5 h-100" >

<div class="table-responsive-custom">
    
<table class="table table-striped" id="overall-tabulations">

<?php if ($this->session->userdata('type') == 'management') { ?>
    <!-- Add Rankings Button -->
    <button id="addRankingsBtn" class="btn btn-success" style="float:right;">Add Rankings</button>
    <button id="resetBtn" class="btn btn-danger" style="display: none; float:right;">Reset</button>
<?php } ?>
 
 <thead class="thead-dark">
    <tr>
     <th scope="col"> Overall Tabulations </th>  
      <th scope="colspan=2" colspan="2" style="background-color: #8bf19a;">Al-Khayam</th>
      <th scope="colspan=2" colspan="2"style="background-color: #f55555;">Al-Burzjani</th>
      <th scope="colspan=2" colspan="2"style="background-color: #f5d255;">Al-Razi</th>
      <th scope="colspan=2" colspan="2"style="background-color: #6ecdf8;">Al-Haytham</th>
    </tr>



     <th scope="row"style="background-color: #d7d7d7;">Event and Activites</th>

      <th scope="col" style="background-color: #d7d7d7;">Ranking</th>
        <th scope="col" style="background-color: #d7d7d7;">Points </th>
           <th scope="col"style="background-color: #d7d7d7;">Ranking</th>
        <th scope="col" style="background-color: #d7d7d7;">Points </th>
        
           <th scope="col"style="background-color: #d7d7d7;">Ranking</th>
        <th scope="col"style="background-color: #d7d7d7;">Points </th>
           <th scope="col"style="background-color: #d7d7d7;">Ranking</th>
        <th scope="col"style="background-color: #d7d7d7;">Points </th>
        
        

        
  </thead>
  <tbody>
        <tr>
            <td>Flag Raising</td>
            <!-- khayam -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>

          <td class="points" scope="col" data-team="Al-Khayyam"></td>




           <!-- burj -->
           <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>

  <td class="points" scope="col" data-team="Al-Burzjani"></td>



  <!-- razi -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
          <td class="points" scope="col" data-team="Al-Razi"></td>
            <!-- haytham -->
          
          
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
          <td class="points" scope="col" data-team="Al-Haytham"></td>
        </tr>
    
         



         <tr>
           <td scope="row">Best in Uniform</td>
            <!-- khayam -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
           <!-- burj -->
           <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- razi -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- haytham -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
   
        </tr>
    
        <tr>
          <td scope="row">Most Disciplined/Organized</td>
           <!-- khayam -->
           <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
           <!-- burj -->
           <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- razi -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- haytham -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
   
       </tr>
   
       <tr>
          <td scope="row">Basketball</td>
           <!-- khayam -->
           <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
           <!-- burj -->
           <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- razi -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- haytham -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
   
      </tr>
   

        <tr>
          <td  scope="row">Mens Volleyball</td>
           <!-- khayam -->
           <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
           <!-- burj -->
           <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- razi -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- haytham -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
    
       </tr>
        <tr>
        <td  scope="row">Womens Volleyball</td>
           <!-- khayam -->
           <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
           <!-- burj -->
           <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- razi -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- haytham -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
    
       </tr>
    
     <tr>
     <td scope="row">Mens Badminton</td>
           <!-- khayam -->
           <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
           <!-- burj -->
           <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- razi -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- haytham -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
    
       </tr>
        <tr>
        <td  scope="row">Womens Badminton</td>
           <!-- khayam -->
           <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
           <!-- burj -->
           <td class="rank" scope="col"><select>
            
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- razi -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
            <!-- haytham -->
            <td class="rank" scope="col"><select>
<option>Rank</option>   <option>First</option>
<option>Second</option>
<option>Third</option>
<option>Fourth</option>
            </select>
          </td>
            <td class="points
            " scope="col"></td>
    
       </tr>
       
       <tr>
    <th scope="row">TOTAL:</th> 
    <td class="points" data-team="Al-Khayyam" data-total="true" colspan="2" style="background-color: #8bf19a;">0</td>
    <td class="points" data-team="Al-Burzjani" data-total="true" colspan="2" style="background-color: #f55555;">0</td>
    <td class="points" data-team="Al-Razi" data-total="true" colspan="2" style="background-color: #f5d255;">0</td>
    <td class="points" data-team="Al-Haytham" data-total="true" colspan="2" style="background-color: #6ecdf8;">0</td>
</tr>
</tbody>


<script>
    function setRankingsCellAsText() {
        const rankSelects = document.querySelectorAll('.rank select');
        rankSelects.forEach(select => {
            const selectedOption = select.options[select.selectedIndex].text;
            select.parentElement.textContent = selectedOption;
        });
    }

    // Function to enable or disable the select rank functionality for management users
    function setSelectRankEnabled(isEnabled) {
        const rankSelects = document.querySelectorAll('.rank select');
        rankSelects.forEach(select => {
            select.disabled = !isEnabled;
        });
    }

    // Set the initial state when the page loads
    window.onload = function () {
        const isManagement = '<?php echo $this->session->userdata('type') == 'management'; ?>';
        if (isManagement) {
            setSelectRankEnabled(false); // Disabled initially for management users
        } else {
            setRankingsCellAsText(); // For non-management users, show the rankings as text
            document.getElementById('addRankingsBtn').style.display = 'none'; // Hide the "Add Rankings" button for non-management users
        }
    };
</script>


<script>
  // Function to add data-team attribute to points cells based on their position
  function addDataTeamAttribute() {
    const table = document.getElementById('overall-tabulations'); // Replace 'your-table-id' with the ID of your table
    const teams = ['Al-Khayyam', 'Al-Burzjani', 'Al-Razi', 'Al-Haytham'];

    // Iterate through each row of the table (starting from index 1 to skip the header row)
    for (let i = 1; i < table.rows.length; i++) {
      const row = table.rows[i];
      const pointsCells = row.querySelectorAll('td.points');

      // Iterate through each points cell in the row and set the data-team attribute
      for (let j = 0; j < pointsCells.length; j++) {
        const team = teams[j % teams.length]; // Cycle through the teams
        pointsCells[j].setAttribute('data-team', team);
      }
    }
  }

  // Call the function to set the data-team attribute initially
  addDataTeamAttribute();
</script>


<script>
  let isRankingEnabled = false;

  // Function to enable the select rank functionality
  function enableSelectRank() {
    const rankSelects = document.querySelectorAll('.rank select');
    rankSelects.forEach(select => {
      select.disabled = false;
    });
  }

  // Function to disable the select rank functionality and show Reset button
  function disableSelectRankAndShowReset() {
    const rankSelects = document.querySelectorAll('.rank select');
    rankSelects.forEach(select => {
      select.disabled = true;
    });
    document.getElementById('addRankingsBtn').textContent = 'Add Rankings';
    document.getElementById('resetBtn').style.display = 'block';
  }

  function resetTable() {
  const rankSelects = document.querySelectorAll('.rank select');
  rankSelects.forEach(select => {
    select.selectedIndex = 0;
    select.disabled = !isRankingEnabled;
  });

  const pointsCells = document.querySelectorAll('.points');
  pointsCells.forEach(cell => {
    cell.textContent = '0'; // Reset the points to 0
  });

  document.getElementById('addRankingsBtn').textContent = 'Add Rankings';
  document.getElementById('resetBtn').style.display = 'none';
}

  // Event listener for the "Add Rankings" button
  const addRankingsBtn = document.getElementById('addRankingsBtn');
  addRankingsBtn.addEventListener('click', function () {
    if (isRankingEnabled) {
      disableSelectRankAndShowReset();
    } else {
      enableSelectRank();
      addRankingsBtn.textContent = 'Save and Finish';
    }
    isRankingEnabled = !isRankingEnabled;
  });

  // Event listener for the "Reset" button
  const resetBtn = document.getElementById('resetBtn');
  resetBtn.addEventListener('click', function () {
    resetTable();
  });

  // Set the initial state when the page loads
  window.onload = function () {
    resetTable();
  };
</script>
    <script>
        // Get the table element using its id
        const table = document.getElementById('overall-tabulations');

        // Get all the rank select elements within the table
        const rankSelects = table.querySelectorAll('td.rank select');

        // Function to calculate points based on rank
        function calculatePoints(rank) {
            if (rank === 'First') return 20;
            if (rank === 'Second') return 15;
            if (rank === 'Third') return 10;
            if (rank === 'Fourth') return 5;
            return 0;
        }

        // Function to update points when rank is selected
        function updatePoints() {
            const pointsCell = this.parentElement.nextElementSibling;
            const rank = this.value;
            const points = calculatePoints(rank);
            pointsCell.textContent = points;
            calculateTotalPoints();
        }

        // Attach the event listener to each rank select element
        rankSelects.forEach(select => {
            select.addEventListener('change', updatePoints);
        });

        // Function to calculate the total points for each team
        function calculateTotalPoints() {
            const teams = ['Al-Khayyam', 'Al-Burzjani', 'Al-Razi', 'Al-Haytham'];
            teams.forEach(team => {
                const teamPointsCells = table.querySelectorAll(`td.points[data-team="${team}"]:not([data-total="true"])`);
                let totalPoints = 0;
                teamPointsCells.forEach(cell => {
                    const points = parseInt(cell.textContent);
                    totalPoints += points || 0; // If points are NaN, use 0 instead
                });
                const totalPointsCell = table.querySelector(`td.points[data-team="${team}"][data-total="true"]`);
                totalPointsCell.textContent = totalPoints;
            });
        }

        // Initial calculation of points
        updatePoints();

        // Function to reset all points back to zero
        function resetPoints() {
            const allPointsCells = table.querySelectorAll('td.points:not([data-total="true"])');
            allPointsCells.forEach(cell => {
                cell.textContent = '0';
            });
            calculateTotalPoints();
        }
    </script>

      </table>
</body>
</html>

