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

- ApiRom => [**FICHE**](https://github.com/j314h/numerica_competences_documentation/blob/master/fiches_vuex/ApiRom.md)
- Companies => [**FICHE**](https://github.com/j314h/numerica_competences_documentation/blob/master/fiches_vuex/Companies.md)
- CurrentUser => [**FICHE**](https://github.com/j314h/numerica_competences_documentation/blob/master/fiches_vuex/CurrentUser.md)
- Employees => [**FICHE**](https://github.com/j314h/numerica_competences_documentation/blob/master/fiches_vuex/Employees.md)
