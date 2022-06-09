# contact

[Retour à la documentation API](../README.md#utilisation-de-lapi)

API permettant de récupérer les informations d'un contacts, créer, modifier ou supprimer un contact

## GET contact

### Utilisation

```url
GET /api/api.php/contact?addressbook=<addressbook_id>&uid=<contact_uid>
```

### Résultat

```json

```

### Paramètres

 - `addressbook_id` : [Obligatoire] identifiant du carnet d'adresse auquel appartient le contact
 - `contact_uid` : [Obligatoire] identifiant du contact à récupérer

## POST contact

### Utilisation

#### Url
```url
POST /api/api.php/contact
```

#### Body
```json

```

#### Informations


### Résultat

```json
{
  "success": true
}
```

### Paramètres

 - `addressbook` : [Obligatoire] identifiant du carnet d'adresses auquel appartient le contact
 - `uid` : [Obligatoire] identifiant du contact à récupérer

## DELETE contact

### Utilisation

```url
DELETE /api/api.php/contact?addressbook=<addressbook_id>&uid=<contact_uid>
```

### Résultat

```json
{
  "success": true,
}
```

### Paramètres

 - `addressbook_id` : [Obligatoire] identifiant du carnet d'adresses auquel appartient l'événement
 - `contact_uid` : [Obligatoire] identifiant du contact à supprimer