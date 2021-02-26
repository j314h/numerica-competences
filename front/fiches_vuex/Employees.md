## State

```js
//list referent of companies of admin user
employeesReferentOfCompaniesAdmin: Array;

//employees of company selected
employeesCompanySelected: Array;
```

## Getters

```js
//get referent employee in company of user connected
employeesReferentOfCompaniesAdmin: (state) => Array,

//get employees company selected
employeesCompanySelected: (state) => Array,
```

## Mutations

```js
//add employee referent of companies of admin
//state update :
state.employeesReferentOfCompaniesAdmin
addEmployeesReferentCompaniesAdmin: Function (state, referents) => void

//add employee of company selected
//state update :
state.employeesCompanySelected
addEmployeeCompanySelected: Function (state, employees) => void

//add new employee in company selected
//state update :
state.employeesCompanySelected
addNewEmployeeInCompanySelected: Function (state, employee) => void

//replace employee with employee updated
//state update :
state.employeesCompanySelected
updateArrayEmployeeInCompanySelected: Function (state, employee) => void
```

## Actions

```js
//create employee for company selected
roads API => `user-create`
createEmployeeCompanySelected: async Function => void

//update employe of company selected
roads API => `user-update`
updateEmployeeCompanySelected: async Function => void
```
