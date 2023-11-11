<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Schedules</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>

  </head>
  <!-- Content -->
  <body>
    <header class="hero">
      <div class="hero-wrap">
        <p class="intro" id="intro">Schedule of</p>
        <h1 id="headline">Events</h1>
        <a style="color: white;" href="javascript:history.back()">← Go Back</a>
      </div>
    </header>
    <div style="overflow-x:auto;">
      <div class="container py-5 h-100">
        <?php
        if ($this->session->userdata('type') == 'management' || $this->session->userdata('type') == 'event coordinator') {
        ?>
        <a class="btn btn-primary" style="float: right; margin: 1%;" href="index.php?c=Task&m=add_schedule">Add Schedule</a>
        <?php
        }
        ?>
        <table class="table" style="text-align: center; font-size: 10px;">
          <thead class="thead-dark" style="padding: 50px !important; background-color: #cea434; color: white;">
            <th scope="col">Schedule Type</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Team 1</th>
            <th scope="col">Team 2</th>
            <th scope="col">Location</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col"  colspan="3">Actions</th>
          
      </thead>
          <tr>
            <td>Program</td>
            <td>Orientation</td>
            <td>Preparations for the AKIC CUP</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>SLS Gymnasium</td>
            <td>April 10</td>
            <td>3:00pm - 5:00pm</td>
            <td>
  <a class="btn btn-primary" id="viewAttendanceButton" title="View Attendance">View Attendance</a>
</td>

            <?php
            if ($this->session->userdata('type') == 'management') {
            ?>
          
            <td>
              <a class="btn btn-success" href="index.php?c=Task&m=update_schedule" onclick="UpdateSchedule()">Update Schedule</a>
            </td>
            <td>
              <a class="btn btn-danger" onclick="RemoveSchedule()">Remove Schedule</a>
            </td>
            <?php

// SSC USER  ACTIONS



                    } else if ($this->session->userdata('type') == 'ssc') {
                  ?>
                    <td>
                    <a type="button" class="btn btn-success" onclick="showUploadModal()">
  Upload Attendance</a>
                    </td>
            <?php
              }?>
          </tr>
          <tr>
            <td>Activity</td>
            <td>Basketball</td>
            <td>On-Going</td>
            <td>Al-Khayam</td>
            <td>Al-Razi</td>
            <td>SLS Gymnasium</td>
            <td>April 13</td>
            <td>3:00pm - 5:00pm</td>
            <?php
            if ($this->session->userdata('type') == 'event coordinator') {
            ?>
            <td>
              <a class="btn btn-success" href="index.php?c=Task&m=update_schedule" onclick="UpdateSchedule()">Update Schedule</a>
            </td>
            <td>
              <a class="btn btn-danger" onclick="RemoveSchedule()">Remove Schedule</a>
            </td>
            <?php
            }
            ?>
          </tr>
          <tr>
            <td>Activity</td>
            <td>Volleyball</td>
            <td>On-Going</td>
            <td>Al-Haytham</td>
            <td>Al-Burzjani</td>
            <td>SLS Gymnasium</td>
            <td>April 14</td>
            <td>1:00pm - 6:00pm</td>
            <?php
            if ($this->session->userdata('type') == 'event coordinator') {
            ?>
            <td>
              <a class="btn btn-success" href="index.php?c=Task&m=update_schedule" onclick="UpdateSchedule()">Update Schedule</a>
            </td>
            <td>
              <a class="btn btn-danger" onclick="RemoveSchedule()">Remove Schedule</a>
            </td>
            <?php
            }
            ?>
          </tr>
          <tr>
            <td>Activity</td>
            <td>Badminton</td>
            <td>On-Going</td>
            <td>Al-Khayam</td>
            <td>Al-Haytham</td>
            <td>SLS Gymnasium</td>
            <td>April 16</td>
            <td>8:00am - 10:00am</td>
            <?php
            if ($this->session->userdata('type') == 'event coordinator') {
            ?>
            <td>
              <a class="btn btn-success" href="index.php?c=Task&m=update_schedule" onclick="UpdateSchedule()">Update Schedule</a>
            </td>
            <td>
              <a class="btn btn-danger" onclick="RemoveSchedule()">Remove Schedule</a>
            </td>
            <?php
            }
            ?>
          </tr>
        </table>
        <script>
  function RemoveSchedule() {
    Swal.fire({
      title: 'Confirm Removal',
      text: 'Are you sure you want to remove this Schedule?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes',
      cancelButtonText: 'Cancel'
    }).then((result) => {
      if (result.isConfirmed) {
        // If the user confirms the removal, you can proceed with the action here.
        // For example, you can make an AJAX request to the server to delete the activity
        // and handle the response accordingly.
        // After successful deletion, you can update the UI or redirect the user to another page.
        // Example of an AJAX request (you need to customize it according to your backend):
        // $.ajax({
        //   url: 'remove_activity.php',
        //   method: 'POST',
        //   data: { activity_id: your_activity_id },
        //   success: function(response) {
        //     // Handle the response here
        //     Swal.fire(
        //       'Removed!',
        //       'The activity has been removed.',
        //       'success'
        //     );
        //   },
        //   error: function(xhr, status, error) {
        //     // Handle the error case here
        //     Swal.fire(
        //       'Error',
        //       'An error occurred while removing the activity.',
        //       'error'
        //     );
        //   }
        // });

        // For demonstration purposes, I'll show a success message without the AJAX request.
        Swal.fire(
          'Removed!',
          'The activity has been removed.',
          'success'
        );
      }
    });
  }
</script>
      <script>
  document.getElementById('viewAttendanceButton').addEventListener('click', showCSVData);

  function showCSVData() {
    // Replace './attendance/basketball.csv' with the path to your .csv file
    fetch('./attendance/basketball.csv')
      .then(response => response.text())
      .then(csvData => {
        // Parse the .csv data using PapaParse
        const parsedData = Papa.parse(csvData, { header: true });

        // Format the data as HTML (creating a simple table)
        let htmlContent = '<table>';
        htmlContent += '<tr>';
        for (const header in parsedData.data[0]) {
          htmlContent += `<th>${header}</th>`;
        }
        htmlContent += '</tr>';

        parsedData.data.forEach(row => {
          htmlContent += '<tr>';
          for (const value of Object.values(row)) {
            htmlContent += `<td>${value}</td>`;
          }
          htmlContent += '</tr>';
        });

        htmlContent += '</table>';

        // Display the data in Sweet Alert modal
        Swal.fire({
          title: 'View Attendance Data',
          html: htmlContent,
          width: 'auto',
          confirmButtonText: 'Close',
          showCloseButton: true,
        });
      })
      .catch(error => {
        console.error('Error reading or parsing the CSV file:', error);
      });
  }
  function showUploadModal() {
    Swal.fire({
      title: 'Upload Attendance',
      html: `
        <form action="upload_attendance.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="attendanceFile">Choose File:</label>
            <input type="file" class="form-control-file" id="attendanceFile" name="attendanceFile" required>
          </div>
          <button type="submit" class="btn btn-primary">Upload</button>
        </form>
      `,
      showCancelButton: false,
      showConfirmButton: false,
    });
  }
</script>

      </div>
    </div>
  </body>
</html>
