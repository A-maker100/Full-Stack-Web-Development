
function alter_theme(){
    
    var body = document.getElementsByTagName('body');
    //Theme1 to Theme2
if(body[0].style.backgroundColor=="#FFF163"){
    if(body[0].style.backgroundColor=="#FFF163"){
        body[0].style.backgroundColor = "#6663ff";
    }

    var change_logo_color = document.getElementById('logo');
    if(change_logo_color.style.color=="#55752D"){
        change_logo_color.style.color= "#6f0b65";
    }

    var header_border = document.getElementsByTagName("border");
    if(header_border[0].style.borderColor =="#66023C"){
        header_border[0].style.borderColor = "#d80fb7ef";
    }

    var table_row = document.getElementsByTagName('tr');
    if(table_row[0].style.backgroundColor=="lightgreen"){
        table_row[0].style.backgroundColor =" rgb(206, 181, 37)";
    }

    if(table_row[0].style.color=="navy"){
        table_row[0].style.color="black;";
    }

    var ordered_list = document.getElementsByTagName("ol");
    if(ordered_list[0].style.borderColor=="#c08081"){
        ordered_list[0].style.borderCoolor ="#1f1f21";
    }
}
//Theme2 to Theme1
else if(body[0].style.backgroundColor == "#6663ff"){
    body[0].style.backgroundColor=="#FFF163";

    var change_logo_color = document.getElementById('logo');
    if(change_logo_color.style.color== "#6f0b65"){
        change_logo_color.style.color="#55752D";
    }
    var header_border = document.getElementsByTagName("border");
    if(header_border[0].style.borderColor == "#d80fb7ef"){
        header_border[0].style.borderColor ="#66023C";
    }
    var table_row = document.getElementsByTagName('tr');
    if(table_row[0].style.backgroundColor =="rgb(206, 181, 37)"){
        table_row[0].style.backgroundColor="lightgreen";
    }
    if(table_row[0].style.color=="black"){
        table_row[0].style.color="navy";
    }
    var ordered_list = document.getElementsByTagName("ol");
    if(ordered_list[0].style.borderColor =="#1f1f21"){
        ordered_list[0].style.borderColor="#c08081";
    }


}


}