
#### List characters

Retrieve a `Collection` object with next 20 characters from the first page.

```php
$characters = new Character();
$characters->get();

foreach ($characters->results as $character) {
    echo $character->name;
}
```

Retrieve a `Collection` object with next 20 characters from the second page.

```php
$characters = new Character();
$characters->page(2)
    ->get();

foreach ($characters->results as $character) {
    echo $character->name;
}
```

#### Get character

Retrieve a `Character` object with id 1.

```php
$character = new Character();
$character->get(1);

echo $character->name;
```

#### Get multiple characters

Retrieve an array containing `Character` objects with id 1 and 2.

```php
$characters = new Character();
$characters->get(1,2);

foreach ($characters as $character) {
    echo $character->name;
}
```
