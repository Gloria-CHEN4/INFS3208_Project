<style>
#main-part{
     margin-top: 10px;
    
  }


  #register_form h1 {
    text-align: center;
  }
  #register_form {
    width: 40%;
    margin: 100px auto;
    padding-bottom: 30px;
    border: 1px solid #918274;
    border-radius: 5px;
    background: white;
  }
  #register_form input {
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


        <form action="Sign_Up/check" method="post" id="register_form">
            <h1>Register</h1>
            <div>
                <input type="text" name="username" placeholder="Username" value="">
            </div>
            <div>
                <input type="email" name="email" placeholder="Email" value="">
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" value="">
            </div>
            <div>
                <input type="text" name="secret" placeholder="Please enter your secret question here: " value="">
            </div>
            <div>
                <input type="text" name="answer" placeholder="Please enter your answer here: " value="">
            </div>
            <div>
                <button type="submit" name="register" id="reg_btn">Register now!</button>
            </div>
        </form>
  
