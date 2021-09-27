<style>
#main-part{
     margin-top: 10px;
    
  }


  #login_form h1 {
    text-align: center;
  }
  #login_form {
    width: 40%;
    margin: 100px auto;
    padding-bottom: 30px;
    border: 1px solid #918274;
    border-radius: 5px;
    background: white;
  }
  #login_form input {
    width: 80%;
    height: 35px;
    margin: 5px 10%;
    font-size: 1.1em;
    padding: 4px;
  }
  #reg_btn {
    height: 35px;
    width: 80%;
    margin: 5px 10%;
    color: white;
    background: #3B5998;
    border: none;
    border-radius: 5px;
  }
  #back{
    width: 80%;
    margin: 5px auto;
    color: white;
    background: #DCDCDC;
    text-align: center;
  }

  #views a{
    text-align: center;
    margin: 2px 0px 2px 0px;
  }
  
}
</style>
<head>
<script src=<?php echo base_url('js/jquery-3.5.0.min.js');?>></script> 
<script src=<?php echo base_url('js/script.js');?>></script> 
</head>
<body>
        <form action="Post_event/post" method="post" id="login_form">
            <h1>Post an event</h1>
            <div>
                <input type="text" name="title" placeholder="title" value="">
            </div>
            <div>
                <input type="date" name="user_date" />
            </div>
            <div>
                <input type="text" name="place" placeholder="Place" value="">
            </div>
            <div>
                <button type="submit" name="register" id="reg_btn">Post now!</button>
            </div>
        </form>

        <div id="back">
          <a href=<?php echo site_url('Post_event/view_my'); ?> id="views">View all my events</a><br><br>
          <a href=<?php echo site_url('Post_event/view_all');?> id="views">View all other's events</a><br><br>
          <a href=<?php echo site_url('Post_event/calendar');?> id="views">View joined events</a>
        </div>


    <input type="text" id="auto">
    <div id="response"></div>
</body>
