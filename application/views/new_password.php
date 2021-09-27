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
    font-size: .9em;
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
  
}
</style>


<form action="new_password" method="post" id="login_form">
    <div><input type="text" name="email" value=<?php if(isset($email)) {
        echo $email;
    }
    ?>>
    <div><input type="password" name="password" placeholder="Enter your new password" value="">
    </div>
    <div>
        <button type="submit" name="register" id="reg_btn">confirm</button>
    </div>
</form>