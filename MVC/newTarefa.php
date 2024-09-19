<?php 
    require_once 'vendor/autoload.php'; 
  
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = htmlspecialchars($_POST['_id']);
    }

    //echo $id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Renomear tarefas</h1>

    <form action="updateTarefa.php" method ="POST">
         <input type="text" required placeholder="TITULO" name ="_titulo">
        <br>
         <input type="hidden" name="_id" value="<?php echo htmlspecialchars($id);?>">
        <br>
         <br>
        <br>
         <input type="descricao" required placeholder ="DESCRICAO" name ="_descricao">
        <br>
         <input type="submit" value="Salvar">
    </form>



</body>
</html>