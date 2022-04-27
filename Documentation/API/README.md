# Utilisation de l'API

L'API ORM MCE est une API Restful se basant sur l'URL, les méthodes HTTP et les paramètres pour retourner ou modifier des données. Le point d'entrée est le fichier `api.php`.

## Endpoints

Liste des accès utilisables par l'API

### user

```url
/api/api.php/user
```

Action autour d'un utilisateur et des objets associés à un utilisateur (partages, calendriers, ...).

Voir [user](user/README.md#user)

### calendar

```url
/api/api.php/calendar
```

Action autour d'un calendrier et des objets associés à un calendrier (partages, événements, ...).

Voir [calendar](calendar/README.md#calendar)

### event

```url
/api/api.php/event
```

Action autour d'un événement et des objets associés à un événement (pièces jointes, participants, ...).

Voir [event](event/README.md#event)

## Authentification

L'authentification se fait sur le header `Authorization` ou `authorization` (Bug fetch sur Firefox). Plusieurs types d'authentification sont possibles.

### Basic

L'authentification se fait avec l'identifiant et le mot de passe de l'utilisateur.

```header
Authorization: Basic YWxhZGRpbjpvcGVuc2VzYW1l
```

Les identifiants `Basic` sont construits de la manière suivante :
 - L'identifiant de l'utilisateur et le mot de passe sont combinés avec deux-points : (aladdin:sesameOuvreToi).
 - Cette chaîne de caractères est ensuite encodée en base64 (YWxhZGRpbjpzZXNhbWVPdXZyZVRvaQ==).

### Apikey

L'authentification se fait avec une clé d'API fournie par l'API.

```header
Authorization: Apikey <Clé d'API>
```

### Bearer

Non implémenté à l'heure actuelle