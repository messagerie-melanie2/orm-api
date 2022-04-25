# Utilisation de l'API

L'API ORM MCE est une API Restful se basant sur l'URL, les méthodes HTTP et les paramètres pour retourner ou modifier des données. Le point d'entrée est le fichier `api.php`.

## Endpoints

Liste des accès utilisables par l'API

### user

```url
/api/api.php/user
```

Action autour d'un utilisateur et des objets associés à un utilisateur (partages, calendriers, ...).

Voir [user](user/README.md)

### calendar

```url
/api/api.php/calendar
```

Action autour d'un calendrier et des objets associés à un calendrier (partages, événements, ...).

Voir [calendar](calendar/README.md)

### event

```url
/api/api.php/event
```

Action autour d'un événement et des objets associés à un événement (pièces jointes, participants, ...).

Voir [event](event/README.md)