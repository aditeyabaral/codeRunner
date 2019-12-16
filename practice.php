<!DOCTYPE html>
<head>
	<title>Home</title>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
   <link rel="stylesheet" type="text/css" href="css/practice.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
            <a class="navbar-brand" href="index.html">codeRunner</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="practice.php">Practice</a></li>
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="loginpage.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header1">
                        List Of Questions 
                </div>
                <ul class="question-list list-group-flush" id = "questions">
                <script>
                LoadQ = function(id)
                {
                    var x = document.getElementById("selectedquestion");
                    var y = document.getElementById(id).innerText;
                    x.innerText = y;
                } 
                </script>
                <li class="list-group-item" onclick = "LoadQ(id)" id ="1">1. Print prime numbers from 1-10</li>
                <li class="list-group-item" onclick = "LoadQ(id)" id ="2">2. Find sum of array [2,3,4,5]</li>
                <li class="list-group-item" onclick = "LoadQ(id)"  id = "3">3. Find min of array [2,3,4,5]</li>
                <li class="list-group-item" onclick = "LoadQ(id)" id = "4">4. Find max of array [2,3,4,5]</li>
                <li class="list-group-item" onclick = "LoadQ(id)" id = "5">5. Find factorial of 5</li>
                <li class="list-group-item" onclick = "LoadQ(id)" id = "6">6. Find sum of digits of number 123</li>
            </ul>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                
    
                <form action="practice.php" method="post">
                <textarea class="card-header2" id = "selectedquestion" name = "target">
                    Selected Question goes here
            </textarea>
                <textarea name="intel" placeholder="Write your answer here." rows="25" cols="89"></textarea>
                <button id="submit" type="submit">Submit</button>
                </form>
                <?php
          error_reporting(E_ERROR | E_WARNING | E_PARSE);
          $k=$_POST["intel"];
          $file = fopen("demo.py", 'w'); 
          fwrite($file, $k); 
          fclose($file);
          $command = escapeshellcmd('python demo.py');
          $output = shell_exec($command);
          echo "Output : ", $output, "<br>";
          $w=$_POST["target"][0];
          $q=5368;
          $file1=fopen($w.".py","r");
          $r=fread($file1,$q);
          if($k)
          {
          if($output)
          {
              if($r==$output)
               {
                 echo "Result : ", "CORRECT", "<br";
               }
               else{
                 echo "Result : ", "WRONG", "<br";
                 echo "Expected Output : ", $r;
                 //echo $r;
                // //  echo strlen($r);
                 //echo strlen($output);
               }
            
          }
          else{
               echo "error occured";
          }
        }
        fclose($file1);
        
       
     ?>
               
            </div>

        </div>
        <!--<div class="col-sm-3">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        Submissions
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, culpa quisquam. Voluptates molestias quaerat asperiores laborum!
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card-header">
                    
                        Grade Points awarded
                    
                </div>
            </div>

        </div>-->
        <div class="col-sm-3" id="full">
            <img src="img/quote.png" style="width:100%; height:100%" ;>
        </div>
</div>