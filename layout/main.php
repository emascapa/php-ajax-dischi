<main>
    <div class="container py-4">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5 g-3">
            <?php foreach ($disks as $disk) { ?>
                <div class="col">
                    <div class="spotify_card text-center p-3 rounded-3">
                        <div class="img_div mb-2">
                            <img src="<?= $disk['poster'] ?>" alt="<?= $disk['title'] ?>" class="img-fluid" />
                        </div>
                        <h6 class="album_title text-uppercase"><?= $disk['title'] ?></h6>
                        <span class="d-block"><?= $disk['author'] ?></span>
                        <span class="d-block"><?= $disk['year'] ?></span>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!--       <div
        v-else-if="!loading && filteredSpotifyItems.length == 0"
        class="else_div d-flex justify-content-center align-items-center"
      >
        <span>No result match</span>
      </div>
      <div
        v-else
        class="else_div d-flex justify-content-center align-items-center"
      >
        <span>Loading ...</span>
      </div> -->
    </div>
</main>