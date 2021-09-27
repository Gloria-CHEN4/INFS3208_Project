<html>

<style>
#main-part{
     margin-top: 10px;
    
  }


  h1 {
    text-align: center;
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
    margin: 100px auto;
    padding-bottom: 30px;
    border: 1px solid #918274;
    border-radius: 5px;
    background: white;
  }
</style>

<div id="msg">
    <h1>View all created events by others! </h1>
    <div id="back">
        <?php
                foreach($results as $result) {
                    echo "Date:".$result['date']."<br>";
                    echo "Title:".$result['title']."<br>";
                    echo "Place:".$result['place']."<br>";
                    echo "<a href=".site_url('Post_event/join/'.$result['event_id']).">Join it!</a><br>";
                }
        ?>
    </div>
</div>

    
</html>