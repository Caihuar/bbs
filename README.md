﻿项目名称： 自驾旅游网站

开发时间： 2017.06—2017.12

开发环境： Windows + PHP + mysql  + apache

项目描述： 基于TP框架开发，小型旅游论坛，实现用户注册登录，评论，增删文章，后台管理、会员管理等功能

责任描述：
	文章的添加，修改与显示

	实现会员列表展示，会员删除，积分管理功能

	实现管理员管理，设置角色组，设置访问权限功能

	评论和回复，点赞功能的实现，回复积分奖励机制

技术要点：
1. 会员管理：会员列表显示，列表分页，会员伪删除，会员积分管理，实现ajax增删改查

2. 权限管理：操作登录界面录入正确的用户名称和密码以及验证码信息后，再经过系统处理后才能进入管理   平台进行操作

3. 用户注册：注册用户调用邮件接口，用户注册后发送邮件给用户，激活地址中附带一个密钥，密钥核对正确则用户激活。完成修改密码功能，通过唯一的用户名和邮箱，并且用户注册时添加的问题回答正确则发送邮件，允许用户修改密码。

4. 用户登录：登录提交数据由TP框架中的自动验证功能来完成验证，定义动态的验证规则。先验证账号密码验证码是否为空（TP中验证验证码的方法只能调用一次，调用验证后会置空验证码），在模型中定义方法，校检用户名和密码是否正确，效验成功后将信息保存在session中。
