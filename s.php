<?php
header("content-type:text/html;charset=gb2312");
if(!empty($_POST['phone']) && !empty($_POST['position'])&& !empty($_POST['sex'])&& !empty($_POST['knowledge'])&& !empty($_POST['experience'])&& !empty($_POST['intro'])){
    $name=trim($_POST['name']);
    $department=trim($_POST['department']);
    $major=trim($_POST['major']);
    $stuNumber=trim($_POST['stuNumber']);
    if(!preg_match('/\d{13}/',$stuNumber)){
        echo <<<HTML
     <script>
     alert('please check your');
     window.history.back();
</script>
HTML;
    }
    $email=trim($_POST['email']);
    $phone=trim($_POST['phone']);
    $position=trim($_POST['position']);
    $sex=trim($_POST['sex']);
    $knowledge=trim($_POST['knowledge']);
    $experience=trim($_POST['experience']);
    $intro=trim($_POST['intro']);

}else{
    echo <<<HTML
     <script>
     alert("please check your input!");
     window.history.back();
</script>
HTML;
    exit();
}
?>
