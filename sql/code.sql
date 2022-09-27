DROP TABLE IF EXISTS comments;

DROP TABLE IF EXISTS posts;

DROP TABLE IF EXISTS categories;

DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS userType;

CREATE TABLE userType(
    id INT PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(255)
);


CREATE TABLE  `user`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    name VARCHAR(255),
    last_login VARCHAR(255),
    photo VARCHAR(255),
    status VARCHAR(255),
    visibility BIT DEFAULT 1,
    usertype_id INT NOT NULL DEFAULT 2,

    FOREIGN KEY (usertype_id) REFERENCES usertype(id)
    
    
);
CREATE TABLE Categories(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);


CREATE TABLE posts(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    description VARCHAR(255),
    image VARCHAR(45),
    `datetime` DATETIME,
    category_id INT, 
    user_id INT,
    Foreign Key (user_id) REFERENCES `user` (id),

    Foreign Key (category_id) REFERENCES categories (id)

);


CREATE TABLE comments(
    id INT PRIMARY KEY AUTO_INCREMENT,
    text VARCHAR(255),
    `datetime` DATETIME,
    user_id INT,

    Foreign Key (user_id) REFERENCES `user` (id)

);
INSERT INTO userType (description) VALUES 
    ('admin'), 
    ('regular user');



INSERT INTO `user` (username, password, userType_id) VALUES
    ('admin','pass', 1),
    ('user','pass', 2);



    
INSERT INTO posts(user_id, category_id,  title, description, `datetime`) VALUES
(2,2, 'Comida Vegan', 'Hey! Procuro sugestoes de comida vegan', '2022-09-10 10:00' );


