<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2de54c8b06e66f8e302af452636d39bb
{
    public static $files = array (
        '3a36fb0a6bafb8b516d4768ba4636f67' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/includes/includes_conf.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LibMelanie\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LibMelanie\\' => 
        array (
            0 => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controller\\Addressbook' => __DIR__ . '/../..' . '/controller/addressbook.php',
        'Controller\\AddressbookShare' => __DIR__ . '/../..' . '/controller/addressbookshare.php',
        'Controller\\Calendar' => __DIR__ . '/../..' . '/controller/calendar.php',
        'Controller\\CalendarShare' => __DIR__ . '/../..' . '/controller/calendarshare.php',
        'Controller\\Contact' => __DIR__ . '/../..' . '/controller/contact.php',
        'Controller\\Controller' => __DIR__ . '/../..' . '/controller/controller.php',
        'Controller\\Event' => __DIR__ . '/../..' . '/controller/event.php',
        'Controller\\Task' => __DIR__ . '/../..' . '/controller/task.php',
        'Controller\\Taskslist' => __DIR__ . '/../..' . '/controller/taskslist.php',
        'Controller\\User' => __DIR__ . '/../..' . '/controller/user.php',
        'Controller\\UserAddressbooks' => __DIR__ . '/../..' . '/controller/useraddressbooks.php',
        'Controller\\UserCalendars' => __DIR__ . '/../..' . '/controller/usercalendars.php',
        'LibMelanie\\Api\\Defaut\\Addressbook' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Addressbook.php',
        'LibMelanie\\Api\\Defaut\\AddressbookSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/AddressbookSync.php',
        'LibMelanie\\Api\\Defaut\\Attachment' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Attachment.php',
        'LibMelanie\\Api\\Defaut\\Attendee' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Attendee.php',
        'LibMelanie\\Api\\Defaut\\Calendar' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Calendar.php',
        'LibMelanie\\Api\\Defaut\\CalendarSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/CalendarSync.php',
        'LibMelanie\\Api\\Defaut\\Contact' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Contact.php',
        'LibMelanie\\Api\\Defaut\\Event' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Event.php',
        'LibMelanie\\Api\\Defaut\\EventProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/EventProperty.php',
        'LibMelanie\\Api\\Defaut\\Exception' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Exception.php',
        'LibMelanie\\Api\\Defaut\\Group' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Group.php',
        'LibMelanie\\Api\\Defaut\\Member' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Member.php',
        'LibMelanie\\Api\\Defaut\\News\\News' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/News/News.php',
        'LibMelanie\\Api\\Defaut\\News\\NewsShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/News/NewsShare.php',
        'LibMelanie\\Api\\Defaut\\News\\Rss' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/News/Rss.php',
        'LibMelanie\\Api\\Defaut\\Notification' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Notification.php',
        'LibMelanie\\Api\\Defaut\\ObjectShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/ObjectShare.php',
        'LibMelanie\\Api\\Defaut\\Organizer' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Organizer.php',
        'LibMelanie\\Api\\Defaut\\Recurrence' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Recurrence.php',
        'LibMelanie\\Api\\Defaut\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Share.php',
        'LibMelanie\\Api\\Defaut\\Task' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Task.php',
        'LibMelanie\\Api\\Defaut\\TaskProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/TaskProperty.php',
        'LibMelanie\\Api\\Defaut\\Taskslist' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Taskslist.php',
        'LibMelanie\\Api\\Defaut\\TaskslistSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/TaskslistSync.php',
        'LibMelanie\\Api\\Defaut\\User' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/User.php',
        'LibMelanie\\Api\\Defaut\\UserPrefs' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/UserPrefs.php',
        'LibMelanie\\Api\\Defaut\\Users\\Outofoffice' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Users/Outofoffice.php',
        'LibMelanie\\Api\\Defaut\\Users\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Users/Share.php',
        'LibMelanie\\Api\\Defaut\\Users\\Type' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Users/Type.php',
        'LibMelanie\\Api\\Defaut\\Workspace' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Workspace.php',
        'LibMelanie\\Api\\Defaut\\Workspaces\\Hashtag' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Workspaces/Hashtag.php',
        'LibMelanie\\Api\\Defaut\\Workspaces\\HashtagWorkspaceRef' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Workspaces/HashtagWorkspaceRef.php',
        'LibMelanie\\Api\\Defaut\\Workspaces\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Defaut/Workspaces/Share.php',
        'LibMelanie\\Api\\Dgfip\\Addressbook' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Addressbook.php',
        'LibMelanie\\Api\\Dgfip\\AddressbookSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/AddressbookSync.php',
        'LibMelanie\\Api\\Dgfip\\Attachment' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Attachment.php',
        'LibMelanie\\Api\\Dgfip\\Attendee' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Attendee.php',
        'LibMelanie\\Api\\Dgfip\\Calendar' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Calendar.php',
        'LibMelanie\\Api\\Dgfip\\CalendarSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/CalendarSync.php',
        'LibMelanie\\Api\\Dgfip\\Contact' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Contact.php',
        'LibMelanie\\Api\\Dgfip\\Event' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Event.php',
        'LibMelanie\\Api\\Dgfip\\EventProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/EventProperty.php',
        'LibMelanie\\Api\\Dgfip\\Exception' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Exception.php',
        'LibMelanie\\Api\\Dgfip\\Group' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Group.php',
        'LibMelanie\\Api\\Dgfip\\Member' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Member.php',
        'LibMelanie\\Api\\Dgfip\\News\\News' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/News/News.php',
        'LibMelanie\\Api\\Dgfip\\News\\NewsShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/News/NewsShare.php',
        'LibMelanie\\Api\\Dgfip\\News\\Rss' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/News/Rss.php',
        'LibMelanie\\Api\\Dgfip\\Notification' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Notification.php',
        'LibMelanie\\Api\\Dgfip\\ObjectShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/ObjectShare.php',
        'LibMelanie\\Api\\Dgfip\\Organizer' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Organizer.php',
        'LibMelanie\\Api\\Dgfip\\Recurrence' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Recurrence.php',
        'LibMelanie\\Api\\Dgfip\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Share.php',
        'LibMelanie\\Api\\Dgfip\\Task' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Task.php',
        'LibMelanie\\Api\\Dgfip\\TaskProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/TaskProperty.php',
        'LibMelanie\\Api\\Dgfip\\Taskslist' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Taskslist.php',
        'LibMelanie\\Api\\Dgfip\\TaskslistSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/TaskslistSync.php',
        'LibMelanie\\Api\\Dgfip\\User' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/User.php',
        'LibMelanie\\Api\\Dgfip\\UserPrefs' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/UserPrefs.php',
        'LibMelanie\\Api\\Dgfip\\Users\\Outofoffice' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Users/Outofoffice.php',
        'LibMelanie\\Api\\Dgfip\\Users\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Users/Share.php',
        'LibMelanie\\Api\\Dgfip\\Users\\Type' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Dgfip/Users/Type.php',
        'LibMelanie\\Api\\Ens\\Addressbook' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Addressbook.php',
        'LibMelanie\\Api\\Ens\\AddressbookSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/AddressbookSync.php',
        'LibMelanie\\Api\\Ens\\Attachment' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Attachment.php',
        'LibMelanie\\Api\\Ens\\Attendee' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Attendee.php',
        'LibMelanie\\Api\\Ens\\Calendar' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Calendar.php',
        'LibMelanie\\Api\\Ens\\CalendarSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/CalendarSync.php',
        'LibMelanie\\Api\\Ens\\Contact' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Contact.php',
        'LibMelanie\\Api\\Ens\\Event' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Event.php',
        'LibMelanie\\Api\\Ens\\EventProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/EventProperty.php',
        'LibMelanie\\Api\\Ens\\Exception' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Exception.php',
        'LibMelanie\\Api\\Ens\\Group' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Group.php',
        'LibMelanie\\Api\\Ens\\Member' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Member.php',
        'LibMelanie\\Api\\Ens\\News\\News' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/News/News.php',
        'LibMelanie\\Api\\Ens\\News\\NewsShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/News/NewsShare.php',
        'LibMelanie\\Api\\Ens\\News\\Rss' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/News/Rss.php',
        'LibMelanie\\Api\\Ens\\Notification' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Notification.php',
        'LibMelanie\\Api\\Ens\\ObjectShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/ObjectShare.php',
        'LibMelanie\\Api\\Ens\\Organizer' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Organizer.php',
        'LibMelanie\\Api\\Ens\\Recurrence' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Recurrence.php',
        'LibMelanie\\Api\\Ens\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Share.php',
        'LibMelanie\\Api\\Ens\\Task' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Task.php',
        'LibMelanie\\Api\\Ens\\TaskProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/TaskProperty.php',
        'LibMelanie\\Api\\Ens\\Taskslist' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Taskslist.php',
        'LibMelanie\\Api\\Ens\\TaskslistSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/TaskslistSync.php',
        'LibMelanie\\Api\\Ens\\User' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/User.php',
        'LibMelanie\\Api\\Ens\\UserPrefs' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/UserPrefs.php',
        'LibMelanie\\Api\\Ens\\Users\\Outofoffice' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Users/Outofoffice.php',
        'LibMelanie\\Api\\Ens\\Users\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Users/Share.php',
        'LibMelanie\\Api\\Ens\\Users\\Type' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Users/Type.php',
        'LibMelanie\\Api\\Ens\\Workspace' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Workspace.php',
        'LibMelanie\\Api\\Ens\\Workspaces\\Hashtag' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Workspaces/Hashtag.php',
        'LibMelanie\\Api\\Ens\\Workspaces\\HashtagWorkspaceRef' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Workspaces/HashtagWorkspaceRef.php',
        'LibMelanie\\Api\\Ens\\Workspaces\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Ens/Workspaces/Share.php',
        'LibMelanie\\Api\\Gn\\Addressbook' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Addressbook.php',
        'LibMelanie\\Api\\Gn\\AddressbookSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/AddressbookSync.php',
        'LibMelanie\\Api\\Gn\\Attachment' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Attachment.php',
        'LibMelanie\\Api\\Gn\\Attendee' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Attendee.php',
        'LibMelanie\\Api\\Gn\\Calendar' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Calendar.php',
        'LibMelanie\\Api\\Gn\\CalendarSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/CalendarSync.php',
        'LibMelanie\\Api\\Gn\\Contact' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Contact.php',
        'LibMelanie\\Api\\Gn\\Event' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Event.php',
        'LibMelanie\\Api\\Gn\\EventProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/EventProperty.php',
        'LibMelanie\\Api\\Gn\\Exception' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Exception.php',
        'LibMelanie\\Api\\Gn\\Group' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Group.php',
        'LibMelanie\\Api\\Gn\\Member' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Member.php',
        'LibMelanie\\Api\\Gn\\News\\News' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/News/News.php',
        'LibMelanie\\Api\\Gn\\News\\NewsShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/News/NewsShare.php',
        'LibMelanie\\Api\\Gn\\News\\Rss' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/News/Rss.php',
        'LibMelanie\\Api\\Gn\\Notification' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Notification.php',
        'LibMelanie\\Api\\Gn\\ObjectShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/ObjectShare.php',
        'LibMelanie\\Api\\Gn\\Organizer' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Organizer.php',
        'LibMelanie\\Api\\Gn\\Recurrence' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Recurrence.php',
        'LibMelanie\\Api\\Gn\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Share.php',
        'LibMelanie\\Api\\Gn\\Task' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Task.php',
        'LibMelanie\\Api\\Gn\\TaskProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/TaskProperty.php',
        'LibMelanie\\Api\\Gn\\Taskslist' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Taskslist.php',
        'LibMelanie\\Api\\Gn\\TaskslistSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/TaskslistSync.php',
        'LibMelanie\\Api\\Gn\\User' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/User.php',
        'LibMelanie\\Api\\Gn\\UserPrefs' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/UserPrefs.php',
        'LibMelanie\\Api\\Gn\\Users\\Outofoffice' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Users/Outofoffice.php',
        'LibMelanie\\Api\\Gn\\Users\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Users/Share.php',
        'LibMelanie\\Api\\Gn\\Users\\Type' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Gn/Users/Type.php',
        'LibMelanie\\Api\\Mce\\Addressbook' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Addressbook.php',
        'LibMelanie\\Api\\Mce\\AddressbookSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/AddressbookSync.php',
        'LibMelanie\\Api\\Mce\\Attachment' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Attachment.php',
        'LibMelanie\\Api\\Mce\\Attendee' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Attendee.php',
        'LibMelanie\\Api\\Mce\\Calendar' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Calendar.php',
        'LibMelanie\\Api\\Mce\\CalendarSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/CalendarSync.php',
        'LibMelanie\\Api\\Mce\\Contact' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Contact.php',
        'LibMelanie\\Api\\Mce\\Event' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Event.php',
        'LibMelanie\\Api\\Mce\\EventProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/EventProperty.php',
        'LibMelanie\\Api\\Mce\\Exception' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Exception.php',
        'LibMelanie\\Api\\Mce\\Group' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Group.php',
        'LibMelanie\\Api\\Mce\\Member' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Member.php',
        'LibMelanie\\Api\\Mce\\News\\News' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/News/News.php',
        'LibMelanie\\Api\\Mce\\News\\NewsShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/News/NewsShare.php',
        'LibMelanie\\Api\\Mce\\News\\Rss' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/News/Rss.php',
        'LibMelanie\\Api\\Mce\\Notification' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Notification.php',
        'LibMelanie\\Api\\Mce\\ObjectShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/ObjectShare.php',
        'LibMelanie\\Api\\Mce\\Organizer' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Organizer.php',
        'LibMelanie\\Api\\Mce\\Recurrence' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Recurrence.php',
        'LibMelanie\\Api\\Mce\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Share.php',
        'LibMelanie\\Api\\Mce\\Task' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Task.php',
        'LibMelanie\\Api\\Mce\\TaskProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/TaskProperty.php',
        'LibMelanie\\Api\\Mce\\Taskslist' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Taskslist.php',
        'LibMelanie\\Api\\Mce\\TaskslistSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/TaskslistSync.php',
        'LibMelanie\\Api\\Mce\\User' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/User.php',
        'LibMelanie\\Api\\Mce\\UserPrefs' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/UserPrefs.php',
        'LibMelanie\\Api\\Mce\\Users\\Outofoffice' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Users/Outofoffice.php',
        'LibMelanie\\Api\\Mce\\Users\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Users/Share.php',
        'LibMelanie\\Api\\Mce\\Users\\Type' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Users/Type.php',
        'LibMelanie\\Api\\Mce\\Workspace' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Workspace.php',
        'LibMelanie\\Api\\Mce\\Workspaces\\Hashtag' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Workspaces/Hashtag.php',
        'LibMelanie\\Api\\Mce\\Workspaces\\HashtagWorkspaceRef' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Workspaces/HashtagWorkspaceRef.php',
        'LibMelanie\\Api\\Mce\\Workspaces\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mce/Workspaces/Share.php',
        'LibMelanie\\Api\\Mel\\Addressbook' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Addressbook.php',
        'LibMelanie\\Api\\Mel\\AddressbookSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/AddressbookSync.php',
        'LibMelanie\\Api\\Mel\\Attachment' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Attachment.php',
        'LibMelanie\\Api\\Mel\\Attendee' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Attendee.php',
        'LibMelanie\\Api\\Mel\\Calendar' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Calendar.php',
        'LibMelanie\\Api\\Mel\\CalendarSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/CalendarSync.php',
        'LibMelanie\\Api\\Mel\\Contact' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Contact.php',
        'LibMelanie\\Api\\Mel\\Event' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Event.php',
        'LibMelanie\\Api\\Mel\\EventProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/EventProperty.php',
        'LibMelanie\\Api\\Mel\\Exception' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Exception.php',
        'LibMelanie\\Api\\Mel\\Group' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Group.php',
        'LibMelanie\\Api\\Mel\\Member' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Member.php',
        'LibMelanie\\Api\\Mel\\News\\News' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/News/News.php',
        'LibMelanie\\Api\\Mel\\News\\NewsShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/News/NewsShare.php',
        'LibMelanie\\Api\\Mel\\News\\Rss' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/News/Rss.php',
        'LibMelanie\\Api\\Mel\\Notification' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Notification.php',
        'LibMelanie\\Api\\Mel\\ObjectShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/ObjectShare.php',
        'LibMelanie\\Api\\Mel\\Organizer' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Organizer.php',
        'LibMelanie\\Api\\Mel\\Recurrence' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Recurrence.php',
        'LibMelanie\\Api\\Mel\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Share.php',
        'LibMelanie\\Api\\Mel\\Task' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Task.php',
        'LibMelanie\\Api\\Mel\\TaskProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/TaskProperty.php',
        'LibMelanie\\Api\\Mel\\Taskslist' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Taskslist.php',
        'LibMelanie\\Api\\Mel\\TaskslistSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/TaskslistSync.php',
        'LibMelanie\\Api\\Mel\\User' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/User.php',
        'LibMelanie\\Api\\Mel\\UserPrefs' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/UserPrefs.php',
        'LibMelanie\\Api\\Mel\\Users\\Outofoffice' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Users/Outofoffice.php',
        'LibMelanie\\Api\\Mel\\Users\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Users/Share.php',
        'LibMelanie\\Api\\Mel\\Users\\Type' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Users/Type.php',
        'LibMelanie\\Api\\Mel\\Workspace' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Workspace.php',
        'LibMelanie\\Api\\Mel\\Workspaces\\Hashtag' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Workspaces/Hashtag.php',
        'LibMelanie\\Api\\Mel\\Workspaces\\HashtagWorkspaceRef' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Workspaces/HashtagWorkspaceRef.php',
        'LibMelanie\\Api\\Mel\\Workspaces\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mel/Workspaces/Share.php',
        'LibMelanie\\Api\\Melanie2\\Addressbook' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/Addressbook.php',
        'LibMelanie\\Api\\Melanie2\\AddressbookSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/AddressbookSync.php',
        'LibMelanie\\Api\\Melanie2\\Attachment' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/Attachment.php',
        'LibMelanie\\Api\\Melanie2\\Attendee' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/Attendee.php',
        'LibMelanie\\Api\\Melanie2\\Calendar' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/Calendar.php',
        'LibMelanie\\Api\\Melanie2\\CalendarSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/CalendarSync.php',
        'LibMelanie\\Api\\Melanie2\\Contact' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/Contact.php',
        'LibMelanie\\Api\\Melanie2\\Event' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/Event.php',
        'LibMelanie\\Api\\Melanie2\\EventProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/EventProperty.php',
        'LibMelanie\\Api\\Melanie2\\Exception' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/Exception.php',
        'LibMelanie\\Api\\Melanie2\\ObjectShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/ObjectShare.php',
        'LibMelanie\\Api\\Melanie2\\Organizer' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/Organizer.php',
        'LibMelanie\\Api\\Melanie2\\Recurrence' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/Recurrence.php',
        'LibMelanie\\Api\\Melanie2\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/Share.php',
        'LibMelanie\\Api\\Melanie2\\Task' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/Task.php',
        'LibMelanie\\Api\\Melanie2\\TaskProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/TaskProperty.php',
        'LibMelanie\\Api\\Melanie2\\Taskslist' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/Taskslist.php',
        'LibMelanie\\Api\\Melanie2\\TaskslistSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/TaskslistSync.php',
        'LibMelanie\\Api\\Melanie2\\User' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/User.php',
        'LibMelanie\\Api\\Melanie2\\UserPrefs' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Melanie2/UserPrefs.php',
        'LibMelanie\\Api\\Mi\\Addressbook' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Addressbook.php',
        'LibMelanie\\Api\\Mi\\AddressbookSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/AddressbookSync.php',
        'LibMelanie\\Api\\Mi\\Attachment' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Attachment.php',
        'LibMelanie\\Api\\Mi\\Attendee' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Attendee.php',
        'LibMelanie\\Api\\Mi\\Calendar' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Calendar.php',
        'LibMelanie\\Api\\Mi\\CalendarSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/CalendarSync.php',
        'LibMelanie\\Api\\Mi\\Contact' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Contact.php',
        'LibMelanie\\Api\\Mi\\Event' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Event.php',
        'LibMelanie\\Api\\Mi\\EventProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/EventProperty.php',
        'LibMelanie\\Api\\Mi\\Exception' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Exception.php',
        'LibMelanie\\Api\\Mi\\Group' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Group.php',
        'LibMelanie\\Api\\Mi\\Member' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Member.php',
        'LibMelanie\\Api\\Mi\\News\\News' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/News/News.php',
        'LibMelanie\\Api\\Mi\\News\\NewsShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/News/NewsShare.php',
        'LibMelanie\\Api\\Mi\\News\\Rss' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/News/Rss.php',
        'LibMelanie\\Api\\Mi\\Notification' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Notification.php',
        'LibMelanie\\Api\\Mi\\ObjectShare' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/ObjectShare.php',
        'LibMelanie\\Api\\Mi\\Organizer' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Organizer.php',
        'LibMelanie\\Api\\Mi\\Recurrence' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Recurrence.php',
        'LibMelanie\\Api\\Mi\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Share.php',
        'LibMelanie\\Api\\Mi\\Task' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Task.php',
        'LibMelanie\\Api\\Mi\\TaskProperty' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/TaskProperty.php',
        'LibMelanie\\Api\\Mi\\Taskslist' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Taskslist.php',
        'LibMelanie\\Api\\Mi\\TaskslistSync' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/TaskslistSync.php',
        'LibMelanie\\Api\\Mi\\User' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/User.php',
        'LibMelanie\\Api\\Mi\\UserPrefs' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/UserPrefs.php',
        'LibMelanie\\Api\\Mi\\Users\\Outofoffice' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Users/Outofoffice.php',
        'LibMelanie\\Api\\Mi\\Users\\Share' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Users/Share.php',
        'LibMelanie\\Api\\Mi\\Users\\Type' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Api/Mi/Users/Type.php',
        'LibMelanie\\Cache\\Cache' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Cache/Cache.php',
        'LibMelanie\\Config\\Config' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Config/Config.php',
        'LibMelanie\\Config\\DefaultConfig' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Config/DefaultConfig.php',
        'LibMelanie\\Config\\MappingMce' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Config/MappingMce.php',
        'LibMelanie\\Config\\MappingMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Config/MappingMelanie.php',
        'LibMelanie\\Exceptions\\Melanie2DatabaseException' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Exceptions/Melanie2DatabaseException.php',
        'LibMelanie\\Exceptions\\Melanie2Exception' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Exceptions/Melanie2Exception.php',
        'LibMelanie\\Exceptions\\Melanie2LdapException' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Exceptions/Melanie2LdapException.php',
        'LibMelanie\\Exceptions\\ObjectMelanieUndefinedException' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Exceptions/ObjectMelanieUndefinedException.php',
        'LibMelanie\\Exceptions\\PropertyDoesNotExistException' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Exceptions/PropertyDoesNotExistException.php',
        'LibMelanie\\Exceptions\\UndefinedMappingException' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Exceptions/UndefinedMappingException.php',
        'LibMelanie\\Exceptions\\UndefinedPrimaryKeyException' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Exceptions/UndefinedPrimaryKeyException.php',
        'LibMelanie\\Interfaces\\IObjectMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Interfaces/IObjectMelanie.php',
        'LibMelanie\\Ldap\\LDAPMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Ldap/LDAPMelanie.php',
        'LibMelanie\\Ldap\\Ldap' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Ldap/Ldap.php',
        'LibMelanie\\Lib\\ContactToVCard' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Lib/ContactToVCard.php',
        'LibMelanie\\Lib\\EventToICS' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Lib/EventToICS.php',
        'LibMelanie\\Lib\\ICS' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Lib/ICS.php',
        'LibMelanie\\Lib\\ICSToEvent' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Lib/ICSToEvent.php',
        'LibMelanie\\Lib\\ICSToTask' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Lib/ICSToTask.php',
        'LibMelanie\\Lib\\MagicObject' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Lib/MagicObject.php',
        'LibMelanie\\Lib\\MceObject' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Lib/MceObject.php',
        'LibMelanie\\Lib\\Selaforme' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Lib/Selaforme.php',
        'LibMelanie\\Lib\\TaskToICS' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Lib/TaskToICS.php',
        'LibMelanie\\Lib\\UUID' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Lib/UUID.php',
        'LibMelanie\\Lib\\VCard' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Lib/VCard.php',
        'LibMelanie\\Lib\\VCardToContact' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Lib/VCardToContact.php',
        'LibMelanie\\Log\\Log' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Log/Log.php',
        'LibMelanie\\Log\\M2Log' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Log/M2Log.php',
        'LibMelanie\\Objects\\AddressbookMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Objects/AddressbookMelanie.php',
        'LibMelanie\\Objects\\AttachmentMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Objects/AttachmentMelanie.php',
        'LibMelanie\\Objects\\CalendarMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Objects/CalendarMelanie.php',
        'LibMelanie\\Objects\\EventMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Objects/EventMelanie.php',
        'LibMelanie\\Objects\\GroupMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Objects/GroupMelanie.php',
        'LibMelanie\\Objects\\HashtagMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Objects/HashtagMelanie.php',
        'LibMelanie\\Objects\\HistoryMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Objects/HistoryMelanie.php',
        'LibMelanie\\Objects\\ObjectMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Objects/ObjectMelanie.php',
        'LibMelanie\\Objects\\TaskslistMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Objects/TaskslistMelanie.php',
        'LibMelanie\\Objects\\UserMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Objects/UserMelanie.php',
        'LibMelanie\\Objects\\WorkspaceMelanie' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Objects/WorkspaceMelanie.php',
        'LibMelanie\\Sql\\Sql' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Sql/Sql.php',
        'LibMelanie\\Sql\\SqlAttachmentRequests' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Sql/SqlAttachmentRequests.php',
        'LibMelanie\\Sql\\SqlCalendarRequests' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Sql/SqlCalendarRequests.php',
        'LibMelanie\\Sql\\SqlContactRequests' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Sql/SqlContactRequests.php',
        'LibMelanie\\Sql\\SqlHistoryRequests' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Sql/SqlHistoryRequests.php',
        'LibMelanie\\Sql\\SqlMelanieRequests' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Sql/SqlMelanieRequests.php',
        'LibMelanie\\Sql\\SqlObjectPropertyRequests' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Sql/SqlObjectPropertyRequests.php',
        'LibMelanie\\Sql\\SqlObjectRequests' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Sql/SqlObjectRequests.php',
        'LibMelanie\\Sql\\SqlTaskRequests' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Sql/SqlTaskRequests.php',
        'LibMelanie\\Sql\\SqlWorkspaceRequests' => __DIR__ . '/..' . '/messagerie-melanie2/orm-m2/src/Sql/SqlWorkspaceRequests.php',
        'Lib\\Auth' => __DIR__ . '/../..' . '/lib/auth.php',
        'Lib\\Config' => __DIR__ . '/../..' . '/lib/config.php',
        'Lib\\Log' => __DIR__ . '/../..' . '/lib/log.php',
        'Lib\\Mapping' => __DIR__ . '/../..' . '/lib/mapping.php',
        'Lib\\Objects' => __DIR__ . '/../..' . '/lib/objects.php',
        'Lib\\Request' => __DIR__ . '/../..' . '/lib/request.php',
        'Lib\\Response' => __DIR__ . '/../..' . '/lib/response.php',
        'Lib\\Routing' => __DIR__ . '/../..' . '/lib/routing.php',
        'Lib\\Utils' => __DIR__ . '/../..' . '/lib/utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2de54c8b06e66f8e302af452636d39bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2de54c8b06e66f8e302af452636d39bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2de54c8b06e66f8e302af452636d39bb::$classMap;

        }, null, ClassLoader::class);
    }
}
