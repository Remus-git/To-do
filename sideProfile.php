
<div class="sideProfile">
            <div class="profile"> 
                <img src="/Theseaship/ship/Sea-with-the-ship-sunset-.png" alt="">
                <div class="profileName">
                    <h4><?= $auth[0]->name ?></h4>
                    <span>Hey <?= $auth[0]->name ?></span>
                </div>
                <div class="editIcon">
                    <i class="far fa-edit"></i>
                </div>
                <div class="hideProfile">
                    <div class="hideProfileName">
                        <h4>Name</h4>
                        <h3><?= $auth[0]->name ?></h3>
                    </div>
                    <div class="hideProfileEmail">
                        <h4>Email</h4>
                        <h3><?= $auth[0]->email ?></h3>
                    </div>
                    <div class="hideProfilePhone">
                        <h4>Phone</h4>
                        <h3><?= $auth[0]->phone ?></h3>
                    </div>
                </div>
            </div>
            <div class="sideProfileMenu">
                    <ul>
                        <div class="menuOverView ">
                        <img src="https://img.icons8.com/fluency-systems-regular/48/000000/home.png"/>
                            <a href="overview.php"><li>Overview</li></a>
                        </div>
                        <div class="menuToDo">
                            <img src="https://img.icons8.com/ios/50/000000/microsoft-to-do-app.png"/>
                            <a href="addTask.php"><li>Add To Do</li></a>
                        </div>
                        <div class="menuHelp">
                            <img src="https://img.icons8.com/material-outlined/24/000000/help.png"/>
                            <a href="#"><li>Help</li></a>
                        </div>
                    </ul>
            </div>
            <div class="sideProfileLogout">
                <i class="fas fa-sign-out-alt"></i>
                <a href="index.php"><span>Logout</span></a>
            </div>
</div>