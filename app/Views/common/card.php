    <?php 
        if (!empty($product['pictures'])) {
            $subDetails = json_decode($product['pictures'], true);
        } else {
            $subDetails = [
                0 => 'dummy.jpg',
            ];
        }
    ?>
    <div class="card">
        <div id="itemCarousel<?= $product['id'] ?>" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php for ($i = 0; $i < count($subDetails); $i++): ?>
                    <li data-bs-target="#itemCarousel<?= $product['id'] ?>" data-bs-slide-to="<?= $i ?>"<?= ($i === 0) ? ' class="active"' : '' ?>></li>
                <?php endfor; ?>
            </ol>

            <!-- Images -->
            <div class="carousel-inner">
                <?php foreach ($subDetails as $index => $picture): ?>
                    <div class="carousel-item<?= ($index === 0) ? ' active' : '' ?>">
                        <img src="<?= base_url($picture) ?>" class="card-img-top custom-img" alt="<?= $product['name'] ?>">
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#itemCarousel<?= $product['id'] ?>" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#itemCarousel<?= $product['id'] ?>" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>

            <!-- Card Body -->
            <div class="card-body">
                <h5 class="card-title"><?= $product['name'] ?></h5>
                <p class="card-text"><?= $product['description'] ?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="card-price"><?= $product['sale_price'] ?></span>
                    <a class="btn btn-primary text-start add-to-cart-button" data-product-id="<?= $product['id'] ?>">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
                    