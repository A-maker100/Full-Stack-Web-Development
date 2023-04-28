function LoadArticles(){
const article1 = new XMLHttpRequest();

article1.open("GET", "https://bing-news-search1.p.rapidapi.com/news?textFormat=Raw&safeSearch=Off&mkt=en-za&cc=za");
article1.setRequestHeader("X-BingApis-SDK", "true");
article1.setRequestHeader("Accept-Language", "EN");
article1.setRequestHeader("X-RapidAPI-Host", "bing-news-search1.p.rapidapi.com");
article1.setRequestHeader("X-RapidAPI-Key", "d71cf10590msh54b44d779c83aafp1b699fjsn7922306cfcdf");
article1.send();

article1.onreadystatechange = function(){
try{
if(article1.readyState==4 && article1.status==200){
var responsedata = JSON.parse(article1.responseText);
var lastIndex = responsedata.value.length;
var IndexArticle= Math.floor(Math.random() * lastIndex);
document.getElementById("sa_story1").href = responsedata.value[IndexArticle].url;
document.getElementById("image1").src=responsedata.value[IndexArticle].image.thumbnail.contentUrl;
if(document.getElementById("image1").src===null){
document.getElementById("image1").src= "https://wheatley.cs.up.ac.za/u20543043/COS216/PA3/giphy.gif";
}
var title = responsedata.value[IndexArticle].name;
var author = responsedata.value[IndexArticle].provider[0].name;
if(author==null){author= "Unknown author";}
var date_and_time = new Date(responsedata.value[IndexArticle].datePublished).toDateString();
document.getElementById("sa_story1").innerHTML = title +"&nbsp;";
document.getElementById("author1").innerHTML=author +"<br/>";
document.getElementById("date1").innerHTML = date_and_time+"<br/>"+ "category: "+responsedata.value[IndexArticle]._type;
console.log("SA article 1 setup"); 
}
else{console.log("SA article1 on code: "+article1.readyState+" && "+article1.status);} 
}
catch(error){
console.log("error : "+error);
};
}

const art2 = new XMLHttpRequest();
art2.open("GET", "https://bing-news-search1.p.rapidapi.com/news/search?q=SOUTH%20AFRICA&safeSearch=Off&textFormat=Raw&freshness=Day&cc=za&sortBy=date");
art2.setRequestHeader("X-BingApis-SDK", "true");
art2.setRequestHeader("X-RapidAPI-Host", "bing-news-search1.p.rapidapi.com");
art2.setRequestHeader("X-RapidAPI-Key", "d71cf10590msh54b44d779c83aafp1b699fjsn7922306cfcdf");
art2.send();

art2.onreadystatechange= function(){
if(art2.readyState==4 && art2.status==200){
var dataReceived = JSON.parse(art2.responseText);
var total = dataReceived.value.length;
var index = Math.floor(Math.random()* total);

var title= dataReceived.value[index].name;
var author = dataReceived.value[index].provider[0].name;
if(author ==null){ author = "";}
var d_and_t = new Date(dataReceived.value[index].datePublished).toDateString();
 document.getElementById("article2").href= dataReceived.value[index].url;
document.getElementById("article2").innerHTML = dataReceived.value[index].name;
document.getElementById("image2").src= dataReceived.value[index].provider[0].image.thumbnail.contentUrl;
if(document.getElementById("image2").src===null){
document.getElementById("image2").src = "https://wheatley.cs.up.ac.za/u20543043/COS216/PA3/giphy.gif";
}
if(author!==null){
document.getElementById("author2").innerHTML ="author:"+ author+"<br/>";
}
else{
document.getElementById("author2").innerHTML ="Unknown author <br/>";
}
document.getElementById("date2").innerHTML= d_and_t+"<br/>"+"category: "+dataReceived.value[index].about[0]._type;

console.log("article 2 setup");
}
else{
console.log("Article2 is not fetched.");
}
}


const artikle4 = new XMLHttpRequest();
artikle4.open("GET", "https://bing-news-search1.p.rapidapi.com/news/search?q=SOUTH%20AFRICA%20entertainment&safeSearch=Off&textFormat=Raw&freshness=Day&cc=za&sortBy=date");
artikle4.setRequestHeader("X-BingApis-SDK", "true");
artikle4.setRequestHeader("X-RapidAPI-Host", "bing-news-search1.p.rapidapi.com");
artikle4.setRequestHeader("X-RapidAPI-Key", "d71cf10590msh54b44d779c83aafp1b699fjsn7922306cfcdf");

artikle4.send();
artikle4.onreadystatechange= function(){
if(artikle4.readyState==4 && artikle4.status==200){
var dataReceived4 = JSON.parse(artikle4.responseText);
var IndexLimit = dataReceived4.value.length;
var index4 = Math.floor(Math.random()* IndexLimit);

var title= dataReceived4.value[index4].name;
var author = dataReceived4.value[index4].provider.name;
if(author ==null){ author ="";}
var d_and_t = new Date(dataReceived4.value[index4].datePublished).toDateString();
 document.getElementById("article4").href= dataReceived4.value[index4].url;
document.getElementById("article4").innerHTML = dataReceived4.value[index4].name;
document.getElementById("image4").src= "https://wheatley.cs.up.ac.za/u20543043/COS216/PA3/giphy.gif";
document.getElementById("author4").innerHTML ="author:"+ author+"<br/>";
document.getElementById("date4").innerHTML= d_and_t+"<br/>"+"category: "+dataReceived4.value[index4].about[0]._type;

console.log("article 4 setup");
}
else{
console.log("Article4 is not fetched.");
}
}

const artikle5= new XMLHttpRequest();
artikle5.open("GET", "https://free-news.p.rapidapi.com/v1/search?q=South%20%20Africa&lang=en");
artikle5.setRequestHeader("X-RapidAPI-Host", "free-news.p.rapidapi.com");
artikle5.setRequestHeader("X-RapidAPI-Key", "d71cf10590msh54b44d779c83aafp1b699fjsn7922306cfcdf");

artikle5.send();
artikle5.onreadystatechange= function(){
if(artikle5.readyState==4 && artikle5.status==200){
var dataReceived5 = JSON.parse(artikle5.responseText);
var lastIndex = dataReceived5.page_size;
var index5 = Math.floor(Math.random()*lastIndex);

var title= dataReceived5.articles[index5].title;
var author = dataReceived5.articles[index5].author;
if(author ==null){ author ="";}
var d_and_t = new Date(dataReceived5.articles[index5].published_date).toDateString();
 document.getElementById("article5").href= dataReceived5.articles[index5].link;
document.getElementById("article5").innerHTML = dataReceived5.articles[index5].title;
document.getElementById("image5").src= dataReceived5.articles[index5].media;
if(document.getElementById("image5").src===null){
document.getElementById("image5").src= "https://wheatley.cs.up.ac.za/u20543043/COS216/PA3/giphy.gif";
}
document.getElementById("author 5").innerHTML ="author:"+ author+"<br/>";
document.getElementById("date5").innerHTML= d_and_t+"<br/>"+"category: "+dataReceived5.articles[index5].topic;
console.log("article 5 setup");
}
else{
console.log("Article 5 is not fetched.");
}
}
}

function loaderFunc(){
document.getElementById("stories").style.display="none";
document.getElementById("loadingBar").style.display="block";
setTimeout(fullPlay,3000);
LoadArticles();

var username=document.getElementById('user_button').innerHTML;
if(!username){
document.getElementById('user_button').innerHTML = "NOT LOGGED IN";
}
else{
    console.log("There is a user logged in.");
}
}

function fullPlay(){
document.getElementById("stories").style.display= "block";
document.getElementById("loadingBar").style.display="none";
}

var buttonR = document.getElementById("reloadbutton");
var buttonP= document.getElementById("previouspage");

