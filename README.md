getM.cpp ——获取服务器状态（CPU占用率+内存消耗），以JSON格式输出信息
------------------------------
use.txt ——创建一个crontab定时任务，每分钟触发一次xxx.sh
------------------------------
xxx.sh ——以1s为间隔触发PHP脚本
------------------------------
getM.php ——运行getM.cpp程序，获取其JSON格式输出的字符串，转换成对象，修改数据库服务器中的服务器状态字段
------------------------------

【环境】  
只要PHP可以连接数据库即可  

【使用】  
1.在/var/www/html创建oj目录，复制进去程序  
2.编译c++程序: g++ getM.cpp -o get  
3.按照use.txt创建crontab定时任务  
4.配置好getM.php中的数据库相关信息，修改其中的数据表  

【参考博客】  
linux的sleep()和usleep()的使用和区别  
https://www.cnblogs.com/leijiangtao/p/4017995.html  
cronb 每1s执行  
https://www.cnblogs.com/shengulong/p/9099992.html  
C++获取服务器资源消耗状态  
https://blog.csdn.net/nineday/article/details/1928847  

【注解】  
1.本模块用途是——每1s获取集群中每台计算server资源消耗状态，更新到数据库服务器上，在消息队列处理逻辑中，将通过排序选择最优的计算服务器下派计算任务  
2.第一次用github。。有些地方还请多多见谅QAQ
