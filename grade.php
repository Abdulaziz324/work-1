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

// استرجاع البيانات من قاعدة البيانات
$sql = "SELECT id, name, id_number, grade FROM students";
$result = $conn->query($sql);

echo "<div class='container mt-5'>";
echo "<h2>قائمة الطلاب</h2>";
echo "<table class='table table-bordered'>";
echo "<thead><tr><th>الرقم</th><th>الاسم</th><th>الرقم الجامعي</th><th>الدرجة</th></tr></thead>";
echo "<tbody>";

if ($result->num_rows > 0) {
    // عرض البيانات
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['id_number'] . "</td><td>" . $row['grade'] . "</td></tr>";
    }
    echo "</tbody></table></div>";
} else {
    echo "لا توجد بيانات لعرضها.";
}

$conn->close();
?>
