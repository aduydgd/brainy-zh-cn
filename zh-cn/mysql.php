<?php

$lang = array(
    'msg_js_mysql_status' => '停止',
    'msg_mysql_error_num_db' => '错误,您已达到最大数量',
    'msg_mysql_ok_priv' => '已应用权限',
    'msg_mysql_err_check_db' => '数据库检查失败',
    'msg_mysql_err_check_user' => '检查用户时出错',
    'msg_mysql_ok_user_del' => '用户删除成功',
    'msg_mysql_err_user_del' => '无效的用户名',
    'msg_mysql_ok_db_del' => '数据库删除成功',
    'msg_mysql_err_db_del' => '删除数据库时出错',

    'tpl_remove_delete' => '删除',
    'tpl_remove_configure' => '配置',
    'tpl_main_menu_mysql' => 'MySql',
    'tpl_main_menu_process' => 'MySql 进程列表',
    'tpl_mysql_nomysql' => '未安装',
    'tpl_mysql_nomyadmin' => '未安装',
    'tpl_mysql_more' => '更多详情',
    'tpl_mysql_hidden' => '隐藏',
    'tpl_mysql_status_info' => 'MySql 状态：',
    'tpl_mysql_cnf_save' => '保存',
    'tpl_mysql_install_phpadmin' => '安装 phpMyAdmin',
    'tpl_mysql_phpadmin_status' => 'phpmyadmin 状态',
    'tpl_mysql_myadmin_install' => '安装',
    'tpl_mysql_nodb' => '没有添加数据库',
    'tpl_mysql_add_user' => '添加用户',
    'tpl_mysql_add_db' => '添加数据库',
    'tpl_mysql_jmp_promptly' => '立即转到 phpMyAdmin',
    'tpl_mysql_jmp_pass' => '使用密码进入 phpMyAdmin',
    'tpl_mysql_jmp_only' => '转到 phpMyAdmin',
    'tpl_mysql_select_all' => '检查所有',
    'tpl_mysql_external_access' => '打开外部访问',
    'tpl_mysql_external_access_all' => '打开对任何 IP 的外部访问',
    'tpl_mysql_no_user' => '未添加用户',

    'tpl_mysql_no_user_select' => '没有用户',
    'tpl_mysql_no_base_select' => '无数据库',
    'tpl_mysql_hide' => '隐藏',
    'tpl_mysql_name' => 'MySQL',
    'tpl_mysql_version' => 'MySql 版本：',
    'tpl_mysql_reinstall' => '重新安装',
    'tpl_mysql_for_expert' => '高级',
    'tpl_mysql_for_user' => '用户',
    'tpl_mysql_passwd_rename' => '密码正在更改,请等一下',
    'tpl_mysql_update' => '更新',
    'tpl_mysql_update_force' => '强制更新',

    'js_mysql_delete' => '正在删除...',
    'js_mysql_install' => '正在安装...',
    'js_mysql_passwd_file' => '请填写密码字段',
    'js_mysql_install_pass' => '安装完成',
    'js_mysql_remove_pass' => '删除完成',
    'js_mysql_no_install' => '未安装',
    'js_mysql_no_error' => '没有错误',
    'js_mysql_error' => '错误：',
    'js_mysql_process_done' => '进程开始请稍候...',
    'js_mysql_check_msg' => '密码正在更改,不要操作mysql服务器',
    'js_mysql_server_notwork' => 'Mysql 服务器已关闭,请联系您的管理员',
    'js_mysql_db_noconnect' => '连接数据库时出错,请联系您的管理员',
    'js_mysql_db_nodata' => '数据传输错误,稍后再试',
    'js_mysql_db_nodata_nopass' =>' 新密码不能为空,请输入新密码',
    'js_mysql_passwd_root' => 'mysql root 密码已更改',
    'js_mysql_change_config' => '服务器 mysql 配置已更改',
    'js_mysql_restore_config' => '恢复默认配置',
    'mysql_show_all_users' => '显示所有用户',
    'mysql_show_error_users' => '用户为空',
    'mysql_show_error_root' => '您没有足够的权限删除 user_edit',
    'mysql_show_all_db' => '显示用户数据库',
    'mysql_show_error_db' => '数据库为空',
    'mysql_name_user_db_error' => '用户名为空',
    'mysql_pwd_user_db_error' => '数据库用户密码为空',
    'mysql_not_name_db' => '必须填写数据库名称',
    'mysql_add_user_ok' => '用户已添加',
    'mysql_not_work_mysql' => 'mysql不工作',
    'mysql_not_root_password' => '无效的 mysql 根密码,请联系管理员',
    'mysql_user_exist' => '用户存在',
    'mysql_add_db_ok' => '数据库已创建',
    'mysql_add_db_exists' => '数据库存在',
    'mysql_list_privilegies' =>' 权限列表',
    'mysql_not_privilegies' =>' 用户没有权限,权限列表为空',
    'mysql_not_write_privilegies' => '权限写错',
    'mysql_not_ip_parce' => 'IP 地址无效',
    'mysql_not_edit' => '试图编辑不属于我的数据',

    'mysql_adddb_wrongformat' => '请只使用字母 a-z 和数字 0-9',

    'mysql_adddb_emptypass' => '请填写密码',

    'mysql_adddb_failed_overlimit' => '超出数据库限制,最大数据库数',

    'mysql_manage_db' => 'MySQL 数据库',

    'mysql_select_usermain' => '选择用户',
    'mysql_listdb_user' => '数据库',
    'mysql_loaddata_pleasewait' => '请稍候',
    'mysql_user_notselect' => '没有添加或选择用户',

    'mysql_run_isok' => '运行',
    'mysql_run_isfailed' => '停止',

    'mysql_intalling' => '安装进行中',
    'mysql_intalling_successfully' => '安装完成',

    'mysql_phpmyadmin_ver' => '版本',
    'mysql_phpmyadmin_demo' => '!!! PHPMYADMIN 在演示版中不可用',
    'mysql_phpmyadmin_demo_2' => '它将在普通版本中可用',
    'mysql_message_remove_mysql' => '当您卸载 mysql 时，邮件服务和邮件将不可用',
    'mysql_message_remove_mysql_2' => '安装或重新安装 mysql 时，邮件服务将被暂时禁用',
    'mysql_message_stop_mysql' => '当你停止 mysql 时，邮件服务将不可用',
    'mysql_exit' => '取消',
    'mysql_continue' => '继续',
    'mysql_change_password' => '更改密码',
    'mysql_short_password' => '密码少于 6 个字符',
    'mysql_succecfully' => '完成',
    'mysql_disabled_mysqld' => '当 mysqld 服务被禁用时，这个动作是不可能的',
    'mysql_root_password' => 'root 密码：',
    'mysql_root_password_show' => '显示',
    'mysql_root_password_hide' => '隐藏',
    'mysql_confirm_remove_user' => '确认删除用户',
    'mysql_confirm_remove_db' => '确认数据库删除',
    'mysql_control_db' => '数据库服务器管理',
    'mysql_version' => '数据库版本：',
    'mysql_control' => '服务器控制',
    'mysql_status' => '数据库状态：',
    'mysql_vers' => '版本',
    'mysql_controm_phpmyadmin' => '控制 phpMyAdmin',
    'mysql_welcome' => '欢迎来到',
    'mysql_autorisation' => '授权',
    'mysql_user' => '用户：',
    'mysql_pass' => '密码：',
    'mysql_input' => '登录',
    'mysql_sintax_error' => '语法错误 my.cnf',
    'mysqlPhpMyAdminGetVersion' => '检查更新',
    'mysqlPhpMyAdminAvailNewVersion' => '有新版本可用',
    'mysqlPhpMyAdminAvailNewVersionNot' => '最新版本的 phpMyAdmin 已经安装',
    'mysqlPhpMyAdminAvailNewVersionNotIns' => '首先你需要安装',
    'mysqlPhpMyAdminNewVersionInstall' => '更新',
    'mysqlPhpMyAdminUpdateOk' => '更新成功',
    'mysql_download_dump' => '下载转储',
    'mysql_download_dump_error' => '下载文件时出错',
    'mysql_download_dump_error_type' => '文件类型错误,有效类型为 sql ',
    'mysql_download_dump_error_connect' => '连接数据库时出错',
    'mysql_download_success' => '成功完成',
    'mysql_download_table_already_exists' => '数据库中有转储表',
    'mysql_download_not_db_user' => 'base 不属于用户',
    'mysql_empty_remote_ip' => '要开启远程访问，必须添加外部ip',
    'mysql_installonpostg' => '安装/启用 Postgresql →',
);

?>
