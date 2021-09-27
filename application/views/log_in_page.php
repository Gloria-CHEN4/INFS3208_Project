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


        <form action="Log_In/Login" method="post" id="login_form">
            <h1>Log in</h1>
            <div>
                <input <?php if($this->input->cookie('username')){
                    echo "value = " . $this->input->cookie('username');
                } ?> type="text" name="username" placeholder="Username" value="">
            </div>
            <div><input <?php if($this->input->cookie('email')){
                    echo "value = " . $this->input->cookie('email');
                } ?> type="email" name="email" placeholder="Email" value="">
            </div>
            <div>
                <input <?php if($this->input->cookie('password')){
                    echo "value = " . $this->input->cookie('password');
                } ?> type="password" name="password" placeholder="Password" value="">
            </div>
            <div>
                <input type="checkbox" name="checkbox" >Remember me
            </div>
            <div>
                <button type="submit" name="register" id="reg_btn">Log in now!</button>
            </div>
            <div>
                <a href = <?php echo site_url('Log_In/forget'); ?>> Forget your password?</a>
            </div>
        </form>
  
