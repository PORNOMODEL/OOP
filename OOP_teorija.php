<?php

//1.	Kuo skiriasi abstrakti klasė nuo įprastos? Įvardinkite du pagrindinius skirtumus/savybes.
Pagrindinis skirtumas tarp abstrakčios klasės ir įprastos klasės yra tas, kad abstrakti klasė negali būti tiesiogiai naudojama.

1. Negalima sukurti abstrakčios klasės objekto.

2. Abstrakčioje klasėje yra bent vienas abstraktus metodas.

//2.	Kokie yra PHP metodų/savybių matomumo lygiai. Trumpai juos aprašykite.
Public - metodai ir savybės, kurie yra deklaruoti kaip vieši, yra pasiekiami iš bet kurios kodo dalies, įskaitant kitas klases ir objektus.

Protected - metodai ir savybės, kurie yra deklaruoti kaip apsaugoti, yra pasiekiami tik iš klasės, jos paveldėtų klasės ir objektų.

Private - metodai ir savybės, kurie yra deklaruoti kaip privatus, yra pasiekiami tik iš tos pačios klasės, kurioje jie yra deklaruoti.

//3.	Kokia yra keyword’o “break” paskirtis? Kur jis dažniausiai naudojamas?
Dažniausiai naudojamas "switch" ir "for", "while", "do-while" ciklų struktūrose, siekiant nutraukti ciklo vykdymą arba išeiti iš kodo.

//4.	Kokia yra keyword’o “continue” paskirtis? Kur jis dažniausiai yra naudojamas?
Dažniausiai naudojamas cikluose, kad būtų praleidžiamas dabartinio ciklo iteracijos žingsnis ir tęsiamas kito iteracijos vykdymas.

//5.	Įvardinkinte jums žinomas su slaptažodžių hash’avimu susijusias PHP funkcijas. Trumpai paaiškinkite kokia yra jų paskirtis.
password_hash() - skirta sugeneruoti saugų slaptažodžio hash'ą, naudojant vieną iš galimų hash'avimo algoritmų.

password_verify() - patikrinta ar slaptažodis atitinka saugų hash'ą.

password_needs_rehash() - patikrinta ar slaptažodžio hash'as yra tinkamo formato ir ar jis buvo sugeneruotas naudojant šiuolaikinį hash'avimo algoritmą. 

//6.	Kas yra interfeisas? Trumpai apibūdinkite kam jis yra skirtas.
Apibrėžia konkrečius metodus ir savybes, kurias turi turėti tam tikros klasės arba objektai, siekiant užtikrinti tam tikrą elgseną ar funkcionalumą.

//7.	Kas yra extendinama, o kas implementuojama?
Extendinama -  Leidžia praplėsti esamus funkcionalumus ar pridėti naujų funkcijų prie jau egzistuojančių klasių.

Implementuojama - Sukuria naujas klases arba objektus, kurie įgyvendina tam tikrą funkcionalumą ar paslaugas.

//8.	Kuo skiriasi klasės statinis kintamasis nuo klasės konstantos?
Statinis kintamasis yra keičiamas ir yra bendras visiems klasės objektams, o konstanta yra nesikeičianti, bet yra bendra visiems klasės objektams.

//9.	Kokius metodus abstrakčioje klasėje padarome abstrakčiais?
Kai metodas yra abstraktus, reiškia, kad jis yra tik apibrėžtas, bet neįgyvendintas ir toks metodas turi būti įgyvendintas klasėje, kuri paveldi abstrakčią klasę.

//10.	Parašykite keletą pavydžių kaip gali būti aprašyta konstanta ir ji iškviesta?
define('MAX_VALUE', 100);
echo MAX_VALUE;

//11.	Kada yra naudojama static žodelis?
Kai norima sukurti kintamąjį ar metodą.

//12.	Kaip yra objektas perduodas į metodą?
Kaip argumentas.

//13.	Kas yra composer?
Leidžia įrašyti tinkamos versijos PHP paketą ar jį atnaujinti.

//14.	Parašykite komandas kurias naudosite su composeriu norėdami jį sukonfiguroti, kažką parsisiųsti ir jei reikia atnaujinti.
composer init
composer install
composer update

//15.	Kas yra dependency injections?
Yra dvi formos 'Constructor injection' ir 'Setter injection' kuriuos padeda sumažinti priklausomybes tarp modulių ir padaro kodą tvarkingesnį ir lengviau testuojamą.

//16.	Kuo yra gerai MPA?
Nes paprastai naudojamas, greitas, lengvas kodo valdymas ir gerai tinka mažiems projektams.

//17.	Kam yra skirtas try ir catch blokas? Parašykite pavyzdį
Apdoroti klaidas ar išimtis.
try {
   $x = 1/0;
} catch (DivisionByZeroError $e) {
   echo "Klaida: ".$e->getMessage();
}

//18.	Ar galima klasės konstantas pasiekti globaliame lygyje?
Galima

//19.	Kaip vadinasi klasė turinti statinį metodą? Parašykite pavyzdį
static class 

class StaticClass {
    public static function staticMetod() {
        return "Tai yra statinis metodas";
    }
}
echo StaticClass::staticMetod();

//20.	Ar protected metodas gali būti pasiekiamas globaliame lygyje?
Negali