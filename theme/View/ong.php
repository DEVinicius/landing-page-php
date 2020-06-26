<?php 
    $this->layout("_theme", ["title" => $this->e($title)]);
?>

<div id="form">
    <form action="<?= url("ong");?>" method="post">
        <div id="input1">
            <label for="name">Nome    
                <input type="text" name="name" placeholder="Nome">
            </label>
        </div>

        <div id="input2">
            <label for="email">Email
                <input type="email" name="email" placeholder="Email">
            </label>
        </div>

        <div id="input3">
            <label for="phone">phone
                <input type="text" name="phone" placeholder="Telefone">
            </label>
        </div>

        <div id="input4">
            <label for="cnpj">cnpj
                <input type="text" name="cnpj" placeholder="cnpj">
            </label>
        </div>

        <div id="get_info">
            <input type="checkbox" name="get_info" value="1">
            <label for="get_info_service">Receber email sobre o serviço</label>
        </div>

        <div id="get_email">
            <input type="checkbox" name="get_email" value="1">
            <label for="get_email">Receber emails sobre a plataforma</label>
        </div>

        <input type="submit" value="Enviar" id="send">

        <?php 
            if(!$this->e($message) == null):
        ?>
            <div id="erro">
                <h4>* <?= $this->e($message); ?></h4s>
            </div>
        <?php    
            endif;
        ?>
    </form>
</div>