CREATE DATABASE IF NOT EXISTS cloud_project;

USE cloud_project;

CREATE TABLE IF NOT EXISTS student (
    student_name VARCHAR(50),
    student_id INT PRIMARY KEY,
    CGPA DECIMAL(3, 2) CHECK (CGPA >= 0 AND CGPA <= 4)
);

INSERT INTO student (student_id, student_name, CGPA) VALUES
    (220595, 'EMAN AHMED', 3.7),
    (220500, 'SOMIA TAREK', 3.7),
    (220593, 'MALAK KhAlED', 3.7),
    (22010466, 'HASSAN WALEED', 3.7)
ON DUPLICATE KEY UPDATE
    student_id = VALUES(student_id),
    student_name = VALUES(student_name),
    CGPA = VALUES(CGPA);