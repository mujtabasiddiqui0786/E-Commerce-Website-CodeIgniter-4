   <?php print_r($products);?>
    <div class="container padding-to-down">
        <div class="row">
        <aside class="col-md-3 filter-color">
            <h2>Filters</h2>
            <div class="filter-section">
                <h3>Category</h3>
                <ul>
                    <li><input type="checkbox" id="category1"><label for="category1">Category 1</label></li>
                    <li><input type="checkbox" id="category2"><label for="category2">Category 2</label></li>
                    <li><input type="checkbox" id="category3"><label for="category3">Category 3</label></li>
                    <!-- Add more category options -->
                </ul>
            </div>
            <div class="filter-section">
                <h3>Price</h3>
                <input type="range" id="price-range" min="0" max="100" value="0">
                <span id="price-label">$0</span>
            </div>
            <div class="filter-section">
                <h3>Quantity</h3>
                <input type="number" id="quantity-input" min="0" value="0">
            </div>
            <div class="filter-section">
                <h3>Date Range</h3>
                <div class="input-group">
                    <input type="text" class="form-control" id="date-range-picker" placeholder="Select date range">
                    <button class="btn btn-secondary" type="button" data-bs-toggle="datepicker">
                        <i class="bi bi-calendar"></i>
                    </button>
                </div>
            </div>
            <!-- Add more filter sections as needed -->
        </aside>
            <main class="col-md-9">
                <h1>Marketplace</h1>
                <div class="row padding-to-up">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= base_url('images/products/product-1.jpg') ?>" class="card-img-top custom-img" alt="Item 1">
                            <div class="card-body">
                                <h5 class="card-title">Item 1</h5>
                                <p class="card-text">Description of Item 1</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="card-price">$10</span>
                                    <a href="#" class="btn btn-primary text-start">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= base_url('images/products/product-2.jpeg') ?>" class="card-img-top custom-img" alt="Item 2">
                            <div class="card-body">
                                <h5 class="card-title">Item 2</h5>
                                <p class="card-text">Description of Item 2</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="card-price">$15</span>
                                    <a href="#" class="btn btn-primary text-start">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= base_url('images/products/product-3.jpeg') ?>" class="card-img-top custom-img" alt="Item 3">
                            <div class="card-body">
                                <h5 class="card-title">Item 3</h5>
                                <p class="card-text">Description of Item 3</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="card-price">$128</span>
                                    <a href="#" class="btn btn-primary text-start">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more item cards -->
                </div>

                <div class="row padding-to-up">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= base_url('images/products/product-1.jpg') ?>" class="card-img-top custom-img" alt="Item 4">
                            <div class="card-body">
                                <h5 class="card-title">Item 4</h5>
                                <p class="card-text">Description of Item 4</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="card-price">$14</span>
                                    <a href="#" class="btn btn-primary text-start">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= base_url('images/products/product-2.jpeg') ?>" class="card-img-top custom-img" alt="Item 5">
                            <div class="card-body">
                                <h5 class="card-title">Item 5</h5>
                                <p class="card-text">Description of Item 5</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="card-price">$20</span>
                                    <a href="#" class="btn btn-primary text-start">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= base_url('images/products/product-3.jpeg') ?>" class="card-img-top custom-img" alt="Item 6">
                            <div class="card-body">
                                <h5 class="card-title">Item 6</h5>
                                <p class="card-text">Description of Item 6</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="card-price">$15</span>
                                    <a href="#" class="btn btn-primary text-start">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more item cards -->
                </div>
            </main>
        </div>
    </div>
