<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    echo "Hello World TTESD d";
    echo "Hello, world!";  echo "Hello," . " " . "world" . "!";
    echo 5 * 7;
    $myname = "Frodo Baggins";
    $myage = 12;
    echo "My name is" . $myname . "and I am TWAT" . $myage;
    ?>
    <?php     echo "I get printed!";
    // I don't! I'm a comment.
    /* I don’t get printed either    and neither do I */
    ?>

    <?php
    $name = "Simon";
    if ($name == "Edgar") {
    print "I know you!";
    }
    else {
        print "Who are you?";
    }
    ?>
</p>

<p>
    <?php
    echo "Your name  is {$myname } and you are  {$myage} years old"
    ?>
</p>
<p>
    <?php
    if ($myage > 21) {
            print "You are allowed to buy 21 year age restricted things";
    }
    elseif ($myage > 18)  {
        print "You are allowed to buy 18 year age restricted things";
    }
    elseif ($myage > 16)  {
        print "You are allowed to buy 16 year age restricted things";
    }
    elseif ($myage <17 and   $name=="Simon")  {
        print "You are a baby {$myname} ";
    }
    ?>
</p>

<p>
    <?php
    $wantedgood  = "asfd";

    switch ($wantedgood ) {     
        case "mugs":
            echo "You have to be 18 to buy mugs";
            break;     
        case "specs":
            echo "you have  to be 16 to buy specs";
            break;     
        case "sousage rolls":
            echo "you have to be 21 to buy sousage rolls";
            break;     
        default:         
            echo "If you are buying something else, i dont care"; }

    ?>
</p>

<p>
    <?php
    $provisionedActivities = array ("mugs","sousage rolls","specs");
    foreach ($provisionedActivities as $x){
       print "<p>$x </p>" ;
    }

    ?>
</p>



</body>
</html>