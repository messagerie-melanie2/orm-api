[Retour à la documentation API](../../../README.md) | [Retour au endpoint user](../../README.md) | [Retour au endpoint calendars](../README.md)

# default

API permettant de récupérer le calendrier par défaut d'un utilisateur

## GET default

### Utilisation

```url
GET /api/api.php/user/calendars/default?uid=<user_uid>
```

### Résultat

```json
{
  "success": true,
  "data": [
    {
      "id": "<calendar_id>",
      "name": "<calendar_name>",
      "owner": "<calendar_owner>",
      "perm": "<perm_value>"
    }
  ]
}
```

### Paramètres

 - `uid` : [Obligatoire] identifiant de l'utilisateur