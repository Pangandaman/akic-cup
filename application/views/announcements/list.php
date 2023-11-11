<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Announcement List</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>

.announcement-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.announcement-info {
  flex-grow: 1; /* Allow the announcement info to grow and take available space */
}

.delete-button {
  margin-left: 10px; /* Adjust the margin as needed to separate the button from the announcement info */
}

  </style>
  
  
    </head>  

  
  
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-12" style="margin-top: 5%;">
      <div class="card">
        <div class="card-body">
          <div class="announcement-list-container">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3">
        <?php   if ($this->session->userdata('type')=='admin' || $this->session->userdata('type')=='management'){
?>
<h4 class="mb-0" ><a class="btn btn-primary" href="index.php?c=Task&m=add_announcement">Add Announcement</a><?php
}?>
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
        <?php if ($this->session->userdata('type') == 'admin' || $this->session->userdata('type') == 'management') { ?>
    <div class="announcement-actions">
        <button class="btn btn-danger" onclick="confirmDelete()">Remove</button>
    </div>
    <script>
    function confirmDelete() {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You are about to remove this announcement. This action cannot be undone.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                // If the user confirms, perform the deletion action here
                // You can use AJAX or any other method to delete the announcement
                // After successful deletion, you may want to refresh the page or update the UI accordingly
                Swal.fire('Removed!', 'The announcement has been removed.', 'success');
            }
        });
    }
</script>

<?php } 
?>

 

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
