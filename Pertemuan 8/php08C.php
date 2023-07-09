<!DOCTYPE html>
<html>

<head>
    <title>PHP 08C</title>
    <meta name="author" content="Damar Septia Nugraha, 222011829@stis.ac.id">
	<meta name="copyright" content="Damar Septia Nugraha">
	<meta name="date" content="Apr. 21, 2022">
</head>

<body>
    <h1>Array Operators and Regular Expressions</h1>
    <?php
    echo "<h2>Exercise 2a</h2>\n";
    $planets = array("earth");
    array_unshift($planets, "mercury", "venus");
    array_push($planets, "mars", "jupiter", "saturn");
    echo "(1) \$planets = [", join(", ", $planets), "]<br>\n";
    $last = array_pop($planets);
    echo "(2) \$planets = [", join(", ", $planets), "]<br>\n";
    $first = array_shift($planets);
    echo "(3) \$planets = [", join(", ", $planets), "]<br>\n";
    echo "(4) \$first = $first, \$last = $last<br>\n";

    echo "<h2>Exercise 2c</h2>\n";
    $spheres = $planets;
    echo "(5) \$spheres = [", join(", ", $spheres), "]<br>\n";
    $planets[1] = "midgard";
    echo "(6) \$planets = [", join(", ", $planets), "]<br>\n";
    echo "(6) \$spheres = [", join(", ", $spheres), "]<br>\n";
    $spheres = &$planets;
    echo "(7) \$spheres = [", join(", ", $spheres), "]<br>\n";
    $planets[0] = "friga";
    echo "(8) \$planets = [", join(", ", $planets), "]<br>\n";
    echo "(8) \$spheres = [", join(", ", $spheres), "]<br>\n";

    echo "<h2>Exercise 2d</h2>\n";
    foreach ($planets as $planet) {
        $remove = array_shift($planets);
        echo "Removed: $remove Remaining: [",join(", ", $planets), "]<br>";
    }

    echo "<h2>Exercise 3</h2>\n";
    $names = ["Dave Shield", "Mr Andy Roxburgh",
        "Dr George Christodoulou", "Dr Ullrich Hustadt",
        "Dr David Jackson"];
    foreach ($names as $name)
        echo "(1) Name: $name<br>\n";
    echo "<br>";
    // Your own code here
    foreach ($names as $name) {
        $name = preg_replace("/^Dr |^Mr /", "", $name);
        $separator = explode(" ", $name);
        $name = strtoupper($separator[1]) . ", " . $separator[0];
        $separator = [];
        array_shift($names);
        array_push($names, $name);
    }
    
    foreach ($names as $name)
        echo "(2) Name: $name<br>\n";
    ?>
</body>

</html>