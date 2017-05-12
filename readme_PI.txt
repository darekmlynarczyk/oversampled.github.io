+ Do katalogu, w którym ma byæ Joomla wrzucamy pliki:

- punkinstaller.php (skrypt glowny, ktory jest po angielsku, bo tak ladniej wyglada :D )
- pclzip.php (najwazniejsza biblioteka, ktora robi tu wszystko za mnie)
- pclerror.php (dodaje go dla kosmetyki, jakby sie komus chcialo dorobic obsluge bledow)
- readme_PI.txt (ktore nie jest kodowane w ISO, bo jest 3 rano :P )
- joomla.zip (dowolna paczka instalacyjna, nazwe mozna zmienic juz na serwerze)

+ Uruchamianmy Punka przez www.nasz.adres.pl/ewentualnie_katalog/punkinstaller.php

- Jezeli wszystkie komunikaty sa na zielono to w katalogu powinna sie znalezc rozpakowana paczka
- beda na czerwono jak serwer nie popiera kompresji zip :P
- beda na czerwono jak nie znajdzie biblioteki pcl  (bo zapomnicie uploadowac)
- beda na czerwono jak w bibliotece pcl nie znajdzie narzedzi (nie wiem czemu)
- beda na czerwono jak kompresja sie nie powiedzie (obslugi bledow brak)
- beda na czerwono jak nie znajdzie joomla.zip (po skonczonej robocie se go przemianuje wiec za drugim razem nie znajdzie)

Jakby sie komus cos popsulo w bibliotece pcl to nalezy ja wziac z Joomla (/administrator/includes/pcl/), skrypt udaje ze jest tez Joomla i biblioteka sie nie obrazi :]

+ Usuwamy szybciorem pliki Punka, chociaz wiekszego ryzyka nie ma po po wykonanej operacji zmieni nazwe pliku na 346546457joomla.zap (cyfry losowe)