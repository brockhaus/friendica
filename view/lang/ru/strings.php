<?php

if(! function_exists("string_plural_select_ru")) {
function string_plural_select_ru($n){
	$n = intval($n);
	if ($n%10==1 && $n%100!=11) { return 0; } else if ($n%10>=2 && $n%10<=4 && ($n%100<12 || $n%100>14)) { return 1; } else if ($n%10==0 || ($n%10>=5 && $n%10<=9) || ($n%100>=11 && $n%100<=14)) { return 2; } else  { return 3; }
}}
$a->strings['Access denied.'] = 'Доступ запрещен.';
$a->strings['User not found.'] = 'Пользователь не найден.';
$a->strings['Access to this profile has been restricted.'] = 'Доступ к этому профилю ограничен.';
$a->strings['Events'] = 'Мероприятия';
$a->strings['View'] = 'Смотреть';
$a->strings['Previous'] = 'Назад';
$a->strings['Next'] = 'Далее';
$a->strings['today'] = 'сегодня';
$a->strings['month'] = 'мес.';
$a->strings['week'] = 'неделя';
$a->strings['day'] = 'день';
$a->strings['list'] = 'список';
$a->strings['User not found'] = 'Пользователь не найден';
$a->strings['This calendar format is not supported'] = 'Этот формат календарей не поддерживается';
$a->strings['No exportable data found'] = 'Нет данных для экспорта';
$a->strings['calendar'] = 'календарь';
$a->strings['Public access denied.'] = 'Свободный доступ закрыт.';
$a->strings['The requested item doesn\'t exist or has been deleted.'] = 'Запрошенная запись не существует или была удалена.';
$a->strings['The feed for this item is unavailable.'] = 'Лента недоступна для этого объекта.';
$a->strings['Permission denied.'] = 'Нет разрешения.';
$a->strings['Item not found'] = 'Элемент не найден';
$a->strings['Edit post'] = 'Редактировать запись';
$a->strings['Save'] = 'Сохранить';
$a->strings['Loading...'] = 'Загрузка...';
$a->strings['Upload photo'] = 'Загрузить фото';
$a->strings['upload photo'] = 'загрузить фото';
$a->strings['Attach file'] = 'Прикрепить файл';
$a->strings['attach file'] = 'приложить файл';
$a->strings['Insert web link'] = 'Вставить веб-ссылку';
$a->strings['web link'] = 'веб-ссылка';
$a->strings['Insert video link'] = 'Вставить ссылку видео';
$a->strings['video link'] = 'видео-ссылка';
$a->strings['Insert audio link'] = 'Вставить ссылку аудио';
$a->strings['audio link'] = 'аудио-ссылка';
$a->strings['Set your location'] = 'Задать ваше местоположение';
$a->strings['set location'] = 'установить местонахождение';
$a->strings['Clear browser location'] = 'Очистить местонахождение браузера';
$a->strings['clear location'] = 'убрать местонахождение';
$a->strings['Please wait'] = 'Пожалуйста, подождите';
$a->strings['Permission settings'] = 'Настройки разрешений';
$a->strings['CC: email addresses'] = 'Копии на email адреса';
$a->strings['Public post'] = 'Публичная запись';
$a->strings['Set title'] = 'Установить заголовок';
$a->strings['Categories (comma-separated list)'] = 'Категории (список через запятую)';
$a->strings['Example: bob@example.com, mary@example.com'] = 'Пример: bob@example.com, mary@example.com';
$a->strings['Preview'] = 'Просмотр';
$a->strings['Cancel'] = 'Отмена';
$a->strings['Bold'] = 'Жирный';
$a->strings['Italic'] = 'Kурсивный';
$a->strings['Underline'] = 'Подчеркнутый';
$a->strings['Quote'] = 'Цитата';
$a->strings['Code'] = 'Код';
$a->strings['Link'] = 'Ссылка';
$a->strings['Link or Media'] = 'Ссылка или медиа';
$a->strings['Message'] = 'Сообщение';
$a->strings['Browser'] = 'Браузер';
$a->strings['Permissions'] = 'Разрешения';
$a->strings['Open Compose page'] = 'Развернуть редактор';
$a->strings['Event can not end before it has started.'] = 'Эвент не может закончится до старта.';
$a->strings['Event title and start time are required.'] = 'Название мероприятия и время начала обязательны для заполнения.';
$a->strings['Create New Event'] = 'Создать новое мероприятие';
$a->strings['Event details'] = 'Сведения о мероприятии';
$a->strings['Starting date and Title are required.'] = 'Необходима дата старта и заголовок.';
$a->strings['Event Starts:'] = 'Начало мероприятия:';
$a->strings['Required'] = 'Требуется';
$a->strings['Finish date/time is not known or not relevant'] = 'Дата/время окончания не известны, или не указаны';
$a->strings['Event Finishes:'] = 'Окончание мероприятия:';
$a->strings['Description:'] = 'Описание:';
$a->strings['Location:'] = 'Откуда:';
$a->strings['Title:'] = 'Титул:';
$a->strings['Share this event'] = 'Поделиться этим мероприятием';
$a->strings['Submit'] = 'Отправить';
$a->strings['Basic'] = 'Базовый';
$a->strings['Advanced'] = 'Расширенный';
$a->strings['Failed to remove event'] = 'Ошибка удаления события';
$a->strings['Photos'] = 'Фото';
$a->strings['Upload'] = 'Загрузить';
$a->strings['Files'] = 'Файлы';
$a->strings['Submit Request'] = 'Отправить запрос';
$a->strings['You already added this contact.'] = 'Вы уже добавили этот контакт.';
$a->strings['The network type couldn\'t be detected. Contact can\'t be added.'] = 'Тип сети не может быть определен. Контакт не может быть добавлен.';
$a->strings['Diaspora support isn\'t enabled. Contact can\'t be added.'] = 'Поддержка Diaspora не включена. Контакт не может быть добавлен.';
$a->strings['OStatus support is disabled. Contact can\'t be added.'] = 'Поддержка OStatus выключена. Контакт не может быть добавлен.';
$a->strings['Connect/Follow'] = 'Подключиться/Подписаться';
$a->strings['Please answer the following:'] = 'Пожалуйста, ответьте следующее:';
$a->strings['Your Identity Address:'] = 'Ваш адрес:';
$a->strings['Profile URL'] = 'URL профиля';
$a->strings['Tags:'] = 'Ключевые слова: ';
$a->strings['%s knows you'] = '%s знают Вас';
$a->strings['Add a personal note:'] = 'Добавить личную заметку:';
$a->strings['Status Messages and Posts'] = 'Записи и статусы';
$a->strings['The contact could not be added.'] = 'Не удалось добавить этот контакт.';
$a->strings['Unable to locate original post.'] = 'Не удалось найти оригинальную запись.';
$a->strings['Empty post discarded.'] = 'Пустое сообщение отбрасывается.';
$a->strings['Post updated.'] = 'Запись обновлена.';
$a->strings['Item wasn\'t stored.'] = 'Запись не была сохранена.';
$a->strings['Item couldn\'t be fetched.'] = 'Не удалось получить запись.';
$a->strings['Item not found.'] = 'Пункт не найден.';
$a->strings['No valid account found.'] = 'Не найдено действительного аккаунта.';
$a->strings['Password reset request issued. Check your email.'] = 'Запрос на сброс пароля принят. Проверьте вашу электронную почту.';
$a->strings['
		Dear %1$s,
			A request was recently received at "%2$s" to reset your account
		password. In order to confirm this request, please select the verification link
		below or paste it into your web browser address bar.

		If you did NOT request this change, please DO NOT follow the link
		provided and ignore and/or delete this email, the request will expire shortly.

		Your password will not be changed unless we can verify that you
		issued this request.'] = '
		Привет, %1$s,
		"%2$s" был получен запрос на сброс вашего пароля.
		Чтобы подтвердить запрос, перейдите по ссылке ниже или 
		скопируйте её в адресную строку вашего браузера.

		Если вы НЕ отправляли этот запрос, то НЕ ПЕРЕХОДИТЕ по
		этой ссылке, просто проигнорируйте это письмо. Запрос скоро отменится.

		Ваш пароль не будет изменён до тех пор, пока вы не подтвердите,
		что вы отправляли этот запрос как описано выше.';
$a->strings['
		Follow this link soon to verify your identity:

		%1$s

		You will then receive a follow-up message containing the new password.
		You may change that password from your account settings page after logging in.

		The login details are as follows:

		Site Location:	%2$s
		Login Name:	%3$s'] = '
		Перейдите по этой ссылке для подтверждения вашей личности:

		%1$s

		Затем вы получите ещё одно письмо, содержащее ваш пароль.
		Вы сможете сменить этот пароль в настройках вашей учётной записи после входа.

		Данные для входа:

		Адрес сервера:	%2$s
		Имя для входа:	%3$s';
$a->strings['Password reset requested at %s'] = 'Запрос на сброс пароля получен %s';
$a->strings['Request could not be verified. (You may have previously submitted it.) Password reset failed.'] = 'Запрос не может быть проверен. (Вы, возможно, ранее представляли его.) Попытка сброса пароля неудачная.';
$a->strings['Request has expired, please make a new one.'] = 'Запрос истёк, пожалуйста, повторите его.';
$a->strings['Forgot your Password?'] = 'Забыли пароль?';
$a->strings['Enter your email address and submit to have your password reset. Then check your email for further instructions.'] = 'Введите адрес электронной почты и подтвердите, что вы хотите сбросить ваш пароль. Затем проверьте свою электронную почту для получения дальнейших инструкций.';
$a->strings['Nickname or Email: '] = 'Ник или E-mail: ';
$a->strings['Reset'] = 'Сброс';
$a->strings['Password Reset'] = 'Сброс пароля';
$a->strings['Your password has been reset as requested.'] = 'Ваш пароль был сброшен по требованию.';
$a->strings['Your new password is'] = 'Ваш новый пароль';
$a->strings['Save or copy your new password - and then'] = 'Сохраните или скопируйте новый пароль - и затем';
$a->strings['click here to login'] = 'нажмите здесь для входа';
$a->strings['Your password may be changed from the <em>Settings</em> page after successful login.'] = 'Ваш пароль может быть изменен на странице <em>Настройки</em> после успешного входа.';
$a->strings['Your password has been reset.'] = 'Ваш пароль был сброшен.';
$a->strings['
			Dear %1$s,
				Your password has been changed as requested. Please retain this
			information for your records (or change your password immediately to
			something that you will remember).
		'] = '
			Привет, %1$s!
				Ваш пароль был сменён по вашему запросу. Пожалуйста, сохраните эту информацию в надёжном месте (или сразу смените пароль на тот, который вы сможете запомнить).
		';
$a->strings['
			Your login details are as follows:

			Site Location:	%1$s
			Login Name:	%2$s
			Password:	%3$s

			You may change that password from your account settings page after logging in.
		'] = '
			Ваши данные для входа ниже:

			Адрес сервера:	%1$s
			Имя для входа:	%2$s
			Пароль:	%3$s

			Вы можете сменить этот пароль в настройках учётной записи после входа.
		';
$a->strings['Your password has been changed at %s'] = 'Ваш пароль был изменен %s';
$a->strings['No keywords to match. Please add keywords to your profile.'] = 'Нет совпадающих ключевых слов. Пожалуйста, добавьте ключевые слова в ваш профиль.';
$a->strings['No matches'] = 'Нет соответствий';
$a->strings['Profile Match'] = 'Похожие профили';
$a->strings['New Message'] = 'Новое сообщение';
$a->strings['No recipient selected.'] = 'Не выбран получатель.';
$a->strings['Unable to locate contact information.'] = 'Не удалось найти контактную информацию.';
$a->strings['Message could not be sent.'] = 'Сообщение не может быть отправлено.';
$a->strings['Message collection failure.'] = 'Неудача коллекции сообщения.';
$a->strings['Discard'] = 'Отказаться';
$a->strings['Messages'] = 'Сообщения';
$a->strings['Conversation not found.'] = 'Беседа не найдена.';
$a->strings['Message was not deleted.'] = 'Сообщение не было удалено.';
$a->strings['Conversation was not removed.'] = 'Беседа не была удалена.';
$a->strings['Please enter a link URL:'] = 'Пожалуйста, введите URL ссылки:';
$a->strings['Send Private Message'] = 'Отправить личное сообщение';
$a->strings['To:'] = 'Кому:';
$a->strings['Subject:'] = 'Тема:';
$a->strings['Your message:'] = 'Ваше сообщение:';
$a->strings['No messages.'] = 'Нет сообщений.';
$a->strings['Message not available.'] = 'Сообщение не доступно.';
$a->strings['Delete message'] = 'Удалить сообщение';
$a->strings['D, d M Y - g:i A'] = 'D, d M Y - g:i A';
$a->strings['Delete conversation'] = 'Удалить историю общения';
$a->strings['No secure communications available. You <strong>may</strong> be able to respond from the sender\'s profile page.'] = 'Невозможно защищённое соединение. Вы <strong>имеете</strong> возможность ответить со страницы профиля отправителя.';
$a->strings['Send Reply'] = 'Отправить ответ';
$a->strings['Unknown sender - %s'] = 'Неизвестный отправитель - %s';
$a->strings['You and %s'] = 'Вы и %s';
$a->strings['%s and You'] = '%s и Вы';
$a->strings['%d message'] = [
	0 => '%d сообщение',
	1 => '%d сообщений',
	2 => '%d сообщений',
	3 => '%d сообщений',
];
$a->strings['Personal Notes'] = 'Личные заметки';
$a->strings['Personal notes are visible only by yourself.'] = 'Личные заметки видны только вам.';
$a->strings['Subscribing to contacts'] = 'Подписка на контакты';
$a->strings['No contact provided.'] = 'Не указан контакт.';
$a->strings['Couldn\'t fetch information for contact.'] = 'Невозможно получить информацию о контакте.';
$a->strings['Couldn\'t fetch friends for contact.'] = 'Невозможно получить друзей для контакта.';
$a->strings['Couldn\'t fetch following contacts.'] = 'Не удалось загрузить контакты подписчиков.';
$a->strings['Couldn\'t fetch remote profile.'] = 'Не получилось загрузить профиль.';
$a->strings['Unsupported network'] = 'Сеть не поддерживается';
$a->strings['Done'] = 'Готово';
$a->strings['success'] = 'удачно';
$a->strings['failed'] = 'неудача';
$a->strings['ignored'] = 'игнорирован';
$a->strings['Keep this window open until done.'] = 'Держать окно открытым до завершения.';
$a->strings['Photo Albums'] = 'Фотоальбомы';
$a->strings['Recent Photos'] = 'Последние фото';
$a->strings['Upload New Photos'] = 'Загрузить новые фото';
$a->strings['everybody'] = 'все';
$a->strings['Contact information unavailable'] = 'Информация о контакте недоступна';
$a->strings['Album not found.'] = 'Альбом не найден.';
$a->strings['Album successfully deleted'] = 'Альбом успешно удалён';
$a->strings['Album was empty.'] = 'Альбом был пуст.';
$a->strings['Failed to delete the photo.'] = 'Не получилось удалить фото.';
$a->strings['a photo'] = 'фото';
$a->strings['%1$s was tagged in %2$s by %3$s'] = '%1$s отмечен/а/ в %2$s by %3$s';
$a->strings['Image exceeds size limit of %s'] = 'Изображение превышает лимит размера в %s';
$a->strings['Image upload didn\'t complete, please try again'] = 'Не получилось загрузить изображение, попробуйте снова';
$a->strings['Image file is missing'] = 'Файл изображения не найден';
$a->strings['Server can\'t accept new file upload at this time, please contact your administrator'] = 'Сервер не принимает новые файлы для загрузки в настоящий момент, пожалуйста, свяжитесь с администратором';
$a->strings['Image file is empty.'] = 'Файл изображения пуст.';
$a->strings['Unable to process image.'] = 'Невозможно обработать фото.';
$a->strings['Image upload failed.'] = 'Загрузка фото неудачная.';
$a->strings['No photos selected'] = 'Не выбрано фото.';
$a->strings['Access to this item is restricted.'] = 'Доступ к этому пункту ограничен.';
$a->strings['Upload Photos'] = 'Загрузить фото';
$a->strings['New album name: '] = 'Название нового альбома: ';
$a->strings['or select existing album:'] = 'или выберите имеющийся альбом:';
$a->strings['Do not show a status post for this upload'] = 'Не показывать статус-сообщение для этой закачки';
$a->strings['Do you really want to delete this photo album and all its photos?'] = 'Вы действительно хотите удалить этот альбом и все его фотографии?';
$a->strings['Delete Album'] = 'Удалить альбом';
$a->strings['Edit Album'] = 'Редактировать альбом';
$a->strings['Drop Album'] = 'Удалить альбом';
$a->strings['Show Newest First'] = 'Показать новые первыми';
$a->strings['Show Oldest First'] = 'Показать старые первыми';
$a->strings['View Photo'] = 'Просмотр фото';
$a->strings['Permission denied. Access to this item may be restricted.'] = 'Нет разрешения. Доступ к этому элементу ограничен.';
$a->strings['Photo not available'] = 'Фото недоступно';
$a->strings['Do you really want to delete this photo?'] = 'Вы действительно хотите удалить эту фотографию?';
$a->strings['Delete Photo'] = 'Удалить фото';
$a->strings['View photo'] = 'Просмотр фото';
$a->strings['Edit photo'] = 'Редактировать фото';
$a->strings['Delete photo'] = 'Удалить фото';
$a->strings['Use as profile photo'] = 'Использовать как фото профиля';
$a->strings['Private Photo'] = 'Закрытое фото';
$a->strings['View Full Size'] = 'Просмотреть полный размер';
$a->strings['Tags: '] = 'Ключевые слова: ';
$a->strings['[Select tags to remove]'] = '[выберите тэги для удаления]';
$a->strings['New album name'] = 'Название нового альбома';
$a->strings['Caption'] = 'Подпись';
$a->strings['Add a Tag'] = 'Добавить тег';
$a->strings['Example: @bob, @Barbara_Jensen, @jim@example.com, #California, #camping'] = 'Пример: @bob, @Barbara_Jensen, @jim@example.com, #California, #camping';
$a->strings['Do not rotate'] = 'Не поворачивать';
$a->strings['Rotate CW (right)'] = 'Поворот по часовой стрелке (направо)';
$a->strings['Rotate CCW (left)'] = 'Поворот против часовой стрелки (налево)';
$a->strings['This is you'] = 'Это вы';
$a->strings['Comment'] = 'Комментировать';
$a->strings['Select'] = 'Выберите';
$a->strings['Delete'] = 'Удалить';
$a->strings['Like'] = 'Нравится';
$a->strings['I like this (toggle)'] = 'Нравится';
$a->strings['Dislike'] = 'Не нравится';
$a->strings['I don\'t like this (toggle)'] = 'Не нравится';
$a->strings['Map'] = 'Карта';
$a->strings['View Album'] = 'Просмотреть альбом';
$a->strings['Bad Request.'] = 'Ошибочный запрос.';
$a->strings['Contact not found.'] = 'Контакт не найден.';
$a->strings['[Friendica System Notify]'] = '[Системное уведомление Friendica]';
$a->strings['User deleted their account'] = 'Пользователь удалил свою учётную запись';
$a->strings['On your Friendica node an user deleted their account. Please ensure that their data is removed from the backups.'] = 'Пользователь удалил свою учётную запись на вашем сервере Friendica. Пожалуйста, убедитесь, что их данные будут удалены из резервных копий.';
$a->strings['The user id is %d'] = 'id пользователя: %d';
$a->strings['Remove My Account'] = 'Удалить мой аккаунт';
$a->strings['This will completely remove your account. Once this has been done it is not recoverable.'] = 'Это позволит полностью удалить ваш аккаунт. Как только это будет сделано, аккаунт восстановлению не подлежит.';
$a->strings['Please enter your password for verification:'] = 'Пожалуйста, введите свой пароль для проверки:';
$a->strings['Resubscribing to OStatus contacts'] = 'Переподписаться на OStatus-контакты.';
$a->strings['Error'] = [
	0 => 'Ошибка',
	1 => 'Ошибки',
	2 => 'Ошибки',
	3 => 'Ошибки',
];
$a->strings['Failed to connect with email account using the settings provided.'] = 'Не удалось подключиться к аккаунту e-mail, используя указанные настройки.';
$a->strings['Connected Apps'] = 'Подключенные приложения';
$a->strings['Name'] = 'Имя';
$a->strings['Home Page'] = 'Главная страница';
$a->strings['Created'] = 'Создано';
$a->strings['Remove authorization'] = 'Удалить авторизацию';
$a->strings['Save Settings'] = 'Сохранить настройки';
$a->strings['Addon Settings'] = 'Настройки дополнений';
$a->strings['No Addon settings configured'] = 'Настройки дополнений не изменены';
$a->strings['Additional Features'] = 'Дополнительные возможности';
$a->strings['Diaspora (Socialhome, Hubzilla)'] = 'Diaspora (Socialhome, Hubzilla)';
$a->strings['enabled'] = 'подключено';
$a->strings['disabled'] = 'отключено';
$a->strings['Built-in support for %s connectivity is %s'] = 'Встроенная  поддержка для %s подключение %s';
$a->strings['OStatus (GNU Social)'] = 'OStatus (GNU Social)';
$a->strings['Email access is disabled on this site.'] = 'Доступ эл. почты отключен на этом сайте.';
$a->strings['None'] = 'Ничего';
$a->strings['Social Networks'] = 'Социальные сети';
$a->strings['General Social Media Settings'] = 'Общие настройки социальных медиа';
$a->strings['Followed content scope'] = 'Какие записи показывать в ленте';
$a->strings['By default, conversations in which your follows participated but didn\'t start will be shown in your timeline. You can turn this behavior off, or expand it to the conversations in which your follows liked a post.'] = 'По-умолчанию в вашу ленту попадают и записи, которые ваши контакты не создали сами, а лишь прокомментировали. Вы можете отключить это, либо наоборот расширить до загрузки записей, которым ваши контакты поставили отметку "нравится".';
$a->strings['Only conversations my follows started'] = 'Только записи, созданные моими контактами';
$a->strings['Conversations my follows started or commented on (default)'] = 'Записи, которые мои контакты создали или прокомментировали (по-умолчанию)';
$a->strings['Any conversation my follows interacted with, including likes'] = 'Любые записи, с которыми мои контакты взаимодействовали, включая лайки';
$a->strings['Enable Content Warning'] = 'Включить предупреждение о контенте';
$a->strings['Users on networks like Mastodon or Pleroma are able to set a content warning field which collapse their post by default. This enables the automatic collapsing instead of setting the content warning as the post title. Doesn\'t affect any other content filtering you eventually set up.'] = 'Пользователи некоторых сетей, таких как Mastodon или Pleroma, могут использовать "предупреждение о контенте", сворачивающее их записи. Эта настройка выключает это свёртывание вместо обычного помещения "предупреждения о контенте" в заголовок записи. Это не влияет на другие фильтры, которые вы можете настроить.';
$a->strings['Enable intelligent shortening'] = 'Включить умное сокращение';
$a->strings['Normally the system tries to find the best link to add to shortened posts. If disabled, every shortened post will always point to the original friendica post.'] = 'Обычно система пытается найти лучшую ссылку для добавления к сокращенной записи. Если эта настройка включена, то каждая сокращенная запись будет указывать на оригинальную запись в Friendica.';
$a->strings['Enable simple text shortening'] = 'Включить простое сокращение текста';
$a->strings['Normally the system shortens posts at the next line feed. If this option is enabled then the system will shorten the text at the maximum character limit.'] = 'Обычно система обрезает записи на следующей строке. Если эта настройка включена, система будет сокращать записи по достижении лимита символов.';
$a->strings['Attach the link title'] = 'Присоединять заголовок ссылок';
$a->strings['When activated, the title of the attached link will be added as a title on posts to Diaspora. This is mostly helpful with "remote-self" contacts that share feed content.'] = 'Если включено. заголовок добавленной ссылки будет добавлен к записи в Диаспоре как заголовок. Это в основном нужно для контактов "мой двойник", которые публикуют содержимое ленты.';
$a->strings['Your legacy ActivityPub/GNU Social account'] = 'Ваша старая учётная запись ActivityPub/GNU Social';
$a->strings['If you enter your old account name from an ActivityPub based system or your GNU Social/Statusnet account name here (in the format user@domain.tld), your contacts will be added automatically. The field will be emptied when done.'] = 'Если вы введете тут вашу старую учетную запись от платформы совместимой с ActivityPub или GNU Social/Statusnet (в виде пользователь@домен), ваши контакты оттуда будут автоматически добавлены. Поле будет очищено когда все контакты будут добавлены.';
$a->strings['Repair OStatus subscriptions'] = 'Починить подписки OStatus';
$a->strings['Email/Mailbox Setup'] = 'Настройка эл. почты / почтового ящика';
$a->strings['If you wish to communicate with email contacts using this service (optional), please specify how to connect to your mailbox.'] = 'Если вы хотите общаться с Email контактами, используя этот сервис (по желанию), пожалуйста, уточните, как подключиться к вашему почтовому ящику.';
$a->strings['Last successful email check:'] = 'Последняя успешная проверка электронной почты:';
$a->strings['IMAP server name:'] = 'Имя IMAP сервера:';
$a->strings['IMAP port:'] = 'Порт IMAP:';
$a->strings['Security:'] = 'Безопасность:';
$a->strings['Email login name:'] = 'Логин эл. почты:';
$a->strings['Email password:'] = 'Пароль эл. почты:';
$a->strings['Reply-to address:'] = 'Адрес для ответа:';
$a->strings['Send public posts to all email contacts:'] = 'Отправлять открытые сообщения на все контакты электронной почты:';
$a->strings['Action after import:'] = 'Действие после импорта:';
$a->strings['Mark as seen'] = 'Отметить, как прочитанное';
$a->strings['Move to folder'] = 'Переместить в папку';
$a->strings['Move to folder:'] = 'Переместить в папку:';
$a->strings['No suggestions available. If this is a new site, please try again in 24 hours.'] = 'Нет предложений. Если это новый сайт, пожалуйста, попробуйте снова через 24 часа.';
$a->strings['Friend Suggestions'] = 'Предложения друзей';
$a->strings['photo'] = 'фото';
$a->strings['status'] = 'статус';
$a->strings['%1$s tagged %2$s\'s %3$s with %4$s'] = '%1$s tagged %2$s\'s %3$s в %4$s';
$a->strings['Remove Item Tag'] = 'Удалить ключевое слово';
$a->strings['Select a tag to remove: '] = 'Выберите ключевое слово для удаления: ';
$a->strings['Remove'] = 'Удалить';
$a->strings['User imports on closed servers can only be done by an administrator.'] = 'Импорт пользователей на закрытых серверах может быть произведён только администратором.';
$a->strings['This site has exceeded the number of allowed daily account registrations. Please try again tomorrow.'] = 'Этот сайт превысил допустимое количество ежедневных регистраций. Пожалуйста, повторите попытку завтра.';
$a->strings['Import'] = 'Импорт';
$a->strings['Move account'] = 'Удалить аккаунт';
$a->strings['You can import an account from another Friendica server.'] = 'Вы можете импортировать учетную запись с другого сервера Friendica.';
$a->strings['You need to export your account from the old server and upload it here. We will recreate your old account here with all your contacts. We will try also to inform your friends that you moved here.'] = 'Вам нужно экспортировать свой ​​аккаунт со старого сервера и загрузить его сюда. Мы восстановим ваш ​​старый аккаунт здесь со всеми вашими контактами. Мы постараемся также сообщить друзьям, что вы переехали сюда.';
$a->strings['This feature is experimental. We can\'t import contacts from the OStatus network (GNU Social/Statusnet) or from Diaspora'] = 'Это экспериментальная функция. Мы не можем импортировать контакты из сети OStatus (GNU Social/ StatusNet) или из Diaspora';
$a->strings['Account file'] = 'Файл аккаунта';
$a->strings['To export your account, go to "Settings->Export your personal data" and select "Export account"'] = 'Для экспорта аккаунта, перейдите в "Настройки->Экспортировать ваши данные" и выберите "Экспорт аккаунта"';
$a->strings['You aren\'t following this contact.'] = 'Вы не подписаны на этот контакт.';
$a->strings['Unfollowing is currently not supported by your network.'] = 'Отписка в настоящий момент не предусмотрена этой сетью';
$a->strings['Disconnect/Unfollow'] = 'Отсоединиться/Отписаться';
$a->strings['Contact was successfully unfollowed'] = 'Подписка успешно удалена';
$a->strings['Unable to unfollow this contact, please contact your administrator'] = 'Не получается отписаться от этого контакта, пожалуйста, свяжитесь с вашим администратором';
$a->strings['Invalid request.'] = 'Неверный запрос.';
$a->strings['Sorry, maybe your upload is bigger than the PHP configuration allows'] = 'Извините, похоже что загружаемый файл превышает лимиты, разрешенные конфигурацией PHP';
$a->strings['Or - did you try to upload an empty file?'] = 'Или вы пытались загрузить пустой файл?';
$a->strings['File exceeds size limit of %s'] = 'Файл превышает лимит размера в %s';
$a->strings['File upload failed.'] = 'Загрузка файла не удалась.';
$a->strings['Wall Photos'] = 'Фото стены';
$a->strings['Number of daily wall messages for %s exceeded. Message failed.'] = 'Количество ежедневных сообщений на стене %s превышено. Сообщение отменено..';
$a->strings['Unable to check your home location.'] = 'Невозможно проверить местоположение.';
$a->strings['No recipient.'] = 'Без адресата.';
$a->strings['If you wish for %s to respond, please check that the privacy settings on your site allow private mail from unknown senders.'] = 'Если Вы хотите ответить %s, пожалуйста, проверьте, позволяют ли настройки конфиденциальности на Вашем сайте принимать личные сообщения от неизвестных отправителей.';
$a->strings['No system theme config value set.'] = 'Настройки системной темы не установлены.';
$a->strings['Apologies but the website is unavailable at the moment.'] = 'Приносим извинения, но этот сервис сейчас недоступен.';
$a->strings['Delete this item?'] = 'Удалить этот элемент?';
$a->strings['Block this author? They won\'t be able to follow you nor see your public posts, and you won\'t be able to see their posts and their notifications.'] = 'Заблокировать этого автора? Они не смогут подписаться на вас или видеть ваши записи, вы не будете видеть их записи и получать от них уведомления.';
$a->strings['toggle mobile'] = 'мобильная версия';
$a->strings['Method not allowed for this module. Allowed method(s): %s'] = 'Метод не разрешён для этого модуля. Разрешенный метод(ы): %s';
$a->strings['Page not found.'] = 'Страница не найдена.';
$a->strings['You must be logged in to use addons. '] = 'Вы должны войти в систему, чтобы использовать аддоны.';
$a->strings['The form security token was not correct. This probably happened because the form has been opened for too long (>3 hours) before submitting it.'] = 'Ключ формы безопасности неправильный. Вероятно, это произошло потому, что форма была открыта слишком долго (более 3 часов) до её отправки.';
$a->strings['All contacts'] = 'Все контакты';
$a->strings['Followers'] = 'Подписаны на вас';
$a->strings['Following'] = 'Ваши подписки';
$a->strings['Mutual friends'] = 'Взаимные друзья';
$a->strings['Common'] = 'Общее';
$a->strings['Addon not found'] = 'Дополнение не найдено';
$a->strings['Addon already enabled'] = 'Дополнение уже включено';
$a->strings['Addon already disabled'] = 'Дополнение уже отключено';
$a->strings['Could not find any unarchived contact entry for this URL (%s)'] = 'Не удалось найти не архивированных контактов для этой URL (%s)';
$a->strings['The contact entries have been archived'] = 'Записи этого контакта были архивированы.';
$a->strings['Could not find any contact entry for this URL (%s)'] = 'Не удалось найти контактных данных по этой ссылке (%s)';
$a->strings['The contact has been blocked from the node'] = 'Контакт был заблокирован на узле.';
$a->strings['The avatar cache needs to be enabled to use this command.'] = 'Кэширование аватаров должно быть включено для использования этой команды.';
$a->strings['no resource in photo %s'] = 'нет ресурса для фото %s';
$a->strings['no photo with id %s'] = 'нет фото с id %s';
$a->strings['no image data for photo with id %s'] = 'нет данных изображения для фото с id %s';
$a->strings['invalid image for id %s'] = 'неправильное изображение с id %s';
$a->strings['Quit on invalid photo %s'] = 'Выход на неправильном фото %s';
$a->strings['Post update version number has been set to %s.'] = 'Версия post update установлена на %s.';
$a->strings['Check for pending update actions.'] = 'Проверить наличие отложенных действий.';
$a->strings['Done.'] = 'Готово.';
$a->strings['Execute pending post updates.'] = 'Выполнить обновления записей из очереди.';
$a->strings['All pending post updates are done.'] = 'Все операции по обновлению записей выполнены.';
$a->strings['Enter user nickname: '] = 'Введите ник пользователя:';
$a->strings['Enter new password: '] = 'Введите новый пароль:';
$a->strings['Password update failed. Please try again.'] = 'Обновление пароля не удалось. Пожалуйста, попробуйте еще раз.';
$a->strings['Password changed.'] = 'Пароль изменен.';
$a->strings['Enter user name: '] = 'Введите имя пользователя:';
$a->strings['Enter user email address: '] = 'Введите адрес почты пользователя:';
$a->strings['Enter a language (optional): '] = 'Введите язык (не обязательно):';
$a->strings['User is not pending.'] = 'Пользователь не в ожидании';
$a->strings['User has already been marked for deletion.'] = 'Пользователь уже помечен для удаления.';
$a->strings['Type "yes" to delete %s'] = 'Введите "yes" для удаления %s';
$a->strings['Deletion aborted.'] = 'Удаление отменено.';
$a->strings['Enter category: '] = 'Введите категорию:';
$a->strings['Enter key: '] = 'Введите ключ:';
$a->strings['Enter value: '] = 'Введите значение:';
$a->strings['newer'] = 'новее';
$a->strings['older'] = 'старее';
$a->strings['Frequently'] = 'Часто';
$a->strings['Hourly'] = 'Раз в час';
$a->strings['Twice daily'] = 'Дважды в день';
$a->strings['Daily'] = 'Раз в день';
$a->strings['Weekly'] = 'Раз в неделю';
$a->strings['Monthly'] = 'Раз в месяц';
$a->strings['DFRN'] = 'DFRN';
$a->strings['OStatus'] = 'OStatus';
$a->strings['RSS/Atom'] = 'RSS/Atom';
$a->strings['Email'] = 'Эл. почта';
$a->strings['Diaspora'] = 'Diaspora';
$a->strings['Zot!'] = 'Zot!';
$a->strings['LinkedIn'] = 'LinkedIn';
$a->strings['XMPP/IM'] = 'XMPP/IM';
$a->strings['MySpace'] = 'MySpace';
$a->strings['Google+'] = 'Google+';
$a->strings['pump.io'] = 'pump.io';
$a->strings['Twitter'] = 'Twitter';
$a->strings['Discourse'] = 'Discourse';
$a->strings['Diaspora Connector'] = 'Diaspora Connector';
$a->strings['GNU Social Connector'] = 'GNU Social Connector';
$a->strings['ActivityPub'] = 'ActivityPub';
$a->strings['pnut'] = 'pnut';
$a->strings['%s (via %s)'] = '%s (через %s)';
$a->strings['%s likes this.'] = '%s нравится это.';
$a->strings['%s doesn\'t like this.'] = '%s не нравится это.';
$a->strings['%s attends.'] = '%s посещает.';
$a->strings['%s doesn\'t attend.'] = '%s не посетит.';
$a->strings['%s attends maybe.'] = '%s может быть посетит.';
$a->strings['%s reshared this.'] = '%s поделился этим.';
$a->strings['and'] = 'и';
$a->strings['and %d other people'] = 'и еще %d человек';
$a->strings['<span  %1$s>%2$d people</span> like this'] = '<span %1$s>%2$d людям</span> нравится это';
$a->strings['%s like this.'] = '%s нравится это.';
$a->strings['<span  %1$s>%2$d people</span> don\'t like this'] = '<span %1$s>%2$d людям</span> не нравится это';
$a->strings['%s don\'t like this.'] = '%s не нравится это';
$a->strings['<span  %1$s>%2$d people</span> attend'] = '<span  %1$s>%2$d человека</span> посетят';
$a->strings['%s attend.'] = '%s посетит.';
$a->strings['<span  %1$s>%2$d people</span> don\'t attend'] = '<span  %1$s>%2$d человек</span> не посетит';
$a->strings['%s don\'t attend.'] = '%s не посетит';
$a->strings['<span  %1$s>%2$d people</span> attend maybe'] = '<span  %1$s>%2$d человек</span> может быть посетят';
$a->strings['%s attend maybe.'] = '%s может быть посетит.';
$a->strings['<span  %1$s>%2$d people</span> reshared this'] = '<span  %1$s>%2$d людей</span> поделились этим';
$a->strings['Visible to <strong>everybody</strong>'] = 'Видимое <strong>всем</strong>';
$a->strings['Please enter a image/video/audio/webpage URL:'] = 'Пожалуйста, введите адрес картинки/видео/аудио/странички:';
$a->strings['Tag term:'] = 'Тег:';
$a->strings['Save to Folder:'] = 'Сохранить в папку:';
$a->strings['Where are you right now?'] = 'И где вы сейчас?';
$a->strings['Delete item(s)?'] = 'Удалить елемент(ты)?';
$a->strings['Created at'] = 'Создано';
$a->strings['New Post'] = 'Новая запись';
$a->strings['Share'] = 'Поделиться';
$a->strings['Image'] = 'Изображение / Фото';
$a->strings['Video'] = 'Видео';
$a->strings['Scheduled at'] = 'Запланировано на';
$a->strings['Pinned item'] = 'Закреплённая запись';
$a->strings['View %s\'s profile @ %s'] = 'Просмотреть профиль %s [@ %s]';
$a->strings['Categories:'] = 'Категории:';
$a->strings['Filed under:'] = 'В рубрике:';
$a->strings['%s from %s'] = '%s из %s';
$a->strings['View in context'] = 'Смотреть в контексте';
$a->strings['remove'] = 'удалить';
$a->strings['Delete Selected Items'] = 'Удалить выбранные позиции';
$a->strings['You had been addressed (%s).'] = 'К вам обратились (%s).';
$a->strings['You are following %s.'] = 'Вы подписаны на %s.';
$a->strings['You subscribed to one or more tags in this post.'] = 'Вы подписаны на один или несколько тегов в этой записи.';
$a->strings['Reshared'] = 'Репост';
$a->strings['Reshared by %s <%s>'] = 'Репост от %s <%s>';
$a->strings['%s is participating in this thread.'] = '%s участвует в этом обсуждении';
$a->strings['Stored for general reasons'] = 'Загружено по необходимости';
$a->strings['Global post'] = 'Глобальная запись';
$a->strings['Sent via an relay server'] = 'Прислано через релей';
$a->strings['Sent via the relay server %s <%s>'] = 'Прислано через релей %s <%s>';
$a->strings['Fetched'] = 'Загружено';
$a->strings['Fetched because of %s <%s>'] = 'Загружено из-за %s <%s>';
$a->strings['Stored because of a child post to complete this thread.'] = 'Загружено из-за комментария в этой ветке.';
$a->strings['Stored because of your activity (like, comment, star, ...)'] = 'Загружено из-за ваших действий (лайк, комментарий, ...)';
$a->strings['Distributed'] = 'Распространено';
$a->strings['Pushed to us'] = 'Прислано нам';
$a->strings['General Features'] = 'Основные возможности';
$a->strings['Photo Location'] = 'Место фотографирования';
$a->strings['Photo metadata is normally stripped. This extracts the location (if present) prior to stripping metadata and links it to a map.'] = 'Метаданные фотографий обычно вырезаются. Эта настройка получает местоположение (если есть) до вырезки метаданных и связывает с координатами на карте.';
$a->strings['Trending Tags'] = 'Популярные тэги';
$a->strings['Show a community page widget with a list of the most popular tags in recent public posts.'] = 'Показать облако популярных тэгов на странице публичных записей сервера';
$a->strings['Post Composition Features'] = 'Составление сообщений';
$a->strings['Auto-mention Forums'] = 'Автоматически отмечать форумы';
$a->strings['Add/remove mention when a forum page is selected/deselected in ACL window.'] = 'Добавлять/удалять упоминание, когда страница форума выбрана/убрана в списке получателей.';
$a->strings['Explicit Mentions'] = 'Явные отметки';
$a->strings['Add explicit mentions to comment box for manual control over who gets mentioned in replies.'] = 'Вставлять отметки пользователей в поле комментариев, чтобы иметь ручной контроль над тем, кто будет упомянут в ответе.';
$a->strings['Add an abstract from ActivityPub content warnings'] = 'Добавлять abstract для записей ActivityPub с content warning';
$a->strings['Add an abstract when commenting on ActivityPub posts with a content warning. Abstracts are displayed as content warning on systems like Mastodon or Pleroma.'] = 'Добавлять сокращение abstract при комментировании записей ActivityPub с content warning. Элементы abstract отображаются как тэги content warning на системах Mastodon и Pleroma.';
$a->strings['Post/Comment Tools'] = 'Инструменты записей/комментариев';
$a->strings['Post Categories'] = 'Категории записей';
$a->strings['Add categories to your posts'] = 'Добавить категории для ваших записей';
$a->strings['Advanced Profile Settings'] = 'Расширенные настройки профиля';
$a->strings['List Forums'] = 'Список форумов';
$a->strings['Show visitors public community forums at the Advanced Profile Page'] = 'Показывать посетителям публичные форумы на расширенной странице профиля.';
$a->strings['Tag Cloud'] = 'Облако тэгов';
$a->strings['Provide a personal tag cloud on your profile page'] = 'Показывать ваше личное облако тэгов в вашем профиле';
$a->strings['Display Membership Date'] = 'Показывать дату регистрации';
$a->strings['Display membership date in profile'] = 'Дата вашей регистрации будет отображаться в вашем профиле';
$a->strings['Forums'] = 'Форумы';
$a->strings['External link to forum'] = 'Внешняя ссылка на форум';
$a->strings['show less'] = 'показать меньше';
$a->strings['show more'] = 'показать больше';
$a->strings['event'] = 'мероприятие';
$a->strings['Follow Thread'] = 'Подписаться на обсуждение';
$a->strings['View Status'] = 'Просмотреть статус';
$a->strings['View Profile'] = 'Просмотреть профиль';
$a->strings['View Photos'] = 'Просмотреть фото';
$a->strings['Network Posts'] = 'Записи сети';
$a->strings['View Contact'] = 'Просмотреть контакт';
$a->strings['Send PM'] = 'Отправить ЛС';
$a->strings['Block'] = 'Заблокировать';
$a->strings['Ignore'] = 'Игнорировать';
$a->strings['Languages'] = 'Языки';
$a->strings['Nothing new here'] = 'Ничего нового здесь';
$a->strings['Go back'] = 'Назад';
$a->strings['Clear notifications'] = 'Стереть уведомления';
$a->strings['@name, !forum, #tags, content'] = '@имя, !форум, #тег, контент';
$a->strings['Logout'] = 'Выход';
$a->strings['End this session'] = 'Завершить эту сессию';
$a->strings['Login'] = 'Вход';
$a->strings['Sign in'] = 'Вход';
$a->strings['Status'] = 'Записи';
$a->strings['Your posts and conversations'] = 'Ваши записи и диалоги';
$a->strings['Profile'] = 'Информация';
$a->strings['Your profile page'] = 'Информация о вас';
$a->strings['Your photos'] = 'Ваши фотографии';
$a->strings['Media'] = 'Медиа';
$a->strings['Your postings with media'] = 'Ваши записи с фото и видео';
$a->strings['Your events'] = 'Ваши события';
$a->strings['Personal notes'] = 'Личные заметки';
$a->strings['Your personal notes'] = 'Ваши личные заметки';
$a->strings['Home'] = 'Мой профиль';
$a->strings['Register'] = 'Регистрация';
$a->strings['Create an account'] = 'Создать аккаунт';
$a->strings['Help'] = 'Помощь';
$a->strings['Help and documentation'] = 'Помощь и документация';
$a->strings['Apps'] = 'Приложения';
$a->strings['Addon applications, utilities, games'] = 'Дополнительные приложения, утилиты, игры';
$a->strings['Search'] = 'Поиск';
$a->strings['Search site content'] = 'Поиск по сайту';
$a->strings['Full Text'] = 'Контент';
$a->strings['Tags'] = 'Тэги';
$a->strings['Contacts'] = 'Контакты';
$a->strings['Community'] = 'Сообщество';
$a->strings['Conversations on this and other servers'] = 'Диалоги на этом и других серверах';
$a->strings['Events and Calendar'] = 'Календарь и события';
$a->strings['Directory'] = 'Каталог';
$a->strings['People directory'] = 'Каталог участников';
$a->strings['Information'] = 'Информация';
$a->strings['Information about this friendica instance'] = 'Информация об этом экземпляре Friendica';
$a->strings['Terms of Service'] = 'Условия оказания услуг';
$a->strings['Terms of Service of this Friendica instance'] = 'Условия оказания услуг для этого узла Friendica';
$a->strings['Network'] = 'Новости';
$a->strings['Conversations from your friends'] = 'Сообщения ваших друзей';
$a->strings['Introductions'] = 'Запросы';
$a->strings['Friend Requests'] = 'Запросы на добавление в список друзей';
$a->strings['Notifications'] = 'Уведомления';
$a->strings['See all notifications'] = 'Посмотреть все уведомления';
$a->strings['Mark all system notifications as seen'] = 'Пометить все уведомления прочитанными';
$a->strings['Private mail'] = 'Личная почта';
$a->strings['Inbox'] = 'Входящие';
$a->strings['Outbox'] = 'Исходящие';
$a->strings['Accounts'] = 'Учётные записи';
$a->strings['Manage other pages'] = 'Управление другими страницами';
$a->strings['Settings'] = 'Настройки';
$a->strings['Account settings'] = 'Настройки аккаунта';
$a->strings['Manage/edit friends and contacts'] = 'Управление / редактирование друзей и контактов';
$a->strings['Admin'] = 'Администратор';
$a->strings['Site setup and configuration'] = 'Конфигурация сайта';
$a->strings['Navigation'] = 'Навигация';
$a->strings['Site map'] = 'Карта сайта';
$a->strings['Embedding disabled'] = 'Встраивание отключено';
$a->strings['Embedded content'] = 'Встроенное содержание';
$a->strings['first'] = 'первый';
$a->strings['prev'] = 'пред.';
$a->strings['next'] = 'след.';
$a->strings['last'] = 'последний';
$a->strings['Image/photo'] = 'Изображение / Фото';
$a->strings['<a href="%1$s" target="_blank" rel="noopener noreferrer">%2$s</a> %3$s'] = '<a href="%1$s" target="_blank" rel="noopener noreferrer">%2$s</a> %3$s';
$a->strings['Link to source'] = 'Ссылка на источник';
$a->strings['Click to open/close'] = 'Нажмите, чтобы открыть / закрыть';
$a->strings['$1 wrote:'] = '$1 написал:';
$a->strings['Encrypted content'] = 'Зашифрованный контент';
$a->strings['Invalid source protocol'] = 'Неправильный протокол источника';
$a->strings['Invalid link protocol'] = 'Неправильная протокольная ссылка';
$a->strings['Loading more entries...'] = 'Загружаю больше сообщений...';
$a->strings['The end'] = 'Конец';
$a->strings['Follow'] = 'Подписаться';
$a->strings['Add New Contact'] = 'Добавить контакт';
$a->strings['Enter address or web location'] = 'Введите адрес или веб-местонахождение';
$a->strings['Example: bob@example.com, http://example.com/barbara'] = 'Пример: bob@example.com, http://example.com/barbara';
$a->strings['Connect'] = 'Подключить';
$a->strings['%d invitation available'] = [
	0 => '%d приглашение доступно',
	1 => '%d приглашений доступно',
	2 => '%d приглашений доступно',
	3 => '%d приглашений доступно',
];
$a->strings['Find People'] = 'Поиск людей';
$a->strings['Enter name or interest'] = 'Введите имя или интерес';
$a->strings['Examples: Robert Morgenstein, Fishing'] = 'Примеры: Роберт Morgenstein, Рыбалка';
$a->strings['Find'] = 'Найти';
$a->strings['Similar Interests'] = 'Похожие интересы';
$a->strings['Random Profile'] = 'Случайный профиль';
$a->strings['Invite Friends'] = 'Пригласить друзей';
$a->strings['Global Directory'] = 'Глобальный каталог';
$a->strings['Local Directory'] = 'Локальный каталог';
$a->strings['Groups'] = 'Группы';
$a->strings['Everyone'] = 'Все';
$a->strings['Relationships'] = 'Отношения';
$a->strings['All Contacts'] = 'Все контакты';
$a->strings['Protocols'] = 'Протоколы';
$a->strings['All Protocols'] = 'Все протоколы';
$a->strings['Saved Folders'] = 'Сохранённые папки';
$a->strings['Everything'] = 'Всё';
$a->strings['Categories'] = 'Категории';
$a->strings['%d contact in common'] = [
	0 => '%d Контакт',
	1 => '%d Контактов',
	2 => '%d Контактов',
	3 => '%d Контактов',
];
$a->strings['Archives'] = 'Архивы';
$a->strings['Persons'] = 'Люди';
$a->strings['Organisations'] = 'Организации';
$a->strings['News'] = 'Новости';
$a->strings['Account Types'] = 'Тип учетной записи';
$a->strings['All'] = 'Все';
$a->strings['Export'] = 'Экспорт';
$a->strings['Export calendar as ical'] = 'Экспортировать календарь в формат ical';
$a->strings['Export calendar as csv'] = 'Экспортировать календарь в формат csv';
$a->strings['No contacts'] = 'Нет контактов';
$a->strings['%d Contact'] = [
	0 => '%d контакт',
	1 => '%d контактов',
	2 => '%d контактов',
	3 => '%d контактов',
];
$a->strings['View Contacts'] = 'Просмотр контактов';
$a->strings['Remove term'] = 'Удалить элемент';
$a->strings['Saved Searches'] = 'Сохранённые поиски';
$a->strings['Trending Tags (last %d hour)'] = [
	0 => 'Популярные тэги (за %d час)',
	1 => 'Популярные тэги (за %d часа)',
	2 => 'Популярные тэги (за %d часов)',
	3 => 'Популярные тэги (за %d часов)',
];
$a->strings['More Trending Tags'] = 'Больше популярных тэгов';
$a->strings['XMPP:'] = 'XMPP:';
$a->strings['Matrix:'] = 'Matrix:';
$a->strings['Network:'] = 'Сеть:';
$a->strings['Unfollow'] = 'Отписаться';
$a->strings['Yourself'] = 'Вы';
$a->strings['Mutuals'] = 'Взаимные';
$a->strings['Post to Email'] = 'Отправить на Email';
$a->strings['Public'] = 'Публично';
$a->strings['This content will be shown to all your followers and can be seen in the community pages and by anyone with its link.'] = 'Это будет показано всем вашим подписчикам и так же будет доступно в общей ленте и по прямой ссылке.';
$a->strings['Limited/Private'] = 'Ограниченный доступ';
$a->strings['This content will be shown only to the people in the first box, to the exception of the people mentioned in the second box. It won\'t appear anywhere public.'] = 'Это будет доступно только получателям, перечисленным в первом поле, за исключением тех, кто добавлен во второе поле. Нигде в открытом доступе это не появится.';
$a->strings['Show to:'] = 'Доступно:';
$a->strings['Except to:'] = 'За исключением:';
$a->strings['Connectors'] = 'Соединители';
$a->strings['The database configuration file "config/local.config.php" could not be written. Please use the enclosed text to create a configuration file in your web server root.'] = 'Не получается записать файл конфигурации базы данных "config/local.config.php". Пожалуйста, создайте этот файл в корневом каталоге веб-сервера вручную, вставив в него приведённые здесь данные.';
$a->strings['You may need to import the file "database.sql" manually using phpmyadmin or mysql.'] = 'Вам может понадобиться импортировать файл "database.sql" вручную с помощью PhpMyAdmin или MySQL.';
$a->strings['Please see the file "doc/INSTALL.md".'] = 'Пожалуйста посмотрите файл "doc/INSTALL.md".';
$a->strings['Could not find a command line version of PHP in the web server PATH.'] = 'Не удалось найти PATH веб-сервера в установках PHP.';
$a->strings['If you don\'t have a command line version of PHP installed on your server, you will not be able to run the background processing. See <a href=\'https://github.com/friendica/friendica/blob/stable/doc/Install.md#set-up-the-worker\'>\'Setup the worker\'</a>'] = 'Если у вас нет доступа к командной строке PHP на вашем сервере, вы не сможете использовать фоновые задания. Посмотрите <a href=\'https://github.com/friendica/friendica/blob/stable/doc/Install.md#set-up-the-worker\'>\'Настройка фоновых заданий\'</a>';
$a->strings['PHP executable path'] = 'PHP executable path';
$a->strings['Enter full path to php executable. You can leave this blank to continue the installation.'] = 'Введите полный путь к исполняемому файлу PHP. Вы можете оставить это поле пустым, чтобы продолжить установку.';
$a->strings['Command line PHP'] = 'Command line PHP';
$a->strings['PHP executable is not the php cli binary (could be cgi-fgci version)'] = 'Бинарник PHP не является CLI версией (может быть это cgi-fcgi версия)';
$a->strings['Found PHP version: '] = 'Найденная PHP версия: ';
$a->strings['PHP cli binary'] = 'PHP cli binary';
$a->strings['The command line version of PHP on your system does not have "register_argc_argv" enabled.'] = 'Не включено "register_argc_argv" в установках PHP.';
$a->strings['This is required for message delivery to work.'] = 'Это необходимо для работы доставки сообщений.';
$a->strings['PHP register_argc_argv'] = 'PHP register_argc_argv';
$a->strings['Error: the "openssl_pkey_new" function on this system is not able to generate encryption keys'] = 'Ошибка: функция "openssl_pkey_new" в этой системе не в состоянии генерировать ключи шифрования';
$a->strings['If running under Windows, please see "http://www.php.net/manual/en/openssl.installation.php".'] = 'Если вы работаете под Windows, см. "http://www.php.net/manual/en/openssl.installation.php".';
$a->strings['Generate encryption keys'] = 'Генерация шифрованых ключей';
$a->strings['Error: Apache webserver mod-rewrite module is required but not installed.'] = 'Ошибка: необходим модуль веб-сервера Apache mod-rewrite, но он не установлен.';
$a->strings['Apache mod_rewrite module'] = 'Apache mod_rewrite module';
$a->strings['Error: PDO or MySQLi PHP module required but not installed.'] = 'Ошибка: PDO или MySQLi модули PHP требуются, но не установлены.';
$a->strings['Error: The MySQL driver for PDO is not installed.'] = 'Ошибка: Драйвер MySQL для PDO не установлен.';
$a->strings['PDO or MySQLi PHP module'] = 'PDO или MySQLi PHP модуль';
$a->strings['Error, XML PHP module required but not installed.'] = 'Ошибка, необходим PHP модуль XML, но он не установлен';
$a->strings['XML PHP module'] = 'XML PHP модуль';
$a->strings['libCurl PHP module'] = 'libCurl PHP модуль';
$a->strings['Error: libCURL PHP module required but not installed.'] = 'Ошибка: необходим libCURL PHP модуль, но он не установлен.';
$a->strings['GD graphics PHP module'] = 'GD graphics PHP модуль';
$a->strings['Error: GD graphics PHP module with JPEG support required but not installed.'] = 'Ошибка: необходим PHP модуль GD графики с поддержкой JPEG, но он не установлен.';
$a->strings['OpenSSL PHP module'] = 'OpenSSL PHP модуль';
$a->strings['Error: openssl PHP module required but not installed.'] = 'Ошибка: необходим PHP модуль OpenSSL, но он не установлен.';
$a->strings['mb_string PHP module'] = 'mb_string PHP модуль';
$a->strings['Error: mb_string PHP module required but not installed.'] = 'Ошибка: необходим PHP модуль mb_string, но он не установлен.';
$a->strings['iconv PHP module'] = 'iconv PHP модуль';
$a->strings['Error: iconv PHP module required but not installed.'] = 'Ошибка: необходим PHP модуль iconv, но он не установлен.';
$a->strings['POSIX PHP module'] = 'POSIX PHP модуль';
$a->strings['Error: POSIX PHP module required but not installed.'] = 'Ошибка: POSIX PHP модуль требуется, но не установлен.';
$a->strings['Program execution functions'] = 'Функции исполнения программ';
$a->strings['Error: Program execution functions (proc_open) required but not enabled.'] = 'Ошибка: Требуется наличие функций исполнения программ (proc_open), но они не включены.';
$a->strings['JSON PHP module'] = 'JSON PHP модуль';
$a->strings['Error: JSON PHP module required but not installed.'] = 'Ошибка: JSON PHP модуль требуется, но не установлен.';
$a->strings['File Information PHP module'] = 'File Information PHP модуль';
$a->strings['Error: File Information PHP module required but not installed.'] = 'Ошибка File Information PHP модуль требуется, но не установлен.';
$a->strings['The web installer needs to be able to create a file called "local.config.php" in the "config" folder of your web server and it is unable to do so.'] = 'Установщику требуется создать файл "local.config.php" в каталоге "config" на вашем веб-сервере, но у него не получается это сделать.';
$a->strings['This is most often a permission setting, as the web server may not be able to write files in your folder - even if you can.'] = 'Это наиболее частые параметры разрешений, когда веб-сервер не может записать файлы в папке - даже если вы можете.';
$a->strings['At the end of this procedure, we will give you a text to save in a file named local.config.php in your Friendica "config" folder.'] = 'В конце этой операции мы предоставим вам текст конфигурации, которую вам нужно будет сохранить в виде файла local.config.php в каталоге "config" вашей установки Френдики.';
$a->strings['You can alternatively skip this procedure and perform a manual installation. Please see the file "doc/INSTALL.md" for instructions.'] = 'В качестве альтернативы вы можете пропустить эту процедуру и выполнить установку вручную. Пожалуйста, обратитесь к файлу "INSTALL.md" для получения инструкций.';
$a->strings['config/local.config.php is writable'] = 'config/local.config.php доступен для записи';
$a->strings['Friendica uses the Smarty3 template engine to render its web views. Smarty3 compiles templates to PHP to speed up rendering.'] = 'Friendica использует механизм шаблонов Smarty3 для генерации веб-страниц. Smarty3 компилирует шаблоны в PHP для увеличения скорости загрузки.';
$a->strings['In order to store these compiled templates, the web server needs to have write access to the directory view/smarty3/ under the Friendica top level folder.'] = 'Для того чтобы хранить эти скомпилированные шаблоны, веб-сервер должен иметь доступ на запись для папки view/smarty3 в директории, где установлена Friendica.';
$a->strings['Please ensure that the user that your web server runs as (e.g. www-data) has write access to this folder.'] = 'Пожалуйста, убедитесь, что пользователь, под которым работает ваш веб-сервер (например www-data), имеет доступ на запись в этой папке.';
$a->strings['Note: as a security measure, you should give the web server write access to view/smarty3/ only--not the template files (.tpl) that it contains.'] = 'Примечание: в качестве меры безопасности, вы должны дать вебсерверу доступ на запись только в view/smarty3 - но не на сами файлы шаблонов (.tpl)., Которые содержатся в этой папке.';
$a->strings['view/smarty3 is writable'] = 'view/smarty3 доступен для записи';
$a->strings['Url rewrite in .htaccess seems not working. Make sure you copied .htaccess-dist to .htaccess.'] = 'Похоже, что Url rewrite в .htaccess не работает. Убедитесь, что вы скопировали .htaccess-dist в .htaccess.';
$a->strings['In some circumstances (like running inside containers), you can skip this error.'] = 'В некоторых случаях (например, при запуске в контейнерах) вы можете пропустить эту ошибку.';
$a->strings['Error message from Curl when fetching'] = 'Ошибка Curl при закачке';
$a->strings['Url rewrite is working'] = 'Url rewrite работает';
$a->strings['The detection of TLS to secure the communication between the browser and the new Friendica server failed.'] = 'Не удалось обнаружить TLS-соединение между браузером и новым сервером Friendica.';
$a->strings['It is highly encouraged to use Friendica only over a secure connection as sensitive information like passwords will be transmitted.'] = 'Настоятельно рекомендуется использовать Friendica только с безопасным соединением, так как передаётся чувствительная информация, например - пароли.';
$a->strings['Please ensure that the connection to the server is secure.'] = 'Пожалуйста, убедитесь, что соединение с сервером безопасно.';
$a->strings['No TLS detected'] = 'TLS не обнаружено.';
$a->strings['TLS detected'] = 'TLS обнаружено.';
$a->strings['ImageMagick PHP extension is not installed'] = 'Модуль PHP ImageMagick не установлен';
$a->strings['ImageMagick PHP extension is installed'] = 'Модуль PHP ImageMagick установлен';
$a->strings['ImageMagick supports GIF'] = 'ImageMagick поддерживает GIF';
$a->strings['Database already in use.'] = 'База данных уже используется.';
$a->strings['Could not connect to database.'] = 'Не удалось подключиться к базе данных.';
$a->strings['Monday'] = 'Понедельник';
$a->strings['Tuesday'] = 'Вторник';
$a->strings['Wednesday'] = 'Среда';
$a->strings['Thursday'] = 'Четверг';
$a->strings['Friday'] = 'Пятница';
$a->strings['Saturday'] = 'Суббота';
$a->strings['Sunday'] = 'Воскресенье';
$a->strings['January'] = 'Январь';
$a->strings['February'] = 'Февраль';
$a->strings['March'] = 'Март';
$a->strings['April'] = 'Апрель';
$a->strings['May'] = 'Май';
$a->strings['June'] = 'Июнь';
$a->strings['July'] = 'Июль';
$a->strings['August'] = 'Август';
$a->strings['September'] = 'Сентябрь';
$a->strings['October'] = 'Октябрь';
$a->strings['November'] = 'Ноябрь';
$a->strings['December'] = 'Декабрь';
$a->strings['Mon'] = 'Пн';
$a->strings['Tue'] = 'Вт';
$a->strings['Wed'] = 'Ср';
$a->strings['Thu'] = 'Чт';
$a->strings['Fri'] = 'Пт';
$a->strings['Sat'] = 'Сб';
$a->strings['Sun'] = 'Вс';
$a->strings['Jan'] = 'Янв';
$a->strings['Feb'] = 'Фев';
$a->strings['Mar'] = 'Мрт';
$a->strings['Apr'] = 'Апр';
$a->strings['Jun'] = 'Июн';
$a->strings['Jul'] = 'Июл';
$a->strings['Aug'] = 'Авг';
$a->strings['Sep'] = 'Сен';
$a->strings['Oct'] = 'Окт';
$a->strings['Nov'] = 'Нбр';
$a->strings['Dec'] = 'Дек';
$a->strings['Friendica can\'t display this page at the moment, please contact the administrator.'] = 'Friendica не может отобразить эту страницу в данный момент, пожалуйста, свяжитесь с администратором.';
$a->strings['Storage base path'] = 'Корневой каталог хранилища';
$a->strings['Folder where uploaded files are saved. For maximum security, This should be a path outside web server folder tree'] = 'Каталог, куда сохраняются загруженные файлы. Для максимальной безопасности этот каталог должен быть размещён вне каталогов веб-сервера.';
$a->strings['Enter a valid existing folder'] = 'Введите путь к существующему каталогу';
$a->strings['%s: executing pre update %d'] = '%s: выполняется предварительное обновление %d';
$a->strings['%s: executing post update %d'] = '%s: выполняется завершение обновления %d';
$a->strings['Update %s failed. See error logs.'] = 'Обновление %s не удалось. Смотрите журнал ошибок.';
$a->strings['
				The friendica developers released update %s recently,
				but when I tried to install it, something went terribly wrong.
				This needs to be fixed soon and I can\'t do it alone. Please contact a
				friendica developer if you can not help me on your own. My database might be invalid.'] = '
				Разработчики Френдики недавно выпустили обновление %s,
				но при установке что-то пошло не так.
				Это нужно исправить в ближайшее время и у меня не получается сделать это самостоятельно. Пожалуйста, свяжитесь с разработчиками Френдики, если вы не можете мне помочь сами. База данных может быть повреждена.';
$a->strings['The error message is\n[pre]%s[/pre]'] = 'Сообщение об ошибке\n[pre]%s[/pre]';
$a->strings['[Friendica Notify] Database update'] = '[Friendica Notify] Обновление базы данных';
$a->strings['
					The friendica database was successfully updated from %s to %s.'] = '
					База данных Френдики была успешно обновлена с версии %s на %s.';
$a->strings['Error decoding account file'] = 'Ошибка расшифровки файла аккаунта';
$a->strings['Error! No version data in file! This is not a Friendica account file?'] = 'Ошибка! Неправильная версия данных в файле! Это не файл аккаунта Friendica?';
$a->strings['User \'%s\' already exists on this server!'] = 'Пользователь \'%s\' уже существует на этом сервере!';
$a->strings['User creation error'] = 'Ошибка создания пользователя';
$a->strings['%d contact not imported'] = [
	0 => '%d контакт не импортирован',
	1 => '%d контакты не импортированы',
	2 => '%d контакты не импортированы',
	3 => '%d контакты не импортированы',
];
$a->strings['User profile creation error'] = 'Ошибка создания профиля пользователя';
$a->strings['Done. You can now login with your username and password'] = 'Завершено. Теперь вы можете войти с вашим логином и паролем';
$a->strings['The database version had been set to %s.'] = 'Версия базы данных была установлена на %s.';
$a->strings['No unused tables found.'] = 'Неиспользуемые таблицы не найдены.';
$a->strings['These tables are not used for friendica and will be deleted when you execute "dbstructure drop -e":'] = 'Эти таблицы не используются Friendica и будут удалены, когда вы выполните команду "dbstructure drop -e":';
$a->strings['There are no tables on MyISAM or InnoDB with the Antelope file format.'] = 'В MyISAM или InnoDB нет таблиц в формате Antelope.';
$a->strings['
Error %d occurred during database update:
%s
'] = '
Ошибка %d возникла при обновлении базы данных:
%s
';
$a->strings['Errors encountered performing database changes: '] = 'Ошибки, возникшие при применении изменений базы данных: ';
$a->strings['Another database update is currently running.'] = 'Другая операция обновления базы данных уже запущена.';
$a->strings['%s: Database update'] = '%s: Обновление базы данных';
$a->strings['%s: updating %s table.'] = '%s: обновляется %s таблица.';
$a->strings['Record not found'] = 'Запись не найдена';
$a->strings['Unprocessable Entity'] = 'Необрабатываемая сущность';
$a->strings['Unauthorized'] = 'Нет авторизации';
$a->strings['Internal Server Error'] = 'Внутренняя ошибка сервера';
$a->strings['Legacy module file not found: %s'] = 'Legacy-модуль не найден: %s';
$a->strings['UnFollow'] = 'Отписаться';
$a->strings['Approve'] = 'Одобрить';
$a->strings['Organisation'] = 'Организация';
$a->strings['Forum'] = 'Форум';
$a->strings['Disallowed profile URL.'] = 'Запрещенный URL профиля.';
$a->strings['Blocked domain'] = 'Заблокированный домен';
$a->strings['Connect URL missing.'] = 'Connect-URL отсутствует.';
$a->strings['The contact could not be added. Please check the relevant network credentials in your Settings -> Social Networks page.'] = 'Контакт не может быть добавлен. Пожалуйста проверьте учётные данные на странице Настройки -> Социальные сети.';
$a->strings['The profile address specified does not provide adequate information.'] = 'Указанный адрес профиля не дает адекватной информации.';
$a->strings['No compatible communication protocols or feeds were discovered.'] = 'Обнаружены несовместимые протоколы связи или каналы.';
$a->strings['An author or name was not found.'] = 'Автор или имя не найдены.';
$a->strings['No browser URL could be matched to this address.'] = 'Нет URL браузера, который соответствует этому адресу.';
$a->strings['Unable to match @-style Identity Address with a known protocol or email contact.'] = 'Не получается совместить этот адрес с известным протоколом или контактом электронной почты.';
$a->strings['Use mailto: in front of address to force email check.'] = 'Bcgjkmpeqnt mailto: перед адресом для быстрого доступа к email.';
$a->strings['The profile address specified belongs to a network which has been disabled on this site.'] = 'Указанный адрес профиля принадлежит сети, недоступной на этом сайта.';
$a->strings['Limited profile. This person will be unable to receive direct/personal notifications from you.'] = 'Ограниченный профиль. Этот человек не сможет получить прямые / личные уведомления от вас.';
$a->strings['Unable to retrieve contact information.'] = 'Невозможно получить контактную информацию.';
$a->strings['Starts:'] = 'Начало:';
$a->strings['Finishes:'] = 'Окончание:';
$a->strings['all-day'] = 'Весь день';
$a->strings['Sept'] = 'Сен';
$a->strings['No events to display'] = 'Нет событий для показа';
$a->strings['l, F j'] = 'l, j F';
$a->strings['Edit event'] = 'Редактировать мероприятие';
$a->strings['Duplicate event'] = 'Дубликат события';
$a->strings['Delete event'] = 'Удалить событие';
$a->strings['l F d, Y \@ g:i A'] = 'l F d, Y \@ g:i A';
$a->strings['D g:i A'] = 'D g:i A';
$a->strings['g:i A'] = 'g:i A';
$a->strings['Show map'] = 'Показать карту';
$a->strings['Hide map'] = 'Скрыть карту';
$a->strings['%s\'s birthday'] = 'день рождения %s';
$a->strings['Happy Birthday %s'] = 'С днём рождения %s';
$a->strings['A deleted group with this name was revived. Existing item permissions <strong>may</strong> apply to this group and any future members. If this is not what you intended, please create another group with a different name.'] = 'Удаленная группа с таким названием была восстановлена. Существующие права доступа <strong>могут</strong> применяться к этой группе и любым будущим участникам. Если это не то, что вы хотели, пожалуйста, создайте еще ​​одну группу с другим названием.';
$a->strings['Default privacy group for new contacts'] = 'Группа доступа по умолчанию для новых контактов';
$a->strings['Everybody'] = 'Все';
$a->strings['edit'] = 'редактировать';
$a->strings['add'] = 'добавить';
$a->strings['Edit group'] = 'Редактировать группу';
$a->strings['Contacts not in any group'] = 'Контакты не состоят в группе';
$a->strings['Create a new group'] = 'Создать новую группу';
$a->strings['Group Name: '] = 'Название группы: ';
$a->strings['Edit groups'] = 'Редактировать группы';
$a->strings['Detected languages in this post:\n%s'] = 'Обнаруженные в этой записи языки:\n%s';
$a->strings['activity'] = 'активность';
$a->strings['comment'] = 'комментарий';
$a->strings['post'] = 'пост';
$a->strings['Content warning: %s'] = 'Предупреждение о контенте: %s';
$a->strings['bytes'] = 'байт';
$a->strings['%2$s (%3$d%%, %1$d vote)'] = [
	0 => '%2$s (%3$d%%, %1$d голос)',
	1 => '%2$s (%3$d%%, %1$d голоса)',
	2 => '%2$s (%3$d%%, %1$d голосов)',
	3 => '%2$s (%3$d%%, %1$d голосов)',
];
$a->strings['%2$s (%1$d vote)'] = [
	0 => '%2$s (%1$d голос)',
	1 => '%2$s (%1$d голоса)',
	2 => '%2$s (%1$d голосов)',
	3 => '%2$s (%1$d голосов)',
];
$a->strings['%d voter. Poll end: %s'] = [
	0 => '%d голос. Конец опроса: %s',
	1 => '%d голоса. Конец опроса: %s',
	2 => '%d голосов. Конец опроса: %s',
	3 => '%d голосов. Конец опроса: %s',
];
$a->strings['%d voter.'] = [
	0 => '%d голос.',
	1 => '%d голоса.',
	2 => '%d голосов.',
	3 => '%d голосов.',
];
$a->strings['Poll end: %s'] = 'Конец опроса: %s';
$a->strings['View on separate page'] = 'Посмотреть в отдельной вкладке';
$a->strings['[no subject]'] = '[без темы]';
$a->strings['Edit profile'] = 'Редактировать профиль';
$a->strings['Change profile photo'] = 'Изменить фото профиля';
$a->strings['Homepage:'] = 'Домашняя страничка:';
$a->strings['About:'] = 'О себе:';
$a->strings['Atom feed'] = 'Фид Atom';
$a->strings['F d'] = 'F d';
$a->strings['[today]'] = '[сегодня]';
$a->strings['Birthday Reminders'] = 'Напоминания о днях рождения';
$a->strings['Birthdays this week:'] = 'Дни рождения на этой неделе:';
$a->strings['g A l F d'] = 'g A l F d';
$a->strings['[No description]'] = '[без описания]';
$a->strings['Event Reminders'] = 'Напоминания о мероприятиях';
$a->strings['Upcoming events the next 7 days:'] = 'События на ближайшие 7 дней:';
$a->strings['OpenWebAuth: %1$s welcomes %2$s'] = 'OpenWebAuth: %1$s приветствует %2$s';
$a->strings['Hometown:'] = 'Родной город:';
$a->strings['Marital Status:'] = 'Семейное положение:';
$a->strings['With:'] = 'Вместе:';
$a->strings['Since:'] = 'С:';
$a->strings['Sexual Preference:'] = 'Сексуальные предпочтения:';
$a->strings['Political Views:'] = 'Политические взгляды:';
$a->strings['Religious Views:'] = 'Религиозные взгляды:';
$a->strings['Likes:'] = 'Нравится:';
$a->strings['Dislikes:'] = 'Не нравится:';
$a->strings['Title/Description:'] = 'Заголовок / Описание:';
$a->strings['Summary'] = 'Резюме';
$a->strings['Musical interests'] = 'Музыкальные интересы';
$a->strings['Books, literature'] = 'Книги, литература';
$a->strings['Television'] = 'Телевидение';
$a->strings['Film/dance/culture/entertainment'] = 'Кино / танцы / культура / развлечения';
$a->strings['Hobbies/Interests'] = 'Хобби / Интересы';
$a->strings['Love/romance'] = 'Любовь / романтика';
$a->strings['Work/employment'] = 'Работа / занятость';
$a->strings['School/education'] = 'Школа / образование';
$a->strings['Contact information and Social Networks'] = 'Контактная информация и социальные сети';
$a->strings['SERIOUS ERROR: Generation of security keys failed.'] = 'СЕРЬЕЗНАЯ ОШИБКА: генерация ключей безопасности не удалась.';
$a->strings['Login failed'] = 'Вход не удался';
$a->strings['Not enough information to authenticate'] = 'Недостаточно информации для входа';
$a->strings['Password can\'t be empty'] = 'Пароль не может быть пустым';
$a->strings['Empty passwords are not allowed.'] = 'Пароль не должен быть пустым.';
$a->strings['The new password has been exposed in a public data dump, please choose another.'] = 'Новый пароль содержится в опубликованных списках украденных паролей, пожалуйста, используйте другой.';
$a->strings['The password length is limited to 72 characters.'] = 'Длина пароля ограничена 72 символами.';
$a->strings['The password can\'t contain accentuated letters, white spaces or colons (:)'] = 'Пароль не может содержать символы с акцентами, пробелы или двоеточия (:)';
$a->strings['Passwords do not match. Password unchanged.'] = 'Пароли не совпадают. Пароль не изменен.';
$a->strings['An invitation is required.'] = 'Требуется приглашение.';
$a->strings['Invitation could not be verified.'] = 'Приглашение не может быть проверено.';
$a->strings['Invalid OpenID url'] = 'Неверный URL OpenID';
$a->strings['We encountered a problem while logging in with the OpenID you provided. Please check the correct spelling of the ID.'] = 'Мы столкнулись с проблемой при входе с OpenID, который вы указали. Пожалуйста, проверьте правильность написания ID.';
$a->strings['The error message was:'] = 'Сообщение об ошибке было:';
$a->strings['Please enter the required information.'] = 'Пожалуйста, введите необходимую информацию.';
$a->strings['system.username_min_length (%s) and system.username_max_length (%s) are excluding each other, swapping values.'] = 'system.username_min_length (%s) и system.username_max_length (%s) противоречат друг другу, меняем их местами.';
$a->strings['Username should be at least %s character.'] = [
	0 => 'Имя пользователя должно быть хотя бы %s символ.',
	1 => 'Имя пользователя должно быть хотя бы %s символа.',
	2 => 'Имя пользователя должно быть хотя бы %s символов.',
	3 => 'Имя пользователя должно быть хотя бы %s символов.',
];
$a->strings['Username should be at most %s character.'] = [
	0 => 'Имя пользователя должно быть не больше %s символа.',
	1 => 'Имя пользователя должно быть не больше %s символов',
	2 => 'Имя пользователя должно быть не больше %s символов.',
	3 => 'Имя пользователя должно быть не больше %s символов.',
];
$a->strings['That doesn\'t appear to be your full (First Last) name.'] = 'Кажется, что это ваше неполное (Имя Фамилия) имя.';
$a->strings['Your email domain is not among those allowed on this site.'] = 'Домен вашего адреса электронной почты не относится к числу разрешенных на этом сайте.';
$a->strings['Not a valid email address.'] = 'Неверный адрес электронной почты.';
$a->strings['The nickname was blocked from registration by the nodes admin.'] = 'Этот ник был заблокирован для регистрации администратором узла.';
$a->strings['Cannot use that email.'] = 'Нельзя использовать этот Email.';
$a->strings['Your nickname can only contain a-z, 0-9 and _.'] = 'Ваш ник может содержать только символы a-z, 0-9 и  _.';
$a->strings['Nickname is already registered. Please choose another.'] = 'Такой ник уже зарегистрирован. Пожалуйста, выберите другой.';
$a->strings['An error occurred during registration. Please try again.'] = 'Ошибка при регистрации. Пожалуйста, попробуйте еще раз.';
$a->strings['An error occurred creating your default profile. Please try again.'] = 'Ошибка создания вашего профиля. Пожалуйста, попробуйте еще раз.';
$a->strings['An error occurred creating your self contact. Please try again.'] = 'При создании вашего контакта возникла проблема. Пожалуйста, попробуйте ещё раз.';
$a->strings['Friends'] = 'Друзья';
$a->strings['An error occurred creating your default contact group. Please try again.'] = 'При создании группы контактов по-умолчанию возникла ошибка. Пожалуйста, попробуйте ещё раз.';
$a->strings['Profile Photos'] = 'Фотографии профиля';
$a->strings['
		Dear %1$s,
			the administrator of %2$s has set up an account for you.'] = '
		Уважаемый(ая) %1$s,
			администратор  %2$s создал для вас учётную запись.';
$a->strings['
		The login details are as follows:

		Site Location:	%1$s
		Login Name:		%2$s
		Password:		%3$s

		You may change your password from your account "Settings" page after logging
		in.

		Please take a few moments to review the other account settings on that page.

		You may also wish to add some basic information to your default profile
		(on the "Profiles" page) so that other people can easily find you.

		We recommend setting your full name, adding a profile photo,
		adding some profile "keywords" (very useful in making new friends) - and
		perhaps what country you live in; if you do not wish to be more specific
		than that.

		We fully respect your right to privacy, and none of these items are necessary.
		If you are new and do not know anybody here, they may help
		you to make some new and interesting friends.

		If you ever want to delete your account, you can do so at %1$s/removeme

		Thank you and welcome to %4$s.'] = '
		Данные для входа в систему:

		Местоположение сайта:	%1$s
		Логин:		%2$s
		Пароль:		%3$s

		Вы можете изменить пароль на странице "Настройки"  после авторизации.

		Пожалуйста, уделите время ознакомлению с другими другие настройками аккаунта на этой странице.


		Вы также можете захотеть добавить немного базовой информации к вашему стандартному профилю
		(на странице "Информация") чтобы другим людям было проще вас найти.

		Мы рекомендуем указать ваше полное имя, добавить фотографию,
		немного "ключевых слов" (очень полезно, чтобы завести новых друзей)
		и возможно страну вашего проживания; если вы не хотите быть более конкретным.

		Мы полностью уважаем ваше право на приватность, поэтому ничего из этого не является обязательным.
		Если же вы новичок и никого не знаете, это может помочь
		вам завести новых интересных друзей.

		Если вы когда-нибудь захотите удалить свой аккаунт, вы можете сделать это перейдя по ссылке %1$s/removeme

		Спасибо и добро пожаловать в %4$s.';
$a->strings['Registration details for %s'] = 'Подробности регистрации для %s';
$a->strings['
			Dear %1$s,
				Thank you for registering at %2$s. Your account is pending for approval by the administrator.

			Your login details are as follows:

			Site Location:	%3$s
			Login Name:		%4$s
			Password:		%5$s
		'] = '
			Уважаемый %1$s,
				Благодарим Вас за регистрацию на %2$s. Ваш аккаунт ожидает подтверждения администратором.

			Ваши данные для входа в систему:

			Местоположение сайта:	%3$s
			Логин:		%4$s
			Пароль:		%5$s
		';
$a->strings['Registration at %s'] = 'Регистрация на %s';
$a->strings['
				Dear %1$s,
				Thank you for registering at %2$s. Your account has been created.
			'] = '
				Уважаемый(ая) %1$s,
				Спасибо за регистрацию на %2$s. Ваша учётная запись создана.
			';
$a->strings['
			The login details are as follows:

			Site Location:	%3$s
			Login Name:		%1$s
			Password:		%5$s

			You may change your password from your account "Settings" page after logging
			in.

			Please take a few moments to review the other account settings on that page.

			You may also wish to add some basic information to your default profile
			(on the "Profiles" page) so that other people can easily find you.

			We recommend setting your full name, adding a profile photo,
			adding some profile "keywords" (very useful in making new friends) - and
			perhaps what country you live in; if you do not wish to be more specific
			than that.

			We fully respect your right to privacy, and none of these items are necessary.
			If you are new and do not know anybody here, they may help
			you to make some new and interesting friends.

			If you ever want to delete your account, you can do so at %3$s/removeme

			Thank you and welcome to %2$s.'] = '
			Данные для входа:

			Адрес сайта:	%3$s
			Имя:		%1$s
			Пароль:		%5$s

			Вы можете сменить пароль в настройках учётной записи после входа.
			

			Также обратите внимание на другие настройки на этой странице.

			Вы можете захотеть добавить основную информацию о себе
			на странице "Профиль", чтобы другие люди легко вас нашли.

			Мы рекомендуем указать полное имя и установить фото профиля,
			добавить ключевые слова для поиска друзей по интересам,
			и, вероятно, страну вашего проживания.

			Мы уважаем вашу приватность и ничто из вышеуказанного не обязательно.
			Если вы новичок и пока никого здесь не знаете, то это поможет
			вам найти новых интересных друзей.

			Если вы захотите удалить свою учётную запись, то сможете сделать это на %3$s/removeme

			Спасибо и добро пожаловать на %2$s.';
$a->strings['[%s] Notice of remote server domain pattern block list update'] = '[%s] Обновление списка блокировки серверов';
$a->strings['Dear %s,

You are receiving this email because the Friendica node at %s where you are registered as a user updated their remote server domain pattern block list.

Please review the updated list at %s at your earliest convenience.'] = 'Уважаемый(ая) %s,

Вы получили это письмо, так как на узле Friendica %s, где вы зарегистрированы, обновился список блокировки серверов.

Пожалуйста, ознакомьтесь с новым списком по адресу %s.';
$a->strings['Addon not found.'] = 'Дополнение не найдено.';
$a->strings['Addon %s disabled.'] = 'Дополнение %s отключено.';
$a->strings['Addon %s enabled.'] = 'Дополнение %s включено.';
$a->strings['Disable'] = 'Отключить';
$a->strings['Enable'] = 'Включить';
$a->strings['Administration'] = 'Администрация';
$a->strings['Addons'] = 'Дополнения';
$a->strings['Toggle'] = 'Переключить';
$a->strings['Author: '] = 'Автор:';
$a->strings['Maintainer: '] = 'Программа обслуживания: ';
$a->strings['Addons reloaded'] = 'Дополнения перезагружены';
$a->strings['Addon %s failed to install.'] = 'Не удалось установить дополнение %s.';
$a->strings['Reload active addons'] = 'Перезагрузить активные дополнения';
$a->strings['There are currently no addons available on your node. You can find the official addon repository at %1$s and might find other interesting addons in the open addon registry at %2$s'] = 'На вашем узле пока нет доступных дополнений. Вы можете найти официальный репозиторий дополнений на %1$s и найти больше интересных дополнений в открытой библиотеке на %2$s';
$a->strings['List of all users'] = 'Все пользователи';
$a->strings['Active'] = 'Активные';
$a->strings['List of active accounts'] = 'Список активных пользователей';
$a->strings['Pending'] = 'В ожидании';
$a->strings['List of pending registrations'] = 'Список ожидающих регистрацию';
$a->strings['Blocked'] = 'Заблокированы';
$a->strings['List of blocked users'] = 'Заблокированные пользователи';
$a->strings['Deleted'] = 'Удалённые';
$a->strings['List of pending user deletions'] = 'Список ожидающих удаления';
$a->strings['Normal Account Page'] = 'Стандартная страница аккаунта';
$a->strings['Soapbox Page'] = 'Публичная страница';
$a->strings['Public Forum'] = 'Публичный форум';
$a->strings['Automatic Friend Page'] = '"Автоматический друг" страница';
$a->strings['Private Forum'] = 'Закрытый форум';
$a->strings['Personal Page'] = 'Личная страница';
$a->strings['Organisation Page'] = 'Организационная страница';
$a->strings['News Page'] = 'Новостная страница';
$a->strings['Community Forum'] = 'Форум сообщества';
$a->strings['Relay'] = 'Ретранслятор';
$a->strings['You can\'t block a local contact, please block the user instead'] = 'Нельзя заблокировать локальный контакт, пожалуйста заблокируйте самого пользователя.';
$a->strings['%s contact unblocked'] = [
	0 => '%s контакт разблокирован',
	1 => '%s контакта разблокированы',
	2 => '%s контактов разблокировано',
	3 => '%s контактов разблокировано',
];
$a->strings['Remote Contact Blocklist'] = 'Чёрный список удалённых контактов';
$a->strings['This page allows you to prevent any message from a remote contact to reach your node.'] = 'На этой странице вы можете заблокировать приём вашим узлом любых записей от определённых контактов.';
$a->strings['Block Remote Contact'] = 'Заблокировать удалённый контакт';
$a->strings['select all'] = 'выбрать все';
$a->strings['select none'] = 'сбросить выбор';
$a->strings['Unblock'] = 'Разблокировать';
$a->strings['No remote contact is blocked from this node.'] = 'Для этого узла нет заблокированных контактов.';
$a->strings['Blocked Remote Contacts'] = 'Заблокированные контакты';
$a->strings['Block New Remote Contact'] = 'Заблокировать новый контакт';
$a->strings['Photo'] = 'Фото';
$a->strings['Reason'] = 'Причина';
$a->strings['%s total blocked contact'] = [
	0 => '%s заблокированный контакт',
	1 => '%s заблокированных контакта',
	2 => '%s заблокированных контактов',
	3 => '%s заблокированных контактов',
];
$a->strings['URL of the remote contact to block.'] = 'URL блокируемого контакта.';
$a->strings['Also purge contact'] = 'Так же очистить контакт';
$a->strings['Removes all content related to this contact from the node. Keeps the contact record. This action cannot be undone.'] = 'Удалить всё содержимое, относящееся к данному контакту на этом узле. Запись контакта будет сохранена. Это действие нельзя отменить.';
$a->strings['Block Reason'] = 'Причина блокировки';
$a->strings['Server domain pattern added to the blocklist.'] = 'Маска адреса сервера добавлена в чёрный список.';
$a->strings['%s server scheduled to be purged.'] = [
	0 => '%s сервер ожидает очистки.',
	1 => '%s сервера ожидают очистки.',
	2 => '%s серверов ожидают очистки.',
	3 => '%s серверов ожидают очистки.',
];
$a->strings['← Return to the list'] = '← Вернуться к списку';
$a->strings['Block A New Server Domain Pattern'] = 'Заблокировать новый сервер по маске';
$a->strings['<p>The server domain pattern syntax is case-insensitive shell wildcard, comprising the following special characters:</p>
<ul>
	<li><code>*</code>: Any number of characters</li>
	<li><code>?</code>: Any single character</li>
</ul>'] = '<p>Маска домена сервера нечувствительна к регистру и представляет собой выражение shell со следующими спецсимволами:</p>
<ul>
	<li><code>*</code>: Любое число символов</li>
	<li><code>?</code>: Один любой символ</li>
</ul>';
$a->strings['Check pattern'] = 'Проверить маску';
$a->strings['Matching known servers'] = 'Совпадающие известные серверы';
$a->strings['Server Name'] = 'Имя сервера';
$a->strings['Server Domain'] = 'Домен сервера';
$a->strings['Known Contacts'] = 'Известные контакты';
$a->strings['%d known server'] = [
	0 => '%d известный сервер',
	1 => '%d известных сервера',
	2 => '%d известных серверов',
	3 => '%d известных серверов',
];
$a->strings['Add pattern to the blocklist'] = 'Добавить маску в чёрный список';
$a->strings['Server Domain Pattern'] = 'Маска домена узла';
$a->strings['The domain pattern of the new server to add to the blocklist. Do not include the protocol.'] = 'Маска домена сервера, который вы хотите добавить в чёрный список. Не включайте префикс протокола.';
$a->strings['Purge server'] = 'Очистить сервер';
$a->strings['Also purges all the locally stored content authored by the known contacts registered on that server. Keeps the contacts and the server records. This action cannot be undone.'] = [
	0 => 'Так же удаляет все локальные данные, созданные контактами, зарегистрированными на этом сервере. Сохраняет записи о самих контактах и сервере. Это действие нельзя отменить.',
	1 => 'Так же удаляет все локальные данные, созданные контактами, зарегистрированными на этих серверах. Сохраняет записи о самих контактах и серверах. Это действие нельзя отменить.',
	2 => 'Так же удаляет все локальные данные, созданные контактами, зарегистрированными на этих серверах. Сохраняет записи о самих контактах и серверах. Это действие нельзя отменить.',
	3 => 'Так же удаляет все локальные данные, созданные контактами, зарегистрированными на этих серверах. Сохраняет записи о самих контактах и серверах. Это действие нельзя отменить.',
];
$a->strings['Block reason'] = 'Причина блокировки';
$a->strings['The reason why you blocked this server domain pattern. This reason will be shown publicly in the server information page.'] = 'Причина, по которой вы заблокировали этот домен. Это будет показано публично на странице с информацией о сервере.';
$a->strings['Error importing pattern file'] = 'Ошибка импорта файла списка';
$a->strings['Local blocklist replaced with the provided file.'] = 'Список блокировки заменён на список из файла.';
$a->strings['%d pattern was added to the local blocklist.'] = [
	0 => '%d маска была добавлена в список блокировки.',
	1 => '%d маски были добавлены в список блокировки.',
	2 => '%d масок было добавлено в список блокировки.',
	3 => '%d масок было добавлено в список блокировки.',
];
$a->strings['No pattern was added to the local blocklist.'] = 'Новых масок не было добавлено.';
$a->strings['Import a Server Domain Pattern Blocklist'] = 'Импорт списка блокировки серверов';
$a->strings['<p>This file can be downloaded from the <code>/friendica</code> path of any Friendica server.</p>'] = '<p>Этот файл может быть загружен по ссылке <code>/friendica</code> с любого сервера Friendica.</p>';
$a->strings['Upload file'] = 'Загрузить файл';
$a->strings['Patterns to import'] = 'Маски для импорта';
$a->strings['Domain Pattern'] = 'Маска домена';
$a->strings['Import Mode'] = 'Режим импорта';
$a->strings['Import Patterns'] = 'Импорт значений';
$a->strings['%d total pattern'] = [
	0 => '%d маска',
	1 => '%d маски всего',
	2 => '%d масок всего',
	3 => '%d масок всего',
];
$a->strings['Server domain pattern blocklist CSV file'] = 'Список блокировки серверов в виде файла CSV';
$a->strings['Append'] = 'Добавить';
$a->strings['Imports patterns from the file that weren\'t already existing in the current blocklist.'] = 'Добавляет маски из файла, которые ещё не существуют в текущем списке блокировки.';
$a->strings['Replace'] = 'Заменить';
$a->strings['Replaces the current blocklist by the imported patterns.'] = 'Заменяет текущий список загруженными значениями.';
$a->strings['Blocked server domain pattern'] = 'Маска домена блокируемого сервера';
$a->strings['Reason for the block'] = 'Причина блокировки';
$a->strings['Delete server domain pattern'] = 'Удалить маску домена';
$a->strings['Check to delete this entry from the blocklist'] = 'Отметьте, чтобы удалить эту запись из списка блокировки';
$a->strings['Server Domain Pattern Blocklist'] = 'Список блокировки доменов';
$a->strings['This page can be used to define a blocklist of server domain patterns from the federated network that are not allowed to interact with your node. For each domain pattern you should also provide the reason why you block it.'] = 'На этой странице можно настроить список блокировки доменов узлов федеративной сети, которые не должны взаимодействовать с вашим узлом. Для каждой записи вы должны предоставить причину блокировки.';
$a->strings['The list of blocked server domain patterns will be made publically available on the <a href="/friendica">/friendica</a> page so that your users and people investigating communication problems can find the reason easily.'] = 'Список блокируемых доменов будет отображаться публично на странице <a href="/friendica">/friendica</a>, чтобы ваши пользователи и другие люди могли легко понять причину проблем с доставкой записей.';
$a->strings['Import server domain pattern blocklist'] = 'Импорт списка блокировки';
$a->strings['Add new entry to the blocklist'] = 'Добавить новую запись в список блокировки';
$a->strings['Save changes to the blocklist'] = 'Сохранить изменения списка блокировки';
$a->strings['Current Entries in the Blocklist'] = 'Текущие значения списка блокировки';
$a->strings['Delete entry from the blocklist'] = 'Удалить запись из списка';
$a->strings['Delete entry from the blocklist?'] = 'Удалить запись из списка блокировки?';
$a->strings['Update has been marked successful'] = 'Обновление было успешно отмечено';
$a->strings['Database structure update %s was successfully applied.'] = 'Обновление базы данных %s успешно применено.';
$a->strings['Executing of database structure update %s failed with error: %s'] = 'Выполнение обновления базы данных %s завершено с ошибкой: %s';
$a->strings['Executing %s failed with error: %s'] = 'Выполнение %s завершено с ошибкой: %s';
$a->strings['Update %s was successfully applied.'] = 'Обновление %s успешно применено.';
$a->strings['Update %s did not return a status. Unknown if it succeeded.'] = 'Процесс обновления %s не вернул статус. Не известно, выполнено, или нет.';
$a->strings['There was no additional update function %s that needed to be called.'] = 'Не было процедур обновления %s, которые нужно было запустить.';
$a->strings['No failed updates.'] = 'Неудавшихся обновлений нет.';
$a->strings['Check database structure'] = 'Проверить структуру базы данных';
$a->strings['Failed Updates'] = 'Неудавшиеся обновления';
$a->strings['This does not include updates prior to 1139, which did not return a status.'] = 'Эта цифра не включает обновления до 1139, которое не возвращает статус.';
$a->strings['Mark success (if update was manually applied)'] = 'Отмечено успешно (если обновление было применено вручную)';
$a->strings['Attempt to execute this update step automatically'] = 'Попытаться выполнить этот шаг обновления автоматически';
$a->strings['Lock feature %s'] = 'Заблокировать %s';
$a->strings['Manage Additional Features'] = 'Управление дополнительными возможностями';
$a->strings['Other'] = 'Другой';
$a->strings['unknown'] = 'неизвестно';
$a->strings['This page offers you some numbers to the known part of the federated social network your Friendica node is part of. These numbers are not complete but only reflect the part of the network your node is aware of.'] = 'На этой странице вы можете увидеть немного статистики из известной вашему узлу федеративной сети. Эти данные неполные и только отражают ту часть сети, с которой ваш узел взаимодействовал.';
$a->strings['Federation Statistics'] = 'Статистика федерации';
$a->strings['Item marked for deletion.'] = 'Запись помечена для удаления.';
$a->strings['Delete Item'] = 'Удалить запись';
$a->strings['Delete this Item'] = 'Удалить эту запись';
$a->strings['On this page you can delete an item from your node. If the item is a top level posting, the entire thread will be deleted.'] = 'На этой странице вы можете удалять записи на вашем узле. Если запись является родительской, то будет удалена вся её ветка.';
$a->strings['You need to know the GUID of the item. You can find it e.g. by looking at the display URL. The last part of http://example.com/display/123456 is the GUID, here 123456.'] = 'Вам нужно знать GUID записи. Вы можете узнать его, посмотрев на ссылку записи. Последняя часть ссылки - GUID. Например, для  http://example.com/display/123456 - GUID будет 123456.';
$a->strings['GUID'] = 'GUID';
$a->strings['The GUID of the item you want to delete.'] = 'GUID записи, которую вы хотите удалить.';
$a->strings['Item Guid'] = 'GUID записи';
$a->strings['Type'] = 'Тип';
$a->strings['The logfile \'%s\' is not writable. No logging possible'] = 'Файл журнала \'%s\' недоступен для записи. Журналирование невозможно.';
$a->strings['PHP log currently enabled.'] = 'Лог PHP включен.';
$a->strings['PHP log currently disabled.'] = 'Лог PHP выключен.';
$a->strings['Logs'] = 'Журналы';
$a->strings['Clear'] = 'Очистить';
$a->strings['Enable Debugging'] = 'Включить отладку';
$a->strings['Log file'] = 'Лог-файл';
$a->strings['Must be writable by web server. Relative to your Friendica top-level directory.'] = 'Должно быть доступно для записи в веб-сервере. Относительно вашего Friendica каталога верхнего уровня.';
$a->strings['Log level'] = 'Уровень лога';
$a->strings['PHP logging'] = 'PHP логирование';
$a->strings['To temporarily enable logging of PHP errors and warnings you can prepend the following to the index.php file of your installation. The filename set in the \'error_log\' line is relative to the friendica top-level directory and must be writeable by the web server. The option \'1\' for \'log_errors\' and \'display_errors\' is to enable these options, set to \'0\' to disable them.'] = 'Чтобы временно включить журналирование ошибок и предупреждений PHP, вы можете добавить следующее в файл index.php вашей установки. Имя файла, установленное в \'error_log\', задаётся относительно каталога установки Френдики и у веб-сервера должно быть разрешение на запись в этот файл. Настройка 1\' для \'log_errors\' и \'display_errors\' включает журналирование и отображение ошибок,  \'0\' отключает.';
$a->strings['View Logs'] = 'Просмотр логов';
$a->strings['Show all'] = 'Показать все';
$a->strings['Inspect Deferred Worker Queue'] = 'Посмотреть очередь отложенных заданий';
$a->strings['This page lists the deferred worker jobs. This are jobs that couldn\'t be executed at the first time.'] = 'На этой странице отображаюттся отложенные задания планировщика. Эти задания по какой-то причине не были выполнены с первого раза.';
$a->strings['Inspect Worker Queue'] = 'Посмотреть очередь заданий';
$a->strings['This page lists the currently queued worker jobs. These jobs are handled by the worker cronjob you\'ve set up during install.'] = 'На этой странице отображаются задания планировщика, которые в настоящий момент стоят в очереди на выполнение. Эти задания запускаются посредством планировщика cron, который вы настроили при установке.';
$a->strings['ID'] = 'ID';
$a->strings['Job Parameters'] = 'Параметры задания';
$a->strings['Priority'] = 'Приоритет';
$a->strings['No special theme for mobile devices'] = 'Нет специальной темы для мобильных устройств';
$a->strings['%s - (Experimental)'] = '%s - (экспериментально)';
$a->strings['No community page'] = 'Нет общей ленты записей';
$a->strings['Public postings from users of this site'] = 'Публичные записи от пользователей этого узла';
$a->strings['Public postings from the federated network'] = 'Публичные записи федеративной сети';
$a->strings['Public postings from local users and the federated network'] = 'Публичные записи от местных пользователей и федеративной сети.';
$a->strings['Multi user instance'] = 'Многопользовательский вид';
$a->strings['Closed'] = 'Закрыто';
$a->strings['Requires approval'] = 'Требуется подтверждение';
$a->strings['Open'] = 'Открыто';
$a->strings['No SSL policy, links will track page SSL state'] = 'Нет режима SSL, состояние SSL не будет отслеживаться';
$a->strings['Force all links to use SSL'] = 'Заставить все ссылки использовать SSL';
$a->strings['Self-signed certificate, use SSL for local links only (discouraged)'] = 'Само-подписанный сертификат, использовать SSL только локально (не рекомендуется)';
$a->strings['Don\'t check'] = 'Не проверять';
$a->strings['check the stable version'] = 'проверить стабильную версию';
$a->strings['check the development version'] = 'проверить development-версию';
$a->strings['none'] = 'нет';
$a->strings['Local contacts'] = 'Местные контакты';
$a->strings['Site'] = 'Сайт';
$a->strings['Republish users to directory'] = 'Переопубликовать пользователей в каталог';
$a->strings['Registration'] = 'Регистрация';
$a->strings['File upload'] = 'Загрузка файлов';
$a->strings['Policies'] = 'Политики';
$a->strings['Auto Discovered Contact Directory'] = 'Каталог автообнаружения контактов';
$a->strings['Performance'] = 'Производительность';
$a->strings['Worker'] = 'Обработчик';
$a->strings['Message Relay'] = 'Ретранслятор записей';
$a->strings['Use the command "console relay" in the command line to add or remove relays.'] = 'Используйте команду "console relay" в командной строке для добавления и удаления ретрансляторов.';
$a->strings['The system is not subscribed to any relays at the moment.'] = 'Система сейчас не подписана на ретрансляторы.';
$a->strings['The system is currently subscribed to the following relays:'] = 'Система сейчас подписана на следующие ретрансляторы:';
$a->strings['Relocate Node'] = 'Переместить узел';
$a->strings['Relocating your node enables you to change the DNS domain of this node and keep all the existing users and posts. This process takes a while and can only be started from the relocate console command like this:'] = 'Перемещение узла позволяет вам изменить DNS-имя этого узла с сохранением всех пользователей и записей. Этот процесс может занять много времени и может быть запущен только с помощью команды консоли:';
$a->strings['(Friendica directory)# bin/console relocate https://newdomain.com'] = '(каталог Friendica)# bin/console relocate https://newdomain.com';
$a->strings['Site name'] = 'Название сайта';
$a->strings['Sender Email'] = 'Системный Email';
$a->strings['The email address your server shall use to send notification emails from.'] = 'Адрес с которого будут приходить письма пользователям.';
$a->strings['Name of the system actor'] = 'Имя системного аккаунта';
$a->strings['Name of the internal system account that is used to perform ActivityPub requests. This must be an unused username. If set, this can\'t be changed again.'] = 'Имя внутреннего системного аккаунта, который используется для выполнения запросов ActivityPub. Это должно быть не занятое имя пользователя. После установки его нельзя изменить снова.';
$a->strings['Banner/Logo'] = 'Баннер/Логотип';
$a->strings['Email Banner/Logo'] = 'Лого для писем';
$a->strings['Shortcut icon'] = 'Иконка сайта';
$a->strings['Link to an icon that will be used for browsers.'] = 'Ссылка на иконку, которая будет использоваться браузерами.';
$a->strings['Touch icon'] = 'Иконка веб-приложения';
$a->strings['Link to an icon that will be used for tablets and mobiles.'] = 'Ссылка на иконку, которая будет использоваться для создания ярлыка на смартфонах и планшетах.';
$a->strings['Additional Info'] = 'Дополнительная информация';
$a->strings['For public servers: you can add additional information here that will be listed at %s/servers.'] = 'Для публичных серверов: здесь вы можете разместить дополнительную информацию и она будет доступна по %s/servers.';
$a->strings['System language'] = 'Системный язык';
$a->strings['System theme'] = 'Системная тема';
$a->strings['Default system theme - may be over-ridden by user profiles - <a href="%s" id="cnftheme">Change default theme settings</a>'] = 'Тема по-умолчанию - пользователи могут менять её в настройках своего профиля - <a href="%s" id="cnftheme">Изменить тему по-умолчанию</a>';
$a->strings['Mobile system theme'] = 'Мобильная тема системы';
$a->strings['Theme for mobile devices'] = 'Тема для мобильных устройств';
$a->strings['SSL link policy'] = 'Политика SSL';
$a->strings['Determines whether generated links should be forced to use SSL'] = 'Ссылки должны быть вынуждены использовать SSL';
$a->strings['Force SSL'] = 'SSL принудительно';
$a->strings['Force all Non-SSL requests to SSL - Attention: on some systems it could lead to endless loops.'] = 'Форсировать не-SSL запросы как SSL. Внимание: на некоторых системах это может привести к бесконечным циклам.';
$a->strings['Show help entry from navigation menu'] = 'Показать пункт "помощь" в меню навигации';
$a->strings['Displays the menu entry for the Help pages from the navigation menu. It is always accessible by calling /help directly.'] = 'Показывает пункт меню для страницы справки из меню навигации. Она так же всегда доступна по прямой ссылке /help.';
$a->strings['Single user instance'] = 'Однопользовательский режим';
$a->strings['Make this instance multi-user or single-user for the named user'] = 'Сделать этот экземпляр многопользовательским, или однопользовательским для названного пользователя';
$a->strings['Maximum image size'] = 'Максимальный размер изображения';
$a->strings['Maximum size in bytes of uploaded images. Default is 0, which means no limits.'] = 'Максимальный размер в байтах для загружаемых изображений. По умолчанию 0, что означает отсутствие ограничений.';
$a->strings['Maximum image length'] = 'Максимальная длина картинки';
$a->strings['Maximum length in pixels of the longest side of uploaded images. Default is -1, which means no limits.'] = 'Максимальная длина в пикселях для длинной стороны загруженных изображений. По умолчанию равно -1, что означает отсутствие ограничений.';
$a->strings['JPEG image quality'] = 'Качество JPEG изображения';
$a->strings['Uploaded JPEGS will be saved at this quality setting [0-100]. Default is 100, which is full quality.'] = 'Загруженные изображения JPEG будут сохранены в этом качестве [0-100]. По умолчанию 100, что означает полное качество.';
$a->strings['Register policy'] = 'Политика регистрация';
$a->strings['Maximum Daily Registrations'] = 'Максимальное число регистраций в день';
$a->strings['If registration is permitted above, this sets the maximum number of new user registrations to accept per day.  If register is set to closed, this setting has no effect.'] = 'Если регистрация разрешена, этот параметр устанавливает максимальное количество новых регистраций пользователей в день. Если регистрация закрыта, эта опция не имеет никакого эффекта.';
$a->strings['Register text'] = 'Текст регистрации';
$a->strings['Will be displayed prominently on the registration page. You can use BBCode here.'] = 'Будет отображаться на видном месте на странице регистрации. Вы можете использовать BBCode для оформления.';
$a->strings['Forbidden Nicknames'] = 'Запрещённые ники';
$a->strings['Comma separated list of nicknames that are forbidden from registration. Preset is a list of role names according RFC 2142.'] = 'Имена, перечисленные через запятую, которые запрещены для регистрации на этом узле. Предустановленный список соответствует RFC 2142.';
$a->strings['Accounts abandoned after x days'] = 'Аккаунт считается после x дней не воспользованным';
$a->strings['Will not waste system resources polling external sites for abandonded accounts. Enter 0 for no time limit.'] = 'Не будет тратить ресурсы для опроса сайтов для бесхозных контактов. Введите 0 для отключения лимита времени.';
$a->strings['Allowed friend domains'] = 'Разрешенные домены друзей';
$a->strings['Comma separated list of domains which are allowed to establish friendships with this site. Wildcards are accepted. Empty to allow any domains'] = 'Разделенный запятыми список доменов, которые разрешены для установления связей. Групповые символы принимаются. Оставьте пустым для разрешения связи со всеми доменами.';
$a->strings['Allowed email domains'] = 'Разрешенные почтовые домены';
$a->strings['Comma separated list of domains which are allowed in email addresses for registrations to this site. Wildcards are accepted. Empty to allow any domains'] = 'Разделенный запятыми список доменов, которые разрешены для установления связей. Групповые символы принимаются. Оставьте пустым для разрешения связи со всеми доменами.';
$a->strings['No OEmbed rich content'] = 'Не показывать контент OEmbed';
$a->strings['Don\'t show the rich content (e.g. embedded PDF), except from the domains listed below.'] = 'Не показывать внедрённое содержимое (например, PDF), если источником не являются домены из списка ниже.';
$a->strings['Trusted third-party domains'] = 'Доверенные внешние домены';
$a->strings['Comma separated list of domains from which content is allowed to be embedded in posts like with OEmbed. All sub-domains of the listed domains are allowed as well.'] = 'Список доменов через запятую, данные с которых будет разрешено внедрять в записи через OEmbed. Все поддомены этих доменов будут так же разрешены.';
$a->strings['Block public'] = 'Блокировать общественный доступ';
$a->strings['Check to block public access to all otherwise public personal pages on this site unless you are currently logged in.'] = 'Отметьте, чтобы заблокировать публичный доступ ко всем иным публичным личным страницам на этом сайте, если вы не вошли на сайт.';
$a->strings['Force publish'] = 'Принудительная публикация';
$a->strings['Check to force all profiles on this site to be listed in the site directory.'] = 'Отметьте, чтобы принудительно заставить все профили на этом сайте, быть перечислеными в каталоге сайта.';
$a->strings['Enabling this may violate privacy laws like the GDPR'] = 'Включение этого может нарушить законы о личных данных, например, GDPR.';
$a->strings['Global directory URL'] = 'URL глобального каталога';
$a->strings['URL to the global directory. If this is not set, the global directory is completely unavailable to the application.'] = 'Ссылка глобального каталога. Если не указано, то глобальный каталог будет полностью недоступен.';
$a->strings['Private posts by default for new users'] = 'Частные сообщения по умолчанию для новых пользователей';
$a->strings['Set default post permissions for all new members to the default privacy group rather than public.'] = 'Установить права на создание записей по умолчанию для всех участников в дефолтной приватной группе, а не для публичных участников.';
$a->strings['Don\'t include post content in email notifications'] = 'Не включать текст сообщения в email-оповещение.';
$a->strings['Don\'t include the content of a post/comment/private message/etc. in the email notifications that are sent out from this site, as a privacy measure.'] = 'Не включать содержание сообщения/комментария/личного сообщения  и т.д.. в уведомления электронной почты, отправленных с сайта, в качестве меры конфиденциальности.';
$a->strings['Disallow public access to addons listed in the apps menu.'] = 'Запретить публичный доступ к аддонам, перечисленным в меню приложений.';
$a->strings['Checking this box will restrict addons listed in the apps menu to members only.'] = 'При установке этого флажка, будут ограничены аддоны, перечисленные в меню приложений, только для участников.';
$a->strings['Don\'t embed private images in posts'] = 'Не вставлять личные картинки в записи';
$a->strings['Don\'t replace locally-hosted private photos in posts with an embedded copy of the image. This means that contacts who receive posts containing private photos will have to authenticate and load each image, which may take a while.'] = 'Не заменяйте локально расположенные фотографии в записях на внедрённые копии изображений. Это означает, что контакты, которые получают сообщения, содержащие личные фотографии, будут вынуждены идентефицироваться и грузить каждое изображение, что может занять некоторое время.';
$a->strings['Explicit Content'] = 'Контент для взрослых';
$a->strings['Set this to announce that your node is used mostly for explicit content that might not be suited for minors. This information will be published in the node information and might be used, e.g. by the global directory, to filter your node from listings of nodes to join. Additionally a note about this will be shown at the user registration page.'] = 'Включите, если ваш узел будет содержать преимущественно откровенный/чувствительный контент, который не должен быть показан несовершеннолетним. Эта информация появится в информации об узле и может быть использована, например, в глобальном каталоге для скрытия вашего узла при подборе узлов для регистрации. Так же пометка об этом появится на странице регистрации.';
$a->strings['Proxify external content'] = 'Проксировать внешние данные';
$a->strings['Route external content via the proxy functionality. This is used for example for some OEmbed accesses and in some other rare cases.'] = 'Отображать внешний контент через встроенное прокси. Это используется для некоторых случаев отображения OEmbed и некоторых других.';
$a->strings['Cache contact avatars'] = 'Кэшировать аватары';
$a->strings['Locally store the avatar pictures of the contacts. This uses a lot of storage space but it increases the performance.'] = 'Локально сохранять аватары контактов. Это потребует существенного расхода места на диске, но увеличит производительность.';
$a->strings['Allow Users to set remote_self'] = 'Разрешить пользователям установить remote_self';
$a->strings['With checking this, every user is allowed to mark every contact as a remote_self in the repair contact dialog. Setting this flag on a contact causes mirroring every posting of that contact in the users stream.'] = 'Если включено, любой пользователь сможет пометить любой контакт как "remote_self" в расширенных настройках контакта. Установка такого параметра приводит к тому, что все записи помеченного контакта публикуются в ленте от имени пользователя.';
$a->strings['Enable multiple registrations'] = 'Разрешить несколько регистраций';
$a->strings['Enable users to register additional accounts for use as pages.'] = 'Разрешить пользователям регистрировать дополнительные аккаунты для использования в качестве страниц.';
$a->strings['Enable OpenID'] = 'Включить OpenID';
$a->strings['Enable OpenID support for registration and logins.'] = 'Включить поддержку OpenID для регистрации и входа.';
$a->strings['Enable Fullname check'] = 'Включить проверку полноты имени';
$a->strings['Enable check to only allow users to register with a space between the first name and the last name in their full name.'] = 'Проверять при регистрации, чтобы пользователь имел пробел в указанном имени между именем и фамилией.';
$a->strings['Community pages for visitors'] = 'Публичная лента для посетителей';
$a->strings['Which community pages should be available for visitors. Local users always see both pages.'] = 'Какие публичные ленты будут доступны для гостей. Местные пользователи всегда видят обе ленты.';
$a->strings['Posts per user on community page'] = 'Число записей на пользователя в публичной ленте';
$a->strings['The maximum number of posts per user on the community page. (Not valid for "Global Community")'] = 'Максимальное число записей от одного пользователя в публичной ленте узла. (Не применяется к федеративной публичной ленте).';
$a->strings['Enable OStatus support'] = 'Включить поддержку OStatus';
$a->strings['Enable built-in OStatus (StatusNet, GNU Social etc.) compatibility. All communications in OStatus are public.'] = 'Включить встроенную поддержку OStatus (StatusNet, GNU Social и т.п.). Всё общение в OStatus происходит публично.';
$a->strings['Diaspora support can\'t be enabled because Friendica was installed into a sub directory.'] = 'Поддержка Diaspora не может быть включена, так как Френдика была установлена в подкаталог.';
$a->strings['Enable Diaspora support'] = 'Включить поддержку Diaspora';
$a->strings['Enable built-in Diaspora network compatibility for communicating with diaspora servers.'] = 'Включить встроенную поддержку Diaspora для общения с серверами сети Diaspora.';
$a->strings['Verify SSL'] = 'Проверка SSL';
$a->strings['If you wish, you can turn on strict certificate checking. This will mean you cannot connect (at all) to self-signed SSL sites.'] = 'Если хотите, вы можете включить строгую проверку сертификатов. Это будет означать, что вы не сможете соединиться (вообще) с сайтами, имеющими само-подписанный SSL сертификат.';
$a->strings['Proxy user'] = 'Прокси пользователь';
$a->strings['User name for the proxy server.'] = 'Имя пользователя прокси';
$a->strings['Proxy URL'] = 'Прокси URL';
$a->strings['If you want to use a proxy server that Friendica should use to connect to the network, put the URL of the proxy here.'] = 'Если вы хотите указать прокси, который Friendica будет использовать для выхода в сеть, укажите здесь его URL.';
$a->strings['Network timeout'] = 'Тайм-аут сети';
$a->strings['Value is in seconds. Set to 0 for unlimited (not recommended).'] = 'Значение указывается в секундах. Установите 0 для снятия ограничений (не рекомендуется).';
$a->strings['Maximum Load Average'] = 'Средняя максимальная нагрузка';
$a->strings['Maximum system load before delivery and poll processes are deferred - default %d.'] = 'Максимальная нагрузка на систему, прежде чем задания опроса и доставки начнут приостанавливаться - по-умолчанию %d.';
$a->strings['Minimal Memory'] = 'Минимум памяти';
$a->strings['Minimal free memory in MB for the worker. Needs access to /proc/meminfo - default 0 (deactivated).'] = 'Минимально допустимая свободная память ОЗУ для запуска заданий. Для работы нужен доступ в /proc/meminfo - по-умолчанию 0 (отключено).';
$a->strings['Periodically optimize tables'] = 'Периодически оптимизировать таблицы';
$a->strings['Periodically optimize tables like the cache and the workerqueue'] = 'Периодически оптимизировать таблицы, такие как cache и workerqueue';
$a->strings['Discover followers/followings from contacts'] = 'Обнаруживать подписчиков и друзей для контактов';
$a->strings['If enabled, contacts are checked for their followers and following contacts.'] = 'Если включено, контакты будут проверяться на наличие подписчиков и друзей.';
$a->strings['None - deactivated'] = 'None - выключено.';
$a->strings['Local contacts - contacts of our local contacts are discovered for their followers/followings.'] = 'Local contacts - местные контакты будут проверяться на наличие подписчиков и друзей.';
$a->strings['Interactors - contacts of our local contacts and contacts who interacted on locally visible postings are discovered for their followers/followings.'] = 'Interactors - местные контакты и те контакты, кто взаимодействовал с локально видимыми записями, будут проверяться на наличие подписчиков и друзей.';
$a->strings['Synchronize the contacts with the directory server'] = 'Синхронизировать контакты с сервером каталога';
$a->strings['if enabled, the system will check periodically for new contacts on the defined directory server.'] = 'Если включено, то система будет периодически проверять новые контакты на указанном сервере каталога.';
$a->strings['Days between requery'] = 'Интервал запросов';
$a->strings['Number of days after which a server is requeried for his contacts.'] = 'Интервал в днях, с которым контакты сервера будут перепроверяться.';
$a->strings['Discover contacts from other servers'] = 'Обнаруживать контакты с других серверов';
$a->strings['Periodically query other servers for contacts. The system queries Friendica, Mastodon and Hubzilla servers.'] = 'Периодически опрашивать контакты с других серверов. В них входят Friendica, Mastodon и Hubzilla.';
$a->strings['Search the local directory'] = 'Искать в местном каталоге';
$a->strings['Search the local directory instead of the global directory. When searching locally, every search will be executed on the global directory in the background. This improves the search results when the search is repeated.'] = 'Искать в локальном каталоге вместо глобального. При локальном поиске каждый запрос будет выполняться в глобальном каталоге в фоновом режиме. Это улучшит результаты поиска при повторных запросах.';
$a->strings['Publish server information'] = 'Опубликовать информацию о сервере';
$a->strings['If enabled, general server and usage data will be published. The data contains the name and version of the server, number of users with public profiles, number of posts and the activated protocols and connectors. See <a href="http://the-federation.info/">the-federation.info</a> for details.'] = 'Если включено, общая информация о сервере и статистика будут опубликованы. В данных содержатся имя сервера, версия ПО, число пользователей с открытыми профилями, число записей, подключенные протоколы и соединители. Подробности смотрите на <a href="http://the-federation.info/">the-federation.info</a>.';
$a->strings['Check upstream version'] = 'Проверять версию в репозитории';
$a->strings['Enables checking for new Friendica versions at github. If there is a new version, you will be informed in the admin panel overview.'] = 'Включает проверку новых версий Френдики на Github. Если появится новая версия, вы получите уведомление в панели администратора.';
$a->strings['Suppress Tags'] = 'Скрывать тэги';
$a->strings['Suppress showing a list of hashtags at the end of the posting.'] = 'Отключить показ списка тэгов в конце записей.';
$a->strings['Clean database'] = 'Очистка базы данных';
$a->strings['Remove old remote items, orphaned database records and old content from some other helper tables.'] = 'Удалять старые записи, полученные с других серверов, ненужные записи в базе данных.';
$a->strings['Lifespan of remote items'] = 'Время жизни записей с других серверов';
$a->strings['When the database cleanup is enabled, this defines the days after which remote items will be deleted. Own items, and marked or filed items are always kept. 0 disables this behaviour.'] = 'Если очистка базы данных включена, эта настройка определяет число дней, после которого записи будут удаляться. Собственные записи, записи с закладками, записи в папках не удаляются. 0 отключает очистку.';
$a->strings['Lifespan of unclaimed items'] = 'Время жизни ничейных элементов';
$a->strings['When the database cleanup is enabled, this defines the days after which unclaimed remote items (mostly content from the relay) will be deleted. Default value is 90 days. Defaults to the general lifespan value of remote items if set to 0.'] = 'Когда очистка базы данных включена, эта настройка определяет число дней, после которого ничейные элементы (в основном, данные с ретранслятора) будут удалены. Значение по умолчанию 90 дней. Приравнивается ко времени жизни элементов других серверов, если выставлено в 0.';
$a->strings['Lifespan of raw conversation data'] = 'Время жизни необработанных данных коммуникаций.';
$a->strings['The conversation data is used for ActivityPub and OStatus, as well as for debug purposes. It should be safe to remove it after 14 days, default is 90 days.'] = 'Эти данные используются для ActivityPub и OStatus, а так же для диагностики. Обычно их можно спокойно удалять после 14 дней, значение по-умолчанию 90 дней.';
$a->strings['Maximum numbers of comments per post'] = 'Максимальное число комментариев для записи';
$a->strings['How much comments should be shown for each post? Default value is 100.'] = 'Сколько комментариев должно быть показано для каждой записи? Значение по-умолчанию: 100.';
$a->strings['Maximum numbers of comments per post on the display page'] = 'Максимальное число комментариев на запись при его просмотре';
$a->strings['How many comments should be shown on the single view for each post? Default value is 1000.'] = 'Сколько комментариев показывать при просмотре записи на отдельной странице? Значение по-умолчанию: 1000.';
$a->strings['Temp path'] = 'Временная папка';
$a->strings['If you have a restricted system where the webserver can\'t access the system temp path, enter another path here.'] = 'Если на вашей системе веб-сервер не имеет доступа к системному пути tmp, введите здесь другой путь.';
$a->strings['Only search in tags'] = 'Искать только в тегах';
$a->strings['On large systems the text search can slow down the system extremely.'] = 'На больших системах текстовый поиск может сильно замедлить систему.';
$a->strings['Maximum number of parallel workers'] = 'Максимальное число параллельно работающих worker\'ов';
$a->strings['Enable fastlane'] = 'Включить fastlane';
$a->strings['Direct relay transfer'] = 'Прямая ретрансляция';
$a->strings['Enables the direct transfer to other servers without using the relay servers'] = 'Разрешает прямую отправку на другие серверы без использования ретрансляторов';
$a->strings['Relay scope'] = 'Область ретрансляции';
$a->strings['Can be "all" or "tags". "all" means that every public post should be received. "tags" means that only posts with selected tags should be received.'] = 'Допустимые значения "all" или "tags". "all" означает, что любые публичные записи будут получены. "tags" включает приём публичных записей с выбранными тэгами.';
$a->strings['Disabled'] = 'Отключено';
$a->strings['all'] = 'all';
$a->strings['tags'] = 'tags';
$a->strings['Server tags'] = 'Тэги сервера';
$a->strings['Comma separated list of tags for the "tags" subscription.'] = 'Список тэгов, разделённых запятыми, используемый для подписки в режиме "tags"';
$a->strings['Deny Server tags'] = 'Запретить тэги сервера';
$a->strings['Comma separated list of tags that are rejected.'] = 'Разделённый запятыми список тэгов, которые будут отбрасываться.';
$a->strings['Allow user tags'] = 'Разрешить пользовательские тэги';
$a->strings['If enabled, the tags from the saved searches will used for the "tags" subscription in addition to the "relay_server_tags".'] = 'Если включено, то теги. на которые подписались пользователи, будут добавлены в подписку в дополнение к тегам сервера.';
$a->strings['Start Relocation'] = 'Начать перемещение';
$a->strings['Invalid storage backend setting value.'] = 'Недопустимое значение типа хранилища.';
$a->strings['Database (legacy)'] = 'База данных (устаревшее)';
$a->strings['There is a new version of Friendica available for download. Your current version is %1$s, upstream version is %2$s'] = 'Новая версия Friendica доступна для загрузки. Ваша текущая версия %1$s, последняя версия %2$s';
$a->strings['The worker was never executed. Please check your database structure!'] = 'Фоновые задания ни разу не выполнялись. Пожалуйста, проверьте структуру базы данных!';
$a->strings['The last worker execution was on %s UTC. This is older than one hour. Please check your crontab settings.'] = 'Последний раз фоновое задание выполнялось  %s UTC. Это более одного часа назад. Пожалуйста, проверьте настройки crontab.';
$a->strings['Normal Account'] = 'Обычный аккаунт';
$a->strings['Automatic Follower Account'] = '"Автоматический друг" Аккаунт';
$a->strings['Public Forum Account'] = 'Публичный форум';
$a->strings['Automatic Friend Account'] = '"Автоматический друг" Аккаунт';
$a->strings['Blog Account'] = 'Аккаунт блога';
$a->strings['Private Forum Account'] = 'Закрытый форум';
$a->strings['Message queues'] = 'Очереди сообщений';
$a->strings['Server Settings'] = 'Настройки сервера';
$a->strings['Registered users'] = 'Зарегистрированные пользователи';
$a->strings['Pending registrations'] = 'Ожидающие регистрации';
$a->strings['Version'] = 'Версия';
$a->strings['Active addons'] = 'Активные дополнения';
$a->strings['Theme %s disabled.'] = 'Тема %s отключена.';
$a->strings['Theme %s successfully enabled.'] = 'Тема %s успешно включена.';
$a->strings['Theme %s failed to install.'] = 'Не удалось установить тему %s.';
$a->strings['Screenshot'] = 'Скриншот';
$a->strings['Themes'] = 'Темы';
$a->strings['Unknown theme.'] = 'Неизвестная тема.';
$a->strings['Themes reloaded'] = 'Темы перезагружены';
$a->strings['Reload active themes'] = 'Перезагрузить активные темы';
$a->strings['No themes found on the system. They should be placed in %1$s'] = 'Ни одной темы не найдено на сервере. Они должны быть размещены в %1$s';
$a->strings['[Experimental]'] = '[экспериментально]';
$a->strings['[Unsupported]'] = '[Неподдерживаемое]';
$a->strings['Display Terms of Service'] = 'Показать Условия оказания услуг';
$a->strings['Enable the Terms of Service page. If this is enabled a link to the terms will be added to the registration form and the general information page.'] = 'Включить страницу с Условиями Оказания Услуг. Если эта настройка активна, ссылка на страницу с Условиями будет добавлена в форму регистрации и на страницу общей информации.';
$a->strings['Display Privacy Statement'] = 'Показать Положение о конфиденциальности';
$a->strings['Show some informations regarding the needed information to operate the node according e.g. to <a href="%s" target="_blank" rel="noopener noreferrer">EU-GDPR</a>.'] = 'Показать различную информацию о соответствии узла различным требованиям конфиденциальности, например, <a href="%s" target="_blank" rel="noopener noreferrer">EU-GDPR</a>.';
$a->strings['Privacy Statement Preview'] = 'Предпросмотр Положения о конфиденциальности';
$a->strings['The Terms of Service'] = 'Условия оказания услуг';
$a->strings['Enter the Terms of Service for your node here. You can use BBCode. Headers of sections should be [h2] and below.'] = 'Введите здесь текст Условий оказания услуг для вашего узла. Можно использовать BBCode. Заголовки отдельных секций должны использовать [h2] и ниже.';
$a->strings['%s user blocked'] = [
	0 => '%s пользователь заблокирован',
	1 => '%s пользователя заблокировано',
	2 => '%s пользователей заблокировано',
	3 => '%s пользователей заблокировано',
];
$a->strings['You can\'t remove yourself'] = 'Вы не можете удалить самого себя';
$a->strings['%s user deleted'] = [
	0 => '%s человек удален',
	1 => '%s чел. удалено',
	2 => '%s чел. удалено',
	3 => '%s чел. удалено',
];
$a->strings['User "%s" deleted'] = 'Пользователь "%s" удалён';
$a->strings['User "%s" blocked'] = 'Пользователь "%s" заблокирован';
$a->strings['Register date'] = 'Дата регистрации';
$a->strings['Last login'] = 'Последний вход';
$a->strings['Last public item'] = 'Последняя публичная запись';
$a->strings['User blocked'] = 'Пользователь заблокирован';
$a->strings['Site admin'] = 'Админ сайта';
$a->strings['Account expired'] = 'Аккаунт просрочен';
$a->strings['Selected users will be deleted!\n\nEverything these users had posted on this site will be permanently deleted!\n\nAre you sure?'] = 'Выбранные пользователи будут удалены!\n\nВсе, что эти пользователи написали на этом сайте, будет удалено!\n\nВы уверены в вашем действии?';
$a->strings['The user {0} will be deleted!\n\nEverything this user has posted on this site will be permanently deleted!\n\nAre you sure?'] = 'Пользователь {0} будет удален!\n\nВсе, что этот пользователь написал на этом сайте, будет удалено!\n\nВы уверены в вашем действии?';
$a->strings['%s user unblocked'] = [
	0 => '%s пользователь разблокирован',
	1 => '%s пользователя разблокировано',
	2 => '%s пользователей разблокировано',
	3 => '%s пользователей разблокировано',
];
$a->strings['User "%s" unblocked'] = 'Пользователь "%s" разблокирован';
$a->strings['Blocked Users'] = 'Заблокированные';
$a->strings['New User'] = 'Новый пользователь';
$a->strings['Add User'] = 'Добавить пользователя';
$a->strings['Name of the new user.'] = 'Имя нового пользователя.';
$a->strings['Nickname'] = 'Ник';
$a->strings['Nickname of the new user.'] = 'Ник нового пользователя.';
$a->strings['Email address of the new user.'] = 'Email адрес нового пользователя.';
$a->strings['Users awaiting permanent deletion'] = 'Пользователи, ожидающие окончательного удаления';
$a->strings['Permanent deletion'] = 'Постоянное удаление';
$a->strings['Users'] = 'Пользователи';
$a->strings['User waiting for permanent deletion'] = 'Пользователь ожидает окончательного удаления';
$a->strings['%s user approved'] = [
	0 => '%s пользователь одобрен',
	1 => '%s пользователя одобрено',
	2 => '%s пользователей одобрено',
	3 => '%s пользователей одобрено',
];
$a->strings['%s registration revoked'] = [
	0 => '%s регистрация отменена',
	1 => '%s регистрации отменены',
	2 => '%s регистраций отменены',
	3 => '%s регистраций отменены',
];
$a->strings['Account approved.'] = 'Аккаунт утвержден.';
$a->strings['Registration revoked'] = 'Регистрация отменена';
$a->strings['User registrations awaiting review'] = 'Регистрации пользователей, ожидающие подтверждения';
$a->strings['Request date'] = 'Запрос даты';
$a->strings['No registrations.'] = 'Нет регистраций.';
$a->strings['Note from the user'] = 'Сообщение от пользователя';
$a->strings['Deny'] = 'Отклонить';
$a->strings['Only starting posts can be bookmarked'] = 'Только заглавные записи могут быть добавлены в закладки';
$a->strings['Only starting posts can be muted'] = 'Только заглавные записи можно заглушить';
$a->strings['Only starting posts can be unbookmarked'] = 'Только заглавные записи можно удалить из закладок';
$a->strings['Only starting posts can be unmuted'] = 'Только с заглавных записей можно снять заглушение';
$a->strings['Contact not found'] = 'Контакт не найден';
$a->strings['No installed applications.'] = 'Нет установленных приложений.';
$a->strings['Applications'] = 'Приложения';
$a->strings['Item was not found.'] = 'Пункт не был найден.';
$a->strings['Please login to continue.'] = 'Пожалуйста, войдите для продолжения.';
$a->strings['You don\'t have access to administration pages.'] = 'У вас нет доступа к страницам администратора.';
$a->strings['Submanaged account can\'t access the administration pages. Please log back in as the main account.'] = 'Дополнительная учётная запись не имеет доступа к административным страницам. Пожалуйста, зайдите непосредственно как администратор.';
$a->strings['Overview'] = 'Общая информация';
$a->strings['Configuration'] = 'Конфигурация';
$a->strings['Additional features'] = 'Дополнительные возможности';
$a->strings['Database'] = 'База данных';
$a->strings['DB updates'] = 'Обновление БД';
$a->strings['Inspect Deferred Workers'] = 'Посмотреть отложенные задания';
$a->strings['Inspect worker Queue'] = 'Посмотреть очередь заданий';
$a->strings['Tools'] = 'Инструменты';
$a->strings['Contact Blocklist'] = 'Чёрный список контактов';
$a->strings['Server Blocklist'] = 'Чёрный список серверов';
$a->strings['Diagnostics'] = 'Диагностика';
$a->strings['User registrations waiting for confirmation'] = 'Регистрации пользователей, ожидающие подтверждения';
$a->strings['Daily posting limit of %d post reached. The post was rejected.'] = [
	0 => 'Дневной лимит в %d запись достигнут. Запись отклонена.',
	1 => 'Дневной лимит в %d записи достигнут. Запись отклонена.',
	2 => 'Дневной лимит в %d записей достигнут. Запись отклонена.',
	3 => 'Дневной лимит в %d записей достигнут. Запись отклонена.',
];
$a->strings['Weekly posting limit of %d post reached. The post was rejected.'] = [
	0 => 'Недельный лимит в %d запись достигнут. Запись была отклонена.',
	1 => 'Недельный лимит в %d записи достигнут. Запись была отклонена.',
	2 => 'Недельный лимит в %d записей достигнут. Запись была отклонена.',
	3 => 'Недельный лимит в %d записей достигнут. Запись была отклонена.',
];
$a->strings['Profile Details'] = 'Информация о вас';
$a->strings['Only You Can See This'] = 'Только вы можете это видеть';
$a->strings['Scheduled Posts'] = 'Запланированные записи';
$a->strings['Posts that are scheduled for publishing'] = 'Записи, публикация которых запланирована';
$a->strings['Tips for New Members'] = 'Советы для новых участников';
$a->strings['People Search - %s'] = 'Поиск по людям - %s';
$a->strings['Forum Search - %s'] = 'Поиск по форумам - %s';
$a->strings['Account'] = 'Аккаунт';
$a->strings['Two-factor authentication'] = 'Двухфакторная аутентификация';
$a->strings['Display'] = 'Внешний вид';
$a->strings['Manage Accounts'] = 'Управление учётными записями';
$a->strings['Connected apps'] = 'Подключенные приложения';
$a->strings['Export personal data'] = 'Экспорт личных данных';
$a->strings['Remove account'] = 'Удалить аккаунт';
$a->strings['The post was created'] = 'Запись создана';
$a->strings['%d contact edited.'] = [
	0 => '%d контакт изменен.',
	1 => '%d контакта изменено.',
	2 => '%d контактов изменены.',
	3 => '%d контактов изменены.',
];
$a->strings['Show all contacts'] = 'Показать все контакты';
$a->strings['Only show pending contacts'] = 'Показать только контакты "в ожидании"';
$a->strings['Only show blocked contacts'] = 'Показать только блокированные контакты';
$a->strings['Ignored'] = 'Игнорируются';
$a->strings['Only show ignored contacts'] = 'Показать только игнорируемые контакты';
$a->strings['Archived'] = 'Архивированные';
$a->strings['Only show archived contacts'] = 'Показывать только архивные контакты';
$a->strings['Hidden'] = 'Скрытые';
$a->strings['Only show hidden contacts'] = 'Показывать только скрытые контакты';
$a->strings['Organize your contact groups'] = 'Настроить группы контактов';
$a->strings['Search your contacts'] = 'Поиск ваших контактов';
$a->strings['Results for: %s'] = 'Результаты для: %s';
$a->strings['Update'] = 'Обновление';
$a->strings['Unignore'] = 'Не игнорировать';
$a->strings['Batch Actions'] = 'Пакетные действия';
$a->strings['Conversations started by this contact'] = 'Диалоги этого контакта';
$a->strings['Posts and Comments'] = 'Записи и комментарии';
$a->strings['View all known contacts'] = 'Показать все известные контакты';
$a->strings['Advanced Contact Settings'] = 'Дополнительные Настройки Контакта';
$a->strings['Mutual Friendship'] = 'Взаимная дружба';
$a->strings['is a fan of yours'] = 'является вашим поклонником';
$a->strings['you are a fan of'] = 'Вы - поклонник';
$a->strings['Pending outgoing contact request'] = 'Исходящий запрос на подписку';
$a->strings['Pending incoming contact request'] = 'Входящий запрос на подписку';
$a->strings['Visit %s\'s profile [%s]'] = 'Посетить профиль %s [%s]';
$a->strings['Contact update failed.'] = 'Обновление контакта неудачное.';
$a->strings['Return to contact editor'] = 'Возврат к редактору контакта';
$a->strings['Account Nickname'] = 'Ник аккаунта';
$a->strings['Account URL'] = 'URL аккаунта';
$a->strings['Poll/Feed URL'] = 'URL опроса/ленты';
$a->strings['New photo from this URL'] = 'Новое фото из этой URL';
$a->strings['Invalid contact.'] = 'Недопустимый контакт.';
$a->strings['No known contacts.'] = 'Нет известных контактов.';
$a->strings['No common contacts.'] = 'Общих контактов нет.';
$a->strings['Follower (%s)'] = [
	0 => 'Подписчик (%s)',
	1 => 'Подписчики (%s)',
	2 => 'Подписчики (%s)',
	3 => 'Подписчики (%s)',
];
$a->strings['Following (%s)'] = [
	0 => 'Подписан на (%s)',
	1 => 'Подписаны на (%s)',
	2 => 'Подписаны на (%s)',
	3 => 'Подписаны на (%s)',
];
$a->strings['Mutual friend (%s)'] = [
	0 => 'Взаимный друг (%s)',
	1 => 'Взаимные друзья (%s)',
	2 => 'Взаимные друзья (%s)',
	3 => 'Взаимные друзья (%s)',
];
$a->strings['These contacts both follow and are followed by <strong>%s</strong>.'] = 'Эти контакты взаимно добавлены в друзья <strong>%s</strong>.';
$a->strings['Common contact (%s)'] = [
	0 => 'Общий контакт (%s)',
	1 => 'Общие контакты (%s)',
	2 => 'Общие контакты (%s)',
	3 => 'Общие контакты (%s)',
];
$a->strings['Both <strong>%s</strong> and yourself have publicly interacted with these contacts (follow, comment or likes on public posts).'] = '<strong>%s</strong> и вы  публично взаимодействовали с этими контактами (добавляли их, комментировали публичные посты или оставляли лайки к ним).';
$a->strings['Contact (%s)'] = [
	0 => 'Контакт (%s)',
	1 => 'Контакты (%s)',
	2 => 'Контакты (%s)',
	3 => 'Контакты (%s)',
];
$a->strings['Failed to update contact record.'] = 'Не удалось обновить запись контакта.';
$a->strings['Contact has been unblocked'] = 'Контакт разблокирован';
$a->strings['Contact has been blocked'] = 'Контакт заблокирован';
$a->strings['Contact has been unignored'] = 'У контакта отменено игнорирование';
$a->strings['Contact has been ignored'] = 'Контакт проигнорирован';
$a->strings['You are mutual friends with %s'] = 'У Вас взаимная дружба с %s';
$a->strings['You are sharing with %s'] = 'Вы делитесь с %s';
$a->strings['%s is sharing with you'] = '%s делится с Вами';
$a->strings['Private communications are not available for this contact.'] = 'Приватные коммуникации недоступны для этого контакта.';
$a->strings['Never'] = 'Никогда';
$a->strings['(Update was not successful)'] = '(Обновление не удалось)';
$a->strings['(Update was successful)'] = '(Обновление было успешно)';
$a->strings['Suggest friends'] = 'Предложить друзей';
$a->strings['Network type: %s'] = 'Сеть: %s';
$a->strings['Communications lost with this contact!'] = 'Связь с контактом утеряна!';
$a->strings['Fetch further information for feeds'] = 'Получить подробную информацию о фидах';
$a->strings['Fetch information like preview pictures, title and teaser from the feed item. You can activate this if the feed doesn\'t contain much text. Keywords are taken from the meta header in the feed item and are posted as hash tags.'] = 'Извлекать картинки предпросмотра, заголовок и вступление из записи ленты. Вы можете включить эту опцию, если лента не содержит много текста. Ключевые слова берутся из метаданных записи и публикуются как теги.';
$a->strings['Fetch information'] = 'Получить информацию';
$a->strings['Fetch keywords'] = 'Получить ключевые слова';
$a->strings['Fetch information and keywords'] = 'Получить информацию и ключевые слова';
$a->strings['No mirroring'] = 'Не зеркалировать';
$a->strings['Mirror as forwarded posting'] = 'Зеркалировать как переадресованные сообщения';
$a->strings['Mirror as my own posting'] = 'Зеркалировать как мои сообщения';
$a->strings['Contact Information / Notes'] = 'Информация о контакте / Заметки';
$a->strings['Contact Settings'] = 'Настройки контакта';
$a->strings['Contact'] = 'Контакт';
$a->strings['Their personal note'] = 'Персональная заметка';
$a->strings['Edit contact notes'] = 'Редактировать заметки контакта';
$a->strings['Block/Unblock contact'] = 'Блокировать / Разблокировать контакт';
$a->strings['Ignore contact'] = 'Игнорировать контакт';
$a->strings['View conversations'] = 'Просмотр бесед';
$a->strings['Last update:'] = 'Последнее обновление: ';
$a->strings['Update public posts'] = 'Обновить публичные сообщения';
$a->strings['Update now'] = 'Обновить сейчас';
$a->strings['Currently blocked'] = 'В настоящее время заблокирован';
$a->strings['Currently ignored'] = 'В настоящее время игнорируется';
$a->strings['Currently archived'] = 'В данный момент архивирован';
$a->strings['Awaiting connection acknowledge'] = 'Ожидаем подтверждения соединения';
$a->strings['Hide this contact from others'] = 'Скрыть этот контакт от других';
$a->strings['Replies/likes to your public posts <strong>may</strong> still be visible'] = 'Ответы/лайки ваших публичных сообщений <strong>будут</strong> видимы.';
$a->strings['Notification for new posts'] = 'Уведомление о новых записях';
$a->strings['Send a notification of every new post of this contact'] = 'Отправлять уведомление о каждом новой записи контакта';
$a->strings['Keyword Deny List'] = 'Запретный список слов';
$a->strings['Comma separated list of keywords that should not be converted to hashtags, when "Fetch information and keywords" is selected'] = 'Список слов через запятую, которые не должны конвертироваться в хэштеги, когда включено "Получать информацию и хэштеги"';
$a->strings['Actions'] = 'Действия';
$a->strings['Mirror postings from this contact'] = 'Зекралировать сообщения от этого контакта';
$a->strings['Mark this contact as remote_self, this will cause friendica to repost new entries from this contact.'] = 'Пометить этот контакт как remote_self, что заставит Friendica отправлять сообщения от этого контакта.';
$a->strings['Refetch contact data'] = 'Обновить данные контакта';
$a->strings['Toggle Blocked status'] = 'Изменить статус блокированности (заблокировать/разблокировать)';
$a->strings['Toggle Ignored status'] = 'Изменить статус игнорирования';
$a->strings['Revoke Follow'] = 'Отозвать подписку';
$a->strings['Revoke the follow from this contact'] = 'Отменить подписку этого контакта на вас';
$a->strings['Contact is deleted.'] = 'Контакт удалён.';
$a->strings['Follow was successfully revoked.'] = 'Подписка была успешно отозвана.';
$a->strings['Do you really want to revoke this contact\'s follow? This cannot be undone and they will have to manually follow you back again.'] = 'Вы действительно хотите отозвать подписку этого контакта на вас? Это нельзя будет отменить позже, им потребуется снова подписаться на вас.';
$a->strings['Yes'] = 'Да';
$a->strings['This community stream shows all public posts received by this node. They may not reflect the opinions of this node’s users.'] = 'Эта общая лента показывает все публичные записи, которые получил этот сервер. Они могут не отражать мнений пользователей этого сервера.';
$a->strings['Local Community'] = 'Местное сообщество';
$a->strings['Posts from local users on this server'] = 'Записи пользователей с этого сервера';
$a->strings['Global Community'] = 'Глобальное сообщество';
$a->strings['Posts from users of the whole federated network'] = 'Записи пользователей со всей федеративной сети';
$a->strings['No results.'] = 'Нет результатов.';
$a->strings['Not available.'] = 'Недоступно.';
$a->strings['No such group'] = 'Нет такой группы';
$a->strings['Group: %s'] = 'Группа: %s';
$a->strings['Latest Activity'] = 'Вся активность';
$a->strings['Sort by latest activity'] = 'Отсортировать по свежей активности';
$a->strings['Latest Posts'] = 'Новые записи';
$a->strings['Sort by post received date'] = 'Отсортировать по времени получения записей';
$a->strings['Latest Creation'] = 'По времени';
$a->strings['Sort by post creation date'] = 'Отсортировать по времени создания записей';
$a->strings['Personal'] = 'Личные';
$a->strings['Posts that mention or involve you'] = 'Записи, которые упоминают вас или в которых вы участвуете';
$a->strings['Starred'] = 'Избранное';
$a->strings['Favourite Posts'] = 'Избранные записи';
$a->strings['Credits'] = 'Признательность';
$a->strings['Friendica is a community project, that would not be possible without the help of many people. Here is a list of those who have contributed to the code or the translation of Friendica. Thank you all!'] = 'Friendica это проект сообщества, который был бы невозможен без помощи многих людей. Вот лист тех, кто писал код или помогал с переводом. Спасибо вам всем!';
$a->strings['Decoded post'] = 'Декодированная запись';
$a->strings['Post array before expand entities'] = 'Массив записи до развертывания объектов';
$a->strings['Post converted'] = 'Запись преобразована';
$a->strings['You must be logged in to use this module'] = 'Вы должны быть залогинены для использования этого модуля';
$a->strings['Source URL'] = 'Исходный URL';
$a->strings['Time Conversion'] = 'История общения';
$a->strings['Friendica provides this service for sharing events with other networks and friends in unknown timezones.'] = 'Friendica предоставляет этот сервис для обмена событиями с другими сетями и друзьями, находящимися в неопределённых часовых поясах.';
$a->strings['UTC time: %s'] = 'UTC время: %s';
$a->strings['Current timezone: %s'] = 'Ваш часовой пояс: %s';
$a->strings['Converted localtime: %s'] = 'Ваше изменённое время: %s';
$a->strings['Please select your timezone:'] = 'Выберите пожалуйста ваш часовой пояс:';
$a->strings['You are now logged in as %s'] = 'Вы вошли как %s';
$a->strings['Switch between your accounts'] = 'Переключить учётную запись';
$a->strings['Manage your accounts'] = 'Управление учётными записями';
$a->strings['Toggle between different identities or community/group pages which share your account details or which you have been granted "manage" permissions'] = 'Переключайтесь между разными профилями или страницами сообществ/групп, которые зарегистрированы на одинаковые контактные данные, либо вам предоставлено право управления ими.';
$a->strings['Select an identity to manage: '] = 'Выберите учётную запись:';
$a->strings['No entries (some entries may be hidden).'] = 'Нет записей (некоторые записи могут быть скрыты).';
$a->strings['Find on this site'] = 'Найти на этом сайте';
$a->strings['Results for:'] = 'Результаты для:';
$a->strings['Site Directory'] = 'Каталог сайта';
$a->strings['Item was not deleted'] = 'Запись не была удалена';
$a->strings['Item was not removed'] = 'Запись не была удалена';
$a->strings['- select -'] = '- выбрать -';
$a->strings['Suggested contact not found.'] = 'Рекомендованный контакт не найден.';
$a->strings['Friend suggestion sent.'] = 'Приглашение в друзья отправлено.';
$a->strings['Suggest Friends'] = 'Предложить друзей';
$a->strings['Suggest a friend for %s'] = 'Предложить друга для %s.';
$a->strings['Installed addons/apps:'] = 'Установленные дополнения:';
$a->strings['No installed addons/apps'] = 'Нет установленных дополнений';
$a->strings['Read about the <a href="%1$s/tos">Terms of Service</a> of this node.'] = 'Ознакомьтесь с <a href="%1$s/tos">Условиями Предоставления Услуг</a> этого узла.';
$a->strings['On this server the following remote servers are blocked.'] = 'На этом сервере заблокированы следующие удалённые серверы.';
$a->strings['Download this list in CSV format'] = 'Скачать этот список в формате CSV';
$a->strings['This is Friendica, version %s that is running at the web location %s. The database version is %s, the post update version is %s.'] = 'Это сервер Friendica, версия %s, работающий по адресу %s. Версия базы данных %s, версия post update %s.';
$a->strings['Please visit <a href="https://friendi.ca">Friendi.ca</a> to learn more about the Friendica project.'] = 'Посетите <a href="https://friendi.ca">Friendi.ca</a>, чтобы узнать больше о проекте Friendica.';
$a->strings['Bug reports and issues: please visit'] = 'Отчет об ошибках и проблемах: пожалуйста, посетите';
$a->strings['the bugtracker at github'] = 'багтрекер на github';
$a->strings['Suggestions, praise, etc. - please email "info" at "friendi - dot - ca'] = 'Предложения, отзывы, похвала - пишите нам на info[собака]friendi[точка]ca';
$a->strings['Could not create group.'] = 'Не удалось создать группу.';
$a->strings['Group not found.'] = 'Группа не найдена.';
$a->strings['Group name was not changed.'] = 'Название группы не изменено.';
$a->strings['Unknown group.'] = 'Неизвестная группа.';
$a->strings['Unable to add the contact to the group.'] = 'Не удалось добавить контакт в группу.';
$a->strings['Contact successfully added to group.'] = 'Контакт успешно добавлен в группу.';
$a->strings['Unable to remove the contact from the group.'] = 'Не удалось удалить контакт из группы.';
$a->strings['Contact successfully removed from group.'] = 'Контакт успешно удалён из группы.';
$a->strings['Bad request.'] = 'Ошибочный запрос.';
$a->strings['Save Group'] = 'Сохранить группу';
$a->strings['Filter'] = 'Фильтр';
$a->strings['Create a group of contacts/friends.'] = 'Создать группу контактов / друзей.';
$a->strings['Unable to remove group.'] = 'Не удается удалить группу.';
$a->strings['Delete Group'] = 'Удалить группу';
$a->strings['Edit Group Name'] = 'Изменить имя группы';
$a->strings['Members'] = 'Участники';
$a->strings['Group is empty'] = 'Группа пуста';
$a->strings['Remove contact from group'] = 'Удалить контакт из группы';
$a->strings['Click on a contact to add or remove.'] = 'Нажмите на контакт, чтобы добавить или удалить.';
$a->strings['Add contact to group'] = 'Добавить контакт в группу';
$a->strings['No profile'] = 'Нет профиля';
$a->strings['Method Not Allowed.'] = 'Метод не разрешён';
$a->strings['Help:'] = 'Помощь:';
$a->strings['Welcome to %s'] = 'Добро пожаловать на %s!';
$a->strings['Friendica Communications Server - Setup'] = 'Социальная сеть Friendica - Установка';
$a->strings['System check'] = 'Проверить систему';
$a->strings['OK'] = 'ОК';
$a->strings['Check again'] = 'Проверить еще раз';
$a->strings['Base settings'] = 'Основные настройки';
$a->strings['Host name'] = 'Имя хоста';
$a->strings['Overwrite this field in case the determinated hostname isn\'t right, otherweise leave it as is.'] = 'Впишите здесь имя сервера, если оно определилось неправильно, иначе оставьте его как есть.';
$a->strings['Base path to installation'] = 'Путь для установки';
$a->strings['If the system cannot detect the correct path to your installation, enter the correct path here. This setting should only be set if you are using a restricted system and symbolic links to your webroot.'] = 'Если система не смогла определить правильный путь к вашей установке, введите правильный путь здесь. Эта настройка должна использоваться только, если вы используете систему с ограниченным доступом с символьными ссылками в ваш веб-каталог.';
$a->strings['Sub path of the URL'] = 'Дополнительная часть URL';
$a->strings['Overwrite this field in case the sub path determination isn\'t right, otherwise leave it as is. Leaving this field blank means the installation is at the base URL without sub path.'] = 'Впишите здесь правильный каталог URL, если он определён неверно, иначе оставьте его как есть. Пустое поле означает, что Friendica установлена по основному URL без подкаталогов.';
$a->strings['Database connection'] = 'Подключение к базе данных';
$a->strings['In order to install Friendica we need to know how to connect to your database.'] = 'Для того, чтобы установить Friendica, мы должны знать, как подключиться к базе данных.';
$a->strings['Please contact your hosting provider or site administrator if you have questions about these settings.'] = 'Пожалуйста, свяжитесь с вашим хостинг-провайдером или администратором сайта, если у вас есть вопросы об этих параметрах.';
$a->strings['The database you specify below should already exist. If it does not, please create it before continuing.'] = 'Базы данных, указанная ниже, должна уже существовать. Если этого нет, пожалуйста, создайте ее перед продолжением.';
$a->strings['Database Server Name'] = 'Имя сервера базы данных';
$a->strings['Database Login Name'] = 'Логин базы данных';
$a->strings['Database Login Password'] = 'Пароль базы данных';
$a->strings['For security reasons the password must not be empty'] = 'Для безопасности пароль не должен быть пустым';
$a->strings['Database Name'] = 'Имя базы данных';
$a->strings['Please select a default timezone for your website'] = 'Пожалуйста, выберите часовой пояс по умолчанию для вашего сайта';
$a->strings['Site settings'] = 'Настройки сайта';
$a->strings['Site administrator email address'] = 'Адрес электронной почты администратора сайта';
$a->strings['Your account email address must match this in order to use the web admin panel.'] = 'Ваш адрес электронной почты аккаунта должен соответствовать этому, чтобы использовать веб-панель администратора.';
$a->strings['System Language:'] = 'Язык системы:';
$a->strings['Set the default language for your Friendica installation interface and to send emails.'] = 'Язык по-умолчанию для интерфейса Friendica и для отправки писем.';
$a->strings['Your Friendica site database has been installed.'] = 'База данных сайта установлена.';
$a->strings['Installation finished'] = 'Установка завершена';
$a->strings['<h1>What next</h1>'] = '<h1>Что далее</h1>';
$a->strings['IMPORTANT: You will need to [manually] setup a scheduled task for the worker.'] = 'ВАЖНО: Вам нужно будет [вручную] настроить фоновое задание в планировщике.';
$a->strings['Go to your new Friendica node <a href="%s/register">registration page</a> and register as new user. Remember to use the same email you have entered as administrator email. This will allow you to enter the site admin panel.'] = 'Зайдите на <a href="%s/register">страницу регистрации</a> вашего нового сервера Friendica и зарегистрируйтесь как новый пользователь. Обратите внимание, что нужно использовать тот же адрес почты, какой вы указали в настройках администратора. Это позволит вам зайти в панель администратора.';
$a->strings['Total invitation limit exceeded.'] = 'Превышен общий лимит приглашений.';
$a->strings['%s : Not a valid email address.'] = '%s: Неверный адрес электронной почты.';
$a->strings['Please join us on Friendica'] = 'Пожалуйста, присоединяйтесь к нам на Friendica';
$a->strings['Invitation limit exceeded. Please contact your site administrator.'] = 'Лимит приглашений превышен. Пожалуйста, свяжитесь с администратором сайта.';
$a->strings['%s : Message delivery failed.'] = '%s: Доставка сообщения не удалась.';
$a->strings['%d message sent.'] = [
	0 => '%d сообщение отправлено.',
	1 => '%d сообщений отправлено.',
	2 => '%d сообщений отправлено.',
	3 => '%d сообщений отправлено.',
];
$a->strings['You have no more invitations available'] = 'У вас нет больше приглашений';
$a->strings['Visit %s for a list of public sites that you can join. Friendica members on other sites can all connect with each other, as well as with members of many other social networks.'] = 'Посетите %s со списком общедоступных сайтов, к которым вы можете присоединиться. Все участники Friendica на других сайтах могут соединиться друг с другом, а также с участниками многих других социальных сетей.';
$a->strings['To accept this invitation, please visit and register at %s or any other public Friendica website.'] = 'Для одобрения этого приглашения, пожалуйста, посетите и зарегистрируйтесь на %s ,или любом другом публичном сервере Friendica';
$a->strings['Friendica sites all inter-connect to create a huge privacy-enhanced social web that is owned and controlled by its members. They can also connect with many traditional social networks. See %s for a list of alternate Friendica sites you can join.'] = 'Сайты Friendica, подключившись между собой, могут создать сеть с повышенной безопасностью, которая принадлежит и управляется её членами. Они также могут подключаться ко многим традиционным социальным сетям. См. %s  со списком альтернативных сайтов Friendica, к которым вы можете присоединиться.';
$a->strings['Our apologies. This system is not currently configured to connect with other public sites or invite members.'] = 'Извините. Эта система в настоящее время не сконфигурирована для соединения с другими общественными сайтами и для приглашения участников.';
$a->strings['Friendica sites all inter-connect to create a huge privacy-enhanced social web that is owned and controlled by its members. They can also connect with many traditional social networks.'] = 'Серверы Френдики взаимосвязаны друг с другом и образуют огромную социальную сеть, которой владеют все её члены. Так же они могут соединяться со многими традиционными социальными сетями.';
$a->strings['To accept this invitation, please visit and register at %s.'] = 'Чтобы принять это приглашение, пожалуйста зайдите на %s и зарегистрируйтесь.';
$a->strings['Send invitations'] = 'Отправить приглашения';
$a->strings['Enter email addresses, one per line:'] = 'Введите адреса электронной почты, по одному в строке:';
$a->strings['You are cordially invited to join me and other close friends on Friendica - and help us to create a better social web.'] = 'Приглашаем Вас присоединиться ко мне и другим близким друзьям на Friendica - помочь нам создать лучшую социальную сеть.';
$a->strings['You will need to supply this invitation code: $invite_code'] = 'Вам нужно будет предоставить этот код приглашения: $invite_code';
$a->strings['Once you have registered, please connect with me via my profile page at:'] = 'После того как вы зарегистрировались, пожалуйста, свяжитесь со мной через мою страницу профиля по адресу:';
$a->strings['For more information about the Friendica project and why we feel it is important, please visit http://friendi.ca'] = 'Чтобы узнать больше о проекте Friendica и почему мы считаем это важным, посетите http://friendi.ca';
$a->strings['Please enter a post body.'] = 'Пожалуйста, введите текст записи.';
$a->strings['This feature is only available with the frio theme.'] = 'Эта функция доступна только для темы frio.';
$a->strings['Compose new personal note'] = 'Создать новую личную заметку';
$a->strings['Compose new post'] = 'Создать новую запись';
$a->strings['Visibility'] = 'Видимость';
$a->strings['Clear the location'] = 'Очистить локацию';
$a->strings['Location services are unavailable on your device'] = 'Геолокация на вашем устройстве недоступна';
$a->strings['Location services are disabled. Please check the website\'s permissions on your device'] = 'Геолокация отключена. Пожалуйста, проверьте разрешения этого сайта на вашем устройстве';
$a->strings['Unable to follow this item.'] = 'Не получается подписаться на эту запись.';
$a->strings['System down for maintenance'] = 'Система закрыта на техническое обслуживание';
$a->strings['This Friendica node is currently in maintenance mode, either automatically because it is self-updating or manually by the node administrator. This condition should be temporary, please come back in a few minutes.'] = 'Этот сервер Friendica в настоящее время закрыт на обслуживание, либо по причине автоматического обновления, либо администратором. Обычно это временное явление, пожалуйста, попробуйте вернуться через некоторое время.';
$a->strings['A Decentralized Social Network'] = 'Децентрализованная социальная сеть';
$a->strings['Show Ignored Requests'] = 'Показать проигнорированные запросы';
$a->strings['Hide Ignored Requests'] = 'Скрыть проигнорированные запросы';
$a->strings['Notification type:'] = 'Тип уведомления:';
$a->strings['Suggested by:'] = 'Рекомендовано:';
$a->strings['Claims to be known to you: '] = 'Утверждения, о которых должно быть вам известно: ';
$a->strings['No'] = 'Нет';
$a->strings['Shall your connection be bidirectional or not?'] = 'Должно ли ваше соединение быть двухсторонним или нет?';
$a->strings['Accepting %s as a friend allows %s to subscribe to your posts, and you will also receive updates from them in your news feed.'] = 'Принимая %s как друга вы позволяете %s читать ему свои записи, а также будете получать записи от него.';
$a->strings['Accepting %s as a subscriber allows them to subscribe to your posts, but you will not receive updates from them in your news feed.'] = 'Принимая %s как подписчика вы позволяете читать ему свои записи, но вы не будете получать записей от него.';
$a->strings['Friend'] = 'Друг';
$a->strings['Subscriber'] = 'Подписчик';
$a->strings['No introductions.'] = 'Запросов нет.';
$a->strings['No more %s notifications.'] = 'Больше нет уведомлений о %s.';
$a->strings['You must be logged in to show this page.'] = 'Вам нужно войти, чтобы увидеть эту страницу.';
$a->strings['Network Notifications'] = 'Уведомления сети';
$a->strings['System Notifications'] = 'Уведомления системы';
$a->strings['Personal Notifications'] = 'Личные уведомления';
$a->strings['Home Notifications'] = 'Уведомления';
$a->strings['Show unread'] = 'Показать непрочитанные';
$a->strings['{0} requested registration'] = '{0} требуемая регистрация';
$a->strings['Authorize application connection'] = 'Разрешить связь с приложением';
$a->strings['Do you want to authorize this application to access your posts and contacts, and/or create new posts for you?'] = 'Вы действительно хотите разрешить этому приложению доступ к своим записям и контактам, а также создавать новые записи от вашего имени?';
$a->strings['Unlisted'] = 'Непублично';
$a->strings['Remote privacy information not available.'] = 'Личная информация удаленно недоступна.';
$a->strings['Visible to:'] = 'Кто может видеть:';
$a->strings['Followers (%s)'] = 'Подписчики (%s)';
$a->strings['The Photo is not available.'] = 'Фото недоступно.';
$a->strings['The Photo with id %s is not available.'] = 'Фотография с id %s недоступна.';
$a->strings['Invalid photo with id %s.'] = 'Неправильное фото с id %s.';
$a->strings['No contacts.'] = 'Нет контактов.';
$a->strings['Profile not found.'] = 'Профиль не найден.';
$a->strings['You\'re currently viewing your profile as <b>%s</b> <a href="%s" class="btn btn-sm pull-right">Cancel</a>'] = 'Сейчас вы видите свой профиль как <b>%s</b> <a href="%s" class="btn btn-sm pull-right">Отмена</a>';
$a->strings['Full Name:'] = 'Полное имя:';
$a->strings['Member since:'] = 'Зарегистрирован с:';
$a->strings['j F, Y'] = 'j F, Y';
$a->strings['j F'] = 'j F';
$a->strings['Birthday:'] = 'День рождения:';
$a->strings['Age: '] = 'Возраст: ';
$a->strings['%d year old'] = [
	0 => '%dгод',
	1 => '%dгода',
	2 => '%dлет',
	3 => '%dлет',
];
$a->strings['Forums:'] = 'Форумы:';
$a->strings['View profile as:'] = 'Посмотреть профиль как:';
$a->strings['View as'] = 'Посмотреть как';
$a->strings['%s\'s timeline'] = 'Лента %s';
$a->strings['%s\'s posts'] = 'Записи %s';
$a->strings['%s\'s comments'] = 'Комментарии %s';
$a->strings['Scheduled'] = 'Запланировано';
$a->strings['Content'] = 'Содержание';
$a->strings['Remove post'] = 'Удалить запись';
$a->strings['Only parent users can create additional accounts.'] = 'Только основные пользователи могут создавать дополнительные учётные записи.';
$a->strings['If you are not familiar with OpenID, please leave that field blank and fill in the rest of the items.'] = 'Если вы не знакомы с OpenID, пожалуйста, оставьте это поле пустым и заполните остальные элементы.';
$a->strings['Your OpenID (optional): '] = 'Ваш OpenID (необязательно):';
$a->strings['Include your profile in member directory?'] = 'Включить ваш профиль в каталог участников?';
$a->strings['Note for the admin'] = 'Сообщение для администратора';
$a->strings['Leave a message for the admin, why you want to join this node'] = 'Сообщения для администратора сайта на тему "почему я хочу присоединиться к вам"';
$a->strings['Membership on this site is by invitation only.'] = 'Членство на сайте только по приглашению.';
$a->strings['Your invitation code: '] = 'Ваш код приглашения:';
$a->strings['Your Full Name (e.g. Joe Smith, real or real-looking): '] = 'Ваше полное имя (например, Иван Иванов):';
$a->strings['Your Email Address: (Initial information will be send there, so this has to be an existing address.)'] = 'Ваш адрес электронной почты: (Информация для входа будет отправлена туда, это должен быть существующий адрес.)';
$a->strings['Please repeat your e-mail address:'] = 'Пожалуйста, введите адрес электронной почты ещё раз:';
$a->strings['New Password:'] = 'Новый пароль:';
$a->strings['Leave empty for an auto generated password.'] = 'Оставьте пустым для автоматической генерации пароля.';
$a->strings['Confirm:'] = 'Подтвердите:';
$a->strings['Choose a nickname: '] = 'Выберите псевдоним: ';
$a->strings['Import your profile to this friendica instance'] = 'Импорт своего профиля в этот экземпляр friendica';
$a->strings['Note: This node explicitly contains adult content'] = 'Внимание: на этом сервере размещаются материалы для взрослых.';
$a->strings['Parent Password:'] = 'Родительский пароль:';
$a->strings['Please enter the password of the parent account to legitimize your request.'] = 'Пожалуйста введите пароль от родительского аккаунта для подтверждения запроса.';
$a->strings['Password doesn\'t match.'] = 'Пароль не совпадает';
$a->strings['Please enter your password.'] = 'Пожалуйста, введите ваш пароль.';
$a->strings['You have entered too much information.'] = 'Вы ввели слишком много информации.';
$a->strings['Please enter the identical mail address in the second field.'] = 'Пожалуйста, введите тот же самый адрес почты во второе поле.';
$a->strings['The additional account was created.'] = 'Дополнительная учётная запись создана.';
$a->strings['Registration successful. Please check your email for further instructions.'] = 'Регистрация успешна. Пожалуйста, проверьте свою электронную почту для получения дальнейших инструкций.';
$a->strings['Failed to send email message. Here your accout details:<br> login: %s<br> password: %s<br><br>You can change your password after login.'] = 'Ошибка отправки письма. Вот ваши учетные данные: <br> логин: %s<br> пароль: %s<br><br>Вы сможете изменить пароль после входа.';
$a->strings['Registration successful.'] = 'Регистрация успешна.';
$a->strings['Your registration can not be processed.'] = 'Ваша регистрация не может быть обработана.';
$a->strings['You have to leave a request note for the admin.'] = 'Вам нужно написать обращение к администратору.';
$a->strings['Your registration is pending approval by the site owner.'] = 'Ваша регистрация в ожидании одобрения владельцем сайта.';
$a->strings['Profile unavailable.'] = 'Профиль недоступен.';
$a->strings['Invalid locator'] = 'Недопустимый локатор';
$a->strings['The provided profile link doesn\'t seem to be valid'] = 'Указанная ссылка на профиль не выглядит правильной';
$a->strings['Remote subscription can\'t be done for your network. Please subscribe directly on your system.'] = 'Удаленная подписка не может быть выполнена на вашей сети. Пожалуйста, подпишитесь на вашей системе.';
$a->strings['Friend/Connection Request'] = 'Запрос в друзья / на подключение';
$a->strings['If you are not yet a member of the free social web, <a href="%s">follow this link to find a public Friendica node and join us today</a>.'] = 'Если вы ещё не член свободной социальной сети, <a href="%s">пройдите по этой ссылке, чтобы найти публичный узел Friendica и присоединитесь к нам сегодня</a>.';
$a->strings['Your Webfinger address or profile URL:'] = 'Ваш адрес Webfinger или ссылка на профиль:';
$a->strings['You must be logged in to use this module.'] = 'Вам нужно войти, чтобы использовать этот модуль.';
$a->strings['Only logged in users are permitted to perform a search.'] = 'Только зарегистрированные пользователи могут использовать поиск.';
$a->strings['Only one search per minute is permitted for not logged in users.'] = 'Незарегистрированные пользователи могут выполнять поиск раз в минуту.';
$a->strings['Items tagged with: %s'] = 'Элементы с тегами: %s';
$a->strings['Search term was not saved.'] = 'Поисковый запрос не сохранён.';
$a->strings['Search term already saved.'] = 'Такой запрос уже сохранён.';
$a->strings['Search term was not removed.'] = 'Поисковый запрос не был удалён.';
$a->strings['Create a New Account'] = 'Создать новый аккаунт';
$a->strings['Your OpenID: '] = 'Ваш OpenID: ';
$a->strings['Please enter your username and password to add the OpenID to your existing account.'] = 'Пожалуйста, введите ваше имя пользователя и пароль для того, чтобы добавить OpenID к вашей учётной записи.';
$a->strings['Or login using OpenID: '] = 'Или зайти с OpenID: ';
$a->strings['Password: '] = 'Пароль: ';
$a->strings['Remember me'] = 'Запомнить';
$a->strings['Forgot your password?'] = 'Забыли пароль?';
$a->strings['Website Terms of Service'] = 'Правила сайта';
$a->strings['terms of service'] = 'правила';
$a->strings['Website Privacy Policy'] = 'Политика конфиденциальности сервера';
$a->strings['privacy policy'] = 'политика конфиденциальности';
$a->strings['Logged out.'] = 'Выход из системы.';
$a->strings['Passwords do not match.'] = 'Пароли не совпадают';
$a->strings['Password unchanged.'] = 'Пароль не поменялся';
$a->strings['Current Password:'] = 'Текущий пароль:';
$a->strings['Your current password to confirm the changes'] = 'Ваш текущий пароль, для подтверждения изменений';
$a->strings['Allowed characters are a-z, A-Z, 0-9 and special characters except white spaces, accentuated letters and colon (:).'] = 'Разрешенные символы: a-z, A-Z, 0-9 специальные символы за исключением пробелов, букв с акцентами и двоеточия (:).';
$a->strings['Remaining recovery codes: %d'] = 'Осталось кодов для восстановления: %d';
$a->strings['Invalid code, please retry.'] = 'Неправильный код, попробуйте ещё.';
$a->strings['Two-factor recovery'] = 'Двухфакторное восстановление доступа';
$a->strings['<p>You can enter one of your one-time recovery codes in case you lost access to your mobile device.</p>'] = '<p>Вы можете ввести один из ваших одноразовых кодов восстановления в случае, если у вас нет доступа к мобильному устройству.</p>';
$a->strings['Don’t have your phone? <a href="%s">Enter a two-factor recovery code</a>'] = 'Нет телефона? <a href="%s">Введите код восстановления</a>';
$a->strings['Please enter a recovery code'] = 'Пожалуйста, введите код восстановления';
$a->strings['Submit recovery code and complete login'] = 'Отправить код восстановления и завершить вход';
$a->strings['<p>Open the two-factor authentication app on your device to get an authentication code and verify your identity.</p>'] = '<p>Откройте приложение для двухфакторной аутентификации на вашем устройстве, чтобы получить код аутентификации и подтвердить вашу личность.</p>';
$a->strings['Please enter a code from your authentication app'] = 'Пожалуйста, введите код из вашего приложения для аутентификации';
$a->strings['Verify code and complete login'] = 'Введите код для завершения входа';
$a->strings['Please use a shorter name.'] = 'Пожалуйста, выберите имя короче.';
$a->strings['Name too short.'] = 'Имя слишком короткое';
$a->strings['Wrong Password.'] = 'Неправильный пароль';
$a->strings['Invalid email.'] = 'Неправильный адрес почты';
$a->strings['Cannot change to that email.'] = 'Нельзя установить этот адрес почты';
$a->strings['Settings were not updated.'] = 'Настройки не были изменены.';
$a->strings['Contact CSV file upload error'] = 'Ошибка загрузки CSV с контактами';
$a->strings['Importing Contacts done'] = 'Импорт контактов завершён';
$a->strings['Relocate message has been send to your contacts'] = 'Перемещённое сообщение было отправлено списку контактов';
$a->strings['Unable to find your profile. Please contact your admin.'] = 'Не получается найти ваш профиль. Пожалуйста свяжитесь с администратором.';
$a->strings['Personal Page Subtypes'] = 'Подтипы личной страницы';
$a->strings['Community Forum Subtypes'] = 'Подтипы форума сообщества';
$a->strings['Account for a personal profile.'] = 'Личная учётная запись';
$a->strings['Account for an organisation that automatically approves contact requests as "Followers".'] = 'Учётная запись организации, которая автоматически одобряет новых подписчиков.';
$a->strings['Account for a news reflector that automatically approves contact requests as "Followers".'] = 'Учётная запись новостной ленты, которая автоматически одобряет новых подписчиков.';
$a->strings['Account for community discussions.'] = 'Учётная запись для совместных обсуждений.';
$a->strings['Account for a regular personal profile that requires manual approval of "Friends" and "Followers".'] = 'Личная учётная запись, которая требует ручного одобрения для новых подписчиков и друзей.';
$a->strings['Account for a public profile that automatically approves contact requests as "Followers".'] = 'Учётная запись для публичного профиля, которая автоматически одобряет новых подписчиков.';
$a->strings['Automatically approves all contact requests.'] = 'Автоматически одобряет все запросы на подписку.';
$a->strings['Account for a popular profile that automatically approves contact requests as "Friends".'] = 'Учётная запись для публичной личности, которая автоматически добавляет все новые контакты в друзья.';
$a->strings['Private Forum [Experimental]'] = 'Личный форум [экспериментально]';
$a->strings['Requires manual approval of contact requests.'] = 'Требует ручного одобрения запросов на подписку.';
$a->strings['OpenID:'] = 'OpenID:';
$a->strings['(Optional) Allow this OpenID to login to this account.'] = '(Необязательно) Разрешить этому OpenID входить в этот аккаунт';
$a->strings['Publish your profile in your local site directory?'] = 'Опубликовать ваш профиль в каталоге вашего сервера?';
$a->strings['Your profile will be published in this node\'s <a href="%s">local directory</a>. Your profile details may be publicly visible depending on the system settings.'] = 'Ваш профиль будет опубликован в <a href="%s">локальном каталоге</a> этого сервера. Данные вашего профиля могут быть доступны публично в зависимости от настроек.';
$a->strings['Your profile will also be published in the global friendica directories (e.g. <a href="%s">%s</a>).'] = 'Ваш профиль так же будет опубликован в глобальных каталогах Френдики (напр. <a href="%s">%s</a>).';
$a->strings['Account Settings'] = 'Настройки аккаунта';
$a->strings['Your Identity Address is <strong>\'%s\'</strong> or \'%s\'.'] = 'Ваш адрес: <strong>\'%s\'</strong> или \'%s\'.';
$a->strings['Password Settings'] = 'Смена пароля';
$a->strings['Leave password fields blank unless changing'] = 'Оставьте поля пароля пустыми, если он не изменяется';
$a->strings['Password:'] = 'Пароль:';
$a->strings['Your current password to confirm the changes of the email address'] = 'Ваш текущий пароль для подтверждения смены адреса почты';
$a->strings['Delete OpenID URL'] = 'Удалить ссылку OpenID';
$a->strings['Basic Settings'] = 'Основные параметры';
$a->strings['Email Address:'] = 'Адрес электронной почты:';
$a->strings['Your Timezone:'] = 'Ваш часовой пояс:';
$a->strings['Your Language:'] = 'Ваш язык:';
$a->strings['Set the language we use to show you friendica interface and to send you emails'] = 'Выберите язык, на котором вы будете видеть интерфейс Friendica и на котором вы будете получать письма';
$a->strings['Default Post Location:'] = 'Местонахождение по умолчанию:';
$a->strings['Use Browser Location:'] = 'Использовать определение местоположения браузером:';
$a->strings['Security and Privacy Settings'] = 'Параметры безопасности и конфиденциальности';
$a->strings['Maximum Friend Requests/Day:'] = 'Максимум запросов в друзья в день:';
$a->strings['(to prevent spam abuse)'] = '(для предотвращения спама)';
$a->strings['Allow your profile to be searchable globally?'] = 'Сделать ваш профиль доступным для поиска глобально?';
$a->strings['Activate this setting if you want others to easily find and follow you. Your profile will be searchable on remote systems. This setting also determines whether Friendica will inform search engines that your profile should be indexed or not.'] = 'Включите эту настройку, если вы хотите, чтобы другие люди могли легко вас находить. Ваш профиль станет доступным для поиска на других узлах. Так же эта настройка разрешает поисковым системам индексировать ваш профиль.';
$a->strings['Hide your contact/friend list from viewers of your profile?'] = 'Скрыть список ваших контактов/друзей от просмотра в вашем профиле?';
$a->strings['A list of your contacts is displayed on your profile page. Activate this option to disable the display of your contact list.'] = 'Список ваших контактов отображается на вашей странице профиля. Включите эту настройку, чтобы скрыть отображение вашего списка контактов.';
$a->strings['Hide your profile details from anonymous viewers?'] = 'Скрыть данные профиля от анонимных посетителей?';
$a->strings['Anonymous visitors will only see your profile picture, your display name and the nickname you are using on your profile page. Your public posts and replies will still be accessible by other means.'] = 'Анонимные посетители будут видеть только вашу картинку, ваше имя и и ник. Публичные записи и комментарии могут быть доступны другими способами.';
$a->strings['Make public posts unlisted'] = 'Скрыть публичные записи из общих лент';
$a->strings['Your public posts will not appear on the community pages or in search results, nor be sent to relay servers. However they can still appear on public feeds on remote servers.'] = 'Ваши публичные записи не будут отражаться в общей ленте сервера или в результатах поиска, так же они не будут отправляться на ретранслтяторы. Тем не менее, они всё равно могут быть доступны в публичных лентах других серверов.';
$a->strings['Make all posted pictures accessible'] = 'Сделать все опубликованные изображения доступными';
$a->strings['This option makes every posted picture accessible via the direct link. This is a workaround for the problem that most other networks can\'t handle permissions on pictures. Non public pictures still won\'t be visible for the public on your photo albums though.'] = 'Эта настройка делает все опубликованные изображения доступными по прямой ссылке. Это можно применить для решения проблем с другими социальными сетями, которые не умеют работать с разрешениями доступа для изображений. Непубличные изображения в любом случае не будут доступны для просмотра публично в ваших альбомах.';
$a->strings['Allow friends to post to your profile page?'] = 'Разрешить друзьям оставлять сообщения на страницу вашего профиля?';
$a->strings['Your contacts may write posts on your profile wall. These posts will be distributed to your contacts'] = 'Ваши контакты могут оставлять записи на стене вашего профиля. Эти записи будут распространены вашим подписчикам.';
$a->strings['Allow friends to tag your posts?'] = 'Разрешить друзьям отмечать ваши сообщения?';
$a->strings['Your contacts can add additional tags to your posts.'] = 'Ваши контакты могут добавлять дополнительные теги к вашим записям.';
$a->strings['Permit unknown people to send you private mail?'] = 'Разрешить незнакомым людям отправлять вам личные сообщения?';
$a->strings['Friendica network users may send you private messages even if they are not in your contact list.'] = 'Пользователи Френдики могут отправлять вам личные сообщения даже если их нет в вашем списке контактов.';
$a->strings['Maximum private messages per day from unknown people:'] = 'Максимальное количество личных сообщений от незнакомых людей в день:';
$a->strings['Default Post Permissions'] = 'Разрешение на сообщения по умолчанию';
$a->strings['Expiration settings'] = 'Очистка старых записей';
$a->strings['Automatically expire posts after this many days:'] = 'Автоматическое истекание срока действия сообщения после стольких дней:';
$a->strings['If empty, posts will not expire. Expired posts will be deleted'] = 'Если пусто, срок действия сообщений не будет ограничен. Сообщения с истекшим сроком действия будут удалены';
$a->strings['Expire posts'] = 'Удалять старые записи';
$a->strings['When activated, posts and comments will be expired.'] = 'Если включено, то старые записи и комментарии будут удаляться.';
$a->strings['Expire personal notes'] = 'Удалять персональные заметки';
$a->strings['When activated, the personal notes on your profile page will be expired.'] = 'Если включено, старые личные заметки из вашего профиля будут удаляться.';
$a->strings['Expire starred posts'] = 'Удалять избранные записи';
$a->strings['Starring posts keeps them from being expired. That behaviour is overwritten by this setting.'] = 'Добавление записи в избранные защищает её от удаления. Эта настройка выключает эту защиту.';
$a->strings['Only expire posts by others'] = 'Удалять только записи других людей';
$a->strings['When activated, your own posts never expire. Then the settings above are only valid for posts you received.'] = 'Если включено, ваши собственные записи никогда не удаляются. В этом случае все настройки выше применяются только к записям, которые вы получаете от других.';
$a->strings['Notification Settings'] = 'Настройка уведомлений';
$a->strings['Send a notification email when:'] = 'Отправлять уведомление по электронной почте, когда:';
$a->strings['You receive an introduction'] = 'Вы получили запрос';
$a->strings['Your introductions are confirmed'] = 'Ваши запросы подтверждены';
$a->strings['Someone writes on your profile wall'] = 'Кто-то пишет на стене вашего профиля';
$a->strings['Someone writes a followup comment'] = 'Кто-то пишет последующий комментарий';
$a->strings['You receive a private message'] = 'Вы получаете личное сообщение';
$a->strings['You receive a friend suggestion'] = 'Вы полулили предложение о добавлении в друзья';
$a->strings['You are tagged in a post'] = 'Вы отмечены в записи';
$a->strings['Create a desktop notification when:'] = 'Показывать уведомление при:';
$a->strings['Someone tagged you'] = 'Вас отметили';
$a->strings['Someone directly commented on your post'] = 'На вашу запись написали комментарий';
$a->strings['Someone liked your content'] = 'Ваша запись кому-то понравилась';
$a->strings['Can only be enabled, when the direct comment notification is enabled.'] = 'Может быть включено только при включении уведомлений о комментариях к вашим записям.';
$a->strings['Someone shared your content'] = 'Вашей записью поделились';
$a->strings['Someone commented in your thread'] = 'В обсуждении вашей записи написали комментарий';
$a->strings['Someone commented in a thread where you commented'] = 'Написали в диалоге, где вы оставляли комментарии';
$a->strings['Someone commented in a thread where you interacted'] = 'Написали в диалоге, где вы принимали любое участие';
$a->strings['Activate desktop notifications'] = 'Активировать уведомления на рабочем столе';
$a->strings['Show desktop popup on new notifications'] = 'Показывать уведомления на рабочем столе';
$a->strings['Text-only notification emails'] = 'Только текстовые письма';
$a->strings['Send text only notification emails, without the html part'] = 'Отправлять только текстовые уведомления, без HTML';
$a->strings['Show detailled notifications'] = 'Показывать подробные уведомления';
$a->strings['Per default, notifications are condensed to a single notification per item. When enabled every notification is displayed.'] = 'По-умолчанию уведомления группируются в одно для каждой записи. Эта настройка показывает все уведомления по отдельности.';
$a->strings['Show notifications of ignored contacts'] = 'Показывать уведомления игнорируемых контактов';
$a->strings['You don\'t see posts from ignored contacts. But you still see their comments. This setting controls if you want to still receive regular notifications that are caused by ignored contacts or not.'] = 'Вы не видите записи от игнорируемых контактов, но вы видите их комментарии. Эта настройка определяет, хотите ли вы получать уведомления от действий игнорируемых контактов или нет.';
$a->strings['Advanced Account/Page Type Settings'] = 'Расширенные настройки учётной записи';
$a->strings['Change the behaviour of this account for special situations'] = 'Измените поведение этого аккаунта в специальных ситуациях';
$a->strings['Import Contacts'] = 'Импорт контактов';
$a->strings['Upload a CSV file that contains the handle of your followed accounts in the first column you exported from the old account.'] = 'Загрузите файл CSV, который содержит адреса ваших контактов в первой колонке. Вы можете экспортировать его из вашей старой учётной записи.';
$a->strings['Upload File'] = 'Загрузить файл';
$a->strings['Relocate'] = 'Перемещение';
$a->strings['If you have moved this profile from another server, and some of your contacts don\'t receive your updates, try pushing this button.'] = 'Если вы переместили эту анкету с другого сервера, и некоторые из ваших контактов не получили ваши обновления, попробуйте нажать эту кнопку.';
$a->strings['Resend relocate message to contacts'] = 'Отправить перемещённые сообщения контактам';
$a->strings['Delegation successfully granted.'] = 'Делегирование успешно предоставлено.';
$a->strings['Parent user not found, unavailable or password doesn\'t match.'] = 'Родительский пользователь не найден, недоступен или пароль не совпадает.';
$a->strings['Delegation successfully revoked.'] = 'Делегирование успешно отменено.';
$a->strings['Delegated administrators can view but not change delegation permissions.'] = 'Администраторы-делегаты могут видеть, но не менять разрешения делегирования.';
$a->strings['Delegate user not found.'] = 'Пользователь-делегат не найден.';
$a->strings['No parent user'] = 'Нет родительского пользователя';
$a->strings['Parent User'] = 'Родительский пользователь';
$a->strings['Additional Accounts'] = 'Дополнительные учётные записи';
$a->strings['Register additional accounts that are automatically connected to your existing account so you can manage them from this account.'] = 'Регистрируйте дополнительные учётные записи, которые будут автоматически соединены с вашей основной учётной записью и вы сможете ими из неё управлять.';
$a->strings['Register an additional account'] = 'Зарегистрируйте дополнительную учётную запись';
$a->strings['Delegates'] = 'Делегаты';
$a->strings['Delegates are able to manage all aspects of this account/page except for basic account settings. Please do not delegate your personal account to anybody that you do not trust completely.'] = 'Доверенные лица могут управлять всеми аспектами этого аккаунта/страницы, за исключением основных настроек аккаунта. Пожалуйста, не предоставляйте доступ в личный кабинет тому, кому вы не полностью доверяете.';
$a->strings['Existing Page Delegates'] = 'Существующие уполномоченные страницы';
$a->strings['Potential Delegates'] = 'Возможные доверенные лица';
$a->strings['Add'] = 'Добавить';
$a->strings['No entries.'] = 'Нет записей.';
$a->strings['The theme you chose isn\'t available.'] = 'Выбранная вами тема недоступна.';
$a->strings['Display Settings'] = 'Внешний вид';
$a->strings['General Theme Settings'] = 'Общие настройки тем';
$a->strings['Custom Theme Settings'] = 'Личные настройки тем';
$a->strings['Content Settings'] = 'Настройки контента';
$a->strings['Theme settings'] = 'Настройки темы';
$a->strings['Calendar'] = 'Календарь';
$a->strings['Display Theme:'] = 'Показать тему:';
$a->strings['Mobile Theme:'] = 'Мобильная тема:';
$a->strings['Number of items to display per page:'] = 'Количество элементов, отображаемых на одной странице:';
$a->strings['Maximum of 100 items'] = 'Максимум 100 элементов';
$a->strings['Number of items to display per page when viewed from mobile device:'] = 'Количество элементов на странице, когда просмотр осуществляется с мобильных устройств:';
$a->strings['Update browser every xx seconds'] = 'Обновление браузера каждые хх секунд';
$a->strings['Minimum of 10 seconds. Enter -1 to disable it.'] = 'Минимум 10 секунд. Введите -1 для отключения.';
$a->strings['Automatic updates only at the top of the post stream pages'] = 'Автоматически обновлять только при нахождении вверху страницы ленты';
$a->strings['Auto update may add new posts at the top of the post stream pages, which can affect the scroll position and perturb normal reading if it happens anywhere else the top of the page.'] = 'Автообновление может загружать новые записи в начало ленты, что может изменить положение прокрутки и помешать чтению, если вы находитесь не в начале страницы.';
$a->strings['Display emoticons'] = 'Показывать смайлики';
$a->strings['When enabled, emoticons are replaced with matching symbols.'] = 'Когда включено, соответствующие символы отображаются как смайлики.';
$a->strings['Infinite scroll'] = 'Бесконечная прокрутка';
$a->strings['Automatic fetch new items when reaching the page end.'] = 'Автоматически подгружать новые записи, когда вы оказываетесь в конце страницы.';
$a->strings['Enable Smart Threading'] = 'Включить умное ветвление обсуждений';
$a->strings['Enable the automatic suppression of extraneous thread indentation.'] = 'Включить автоматическое удаление излишних отступов в ветках обсуждений.';
$a->strings['Display the Dislike feature'] = 'Показывать "Не нравится"';
$a->strings['Display the Dislike button and dislike reactions on posts and comments.'] = 'Показывать кнопку "Не нравится" и соответствующие реакции на записях и комментариях.';
$a->strings['Display the resharer'] = 'Показывать поделившегося';
$a->strings['Display the first resharer as icon and text on a reshared item.'] = 'Показывать первого из поделившихся записью в виде значка над этой записью.';
$a->strings['Stay local'] = 'Оставаться локально';
$a->strings['Don\'t go to a remote system when following a contact link.'] = 'Не переходить на другие серверы по ссылкам профилей.';
$a->strings['Beginning of week:'] = 'Начало недели:';
$a->strings['Profile Name is required.'] = 'Необходимо имя профиля.';
$a->strings['Profile couldn\'t be updated.'] = 'Профиль не получилось обновить.';
$a->strings['Label:'] = 'Поле:';
$a->strings['Value:'] = 'Значение:';
$a->strings['Field Permissions'] = 'Право просмотра поля';
$a->strings['(click to open/close)'] = '(нажмите, чтобы открыть / закрыть)';
$a->strings['Add a new profile field'] = 'Добавить новое поле профиля';
$a->strings['Profile Actions'] = 'Действия профиля';
$a->strings['Edit Profile Details'] = 'Редактировать детали профиля';
$a->strings['Change Profile Photo'] = 'Изменить фото профиля';
$a->strings['Profile picture'] = 'Картинка профиля';
$a->strings['Location'] = 'Местонахождение';
$a->strings['Miscellaneous'] = 'Разное';
$a->strings['Custom Profile Fields'] = 'Произвольные поля профиля';
$a->strings['Upload Profile Photo'] = 'Загрузить фото профиля';
$a->strings['Display name:'] = 'Отображаемое имя:';
$a->strings['Street Address:'] = 'Адрес:';
$a->strings['Locality/City:'] = 'Город / Населенный пункт:';
$a->strings['Region/State:'] = 'Район / Область:';
$a->strings['Postal/Zip Code:'] = 'Почтовый индекс:';
$a->strings['Country:'] = 'Страна:';
$a->strings['XMPP (Jabber) address:'] = 'Адрес XMPP (Jabber):';
$a->strings['The XMPP address will be published so that people can follow you there.'] = 'Этот адрес XMPP будет виден в профиле, чтобы другие люди могли вас там найти.';
$a->strings['Matrix (Element) address:'] = 'Адрес Matrix (Element):';
$a->strings['The Matrix address will be published so that people can follow you there.'] = 'Этот адрес Matrix будет виден в профиле, чтобы другие люди могли вас там найти.';
$a->strings['Homepage URL:'] = 'Адрес домашней странички:';
$a->strings['Public Keywords:'] = 'Общественные ключевые слова:';
$a->strings['(Used for suggesting potential friends, can be seen by others)'] = '(Используется для предложения потенциальным друзьям, могут увидеть другие)';
$a->strings['Private Keywords:'] = 'Личные ключевые слова:';
$a->strings['(Used for searching profiles, never shown to others)'] = '(Используется для поиска профилей, никогда не показывается другим)';
$a->strings['<p>Custom fields appear on <a href="%s">your profile page</a>.</p>
				<p>You can use BBCodes in the field values.</p>
				<p>Reorder by dragging the field title.</p>
				<p>Empty the label field to remove a custom field.</p>
				<p>Non-public fields can only be seen by the selected Friendica contacts or the Friendica contacts in the selected groups.</p>'] = '<p>Произвольные поля видны <a href="%s">на вашей странице профиля</a>.</p>
				<p>В значениях полей можно использовать BBCode.</p>
				<p>Меняйте порядок перетаскиванием.</p>
				<p>Сотрите название для удаления поля.</p>
				<p>Закрытые поля будут видны только выбранным контактам из Friendica, либо контактам из выбранных групп.</p>';
$a->strings['Image size reduction [%s] failed.'] = 'Уменьшение размера изображения [%s] не удалось.';
$a->strings['Shift-reload the page or clear browser cache if the new photo does not display immediately.'] = 'Перезагрузите страницу с зажатой клавишей "Shift" для того, чтобы увидеть свое новое фото немедленно.';
$a->strings['Unable to process image'] = 'Не удается обработать изображение';
$a->strings['Photo not found.'] = 'Фото не найдено.';
$a->strings['Profile picture successfully updated.'] = 'Картинка профиля успешно обновлена.';
$a->strings['Crop Image'] = 'Обрезать изображение';
$a->strings['Please adjust the image cropping for optimum viewing.'] = 'Пожалуйста, настройте обрезку изображения для оптимального просмотра.';
$a->strings['Use Image As Is'] = 'Использовать картинку как есть';
$a->strings['Missing uploaded image.'] = 'Отсутствует загруженное изображение';
$a->strings['Profile Picture Settings'] = 'Настройки картинки профиля';
$a->strings['Current Profile Picture'] = 'Текущая картинка профиля';
$a->strings['Upload Profile Picture'] = 'Загрузить картинку профиля';
$a->strings['Upload Picture:'] = 'Загрузить картинку:';
$a->strings['or'] = 'или';
$a->strings['skip this step'] = 'пропустить этот шаг';
$a->strings['select a photo from your photo albums'] = 'выберите фото из ваших фотоальбомов';
$a->strings['Please enter your password to access this page.'] = 'Пожалуйста, введите ваш пароль для доступа к этой странице.';
$a->strings['Revoke All'] = 'Отозвать все';
$a->strings['Current password:'] = 'Текущий пароль:';
$a->strings['Enable two-factor authentication'] = 'Включить двухфакторную аутентификацию';
$a->strings['Show recovery codes'] = 'Показать коды восстановления';
$a->strings['Manage app-specific passwords'] = 'Управление паролями приложений';
$a->strings['Finish app configuration'] = 'Закончить настройку приложения';
$a->strings['New recovery codes successfully generated.'] = 'Новые коды восстановления успешно сгенерированы.';
$a->strings['Two-factor recovery codes'] = 'Коды восстановления для ДФА';
$a->strings['Generate new recovery codes'] = 'Сгенерировать новые коды восстановления.';
$a->strings['Last Use'] = 'Последнее использование';
$a->strings['Remove All'] = 'Удалить все';
$a->strings['Two-factor authentication successfully activated.'] = 'Двухфакторная аутентификация успешно включена.';
$a->strings['Two-factor code verification'] = 'Проверка кода второго фактора';
$a->strings['Export account'] = 'Экспорт аккаунта';
$a->strings['Export your account info and contacts. Use this to make a backup of your account and/or to move it to another server.'] = 'Экспорт ваших регистрационных данные и контактов. Используйте, чтобы создать резервную копию вашего аккаунта и/или переместить его на другой сервер.';
$a->strings['Export all'] = 'Экспорт всего';
$a->strings['Export your account info, contacts and all your items as json. Could be a very big file, and could take a lot of time. Use this to make a full backup of your account (photos are not exported)'] = 'Выгрузить информацию о вашей учётной записи, контактах и всех ваших записях как файл JSON. Это может занять много времени и создать очень большой файл. Используйте это для создания резервной копии вашей учётной записи (изображения в неё не войдут).';
$a->strings['Export Contacts to CSV'] = 'Экспорт контактов в CSV';
$a->strings['Export the list of the accounts you are following as CSV file. Compatible to e.g. Mastodon.'] = 'Выгрузить список пользователей, на которых вы подписаны, в CSV-файл. Совместимо с Mastodon и др.';
$a->strings['Privacy Statement'] = 'Положение о конфиденциальности';
$a->strings['Welcome to Friendica'] = 'Добро пожаловать в Friendica';
$a->strings['New Member Checklist'] = 'Новый контрольный список участников';
$a->strings['We would like to offer some tips and links to help make your experience enjoyable. Click any item to visit the relevant page. A link to this page will be visible from your home page for two weeks after your initial registration and then will quietly disappear.'] = 'Мы хотели бы предложить некоторые советы и ссылки, помогающие сделать вашу работу приятнее. Нажмите на любой элемент, чтобы посетить соответствующую страницу. Ссылка на эту страницу будет видна на  вашей домашней странице в течение двух недель после первоначальной регистрации, а затем она исчезнет.';
$a->strings['Getting Started'] = 'Начало работы';
$a->strings['Friendica Walk-Through'] = 'Знакомство с Friendica';
$a->strings['On your <em>Quick Start</em> page - find a brief introduction to your profile and network tabs, make some new connections, and find some groups to join.'] = 'На вашей странице <em>Быстрый старт</em> - можно найти краткое введение в ваш профиль и сетевые закладки, создать новые связи, и найти группы, чтобы присоединиться к ним.';
$a->strings['Go to Your Settings'] = 'Перейти к вашим настройкам';
$a->strings['On your <em>Settings</em> page -  change your initial password. Also make a note of your Identity Address. This looks just like an email address - and will be useful in making friends on the free social web.'] = 'На вашей странице <em>Настройки</em> - вы можете изменить свой первоначальный пароль. Также обратите внимание на ваш личный адрес. Он выглядит так же, как адрес электронной почты - и будет полезен для поиска друзей в свободной социальной сети.';
$a->strings['Review the other settings, particularly the privacy settings. An unpublished directory listing is like having an unlisted phone number. In general, you should probably publish your listing - unless all of your friends and potential friends know exactly how to find you.'] = 'Просмотрите другие установки, в частности, параметры конфиденциальности. Неопубликованные пункты каталога с частными номерами телефона. В общем, вам, вероятно, следует опубликовать свою информацию - если все ваши друзья и потенциальные друзья точно знают, как вас найти.';
$a->strings['Upload a profile photo if you have not done so already. Studies have shown that people with real photos of themselves are ten times more likely to make friends than people who do not.'] = 'Загрузите фотографию профиля, если вы еще не сделали это. Исследования показали, что люди с реальными фотографиями имеют в десять раз больше шансов подружиться, чем люди, которые этого не делают.';
$a->strings['Edit Your Profile'] = 'Редактировать профиль';
$a->strings['Edit your <strong>default</strong> profile to your liking. Review the settings for hiding your list of friends and hiding the profile from unknown visitors.'] = 'Отредактируйте профиль <strong>по умолчанию</strong> на свой ​​вкус. Просмотрите установки для сокрытия вашего списка друзей и сокрытия профиля от неизвестных посетителей.';
$a->strings['Profile Keywords'] = 'Ключевые слова профиля';
$a->strings['Set some public keywords for your profile which describe your interests. We may be able to find other people with similar interests and suggest friendships.'] = 'Установите некоторые публичные ключевые слова для вашего профиля, которые описывают ваши интересы. Мы можем помочь найти других людей со схожими интересами и предложить дружбу.';
$a->strings['Connecting'] = 'Подключение';
$a->strings['Importing Emails'] = 'Импортирование Email-ов';
$a->strings['Enter your email access information on your Connector Settings page if you wish to import and interact with friends or mailing lists from your email INBOX'] = 'Введите информацию о доступе к вашему email на странице настроек вашего коннектора, если вы хотите импортировать, и общаться с друзьями или получать рассылки на ваш ящик электронной почты';
$a->strings['Go to Your Contacts Page'] = 'Перейти на страницу ваших контактов';
$a->strings['Your Contacts page is your gateway to managing friendships and connecting with friends on other networks. Typically you enter their address or site URL in the <em>Add New Contact</em> dialog.'] = 'Ваша страница контактов - это ваш шлюз к управлению дружбой и общением с друзьями в других сетях. Обычно вы вводите свой ​​адрес или адрес сайта в диалог <em>Добавить новый контакт</em>.';
$a->strings['Go to Your Site\'s Directory'] = 'Перейти в каталог вашего сайта';
$a->strings['The Directory page lets you find other people in this network or other federated sites. Look for a <em>Connect</em> or <em>Follow</em> link on their profile page. Provide your own Identity Address if requested.'] = 'На странице каталога вы можете найти других людей в этой сети или на других похожих сайтах. Ищите ссылки <em>Подключить</em> или <em>Подписаться</em> на страницах их профилей. Укажите свой собственный адрес идентификации, если требуется.';
$a->strings['Finding New People'] = 'Поиск людей';
$a->strings['On the side panel of the Contacts page are several tools to find new friends. We can match people by interest, look up people by name or interest, and provide suggestions based on network relationships. On a brand new site, friend suggestions will usually begin to be populated within 24 hours.'] = 'На боковой панели страницы Контакты есть несколько инструментов, чтобы найти новых друзей. Мы можем  искать по соответствию интересам, посмотреть людей по имени или интересам, и внести предложения на основе сетевых отношений. На новом сайте, предложения дружбы, как правило, начинают заполняться в течение 24 часов.';
$a->strings['Group Your Contacts'] = 'Группа "ваши контакты"';
$a->strings['Once you have made some friends, organize them into private conversation groups from the sidebar of your Contacts page and then you can interact with each group privately on your Network page.'] = 'После того, как вы найдете несколько друзей, организуйте их в группы частных бесед в боковой панели на странице Контакты, а затем вы можете взаимодействовать с каждой группой приватно или на вашей странице Сеть.';
$a->strings['Why Aren\'t My Posts Public?'] = 'Почему мои записи не публичные?';
$a->strings['Friendica respects your privacy. By default, your posts will only show up to people you\'ve added as friends. For more information, see the help section from the link above.'] = 'Friendica уважает вашу приватность. По умолчанию, ваши сообщения будут показываться только для людей, которых вы добавили в список друзей. Для получения дополнительной информации см. раздел справки по ссылке выше.';
$a->strings['Getting Help'] = 'Получить помощь';
$a->strings['Go to the Help Section'] = 'Перейти в раздел справки';
$a->strings['Our <strong>help</strong> pages may be consulted for detail on other program features and resources.'] = 'Наши страницы <strong>помощи</strong> могут проконсультировать о подробностях и возможностях программы и ресурса.';
$a->strings['{0} wants to follow you'] = '{0} хочет подписаться на вас';
$a->strings['{0} has started following you'] = '{0} подписался на вас';
$a->strings['%s liked %s\'s post'] = '%s нравится %s сообшение';
$a->strings['%s disliked %s\'s post'] = '%s не нравится сообщение %s';
$a->strings['%s is attending %s\'s event'] = '%s будет присутствовать на событии %s';
$a->strings['%s is not attending %s\'s event'] = '%s не будет присутствовать на событии %s';
$a->strings['%s may attending %s\'s event'] = '%s возможно будет присутствовать на событии %s';
$a->strings['%s is now friends with %s'] = '%s теперь друзья с %s';
$a->strings['%s commented on %s\'s post'] = '%s прокомментировал %s сообщение';
$a->strings['%s created a new post'] = '%s написал новое сообщение';
$a->strings['Friend Suggestion'] = 'Предложение в друзья';
$a->strings['Friend/Connect Request'] = 'Запрос в друзья / на подключение';
$a->strings['New Follower'] = 'Новый подписчик';
$a->strings['%1$s wants to follow you'] = '%1$s хочет подписаться на вас.';
$a->strings['%1$s has started following you'] = '%1$s подписался на вас';
$a->strings['%1$s liked your comment on %2$s'] = '%1$s нравится ваш комментарий %2$s';
$a->strings['%1$s liked your post %2$s'] = '%1$s нравится ваша запись %2$s';
$a->strings['%1$s disliked your comment on %2$s'] = '%1$s не нравится ваш комментарий %2$s';
$a->strings['%1$s disliked your post %2$s'] = '%1$s не нравится ваша запись %2$s';
$a->strings['%1$s shared your comment %2$s'] = '%1$s поделился вашим комментарием %2$s';
$a->strings['%1$s shared your post %2$s'] = '%1$s поделился вашей записью %2$s';
$a->strings['%1$s shared the post %2$s from %3$s'] = '%1$s поделился записью %2$s от %3$s';
$a->strings['%1$s shared a post from %3$s'] = '%1$s поделился записью от %3$s';
$a->strings['%1$s shared the post %2$s'] = '%1$s поделился записью %2$s';
$a->strings['%1$s shared a post'] = '%1$s поделился записью';
$a->strings['%1$s wants to attend your event %2$s'] = '%1$s хочет прийти на ваше событие %2$s';
$a->strings['%1$s does not want to attend your event %2$s'] = '%1$s не хочет приходить на ваше событие %2$s';
$a->strings['%1$s maybe wants to attend your event %2$s'] = '%1$s возможно захочет прийти на в ваше событие %2$s';
$a->strings['%1$s tagged you on %2$s'] = '%1$s отметил(а) вас в %2$s';
$a->strings['%1$s replied to you on %2$s'] = '%1$s ответил(а) на %2$s';
$a->strings['%1$s commented in your thread %2$s'] = '%1$s ответил(а) в вашем обсуждении %2$s';
$a->strings['%1$s commented on your comment %2$s'] = '%1$s ответил(а) на ваш комментарий %2$s';
$a->strings['%1$s commented in their thread %2$s'] = '%1$s ответил(а) в своём обсуждении %2$s';
$a->strings['%1$s commented in their thread'] = '%1$s ответил(а) в своём обсуждении';
$a->strings['%1$s commented in the thread %2$s from %3$s'] = '%1$s ответил(а) в обсуждении %2$s от %3$s';
$a->strings['%1$s commented in the thread from %3$s'] = '%1$s ответил(а) в обсуждении от %3$s';
$a->strings['%1$s commented on your thread %2$s'] = '%1$s ответил(а) в вашем обсуждении %2$s';
$a->strings['[Friendica:Notify]'] = '[Friendica]';
$a->strings['%s New mail received at %s'] = '%s Новая почта получена в %s';
$a->strings['%1$s sent you a new private message at %2$s.'] = '%1$s отправил вам новое личное сообщение на %2$s.';
$a->strings['a private message'] = 'личное сообщение';
$a->strings['%1$s sent you %2$s.'] = '%1$s послал вам %2$s.';
$a->strings['Please visit %s to view and/or reply to your private messages.'] = 'Пожалуйста, посетите %s для просмотра и/или ответа на личные сообщения.';
$a->strings['%1$s commented on %2$s\'s %3$s %4$s'] = '%1$s прокомментировал(а) %2$s %3$s %4$s';
$a->strings['%1$s commented on your %2$s %3$s'] = '%1$s прокомментировал(а) ваш %2$s %3$s';
$a->strings['%1$s commented on their %2$s %3$s'] = '%1$s прокомментировал(а) свой %2$s %3$s';
$a->strings['%1$s Comment to conversation #%2$d by %3$s'] = '%1$s Комментариев к разговору #%2$d от %3$s';
$a->strings['%s commented on an item/conversation you have been following.'] = '%s оставил комментарий к элементу/беседе, за которой вы следите.';
$a->strings['Please visit %s to view and/or reply to the conversation.'] = 'Пожалуйста посетите %s для просмотра и/или ответа в беседу.';
$a->strings['%s %s posted to your profile wall'] = '%s %s размещены на стене вашего профиля';
$a->strings['%1$s posted to your profile wall at %2$s'] = '%1$s написал на вашей стене на %2$s';
$a->strings['%1$s posted to [url=%2$s]your wall[/url]'] = '%1$s написал на [url=%2$s]вашей стене[/url]';
$a->strings['%s Introduction received'] = '%s Входящих получено';
$a->strings['You\'ve received an introduction from \'%1$s\' at %2$s'] = 'Вы получили запрос от \'%1$s\' на %2$s';
$a->strings['You\'ve received [url=%1$s]an introduction[/url] from %2$s.'] = 'Вы получили [url=%1$s]запрос[/url] от %2$s.';
$a->strings['You may visit their profile at %s'] = 'Вы можете посмотреть его профиль здесь %s';
$a->strings['Please visit %s to approve or reject the introduction.'] = 'Посетите %s для подтверждения или отказа запроса.';
$a->strings['%s A new person is sharing with you'] = '%s Новый человек поделился с Вами';
$a->strings['%1$s is sharing with you at %2$s'] = '%1$s делится с вами на %2$s';
$a->strings['%s You have a new follower'] = '%s У Вас новый подписчик';
$a->strings['You have a new follower at %2$s : %1$s'] = 'У вас новый подписчик на %2$s : %1$s';
$a->strings['%s Friend suggestion received'] = '%s Получено дружеское приглашение';
$a->strings['You\'ve received a friend suggestion from \'%1$s\' at %2$s'] = 'Вы получили предложение дружбы от \'%1$s\' на %2$s';
$a->strings['You\'ve received [url=%1$s]a friend suggestion[/url] for %2$s from %3$s.'] = 'У вас [url=%1$s]новое предложение дружбы[/url] для %2$s от %3$s.';
$a->strings['Name:'] = 'Имя:';
$a->strings['Photo:'] = 'Фото:';
$a->strings['Please visit %s to approve or reject the suggestion.'] = 'Пожалуйста, посетите %s для подтверждения, или отказа запроса.';
$a->strings['%s Connection accepted'] = '%s Соединение принято';
$a->strings['\'%1$s\' has accepted your connection request at %2$s'] = '\'%1$s\' принял соединение с вами на %2$s';
$a->strings['%2$s has accepted your [url=%1$s]connection request[/url].'] = '%2$s принял ваше [url=%1$s]предложение о соединении[/url].';
$a->strings['You are now mutual friends and may exchange status updates, photos, and email without restriction.'] = 'Вы теперь взаимные друзья и можете обмениваться статусами, фотографиями и письмами без ограничений.';
$a->strings['Please visit %s if you wish to make any changes to this relationship.'] = 'Посетите %s если вы хотите сделать изменения в этом отношении.';
$a->strings['\'%1$s\' has chosen to accept you a fan, which restricts some forms of communication - such as private messaging and some profile interactions. If this is a celebrity or community page, these settings were applied automatically.'] = '%1$s решил принять приглашение и пометил вас как фаната, что запрещает некоторые формы общения - например, личные сообщения и некоторые действия с профилем. Если эта страница знаменитости или сообщества, то эти настройки были применены автоматически.';
$a->strings['\'%1$s\' may choose to extend this into a two-way or more permissive relationship in the future.'] = '%1$s может расширить взаимоотношения до более мягких в будущем.';
$a->strings['Please visit %s  if you wish to make any changes to this relationship.'] = 'Посетите %s если вы хотите сделать изменения в этом отношении.';
$a->strings['registration request'] = 'запрос регистрации';
$a->strings['You\'ve received a registration request from \'%1$s\' at %2$s'] = 'Вы получили запрос на регистрацию от \'%1$s\' на %2$s';
$a->strings['You\'ve received a [url=%1$s]registration request[/url] from %2$s.'] = 'Вы получили [url=%1$s]запрос регистрации[/url] от %2$s.';
$a->strings['Full Name:	%s
Site Location:	%s
Login Name:	%s (%s)'] = 'Полное имя:	%s
Расположение:	%s
Имя для входа:	%s (%s)';
$a->strings['Please visit %s to approve or reject the request.'] = 'Пожалуйста, посетите %s чтобы подтвердить или отвергнуть запрос.';
$a->strings['%s %s tagged you'] = '%s %s отметил(и) Вас';
$a->strings['%s %s shared a new post'] = '%s %s поделился(-ась) новым сообщением';
$a->strings['This message was sent to you by %s, a member of the Friendica social network.'] = 'Это сообщение было отправлено вам %s, участником социальной сети Friendica.';
$a->strings['You may visit them online at %s'] = 'Вы можете посетить их в онлайне на %s';
$a->strings['Please contact the sender by replying to this post if you do not wish to receive these messages.'] = 'Пожалуйста, свяжитесь с отправителем, ответив на это сообщение, если вы не хотите получать эти сообщения.';
$a->strings['%s posted an update.'] = '%s отправил/а/ обновление.';
$a->strings['Private Message'] = 'Приватная запись';
$a->strings['Public Message'] = 'Публичная запись';
$a->strings['Unlisted Message'] = 'Запись без публикации в общих лентах';
$a->strings['This entry was edited'] = 'Эта запись была отредактирована';
$a->strings['Connector Message'] = 'Сообщение-коннектор';
$a->strings['Edit'] = 'Редактировать';
$a->strings['Delete globally'] = 'Удалить везде';
$a->strings['Remove locally'] = 'Убрать для себя';
$a->strings['Block %s'] = 'Заблокировать %s';
$a->strings['Save to folder'] = 'Сохранить в папку';
$a->strings['I will attend'] = 'Я буду';
$a->strings['I will not attend'] = 'Меня не будет';
$a->strings['I might attend'] = 'Возможно';
$a->strings['Ignore thread'] = 'Игнорировать обсуждение';
$a->strings['Unignore thread'] = 'Не игнорировать обсуждение';
$a->strings['Toggle ignore status'] = 'Переключить игнорирование';
$a->strings['Add star'] = 'Добавить в Избранное';
$a->strings['Remove star'] = 'Убрать из Избранного';
$a->strings['Toggle star status'] = 'Добавить/убрать из Избранного';
$a->strings['Pin'] = 'Закрепить';
$a->strings['Unpin'] = 'Открепить';
$a->strings['Toggle pin status'] = 'Закрепить/открепить';
$a->strings['Pinned'] = 'Закреплено';
$a->strings['Add tag'] = 'Добавить тег';
$a->strings['Quote share this'] = 'Поделиться с комментарием';
$a->strings['Quote Share'] = 'Цитировать';
$a->strings['Reshare this'] = 'Поделиться этим с подписчиками';
$a->strings['Reshare'] = 'Поделиться';
$a->strings['Cancel your Reshare'] = 'Отменить репост';
$a->strings['Unshare'] = 'Отменить репост';
$a->strings['%s (Received %s)'] = '%s (Получено %s)';
$a->strings['Comment this item on your system'] = 'Прокомментировать это на вашем узле';
$a->strings['Remote comment'] = 'Загруженный комментарий';
$a->strings['Share via ...'] = 'Отправить в ...';
$a->strings['Share via external services'] = 'Поделиться через сторонние сервисы';
$a->strings['to'] = 'к';
$a->strings['via'] = 'через';
$a->strings['Wall-to-Wall'] = 'Стена-на-Стену';
$a->strings['via Wall-To-Wall:'] = 'через Стена-на-Стену:';
$a->strings['Reply to %s'] = 'Ответ %s';
$a->strings['More'] = 'Ещё';
$a->strings['Notifier task is pending'] = 'Постановка в очередь';
$a->strings['Delivery to remote servers is pending'] = 'Ожидается отправка адресатам';
$a->strings['Delivery to remote servers is underway'] = 'Отправка адресатам в процессе';
$a->strings['Delivery to remote servers is mostly done'] = 'Отправка адресатам почти завершилась';
$a->strings['Delivery to remote servers is done'] = 'Отправка адресатам завершена';
$a->strings['%d comment'] = [
	0 => '%d комментарий',
	1 => '%d комментариев',
	2 => '%d комментариев',
	3 => '%d комментариев',
];
$a->strings['Show more'] = 'Показать больше';
$a->strings['Show fewer'] = 'Показать меньше';
$a->strings['%s is now following %s.'] = '%s теперь подписан на %s.';
$a->strings['following'] = 'следует';
$a->strings['%s stopped following %s.'] = '%s отписался от %s.';
$a->strings['stopped following'] = 'отписка от';
$a->strings['Login failed.'] = 'Войти не удалось.';
$a->strings['Login failed. Please check your credentials.'] = 'Ошибка входа. Пожалуйста, проверьте данные для входа.';
$a->strings['Welcome %s'] = 'Добро пожаловать, %s';
$a->strings['Please upload a profile photo.'] = 'Пожалуйста, загрузите фотографию профиля.';
$a->strings['Friendica Notification'] = 'Уведомление Friendica';
$a->strings['%1$s, %2$s Administrator'] = '%1$s, %2$s Администратор';
$a->strings['%s Administrator'] = '%s Администратор';
$a->strings['thanks'] = 'спасибо';
$a->strings['YYYY-MM-DD or MM-DD'] = 'YYYY-MM-DD или MM-DD';
$a->strings['Time zone: <strong>%s</strong> <a href="%s">Change in Settings</a>'] = 'Временная зона: <strong>%s</strong> <a href="%s">Изменить в Настройках</a>';
$a->strings['never'] = 'никогда';
$a->strings['less than a second ago'] = 'менее секунды назад';
$a->strings['year'] = 'год';
$a->strings['years'] = 'лет';
$a->strings['months'] = 'мес.';
$a->strings['weeks'] = 'нед.';
$a->strings['days'] = 'дней';
$a->strings['hour'] = 'час';
$a->strings['hours'] = 'час.';
$a->strings['minute'] = 'мин.';
$a->strings['minutes'] = 'мин.';
$a->strings['second'] = 'секунда';
$a->strings['seconds'] = 'сек.';
$a->strings['in %1$d %2$s'] = 'через %1$d %2$s';
$a->strings['%1$d %2$s ago'] = '%1$d %2$s назад';
$a->strings['(no subject)'] = '(нет темы)';
$a->strings['Notification from Friendica'] = 'Уведомление от Friendica';
$a->strings['Empty Post'] = 'Пустая запись';
$a->strings['default'] = 'По умолчанию';
$a->strings['greenzero'] = 'greenzero';
$a->strings['purplezero'] = 'purplezero';
$a->strings['easterbunny'] = 'easterbunny';
$a->strings['darkzero'] = 'darkzero';
$a->strings['comix'] = 'comix';
$a->strings['slackr'] = 'slackr';
$a->strings['Variations'] = 'Вариации';
$a->strings['Light (Accented)'] = 'Светлая (с акцентами)';
$a->strings['Dark (Accented)'] = 'Тёмная (с акцентами)';
$a->strings['Black (Accented)'] = 'Чёрная (с акцентами)';
$a->strings['Note'] = 'Примечание';
$a->strings['Check image permissions if all users are allowed to see the image'] = 'Проверьте настройки разрешений изображения, оно должно быть видно всем пользователям';
$a->strings['Custom'] = 'Другое';
$a->strings['Legacy'] = 'Традиционная';
$a->strings['Accented'] = 'С акцентами';
$a->strings['Select color scheme'] = 'Выбрать цветовую схему';
$a->strings['Select scheme accent'] = 'Выберите акцент темы';
$a->strings['Blue'] = 'Синий';
$a->strings['Red'] = 'Красный';
$a->strings['Purple'] = 'Фиолетовый';
$a->strings['Green'] = 'Зелёный';
$a->strings['Pink'] = 'Розовый';
$a->strings['Copy or paste schemestring'] = 'Скопируйте или вставьте код темы';
$a->strings['You can copy this string to share your theme with others. Pasting here applies the schemestring'] = 'Вы можете скопировать эту строку и поделиться настройками вашей темы с другими. Вставка строки здесь применяет настройки оформления темы.';
$a->strings['Navigation bar background color'] = 'Цвет фона навигационной панели';
$a->strings['Navigation bar icon color '] = 'Цвет значков навигационной панели';
$a->strings['Link color'] = 'Цвет ссылок';
$a->strings['Set the background color'] = 'Установить цвет фона';
$a->strings['Content background opacity'] = 'Прозрачность фона основного содержимого';
$a->strings['Set the background image'] = 'Установить фоновую картинку';
$a->strings['Background image style'] = 'Стиль фонового изображения';
$a->strings['Always open Compose page'] = 'Всегда открывать страницу редактора';
$a->strings['The New Post button always open the <a href="/compose">Compose page</a> instead of the modal form. When this is disabled, the Compose page can be accessed with a middle click on the link or from the modal.'] = 'Кнопка создания новой записи всегда будет открывать <a href="/compose">страницу редактора</a> вместо всплывающего окна. Когда это отключено, страница редактора может быть развёрнута из всплывающего окна, либо при открытии ссылки кнопки в новой вкладке.';
$a->strings['Login page background image'] = 'Фоновое изображение страницы входа';
$a->strings['Login page background color'] = 'Цвет фона страницы входа';
$a->strings['Leave background image and color empty for theme defaults'] = 'Оставьте настройки фоновых цвета и изображения пустыми, чтобы применить настройки темы по-умолчанию.';
$a->strings['Top Banner'] = 'Верхний баннер';
$a->strings['Resize image to the width of the screen and show background color below on long pages.'] = 'Растянуть изображение по ширине экрана и показать заливку цветом под ним на длинных страницах.';
$a->strings['Full screen'] = 'Во весь экран';
$a->strings['Resize image to fill entire screen, clipping either the right or the bottom.'] = 'Растянуть изображение во весь экран, обрезав его часть справа или снизу.';
$a->strings['Single row mosaic'] = 'Мозаика в один ряд';
$a->strings['Resize image to repeat it on a single row, either vertical or horizontal.'] = 'Растянуть и размножить изображение в один ряд, вертикально или горизонтально.';
$a->strings['Mosaic'] = 'Мозаика';
$a->strings['Repeat image to fill the screen.'] = 'Размножить изображение по всему экрану.';
$a->strings['Skip to main content'] = 'Пропустить до основного содержимого';
$a->strings['Back to top'] = 'Наверх';
$a->strings['Guest'] = 'Гость';
$a->strings['Visitor'] = 'Посетитель';
$a->strings['Alignment'] = 'Выравнивание';
$a->strings['Left'] = 'Слева';
$a->strings['Center'] = 'Центр';
$a->strings['Color scheme'] = 'Цветовая схема';
$a->strings['Posts font size'] = 'Размер шрифта записей';
$a->strings['Textareas font size'] = 'Размер шрифта текстовых полей';
$a->strings['Comma separated list of helper forums'] = 'Разделенный запятыми список форумов помощи';
$a->strings['don\'t show'] = 'не показывать';
$a->strings['show'] = 'показывать';
$a->strings['Set style'] = 'Установить стиль';
$a->strings['Community Pages'] = 'Страницы сообщества';
$a->strings['Community Profiles'] = 'Профили сообщества';
$a->strings['Help or @NewHere ?'] = 'Помощь';
$a->strings['Connect Services'] = 'Подключить службы';
$a->strings['Find Friends'] = 'Найти друзей';
$a->strings['Last users'] = 'Последние пользователи';
$a->strings['Quick Start'] = 'Быстрый старт';
