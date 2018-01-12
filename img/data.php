<?php 
$dates = array("2017/12/11","2012/06/07","2015/05/26","2012/05/27","2016/06/08");
echo date("Y/m/d ",max(array_map('strtotime',$dates)));
?>
<input type="number" (keypress)="checkIfNumber($event)"/>