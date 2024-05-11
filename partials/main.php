<main>
  <div class="container">
    <div class="row">


      <?php 

    // for($i = 0; $i < count($medias); $i++):
    
    //   $media = $medias[$i];
      ?>

      <div v-for="media in medias" class="col-4 card">
        <div class="card-movie">
          <h2 class="title">{{ media.title }}</h2>
          <h2 class="language">{{ media.language }}</h2>
          <h2 class="vote">{{ media.vote }}</h2>
          <h2 v-if="typeof media.profits !== undefined" class="profits">{{ media.profits }}</h2>
          <h2 v-if="typeof media.length !== undefined" class="length">{{ media.length }}</h2>
        </div>
      </div>


      <?php //endfor; ?>

    </div>
  </div>
</main>