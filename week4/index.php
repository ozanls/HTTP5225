<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1>Loops</h1>

    <div class="container">
        <div class="row">

            <div class="col">
                <h1>Header</h1>
                <?php
    function getUsers(){
        $url = 'users.json';
        $data = file_get_contents($url);
        //echo gettype($data);
        return json_decode($data, true);    
    }

    $users = getUsers();
    if (!empty($users)) {
        // foreach($users as $x){
        for ($i = 0; $i < count($users); $i++) {
            echo '<div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">' . $users[$i]['name'] . '</h5>
                        <p class="card-text">' . $users[$i]['email'] . '</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>';
        }
    }

?>
            </div>
        </div>
    </div>



</body>
</html>