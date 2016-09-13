<?php if (!defined('THINK_PATH')) exit();?><html>
<script language="JavaScript">
    function change_state(state,name) {
        var xmlhttp=null;
        var u_name=name.substring(1);
        var url="__APP__/Admin/manage_user?state="+state+"&name="+u_name;
        if(window.XMLHttpRequest){
           xmlhttp=new XMLHttpRequest();
        }
        else if(window.ActiveXObject)
            
        function change_status() {
        }
            alert('用户'+u_name+'已'+state);
            xmlhttp.open('GET',url,true);
			xmlhttp.onreadystatechange=change_status;
            xmlhttp.send(null);
    }
</script>
<body>
<div>
    <table><tr>
        <th>用户昵称</th>
        <th>注册时间</th>
        <th>用户状态</th>
        <th>&nbsp&nbsp&nbsp&nbsp&nbsp管理用户状态</th>
    </tr>

        <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr>
            <td>
            <p><?php echo ($user["name"]); ?></p>
            </td>
            <td>
                <p><?php echo ($user["signdate"]); ?></p>
            </td>
                <td>
                    <p id="<?php echo ($user["name"]); ?>">&nbsp&nbsp<?php echo ($user["state"]); ?></p>
                </td>
                <td><label for="1<?php echo ($user["name"]); ?>"><input type="radio" id="1<?php echo ($user["name"]); ?>" name="state" value="封禁" onclick="change_state(this.value,this.id)">封禁</label></td>
                <td><label for="2<?php echo ($user["name"]); ?>"><input type="radio" id="2<?php echo ($user["name"]); ?>" name="state" value="解禁" onclick="change_state('正常',this.id)" >解禁</label></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</div>
</body>
</html>