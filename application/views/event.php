<html>
<style>
#main-part{
     margin-top: 10px;
    
  }

  h1 {
      margin-top: 10px;
      text-align: center;
      color:green;
  }

  #back{
    width: 80%;
    margin: 5px auto;
    color: white;
    background: grey;
    text-align: center;
  }
  #msg {
      width: 60%;
      margin: 80px auto;
      padding-bottom: 30px;
      border: 1px solid #918274;
      border-radius: 5px;
      background: white;
      font-size: 20pt;
      text-align: center;
      text-decoration: none;
  }
</style>
<h1>See more details about this event</h1>
<div id="msg">
    <?php
            echo "Date:".$event['date']."<br>";
            echo "Title:".$event['title']."<br>";
            echo "Place:".$event['place']."<br>";
    ?>
</div>
</html>