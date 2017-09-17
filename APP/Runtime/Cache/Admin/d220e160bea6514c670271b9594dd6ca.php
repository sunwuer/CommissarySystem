<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台</title>
    <link rel="stylesheet" href="<?php echo (C("BOOTSTRAP_CSS_URL")); ?>bootstrap.css">
    <script src="<?php echo (C("BOOTSTRAP_JS_URL")); ?>jquery.min.js"></script>
    <script src="<?php echo (C("BOOTSTRAP_JS_URL")); ?>bootstrap.js"></script>
</head>
<body>
<div class="container">
    <form action='' method="post">
        <p>
            系统状态:
            <label>
                <input type="radio" name="switch" value="off" <?php if(($conInfo["con_switch"]) == "off"): ?>checked<?php endif; ?>>关
            </label>
            <label>
                <input type="radio" name="switch" value="on" <?php if(($conInfo["con_switch"]) == "on"): ?>checked<?php endif; ?>>开
            </label>
        </p>
        <p>
            命名规则: <br>
            <input type="text" name="grade" value="<?php echo ($conInfo["con_grade"]); ?>"/>
            <input type="text" name="major" value="<?php echo ($conInfo["con_major"]); ?>"/>
            <input type="text" name="" disabled value="姓名"/>
            <input type="text" name="course" value="<?php echo ($conInfo["con_course"]); ?>"/>
            <input type="text" name="course_type" value="<?php echo ($conInfo["con_course_type"]); ?>"/>
            <input type="text" value="<?php echo ($conInfo["con_date"]); ?>"/>
        </p>

        <p>
            作业说明: <br/> <textarea class="form-control" name="request"><?php echo ($conInfo["con_request"]); ?></textarea>
        </p>
        <p>
            保存根路径:<input disabled type="text" name="save_path_root" value="<?php echo ($conInfo["con_save_root"]); ?>"/>如
            ./file/(相对路径)
        </p>
        <p>
            保存文件夹:<input type="text" name="save_path" value="<?php echo ($conInfo["con_save_path"]); ?>"/>如
            ./file/(相对路径)
        </p>

        <p>文件名示例: <?php echo ($fileSaveName); ?>.doc</p>
        <input style="width: 100%" class="btn btn-success" type="submit"
               value="保存修改">
    </form>

    <div class="other">
        <hr>
        <a class="btn btn-primary btn-sm" onclick="javascript:return confirm('确定要打包吗?');"
           href="<?php echo U('UpWorkConsole/compressFile');?>">文件打包</a>
        <a class="btn btn-primary btn-sm" onclick="javascript:return confirm('确定要下载文件吗?');"
           href="<?php echo U('UpWorkConsole/downloadFile');?>">文件下载</a>
        <hr>
        <a class="btn btn-primary btn-sm" onclick="javascript:return confirm('确定要删除吗?');"
           href="<?php echo U('UpWorkConsole/deleteAllFile');?>">删除服务器全部文件</a>
        <a class="btn btn-primary btn-sm" onclick="javascript:return confirm('删除压缩文件?');"
           href="<?php echo U('UpWorkConsole/delCompressFile');?>">删除压缩缓存</a>
    </div>
</div>


</body>
</html>