function alter_theme(){
    var body = document.getElementById("body");
	var currentCookie = getCookie("bg_color");
	if(currentCookie==""){
		var theme =0;
		document.cookie="bg_color="+theme+"; expires= 08 May 2058,00:00:00;path=/";
		console.log("Cookie setup "+getCookie("bg_color"));
	}
	else if(currentCookie!=""){
		theme =-1;
		if(Number(currentCookie)==0){
		var user = document.getElementById("user_button").innerHTML;
		user+="_theme";
			theme =1;
			localStorage.setItem(user,theme);
			console.log("updated theme:"+theme);
		}
		else if(Number(currentCookie)==1){
			var user = document.getElementById("user_button").innerHTML;
			user+="_theme";
			theme =0;
			localStorage.setItem(user,theme);
			console.log("updated theme:"+theme);
		}
	
	console.log("Theme: "+theme);
	document.cookie ="bg_color="+theme+"; expires= 8 May 2058 00:00:00; path=/";//update theme cookie
	console.log("Additional cookie: "+ getCookie("bg_color"));
	currentCookie = getCookie("bg_color");
	}
	//continue changing Theme
	if(body.style.backgroundColor=="" || body.style.backgroundColor=="rgb(255, 241, 99)"||Number(currentCookie)==1){
		body.style.backgroundColor="rgb(99, 138, 255)";
		
		console.log("Theme1 to theme 2 backgroundcolor changed.");

		var change_logo_color = document.getElementById('logo');
    if(change_logo_color.style.color=="rgb(85, 117, 45)" || change_logo_color.style.color==""){
        change_logo_color.style.color= "rgb(111, 11, 101)";
    }
console.log("Theme 1 to theme 2 Logo color changed.");

var header_border = document.getElementsByTagName("header");
    if(header_border[0].style.borderColor =="rgb(102, 2, 60)" ||header_border[0].style.borderColor ==""){
		header_border[0].style.borderColor ="pink";
		console.log("Theme 1 to theme 2 Header border color changed.");
    }

	var table_row = document.getElementsByTagName('tr');
	for(var r=0; r<table_row.length; r++){
    if(table_row[r].style.backgroundColor=="lightgreen" || table_row[r].style.backgroundColor==""){
		table_row[r].style.backgroundColor=" rgb(206, 181, 37)";
    }
	if(table_row[r].style.color=="navy" || table_row[r].style.color ==""){
        table_row[r].style.color="black";
    }
}
console.log("Theme 1 to Theme 2 row text and bg colors set."+table_row.length+" rows.");
var table_data= document.getElementsByTagName('td');
	for(var r=0; r<table_data.length; r++){
    if(table_data[r].style.backgroundColor=="lightgreen" || table_data[r].style.backgroundColor==""){
		table_data[r].style.backgroundColor=" rgb(206, 181, 37)";
    }
	if(table_data[r].style.color=="navy" || table_data[r].style.color ==""){
        table_data[r].style.color="black";
    }
}
console.log("Theme 1 to Theme 2 datatext and bg colors set."+table_data.length+" rows.");

var ordered_list = document.getElementsByTagName("ol");
for(var i=0; i<ordered_list.length;i++){
    if(ordered_list[i].style.borderColor=="rgb(192, 128, 129)" || ordered_list[i].style.borderColor==""){
		ordered_list[i].style.borderColor="rgb(31, 31, 33)";
    }
}
console.log("Theme 1 to Theme 2 ordered list background color is changed."+ordered_list.length+" rows.");
	}//end theme 1 to theme 2 conversion
	

    //Theme2 to Theme1
	else if(body.style.backgroundColor=="rgb(99, 138, 255)" || Number(currentCookie)==0){
			body.style.backgroundColor="#FFF163";
			console.log("Theme 2 to theme 1 body color changed.");
		var change_logo_color = document.getElementById('logo');
		if(change_logo_color.style.color== "rgb(111, 11, 101)"){
			change_logo_color.style.color="rgb(85, 117, 45)";
			console.log("Theme 2 to theme 1 Logo color changed.");
		}
		var header_border = document.getElementsByTagName("header");
		if(header_border[0].style.borderColor =="pink" ||header_border[0].style.borderColor ==""){
			header_border[0].style.borderColor ="rgb(102, 2, 60)";
			console.log("Theme 2 to theme 1 border color changed");
		}
		var table_row = document.getElementsByTagName('tr');
	for(var r=0; r<table_row.length; r++){
    if(table_row[r].style.backgroundColor=="rgb(206, 181, 37)" || table_row[r].style.backgroundColor==""){
		table_row[r].style.backgroundColor=" lightgreen";
    }
	if(table_row[r].style.color=="black" || table_row[r].style.color ==""){
        table_row[r].style.color="navy";
    }
}
console.log("Theme 2 to Theme 1 row text and bg colors set."+table_row.length+" rows");
var table_data = document.getElementsByTagName('td');
	for(var r=0; r<table_data.length; r++){
    if(table_data[r].style.backgroundColor=="rgb(206, 181, 37)" || table_data[r].style.backgroundColor==""){
		table_data[r].style.backgroundColor=" lightgreen";
    }
	if(table_data[r].style.color=="black" || table_data[r].style.color ==""){
        table_data[r].style.color="navy";
    }
}
console.log("Theme 2 to Theme 1 data text and bg colors set."+table_data.length+" rows");


var ordered_list = document.getElementsByTagName("ol");
for(var i=0; i<ordered_list.length;i++){
    if(ordered_list[i].style.borderColor=="rgb(31, 31, 33)" || ordered_list[i].style.borderColor==""){
		ordered_list[i].style.borderColor="rgb(192, 128, 129)";
    }
}
console.log("Theme 2 to Theme 1 ordered list background color is changed."+ordered_list.length+" rows.");
	}
	}



function loader(){
var innerdata = document.getElementById("user_button").innerHTML;
innerdata+="_theme";
var themeNo = localStorage.getItem(innerdata);
if(themeNo==null){
	localStorage.setItem(innerdata,0);
	document.cookie = "bg_color=0; expires=8 May 2058 00:00:00 UTC; path=/";
	console.log("new cookies are created. theme Number was empty\n");
}
else if(themeNo!=null){
	if(Number(themeNo)==1){
		document.cookie = "bg_color=0; expires=8 May 2058 00:00:00 UTC; path=/";
		alter_theme();
		console.log("themeNumber available,new Cookie generated: "+ localStorage.getItem(innerdata));
	}
	else{
	document.cookie = "bg_color="+Number(themeNo)+"; expires=8 May 2058 00:00:00 UTC; path=/";
	console.log("themeNumber available,new Cookie generated: "+ localStorage.getItem(innerdata));
	}
	
}


//ARTICLE 1
const request1 = new XMLHttpRequest();
request1.open("GET", "https://newscatcher.p.rapidapi.com/v1/search?q=Fashion&lang=en&sort_by=date&from=2022-05-01&to=2022-05-04&search_in=title&country=za&page=1&media=True");
request1.setRequestHeader("X-RapidAPI-Host", "newscatcher.p.rapidapi.com");
request1.setRequestHeader("X-RapidAPI-Key", "d71cf10590msh54b44d779c83aafp1b699fjsn7922306cfcdf");
request1.send();

request1.onreadystatechange=
function(){
if(request1.readyState==4 && request1.status==200){
	let jsonData = JSON.parse(request1.responseText);
	let index = Math.floor(Math.random()*5);
document.getElementById("article1").innerHTML =jsonData.articles[index].title;
document.getElementById("author1").innerHTML = "By: "+ jsonData.articles[index].author;
if(document.getElementById("author1").innerHTML==null){
	document.getElementById("author1").innerHTML="Unknown Author";
}
var datevariable =new Date(jsonData.articles[index].published_date);
console.log(datevariable);
Daysoftheweek=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
document.getElementById("date1").innerHTML  = Daysoftheweek[datevariable.getDay()] + ", "+datevariable.getFullYear()+"/"+(datevariable.getMonth()+1)+"/"+datevariable.getDate();
document.getElementById("article1").href = jsonData.articles[index].link;
document.getElementById("category1").innerHTML = "";
document.getElementById("keywords1").innerHTML = jsonData.articles[index].topic;
document.getElementById("articleImage1").src= "giphy.gif";
console.log("article 1 title setup");
}
}

//ARTICLE 2
const request = new XMLHttpRequest();
request.open("GET", "https://newscatcher.p.rapidapi.com/v1/search?q=sports&lang=en&sort_by=date&from=2022-05-01&to=2022-05-31&search_in=title&country=za&page=1&media=True",true);
request.setRequestHeader("X-RapidAPI-Host", "newscatcher.p.rapidapi.com");
request.setRequestHeader("X-RapidAPI-Key", "d71cf10590msh54b44d779c83aafp1b699fjsn7922306cfcdf");
request.send();

request.onreadystatechange = function(value){
if(request.status==200 && request.readyState==4){
let ResponseData = JSON.parse(request.responseText);
let index = Math.floor(Math.random()* 5);
document.getElementById("article2").innerHTML = ResponseData.articles[index].title;
document.getElementById("article2").href= ResponseData.articles[index].link;
document.getElementById("author2").innerHTML = "By: "+ResponseData.articles[index].author;
document.getElementById("articleImage2").src= ResponseData.articles[index].media;
let dateString = new Date(ResponseData.articles[index].published_date);
document.getElementById("date2").innerHTML = dateString.toDateString();
if(ResponseData.articles[index].topic!==null){
document.getElementById("category2").innerHTML = "Category: "+ResponseData.articles[index].topic;
}
else{
	document.getElementById("category2").innerHTML = "Category: Unknown ";
}
document.getElementById("keywords2").innerHTML = "Keywords: real-life";
}
else{
console.log("data fetch not successful."+request.readyState+" "+ request.status);
}
}

//ARTICLE 3
const article3_request = new XMLHttpRequest();
article3_request.open('GET',"https://api.thenewsapi.com/v1/news/top?api_token=NsoMEX0TC7I3hmmnPR5H1xPOM1vVKCP5NUDRi4Jo&language=en&search=Money&published_before=2022-05-31&published_after=2022-05-01",true);
article3_request.send();

article3_request.onreadystatechange = function(value){
if(article3_request.status==200 && article3_request.readyState==4){
let responsedata = JSON.parse(article3_request.responseText);
let article3Index = Math.floor(Math.random()* responsedata.meta.limit);
document.getElementById("article3").href = responsedata.data[article3Index].url;
document.getElementById("article3").innerHTML = responsedata.data[article3Index].title;
document.getElementById("author3").innerHTML = "By: "+ responsedata.data[article3Index].source;
document.getElementById("imageArticle3").src= responsedata.data[article3Index].image_url;
let datestring3 = new Date(responsedata.data[article3Index].published_at);
document.getElementById("date3").innerHTML = datestring3.toDateString();
if(responsedata.data[article3Index].keywords!==""){
document.getElementById("keywords3").innerHTML = "Keywords: "+responsedata.data[article3Index].keywords;
}
else{
document.getElementById("keywords3").innerHTML = "";
}
document.getElementById("category3").innerHTML = "Category: "+responsedata.data[article3Index].categories;
}
else{console.log("article 3: fetch not successful"+article3_request.status +" "+ article3_request.readyState);}
}//end of fetch for article 3

//ARTICLE 4
const article4 = new XMLHttpRequest();
article4.open("GET","https://api.thenewsapi.com/v1/news/top?api_token=NsoMEX0TC7I3hmmnPR5H1xPOM1vVKCP5NUDRi4Jo&language=en&search=gaming&published_before=2022-05-31&published_after=2022-05-01",true);
article4.send();

article4.onreadystatechange= function(){
if(article4.readyState==4 && article4.status==200){
var receivedData = JSON.parse(article4.responseText);
let article4_index = Math.floor(Math.random()*receivedData.meta.limit);
document.getElementById("article4").href = receivedData.data[article4_index].url;
document.getElementById("article4").innerHTML = "4. "+receivedData.data[article4_index].title;
date = new Date(receivedData.data[article4_index].published_at).toDateString();
document.getElementById("date4").innerHTML = "published on: " + date;
if(receivedData.data[article4_index].keywords !==""){
document.getElementById("keywords4").innerHTML = "keywords: "+receivedData.data[article4_index].keywords;
}
else{
document.getElementById("keywords4").innerHTML = "";
}

if(receivedData.data[article4_index].categories !==""){
document.getElementById("category4").innerHTML = "categories: "+ receivedData.data[article4_index].categories;
}
else{
document.getElementById("category4").innerHTML = "";
}
document.getElementById("articleImage4").src= receivedData.data[article4_index].image_url;
document.getElementById("author4").innerHTML= "By: "+ receivedData.data[article4_index].source;
}
else{
console.log("article4 data fetch not successful."+ article4.status + article4.readyState);
}
}//end of article4 fetch usage

//ARTICLE 5
const article5_request = new XMLHttpRequest();
article5_request.open("GET","https://api.thenewsapi.com/v1/news/top?api_token=NsoMEX0TC7I3hmmnPR5H1xPOM1vVKCP5NUDRi4Jo&language=en&search=Transport%20Studios&published_before=2022-04-30&published_after=2022-04-01",true);
article5_request.send();

article5_request.onreadystatechange= function(){
if(article5_request.readyState==4 && article5_request.status==200){
var receivedData = JSON.parse(article5_request.responseText);
let article5_index = Math.floor(Math.random()*receivedData.meta.limit);
document.getElementById("article5").href = receivedData.data[article5_index].url;
document.getElementById("article5").innerHTML = receivedData.data[article5_index].title;
date = new Date(receivedData.data[article5_index].published_at).toDateString();
document.getElementById("date5").innerHTML = "published on: " + date;
if(receivedData.data[article5_index].keywords !==""){
document.getElementById("keywords5").innerHTML = "keywords: "+receivedData.data[article5_index].keywords;
}
else{
document.getElementById("keywords5").innerHTML = "";
}

if(receivedData.data[article5_index].categories !==""){
document.getElementById("category5").innerHTML = "categories: "+ receivedData.data[article5_index].categories;
}
else{
document.getElementById("category5").innerHTML = "";
}
document.getElementById("articleImage5").src= receivedData.data[article5_index].image_url;
document.getElementById("author5").innerHTML= "By: "+ receivedData.data[article5_index].source;
}
else{
console.log("article5 data fetch not successful."+ article5_request.status + article5_request.readyState);
}
}

function ANIMATION_LOADER(){
	document.getElementById("td1").style.display = "block";
	document.getElementById("td2").style.display = "block";
	document.getElementById("td3").style.display = "block";
	document.getElementById("td4").style.display = "block";
	document.getElementById("td5").style.display = "block";
var clear = setTimeout(clearSpin,1000);
	}
function clearSpin(){
document.getElementById("loading_articles").style.display="none";
}
var TIME_OUT = setTimeout(ANIMATION_LOADER, 3500);
}//end of loader function

function buttonFunction(){
if(document.getElementById("SearchForNews").value !=='' ){
alert('['+document.getElementById("SearchForNews").value +']'+' := Your search is going through.');
var searchdata = document.getElementById("SearchForNews").value;
var httprequestbit = "https://api.thenewsapi.com/v1/news/top?api_token=NsoMEX0TC7I3hmmnPR5H1xPOM1vVKCP5NUDRi4Jo&language=en&search=" +searchdata+"published_after=2022-04-10&published_before=2022-04-12";
var array = new Array();
article = document.getElementById("article1").innerHTML;
let got_it = article.includes(searchdata);
if(got_it == true){
array.push(document.getElementById("article1"));
}
else{console.log("article 1 not a match.");}
//check article 2
article= document.getElementById("article2").innerHTML;
got_it = article.includes(searchdata);
if(got_it == true){
array.push(document.getElementById("article2"));
}
else{console.log("article 2 not a match.");}
//check article 3
article = document.getElementById("article3").innerHTML;
got_it = article.includes(searchdata);
if(got_it == true){
array.push(document.getElementById("article3"));
}
else{console.log("article 3 not a match.");}
//check article 4
article = document.getElementById("article4").innerHTML;
got_it = article.includes(searchdata);
if(got_it == true){
array.push(document.getElementById("article4"));
}
else{console.log("article 4 not a match.");}
//check article 5
article = document.getElementById("article5").innerHTML;
got_it = article.includes(searchdata);
if(got_it == true){
array.push(document.getElementById("article5"));
}
else{console.log("article 5 not a match.");}


//MAKE http request for 2 articles
var Editing_String = "<ol id='results_list'>";
const searchrequest = new XMLHttpRequest();
searchrequest.open("GET",httprequestbit,true);
searchrequest.send();

searchrequest.onreadystatechange = function(){
if(searchrequest.readyState==4 && searchrequest.status==200){
console.log("state 4 && status code 200");
let responseVar = JSON.parse(searchrequest.responseText);
var Index1 = Math.floor(Math.random()*9);
var Index2 = Math.floor(Math.random()*9);
if(Index1 !==Index2){
	Editing_String+= "<li><a href=' "+responseVar.articles[Index2].url+" '>"+responseVar.articles[Index2].title+"</a></li>";
	Editing_String+= "<li><a href=' "+responseVar.articles[Index2].url+" '>"+responseVar.articles[Index2].title+"</a></li>";
}
else{
	Editing_String+= "<li><a href=' "+responseVar.articles[Index1].url+" '>"+responseVar.articles[Index1].title+"</a></li>";

}
}
}

//create a list of result articles

for(ind=0; ind<array.length; ind++){
Editing_String+= "<li><a href=' "+array[ind].href+" '>"+array[ind].innerHTML+"</a></li>";
}
Editing_String+="</ol>";

let showR = setTimeout(showResultsBar,1000);
function showResultsBar(){
	if(Editing_String=="<ol id='results_list'></ol>"){Editing_String="NO RESULTS";}
document.getElementById("insert_results").innerHTML = Editing_String;
document.getElementById("insert_results").style.display = 'block';
document.getElementById("searchResults").style.display = 'block';
document.getElementById("X").style.display ='block';
}
}//end of handling non-empty search query

else if(document.getElementById("SearchForNews").value==''){
console.log("Search value empty");
alert("Enter search data");
}
}//search-control

//FILTER BUTTON functionality

function getByTitle(){
alert("Title functioning...");
}

function getByPublishDate(){
alert("publish date functioning.");
}

function getByAuthor(){
	alert("author functioning..");
}

function getByTopViewed(){
alert("Top View functioning..");

}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  function TestPHP(){
	  var innerdata = document.getElementById("user_button").innerHTML;
	  innerdata+="_theme";
	  var cookie_for_user = getCookie("bg_color");
	  localStorage.setItem(innerdata,cookie_for_user);
	  console.log(localStorage.getItem(innerdata));
  }

  function FilterEntertainment(){
	  var firstArticle = document.getElementById("article1").innerHTML="New Article Pending;There's no network";
	  RemoveFilter();
  }

  function FilterEducation(){
	  
  }

  function FilterTechnology(){}

  function FilterPolitics(){}

  function FilterFinance(){}

  function RemoveFilter(){
	  var tickbox = document.getElementById("tickbox1");
	  if(tickbox.value!==null){
		  console.log("tick box was ticked");
	  }
	  else{
		  console.log("tick box is not ticked");
		  return;
	  }
	  var innerData = document.getElementById("user_button").innerHTML;
	  innerData +="_preferences";
	
	  var set = localStorage.getItem(innerData);
	  if(set==null){
		  ;
	  }
	  else{
		  localStorage.setItem(innerData,null);
	  }
	  console.log("Filter removed.\n");
  }
