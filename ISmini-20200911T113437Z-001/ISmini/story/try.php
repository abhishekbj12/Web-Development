<?php
$f=fopen("story/fool's parable.txt","r");
#$str=fscanf($f,"%d");
$str=file_get_contents("story/fool's parable.txt");
$arr=explode("\n",$str);
#foreach ($arr as $i) {echo "".$i;}
echo join("\n",$arr);

/*while(!feof($f))
  echo fgetc($f);
*/
#echo fread($f,filesize("./story/fool's parable.txt"));
#fprintf($f,"%d",$str);

fclose($f);
?>
