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
    background: #D3D3D3;
    border: none;
    border-radius: 5px;
  }
  
}
</style>

<head>
    <title>Upload Form</title>
</head>
<body>
    <div id="login_form">
        <?php echo $error;?>
        <?php echo form_open_multipart('https://infs3202-99c44332.uqcloud.net/Upload/do_upload'); ?>
            <input type="file" name="userfile" size="20" /> <br /><br />
            <input type="submit" value="upload" />
        </form>
    </div>    
</body>
