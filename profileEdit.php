    <?php
        include('vendor/autoload.php');
        include("vendor/autoload.php");
        use Helpers\Auth;
        $auth = Auth::check();
    ?>
    <link rel="stylesheet" href="style.css">
    <form action="/_actions/updateProfileInfo.php" method="post">
        <h2>Edit Your Task</h2>
        <label for="name">Name</label>
        <input type="text" id="name" value="<?= $auth[0]->name ?>" name="name" >
        <label for="email">Email</label>
        <input type="email" id="email" value="<?=  $auth[0]->email ?>" name="email">
        <label for="phone">Phone</label>
        <input type="text" id="phone" value="<?= $auth[0]->phone ?>" name="phone">
        <button type="submit" class="profileUpdateBtn">Save</button>
    </form>