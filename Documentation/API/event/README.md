# event

[Retour à la documentation API](../README.md#utilisation-de-lapi)

API permettant de récupérer les informations d'un événement, créer, modifier ou supprimer un événement

## GET event

### Utilisation

```url
GET /api/api.php/event?calendar=<calendar_id>&uid=<event_uid>
```

### Résultat

```json
{
  "success": true,
  "data": {
    "uid": "<event_uid>",
    "realuid": "<event_realuid>",
    "calendar": "<calendar_id>",
    "owner": "<event_owner>",
    "title": "Test",
    "status": "confirmed",
    "class": "public",
    "transparency": "OPAQUE",
    "start": "2021-05-13 12:30:00",
    "end": "2021-05-13 17:30:00",
    "created": 1620814548,
    "modified": 1620814548,
    "timezone": "Europe/Paris"
  }
}
```

### Paramètres

 - `calendar_id` : [Obligatoire] identifiant du calendrier auquel appartient l'événement
 - `event_uid` : [Obligatoire] identifiant de l'événement à récupérer

## POST event

### Utilisation

#### Url
```url
POST /api/api.php/event
```

#### Body
```json
{
    "uid": "<event_uid>",
    "realuid": "<event_realuid>",
    "calendar": "<calendar_id>",
    "owner": "<event_owner>",
    "title": "Test",
    "status": "confirmed",
    "class": "public",
    "transparency": "OPAQUE",
    "start": "2021-05-13 12:30:00",
    "end": "2021-05-13 17:30:00",
    "created": 1620814548,
    "modified": 1620814548,
    "timezone": "Europe/Paris"
}
```

### Résultat

```json
{
  "success": true
}
```

### Paramètres

 - `calendar` : [Obligatoire] identifiant du calendrier auquel appartient l'événement
 - `uid` : [Obligatoire] identifiant de l'événement à récupérer

## DELETE event

### Utilisation

```url
DELETE /api/api.php/event?calendar=<calendar_id>&uid=<event_uid>
```

### Résultat

```json
{
  "success": true,
}
```

### Paramètres

 - `calendar_id` : [Obligatoire] identifiant du calendrier auquel appartient l'événement
 - `event_uid` : [Obligatoire] identifiant de l'événement à récupérer