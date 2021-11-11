const profileBtn = $('.profile');
const hiddenProfile = $('.hideProfile');
const profileName = $('.profileName');
const editIcon = $('.editIcon');
const menuOverView = $('.menuOverview');
const menuAddToDo = $('.menuToDo');
const menuHelp = $('.menuHelp');
const profileEdit = $('.editIcon');
const profile = $('.profile');
const taskCard = $('.task')
const taskEdit = $('.taskEdit i');
const taskCancel = $('#taskCancel i');

profileBtn.click(function(){
    profileBtn.toggleClass('profileFlex');
    console.log(hiddenProfile);
    hiddenProfile.toggleClass('showProfile');
    profileName.toggle();
    editIcon.toggle();
})

$(document).ready(function() {
    $(".sideProfileMenu [href]").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("activeMenu");
        }
    });
});

profileEdit.click(function(){
    profile.load('profileEdit.php');
})
taskEdit.click(function(){
    let buttonValue = $(this).data("value");
    let parent = $(this).parent().parent().parent().parent();
    let parentValue = parent.data("value");
    if(buttonValue == parentValue){
       let taskDisplayWrapper =parent.children()[0];
       let taskEditWrapper = parent.children()[1];
       $(taskDisplayWrapper).toggle();
       $(taskEditWrapper).toggle();
    }
    taskCancel.addClass('fas fa-times')
    
})
taskCancel.click(function(){
    let buttonValue = $(this).data("value");
    let parent = $(this).parent().parent().parent();
    let parentValue = parent.data("value");
    if(buttonValue == parentValue){
       let taskDisplayWrapper =parent.children()[0];
       let taskEditWrapper = parent.children()[1];
       $(taskDisplayWrapper).toggle();
       $(taskEditWrapper).toggle();
    }
    
})

