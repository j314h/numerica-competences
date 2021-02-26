## State

```js
//for sectors company selected
sectorsCompanySelected: Array,
```

## Getters

```js
//return sectors of company selected
sectorsCompanySelected: Function (state) => Array,
```

## Mutations

```js
//save sectors of company selected in store
//state update :
state.sectorsCompanySelected
addSectorsCompanySelected: Function (state, sectors) => void
```

## Actions

```js
//recover sectors of company seleted
roads API => `sectors/${idCompany}`
getSectorsCompanySelected: async Function (idCompany) => void

//create sectors
roads API => `sectors-create`
createSectorsCompanySelected: async Function => void

//update sectors of company
roads API => `sectors-update`
updateSectorsCompanySelected: async Function => void

//delete sectors
roads API => `sector/${data._id}`
deleteSectorCompanySelected: async Function => void

//create sectors of current user's company
roads API => `sectors-create`
createSectorsCurrentUser: async Function => void

//update sectors of current user's company
roads API => `sectors-update`
updateSectorsCurrentUser: async Function => void

//delete sectors of current user's company
roads API => `sector/${data._id}`
deleteSectorCurrentUser: async Function => void


```
