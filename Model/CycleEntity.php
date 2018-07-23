<?php

class CycleEntity {
    
    //Cycle entity ID - INT autoincrement Primary Key
    private $cycle_id;
    //Cycle Name - VARCHAR(45) NOT NULL
    private $cycle_name;
    
    
    private function __construct()
        {
            $this->cycle_id=-1;
            $this->cycle_name='';
        }
    
    
    //Cycle Id Getter
    public function getCycle_id() 
        {
            return $this->cycle_id;
        }
    
    //Cycle Id setter
    public function setCycle_id($param) 
        {
            $this->cycle_id=$param;
        }
    
    //Cycle name getter
    public function getCycle_name()
        {
            return $this->cycle_name;
        }
    
    //Cycle Name setter
    public function setCycle_name($param)
        {
            $this->cycle_name=$param;
        }

    // Load object with single entity with specific id    
    public function LoadCycleById(mysqli $conn,$id)
        {
            $sql="SELECT * FROM `Cycle` WHERE `Cycle_Id`='" . $id ."'";
            $result=$conn->query($sql);
            
            if($result==true)
            {
                foreach($result as $res)
                    {
                        $loadCycleById=new CycleEntity;
                        $loadCycleById->cycle_id=$res['Cycle_Id'];
                        $loadCycleById->cycle_name=$res['Cycle_name'];               
                        $ret=$loadCycleById;
                        return $ret;
                    }      
            }    
             
        }
    
        
    // Load array with all cycle entity rows    
    public function Load_All_Cycles($conn)
        {
            $sql="SELECT * FROM `Cycle`";
            $result=$conn->query($sql);
    
            if($result==true)
                {
                    foreach($result as $res)
                        {
                            $Load_All_Cycles=new CycleEntity();
                            $Load_All_Cycles->cycle_id=$res['Cycle_id'];
                            $Load_All_Cycles->cycle_name=$res['Cycle_name'];          
                            $return[]=$Load_All_Cycles;
                        }
            
            return $return;
            
                }        
        }
    
}
