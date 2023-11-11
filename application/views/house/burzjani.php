<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Al-Burzjani</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      button {
        float: right;
      }

      .btn-group {
        float: right;
      }

      .table {
        width: 100%;
        text-align: center;
        font-size: 10px;
        border-collapse: collapse;
      }

      .table thead {
        background-color: #c34242;
        color: white;
        border-radius: 10px;
        /* Add border radius to cells */
      }

      .table th,
      .table td {
        padding: 8px;
      }

      .table tbody tr:hover {
        background-color: #f5f5f5;
      }

      .house-announcements {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        margin: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      .section-title {
        background-color: #c34242;
        color: white;
        padding: 10px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        margin: -20px -20px 20px -20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .add-button {
        background-color: #c34242;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
      }

      .add-button:hover {
        background-color: red;
      }

      .announcement {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
      }

      ul {
        list-style: none;
      }
    </style>
  </head>
  <!-- Content -->
  <header class="hero">
    <div class="hero-wrap">
      <p class="intro" id="intro">House of</p>
      <h1 id="headline">Al-Burzjani</h1>
      <a style="color: white;" href="javascript:history.back()">← Go Back</a>
    </div>
  </header>
  <div style="overflow-x:auto;">
    <div class="container py-5 h-200">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body text-center">
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="d-flex justify-content-center mb-2 img-container">
        <img src="./assets/img/banner_img_02.jpg" alt="Al-Burzjani Advisers">
    </div>
                  <h6 class="mb-2 text-danger" style="font-size: 25px;">Al-Burzjani</h6>
                  <p class="mb-4">House Advisers</p>
                  <div class="d-flex justify-content-center mb-2">
                    <ul>
                      <li>
                        <h5 class="my-3">Mansour Balindong</h5>
                      </li>
                      <li>
                        <h5 class="my-3">Jehanime Macasawang</h5>
                      </li>
                      <li>
                        <h5 class="my-3">Salma Saiben</h5>
                      </li>
                      <li>
                        <h5 class="my-3">Ayn Umpa</h5>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                <table class="table" style="text-align: left; font-size: 10px;">
                           <tbody>
                            <tr>
                            
                              <?php
if ($this->session->userdata('type') == 'adviser') {
?>
<div class="AdviserList">
    <a class="update-icon" onclick="showContactInfoModal()">

        <h1 class="update-heading">Update House Information        <i class="fa fa-pencil" aria-hidden="true"></i></h1>
    </a>
</div>

<script>
    function showContactInfoModal() {
        Swal.fire({
            title: 'Contact Information',
            html:
                '<input id="phone" class="swal2-input" placeholder="Phone number">' +
                '<input id="facebook" class="swal2-input" placeholder="Facebook link">',
            showCancelButton: true,
            confirmButtonText: 'Save',
            preConfirm: () => {
                const phone = Swal.getPopup().querySelector('#phone').value;
                const facebook = Swal.getPopup().querySelector('#facebook').value;
                return { phone: phone, facebook: facebook };
            },
        }).then((result) => {
            if (result.isConfirmed) {
                const phone = result.value.phone;
                const facebook = result.value.facebook;
                console.log('Phone number:', phone);
                console.log('Facebook link:', facebook);
            }
        });
    }
</script>
<?php
} else if ($this->session->userdata('type') == 'management') {
?>
<div class="AdviserList">
    <td><a class="assign-icon" onclick="showAssignAdviser()">
        <i class="fa fa-users" aria-hidden="true"></i>
    </a></td>
</div>
<script>
    function showAssignAdviser() {
        Swal.fire({
            title: 'Assign Advisers',
            html: `
                <select multiple id="adviserSelect">
                    <option>Mansour Balindong</option>
                    <option>Jehanime Macasawang</option>
                    <option>Salma Saiben</option>
                    <option>Ayn Umpa</option>
                </select>
            `,
            showCancelButton: true,
            confirmButtonText: 'Save',
            preConfirm: () => {
                const selectedAdvisers = Array.from(document.getElementById('adviserSelect').selectedOptions, option => option.text);
                return selectedAdvisers;
            },
        }).then((result) => {
            if (result.isConfirmed) {
                const selectedAdvisers = result.value;
                console.log(selectedAdvisers);
                Swal.fire({
                    title: 'Success',
                    text: 'Advisers are successfully assigned.',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK',
                });
            }
        });
    }
</script>
<?php
}
?>

</tr>
                              <tr>
                                 <th>Phone</th>
                                 <td>0929 3213 144</td>
                              </tr>
                              <tr>
                                 <th>Facebook:</th>
                                 <td>www.facebook.com/<br>alburzjani</td>
                              </tr>
                              <tr>
                                 <th>Total Members:</th>
                                 <td>101</td>
                              </tr>
                              <?php if ($this->session->userdata('type') == 'adviser') { ?>
                              <tr>
                                 <th>Officers:</th>
                                 <td>
                                    <button class="btn btn-primary" onclick="showAssignModal()">Assign</button>
                                 </td>
                              </tr>
                           
                              <script>
function showAssignModal() {
  Swal.fire({
  title: 'Assign Officer',
  html:
    '<div class="form-group">' +
    '<label for="member">Select a member</label>' +
    '<select class="form-control" id="member">' +
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
    '</div>' +
    '<div class="form-group">' +
    '<label for="position">Enter Position</label>' +
    '<input type="text" class="form-control" id="position" placeholder="Position">' +
    '</div>',
  showCancelButton: true,
  confirmButtonText: 'Save',
  preConfirm: () => {
    const selectedMember = Swal.getPopup().querySelector('#member').value;
    const position = Swal.getPopup().querySelector('#position').value;
    return { selectedMember, position };
  },
}).then((result) => {
  if (result.isConfirmed) {
    const { selectedMember, position } = result.value;

    Swal.fire({
      title: 'Confirmation',
      text: 'You have selected: ' + selectedMember + ' as the: ' + position,
      showCancelButton: true,
      confirmButtonText: 'Confirm',
    }).then((confirmationResult) => {
      if (confirmationResult.isConfirmed) {
        // Handle confirmation if needed

        Swal.fire({
          title: 'Success',
          text: 'Officer Assigned Successfully',
          icon: 'success',
          timer: 1500, // Automatically close the success message after 1.5 seconds
          showConfirmButton: false, // Hide the "OK" button
        });
      }
    });
  }
});

}
</script>

                        
                              <?php } ?>
    </tbody>
    </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-body">
               <div class="col-lg-8" style=" width: 100% !important;"> 
               <?php
if ($this->session->userdata('type') == 'adviser') {
    // Display the input field for creating a new post
    echo '<div class="status-post">';
    echo '<div class="status-header">';
    echo '<img src="./assets/img/brad.jpg" alt="User Profile Picture">';
    echo '<div class="status-username"><b>Brad Pitt </b>@TylerDurden</div>';
    echo '</div>';
    echo '<div class="status-content">';
    echo '<textarea id="status-text" placeholder="House Announcements..."></textarea>';
    echo '</div>';
    echo '<div class="status-actions">';
    echo '<button id="add-announcement-button" class="add-button" onclick="addStatus()">Post</button>';
    echo '</div>';
    echo '</div>';

    // Status container
    echo '<div id="status-container"></div>';

    // JavaScript to handle adding and removing status elements
    echo '<script>';
    echo 'function addStatus() {';
    echo '    var statusText = document.getElementById("status-text").value;';
    echo '    var statusElement = createStatusElement(statusText);';
    echo '    var statusContainer = document.getElementById("status-container");';
    echo '    statusContainer.insertBefore(statusElement, statusContainer.firstChild);';  // Insert at the beginning
    echo '    document.getElementById("status-text").value = "";';
    echo '}';
    echo 'function removeStatus(element) {';
    echo '    element.parentElement.parentElement.remove();';
    echo '}';
    echo 'function createStatusElement(statusText) {';
    echo '    var statusElement = document.createElement("div");';
    echo '    statusElement.className = "status-post";';
    echo '    statusElement.innerHTML = ';
    echo '    `<div class="status-header">';
    echo '        <img src="./assets/img/brad.jpg" alt="User Profile Picture">';
    echo '        <div class="status-username"><b>Brad Pitt </b>@TylerDurden</div>';
    echo '    </div>';
    echo '    <div class="status-content">';
    echo '    <button class="remove-button" onclick="confirmRemove(this)">Remove</button>';
    echo '        ${statusText}';
    echo '    </div>`;';
    echo '    return statusElement;';
    echo '}';
    echo '</script>';
    echo '<script>';
echo 'function confirmRemove(removeButton) {';
echo '    Swal.fire({';
echo '        title: "Confirm Removal",';
echo '        text: "Are you sure you want to remove this announcement?",';
echo '        icon: "warning",';
echo '        showCancelButton: true,';
echo '        confirmButtonText: "Remove",';
echo '        cancelButtonText: "Cancel",';
echo '    }).then((result) => {';
echo '        if (result.isConfirmed) {';
echo '            removeStatus(removeButton);';
echo '            Swal.fire("Announcement Removed", "", "success");';
echo '        }';
echo '    });';
echo '}';
// ...
echo '</script>';
}
?>

<div id="status-container">
    <!-- Mock Status Post -->
    <div class="status-post">
        <div class="status-header">
        <img src="./assets/img/brad.jpg" alt="User Profile Picture">
        <div class="status-username"><b>Brad Pitt </b>@Adviser</div>
     
        </div>
        <div class="status-content">
              <?php if ($this->session->userdata('type') == 'adviser') { ?>
            <button class="remove-button" onclick="confirmRemove(this)">Remove</button>
        <?php } ?>
            "Get Ready, Team Khayyam! 🚀 Our Next Meeting is Approaching! 🗓️
We're gearing up for an exciting team meeting this Friday at 2 PM. Be prepared to share your progress, exchange ideas, and keep the momentum going. Let's make it a productive and motivating session!"
     
</div>

    </div>
  <!-- Mock Status Post -->
  <div class="status-post">
        <div class="status-header">
        <img src="./assets/img/brad.jpg" alt="User Profile Picture">
        <div class="status-username"><b>Brad Pitt </b>@Adviser</div>
        </div>
        <div class="status-content">
        <?php if ($this->session->userdata('type') == 'adviser') { ?>
            <button class="remove-button" onclick="confirmRemove(this)">Remove</button>
        <?php } ?>
        "Team Khayyam Motivational Quote of the Week: 💪
'Believe in your potential, for it's the driving force behind our team's success. Together, we can conquer any challenge that comes our way. Keep pushing forward! 🌟 #TeamKhayyamMotivation'"
        </div>
</div>
  <!-- Mock Status Post -->
  <div class="status-post">
        <div class="status-header">
        <img src="./assets/img/brad.jpg" alt="User Profile Picture">
        <div class="status-username"><b>Brad Pitt </b>@Adviser</div>
        </div>
        <div class="status-content">
        <?php if ($this->session->userdata('type') == 'adviser') { ?>
            <button class="remove-button" onclick="confirmRemove(this)">Remove</button>
        <?php } ?>
        "Preparations Underway for Team Khayyam's Special Project! 🌠
Exciting news! We're in full swing preparing for a unique project that will showcase our team's skills and creativity. Stay tuned for an upcoming meeting where we'll unveil the details and discuss our action plan."
        </div>
</div>
<div class="status-post">
        <div class="status-header">
        <img src="./assets/img/brad.jpg" alt="User Profile Picture">
   <div class="status-username"><b>Brad Pitt </b>@Adviser</div>
        </div>
        <div class="status-content">
        <?php if ($this->session->userdata('type') == 'adviser') { ?>
            <button class="remove-button" onclick="confirmRemove(this)">Remove</button>
        <?php } ?>
        "Mark Your Calendars, Team Khayyam! 🗓️
Our quarterly team-building event is just around the corner! We're excited to bring everyone together for a fun and motivational day. More details to come, but save the date and get ready to bond with your amazing colleagues! 🎉 #TeamKhayyamUnity"
        </div>
        
    <!-- You can add more mock posts here if needed -->
</div>





                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <table class="table" style="text-align: center; font-size: 10px;">
              <thead style="background-color: #c34242; color: white;">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Officer Name</th>
                  <th scope="col">Position</th> <?php 
                                 if ($this->session->userdata('type')=='adviser'){
                                 ?> <th scope="col" colspan="2">Actions</th> <?php
                                 }?>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Philip Joshua Pecson Cabrales</td>
                  <td>President</td> <?php 
                                 if ($this->session->userdata('type')=='adviser'){
                                 ?> <td>
                    <a class="btn btn-danger" onclick="confirmRemoveOfficer()">Remove</a>
                  </td>
                </tr>
                <script>
                  function confirmRemoveOfficer() {
                    Swal.fire({
                      title: 'Are you sure?',
                      text: 'You are about to remove the officer. This action cannot be undone.',
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#d33',
                      cancelButtonColor: '#3085d6',
                      confirmButtonText: 'Yes, remove officer',
                      cancelButtonText: 'Cancel',
                    }).then((result) => {
                      if (result.isConfirmed) {
                        // Here, you can add the code to perform the removal of the officer.
                        // For example, you can send an AJAX request to the server to delete the officer.
                        // After successful deletion, you can show a success message or perform any other action.
                        console.log('Officer removed!');
                        // Display a success message
                        Swal.fire({
                          title: 'Success',
                          text: 'Officer Removed Successfully',
                          icon: 'success',
                          confirmButtonColor: '#3085d6',
                          confirmButtonText: 'OK',
                        });
                      }
                    });
                  }
                </script> <?php
                              }?> <tr>
                  <td>2</td>
                  <td>Lisandro Sein Chuidian González</td>
                  <td>Vice-President</td> <?php 
                                 if ($this->session->userdata('type')=='adviser'){
                                 ?> <td>
                    <a class="btn btn-danger">Remove</a>
                  </td>
                </tr> <?php
                              }?> <tr>
                  <td>3</td>
                  <td>Elina Brenna Sinclair Pavia</td>
                  <td>Secretary</td> <?php 
                                 if ($this->session->userdata('type')=='adviser'){
                                 ?> <td>
                    <a class="btn btn-danger">Remove</a>
                  </td> <?php
                                 }?>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Ria Karli Canumay Tupas</td>
                  <td>Treasurer</td> <?php 
                                 if ($this->session->userdata('type')=='adviser'){
                                 ?> <td>
                    <a class="btn btn-danger">Remove</a>
                  </td> <?php
                                 }?>
                </tr>
              </tbody>
            </table>
          </div>
          </section>
        </div>
        <div class="d-flex justify-content-center">
          <table class="table" style="text-align: center; font-size: 10px;">
            <thead style="background-color: #c34242; color: white;">
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID No.</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Course</th>
                <th scope="col">Contact No.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>2018-01-0032</td>
                <td>Padate, Mohammad Ryan</td>
                <td>Male</td>
                <td>BS-IT</td>
                <td>0992 209 9414</td>
              </tr>
              <tr>
                <td>2</td>
                <td>2018-01-1242</td>
                <td>Dalupang, Ismael</td>
                <td>Male</td>
                <td>BS-IT</td>
                <td>0293 212 2454</td>
              </tr>
              <tr>
                <td>3</td>
                <td>2018-01-1335</td>
                <td>Malang, Wasef</td>
                <td>Male</td>
                <td>BS-CE</td>
                <td>0942 738 6434</td>
              </tr>
              <tr>
                <td>4</td>
                <td>2018-01-0032</td>
                <td>Pangandaman, Mohammad Amr</td>
                <td>Male</td>
                <td>BS-IT</td>
                <td>0995 288 2009</td>
              </tr>
              <tr>
                <td>5</td>
                <td>2018-01-5432</td>
                <td>Gomez, Maria</td>
                <td>Female</td>
                <td>BS-CS</td>
                <td>0912 345 6789</td>
              </tr>
              <tr>
                <td>6</td>
                <td>2018-01-7654</td>
                <td>Lopez, Juan</td>
                <td>Male</td>
                <td>BS-EE</td>
                <td>0987 654 3210</td>
              </tr>
              <tr>
                <td>7</td>
                <td>2018-01-9876</td>
                <td>Santos, Ana</td>
                <td>Female</td>
                <td>BS-BA</td>
                <td>0930 111 2233</td>
              </tr>
              <tr>
                <td>8</td>
                <td>2018-01-1111</td>
                <td>Rodriguez, Carlos</td>
                <td>Male</td>
                <td>BS-EC</td>
                <td>0911 222 3333</td>
              </tr>
              <tr>
                <td>9</td>
                <td>2018-01-2222</td>
                <td>Lim, Grace</td>
                <td>Female</td>
                <td>BS-IT</td>
                <td>0999 888 7777</td>
              </tr>
              <tr>
                <td>10</td>
                <td>2018-01-3333</td>
                <td>Tan, Luis</td>
                <td>Male</td>
                <td>BS-ME</td>
                <td>0944 555 6666</td>
              </tr>
              <tr>
                <td>11</td>
                <td>2018-01-4444</td>
                <td>Chen, Wei</td>
                <td>Male</td>
                <td>BS-CE</td>
                <td>0922 333 4444</td>
              </tr>
              <tr>
                <td>12</td>
                <td>2018-01-5555</td>
                <td>Liu, Hui</td>
                <td>Female</td>
                <td>BS-EE</td>
                <td>0977 888 9999</td>
              </tr>
              <tr>
                <td>13</td>
                <td>2018-01-6666</td>
                <td>Garcia, Miguel</td>
                <td>Male</td>
                <td>BS-CS</td>
                <td>0988 777 6666</td>
              </tr>
              <tr>
                <td>14</td>
                <td>2018-01-7777</td>
                <td>Smith, Emily</td>
                <td>Female</td>
                <td>BS-BA</td>
                <td>0999 111 3333</td>
              </tr>
            </tbody>
          </table>
        </div>
        </section>
      </div>
    </div>
  </div>
  </div>
  </body>
</html>