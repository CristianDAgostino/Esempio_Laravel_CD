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


# realzione one to many per andare a gestire un utente che mette in relazione un utente che in questo caso con tanti libri
Ogni campo è relazionato ad un campo
1. aggiungere colonna alla migrazione di create books table
2. php artisan make:migration add_user_id_column_to_books_table


creami una migrazione aggiungendo una colonna che si chiama user_id alla books table.

DALLA DOCUMENTAZIONE
3. e nella migrazione adesso usare unsignedBigInteger cioè intero senza segno autoincrementale.
4. chiamare poi la chiave esterna che si riferisce all'id degli utenti
5. gestire down delle migrazione sempre dalla documentazione in KEY
6. dobbiamo droppare la colonna e prima ancora scegliere il vincolo di integrità referenziale
7. adesso che ci sono anche dati nel database devo fare in modo che la nuova colonna faccia riferimento anche ai dati registrati prima attribuendo anche un valore nullable
8. nella funzione up allora 
9. Nel modello USER: 
<!--  public function books(){
        return $this->hasMany(Book::class);
    } -->
10. e nella tabella Book adesso fare il contrario però adesso i book appartengono ad un utente
<!-- ublic function user(){
        return $this->belongsTo(User::class);
    } -->
11. andare in bookController nella funzione create e andare ad inserire user_id con classe AUTH di andare in user e prendere id e aggiungerlo in Book.php il fillable
12. quindi per eseguire in questo caso l'aggiunta del libro bisogna essere AUTH
13. per mostrare adesso il nome e lo user id tipo inserito da: user fa parte dell'oggetto song e quindi si può accedere alla funzione alla tabella degli utenti con 
<!-- {{$book->user->name}} -->
DALLA FUNZIONE USER MI VAI A PRENDERE IL NOME
14. però se è stata inserita da qualcuno che non ha lo user id e si può usare l'operatore ternario
<!-- {{$book->user_id ? $book->user->name : 'unknown user'}} -->
Se esiste qualcosa altrimenti mi fai.
OPPURE: 
<!-- {{$song->user->name ?? 'unknown user'}} -->
# andare ad entrare nella tabella song e poi user si chiama TRAVERSAMENTO DEL MODELLO, si parte dall'oggetto di classe song e richiamo modello user e ho accesso a tutti i dati.
15. adesso andare nella show per permettere solo all'utente con ID di modificare ed eliminare i propri libri PRIMA LATO FRONTEND con un if 
<!--  @if (Auth::user() && Auth::user()->id == $song->user->id) -->
Se l'utente è loggato e l'id dell'utente loggato è uguale all'id che ha inserito il libro me li fai vedere
17. però adesso andrebbe in errore la visualizzazione della pagina per coloro che non hanno un 'id' per cui andare a modificare la logica e ottimizzare il codice inserendo @auth ed @endauth quindi sarà nella pagina show:
<!-- @if (Auth::user()->id == $book->user_id || $book->user_id == NULL) -->
quindi vedrà i bottoni di coloro che sono utenti sconosciuti altrimenti non può modificare quelli di altri utenti
16. adesso andare a verificare anche backend
17. andare nel bookController nella edit 
<!-- if(Auth::user()->id == $book->user_id){
            return view('book.edit', compact('book'));
        } -->
se l'utente è loggato e ha l'id uguale all'utente che ha inserito il libro mi ritorni la vista.
altrimenti return 
<!-- return redirect()->back()->with('denied', 'denied access'); -->
18. andare nel layout e e richiamare il messaggio chiamato denied
19. adesso dobbiamo farlo anche per la update nel bookController e nella destroy e lo incollo per primo e spostare dentro l'if anche eventuali messaggi e il redirect back fuori seguire quindi BENE nella edit la forma

# creare dashboard utente per andare a vedere quali canzoni ha inserito l'utente
1. rotta
2. PublicController per pulizia e quindi si visualizza e inseriamo il middleware per permettere solo agli autenticati di poterlo fare
13. implements HasMiddleware e importare classe 
14. static function che ritorna un array
<!-- 
    public static function middleware(){
        return[
            new Middleware('auth', only: ['dashboard'])
        ];
    } -->
crea una funzione middleware che si chiama auth SOLO alla dashboard 
15. creare pagina che abbiamo chiamato auth.dashboard quindi views>auth>dashboard e riempirla
16. tramite la tabella books e parto dall'utente loggato e vado a recuperare tutte le canzoni dell'utente
17. per richiamare il nome non serve fare la cosa della show e richiamarla in quel modo basta Auth::user()->name perché siamo autenticati
18. creare l'impaginazione con le cards copiandola dalla index e però nonn abbiamo books as book perché dobbiamo ricordare che siamo loggati e fare queste azioni solo da loggati con questo foreach
<!--  @foreach (Auth::user()->books as $book) -->
19. la query del foreach sulla dash board è lato frontend ma si può fare backend e andare nel publicController nella funzione dashboard e creare una variabile books e recuperare tutte le mie canzoni
<!--  $books = Book::where('user_id', Auth::user()->id)->get();   -->
Nella tabella delle canzoni trova user_id e vedi se è la colonna dell'utente attualmente loggato e mi prendi i dati delle canzoni molto più specificato
se l'id è uguale a quella dell'utente mi mostri i dati, li prendi
20. fare una compact nella view dandoli alla vista
21. quindi il foreach se la query è backend sarà:
<!--  @foreach($books as $book) -->
# inserire le ultime 3 cards inserite
1. funzione homepage nel publicController
<!--  $books = Book::orderBy('created_at', 'desc')->take(3)->get(); -->
creo una variabile books e nella tabella Book me li ordini dalla colonna created at in modo decrescente e me ne prendi 3 e li porti alla vista
2. mettere la compact di songs