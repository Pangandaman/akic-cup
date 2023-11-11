<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mind & Arts Event</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
        </table>
    <style>
  .team-column {
    display: flex; /* Use flexbox to display items in a row */
    flex-wrap: wrap; /* Wrap items to new rows if they overflow horizontally */
  }

  .team-box {
    width: 25%; /* Each team box will take 25% of the width */
    padding: 10px;
    color: white;
    border-radius: 5px;
  }

  .team-title {
    font-weight: bold;
    font-size: 16px;
  }

  .team-box ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .team-box li {
    padding: 5px;
    font-size: 14px;
  }
</style>
  </head>
  <!-- Content -->
  <body>
    <header class="hero">
      <div class="hero-wrap">
        <p class="intro" id="intro">Mind & Arts</p>
        <h1 id="headline">Events</h1>
        <a style="color: white;"href="javascript:history.back()">← Go Back</a>
      </div>
    </header>
  

<div class="container py-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card shadow-sm">
      <div class="card-header bg-secondary text-white" style="border-radius: 3px;">
      <?php 
if ($this->session->userdata('type')=='event coordinator'){
?>
<h4 class="mb-0" ><a class="btn btn-primary" style="float: right; margin:1%;" href="index.php?c=Task&m=add_activity">Add Activity</a><?php
}?>

        </div>
        
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Activity</th>
                  <th scope="col">Guidelines</th>
                  <th scope="col">Participants</th>
                  <th scope="col">Coordinator</th>
                  <th scope="col">Attendance</th>
                  <?php
               if ($this->session->userdata('type') == 'management' || $this->session->userdata('type') == 'adviser' || $this->session->userdata('type') == 'event coordinator' || $this->session->userdata('type') == 'ssc') {
                  ?>
                    <th scope="col" colspan="2">Actions</th>
                  <?php
                    }
                  ?>  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Quiz Show</td>
                  <td><a class="btn btn-primary" onclick="showActivityGuideline()">View</a></td>
                  <td><a class="btn btn-primary" onclick="showParticipants()">Show Participants</a></td>
                  <td>Mansour Balindong</td>
                  <td>No attendance file available</td>
                  <?php 
                    if ($this->session->userdata('type') == 'adviser'){
                  ?>
                    <td>
                      <a class="btn btn-success" onclick="showAddParticipants()">Add Participants</a>
                      <a class="btn btn-warning" onclick="showUpdateParticipants()">Update Participants</a>
                    </td>
                    <script>
              function showAddParticipants(){
               Swal.fire({
                 title: 'Select Participants',
                 html:
                   '<div class="form-group">' +
                   '<label for="member">Select from members</label>' +
                   '<select multiple class="form-control" id="member" style="height: 200px !important;">' +
                   '<option>Crisóstomo Yusup</option>' +
                   '<option>Pythagoras Bartosz</option>' +
                   '<option>María Reyes</option>' +
                   '<option>Trinidad Lupe</option>' +
                   '<option>Emmitt Bennett</option>' +
                   '<option>Aarón Ladislao</option>' +
                   '<option>Mohammad Yusuf</option>' +
                   '<option>Emery Artie</option>' +
                   '<option>Coby Evelyn</option>' +
                   '<option>Jaden Quin</option>' +
                   '</select>' +
                   '</div>',
                 showCancelButton: true,
                 confirmButtonText: 'Add',
                 preConfirm: () => {
                   const position = Swal.getPopup().querySelector('#position').value;
                   const selectedMembers = Array.from(Swal.getPopup().querySelectorAll('#member option:checked')).map(option => option.value);
                   return { position: position, selectedMembers: selectedMembers };
                 },
               }).then((result) => {
                 if (result.isConfirmed) {
                   const position = result.value.position;
                   const selectedMembers = result.value.selectedMembers;
              
                   // Here, you can handle the position and selected members as needed.
                   // For example, you can store them in variables, send them to the server, etc.
                   console.log('Position:', position);
                   console.log('Selected Participants:', selectedMembers);
                 }
               });
              }
            </script>
            <script>
              function showUpdateParticipants() {
               Swal.fire({
                 title: 'Update Participants',
                 html:
                   '<div class="form-group">' +
                   '<label for="member">Select from members</label>' +
                   '<select multiple class="form-control" id="member" style="height: 200px !important;">' +
                   '<option>Crisóstomo Yusup</option>' +
                   '<option>Pythagoras Bartosz</option>' +
                   '<option>María Reyes</option>' +
                   '<option>Trinidad Lupe</option>' +
                   '<option>Emmitt Bennett</option>' +
                   '<option>Aarón Ladislao</option>' +
                   '<option>Mohammad Yusuf</option>' +
                   '<option>Emery Artie</option>' +
                   '<option>Coby Evelyn</option>' +
                   '<option>Jaden Quin</option>' +
                   '</select>' +
                   '</div>',
                 showCancelButton: true,
                 confirmButtonText: 'Update',
                 preConfirm: () => {
                   const position = Swal.getPopup().querySelector('#position').value;
                   const selectedMembers = Array.from(Swal.getPopup().querySelectorAll('#member option:checked')).map(option => option.value);
                   return { position: position, selectedMembers: selectedMembers };
                 },
               }).then((result) => {
                 if (result.isConfirmed) {
                   const position = result.value.position;
                   const selectedMembers = result.value.selectedMembers;
              
                   // Here, you can handle the position and selected members as needed.
                   // For example, you can store them in variables, send them to the server, etc.
                   console.log('Position:', position);
                   console.log('Selected Participants:', selectedMembers);
                 }
               });
              }
            </script>
            
                  <?php
                    } else if ($this->session->userdata('type') == 'management') {
                  ?>
                    <td>
                      <a class="btn btn-success" onclick="UpdateCoordinator()">Update Coordinator</a>
                    </td>
                    <script>
              function UpdateCoordinator() {
                  Swal.fire({
                      title: 'Update Coordinator',
                      html: `
                          <select>
                              <option>Mansour Balindong</option>
                              <option>Jehanime Macasawang</option>
                              <option>Salma Saiben</option>
                              <option>Ayn Umpa</option>
                          </select>
                      `,
                      showCancelButton: true,
                      confirmButtonText: 'Update',
                      preConfirm: () => {
                          // Add code to handle the selected adviser if needed.
                      },
                  }).then((result) => {
                      if (result.isConfirmed) {
                          // Add code to handle the confirmation if needed.
                      }
                  });
              }
            </script>
                  <?php
                    } else if ($this->session->userdata('type') == 'event coordinator') {
                  ?>
                    <td>
                    <a class="btn btn-success"  href="index.php?c=Task&m=update_activity" onclick="UpdateActivity()">Update Activity</a>
                      <a class="btn btn-danger" onclick="RemoveActivity()">Remove Activity</a>
                    </td>
                    <script>
  function RemoveActivity() {
    Swal.fire({
      title: 'Confirm Removal',
      text: 'Are you sure you want to remove this activity?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, remove it!',
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
<?php

// SSC USER  ACTIONS



                    } else if ($this->session->userdata('type') == 'ssc') {
                  ?>
                    <td>
                    <a type="button" class="btn btn-success" onclick="showUploadModal()">
  Upload Attendance</a>
                    </td>



                    <script>
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
      showConfirmButton: false
    });
  }
</script>
                  <?php
                    }
                  ?>
                </tr>
          
          
          
          
            <tr>
            <td>Spelling Bee</td>
            <td><a class="btn btn-primary" onclick="showActivityGuideline()">View</a></td>

            <td><a class="btn btn-primary" onclick="showParticipants()">Show Participants</a></td>
            <td>Jehanime Macasawang</td>
       
            <td><a class="btn btn-primary" onclick="showCSVData()">View</a></td>
            <?php 
              if ($this->session->userdata('type')=='adviser'){
              ?>
            <td>
              <a class="btn btn-success" onclick="showAddParticipants()">Add Participants</a>
              <a class="btn btn-warning" onclick="showUpdateParticipants()">Update Participants</a>
            </td>
            <script>
              function showAddParticipants() {
               Swal.fire({
                 title: 'Select Participants',
                 html:
                   '<div class="form-group">' +
                   '<label for="member">Select from members</label>' +
                   '<select multiple class="form-control" id="member" style="height: 200px !important;">' +
                   '<option>Crisóstomo Yusup</option>' +
                   '<option>Pythagoras Bartosz</option>' +
                   '<option>María Reyes</option>' +
                   '<option>Trinidad Lupe</option>' +
                   '<option>Emmitt Bennett</option>' +
                   '<option>Aarón Ladislao</option>' +
                   '<option>Mohammad Yusuf</option>' +
                   '<option>Emery Artie</option>' +
                   '<option>Coby Evelyn</option>' +
                   '<option>Jaden Quin</option>' +
                   '</select>' +
                   '</div>',
                 showCancelButton: true,
                 confirmButtonText: 'Add',
                 preConfirm: () => {
                   const position = Swal.getPopup().querySelector('#position').value;
                   const selectedMembers = Array.from(Swal.getPopup().querySelectorAll('#member option:checked')).map(option => option.value);
                   return { position: position, selectedMembers: selectedMembers };
                 },
               }).then((result) => {
                 if (result.isConfirmed) {
                   const position = result.value.position;
                   const selectedMembers = result.value.selectedMembers;
              
                   // Here, you can handle the position and selected members as needed.
                   // For example, you can store them in variables, send them to the server, etc.
                   console.log('Position:', position);
                   console.log('Selected Participants:', selectedMembers);
                 }
               });
              }
            </script>
            <script>
              function showUpdateParticipants() {
               Swal.fire({
                 title: 'Update Participants',
                 html:
                   '<div class="form-group">' +
                   '<label for="member">Select from members</label>' +
                   '<select multiple class="form-control" id="member" style="height: 200px !important;">' +
                   '<option>Crisóstomo Yusup</option>' +
                   '<option>Pythagoras Bartosz</option>' +
                   '<option>María Reyes</option>' +
                   '<option>Trinidad Lupe</option>' +
                   '<option>Emmitt Bennett</option>' +
                   '<option>Aarón Ladislao</option>' +
                   '<option>Mohammad Yusuf</option>' +
                   '<option>Emery Artie</option>' +
                   '<option>Coby Evelyn</option>' +
                   '<option>Jaden Quin</option>' +
                   '</select>' +
                   '</div>',
                 showCancelButton: true,
                 confirmButtonText: 'Update',
                 preConfirm: () => {
                   const position = Swal.getPopup().querySelector('#position').value;
                   const selectedMembers = Array.from(Swal.getPopup().querySelectorAll('#member option:checked')).map(option => option.value);
                   return { position: position, selectedMembers: selectedMembers };
                 },
               }).then((result) => {
                 if (result.isConfirmed) {
                   const position = result.value.position;
                   const selectedMembers = result.value.selectedMembers;
              
                   // Here, you can handle the position and selected members as needed.
                   // For example, you can store them in variables, send them to the server, etc.
                   console.log('Position:', position);
                   console.log('Selected Participants:', selectedMembers);
                 }
               });
              }
            </script>
            <?php
              } else if ($this->session->userdata('type')=='management'){
               ?>
            <td>
              <a class="btn btn-success" onclick="UpdateCoordinator()">Update Coordinator</a>
            </td>
            <script>
              function UpdateCoordinator() {
                  Swal.fire({
                      title: 'Update Coordinator',
                      html: `
                          <select>
                              <option>Mansour Balindong</option>
                              <option>Jehanime Macasawang</option>
                              <option>Salma Saiben</option>
                              <option>Ayn Umpa</option>
                          </select>
                      `,
                      showCancelButton: true,
                      confirmButtonText: 'Update',
                      preConfirm: () => {
                          // Add code to handle the selected adviser if needed.
                      },
                  }).then((result) => {
                      if (result.isConfirmed) {
                          // Add code to handle the confirmation if needed.
                      }
                  });
              }
            </script>
               <?php
                    } else if ($this->session->userdata('type') == 'event coordinator') {
                  ?>
                    <td>
                    <a class="btn btn-success"  href="index.php?c=Task&m=update_activity" onclick="UpdateActivity()">Update Activity</a>
                      <a class="btn btn-danger" onclick="RemoveActivity()">Remove Activity</a>
                    </td>
                    <script>
  function RemoveActivity() {
    Swal.fire({
      title: 'Confirm Removal',
      text: 'Are you sure you want to remove this activity?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, remove it!',
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
<?php

// SSC USER  ACTIONS



                    } else if ($this->session->userdata('type') == 'ssc') {
                  ?>
                    <td>
                    <a type="button" class="btn btn-success" onclick="showUploadModal()">
  Upload Attendance</a>
                    </td>



                    <script>
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
      showConfirmButton: false
    });
  }
</script>
                 
            <?php
              }?>
          </tr>
          <tr>
            <td>Chess</td>
            <td><a class="btn btn-primary" onclick="showActivityGuideline()">View</a></td>

            <td><a class="btn btn-primary" onclick="showParticipants()">Show Participants</a></td>
            <td>Salma Saiben</td>


            <!-- ATTENDANCE UPLOAD -->

            <?php
// Check if the file path is available before creating the link
if (!empty($attendanceFilePath)) {
  // Encode the file path to avoid any potential security issues
  $encodedFilePath = urlencode($attendanceFilePath);
  // Replace the empty href attribute with the link to view the attendance file
  echo '<td><a class="btn btn-primary" href="view_attendance.php?file=' . $encodedFilePath . '">View</a></td>';
} else {
  // If the file path is empty, display a message or handle it as per your requirement
  echo '<td>No attendance file available</td>';
}
?>
            <?php 
              if ($this->session->userdata('type')=='adviser'){
              ?>
            <td>
              <a class="btn btn-success" onclick="showAddParticipants()">Add Participants</a>
              <a class="btn btn-warning" onclick="showUpdateParticipants()">Update Participants</a>
            </td>
            <script>
              function showAddParticipants() {
               Swal.fire({
                 title: 'Select Participants',
                 html:
                   '<div class="form-group">' +
                   '<label for="member">Select from members</label>' +
                   '<select multiple class="form-control" id="member" style="height: 200px !important;">' +
                   '<option>Crisóstomo Yusup</option>' +
                   '<option>Pythagoras Bartosz</option>' +
                   '<option>María Reyes</option>' +
                   '<option>Trinidad Lupe</option>' +
                   '<option>Emmitt Bennett</option>' +
                   '<option>Aarón Ladislao</option>' +
                   '<option>Mohammad Yusuf</option>' +
                   '<option>Emery Artie</option>' +
                   '<option>Coby Evelyn</option>' +
                   '<option>Jaden Quin</option>' +
                   '</select>' +
                   '</div>',
                 showCancelButton: true,
                 confirmButtonText: 'Add',
                 preConfirm: () => {
                   const position = Swal.getPopup().querySelector('#position').value;
                   const selectedMembers = Array.from(Swal.getPopup().querySelectorAll('#member option:checked')).map(option => option.value);
                   return { position: position, selectedMembers: selectedMembers };
                 },
               }).then((result) => {
                 if (result.isConfirmed) {
                   const position = result.value.position;
                   const selectedMembers = result.value.selectedMembers;
              
                   // Here, you can handle the position and selected members as needed.
                   // For example, you can store them in variables, send them to the server, etc.
                   console.log('Position:', position);
                   console.log('Selected Participants:', selectedMembers);
                 }
               });
              }
            </script>
            <script>
              function showUpdateParticipants() {
               Swal.fire({
                 title: 'Update Participants',
                 html:
                   '<div class="form-group">' +
                   '<label for="member">Select from members</label>' +
                   '<select multiple class="form-control" id="member" style="height: 200px !important;">' +
                   '<option>Crisóstomo Yusup</option>' +
                   '<option>Pythagoras Bartosz</option>' +
                   '<option>María Reyes</option>' +
                   '<option>Trinidad Lupe</option>' +
                   '<option>Emmitt Bennett</option>' +
                   '<option>Aarón Ladislao</option>' +
                   '<option>Mohammad Yusuf</option>' +
                   '<option>Emery Artie</option>' +
                   '<option>Coby Evelyn</option>' +
                   '<option>Jaden Quin</option>' +
                   '</select>' +
                   '</div>',
                 showCancelButton: true,
                 confirmButtonText: 'Update',
                 preConfirm: () => {
                   const position = Swal.getPopup().querySelector('#position').value;
                   const selectedMembers = Array.from(Swal.getPopup().querySelectorAll('#member option:checked')).map(option => option.value);
                   return { position: position, selectedMembers: selectedMembers };
                 },
               }).then((result) => {
                 if (result.isConfirmed) {
                   const position = result.value.position;
                   const selectedMembers = result.value.selectedMembers;
              
                   // Here, you can handle the position and selected members as needed.
                   // For example, you can store them in variables, send them to the server, etc.
                   console.log('Position:', position);
                   console.log('Selected Participants:', selectedMembers);
                 }
               });
              }
            </script>
            <?php
              }
               else if ($this->session->userdata('type')=='management'){
                ?>
            <td>
              <a class="btn btn-success" onclick="UpdateCoordinator()">Update Coordinator</a>
            </td>
            <script>
              function UpdateCoordinator() {
                  Swal.fire({
                      title: 'Update Coordinator',
                      html: `
                          <select>
                              <option>Mansour Balindong</option>
                              <option>Jehanime Macasawang</option>
                              <option>Salma Saiben</option>
                              <option>Ayn Umpa</option>
                          </select>
                      `,
                      showCancelButton: true,
                      confirmButtonText: 'Update',
                      preConfirm: () => {
                          // Add code to handle the selected adviser if needed.
                      },
                  }).then((result) => {
                      if (result.isConfirmed) {
                          // Add code to handle the confirmation if needed.
                      }
                  });
              }
            </script>
                <?php
                    } else if ($this->session->userdata('type') == 'management') {
                  ?>
                    <td>
                      <a class="btn btn-warning" onclick="UpdateCoordinator()">Update Coordinator</a>
                    </td>
                    <script>
              function UpdateCoordinator() {
                  Swal.fire({
                      title: 'Update Coordinator',
                      html: `
                          <select>
                              <option>Mansour Balindong</option>
                              <option>Jehanime Macasawang</option>
                              <option>Salma Saiben</option>
                              <option>Ayn Umpa</option>
                          </select>
                      `,
                      showCancelButton: true,
                      confirmButtonText: 'Update',
                      preConfirm: () => {
                          // Add code to handle the selected adviser if needed.
                      },
                  }).then((result) => {
                      if (result.isConfirmed) {
                          // Add code to handle the confirmation if needed.
                      }
                  });
              }
            </script>
                  <?php
                    } else if ($this->session->userdata('type') == 'event coordinator') {
                  ?>
                    <td>
                      <a class="btn btn-success"  href="index.php?c=Task&m=update_activity" onclick="UpdateActivity()">Update Activity</a>
                      <a class="btn btn-danger" onclick="RemoveActivity()">Remove Activity</a>
                    </td>
                    <script>
  function RemoveActivity() {
    Swal.fire({
      title: 'Confirm Removal',
      text: 'Are you sure you want to remove this activity?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, remove it!',
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
<?php

// SSC USER  ACTIONS



                    } else if ($this->session->userdata('type') == 'ssc') {
                  ?>
                    <td>
                    <a type="button" class="btn btn-success" onclick="showUploadModal()">
  Upload Attendance</a>
                    </td>



                    <script>
  function showActivityGuideline() {
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
      showConfirmButton: false
    });
  }
</script>
            <?php
              }?>
          </tr>





<!-- Script for displaying the Swal alert with the team members as a list -->
<script>
  function showParticipants() {
    Swal.fire({
      title: 'Participants',
      html: `
        <div class="team-column">
          <!-- Al-Khayyam -->
          <div class="team-box" style="background-color: #7CB342;">
            <p class="team-title">Al-Khayyam Team:</p>
            <ul>
              <li>Crisóstomo Yusup</li>
              <li>Lorccán Yair</li>
              <li>Miško Ingulf</li>
              <li>Rajender Estevo</li>
            </ul>
          </div>
          
          <!-- Al-Burzjani -->
          <div class="team-box" style="background-color: #E57373;">
            <p class="team-title">Al-Burzjani Team:</p>
            <ul>
              <li>Pythagoras Bartosz</li>
              <li>Chandan Elioenai</li>
              <li>Ale Guadalupe</li>
              <li>Odalis Lucero</li>
            </ul>
          </div>

          <!-- Al-Razi -->
          <div class="team-box" style="background-color: #FFD54F;">
            <p class="team-title">Al-Razi Team:</p>
            <ul>
              <li>María Reyes</li>
              <li>Lupe Trinidad</li>
              <li>José Odalis</li>
              <li>Kason Derby</li>
            </ul>
          </div>

          <!-- Al-Haytham -->
          <div class="team-box" style="background-color: #64B5F6;">
            <p class="team-title">Al-Haytham Team:</p>
            <ul>
              <li>Trinidad Lupe</li>
              <li>Goodwin Bernabé</li>
              <li>Garey Logan</li>
              <li>Lorn Melvin</li>
            </ul>
          </div>
        </div>
      `,
      showConfirmButton: false, // Hide the "OK" button
      width: '90%', // Set the width of the popup to 90% of the available width
      customClass: {
        popup: 'team-members-popup' // Add a custom class to customize the Swal popup styling
      }
    });
  }
</script>

<script>
  function showActivityGuideline() {
    const content = `
      <div class="sections">
        <h3 class="Articles">ELIGIBILITY</h3>
        <HR></HR>
        <ul>
       <li>Age Requirement:<br>
Participants must be at least 18 years old at the time of registration. Proof of age may be required during the registration process.</li>

<li>Educational Status:<br>
The contest is open to all individuals, regardless of their educational background. Students, professionals, and aspiring writers are encouraged to participate.</li>

<li>Geographic Limitations:<br>
The contest is open to participants from all regions and countries. There are no geographic restrictions, and international entries are welcome.</li>

<li>Language:<br>
The Creative Writing Contest will be conducted in English. Participants must have a proficient understanding of the English language to submit their entries.</li>

<li>Original Work:<br>
All submissions must be original and unpublished works. Plagiarism or the use of copyrighted materials without proper permission will result in immediate disqualification.</li>
        </ul>

        <h3 class="Articles">MECHANICS</h3>
        <HR></HR>
        <ul>
          <li>The Board of judges shall provide topic of the essay at the venue of the competition.</li>
          <li>The contestants shall be given two (2) hours to develop the composition.</li>
          <li>The contestants shall be provided with a pen and a long bondpaper marked with the assigned number duly signed by the contest master. They are prohibited to write their names and the University they are representing.</li>
          <li>No printed materials, electronic gadgets, or storage devices shall be utilized.</li>
          <li>The contestants are prohibited to wear their university uniform or any symbol/s (e.g. ID lanyard) that mark distinction of their respective university.</li>
          <li>Each contestant shall be assigned a number.</li>
          <li>The result of the contest shall be posted on the tally board immediately after the judges have finished rating the contestants’ manuscripts.</li>
          <li>The judges’ decision is final.</li>
        </ul>
      </div>
    `;

    Swal.fire({
      title: 'Activity Guideline',
      html: content,
      width: '50%', // You can adjust the width as needed
      confirmButtonText: 'Close',
      showCloseButton: true,
    });
  }
</script>

<script>
  function showCSVData() {
    // Replace './data/sample.csv' with the path to your .csv file
    fetch('./attendance/basketball.csv')
      .then(response => response.text())
      .then(csvData => {
        // Parse the .csv data using Papaparse
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
          width: '80%',
          confirmButtonText: 'Close',
          showCloseButton: true,
        });
      })
      .catch(error => {
        console.error('Error reading or parsing the CSV file:', error);
      });
  }
</script>

      </div>
    </div>
  </body>