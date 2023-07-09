<!DOCTYPE html>
<html>
<head>
    <title>PHP 08D</title>
    <meta name="author" content="Damar Septia Nugraha, 222011829@stis.ac.id">
	<meta name="copyright" content="Damar Septia Nugraha">
	<meta name="date" content="Apr. 21, 2022">
    <style>
        table {
            border-collapse: collapse;
            margin: auto;
        }
        table * {
            text-align: center;
            border: 1px solid black;
        }
        table td {
            width: 100px;
        }

        table td:nth-child(2) {
            width: 70%;
        }
    </style>
</head>
<body>
    <h1>Associative Arrays</h1>
    <?php
    $dict1 = array('a' => 1, 'b' => 2);
    $dict2 = $dict1;
    $dict1['b'] = 4;
    echo "\$dict1['b'] = ", $dict1['b'],"<br>\n";
    echo "\$dict2['b'] = ", $dict2['b'],"<br>\n";
    echo "<br>";
    echo "<h2>exercise 4b</h2>";
    foreach($dict1 as $key => $value) {
        echo "\$dict1['$key'] = $value<br>\n";
        echo "'$key' => $value<br>";
    }

    echo "<h2>exercise 4c</h2>";
    $text = 'lorem ipsum elit congue auctor inceptos taciti suscipit tortor auctor integer congue hac nullam hac auctor tellus nullam inceptos nullam integer tellus nullam auctor elit lorem ipsum elit';
    $text = explode(' ', $text);
    $dict3 = [];
    foreach ($text as $txt) {
        $dict3[$txt] = isset($dict3[$txt]) ? $dict3[$txt] + 1 : 1;
    }
    foreach ($dict3 as $key => $value) {
        echo "$key -> $value<br>";
    }
    
    echo "<h2>exercise 4d</h2>";
    arsort($dict3);
    echo "<table>
        <tr>
            <td>Kata</td>
            <td>Jumlah Kemunculan</td>
        </tr>";
        foreach ($dict3 as $key => $value) {
            echo "<tr>
                <td>$key</td>
                <td>$value</td>
            </tr>";
        }
    echo "</table>";
    ?>
</body>
</html>