CREATE DATABASE proyect_Ticos_Rides;

USE proyect_Ticos_Rides;

CREATE TABLE IF NOT EXISTS users(
    user_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    confirm_password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS rides (
    ride_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    rideName VARCHAR(255) NOT NULL,
    startFrom VARCHAR(255) NOT NULL,
    end VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    departure TIME NOT NULL,
    arrival TIME NOT NULL,
    days VARCHAR(255) not NULL,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);