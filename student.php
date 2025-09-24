<?php
// الاتصال بقاعدة البيانات (يفترض أنك تستخدم MySQL)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students_db";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // استلام البيانات من النموذج
    $name = $_POST['name'];
    $id_number = $_POST['id_number'];
    $grade = $_POST['grade'];

    // إدخال البيانات في قاعدة البيانات
    $sql = "INSERT INTO students (name, id_number, grade) VALUES ('$name', '$id_number', '$grade')";

    if ($conn->query($sql) === TRUE) {
        echo "تم إضافة الطالب بنجاح!";
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
