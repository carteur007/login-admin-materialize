<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l12 m12 s12">
                <h2 class="white-text">Administration </h2>
                <p class="grey-text text-lighten-4">C'est encore à l'étape de developpement</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2023 Copyright SFB-ADMIN
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>

<?php if (isset($_GET['page'])) : ?>

    <?php if ($_GET['page'] === 'admin') : ?>
        <!--JavaScript at end of body for optimized loading-->
        <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script src="js/chart.js"></script>

    <?php else : ?>
        <!--JavaScript at end of body for optimized loading-->
        <script src="../../js/code.jquery.com_jquery-3.7.1.min.js"></script>
        <script type="text/javascript" src="../../js/materialize.min.js"></script>
        <script src="../js/chart.js"></script>

    <?php endif ?>

<?php else : ?>
    <!--JavaScript at end of body for optimized loading-->
    <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script src="js/chart.js"></script>

<?php endif ?>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script>
    $(function() {
        $(".sidenav").sidenav();
    });
    // Hide Sections
    $('.section').hide();
    setTimeout(function() {
        $(document).ready(function() {
            // Show sections
            $('.section').fadeIn();

            // Hide preloader
            $('.loader').fadeOut();

            // Init side nav
            $('.button-collaps').sidenav();

            // Init Modal
            $('.modal').modal();

            // Init Select
            $('select').formSelect();

            // Counter
            $('.count').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 1000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

            // Comments - Approve & Deny
            $('.approve').click(function(e) {
                Materialize.toast('Comment Approved', 3000);
                e.preventDefault();
            });
            $('.deny').click(function(e) {
                Materialize.toast('Comment Denied', 3000);
                e.preventDefault();
            });

            // Quick Todos
            $('#todo-form').submit(function(e) {
                // console.log($('#todo').val());
                const output =
                    `<li class="collection-item">
              <div>${$('#todo').val()} 
                <a href="#" class="secondary-content delete">
                 <i class="material-icons">close</i>
                </a>
              </div>
            </li>`;
                $('.todos').append(output);

                Materialize.toast('Todo Added', 3000);
                e.preventDefault();
            });

            // Delete Todos
            $('.todos').on('click', '.delete', function(e) {
                $(this).parent().parent().remove();

                Materialize.toast('Todo Removed', 3000);
                e.preventDefault();
            });

            CKEDITOR.replace('body');
        });
    }, 1000);
</script>
</body>

</html>