<?php
    $str = file_get_contents('dict.json');
    $json = json_decode($str, true);
    //print_r($json);
    $string=$_POST["string"];
    if ($string)
    {
        echo "<div id=word>";
        echo "<h1>The string \"$string\" is found in the following words:</h1> <br> <hr>";
        echo "</div>";
        foreach($json as $key=>$value)
        {
            if(stristr($key,$string))
               {
                   echo $key.":".$value."<hr>";
               }
        }
    }
    else
    {
        echo "The text field is empty.";
    }
?>
<html>
    <head>
        <style>
            body
            {
                background-color: lightgray;
                font-size: 20px;
            }
            #word
            {
                width 100%;
                height 100px;
                background-color: lawngreen;
                text-align: center;
            }
        </style>
    </head>
    <body>
    </body>
</html>