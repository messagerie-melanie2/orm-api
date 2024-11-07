# folder

[Retour à la documentation API](../README.md#utilisation-de-lapi)

API permettant de récupérer les informations d'un folder, d'un group et d'effectuer une recherche

## GET folder

Récupérer un folder à partir de son dn, récupère aussi des informations liée à la BAL qui contient les infos supplémentaire du folder (email, etc...)

### Utilisation

```url
GET /api/api.php/folder?dn=<folder_dn>
```

### Résultat

#### Événement simple
```json
{
  "success": true,
  "data": {
     "dn": "<folder_dn>",
      "ou": "<folder_ou>",
      "fullname": "<folder_fullname>",
      "email": "<bal_email>",
      "description": "<folder_description>",
      "type": "<folder_type>",
      "phonenumber": "<folder_phonenumber>",
      "faxnumber": "<folder_faxnumber>",
      "phoneformat": "<folder_phoneformat>",
      "street: "<folder_street>",
      "postalcode: "<folder_postalcode>",
      "locality: "<folder_locality>",
      "service: "<folder_service>",
  }
}
```

### Paramètres

 - `dn` : [Obligatoire] Chemin du dossier du folder à récupérer

## GET folderChildren

Récupère toutes les données enfants d'un folder (les autres folders, les users, les groups)

### Utilisation

```url
GET /api/api.php/folder/children?dn=<folder_dn>
```

### Résultat

#### Événement simple
```json
{
  "success": true,
  "data": {
    {
     "dn": "<folder_dn>",
      "ou": "<folder_ou>",
      "fullname": "<folder_fullname>",
      "email": "<bal_email>",
      "description": "<folder_description>",
      "type": "<folder_type>",
    }
    {
     "dn": "<user_dn>",
      "ou": "<user_ou>",
      "fullname": "<user_fullname>",
      "email": "<user_email>",
      "description": "<user_description>",
      "type": "<user_type>",
    }
  }
}
```

### Paramètres

 - `dn` : [Obligatoire] Chemin du dossier du folder à récupérer
 - `<field>` : [Optionnel] Filtre sur un des champs ex : (&type=user)
