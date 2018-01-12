<?php

for($i=0;$i<=6;$i++)
{
for($j=1;$j<=$i;$j++)
{
echo "  *  ";
}
echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";



for($i=0;$i<=5;$i++)
{
for($j=0;$j<=$i;$j++)
{
echo "* ";
}
echo "<br>";
}

for($i=4;$i>=0;$i--)
{
for($j=0;$j<=$i;$j++)
{
echo "* ";
}
echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";


for($a=5; $a>=1; $a--)
{
if($a%2 != 0)
{
for($b=5; $b>=$a; $b--)
{
echo "* ";
}
echo "<br>";
}
}
for($a=2; $a<=5; $a++)
{
 if($a%2 != 0)
{
 for($b=5; $b>=$a; $b--)
{
echo "* ";
}
echo "<br>";
}
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


for ($row = 1; $row <= 5; $row++)
{
    for ($col = 1; $col <= ($row > 3 ? 6 - $row : $row); $col++)
    {
        echo '* ';
    }

     echo "</br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

for($i=5; $i>=1; $i--)
    {
        for($space=1; $space<=5-$i;$space++)
        {
            echo "&nbsp;&nbsp;&nbsp;";
        }

        for($k=0;$k != 2*$i-1;$k++)
        {
            echo "* ";
        }
        echo "</br>";
    }
	
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

	for($i=5; $i>=1; --$i)
    {
        for($space=0; $space < 5-$i; ++$space)
             echo "&nbsp;&nbsp;&nbsp;";;

        for($j=$i; $j <= 2*$i-1; ++$j)
            echo ("* ");

        for($j=0; $j < $i-1; ++$j)
            echo ("* ");

        echo "</br>";
    }
	
	echo "<br>";
echo "<br>";
echo "<br>";

	for($i=0; $i<=5; ++$i)
    {
        for($space=0; $space < 5-$i; ++$space)
             echo "&nbsp;&nbsp;&nbsp;";;

        for($j=$i; $j <= 2*$i-1; ++$j)
            echo ("* ");

        for($j=0; $j < $i-1; ++$j)
            echo ("* ");

        echo "</br>";
    }
	for($i=5; $i>=1; $i--)
    {
        for($space=1; $space<=5-$i;$space++)
        {
            echo "&nbsp;&nbsp;&nbsp;";
        }

        for($k=0;$k != 2*$i-1;$k++)
        {
            echo "* ";
        }
        echo "</br>";
    }
	
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
	
	
	
   $LA = array(1,3,5,7,8);
   $item = 10; $k = 3; $n = 4;
   $j = $n;
   while( $j >= $k) {
       $LA[$j+1] = $LA[$j]; 
       $j = $j - 1;
   }
   $LA[$k] = $item;
	 print_r($LA);
	 
	 echo '<br>';echo '<br>';
	 
	 
	 $LA = array(1,3,5,7,8);
   $item = 10; $k = 3; $n = 5;
   $j;
	$j = $k;	
   while( $j < $n) {
	   
       $LA[$j-1] = $LA[$j]; 
       $j = $j + 1;
   }
   echo '<br>';
	 print_r($LA);
	 
	 echo '<br>';echo '<br>'; 
	 $LA = array(1,3,5,7,8);
   $item = 8; $n = 5;
   $i = 0; $j = 0;
   while( $j < $n){
      if( $LA[$j] == $item ) {
         break;
      }
		
      $j = $j + 1;
   }
   echo $j;
	 print_r($LA);


?>