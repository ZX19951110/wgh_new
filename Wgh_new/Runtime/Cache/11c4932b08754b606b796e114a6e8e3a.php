<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>电子科技大学网络管理委员会</title>
    <link rel="stylesheet" type="text/css" href="__TMPL__/Index/style.css">
    <script type="text/javascript" src="__TMPL__/Index/js.js"></script>
</head>
<body>
    <div class="wrap">
    	<div class="header" id="header">
    		<span class="small_logo"></span>
    		<span class="feedback"><a href= "">反馈</a></span>
            <div class="directory">
                <ul class="dir">
                    <li>
                        <a href="#aboutus" onmouseover="on_hover_dir(1)" onmouseout="on_out_dir(1)" onclick="on_click_dir(1)">
                            <img id= "dir_img_1" src="__TMPL__/Index/img/logo_about_us.png"  class="img_highlight">
                            <p class="p_logo_name">关于我们</p>
                            <p class="p_logo_intro1">About us</p>
                        </a>
                        <div  id = "dir_under_1" class="under_bar">
                            <img src="__TMPL__/Index/img/logo_bar_under.png">
                        </div>
                    </li>
                    <li>
                        <a href="#dept_man"class = "li_bg_bar" onmouseover="on_hover_dir(2)" onmouseout="on_out_dir(2)" onclick="on_click_dir(2)">
                            <img id= "dir_img_2" src="__TMPL__/Index/img/logo_department.png" class="img_highlight">
                            <p class="p_logo_name">部门管理</p>
                            <p class="p_logo_intro2">Department</p>
                            <p class="p_logo_intro2">Management</p>
                        </a>
                        <div id = "dir_under_2" class="under_bar">
                            <img src="__TMPL__/Index/img/logo_bar_under.png">
                        </div>
                    </li>
                    <li>
                        <a href="#daren"class = "li_bg_bar" onmouseover="on_hover_dir(3)" onmouseout="on_out_dir(3)"onclick="on_click_dir(3)">
                            <img id= "dir_img_3" src="__TMPL__/Index/img/logo_expert.png" class="img_highlight">
                            <p class="p_logo_name">牛人介绍</p>
                            <p class="p_logo_intro2">Master</p>
                            <p class="p_logo_intro2">Introduction</p>

                        </a>
                        <div  id = "dir_under_3" class="under_bar">
                            <img src="__TMPL__/Index/img/logo_bar_under.png">
                        </div>
                    </li>
                    <li>
                        <a href="#gallery"class = "li_bg_bar" onmouseover="on_hover_dir(4)" onmouseout="on_out_dir(4)"onclick="on_click_dir(4)">
                            <img id= "dir_img_4" src="__TMPL__/Index/img/logo_heart.png" class="img_highlight">
                            <p class="p_logo_name">照片墙</p>
                            <p class="p_logo_intro1">Photo wall</p>
                        </a>
                        <div id = "dir_under_4" class="under_bar">
                            <img src="__TMPL__/Index/img/logo_bar_under.png">
                        </div>
                    </li>
                    <li>
                        <a href="#join"class = "li_bg_bar" onmouseover="on_hover_dir(5)" onmouseout="on_out_dir(5)"onclick="on_click_dir(5)">
                            <img id= "dir_img_5" src="__TMPL__/Index/img/logo_mail.png" class="img_highlight">
                            <p class="p_logo_name">报名加入</p>
                            <p class="p_logo_intro1">Join us</p>
                        </a>
                        <div  id = "dir_under_5" class="under_bar">
                            <img src="__TMPL__/Index/img/logo_bar_under.png">
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="xys" id="aboutus">
            <div class="about_us">
                <div class="about">
                    <h1 class="intro-h1" id = "about_h1">About Us</h1>
                </div>
                <div class="intro-wrapper" id = "about_p">
                    <h3>网络管理委员会</h3>
                    <div class="intro">
                        <p>电子科技大学学生宿舍网络管理委员会（即网管会,英文全称NetUnion,简称NU）,原名网盟。</p>
                        <p>致力于维护电子科技大学沙河校区学生宿舍网络的正常使用。</p>
                        <p>我们可以提供：</p>
                        <p>1.为您提供全面的网络知识的学习方法和资料</p>
                        <p>2.为您营造适宜的工作环境和浓厚的学习氛围</p>
                        <p>3.和您共同探讨最前沿的网络技术和学习心得</p>
                        <p>4.为您提供全真网络环境下各种设备实践机会</p>
                    </div>   
                </div>
            </div>

            <div class="dept_man" id = "dept_man">
                <div class="banner"><h2>Department</h2></div>
            </div>

            <div class="dm">
                <div class="dept_wrapper">
                <div class="jobs">                
                    <div class="chairman"><p>主席团</p></div>

                    <div class="maintenance clear-fix" id = "maintenance">
                        <div class="title"><p>运维部</p></div>
                        <div class="menu">
                            <p id = "m-title"><span><</span>
                            
                            <span>></span></p>
                            <ul class="m-ul">
                                <li data-num = "0"></li>
                                <li data-num = "1"></li>
                            </ul>
                        </div>
                        <div class="content" id = "m-content"></div>
                    </div>

                    <div class="codeMonkey clear-fix" id = "codeMonkey">
                        <div class="title"><p>研发部</p></div>
                        <div class="menu">
                            <p id = "c-title"><span><</span>
                            
                            <span>></span></p>
                            <ul class="c-ul">
                                <li data-num = "0"></li>
                                <li data-num = "1"></li>
                                <li data-num = "2"></li>
                            </ul>
                        </div>
                        <div class="content" id = "c-content"></div>
                    </div>
                </div>
                </div>
            </div>
        </div>

    	<div class="daren_photo" id="daren">
             <div class="daren_text">
                Daren <br/>introduction
             </div>
             <div class="daren_unintro">
                <p>电子科技大学学生宿舍网络管理委员会（即网管会,英文全称NetUnion,简称NU）,原名网盟,成立于1999年11月,现隶属于电子科技大学信息中心。从建立网管会到现在，网管会历届有很多的牛人，他们是我们学习的目标和动力。</p>
             </div>
             <br/>
            <ul id="daren_list">
           
            </ul>
            <div class="photo_wall" id="gallery">
            <span class="icon-left"><</span>
            <span class="icon-right">></span>
            <div id="photo-wrapper">
              <!-- <div  id="photo-box"> -->
                
              <!-- </div> -->
            </div>
          </div>
        </div>


    	<div class="join_us" id="join">
            <div class="join_logo_yellow">
                <p id="welcome_p1">Welcome to join us</p>
                <p id="welcome_p2">--------------报名表 </p>
            </div>
            <div class="join_table_bg">
            </div>
            <div class="join_table_wrap">
                           <span id="check_mail" class="join_warning"style="position: absolute;margin-top: 107px;left:-140px"></span>
                           <span id="check_stuId" class="join_warning"style="position: absolute;margin-top: 60px;left:570px;width: 200px;text-align: left;"></span>
                           <span id="check_tele"class="join_warning"style="position: absolute;margin-top: 107px;left: 570px;width: 200px;text-align: left;"></span>
                            <span id="check_all" class="join_warning" style="position: absolute;margin-top: 600px;margin-left: 100px;width: 210px"></span>
                <form method="post" action="__APP__/Index/index" onsubmit="return check_join_form(this)">
                    <table class="join_table" cellspacing="0">    
                        <tr class="join_table_tr">
                            <td class="join_td">
                                 <p>*&nbsp姓&nbsp&nbsp&nbsp名&nbsp&nbsp</p>
                            </td>
                            <td class="join_td">
                                 <input type="text" name="name" class="join_input_content" onchange="join_change_input()"></input>
                            </td>
                            <td class="join_td">
                                <p>&nbsp&nbsp学&nbsp&nbsp&nbsp院&nbsp&nbsp</p>
                            </td>
                            <td class="join_td">
                                <input type="text"name="department" class="join_input_content" onchange="join_change_input()"></input>
                            </td>
                        </tr>
                        <tr class="join_table_tr">
                            <td class="join_td">
                                  <p>&nbsp&nbsp专&nbsp&nbsp&nbsp业&nbsp&nbsp</p>
                            </td>
                            <td class="join_td">
                                 <input type="text" name="major" class="join_input_content" onchange="join_change_input()"></input>
                            </td>
                             <td class="join_td">
                                 <p>*&nbsp学&nbsp&nbsp&nbsp号&nbsp&nbsp</p>
                             </td>
                             <td class="join_td">
                                 <input type="text" name="stuNumber" class="join_input_content" onfocus="join_onfocus_info('check_stuId')" onblur="join_onblur_stuId(this)" onchange="join_change_input()"></input>
                             </td>
                        </tr> 
                        <tr class="join_table_tr">
                            <td class="join_td">
                                <p>*&nbspE-mail</p>
                            </td>
                            <td class="join_td">
                                <input type="text" name="email" class="join_input_content" onfocus="join_onfocus_info('check_mail')" onblur="join_onblur_mail(this)" onchange="join_change_input()"></input>
                            </td>
                            <td class="join_td">
                                <p>*&nbsp电&nbsp&nbsp&nbsp话&nbsp&nbsp</p>
                            </td>
                            <td class="join_td">
                                <input type="text" name="phone" class="join_input_content" onfocus="join_onfocus_info('check_tele')" onblur="join_onblur_tele(this)" onchange="join_change_input()"></input>
                            </td>
                        </tr>   
                        <tr class="join_table_tr">
                            <td class="join_td">
                                <p>*&nbsp选择职位</p>
                            </td>
                            <td class="join_td">
                               <select name="position" class="join_select">
                                   <option class="join_select_option disabled" selected disabled>职位的名称</option>
                                   <option class="join_select_option">web前端</option>
                                   <option class="join_select_option">UI设计</option>
                                   <option class="join_select_option">php后端</option>  
                               </select>
                            </td>
                            <td class="join_td">
                                <p>&nbsp&nbsp性&nbsp&nbsp&nbsp别&nbsp&nbsp</p>
                            </td>
                            <td class="join_td">
                                <input type="radio" name="sex" value="male" class="join_radio" checked="checked"></input><span class="join_radio_span">   男</span>
                                <input type="radio" name="sex" value="female" class="join_radio"></input><span class="join_radio_span">   女</span>
                            </td>
                        </tr>
                        <tr class="join_table_tr">
                            <td class="join_td"style="border-bottom: none;">
                                <p>*&nbsp知识了解</p>
                            </td>
                        </tr>
                        <tr class="join_table_tr">
                            <td class="join_td" colspan="4" style="border-bottom: none;">
                                <textarea name="knowledge" class="join_textarea" maxlength="255" onfocus="join_textArea_focus(this)" onblur="join_textArea_blur(this)" onchange="join_change_input()">字数50~250</textarea>
                            </td>
                        </tr>
                        <tr class="join_table_tr">
                            <td class="join_td" colspan="4" style="border-bottom: none;">
                                <p>*&nbsp项目、校内经历</p>
                            </td>
                        </tr>
                        <tr class="join_table_tr">
                            <td class="join_td" colspan="4" style="border-bottom: none;">
                                <textarea name="experience" class="join_textarea" maxlength="255" onfocus="join_textArea_focus(this)" onblur="join_textArea_blur(this)" onchange="join_change_input()">字数50~250</textarea>
                            </td>
                        </tr>
                        <tr class="join_table_tr">
                            <td class="join_td"colspan="4" style="border-bottom: none;">
                                <p>*&nbsp自我评价、爱好、职业规划</p>
                            </td>
                        </tr>
                        <tr class="join_table_tr">
                            <td class="join_td" colspan="4" style="border-bottom: none;">
                                <textarea name="intro" class="join_textarea" maxlength="255" onfocus="join_textArea_focus(this)" onblur="join_textArea_blur(this)" onchange="join_change_input()">字数50~250</textarea>
                            </td>
                        </tr>
                        <tr class="join_table_tr">
                            <td class="join_submit" colspan="4">
                                <input type="submit" name="send" value="提交" class="join_submit_button"></input>
                            </td>
                        </tr>
                    </table>
                </form>                   
            </div>
        </div>
        <a href="#header" class="top"></a>
    </div>
    <script type="text/javascript" src = "__TMPL__/Index/home.js"></script>
    <script type="text/javascript" src="__TMPL__/Index/daren.js"></script>
    <script type="text/javascript">
        setInfo("maintenance",0);
        setInfo("codeMonkey",0);

        var m_obj = new mObject(m_title,m_content,2);
        var c_obj = new mObject(c_title,c_content,3);
        m_obj.init();
        c_obj.init();

        clickDot("maintenance","m-ul");
        clickDot("codeMonkey","c-ul");
    </script>
    </body>
</html>