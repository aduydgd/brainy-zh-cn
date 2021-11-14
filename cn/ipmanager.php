<?php
$lang = array(
	'ipmanager_not_permishion' => '您没有足够的权限',
'ipmanager_ added' => '添加',
'ipmanager_error' => '错误,IP已经存在',
'ipmanager_deleted' => '已删除',
'ipmanager_ip_exists' => 'IP 已经存在',
'ipmanager_error_data' => '输入数据错误',
'ipmanager_del_ip' => '无法删除 IP，因为它正被用户的域使用。具有给定 IP 的域数：',
'ipmanager_del_ip_failed_userset' => '无法删除 IP，因为 IP 已添加到用户配置中。具有给定 IP 的用户数：',
'ipmanager_done_success' => '完成成功',
'ipmanager_not_deleted' => '无法删除主 IP 地址',
'ipmanager_del' => '删除',
'ipmanager_del_process' => '正在删除...',
'ipmanager_list_ip' => 'IP 列表',
'ipmanager_ip' => 'IP地址',
'ipmanager_interface' => '网络接口',
'ipmanager_managment' => '管理',
'ipmanager_list6' => 'IPv6 列表',
    'ipmanager_listipv4' => 'IPv4 列表',
'ipmanager_add_ip' => '添加新的 IP 地址或路由',
'ipmanager_class' => 'C 类 CIDR（例如 192.168.4.128/25）',
'ipmanager_ip_n' => 'IP / 网络掩码（例如 192.168.4.128/255.255.255.128）',
'ipmanager_ip_r' => 'IP 地址范围（例如 192.168.4.128-255）',
'ipmanager_ip_adrr' => 'IP 地址：',
'ipmanager_masc' => '子网掩码：',
'ipmanager_gaterw' => '网关（可选）：',
'ipmanager_exclude' => '排除ip（可选）：',
'ipmanager_add_ip_adr' => '添加ip地址',
'ipmanager_add_ip_ls' =>' 正在添加 IP,请稍等',
'ipmanager_pahf_carantin' => '隔离路径：',
 'ipmanager_text_br' => '<br/>',
 'ipmanager_text_addr' => '<b> 添加地址：</b> <br/>',
 'ipmanager_text_ipv4_1' => '当添加一块ipv4地址时，使用PREFIX指定网络和广播地址。示例：x.x.x.x <b> / 24 </b>，添加单个ipv4地址时，前缀可以省略。默认情况下，将使用 /32。<br/> ',
 'ipmanager_text_ipv6_1' => '当添加一块ipv6地址时，使用PREFIX指定网络和广播地址。示例：xxxx: xxxx: x :: xx <b> / 64 </b>，添加单个ipv6地址时，可以省略前缀。默认情况下，将使用 /128。<br/>',
 'ipmanager_text_route' => '<br/> <b> 添加静态路由：</b> <br/>',
 'ipmanager_text_route_s' =>' 添加静态路由时，在<i> IP地址</i>字段中输入网络地址和PREFIX。或者，代替 PREFIX，使用 <i> 子网掩码 </i> 字段中的网络掩码。在网关字段中输入网关的IP。<br/>',
'ipmanager_text2' => '',
'ipmanager_text3' => '<br/> （当添加一个范围的ipv6地址时，可以在这个字段中列出不想创建的地址，用空格隔开。例如：<b> xxxx: xxxx: x :: a xxxx: xxxx: x :: b </b> <br/>这些地址将被排除在创建范围之外) <br/> ',

'ipmanager_refresh_cacheips_stat' => '刷新 ip 缓存',
'ipmanager_refresh_cacheips_stat_wait' => 'IP 缓存正在刷新',
'ipmanager_ips_stat' => '免费',
'ipmanager_error_data_wrongip' => 'IP 地址格式无效',
'ipmanager_no_ip' => '没有 IP 地址',
'ipmanager_nat_ok' => '关联的 IP NAT 已成功添加。虚拟主机已更新',
'ipmanager_nat_error' => '添加 IP NAT 时出错',
'ipmanager_nat_error0' => '添加 IP NAT 失败。这样的设备已经存在',
'ipmanager_ipv6_err_nat' => '错误。无法为 IPv6 堆栈添加 NAT',
'ipmanager_ip6_gw' => '要定义或更改 IPv6 堆栈的默认路由，请以 X: X: X: X: X: X: X: X 格式在此处输入网关地址。将其余字段留空。',

'ipmanager_msg_code' => '代码：',
	'ipmanager_msg_device' => '网络设备：',
'ipmanager_new_route_add_ok' => '新路由添加成功',
'ipmanager_nat_err_arg' => 'NAT 无法在 VLAN 接口上激活',
'ipmanager_nat_err_vlan' => '添加新的 NAT 接口时出错',
'ipmanager_nat_err_ip' => '为 NAT 接口添加 IP 时出错',
'ipmanager_err_addr' => '地址格式错误',
'ipmanager_add_gw_ok' => '新的默认网关安装成功',
'ipmanager_delete_err' => '这个地址不能被删除，因为它正被虚拟主机使用',
'ipmanager_vlan_value_err' => '无效的 VLAN 标识符。有效值是从 2 到 4000',
'ipmanager_vlan_dev_err' => '没有这样的网络设备。<br> 允许：',
'ipmanager_vlan_exists_err' => '这个 VLAN 已经存在',
'ipmanager_vlan_add_err' => '添加新 VLAN 时出错',
'ipmanager_vlan_add_ok' => '新的 VLAN 添加成功',
'ipmanager_vlan_del_err' => '删除VLAN失败。<br>首先，删除分配给它的所有IP地址',
'ipmanager_vlan_del_err0' => '删除 VLAN 时出错。<br> 代码：',
'ipmanager_vlan_del_ok' => '网络接口删除成功',
'ipmanager_msg_ipcalc2' => '未安装 ipcalc2 包。路由操作是不可能的',
'ipmanager_ifname_err' => '网络接口名称错误',
'ipmanager_prefix_err' => '网络地址或前缀错误',
'ipmanager_route_add_err' => '网络地址或前缀错误',
'ipmanager_route_address' => '网络地址：',
'ipmanager_vlan_name_err' => '网络接口名称错误',
'ipmanager_addr_prefix_err' => 'IP 地址、网络掩码或前缀错误',
'ipmanager_mask_err' => '掩码错误。',
'ipmanager_route_gw_err' => '错误。指定的网关地址未定义或无效',
'ipmanager_route_ifgw_err' => '错误。找不到指定网关的网络接口',
'ipmanager_route_exists_err' => '创建新路由时出错。好像已经存在了',
'ipmanager_route_del_err' => '删除网络路由时出错',
'ipmanager_route_del_ok' => '网络路由已被删除',
'ipmanager_rule_add_no_err' => '规则未设置',
'ipmanager_rule_add_arg_err' => 'IP 地址或网络错误',
'ipmanager_rule_add_exists' => '错误，此规则已存在',
'ipmanager_rule_add_err' => '创建新规则时出错',
'ipmanager_route_add_dev_err' => '参数错误。未能将路由添加到表',
'ipmanager_route_gateway_err' => '网关地址格式错误',
'ipmanager_route_ifname_err' => '网络设备名称错误',
'ipmanager_route_tabname_err' => '表名错误',
'ipmanager_route_src_err' => '路由的网络地址有错误',
'ipmanager_route_default_err' => '无法创建新的默认路由',
'ipmanager_route_table_err' => '添加路由到表失败',
'ipmanager_rule_del_ok' => '规则删除成功',
'ipmanager_rule_del_err' => '删除规则时出错',
'ipmanager_rule_route_err' => '没有为规则或路由指定参数',
'ipmanager_add_tabname_err' => '创建路由表名称时出错',
'ipmanager_id_tab_err' => '表 ID 错误',
'ipmanager_add_rule_tab_err' => '向表中添加规则时出错',
'ipmanager_add_route_tab_err' => '将路由添加到表时出错',
'ipmanager_desc_fin_timeout' => '在 FIN-WAIT-2 状态下保存套接字的时间',
'ipmanager_desc_max_orphans' =>' 系统上的有效 TCP 套接字。每个孤立连接消耗 64K 的非刷新内存',
'ipmanager_desc_congest' => '是用于TCP网络拥塞控制的协议(bic,cubic,htcp)。推荐使用htcp',
'ipmanager_desc_somaxconn' => '等待连接的打开套接字的最大数量',
'ipmanager_arg_err' => '参数错误',
'ipmanager_arg_ok' => '已应用新参数',
	'ipmanager_auto_sw' => '自动加载额外的接口和地址，包括 NAT 接口',
'ipmanager_forward_sw' => '启用网络接口之间的转发',
'ipmanager_ipv6_init' => '启用 IPv6 堆栈支持.注意！关闭或重新启动将完全清除 IPv6 堆栈路由表',
'ipmanager_scope' => '范围',
'ipmanager_route_list' => '主路由表的指定路由',
'ipmanager_no_route' => '没有定义静态路由',
'ipmanager_table_list' => '附加规则表',
'ipmanager_no_table' => '没有规则的表',
'ipmanager_table_route_list' => '附加路由表',
'ipmanager_table_src' => '路由',
'ipmanager_table_gw' => '网关',
'ipmanager_table_dev' => '网络接口',
'ipmanager_table_name' => '表名',
'ipmanager_table_id' => 'ID',
'ipmanager_no_table_route'=> '没有路由表',
'ipmanager_vlan_list' => 'VLAN 列表',
'ipmanager_vlan' => 'VLAN',
'ipmanager_vlan_up' => '链接（向上/向下）',
'ipmanager_no_vlan'=> '没有VLAN接口定义的',
'ipmanager_add_vlan' => '添加新的 VLAN',
'ipmanager_interface_core' => '网络设备：',
'ipmanager_id_vlan' => 'ID 标识符（从 2 到 4000 的数字）',
'ipmanager_add_vlan_btn' => '添加 VLAN',
'ipmanager_add_vlan_info' => '正在添加...',
'ipmanager_tbl_id_table' => '新表或现有表的名称：',
'ipmanager_tbl_id_rule' => '规则的（来自）地址：',
'ipmanager_tbl_id_route'=> '路由地址：',
'ipmanager_tbl_id_route_gw' => '路由网关：',
'ipmanager_tbl_id_route_dev' => '路由的网络接口：',
'ipmanager_add_troute_btn' => '添加规则/路由',
'ipmanager_add_table_info' => '正在添加...',
'ipmanager_ip_nat' => '将此 IP 与 NAT 相关联（在 <i> IP 地址 </i> 字段中，指定路由器的外部 (WLAN) 地址）',
'ipmanager_change_args' => '内核网络参数（专家）',
'ipmanager_change_args_btn' => '保存',
'ipmanager_change_args_info' => '适用于...',

'ipmanager_text_table_rule_title' => '<b> 添加新规则：</b> <br>',
'ipmanager_text_table_rule' => '要添加新规则，请在字段中指定表的名称，新的或现有的，以及 IPv4 或 IPv6 格式加上 / PREFIX 的规则地址。<br> 目前仅支持 from',

'ipmanager_text_table_route_def_title' => '<b> 添加默认路由：</b> <br>',
'ipmanager_text_table_route_def' => '指定表名、网关和网络设备。在<i> 路由地址</i> 字段中，输入关键字<b> default </b>。将规则字段留空',
'ipmanager_error_remove_ip_cluster' => '删除 ip 时出错，此 ip 已添加到集群中。请在 IP Cluster 部分更改 IP 分配，之后您可以将其删除',
'ipmanager_confirm_ipdel' => '你真的要删除这个IP',
    'ipmanager_ipmanager_noroute' => '标志',
    'ipmanager_masktitle' => '掩码',
    'ipmanager_ruletitle' => '规则',
    'ipmanager_addrouteorrule' => '添加路由或规则到表',
    'ipmanager_addhintipv6' => '对于ipv6，输入一个网关的地址来定义或更改默认路由',
    'ipmanager_mainbase' => 'main',
    'ipmanager_ipv6notexist' => '没有 ipv6 地址',
    'ipmanager_vlannotexist' => '没有 VLAN 接口',
    'ipmanager_routenotexist' => '没有定义路由',
    'ipmanager_tablenotexist' => '没有定义表',
    'ipmanager_paramwitherr' => '参数包含错误',
    'ipmanager_nat_dhcp' => 'NAT 不能在具有活动 DHCP 协议的接口上激活',
);