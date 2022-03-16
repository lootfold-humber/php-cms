-- cms.users definition

CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `first` varchar(25) NOT NULL,
  `last` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `about` varchar(255) NOT NULL,
  `photo` longblob,
  PRIMARY KEY (`id`)
);

-- cms.projects definition

CREATE TABLE `projects` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `type` enum('Website','Graphic Design') DEFAULT NULL,
  `date` date DEFAULT NULL,
  `photo` longblob,
  `user_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_User_Project_Id` (`user_id`),
  CONSTRAINT `FK_User_Project_Id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
);

-- cms.skills definition

CREATE TABLE `skills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `confidence` tinyint DEFAULT NULL,
  `logo` longblob,
  `user_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_User_Skill_Id` (`user_id`),
  CONSTRAINT `FK_User_Skill_Id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
);

-- cms.contact_requests definition

CREATE TABLE `contact_requests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_User_Contact_Requests_Id` (`user_id`),
  CONSTRAINT `FK_User_Contact_Requests_Id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
);

-- add default user
INSERT INTO cms.users (`first`,`last`,email,password,active,dateAdded) VALUES
('Jane','Doe','email@address.com','5f4dcc3b5aa765d61d8327deb882cf99','Yes','2022-01-08 02:12:46');

INSERT INTO cms.users (`first`,`last`,email,password,active,dateAdded) VALUES
('Pallav','Dubey','pallav@address.com','5f4dcc3b5aa765d61d8327deb882cf99','Yes','2022-01-08 02:12:46');

INSERT INTO cms.users (`first`,`last`,email,password,active,dateAdded) VALUES
('Divish','Ram','divish@address.com','5f4dcc3b5aa765d61d8327deb882cf99','Yes','2022-01-08 02:12:46');

INSERT INTO cms.users (`first`,`last`,email,password,active,dateAdded) VALUES
('Lisle', 'Lojo','lisle@address.com','5f4dcc3b5aa765d61d8327deb882cf99','Yes','2022-01-08 02:12:46');
