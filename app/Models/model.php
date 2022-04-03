<?php 
namespace coding\app\models;
use coding\app\system\AppSystem;
class Model{
    public static  $tblName;

    function save():bool{
    
        $values=array();
        $columns=array();
        //get_object_
        foreach(get_object_vars($this) as $key=> $property){
            //echo $property;
            if($property!=self::$tblName)
            {
                $values[]=is_string($property)?"'".$property."'":$property;
                $columns[]=$key;}

        }
        $values=implode(",",$values);
        $columns=implode(",",$columns);
        $sql_query="insert into ".self::$tblName." (".$columns." ) values (".$values.")";

   //echo $sql_query;

        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        if($stmt->execute())
        return true;
        return false;
       // return true;
     //echo $sql_query;
    }

    public static function getAll($tblName):array{
        $sql_query="select * from ".$tblName."";
        // echo '<pre>';
        // print_r( $sql_query);
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function unActivate(){
        $id = $_POST['id'];
        $is_active = $_POST['is_active'];
        if($is_active==0)$is_active=1;
        else $is_active = 0;
        $category = new Category();
        $category->update(array("is_active"),array($is_active), "id= $id");
        header("location:/categories"); 
    }

    public function update($columns , $values , $condition){
        $finalQuery= "";
        if(count($columns)==count($values)){
            $finalQuery = "UPDATE ".self::$tblName."SET";
            for($i=0; $i<count($values);$i++){
                $column = $columns[$i];
                $value = $values[$i];
                if($i == count($values)-1) $pair = "$column=\"$value\"";
                else $pair = "$column = $value ,";
                $finalQuery.=$pair;
            }
            $finalQuery.="WHERE".$condition;
        }
        $stmt = AppSystem::$appSystem->database->pdo->prepare($finalQuery);
        $stmt->execute();
    
    }
}
?>