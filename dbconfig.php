 <?php 

      try 

      { 

           $con = new PDO('mysql:host=mysql.idhostinger.com;dbname=u927282395_reedb', 'u927282395_nadia', 'pymC*7uBrs~fycI', array(PDO::ATTR_PERSISTENT => true)); 

      } 

      catch(PDOException $e) 

      { 

           echo $e->getMessage(); 

      } 

      include_once 'AuthClass.php'; 

      $user = new Auth($con); 

 ?> 
