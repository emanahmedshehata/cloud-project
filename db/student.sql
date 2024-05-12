CREATE DATABASE IF NOT EXISTS cloud_project;

USE cloud_project;

CREATE TABLE IF NOT EXISTS student (
    student_name VARCHAR(50),
    student_id INT PRIMARY KEY,
    CGPA DECIMAL(3, 2) CHECK (CGPA >= 0 AND CGPA <= 4)
);
ALTER TABLE student
ADD COLUMN age INT;

INSERT INTO student (student_id, student_name, CGPA, age) VALUES
    (220595, 'Eman Ahmed Shehata', 3.7, 20),
    (22011639, 'Somia Tarek abdelrahman', 3.7, 20),
    (220593, 'Malak Khaled', 3.7, 19),
    (22010466, 'Hassan waleed', 3.7, 20)
ON DUPLICATE KEY UPDATE
    student_id = VALUES(student_id),
    student_name = VALUES(student_name),
    CGPA = VALUES(CGPA),
    age = VALUES(age);
