<?php
    class AdminAction extends Action{
        public function index(){
            session_start();
            if(!empty($_POST['name'] && !empty($_POST['pw']))) {
                $name=$_POST['name'];
                $admin = M('admin');
                $pw=$admin->where("admin_name='%s'",$name)->getField('admin_pw');
                if($pw==$_POST['pw']){
                    $_SESSION['admin_name']=$name;
                    $this->redirect('__APP__/Admin/login');
                }
            }
            $this->display();
        }
        public function manage_student(){
            $student=M('student');
            $stu=$student->select();
            $this->assign('stu',$stu);
            $name=$_GET['name'];
            if($_GET['name']!=null){
                $student->where("name='%s'",$_GET['name'])->delete();
            }
            $this->display();
        }
    }