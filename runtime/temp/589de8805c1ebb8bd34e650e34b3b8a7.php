<?php /*a:2:{s:60:"C:\xampp\htdocs\test/application/index\view\index-index.html";i:1523603920;s:55:"C:\xampp\htdocs\test/application/index\view\layout.html";i:1523604036;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
    <title> 日志 </title>
    <link rel="stylesheet" href="static/frozen.css">
    <link rel="stylesheet" href="static/style.css">
    <script src="static/zepto.min.js"></script>
    <script src="static/frozen.js"></script>
</head>
<body>

<div class="task">
    <div class="ui-tab">
        <ul class="ui-tab-nav ui-border-b">
            <li class="current"> 待办 </li>
            <li> 已完成 </li>
            <li> 日志 </li>
        </ul>
        <ul class="ui-tab-content" style="width:300%">
            <li>
                <ul class="ui-list ui-list-function ui-border-tb">
                    <li>
                        <div class="ui-avatar">
                            <span style="background-image:url(http://placeholder.qiniudn.com/100x100)"></span>
                        </div>
                        <div class="ui-list-info ui-border-t">
                            <h4 class="ui-nowrap">ui-avatar</h4>
                            <p>双行头像</p>
                        </div>
                        <div class="ui-btn">PK</div>
                    </li>
                    <li>
                        <div class="ui-avatar">
                            <span style="background-image:url(http://placeholder.qiniudn.com/100x100)"></span>
                        </div>
                        <div class="ui-list-info ui-border-t">
                            <h4 class="ui-nowrap">ui-avatar</h4>
                            <p>双行头像</p>
                        </div>
                        <div class="ui-btn-s">PK</div>
                    </li>
                    <li>
                        <div class="ui-avatar">
                            <span style="background-image:url(http://placeholder.qiniudn.com/100x100)"></span>
                        </div>
                        <div class="ui-list-info ui-border-t">
                            <h4 class="ui-nowrap">ui-avatar</h4>
                            <p>双行头像</p>
                        </div>
                        <div class="ui-btn">PK</div>
                    </li>
                </ul>
            </li>
            <li>内容2</li>
            <li>


                <div class="ui-searchbar-wrap ui-border-b">
                    <div class="ui-searchbar ui-border-radius">
                        <i class="ui-icon-search"></i>
                        <div class="ui-searchbar-text">搜索号码（2-10位）</div>
                        <div class="ui-searchbar-input"><input value="" type="tel" placeholder="搜索号码（2-10位）" autocapitalize="off"></div>
                        <i class="ui-icon-close"></i>
                    </div>
                    <button class="ui-searchbar-cancel">取消</button>
                </div>


            </li>
        </ul>
    </div>
</div>
<script>
    (function (){
        var tab = new fz.Scroll('.ui-tab', {
            role: 'tab',
        });

        tab.on('beforeScrollStart', function(fromIndex, toIndex) {
            console.log(fromIndex,toIndex);
        })
    })();
</script>

<footer class="ui-footer ui-footer-btn">
    <ul class="ui-tiled ui-border-t">
        <li data-href="index.html" class="ui-border-r"><div> 任务 </div></li>
        <li data-href="ui.html" class="ui-border-r"><div> 项目 </div></li>
        <li data-href="ui.html" class="ui-border-r"><div> 规划 </div></li>
        <li data-href="js.html"><div> 总结 </div></li>
    </ul>
</footer>
</body>
</html>