<footer>
        <p>Dynamic Footer</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="text/javascript">
        //check jquery is loaded or not
        if (typeof jQuery === 'undefined') {
            console.log('jQuery is not loaded.');
        } else {
            console.log('jQuery is loaded successfully.');
        }

        // $('#myCarousel').carousel({
        //     interval:   4000
        // });
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel)
    </script>
</body>

</html>