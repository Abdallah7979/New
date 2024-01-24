<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $address = $_POST["address"];
  $phone = $_POST["phone"];
  $size = $_POST["size"];

  // إرسال البريد الإلكتروني
  $to = "beboadam99200@gmail.com";
  $subject = "تسجيل بيانات جديد";
  $message = "الاسم: $name\nالعنوان: $address\nرقم الهاتف: $phone\nالمقاس: $size";

  mail($to, $subject, $message);

  // يمكنك إضافة المزيد من الكود هنا، مثل توجيه المستخدم إلى صفحة أخرى بعد التسجيل
}
?>
