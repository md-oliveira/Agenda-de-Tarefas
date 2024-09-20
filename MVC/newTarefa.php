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
    <title>Renomear Tarefas</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            color: #2c3e50;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #34495e;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .card {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            transition: box-shadow 0.3s ease;
            margin: 0 auto;
        }

        .card:hover {
            box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.2);
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        input[type="text"],
        input[type="descricao"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="descricao"]:focus {
            border-color: #16a085;
            outline: none;
        }

        input[type="submit"] {
            padding: 12px;
            background-color: #16a085;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #1abc9c;
        }

        a {
            text-decoration: none;
            color: #16a085;
            font-weight: bold;
            margin-top: 20px;
        }

        a:hover {
            color: #1abc9c;
        }
    </style>
</head>
<body>

    <h1>Renomear Tarefas</h1>

    <div class="card">
        <form action="updateTarefa.php" method="POST">
            <input type="text" required placeholder="TÍTULO" name="_titulo">
            <input type="hidden" name="_id" value="<?php echo htmlspecialchars($id); ?>">
            <input type="descricao" required placeholder="DESCRIÇÃO" name="_descricao">
            <input type="submit" value="Salvar">
        </form>
    </div>

</body>
</html>
