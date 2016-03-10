Place your queries below
/* Feature Set 1*/;
SELECT * FROM `users` WHERE `username` = 'xshinx';
UPDATE `users` SET `email` = "cs_shin@gmail.com" WHERE `email`="shin@yahoo.com";
INSERT INTO users(`username`,`email`,`password`) VALUES ("mclor",'mclor@uci.edu','lovebug');
DELETE FROM `users` WHERE `username` = "mclor";

/* Feature Set 2*/
/* Select all todo_items made by 1 user of your choice*/
SELECT * FROM `todo_items` WHERE `user_id`=101;

/* Insert a new to do item into the table by that same user */
INSERT INTO todo_items(`title`,`details`,`timestamp`,`user_id`) VALUES ("watch naruto","watch new episode",24,101);

/* Delete a to do item into the table by that same user */
DELETE FROM `todo_items` WHERE `user_id` = 101 AND `title` = "watch naruto";

/* Update a to do item by that user with data of your choice */
UPDATE `todo_items` SET `title`="clean inside of car" WHERE `title` = "clean car" && `user_id`=100;

/* Perform a select to get all information from users by using the user's id */
SELECT * FROM `todo_items` WHERE `id`=1;