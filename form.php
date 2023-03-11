<?php

<form action="email.php" method="post">//لاحظ ان البيانات المرسلة سيتم معالجتها في ملف email.php في نفس مسار الملف الذي يوجد به الform
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Phone: <input type="text" name="phone"><br>
Message: <textarea name="message"></textarea><br>
<input type="submit">
</form>