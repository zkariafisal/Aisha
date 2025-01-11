<!-- الصفحة الثانية: result.php -->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>عرض البيانات</title>
</head>
<body>
    <h1>البيانات المدخلة:</h1>
    <p>الاسم: <?php echo htmlspecialchars($_SESSION['name'] ?? 'غير متوفر'); ?></p>
    <p>العمر: <?php echo htmlspecialchars($_SESSION['age'] ?? 'غير متوفر'); ?></p>
    <p>الجنس: <?php echo htmlspecialchars($_SESSION['gender'] ?? 'غير متوفر'); ?></p>

    <h2>من الكوكيز:</h2>
    <p>الاسم: <?php echo htmlspecialchars($_COOKIE['name'] ?? 'غير متوفر'); ?></p>
    <p>العمر: <?php echo htmlspecialchars($_COOKIE['age'] ?? 'غير متوفر'); ?></p>
    <p>الجنس: <?php echo htmlspecialchars($_COOKIE['gender'] ?? 'غير متوفر'); ?></p>

    <a href="from.php">العودة إلى النموذج</a>
</body>
</html>
