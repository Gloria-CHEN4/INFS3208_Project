<style>
#main-part{
     margin-top: 10px;
    
  }


  h1 {
    text-align: center;
  }

  #user{
    height: auto;
    width: 80%;
    margin: 5px auto;
    color: white;
    background: grey;
    text-align: center;
  }
  #msg {
    width: 40%;
    margin: 100px auto;
    padding-bottom: 30px;
    border: 1px solid #918274;
    border-radius: 5px;
    background: white;
  }
  
  

</style>

<div id="msg">
    <h1>Welcome!</h1>
    <div id="user">
        <?php echo "Your username is: ". $user_data['username']; ?><br><br>
        <?php echo "Your emial is: ". $user_data['email']; ?><br><br>
        <?php echo "Your created events are: " ; ?><?php
                foreach($results as $result) {
                    echo "Date:".$result['date']."<br>";
                    echo "Title:".$result['title']."<br>";
                    echo "Place:".$result['place']."<br>";
                   }
        ?><br><br>
    </div>
</div>