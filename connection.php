<?php
    class crud{
        public static function connect()
        {
            try{
                $con = new PDO('mysql:localhost=host;dbname=crudsystem2','root','');
                return $con;
            } catch (PDOException $error1){
                echo 'Something went wrong, cannot connect to the database! '.$error1->getMessage();
                
            } catch (Exception $error2){
                echo 'Generic error! '.$error2->getMessage();
                
            }
        }
        public static function selectdata()
        {
            $data=array();
            $p=crud::connect()->prepare('SELECT * FROM crudtable1');
            $p->execute();
            $data=$p->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        public static function delete($id)
        {
            $p=crud::connect()->prepare('DELETE FROM crudtable1 WHERE id=:id');
            $p->bindValue(':id',$id);
            $p->execute(); 
        }
    }
?>