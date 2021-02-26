## State

```js
//info for current user
currentUser: Object;

//info for company of current user
currentUserCompany: Object;

//for sectors of company current user
sectorsCompanyCurrentUser: Array;

// connected
isSignIn: Boolean;
```

## Getters

```js
//retrun info user connected
currentUser: (state) => Object,

//recover id current user
idCurrentUser: (state) => String,

//return info company of user connected
currentUserCompany: (state) => Object,

//return sectors company
sectorsCompanyCurrentUser: (state) => Array,

//theme color
thColor: (state) => String,

//color background main content
bgContent: (state) => String,

//color text main content
colorText: (state) => String,

//color background sub menu
bgSubMenu: (state) => String,

//color backbround link active in menu
colorMenuActive: (state) => String,

//color background layout
bgLayout: (state) => String,

//color etiquette content
cbgBox: (state) => String,

//color text in array
colorTextTab: (state) => String,

//class of button mini
btnm: (state) => String,

//class of button size basic
btn: (state) => String,

//return bool for know if user is connected
isSignIn: (state) => Boolean,
```

## Mutations

```js
//request connect user succes
//state update :
state.currentUser
state.isSignIn
signInSuccess: Function(state, data) => void

//check exist token
//state update :
state.isSignIn
checkedJwt: Function(state, cookie) => void

//add company of current user
//state update :
state.currentUserCompany
addCompanyOfCurrentUser: Function(state, company) => void

//add sectors of company of current user
//state update :
state.sectorsCompanyCurrentUser
addSectorsCompanyCurrentUser: Function(state, sectors) => void

//delete data user connected for logout
//state update :
state.currentUser
state.isSignIn
logOutUser: Function(state) => void
```

## Actions

```js
//connect user with back end
roads API => `sign-in`
roads API => `company/${user.data.company}`
roads API => `sectors/${company.data._id}`
signIn: async FUNCTION => void

//verification user connected, verification in back end
roads API => `verification-connect`
roads API => `company/${user.data.company}`
roads API => `sectors/${company.data._id}`
verificationUserConnect: async FUNCTION => void

//disconnect user
roads API => `sign-out`
logOut: async FUNCTION => void

//change mode dark
roads API => `cu-theme-color`
modeDark: async FUNCTION => void

//update user referent minimum
roads API => `user-update`
roads API => `company/${user.data.company}`
updateCurrentUser: async FUNCTION => void

//update company's user referent minimum
roads API => `company-update`
updateCurrentUserCompany: async FUNCTION => void

```
