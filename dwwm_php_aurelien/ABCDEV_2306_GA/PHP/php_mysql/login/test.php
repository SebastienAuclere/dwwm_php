<?php

echo password_hash("Rossignol",PASSWORD_ARGON2I );
echo "<br />";
echo password_hash("Tournedisque",PASSWORD_ARGON2I );

?>