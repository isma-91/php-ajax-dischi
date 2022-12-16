<?php
/*
Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, CSS, VueJS (importato tramite CDN), axios, PHP
Prima Versione:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Versione:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
- prima milestone: recuperare la lista dei dischi tramite una chiamata axios e stampare la lista dei titoli degli album all'interno di una lista non numerata (ul)
- seconda milestone: per ogni disco, stampare una card con tutte le informazioni
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere lato backend.
Consigli del giorno:
- per semplicità utilizzate vue tramite la cdn e non utilizzate i componenti: non è il focus di questo esercizio ;)
- create una cartella separata per ciascuna delle due versioni: una conterrà l'index.php, l'altra conterrà l'index.html e il file main.js. Il foglio di stile style.css sarà nella root dell'esercizio, in comune per entrambi gli index
- volendo, anche il file con i dati dei dischi potrebbe trovarsi nella root dell'esercizio ed essere in comune per entrambe le versioni. Ci sarà però bisogno di aggiungere un controllo per distinguere quando il file viene incluso tramite php o richiesto da una chiamata api
*/
?>