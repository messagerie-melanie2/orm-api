# addressbook/share

[Retour à la documentation API](../../README.md#utilisation-de-lapi) | [Retour au endpoint addressbook](../README.md#addressbook)

API permettant de récupérer les informations d'un partage, créer, modifier ou supprimer un partage associé à un carnet d'adresses

## GET addressbook/share

### Utilisation

```url
GET /api/api.php/addressbook/share?id=<addressbook_id>&name=<user_uid>
```

### Résultat

```json
{
  "success": true,
  "data": {
    "acl": "30"
  }
}
```

#### Informations
 - `acl` : Niveau de droit : `6` Lecture seule, `30` Lecture/écriture 

### Paramètres

 - `id` : [Obligatoire] identifiant du carnet d'adresses à récupérer
 - `name` : [Obligatoire] identifiant de l'utilisateur ou du groupe pour lequel le partage est positionné

## POST addressbook/share

### Utilisation

#### Url
```url
POST /api/api.php/addressbook/share
```

#### Body
```json
{
  "id": "<addressbook_id>",
  "name": "<user_uid>",
  "acl": "6"
}
```

### Résultat

```json
{
  "success": true
}
```

### Paramètres

 - `id` : [Obligatoire] identifiant du carnet d'adresses sur lequel doit être positionné le partage
 - `name` : [Obligatoire] identifiant de l'utilisateur ou du groupe pour lequel le partage doit être positionné
 - `acl` : [Obligatoire] Niveau de droit : `6` Lecture seule, `30` Lecture/écriture 

## DELETE addressbook/share

### Utilisation

```url
DELETE /api/api.php/addressbook/share?id=<addressbook_id>&name=<user_uid>
```

### Résultat

```json
{
  "success": true,
}
```

### Paramètres

 - `addressbook_id` : [Obligatoire] identifiant du carnet d'adresses auquel appartient l'événement
 - `event_uid` : [Obligatoire] identifiant de l'événement à supprimer