<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>
<body>
    <?php
        /* ACTIVITY #1 */
        /*$hour = date('H');

        if ($hour < 2 || $hour > 21){
            $output = "Good Night";
        }
        
        elseif($hour < 12){
            $output = "Good Morning";
        }

        elseif($hour < 16){
            $output = "Good Afternoon";
        }

        elseif($hour < 21){
            $output = "Good Evening";
        }
        
        else{
            $output = "Error";
        };

        echo $output;*/

         /* ACTIVITY #2 */
        $magicNumber = rand(1,100);

        if($magicNumber%3 == 0 && $magicNumber%5 == 0){
            echo "$magicNumber is FizzBuzz!";
        }

        else if($magicNumber%3 == 0 && $magicNumber%5 != 0){
            echo "$magicNumber is Fizzy";
        }

        else if($magicNumber%3 != 0 && $magicNumber%5 == 0){
            echo "$magicNumber is Buzzy";
        }

        else{
            echo "$magicNumber is the magic number!";
        }

    ?>
</body>
</html>