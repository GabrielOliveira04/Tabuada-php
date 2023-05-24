<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>TABUADA | G.O</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            background: linear-gradient(to right, dodgerblue,purple);
            color:#fff;
            display: flex;
            flex-direction:column;
            align-items: center;

        }
        .box_form{
            background-color: rgba(0, 0, 0, 0.5);
            width: 30%;
            border-radius: 15px;
            padding: 20px;

        }
        #num{
            padding:5px;
            border-radius: 5px;
            border: none;
            outline: none;
            width: 50%;
            margin-bottom: 20px;


        }
        form{
            padding: 1em;
        }
        input[type="submit"]{
            padding: 5px 15px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            background-color: dodgerblue;
            color: #fff;
            font-weight: bolder;

        }
    </style>
</head>
<body>
<h1>TABUADA - Gabriel Oliveira</h1>
<div class="box_form">
    <form action="index.php">
        <div>
            <label for="">Número:</label>
            <input type="number" name="num" id="num" value="<?php echo (isset($_GET['num'])) ? $_GET['num']:'' ?>  "placeholder="Digite um número para a Tabuada">
        </div>
        <input type="submit"  value="Enviar" >
    </form>
    <div>
        <?php
        if(!empty($_GET['num']))
        {
            echo "<hr>";
            $number = $_GET['num'];
            for($i=1; $i <= 10; $i++)
            {
                echo " $i * $number = " .($i * $number);
                echo " <br><br> ";

            }
        }

        ?>
    </div>
</div>
</body>
</html>



