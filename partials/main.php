<main>
  <div class="container">
    <div class="row">


      <?php 

    for($i = 0; $i < count($medias); $i++):
    
      $media = $medias[$i];
      ?>
      
      <div class="col-4 card">
        <div class="card-movie">
          <h2 class="title"><?php echo $media ->title; ?></h2>
          <h2 class="language"><?php echo $media -> language; ?></h2>
          <h2 class="vote"><?php echo $media -> vote; ?></h2>
        </div>
      </div>


      <?php endfor; ?>

    </div>
  </div>
</main>