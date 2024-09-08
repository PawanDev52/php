<?php
// form handling with oops

if (isset($_POST['user'])) {
    class Users
    {
        function getName($name)
        {
            echo "User name is $name";
        }
    }
    
    $user = new Users();
    $user->getName($_POST['user']);
}
?>

<form action="" method="post">
    <input type="text" name="user" placeholder="Enter user name">
    <br><br>
    <button>Submit</button>
</form>