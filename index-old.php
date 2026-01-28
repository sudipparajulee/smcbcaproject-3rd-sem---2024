<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-blue-600 text-white px-20 py-2">
        <h2 class="font-bold text-xl">LOGO</h2>
    </nav>
    <?php 
        $a = 2;
        $b = 3;
        $sum = $a + $b;
        echo "The sum is " . $sum;
        echo "The sum is $sum";
        echo 'The sum is $sum';
        function sum($a, $b) {
            return $a + $b;
        }
        echo sum(4, 5);
        //array of fruits
        $fruits = ['apple','banana','orange'];
        echo "<br>";
        for($i=0; $i<count($fruits);$i++)
        {
            echo $fruits[$i];
            echo "<br>";
        }
        echo "From foreach <br>";
        foreach($fruits as $fruit)
        {
            echo $fruit;
            echo "<br>";
        }
    ?>
</body>
</html>