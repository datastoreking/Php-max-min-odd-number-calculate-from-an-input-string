<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $max = $min = "";
        $even = 0;
        $odd = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input_str = $_POST["input-integer"];
            $input_array = explode(",", $input_str);
            $input_int_array = array_map('intval', $input_array);
            $max = max($input_int_array);
            $min = min($input_int_array);
            foreach ( $input_int_array as $number ) {
                $number % 2 == 0 ? $even++ : $odd++;
            }
            
        }
    ?>
    <div class="container">
        <h4>Calculate the max, min, number of odd numbers</h4>
        <div class="input">
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <input type="text" name="input-integer" id="input-integer-form" placeholder="Enter the integers by dividing comma">
                <input type="submit" name="submit" id="calculate-btn" value="Calculate">
            </form>
        </div>
        <div class="display">
            <span>Max:</span><span id="max"> <?php echo $max; ?></span>
            <span>Min:</span><span id="min"> <?php echo $min; ?></span>
            <span>Number of odd numbers:</span><span id="odd"> <?php echo $odd; ?></span>
        </div>
    </div>
</body>

</html>