<div class="container-fluid" style="margin-top:150px;">
    <div class="row-fluid">
        <div class="span12">
            <form action="index.php?r=switch/register/register" method="post">
                <fieldset>
                    <legend>注册</legend>
                    <p>
                        <font style="letter-spacing:1px" color="#FF0000">
                            <?php
                            if(isset($result) && !empty($result))
                                echo '*'.$result;
                            ?>
                        </font>
                    </p>
                    <p>
                        <label>昵称:</label>
                    </p>
                    <p>
                        <input type="text" name="nickname" maxlength="31" placeholder="昵称"/>
                    </p>
                    <p>
                        <label>密码:</label>
                    </p>
                    <p>
                        <input type="password" name="password"/>
                    </p>
                    <p>
                        <label>确认密码:</label>
                    </p>
                    <p>
                        <input type="password" name="password_compire"/>
                    </p>
                    <p>
                        <label>电话号码:</label>
                    </p>
                    <p>
                        <input type="text" name="phone" pattern="[0-9]{11}" placeholder="请输入正确的11位手机号码"/>
                    </p>
                    <p>
                        <label>邮箱:</label>
                    </p>
                    <p>
                        <input type="email" name="email" placeholder="请输入正确的邮箱地址"/>
                    </p>
                    <p>
                        <label>性别:</label>
                    </p>
                    <p>
                        <INPUT type="radio" name="sex" value=1>男
                        <INPUT type="radio" name="sex" value=0 checked="checked">女
                    </p>
                    <p>
                        <label>出生日期:</label>
                    </p>
                    <p>
                        <input name="birthday" id="EntTime" onclick="return showCalendar('EntTime', 'y-mm-dd');" value="<?php date("Y-m-d", time());?>" class="dateInput" placeholder="1990-01-01"/>
                    </p>
                    <p>
                        <button class="btn" type="submit">提交</button>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/js/Datepicker/calendar.js"></script>
<script type="text/javascript" src="/static/js/Datepicker/calendar-setup.js"></script>
<script type="text/javascript" src="/static/js/Datepicker/calendar-zh.js"></script>
<script>
    //日期
    function selected(cal, date) {
        cal.sel.value = date;
        if (cal.dateClicked && (cal.sel.id == "sel1" || cal.sel.id == "sel3")) {
            cal.callCloseHandler();
        }
    }
</script>