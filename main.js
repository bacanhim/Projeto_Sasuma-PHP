$(document).ready(function(){
    $("#signup_form").on("submit",function(event){
        event.preventDefault();
        $(".overlay").show();
        $.ajax({
            url : "register.php",
            method : "POST",
            data : $("#signup_form").serialize(),
            success : function(data){
                console.log(data);
                $(".overlay").hide();
                if (data == "register_success") {
                    alert("Registado com sucesso");
                    window.location.href = "index.php";
                }else{
                    $("#signup_msg").html(data);
                }
            }
        })
    })
});