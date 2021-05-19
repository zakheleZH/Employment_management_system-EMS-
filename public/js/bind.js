

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
            document.getElementById("notify").innerHTML = "One door will be added";
            if(first > 600)
            {
                document.getElementById("notify").innerHTML = "Two doors will be added";
            }

        }


        else
        {
          document.getElementById("top_width").innerHTML ="";
          document.getElementById("bottom_width").innerHTML ="";
          document.getElementById("back_width").innerHTML ="";
          document.getElementById("notify").innerHTML ="";
        }
}





hieghtFunction=function(event){
    let first;
var elem =document.getElementsByClassName(event.currentTarget.className);
for(var key in elem){
    elem[key].value=event.currentTarget.value;
    first =elem[key].value;

}

        if(first > 0){
           // alert(first);


            document.getElementById("height_id_side1").innerHTML = first;
            document.getElementById("height_id_side2").innerHTML = first;
            document.getElementById("height_id_back").innerHTML = first - 32;
            document.getElementById("height_id_front").innerHTML = first;



        }


        else
        {
          document.getElementById("top_width_top").innerHTML ="";
          document.getElementById("height_id_bottom").innerHTML = "";
            document.getElementById("height_id_side1").innerHTML = "";
            document.getElementById("height_id_side2").innerHTML = "";
            document.getElementById("height_id_back").innerHTML = "";

        }
}



WidthFunction=function(event){
    let first;
var elem =document.getElementsByClassName(event.currentTarget.className);
for(var key in elem){
    elem[key].value=event.currentTarget.value;
    first =elem[key].value;

}

        if(first > 50){
           // alert(first);
            document.getElementById("weight_id_top").innerHTML = first;
            document.getElementById("weight_id_bottom").innerHTML = first;
            document.getElementById("weight_id_back").innerHTML = first;
            document.getElementById("weight_id_side1").innerHTML = first;
            document.getElementById("weight_id_side2").innerHTML = first;
            document.getElementById("show").innerHTML = "one";

            if(first > 600)
            {
                document.getElementById("show").innerHTML = "Two";
            }



        }


        else
        {
            document.getElementById("weight_id_top").innerHTML = "";
            document.getElementById("weight_id_bottom").innerHTML = "";
            document.getElementById("weight_id_side1").innerHTML = "";
            document.getElementById("weight_id_side2").innerHTML = "";
            document.getElementById("weight_id_back").innerHTML = "";

        }
}




DepthFunction=function(event){
    let first;
var elem =document.getElementsByClassName(event.currentTarget.className);
for(var key in elem){
    elem[key].value=event.currentTarget.value;
    first =elem[key].value;

}

        if(first > 0){
           // alert(first);





            document.getElementById("depth_id_side2").innerHTML = first;
            document.getElementById("depth_id_side1").innerHTML = first;
            document.getElementById("depth_id_bottom").innerHTML = first;
            document.getElementById("depth_id_top").innerHTML = first;
            document.getElementById("depth_id_front").innerHTML = first;


        }


        else
        {
            document.getElementById("depth_id_top").innerHTML = "";
            document.getElementById("depth_id_bottom").innerHTML = "";
            document.getElementById("depth_id_side1").innerHTML = "";
            document.getElementById("depth_id_side2").innerHTML = "";
            document.getElementById("depth_id_back").innerHTML = "";
            document.getElementById("depth_id_front").innerHTML = "";

        }
}


randomFunction=function(event){
    let first;
var elem =document.getElementsByClassName(event.currentTarget.className);
for(var key in elem){
    elem[key].value=event.currentTarget.value;
    first =elem[key].value;

}

        if(first !=""){
           // alert(first);

            document.getElementById("randomStem").innerHTML = first;
        }


        else
        {
            document.getElementById("randomStem").innerHTML = "";
        }
}



