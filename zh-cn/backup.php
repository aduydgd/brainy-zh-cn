<?php
    $lang = array(
       'backup' => '备份',
        'backuptitle' => '备份',

        'backup_nametask' => '任务名称',
        'backup_list_config' => '配置任务列表',

        'backup_remoteip' => '远程备份的服务器 IP',
        'backup_remote_login' => '账号',
        'backup_remote_pass' => '密码',
        'backup_remote_path' => '远程服务器上的文件夹',


        'backup_pathlocal' => '本地备份路径',
        'backup_type_arch_array' => '档案文件',
        'backup_type_arch_noarch' => '无压缩',
        'backup_type_arch_incr_no_arch' => '增量无压缩',
        'backup_type_simple_noarch' => '无压缩',
        'backup_type_arch_incr_tar' => '增量tar',


        'backup_type_arch_incr_noarch' => '增量无压缩',
        'backup_type_arch_tar' => 'tar',
        'backup_type_arch_simple_noarch' => '无压缩',
        'backup_repotype_local' => '本地目录',
        'backup_repotype_remote' => '远程服务器',
        'backup_repotype_ftp' => 'FTP',
        'backup_repotype_YandexDisk' => 'Yandex 磁盘',
        'backup_repotype_GoogleDrive' => 'GoogleDrive',
        'backup_repotype_GDrive' => 'GDrive',
        'backup_repotype_Dropbox' => 'Dropbox',



        'backup_period' => '期间',
        'backup_period_day' => '每日',
        'backup_period_week' => '每周',
        'backup_period_month' => '每月',

        'backup_time_start' => '开始时间',
        'backup_count_backupsday' => '每日备份',
        'backup_count_backupsweek' => '每周备份',
        'backup_count_backupsmonth' => '每月备份',

        'backup_level_compress' => '压缩级别',
        'backup_level_compress_default' => '默认',

        'backup_repo' => '存储类型',
        'backup_repo_local' => '本地目录',
        'backup_repo_remote' => '远程服务器',
        'backup_repo_typeauth' => '授权类型',
        'backup_repo_typeauthpass' => '通过密码',
        'backup_repo_typeauthkey' => '按密钥',
        'backup_repo_inputkey' => '公钥',
        'backup_repo_inputkey_private' => '私钥',
        'backup_path_to_restore' => '恢复路径',
        'backup_repo_btngeneratekey' => '生成密钥',
        'backup_rsync_speed_limit_kb' => '以 kb/s 为单位限制速度',
        'backup_save' => '保存',
        'backup_update' => '更新',
        'backup_delete' => '删除',
        'backup_delete_success' => '配置删除成功',
        'backup_delete_unsuccess' => '删除配置时出错',
        'backup_add_task' => '添加任务',
        'backup_save_success' => '保存成功',
        'backup_create_pleasewait' => '备份正在进行',
        'backup_restoring_pleasewait' => '备份正在恢复',
        'backup_restoreto_now_dir' => '恢复到：',

        'backup_createarch' => '创建备份到 tar',
         'backup_createarch_success' => '备份到 tar 已成功创建',
         'backup_createarch_unsuccess' => '在 tar 中创建备份时出错',
         'backup_create_inprogress' => '正在创建备份：',
         'backup_create_speed' => '速度：',
         'backup_estimated_time_remaining' => '剩余时间：',

         'backup_create_backup_now' => '现在开始创建备份',
        'backup_namebackup' => '标题',
        'backup_datebackup' => '日期',
        'backup_sizebackup' => '大小',
        'backup_option_t' => '选项',
        'backup_download' => '下载备份',
        'backup_restore' => '恢复',
        'backup_size_ci' => 'Mb',
        'backup_not_perm' => '无权限',
        'backup_error_connect_remote_key' => '远程服务器密钥授权错误',
        'backup_error_connect_remote_pass' => '远程服务器密码授权错误',
        'backup_name_config' => '备份作业名称',
        'backup_ip_remote_server' => '远程服务器的IP',
        'backup_check_connect_remote_server' => '检查连接',
        'backup_check_connect_remote_server_ok' => '连接成功建立',
        'backup_check_connect_remote_server_failed' => '连接失败！',
        'backup_please_wait_conn' => '请稍候',
        'backup_list_users' => '用户列表',
        'backup_make_for_all_users' => '为所有用户创建备份',
        'backup_manager_files' => '选择性文件恢复',
        'backup_manager_files_title' => '管理备份文件',
        'backup_manager_files_no_perm' => '您无权访问此目录',
        'backup_manager_restorefile_path' => '请指定恢复文件的路径',
        'backup_manager_restoredir_path' => '请指定恢复文件夹的路径',
        'backup_manager_restorefile_path_start_modal' => '开始'，
        'backup_manager_db' => '选择性恢复',
        'backup_manager_db_list' => '数据库列表',
        'backup_manager_dbuser_list' => '数据库用户列表',
        'backup_namebackup_db' => 'Base',
        'backup_namebackup_db_download' => '下载',
        'backup_namebackup_db_restore' => '恢复',
        'backup_namebackup_dbuser' => '用户',
        'backup_restore_selusers' => '恢复选定的用户',
        'backup_restore_seldbs' => '恢复选定的数据库',
        'backup_download_seldbs' => '准备选定的数据库',
        'backup_db_copy_inprogress' => '数据库正在准备下载',
        'backup_db_copy_done' => '基地准备好启动',
        'backup_db_restoreing' => '数据库正在恢复',
        'backup_db_restoreing_finish' => '数据库恢复',
        'backup_dbuser_restoreing' => '用户正在恢复',
        'backup_dbuser_restoring_finish' => '用户已恢复',
        'backup_db_select_all' => '全选',
        'backup_db_denywrite_backups' => '拒绝写入备份',
        'backup_restoring_start' => '恢复开始',
        'backup_no_saved_config' => '没有保存配置',
        'backup_hist_nameconf' => '恢复配置名称',
        'backup_hist_typerest' => '恢复类型',
        'backup_hist_start_rest' => '开始时间',
        'backup_hist_end_rest' => '结束时间',
        'backup_history_stat_rest_progress' => '正在恢复中',
         'backup_history_stat_rest_end' => '恢复完成',
         'backup_viewlog' => '查看日志',
         'backup_full_copy_inprogress' => '正在准备下载完整备份',
         'backup_full_copy_done' => '完整备份已准备好下载',
         'backup_saversa' => '保存密钥',
         'backup_keysavenew_ok' => '密钥保存成功',
         'backup_start_restore_el' => '恢复正在进行中,有关“还原历史记录”选项卡的更多详细信息',
         'backup_download_prepare_arch' => '下载准备好的备份',


        'backup_nameconf' => '名称',
        'backup_pathfold' => '备份路径',
        'backup_type_arch' => '备份类型',

        'backup_config_edit' => '编辑',
        'backup_config_remove' => '删除',

        'backup_cancel_update_conf' => '取消',
        'backup_timeconf' => '日期',
        'backup_weekly_mon_full' => '星期一',
        'backup_weekly_mon_short' => '星期一',
        'backup_weekly_tue_full' => '星期二',
        'backup_weekly_tue_short' => '星期二',
        'backup_weekly_wed_full' => '星期三',
        'backup_weekly_wed_short' => '星期三',
        'backup_weekly_thu_full' => '星期四',
        'backup_weekly_thu_short' => '星期四',
        'backup_weekly_fri_full' => '星期五',
        'backup_weekly_fri_short' => '星期五',
        'backup_weekly_sat_full' => '星期六',
        'backup_weekly_sat_short' => '星期六',
        'backup_weekly_sun_full' => '星期日',
        'backup_weekly_sun_short' => '星期日',
        'backup_weekly_short_arr' => array('周一、周二、周三、周四、周五、周六、周日'),
        'backup_weekly_select_days' => '选择一周中的哪天开始',
        'backup_monthly_select_date' => '指定开始日期',

       'backup_pathlocaldir_wrong' => '无效的备份文件夹格式',
        'backup_pathremotedir_wrong' => '远程备份文件夹格式无效',
        'backup_remoteip_wrong' => '远程服务器的 IP 格式无效',
        'backup_typearch_wrong' => '无效的存档类型格式',
        'backup_repo_wrong' => '无效的备份类型',
        'backup_remote_login_wrong' => '无效的登录格式',
        'backup_nametask_wrong' => '无效的任务名称格式',
        'backup_period_wrong' => '无效的期间格式',
        'backup_time_start_wrong' => '开始时间格式无效,必须采用 00:00:00 格式',
        'backup_weekly_days_wrong' => '天数范围的格式无效',
        'backup_monthly_select_date_wrong' => '无效的日期范围格式',
        'backup_level_compress_wrong' => '无效的压缩级别格式',
        'backup_type_auth_wrong' => '无效的授权类型',
        'backup_level_compress_wrong' => '无效的压缩级别格式',
        'backup_rsync_speed_limit_kb_wrong' => '传输速率格式无效,必须是整数 ',
        'backup_denywritebackup_wrong' => '无效的备份编辑权限格式',

        'backup_add_day_start' => '添加开始日期',
        'backup_remove_day_start' => '删除',
        'backup_please_wait_load_listbackups' => '正在加载备份列表，请稍候',
        'backup_please_wait_load_listbackups_conf' => '正在加载任务列表，请稍候',

        'backup_delete_backup' => '删除',
        'backup_download_new_prepare_arch' => '重新下载',
        'backup_conf_status' => '活动',
        'backup_error_connect_remote_any' => '授权失败',
        'backup_error_connect_remote_AuthOknotenoughright' => '授权成功，但没有足够的权限写入远程文件夹',

        'backup_nodbbackup' => '备份中没有数据库',
        'backup_nodbuserbackup' => '备份中没有数据库用户',
        'backup_noemailsinbackup' => '备份中没有邮箱',
        'backup_last_updated_process_fullprep_backup' => '正在准备下载完整备份,上次检查进程',

        'backup_create_pleasewait_gototablistbackup' => '备份过程已经开始.<br/> 进度显示在备份历史选项卡上',
        'backup_refresh_listbackup_nocache' => '刷新备份列表',

        'backup_addjob_success' => '备份作业添加成功。',
        'backup_editjob_ok' => '作业编辑成功。',

        'backup_manage_jobs' => '管理工作',
        'backup_list_jobs' => '备份列表',
        'backup_history_restores' => '恢复历史',
        'backup_cron_not_run_att' => '警告！ CROND 未在服务器上运行,模块可能无法正常工作,安装并运行 crond 才能正常工作.',
        'backup_create_newjob' => '创建作业',
        'backup_list_backups' => '备份列表',
        'backup_search_backups' => '搜索备份',
        'backup_history_restoring' => '恢复历史',
        'backup_prepare_fordownload' => '准备下载',
        'backup_prepare_fordownload_hint' => '从远程源复制到用户的 home/tmpb 文件夹',

        'backup_createbackup_confusercms_ok' => '用户CMS配置备份已成功创建',
        'backup_createbackup_confusermain_ok' => '用户配置备份创建成功',
        'backup_createbackup_usersftp_ok​​' => 'FTP用户已成功备份',
        'backup_createbackup_db_users_ok' => '数据库用户已成功备份',
        'backup_restore_useracc_ok' => '用户恢复成功完成',

        'backup_restore_dbs_ok' => '恢复用户数据库成功完成',
        'backup_restore_dbsusers_ok' => '恢复数据库用户成功完成',

        'backup_createbackup_usersvhost_ok' => '用户虚拟主机备份成功',
        'backup_restore_usersvhost_ok' => '恢复用户虚拟主机成功完成',
        'backup_backups_jobs_ok' => '备份作业的备份成功完成',

        'backup_deletebackup_err' => '删除备份时出错,没有足够的权限.',


        'backup_no_seldb_download' => '没有选择数据库,请选择碱基并重复.',

        'backup_no_seldbuser_download' => '没有选择数据库用户,请选择一个用户并重试.',

        'backup_manager_restorefile_confirm' => '确认开始恢复文件',
        'backup_manager_restoredir_confirm' => '确认开始恢复目录',

        'backup_manager_restoredirfile_address' => '按地址',

        'backup_local_dir_userbackup' => '请指定一个非根目录来创建备份.',

        'backup_notselect_userbackup' => '请选择要备份的用户.',

        'backup_restore_emails_ok' => '用户的邮件账户已成功恢复.',
        'backup_restore_emails_routeok' => '用户的邮件路由设置已成功恢复.',
        'backup_restore_forward_emails_ok' => '用户邮件帐户的重定向已成功恢复。',
        'backup_restore_dns_user_ok' => 'DNS 记录恢复成功。',

        'backup_wrong_format_type_store' => '无效的存储类型',
        'backup_wrong_format_type_backup' => '无效的备份类型',


        'backup_restore_dkim_keys_user_ok' => 'DKIM 密钥恢复成功.',

        'backup_period_runcreatebackup' => '开始时间',
        'backup_period_intime' => '到',
        'backup_period_ondays' => '按数字',

        'backup_restore_userincludes_ok' => '虚拟主机的个性化定制已成功恢复.',

        'backup_restore_passdir_user_ok' => '目录上的密码已成功恢复.',
        'backup_restore_httpdredir_user_ok' => 'HTTP 重定向成功恢复.',
        'backup_restore_siteredir_user_ok' => '站点重定向恢复成功.',
        'backup_restore_opti_user_ok' => '网站优化设置恢复成功.',

        'backup_backup_pathlocal_wrong_dir' => '备份配置backup_pathlocal 中的目录无效.',
        'backup_confirm_start_full_rest' => '确认开始恢复完整备份.',
        'backup_confirm_start_yes' => '是',
        'backup_confirm_start_no' => '否',

        'backup_confirm_rest_user_exist' => '正在恢复的用户已经存在,确认恢复，覆盖备份中的所有数据.',

        'backup_not_found' => '没有找到备份',

        'backup_sel_date' => '选择日期',
        'backup_rest_wait' => '正在恢复用户,请等一下.',
        'backup_hist_empty' => '尚未恢复任何备份',
        'backup_cronjob_empty' => '没有添加备份任务',
        'backup_manager_restoredir_file_confirm' => '确认开始恢复数据',

        'backup_config_sendemail_aftercomplete' => '完成后发送邮件',
        'backup_config_sendemail_aftercomplete_list_fail' => '发送备份结果的邮箱列表格式无效',

        'backup_complete_titleemail' => '备份过程已完成.',
        'backup_complete_titleemail_ok' => '备份过程成功完成',
        'backup_complete_time_start' => '开始时间：',
        'backup_complete_time_end' => '结束时间：',
        'backup_complete_table_size' => '大小',
        'backup_complete_table_path' => '路径',

        'backup_complete_restore_email' => '恢复完成后发送邮件',
        'backup_complete_restore_email_hint' => '请输入您的电子邮件',

        'backup_config_sendemail_aftercomplete_list_fail_rest' => '发送恢复结果的邮箱列表格式无效',

        'backup_complete_titleemail_rest' => '恢复备份的过程已经完成.工作名称：',
        'backup_complete_titleemail_ok_rest' => '恢复备份的过程成功完成',
        'backup_complete_titleemail_ok_rest_username' => '用户名',
        'backup_complete_timeduration' => '完成时间：',
        'backup_complete_timeduration_minute' => '分钟',

        'backup_conf_title_hourtitle' => 'hh: mm',


        'backup_encryptfile' => '加密备份',
        'backup_encryptfilesetpass' => '设置密码',
        'backup_encbackupenterpass' => '输入密码',
        'backup_encbackupenterpassretype' => '重复密码',
        'backup_encbackupenterpassmismatch' => '加密备份的密码不匹配',

        'backup_enterpassencback' => '输入加密备份密码',
        'backup_enterpassencback_wrong' => '加密备份密码错误',
        'backup_enterpassencback_ok' => '加密备份的密码正确,恢复已经开始.',
        'backup_enterpassencback_okPending' => '恢复开始.<br/> 将在还原过程中验证加密备份的密码.<br/>“还原历史记录”选项卡上的详细信息.',
        'backup_confirmremovebackup' => '确认删除备份',

        'backup_maxcountbackups' => '副本数（0-不删除）',
        'backup_wrongformat_maxcountbackups' =>' 最大备份副本数的格式无效,必须是整数.',

        'backup_email_placeholsendcomplete' => '输入电子邮件',

        'backup_email_hint_arch' => "<b> 增量解压缩</b> - 第一次创建备份时，所有文件都将被复制，后续备份中只有更改的文件将在备份中更新.<br/><b> tar </b> - 一个带有 tar 扩展名的文件被创建，在设置中你可以指定压缩级别（影响创建备份的速度）.<br/> <b> 不压缩 </b> - 不像增量备份，所有文件都会被复制.",

        'backup_email_hint_crypt' => '备份文件将被加密,您必须输入密码才能恢复备份.',
        'backup_email_hint_sendemail' => '备份完成后，将向指定邮箱发送完成信息.',
        'backup_db_denywrite_backups_desc' => '用户无权在创建的备份中编辑文件',
        'backup_hint_speed' => '不限制速度 - 0',
        'backup_edit_job_name' => '编辑作业',

        'backup_mass_backup_remove' => '删除所选',
        'backup_mass_backup_selectall' => '全选',
        'backup_mass_backup_unselectall' => '取消全选',
        'backup_mass_backup_capt_confirm_del' => '确认删除',
        'backup_universal_yes' => '是',
        'backup_universal_no' => '否',
        'backup_cancelcurrent_autoupdatelist' => '停止自动更新备份列表',

        'backup_restonefile_label' => '从存档中恢复完整的用户备份',
        'backup_restonefile_label_hint' => '存档必须是 .tgz 或 .tgz.encoded 格式，这是面板在创建计划备份时创建的',
        'backup_restonefile_selarch_load' => '选择存档',
        'backup_restonefile_selarch_load_notsel' => '没有选择文件',
        'backup_restonefile_selarch_loadhard' => '从设备加载',
        'backup_restonefile_selarch_local' => '完整的本地路径',
        'backup_restonefile_selarch_url' => 'URL',
        'backup_restonefile_selarch_ftp' => 'FTP',

        'backup_restonefile_selarch_loadhard_short' => '来自设备',


        'backup_restonefile_archenc_enterpass' => '输入加密备份密码',

        'backup_restonefile_start_restore' => '开始恢复',
        'backup_listtasktitle' => '任务列表',
        'backup_pin_restore_from' => '从存档中恢复',

        'backup_restonefile_start_restore_confirm' => '确认开始恢复用户',
        'backup_restonefile_warning_notsel' => '没有选择恢复文件.',
        'backup_restonefile_warning_ownerdeny' => '您无权恢复用户',

        'backup_restoreone_start' => '恢复备份已在后台进程中开始.',

        'backup_restoreone_pathnotexist_local' => '指定的文件不存在,请检查路径.',
        'backup_restoreone_pathnotexist_url' => '文件在指定的 URL 不存在,请检查地址.',
        'backup_restoreone_pathnotexist_ftp' => '文件在指定的 FTP 地址不存在,请检查FTP服务器的地址和授权详情',
        'backup_restoreone_UnableResolve' => '无法连接指定的 FTP 地址,请检查您的FTP地址.',
        'backup_restoreone_noSuch' => '指定 FTP 路径上的文件不存在.',


        'backup_history_backups' => '备份历史',
        'backup_history_namebackup' => '备份配置名称',
        'backup_history_pathbackup' => '备份路径',
        'backup_history_backupnorunyet' => '尚未执行任何备份',
        'backup_history_backupinprog' => '正在备份',

        'backup_ya_noconn' => '我无法连接到 Yandex。',
        'backup_ya_server_err' => '服务器不支持 webdav 或用户名和密码不正确',

        'backup_gdrive_verifyplease' => '请点击链接并允许访问 GoogleDrive',
        'backup_gdrive_verifypleaseHintOpt' => '点击检查连接按钮后连接不成功会生成链接',

        'backup_gdrive_verifyplease_enterhere' => '收到验证码后，在验证码字段中输入并再次点击检查连接',

        'backup_verifypleaseSucOk' => '如果一切正常，您将收到连接成功的消息',


        'backup_gdrive_label_entervercode' => '验证码',

        'backup_gdrive_gotoverify' => '允许访问',
        'backup_gdrive_error_connect' => '连接错误',

        'backup_share_activetaskhint' => '任务处于活动状态，将在指定时间运行',

        'backup_gdrive_label_access_token' => '访问令牌',

        'backupDropboxInstruction' => '正在访问 Dropbox 帐户,按照以下说明操作：<br/> 1. 按照 <a target=``_blank`` href=``https://www.dropbox.com/developers/apps``> 链接 </a> 并登录 <br/> 2.单击“创建应用程序”，然后选择“Dropbox Legacy API”，授予完整 Dropbox - 访问用户 Dropbox 中所有文件和文件夹的权限。并为应用程序提供名称。<br/> 3.转到权限设置，选中所有单个访问复选框并保存。<br/> 4. 返回设置，选择令牌到期日期，然后单击“生成的访问令牌”部分下的生成按钮。<br/> 5.将访问令牌复制并粘贴到备份配置的<b>访问令牌</b>中，然后再次单击“测试连接”',

        'backup_dropbox_message_createbackup_failed' => '创建 Dropbox 备份时出错,无法连接到 Dropbox，请检查您的令牌是否是最新的.',

        'backup_tokens_remove' => '删除保存的授权',
        'backup_tokens_remove_ok' => '授权删除成功',
        'backup_tokens_remove_failed' => '授权未被删除,访问错误',

        'backup_failedconn_getlist_task' => '任务：',
        'backup_dropbox_noconn' => '无法连接到 Dropbox。',
        'backup_gdrive_noconn' => '无法连接到 GoogleDrive。',
        'backup_ftp_noconn' => '无法连接到 FTP.',
        'backup_remoteserv_noconn' => '我无法连接到远程服务器.',

        'backup_hint_cachelistbackup' => '备份列表被缓存,<br/>每10分钟自动更新一次,<br/>要获得最新的列表，点击刷新备份列表',

        'backup_listbackup_time' => '列表备份时间',

        'backup_listbackup_cacheupdnot' => '请稍候，备份列表正在更新中。',

        'backup_hist_type_rest_db' => '数据库',
        'backup_hist_type_rest_dbuser' => '数据库用户',
        'backup_hist_type_rest_file' => '用户文件',
        'backup_hist_type_rest_full' => '完整',

        'backup_list_countnow_backups' => '备份数量：',
        'backup_list_noclosepage' => '加载时请不要重新加载页面！',
        'backup_list_ftppasshint' => 'FTP密码访问，使用格式：ftp://login:password@ftp.example.org/some_file',
        'backup_list_maxpostover' => '上传备份文件时出错,看起来上传的文件超过了 php.ini 中的 post_max_size 或 upload_max_filesize。请将这些指令的值至少增加到上传文件的大小或联系您的管理员。',

        'backupYaErrcreateDir' => '无法在 YandexDisk 上创建目录。检查：存在同名文件，可用空间。',
        'backupYaErrAuthFailed' => 'YandexDisk 上的授权错误',

        'backupLabelToken' => '令牌',

        'backupHintInstallToken' => '设置授权说明',

        'backupYandexInstructionGetOAuth' => '正在访问 Yandex 磁盘,按照以下说明操作：<br/> 1. 按照 <a target=``_blank`` href=``https://oauth.yandex.ru/``> 链接</a> 并登录.<br/ > 2 ...点击`Register new application`.<br/> 3.通过输入应用程序名称、应用程序描述进行必要的设置。在 Platforms 部分，选中 Web Services 项，然后单击 Substitute URL for development 按钮。<br/> 4.在访问部分，选择所有项 Yandex.Disk REST API <br/> 5.现在点击创建应用程序.<br/> 6.成功创建您的应用程序后，转到 https://oauth.yandex.ru/authorize?response_type=token&client_id=YOUR_IDY 将 YOUR_IDY 替换为应用程序 ID <br/> 7. 按“允许”按钮确认访问请求。<br /> 8.将令牌复制并粘贴到 <b> 备份配置令牌 </b> 字段中，然后再次单击“测试连接”',

        'backupHintUseKeysAuth' => '授权使用密钥<br/> <br/> 1.生成密钥<br/> <br/> 2.在<b>远程服务器</b>到文件/用户名/.ssh/authorized_keys 添加一行内容为公钥 ssh-rsa <br/>',

        'backup_restoring_startModal' => '恢复已经开始,<br/>“恢复历史”选项卡上的详细信息',

        'backup_hintPeriodRun' => '<b> 增量 + 每日</b> 备份数 = 1 个备份，user_idibackup_incr 名称格式 <hr/> <b> 无压缩 (tar) + 每日</b> 备份数 =仅受参数 Number of copies 限制，格式为 user_idibackup_YYMMDD_s <hr/> <b> Incremental + Weekly</b> 备份数 = 选择备份的天数，格式为 user_idibackup_day of the week <hr/> <b> 无压缩 (tar) + 每周</b> 备份数 = 仅受参数限制 副本数，格式 user_idibackup_YYMMDD_week_s <hr/> <b> 增量 + 每月</b> 备份数 = 选择的备份天数, 格式 user_idibackup_date_m <hr /> <b> 无压缩 (tar) + 每月</b> 备份数 = 仅受副本数参数限制，格式 user_idibackup_YYMMDD_m_s',

        'backup_logs_stat_deleted' => '已删除',
        'backup_logs_stat_deletedInfo' => '日志文件已删除',
        'backup_titleLogHistBacks' => '备份历史',

        'backup_titleDialogEnterPassBackup' => '下载的备份已加密,要解密备份，请输入密码并单击下载.',

        'backup_titleDialogStartRestore' => '恢复备份：',
        'backup_titleDialogCheckPassEncoded' => '请稍候',
        'backup_titleDialogCheckWaitExist' => '请稍候',
        'backup_titleDialogEnterpassRequire' => '输入加密备份密码',
        'backup_FailedConnWhileCreateBackupRemote' => '连接到远程服务器时出错,请检查您的连接设置',

        'backup_UnpackEncodedBackupTitle' => '将加密备份解压到本地用户文件夹？',

        'backup_btnUnpackCancel' => '关闭',
        'backup_btnUnpackFailedLog' => '解密备份时出错,密码错误',

        'backup_changeIP' => '更改账户 IP 地址',

        'backup_gdriveGetFilesTempError' => '获取 gDrive 文件列表时出现临时错误,请再试一次。如果错误仍然存在，请检查您的防火墙设置.',

        'backup_mass_backupRestore' => '恢复所选',
        'backup_mass_backupNothingSel' => '没有选择任何东西',
        'backup_mass_backupRestoreSomeConfirm' => '您要恢复多个用户吗？',
        'backup_mass_backupRestoreSelMultBackForOneUser' => '为一个用户选择了多个要恢复的备份',
        'backup_mass_backupRestoreCodeOneItem' => '一次只能恢复一个加密备份',

        'backupStopMakeBackup' => '停止创建备份',
        'backupStopMakeBackupConfirm' => '停止创建备份？ <br/> 注意！中断备份的创建不会删除备份地址处已经创建的文件.',
        'backupStopMakeBackupOk' => '备份创建停止',
        'backupStopMakeBackupCancelLog' => '被用户中止',

        'backupStopMakeRestore' => '停止恢复备份',
        'backupStopMakeRestoreConfirm' => '停止恢复备份？ <br/> 注意！中断还原备份不会将主机帐户恢复到还原前的旧状态，而只会根据需要停止该过程.',
        'backupStopMakeRestoreOk' => '备份恢复停止',
        'backupStopMakeRestoreCancelLog' => '恢复被用户中止',
        'backupFullListRestUser' => '已恢复用户的完整列表',

        'backup_FailedCreateDir' => '在远程服务器上创建目录时出错。请检查连接参数中指定的用户是否对指定目录有写权限.',
        'backupRemoteConnPort' => '端口',
        'backupRemoteConnPortHolder' => '默认 ssh 端口为 22，ftp 为 21',
        'backupRemoteConnPortErr' => '连接端口必须是整数',
        'backupDbSizeMB' => 'mb',
        'backupDbSizeKB' => 'kb',
        'backupDbSizeB' => 'b',
        'backupGmailQuotaInfo' => '谷歌驱动器上的可用磁盘空间：',
        'backupDropQuotaInfo' => '保管箱上的可用磁盘空间：',
        'backupEstimatedSize' => '最大估计存档大小：',
        'backupGmailOverQuota' => '已超出谷歌驱动器允许的配额。请释放空间.',
        'backupGmailOverQuotaAllow' => '可用',
        'backupGmailOverQuotaRequire' => '必需',
        'backupGmailWarning' => '可用空间少于 500MB，无法备份,请释放空间.',
        'backupFewSpace' => '空间不足,备份失败.',
        'backupRestoreLoggingRotateOk' => '日志轮换设置已恢复',
        'backupRestoreHashmonOk' => '哈希控制设置已恢复',
        'backupRestoreGroupsOK' => '用户组设置已恢复',
        'backupRestorephpiniuserphpini' => 'phpini userphpini 设置已恢复',
        'backupRestoreuserphpinionly' => 'Userphpini 设置已恢复',
        'backupRestoreforCurrUserInProg' => '操作不可用，因为该用户的恢复过程已经在进行中',
        'backuзBackupingforCurrUserInProg' => '操作不可用，因为该用户的备份过程已经在进行中',
        'backupRestorePlansOK' => '用户计划已恢复',
        'backupConnGdriveAttempt' => '#尝试连接到 GDrive',

        'backupUserShowAll' => '所有用户',

        'backupGDriveHintConn' => '获得对您的 Google 云端硬盘帐户的访问权限,按照以下说明操作：<br/> 1. 转到 <a target=``_blank`` href=``https://code.google.com/apis/console/``> 链接 </a> 并登录<br/> 2.创建一个新项目 Create project (External) <br/> 3.在该字段中填写项目名称（任意名称）并创建应用程序。<br/> 4.按照所有步骤操作，在 OAuth 同意屏幕中，单击发布应用程序 <br/> 5. 在左侧窗格中，选择库-驱动器 API（库 → 驱动器 API）并启用它（启用）<br/> 6。转到Credentials，创建新的Create Credentials用户，OAuth客户端ID。在提供的选项中选择其他,获取ID和密钥<br/> 7. 将 ID 粘贴到 ID 字段中，将密钥粘贴到备份作业的密钥字段中。<br/> 8. 单击“检查连接”按钮。',
        'backupGdriveID' => 'ID',
        'backupGdriveSecret' => '秘钥',

        'backupManagerTitle' => '选择性恢复',
        'backupManagerTitleFrom' => '从',
        'backupManagerListEmails' => '邮件账户列表',
        'backupManagerRestoreSelected' => '恢复所选数据',
        'backupNothingSelectedRestore' => '没有选择任何恢复',
        'backupTypeHistSelected' => '选定的数据',
        'backupSelectedRestoreFinish' => '所选数据已恢复',
        'backupSelectedRestoreContinue' => '所选数据正在恢复中...',

        'backupSelectedDataConfirm' => '恢复所选数据？',
        'backupConfirmDelTaskBackup' => '确认删除备份任务',
        'backupConfirmCreateNowTaskBackup' => '确认开始备份',

        'backupConfirmFullRestoreOrSelect' => '完全恢复或仅：',
        'backupSelectDB' => '数据库',
        'backupSelectDBuser' => '数据库用户',
        'backupSelectEmails' => '邮件账户',

        'backupDrive2' => '输入 gdrive ID 和密码',

        'backup_please_waitUpdateConf' => '请稍候,正在保存',

        'backupYandexAvail' => 'yandex 磁盘上的可用磁盘空间：',
        'backupYandexRequire' => '备份大小：',
        'backupMoreYandex' => '需要更多：',
        'backupFewSpaceYandex' => '空间不足,备份失败.',
        'backupCustomDataCheck' => '选择性备份',
        'backupCustomDataCheckDB' => '数据库',
        'backupCustomDataCheckRootdirUser' => '用户根文件夹',
        'backupCustomDataCheckDBAll' => '所有用户数据库',
        'backupCustomDataCheckDBAllWarn' => '- 选择一个用户时可选择数据库备份',
        'backupCustomDataDBFilter' => '输入要搜索的数据库名称',
        'backupCustomDataDBloadnoDB' => '用户没有数据库',
        'backupCDdbloadNotselUser' => '未选择用户',
        'backupCustomDataDBloadnoDBinjobnotsetDB' => '备份中未指定数据库列表',
        'backupCustomDataDBgetlistdb' => '获取用户数据库列表',
        'backupCustomBackupConf' => '自定义备份字段的格式无效',
        'backupCustomBackupConfDB' => '无效的数据库字段格式',
        'backupCustomBackupConfDBselUser' => '所有用户数据库字段的格式无效',
        'backupCustomBackupConfDBlist' => '无效的数据库列表格式',
        'backupBackupType' => '备份类型：',
        'backupCustomBackupTypeCust' => '自定义',
        'backupCustomBackupTypeFull' => '完全',
        'backupFile' => '文件',
        'backupFileOk' => '备份上传成功',
        'backupFileOkInfo' => '备份信息已加载',
        'backupFileFail1' => '上传文件时出错。检查您的登录名、密码、ftp 配额和对指定目录的写访问权限 ',
        'backupFileFail2' => '读取源文件时出错',
        'backupFileFail1Info' => '加载带有备份信息的文件时出错。检查您的登录名、密码、ftp 配额和对指定目录的写访问权限 ',
        'backupFileFail2Info' => '读取带有备份信息的文件时出错',
        'backupFileFailFile1' => '上传文件时出错',
        'backupFileFailFile2' => '检查 ftp 配额大小',
        'backupFileProgress' => '已下载：',
        'backupFewSpacShare' => '空间不足,备份失败.',
        'backup_errorYandexFailedToken' => 'Yandex 磁盘授权错误,令牌无效',
        'backupGmailQuotaShare' => '可用磁盘空间',
        'backupGmailQuotaYandex' => 'Yandex 磁盘：',

        'backup_errorFailedTokenDropbox' => 'Dropbox 授权失败,令牌无效.',
        'backupGmailQuotaDropbox' => 'Dropbox:',
        'backupFTPpassivemode' => '被动模式',
        'backupFTPpassivemodeOn' => 'FTP 连接以被动模式建立',
        'backupFTPpassivemodeOff' => 'FTP 连接建立。被动模式关闭',
        'backupspeedmbsec' => 'mb/秒',
        'backupCustomDataSelExcludeDir' => '排除目录',
        'backupCustomDataSelExcludeDirHint' => '指定目录列表，例如：/folder/excl.<br/>分隔符，空格或换行。<BR/>如果只为没有根用户目录的站点创建备份，请指定目录路径以排除站点目录',
        'backupCustomDataSelExcludeDirWrongFormat' => '排除目录字段的格式无效',


        'backupCustomDataCheckSiteUser' => '用户站点',
        'backupCustomDataCheckSiteUserHint' => '只会将所选站点目录中的内容复制到备份副本中（虚拟主机配置不会包含在备份中）',
        'backupCustomDataCheckSiteAll' => '所有站点',
        'backupCustomDataCheckSiteAllWarn' => '- 选择一个用户时可选择站点备份',
        'backupCustomDataSiteFilterUser' => '请输入要搜索的站点名称',
        'backupCustomDataSiteNoItem' => '用户没有站点',
        'backupCustomDataSitesloadnoSitesset' => '备份不包含用户站点列表',
        'backupCustomDataSitegetlistSites' => '获取用户站点列表',

        'backupCustomRootdirWarn' => '- 无法使用选定的站点备份来备份用户的根文件夹',

        'backupCustomDataCheckDBUser' => '数据库用户',
        'backupCustomDataCheckDBAllUser' => '所有数据库用户',
        'backupCustomDataCheckDBAllWarnUser' => '- 选择一个用户时可以选择性备份数据库用户',
        'backupCustomDataDBFilterUser' => '输入要搜索的数据库用户名',
        'backupCustomDataDBloadnoDBUser' => '该用户没有数据库用户',
        'backupCustomDataDBloadnoDBinjobnotsetDBUser' => '备份中未指定数据库用户列表',
        'backupCustomDataDBgetlistdbUser' => '获取数据库用户列表',

        'backupCustomBackupConfDBUser' => '数据库用户字段格式无效',
        'backupCustomBackupConfDBselUserUser' => '字段所有数据库用户的格式无效',
        'backupCustomBackupConfDBlistUser' => '无效的数据库用户列表格式',

        'backupCustomRestTitle' => '备份包含选定的数据',

        'backupCustomRestMakeSelect' => '选择要恢复的数据',
        'backupCustomRestMakeSelect_listDBCustom' => '数据库列表',
        'backupCustomRestMakeSelect_listDBCustomUser' => '数据库用户列表',
        'backupCustomRestMakeSelect_listNosuchdata' => '-缺失',

        'backupCustomRestMakeSelect_listsitesCustomUser' => '用户站点列表',
        'backupCustomRestMakeSelect_titleSite' => '站点',
        'backupAlluserLimits' => '- 此备份是自定义的（不允许用户为所有人创建备份）',

        'backupCreatenowandDownload' => '创建并下载备份',
        'backupCreatenowandSave' => '创建备份到本地文件夹',
        'backupCreatenowErrWrongUsername' => '用户名错误',
        'backupCreatenowTitle_createanddownloadnow' => '为用户创建并下载备份：',
        'backupCreatenowTitle_createandsavenow' => '创建备份到本地文件夹',
        'backupCreatenowTitle_createandsavenow2' => '对于用户：',
        'backupCreatenowInsufRighttocreatebackup' => '没有足够的权限来创建这个用户的备份',
        'backupCreatenowStartok' => '备份创建开始',
        'backupCreatenowCheckHomedir' => '主文件夹',
        'backupCreatenowCheckFullBackup' => '完整备份',
        'backupCreatenowSeluser' => '要快速创建备份，请从列表中选择一个用户',
        'backupCreatenowEmptySelection' => '没有开始备份。选择要备份的数据 ',
        'backupCustomDataCheckRootdirUserNotSetinbackup' => '备份不包含用户的根文件夹',
        'backupCustomDataCheckRootdirRestoreCheck' => '恢复用户根文件夹',
        'backuprestoreCustRestrootdir' => '恢复用户根文件夹',
        'backup_CustomRestAllSelect' => '选择要恢复的所有数据',
        'backup_restonefileFromSelDevice' => '从所选设备上传备份',
        'backup_restonefileExtractArchive' => '提取存档',
        "backup_restonefileClearUserfolder" => "清除用户目录",
        'backup_err_file_config' => '未指定配置文件',
        'backup_susspended' => '成功',
        'backup_err_genetate_key' => '保存密钥时出错.',
        'backup_not_array_restore' => '没有恢复数据',
        'backup_array_restore' => '恢复数据数组',
        'backup_incorecly_user' => '无效用户',
        'backup_its_ok' => '添加成功',
        'backup_error_password' => '密码不能为空',
        'backup_error_email' => '无效的电子邮件',
        'backup_not_token' => '错误，令牌未填充',
        'backup_error_del_job' => '删除作业时出错',
        'backup_suspended_del_job' => '成功完成',
        'backup_select_job_file' => '选择要删除的任务',
        'backup_letsRegen' => '为新IP地址生成letsencrypt证书',
        'backupFailedUntar' => '无效的存档格式或无效的存档路径。恢复中止,没有做任何改变.',
        'backup_nositesuserinbackup' => '备份中没有选定的站点用户',
        'backup_LogRestSitesUser' => '用户站点的选择性恢复：',
        'backup_LogRestSitesUserAll' => '全部',
        "backup_backupDbuserLog" => "正在备份数据库用户：",
        "backup_conflictrestoreVhostalreadyExistOtherUser" => "恢复虚拟主机时，发现了另一个用户的主机，主机保持不变：",
        "backup_ftpuploadnotenoughrights" => "FTP 用户权限不足，无法保存备份。请检查 FTP 写入能力.",
        'backup_prepareagain' => '再次准备',
        'backup_lftpnotinstall' => 'LFTP 包未安装',
        'backup_rclonenotinstall' => 'rclone 软件包未安装',
        'backup_createnowonlyselect' => '或仅选定数据：',
        'backup_failedexecrsync' => '执行 rsync 时出错。请检查执行 rsync 的权限。备份失败，出现错误 ',
        'backup_failedexecrsync_nospaceleft' => '设备上没有可用空间。检查正在创建备份的服务器上的可用空间。备份失败，出现错误 ',

        'backup_remove_prepare_arch' => '删除准备好的文件',
        'backup_remove_prepare_arch_ok' => '准备好的备份文件已成功删除',

    )
?>
