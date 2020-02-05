fst amz shadow search
=====================

small experiment made during Digital Methods Summer School 2019, Amsterdam.

a simple website that acts as a proxy to amazon search input, by prepending to the search query specific keywords.

## usage

run a `php` local server to make `search.php` works correctly (yes this could be done in any other server-side language).

```
php -S localhost:8000
```

open a new web browser and visit `localhost:8000`.

type a query in the top-right search input, select any other keyword option from the two columns below and hit `Search`.

you will be brought to an Amazon search result page, with pre-filled some query options (check the Amazon search input bar): eg, `feminism*`. this is the same as the one you typed in the `amz-shadow-search` search input bar!
