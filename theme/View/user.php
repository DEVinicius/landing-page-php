<?php 
    $this->layout("_theme", ["title" => $this->e($title)]);
?>

<div id="form">

    <form action="<?= url("user");?>" method="post">
        <div id="input1">
            <label for="name">Nome
                <input type="text" name="name" placeholder="Name">
            </label>
        </div>

        <div id="input2">
            <label for="email">Email
                <input type="email" name="email" placeholder="Email">
            </label>
        </div>

        <div id="input3">
            <label for="cpf">
                <input type="text" name="cpf" placeholder="CPF">
            </label>
        </div>
        
        <div></div>
        
        <div id="get_info">
            <input type="checkbox" name="get_info" value="1">
            <label for="get_info">Receber Informações sobre o site</label>
        </div>


        <div id="get_email">
            <input type="checkbox" name="get_email" value="1">
            <label for="get_email">Receber emails sobre o site</label>
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