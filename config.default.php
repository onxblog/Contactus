<?php
//Что значит каждый параметр можно посмотреть на страничке http://www.pitin.su/news-139-0-376.htm

// LDAP
//----------------------------------------------------------------------------
$LDAPServer='dc.domain.ru';	// Адрес сервера LDAP (Контроллер домена).
$LDAPUser='domain_read_user@domain.ru'; // Учетная запись c правом чтения из LDAP. Можно писать в формате user_for_reading_ldap@YOUR_DOMAIN
$LDAPPassword='password_for_domain_read_user'; // Пароль для учетной записи, указанной в переменной $LDAPUser
$LDAP_WRITE_USER='domain_write_user@domain.ru';	// Учетная запись c правами записи в LDAP.
$LDAP_WRITE_PASSWORD='password_for_domain_write_user'; // Пароль для учетной записи c правами записи в LDAP, указанной в переменной $LDAP_WRITE_USER.
$OU="OU=orgunit,DC=domain,DC=ru"; // В каком Organization Unit искать сотрудников. Оставляем двойные кавычки (внутри, если есть пробелы - обязательно заключать в одинарные кавычки).
$DIS_USERS_COND="(!(useraccountcontrol:1.2.840.113556.1.4.803:=2))(!(useraccountcontrol:1.2.840.113556.1.4.803:=16))"; // Условие фильтра LDAP, которое должно препятствовать выводу заблокированных и отключенных в Active Directory пользователей. По умолчанию используется значение «(!(useraccountcontrol:1.2.840.113556.1.4.803:=2))(!(useraccountcontrol:1.2.840.113556.1.4.803:=16))»
$LDAP_SIZE_LIMIT_COMPATIBILITY=false; //Сделать возможным выбирать большее количество сотрудников чем указано в SIZE LIMIT сервера? См. также $LDAP_SIZE_LIMIT_PAGE_DIVIDER_FIELD
//----------------------------------------------------------------------------


// LDAP FIELDS
//----------------------------------------------------------------------------
$LDAP_DISTINGUISHEDNAME_FIELD="distinguishedname";
$LDAP_USERPRINCIPALNAME_FIELD="userprincipalname";
$LDAP_COMPANY_FIELD="company"; //Атрибут LDAP в котором будет хранится название компании сотрудника
$LDAP_NAME_FIELD="name";
$LDAP_OBJECTCLASS_FIELD="objectclass";
$LDAP_CN_FIELD="cn";
$LDAP_TITLE_FIELD="title"; //Атрибут LDAP в котором будет должность сотрудника
$LDAP_DEPARTMENT_FIELD="department"; //Атрибут LDAP в котором будет отдел сотрудника
$LDAP_MANAGER_FIELD="manager"; //Атрибут LDAP в котором будет хранится ссылка на руководителя сотрудника
$LDAP_HOMEPHONE_FIELD="homephone"; //Атрибут LDAP в котором будет хранится домашний телефон сотрудника
$LDAP_SN_FIELD="sn"; //Атрибут LDAP в котором будет хранится фамилия сотрудника
$LDAP_INITIALS_FIELD="initials"; //Атрибут LDAP в котором будет хранится инициалы сотрудника
$LDAP_DEPUTY_FIELD="extensionattribute15"; //Атрибут LDAP в котором будет хранится ссылка на замещающего на время отпуска
$LDAP_FAVOURITE_USER_FIELD="alexFavorites"; //Атрибут LDAP в котором будут хранится ссылки на избранных сотрудником сотрудников
$LDAP_GUID_FIELD="objectguid";
$LDAP_SIZE_LIMIT_PAGE_DIVIDER_FIELD="displayname";  //Атрибут LDAP по которому будет разбиваться выборка сотрудников из LDAP (что бы обойти серверный SIZE LIMIT)
$LDAP_CREATED_DATE_FIELD="whenCreated"; //Атрибут LDAP в котором будет хранится дата создания учетной записи
$LDAP_BIRTH_FIELD="extensionattribute10"; //Параметр LDAP в котором будет хранится дата рождения сотрудника
$LDAP_COMPUTER_FIELD="wwwhomepage"; // Поле LDAP (AD), которое будет использоваться для хранения имени компьютера пользователя. Сотруднику должна быть разрешена запись в данное поле. По умолчанию используется значение {wwwhomepage}.
$DISPLAY_NAME_FIELD="displayname";	// Поле LDAP (AD), которое будет использоваться для хранения ФИО сотрудника. По умолчанию используется значение {displayname}. Менять его не рекомендуется.
$LDAP_DATA_FIELD="description"; // Поле LDAP (AD), которое будет использоваться для хранения различных данных о сотруднике, для которых не предусмотрены поля в схеме AD по умолчанию. Данное поле должно поддерживать запись нескольких значение. Какие поля в AD поддерживают такую запись можно посмотреть на странице http://msdn.microsoft.com/en-us/library/ms676199.aspx (параметр Is-Single-Valued). По умолчанию используется значение {description}.
$LDAP_MAIL_FIELD="mail"; // Атрибут LDAP, в котором должен храниться адрес электронной почты. По умолчанию используется значение {mail}.
$LDAP_INTERNAL_PHONE_FIELD="othertelephone";	// Атрибут LDAP, в котором должен храниться внутренний номер телефона. По умолчанию используется значение {othertelephone}.
$LDAP_CITY_PHONE_FIELD="telephonenumber";		// Атрибут LDAP, в котором должен храниться городской номер телефона. По умолчанию используется значение {telephonenumber}.
$LDAP_CELL_PHONE_FIELD="mobile";	// Атрибут LDAP, в котором должен храниться мобильный номер телефона. По умолчанию используется значение {mobile}.
$LDAP_ST_DATE_VACATION_FIELD="extensionattribute13";	// Атрибут LDAP, в котором должна храниться дата начала отпуска сотрудника.
$LDAP_END_DATE_VACATION_FIELD="extensionattribute14";	// Атрибут LDAP, в котором должна храниться дата окончания отпуска сотрудника.
$LDAP_AVATAR_FIELD="thumbnailphoto"; //Атрибут LDAP в котором будет хранится аватарка пользователя в бинарном виде
$LDAP_PHOTO_FIELD="jpegphoto"; //Атрибут LDAP в котором будет хранится полное фото пользователя бинарном виде
//----------------------------------------------------------------------------

//Пользователи, которые имеют право изменять данные о сотрудниках в AD
//----------------------------------------------------------------------------
$ADMIN_LOGINS[]='first_admin@domain.ru';
$ADMIN_LOGINS[]='second_admin@domain.ru';
$ADMIN_LOGINS[]='third_admin@domain.ru';
//----------------------------------------------------------------------------

// Дни рождений
//----------------------------------------------------------------------------
$NUM_ALARM_DAYES=14; //Количество дней, за которое необходимо предупреждать о днях рождениях.
$NEAR_BIRTHDAYS=true; //Выводить ближайшее дни рождения (true) или нет (false)?
$BIRTH_DATE_FORMAT="dd.mm.yyyy"; // Формат хранения даты рождения в атрибуте LDAP. Доступные значения: «yyyy-mm-dd» и «dd.mm.yyyy»
$BIRTH_VIS_ROW_NUM=3; // Количество видимых предупреждений о ближайших днях рождения. Остальные скрываются под стрелочку.
//----------------------------------------------------------------------------

// Различные данные о пользователе
//----------------------------------------------------------------------------
$USE_DISPLAY_NAME=true;	// Если параметр равен «true», то в качестве ФИО сотрудника справочник будет использовать значение из поля AD, указанного в параметре $DISPLAY_NAME_FIELD, если «false» — то ФИО будет формироваться из значения указанного в атрибуте {distinguishedName}.
//----------------------------------------------------------------------------

// Имя компьютера пользователя
//----------------------------------------------------------------------------
$SHOW_COMPUTER_FIELD=false;
$SHOW_DEPUTY=true;
$SHOW_DEPUTY_IN_LISTS=false;
//----------------------------------------------------------------------------


// Номера телефонов
//----------------------------------------------------------------------------
$HIDE_CITY_PHONE_FIELD=false;		// Скрыть городской номер телефона (true) или нет (false)?
$HIDE_CELL_PHONE_FIELD=false;		// Скрыть сотовый номер телефона (true) или нет (false)?
$FORMAT_CITY_PHONE=true;	// Использование форматирования для городского номера телефона с помощью функции (true) или оставить, как есть в ldap (false)?
$FORMAT_CELL_PHONE=true;	// Использование форматирования для сотового номера телефона с помощью функции (true) или оставить, как есть в ldap (false)?
$FORMAT_INTERNAL_PHONE=true;	// Использование форматирования внутреннего (офисного) номера телефона с помощью функции (true) или оставить, как есть в ldap (false)?
$FORMAT_HOME_PHONE=true;	// Использование форматирования домашнего номера телефона с помощью функции (true) или оставить, как есть в ldap (false)?
$USE_PHONE_CODES_DESCRIPTION=true;	// Использовать определитель города или оператора по номеру во всплывающей подсказке (true) или нет (false)? Игнорируется, если $FORMAT_*_PHONE=false;
$FORMAT_PHONE_BLOCKLEN=3;	// Размер блока разбивки телефона. Пример: XXX-XX-XX (2), XXXX-XXX (3). Если длина номера нечетная, первая цифра всегда будет склеена с первым блоком
//----------------------------------------------------------------------------

// Отпуск сотрудников
//----------------------------------------------------------------------------
$VACATION=true;	// Если параметр равен «true», то справочник будет показывать отпуска сотрудников, давать возможность сотрудникам менять свой отпуск и т.д, если «false» — нет. По умолчанию используется значение «true».
$VAC_CLAIM_ALARM=true;	// Если параметр равен «true», то справочник будет предупреждать о необходимости написать заявление на отпуск, если «false» — нет. По умолчанию используется значение «true».
$VAC_CLAIM_ALARM_DAYES_FROM=21;	// За какое количество дней необходимо начинать предупреждать сотрудника написать заявление на отпуск. По умолчанию используется значение «21».
$VAC_CLAIM_ALARM_DAYES_TO=13;	// За какое количество дней необходимо закончить предупреждать сотрудника написать заявление на отпуск. По умолчанию используется значение «13».
$VAC_DATE_FORMAT="dd.mm.yyyy";

$SHOW_PREV_VAC['si_employeeview']=false;
$SHOW_NEXT_VAC['si_employeeview']=false;
$SHOW_CURRENT_VAC['si_employeeview']=true;

$SHOW_PREV_VAC['si_alph_staff_list']=false;
$SHOW_NEXT_VAC['si_alph_staff_list']=false;
$SHOW_CURRENT_VAC['si_alph_staff_list']=true;

$SHOW_PREV_VAC['si_dep_staff_list']=false;
$SHOW_NEXT_VAC['si_dep_staff_list']=false;
$SHOW_CURRENT_VAC['si_dep_staff_list']=true;
//----------------------------------------------------------------------------

// Вкладки организации и ее филиалов
//----------------------------------------------------------------------------
/* Ключ массива - название организации без ковычек. 
По данной строке осуществляется выборка записей из LDAP. 
Должно являтся подстрокой названия организации, хранящейся в LDAP. 
Значение - то как данная организация будет отображаться в закладках справочника 
Можно отображать не только организацию но и любые вкладки по атрибуту.
*/

$BOOKMARK_NAMES['company']['Рога']="Рога и копыта";
$BOOKMARK_NAMES['company']['Интегра)']="Интегра групп";
$BOOKMARK_NAMES['company']['фгу']="ФГУ - распил бабла";

$BOOKMARK_NAMES['mobile']['*']="Все";
$BOOKMARK_NAMES['mobile']['902']="902";
$BOOKMARK_NAMES['mobile']['7 950']="+7 950";

$BOOKMARK_NAME_EXACT_FIT['company']=true;
$BOOKMARK_NAME_EXACT_FIT['mobile']=false;

$BOOKMARK_MAX_NUM_ITEMS['company']=3;
//----------------------------------------------------------------------------

// Экспорт в PDF
//----------------------------------------------------------------------------
$PDF_TITLE="Справочник сотрудников"; //Заголовок справочника при экспорте в PDF.
$PDF_SECOND_LINE="факс: 2-222-222"; //Постоянные контакты, которые будут выводится в PDF (Например, номер факса)
$PDF_HIDE_STAFF_WITHOUT_PHONES=true;	// Если параметр равен «true», то при экспорте в PDF не будут отображаться те сотрудники, у которых нет, хотя бы одного телефонного номера, если «false» — будут выводиться все. По умолчанию используется значение «true».
$PDF_MARGIN_LEFT=5; //Отступ слева
$PDF_MARGIN_TOP=5; //Отступ сверху
$PDF_MARGIN_RIGHT=5; //Отступ справа
$PDF_MARGIN_BOTTOM=5; //Отступ снизу
$PDF_LANDSCAPE=false; // Если параметр равен «true», то при экспорте в PDF будет использоваться альбомная ориентация, если «false» — то нет. По умолчанию используется значение «false».
$ENABLE_PDF_EXPORT=true;
//----------------------------------------------------------------------------

// Сортировка в справочнике
//----------------------------------------------------------------------------
$DIRECTOR_FULL_TITLE="Директор";	// Полная должность директора (так как она прописана у него в AD). Используется для определения директора организации. По умолчанию используется значение «Директор».
/* DEP_SORT_ORDER - параметр позволяет изменить порядок вывода отделов сотрудников в списке с разбивкой по отделам. По умолчанию отделы выводятся в алфавитном порядке. 
Данными атрибутами можно ввести коррективы в этот порядок.Например,
$DEP_SORT_ORDER["Дирекция"]='order_replace';
$DEP_SORT_ORDER["Департамент ИТ\Системные администраторы"]["Департамент ИТ\\"]='order_replace';
Непосредственно перед сортировкой отделов в названиях отделов подстрока «Дирекция» заменится на пробел, подстрока «Департамент ИТ\Системные администраторы» на «Департамент ИТ\». После чего произойдет сортировка отделов. */
$DEP_SORT_ORDER["Дирекция"]='order_replace';
$DEP_SORT_ORDER["Департамент ИТ\Системные администраторы"]["Департамент ИТ\\"]='order_replace';
/* То же, что и $DEP_SORT_ORDER только для должностей сотрудников
Первым по списку будет должность, в которой есть подстрока «Старший», затем «Начальник» и т.д.
Все это касается списка сотрудников с разбивкой по отделам. */
$STAFF_SORT_ORDER["Президент"]='order_replace';
$STAFF_SORT_ORDER["Старший"]='order_replace';
$STAFF_SORT_ORDER["Начальник"]='order_replace';
$STAFF_SORT_ORDER["Директор"]='order_replace';
$STAFF_SORT_ORDER["Руководитель"]='order_replace';
$STAFF_SORT_ORDER["Заместитель"]='order_replace';
$STAFF_SORT_ORDER["Главный"]='order_replace';
//----------------------------------------------------------------------------

// Поиск в справочнике
//----------------------------------------------------------------------------
$SEARCH_DEFAULT_VALUE="*"; //Значение по умолчанию для поля поиска.
$ONLY_BOOKMARK=false; //Если false, то галочка "Искать только пользователей в закладке" снята, если true то - выставлена. 
$ONLY_BOOKMARK_VIS=true; //Если false, то галочка "Искать только пользователей в закладке" не будет отображаться, если true то - будет. 
//----------------------------------------------------------------------------

// Работа с фотографиями пользователей
//----------------------------------------------------------------------------
$PHOTO_DIR="./files/ph"; //Директория для хранения фотографий
$DIRECT_PHOTO=false;	// Если параметр равен «true», то фотография сотрудника будет передоваться напрямую в атрибут «src» тега «img», если «false» — то фотография будет сохранена в файл в папку, указанную в параметре «PHOTO_DIR».
$PHOTO_MAX_SIZE=500; //Максимальный размер файла в Кб для загрузки в качестве фотографии
$PHOTO_EXT="jpg"; //Расширение файла для загрузки в качестве фотографии
$PHOTO_MAX_WIDTH=300; //Максимальная ширина фото в пикселях
$PHOTO_MAX_HEIGHT=300; //Максимальная высота фото в пикселях
$THUMBNAIL_PHOTO_MAX_WIDTH=32; //Максимальный ширина фото в атрибуте thumbnailphoto в пикселях
$THUMBNAIL_PHOTO_MAX_HEIGHT=32; //Максимальный высота фото в атрибуте thumbnailphoto в пикселях
$THUMBNAIL_PHOTO_MAX_SIZE=10; //Максимальный размер в килобайтах записываемой в атрибут thumbnailphoto фотографии. Менять не рекомендуется. Размер данного атрибута может быть ограничен сервером LDAP.
$THUMBNAIL_PHOTO_EDIT=true; //Редактировать атрибут thumbnailphoto при сохранении фотографии сотрудника
$THUMBNAIL_PHOTO_VIS=true; //Отображать фото из атрибута thumbnailphoto в справочнике
$SHOW_EMPTY_AVATAR=true; 	// Показывать пустую аватарку (если у пользователя нет фотографии)
//----------------------------------------------------------------------------

// Регулярные выражения (http://ru2.php.net/manual/ru/reference.pcre.pattern.syntax.php)
//----------------------------------------------------------------------------
$RE_MAIL="(^\w+([\.\w]+)*\w@\w((\.\w)*\w+)*\.\w{2,4}$)|(^$)"; //Регулярное выражение для адреса электронной почты. В случае несоответствия, изменения не будут применены.
$RE_OTHER_TELEPHONE="(^[0-9]{3}$)|(^$)"; //Регулярное выражение для внутреннего номера. В случае несоответствия, изменения не будут применены.
$RE_MOBILE="(^\+7[0-9]{10}$)|(^[0-9]{6}$)|(^2[0-9]{6}$)|(^$)"; //Регулярное выражение для номера мобильного (сотового) телефона. В случае несоответствия, изменения не будут применены.
$RE_TELEPHONE_NUMBER="(^[0-9]{7}$)|(^8[0-9]{10}$)|(^$)"; //Регулярное выражение для городского номера телефона. В случае несоответствия, изменения не будут применены.
$RE_BIRTHDAY="(^[0-3]{1}[0-9]{1}.[0-1]{1}[0-9]{1}.[0-9]{4}$)|(^$)"; //Регулярное выражение для даты рождения. В случае несоответствия, изменения не будут применены.
$RE_FIO="(^[ёA-zA-я-]+[\s]{1}([ёA-zA-я-]+[\s]{1}[ёA-zA-я-]+)$)|(^[ёA-zA-я-]+[\s]{1}[ёA-zA-я]{1}.[\s]{1}[ёA-zA-я-]+$)|(^$)"; //Регулярное выражение для ФИО. В случае несоответствия, изменения не будут применены.
//----------------------------------------------------------------------------

// WEB-настройки справочника
//----------------------------------------------------------------------------
$TITLE="Телефонный справочник холдинга Монастырев и Ко"; // Значение данного параметра будет выводиться в заголовке html-страницы
$DEFAULT_PAGE="si_stafflist"; // Маркер страницы, которая должна открываться по умолчанию. Доступны значения, перечисленные в параметре $PAGE_LINKS. По умолчанию используется «si_dep_staff_list»
/* 
PAGE_LINKS - Данный атрибут позволяет управлять вкладками, отвечающими за представление информации о сотрудниках. На данный момент справочник может отображать информацию о сотрудниках:
- с разбивкой по отделам
	$PAGE_LINKS['si_dep_staff_list']="По отделам";
- с разбивкой по первым буквам фамилий
	$PAGE_LINKS['si_alph_staff_list']="По алфавиту";
- общим списком без разбивок с возможностью сортировать сотрудников по определенным параметрам.
	$PAGE_LINKS['si_stafflist']="Поиск сотрудников"; 
- список недавно принятых сотрудников.
	$PAGE_LINKS['si_stafflist']="Новички"; 
*/
$PAGE_LINKS['si_dep_staff_list']="По отделам";
$PAGE_LINKS['si_alph_staff_list']="По алфавиту";
$PAGE_LINKS['si_stafflist']="Поиск сотрудников";
$PAGE_LINKS['si_new_workers']="Новички";
/* 
BLOCK_VIS - Данный параметр позволяет управлять блоками на вкладках, заданных в параметре $PAGE_LINKS
На данный момент есть 4 типа блоков:
- Блок поиска сотрудников ['search'] 
- Блок, выводящий информацию об аутентифицированном сотруднике ['profile']
- Блок ближайших дней рождений ['birthdays']
- Блок быстрого перехода на букву или на отдел ['fast_move']
*/
//Блок поиска сотрудников
$BLOCK_VIS['si_dep_staff_list']['search']=false;
$BLOCK_VIS['si_alph_staff_list']['search']=false;
$BLOCK_VIS['si_stafflist']['search']=true;
//Блок, выводящий информацию об аутентифицированном сотруднике
$BLOCK_VIS['si_dep_staff_list']['profile']=false;
$BLOCK_VIS['si_alph_staff_list']['profile']=false;
$BLOCK_VIS['si_stafflist']['profile']=true;
//Блок ближайших дней рождений
$BLOCK_VIS['si_dep_staff_list']['birthdays']=false;
$BLOCK_VIS['si_alph_staff_list']['birthdays']=false;
$BLOCK_VIS['si_stafflist']['birthdays']=true;
//Блок быстрого перехода на букву или на отдел
$BLOCK_VIS['si_dep_staff_list']['fast_move']=true;
$BLOCK_VIS['si_alph_staff_list']['fast_move']=true;
$HIDE_STAFF_WITHOUT_PHONES=false; // То же что $PDF_HIDE_STAFF_WITHOUT_PHONES, но для списка сотрудников с разбивкой по отделам.
$ALPH_ITEM_IN_LINE=35; // Количество букв в одной строке в блоке быстрого перехода, на странице с разбивкой сотрудников по первым буквам фамилии. По умолчанию значение равно «35»
$DEP_ITEM_IN_COL=3; // Количество отделов в одном столбце в блоке быстрого перехода, на странице с разбивкой сотрудников по отделам. По умолчанию значение равно «3»
$COPY_RIGHT="<a href=\"http://www.pitin.su\" target=\"NewWindow\">© V. Pitin, 2012 </a>"; // :-)
$COPY_RIGHT="";
/* 
$DEP_ADD - Этот атрибут позволяет добавить дополнительную строку в конце названия отдела на странице с разбивкой сотрудников по отделам.
Вот так, например, можно добавить общий телефон отдела:
$DEP_ADD['Департамент управления складом\Группа приемки']="<span class=\"add_dep_info\"><a href=\"callto:234-52-23\" class=\"in_link int_phone\">234-52-23</a><span>"; 
*/
$DEP_ADD['Департамент управления складом\Группа приемки']="<span class=\"add_dep_info\"><a href=\"callto:222-22-22\" class=\"in_link int_phone\">222-22-22</a><span>";
$DEP_ADD['Департамент аптечной сети']="<span class=\"add_dep_info\"><a href=\"callto:111-11-11\" class=\"in_link int_phone\">111-11-11</a><span>";
$ALARM_MESSAGE=""; // Если в параметре что-то есть, то будет выводиться «тревожное» сообщение на всех страницах справочника.
//----------------------------------------------------------------------------

//Skins
//----------------------------------------------------------------------------
/*
$CURRENT_SKIN - текущий (используемый) скин (оформление). Все скины храняться в папке "./skins/".
Можно создать еще одну папку со стилями и графикой и присвоить $CURRENT_SKIN имя это папки. Будет
использовано соответствующее оформление. Структура папок и именование должны быть в точности такие 
же, как и в default.
*/
$CURRENT_SKIN='default';	// По умолчанию $CURRENT_SKIN='default'.
//----------------------------------------------------------------------------

//Other
//----------------------------------------------------------------------------
// Во сех этих переменных ничего менять не нужно! Их наличие объясняется скриптами на основе которых родился телефонный справочник.
$PHPPath="./pages";
$CHARSET_DATA="UTF-8";
$CHARSET_APP="UTF-8";
$AUTH_TYPE="none"; //basic, sspi, none
$MENU=false;
//----------------------------------------------------------------------------
$Alphabet = array ('А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Э','Ю','Я');
//----------------------------------------------------------------------------
$MONTHS = array (1=>"Января","Февраля","Марта","Апреля","Мая","Июня","Июля","Августа","Сентября","Октября","Ноября","Декабря");
//----------------------------------------------------------------------------

$BIND_DEPUTY_AND_VACATION=true;

//Избраное
//----------------------------------------------------------------------------
$FAVOURITE_CONTACTS=true; //Включить возможность добавлять сотрудников в избраное
//----------------------------------------------------------------------------

//Новые сотрудники
//----------------------------------------------------------------------------
$LDAP_CREATED_DATE_FORMAT="dd.mm.yyyy hh:mm:ss"; //формат хранения даты в атрибуте $LDAP_CREATED_DATE_FIELD
$NEW_USERS_NUM_DAYS=30; //За какое количество дней отображать пользователей на страничке $PAGE_LINKS['si_new_workers'] (новых сотрудников)
$EVALUATION_PERIOD=30; //За какое количество дней отображать предупреждение на страничке с полной информацией о пользователе
$SHOW_EVALUATION_PERIOD_MESSAGE=true; //Отображать предупреждение о том что сотрудни новый на страничке с полной информацией о пользователе?
//----------------------------------------------------------------------------

$ENABLE_DANGEROUS_AUTH=false;

$LOCALIZATION="ru";

$XMPP_ENABLE=true;
$XMPP_ENCRYPTION=false;
$XMPP_SERVER="192.168.3.33";
$XMPP_PORT="5222";
$XMPP_USER="bot_fluder";
$XMPP_PASSWORD="24234dsf";
$XMPP_DOMAIN="your_jabber_server.your_domain.ru";
$XMPP_ACCOUNT_END="srv-jabber";
$XMPP_MESSAGE_LISTS_ENABLE=true;
$XMPP_LAST_MESSAGE_TIME_OF_KEEPING = 30*24*60*60;

$XMPP_MESSAGE_LISTS_TIME_OF_LIVE=30*24*60*60;
$XMPP_LAST_MESS_NUM_SYM_OF_PRUNING = 100;
$XMPP_NUM_OF_LAST_MESSAGES_PER_USER = 10;

$XMPP_MESSAGE_SIGN_ENABLE = true;
$XMPP_USE_INTERNAL_PHONE_IN_SIGN_ENABLE = true;
$XMPP_USE_MOBILE_PHONE_IN_SIGN_ENABLE = true;

$XMPP_LDAP_GROUPS_ENABLE = true;
$XMPP_LDAP_GROUPS_OU = "OU=Группы безопасности,DC=PRP,DC=ru";
$XMPP_LDAP_GROUPS_SUBSTR = "jbr";
$LDAP_XMMP_GROUP_TITLE_FIELD = "description";

$LDAP_MEMBER_FIELD = "member";

?>