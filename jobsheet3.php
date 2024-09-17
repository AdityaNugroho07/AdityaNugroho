<?php
// 1. Inheritance
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}
// 2. Polymorphism
class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getTeacherID() {
        return $this->teacherID;
    }

    public function getName() {
        return "Nama Dosen: " . $this->name;
    }
}

class Student extends Person {
    // 3. Encapsulation
    private $studentID;
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }

    public function getName() {
        return "Nama Mahasiswa: " . $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

// 4. Abstraction
abstract class Course {
    protected $courseName;
    public function __construct($courseName) {
        $this->courseName = $courseName;
    }
    abstract public function getCourseDetails();
}

class OnlineCourse extends Course {
    public function getCourseDetails() {
        return "Kursus Online: " . $this->courseName;
    }
}

class OfflineCourse extends Course {
    public function getCourseDetails() {
        return "Kursus Offline: " . $this->courseName;
    }
}

$student = new Student("Aditya Nugroho", "230302073");
echo $student->getName() . "<br>";
echo "Student ID: " . $student->getStudentID() . "<br>";

$teacher = new Teacher("Andi", "198765");
echo $teacher->getName() . "<br>";
echo "Teacher ID: " . $teacher->getTeacherID() . "<br>";

$onlineCourse = new OnlineCourse("Pemrograman Web");
$offlineCourse = new OfflineCourse("Bahasa Inggris");

echo $onlineCourse->getCourseDetails() . "<br>";
echo $offlineCourse->getCourseDetails() . "<br>";

?>
