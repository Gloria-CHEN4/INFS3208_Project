<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Let's start exercising now!</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #9BCD9B;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}
a{
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
  border-radius: 50px 20px;
}

a:link, a:visited {
  background-color: #f1f1f1;
  color: green;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
  color: white;
}

#main-part{
  margin-top: 10px;
}

#main-part h3{
  color: green;
  text-align: center;
}

#introduction-part{
  float: left;
  background-color: #f1f1f1;
  width: 100%;
  height: auto;
  border: 2px solid green;
  padding: 5px;
}

#introduction-part p{
  float: left;
  margin: 5px 10px 5px 10px;
}

#images {
    padding: 5px;
    width: 100%;
    height: auto;
    background-color: #f1f1f1;
    border: 2px solid green;
    margin-bottom: 5px;
    display: inline-block;
}

#im1 {
    float:left;
}

#im2 {
    float:right;
}

section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    margin-top: 10px;
    background-color: #9BCD9B;
    padding: 10px;
    text-align: center;
    color: white;
}


</style>
</head>
<body>

<header>
    <h2>Let's start exercising now!</h2>
    <div id="ready-part">
    <a href=<?php echo site_url('Main_page'); ?>>Are you ready?</a>
    </div>
</header>

<section id="main-part">
    <div id="images">
        <img id='im2'  src="<?php echo base_url(); ?>uploads/exercise2.jpg" style="width:50%;height:auto;"/>
        <img id='im1'  src="<?php echo base_url(); ?>uploads/exercise1.jpg" style="width:50%;height:auto;"/>
    </div>

    <article id="introduction-part">
        <h3>Introduction of this web server</h3>
        <p>Helllo, guys! Now what you are viewing is a web information system about event scheduler. With the rapid development of the social and economic level globally, more and more people have to increase working hours and pay less attention to their health. Bingdi, Shengqi, Zhangqi, Da, Jian & Xiaoyi(2017) states that there are 23.2% of participants spending 10–12h and 8.8% for more hours on working every day. This is my initial inspiration to design this web.</p>
        <p>World Health Organization shows that only 5% of people have a healthy status, 20% of people have illness, and about 75% of people are in a sub-health state(X. Jun, L. Yan, F. Liyi, et al, 2017). Not only does sub-health harm people’s body, but also it will affect their normal life and social behaviors. Relatively, there is a non-healthy and non-diseased intermediate state known as the “third state” which means that a series of following side effects on people’s psychological health owing to sub health(Xu, L. Yan, Feng, et al, 2011, pp. 33-38). </p>
        <p>Therefore, based on improving people’s realization on body and psychology health, I come up with such a sharing platform to share variety of exercising events for people in Brisbane.</p>
        <p>In my web information system, people can search for their interested excising events, view nearby public events by integrating with google map, as well as creating their own events and inviting other users to an event via email.</p>
    </article>



</section>
    

<footer>
  <p>Terms and conditions</p>
  <p>Contact us</p>
</footer>

</body>
</html>
