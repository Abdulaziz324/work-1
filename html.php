<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج إضافة الطلاب</title>
    <!-- ربط Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>إضافة بيانات الطالب</h2>
        <form action="student.php" method="POST">
            <div class="form-group">
                <label for="name">اسم الطالب</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="id_number">الرقم الجامعي</label>
                <input type="text" class="form-control" id="id_number" name="id_number" required>
            </div>
            <div class="form-group">
                <label for="grade">الدرجة</label>
                <input type="number" class="form-control" id="grade" name="grade" required>
            </div>
            <button type="submit" class="btn btn-primary">إضافة</button>
        </form>
    </div>

    <!-- ربط Bootstrap مع جافاسكربت -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
