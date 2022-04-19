<html>
  <header>
    <title>Test</title> 
  </header>
  <body>
    <div> Saeed </div>
    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" >
      <input type="text" id="txt" name="txt" />
      <input type="submit" value="Click me" name="submit"  />
    </form>
  </body>
</html>

<?php


 
 if ( isset($_POST["txt"]) && $_POST["txt"] != "" )
 {
 
 //'' or 1=1 #
   $pdo = new PDO("mysql:host=mysql-db;dbname=MYSQL_DATABASE","MYSQL_USER" , "MYSQL_PASSWORD",
   [
     PDO::ATTR_EMULATE_PREPARES => false 
    ]);
    echo "Attr: ";
   echo $pdo->setAttribute(  PDO::ATTR_AUTOCOMMIT , false);
   echo "</br>";
   $firstName =  $_POST["txt"];
 
   try
   {
    $pdo->prepare("HOW ARE YOU");
   } catch(PDOException $exp)
   {
    echo $exp->getCode();
    echo "</br>";
    echo "<pre>";
    print_r($exp->getLine() , false) ;
    echo "</pre>";
    echo "</br>";
 
    $exp->getMessage();
   }
  
   /*$stmt = $pdo->query("SELECT * FROM authors where first_name = '$firstName' ");
   $users = $stmt->fetchAll();
   foreach ($users as $user) {
 
     echo $user["first_name"] . ' '.$user["last_name"] ;
     echo "</br>";
    
    }*/
    


    /*$sql = "INSERT INTO authors (first_name ,last_name) VALUE( :FistName , :LastName) ";
    $stmt = $pdo->prepare( $sql);
    $stmt->execute([ ":FistName" => "Lina" , ":LastName" => "Asiry"]);
    echo  $pdo->lastInsertId();*/

    /*$sql = "ALTER TABLE authors  Modify  ID INT AUTO_INCREMENT";
  
    $stmt = $pdo->prepare( $sql);
    $stmt->execute();*/
    echo "</br>";
   // 
     echo "</br>";


     $sql = "SELECT * FROM authors ";

     $stmt = $pdo->prepare($sql);
     //$stmt->bindParam(":firstName" , $firstName , PDO::PARAM_STR,20);
     //$stmt->execute([":firstName" => $firstName]);
     $stmt->execute();
     var_dump($stmt)  ;
     echo "</br>";
     $users = $stmt->fetchAll();
     echo $stmt->columnCount();
     echo "</br>";
     foreach ($users as $user) 
     {
       echo $user["first_name"] . ' '.$user["last_name"] ;
       echo "</br>";
     }
   
    /*while ( ($user = $stmt->fetch()) !== false)
    {
      echo "</br>";
      echo $user["first_name"] . ' '.$user["last_name"] ;
      echo "</br>";
    }*/
     
 }
/*if ( isset($_POST["txt"]) && $_POST["txt"] != "" )
{

  //';insert into authors (first_name, middle_name, last_name) VALUES ('dd','dd','dd')"
  
  $firstName =  $_POST["txt"];
  //echo ("SELECT * FROM authors where author_id = $firstName");
  //$pdo->exec("insert into authors (first_name, middle_name, last_name) VALUES ('ff','ff','ff')");
  //echo "SELECT * FROM authors where first_name = '$firstName'";
  $str = "SELECT * FROM authors where first_name = '$firstName' and last_name = 'dd'";
  echo $str;
  $stmt = $pdo->query($str);
  //$stmt = $pdo->exec( $str );
// 1' and first_name = 'mohamad
  //echo "STMT:";
  echo "</br>";
  var_dump ($stmt);
  echo "</br>";
  $users = $stmt->fetchAll();
  foreach ($users as $user) {

    echo $user["author_id"] . ' '.$user["first_name"] ;
    echo "</br>";
   
   }

}*/
//var_dump($_SERVER);
//var_dump($_GET);
/*class Person
{
  private string $first_name;

  private string $last_name = "yaser";

function __construct(string $first_name)
{
  
  $this->first_name = $first_name;
}
}

function generate(int $max = 10) 
{
  for ($i=0; $i < $max ; $i++) { 
   yield $i ;
  }
 
}*/
/*$gen = generate();
echo $gen->current();
$gen->next();
echo $gen->current();

foreach ($gen as $element) {
  var_dump($element);
}*/
/*echo "</br>";
$gen->next();
var_dump($gen->current()) ;
echo "</br>";
$gen->next();
var_dump($gen->current()) ;
echo "</br>";*/
/*try{
  $pdo = new PDO("mysql:host=mysql-db;dbname=MYSQL_DATABASE","MYSQL_USER" , "MYSQL_PASSWORD");
}
catch(PDOException $exp)
{
  echo $exp->getMessage();
}


function getP() : stdClass
{
  $p = new stdClass();
  return $p;
}*/


 //echo $jj->hhhhhh;
//$stmt = $pdo->query("INSERT INTO authors (first_name, middle_name, last_name) VALUES ('Mohamad','Saeed','Alasiry')");
//$stmt = $pdo->query("UPDATE  authors SET first_name = 'ahmad' WHERE middle_name = 'Saeed'");
//$stmt = $pdo->query("DELETE FROM authors where first_name = 'ahmad'");
//$stmt = $pdo->query("SELECT * from authors");


//$stmt = $pdo->query("INSERT INTO authors (first_name, middle_name, last_name) VALUES ('Mohamad','Saeed','Alasiry')");
//$stmt = $pdo->query("SELECT * from authors");

//$stmt = $pdo->prepare("SELECT * from authors where first_name = :name");
///$stmt->execute(["name" => "Mohamad"]);
//echo "<pre>";
//var_dump($stmt->fetchObject("Person" , ["fff"]));
//var_dump($stmt->fetchAll());
//echo "</pre>";
//echo "</br>";
//echo "-----";


/*echo "<pre>";
var_dump($stmt->fetchObject("Person" , ["Saeed"]));
echo "</pre>";
echo "</br>";
echo "-----";
echo "</br>";
echo "-----";

echo "<pre>";
$stmt->setFetchMode(PDO::FETCH_CLASS , "Person" , ["Saeed"]);
var_dump($stmt->fetch());
echo "</pre>";
echo "</br>";
echo "-----";*/

//var_dump($stmt->fetchAll());
//$ss = $stmt->fetchAll();
//$ss = $stmt->fetchColumn(1);
//var_dump($ss);
//print_r()
//$ss = $stmt->fetchColumn(1);
//var_dump($ss);
//$ss->ddd = "maher";
//echo $ss->author_id;
//$ss = $stmt->fetchObject("Saeed");






/*$stmt = $pdo->query("SELECT * FROM users");
$user = $stmt->fetch();
print_r($user);
echo "saeed";*/
//$conn = new mysqli("localhost", "root", "MYSQL_ROOT_PASSWORD", "auth");
//php -r "new PDO('mysql:host=db:9906;port=9906;dbname=auth','root','123456');"
?>

