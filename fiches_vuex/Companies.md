## State

```js
//all companies
companiesAdmin: Array

//id of company selected and save in localstorage to persist data in case of recharging
idCompaniesSelected: localStorage.getItem("idCompanySelected")
    ? JSON.parse(localStorage.getItem("idCompanySelected"))
    : ""

//company selected by current user
companySelected: Object,
```

## Getters

```js
//return array of all companies
companiesAdmin: Function (state) => Array,

//id of company selected
idCompaniesSelected: Function (state) => String,

//infos company selected
companySelected: Function (state) => Object,
```

## Mutations

```js
//save companies in store companies that comes from database
// state update:
state.companiesAdmin
addAllCompaniesUserConnected: Function (state, companies) => void

//add id company selected
// state update:
state.idCompaniesSelected,
localstorage
addIdCompanySelected: Function (state, idCompany) => void

//add info of company selected
// state update:
state.companySelected
addCompanySelected: Function (state, company) => void

//delete company selected for user
// state update:
state.companySelected
state.idCompaniesSelected
deleteCompaniesSelected: Function (state) => void
```

## Actions

```js
//get all appelations of trades in API ROM
roads API => `companies-admin`
getAllCompaniesAdmin: async FUNCTION => void

//get company selected and users of company
roads API => `company/${idCompany}`
roads API => `users/${idCompany}`
getCompanySelected: async Function (idCompany) => void

//update company selected
roads API => `company-update`
updateCompanySelected: async Function (companyData) => void

//create company
roads API => `company-create`
createCompany: async Function (company) => void

//delete company
roads API => `company/${id}`
delete: async Function (id) => void
```
