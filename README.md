# ThinkPHP-5.1
 
 基于 ThinkPHP 5.1 通用脚手架   API 参数验证功能 和 自定义错误抛出功能
 
  # 实现功能
  基于API规范 参数验证功能
  ~~~
  // 开启验证
  (new 自定义验证类())->goCheck();
  // 未通过验证
  
  {
  "code":10000,
  "request":"GET: \/v1\/banner\ID",
  "msg":{
         "id":"ID 必须是正整数",
         "name":"name不能为空"
        }
  }
  
  ~~~
  
  基于API规范 自定义错误抛出功能
~~~
// 自定义抛出错误类
throw new BannerMissException();
// 抛出错误信息
{
    "code":10000,
    "request":"GET: \/v1\/banner\/ID",
    "msg":"参数错误"
}
~~~
