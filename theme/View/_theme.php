<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title) ?></title>
    <link rel="stylesheet" href="<?= url("/theme/css/_menu.css") ?>">
</head>
<body>
    <nav id="main_nav">
        <?php 
            if($this->section("sidebar")):
                echo $this->section("sidebar");
            else:
        ?>
        <ul>
            <div class="logo">
                <li> <a title="home" href="<?= url()?>"><img src="<?= url("/storage/images/mask.png")?>" alt=""></a></li>
            </div>
            <div class="menu">  
                <li><a title="company" href="<?= url("company")?>">Empresa</a></li>
                <li><a title="user" href="<?= url("user")?>">Usuario</a></li> 
                <li><a title="ong" href="<?= url("ong")?>">Ong</a></li>   
            </div>
        </ul>
                
        <?php   
            endif;
        ?>
    </nav>

    <main class="main_content">
        <?= $this->section("content");?>
    </main>

    <footer class="main_footer">
        <?= SITE?> | Todos os direitos Reservados 
    </footer>
</body>
</html>