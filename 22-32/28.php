<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label>Enter Something Here :</label><br>
        <textarea rows="5" columns="20" name="userinput"></textarea><br><br>
        <input type="submit"></input>
    </form>    

    <?php
        $filename  = "sample.txt";

        if($_SERVER['REQUEST_METHOD'] =="POST" && isset($_POST['userinput'])){
            $input = $_POST['userinput'];

            if(!empty($input)) {
                $file = fopen($filename,'a');
                fwrite($file, $input . "\n ");
                fclose($file);

                echo "Successfully Written ....";
            }
            else{
                echo "Please Enter Something....";
            }
        }

        if (file_exists($filename)) {
            $readFile = fopen($filename, 'r');
            $content = fread($readFile, filesize($filename));
            fclose($readFile);

            echo "<h3>File Contents:</h3>";
            echo "<pre><b>" . htmlspecialchars($content) . "</b></pre>";
        }

    
    ?>


</body>
</html>