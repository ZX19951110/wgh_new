<?php if (!defined('THINK_PATH')) exit();?><html>
<style type="text/css">
    #manage_article a{color: #4F97E9;font-size: 25px;}
</style>
<script type="text/javascript">
    function manage_ajax(hot,id) {
        var xmlhttp=null;
        var url="__APP__/Admin/manage_ajax?hot="+hot+"&id="+id;
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch (e){
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.status==200 && xmlhttp.readyState==4)
            alert(xmlhttp.responseText);
        }
        xmlhttp.open('GET',url,true);
        xmlhttp.send();
    }
    function delete_article(id) {
        var xmlhttp=null;
        var url="__APP__/Admin/delete_ajax?id="+id;
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch (e){
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.status==200 && xmlhttp.readyState==4)
                document.getElementById(id).innerHTML=xmlhttp.responseText;
        }
        xmlhttp.open('GET',url,true);
        xmlhttp.send();
    }
</script>
<body>
<div id="manage_article">
<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$result): $mod = ($i % 2 );++$i;?><div id="<?php echo ($result["article_id"]); ?>">
    <a href="__APP__/Article/detail?title=<?php echo ($result["title"]); ?>"><?php echo ($result["title"]); ?></a>
    <label for="<?php echo ($result["article_id"]); ?>1"><input name="<?php echo ($result["article_id"]); ?>" type="radio" id="<?php echo ($result["article_id"]); ?>1" value="1" onclick="manage_ajax(this.value,this.name)">设置热门</label>
    <label for="<?php echo ($result["article_id"]); ?>0"><input name="<?php echo ($result["article_id"]); ?>" type="radio" id="<?php echo ($result["article_id"]); ?>0" value="0" onclick="manage_ajax(this.value,this.name)">取消设置热门</label>
    <button value="<?php echo ($result["article_id"]); ?>" id="delete" onclick="delete_article(this.value)">删除文章</button>
    <hr>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</body>
</html>