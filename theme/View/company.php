<?php 
    $this->insert("_theme", ["title" => $this->e($title)]);
?>
    <h1>Company</h1>
    <div id="form">
    <form action="<?= url("company");?>" method="post">
        <input type="text" name="name" placeholder="Nome">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="phone" placeholder="Telefone">
        <input type="text" name="cnpj" placeholder="cnpj (Somente números)">
        <input type="checkbox" name="get_info" value="1">
        <label for="get_info">Receber email sobre o serviço</label>
        <input type="checkbox" name="get_email" value="1">
        <label for="get_email">Receber emails sobre a plataforma</label>

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
