## State

```js
//title of head band
titleHeadBand: String,

//booleen for sub menu appear or not
isSubMenu: Boolean,

//boolean for checked if company is selected
outCompanySelected: Boolean,
```

## Getters

```js
//return array of imgs of app
imgs: Function (state) => Array
```

## Mutations

```js
//add img database in store and in localstorage
//state update :
state.imgs
addImgs: Function (state, imgs) => void
```

## Actions

```js
//et imgs of app
roads API => `files-i`
getFiles: async Function => void

//et imgs of app
roads API => `file/${targetUrl}`
updateImg: async Function ({ data, targetUrl }) => void
```
