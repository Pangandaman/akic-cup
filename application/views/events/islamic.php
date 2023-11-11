<!DOCTYPE html>
<html lang="en">
<head>
    <title>Islamic Event</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <header class="hero">
        <div class="hero-wrap">
            <p class="intro" id="intro">Islamic</p>
            <h1 id="headline">Events</h1>
            <a style="color: white;" href="javascript:history.back()">← Go Back</a>
        </div>
    </header>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white" style="border-radius: 3px;">
                        <?php
                        if ($this->session->userdata('type') == 'event coordinator') {
                            ?>
                            <h4 class="mb-0">
                                <a class="btn btn-primary" style="float: right; margin: 1%;" href="index.php?c=Task&m=add_activity">Add Activity</a>
                            <?php
                        }
                        ?>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Activity ID</th>
                                        <th scope="col">Activity Name</th>
                                        <th scope="col" class="wider-description">Activity Description</th>
                                        <th scope="col">Coordinator</th>
                                        <th scope="col" title="Participants per">Participants</th>
                                        <th scope="col" colspan="4">Actions</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>11234</td>
                                        <td>Quran Reading</td>
                                        <td>the Holy Quran Competition for students to get acquainted with the rules and essence of recitation with Tajweed of the Quran.</td>
                                        <td>Mansour Balindong</td>
                                        <td>1</td>
                                        <td><a class="icon-button" onclick="showActivityGuideline()" title="View Activity Guideline"><i class="fas fa-book"></i></a></td>
                                        <td><a class="icon-button" onclick="showParticipants()" title="View Participants"><i class="fas fa-users"></i> </a></td>
                                        <?php
if ($this->session->userdata('type') == 'adviser') {
    ?>
    <td>
        <a class="icon-button-add" href="index.php?c=Task&m=update_participants" title="Add Participants"><i class="fas fa-user-plus"></i>
</a></td>
    </td>
    </tr>
    <?php
} else if ($this->session->userdata('type') == 'management') {
    ?>
    <td>
        <a class="btn btn-success" onclick="UpdateCoordinator()">Update Coordinator</a>
    </td>
    </tr>
    <?php
} else if ($this->session->userdata('type') == 'event coordinator') {
    ?>
 <td>
                <a class="icon-button" href="index.php?c=Task&m=update_activity" onclick="UpdateActivity()" title="Update Actvity">
                    <i class="fas fa-edit"></i> 
                </a>
            </td>
            <td>
                <a class="icon-button-remove" onclick="RemoveActivity()" title="Remove Actvity">
                    <i class="fas fa-trash"></i>
            </td>
    </tr>
    <?php
}
?>


                                    </tr>

                                    <tr>
                                        <td>65321</td>
                                        <td>Arabic Spelling Bee</td>
                                        <td>A spelling bee competition in which contestants are asked to spell a broad selection of words from the selected Juzh of Quran, usually with a varying degree of difficulty.</td>
                                        <td>Jehanime Macasawang</td>
                                        <td>2</td>
                                        <td><a class="icon-button" onclick="showActivityGuideline()" title="View Activity Guideline"><i class="fas fa-book"></i></a></td>
                                        <td><a class="icon-button" onclick="showParticipants()" title="View Participants"><i class="fas fa-users"></i> </a></td>
                                        <?php
if ($this->session->userdata('type') == 'adviser') {
    ?>
         <td>
        <a class="icon-button-add" href="index.php?c=Task&m=update_participants" title="Add Participants"><i class="fas fa-user-plus"></i>
</a></td>
    </tr>
    <?php
} else if ($this->session->userdata('type') == 'management') {
    ?>
    <td>
        <a class="btn btn-success" onclick="UpdateCoordinator()">Update Coordinator</a>
    </td>
    </tr>
    <?php
} else if ($this->session->userdata('type') == 'event coordinator') {
    ?>
   <td>
                <a class="icon-button" href="index.php?c=Task&m=update_activity" onclick="UpdateActivity()" title="Update Actvity">
                    <i class="fas fa-edit"></i> 
                </a>
            </td>
            <td>
                <a class="icon-button-remove" onclick="RemoveActivity()" title="Remove Actvity">
                    <i class="fas fa-trash"></i>
            </td>
    </tr>
    <?php
}
?>
</tr>

<tr>
                                        <td>75352</td>
                                        <td>Islamic Quiz Show</td>
                                        <td> See how well you know the facts about one of the largest religions in the world, about fasting in Ramadan, The Pillars of Islam, The Hajj (pilgrimage to Mecca) and much more!</td>
                                        <td>Salma Saiben</td>
                                        <td>5</td>
                                        <td><a class="icon-button" onclick="showActivityGuideline()" title="View Activity Guideline"><i class="fas fa-book"></i></a></td>
                                        <td><a class="icon-button" onclick="showParticipants()" title="View Participants"><i class="fas fa-users"></i> </a></td>
                                        <?php
if ($this->session->userdata('type') == 'adviser') {
    ?>
         <td>
        <a class="icon-button-add" href="index.php?c=Task&m=update_participants" title="Add Participants"><i class="fas fa-user-plus"></i>
</a></td>
    </td>
    </tr>
    <?php
} else if ($this->session->userdata('type') == 'management') {
    ?>
    <td>
        <a class="btn btn-success" onclick="UpdateCoordinator()">Update Coordinator</a>
    </td>
    </tr>
    <?php
} else if ($this->session->userdata('type') == 'event coordinator') {
    ?>
    <td>
                <a class="icon-button" href="index.php?c=Task&m=update_activity" onclick="UpdateActivity()" title="Update Actvity">
                    <i class="fas fa-edit"></i> 
                </a>
            </td>
            <td>
                <a class="icon-button-remove" onclick="RemoveActivity()" title="Remove Actvity">
                    <i class="fas fa-trash"></i>
            </td>
    </tr>
    <?php
}
?>
</tr>

                                      </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script for displaying the Swal alert with the team members as a list -->
    <script>
    function showParticipants() {
        Swal.fire({
            title: 'Participant List',
            html: `
                <div class="participant-list-popup">
                    <div class="team-box">
                        <p class="team-title">Al-Khayyam</p>
                        <ul>
                            <li>Crisóstomo Yusup</li>
                            <li>Lorccán Yair</li>
                            <li>Miško Ingulf</li>
                            <li>Trinidad Lupe</li>
                            <li>Goodwin Bernabé</li>
                            <li>Garey Logan</li>
                            <li>Lorn Melvin</li>
                            <li>Rajender Estevo</li>
                        </ul>
                    </div>

                 

                    <div class="team-box">
                        <p class="team-title">Al-Razi</p>
                        <ul>
                            <li>María Reyes</li>
                            <li>Lupe Trinidad</li>
                            <li>José Odalis</li>
                            <li>Kason Derby</li>
                            <li>Trinidad Lupe</li>
                            <li>Goodwin Bernabé</li>
                            <li>Garey Logan</li>
                            <li>Lorn Melvin</li>
                        </ul>
                    </div>

                    <div class="team-box">
                        <p class="team-title">Al-Burzjani</p>
                        <ul>
                            <li>Crisóstomo Yusup</li>
                            <li>Lorccán Yair</li>
                            <li>Miško Ingulf</li>
                            <li>Trinidad Lupe</li>
                            <li>Goodwin Bernabé</li>
                            <li>Garey Logan</li>
                            <li>Lorn Melvin</li>
                            <li>Rajender Estevo</li>
                        </ul>
                    </div>

                 

                    <div class="team-box">
                        <p class="team-title">Al-Haytham</p>
                        <ul>
                            <li>María Reyes</li>
                            <li>Lupe Trinidad</li>
                            <li>José Odalis</li>
                            <li>Kason Derby</li>
                            <li>Trinidad Lupe</li>
                            <li>Goodwin Bernabé</li>
                            <li>Garey Logan</li>
                            <li>Lorn Melvin</li>
                        </ul>
                    </div>
            `,
            showConfirmButton: false,
            customClass: {
                popup: 'participant-list-popup'
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
                html: content,
                width: '70%', // You can adjust the width as needed
                confirmButtonText: 'Close',
                showCloseButton: true,
            });
        }
    </script>
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
                 
                    <script>
  function RemoveActivity() {
    Swal.fire({
      title: 'Confirm Removal',
      text: 'Are you sure you want to remove this activity?',
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
</body>
</html>
