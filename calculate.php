<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h3 class="mt-3">Result</h3>
        <hr>
        <h5><?php
        session_start();

        if (isset($_POST['pay']));
        $pay = $_POST['pay'];

        function shop1($pay)
        {
            $price = ($pay < 250 ? 25 : 20);
            $piece = (int)($pay / $price);
            $remainmoney = $pay - $piece * $price;
            echo "จำนวนเงิน " . $pay . " บาท" . "\n";
            echo "จำนวนสินค้า " . $piece . " ชิ้น" . "\n";
            echo "จำนวนเงินทอน " . $remainmoney . " บาท" . "\n";
        }
        function shop2($pay)
        {
            $price =  30;
            $piece = (int)($pay / $price);
            $remainmoney = $pay - ($piece * $price);
            $piece = $piece + (int)($piece / 3);
            echo "<br>" . "จำนวนเงิน " . $pay . " บาท" . "\n";
            echo "จำนวนสินค้า " . $piece . " ชิ้น" . "\n";
            echo "จำนวนเงินทอน " . $remainmoney . " บาท" . "\n";
        }

        echo shop1($pay);
        echo shop2($pay);
        ?></h5>
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>