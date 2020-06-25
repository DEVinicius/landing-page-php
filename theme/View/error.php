<?php 
    $this->layout("_theme", ["title" => $this->e($title)]);
?>

<?php 
    $this->start("sidebar");
?>
    <div class="redes-sociais">
            <ul>
                <li><a href="" title="instagram"><img src="<?= url("/storage/images/instagram-sketched.svg")?>" alt=""></a></li>
                <li><a href=""><img src="<?= url("/storage/images/facebook.svg")?>" alt=""></a></li>
            </ul>
        </div>
        
        <a href="<?= url()?>" title="logo"><img src="<?= url("/storage/images/mask.png")?>" alt=""></a>
<?php 
    $this->end();
?>

<h1><?= $this->e($title)." ".$this->e($erro)."!";?></h1>