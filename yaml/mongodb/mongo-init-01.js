db = db.getSiblingDB('appdb');
db.createCollection("Course");
db.Course.insertMany([
    {
        "CourseID": 1,
        "ExamImage": "images/AZ-204.jpg",
        "CourseName": "AZ-204 Developing Azure solutions",
        "Rating": 4.5
    },
    {
        "CourseID": 2,
        "ExamImage": "images/DP-900.jpg",
        "CourseName": "DP-900 Azure Data Fundamentals",
        "Rating": 4.6
    },
    {
        "CourseID": 3,
        "ExamImage": "images/DP-203.jpg",
        "CourseName": "DP-203 Azure Data Engineer",
        "Rating": 4.7
    }
]);