<?php
    $lang = array(
        'backup' => 'Резервные копии',
        'backuptitle' => 'Резервные копии',

        'backup_nametask' => 'Имя задания',
        'backup_list_config' => 'Список настроенных заданий',

        'backup_remoteip' => 'IP сервера для удаленного бэкапа',
        'backup_remote_login' => 'Логин',
        'backup_remote_pass' => 'Пароль',
        'backup_remote_path' => 'Папка на удаленном сервере',


        'backup_pathlocal' => 'Путь для локального бэкапа',
        'backup_type_arch_array' => 'Архиватор',
        'backup_type_arch_noarch' => 'Без сжатия',
        'backup_type_arch_incr_no_arch' => 'Инкрементный без сжатия',
        'backup_type_simple_noarch' => 'Без сжатия',
        'backup_type_arch_incr_tar' => 'Инкрементный tar',


        'backup_type_arch_incr_noarch' => 'Инкрементный без сжатия',
        'backup_type_arch_tar' => 'tar',
        'backup_type_arch_simple_noarch' => 'Без сжатия',

        'backup_repotype_local' => 'Локальная директория',
        'backup_repotype_remote' => 'Удаленный сервер',
        'backup_repotype_ftp' => 'FTP',
        'backup_repotype_YandexDisk' => 'Яндекс Диск',
        'backup_repotype_GoogleDrive' => 'GoogleDrive',
        'backup_repotype_GDrive' => 'GDrive',
        'backup_repotype_Dropbox' => 'Dropbox',



        'backup_period' => 'Период',
        'backup_period_day' => 'Ежедневно',
        'backup_period_week' => 'Еженедельно',
        'backup_period_month' => 'Ежемесячно',

        'backup_time_start' => 'Время запуска',
        'backup_count_backupsday' => 'Ежедневных архивов',
        'backup_count_backupsweek' => 'Еженедельных архивов',
        'backup_count_backupsmonth' => 'Ежемесячных архивов',

        'backup_level_compress' => 'Уровень сжатия',
        'backup_level_compress_default' => 'По умолчанию',

        'backup_repo' => 'Тип хранилища',
        'backup_repo_local' => 'Локальная директория',
        'backup_repo_remote' => 'Удаленный сервер',
        'backup_repo_typeauth' => 'Тип авторизации',
        'backup_repo_typeauthpass' => 'По паролю',
        'backup_repo_typeauthkey' => 'По ключу',
        'backup_repo_inputkey' => 'Публичный ключ',
        'backup_repo_inputkey_private' => 'Приватный ключ',
        'backup_path_to_restore' => 'Путь для восстановления',
        'backup_repo_btngeneratekey' => 'Сгенерировать ключ',
        'backup_rsync_speed_limit_kb' => 'Ограничить скорость в кб/с',
        'backup_save' => 'Сохранить',
        'backup_update' => 'Обновить',
        'backup_delete' => 'Удалить',
        'backup_delete_success' => 'Конфигурация успешно удалена',
        'backup_delete_unsuccess' => 'При удалении конфигурации произошла ошибка',
        'backup_add_task' => 'Добавить задание',
        'backup_save_success' => 'Сохранено успешно',
        'backup_create_pleasewait' => 'Идет процесс создания бэкапа',
        'backup_restoring_pleasewait' => 'Идет процесс восстановления бэкапа',
        'backup_restorto_now_dir' => 'Выполняется восстановление в: ',

        'backup_createarch' => 'Создать бэкап в tar',
        'backup_createarch_success' => 'Бэкап в tar создан успешно',
        'backup_createarch_unsuccess' => 'Создание бэкапа в tar произошло с ошибкой',
        'backup_create_inprogress' => 'Создание бэкапа в процессе: ',
        'backup_create_speed' => 'Скорость: ',
        'backup_estimated_time_remaining' => 'Осталось: ',

        'backup_create_backup_now' => 'Запустить создание бэкапа сейчас',

        'backup_namebackup' => 'Название',
        'backup_datebackup' => 'Дата',
        'backup_sizebackup' => 'Размер',
        'backup_option_t' => 'Опции',
        'backup_download' => 'Скачать бэкап',
        'backup_restore' => 'Восстановить',
        'backup_size_ci' => 'Мб',
        'backup_not_perm' => 'Нет прав',
        'backup_error_connect_remote_key' => 'Ошибка авторизации по ключу на удаленный сервер',
        'backup_error_connect_remote_pass' => 'Ошибка авторизации по паролю на удаленный сервер',
        'backup_name_config' => 'Имя задания бэкапирования',
        'backup_ip_remote_server' => 'IP удаленного сервера',
        'backup_check_connect_remote_server' => 'Проверить соединение',
        'backup_check_connect_remote_server_ok' => 'Соединение успешно установлено',
        'backup_check_connect_remote_server_failed' => 'Соединение не установлено!',
        'backup_please_wait_conn' => 'Пожалуйста, подождите',
        'backup_list_users' => 'Список пользователей',
        'backup_make_for_all_users' => 'Создавать бэкап для всех пользователей',
        'backup_manager_files' => 'Выборочное восстановление файлов',
        'backup_manager_files_title' => 'Управление файлами резервной копии',
        'backup_manager_files_no_perm' => 'Нет прав для доступа в данный каталог',
        'backup_manager_restorefile_path' => 'Укажите путь для восстановления файла',
        'backup_manager_restoredir_path' => 'Укажите путь для восстановления папки',
        'backup_manager_restorefile_path_start_modal' => 'Начать',
        'backup_manager_db' => 'Выборочное восстановление',
        'backup_manager_db_list' => 'Список баз',
        'backup_manager_dbuser_list' => 'Список пользователей баз данных',
        'backup_namebackup_db' => 'База',
        'backup_namebackup_db_download' => 'Скачать',
        'backup_namebackup_db_restore' => 'Восстановить',
        'backup_namebackup_dbuser' => 'Пользователь',
        'backup_restore_selusers' => 'Восстановить выбранных пользователей',
        'backup_restore_seldbs' => 'Восстановить выбранные базы',
        'backup_download_seldbs' => 'Подготовить выбранные базы',
        'backup_db_copy_inprogress' => 'База готовится к скачиванию',
        'backup_db_copy_done' => 'База готова к загрузке',
        'backup_db_restoring' => 'База восстанавливается',
        'backup_db_restoring_finish' => 'База восстановлена',
        'backup_dbuser_restoring' => 'Пользователь восстанавливается',
        'backup_dbuser_restoring_finish' => 'Пользователь восстановлен',
        'backup_db_select_all' => 'Выбрать все',
        'backup_db_denywrite_backups' => 'Запрет записи в бэкапы',
        'backup_restoring_start' => 'Восстановление начато',
        'backup_no_saved_config' => 'Нет сохраненных конфигов',
        'backup_hist_nameconf' => 'Имя конфигурации восстановления',
        'backup_hist_typerest' => 'Тип восстановления',
        'backup_hist_start_rest' => 'Время старта',
        'backup_hist_end_rest' => 'Время завершения',
        'backup_history_stat_rest_progress' => 'Восстановление в процессе',
        'backup_history_stat_rest_end' => 'Восстановление завершено',
        'backup_viewlog' => 'Просмотр лога',
        'backup_full_copy_inprogress' => 'Полный бэкап готовится к скачиванию',
        'backup_full_copy_done' => 'Полный бэкап готов к скачиванию',
        'backup_saversa' => 'Сохранить ключ',
        'backup_keysavenew_ok' => 'Ключ сохранен успешно',
        'backup_start_restore_el' => 'Восстановление в процессе. Подробнее на вкладке История восстановлений',
        'backup_download_prepare_arch' => 'Скачать подготовленный бэкап от ',


        'backup_nameconf' => 'Имя',
        'backup_pathfold' => 'Путь для бэкапа',
        'backup_type_arch' => 'Тип бэкапа',

        'backup_config_edit' => 'Редактировать',
        'backup_config_remove' => 'Удалить',

        'backup_cancel_update_conf' => 'Отменить',
        'backup_timeconf' => 'Дата',
        'backup_weekly_mon_full' => 'Понедельник',
        'backup_weekly_mon_short' => 'Пн',
        'backup_weekly_tue_full' => 'Вторник',
        'backup_weekly_tue_short' => 'Вт',
        'backup_weekly_wed_full' => 'Среда',
        'backup_weekly_wed_short' => 'Ср',
        'backup_weekly_thu_full' => 'Четверг',
        'backup_weekly_thu_short' => 'Чт',
        'backup_weekly_fri_full' => 'Пятница',
        'backup_weekly_fri_short' => 'Пт',
        'backup_weekly_sat_full' => 'Суббота',
        'backup_weekly_sat_short' => 'Сб',
        'backup_weekly_sun_full' => 'Воскресенье',
        'backup_weekly_sun_short' => 'Вс',
        'backup_weekly_short_arr' => array('Пн','Вт','Ср','Чт','Пт','Сб','Вс'),
        'backup_weekly_select_days' => 'Выберите дни недели для запуска',
        'backup_monthly_select_date' => 'Укажите даты для запуска',

        'backup_pathlocaldir_wrong' => 'Неверный формат папки бэкапа',
        'backup_pathremotedir_wrong' => 'Неверный формат удаленной папки бэкапа',
        'backup_remoteip_wrong' => 'Неверный формат ip удаленного сервера',
        'backup_typearch_wrong' => 'Неверный формат типа архива',
        'backup_repo_wrong' => 'Неверный тип бэкапа',
        'backup_remote_login_wrong' => 'Неверный формат логина',
        'backup_nametask_wrong' => 'Неверный формат имени задания',
        'backup_period_wrong' => 'Неверный формат периода',
        'backup_time_start_wrong' => 'Неверный формат времени запуска. Должно быть в формате 00:00:00',
        'backup_weekly_days_wrong' => 'Неверный формат диапазона дней',
        'backup_monthly_select_date_wrong' => 'Неверный формат диапазона дат',
        'backup_level_compress_wrong' => 'Неверный формат уровня сжатия',
        'backup_type_auth_wrong' => 'Неверный тип авторизации',
        'backup_level_compress_wrong' => 'Неверный формат уровня сжатия',
        'backup_rsync_speed_limit_kb_wrong' => 'Неверный формат скорости передачи. Должно быть целое число',
        'backup_denywritebackup_wrong' => 'Неверный формат допуска редактирования бэкапа',

        'backup_add_day_start' => 'Добавить дату запуска',
        'backup_remove_day_start' => 'Удалить',
        'backup_please_wait_load_listbackups' => 'Пожалуйста подождите, идет загрузка списка бэкапов',
        'backup_please_wait_load_listbackups_conf' => 'Пожалуйста подождите, идет загрузка списка заданий',

        'backup_delete_backup' => 'Удалить',
        'backup_download_new_prepare_arch' => 'Скачать заново',
        'backup_conf_status' => 'Активно',
        'backup_error_connect_remote_any' => 'Ошибка авторизации',
        'backup_error_connect_remote_AuthOknotenoughright' => 'Авторизация пройдена успешно, но недостаточно прав для записи в удаленную папку.',

        'backup_nodbbackup' => 'Отсутствуют базы данных в резервной копии',
        'backup_nodbuserbackup' => 'Отсутствуют пользователи баз данных в резервной копии',
        'backup_noemailsinbackup' => 'Отсутствуют почтовые ящики в резервной копии',
        'backup_last_updated_process_fullprep_backup' => 'Полный бэкап готовится к скачиванию. Последнее время проверки процесса',

        'backup_create_pleasewait_gototablistbackup' => 'Процесс создания бэкапа запущен. <br/>Процесс выполнения отображается на вкладке История бэкапирований.',
        'backup_refresh_listbackup_nocache' => 'Обновить список бэкапов',

        'backup_addjob_success' => 'Задание бэкапирования добавлено успешно.',
        'backup_editjob_ok' => 'Задание отредактировано успешно.',

        'backup_manage_jobs' => 'Управление заданиями',
        'backup_list_jobs' => 'Список бэкапов',
        'backup_history_restores' => 'История восстановлений',
        'backup_cron_not_run_att' => 'Внимание! CROND не запущен на сервере. Модуль может работать некорректно. Установите и запустите crond для корректной работы.',
        'backup_create_newjob' => 'Создать задание',
        'backup_list_backups' => 'Список бэкапов',
        'backup_search_backups' => 'Поиск по бэкапам',
        'backup_histrory_restoring' => 'История восстановлений',
        'backup_prepare_fordownload' => 'Подготовить для скачивания',
        'backup_prepare_fordownload_hint' => 'Выполнить копирование с удаленного источника в домашнюю папку пользователя /tmpb',

        'backup_createbackup_confusercms_ok' => 'Бэкап конфигурации CMS пользователя успешно создан',
        'backup_createbackup_confusermain_ok' => 'Бэкап конфигурации пользователя успешно создан',
        'backup_createbackup_usersftp_ok' => 'Бэкап FTP пользователей успешно создан',
        'backup_createbackup_db_users_ok' => 'Бэкап пользователей базы данных успешно создан',
        'backup_restore_useracc_ok' => 'Восстановление пользователя успешно завершено',

        'backup_restore_dbs_ok' => 'Восстановление базы данных пользователя успешно завершено',
        'backup_restore_dbsusers_ok' => 'Восстановление пользователей базы данных успешно завершено',

        'backup_createbackup_usersvhost_ok' => 'Бэкап виртхостов пользователя успешно завершено',
        'backup_restore_usersvhost_ok' => 'Восстановление виртхостов пользователя успешно завершено',
        'backup_backups_jobs_ok' => 'Бэкапирование заданий бэкапирования успешно завершено',

        'backup_deletebackup_err' => 'Произошла ошибка при удалении бэкапа. Недостаточно прав.',


        'backup_no_seldb_download' => 'Ни одна база не выбрана. Пожалуйста выберите базы и повторите.',

        'backup_no_seldbuser_download' => 'Ни один пользователь базы не выбран. Пожалуйста выберите пользователя и повторите.',

        'backup_manager_restorefile_confirm' => 'Подвердите начало восстановление файла',
        'backup_manager_restoredir_confirm' => 'Подвердите начало восстановление директории',

        'backup_manager_restoredirfile_address' => 'по адресу',

        'backup_local_dir_userbackup' => 'Пожалуйста укажите не корневую директорию для создания бэкапа.',

        'backup_notselect_userbackup' => 'Пожалуйста выберите пользователей для бэкапирования.',

        'backup_restore_emails_ok' => 'Почтовые аккаунты пользователя восстановлены успешно.',
        'backup_restore_emails_routeok' => 'Настройки маршрутизации почты пользователя восстановлены успешно.',
        'backup_restore_forward_emails_ok' => 'Перенаправления почтовых аккаунтов пользователя восстановлены успешно.',
        'backup_restore_dns_user_ok' => 'DNS записи восстановлены успешно.',

        'backup_wrong_format_type_store' => 'Неверный тип хранилища',
        'backup_wrong_format_type_backup' => 'Неверный тип бэкапа',


        'backup_restore_dkim_keys_user_ok' => 'DKIM ключи восстановлены успешно.',

        'backup_period_runcreatebackup' => 'Время запуска',
        'backup_period_intime' => ' в ',
        'backup_period_ondays' => ' по числам ',

        'backup_restore_userincludes_ok' => 'Индивидуальная донастройка виртхостов восстановлены успешно.',

        'backup_restore_passdir_user_ok' => 'Пароли на директории восстановлены успешно.',
        'backup_restore_httpdredir_user_ok' => 'HTTP переадресации восстановлены успешно.',
        'backup_restore_siteredir_user_ok' => 'Переадресации сайтов восстановлены успешно.',
        'backup_restore_opti_user_ok' => 'Настройки оптимизации работы сайтов восстановлены успешно.',

        'backup_backup_pathlocal_wrong_dir' => 'Неверная директория в конфиге бэкапа backup_pathlocal.',
        'backup_confirm_start_full_rest' => 'Подтвердите начало восстановления полного бэкапа.',
        'backup_confirm_start_yes' => 'Да',
        'backup_confirm_start_no' => 'Нет',

        'backup_confirm_rest_user_exist' => 'Восстанавливаемый пользователь уже существует. Подтвердите восстановление с заменой всех данных из бэкапа.',

        'backup_not_found' => 'Бэкапы не найдены',

        'backup_sel_date' => 'Выберите дату',
        'backup_rest_wait' => 'Пользователь восстанавливается. Пожалуйста, подождите.',
        'backup_hist_empty' => 'Восстановлений бэкапов еще не было',
        'backup_cronjob_empty' => 'Задания бэкапирования не добавлены',
        'backup_manager_restoredir_file_confirm' => 'Подвердите начало восстановление данных',

        'backup_config_sendemail_aftercomplete' => 'Отправить email после завершения',
        'backup_config_sendemail_aftercomplete_list_fail' => 'Список почтовых ящиков для отправки результата бэкапирования имеет неверный формат',

        'backup_complete_titleemail' => 'Процесс бэкапирования завершен. Задание ',
        'backup_complete_titleemail_ok' => 'Процесс бэкапирования завершен успешно',
        'backup_complete_time_start' => 'Время начала: ',
        'backup_complete_time_end' => 'Время окончания: ',
        'backup_complete_table_size' => 'Размер',
        'backup_complete_table_path' => 'Путь',

        'backup_complete_restore_email' => 'Отправить емейл по завершению восстановления',
        'backup_complete_restore_email_hint' => 'Введите емейл',

        'backup_config_sendemail_aftercomplete_list_fail_rest' => 'Список почтовых ящиков для отправки результата восстановления имеет неверный формат',

        'backup_complete_titleemail_rest' => 'Процесс восстановления резервной копии завершен. Имя задания: ',
        'backup_complete_titleemail_ok_rest' => 'Процесс восстановления резервной копии завершен успешно',
        'backup_complete_titleemail_ok_rest_username' => 'Имя пользователя',
        'backup_complete_timeduration' => 'Выполнено за: ',
        'backup_complete_timeduration_minute' => 'минут',

        'backup_conf_title_hourtitle' => 'чч:мм ',


        'backup_encryptfile' => 'Зашифровать бэкап',
        'backup_encryptfilesetpass' => 'Установить пароль',
        'backup_encbackupenterpass' => 'Введите пароль',
        'backup_encbackupenterpassretype' => 'Повторите пароль',
        'backup_encbackupenterpassmismatch' => 'Пароли для шифрования бэкапа не совпадают',

        'backup_enterpassencback' => 'Введите пароль зашифрованного бэкапа',
        'backup_enterpassencback_wrong' => 'Неверный пароль от зашифрованного бэкапа',
        'backup_enterpassencback_ok' => 'Пароль от зашифрованного бэкапа верный. Восстановление начато.',
        'backup_enterpassencback_okPending' => 'Восстановление начато. <br/>Пароль от зашифрованного бэкапа будет проверен в процессе восстановления.<br/>Детали на вкладке История восстановлений.',
        'backup_confirmremovebackup' => 'Подтвердите удаление бэкапа',

        'backup_maxcountbackups' => 'Количество копий (0-не удалять)',
        'backup_wrongformat_maxcountbackups' => 'Неверный формат максимального количества копий бэкапов. Должно быть целое число.',

        'backup_email_placeholsendcomplete' => 'Введите емейлы через ;, или пробел',

        'backup_email_hint_arch' => "<b>Инкрементный без сжатия</b> - при первом создании бэкапа будут скопированы все файлы, при последующих бэкапах будут обновлены в резервной копии только измененные файлы.<br/><b>tar</b> - создается файл с расширением tar, в настройках можно указать степень сжатия (влияет на скорость создания бэкапа).<br/><b>Без сжатия</b> - в отличии от инкрементного бэкапирования будут копироваться всегда все файлы.",

        'backup_email_hint_crypt' => 'Файл резервной копии будет зашифрован. Для восстановления бэкапа необходимо ввести пароль.',
        'backup_email_hint_sendemail' => 'После завершения создания резервной копии на указанный(ые) емейлы будет отправлено сообщение о завершении.',
        'backup_db_denywrite_backups_desc' => 'Пользователи не имеют прав на редактирование файлов в созданном бэкапе',
        'backup_hint_speed' => 'Не ограничивать скорость - 0',
        'backup_edit_job_name' => 'Редактировать задание',

        'backup_mass_backup_remove' => 'Удалить выбранные',
        'backup_mass_backup_selectall' => 'Выбрать все',
        'backup_mass_backup_unselectall' => 'Убрать выделение',
        'backup_mass_backup_capt_confirm_del' => 'Подтвердите удаление',
        'backup_universal_yes' => 'Да',
        'backup_universal_no' => 'Нет',
        'backup_cancelcurrent_autoupdatelist' => 'Остановить автообновление списка бэкапов через ',

        'backup_restonefile_label' => 'Восстановить полный бэкап пользователя из архива',
        'backup_restonefile_label_hint' => 'Архив должен быть в формате .tgz или .tgz.encoded, который создает панель при создании бэкапа по расписанию',
        'backup_restonefile_selarch_load' => 'Выберите архив',
        'backup_restonefile_selarch_load_notsel' => 'файл не выбран',
        'backup_restonefile_selarch_loadhard' => 'Загрузка с устройства',
        'backup_restonefile_selarch_local' => 'Полный локальный путь',
        'backup_restonefile_selarch_url' => 'URL',
        'backup_restonefile_selarch_ftp' => 'FTP',

        'backup_restonefile_selarch_loadhard_short' => 'С устройства',


        'backup_restonefile_archenc_enterpass' => 'Введите пароль от закодированного бэкапа',

        'backup_restonefile_start_restore' => 'Начать восстановление',
        'backup_listtasktitle' => 'Список заданий',
        'backup_pin_restore_from' => 'Восстановить из архива',

        'backup_restonefile_start_restore_confirm' => 'Подтвердите начало восстановления пользователя ',
        'backup_restonefile_warning_notsel' => 'Файл для восстановления не выбран.',
        'backup_restonefile_warning_ownerdeny' => 'Вы не имеете прав на восстановление пользователя ',

        'backup_restoreone_start' => 'Восстановление резервной копии начато в фоновом процессе.',

        'backup_restoreone_pathnotexist_local' => 'Указанного файла не существует. Пожалуйста, проверьте путь.',
        'backup_restoreone_pathnotexist_url' => 'По указанному URL файла не существует. Пожалуйста, проверьте адрес.',
        'backup_restoreone_pathnotexist_ftp' => 'По указанному FTP адресу файла не существует. Пожалуйста, проверьте адрес и данные авторизации на FTP сервер',
        'backup_restoreone_UnableResolve' => 'По указанному FTP адресу невозможно подключиться. Проверьте FTP адрес.',
        'backup_restoreone_noSuch' => 'По указанному пути на FTP файла не существует.',


        'backup_history_backups' => 'История бэкапирований',
        'backup_history_namebackup' => 'Имя конфигурации бэкапирования',
        'backup_history_pathbackup' => 'Путь бэкапирования',
        'backup_history_backupnorunyet' => 'Бэкапирование еще не выполнялось',
        'backup_history_backupinprog' => 'Бэкапирование в процессе',

        'backup_ya_noconn' => 'Не могу подключиться к Яндекс.',
        'backup_ya_server_err' => 'Сервер не поддерживает webdav или имя пользователя и пароль неверные',

        'backup_gdrive_verifyplease' => 'Пожалуйста, перейдите по ссылке и разрешите доступ к GoogleDrive',
        'backup_gdrive_verifypleaseHintOpt' => 'Ссылка будет сгенерирована в случае неуспешного подключения после нажатия на кнопку Проверить соединение ',

        'backup_gdrive_verifyplease_enterhere' => 'После получения кода введите его в поле Верификационный код и повторно нажмите Проверить соединение',

        'backup_verifypleaseSucOk' => 'Если все в порядке, будет получено сообщение Соединение успешно установлено',


        'backup_gdrive_label_entervercode' => 'Верификационный код',

        'backup_gdrive_gotoverify' => 'Разрешить доступ',
        'backup_gdrive_error_connect' => 'Ошибка подключения',

        'backup_share_activetaskhint' => 'Задание активно и будет выполняться в указанное время',

        'backup_gdrive_label_access_token' => 'Маркер доступа(Access Token)',

        'backupDropboxInstruction' => 'Получение доступа к Dropbox аккаунту. Выполните следующие инструкции: <br/> 1. Перейдите по <a target=``_blank`` href=``https://www.dropbox.com/developers/apps``>ссылке</a> и авторизуйтесь<br/>2. Нажмите на `Create App`, затем выберите `Dropbox Legacy API`, предоставьте полный доступ(Full Dropbox – Access to all files and folders in a users Dropbox.) и укажите имя для приложения<br/>3. Войдите в настройки разрешений, выберите все галочки индивидуального доступа и сохраните<br/> 4. Вернитесь в настройки, выберите срок действия токена бессрочный и нажмите на кнопку Генерация(Generate button) под `Generated access token` секцией<br/> 5. Скопируйте и вставьте маркер доступа в поле <b>Маркер доступа(Access Token) конфигурации бэкапов</b> и снова нажмите Проверить соединение',

        'backup_dropbox_message_createbackup_failed' => 'Ошибка при создании бэкапа на Dropbox. Подключение к Dropbox невозможно, проверьте актуальность токенов.',

        'backup_tokens_remove' => 'Удалить сохраненную авторизацию',
        'backup_tokens_remove_ok' => 'Авторизация успешно удалена',
        'backup_tokens_remove_failed' => 'Авторизация не удалена. Ошибка доступа',

        'backup_failedconn_getlist_task' => 'Задание: ',
        'backup_dropbox_noconn' => 'Не могу подключиться к Dropbox.',
        'backup_gdrive_noconn' => 'Не могу подключиться к GoogleDrive.',
        'backup_ftp_noconn' => 'Не могу подключиться к FTP.',
        'backup_remoteserv_noconn' => 'Не могу подключиться к удаленному серверу.',

        'backup_hint_cachelistbackup' => 'Список бэкапов кешируется.<br/>Обновление происходит автоматически каждые 10 минут.<br/>Для получения самого актуального списка нажмите Обновить список бэкапов',

        'backup_listbackup_time' => 'Время создания списка ',

        'backup_listbackup_cacheupdnot' => 'Пожалуйста, подождите, идет обновление списка бэкапов.',

        'backup_hist_type_rest_db' => 'Базы данных',
        'backup_hist_type_rest_dbuser' => 'Пользователи базы данных',
        'backup_hist_type_rest_file' => 'Файлы пользователя',
        'backup_hist_type_rest_full' => 'Полное',

        'backup_list_countnow_backups' => 'Количество резервных копий: ',
        'backup_list_noclosepage' => 'Пожалуйста, не перезагружайте страницу в процессе загрузки!',
        'backup_list_ftppasshint' => 'Для доступа к FTP по паролю используйте формат: ftp://login:password@ftp.example.org/some_file',
        'backup_list_maxpostover' => 'При загрузке файла резеврной копии произошла ошибка. Похоже что загружаемый файл превышает post_max_size или upload_max_filesize в php.ini. Пожалуйста, увеличьте значение этих директив минимум до размера загружаемого файла или обратитесь к администратору.',

        'backupYaErrcreateDir' => 'Невозможно создать директорию на ЯндексДиске. Проверьте: наличии файла с таким же именем, наличие свободного места.',
        'backupYaErrAuthFailed' => 'Ошибка авторизации на ЯндексДиск',

        'backupLabelToken' => 'Токен',

        'backupHintInstallToken' => 'Инструкция по настройке авторизации',

        'backupYandexInstructionGetOAuth' => 'Получение доступа к Яндекс диску. Выполните следующие инструкции: <br/> 1. Перейдите по <a target=``_blank`` href=``https://oauth.yandex.ru/``>ссылке</a> и авторизуйтесь<br/>2. Нажмите на `Зарегистрировать новое приложение`<br/>3.  Выполните необходимые настройки, указав Название приложения, Описание приложения. В секции Платформы отметьте пункт Веб-сервисы и нажмите кнопку Подставить URL для разработки<br/>4. В секции Доступы выберите все пункты Яндекс.Диск REST API<br/>5. Теперь нажмите на Создать приложение<br/>6. Когда Ваше приложение будет успешно создано, перейдите по адресу https://oauth.yandex.ru/authorize?response_type=token&client_id=ВАШ_АЙДИ заменив ВАШ_АЙДИ на ID приложения<br/> 7. Нажмите кнопку Разрешить для подтверждения запроса доступа<br/> 8. Скопируйте и вставьте токен в поле <b>Токен конфигурации бэкапов</b> и снова нажмите Проверить соединение',

        'backupHintUseKeysAuth' => 'Авторизация с помощью ключа<br/><br/> 1. Сгенерируйте ключ<br/><br/> 2. На <b>удаленном сервере</b> в файл /имя пользователя/.ssh/authorized_keys добавьте строку с содержимым Публичного ключа ssh-rsa<br/>',

        'backup_restoring_startModal' => 'Восстановление начато.<br/> Детали на вкладке История восстановлений',

        'backup_hintPeriodRun' => '<b>Инкрементный + Ежедневно.</b> Количество резервных копий = 1 бэкап, формат имени user_айдибэкапа_incr<hr/><b>Без сжатия(tar) + Ежедневно.</b> Количество резервных копий = только ограничение параметром Количество копий, формат user_айдибэкапа_ГГММДД_s<hr/><b>Инкрементный + Еженедельно.</b> Количество резервных копий = количество выбранных дней для бэкапа, формат user_айдибэкапа_деньнедели<hr/><b>Без сжатия(tar) + Еженедельно.</b> Количество резервных копий = только ограничение параметром Количество копий, формат user_айдибэкапа_ГГММДД_деньнедели_s<hr/><b>Инкрементный + Ежемесячно.</b> Количество резервных копий = количество выбранных дней для бэкапа, формат user_айдибэкапа_дата_m<hr/><b>Без сжатия(tar) + Ежемесячно.</b> Количество резервных копий = только ограничение параметром Количество копий, формат user_айдибэкапа_ГГММДД_m_s',

        'backup_logs_stat_deleted' => 'Удален',
        'backup_logs_stat_deletedInfo' => 'Файл лога удален',
        'backup_titleLogHistBacks' => 'История бэкапирования',

        'backup_titleDialogEnterPassBackup' => 'Скачиваемый бэкап зашифрован. Для расшифровки бэкапа введите пароль и нажмите скачать.',

        'backup_titleDialogStartRestore' => 'Восстановление бэкапа: ',
        'backup_titleDialogCheckPassEncoded' => 'Пожалуйста, подождите',
        'backup_titleDialogCheckWaitExist' => 'Пожалуйста, подождите.',
        'backup_titleDialogEnterpassRequire' => 'Введите пароль для зашифрованного бэкапа.',
        'backup_FailedConnWhileCreateBackupRemote' => 'Ошибка подключения к удаленному серверу. Пожалуйста, проверьте настройки соединения.',

        'backup_UnpackEncodedBackupTitle' => 'Распаковать зашифрованный бэкап в локальную папку пользователя?',

        'backup_btnUnpackCancel' => 'Закрыть',
        'backup_btnUnpackFailedLog' => 'Ошибка дешифрования бэкапа. Неверный пароль.',

        'backup_changeIP' => 'Сменить IP адрес аккаунта',

        'backup_gdriveGetFilesTempError' => 'Временная ошибка получения списка файлов gDrive. Пожалуйста, повторите еще раз. Если ошибка не исчезнет проверьте настройки файрвола.',

        'backup_mass_backupRestore' => 'Восстановить выбранные',
        'backup_mass_backupNothingSel' => 'Ничего не выбрано',
        'backup_mass_backupRestoreSomeConfirm' => 'Восстановить несколько пользователей?',
        'backup_mass_backupRestoreSelMultBackForOneUser' => 'Выбрано несколько бэкапов для восстановления для одного пользователя.',
        'backup_mass_backupRestoreCodeOneItem' => 'Восстановление зашифрованных бэкапов возможно только по одному',

        'backupStopMakeBackup' => 'Остановить создание бэкапа',
        'backupStopMakeBackupConfirm' => 'Остановить создание бэкапа? <br/>Внимание! Прерывание создания бэкапа не удаляет уже созданные файлы по адресу резервной копии.',
        'backupStopMakeBackupOk' => 'Создание бэкапа остановлено',
        'backupStopMakeBackupCancelLog' => 'Прервано пользователем',

        'backupStopMakeRestore' => 'Остановить восстановление бэкапа',
        'backupStopMakeRestoreConfirm' => 'Остановить восстановление бэкапа? <br/>Внимание! Прерывание восстановления бэкапа не возращает хост-аккаунт в старое состояние до восстановление, а лишь останавливает процесс по требованию.',
        'backupStopMakeRestoreOk' => 'Восстановление бэкапа остановлено',
        'backupStopMakeRestoreCancelLog' => 'Восстановление прервано пользователем',
        'backupFullListRestUser' => 'Полный список восстановленных пользователей',

        'backup_FailedCreateDir' => 'Ошибка создания директории на удаленном сервере. Пожалуйста, проверьте, что указанный пользователь в параметрах подключения имеет права на запись в указанный каталог.',
        'backupRemoteConnPort' => 'Порт',
        'backupRemoteConnPortHolder' => 'По умолчанию порт для ssh - 22, для ftp - 21',
        'backupRemoteConnPortErr' => 'Порт для подключения должен быть целым числом',
        'backupDbSizeMB' => 'мб',
        'backupDbSizeKB' => 'кб',
        'backupDbSizeB' => 'б',
        'backupGmailQuotaInfo' => 'Доступно дискового пространства на google drive: ',
        'backupDropQuotaInfo' => 'Доступно дискового пространства на dropbox: ',
        'backupEstimatedSize' => 'Максимально предполагаемый размер архива: ',
        'backupGmailOverQuota' => 'Превышена допустимая квота на google drive. Пожалуйста, освободите место.',
        'backupGmailOverQuotaAllow' => 'Доступно ',
        'backupGmailOverQuotaRequire' => 'Необходимо ',
        'backupGmailWarning' => 'Доступно менее 500Мб, создание резервной копии невозможно. Пожалуйста освободите место.',
        'backupFewSpace' => 'Недостаточно места. Бэкапирование не выполнено. Задание ',
        'backupRestoreLoggingRotateOk' => 'Настройки ротации логов восстановлены',
        'backupRestoreHashmonOk' => 'Настройки контроля хеш сумм восстановлены',
        'backupRestoreGroupsOK' => 'Настройки группы пользователя восстановлены',
        'backupRestorephpiniuserphpini' => 'Настройки phpini userphpini восстановлены',
        'backupRestoreuserphpinionly' => 'Настройки userphpini восстановлены',
        'backupRestoreforCurrUserInProg' => 'Операция недоступна, так как уже выполняется процесс восстановления для данного пользователя ',
        'backuзBackupingforCurrUserInProg' => 'Операция недоступна, так как уже выполняется процесс бэкапирования для данного пользователя ',
        'backupRestorePlansOK' => 'Тариф пользователя восстановлен',
        'backupConnGdriveAttempt' => 'Подключение к gDrive. Попытка #',

        'backupUserShowAll' => 'Все пользователи',

        'backupGDriveHintConn' => 'Получение доступа к Google Drive аккаунту. Выполните следующие инструкции: <br/> 1. Перейдите по <a target=``_blank`` href=``https://code.google.com/apis/console/``>ссылке</a> и авторизуйтесь<br/>2. Создать новый проект Create project(External)<br/>3.  Заполните поле с названием проекта(любое имя) и создайте приложение<br/>4. Выполните все шаги и в меню OAuth consent screen нажмите Опубликовать APP<br/> 5. В левой панели выбрать Библиотеки-Drive API (Library → Drive API) и включить её (Enable)<br/> 6. Перейти на Учетные данные (Credentials), создать нового пользователя Create credentials, OAuth client ID. Выбрать Other в предложенных вариантах. Получаем ID и секретный ключ.<br/> 7. Вставить ID в поле ID, секретный ключ в поле секретный ключ задания бэкапирования.<br/> 8. Нажать на кнопку Проверить соединение.',
        'backupGdriveID' => 'ID',
        'backupGdriveSecret' => 'Секретный ключ',

        'backupManagerTitle' => 'Выборочное восстановление',
        'backupManagerTitleFrom' => 'от',
        'backupManagerListEmails' => 'Список почтовых аккаунтов',
        'backupManagerRestoreSelected' => 'Восстановить выбранные данные',
        'backupNothingSelectedRestore' => 'Ничего не выбрано для восстановления',
        'backupTypeHistSelected' => 'Выбранные данные',
        'backupSelectedRestoreFinish' => 'Выбранные данные восстановлены',
        'backupSelectedRestoreContinue' => 'Выбранные данные восстановливаются...',

        'backupSelectedDataConfirm' => 'Восстановить выбранные данные?',
        'backupConfirmDelTaskBackup' => 'Подтвердите удаление задания бэкапирования ',
        'backupConfirmCreateNowTaskBackup' => 'Подтвердите запуск бэкапирования ',

        'backupConfirmFullRestoreOrSelect' => 'Полное восстановление или только:',
        'backupSelectDB' => 'базы данных',
        'backupSelectDBuser' => 'пользователи базы данных',
        'backupSelectEmails' => 'почтовые аккаунты',

        'backupDrive2' => 'Введите ID и секретный ключ gdrive',

        'backup_please_waitUpdateConf' => 'Пожалуйста, подождите. Выполняется сохранение',

        'backupYandexAvail' => 'Доступно дискового пространства на yandex disk: ',
        'backupYandexRequire' => 'Размер бэкапа: ',
        'backupMoreYandex' => 'Необходимо еще: ',
        'backupFewSpaceYandex' => 'Недостаточно места. Бэкапирование не выполнено. ',
        'backupCustomDataCheck' => 'Выборочное бэкапирование',
        'backupCustomDataCheckDB' => 'Базы данных',
        'backupCustomDataCheckRootdirUser' => 'Корневая папка пользователя',
        'backupCustomDataCheckDBAll' => 'Все БД пользователя',
        'backupCustomDataCheckDBAllWarn' => ' - выборочное бэкапирование баз доступно при выборе одного пользователя',
        'backupCustomDataDBFilter' => 'Введите имя базы для поиска',
        'backupCustomDataDBloadnoDB' => 'У пользователя нет БД',
        'backupCDdbloadNotselUser' => 'Пользователь не выбран',
        'backupCustomDataDBloadnoDBinjobnotsetDB' => 'В бэкапе не указан список БД',
        'backupCustomDataDBgetlistdb' => 'Получить список БД пользователя',
        'backupCustomBackupConf' => 'Неверный формат поля выборочное бэкапирование',
        'backupCustomBackupConfDB' => 'Неверный формат поля базы данных',
        'backupCustomBackupConfDBselUser' => 'Неверный формат поля все БД пользователя',
        'backupCustomBackupConfDBlist' => 'Неверный формат списка баз данных',
        'backupBackupType' => 'Тип бэкапа: ',
        'backupCustomBackupTypeCust' => 'выборочный',
        'backupCustomBackupTypeFull' => 'полный',
        'backupFile' => 'Файл',
        'backupFileOk' => 'Резервная копия успешно загружена',
        'backupFileOkInfo' => 'Информация о бэкапе загружена',
        'backupFileFail1' => 'Ошибка при загрузке файла. Проверьте логин, пароль, размер квоты на фтп и наличие прав на запись в указанную директорию',
        'backupFileFail2' => 'Ошибка при чтении исходного файла',
        'backupFileFail1Info' => 'Ошибка при загрузке файла с информацией о бэкапе. Проверьте логин, пароль, размер квоты на фтп и наличие прав на запись в указанную директорию',
        'backupFileFail2Info' => 'Ошибка при чтении файла с информацией о бэкапе',
        'backupFileFailFile1' => 'Ошибка при загрузке файла',
        'backupFileFailFile2' => 'Проверьте размер квоты на фтп',
        'backupFileProgress' => 'Загружено:',
        'backupFewSpacShare' => 'Недостаточно места. Бэкапирование не выполнено.',
        'backup_errorYandexFailedToken' => 'Ошибка авторизации Yandex Disk. Неверный токен.',
        'backupGmailQuotaShare' => 'Доступно дискового пространства на ',
        'backupGmailQuotaYandex' => 'Yandex Disk: ',

        'backup_errorFailedTokenDropbox' => 'Ошибка авторизации Dropbox. Неверный токен.',
        'backupGmailQuotaDropbox' => 'Dropbox: ',
        'backupFTPpassivemode' => 'Пассивный режим',
        'backupFTPpassivemodeOn' => 'Соединение с FTP установлено в пассивном режиме',
        'backupFTPpassivemodeOff' => 'Соединение с FTP установлено. Пассивный режим выключен',
        'backupspeedmbsec' => 'мб/сек',
        'backupCustomDataSelExcludeDir' => 'Исключить директорию',
        'backupCustomDataSelExcludeDirHint' => 'Укажите список директорий, например: /folder/excl. <br/>Разделитель , ; пробел или новая строка. <br/>Если бэкап создается только для сайтов, без корневой директории пользователя, укажите путь директорий для исключения относительно директорий сайтов',
        'backupCustomDataSelExcludeDirWrongFormat' => 'Неверный формат поля Исключить директорию',


        'backupCustomDataCheckSiteUser' => 'Сайты пользователя',
        'backupCustomDataCheckSiteUserHint' => 'В резервную копию будет скопировано только содержимое из директории выбранного сайта(конфигурация виртуального хоста в бэкапе не будет)',
        'backupCustomDataCheckSiteAll' => 'Все сайты',
        'backupCustomDataCheckSiteAllWarn' => ' - выборочное бэкапирование сайтов доступно при выборе одного пользователя',
        'backupCustomDataSiteFilterUser' => 'Введите имя сайта для поиска',
        'backupCustomDataSiteNoItem' => 'У пользователя нет сайтов',
        'backupCustomDataSitesloadnoSitesset' => 'В бэкапе не указан список сайтов пользователя',
        'backupCustomDataSitegetlistSites' => 'Получить список сайтов пользователя',

        'backupCustomRootdirWarn' => ' - бэкапирование корневой папки пользователя невозможно при выбранном бэкапировании сайтов',


        'backupCustomDataCheckDBUser' => 'Пользователи баз данных',
        'backupCustomDataCheckDBAllUser' => 'Все пользователи БД',
        'backupCustomDataCheckDBAllWarnUser' => ' - выборочное бэкапирование пользователей баз доступно при выборе одного пользователя',
        'backupCustomDataDBFilterUser' => 'Введите имя пользователя базы для поиска',
        'backupCustomDataDBloadnoDBUser' => 'У пользователя нет пользователей БД',
        'backupCustomDataDBloadnoDBinjobnotsetDBUser' => 'В бэкапе не указан список пользователей БД',
        'backupCustomDataDBgetlistdbUser' => 'Получить список пользователей БД',

        'backupCustomBackupConfDBUser' => 'Неверный формат поля пользователи базы данных',
        'backupCustomBackupConfDBselUserUser' => 'Неверный формат поля все пользователи баз данных',
        'backupCustomBackupConfDBlistUser' => 'Неверный формат списка пользователей баз данных',

        'backupCustomRestTitle' => 'Бэкап содержит выборочные данные',

        'backupCustomRestMakeSelect' => 'Выберите данные для восстановления',
        'backupCustomRestMakeSelect_listDBCustom' => 'Список баз данных',
        'backupCustomRestMakeSelect_listDBCustomUser' => 'Список пользователей баз данных',
        'backupCustomRestMakeSelect_listNosuchdata' => ' - отсутствуют',

        'backupCustomRestMakeSelect_listsitesCustomUser' => 'Список сайтов пользователя',
        'backupCustomRestMakeSelect_titleSite' => 'Сайт',

        'backupAlluserLimits' => ' - данный бэкап пользовательский (пользователю запрещено создавать бэкап для всех)',

        'backupCreatenowandDownload' => 'Создать и скачать бэкап',
        'backupCreatenowandSave' => 'Создать бэкап в локальную папку',
        'backupCreatenowErrWrongUsername' => 'Ошибка имени пользователя',
        'backupCreatenowTitle_createanddownloadnow' => 'Создать и скачать бэкап для пользователя: ',
        'backupCreatenowTitle_createandsavenow' => 'Создать бэкап в локальную папку ',
        'backupCreatenowTitle_createandsavenow2' => ' для пользователя: ',
        'backupCreatenowInsufRighttocreatebackup' => 'Недостаточно прав для создания бэкапа данного пользователя',
        'backupCreatenowStartok' => 'Создание бэкапа начато',
        'backupCreatenowCheckHomedir' => 'домашняя папка',
        'backupCreatenowCheckFullBackup' => 'полный бэкап',
        'backupCreatenowSeluser' => 'Для быстрого создания бэкапа выберите пользователя из списка',
        'backupCreatenowEmptySelection' => 'Бэкапирование не начато. Выберите данные для бэкапирования',
        'backupCustomDataCheckRootdirUserNotSetinbackup' => 'Бэкап не содержит корневую папку пользователя',
        'backupCustomDataCheckRootdirRestoreCheck' => 'Восстановить корневую папку пользователя',
        'backuprestoreCustRestrootdir' => 'Восстановление корневой папки пользователя',
        'backup_CustomRestAllSelect' => 'Выбрать все данные для восстановления',
        'backup_restonefileFromSelDevice' => 'Загрузка бэкапа с выбранного устройства',
        'backup_restonefileExtractArchive' => 'Извлечение архива',
        "backup_restonefileClearUserfolder" => "Очистка директории пользователя",
        'backup_err_file_config' => 'Не указан файл конфиг',		
        'backup_susspended' => 'Успешно выполнено.',		
        'backup_err_genetate_key' => 'Ошибка сохранения ключа.',		
        'backup_not_array_restore' => 'Нет данных восстановления',		
        'backup_array_restore' => 'Массив данных восстановления',		
        'backup_incorecly_user' => 'Не корректный пользователь',		
        'backup_its_ok' => 'Добавлено удачно',		
        'backup_error_password' => 'Пароль должен быть не пустой',		
        'backup_error_email' => 'Не корректный email',		
        'backup_not_token' => 'Ошибка, не заполнен токкен',		
        'backup_error_del_job' => 'Ошибка удаления задания',		
        'backup_suspended_del_job' => 'Успешно выполнено',		
        'backup_select_job_file' => 'Выберите задачу которую нужно удалить',
        'backup_letsRegen' => 'Генерация сертификата letsencrypt для нового айпи адреса',
        'backupFailedUntar' => 'Неверный формат архива или неверный путь к архиву. Восстановление прервано. Изменений не внесено.',
        'backup_nositesuserinbackup' => 'Отсутствуют выборочные сайты пользователи в резервной копии',
        'backup_LogRestSitesUser' => 'Выборочное восстановление сайтов пользователя: ',
        'backup_LogRestSitesUserAll' => 'все',
        "backup_backupDbuserLog" => "Создание резервной копии пользователей баз данных: ",
        "backup_conflictrestoreVhostalreadyExistOtherUser" => "При восстановлении виртуальных хостов обнаружен хост у другого пользователя, хост остался без изменений: ",
        "backup_ftpuploadnotenoughrights" => "Недостаточно прав у пользователя FTP для сохранения бэкапа. Проверьте возможность записи на FTP.",
        'backup_prepareagain' => 'Подготовить заново',
        'backup_lftpnotinstall'=>'LFTP пакет не установлен',
        'backup_rclonenotinstall'=>'rclone пакет не установлен',
        'backup_createnowonlyselect'=>'или только выбранные данные: ',
        'backup_failedexecrsync'=>'Ошибка выполнения rsync. Пожалуйста, проверьте права на выполнение rsync. Бэкапирование завершилось с ошибкой',
        'backup_failedexecrsync_nospaceleft'=>'Нет свободоного места на устройстве. Проверьте доступность места на сервере куда создается бэкап. Бэкапирование завершилось с ошибкой',

        'backup_remove_prepare_arch'=>'Удалить подготовленный файл',
        'backup_remove_prepare_arch_ok'=>'Подготовленный файл бэкапа успешно удален ',

    )
?>
