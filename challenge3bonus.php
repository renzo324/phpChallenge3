<?php 
$Rows = 10;
$Cols = 10;
echo '<table border="1">';
for($i=1;$i<=$Rows;$i++){ echo '<tr>';
  for($j=1;$j<=$Cols;$j++){ echo '<td>' .  '</td>'; }
  echo '</tr>';
}
echo '</table>';
?>
<button>C</button>
<button>B</button>
<button>A</button>
<style type="text/css">
        td{
                height: 50px;
                width: 50px;
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