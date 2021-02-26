## State

```js
//tab errors for all app
errors: Array;
```

## Getters

```js
//return array of errors
errors: Function (state) => Array

//return first error of errors array
firstError: Function (state) => String
```

## Mutations

```js
//add new error
//state update :
state.errors
addError: Function(state, error) => void

//reset tab error
//state update :
state.errors
resetError: Function (state) => void
```

## Actions

```js
null;
```
