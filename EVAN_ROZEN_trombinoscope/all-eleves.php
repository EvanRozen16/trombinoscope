<?php require_once('./inc/head.php') ?>



<body>
    <?php require_once('./inc/navbar.php') ?>
    



<div class="">
<?php require_once('./functions/function.php') ?>
        <h1>Classes</h1>
        
        

        <?php 
            $tab_eleves = get_tableau ('students');
            foreach ($tab_eleves as $tab_eleve)

            {
                echo '<a href="./classe.php?classe='.$tab_eleve['id'].'" class="no-a-style">
                <div>
                '.$tab_eleve['nom'].''.$tab_eleve['id'].'
                </div>
            </a>';
            }
        ?>


        
        
            
    </div>

</body>

<?php require_once('./inc/footer.php') ?>
</html>