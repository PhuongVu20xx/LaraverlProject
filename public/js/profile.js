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
    var conpwd = document.getElementById("confirmpwd").value;
    var pwd = document.getElementById("newpwd").value;
    if(conpwd != pwd){
        document.getElementById("alert").innerHTML = 'Wrong Confirm Password';
    }
}
