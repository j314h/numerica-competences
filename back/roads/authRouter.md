## companiesRouter

| ROADS                    | libelle                     | settings for request                 | type request |
| ------------------------ | --------------------------- | ------------------------------------ | ------------ |
| _authRouter_             |                             |                                      |              |
| `/sign-in`               | connect user                | `email:` `string` of user connect    | POST         |
|                          |                             | `password:` `string` of user connect |              |
| `/sign-out`              | disconnect user             | - (delete jwt of user)               | GET          |
| `/access-token-api-rome` | access of api rome work     | - (info connect in api)              | GET          |
| `/verification-connect`  | verification user connected | - (info of user in req)              | GET          |
|                          |                             |                                      |              |
