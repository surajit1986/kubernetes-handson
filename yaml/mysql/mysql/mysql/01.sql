CREATE USER 'appusr'@'%' IDENTIFIED BY 'appusr@1090';
GRANT ALL PRIVILEGES ON *.* TO 'appusr'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;

USE appdb;

CREATE TABLE Course
(
   CourseID int,
   ExamImage varchar(1000),
   CourseName varchar(1000),
   Rating numeric(2,1)
);

INSERT INTO Course(CourseID,ExamImage,CourseName,Rating) VALUES(1,'images/AZ-204.jpg','AZ-204 Developing Azure solutions',4.5);

INSERT INTO Course(CourseID,ExamImage,CourseName,Rating) VALUES(2,'images/DP-900.jpg','DP-900 Azure Data Fundamentals',4.6);

INSERT INTO Course(CourseID,ExamImage,CourseName,Rating) VALUES(3,'images/DP-203.jpg','DP-203 Azure Data Engineer',4.7);     	