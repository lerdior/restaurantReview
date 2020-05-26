GitHub repository: https://github.com/lerdior/restaurantReview/

###### Forma za recenzije restorana - hrvatski

Projekt je napravljen sa svrhom da može pohranjivati sve podatke iz forme u XML. Ovakav oblik HTML forme i pohrane podataka, služio bi nekoj web stranici koja ima recenzije restorana. Zamišljeno je da stranica doda ovaj projekt na svoje sjedište te ga koristi kako bi korisnici mogli ostavljati svoje recenzije. Ti podaci se spremaju u XML, što bi se dalje moglo koristiti za ispis istih.

Pohrana podataka vrši se putem PHP-a koristeći DOM API. Ovo omogućuje proširivost XML-a na način da se svi podaci spremaju bez brisanja starih podataka.

Kako bi testirali funkcionalnost ovoga projekta potrebno ga je pohraniti u Xampp. Da bi to učinili datoteke koje se nalaze u ovome folderu potrebno je kopirati u: //xampp/htdocs
xampp folder se najčešće nalazi na C disku, no to ovisi gdje ste ga instalirali. 
Xampp možete preuzeti na sljedećem linku: https://www.apachefriends.org/download.html

Nakon što ste napravili ove korake potrebno je: 

- pokrenuti XAMPP Control Panel
- pokrenuti Apache servis tako da kliknete Start
- upaliti browser koji želite, te za URL upisati: localhost/aplikacija.php

Jednom kada ste na stranici aplikacija.php morate ispuniti formu. Nakon što ste ju ispunili možete stisnuti *Pošalji*. Nakon klika na gumb *Pošalji*, ukoliko su sljedeća polja ispunjena; *Ime, Prezime, E-mail i Naziv Restorana*; podaci će biti spremljeni u XML i dobiti će te poruku: *Hvala Vam na ispunjavanju!*. U slučaju da navedeni podaci nisu ispunjeni stranica će se "refreshati". Unutar aplikacija.php možete specificirati gdje želite da se korisnik nalazi nakon klika na gumb. Na samome kraju php koda pronaći ćete sljedeći zakomentirani kod: 

```php
//header("Location: http://www.yoururl.domain/");
```

U slučaju da želite koristiti funkcionalnost preusmjeravanja korisnika, maknite // sa početka *header* funkcije. Potrebno je zakomentirati *die* funkciju kako bi se *header* mogao izvršiti. Unutar *header* funkcije, nakon *Location*:, specificirajte link na koji želite da vaši korisnici budu odvedeni.



###### Restaurant review form - English

The project was created with the purpose of being able to store all the data from the form in XML. This HTML form and data storage would serve a website that has restaurant reviews. The site is designed to add this project to its web site and use it so that users can leave their reviews. This data is stored in XML, which could then be used to display it on their site.

Data storage is done via PHP using the DOM API. This allows XML to be scalable so that all data is saved without deleting old data.

In order to test the functionality of this project it is necessary to store it in Xampp. To do this, the files in this folder need to be copied to: //xampp/htdocs
The xampp folder is usually located on the C drive, but that depends on where you installed it.
You can download Xampp at the following link: https://www.apachefriends.org/download.html

Once you have made these steps you need to:

- launch the XAMPP Control Panel
- Start the Apache service by clicking Start
- open the browser you want, and for the URL type: localhost/application.php

Once you are on the application.php page you must fill out the form. Once you have filled it in you can press *Pošalji*. After clicking on the *Pošalji* button, if the following fields are filled in; *Ime, Prezime, E-mail i Naziv Restorana* ; the data will be saved in XML and you will receive a message: *Hvala Vam na ispunjavanju!*. In case the specified data is not filled in, the page will be refreshed. Within the application.php you can specify where you want the user to be after clicking the button. At the very end of the php code you will find the following commented code:

```php
//header("Location: http://www.yoururl.domain/");
```

In case you want to use the user redirection functionality, remove // from the beginning of the *header*  function. The *die* function needs to be commented out so that the *header* can be executed. Within the *header* function, after *Location:*, specify the link to which you want your users to be taken to.