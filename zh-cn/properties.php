<?php

$lang = array(
    'properties'           => '服务器设置',
    'prop_lang_def'           => '语言',
	'properties_successfully' => '成功完成',
'properties_not_permission' => '您没有足够的权限',
'properties_setting_server' => '服务器设置',
'properties_general' => '一般',
'properties_servers' => '服务器端',
'properties_mail' => '邮件',
'properties_data_time' => '日期和时间：',
    'properties_time' => '时间',
'properties_chanche' => '保存',
'properties_time_zone' => '服务器时区：',
'properties_sinhronisation' => '与临时服务器同步',
'properties_not_install' => '未安装',
'properties_install_enabled' => '安装并启用',
'properties_root_pwd' => 'root 密码',
'properties_sql_pwd' => 'BrainySQL 密码：',
'properties_local' => '语言环境：',
'properties_hostname' => '主机名：',
'properties_ru' => '俄语',
'properties_en' => '英语',
'properties_send_mail' => '发送邮件：',
'properties_phpmail' => 'phpmail',
'properties_smtp' => 'smtp',
'properties_headers' => '标题：',
'properties_mail_1' => '邮箱：',
'properties_pwd' => '密码：',
'properties_port' => '端口：',
'properties_smtp_server' => 'SMTP 服务器：',
'properties_k' => '编码：',
'properties_name_sender' => '发件人姓名：',
'properties_to_apply' => '保存',
'properties_cannot_open' => 'getFileList: 无法打开目录',
'properties_cannot_for_read' => '只读',
'properties_no_user' => '没有用户',
	'properties_in_unix' => '在 unix 中',
'properties_in_too_fast' => '你发布这个命令太快',
'properties_no_open_file' => '无法打开文件',
'properties_no_file' => '这里没有文件',
'properties_no_template' => '无效模板',
'properties_no_data_user' => '没有用户数据',
'properties_no_connect_db' => '连接 MySQL 时出错：',
'properties_wrong_query' => '无效请求：',
'properties_login_falled' => '登录必须填写',
'properties_login_letters' => '登录名不能超过 7 个字符',
'properties_login_already_exists' => '此登录名已存在',
'properties_pwd_filled' => '必须填写密码',
'properties_db_filled' => '必须填写数据库名称',
'properties_db_already' => '基础必须已满',
'properties_dbbrainy_chanche' => 'BrainySQL 密码更改成功',
'properties_chanche_lang' => '语言更改成功',
'properties_chanche_ok' => '更改成功',
'properties_chanche_pwd_ok' => '密码修改成功',

'properties_manage_htaccess' => '授权 htpasswd:',
'properties_manage_htaccess_set' => '安装',
'properties_manage_htaccess_del' => '禁用',
'properties_manage_htaccess_login' => '账号',
'properties_manage_htaccess_pass' => '密码',
'properties_manage_htaccess_pass_retype' => '重复密码',

	'properties_manage_htaccess_pass_short' => '密码必须至少为 5 个字符',
'properties_manage_htaccess_pass_not_match' => '密码不匹配',

'properties_manage_htaccess_set_ok' => '通过.htpasswd 添加授权',
'properties_manage_htaccess_del_ok' => '禁止通过.htpasswd 授权',

'properties_manage_htaccess_stat_on' => '启用',
'properties_manage_htaccess_stat_off' => '禁止通过.htpasswd 授权',

'properties_manage_htaccess_access_ip_list_d' => '禁止的 IP：',
'properties_manage_htaccess_access_ip_list_a' => '允许的 IP：',
'properties_manage_htaccess_accessip_denylist' => '请输入被拒绝的 IP',
'properties_manage_htaccess_accessip_allowlist' => '请输入允许的 IP',
'properties_manage_htaccess_accessip_setok' => 'IP 列表保存成功',
'properties_manage_htaccess_accessip_selfblock' => '此配置将阻止从您的 IP 访问',
'properties_manage_htaccess_accessip_wrongformat' => 'IP 格式无效',
'properties_server_email' => '管理员邮箱：',
'properties_server_email_success' => '管理员邮箱修改成功',
'properties_server_email_fail' => '更改管理员 EMAIL 时出错',
'properties_createindexondomain' => '创建新域时创建 index.html 页面',
'properties_load_logo' => '上传logo',
'properties_error_load' => '不支持图片格式',
'properties_error_move' => '保存图片失败',
'properties_succec_load' => 'logo更改成功',
'properties_edittimedenyVZ' => 'OpenVZ 虚拟化不支持时间更改',
    'properties_sql_pwd_hint' => 'Brainy数据库服务器的root密码，操作邮件账户、邮件客户端等数据库相关面板功能所需',
    'properties_htpasswd_hint' => '使用 htpasswd 设置访问 BrainyCP 管理面板的密码',
    'properties_htaccess_ip_allow' => '!!!注意，访问面板将针对此字段中列出的 ip，其他 ip 访问将被拒绝。<br> 编辑允许的 IP 列表 (htaccess) 以访问 BrainyCP 管理面板.在新行中指定由分隔符`;` 或`,` 或空格分隔',
    'properties_htaccess_ip_deny' => '编辑拒绝 IP 列表 (htaccess) 以访问 BrainyCP 管理面板。在新行中指定由分隔符`;` 或`,` 或`空格`分隔',
    'properties_pathedittemplate' => 'index.html模板路径：/usr/local/brainycp',
    'properties_pathedittemplate_2' => 'server_control/default_index.tpl',
    'properties_protect_forkbomb' => '用户进程',
    'properties_protect_forkbomb_hint' => '防止forkbomb 的最大用户进程数',
    'properties_protect_forkbomb_value_hint' => '请输入进程数',
    'properties_protect_forkbomb_value_hint_saveok' => '进程限制设置成功',
    'properties_error_symbol' => '禁止符号',

   'properties_keyauth_btn_gen' => '生成密钥',
    'properties_keyauth_btn_showexist' => '显示密钥列表',
    'properties_keyauth_btn_hideexist' => '隐藏密钥列表',
    'properties_keyauth_label' => '密钥授权',
    'properties_keyauth_public_label' => '公钥',
    'properties_keyauth_private_label' => '私钥',
    'properties_keyauth_listpublickey_label' => '公钥列表',
    'properties_keyauth_view' => '查看密钥',
    'properties_keyauth_delete' => '删除密钥',
    'properties_keyauth_labelnamefilekey' => '密钥文件名',
    'properties_keyauth_removeconfirmyes' => '是',
    'properties_keyauth_removeconfirmno' => '否',
    'properties_keyauth_removeconfirm_warning' => '删除公钥将无法从使用相应私钥的服务器连接到该服务器,确认删除?',
    'properties_keyauth_removeconfirmsuccess' => '公钥已从授权列表中删除',
    'properties_keyauth_nogenkeyyet' => '尚未生成密钥',

    'properties_template_title' => '模板',
    'properties_template_title_wrongchoice' => '无效的模板名称',
    'properties_template_setok' => '模板应用成功',
    'properties_ssh_port' => 'SSH 端口',
    'properties_ssh_port_hint' => '输入 SSH 端口',
    'properties_ssh_port_hint_stand' => '更改 SSH 端口',
    'properties_ssh_port_formatfailed' => '无效的 SSH 端口格式',
    'properties_ssh_port_saveok' => 'SSH 端口更改成功',
    'properties_empty_data' => '未填写必填字段',
    'properties_from_env' => '“发件人：”在信封中',
    'properties_to_env' => '“收件人：”在信封中',
    'properties_bcc' => '“密件抄送：”标题',
    'properties_cc' => '“抄送：”标题',
    'properties_from' => '“发件人：”标题',
    'properties_reply' => '“回复：”标题',
    'properties_sender' => '“发件人：”标题',
    'properties_to' => '“收件人：”标题',

    'propertiesWorkspace' => '将用户放入工作区',
    'propertiesWorkspaceHint' => 'Workspace 为用户创建一个单独的目录，在其中放置站点和日志文件夹。限制用户去上面这个/home/username/workspace 目录.激活/停用仅影响参数更改后新添加的用户',

    'properties_server_port_ok' => '面板端口更改成功,如需进一步访问，请使用 ',
    'properties_server_port_error' => '指定的端口值不可用,使用 90-65500 范围内的端口',
    'properties_server_port_busy' => '您选择的端口被占用',
    'properties_server_abort_root_slose' => 'root 用户已拒绝访问面板',
    'properties_server_abort_root_open' => 'root 用户访问面板已打开',
    'properties_tpl_abort_root' => '打开/关闭 root 用户对面板的访问',
    'properties_clear_fastsearche' => '更新面板搜索索引',
    'properties_webpanel' => '访问面板域名',
    'properties_error_domain' => '无效域名',
    'properties_abort_root_warning' => '拒绝,首先创建一个具有管理员权限的用户，否则将无法访问面板',
    'properties_error_webpanel' => 'Web 面板必须与主机名在同一区域',
    'properties_sendmailok' => '邮件发送成功',
    'properties_sendTabTitle' => '邮件标题:',
    'properties_sendEncode' => '编码',
    'properties_sendFromWho' => '发送邮箱',
    'properties_sendReplyTo' => '回复邮箱',
    'properties_sendFromWhoName' => '发送名字',
    'properties_sendReplayToName' => '回复名字',
    'properties_sendTabMail' => '邮件',
    'properties_sendTest' => '发送',
    'properties_sendTestTitle' => '测试发送',
    'properties_sendYourTestmail' => '您的电子邮件',
    'properties_sendYourTestSubject' => '测试从 Brainy 服务器发送',
    'properties_sendYourTestMail' => '您已收到此邮件，因此发送配置正确',
    'properties_SMTPfailed' => '无法连接到 SMTP。检查指定的邮箱、密码。如果使用第三方服务，例如 gmail，请检查新设备连接的阻止',
    'properties_failedSMTPuser' => '授权字段的邮箱格式无效',
    'properties_failedSMTPPort' => '无效的 SMTP 端口字段格式',
    'properties_failedSMTPHost' => '无效的 SMTP 服务器字段格式',
    'properties_failedFromE' => '发件人字段的电子邮件格式无效',
    'properties_failedFromName' => '发件人名称字段的格式无效',
    'properties_failedReplyE' => '字段回复电子邮件的格式无效',
    'properties_failedReplyName' => '回复您的姓名字段的格式无效',
    'properties_failedEncode' => '无效的编码字段格式',
    'properties_failedemailFieldTest' => '测试发送的电子邮件格式无效',
    'properties_failedemailFieldTestEmtpy' => '输入电子邮件进行测试发送',
    'properties_hintIfFailedHelp' => '如果连接错误.<br/>例如gmail：在您要发送的帐户下授权，请检查：<br/> 1. <a target=`_blank` href=`https://myaccount.google.com/device-activity?hl=en&pli=1`> 最近的设备</a> <br/> 2. <a target=`_blank` href=`https://myaccount.google.com/u/0/lesssecureapps`> 安全性</a> <br/> 3. <a target=`_blank` href=`https://accounts.google.com/b/0/DisplayUnlockCaptcha`> 解锁验证码 </a> ',
    'properties_hintHelpConfig' => '通过 SMTP 发送邮件的设置：<br/> 当前服务器：端口：587，SMTP 服务器：localhost <br/> gmail.com 服务器：端口：587，SMTP 服务器：smtp.gmail.com' ,
    'properties_error_user' => '用户错误',
    'properties_forbiden_users' => '禁止用户',
    'properties_forbiden_users_label' => '拒绝的用户名列表：',
    'properties_noconf' => '配置尚未保存',
    'properties_server_abort_root_close' => 'root 用户拒绝访问面板',
    'properties_weppanel_alredy_exist' => '域名被用户占用',
    'properties_weppanel_alredy_exist2' => 'webpanel 采用的域名',
    'propertiesRefreshQuotaAll' => '重建用户配额',
    'propertiesRefreshQuotaAllConfirm' => '重新初始化用户配额？',
    'propertiesRefreshQuotaAllHint' => '如果配额系统失败，您需要根据主机帐户配置中记录的数据重建配额',
    'propertiesRefreshQuotaAllOk' => '配额重建成功',
    'properties_rewrite_webpanel_https' => 'Webpanel 重定向 http -> https',
    'properties_rewrite_error' => '未指定网页面板',
    'properties_rewrite_error_not_ssl' => '重定向错误,ssl 证书未安装在 webpanel 上证书中',
    'properties_load_Favicon' => '上传favicon',
    'properties_error_load_fav' => '不支持图片格式',
    'properties_error_move_fav' => '保存图片失败',
    'properties_succec_load_fav' => 'Favicon 更改成功',
    'properties_apiIpAllow' => '允许通过 API 访问面板的 IP',
    'properties_apiIpAllowHint' => 'API 访问面板的允许 IP。示例：192.168.1.12,在新行中指定由分隔符`;` 或`,` 或`space`分隔',
    'properties_apiIpAllowHintPlace' => '请输入允许的 IP',
    'properties_manageApiallowlistsaveok' => 'API 的 IP 列表保存成功',
    'properties_safety' => '安全',
    'properties_portbrainy' => '端口',
    'properties_portbrainyssl' => 'SSL端口',
    'properties_others' => '其他',
    'properties_sendmailnotinstall' => 'PHP 命令错误邮件。请安装<a target=_blank href=/index.php?do=mailserver&module=massinstall>邮件服务</a>',
    'properties_connect_key' => '密钥',
    'properties_webpanel_brainy' => '通过域访问智能面板，指定无端口域名',
'properties_login_letters1' => '数据库登录不能超过 16 个字符，包括前缀',

);

?>
