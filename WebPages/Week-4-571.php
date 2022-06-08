<HTML>
    <head>
        <title> Files </title>
    </head>
    <body>
        <?PHP
        $myFile = "project1.txt";
        $myFileLink = fopen($myFile,'r');
        $myFileContents = fread($myFileLink,filesize($myFile));
        fclose($myFileLink);
        echo "Contents of File-1 is: "." <br>";
        echo $myFileContents;

        $myFile2="project2.txt";
        $myFileLink2 = fopen($myFile2,'wt') or die("Cant open file");
        $newContents = $myFileContents;
        fwrite($myFileLink2,$newContents);
        fclose($myFileLink2);
        ?>
    </body>
</HTML>