<?php
session_start();

// بيانات المستخدم (يمكن أن تكون قاعدة بيانات في المشروع الحقيقي)
$users = array(
    "user1" => "password1",
    "user2" => "password2",
    // يمكنك إضافة المزيد من حسابات المستخدمين هنا
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        $error_message = "اسم المستخدم أو كلمة المرور غير صحيحة";
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
</head>
<body>

<h2>تسجيل الدخول</h2>

<?php
if (isset($error_message)) {
    echo '<p style="color: red;">' . $error_message . '</p>';
}
?>

<form method="post" action="">
    <label for="username">اسم المستخدم:</label>
    <input type="text" name="username" required><br>

    <label for="password">كلمة المرور:</label>
    <input type="password" name="password" required><br>

    <input type="submit" value="تسجيل الدخول">
</form>

</body>
</html>
