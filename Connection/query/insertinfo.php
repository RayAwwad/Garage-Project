<?php
    include("../connection_Sql.php");
    $info=
array(							 

array("type"=>7,"image"=>"dummy/engine/1.jpeg",
        ),
array("type"=>7,"image"=>"dummy/engine/2.jpeg",
        ),
array("type"=>7,"image"=>"dummy/engine/3.jpeg",
        ),
array("type"=>7,"image"=>"dummy/engine/4.jpeg",
        ),
array("type"=>7,"image"=>"dummy/engine/5.jpeg",
        ),
array("type"=>7,"image"=>"dummy/engine/6.jpeg",
        ),
array("type"=>7,"image"=>"dummy/engine/7.jpeg",
        ),
array("type"=>7,"image"=>"dummy/engine/8.jpeg",
        ),
array("type"=>7,"image"=>"dummy/engine/9.jpeg",
        ),
array("type"=>7,"image"=>"dummy/engine/10.jpeg",
        ),
array("type"=>7,"image"=>"dummy/engine/11.jpeg",
        ),
array("type"=>7,"image"=>"dummy/engine/12.jpeg",
        ),
array("type"=>7,"image"=>"dummy/engine/13.jpeg",
        ),
array("type"=>7,"image"=>"dummy/engine/14.jpeg",
        ),
array("type"=>4,"image"=>"dummy/wheels/1.jpeg",
        ),
array("type"=>4,"image"=>"dummy/wheels/2.jpeg",
        ),
array("type"=>4,"image"=>"dummy/wheels/3.jpeg",
        ),
array("type"=>4,"image"=>"dummy/wheels/4.jpeg",
        ),
array("type"=>4,"image"=>"dummy/wheels/5.jpeg",
        ),
array("type"=>4,"image"=>"dummy/wheels/6.jpeg",
        ),
array("type"=>6,"image"=>"dummy/oil/1.jpeg",
        ),
array("type"=>6,"image"=>"dummy/oil/2.jpeg",
        ),
array("type"=>6,"image"=>"dummy/oil/3.jpeg",
        ),
array("type"=>4,"image"=>"dummy/oil/3.jpeg",
        ),
);
    $query=$connection->prepare("INSERT INTO `car_detail`( `Id_Type`, `imageLink`) VALUES (:typeinfo , :img)");

    
    for($index=0;$index<count($info);$index++){
        $query->bindParam(':typeinfo',$info[$index]["type"]);
        $query->bindParam(':img',$info[$index]["image"]);
        $query->execute();
    }
?>