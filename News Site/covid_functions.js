function loadingBar(){
setTimeout(function(){document.getElementById("form").style.display="block";},000);
}

function clearResults(){
document.getElementById("close_results_popup").style.display="none";
document.getElementById("countryStats").style.display="none";
}

function getStatsZA(){
const req = new XMLHttpRequest();
var part_request = "https://coronavirus-smartable.p.rapidapi.com/stats/v1/ZA/";
req.open("GET",part_request);
req.setRequestHeader("X-RapidAPI-Host","coronavirus-smartable.p.rapidapi.com");
req.setRequestHeader("X-RapidAPI-Key","d71cf10590msh54b44d779c83aafp1b699fjsn7922306cfcdf");
req.send();

req.onreadystatechange = function(){
if(req.readyState==4 && req.status==200){
    let jsonresponse = JSON.parse(req.responseText);
    let country = jsonresponse.location.countryOrRegion;
    var date = new Date(jsonresponse.updatedDateTime).toDateString();
    let totalcases = jsonresponse.stats.totalConfirmedCases;
    let totaldeaths = jsonresponse.stats.totalDeaths;
    let totalrecoveries = jsonresponse.stats.totalRecoveredCases;
    let newcases = jsonresponse.stats.newlyConfirmedCases;
    let newrecoveries = jsonresponse.stats.newlyRecoveredCases;
    let newdeaths = jsonresponse.stats.newDeaths;

    document.getElementById("Country").innerHTML = "COVID-19 recents: "+country;
    document.getElementById("date").innerHTML = date;
    document.getElementById("new_cases").innerHTML = newcases;
    document.getElementById("new_deaths").innerHTML = newdeaths;
    document.getElementById("new_recoveries").innerHTML = newrecoveries;
    document.getElementById("total_cases").innerHTML=totalcases;
    document.getElementById("total_deaths").innerHTML = totaldeaths;
    document.getElementById("total_recoveries").innerHTML = totalrecoveries;

    document.getElementById("countryStats").style.display="block";
    document.getElementById("close_results_popup").style.display="block";
}
}
}//end of SA stats..

function getStatsBR(){
    const req = new XMLHttpRequest();
    var part_request = "https://coronavirus-smartable.p.rapidapi.com/stats/v1/BR/";
    req.open("GET",part_request);
    req.setRequestHeader("X-RapidAPI-Host","coronavirus-smartable.p.rapidapi.com");
    req.setRequestHeader("X-RapidAPI-Key","d71cf10590msh54b44d779c83aafp1b699fjsn7922306cfcdf");
    req.send();
    
    req.onreadystatechange = function(){
    if(req.readyState==4 && req.status==200){
        let jsonresponse = JSON.parse(req.responseText);
        let country = jsonresponse.location.countryOrRegion;
        var date = new Date(jsonresponse.updatedDateTime).toDateString();
        let totalcases = jsonresponse.stats.totalConfirmedCases;
        let totaldeaths = jsonresponse.stats.totalDeaths;
        let totalrecoveries = jsonresponse.stats.totalRecoveredCases;
        let newcases = jsonresponse.stats.newlyConfirmedCases;
        let newrecoveries = jsonresponse.stats.newlyRecoveredCases;
        let newdeaths = jsonresponse.stats.newDeaths;
    
        document.getElementById("Country").innerHTML = "COVID-19 recents: "+country;
        document.getElementById("date").innerHTML = date;
        document.getElementById("new_cases").innerHTML = newcases;
        document.getElementById("new_deaths").innerHTML = newdeaths;
        document.getElementById("new_recoveries").innerHTML = newrecoveries;
        document.getElementById("total_cases").innerHTML=totalcases;
        document.getElementById("total_deaths").innerHTML = totaldeaths;
        document.getElementById("total_recoveries").innerHTML = totalrecoveries;
    
        document.getElementById("countryStats").style.display="block";
        document.getElementById("close_results_popup").style.display="block";
    }
    }
    }

    function getStatsES(){
        const req = new XMLHttpRequest();
        var part_request = "https://coronavirus-smartable.p.rapidapi.com/stats/v1/ES/";
        req.open("GET",part_request);
        req.setRequestHeader("X-RapidAPI-Host","coronavirus-smartable.p.rapidapi.com");
        req.setRequestHeader("X-RapidAPI-Key","d71cf10590msh54b44d779c83aafp1b699fjsn7922306cfcdf");
        req.send();
        
        req.onreadystatechange = function(){
        if(req.readyState==4 && req.status==200){
            let jsonresponse = JSON.parse(req.responseText);
            let country = jsonresponse.location.countryOrRegion;
            var date = new Date(jsonresponse.updatedDateTime).toDateString();
            let totalcases = jsonresponse.stats.totalConfirmedCases;
            let totaldeaths = jsonresponse.stats.totalDeaths;
            let totalrecoveries = jsonresponse.stats.totalRecoveredCases;
            let newcases = jsonresponse.stats.newlyConfirmedCases;
            let newrecoveries = jsonresponse.stats.newlyRecoveredCases;
            let newdeaths = jsonresponse.stats.newDeaths;
        
            document.getElementById("Country").innerHTML = "COVID-19 recents: "+country;
            document.getElementById("date").innerHTML = date;
            document.getElementById("new_cases").innerHTML = newcases;
            document.getElementById("new_deaths").innerHTML = newdeaths;
            document.getElementById("new_recoveries").innerHTML = newrecoveries;
            document.getElementById("total_cases").innerHTML=totalcases;
            document.getElementById("total_deaths").innerHTML = totaldeaths;
            document.getElementById("total_recoveries").innerHTML = totalrecoveries;
        
            document.getElementById("countryStats").style.display="block";
            document.getElementById("close_results_popup").style.display="block";
        }
        }
        }

        function getStatsRU(){
            const req = new XMLHttpRequest();
            var part_request = "https://coronavirus-smartable.p.rapidapi.com/stats/v1/RU/";
            req.open("GET",part_request);
            req.setRequestHeader("X-RapidAPI-Host","coronavirus-smartable.p.rapidapi.com");
            req.setRequestHeader("X-RapidAPI-Key","d71cf10590msh54b44d779c83aafp1b699fjsn7922306cfcdf");
            req.send();
            
            req.onreadystatechange = function(){
            if(req.readyState==4 && req.status==200){
                let jsonresponse = JSON.parse(req.responseText);
                let country = jsonresponse.location.countryOrRegion;
                var date = new Date(jsonresponse.updatedDateTime).toDateString();
                let totalcases = jsonresponse.stats.totalConfirmedCases;
                let totaldeaths = jsonresponse.stats.totalDeaths;
                let totalrecoveries = jsonresponse.stats.totalRecoveredCases;
                let newcases = jsonresponse.stats.newlyConfirmedCases;
                let newrecoveries = jsonresponse.stats.newlyRecoveredCases;
                let newdeaths = jsonresponse.stats.newDeaths;
            
                document.getElementById("Country").innerHTML = "COVID-19 recents: "+country;
                document.getElementById("date").innerHTML = date;
                document.getElementById("new_cases").innerHTML = newcases;
                document.getElementById("new_deaths").innerHTML = newdeaths;
                document.getElementById("new_recoveries").innerHTML = newrecoveries;
                document.getElementById("total_cases").innerHTML=totalcases;
                document.getElementById("total_deaths").innerHTML = totaldeaths;
                document.getElementById("total_recoveries").innerHTML = totalrecoveries;
            
                document.getElementById("countryStats").style.display="block";
                document.getElementById("close_results_popup").style.display="block";
            }
            }
            }
        