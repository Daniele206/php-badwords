php-badwords
===

**Descrizione:**

- Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
- Gestire il tutto con due file diversi.
- Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
- Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

## Svolgimento

1. Creiamo la struttura, ovvero un file html con il form e un php dove andremmo poi a salvarci i risultati del form e andremo ad applicare la censura.
2. Andiamo a collegare il form al file php tramite action, e gli diamo un method (per i form meglio usare POST).
3. Andimao a stampare il testo nella paggian php.
4. Con strlen prendiamo la lunghezza de ltesto e la stampiamo, con str_replace andiamo a censurare la pola che vogliamo dal testo.
5. Andiamo poi a creare un'altra stringa dove andiamo a rimuovere anche la censura e la sostituiamo ad uno spazzio vuoto cosí da poter calcolare la lunghezza della frase con la censura.
6. Andiamo a creare una variabile che sottragga il numero di parole del testo censurato a quello del testo sensa censura, cosí da sapere quante sono le parole censurate. 