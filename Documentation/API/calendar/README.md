[Retour à la documentation API](../README.md)

# calendar

API permettant de récupérer les informations d'un calendrier, créer, modifier ou supprimer un calendrier

Il propose également des endpoints supplémentaires associés au calendrier

## Endpoints

Liste des accès utilisables par l'API calendar

### events

```url
/api/api.php/calendar/events
```

Lister les événements associés à un calendrier

Voir [events](events/README.md)

## GET calendar

### Utilisation

```url
GET /api/api.php/calendar?id=<calendar_id>
```

### Résultat

```json
{
  "success": true,
  "data": {
    "id": "<calendar_id>",
    "name": "<calendar_name>",
    "owner": "<calendar_owner>",
    "perm": "<perm_value>"
  }
}
```

### Paramètres

 - `id` : [Obligatoire] identifiant du calendrier à récupérer
 - `user` : [Optionnel] identifiant de l'utilisateur à associer au calendrier (change la valeur de perm voir)

## POST calendar

### Utilisation

```url
POST /api/api.php/calendar

id=<calendar_id>&name=<calendar_name>&owner=<calendar_owner>
```

### Résultat

```json
{
  "success": true
}
```

### Paramètres

 - `id` : [Obligatoire] identifiant du calendrier à créer ou modifier
 - `name` : [Obligatoire] nom du calendrier à créer ou modifier
 - `owner` : [Obligatoire en création] identifiant du propriétaire du calendrier à créer