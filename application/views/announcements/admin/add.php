<!DOCTYPE html>

<html lang="en">
<head>
    <title>Add Announcements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/cj7pjrm5lefkecad3157otgiu217x2k4hg06klufj26f69ek/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body> 

<header class="hero">
    <div class="hero-wrap">
        <p class="intro" id="intro">Add</p>
        <h1 id="headline">Announcements</h1>
        <a style="color: white;" href="javascript:history.back()">← Go Back</a>
    </div>
</header>

<section class="vh-100 gradient-custom" style="overflow:hidden;">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body">
                    <h3 class="card-title"> </h3>
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
                            <script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
                            <textarea name="editor" id="editor" rows="10"></textarea>
                            <script>
                                CKEDITOR.replace('editor');
                            </script>
                        </div>
                        <?php if (isset($validation)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        <?php endif; ?>
                        <div class="text-center" style="margin-top: 10px;">
                            <button class="btn btn-primary" type="button" id="submitBtn">Add Announcement</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Function to validate the form and display appropriate messages
    document.getElementById('submitBtn').addEventListener('click', function() {
        const title = document.getElementById('title').value;
        const target = document.getElementById('target').value;
        const editorContent = CKEDITOR.instances.editor.getData();

        if (!title || !target || !editorContent) {
            alert('All fields are required to be filled.');
        } else {
            // // Submit the form
            // document.getElementById('addAnnouncementForm').submit();
            // Display a success message and redirect
            Swal.fire({
                title: 'Announcement Added',
                text: 'The Announcement was successfully added.',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                // Redirect after the user clicks OK
                window.location.href = 'http://akic-cup.com/index.php?c=Content&m=view_announcements';
            });
        }
    });
</script>

</body>
</html>
