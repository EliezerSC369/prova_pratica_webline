<?php
    session_start();
?>
<html>
    <form action="insere_automovel.php" method="post">
        <input type=text name="nome"><strong> Nome do veículo</strong><br>
        <input type=text name="placa"><strong> Placa</strong><br>
        <input type=text name="chassi"><strong> Chassi</strong><br>
        <select name="montadora" id="mont">
            <option value="volkswagen">Volkswagen</option>
            <option value="ford">Ford</option>
            <option value="fiat">Fiat </option>
            <option value="chevrolet">Chevrolet</option>
        </select><strong> Montadora</strong><br> </br>
        <input type=submit value="ENVIAR">
    </form>   
</html>

<?php
    $_SESSION['n'] = $_POST['nome'];
    $_SESSION['p'] = $_POST['placa'];
    $_SESSION['c'] = $_POST['chassi'];
    $_SESSION['m'] = $_POST['montadora'];
?>