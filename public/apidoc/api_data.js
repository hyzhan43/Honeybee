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
    "title": "发布",
    "group": "memo",
    "version": "1.0.0",
    "name": "add",
    "description": "<p>发布</p>",
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
      ],
      "fields": {
        "200": [
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<p>0  代表无错误 否则有错误</p>"
          },
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>信息</p>"
          },
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "data",
            "description": "<p>具体数据</p>"
          }
        ]
      }
    },
    "filename": "Honeybee/application/api/controller/Memo.php",
    "groupTitle": "memo"
  },
  {
    "type": "post",
    "url": "/memo/list/{page}",
    "title": "获取memo记录",
    "group": "memo",
    "version": "1.0.0",
    "name": "getList",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Int",
            "optional": false,
            "field": "page",
            "description": "<p>页数</p>"
          }
        ]
      }
    },
    "description": "<p>获取memo记录</p>",
    "success": {
      "examples": [
        {
          "title": "返回样例：",
          "content": "{\"code\":1,\"msg\":\"获取成功\",\"data\":{\"total\":8,\"per_page\":10,\"current_page\":1,\"last_page\":1,\"data\":[{\"id\":8,\"title\":\"标题2\",\"desc\":\"des2\",\"state\":0,\"type\":12,\"level\":12,\"user_id\":13,\"create_time\":\"1970-01-01 08:00:00\",\"update_time\":\"1970-01-01 08:00:00\"},{\"id\":9,\"title\":\"标题2\",\"desc\":\"des2\",\"state\":0,\"type\":12,\"level\":12,\"user_id\":13,\"create_time\":\"1970-01-01 08:00:00\",\"update_time\":\"1970-01-01 08:00:00\"},{\"id\":10,\"title\":\"标题2\",\"desc\":\"des2\",\"state\":0,\"type\":12,\"level\":12,\"user_id\":13,\"create_time\":\"1970-01-01 08:00:00\",\"update_time\":\"1970-01-01 08:00:00\"},{\"id\":11,\"title\":\"标题2\",\"desc\":\"des2\",\"state\":0,\"type\":12,\"level\":12,\"user_id\":13,\"create_time\":\"2019-03-05 22:56:47\",\"update_time\":\"2019-03-05 22:56:47\"},{\"id\":12,\"title\":\"标题2\",\"desc\":\"des2\",\"state\":0,\"type\":12,\"level\":0,\"user_id\":13,\"create_time\":\"2019-03-05 22:57:41\",\"update_time\":\"2019-03-05 22:57:41\"},{\"id\":13,\"title\":\"标题2\",\"desc\":\"des2\",\"state\":0,\"type\":0,\"level\":0,\"user_id\":13,\"create_time\":\"2019-03-05 22:57:50\",\"update_time\":\"2019-03-05 22:57:50\"},{\"id\":14,\"title\":\"   \",\"desc\":\"des2\",\"state\":0,\"type\":0,\"level\":0,\"user_id\":13,\"create_time\":\"2019-03-05 23:08:59\",\"update_time\":\"2019-03-05 23:08:59\"},{\"id\":15,\"title\":\"112123\",\"desc\":null,\"state\":0,\"type\":0,\"level\":0,\"user_id\":13,\"create_time\":\"2019-03-05 23:40:24\",\"update_time\":\"2019-03-05 23:40:24\"}]}}",
          "type": "json"
        }
      ],
      "fields": {
        "200": [
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<p>0  代表无错误 否则有错误</p>"
          },
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>信息</p>"
          },
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "data",
            "description": "<p>具体数据</p>"
          }
        ],
        "data": [
          {
            "group": "data",
            "type": "Int",
            "optional": false,
            "field": "total",
            "description": "<p>总页数</p>"
          },
          {
            "group": "data",
            "type": "Int",
            "optional": false,
            "field": "per_page",
            "description": "<p>一页的数量</p>"
          },
          {
            "group": "data",
            "type": "Int",
            "optional": false,
            "field": "current_page",
            "description": "<p>当前页数</p>"
          },
          {
            "group": "data",
            "type": "Int",
            "optional": false,
            "field": "last_page",
            "description": "<p>最后的页数</p>"
          },
          {
            "group": "data",
            "type": "List",
            "optional": false,
            "field": "data",
            "description": "<p>详细数据</p>"
          }
        ]
      }
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
      ],
      "fields": {
        "200": [
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<p>0  代表无错误 否则有错误</p>"
          },
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>信息</p>"
          },
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "data",
            "description": "<p>具体数据</p>"
          }
        ]
      }
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
      ],
      "fields": {
        "200": [
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "code",
            "description": "<p>0  代表无错误 否则有错误</p>"
          },
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "msg",
            "description": "<p>信息</p>"
          },
          {
            "group": "200",
            "type": "String",
            "optional": false,
            "field": "data",
            "description": "<p>具体数据</p>"
          }
        ]
      }
    },
    "filename": "Honeybee/application/api/controller/Account.php",
    "groupTitle": "user"
  }
] });
