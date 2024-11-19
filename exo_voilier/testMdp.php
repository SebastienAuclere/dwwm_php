<?php

echo password_hash("Tournedisque", PASSWORD_ARGON2I ); // ligne de code PHP utilise la fonction password_hash() pour créer un hachage sécurisé du mot de passe "Tournedisque" en utilisant l'algorithme PASSWORD_ARGON2I.

// L'utilisation de password_hash() avec Argon2i assure que le mot de passe est stocké de manière sécurisée. Le hachage produit inclura également un sel (un ajout aléatoire au mot de passe avant le hachage) pour garantir une sécurité supplémentaire.

?>