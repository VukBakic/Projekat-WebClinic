# Faza 7 - Testiranje


## Neophodno za testiranje

Uraditi sledeci mysql upit u bazi

```sql
INSERT INTO `korisnik` (`idK`, `sifra`, `ime`, `prezime`, `email`, `jmbg`, `brLk`, `pol`, `brTel`, `idUloge`) VALUES (NULL, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Test', 'Test', 'test1@test.com', '0000000000000', '00000000', 'm', '0000000000', '0');
INSERT INTO `klijent` (`idKlijent`, `izabraniLekar`) VALUES ($idKorisnik, '2');
```

## Neuspesni testovi

Chrome webdriver:
```python
src\PromenaAdminProfila.java
```
Sluzbenik moze da izmeni/obrise administratoru profil koristeci direktan link do kontrolera.

Selenium IDE:
```python
src\Testovi.side Promena profila - Email u upotrebi
```
Test prolazi uspesno ali se ne vidi tekst u flash poruci.
