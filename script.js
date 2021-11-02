let signUpBtn = $("#signUp");
let signUpForm = $(".registerFormContainer");
let registerCancelBtn = $(".registerForm i");

let signInBtn = $("#signIn");
let signInForm = $(".signInFormContainer");
let signInCalcelBtn = $(".signInForm i");

signUpBtn.click(function(){
    signUpForm.css("display","flex");
})
registerCancelBtn.click(function(){
    signUpForm.css("display","none")
})

signInBtn.click(function(){
    signInForm.css("display","flex");
    console.log("hellllo");
})
signInCalcelBtn.click(function(){
    signInForm.css("display","none");
})