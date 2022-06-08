<HTML>
<head>
<title> Prime Numbers </title>
<h1> Prime Numbers </h1>
</head>
<body>
<?PHP
$n=2;
echo "Prime Numbers from 1 to 50:";
echo "<br>";
while($n<=50){
$d=0;
for($i=1;$i<=$n;$i++)
{
if($n%$i==0)
$d++;
}
if($d==2)
echo $n."<br>";
$n++;
}
?>