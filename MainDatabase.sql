--CREATE DATABASE MainDataBase;
--DROP DATABASE MainDataBase;
USE MainDataBase;

CREATE TABLE Colleges 
(
  college_id INT IDENTITY(1, 1) PRIMARY KEY,
  college_name VARCHAR(255)
);


CREATE TABLE Departments 
(
  department_id INT IDENTITY(10, 10) PRIMARY KEY,
  department_name VARCHAR(100),
  head_id INT,
  college_id INT,
  FOREIGN KEY (college_id) REFERENCES Colleges(college_id)
);

CREATE TABLE Instructors 
(
  instructor_id INT IDENTITY(1010, 1) PRIMARY KEY,
  fname VARCHAR(255),
  lname VARCHAR(255),
  department_id INT,
  FOREIGN KEY (department_id) REFERENCES Departments(department_id)
);

ALTER TABLE Departments
ADD CONSTRAINT Fk_head_id
FOREIGN KEY (head_id) REFERENCES Instructors(instructor_id)

CREATE TABLE Courses 
(
  course_id INT NOT NULL IDENTITY(100, 1) PRIMARY KEY ,
  course_name VARCHAR(255),
  instructor_id INT,
  department_id INT,
  FOREIGN KEY (instructor_id) REFERENCES Instructors(instructor_id),
  FOREIGN KEY (department_id) REFERENCES Departments(department_id)
);

CREATE TABLE Students 
(
  student_id INT IDENTITY(2020, 1) NOT NULL PRIMARY KEY,
  fname VARCHAR(255),
  lname VARCHAR(255),
  bday date,
  pass VARCHAR(255),
);
CREATE TABLE Class
(
	class_id INT IDENTITY(21210, 2) NOT NULL PRIMARY KEY,
	student_id INT,
	course_id INT,
	FOREIGN KEY (student_id) REFERENCES Students(student_id),
	FOREIGN KEY (course_id) REFERENCES Courses(course_id),
)
CREATE TABLE Credential
(
	admin_id VARCHAR(255),
	password VARCHAR(255)
);


/*

HARD CODE INSERTIONS

--INSERTING CREDENTIALS--

INSERT INTO Credential
Values ('Admin', 'Administration123')


--INSERTING COLLEGES--

INSERT INTO Colleges 
VALUES ('CCIT')

--INSERTING DEPARTMENTS--

INSERT INTO Departments (department_name, college_id)
VALUES ('COMPUTER SCIENCE', 1)

INSERT INTO Departments (department_name, college_id)
VALUES ('INFORMATION TECHNOLOGY', 1)

--UPDATING DEPARTMENT HEAD--

UPDATE Departments
SET head_id = 1012
WHERE department_id = 10

UPDATE Departments
SET head_id = 1016
WHERE department_id = 20
