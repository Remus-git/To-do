const profileBtn = $('.profile');
const hiddenProfile = $('.hideProfile');
const profileName = $('.profileName');
const editIcon = $('.editIcon');
const menuOverView = $('.menuOverview');
const menuAddToDo = $('.menuToDo');
const menuHelp = $('.menuHelp');
const profileEdit = $('.editIcon');
const profile = $('.profile');
const taskEdit = $('.taskEdit i');
const taskDisplayWrapper = $('.taskDisplayWrapper');
const taskEditWrapper = $('.taskEditWrapper');
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
    taskDisplayWrapper.toggle();
    taskEditWrapper.toggle();
    taskEdit.addClass('fas fa-times');
})
taskCancel.click(function(){
    taskEdit.addClass('fas fa-edit')

})

