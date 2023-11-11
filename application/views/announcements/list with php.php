<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Announcements</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>  
  <body>
  
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-12" style="margin-top: 5%;">
      <div class="card">
        <div class="card-body">
          <div class="announcement-list-container">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <?php /*if ($this->session->userdata('type') == 'admin'): */?>
<!-- <a href="index.php?c=Task&m=add_announcements" class="btn btn-primary">Add Announcement</a> -->
                <?php /*endif; */?>
              </div>
              <hr>
              <div class="announcementlist">
                <ol class="numbers-list" style="counter-reset: li;">
                  <!-- <?php /*foreach ($announcements as $announcement): */?> -->
                  <li>
                    <div class="announcement-row">
                      <div class="announcement-info">
                        <a class="announcement-link" href="index.php?c=Content&m=view_announcement_id"  data-id="<?php /*echo $announcement['id']; */?>">
                        <h5>Contest</h5>
                          <sub><p>07/22/2023</p></sub>
                          <br>
                         
                        </a>
                      </div>
                      <div class="announcement-actions">
                       
                      </div>
                    </div>
                  </li>
                  <!-- <?php /*endforeach; */?> -->
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12" id="announcementContentContainer"></div>
  </div>
</div>
</body>

<!-- <script>
  $(document).ready(function() {
    $('.announcement-link').click(function(e) {
      e.preventDefault(); // Prevent default behavior of anchor element

      var announcementId = $(this).data('id');

      // Redirect to the announcement page with the announcement ID as a parameter
      window.location.href = '/announcement/show/' + announcementId;
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(function(button) {
      button.addEventListener('click', function(event) {
        event.preventDefault();
        const deleteUrl = this.getAttribute('href');

        Swal.fire({
          title: 'Are you sure?',
          text: 'This action cannot be undone.',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Delete',
          cancelButtonText: 'Cancel',
          reverseButtons: true
        }).then(function(result) {
          if (result.isConfirmed) {
            // If the user confirms the deletion, navigate to the delete URL
            window.location.href = deleteUrl;
          }
        });

        return false; // Prevent the default link behavior
      });
    });
  });
</script> -->
