const profileBtn = $('.profile');
const hiddenProfile = $('.hideProfile');
const profileName = $('.profileName');
const editIcon = $('.editIcon');
const menuOverView = $('.menuOverview');
const menuAddToDo = $('.menuToDo');
const menuHelp = $('.menuHelp');

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

