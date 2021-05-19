

twoWay=function(event){
    let first;
var elem =document.getElementsByClassName(event.currentTarget.className);
for(var key in elem){
    elem[key].value=event.currentTarget.value;
    first =elem[key].value;

}

        if(first >= 150){
           // alert(first);
            document.getElementById("top_width").innerHTML = first - (16+16);
            document.getElementById("bottom_width").innerHTML = first - (16+16);
            document.getElementById("back_width").innerHTML = first - (16+16);
            //document.getElementById("width").innerHTML =first;
        }


        else
        {
          document.getElementById("top_width").innerHTML ="";
          document.getElementById("bottom_width").innerHTML ="";
          document.getElementById("back_width").innerHTML ="";
        }
}


