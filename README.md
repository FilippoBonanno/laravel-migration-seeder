<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<img src="https://img.shields.io/badge/template-tested-green" alt="Build Status">
<img src="https://img.shields.io/badge/laravel-10.10-red" alt="Laravel 10.10" />
<img src="https://img.shields.io/badge/bootstrap-5.3.2-red" alt="Bootstrap 5.3.2" />
<img src="https://img.shields.io/badge/vite-5.00-red" alt="Vite 5.00" />
<br>
<img src="https://img.shields.io/badge/license-boolean_95-blue" alt="Licensed to Boolean Students #95" />
<img src="https://img.shields.io/badge/license-boolean_109-blue" alt="Licensed to Boolean Students #109" />
<img src="https://img.shields.io/badge/license-boolean_125-blue" alt="Licensed to Boolean Students #125" />
</p>

# INFO

Questo git-template fornisce lo scaffold di una web application realizzata con Laravel 10, Blade, SCSS e Bootstrap. 

- [Documentazione Laravel 10.x](https://laravel.com/docs/10.x).

# SETUP INIZIALE

- Creare un repository a partire da questo template, cliccando in alto a destra sul pulsantone verde `Use this template` e poi su `Create a new repository`
- Clonare il repository appena creato sul proprio PC
- Da phpMyAdmin creare un database, importarvi i dati e segnarvi il nome dato al DB
- Creare un file `.env`. Si può procedere copiandolo da `.env.example`
- Per creare la APP_KEY nel `.env`, lanciare il comando dedicato, ma prima installare le dipendenze composer
	```bash
    composer install
	php artisan key:generate
	```
 - Installare anche le dipendenze NPM
	```bash
	npm i
	```
- Ri-controllare che tutti i dati nel `.env` siano corretti (attenzione al database!)
- Lanciare il progetto tramite il server built-in di PHP
	```bash
	php artisan serve
	```
- Lanciare vite
	```bash
	npm run dev
	```
- Puntare il browser all'indirizzo mostrato in terminale per controllare che tutto funzioni.
 	```
- Creiamo un Modello tramite un nuovo terminale con il comando:
	```bash	
	php artisan make:model Game
	```
- Colleghiamo il modello ad una tabella del DB creando una migration: 
	```bash
	php artisan make:migration create_games_table
	in questo modo potremmo creare la struttura della nostra table
	```
- Pushiamo la nostra table con il comando:
	```bash
	php artisan migration
	```
- Adesso creiamo il nostro seeder per poter popolare la nostra table:
	```bash
	php artisan make:seeder GamesTableSeeder

	Es; ("Si può anche usare un ciclo for")
	$gioco = new Game();
	$gioco->name = "Max Payne";
	$gioco->price = 12.99;
	$gioco->save();

	ricordando di importare il Model gioco: 
	use App\Models\Game;
	```
- Possiamo utilizzare Faker importandolo con:
	```bash
	use Faker\Generator as Faker; 
	e nella funzione public inserire (Faker $faker)
	```
- Ricontrollando i dati del nostro seeder , pushamo il seeder:
	```bash
	php artisan db:seed --class=GamesTableSeeder
	in questo modo specificando il seedere, oppure predisporre il seeder generale DatabaseSeeder 
	in modo tale che li pushi lui tutti quelli che gli dai
	e quindi si pusha senza specificare il seeder
	```
- Creiamo il nostro Controller standard:
	```bash
	php artisan make:controller PageController
	Meglio se li mettiamo in una sottocartella Guest
	```
- Colleghiamo la nostra Route al Controller:
	```bash
	Route::get('/', [PageController::class, "home o index"])->name("home");
	```
- Modifichiamo il nostro Controller inserendo una funzione:
	```bash
	public function index()	{
		// prendo i dati dal config
		$dati = config("data");
		// richiamo la vista
		return view('home', $dati);
	}
	```
- Adesso creiamo un Controller di tipo risorsa:
	```bash
	php artisan make:controller --resource GameController
	// dal PageController gestiremo le pagine statiche come home e about
	// invece con il nostro GameController gestiremo tutto ciò che riguarda
	// i giochi: la lista , il singolo gioco , il dettaglio del gioco, la pagina di modifica
	```
- Usiamo il nostro controller resource creando un'altra rotta:
	```bash
	Route::resource('/games', GameController::class);
	```
- Questo controller avrà diverse chiamate con diverse functions,
	carichiamo nel nostro metodo Get che si chiama index tutti i dati del nostro server e li mettiamo 
	in un array associativo che li contiene:
	```bash
	$gameList = Game::all();

	$data = [
		"catalog" => $gameList
	];

	// stampiamo tutto in una vista 
	return view("games.index", $data);
	// games.index perchè ci troviamo dentro la cartella delle view games
	```
- 	Creiamo una nuova cartella nelle view che conterrà tutte le view dei nostri giochi
	```bash
	// una pag che li elenca in lista, una che da i dettagli e una per modificarli
	// ad esempio la view per la lista 
	index.blade.php
	```
- 
	


