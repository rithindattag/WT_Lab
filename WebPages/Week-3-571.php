<HTML>
    <head>
        <title>
            Merge Arrays
        </title>
        <h1>
            Week-3
        </h1>
    </head>
    <body>
        <?PHP
        $a1=array(1,12,3,41,50);
        $a2=array(16,17,8,9,10);
        $num=array_merge($a1,$a2);
        array_multisort($num,SORT_DESC,SORT_NUMERIC);
        $a=count($num);
        for($i=0;$i<$a;$i++)
        echo "[$i] => ".$num[$i]."<br>";
        ?>
    </body>
</HTML>