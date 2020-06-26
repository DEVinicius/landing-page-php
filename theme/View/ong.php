<?php 
    $this->layout("_theme", ["title" => $this->e($title)]);
?>

<div id="form">
    <form action="<?= url("ong");?>" method="post">
        <div id="input1">
            <label for="name">Nome</label>
            <input type="text" name="name" placeholder="Nome">
        </div>

        <div id="input2">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email">
        </div>

        <div id="input3">
            <label for="phone">phone</label>
            <input type="text" name="phone" placeholder="Telefone">
        </div>

        <div id="input4">
            <label for="cnpj">cnpj</label>
            <input type="text" name="cnpj" placeholder="cnpj">
        </div>

        <div id="input5">
            <input type="checkbox" name="get_info" value="1">
            <label for="get_info_service">Receber email sobre o serviço</label>
        </div>

        <div id="input6">
            <input type="checkbox" name="get_email" value="1">
            <label for="get_email_platform">Receber emails sobre a plataforma</label>
        </div>

        <input type="submit" value="Enviar" id="send">
    </form>
    <?php 
        if(!$this->e($message) == null):
    ?>
        <h5><?= $this->e($message); ?></h5>
    <?php    
        endif;
    ?>
</div>