# Laravel Boolfolio - Project Technology

## Prima parte

### Descrizione:

```txt
Continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità Technology.
Questa entità rappresenta le tecnologie utilizzate ed è in relazione many to many con i progetti.
I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:
```

### Milestones:

<!-- &check; -->

-   [&check;] Creare la migration per la tabella technologies
-   [&check;] Creare il model Technology
-   [&check;] Creare la migration per la tabella pivot project_technology
-   [&check;] Aggiungere ai model Technology e Project i metodi per definire la relazione many to many
-   [&check;] Visualizzare nella pagina di dettaglio di un progetto le tecnologie utilizzate, se presenti

### Bonus 1:

-   [&check;] Creare il seeder per il model Technology.

### Bonus 2:

-   [&cross;] Aggiungere le operazioni CRUD per il model Technology, in modo da gestire le tecnologie utilizzate nei progetti direttamente dal pannello di amministrazione.

## Seconda parte

```txt
Continuiamo a lavorare sul codice di ieri, stessa repo.
```

### I task sono:

-   [&check;] Permettere all’utente di associare le tecnologie nella pagina di creazione e modifica di un progetto
-   [&check;] Gestire il salvataggio dell’associazione progetto-tecnologie con opportune regole di validazione
-   [&check;] Eliminare opportunamente le relazioni alla cancellazione del progetto/technology
