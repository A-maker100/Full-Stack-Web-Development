<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Calendar</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />"
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Square+Peg&display=swap" rel="stylesheet">    
    </head>
<style>
    .container{
    font-family: "Merriweather", serif;
    font-size:70%;
    width: 365px;
    height: 355px;
    background-color: peru;
    color: #eee;
    display: flex;
    justify-content: center;
    align-items:center;
    position: absolute;
    left: 450px;
    top: 245px;
    right:325px;
    bottom:365px;
}

.calender{
    width:365px;
    height:355px;
    background-color:#c4aead;
}

.month{
width:355px;
height:100px;
background-color: purple;
display:flex;
justify-content: space-between;
align-items: center;
padding:0.2rem;
text-align: center;

}

.month i{
    font-size: 2.5rem;
    cursor:pointer;
}

.month h3{
    font-size: 1.5rem;
    font-weight:500;
    text-transform: uppercase;
    letter-spacing:0.2rem;
    margin-bottom:1rem;
}

.month p{
    font-size: 1rem;
}

.weekdays{
    width:100%;
    height: 1.1rem;
    padding:0 0.4rem;
    display:flex;
    align-items: center;
    justify-content:center;
}

.weekdays div{
    font-size: 1.2rem;
    font-weight:400;
    letter-spacing: 0.1rem;
    width: calc(365px/7);
    display:flex;
    justify-content: center;
    align-items: center;
}

.days{
    width:100%;
    display:flex;
    flex-wrap:wrap;
    padding:0 0.4rem;
}

.days div{
    font-size:1rem;
    margin: 5px;
    width:calc(285px/7);
    height: 1.1rem;
    display: flex;
    justify-content: center;
    align-items:center;
    transition: background-color 0.1s;
}
.days div:hover:not(.today){
background-color:#55752D;
border: 1px solid purple;
cursor:pointer;

}
.next-days, .prev-days{
    opacity:0.5;
}

.today{
    background-color: purple;
}
header{
border: 10px solid #66023C;
}
[id='logo']{
text-align: center;
font-family: hubballiregular;
font-size: 2rem;
color: #55752D
}
</style>
<body style="background-color:darkgrey" onload="calendarSetUp()">
    <header>
        <!-- this is the where i put the logo and the name of the site-->	
    <p id="logo"><img src="As Logo.jpg" alt="Cracked Shell,no more withholding", width="100" height="100" border="2px dotted purple" title="A's Daily"><i>A's Daily</i></p>
    </header>
    <div class="container">
        <div class="calender">
            <div class="month">
                 <i class="fas fa-angle-left prev" onclick="prevClick()"></i>
                 <div class="date">
                     <h3 id="h3">April</h3>
                     <p id="p"> Fri 15 April 2022</p>
                 </div>
                 <i class="fas fa-angle-right next" onclick="nextClick()"></i>
            </div>
    
            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days">
                <div class="prev-days">27</div>
                <div class="prev-days">28</div>
                <div class="prev-days">29</div>
                <div class="prev-days">30</div>
                <div class="prev-days">31</div>
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
                <div>5</div>
                <div>6</div>
                <div>7</div>
                <div>8</div>
                <div>9</div>
                <div>10</div>
                <div>11</div>
                <div>12</div>
                <div>13</div>
                <div>14</div>
                <div class="today">15</div>
                <div>16</div>
                <div>17</div>
                <div>18</div>
                <div>19</div>
                <div>20</div>
                <div>21</div>
                <div>22</div>
                <div>23</div>
                <div>24</div>
                <div>25</div>
                <div>26</div>
                <div>27</div>
                <div>28</div>
                <div>29</div>
                <div>30</div>
                <div class="next-days">1</div>
                <div class="next-days">2</div>
                <div class="next-days">3</div>
                <div class="next-days">4</div>
                <div class="next-days">5</div>
                <div class="next-days">6</div>
                <div class="next-days">7</div>
            </div>
        </div>
    </div>	
  <?php include "footer.php";?>  
</body>
<script>
    function calendarSetUp(para=0){
	const date = new Date();
	date.setMonth(date.getMonth()+para);
	const months =[
		"January",
		"February",
		"March",
		"April",
		"May",
		"June",
		"July",
		"August",
		"september",
		"October",
		"November",
		"December"
	];

	document.getElementById("h3").innerHTML = months[date.getMonth()];
	if(para!==0){document.getElementById("p").innerHTML =date.getFullYear();}
	else{
	document.getElementById("p").innerHTML = date.toDateString();
	}

	const monthsDays = document.querySelector(".days");
	const lastDay = new Date(date.getFullYear(),date.getMonth()+1,0).getDate();
	console.log("lastDay :"+lastDay);
	let prevLastDay = new Date(date.getFullYear(),date.getMonth(),0).getDate();
	console.log("prevLastDay :"+prevLastDay);
	var updateCalendar="";
	date.setDate(1);
	//prev days
	var firstDayofMonth = date.getDay();
	console.log("first day of this month: "+firstDayofMonth);
	for(let def=firstDayofMonth; def>0; def--){
		updateCalendar+= '<div class="prev-days">'+ (prevLastDay-def)+'</div>';
	}
	//curr month days
	for(var i=1; i<=lastDay;i++){
		if(i===new Date().getDate() && date.getMonth()===new Date().getMonth()){updateCalendar +='<div class="today">'+i+'</div>';}
		else{
		updateCalendar +="<div>"+i+"</div>";
		}
}	
//nextMonth
const lastDayIndex = new Date(date.getFullYear(),date.getMonth()+1,0).getDay();
console.log("last Day: "+lastDayIndex);
let nextMonthNumDays = 7-lastDayIndex-1; 
for(let put=1;put<=7-nextMonthNumDays;put++){
	updateCalendar+= '<div class="next-days">'+put+'</div>';
	monthsDays.innerHTML = updateCalendar;
}

}//end of calendar setup

prevClick=()=>{
	calendarSetUp(-1);
};
nextClick=()=>{
	calendarSetUp(1);
};

</script>
</html>
