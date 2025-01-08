1. laravel new
2. database quindi .env e cambiare nomi e password
3. lanciare tutte le migrazioni perché non le vede quindi php artisan migrate e npm run dev e php artisan serve
4. resource view components e layout
5. AGGIUNGERE SLOT per potere rendere dinamico l'aggiornamento del sito
6. npm i bootstrap e andare ad inserirlo nei file e configurare in app css e js
7. robottino @vite per configurare tutto, prendere da vite.config.js l'array e inserire tutto nel layoutbladephp
8. npm è quello che attiva il robottino NodePackManager di vite.
9. creare i components e andare ad inserirli
10. terminale e lanciare fare controllo public e cambiare rotta in webphp e tagliare la funzione e inserirla in PC
11. richiamare il publicController e importare la classe
12. scrivere la funzione pubblica e rimandarla welcome e nella home della navbar far scattare quella rotta che rimanda alla home
13. creare connessione a tableplus per verifica.
14. SCAFFOLDING FATTO
15. dovrò installare fortify perché so che dovrò permettere un login da documentazione di laravel e migrare.
16. poi per permettere l'autenticazione e registrarsi sempre da documentazione authentication
17. in auth adesso creare cartella e inserire registerbladephp, login" e non serve gestire le rotte perché ce l'abbiamo già e gestire solo le viste e quindi andare a fare i form
18. nel form far scattare la rotta login e i metodi POST e poi csrf token per ogni form e negli input mettere i name che sono scelti da laravel.
19. dopo aver creato le pagine login e register mettere i link nella navbar
20. e poi andare in config fortify.php e andare a cambiare 'home' per far sì che non ci sia errore dopo la registrazione
21. andare a gestire gli errori di validazione
22. @error sotto gli input in login e register con il nome e poi richiamare {{$message}} per richiamare quelli già configurati da fortify
23. in ciao per far uscire il nomem {{auth::user()->name}} nella direttiva @auth
24. gestire la direttiva guest per quando non si è loggati
25. tramite js inline andare a permettere all'utente di sloggarsi
26. tramite js e l'attributo ONCLICK prendere il taganchor che non riesce a gestire il method POST che va comunque scritto e sovrascrivverlo e submit e inserire l'id. 
<!-- SPIEGAZIONE: previeni il comportamento di default e dopo che catturi l'id del pulsante fai submit e non più post -->
<!-- importante: sempre il csrf dopo OGNI FORM -->
27. andare a creare le colonne per il database e per i dati da inserire, la migrazione create table.
Tabelle plurale e modelli singolare e con un unico comando:
php artisan make:model Book -mcrR
modello singolare maiuscolo, -mcrR migrazione, controller, resources e R maiuscolo classe delle Request custom e crea le tabelle da gestire, il controller dedicato. "r" tutte le risorse relative al crud in bookController
28. creare la tabella con i dati che accetta e il nome della colonna


# Crud
1. andare a creare le colonne per il database e per i dati da inserire, la migrazione create table.
Tabelle plurale e modelli singolare e con un unico comando:
php artisan make:model Book -mcrR
modello singolare maiuscolo, -mcrR migrazione, controller, resources e R maiuscolo classe delle Request custom e crea le tabelle da gestire, il controller dedicato.
2. creare la tabella con i dati che accetta e il nome della colonna
3. so che è una roba fillable quindi nel MODELLO book e inserisco tutti gli attributi di riferimento che andranno compilati tranne data e created at
4. creare pagina che permetta il salvataggio quindi: rotta in web.php
5. webphp e rotta > bookcontroller e funzione nell'apposita funzione del CRUD
6. andare resources view e creare cartella 'book' in questo caso e inserirci la view e creare la pagina create
7. in ogni input mettere il name per laravel e mettere i type.
<!-- (step="0.01" per i number con due cifre dopo la virgola) -->
8. negli input mettere value e con sintassi blade possiamo, in caso di errori non far riscrivere tutto all'utente {{old('X')}}
9. permettere che si salvi tutto nel database tramite rotta di tipo post e book.store e poi bookcontroller:
'title' => $request->title,
prende la richiesta di title.
'cover' => $request->file('cover')->store('books-cover', 'public'),
per la cover è diverso perché immagine
dalla request devi prendere il file cover e salvarlo in books cover nella cartella public
e poi tornare alla home page con un messaggio
10. andare nella welcome per inserire lo snippet di codice
11. andare a gestire la request custom per gli errori in caso in StoreBookRequest e return deve essere cambiato in TRUE per autorizzare e poi in rules tutto.
12. andare a gestire i messaggi e gli errori all'interno di un array andando a prendere solo una regola
con :attribute va a richiamare dinamicamente il campo a cui fa riferimento o comunque con i ':'
13. andare a fare scattare la rotta nel form di 'create' e aggiungere method action csrf e enctype
14. aggiungere anche gli errori
15. rotta index e poi bookcontroller nella funzione index
<!-- compact permette di passare tutto quello che abbiamo scritto e preso dalla query in questo caso i libri e li mette a disposizione della vista. -->
16. creare pagina di index e ciclare per avere ogni libro aggiunto una card e creo il componente per la card perché può servire
<!-- <x-card :book="$book"/>

per far ciclare il singolo book nella card-->
17. inserire dinamicamente le info
18. LANCIARE COMANDO PER COLLEGARE STORAGE E PUBBLIC TRAMITE TERMINALE
php artisan storage:link
19. visualizzare dettaglio rotta e bookcontroller e passare dato {book}
20. tornare a card e metterci il link per la show e ricordare sempre di inserire l'oggetto libro
21. edit stessa cosa
22. gestire la rotta update " ma con metodo put per inserire nel database e faccio la stessa cosa di create eccetto
<!--  'cover' => $request->file('cover') ? $request->file('cover')->store('books-cover', 'public'), : $book->cover
se ti arriva una richiesta la cambi altrimenti mi lasci l'attuale -->
23. andare nella richiesta perché c'è una request updatebookrequest file già creato e cambiare in true
24. andare in edit e aggiustare form csrf e overwrite del metodo
@method('PUT')
25. per eliminare rotta delete e la funzione si chiama destroy
26. aggiungere form di tipo post e overwrite bottone di type submit