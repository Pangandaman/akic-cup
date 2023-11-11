<!DOCTYPE html>
<html lang="en">
   <head>
      <title>General Guidelines</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
   

  </head>  
    <!-- Content -->
<body>
<header class="hero">
   <div class="hero-wrap">
      <p class="intro" id="intro">General</p>
      <h1 id="headline">Guidelines</h1>
      <a style="color: white;"href="javascript:history.back()">← Go Back</a>
   </div>
</header>
</div>

<div class="container">
<hr style="border: 5px solid black; margin: 20px;">

<div style="display: flex; justify-content: space-between; align-items: center;">

    <h3>ㅤ</h3>
    <?php if ($this->session->userdata('type') == 'event coordinator') { ?>
      <a class="btn btn-primary" onclick="showPrompt()" style="margin: 1%;">Add Guideline</a>
<?php } ?>
</div>
<hr style="border: 5px solid black; margin: 20px;">


   
      <br>
      <h2 class="Articles">RATIONALE<?php  if ($this->session->userdata('type')=='event coordinator'){
        ?>
        <a onclick="showPrompt()"><sup><i class="fa fa-pencil-square-o" style="cursor: pointer; margin-left: 5px;" aria-hidden="true"></i></sup></a>
    </h5>
    <script>
    function showPrompt() {
        Swal.fire({
            title: 'General Guideline',
            html:
                '<input id="title" style="width: 100%;" placeholder="Title" required></input>' +
                '<textarea id="content" class="swal2-textarea" style="width: 80%;" placeholder="Content" required></textarea>',
            showCancelButton: true,
            confirmButtonText: 'Ok',
            preConfirm: () => {
                const title = Swal.getPopup().querySelector('#title').value;
                const content = Swal.getPopup().querySelector('#content').value;

                if (!title || !content) {
                    Swal.showValidationMessage('Please fill out both Title and Content.');
                    return false;
                } else {
                    // Here, you can handle the title and content as needed.
                    // For example, you can store them in variables, send them to the server, etc.
                    console.log('Title:', title);
                    console.log('Content:', content);

                    // Close the input form
                    Swal.close();

                    // Show a success message with the "OK" button
                    Swal.fire({
                        title: 'Success',
                        text: 'Title and Content have been updated.',
                        icon: 'success',
                        showConfirmButton: true // Add the "OK" button
                    });
                }
            },
        });
    }
</script>

    <?php
    
   }
    
    ?>
    <script>
    function showUpdatePrompt() {
        Swal.fire({
            title: 'General Guideline',
            html:
                '<input id="title" style="width: 100%;" placeholder="Title" required></input>' +
                '<textarea id="content" class="swal2-textarea" style="width: 80%;" placeholder="Content" required></textarea>',
            showCancelButton: true,
            confirmButtonText: 'Ok',
            preConfirm: () => {
                const title = Swal.getPopup().querySelector('#title').value;
                const content = Swal.getPopup().querySelector('#content').value;

                if (!title || !content) {
                    Swal.showValidationMessage('Please fill out both Title and Content.');
                    return false;
                } else {
                    // Here, you can handle the title and content as needed.
                    // For example, you can store them in variables, send them to the server, etc.
                    console.log('Title:', title);
                    console.log('Content:', content);

                    // Close the input form
                    Swal.close();

                    // Show a success message without the OK button
                    Swal.fire({
                        title: 'Success',
                        text: 'Title and Content have been updated.',
                        icon: 'success',
                        showConfirmButton: false
                    });
                }
            },
        });
    }
</script>

      </h2>
      <div class="sections">
         <p id="edit">Lorem ipsum dolor sit amet. Et recusandae perspiciatis et rerum consequatur eos molestias cupiditate quo commodi laudantium. Hic galisum quis non fugit sunt et totam tempora vel ducimus omnis. Non sequi repellat ea itaque libero eos cupiditate dolorum et voluptatem amet est laboriosam autem et iste ullam ut porro dolore.</p>
      </div>
      <hr style=" border: 5px solid black; margin-bottom: 60px;">
      <div id="container">
         <h2 class="Articles">PURPOSE
         </h2>
         <div class="sections">
            <p id="edit">Lorem ipsum dolor sit amet. Et recusandae perspiciatis et rerum consequatur eos molestias cupiditate quo commodi laudantium. Hic galisum quis non fugit sunt et totam tempora vel ducimus omnis. Non sequi repellat ea itaque libero eos cupiditate dolorum et voluptatem amet est laboriosam autem et iste ullam ut porro dolore.</p>
         </div>
      </div>
      <hr style=" border: 5px solid black; margin-bottom: 60px;">
      <div id="container">
         <h2 class="Articles">OBJECTIVES
         </h2>
         <div class="sections">
            <p id="edit">Lorem ipsum dolor sit amet. Et recusandae perspiciatis et rerum consequatur eos molestias cupiditate quo commodi laudantium. Hic galisum quis non fugit sunt et totam tempora vel ducimus omnis. Non sequi repellat ea itaque libero eos cupiditate dolorum et voluptatem amet est laboriosam autem et iste ullam ut porro dolore.</p>
         </div>
      </div>
      <div id="container">
         <h2 class="Articles">TIME<br>MANAGEMENT
         </h2>
         <div class="sections">
            <p id="edit">Lorem ipsum dolor sit amet. Et recusandae perspiciatis et rerum consequatur eos molestias cupiditate quo commodi laudantium. Hic galisum quis non fugit sunt et totam tempora vel ducimus omnis. Non sequi repellat ea itaque libero eos cupiditate dolorum et voluptatem amet est laboriosam autem et iste ullam ut porro dolore.</p>
         </div>
      </div>
      <!-- Start Banner Hero -->
      <div id="container">
         <h2 class="Articles">GENERAL GUIDELINES IN THE CONDUCT OF AL-KHWARIZMI CUP
         </h2>
         <div class="sections">
            <p id="edit">
               1. Lorem ipsum dolor sit amet. Et recusandae perspiciatis et rerum consequatur eos molestias cupiditate quo commodi laudantium. Hic galisum quis non fugit sunt et totam tempora vel ducimus omnis. Non sequi repellat ea itaque libero eos cupiditate dolorum et voluptatem amet est laboriosam autem et iste ullam ut porro dolore.
               <br>
               2. Lorem ipsum dolor sit amet. Et recusandae perspiciatis et rerum consequatur eos molestias cupiditate quo commodi laudantium. Hic galisum quis non fugit sunt et totam tempora vel ducimus omnis. Non sequi repellat ea itaque libero eos cupiditate dolorum et voluptatem amet est laboriosam autem et iste ullam ut porro dolore.
            </p>
            <div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
