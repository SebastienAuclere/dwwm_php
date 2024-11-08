CREATE TABLE IF NOT EXISTS utilisateurs (
id_user int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
lastname_user varchar(50) NOT NULL,
firstname_user varchar(50) NOT NULL,
mail_user varchar(150) NOT NULL,
pass_user varchar(400) NOT NULL,
level int(10) UNSIGNED NOT NULL,
PRIMARY KEY (id_user)
) ENGINE=InnoDB;
