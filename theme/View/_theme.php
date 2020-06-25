<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title) ?></title>
    <link rel="stylesheet" href="<?= url("/theme/css/_menu.css") ?>">
</head>
<body>
    <header>
        <?php 
            if($this->section("sidebar")):
                echo $this->section("sidebar");
            else:
        ?>

        <div class="redes-sociais">
            <ul>
                <li>Instagram</li>
                <li>Facebook</li>
            </ul>
        </div>
        
        <a href="<?= url()?>" title="logo"><img src="<?= url("/storage/images/mask.png")?>" alt=""></a>
        
        <nav class="main_nav">
            <ul>
                <li><a href="<?= url("/user")?>" title="user">Usuario</a></li>
                <li><a href="<?= url("/company")?>" title="company">Company</a></li>
                <li><a href="<?= url("/ong")?>" title="ong">Ong</a></li>
            </ul>
        </nav>

        <?php   
            endif;
        ?>
    </header>

    <main class="main_content">
        <?= $this->section("content");?>
    </main>

    <footer class="main_footer">
        <?= SITE?> | Todos os direitos Reservados 
    </footer>
</body>
</html>