<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Update Announcements</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>  
<header class="hero">
    <div class="hero-wrap">
     <p class="intro" id="intro">Update</p>
         <h1 id="headline">Announcements</h1>
         <a style="color: white;"href="javascript:history.back()">← Go Back</a>


   </div>
    </header>

   <section class="vh-100 gradient-custom" style="overflow:hidden;">

    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body">
          <h3 class="card-title">Update Announcement</h3>
          <hr>
          <form id="addAnnouncementForm" method="POST" action="/announcement/add">
            <div class="form-group1">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" required>
              </div>
              <div class="form-group1">
              <label for="title">For</label>
              <input type="text" class="form-control" id="target" name="target" required>
            </div>
            <div class="form-group1">
            <div class="editor">
              <label for="content">Content</label>
              <textarea class="form-control" id="content" name="content" rows="5" style="margin-bottom: 10px;" required></textarea>

            </div>
</div>
            <?php if (isset($validation)): ?>
            <div class="alert alert-danger" role="alert">
              <?= $validation->listErrors() ?>
            </div>
            <?php endif; ?>
            <div class="text-center" style="margin-top: 10px;">
            <button class="btn btn-primary" type="button" id="submitBtn">Add Announcement</button>
              <a class="btn btn-secondary" href="/announcement/list">Cancel</a>
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>
</section>
</body>
</html>