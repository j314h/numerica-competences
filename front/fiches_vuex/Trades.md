## State

```js
//all trades of company selected
tradesCompanySelected: Array;

//api ROM
tokenApiRom: String;
```

## Getters

```js
//get array of trades of company selected
tradesCompanySelected: Function (state) => Array,

//return token of api rom
tokenApiRom: Function (state) => String,
```

## Mutations

```js
//add trades of company selected
//state update :
state.tradesCompanySelected
addTradesOfCompanySelected: Function (state, trades) => void

//add tokent api rom
//state update :
state.tokenApiRom
addTokenApiRom: Function (state, token) => void
```

## Actions

```js
//get trades of company selected
roads API => `trades/${idCompany}`
getTradesOfCompanySelected: async Function () => void

//get acces api ROM recover token and get all appellation
roads API => `access-token-api-rome`
getAccesApiRom: async Function () => void
```
