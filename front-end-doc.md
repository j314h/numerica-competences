# Documentation frontend

- Work in progress

## Roads / vue-router

- start page  
  `'/'` => router for HomeConnect view (connect user)  
  `'/dashbord-page'` => router for home page this app (user connected)

  - dashbord page  
    `'/dashbord-page/home'` => router for home page with dashbord primary content this app (user connected)  
    `'/dashbord-page/home/dashbord-home'` => router for home this dashbord  
    `'/dashbord-page/home/create-company'` => router for create company

  - setting app page  
    `'/dashbord-page/setting'` => router access root user, page for custom app

  - dashbord company  
    `'/dashbord-page/seecompany'` => router page of acces home dashbord company  
    `'/dashbord-page/seecompany/seecompany-home'` => router home dashbord company  
    `'/dashbord-page/seecompany/create-user'` => router create user for company selected

    - File work  
      `'/dashbord-page/seecompany/create-file-work'` => router file work for company selected
      `'/dashbord-page/seecompany/see-work'` => router for see all file work in company selected
      `'/dashbord-page/seecompany/create-work'` => router for create file work

- verify account new user  
   `'/user-verify-create'` => router access root user, page for custom app

## Datas / vuex

- ApiRom => [**File**](https://github.com/j314h/numerica_competences_documentation/blob/master/fiches_vuex/ApiRom.md)
- Companies => [**File**](https://github.com/j314h/numerica_competences_documentation/blob/master/fiches_vuex/Companies.md)
- CurrentUser => [**File**](https://github.com/j314h/numerica_competences_documentation/blob/master/fiches_vuex/CurrentUser.md)
- Employees => [**File**](https://github.com/j314h/numerica_competences_documentation/blob/master/fiches_vuex/Employees.md)
- Error => [**File**](https://github.com/j314h/numerica_competences_documentation/blob/master/fiches_vuex/Error.md)
- Files => [**File**](https://github.com/j314h/numerica_competences_documentation/blob/master/fiches_vuex/Files.md)
- Loading => [**File**](https://github.com/j314h/numerica_competences_documentation/blob/master/fiches_vuex/Loading.md)
- ParamApp => [**File**]()
- Roles => [**File**]()
- Sectors => [**File**]()
- States => [**File**]()
- Trades => [**File**]()
- ValidationAccount => [**File**]()

## Dependencies

```json
"@alfsnd/vue-bootstrap-select": "^0.4.4",
"animate.css": "^4.1.1",
"axios": "^0.21.0",
"core-js": "^3.6.5",
"qs": "^6.9.4",
"vue": "^2.6.11",
"vue-axios": "^3.2.2",
"vue-cookies": "^1.7.4",
"vue-router": "^3.2.0",
"vue-sweetalert2": "^4.1.1",
"vuex": "^3.4.0"
"node-sass": "^4.12.0",
"sass-loader": "^8.0.2",
```

- Documentation of dependencies
  - [Animate.css](https://www.npmjs.com/package/animate.css/v/4.1.1)
  - [axios](https://www.npmjs.com/package/axios)
  - [qs](https://www.npmjs.com/package/qs)
  - [vue-axios](https://www.npmjs.com/package/vue-axios)
  - [vue-cookies](https://www.npmjs.com/package/vue-cookies)
  - [vue-sweetalert2](https://www.npmjs.com/package/vue-sweetalert2)
  - [vuex](https://vuex.vuejs.org/)
  - [vue-router](https://router.vuejs.org/)
  - all dependencies of vue [here](https://vuejs.org/)
