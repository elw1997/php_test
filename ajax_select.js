var xmlHTTP;

function $_xmlHttpRequest(){
    if(window.ActiveXObject)
    {
        xmlHTTP = new ActiveXObject("Microsoft.XMLHTTP");
    }else if(window.XMLHttpRequest) {
        xmlHTTP=new XMLHttpRequest();
    }
}

function check(){
    var select_op=document.getElementById("select_op").value;
    $_xmlHttpRequest();
    xmlHTTP.open("GET","ajax_check.php?select_op="+select_op,true);
    xmlHTTP.onreadystatechange=function check_user(){
        if(xmlHTTP.readyState == 4){
            if(xmlHTTP.status == 200){
                var str=xmlHTTP.responseText;
                document.getElementById("message").innerHTML = str;
            }
        }
    }
    xmlHTTP.send(null);
}


// var check =function(){
//     var select_op=$('#select_op').val();
//     $.ajax({
//         url:"jqajax_check.php",
//         data:"&select_op="+select_op,
//         type:"POST",
//         dataType:'text',

//         success:function(message){
//             document.getElementById("message").innerHTML = message;
//         },

//         error: function(jqXHR, textStatus, errorThrown){
//             document.getElementById("message").innerHTML=errorThrown;
//         }
//     });
// }