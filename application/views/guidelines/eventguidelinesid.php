<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Event Guidelines</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
.container {
  margin-top: 30px;
  margin-bottom: 20px;

}
</style>

    </head>  
    <!-- Content -->
<body>
<header class="hero">
   <div class="hero-wrap">
      <p class="intro" id="intro">Event</p>
      <h1 id="headline">Guidelines</h1>
      <a style="color: white;"href="javascript:history.back()">← Go Back</a>
   </div>
</header>
<div class="container">
 
      <hr style=" border: 5px solid black; margin:20px;">
     <h3 class="Articles"> Islamic Event <?php 
        if ($this->session->userdata('type')=='event coordinator'){
        ?>
        <a onclick="showEditEligibilityAndMechanicsModal()"><sup><i class="fa fa-pencil-square-o" style="cursor: pointer; margin-left: 5px;" aria-hidden="true"></i></sup></a>
    </h5>
    <script>
    function showEditEligibilityAndMechanicsModal() {
        Swal.fire({
            title: 'Edit Eligibility and Mechanics',
            html:
                '<textarea id="eligibility" class="swal2-textarea" placeholder="Eligibility criteria"></textarea>' +
                '<textarea id="mechanics" class="swal2-textarea" placeholder="Mechanics"></textarea>',
            showCancelButton: true,
            confirmButtonText: 'Save',
            preConfirm: () => {
                const eligibility = Swal.getPopup().querySelector('#eligibility').value;
                const mechanics = Swal.getPopup().querySelector('#mechanics').value;

                if (!eligibility || !mechanics) {
                    Swal.showValidationMessage('Please fill out both eligibility criteria and mechanics.');
                }

                return { eligibility: eligibility, mechanics: mechanics };
            },
        }).then((result) => {
            if (result.isConfirmed) {
                const eligibility = result.value.eligibility;
                const mechanics = result.value.mechanics;

                // Check if both fields are filled out
                if (eligibility && mechanics) {
                    // Here, you can handle the eligibility and mechanics as needed.
                    // For example, you can store them in variables, send them to the server, etc.
                    console.log('Eligibility criteria:', eligibility);
                    console.log('Mechanics:', mechanics);

                    // Show a success message
                    Swal.fire({
                        title: 'Success',
                        text: 'Eligibility and mechanics have been updated.',
                        icon: 'success'
                    });
                }
            }
        });
    }
</script>

    <?php
    
   }
    
    ?>
   
   </h3>
     <hr style=" border: 5px solid black; margin:20px;">

  
<div class="sections">
<h3 class="Articles">ELIGIBILITY</h3>
<HR></HR>

<p id="edit">1. Lorem ipsum dolor sit amet. Et recusandae perspiciatis et rerum consequatur eos molestias cupiditate quo commodi laudantium. Hic galisum quis non fugit sunt et totam tempora vel ducimus omnis. Non sequi repellat ea itaque libero eos cupiditate dolorum et voluptatem amet est laboriosam autem et iste ullam ut porro dolore.
<p id="edit">2. Lorem ipsum dolor sit amet. Et recusandae perspiciatis et rerum consequatur eos molestias cupiditate quo commodi laudantium. Hic galisum quis non fugit sunt et totam tempora vel ducimus omnis. Non sequi repellat ea itaque libero eos cupiditate dolorum et voluptatem amet est laboriosam autem et iste ullam ut porro dolore.


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
</ul></p>
</div>
</div>
</div>
</div>
</body>
</html>