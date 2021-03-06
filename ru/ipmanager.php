<?php
$lang = array(
	'ipmanager_not_permishion'		=> 'У Вас недостаточно прав',
	'ipmanager_added'		=> 'Добавлен',
	'ipmanager_error'		=> 'Ошибка. IP уже существует',
	'ipmanager_deleted'		=> 'Удалено',
	'ipmanager_ip_exists'		=> 'IP уже существует',
	'ipmanager_error_data'		=> 'Ошибка в введенных данных',
	'ipmanager_del_ip'		=> 'Невозможно удалить IP, так как используется доменами пользователя. Количество доменов с данным IP: ',
	'ipmanager_del_ip_failed_userset'		=> 'Невозможно удалить IP, так как IP добавлен в конфигурацию пользователя. Количество пользователей с данным IP: ',
	'ipmanager_done_success'		=> 'Выполнено успешно',
	'ipmanager_not_deleted'		=> 'Невозможно удалить главный IP адрес',
	'ipmanager_del'		=> 'Удалить',
	'ipmanager_del_process'		=> 'Удаляется...',
	'ipmanager_list_ip'		=> 'Список IP',
	'ipmanager_ip'		=> 'IP',
	'ipmanager_interface'		=> 'Сетевой интерфейс',
	'ipmanager_managment'		=> 'Управление',
	'ipmanager_list6'		=> 'Список IPv6',
    'ipmanager_listipv4'		=> 'Список IPv4',
	'ipmanager_add_ip'		=> 'Добавить новый IP адрес или маршрут',
	'ipmanager_class'		=> 'Class C CIDR (e.g. 192.168.4.128/25)',
	'ipmanager_ip_n'		=> 'IP/Netmask (e.g. 192.168.4.128/255.255.255.128)',
	'ipmanager_ip_r'		=> 'IP Address Range (e.g. 192.168.4.128-255)',	
	'ipmanager_ip_adrr'		=> 'Айпи адрес:',
	'ipmanager_masc'		=> 'Маска подсети:',
	'ipmanager_gaterw'		=> 'Шлюз(опционально):',
	'ipmanager_exclude'		=> 'Исключить ip(опционально):',
	'ipmanager_add_ip_adr'		=> 'Добавить айпи адрес',
	'ipmanager_add_ip_ls'		=> 'Идет добавление IP. Подождите, пожалуйста.',
	'ipmanager_pahf_carantin'	=> 'Путь к карантину:',
 	'ipmanager_text_br'		=> '<br/>',
 	'ipmanager_text_addr'		=> '<b>Добавление адресов:</b><br/>',
 	'ipmanager_text_ipv4_1'		=> 'При добавлении блока ipv4 адресов, используйте PREFIX для указания адреса сети и бродкаста. Пример: x.x.x.x<b>/24</b>, При добавлении одиночного ipv4 адреса, префикс можете не указывать. По умолчанию будет использован /32.<br/>',
 	'ipmanager_text_ipv6_1'		=> 'При добавлении блока ipv6 адресов, используйте PREFIX для указания адреса сети и бродкаста. Пример: xxxx:xxxx:x::xx<b>/64</b>, При добавлении одиночного ipv6 адреса, префикс можете не указывать. По умолчанию будет использован /128.<br/>',
 	'ipmanager_text_route'		=> '<br/><b>Добавление статичесих маршрутов:</b><br/>',
 	'ipmanager_text_route_s'	=> 'При добавлении статического маршрута, укажите в поле <i>Айпи адрес</i> адрес сети и PREFIX. Или вместо PREFIX маску сети в поле <i>маска подсети</i>. В поле шлюза указываете IP шлюза.<br/>',
	'ipmanager_text2'		=> '',
	'ipmanager_text3'		=> '<br/>(При добавлении диапазона ipv6 адресов, в этом поле вы можете перечислить адреса, создание которых нежелательно, разделяя их пробелом. Пример: <b>xxxx:xxxx:x::a xxxx:xxxx:x::b</b><br/>Данные адреса будут исключены из создаваемого диапазона)<br/>',

	'ipmanager_refresh_cacheips_stat'	=> 'Обновить кеш ip',
	'ipmanager_refresh_cacheips_stat_wait'	=> 'Кеш IP обновляется',
	'ipmanager_ips_stat'			=> 'Свободен',
	'ipmanager_error_data_wrongip'		=> 'Неверный формат ip адреса',
	'ipmanager_no_ip'		=> 'Нет ip адресов',
	'ipmanager_nat_ok'		=> 'Ассоциированный IP NAT успешно добавлен. Виртуальные хосты обновлены.',
	'ipmanager_nat_error'		=> 'Ошибка добавление IP NAT.',
	'ipmanager_nat_error0'		=> 'Ошибка добавления IP NAT. Такое устройство уже существует.',
	'ipmanager_ipv6_err_nat'	=> 'Ошибка. Нельзя добавить NAT для IPv6 стека.',
	'ipmanager_ip6_gw'		=> 'Чтобы определить или изменить маршрут по умолчанию для стека IPv6, укажите здесь адрес шлюза в формате X:X:X:X:X:X:X:X. Остальные поля оставьте пустыми.',

	'ipmanager_msg_code'		=> 'Код: ',
	'ipmanager_msg_device'		=> 'Сетевое устройство: ',
	'ipmanager_new_route_add_ok'	=> 'Новый маршрут успешно добавлен.',
	'ipmanager_nat_err_arg'		=> 'Нельзя активировать NAT на VLAN интерфейсе.',
	'ipmanager_nat_err_vlan'	=> 'Ошибка при добовлении нового NAT интерфейса.',
	'ipmanager_nat_err_ip'		=> 'Ошибка при добавлении IP для NAT интерфейса.',
	'ipmanager_err_addr'		=> 'Ошибка формата адреса.',
	'ipmanager_add_gw_ok'		=> 'Новый шлюз по умолчанию успешно установлен.',
	'ipmanager_delete_err'		=> 'Этот адрес не может быть удален, так как его используют виртуальные хосты.',
	'ipmanager_vlan_value_err'	=> 'Недопустимый индификатор VLAN. Допустимые значения от 2 до 4000.',
	'ipmanager_vlan_dev_err'	=> 'Нет такого сетевого устройства.<br>Допустимые: ',
	'ipmanager_vlan_exists_err'	=> 'Такой VLAN уже существует.',
	'ipmanager_vlan_add_err'	=> 'Ошибка при добавлении нового VLAN.',
	'ipmanager_vlan_add_ok'		=> 'Новый VLAN был успешно добавлен.',
	'ipmanager_vlan_del_err'	=> 'Ошибка удаления VLAN.<br>Сначала удалите все назначенные ему IP адреса.',
	'ipmanager_vlan_del_err0'	=> 'Ошибка удаления VLAN.<br>Код: ',
	'ipmanager_vlan_del_ok'		=> 'Сетевой интерфейс был успешно удален.',
	'ipmanager_msg_ipcalc2'		=> 'Пакет ipcalc2 не установлен. Операции с маршрутами не возможны.',
	'ipmanager_ifname_err'		=> 'Ошибка в имени сетевого интерфейса.',
	'ipmanager_prefix_err'		=> 'Ошибка в адресе сети или префиксе.',
	'ipmanager_route_add_err'	=> 'Ошибка в адресе сети или префиксе.',
	'ipmanager_route_address'	=> 'Адрес сети: ',
	'ipmanager_vlan_name_err'	=> 'Ошибка в имени сетевого интерфейса',
	'ipmanager_addr_prefix_err'	=> 'Ошибка в айпи адресе, маске сети или префиксе.',
	'ipmanager_mask_err'		=> 'Ошибка маски.',
	'ipmanager_route_gw_err'	=> 'Ошибка. Указанный адрес шлюза не определен или неверен.',
	'ipmanager_route_ifgw_err'	=> 'Ошибка. Сетевой интерфейс указанного шлюза не обнаружен.',
	'ipmanager_route_exists_err'	=> 'Ошибка в создании нового маршрута. Похоже что такой уже существует',
	'ipmanager_route_del_err'	=> 'Ошибка удаления сетевого маршрута',
	'ipmanager_route_del_ok'	=> 'Сетевой маршрут был удален.',
	'ipmanager_rule_add_no_err'	=> 'Правило не задано.',
	'ipmanager_rule_add_arg_err'	=> 'Ошибка айпи адреса или сети.',
	'ipmanager_rule_add_exists'	=> 'Ошибка, такое правило уже существует.',
	'ipmanager_rule_add_err'	=> 'Ошибка при создании нового правила.',
	'ipmanager_route_add_dev_err'	=> 'Ошибка в параметрах. Не удалось добавить маршрут в таблицу.',
	'ipmanager_route_gateway_err'	=> 'Ошибка в формате адресе шлюза.',
	'ipmanager_route_ifname_err'	=> 'Ошибка в имени сетевого устройства.',
	'ipmanager_route_tabname_err'	=> 'Ошибка в имени таблицы.',
	'ipmanager_route_src_err'	=> 'Ошибка в сетевом адресе маршрута.',
	'ipmanager_route_default_err'	=> 'Не удалось создать новый маршрут по умолчанию.',
	'ipmanager_route_table_err'	=> 'Не удалось добавить маршрут в таблицу.',
	'ipmanager_rule_del_ok'		=> 'Правило успешно удалено.',
	'ipmanager_rule_del_err'	=> 'Ошибка при удалении правила.',
	'ipmanager_rule_route_err'	=> 'Не заданы аргументы для правила или иаршрута.',
	'ipmanager_add_tabname_err'	=> 'Ошибка создания имени таблицы маршрутов.',
	'ipmanager_id_tab_err'		=> 'Ошибка ID таблицы.',
	'ipmanager_add_rule_tab_err'	=> 'Ошибка при добавлении правила в таблицу',
	'ipmanager_add_route_tab_err'	=> 'Ошибка при добавлении маршрута в таблицу',
	'ipmanager_desc_fin_timeout'	=> 'время сохранения сокета в состоянии FIN-WAIT-2',
	'ipmanager_desc_max_orphans'	=> 'допустимых в системе сокетов TCP. Каждое orphan соединение поглощает 64К несбрасываемой на диск памяти',
	'ipmanager_desc_congest'	=> 'протокол, используемый для управления нагрузкой в сетях TCP (bic,cubic,htcp).Рекомендуется использовать htcp',
	'ipmanager_desc_somaxconn'	=> 'максимальное число открытых сокетов, ждущих соединения',
	'ipmanager_arg_err'		=> 'Ошибка в параметрах.',
	'ipmanager_arg_ok'		=> 'Новые параметры применены.',

	'ipmanager_auto_sw'		=> 'Автоматическая загрузка дополнительных интерфейсов и адресов, включая NAT интерфейс',
	'ipmanager_forward_sw'		=> 'Включить форвардинг между сетевыми интерфейсами',
	'ipmanager_ipv6_init'		=> 'Включить поддержку стека IPv6. Внимание! Выключение или перезапуск приведет к полной очисте таблиц маршрутизации IPv6 стека',
	'ipmanager_scope'		=> 'Область видимости',
	'ipmanager_route_list'		=> 'Определенные маршруты основной таблицы маршрутизации',
	'ipmanager_no_route'		=> 'нет определенных статических маршрутов',
	'ipmanager_table_list'		=> 'Дополнительные таблицы правил',
	'ipmanager_no_table'		=> 'нет таблиц с правилами',
	'ipmanager_table_route_list'		=> 'Дополнительные таблицы маршрутов',
	'ipmanager_table_src'		=> 'Маршрут',
	'ipmanager_table_gw'		=> 'Шлюз',
	'ipmanager_table_dev'		=> 'Сетевой интерфейс',
	'ipmanager_table_name'		=> 'Имя таблицы',
	'ipmanager_table_id'		=> 'ID',
	'ipmanager_no_table_route'		=> 'нет таблиц с маршрутами',
	'ipmanager_vlan_list'		=> 'Список VLAN',
	'ipmanager_vlan'		=> 'VLAN',
	'ipmanager_vlan_up'		=> 'Link(Up/Down)',
	'ipmanager_no_vlan'		=> 'нет определенных VLAN интерфейсов',
	'ipmanager_add_vlan'		=> 'Добавить новый VLAN',
	'ipmanager_interface_core'	=> 'Сетевое устройство:',
	'ipmanager_id_vlan'	=> 'ID индификатор (число от 2 до 4000)',
	'ipmanager_add_vlan_btn'	=> 'Добавить VLAN',
	'ipmanager_add_vlan_info'	=> 'Идет добавление...',
	'ipmanager_tbl_id_table'	=> 'имя новой таблицы или существующей:',
	'ipmanager_tbl_id_rule'		=> '(from)адрес для правила:',
	'ipmanager_tbl_id_route'	=> 'адрес маршрута:',
	'ipmanager_tbl_id_route_gw'	=> 'шлюз для маршрута:',
	'ipmanager_tbl_id_route_dev'	=> 'сетевой интерфейс для маршрута:',
	'ipmanager_add_troute_btn'		=> 'Добавить Правило/Маршрут',
	'ipmanager_add_table_info'	=> 'Идет добавление...',
	'ipmanager_ip_nat'	=> 'Ассоциировать этот IP с NAT (в поле <i>Айпи адрес</i> укажите внешний(WLAN) адрес роутера)',
	'ipmanager_change_args'	=> 'Сетевые Параметры Ядра (для экспертов)',
	'ipmanager_change_args_btn'	=> 'Применить',
	'ipmanager_change_args_info'	=> 'Применяется...',


	'ipmanager_text_table_rule_title' => '<b>Добавление нового правила:</b><br>',
	'ipmanager_text_table_rule' => 'Что бы добавить новое правило укажите в поле имя таблицы, новой или существующей, и адрес правила в формате IPv4 или IPv6 плюс /PREFIX.<br>На текущий момент поддерживается только from.',

	'ipmanager_text_table_route_def_title' => '<b>Добавление маршрута по умолчанию:</b><br>',
	'ipmanager_text_table_route_def' => 'Укажите имя таблицы, шлюз и сетевое устройство. В поле <i>Адрес для маршрута</i> укажите ключевое слово <b>default</b>. Поле правило оставьте пустым.',
	'ipmanager_error_remove_ip_cluster'	=> 'Ошибка удаления ip, данный ip добавлен в кластер. Пожалуйста, сменить назначение айпи из раздела Кластер IP, после чего вы сможете его удалить.',
	'ipmanager_confirm_ipdel'	=> 'Вы действительно хотите удалить этот IP',
    'ipmanager_ipmanager_noroute'=>'Флаги',
    'ipmanager_masktitle'		=> 'Маска',
    'ipmanager_ruletitle'		=> 'Правило',
    'ipmanager_addrouteorrule'=>'Добавить Маршрут или Правило в таблицу',
    'ipmanager_addhintipv6'=>'Для ipv6 укажите адрес одного шлюза, что бы определить или изменить маршрут по умолчанию.',
    'ipmanager_mainbase'		=> 'основной',
    'ipmanager_ipv6notexist'=>'нет ipv6 адресов',
    'ipmanager_vlannotexist'=>'нет VLAN интерфейсов',
    'ipmanager_routenotexist'=>'нет определенных маршрутов',
    'ipmanager_tablenotexist'=>'нет определенных таблиц',
    'ipmanager_paramwitherr'=>'Параметры содержат ошибку',
    'ipmanager_nat_dhcp' => 'Протокол NAT не может быть активирован на интерфейсе с активным DHCP протоколом. ',
);