<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Brackets</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>  
    <!-- Content -->
    <body>
  <!-- Start Content Page -->
  <div id="loadingView">
    <div class="spinner"></div>
    <p>Loading</p>
  </div>

  <header class="hero">
    <div class="hero-wrap">
      <p class="intro" id="intro">Round-Robin</p>
      <h1 id="headline">Table Tennis</h1>
      <a style="color: white;" href="javascript:history.back()">← Go Back</a>
    </div>
  </header>

  <div style="overflow-x:auto;">
    <div class="container py-5 h-100">
<iframe id="externalIframe" src="https://challonge.com/vioo06sh/module" width="100%" height="500" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
  <script>
 // Wait for the iframe to be loaded
document.getElementById('externalIframe').onload = function() {
  // Hide the loading view and show the iframe
  document.getElementById('loadingView').style.display = 'none';
  document.getElementById('externalIframe').style.display = 'block';
};
</script>


</div>
</div>
</section>
</body>
