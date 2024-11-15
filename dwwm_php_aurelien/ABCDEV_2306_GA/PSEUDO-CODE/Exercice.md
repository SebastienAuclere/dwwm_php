Ex 1.1)

VARIABLE
    Nombre1 est un entier
    Nombre2 est un entier
    Resultat est un reel

Debut programme
    Ecrire "Saisir le 1er nombre"
    Lire ← Nombre1
    Ecrire "Saisir le 2eme nombre"
    Lire ← Nombre2
    Resultat ← (Nombre1 + Nombre2)/2
    Ecrire "Le resultat est", Resultat
Fin programme

Ex 1.2)

VARIABLE
    R est un reel
    A est un reel
    V est un reel

Debut programme
    Ecrire "Saisir le rayon R"
    Lire ← R
    A ← 4*π*R^2
    V ← (4/3)*π*R^3
    Ecrire "l'aire de la sphere est", A
    Ecrire "le volume de la sphere est", V
Fin programme

Ex 1.3)

VARIABLE
    R est un reel
    A est un reel
    S est un reel

Debut programme
    Ecrire "Saisir le rayon R"
    Lire ← R
    Ecrire "Saisir l'angle A"
    Lire ← A
    S ← π*R^2*A/360
    Ecrire "L'aire du secteur circulaire est", S
Fin programme

Ex 1.4)

VARIABLE
    S est un reel
    i est un reel
    N est un entier (gestion de la mémoire d'ou l'importance de mettre un entier)
    A est un reel
    B est un reel

Debut programme
    Ecrire "Saisir la somme S"
    Lire ← S
    Ecrire "Saisir l'interet i"
    Lire ← i
    Ecrire "Saisir le nombre d'annees N"
    Lire ← N
    A ← S*(1+N*i)
    B ← S*(1+i)^N
    Ecrire "l'interet simple vaut", A
    Ecrire "l'interet compose vaut", B
Fin programme

Ex 1.5)

VARIABLE
    a est un entier
    b est un entier
    c est un entier

Debut programme
    Ecrire "Saisir le nombre entier a"
    Lire ← a
    Ecrire "Saisir le nombre entier b"
    Lire ← b
    Ecrire "Nombre a",a,"Nombre b",b
    c ← b
    b ← a
    a ← c
    Ecrire "Les valeurs finales apres permutation sont :",a,"et",b
Fin programme

