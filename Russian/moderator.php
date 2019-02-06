<?php 
/*
 *	Made by The_stas
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr5
 *
 *  License: MIT
 *
 *  Russian Language - Moderator terms
 */

$language = array(
	'mod_cp' => 'Модер-панель',
	'staff_cp' => 'Админ-панель',
	'overview' => 'Обзор',
	
	// Спам
	'spam' => 'Спам',
	'mark_as_spam' => 'Отметить как спам',
	'confirm_spam' => '<p>Вы уверены, что хотите пометить этого пользователя как спам?</p><p>Пользователь будет заблокирован по IP, и весь его контент будет удален.</p>',
	'user_marked_as_spam' => 'Пользователь успешно помечен как спам.',
	'cant_ban_admin' => 'Вы не можете забанить администратора!',
	
	// Просмотор IP
	'ip_lookup' => 'Просмотор IP',
	'search_for_ip' => 'Поиск имени пользователя или IP-адреса',
	'no_ips_with_username' => 'IP-адреса для этого пользователя не найдены.',
	'no_accounts_with_that_ip' => 'Аккаунты для этого IP-адреса не найдены.',
	'1_account_with_ip' => 'Нашел 1 аккаунт с IP{y}', // Не заменять "{y}"
	'count_accounts_with_ip' => 'Нашел {x} аккаунтов для IP {y}', // Не заменять "{x}" или "{y}"
	'1_ip_with_name' => 'Нашел 1 IP адрес для пользователя {y}', // Не заменять "{y}"
	'count_ips_with_name' => 'Нашел {x} адресов для пользователя {y}', // Не заменять "{x}" или "{y}"
	'no_users_or_ips_found' => 'Пользователи или IP-адреса не найдены.',
	
	// Отчеты
	'reports' => 'Отчеты',
	'report_alert' => 'Новый отчет отправлен',
	'user_reported' => 'Пользователь сообщил',
	'comments' => 'Комментарии',
	'updated_by' => 'Обновлено',
	'actions' => 'Действия',
	'view_closed' => 'Просмотр закрыт',
	'view_open' => 'Просмотр открыт',
	'viewing_report' => 'Просмотр отчета',
	'view_content' => 'Посмотреть содержание сообщений',
	'no_comments' => 'Нет комментариев',
	'new_comment' => 'Новый комментарий',
	'report_comment_invalid' => 'Неверный комментарий. Пожалуйста, убедитесь, что вы ввели комментарий от 1 до 10000 символов.',
	'close_report' => 'Закрыть отчет',
	'reopen_report' => 'Открыть отчет',
	'1_open_report' => 'Открыт <strong>1</strong> отчет.',
	'open_reports' => 'Открыто <strong>{x}</strong> отчетов.', // Не заменять {x}
	'no_open_reports' => 'В настоящее время нет открытых отчетов.',
	'no_closed_reports' => 'В настоящее время нет закрытых отчетов.',
	'recent_reports' => 'Недавние отчеты',
	'reported_by' => 'Сообщает:',
	'website' => 'Веб-сайт',
	'ingame' => 'В игре',
	'x_closed_report' => '{x} закрыл этот отчет.', // Не заменять {x} (username)
	'x_reopened_report' => '{x} вновь открыл этот отчет.', // Не заменять {x} (username)
	'report_reopened' => 'Отчет успешно открыт.',
	'report_closed' => 'Отчет успешно закрыт.',
	'comment_created' => 'Комментарий успешно создан.',
	
	// Наказания
	'punishments' => 'Наказания',
    'view_punishments' => 'Посмотреть наказания',
    'banned' => 'Забаненный',
    'groups' => 'Группы',
    'punish' => 'Наказать',
    'ban' => 'Бан',
    'warn' => 'Предупреждение',
    'ban_ip' => 'Бан по IP',
    'viewing_user_x' => 'Просмотр пользователя {x}', // Не заменять {x}
    'previous_punishments' => 'Предыдущие наказания',
    'no_previous_punishments' => 'Нет предыдущих наказаний',
    'warning' => 'Предупреждение',
    'ip_ban' => 'Бан по IP',
    'reason' => 'Причина',
    'warn_user' => 'Предупрежденный',
    'ban_user' => 'Заблокированный',
    'enter_valid_punishment_reason' => 'Пожалуйста, введите действительную причину вашего наказания, от 5 до 5000 символов.',
    'user_punished' => 'Пользователь наказан.',
    'user_punished_alert' => '{x} наказал пользователя {y}', // Не заменять {x} (staff member) или {y} (user punished)
    'revoke' => 'Аннулировать',
    'revoked' => 'Аннулирован',
    'acknowledged' => 'Признанный',
    'confirm_revoke_warning' => 'Вы уверены, что хотите отменить это предупреждение?',
    'confirm_revoke_ban' => 'Вы уверены, что хотите отменить этот запрет? Пользователь будет расблокирован, даже если у него более поздний бан!',
    'punishment_revoked' => 'Наказание отменено.',
    'punishment_revoked_alert' => '{x} отменил наказание для пользователя {y}', // Не заменять {x} (staff member) или {y} (user with revoked punishment)
    'cant_punish_admin' => 'Вы не можете наказать администратора!',
    'viewing_all_punishments' => 'Просмотр всех наказаний',
    'no_punishments_found' => 'Наказаний не найдено.',
    'view_user' => 'Просмотр пользователя',
    'when' => 'Когда',
    'staff' => 'Администратор',
    'type' => 'Тип',
	'recent_punishments' => 'Последние наказания',
	'created' => 'Создан:',
	'staff:' => 'Администратор:',
	'reason:' => 'Причина:',

	// Пользователи
	'recent_registrations' => 'Недавние регистрации'

);