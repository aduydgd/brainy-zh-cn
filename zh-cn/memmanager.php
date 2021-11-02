<?php

$lang = array(
    'tpl_memmanager_header' => '服务器资源管理器',
    'tpl_memmanager_huge' => '为大页面内存配置资源',
    'tpl_memmanager_save' => '保存',

    'tpl_memmanager_httpd' => '为 Apache 和 MPM 模块配置资源',
    'tpl_memmanager_mess0' => '* 在更改 MaxMemFree 时，您必须了解您在做什么。建议保留 </br> 为默认值',

    'tpl_memmanager_nginx' => '为 NGINX 配置资源',
    'tpl_memmanager_cache_purge' => '连接 NGINX 的 CACHE PURGE 模块',
    'tpl_memmanager_push_stream' => '为 NGINX 连接 PUSH STREAM 模块',
    'tpl_memmanager_pagespeed' => '为 NGINX 连接 PAGE SPEED 模块',
    'tpl_memmanager_brotli_filter' => '连接 NGINX 的 BROTLI FILTER 和 BROTLI STATIC 模块',

    'tpl_memmanager_ngx_http_cache_purge' => '连接 NGINX 的 CACHE PURGE 模块',
    'tpl_memmanager_ngx_http_push_stream' => '为 NGINX 连接 PUSH STREAM 模块',
    'tpl_memmanager_ngx_pagespeed' => '为 NGINX 连接 PAGE SPEED 模块',
    'tpl_memmanager_ngx_http_brotli_filter' => '连接 NGINX 的 BROTLI FILTER 和 BROTLI STATIC 模块',
   'tpl_memmanager_nginx_no' => '* 警告！未安装 NGINX ',
    'tpl_memmanager_http_no' => '* 警告！未安装 Apache ',
    'tpl_memmanager_http_noconf' => '* 警告！ Apache 已安装，但未找到所需的配置文件。 </br> 将面板更新到最新版本并重新安装网页链接',

    'tpl_memmanager_hg_nopkg' => '* 警告！没有安装内存管理器',
    'tpl_memmanager_hg_nosrv' => '* 警告！安装了内存管理器。但是好像没有激活。 </br> 尝试从控制台发出命令： <b> <i> systemctl enable transparent-huge-pages </i> </b> 然后重新启动服务器。',
    'tpl_memmanager_memcached_nopkg' => '* 警告！未安装 memcached ',
    'tpl_memmanager_memcached_noconf' => '* 警告！未找到配置文件',
    'tpl_memmanager_memcached_nodata' => '* 警告！未找到数据文件',

    'memmanager_hgpg' => '大页数：',
    'memmanager_hgpg_size' => '一个 Huge Pages 页面的内核设置大小（以 KB 为单位）：',

    'memmanager_http_MaxMemFree' => '<b> MaxMemFree </b> - 一个线程的内存量，以kb为单位，之后将被释放</br>如果为0或未定义，则每个线程的内存量不受限制（不推荐）：' ,

    'memmanager_http_StartServers' => '<b> StartServers </b> - 启动时的进程数：',
    'memmanager_http_MinSpareServers' => '<b> MinSpareServers </b> - 保留区运行的最小服务器进程数：',
    'memmanager_http_MaxSpareServers' => '<b> MaxSpareServers </b> - 保留区运行的最大服务器进程数：',
    'memmanager_http_MaxRequestWorkers' => '<b> MaxRequestWorkers </b> - 允许运行的最大服务器进程数或线程数：',
    'memmanager_http_MaxConnectionsPerChild' => '<b> MaxConnectionsPerChild </b> - 每个进程的最大连接数，之后它将重新启动：',

    'memmanager_http_MinSpareThreads' => '<b> MinSpareThreads </b> - 保持待机的最小工作线程数：',
    'memmanager_http_MaxSpareThreads' => '<b> MaxSpareThreads </b> - 保持待机的最大工作线程数：',
    'memmanager_http_ThreadsPerChild' => '<b> ThreadsPerChild </b> - 每个服务器进程中的固定工作线程数：',

    'memmanager_http_ServerLimit' => '<b> ServerLimit </b> - 创建的最大进程数：',
    'memmanager_http_MaxClients' => '<b> MaxClients </b> - 进程可以处理的最大连接数：',

    'memmanager_http_loadconfDef_err0' => '加载默认文件时出错或违反面板中的数据结构完整性：АН1501',
    'memmanager_http_loadconfDef_err1' => '加载配置文件时出错。违反了结构的完整性：АН1502 ',
    'memmanager_http_loadconfDef_noerror' => '默认数据加载成功，配置文件恢复。单击应用以激活它们。',
    'memmanager_http_saveconf_err' => '发生重启错误。您更改的某些参数可能超出范围。',
    'memmanager_http_save_err_parms' => '值：',

    'js_memmanager_http_alert' => '新值将被保存。您的 Apache 将立即使用新值重新启动。',
    'js_memmanager_http_setdef_alert' => '恢复默认值。您的 Apache 将立即以原始值重新启动。',
    'js_memmanager_nginx_alert' => '新值将被保存。您的 NGINX 将立即使用新值重新启动。',
    'js_memmanager_cache_alert' => '新值将被保存。您的 MEMCACHED 将立即使用新值重新启动。',

    'memmanager_ng_worker_processes' => '<b> 工作进程数 </b> - 进程数',
    'memmanager_ng_worker_connections' => '<b> 连接数 </b> - 每个进程的连接数',

    'msg_memmanager_run_ok' => '更改已成功应用。它们立即生效。',
    'msg_memmanager_conf_err' => '警告！未找到配置文件。',
    'msg_memmanager_args_err' => '警告！在指定的值中检测到错误：',
    'msg_memmanager_args_err0' => '警告！参数中遇到错误。',

    'js_memmanager_stat_wait' => '版本更改正在进行中。等待...',
    'js_memmanager_stat_wait_ajax' => '正在加载数据。等待...',
    'js_memmanager_save_wait' => '正在保存。等待...',

    'tpl_memmanager_cache_header' => '选择操作模式：',
    'tpl_memmanager_memcache' => '设置 Memcached 资源',
    'tpl_memmanager_memcache_tcp' => '通过 TCP 端口工作',
    'tpl_memmanager_memcache_uds' => '通过 UDS 套接字工作',

    'tpl_memmanager_cache_port' => '<b> 端口 </b> - TCP 端口：',
    'tpl_memmanager_cache_conn' => '<b> 最大连接数 </b> - 允许的最大连接数：',
    'tpl_memmanager_cache_size' => '<b> 缓存大小 </b> - 以 MB 为单位的缓存大小：',
    'tpl_memmanager_cache_ips' => 'TCP模式下以逗号分隔的监听IP列表：</br> <i> default - 127.0.0.1, :: 1 (recommended) </i>',
    'tpl_memmanager_cache_uds' => 'UDS 模式下 UDS 套接字的路径：</br> <i> 默认 - /var/run/memcached/memcached.socket（推荐）</i>',

    'memmanager_module_header' => 'NGINX 推送模块的可用版本：',
    'tpl_memmanager_module_header' => '适用于 NGINX 的推送模块的可用版本：',
    'tpl_ngx_push_ver_040' => '推送版本 0.40',
    'tpl_ngx_push_ver_041' => '推送版本 0.41',
    'tpl_ngx_push_ver_053' => '推送版本 0.53',
    'tpl_ngx_mod_current' => '安装的模块版本：',
    'tpl_ngx_mod_cur_err' => '模块未安装或无效',
    'tpl_memmanager_mod_save_ngx' => '安装/更改版本',
    'memmanager_ngx_mod_nopkg' => '未安装',
    'memmanager_ngx_mod_instpkg' => '已安装',

    'memmanager_setupversionmodule' => '已安装的模块版本：',
    'memmanager_changesetup' => '更改/安装',
    'memmanager_notsetuporincorrect' => '（模块未安装或不正确）',
    'memmanager_selecttypework' => '选择工作模式：',
    'memmanager_setdefault' => '重置为默认值',

    'memmanager_cache_saveconf_err0' => '注意！参数错误，更改被拒绝',
    'memmanager_cache_saveconf_err1' => '注意！未找到配置文件，更改被拒绝',
    'memmanager_cache_saveconf_err' => '注意！设置错误，</br> 没有存放 UDS 套接字的目录 ',
    'memmanager_cache_saveact_err' => '发生重启错误，您更改的某些参数可能超出范围。',
    'memmanager_cache_saveact_ok' => '更改已成功应用，</br> 安装的工作协议类型：',
    'js_memmanager_cache_setdef_alert' => '恢复默认值，Memcached 将立即以其原始值重新启动',

    'tpl_memmanager_btn_wait' => '',
);

?>
