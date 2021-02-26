## companiesRouter

| ROADS              | libelle                                 | settings for request                                 | type request |
| ------------------ | --------------------------------------- | ---------------------------------------------------- | ------------ |
| _companiesRouter_  |                                         |                                                      |              |
| `/companies-admin` | get companies of user connected (admin) | - (use `req.user.id` for selected companies)         | GET          |
| `/company/:id`     | get company                             | `_id:` `string` of company in url                    | GET          |
| `/company-create`  | create company                          | `company:` `object` with info company                | POST         |
|                    |                                         | `sectors:` `array of string` with sectors of company |              |
| `/company-update`  | update company                          | `data:` `object` with info company                   | POST         |
| `company/:id`      | delete company                          | `_id:` of company in url                             | DELETE       |
|                    |                                         |                                                      |              |
