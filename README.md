# 一言 API
基于 PHP 的一言API

### 环境要求
+ PHP 5.7+ 

### 安装部署
[下载](https://github.com/rvvcim/hitokoto/archive/main.zip)源码上传至你的网站目录解压，将解压出来的文件夹改名为 hitokoto 。

浏览器访问 https://yourdomain/hitokoto/ 就可以看见输出内容。

### 调用方法
+ PHP调用

将下面内容加入PHP头部：

```
<?php $hitokoto = file_get_contents('https://yourdomain/hitokoto/'); ?>
```
然后在需要调用一言的位置加入：
```
<?php echo $hitokoto; ?>
```
+ HTML调用

打开`/hitokoto/`目录下的`hitokoto.js`，将 https://yourdomain/hitokoto/ 改为你的域名
```
...
	var yy = new XMLHttpRequest();
	yy.open('get', 'https://yourdomain/hitokoto/'); //请改为你的调用地址
	yy.send();
...
```
然后在需要使用一言的位置加入代码即可
```
<span id="hitokoto"></span>
<script src="https://yourdomain/hitokoto/hitokoto.js" charset="utf-8"></script>

```
## 更多信息
本项目基于 FlyingSky 的 HitokotoAPI 修改
[原项目地址](https://github.com/FlyingSky-CN/HitokotoAPI)
