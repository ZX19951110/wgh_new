<?php
header("content-type:text/html;charset=UTF-8");
if(!empty($_POST['phone']) && !empty($_POST['position'])&& !empty($_POST['sex'])&& !empty($_POST['knowledge'])&& !empty($_POST['experience'])&& !empty($_POST['intro'])){
    $name=trim($_POST['name']);
    $department=trim($_POST['department']);
    $major=trim($_POST['major']);
    $stuNumber=trim($_POST['stuNumber']);
    if(!preg_match('/\d{13}/',$stuNumber)){
        echo <<<HTML
     <script>
     alert('请检查学号输入');
     window.history.back();
</script>
HTML;
    }
    $email=trim($_POST['email']);
if(!preg_match('/\w*\@\w*\.com/',$email)) {
    echo <<<HTML
     <script>
     alert('请检查邮箱输入');
     window.history.back();
</script>
HTML;
}
    $phone=trim($_POST['phone']);
    if(!preg_match('/\d{11}/',$stuNumber)){
        echo <<<HTML
     <script>
     alert('请检查电话输入');
     window.history.back();
</script>
HTML;
    }
    $position=trim($_POST['position']);
    $sex=trim($_POST['sex']);
    $knowledge=trim($_POST['knowledge']);
    $experience=trim($_POST['experience']);
    $intro=trim($_POST['intro']);

    $sql="insert into Wgh VALUES ('$stuNumber','$name','$major','$department','$phone','$email','$sex','$position','$knowledge','$experience','$intro') ";
    $mysql=mysqli_connect('localhost','root','','stu')or die("error!");
    mysqli_query($mysql,$sql)or die('error!!!');
}else{
    echo <<<HTML
     <script>
     alert("please check your input!");
    window.history.back();
</script>
HTML;
}
?>
