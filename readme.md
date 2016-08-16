# Petite plateform des tâches (TaskList) avec CodeIgniter

## Base de donnée

```
CREATE DATABASE todo_ci;
```
### Tables

- Table User
```
DROP TABLE IF EXISTS `user`;
		
CREATE TABLE `user` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50) NULL,
  `prenom` VARCHAR(50) NULL,
  `email` VARCHAR(250) NULL,
  `password` VARCHAR(250) NULL,
  PRIMARY KEY (`id`)
);
```
- Table Todo
```
DROP TABLE IF EXISTS `todo`;
		
CREATE TABLE `todo` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(250) NULL,
  `id_user` INTEGER NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (id_user) REFERENCES `user` (`id`)
);
```