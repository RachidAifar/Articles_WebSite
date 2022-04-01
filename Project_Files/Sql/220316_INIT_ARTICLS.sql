 	CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `article` varchar(5000) NOT NULL,
  PRIMARY KEY (`article_id`)
) 