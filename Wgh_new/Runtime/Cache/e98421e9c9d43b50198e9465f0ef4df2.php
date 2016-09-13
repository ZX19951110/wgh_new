<?php if (!defined('THINK_PATH')) exit();?><html>
<script language="JavaScript">
    function delete_student(name) {
        var xmlhttp=null;
        var url="__APP__/Admin/manage_student?name="+name;
        if(window.XMLHttpRequest){
           xmlhttp=new XMLHttpRequest();
        }
        else if(window.ActiveXObject)
            
        function change_status() {
        }
            alert('学生'+name+'已删除');
            xmlhttp.open('GET',url,true);
			xmlhttp.onreadystatechange=change_status;
            xmlhttp.send(null);
        location.reload();
    }
</script>
<body>
<div>
    <table><tr>
        <th>姓名   </th>
        <th>学院   </th>
        <th>专业   </th>
        <th>学号   </th>
        <th>性别   </th>
        <th>意愿   </th>
        <th>电话   </th>
        <th>邮箱   </th>
        <th>知识了解   </th>
        <th>相关经历   </th>
        <th>自我评价   </th>
    </tr>

        <?php if(is_array($stu)): $i = 0; $__LIST__ = $stu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$stu): $mod = ($i % 2 );++$i;?><tr>
            <td>
            <p><?php echo ($stu["name"]); ?></p>
            </td>
            <td>
                <p><?php echo ($stu["department"]); ?></p>
            </td>
                <td>
                    <p><?php echo ($stu["major"]); ?></p>
                </td>
                <td>
                    <p><?php echo ($stu["stuNumber"]); ?></p>
                </td>
                <td>
                    <p><?php echo ($stu["sex"]); ?></p>
                </td>
                <td>
                    <p><?php echo ($stu["position"]); ?></p>
                </td>
                <td>
                    <p><?php echo ($stu["phone"]); ?></p>
                </td>
                <td>
                    <p><?php echo ($stu["email"]); ?></p>
                </td>
                <td>
                    <p><?php echo ($stu["knowledge"]); ?></p>
                </td>
                <td>
                    <p><?php echo ($stu["experience"]); ?></p>
                </td>
                <td>
                    <p><?php echo ($stu["intro"]); ?></p>
                </td>
                <td>
                <a id="<?php echo ($stu["name"]); ?>" onclick="delete_student(this.id)">删除学生</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</div>
</body>
</html>