# Statistika v košarki

**Avtorja:** [Tim Rekelj (63210277)](https://github.com/timrekelj) in [Andraž Adamič (63210003)](https://github.com/andrazadamic)

Z statistiko košarkarskih tekem bi pomagali digitalizaciji košarke v Sloveniji. Informacijski sistem bi vseboval tekme, statistike na teh tekmah in pa podatke o igralcih, ekipah, sodnikih ter trenerjih. Podatke bodo avtenticirane osebe lahko vpisovale, ostali uporabniki pa bodo lahko spremljali te podatke in navijali za svoje najljubše igralce ter ekipe.

### Uporabljene tehnologije
- **backend:** Laravel
- **frontend:** React
- **database:** PostgreSQL

### Delovanje spletne aplikacije
API server je narejen z frameworkom Laravel, ta se pogovarja s postgresql podatkovno bazo. Do API serverja lahko dostopamo prek spletne strani ali pa prek API requestov.

![Login](/docs/images/login.png)
![Insert](/docs/images/insert.png)
![Dashboard](/docs/images/dashboard.png)
![API Request](/docs/images/api_request.png)

### Delo posameznih članov
Tim Rekelj: postavitev strani na server in povezava z domeno, pomoč pri API serverju, frontend
Andraž Adamič: Gradnja podatkovne baze, ogrodje API serverja, frontend

### Podatkovni model podatkovne baze
![Podatkovna baza](/docs/images/Database.png)
![Avtorizacija](/docs/images/AuthDB.png)

## Razvoj spletne aplikacije

### Potrebe za zaganjanje spletne strani

- php (tested on version 8.1.13)
- php-pgsql
- npm
- php-pdo

### Zagon spletne strani
1. `npm install`
2. `npm run dev`
3. odpremo nov terminal in pustimo `npm` da teče
4. `php artisan serve`
5. aplikacija teče, do nje dostopamo na URL-ju [localhost:8000](http://localhost:8000/)

> Če je med zagonom prišlo do napake, si lahko pomagamo z [laravel dokumentacijo](https://laravel.com/docs/9.x/installation)