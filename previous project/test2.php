<?php
/*
class User {
    public $name;
    public $email;
    private $age;
   
   
    
    public function login () {

        echo $this->name.' logged in'.'</br>';
        echo '</br>';
        echo 'my age is '.$this->age.'</br>';
        echo '</br>';
        echo 'my email is '.$this->email.'</br>';
        echo '</br>';
        
       
       
    }

    public function __construct($name,$email,$age){
        $this->name=$name;
        $this->email=$email;
        $this->age=$age;

        
        
    }
    
        
    }

    


$user1 = new user('rabi','rabi@gmail.com',23);


$user1->login();



$user2=new user('ahmad','ahmad@gamil.com',25);


$user2->login();



$documentRoot = $_SERVER['DOCUMENT_ROOT'];


putenv('DB_HOST=LOCALHOST');
putenv('DB_USER=RABI');
$host= getenv('DB_HOST');
$host= getenv('DB_USER');

echo $host;  
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = htmlspecialchars($_POST['title']);
  if (empty($title)) {
    echo "Name is empty";
  } else {
    echo $title;
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>

<body>

  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 
    <div>

      <label for="title">title</label>
      <input type="text" id="title" placeholder="enter text" name="title">
      <br>
      <button type="submit" name="submit">submit</button>
    </div>
    <br>
    <label for="file">upload</label>
    <input type="file" name=file>



  </form>
  
</body>

</html>