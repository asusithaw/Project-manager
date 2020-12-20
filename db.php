<?php>
function Createdb(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="projectmanager";
    //create connection
    $conect = mysqli_connect($servername,$username,$password);
    
    //check connection
    if(!$conect){
    die("connection failed:".mysqli_connect_error());
         }
         
   //create database
         $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
}
         if(mysqli_query($conect, $sql)){
           $conect = mysqli_connect($servername,$username,$password,$dbname);  
           $sql ="CREATE TABLE IF NOT EXISTS projects(
                  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  project_name VARCHAR(30) NOT NULL,
                  project_owner VARCHAR(20),
                  project_days INT(11)
                  );
                  ";
           if(mysqli_query($conect,$sql)){
               return $conect;
           }else{
                 echo "cannot create table";  
               }
           
         }else{
        
         echo "Error while creating database". mysqli_error($conect);}
         
}

?>