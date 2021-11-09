# brainy-zh-cn
brainy主机控制面板-zh-cn汉化包
基于官方 1.0930 最新版本制作

## 最低系统要求：
* 操作系统：CentOS 7 64 位，  CentOS 8 64 位
* 内存：最小 1GB
* 交换内存：最少 1GB
* 磁盘：根分区上 2GB /
* 处理器：最小266mhz
## 推荐的系统要求：
* 操作系统：CentOS 7 64 位，  CentOS 8 64 位
* 内存：2GB
* 交换内存：2GB
* 磁盘：根分区上 10GB /
* 处理器：最小266mhz
 ## 安装方法:
* 如果还没有安装面板，请复制下面安装命令进行安装
## 安装
* yum clean all && yum install -y wget && wget -O install.sh http://core.brainycp.com/install.sh && bash ./install.sh
## 自定义安装
* yum clean all && yum install -y wget && wget -O install.sh http://core.brainycp.com/install.sh && bash ./install.sh --package=apache2.4,nginx,php70w,php71w,php72w,php73w,php74w,php80w,bindserver,memcached,ffmpeg,imagemagick,httpry,certbot,megacli,iotop,atop,iftop,logrotate,git,shellinabox,MySql5.7,phpMyAdmin-4.9.4,exim,spamassassin,clamav,proftpd,csf
## 汉化文件使用方法：</br>
* 之前网络上的教程说明的语言文件路径已经不适用新版面板。</br>
 
* 目前主站最新版语言文件路径：/usr/local/brainycp/langs。</br>
 
* 直接下载语言文件夹，上传文件夹cn到目录langs中，然后登录面板在：</br>
* 控制板-服务器设置-其他设置（直接选择语言文件cn），保存后即可立即生效！</br>
  
* 尽量保留官方俄语语言文件ru，没有特殊情况不要删除。</br>
 
* 如果还需要文件管理器设置为中文，请留言告诉我，我抽时间进行汉化！
