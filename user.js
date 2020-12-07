"use strict";

window.onload= function(){
    var pwd = document.getElementById('pass');
    var s_button = document.getElementsByTagName("button")[0];

    s_button.addEventListener('click', function(e){
        if (check_pwd()==false){
            e.preventDefault();
        }
    });

    function check_pwd(){
        var pwd_val = pwd.value;
        var s_pwd = new RegExp("(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
        if (pwd_val.match(s_pwd)){
            console.log("Strong password");
        } else{
            alert("Password should conatain atleast one number, one captital letter and be atleast 8 characters long!");
            return false;
        }
        }
    }

