<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
        if(!$connect){
            echo 'Error Code: ' . mysqli_connect_errno();
            echo 'Error Message: ' . mysqli_connect_error();
            exit;
        }

        $query = 'SELECT `Name`, `Hex` FROM colors';
        $results = mysqli_query($connect, $query);

        if (!$results){
            echo 'Error Message: ' . mysqli_error($connect);
        } else {
            echo 'Total records found: ' . mysqli_num_rows($results) . '<br> <hr>';
            
            $resultsArray = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $totalColors = count($resultsArray);
            $rand = rand(0, $totalColors);
            $randomColor = $resultsArray[$rand];
            echo 'Your random color is: ';
            echo $resultsArray[$rand]['Name'] . '<div style="height: 50px; width: 50px; border: solid 1px #000000;border-radius:32px; background: ' . $resultsArray[$rand]['Hex'] . '"></div> <br> <hr>';

            foreach($results as $x){
                echo $x['Name']. '<div style="height: 50px; width: 50px; border: solid 1px #000000;border-radius:32px; background: ' . $x['Hex'] . '"></div>';
            }
         }
    ?>

</body>
</html>