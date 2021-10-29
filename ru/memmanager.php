<?php

$lang = array(
    'tpl_memmanager_header'	=> 'Менеджер ресурсов сервера',
    'tpl_memmanager_huge'	=> 'Настройка ресурсов для Huge Pages Memory',
    'tpl_memmanager_save'	=> 'Применить',

    'tpl_memmanager_httpd'	=> 'Настройка ресурсов для Apache и MPM модулей',
    'tpl_memmanager_mess0'	=> '* Изменяя MaxMemFree, вы должны понимать что делаете. Рекомендуется оставить </br>это значение по умолчанию.',

    'tpl_memmanager_nginx'	=> 'Настройка ресурсов для NGINX',
    'tpl_memmanager_cache_purge'	=> 'Подключить модуль CACHE PURGE для NGINX',
    'tpl_memmanager_push_stream'	=> 'Подключить модуль PUSH STREAM для NGINX',
    'tpl_memmanager_pagespeed'	=> 'Подключить модуль PAGE SPEED для NGINX',
    'tpl_memmanager_brotli_filter'	=> 'Подключить модуль BROTLI FILTER и BROTLI STATIC для NGINX',

    'tpl_memmanager_ngx_http_cache_purge'	=> 'Подключить модуль CACHE PURGE для NGINX',
    'tpl_memmanager_ngx_http_push_stream'	=> 'Подключить модуль PUSH STREAM для NGINX',
    'tpl_memmanager_ngx_pagespeed'		=> 'Подключить модуль PAGE SPEED для NGINX',
    'tpl_memmanager_ngx_http_brotli_filter'	=> 'Подключить модуль BROTLI FILTER и BROTLI STATIC для NGINX',

    'tpl_memmanager_nginx_no'	=> ' * ВНИМАНИЕ! NGINX не установлен',
    'tpl_memmanager_http_no'	=> ' * ВНИМАНИЕ! Apache не установлен',
    'tpl_memmanager_http_noconf'	=> ' * ВНИМАНИЕ! Apache установлен, но требуемый конфигурационный файл не обнаружен. </br>&nbsp;&nbsp;&nbsp;Обновите панель до последней версии и переустановите Web связку заново',

    'tpl_memmanager_hg_nopkg'	=> ' * ВНИМАНИЕ! не установлен менеджер памяти',
    'tpl_memmanager_hg_nosrv'	=> ' * ВНИМВНИЕ! менеджер памяти установлен. Но, похоже он не активирован. </br>Попробуйте с консоли дать команду: <b><i>systemctl enable transparent-huge-pages</i></b> После этого перегрузите сервер.',
    'tpl_memmanager_memcached_nopkg'	=> ' * ВНИМАНИЕ! не установлен memcached',
    'tpl_memmanager_memcached_noconf'	=> ' * ВНИМАНИЕ! не найден конфигурационный файл',
    'tpl_memmanager_memcached_nodata'	=> ' * ВНИМАНИЕ! не найден файл данных',

    'memmanager_hgpg'	=> 'Количество страниц Huge Pages:',
    'memmanager_hgpg_size'	=> 'Установленный ядром размер одной страницы Huge Pages (в Кб):',

    'memmanager_http_MaxMemFree'	=> '<b>MaxMemFree</b> - количество памяти для одного потока в kb, после чего она будет освобождена </br>если 0 или не определено, количество памяти на поток не ограничено(не рекомендуется):',

    'memmanager_http_StartServers'	=> '<b>StartServers</b> - количество процессов при старте:',
    'memmanager_http_MinSpareServers'	=> '<b>MinSpareServers</b> - минимальное количество запущенных серверных процессов для резерва:',
    'memmanager_http_MaxSpareServers'	=> '<b>MaxSpareServers</b> - максимальное количество запущенных серверных процессов для резерва:',
    'memmanager_http_MaxRequestWorkers'	=> '<b>MaxRequestWorkers</b> -  максимальное количество серверных процессов разрешенных для запуска или потоков:',
    'memmanager_http_MaxConnectionsPerChild'	=> '<b>MaxConnectionsPerChild</b> - максимальное количество соединений на процесс, после чего он будет перезапущен:',

    'memmanager_http_MinSpareThreads'	=> '<b>MinSpareThreads</b> - минимальное количество рабочих потоков, которые остаются резервными:',
    'memmanager_http_MaxSpareThreads'	=> '<b>MaxSpareThreads</b> - максимальное количество рабочих потоков, которые остаются резервными:',
    'memmanager_http_ThreadsPerChild'	=> '<b>ThreadsPerChild</b> - постоянное количество рабочих потоков в каждом серверном процессе:',

    'memmanager_http_ServerLimit'	=> '<b>ServerLimit</b> - максимальное число созданных процессов:',
    'memmanager_http_MaxClients'	=> '<b>MaxClients</b> - максимальное число соединений, которое может обработать процесс:',

    'memmanager_http_loadconfDef_err0'  => 'Ошибка загрузки файла по умолчанию или нарушение целостности структуры данных в панели: АН1501',
    'memmanager_http_loadconfDef_err1'  => 'Ошибка загрузки файла конфигурации. Нарушена целостность структуры: АН1502',
    'memmanager_http_loadconfDef_noerror'       => 'Данные по умолчанию успешно загружены, конфигурационные файлы восстановлены. Нажмите применить для их активации.',
    'memmanager_http_saveconf_err'       => 'Произошла ошибка перезапуска. Возможно, некоторые измененные вами параметры выходят за пределы допустимых.',
    'memmanager_http_save_err_parms'       => 'Значение:',

    'js_memmanager_http_alert'		=> 'Новые значения будут сохранены. Ваш Apache будет перезапущен с новыми значениями прямо сейчас.',
    'js_memmanager_http_setdef_alert'	=> 'Восстановить значения по умолчанию. Ваш Apache будет перезапущен с первоначальными значениями прямо сейчас.',
    'js_memmanager_nginx_alert'		=> 'Новые значения будут сохранены. Ваш NGINX будет перезапущен с новыми значениями прямо сейчас.',
    'js_memmanager_cache_alert'		=> 'Новые значения будут сохранены. Ваш MEMCACHED будет перезапущен с новыми значениями прямо сейчас.',

    'memmanager_ng_worker_processes'	=> '<b>worker_processes</b> - количество процессов',
    'memmanager_ng_worker_connections'	=> '<b>worker_connections</b> - количество соединений на процесс',

    'msg_memmanager_run_ok'		=> 'Изменения успешно применены. Они вступают в силу немедленно.',
    'msg_memmanager_conf_err'		=> 'ВНИМАНИЕ! Конфигурационный файл не обнаружен.',
    'msg_memmanager_args_err'		=> 'ВНИМАНИЕ! Обнаружена ошибка в заданных значениях:',
    'msg_memmanager_args_err0'		=> 'ВНИМАНИЕ! Обнаружена ошибка в аргументах.',

    'js_memmanager_stat_wait'		=> ' идет смена версии. подождите...',
    'js_memmanager_stat_wait_ajax'	=> ' загрузка данных. подождите...',
    'js_memmanager_save_wait'		=> ' идет сохранение. подождите...',

    'tpl_memmanager_cache_header'		=> 'Выбрать режим работы:',
    'tpl_memmanager_memcache'		=> 'Настройка ресурсов Memcached',
    'tpl_memmanager_memcache_tcp'	=> 'работа через порт TCP',
    'tpl_memmanager_memcache_uds'	=> 'работа через сокет UDS',

    'tpl_memmanager_cache_port'	=> '<b>Port</b> - порт TCP:',
    'tpl_memmanager_cache_conn'	=> '<b>maxconn</b> - максимально допустимое количество соединений:',
    'tpl_memmanager_cache_size'	=> '<b>cachesize</b> - размер кеша в МБ:',
    'tpl_memmanager_cache_ips'	=> 'Список прослушиваемых IP разделенных запятыми в режиме TCP:</br><i>по умолчанию - 127.0.0.1,::1 (рекомендовано)</i>',
    'tpl_memmanager_cache_uds'	=> 'Путь к сокету UDS в режиме UDS:</br><i>по умолчанию - /var/run/memcached/memcached.socket (рекомендовано)</i>',

    'memmanager_module_header'		=> 'Доступные версии модуля Push Stream для NGINX:',
    'tpl_memmanager_module_header'	=> 'Доступные версии модуля Push Stream для NGINX:',
    'tpl_ngx_push_ver_040'		=> 'Версия Push Stream 0.40',
    'tpl_ngx_push_ver_041'		=> 'Версия Push Stream 0.41',
    'tpl_ngx_push_ver_053'		=> 'Версия Push Stream 0.53',
    'tpl_ngx_mod_current'		=> 'Установленная версия модуля: ',
    'tpl_ngx_mod_cur_err'		=> 'модуль не установлен или некорректный',
    'tpl_memmanager_mod_save_ngx'	=> 'Установить/Сменить версию',
    'memmanager_ngx_mod_nopkg'		=> 'не установлен',
    'memmanager_ngx_mod_instpkg'	=> 'установлен',

    'memmanager_setupversionmodule' =>'Установленная версия модуля:',
    'memmanager_changesetup' =>'Сменить/Установить',
    'memmanager_notsetuporincorrect' =>'(модуль не установлен или некорректный)',
    'memmanager_selecttypework' =>'Выбрать режим работы:',
    'memmanager_setdefault' =>'Сбросить по умолчанию',

    'memmanager_cache_saveconf_err0'  => 'Внимание! Ошибка в параметрах. В изменениях отказано.',
    'memmanager_cache_saveconf_err1'  => 'Внимание! Конфигурационный файл не найден. В изменениях отказано.',
    'memmanager_cache_saveconf_err'   => 'Внимание! Ошибка в настройках.</br>Нет каталога для хранения сокета UDS',
    'memmanager_cache_saveact_err'   => 'Произошла ошибка перезапуска. Возможно некоторые измененные вами параметры выходят за пределы допустимых.',
    'memmanager_cache_saveact_ok'   => 'Изменения успешно применены.</br>Тип установленного рабочего протокола:',
    'js_memmanager_cache_setdef_alert'	=> 'Восстановить значения по умолчанию. Memcached будет перезапущен с первоначальными значениями прямо сейчас.',

    'tpl_memmanager_btn_wait'	=> '',
);

?>