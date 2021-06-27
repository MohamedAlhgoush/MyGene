$(document).ready(function(){
    console.log("loaded");
    //$.material.init();
    $(document).on("submit", "#sign-up-form",function(e){
        e.preventDefault();
        var form = $('#sign-up-form').serialize();

        $.ajax({
            url: '/post_sign_up',
            type: 'POST',
            data: form,
            success: function(response){
                if(response == "success"){
                    window.location.href = "/login";
                }
                else if(response == "exist"){
                    document.getElementById('ID_reg').removeAttribute("class","hidden");
                    document.getElementById('ID_reg').setAttribute("class","text-danger");

                }
                else{;
                    document.getElementById('ErrorPass').removeAttribute("class","hidden");

                }
            }
        });
    });
    $(document).on("submit", "#Signin-form",function(e){
        e.preventDefault();
        var form = $(this).serialize();

        $.ajax({
            url: '/check_login',
            type: 'POST',
            data: form,
            success: function(res){
                if(res == "error"){
                    document.getElementById('password_in').removeAttribute("class","hidden");
                    document.getElementById('password_in').setAttribute("class","text-danger");
                }
                else{
                    console.log("Logged in as ", res);
                    window.location.href = "/";
                }
            }
        });
    });
    $(document).on("click", "#logout-link", function(e){
        e.preventDefault();
        $.ajax({
        url: '/logout',
        type: 'GET',
        success: function(res){
            if(res == "success"){
                window.location.href = '/login';
            }
            else{
                alert("Somethings went Wrong.");
            }
        }
        });
    });
    function getDataFunction(){
        $.ajax({
            url: 'loaddata',
            type: 'GET',
            success: function(res){
                if(res == "success"){

                }
            }
        });
    }
});
