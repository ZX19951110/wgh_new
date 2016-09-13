<?php
require_once('class.phpmailer.php');
require_once('class.smtp.php');
class IndexAction extends Action {
    public function index()
    {
        header("content-type:text/html;charset=UTF-8");
        if (!empty($_POST)) {
            if (!empty($_POST['phone']) && !empty($_POST['position']) && !empty($_POST['sex']) && !empty($_POST['knowledge']) && !empty($_POST['experience']) && !empty($_POST['intro'])) {
                $name = trim($_POST['name']);
                $department = trim($_POST['department']);
                $major = trim($_POST['major']);
                $stuNumber = trim($_POST['stuNumber']);
                if (!preg_match('/\d{13}/', $stuNumber)) {
                    echo <<<HTML
     <script>
     alert('请检查学号输入');
     window.history.back();
</script>
HTML;
                    exit();
                }
                $email = trim($_POST['email']);
                if (!preg_match('/\w*\@\w*\.com/', $email)) {
                    echo <<<HTML
     <script>
     alert('请检查邮箱输入');
     window.history.back();
</script>
HTML;
                    exit();
                }
                $phone = trim($_POST['phone']);
                if (!preg_match('/\d{11}/', $stuNumber)) {
                    echo <<<HTML
     <script>
     alert('请检查电话输入');
     window.history.back();
</script>
HTML;
                    exit();
                }
                $position = trim($_POST['position']);
                $sex = trim($_POST['sex']);
                $knowledge = trim($_POST['knowledge']);
                $experience = trim($_POST['experience']);
                $intro = trim($_POST['intro']);
                $sql = "insert into wgh_student VALUES ('$stuNumber','$name','$major','$department','$phone','$email','$sex','$position','$knowledge','$experience','$intro') "or die('insert fail');
                $mysql = mysqli_connect('localhost', 'root', '', 'wgh_new','3306') or die("error!");
                mysqli_query($mysql, $sql) or die('error!!!');

                $mail= new PHPMailer(); //new一个PHPMailer对象出来
                $mail->CharSet ="UTF-8";//设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
                $mail->IsSMTP(); // 设定使用SMTP服务
                $mail->SMTPDebug  = 1;
                $mail->SMTPAuth   = true;                  // 启用 SMTP 验证功能
                $mail->SMTPSecure = "ssl";                 // 安全协议，可以注释掉
                $mail->Host       = 'smtp.QQ.com';      // SMTP 服务器
                $mail->Port       = 465;                   // SMTP服务器的端口号
                $mail->Username   = '619186893@qq.com';  // SMTP服务器用户名，PS：我乱打的
                $mail->Password   = 'azpbmzphbeczbebi';            // SMTP服务器密码
                $mail->From = '619186893@qq.com';
                $mail->isHTML(true);
                $mail->addAddress($email,'HHH');
                $mail->Subject=$name."欢迎加入电子科技大学沙河校区网络管理委员会";
                $mail->Body  = "$name.你好，欢迎加入电子科技大学信息中心网络管理委员会，你的申请已经收到，请等待电话面试。请核对相关信息:\n
                电话：$phone,\n职位：$position.\n
                如有问题，请联系：18966939536 或发邮件 786597749@qq.com"; // optional, comment out and test
                echo <<<HTML
     <script>
     alert("发送邮件中 请勿关闭页面");
     </script>
HTML;
                $status = $mail->send();
                if($status){
                    echo <<<HTML
     <script>
     alert("报名成功！我们已经将信息发送到您的邮箱请注意查收！");
    window.history.back();
</script>
HTML;
                }
             } else {
                echo <<<HTML
     <script>
     alert("表单有空项，请检查输入！");
    window.history.back();
</script>
HTML;
            }
        }
        $this->display();
    }

}