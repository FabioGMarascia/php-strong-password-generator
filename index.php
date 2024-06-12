<?php

if (isset($_GET["passwordLength"])) {

    $passwordLength = $_GET["passwordLength"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP STRONG PW-GEN</title>
</head>

<body>
    <div class="row justify-content-center mt-5">
        <div class="col-5 px-0 text-center">

            <h1 class="text-warning display-4 fw-bold text-center">FORM</h1>

            <form action="" method="GET">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <h2>Password Length ?</h2>

                        <input name="passwordLength" class="input-group h-50">

                    </div>

                </div>

                <button type="submit" class="btn bg-warning fw-bold mt-4">SUBMIT</button>
            </form>


        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-5 px-0 text-center">

            <h1 class="text-warning display-4 fw-bold text-center">GENERATED PASSWORD</h1>

            <div class="row justify-content-center">
                <div class="col-12">

                    <?php

                    if (isset($_GET["passwordLength"])) {
                        // // METHOD N.1 FOR X

                        // $passwordBox = "";
                        // for ($i = 0; $i < $passwordLength; $i++) {
                        //     $passwordBox .= "X";
                        // }
                        // echo $passwordBox;


                        // // METHOD N.2 FOR X

                        // echo str_repeat("X", $passwordLength);



                        // // METHOD N.1 FOR PASSWORD

                        // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&';
                        // $randomPassword = '';

                        // for ($i = 0; $i < $passwordLength; $i++) {
                        //     $index = rand(0, strlen($characters) - 1);
                        //     $randomPassword .= $characters[$index];
                        // }

                        // echo $randomPassword;


                        // METHOD N.2 FOR PASSWORD WITH FUNCTION

                        function getPassword($length)
                        {
                            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&';
                            $randomPassword = '';

                            for ($i = 0; $i <  $length; $i++) {
                                $index = rand(0, strlen($characters) - 1);
                                $randomPassword .= $characters[$index];
                            }

                            return $randomPassword;
                        }

                        echo getPassword($passwordLength);
                    }

                    ?>



                </div>
            </div>
        </div>
    </div>

</body>

</html>