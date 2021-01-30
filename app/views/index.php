<?php
//  This is how you echo out database information on the screen
foreach ($data['users'] as $user) {
    echo "Information: Name:" . $user->user_name ." Email:". $user->user_email;
    echo "<br>";
}
