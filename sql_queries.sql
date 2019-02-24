CREATE TABLE house(
	name VARCHAR(20) PRIMARY KEY,
	head VARCHAR(20)
)

CREATE TABLE wizard(
	nickname VARCHAR(20) PRIMARY KEY,
	name VARCHAR(20),
	surname VARCHAR(20),
	age INT,
	race VARCHAR(20),
	sex VARCHAR(20),
	patronum VARCHAR(20),
	status VARCHAR(20),
	subject VARCHAR(20),
	house VARCHAR(20),
	blood_status VARCHAR(20),
	FOREIGN KEY(house) REFERENCES house(name) ON DELETE SET NUll,
	FOREIGN KEY(race) REFERENCES race(name) ON DELETE SET NUll,
	FOREIGN KEY(blood_status) REFERENCES blood_status(name) ON DELETE SET NUll
);

CREATE TABLE user(
 user_id INT PRIMARY KEY AUTO_INCREMENT,
 user_name VARCHAR(255),
 user_password VARCHAR(255)
);

INSERT INTO wizard(nickname,name,surname) VALUES('Potter', 'Harry', 'Potter');

CREATE TABLE tbl_users(user_id INT PRIMARY KEY AUTO_INCREMENT,user_name VARCHAR(255),user_password VARCHAR(255));

INSERT INTO tbl_users(user_name,user_password) VALUES('admin','admin');
