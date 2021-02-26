## Roads

| ROADS                             | libelle                                 | settings for request                                 | type request |
| --------------------------------- | --------------------------------------- | ---------------------------------------------------- | ------------ |
| _userRouter_                      |                                         |                                                      |              |
| `/user/:id`                       | get user                                | `_id:` `string`of user in url                        | GET          |
| `/user-create `                   | create user                             | `data:` `object` with info form create company       | POST         |
| `/confirme-account`               | validate account                        | `password:` `string ` password user                  | POST         |
|                                   |                                         | `dataCryptedFormatUrl:` `string` key crypted         |              |
| `/user-update`                    | update user                             | `oldPassword:` `string` old password user            | POST         |
|                                   |                                         | `password:` `string` new password user               |              |
|                                   |                                         | `_id:` `string` id of user update                    |              |
|                                   |                                         | `data:` `object` with info update user               |              |
| `/user-delete/:id`                | delete user                             | `_id:` `string` of user in url                       | DELETE       |
|                                   |                                         |                                                      |              |
| _uploadRouter_                    |                                         |                                                      |              |
| `/files-i`                        | get files                               | -                                                    | GET          |
| `/file/logo-numerica`             | update logo numerica                    | `data:` `FormData` file logo numerica                | POST         |
| `/file/logo-identifiant`          | update logo identifiant                 | `data:` `FormData` file logo identifiant             | POST         |
| `/file/logo-menu`                 | update logo menu                        | `data:` `FormData` file logo menu                    | POST         |
| `/file/logo-numerica-footer`      | update logo numerica footer             | `data:` `FormData` file logo numerica footer         | POST         |
| `/file/logo-update-element`       | update logo update element              | `data:` `FormData` file logo update element          | POST         |
| `/file/logo-close-update-element` | update logo close update element        | `data:` `FormData` file logo close update element    | POST         |
|                                   |                                         |                                                      |              |
| _themeColorRouter_                |                                         |                                                      |              |
| `/themes-colors`                  | get themes colors                       | - no active                                          | GET          |
| `/cu-theme-color`                 | active or not dark mode                 | `name:` `string` name of theme color                 | POST         |
|                                   |                                         |                                                      |              |
| _stateRouter_                     |                                         |                                                      |              |
| `/states`                         | get states                              | -                                                    | GET          |
|                                   |                                         |                                                      |              |
| _sectorRouter_                    |                                         |                                                      |              |
| `/sectors/:id`                    | get sector of company                   | `_id:` `string` of company in url                    | GET          |
|                                   |                                         |                                                      |              |
| _roleRouter_                      |                                         |                                                      |              |
| `/roles`                          | get roles                               | -                                                    | GET          |
|                                   |                                         |                                                      |              |
| _companiesRouter_                 |                                         |                                                      |              |
| `/companies-admin`                | get companies of user connected (admin) | - (use `req.user.id` for selected companies)         | GET          |
| `/company/:id`                    | get company                             | `_id:` `string` of company in url                    | GET          |
| `/company-create`                 | create company                          | `company:` `object` with info company                | POST         |
|                                   |                                         | `sectors:` `array of string` with sectors of company |              |
| `/company-update`                 | update company                          | `data:` `object` with info company                   | POST         |
| `company/:id`                     | delete company                          | `_id:` of company in url                             | DELETE       |
|                                   |                                         |                                                      |              |
| _authRouter_                      |                                         |                                                      |              |
| `/sign-in`                        | connect user                            | `email:` `string` of user connect                    | POST         |
|                                   |                                         | `password:` `string` of user connect                 |              |
| `/sign-out`                       | disconnect user                         | - (delete jwt of user)                               | GET          |
| `/access-token-api-rome`          | access of api rome work                 | - (info connect in api)                              | GET          |
| `/verification-connect`           | verification user connected             | - (info of user in req)                              | GET          |
|                                   |                                         |                                                      |              |
