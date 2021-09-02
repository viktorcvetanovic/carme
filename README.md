# CARME

### App for helping people to travel cheaper

This is project made in php, idea behind this is to help people to travel together on same locations and save some
money. Popular name for this is carpooling.

## For customer

Upustvo za koriscenje i prezentovanje:

* Pocetna strana poseduje formu koja kada se popuni upisuje podatke u bazu, sluzi za kotanktiranje.
* Postoji nav bar za prelazak na ostale strane
* Poseduje footer i header u posebnim komponentama
* Poseduje javascript animaciju (sat) na pocetnoj strani
* Poseduje ROLE admin i obican korisnik, ako se u polje user.role unese broj 1 on je admin i imace pristup brisanju
  postova.
* **Oglasi** bar sluzi da prikaze sve postove koji su korisnici dodali.
* **O nama** stranica koja prezentuje nas.
* Ima posebne css za svaku od strana
* Komunikacija sa bazom se vrsi kroz DATABASE klasu. Poseduje objekte koji se rucno mapiraju.
* **includes** folder predstavlja kao backend cele aplikacije tu se odvija logika.
* Baza se nalazi u **database** folderu potrebno je samo ubaciti je. Ime baze mora biti **carme** !
* Na svakoj stranici se nalazi favicon u baru.
* Logout je moguce klikom na svoj profil.
* Obicni korisnici mogu da brisu samo svoje postove dok drugi mogu sve.
* Nijedan korisnik ne moze pristupiti drugim stranicama ukoliko nije ulogovan.
* VAZNO JE NAPOMENUTI DA NIJE MOGUCE OBJAVITI POST AKO JE SLIKA PREVELIKA!!!