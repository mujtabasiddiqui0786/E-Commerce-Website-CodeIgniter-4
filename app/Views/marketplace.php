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
                <?php foreach (array_chunk($products, 3) as $chunk): ?>
                    <div class="row padding-to-up">
                        <?php foreach ($chunk as $product): ?>
                            <div class="col-md-4">
                                <?= view('common/card', ['product' => $product]) ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </main>
        </div>
    </div>
