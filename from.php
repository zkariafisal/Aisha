<!-- الصفحة الأولى: form.php -->
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // تخزين البيانات في الجلسة والكوكيز
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['gender'] = $_POST['gender'];

    setcookie('name', $_POST['name'], time() + 3600); // كوكيز لمدة ساعة
    setcookie('age', $_POST['age'], time() + 3600);
    setcookie('gender', $_POST['gender'], time() + 3600);

    header("Location: result.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>إدخال البيانات</title>
</head>
<body>
    <form method="POST" action="">
        <label>الاسم:</label>
        <input type="text" name="name" required><br><br>

        <label>العمر:</label>
        <input type="number" name="age" required><br><br>

        <label>الجنس:</label>
        <input type="radio" name="gender" value="ذكر" required> ذكر
        <input type="radio" name="gender" value="أنثى" required> أنثى<br><br>

        <button type="submit">إرسال</button>
        <button type="reset">إلغاء</button>
    </form>
</body>
</html>