## State

```js
//all appelations of trades in api ROM
appellations: Array;

//details compétence of appellation selected
competenceOfAppellationSelected: Object;

//name of metier of current trade build
nameTrade: String;

//competence savoir of current trade build
competenceSavoir: Array;

//competence savoir faire of current trade build
competenceSavoirFaire: Array;

//competence transverse of current trade build
competenceTransverseSelected: Array;
```

## Getters

```js
//return competence of appellation selected
competenceOfAppellationSelected: (Function) => Array;

//return competence of basic of appellation selected
competenceBasic: (Function) => Array;

//return competence transverse of appellation selected
competenceTransverse: (Function) => Array;
```

## Mutations

```js
//add all appelations of trades of api rome in store
//state update :
state.appellations
addAppelation: Function (state, listAppelation) => void

//add appellation selected and with all competence her
//state update :
state.competenceOfAppellationSelected
addCompetenceOfAppellation: Function (state, competence) => void

//change name of file work current
//state update :
state.nameTrade
changeNameOfTradeCurrent: Function (state, name) => void

//add competence savoir selected of current user
//state update :
state.competenceSavoir
selectedCompetenceSavoir: Function (state, competence) => void

//add competence savoir faire selected of current user
//state update :
state.competenceSavoirFaire
selectedCompetenceSavoirFaire: Function (state, competence) => void

//add competence transverse selected of current user
//state update :
state.competenceTransverseSelected
selectedCompetenceTransverse: Function (state, competence) => void

//add new competences in competence of basic in competenceOfAppellationSelected
//state update :
state.competenceOfAppellationSelected.competencesDeBase
addNewCompetenceSavoir: Function (state, newCompetence) => void

//add new competences transver in competence of basic in competenceOfAppellationSelected
//state update :
state.competenceOfAppellationSelected.groupesCompetencesSpecifiques
addNewCompetenceTransverse: Function (state, newCompetence) => void
```

## Actions

```js
//get all appelations of trades in API ROM
roads API => `appellation`
getAppelationsOfTrade: async Function => void

//get all competence of appellation selected
roads API => `appellation/${codeAppellation}`
getCompetencesOfAppellations: async Function => void
```
