<?php if (isset($_GET['page'])) : ?>

    <?php if ($_GET['page'] === 'home') : ?>
        <!--JavaScript at end of body for optimized loading-->
        <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

    <?php else : ?>
        <!--JavaScript at end of body for optimized loading-->
        <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>

    <?php endif ?>

<?php else : ?>
    <!--JavaScript at end of body for optimized loading-->
    <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

<?php endif ?>
</script>
</body>

</html>