let signUpBtn = $("#signUp");
let signUpForm = $(".registerFormContainer")
let registerCancelBtn = $(".registerForm i")
signUpBtn.click(function(){
    signUpForm.css("display","flex");
})
registerCancelBtn.click(function(){
    signUpForm.css("display","none")
})