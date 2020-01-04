<?php
include 'conexao2.php';

$query_events="SELECT * FROM eventos";
$resultado_events=$conn->prepare($query_events);
$resultado_events->execute();

$eventos=[];
while($row_events=$resultado_events->fetch(PDO::FETCH_ASSOC)){
    $id=$row_events['id'];
    $title=$row_events['title'];
    $start=$row_events['start'];
  $end=$row_events['end'];

    $eventos[]=[
        'id'=>$id,
         'title'=>$title,
         'start'=>$start,
          'end'=>$end,
        ];
}

echo json_encode($eventos);
?>