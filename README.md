# Zakochani w powstaniu

Projekt wykonany w ramach rekrutacji.

Layout zaprojektowany przez: Empressia

Strona zakodowana przez: Kajetan Krawczyk

Preview: http://kajtekjestem.pl/zakochani-w-powstaniu/index.html


# Zawartość
1. Początek layoutu to tooltip. Widnieje on tam, ponieważ nie należy do żadnego innego diva, a musi być absolutny do całości strony

2. Tutaj jest miejsce na tło. Dzięki temu zabiegowi, "lewituje" ono nad obrazkami obok listów, ale pod listami.

3. Teraz coś do owrapowania całości strony w jakichś wymiarach. Tutaj przyjąłem wymiar 1400px.

4. Logo z pliku

5. Menu górne. Bez linków. Zwykła lista przeistoczona w poziom.

6. Listy
- Papier, na którym widnieje treść listu
- Odnośniki, które reagują na najechanie myszką. Z atrybutów elementu są odczytywane: zdjęcie, typ, nazwa i opis.
- Rozsuwane przyciski po bokach. Najechanie na obiekt z listy podświetla wspomniany fragment w liście ale nie otwiera tooltipa.
- Autor listu. Tutaj nie ma nic szczególnego
- Data napisania listu. Też nic szczególnego

7. Stopka


# Na co warto zwrócić uwagę
1. Niecałe 100 linijek javascripta. Mógłbym skórcić bardziej, ale chciałem żeby kod pozostał jako tako czytelny; a ma parę ciekawych myków!
2. Wszystko handlowane za pomocą jQuery, które dla tego projektu ma parę bardzo fajnych przydatnych funkcji.
3. Skierowanie myszką na element w rozsuwanym menu podświetla element na aktualny kolor tekstu, a tekst zamienia na kolor biały. Fancy.
4. Tooltipy pokazują się idealnie nad tekstem do wspomnienia za pomocą łatwego działania matematycznego. 
```
        var top = $(this).offset().top;
        var left = $(this).offset().left;
        var width = $(this).width();

        var twidth = $(".tooltip").width();
        var theight = $(".tooltip").height();

        var fpos = top - 12 - theight;
        var fleft = left + width * 0.5 - twidth * 0.5;
```
5. Zawartość tooltipów jest generowana za pomocą atrybutów z HTMLa. Przykład:
```
    <b
    id="l-1-1"
    class="red tip"
    zdjecie="wydarzenie.jpg"
    typ="wydarzenie"
    nazwa="Incididunt"
    opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">incididunt
    </b>
```
...gdzie id pomaga odnaleźć elementowi z rozsuwanej listy element referencyjny, zdjecie jest wczytywane w tło diva tooltipa, a typ, nazwa i opis są wpisywane jako surowy tekst.

6. Korzystam z ikonek Material Design. Są bardzo ładne. Podobają mi się.

# Z czego nie jestem dumny

1. Polecenie zawierało prośbę zrobienia funkcji "czytaj dalej". Nie czułem, że ta funkcja w jakikolwiek sposób do tej strony pasuje. Poza tym, nie miałem jakiegoś specjalnego sposobu na implementacje takiego czytania dalej. Odpuściłem ten przycisk.
2. Obrazki po bokach. Niby nałożyłem na nie filtr w cssie i fajnie wygląda pod tą warstwą "papieru" półprzezroczystego, ale ich pozycja jest liczona relatywnie do góry strony. Bardzo niefajnie. Nie miałem innego pomysłu, który by nie wymagał narobienia się zanadto. Mógłbym liczyć pozycję listu za pomocą javascriptu, ale darowałem.
3. Layout mi się nie podoba, ale `do what you gotta do`.


# Ostatnie słowo
Projekt udostępniam publicznie na moim GitHubie. Był tworzony prywatnie, ale upubliczniam repozytorium. Prawa do layoutu należą do Empressia, ale nie przeszkadza mi jak ktoś ukradnie sobie troszkę kodu.

Nie załączam żadnej licencji.

Pozdrawiam
