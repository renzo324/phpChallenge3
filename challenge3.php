<?php 
$Rows = 3;
$Cols = 3;
echo '<table border="1">';
for($i=1;$i<=$Rows;$i++){ echo '<tr>';
  for($j=1;$j<=$Cols;$j++){ echo '<td>' .  '</td>'; }
  echo '</tr>';
}
echo '</table>';
?>
<style type="text/css">
        td{
                height: 100px;
                width: 100px;
        }
        table tr:nth-child(odd) td:nth-child(odd){
                background-color: blue;
}
        table tr:nth-child(odd) td:nth-child(even){
                background-color: red;
}
        table tr:nth-child(even) td:nth-child(even){
                background-color: blue;
}
        table tr:nth-child(even) td:nth-child(odd){
                background-color: red;
}
</style>
<script type="text/javascript">
       
</script>