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
4. Con explode ci salviamo in un altra variabile il testo sotto forma di array cosí da poter sapere quante parole ci sono con count.
5. Con str_replace sostituiamo *** alla parola decisa in precedenza.
6. Con un altro str_replace andiamo a rimuovere anche *** (ci servirá per contare quante sono le parole effettive rimaste).
7. Con un altro explode ed un altro count andiamo a contare le parole rrimaste visibili dopo la censura.
8. Creiamo una variabbile che sottragga il numero di parole rimaste a quello inizziale per ottenere il numero di parole censurate.