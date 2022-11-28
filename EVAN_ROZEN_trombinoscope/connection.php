<?php require_once('./inc/head.php') ?>
<body class="login-body">
    <?php require_once('./inc/navbar.php') ?>
    <div class="">
        <div class="">
        <?php    
        
    ?>
            <form action="./controllers/form-controller.php" method="post">



                <div>

                    <label>Nom</label><br>
                    <input type="text" name="username">
                </div>
                <div>
                    <label>Mot de passe</label><br>
                    <input type="password" name="password">
                </div>
                
                <input type="submit" class="btn">
            </form>
            <div>
                <a href="./controllers/deconnection.php">Déconnecter</a>
            </div>
            
        </div>
    </div>
    
</body>

<?php require_once('./inc/footer.php') ?>
</html>