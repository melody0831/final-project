<!DOCTYPE html>
<html> 

<style> 
   ul.nav {
    margin: 20px;
    padding: 20px;
    width: 200px;
    border-style:dotted;   
} 
    ul.nav{ 
        list-style-image: url(images/girl.gif);
        float: auto;
}
    
    li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #000;
    color: white;
} 
</style>
    
<head>
   <title> Melody's HW Page</title>
   <meta charset="utf-8" />
   <meta name="description" content="csci hw" />
   <meta name="keywords" content="HTML,CSS,WebProgramming,CSCI" />
   <meta name="author" content="MelodyJan" />
   <meta name="viewport" content="width=device-width, intial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="normalize.css" />
   <link rel="stylesheet" type="text/css" href="style.css" />
   <link rel="icon" type="image/gif" href="images/girl.gif" />
</head>

<body>
   
   <div id="wrapper">
		
   <div id="header">
      <center><img src="images/jan.gif" alt="logo" width=30% height=30% /></center>
   </div>

   <div id="menu">
      <ul>
         <li><a href="index.php">Home</a></li>
          <li><a href="zen.html">Zen</a></li>
         <li><a href="blocks.html">Blocks</a></li>
         <li><a href="background.html">Background</a></li>
         <li><a href="link1.html">Lists</a></li>
         <li><a href="positioning.html">Positioning</a></li>
         <li class="drop"><a href="contact_form.php">Contact Us</a>
              <li></li>
            <ul class="dropdown_content">
               <li><a href="link2.html">Email</a></li>
               <li><a href="link2.html">Phone</a></li>
               <li><a href="link2.html">Online Chatting</a></li>
            </ul>
         </li>
      </ul>
   </div>
	
   <div id="main">