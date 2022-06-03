$(document).ready(()=>{
    $('#changepwd').click(function(){
        $('#account-detail').hide(300);
        $('#changepwdform').show(300);
    })

    $('#close').click(function(){
        $('#account-detail').show(300);
        $('#changepwdform').hide(300);
    })
}); 


function checkpwd() {
    var password = $("#newpwd").val();
    var confirmPassword = $("#confirmpwd").val();
 
    if (password == confirmPassword){
        $("#alert").html("Passwords match.").addClass('text-success').removeClass('text-danger');
        $("#changepwd-btn").prop('disabled', false); 
    }else{
        $("#alert").html("Passwords do not match!").addClass('text-danger').removeClass('text-success');
    }
}