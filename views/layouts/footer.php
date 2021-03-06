<!-- Footer section -->
<section class="footer-section">
    <div class="container">
        <div class="footer-logo text-center">
            <a href="/" class="logo_white">LAshop</a>
        </div>
    </div>
</section>
<!-- Footer section end -->

<!--====== Javascripts & Jquery ======-->
<script src="../template/js/jquery-3.2.1.min.js"></script>
<script src="../template/js/bootstrap.min.js"></script>
<script src="../template/js/jquery.slicknav.min.js"></script>
<script src="../template/js/owl.carousel.min.js"></script>
<script src="../template/js/jquery.nicescroll.min.js"></script>
<script src="../template/js/jquery.zoom.min.js"></script>
<script src="../template/js/jquery-ui.min.js"></script>
<script src="../template/js/main.js"></script>
<!--<script src="../template/js/index.js"></script>-->
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
</body>
</html>