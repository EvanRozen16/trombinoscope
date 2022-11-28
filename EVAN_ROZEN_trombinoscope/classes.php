<?php require_once('./inc/head.php') ?>

<?php require_once('./functions/function.php') ?>

<body>
    <?php require_once('./inc/navbar.php') ?>
    <div>
        <p>Classes</p>

        <?php 
            $classes_tab = get_tableau ('classes');
            foreach ($classes_tab as $classe_tab)

            {
                echo '<a href="">
                <div>
                    <p>'.$classe_tab['name'].'</p>
                    </div>
                </div>
            </a>';
            }
?>


        
        
            
    </div>
</body>

<?php require_once('./inc/footer.php') ?>




</html>