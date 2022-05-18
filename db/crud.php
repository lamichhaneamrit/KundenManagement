<?php 


class crud{
    private $db;

        function __construct($conn){
            $this->db =$conn;
        
        
        }

    
//    FUNCTION FOR CREATING MEMBERS
public function createMember ($name1, $name2, $street, $plz,$ort){
            try{
                $sql = "INSERT INTO `kunde` (`name1`, `name2`, `street`, `plz`, `ort`) VALUES (:name1, :name2, :street, :plz, :ort)";
                
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':name1', $name1);
                $stmt->bindparam(':name2', $name2);
                $stmt->bindparam(':street',$street);
                $stmt->bindparam(':plz',   $plz);
                $stmt->bindparam(':ort',   $ort);


                $stmt->execute();
                return true;
            

            }   catch(PDOException $e){
                echo $e->getMessage();
                return false;

        }
   
    }
    
  
// Functions for getting members from db
public function getMembers(){
        try {
            $sql ="SELECT * FROM `kunde` ";
            $result=$this->db->query($sql);
            return $result;
        }catch (PDOException $e) {
             echo $e->getMessage();
            return false;
    }
    }

   

public function getMemberDetails($id){
        try{
            $sql ="SELECT * FROM `kunde`   WHERE  `kunde_id` =:id ";
            $stmt =$this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result=$stmt->fetch();
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
    }
    }

    
public function updateMemberDetails($id,$name1, $name2, $street, $plz,$ort){
        try{ 
                $sql = "UPDATE `kunde` SET `kunde_id`= :id ,`name1`=:name1,`name2`=:name2,`street`=:street,`plz`=:plz,`ort`=:ort WHERE `kunde_id` = :id ";
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':name1',$name1);
                $stmt->bindparam(':name2',$name2);
                $stmt->bindparam(':street',$street);
                $stmt->bindparam(':plz',$plz);
                $stmt->bindparam(':ort',$ort);

                // execute statement
                $stmt->execute();
                return true;
                }catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
                }
    

    }
   
        public function deleteMembers($id){
            try{
            $sql= "delete from kunde  WHERE kunde_id = :id ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            return true;
            }  catch ( PDOException $e) {
                    echo $e->getMessage();
                    return false;

            }
        }
   
    

        // public function searchMembers($filter){
        //     try{
        //     $filter ="%f%";
        //     $sql = "SELECT * FROM kunde WHERE name1 LIKE ? or plz LIKE ? ";
        //     $stmt =$this->db->prepare($sql);
        //     $stmt->execute($filter);
        //     return true;

        //     }
        //     catch ( PDOException $e) {
        //             echo $e->getMessage();
        //             return false;

        //     }
        // }

    
   
    }

                ?>

</tr>