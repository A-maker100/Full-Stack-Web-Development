<!DOCTYPE html>
<html>
    <head>
        <title>API endpoints</title>
        <link rel="shortcut icon" href="a_s_logo_1QZ_icon.ico" type="image/x-icon">
        <link rel="stylesheet" href="API.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Square+Peg&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>

<body>
<div id="top_half">
    <!--Logo -->
    <img src="As Logo.jpg" title="A's Daily" style="width:10%; height:20%;"/> &nbsp; <i style="font-size:60px; color:#420cb5;"><a>A's Daily</a></i>
    <span id="endpoint_title">A . P . I . ENDPOINTS</span>

    <div id="APIKey">
        <span id="ID"> localhost/Practical 1/read_id.php?apikey=xxxxabc458&id=#number </span>
        <span id="ALL"> localhost/Practical 1/read.php?apikey=xxxxabc458 </span>
        <span id="TITLE"> localhost/Practical 1/read_one.php?apikey=xxxxabc458&Title=$Story Title$ </span>
        <a href="javascript:cancel();"><img src="cancel_FILL0_wght400_GRAD0_opsz48.png" class="material-symbols-outlined" id="cancel_icon"/></a>
    </div>

    <div id="API_options">
        <ul>
            <li><a href="javascript:showID()">Get Story using id</a></li>
            <li><a href="javascript:showTitle()">Get Story using title</a></li>
            <li><a href="javascript:showAvailable()"> Get all available stories in .json format</a></li>
    </ul>
    </div>
    <div id="LogOut_Bar">
	<a href="index.php">LoG oUT</a>
    </div>

    <div id="prologue">
        Use a GET request to retrieve stories from the A's Daily Database.<br/>
        The response from the server is in .json format. <br/>
        Each item in the list will show you how to request for articles using a certain way.<br/>
    </div>

</div>
<div id="lower_half">
    <a href="home-page.php"><img src="home_FILL0_wght400_GRAD0_opsz48.png" class="material-symbols-outlined" title="Home"/></a>
</div>

<script>
   function showID(){
    document.getElementById("ID").style.display="block";
    document.getElementById("APIKey").style.display="block";
    document.getElementById("ALL").style.display="none";
    document.getElementById("TITLE").style.display="none";
    document.getElementById("prologue").style.display="none";
    return;
   }
   function showTitle(){
    document.getElementById("ID").style.display="none";
    document.getElementById("APIKey").style.display="block";
    document.getElementById("ALL").style.display="none";
    document.getElementById("TITLE").style.display="block";
    document.getElementById("prologue").style.display="none";
    return;
   }

   function showAvailable(){
    document.getElementById("ID").style.display="none";
    document.getElementById("APIKey").style.display="block";
    document.getElementById("ALL").style.display="block";
    document.getElementById("TITLE").style.display="none";
    document.getElementById("prologue").style.display="none";
    return;
   }

   function cancel(){
    document.getElementById("ID").style.display="none";
    document.getElementById("APIKey").style.display="none";
    document.getElementById("ALL").style.display="none";
    document.getElementById("TITLE").style.display="none";
    document.getElementById("prologue").style.display="block";
   }
    </script>
</body>
</html>