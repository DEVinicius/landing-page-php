<?php 
    $this->layout("_theme", ["title" => $this->e($title)]);
?>

<div id="form">

    <form action="<?= url("user");?>" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="cpf" placeholder="CPF">
        <input type="checkbox" name="get_info" value="1">
        <label for="get_info">Receber Informações sobre o site</label>
        <input type="checkbox" name="get_email" value="1">
        <label for="get_email">Receber emails sobre o site</label>
        
        <input type="submit" value="Enviar">
    </form>
    
    <?php 
        if(!$this->e($message) == null):
            ?>
        <h5><?= $this->e($message); ?></h5>
        <?php    
        endif;
        ?>

</div>