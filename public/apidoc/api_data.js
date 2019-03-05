define({ "api": [
  {
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "optional": false,
            "field": "varname1",
            "description": "<p>No type.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "varname2",
            "description": "<p>With type.</p>"
          }
        ]
      }
    },
    "type": "",
    "url": "",
    "version": "0.0.0",
    "filename": "Honeybee/public/apidoc/main.js",
    "group": "D__XAMPP_htdocs_Honeybee_public_apidoc_main_js",
    "groupTitle": "D__XAMPP_htdocs_Honeybee_public_apidoc_main_js",
    "name": ""
  },
  {
    "type": "post",
    "url": "/memo/add",
    "title": "发布memo",
    "group": "memo",
    "version": "1.0.0",
    "name": "add",
    "description": "<p>发布memo</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "title",
            "description": "<p>标题</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "account",
            "description": "<p>详情</p>"
          },
          {
            "group": "Parameter",
            "type": "Int",
            "optional": false,
            "field": "type",
            "description": "<p>类型  (0-&gt;默认, 1-&gt;工作, 2-&gt;学习, 3-&gt;娱乐)</p>"
          },
          {
            "group": "Parameter",
            "type": "Int",
            "optional": false,
            "field": "level",
            "description": "<p>级别  (0-&gt;普通, 1-&gt;一般, 3-&gt;重要</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "返回样例：",
          "content": "{\"code\":1,\"msg\":\"发布成功\",\"data\":null}",
          "type": "json"
        }
      ]
    },
    "filename": "Honeybee/application/api/controller/Memo.php",
    "groupTitle": "memo"
  },
  {
    "type": "post",
    "url": "/user/login",
    "title": "用户登录",
    "group": "user",
    "version": "1.0.0",
    "name": "login",
    "description": "<p>用户登录</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "account",
            "description": "<p>账号</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>密码</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "返回样例：",
          "content": "{\"code\":1,\"msg\":\"登录成功\",\"data\":{\"token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJIeVpoYW4iLCJpYXQiOjE1NTE3NzkwMzMsImV4cCI6MTU1MTg2NTQzMywidWlkIjoxM30.ia6dV4jzD2NKHhKW11W9KhYJsYommFuyOb7XOzLnz_s\"}}",
          "type": "json"
        }
      ]
    },
    "filename": "Honeybee/application/api/controller/Account.php",
    "groupTitle": "user"
  },
  {
    "type": "post",
    "url": "/user/register",
    "title": "用户注册",
    "group": "user",
    "version": "1.0.0",
    "name": "register",
    "description": "<p>用户注册</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "account",
            "description": "<p>账号</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>密码</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "返回样例：",
          "content": "{\"code\":1,\"msg\":\"注册成功\",\"data\":null}",
          "type": "json"
        }
      ]
    },
    "filename": "Honeybee/application/api/controller/Account.php",
    "groupTitle": "user"
  }
] });
