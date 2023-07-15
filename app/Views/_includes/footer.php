<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>About Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac tellus eget mi condimentum consectetur.</p>
            </div>
            <div class="col-md-4">
                <h4>Contact Info</h4>
                <ul class="contact-info">
                    <li><i class="fas fa-map-marker-alt"></i> 123 Street, City, Country</li>
                    <li><i class="fas fa-phone"></i> +1 234 567 890</li>
                    <li><i class="fas fa-envelope"></i> info@example.com</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Follow Us</h4>
                <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.all.min.js" integrity="sha256-eYINpiFTsm812/hOBxFCGaSZzPvHBZZFYSe5ZWLgYzo=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        // Add click event listener to "Add to Cart" button
        $('.add-to-cart-button').on('click', function(event) {
            event.preventDefault();

            var productId = $(this).data('product-id');

            console.log('clicked');

            // Send AJAX request to add product to cart
            $.ajax({
                url: '/cart/add',
                type: 'POST',
                data: { product_id: productId },
                success: function(response) {
                    // Update cart status/notification on the card
                    var cartCount = response.cart_count;

                    // Find the notification element within the card
                    var notificationElement = $(this).closest('.card').find('.cart-notification');

                    // Update the notification text or counter
                    notificationElement.text(cartCount);

                    if (response.success) {
                        // Show a success notification
                        Swal.fire('Success!', response.message, 'success');
                    } else {
                        // Show an error notification
                        Swal.fire('Error!', response.message, 'error');
                    }
                }
            });
        });
    });
    </script>
</body>

</html>