-- Create Users table
CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE Portfolio(
    id INT AUTO_INCREMENT PRIMARY KEY,
    template VARCHAR(50) NOT NULL,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

-- Create HomePage table
CREATE TABLE HomePage (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    img VARCHAR(255),
    roles VARCHAR(255),
    home_desc TEXT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

-- Create AboutPage table
CREATE TABLE AboutPage (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    resume VARCHAR(255),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

-- Create Experience table
CREATE TABLE Experience (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title1 VARCHAR(100),
    title2 VARCHAR(100),
    description TEXT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

-- Create Contact table
CREATE TABLE Contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255),
    phoneno VARCHAR(15),
    email VARCHAR(100),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

-- Create Links table
CREATE TABLE Links (
    id INT AUTO_INCREMENT PRIMARY KEY,
    link_name VARCHAR(100),
    link VARCHAR(255),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

-- Create Skills table
CREATE TABLE Skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    skill VARCHAR(100),
    percentage INT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id)
);
