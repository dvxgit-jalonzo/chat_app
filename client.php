
<?php
//    include "php/autoload.php";

    $host = "localhost";
    $port = 55555;


    if (isset($_POST['send'])){
//        $message = $_REQUEST['message'];
//        $id = 1;
//
//        $array = array($id, $message);

        /** @var TYPE_NAME $msg */
//        $msg->Create($array);

        $sock = socket_create(AF_INET, SOCK_STREAM,0);
        socket_connect($sock, $host, $port);
        socket_write($sock, $message, strlen($message));

        $reply = socket_read($sock, 1024);
        $reply = trim($reply);
        $reply = "Server : \t".$reply;
    }

    $messages = array();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<br><br><br><br><br>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h5>Message</h5>
            <form action="" method="POST">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <label for="">Enter Message</label>
                                <input class="form-control" type="text" name="message">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" name="send">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-6">
            <h5>Reply</h5>
            <textarea name="" class="form-control" id="" cols="30" rows="10"><?=isset($reply)?$reply:''?></textarea>
        </div>

    </div>
</div>

</body>
</html>