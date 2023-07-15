
   <!-- banner segment -->
    <section>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="<?= base_url('images/banner-3.jpg') ?>" alt="Banner"class="d-block w-100 banner">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="<?= base_url('images/banner-1.jpg') ?>" class="d-block w-100 banner" alt="Banner">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="<?= base_url('images/banner-2.jpg') ?>" class="d-block w-100 banner" alt="Banner">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>
        
    <!-- product segment -->
    <section class="products">
      <?php foreach (array_chunk($products, 4) as $chunk): ?>
          <div class="row padding-to-up">
              <?php foreach ($chunk as $product): ?>
                  <div class="col-md-3">
                      <?= view('common/card', ['product' => $product]) ?>
                  </div>
              <?php endforeach; ?>
          </div>
      <?php endforeach; ?>
    </section>

    <section class="categories">
      <h2>Shop by Categories</h2>

      <div class="row">
        <?php foreach ($categories as $category): ?>
        <div class="col-md-4">
          <div class="card rounded">
            <img src="<?= base_url($category['image_url']) ?>" class="card-img-top" alt="<?= $category['name'] ?>">
            <div class="card-body">
              <h5 class="card-title"><?= $category['name'] ?></h5>
              <p class="card-text"><?= $category['description'] ?></p>
              <a href="/marketplace" class="btn btn-primary">Explore</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    </section>