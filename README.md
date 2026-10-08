Exemple Observer pattern php
===

### Per iniciar el server

```bash
symfony server:start:
```

### Llançar command amb fluxe d'exemple:

```bash
bin/console app:observer:behavior
```
Aquest exemple de fluxe fa el seguent:

- Crea un objecte Observable
- Crea i Suscriu dos objectes, ObservableTrue i ObservableFalse al subjecte
- Modifica l'estat de l'observable, notificant als suscriptors.
