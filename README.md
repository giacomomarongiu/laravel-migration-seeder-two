# Descrizione
Creiamo una tabella trains e relativa Migration.
Ogni treno dovrà avere almeno:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto.

Inserite inizialmente i dati tramite PhpMyAdmin o artisan tinker per chi ne ha capito l'utilizzo.

Create il modello Model relativo alla migrazione che avete predisposto al fine di mappare la tabelle del db ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

## Steps
- composer create-project laravel/laravel:^10.0 laravel-migration-train
- composer require pacificdev/laravel_9_preset
- modifico file in cjs
- php artisan preset:ui bootstrap
- npm install
- npm run dev
- php artisan serve

- modifico file env

Faccio la prima migration con le "table" di default su Laravel
- php artisan migrate

Creo la mia tabella trains come da esercizio
- php artisan make:migration create_trains_table

Aggiungo le colonne della mia tabella nel file appena creato in migrations

- php artisan migrate per caricare la tabella nel db


Oltre alle 4 tabelle di default (e la mia appena caricata) c'è la tabella migrations. Questa tabella:
1) tiene traccia delle migration caricate nel db 
2) Assegna un valore incrementale chiamato batch

Nel caso volessi fare l'operazione inversa:
- php artisan migrate:rollback

Mi permette di "revocare" la migration con il valore di batch più alto

Nel caso volessi aggiungere una colonna
- php arstisan make:migration add_NOME_to_trains_table

Nel caso volessi aggiungere più di una colonna
- php artisan make:migration update_trains_table --table=trains (da rivedere)

Devo aggiungere degli elementi alla mia tabella, ci sono due possibilità:
1) Su phpmyadmin
2) Da linea di comando con: 
- php artisan ti

Per usare ti prima di tutto mi occorre creare una Model in grado di immagazzinare le info:
php artisan make:model Train

- php artisan ti
- $train = new App\Models\Train
- $train->enterprise = "Italo"
- $train->enterprise = "Italica Treni"
- ecc...
Se voglio inserie un'altra riga:
- $train = new App\Models\Train
Per uscire 
- exit

Per gestire gli elementi mi serve un Controller
- php artisan make:controller Guests/TrainsController -m Train

Nel mio controller avrò tutta una serie di metodi di default
Li cancello e lascio solo index e show (per ora)

Adesso posso creare le mie route
E visualizzare il dd nel mio db con il Train Controller