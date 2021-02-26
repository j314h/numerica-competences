## Features

| FEATURE                                | location       | description                                                                      |
| -------------------------------------- | -------------- | -------------------------------------------------------------------------------- |
| `verifUserConnect`                     | verify.conf.js | verifies that the user is logged in and known                                    |
| `verifUserAccesAmin`                   | verify.conf.js | check the role, it must be minimum to administrator                              |
| `verifUserAccesReferent`               | verify.conf.js | check the role, it must be minimum to referent                                   |
| `createUserHigtLevel`                  | verify.conf.js | prohibits the creation of high level user, if the logged in user is low level    |
| `changeStateHigtLevelForUserHigtLevel` | verify.conf.js | prohibits the change of high level user role, if the logged in user is low level |
| `createJwtToken`                       | jwt.conf.js    | create token                                                                     |
| `checkExpiredToken`                    | jwt.conf.js    | refresh token                                                                    |
| `extractUserFromToken`                 | jwt.conf.js    | extracts the user once the token is assigned                                     |
| `addJwtFeatures`                       | jwt.conf.js    | create feature for jwt                                                           |
| `error`                                | error.conf.js  | get the errors on the routes, and send the error back to the front               |
| `upload`                               | multer.js      | instance multer for upload file                                                  |
|                                        |                |                                                                                  |
