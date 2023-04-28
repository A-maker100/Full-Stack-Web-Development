
<?php
session_start();
$cookiename="user";
$cookievalue=$_SESSION["username"];
$cookiename2 ="password";
$cookievalue2 = $_SESSION["password"];
if(!isset($_COOKIE["user"]) && !isset($_COOKIE["password"])){
	setcookie($cookiename,$cookievalue,time()+104800,"/",null,null,true);
	setcookie($cookiename2,$cookievalue2,time()+104800,"/",null,null,true);
}
?>
<!DOCTYPE html>

<html>
<head><title>News!</title>
<link rel="stylesheet" href="home_stylings.css">
<link rel="stylesheet" href="Hubballi FontKit/styleheet.css">
<meta name ="keywords" content="A's Daily News Site">
<meta name="author" content="Apinda Tekula">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http_equiv='refresh' content='69'>

<script type="text/javascript"  src="JAVASCRIPT_1.js"></script>
<link rel="shortcut icon" href="a_s_logo_1QZ_icon.ico" type="image/x-icon">
</head>

<body id='body' onload="loader();">
<header>
	<!-- this is the where i put the logo and the name of the site-->	
<p id="logo"><img src="As Logo.jpg" alt="Cracked Shell,no more withholding", width="159" height="129" border="2px dotted purple" title="A's Daily"><i>A's Daily</i></p>
<div class="user_log_in_and_out">
<button type="submit" class="user_button" id="user_button" onmouseover="document.getElementById('logout_button').style.display='block'" onmouseleave="document.getElementById('logout_button').style.display='none'" ><?$_SESSION['username']?></button>
<button type="submit" class="log_out_button" id="logout_button" style="display: none" onmouseover="document.getElementById('logout_button').style.display='block'" onmouseleave="document.getElementById('logout_button').style.display='none'" onclick="document.cookie='bg_color=0;expires=01 January 1966;path=/'; console.log('cookie removed coz user logged out');"><a href="logout.php">Log Out</a></button>
</div>
</header>
<br/>
<button type="button"  id="buttond" onclick="buttonFunction()"><a href="#"  target="_blank" rel="noreferrer noopener">Go!</a></button><input type="search" name="searchValue" placeholder="search by title" value="" id="SearchForNews"> <!--use reverse order coz its going to begin from the right-->

<table id= "MainLinks">
<tr id ="row_1">
<tc><td><a href="C:\Users\apind\Desktop\Tuks\COS 216\Practical 1\index.html">PA1</a></td></tc>
<tc><td><a href="SA.php"> SOUTH AFRICA </a></td></tc>
<tc><td><a href="covid.php" id="corona"> COVID19 </a></td></tc>


<select>
<option >Filter Articles by: </option>
<option value="choice" id="title" onclick="getByTitle()">Title</option>
<option value="choice" id="publishingDate" onclick="getByPublishDate()">Publishing Date</option>
<option value="choice" id="author" onclick="getByAuthor()"> Author</option>
<option value="choice" id="topviewed" onclick="topViewed()">Top Viewed </option>
</select>
</tr>

<tr id="row2">
<td><a href="C:\Users\apind\Desktop\Tuks\COS 216\Practical2\index.html" > PA2 </a></td>
</tr>


<tr id="row3">
<td><a href="C:\Users\apind\Desktop\Tuks\COS 216\Practical 3\index.html" onclick=""> PA3 </a></td>
</tr>


<tr id="row4">
<td><a href="login-page.php"> PA4 </a></td>
</tr>

</table>

<br/>
<div>
	<table class="categories">
	<th class="Categories"> Categories: 
	</th>

	<ol>
	<input type="checkbox" value="entertainmentFilter" id="tickbox1"/><li><a href="#" onclick="FilterEntertainment()" ondoubleclick="RemoveFilter()">Entertainment</a></li><br/>
	<input type="checkbox" value="educationFilter"/><li><a href="#" onclick="FilterEducation()"> Education</a></li><br/>
	<input type="checkbox" value="TechnologyFilter"/><li><a href="#" onclick="FilterTechnology()"> TECHNOLOGY</a></li><br/>
	<input type="checkbox" value="PoliticsFilter"/><li><a href="#" onclick="FilterPolitics()"> POLITICS</a></li><br/>
	<input type="checkbox" value="FinanceFilter"/><li><a href="#" onclick="FilterFinance()"> FINANCE</a></li><br/>
	</ol>
	</table>
<button type="button" value="" class="calendarAccessor"><a href="calendar.php">Click to View This Months Calendar</a></button>
<table class="storiesTafel" id="StoriesBar">
<th> Available stories</th>
<div id="loading_articles" name="Animation" style="position:absolute; left:655px; top:655px;"></div>
<tr class="Today"><td id="td1" style="width:100%"><p><a href="#" id="article1" target="_blank" rel="noreferrer noopener">1. Stage 2 Loadshedding hitting the student streets of Hatfield </a></p> <p id="author1">by Lillian J &nbsp;</p> <img src="https://pikuma.com/images/courses/3dgraphics/box.png" width="120" height="90" alt="" class="articles" id="articleImage1"> <p id="date1"> 12 March 2022</p><p id="keywords1">keywords: loadhsedding, Hatfield</p>
<p id="category1">Category: Society</p> </td></tr>
<tr class="Today"><td id="td2" style="width:100%"><a href="#" id="article2" target="_blank" rel="noreferrer noopener">2. Investors Want to move their funds to offshore accounts</a> <p id= "author2">by Jacki Marais &nbsp;</p> <img src="https://media.gq-magazine.co.uk/photos/5e25d00550c26e0008a9b030/3:2/w_1620,h_1080,c_limit/20200120-invest.jpg" width="120" height="90" alt="" class="articles" id="articleImage2"><p id="date2"> 12 March 2022 </p><p id="keywords2">keywords: wealth, finance</p><p id="category2"> Category: Money</p></td></tr>
<tr class="Today"><td id="td3" style="width:100%"><a href="#" id="article3"target="_blank" rel="noreferrer noopener">3. Kanye defends his art over backlash with Pete Davidson</a><p id="author3"> by Adnipa &nbsp; </p><img src="https://www.pinkvilla.com/files/styles/amp_metadata_content_image/public/pete_kanye_instagram_1.jpg" width="120" height="90" alt="" class="articles" id="imageArticle3"> <p id="date3">12 March2022</p><p id="keywords3"> keywords: Ye, Pete Davidson</p><p id="category3"> Category: Entertainment, Gossip</p>
</td></tr>
<tr class="Today"><td id="td4" style="width:100%"><a href="#" id="article4" target="_blank" rel="noreferrer noopener">4. Samsung Galaxy M31s released in India</a><p id= "author4">by Ruth &nbsp;</p> <img src="https://images.samsung.com/is/image/samsung/assets/za/about-us/brand/logo/mo/256_144_3.png?$512_N_PNG$" width="120" height="90" alt="" class="articles" id ="articleImage4"> <p id="date4"> 12 March 2022</p> <p id="keywords4"> keywords: cellular device, Samsung</p> <p id="category4"> Category: Electronics, Sales</p></td></tr>
<tr class="Today"><td id="td5" style="width:100%"><a href="#" id="article5" target="_blank" rel="noreferrer noopener">5. The Queen is cancelled by Mzansi Magic</a><p id="author5"> by Justice Mahommed &nbsp; </p><img src="https://cdn-mzansimagic.dstv.com/images/Show/2021/12/08/530421/4/1638957724-25_The_Queen_Poster_160_x_240.jpg" width="120" height="90" alt="" class="articles" id="articleImage5"> <p id="date5"> 12 March 2022</p> <p id="category5"> Category: Television,Entertainment</p> <p id="keywords5"></p></td></tr>
</table>

<form id="searchResults">
<h3><b> Results Found:</b> </h3>
<span id="X" onclick="document.getElementById('searchResults').style.display='none'">&times;</span>
<p id="insert_results">NO Results.</p>
</form>

</div>
<p ><img src="theme-icon.png" title="Switch Themes" id="Theme_Changer" width="50" height="50" onclick="alter_theme();" style="position:absolute; right:12px;"></p>
<footer class="footer">
	<?php include "footer.php"; ?> | <a href="API.php">API</a>
</footer>
</body>
</html>
