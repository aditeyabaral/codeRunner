<html>
    <head>
        <style>
    button {
    background: white;
    padding: 10px 16px;
    width: 650px;;
    font-weight: 600;
    text-transform:  uppercase;
    font-size: 14px;
    color: #222;
    line-height: 16px;
    letter-spacing: 0.5px;
    border-radius: 2px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1), 0 3px 6px rgba(0,0,0,0.1);
    border: 0;
    outline: 0;
    margin: 15px 15px 15px 0;
    transition: all 0.25s;
    display:list-item;
    margin-left: 407px;
  }
  
  button:hover {
    background: #222;
    color:#fff;
    box-shadow: 0 4px 7px rgba(0,0,0,0.1), 0 3px 6px rgba(0,0,0,0.1);
  }

  textarea{
      margin: 108px 100px 30px 407px;
  }

  .background{
    width:100%;
    position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
  opacity:0.7;
}
     </style>
    </head>
    <body>
        <img class="background" src="img/js.jpg"><img>
        <form action="jseditor.php" method="post">
    
            
            <textarea name="code" placeholder="Write your answer here." rows="25" cols="89"></textarea>
            
            <button id="submit" type="submit">Submit code</button>
</form>
<form action="exec.html" target = "_blank">
<button id="submit" type="submit">View webpage</button>
</form>
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
    $e=$_POST["code"];
    $f1=fopen("exec.html","w");
    fwrite($f1,$e);
    fclose($f1);
?>