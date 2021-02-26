## State

```js
//imgs of this app
imgs: localStorage.getItem("imgs") ? JSON.parse(localStorage.getItem("imgs")) : [],
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
//get imgs of app
roads API => `files-i`
getFiles: async Function => void

//update imgs of app
roads API => `file/${targetUrl}`
updateImg: async Function ({ data, targetUrl }) => void
```
