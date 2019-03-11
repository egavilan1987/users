CREATE DATABASE users;

USE users;

CREATE TABLE users(
				id_user INT AUTO_INCREMENT,
				user_name VARCHAR(200) NOT NULL,
				user_email VARCHAR(200) NOT NULL,
				user_phone VARCHAR(200) NOT NULL,
				user_password VARCHAR(200) NOT NULL,
				user_birthday VARCHAR(100) NOT NULL,
				user_sex VARCHAR(20) NOT NULL,
				created_date DATETIME NOT NULL,
				updated_date DATETIME NOT NULL,
				PRIMARY KEY (id_user)
);


QUERYS

INSERT (SAVE)
INSERT INTO `users` (`id_user`, `user_name`, `user_email`, `user_phone`, `user_password`, `user_birthday`, `user_sex`, 
	`created_date`, `updated_date`) VALUES (NULL, 'Jose Martes', 'jm@gmail.com', '8988893838', 'alskdj', '2019-03-10 ', 
	'Female', '2019-03-10 10:22:14', '2019-03-10 08:21:14');

SELECT (VIEW)

$sql = "SELECT * FROM ventas";

UPDATE 

UPDATE `users` SET `user_password` = 'dfsaa' WHERE `users`.`id_user` = 21;

UPDATE `users` SET `user_name` = 'Robin', `user_email` = 'r@gmail.com', `user_phone` = '898989898', 
`user_password` = 'alskfslkfd', `user_birthday` = '2019-03-23', `user_sex` = 'Male', `created_date` = '2019-03-27 05:17:25', 
`updated_date` = '2019-03-10 10:37:26' WHERE `users`.`id_user` = 5;


DELETE

DELETE FROM `users` WHERE `users`.`id_user` = 21"
