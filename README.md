### 必要部分（推荐）

- PHP，版本 `7.3`
- PHP 包管理器 **Composer**
- **PCRE** 库
- PHP 扩展 **Swoole**，版本 `4.4`
- 额外扩展：**PDO**、**Redis **   `>=4.0`
- SWOFT版本：`>=2.0.6`
- Mysql版本：`5.7`
- Nginx版本:`>=1.14`



###   安装流程

+ clone

+ .env文件 SWOFT_PATH为项目目录（例如：SWOFT_PATH=/www/swoft-SRPHP）

+ nginx root指向public/xadmin 

+ public/xadmin/admin/js/config.js 配置为所在项目

+ app/Http/Middleware/AuthMiddleware.php process方法注释掉除以下代码 （安装完成后解开注释）

  ```
  $response = $handler->handle($request);
  return $response;
  ```

+ php bin/swoft http:start 启动

+ my.cnf 加入[mysqld] sql_mode="NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION" 

+ 安装向导：浏览器地址:端口

+ 安装配置：输入配置

+ 安装完成：浏览器进入（ 域名/admin），账号admin，密码admin

+ 重新打开app/Http/Middleware/AuthMiddleware.php process方法注释及app/Aspect文件夹下文件注释



###  文件结构

+ app 

  + Annotation

  + Aspect //AOP

  + Common //基础

  + Console

  + Exception

  + Helper //助手

  + Http //http服务

  + InstallDb //mysql初始化文件

  + Listener //监听

  + Logic

    + System //系统模块逻辑层
    + local //本地模块逻辑层（安装模块会生成）

  + Migration

  + Model

    + Entity //实体

    + Model 

      + BaseService

      + System //系统模块数据处理
      + Local //本地模块的数据处理（安装模块时生成）

  + Process

  + Rpc

  + Task

  + Tcp

  + Utils

  + Validator

  + WebSocket

+ bin

+ config

  + properties //jwt
  + version //接口版本
  + 本地模块的配置目录、基础配置文件

+ database

+ public

  + xadmin

+ resource

+ runtime

+ test

+ vendor



http://localhost/admin/  admin  admin  测试地址。
