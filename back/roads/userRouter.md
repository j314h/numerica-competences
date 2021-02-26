## userRouter

| ROADS               | libelle          | settings for request                           | type request |
| ------------------- | ---------------- | ---------------------------------------------- | ------------ |
| _userRouter_        |                  |                                                |              |
| `/user/:id`         | get user         | `_id:` `string`of user in url                  | GET          |
| `/user-create `     | create user      | `data:` `object` with info form create company | POST         |
| `/confirme-account` | validate account | `password:` `string ` password user            | POST         |
|                     |                  | `dataCryptedFormatUrl:` `string` key crypted   |              |
| `/user-update`      | update user      | `oldPassword:` `string` old password user      | POST         |
|                     |                  | `password:` `string` new password user         |              |
|                     |                  | `_id:` `string` id of user update              |              |
|                     |                  | `data:` `object` with info update user         |              |
| `/user-delete/:id`  | delete user      | `_id:` `string` of user in url                 | DELETE       |
|                     |                  |                                                |              |
