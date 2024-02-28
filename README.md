1.Kas ir API?

--Tas savieno klientu daļu un servera daļu

2.Kā deklarēt mainīgo PHP valodā?

--$nosaukums = vertiba;

3.Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā

--Laravel izmanto MVC(Model,View,Controller) Model nodrošina datus un reaģē uz kontroliera komandām, mainot tā stāvokli. View ir atbildīgs par modeļa datu parādīšanu lietotājam, reaģējot uz modeļa izmaiņām. Controller interpretē lietotāja darbības, paziņojot modelim par izmaiņu nepieciešamību.

4.Kas ir ORM, kāpēc to izmanto tīra SQL vietā?

--Programmēšanas tehnoloģija, kas saista datu bāzes ar objektorientētu programmēšanas valodu.Tas izmanto,jo vienkāršo parastās darbības, nodrošinā objektu kartēšanu un palīdz koda organizēšanā

5.Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus
lietotājus kuriem reitings ir lielāks par 4

--User::where('rating', '>' , 4)->get();