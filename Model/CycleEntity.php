<?php

class CycleEntity {
    
    private $cycle_id;
    private $cycle_name;
    
    private function __construct()
    {
        $this->cycle_id=-1;
        $this->cycle_name='';
    }
    
    
    public function getCycle_id() {
        return $this->cycle_id;
    }
    
    public function setCycle_id($param) {
        $this->cycle_id=$param;
    }
    
    public function getCycle_name()
    {
        return $this->cycle_name;
    }
    
    public function setCycle_name($param)
    {
        $this->cycle_name=$param;
    }

    public function LoadCycleById(mysqli $conn,$id)
    {
       $sql="SELECT * FROM `Cycle` WHERE `id`='" . $id ."'";
       $result=$conn->query($sql);
       if($result==true AND $result->num_rows>=1)
       {
           foreach($result as $res)
           {
               $loadCycleById=new CycleEntity;
               $loadCycleById->cycle_id=$res['cycle_id'];
               $loadCycleById->cycle_name=$res['cycle_name'];
               
               $ret=$loadCycleById;
           }
           
       }
       return $ret;
       
    }
    
}
