-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2017 at 03:45 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE `clanak` (
  `id_clanka` int(11) UNSIGNED NOT NULL,
  `id_kategorije_clanka` int(11) UNSIGNED NOT NULL,
  `id_korisnika` int(11) UNSIGNED NOT NULL,
  `naslov` varchar(150) NOT NULL,
  `sadrzaj` varchar(5000) NOT NULL,
  `seo_naslov` varchar(80) NOT NULL,
  `seo_opis` varchar(170) NOT NULL,
  `foto_url` varchar(160) NOT NULL,
  `foto_alt_tag` varchar(150) NOT NULL,
  `datum_vrijeme_objave` datetime NOT NULL,
  `datum_vrijeme_izmjene` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pozicija` int(11) UNSIGNED NOT NULL,
  `broj_pregleda` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`id_clanka`, `id_kategorije_clanka`, `id_korisnika`, `naslov`, `sadrzaj`, `seo_naslov`, `seo_opis`, `foto_url`, `foto_alt_tag`, `datum_vrijeme_objave`, `datum_vrijeme_izmjene`, `pozicija`, `broj_pregleda`) VALUES
(3, 2, 2, 'Kad developer otvori dušu na YouTubeu: ‘Gola istina’ Božidara Ševe', 'Božidar Ševo, danas iOS developer u Photomathu, tijekom studentskih dana sudjelovao je u brojnim natjecanjima, pokrenuo svoj startup, prošao inkubatorski program u ZIP-u, radio u Bellabeatu, a u posljednje nas vrijeme uveseljava YouTube serijalom ‘Gola istina’. U istom, transperentnom tonu, progovara za Netokraciju o pozitivnim, ali i negativnim iskustvima vezanima uz studentska tehnološka natjecanja, radu u domaćim tehnološkim tvrtkama, startup sceni, ali i opuštenijim, #tomidaj temama, poput upoznavanja legendarnog suosnivača Applea, Stevea Wozniaka. Nova godina, novi formati, a čast da sudjeluje u prvom (n)ovogodišnjem intervjuu tjedna dobio je Božidar Ševo. Nije to ni slučajno. Božidar i Netokracija prate se godinama, još otkako je počeo sudjelovati na studentskim natjecanjima te kreirao svoj startup, Backway. Danas radi u jednom od najzvučnijih domaćih startupa, Photomathu, aplikaciji domaće radinosti koja je zaludjela školarce diljem svijeta nudeći im mogućnost da rješavaju matematičke zadatke uz pomoć kamere telefona.‘Hakiranje’ vlastitog poslovnog razvoja – još na fakultetuNo, dolazak do mjesta na kojemu je danas nikako nije bio pravocrtan. Tako se Božidar nikada nije libio sudjelovati u raznim projektima, kao što su studentska natjecanja, ali ni pokretati vlastite, od već spomenutog Backwaya ili igara kao što je ColorTap, do serijala videa Gola istina, u kojem priča o svom putu, daje savjete, ali i otkriva škakljive detalje, primjerice, o tome kako je “hakirao” pobjedu na tehnološkom studentskom natjecanju te osvojio 10.000 kuna ili na koje je probleme naišao u procesu zapošljavanja u domaćim tehnološkim tvrtkama.“Smatram da smo svi odgovorni jedni prema drugima iznositi prave informacije”, započinje tako Božidar svoj video serijal, stoga sam i ja odlučila iskreno porazgovarati s njim i upitati ga – je li on startuperska Nives Celzijus? Odgovara mi kroz smijeh: Ako ova Gola istina bude popularna kao Gola istina Nives Celzijus, bit će to super!', 'Kad developer otvori dušu na YouTubeu: ‘Gola istina’ Božidara Ševe', 'Kad developer otvori dušu na YouTubeu: ‘Gola istina’ Božidara Ševe na tehnološkom studentskom natjecanju te osvojio 10.000 kuna', 'img/blog_photos/post_1484914950.png', 'Veliki mališani', '2017-01-19 12:06:19', '2017-01-20 14:16:02', 4, 16),
(4, 2, 2, 'Kako je hrvatski trojac analitičara predvidio Trumpovu pobjedu uz Facebook i Twitter', 'Hrvatski računarac, (astro)fizičar i politički ekonomist ispitaju nekoliko stotina ljudi na društvenim mrežama i predvide pobjedu Donalda Trumpa na američkim izborima? Ovaj pomalo šaljivi i daleko pojednostavljeni prikaz događaja prije nekoliko mjeseci činio bi se prilično nevjerojatnim, ali tako je bilo – britansko-hrvatski startup Oraclum Intelligence Systems uspješno je predvidio da će Hillary Clinton u konačnici imati više glasova, a opet izgubiti izbore, što su se tek rijetki usudili izreći. Jučer su održali predavanje u agenciji Bruketa', 'Kako je hrvatski trojac analitičara predvidio Trumpovu pobjedu uz Facebook i Twi', 'Hrvatski računarac, (astro)fizičar i politički ekonomist ispitaju nekoliko stotina ljudi na društvenim mrežama i predvide pobjedu Donalda Trumpa na američkim izborima?', 'img/blog_photos/post_1484832665.jpg', 'Kako je hrvatski trojac Trumpovu pobjedu uz Facebook i Twitter', '2017-01-19 14:31:28', '2017-01-20 12:20:22', 3, 0),
(5, 1, 2, 'Kako smo u 2016. dali svijetu ono što želi: Vađenje stvari iz kutija', 'Krajem 2016. počeli smo sa Otkutijavanjem, našom verzijom takozvanog ‘unboxing’ serijala u kojem smo jednostavno – vadili stvari, odnosno ‘gadgete’ iz kutija i pritom se dobro zabavljali. Ono što je počelo kao blagdanski serijal, ubrzo je postalo standardna rubrika Netokracije, a s otkutijavanjima nastavljamo u 2017., u kojoj se nadamo još kutija, dobrih proizvoda koje ćemo iz njih izvaditi i zanimljivih lokacija na kojima ćemo snimati cijeli proces.<br />\n<br />\nVjerojatno ste u životu barem jednom pogledali neki unboxing video. Bilo da su to igračke, gadgeti ili nešto sasvim drugo poput kozmetike, videi u kojima ljudi otpakiravaju razne stvari velik su trend na YouTubeu. Brza pretraga riječi unboxing na tom najpopularnijem video servisu ponudit će vam više od 50 milijuna rezultata, što je prilično velik broj videa za nešto tako specifično.<br />\n<br />\nAli, Ivane, zašto toliko volimo gledati ljude kako vade stvari iz kutija?<br />\nVjerojatno jedno od najboljih objašnjenja dolazi od PBS Idea Channela na YouTubeu, gdje voditelj Mike Rugnetta u 10 minuta objašnjava u čemu je tu zapravo stvar. Poput poreza, smrti i uhićenja poznatih osoba, ovakvi videi su očekivani, vrlo popularni, ali gotovo nikada viralni.<br />\n<br />\nCijenjeni su od strane širokih masa, ali nikada nećete čuti nekog tko govori kako su mu je najdraža upravo ovakva vrsta sadržaja. Čin otpakiravanja vjerojatno u nama budi osjećaj ugode kao da smo sami sudjelovali u tome, a i proizvodi nam se čine nekako – bližima.', 'Kako smo u 2016. dali svijetu ono što želi: Vađenje stvari iz kutija', 'Krajem 2016. počeli smo sa Otkutijavanjem, našom verzijom takozvanog ‘unboxing’ serijala u kojem smo jednostavno', 'img/blog_photos/post_1484832789.jpg', 'Kako smo u 2016. dali svijetu ono što', '2017-01-19 14:33:18', '2017-01-20 12:29:57', 3, 4),
(6, 1, 2, 'RSVP festival: Prijavite svoj ‘event’ za prvo izdanje regionalne nagrade Attend', 'Još nas dva i pol tjedna dijele od regionalnog festivala industrije događanja koji će se održati u Zagrebu. Uz predavanja i radionice organizatori su pripremili i prvu dodjelu godišnje nagrade Attend za najbolja događanja.<br />\n<br />\nU utorak i srijedu, 7. i 8. veljače, u Plaza Event Centru (nekadašnji Hypo Centar) očekuje nas program posvećen tehnologijama koje se koriste u event industriji i turizmu te onim događanjima koji doprinose razvoju turističkih destinacija. Regionalni festival RSVP okupit će oko 500 stručnjaka i predstavnika industrija povezanih s organizacijom događanja.<br />\n<br />\nTehnologije u industriji događanja<br />\nPrvoga dana naglasak će biti na tehnologijama poput virtualne i proširene stvarnosti koje olakšavaju organizaciju događanja, omogućuju interakciju sa sudionicima i pridaju događanjima dodatnu vrijednost. O mogućnostima virtualne i proširene stvarnosti govorit će Darian Škarica iz divIT-a, dok će James Morgan (EventTech Lab) održati predavanje na temu kako povezati sudionike na korporativnim događanjima. Uz to, bit će predavanje i na temu korištenja tehnologije i dizajna koje će voditi Natalia Fuchs (Silasveta).<br />\n<br />\nSrijeda će biti dan za event turizam. Program će otvoriti predavanje Erica Bakermansa iz NTBC-a Holland, agencije zadužene za brendiranje i marketing Nizozemske u svijetu, koji će govoriti o destinacijskom marketingu za poslovna događanja. Nakon toga, o hrvatskoj strategiji razvoja razgovarat će se na okruglom stolu pod nazivom ‘Kako postaviti Hrvatsku na mapu event organizatora’.', 'RSVP festival: Prijavite svoj ‘event’ za prvo izdanje regionalne nagrade Attend', 'Program će otvoriti predavanje Erica Bakermansa iz NTBC-a Holland, agencije zadužene za brendiranje i marketing Nizozemske u svijetu', 'img/blog_photos/post_1484833986.jpg', 'zdanje regionalne nagrade Attend', '2017-01-19 14:53:15', '2017-01-20 12:18:52', 1, 0),
(7, 2, 2, 'Težak izbor pred Grand PRix žirijem: Tko će postati komunikator godine?', 'Bliži se godišnja nagrada Hrvatske udruge za odnose s javnošću ‘Grand PRix’ kojom se dodjeljuju priznanja za izvrsnost u struci, a ove godini žiri očekuje posebno težak zadatak po pitanju nagrade za komunikatora godine. Ove godine se među nominiranima nalaze javnosti dobro poznata imena koja su u komunikaciji obilježila 2016. godinu, a među njima i jedan političar.<br />\n<br />\nNagrada Komunikator godine, koja se dodjeljuje u sklopu Grand PRixa Hrvatske udruge za odnose s javnošću, namijenjena je pojedincima prisutnima u javnom životu, ali koji ne dolaze iz struke odnosa s javnošću. Ove godine su za nagradu nominirani Boris Jokić, Bruno Šimleša, Marko Matijević, Zdravko Marić, te tim Hrvatske gorske službe spašavanja.<br />\n<br />\nBoris Jokić je bivši voditelj kurikularne reforme i od početka projekta se istaknuo jasnom i pozitivnom komunikacijom koju je nastavio unatoč napadima kojima je bio izložen, ističu iz žirija. Na popisu nominiranih se našao zahvaljujući beskompromisnoj i hrabroj komunikaciji te stoga što je ostao do kraja dosljedan svojim načelima.<br />\n<br />\nPo dosljednosti se ističe i još jedan kandidat. Književnik Bruno Šimleša svestrani je komunikator koji progovara o aktualnim temama. Vjerodostojan i autentičan, govori o osobnim iskustvima i uvjerenjima bez zadiranja u područje populizma.<br />\n<br />\nTreći nominirani Marko Matijević je pokretač portala srednja.hr koji se u borbi za učenička i studentska prava ne ustručava prozivati profesore, političare, ministre, pa čak ni predsjednicu države. Marko svojim primjerom mlađim, ali i starijim generacijama pokazuje kako novinari mogu gorljivo i strastveno štititi prava i potrebe mladih ljudi u Hrvatskoj, te kako se može i treba komunicirati intrigantne i teške teme.', 'Težak izbor pred Grand PRix žirijem: Tko će postati komunikator godine?', 'Da je riječ o zanimljivim kandidatima dokazuje i četvrto ime na popisu.', 'img/blog_photos/post_1484834262.png', 'Težak izbor pred Grand PRix žirijem: Tko će postati komunikator godine?', '2017-01-19 14:57:45', '2017-01-20 12:18:04', 2, 1),
(8, 2, 2, 'Što znači biti žena u Hrvatskoj u 21. stoljeću, iz virtualnog prostora govore žene Od5Do95', 'Od5Do95 prenosi ženska iskustva, ona intimna, ali i ona uvjetovana položajem žena u društvu. Bake, majke i kćeri iz virtualnog prostora progovaraju o tome što znači biti žena u Hrvatskoj u 21. stoljeću te kako se njihov životni put razlikuje od onog koji su prošle druge žene u njihovoj obitelji.<br />\n<br />\nMultimedijalni umjetnički web projekt Od5Do95 nastao je iz želje da se ispričaju ženske priče koje se ne mogu čuti u medijima. Prvi je to projekt udruge Media Punkt iza koje stoje Arijana Lekić-Fridrih, Andrea Kaštelan i Marin Leo Janković, inače iz područja kulture.<br />\n<br />\nNa ideju za pokretanje došli smo nakon što smo zapazili da su ženske priče kojima imamo pristup putem medija još uvijek velikim dijelom ili cenzurirane ili autocenzurirane. U konzervativnom društvu kakvo je hrvatsko o nekim se imanentno ženskim iskustvima uopće ne govori, a neke se vrijedne životne lekcije prenose isključivo usmenom predajom s koljena na koljeno.<br />\n<br />\nGledati intimna iskustva, objavljena javno, iz privatnog – intimnog prostora<br />\nIz tog su se razloga Arijana, Andrea i Marin odlučili na suvremeni medij. Od5Do95 zapravo je spoj filma i interneta jer je riječ o internetskoj platformi na kojoj korisnici mogu samostalno birati koje će priče, odnosno videe, odgledati i kojim redoslijedom. Na ovaj je način projekt približen svima koji razumiju hrvatski jezik, a bez obzira na to što su ženska intimna iskustva postala javna, korisnici ih mogu gledati kod kuće – u vlastitim intimnim prostorima. S obzirom na emotivnu srž videa, to se ispostavilo najboljim izborom, objašnjavaju autori.<br />\n<br />\nSvaka priča predstavlja jednu dob, tj. godinu života – od 5 do 95 godina, po čemu je projekt dobio ime. Svaki monolog je različit jer sugovornice same odlučuju o smjeru u kojemu teče razgovor. Ipak, zajednički trenutak svakog od njih je onaj misaoni kada intervjuirane djevojčice, djevojke i žene prekopavaju svoje živote, ističu iz udruge Media Punkt. Njihov projekt posebice je važan u kontekstu zlostavljanja žena, društvenom problemu po čijem pitanju država ne poduzima dovoljno.', 'Što znači biti žena u Hrvatskoj u 21. stoljeću, iz virtualnog prostora govore že', 'Od5Do95 prenosi ženska iskustva, ona intimna', 'img/blog_photos/post_1484834421.png', 'Što znači biti žena u Hrvatskoj u 21. stoljeću, iz virtualnog prostora govore žene Od5Do95', '2017-01-19 15:00:22', '2017-01-20 12:17:22', 1, 0),
(9, 1, 2, 'Revolucionarnih 5 minuta: Five kupio Studio Revoluciju', 'Ako ste u posljednje vrijeme zašli u zagrebačke urede tvrtke Five, mogli ste u njima naići i na cijeli tim iz Studija Revolucije. Ne, nije riječ o suradnji na još jednom projektu, iako ove tvrtke surađuju već deset godina. Naime, Five je prije nekoliko mjeseci kupio cijelu tvrtku i tako unio Revoluciju u svoje redove.Igre riječima na stranu, iako se ovdje nameću same po sebi, ove dvije tvrtke imaju dugu zajedničku povijest – tako su zajedno napravile pionirsku aplikaciju za tablete za Jutarnji list, a i kad je startup tvrtke Five, Shoutem, odlučio prije šest godina u potpunosti napraviti zaokret u poslovnom modelu i proizvodu, odnosno odmaknuti se od mobilnih društvenih mreža i fokusirati se na izradu aplikacija, Revolucija je i tu uskočila u pomoć.Viktor Marohnić, osnivač Fivea, prisjeća se tih dana i daje odgovor na pitanje zašto je i kako do kupovine došlo:S Revolucijom i Vladom [Končarem] znamo se sto godina. Počeci suradnje bili su još na prvoj verziji Shoutema, dok je još bio web platforma. Kad je Shoutem dobio investiciju, Vlado nam je puno pomogao svojim dizajnerskim znanjem oko UX-a tada nove Shoutemove platforme. Nakon toga radio je i na redizajnu Fivea i Shoutema, skupa smo radili i na prvom iPad appu za Jutarnji… Teško se svega uopće i sjetiti. Praktički ga već odavno smatramo članom tima, tako da je sve ovo zapravo samo “točka na i”.A što ćemo dalje, to se ne brinemo previše, Revolucija se svojom kulturom savršeno uklapa u naš tim: skromni, vrijedni, pametni – tri karakteristike koje su nama uvijek bile prioritet i na tome smo izgradili cijeli biznis.', 'Revolucionarnih 5 minuta: Five kupio Studio Revoluciju', 'S Revolucijom i Vladom [Končarem] znamo se sto godina. Počeci suradnje bili su još na prvoj verziji Shoutema, dok', 'img/blog_photos/post_1484834630.png', 'Revolucionarnih 5 minuta: Five kupio Studio Revoluciju kako bi proširio svoje usluge', '2017-01-19 15:03:58', '2017-01-20 12:29:32', 2, 1),
(10, 1, 2, 'Prijava govora mržnje na Facebooku ne funkcionira. Zašto bi prijava lažnih vijesti?', 'Moralo je doći do pobjede Donalda Trumpa na američkim predsjedničkim izborima da bi se digla buka oko poplave lažnih vijesti na ovoj društvenoj mreži, da bi Mark Zuckerberg ozbiljnije shvatio ovaj problem, da bi najavio žestoku borbu protiv neprovjerenog sadržaja. No, ta je borba, barem u ovom obliku, unaprijed izgubljena, uvjerena sam. Zato sam napisala predugačak tekst da bih uvjerila i vas.<br />\n<br />\nNakon što je Donald Trump pobijedio na izborima, izrazi na mnogim licima odavali su zabezeknutost, osim koji onih koji su pobjedu točno predvidjeli (poput tima hrvatskih analitičara, ali o njima drugom prilikom), a potom ljutnju, nakon koje je uslijedilo glasno traženje “krivaca”. Jedan od njih pronašao se na Facebooku, točnije činjenici da je upravo ta društvena mreža postala plodno tlo za širenje lažnih vijesti koje su, prema nekim procjenama, pogodovale polarizaciji glasača, a time rezultatima izbora.<br />\n<br />\nMark Zuckerberg prvo je tu tvrdnju odbacio, da bi samo nekoliko dana kasnije objavio kako se planiraju žešće uhvatiti u koštac s lažnim sadržajem. Problem je kompleksan, i s tehničke i s filozofske strane, rekao je tada, i nije pogriješio. S jedne strane Facebook ljudima daje glas koji može doći do stotina, tisuća, milijuna drugih, a s druge će odlučivati što će od tog sadržaja imati veći doseg, a što ne.<br />\n<br />\nKako je algoritam (neuspješno) zamijenio urednike<br />\nSličan se problem dogodio s trending dijelom Facebooka – društvena je mreža tu uposlila svojevrsne “urednike” koji bi procjenjivali što je od popularnih tema doista vrijedno isticanja, da bi ih potom otpustila i sve prepustila algoritmu, nakon kritika o pristranosti. No, algoritam je znao propuštati “zanimljive” stvari – kao što je bila “vijest” o tome voditeljica Fox Newsa Megyn Kelly otpuštena jer je tajno podržavala Hillary Clinton za predsjedničku kandidatkinju. Problem? Vijest je bila lažna. Prenijela ju je konzervativna stranica EndingtheFed.com sa stranice Conservative101.com, kojoj ovo nije bila prva lažna viralna vijest (navodili su kako Tom Hanks podupire Donalda Trumpa, iako je istina bila uprava suprotna).<br />\n<br />\nNo, članak je dovoljno puta podijeljen da bi zadovoljio uvjete da postane trending, čime je dobio dodatni doseg, a kako je sve prepušteno AI-ju, nitko to nije zaustavio… I priča ide u krug.', 'Prijava govora mržnje na Facebooku ne funkcionira. Zašto bi prijava lažnih vijes', 'Kako je algoritam (neuspješno) zamijenio urednike', 'img/blog_photos/post_1484834743.png', 'Prijava govora mržnje na Facebooku ne funkcionira.', '2017-01-19 15:05:45', '2017-01-20 12:15:25', 1, 0),
(11, 1, 2, 'Facebook Workplace: Hoće li vam na poslu intranet uskoro zamijeniti – lajkovi?', 'Facebook je početkom tjedna službeno predstavio Facebook Workplace, njihov dugoočekivani ‘groupware’ alat namijenjen malim, ali i velikim (u cijenama predviđaju organizacije od preko 10 tisuća zaposlenika) tvrtkama. Ima li rješenje, koje već koriste Booking.com, Telenor, Telecom Austria Group i Renault, mjesta u domaćim tvrtkama, u kojima je Facebook većinom eksterni komunikacijski alat, a interno – blokiran?<br />\n<br />\nŠto je Facebook Workplace (bivši Facebook for Work)<br />\nOvotjedna objava Facebook Workplacea vjerojatno vas nije iznenadila ni u čemu osim u promjeni imena (Facebook for Work se pojavio još 2014.) te najavi niza velikih klijenata poput Danonea koji je već u sustav dodao preko 100 tisuća zaposlenika. Facebook Workplace svojim korisnicima nudi poznate mogućnosti o kojima smo već pisali, među njima:<br />\n<br />\nDogađaje za organizaciju edukacija i sastanaka, iako nikako kao zamjena za tradicionalne kalendare poput Google Calendara ili Outlooka;<br />\nGrupe za komunikaciju odjela putem News Feedova i komentara;<br />\nJedinstveni News Feed cijele tvrtke;<br />\nLive chat tj. ćaskanje temeljeno na njihovoj Messenger platformi.<br />\nKako onda Workplace konkurira Slacku, a kako Microsoftovom Yammeru i Sharepointu?<br />\nIako se i u jednom i drugom slučaju radi o komunikacijskom alatu za tvrtke, Workplace je puno bliži Microsoftovom Yammeru (akviziranom 2012. za 1,2 milijarde dolara) i Sharepointu nego Slacku; popularnom chat alatu koji koriste mnoge hrvatske digitalne i tehnološke tvrtke pa tako i Netokracija. Microsoft je u svibnju ove godine predstavio iOS, Android i Windows 10 aplikacije za svoj sustav za poslovnu organizaciju kako bi konkurirao ne samo Slacku, već i Boxu i Dropboxu.<br />\n<br />\nSlack je puno učinkovitiji chat alat usporedimo li ga s Facebookovim chatom, a na domaćem tržištu prednost će, što se tiče mogućnosti tradicionalnih intranet alata, biti integracija s popularnim aplikacijama Word i Excel. Facebook želi brzo nadoknaditi nedostatak, što vlastitim razvojem, što partnerstvima s tvrtkama poput – Microsofta!<br />\n<br />\nMolim?<br />\n<br />\nMicrosoft je očito svjestan da bi Facebook for Work mogao biti značajan za njihove korisnike, s obzirom na to da je već naveden kao jedan od identifikacijskih partnera kroz svoj Microsoft Active Directory.', 'Facebook Workplace: Hoće li vam na poslu intranet uskoro zamijeniti – lajkovi?', 'Facebook je početkom tjedna službeno predstavio Facebook Workplace', 'img/blog_photos/post_1484834844.png', 'Facebook Workplace: Hoće li vam na poslu intranet uskoro zamijeniti – lajkovi?', '2017-01-19 15:07:29', '2017-01-20 12:14:26', 1, 0),
(12, 1, 5, 'Daniel Ackermann: Za najvišu kvalitetu kampanja potreban je uhodan ‘in-house’ tim', 'Nekoliko nas dana dijeli od festivala Dani komunikacija, gdje će se govoriti o aktualnostima i problematici u svijetu tržišnih komunikacija, a onima s najboljim kampanjama podijelit će se i nagrade. U neslužbenom dijelu programa, Pivi poslije predavanja, govorit će se o odnosu freelancera i agencija, a tu će sudjelovati i Daniel Ackermann, direktor agencije Degordian. Kako do nagrade Mixx, koju je agencija osvojila prošle godine, te zašto Degordian ne surađuje redovito s freelancerima, otkriva za Netokraciju.<br />\n<br />\nDegordian je iz tvrtke posvećene komunikaciji na društvenim mrežama izrastao u agenciju koja nudi potpune digitalne usluge. No, koliko je digitalno zapravo osvojilo tržišne komunikacije u Hrvatskoj i regiji i kako bi opisao trenutnu situaciju na njemu?<br />\n<br />\nZa vrijeme krize ulaganja u digitalno su se svake godine povećavala. Još uvijek jako kaskamo za zapadnom Europom, no napredak se definitivno vidi. Sve više agencija postoji – i sve više kvalitetnih agencija postoji. Više nije fokus samo na medijskom zakupu, već je širina daleko veća. Kvaliteta u Hrvatskoj nam raste te je nekolicina agencija počela značajnije izvoziti prema zapadu.<br />\n<br />\nMalo tržište, poligon za eksperimentiranje. Ili?<br />\nU samom digitalnom prostoru postoji mnoštvo trendova, a Degordian u posljednje vrijeme sve više napora ulaže u virtualnu stvarnost, o čemu ćemo još opširnije pisati. Tehnologija je spremna, svijest postoji, kaže Daniel, ali ističe i druge trendove, poput revolucije televizijskog oglašavanja, o čemu smo već detaljnije razgovarali s Anđelom Buljan Šiber iz agencije iZone, koja će upravo na tu temu voditi drugu Pivu poslije programa.<br />\n<br />\nDigital je “uništio” tiskane medije, no TV nije značajnije dirnut. Dolaskom Netflixa, YouTubea, Apple TV-a i ostalih, vjerujemo da će idućih godina ovaj dio biti disruptiran te da će se modeli oglašavanja značajnije promijeniti odnosno više nalikovati programmaticu ili, primjerice, Google Display Networku.<br />\n<br />\nNo, dopušta li jedno malo tržište, poput hrvatskog, eksperimentiranje s trendovima?<br />\n<br />\nI da i ne. Hrvatski klijenti vole inovativno i spremni su eksperimentirati. Uvijek s klijentima nađemo zajednički interes u testiranju nečeg novoga. S druge strane, Hrvatska je malo tržište i klijenti imaju manje budžete u odnosu na vanjska. Nove i eksperimentalne tehnologije uvijek su u prvoj fazi skuplje i teško je naći klijenta koji je financijski spreman sudjelovati u tome, tako da na kraju češće ipak nove stvari radimo s internacionalnim klijentima.', 'Daniel Ackermann: Za najvišu kvalitetu kampanja potreban je uhodan ‘in-house’ ti', 'Nekoliko nas dana dijeli od festivala Dani komunikacija, gdje će se govoriti o aktualnostima', 'img/blog_photos/post_1484836757.jpg', 'Daniel Ackermann: Za najvišu kvalitetu kampanja potreban je uhodan ‘in-house’ tim', '2017-01-19 15:39:27', '2017-01-20 12:13:31', 1, 2),
(13, 2, 5, 'Dani komunikacija 2017: Otvorene prijave za IdejuX i Mixx', 'S današnjim danom, službeno su otvorene prijave za dva natjecanje Dana komunikacija – nacionalno kreativno natjecanje IdejaX i natjecanje Mixx za najbolje digitalne projekte.<br />\n<br />\nIako je do Dana komunikacija, središnjeg nacionalnog festivala posvećenog oglašavanju, ostalo više od dva mjeseca, nije prerano da počnemo razmišljati o njemu. Naime, s današnjim danom službeno su otvorene prijave za nacionalno kreativno natjecanje IdejaX te natjecanje Mixx za najbolje digitalne projekte, izrađeno po međunarodnoj licenci IAB-a.<br />\n<br />\nMeđutim, to nije jedina novost. Uz otvaranje prijava, organizatori Dana komunikacija, HURA i IAB, predstavili su i nove pravilnike natjecanja. Agencije svoje projekte na Mixx mogu prijaviti do 5. ožujka, a prijave za IdejuX traju do 10. ožujka. Također, treba izdvojiti i dodjeljivanje zlatnih, srebrnih i brončanih nagrada u sklopu natjecanja IdejaX.<br />\n<br />\nProglašenje pobjednika na Danima komunikacija<br />\nPodsjetimo, nacionalno kreativno natjecanje IdejaX nagrađuje ideje X, originalne ideje koje pomiču granice, neovisno o vrsti medija u kojem su realizirane na tržištu. U proteklih šest godina za nagradu se borilo čak 779 radova, a s obzirom na sjajne rezultate većih, ali i manjih agencija, organizatori ističu kako svi imaju jednake šanse za uspjeh. Natjecanje Mixx dodjeljuje se za najbolje digitalne projekte i digitalne alate ili platforme u segmentu tržišnih komunikacija. Prijavljeni projekti ocjenjuju se na temelju kreativnosti, strategije, izvedbe, korištenja medija te postignutih rezultata, stoga organizatori pozivaju sve zainteresirane agencije da se prijave u što većem broju i predstave svoje kreativne projekte.<br />\n<br />\nPobjednici natjecanja IdejaX i Mixx bit će proglašeni na Danima komunikacija 2017, a više informacija može se pronaći na službenim stranicama.', 'Dani komunikacija 2017: Otvorene prijave za IdejuX i Mixx', 'S današnjim danom, službeno su otvorene prijave za dva natjecanje Dana komunikacija – nacionalno kreativno natjecanje IdejaX i natjecanje Mixx za najbolje digitalne proje', 'img/blog_photos/post_1484836909.jpg', 'Dani komunikacija 2017: Otvorene prijave za IdejuX i Mixx', '2017-01-19 15:41:51', '2017-01-20 11:10:51', 1, 1),
(14, 1, 5, 'Apply for Ministry of Data App Challenge by December 6 and Win 2,500 USD!', '“Ministry of Data” is an open data challenge that encourages creative potential and the use of ICT skills in using open data for the development of e-solutions such as apps, platforms, visualizations. The focuses of the challenge are solutions for improving the transparency, inclusiveness, and quality of life in cities of the Western Balkans. The teams can apply until December 6th, 2016.<br />\n<br />\nThe teams can be students, activists, start-ups, NGOs, representatives of business sector or all of the above! Applicants should use open data to design an e-service, mobile application or any other technology project which will make the lives of citizens in Croatia, Bosnia and Herzegovina, Serbia, Montenegro, Albania, Macedonia or Kosovo better.<br />\n<br />\nJelena Berković, executive director of GONG, said:<br />\n<br />\nThe challenge strengthens civic engagement around open public data and contributes to building a stable regional open data community. A strong interest of civil society in open data is crucial for increasing transparency and accountability of public institutions. <br />\n<br />\nThe finalists – top 10 teams – will develop their ideas at the bootcamp in Zagreb in February 2017. The winners, two best teams from the bootcamp, will win $2.500 and the incubation support for their team (four months of individualized mentoring support to complete the application). A special prize of $2.500 will be awarded by the GDI Group to those teams who will have the best idea for using spatial data.<br />\n<br />\nFor more information please visit: ministryofdata.info, Facebook page or follow the hashtag: #Mdata16<br />\n<br />\nMinistry of Data was designed by UNDP and this year it is implemented by GONG and TechSoup. It is financially supported by the Ministry of Finance of the Slovak Republic, Charles Stewart Mott Foundation, and GDI Group.', 'Apply for Ministry of Data App Challenge by December 6 and Win 2,500 USD!', '“Ministry of Data” is an open data challenge that encourages creative potential and the .', 'img/blog_photos/post_1484837010.png', 'Apply for Ministry of Data App Challenge by December 6 and Win 2,500 USD!', '2017-01-19 15:43:31', '2017-01-20 12:11:42', 1, 4),
(15, 2, 4, 'After 2 Million Euro Investment, Croatian Bulb Technologies Aim For Global Telecoms', 'At the end of December 2016 the news broke that South Central Ventures fund invested 2 million euro in Croatian project Bulb Technologies, a company that develops solutions for managing telecom services. It is the largest investment of the fund so far. Can we have any better reason to talk to one of the founders, Vedran Rezar?<br />\n<br />\nAfter in summer 2015 South Central Ventures fund (Enterprise Innovation Fund – ENIF) invested one million euro in the company Agrivi, in December 2016 the news came about investing two million euro in a Croatian company again – this time Bulb Technologies. At the same time, this is the highest investment of the fund so far. The investment that includes two words – millions and euro – is more than a good reason to write a longer story.<br />\n<br />\nThe story actually began in 2007 when Vedran Rezar and Neven Stipčević, after spending many years in various operational positions in companies involved in telecommunications and software development, established Bulb Technologies. The company develops and implements software solutions for business process automation in the segment of telecommunication services. I asked Vedran for a detailed explanation and he told me:<br />\n<br />\nThese solutions are primarily intended for the customer-premises equipment (CPE) through which telecom services (telephone, internet, TV) are provided, then managing network elements in an operator’s access network and the tools aimed to automate the diagnostics process of troubleshooting on all types of telecommunication services.<br />\n<br />\nIn addition to this, Bulb has in recent years carried out a number of projects in the segment of producing solutions for IPTV service distribution via internet (OTT TV) or, explained differently, it’s about service that can be followed by mobile and PC devices, adds Vedran.', 'After 2 Million Euro Investment, Croatian Bulb Technologies Aim For Global Telec', 'At the end of December 2016 the news', 'img/blog_photos/post_1484837438.jpg', 'After 2 Million Euro Investment, Croatian Bulb Technologies Aim', '2017-01-19 15:50:40', '2017-01-20 12:11:04', 2, 1),
(16, 2, 4, 'Baby-Stork: Slovenian App that ‘Delivers’ Babies', 'More and more couples who would like to have children, soon give up after a couple of unsuccessful attempts or resort to unnecessary medical interventions. A solution is being offered by the creators of Baby-Stork App that helps a woman listen to her body and get pregnant in a completely natural way.More and more couples who would like to have children, soon give up after a couple of unsuccessful attempts or resort to unnecessary medical interventions. A solution is being offered by the creators of Baby-Stork App that helps a woman listen to her body and get pregnant in a completely natural way.<br />\n<br />\nOne in eight modern couples faces infertility problems, whereas from the remaining seven three couples become mentally tired after six months of unsuccessful attempts, thus only further diminishing the chances to conceive. This is why Baby-Stork was born, fathered by Slovenians Erik Zupančič and Andrej Brelih, the company founders, who recently recieved an investement from the StartLabs Ventures fund.<br />\n<br />\nMeasuring BBT and electrolytes in saliva<br />\nBaby-Stork is different from similar apps for tracking woman’s cycle and pregnancy planning because it measures basal body temperature (BBT) and saliva conductivity of a user. By using this data it can accurately determine the fertile days  of a woman. Both measurements are obtained orally every day by the help of a Baby-Stork Buddy (dimensions: 13.5 x 3.5 x 2.6 cm), which has to be connected and synchronized with the mobile app via Bluetooth at least once a month.<br />\n<br />\nBoth parameters have been recognized by doctors for a long time, but it was time-consuming and not easy to measure them. By the help of modern technology we have enabled faster and more reliable measurements. Above all, the whole procedure is far less complicated than the usual one and due to the Internet of Things (IoT) technology, the result is obtained immediately.”', 'Baby-Stork: Slovenian App that ‘Delivers’ Babies', 'More and more couples who would like to have children, soon give up after.', 'img/blog_photos/post_1484837548.jpg', 'Baby-Stork: Slovenian App that ‘Delivers’ Babies', '2017-01-19 15:52:30', '2017-01-21 14:42:13', 1, 7),
(17, 1, 4, 'The Game Workshop: Domaća platforma za kreativce i kreatore ‘indie’ igara', 'Zanimaju vas videoigre? Ili se možda iz hobija bavite njihovom izradom? Tada bi za vas mogla biti domaća platforma The Game Workshop namijenjena kreativcima i autorima video igara, koja je nastala u okviru festivala IFCC Croatia posvećenog kreativnim komunikacijama, a više o svemu ispričao nam je jedan od njenih začetnika, Marko Prpić.<br />\n<br />\nIFCC Croatia, odnosno Festival of Creative Communications, održat će se ovu godinu treći put zaredom, i to od 29. svibnja do 3. lipnja. Ako do sada niste čuli za njega, trebate znati kako mu je glavni cilj promicati autorstvo i kreativnost putem edukacije i nagrađivanja, prvenstveno na području umjetnosti i dizajna u industriji zabave, izdavaštva i oglašavanja, objašnjava mi na samom početku direktor festivala Marko Prpić (kojeg mnogi znaju i po nadimku Zets).<br />\n<br />\nNo, svoje mjesto na festivalu ima i gaming industrija, a cilj je aktivnostima na području CG arta i indie game developmenta stvoriti novu vrstu zajednice i kritičnu masu koja će podržavati razvoj kreativnih projekata. Marko ističe:<br />\nTreba napomenuti da dobar dio naših predavača i gostiju čine ljudi koji rade ili žele raditi u industriji video igara, pa tako svake godine imamo priliku družiti se s predstavnicima poznatih svjetskih studija kao što su Blizzard, Riot Games, SIXMOREVODKA i drugih koji dolaze u potrazi za novim zaposlenicima.<br />\n<br />\nThe Game Workshop – radionica za male indie timove<br />\nStoga nije čudno da je u sklopu festivala nastala i The Game Workshop namijenjena kreativcima i autorima video igara, odnosno malim indie timovima i to kako bi im pomogla da svoje projekte što lakše realiziraju. Osnovna je ideja da The Game Workshop bude kreativno igralište i služi za promociju projekata, učenje novih vještina i prenošenje znanja, a trenutno funkcionira po principu poziva sadašnjih članova.<br />\n<br />\nAutorima na usluzi stoje razni alati, dostupni članovima stranice. Aktivnosti također uključuju edukaciju i praktične savjete. Njihove projekte predstavljamo potencijalnim kupcima ili investitorima na raznim događanjima (sajmovi, konferencije) i putem online promocije.<br />\n<br />\nUnutar The Game Workshopa autori mogu, primjerice, unositi podatke o razvoju, rokove, dodavati timove ili prijaviti članke u kojima opisuju projekte, što se zatim dalje promovira putem različitih kanala, od newslettera do Facebook grupa.', 'The Game Workshop: Domaća platforma za kreativce i kreatore ‘indie’ igara', 'Zanimaju vas videoigre? Ili se možda iz hobija bavite njihovom izradom?', 'img/blog_photos/post_1484837677.jpg', 'The Game Workshop: Domaća platforma za kreativce i kreatore ‘indie’ igara', '2017-01-19 15:54:48', '2017-01-20 14:22:59', 2, 29),
(18, 2, 7, 'Bitcoin je kao internet ’95., velike mogućnosti primjene ćemo tek vidjeti', 'Što je bitcoin? Kako funkcionira? Kako je moguće trgovati njime? Što je blockchain i gdje bi nas njegova primjena mogla odvesti? Neka su to od pitanja o kojima se jučer razgovaralo na meetupu održanom u HUB385 gdje je predavanje održao developer i bitcoin entuzijast Leon Badurina. Kako je najavljeno ovo je tek prvi u nizu meetupa, s time da nas za nekoliko tjedana očekuje i konferencija posvećena upravo ovoj temi.<br />\n<br />\nLeon Badurina, developer i bitcoin entuzijast, sinoć je s okupljenima u HUB385 podijelio svoju strast i znanje o ovoj temi. Iako se s bitcoinima, kao prvim decentraliziranim digitalnim novcem upoznao prije nešto više od godinu dana, vrlo brzo se zainteresirao za cijelo područje. Bitcoin je stvoren i korišten na internetu, a omogućava instant plaćanje bez posrednika.<br />\n<br />\nCijela priča počela je sad već davne 2008. godine kada je Satoshi Nakamoto u znanstvenom radu opisuje novac bez posrednika, a 3. siječnja 2009. pokrenut je bitcoin, nakon čega se oko njega polako počinje stvarati zajednica, rekao je Leon na početku meetupa.', 'Bitcoin je kao internet ’95., velike mogućnosti primjene ćemo tek vidjeti', 'Što je bitcoin? Kako funkcionira? Kako je moguće trgovati njime?', 'img/blog_photos/post_1484837834.png', 'Bitcoin je kao internet ’95., velike mogućnosti primjene ćemo tek vidjeti', '2017-01-19 15:57:17', '2017-01-21 14:32:39', 1, 4),
(19, 1, 2, 'Od ideje do kapitala: Osvojite i do 15.000 eura na natjecanju društvenih projekata', 'Imate ideju koju želite pretvoriti u održivi posao i njime promijeniti način na koji pristupamo društvenim problemima? Prijavite se na natjecanje društvenih inovacija, umrežite se s ljudima iz međunarodne zajednice i osvojite i do 15.000 eura.SozialMarie je jedno od najvećih natjecanja u društvenim inovacijama u CEE regiji koje svake godine nagrađuje 15 društveno-inovacijskih projekata. Za prvo mjesto je namijenjena nagrada u iznosu od 15.000 eura, a za drugo i treće mjesto 10.000 i 5000 eura. No, na službenoj dodjeli 1. svibnja 2017. još će 12 timova osvojiti nagrade od 2000 eura.<br />\n<br />\nTko se može prijaviti?<br />\nMogu se prijaviti pojedinci, tvrtke, nevladine udruge ili projekti javni uprave. Ono što je važno i što će se uzeti kao kriterij pri ocjenjivanju jest da se projekti bave društvenim problemima i pružaju inovativne načine na koje bi se ti problemi mogli riješiti. Ipak, postoje neka teritorijalna ograničenja, stoga domaći timovi mogu prijaviti projekte za središnju i sjevernu Hrvatsku, uključujući i Zagreb. Naime, projekti iz Hrvatske, jednako kao i oni iz Slovenije, Poljske i Njemačke, ne smiju se odnositi na mjesta udaljena više od 300 kilometara od Beča.Dosadašnja rješenja dolazila su iz Austrije, Mađarske, Češke, Slovačke, Slovenije, Poljske, ali i Hrvatske. Prijave se primaju online do utorka 24. siječnja.', 'Od ideje do kapitala: Osvojite i do 15.000 eura', 'Imate ideju koju želite pretvoriti u održivi posao i njime promijeniti način na koji pristupamo društvenim problemima?', 'img/blog_photos/post_1484908795.jpg', 'Imate ideju sozialmarie', '2017-01-20 11:40:12', '2017-01-21 14:40:58', 1, 17),
(20, 1, 3, '2. epizoda igre Bear With Me zagrebačkog Exordium Gamesa stiže u veljači', 'Ako ste ljubitelj starih detektivskih filmova i ako volite point-and-click avanture, onda ste morali već zaigrati Bear With Me, igru zagrebačkog studija Exordium Games. Sredinom veljače glavni likovi, djevojčica Amber i njen detektivski plišanac Ted E. Bear, doživjet će novu avanturu u drugoj epizodi koja će biti izdana za PC, Mac i Linux.Bear With Me smo upoznali još 2014., kada je igra prihvaćena na platformu Collective azijskog giganta Square Enix, a od tada je feedback igrača bio odličan, otkriva mi Andrej Kovačević, Game Director u Exordium Gamesu. Igra na Steamu trenutno ima 88% pozitivnih recenzija, a nada se da će ući u Overwhelmingly Positive kategoriju koju čini samo mali dio najbolje ocijenjenih igara na cijeloj platformi.    Žanr i stil koji koristimo dosta su uska niša na tržištu, što s jedne strane znači da nema potencijal za masovnu popularnost, no, s druge strane, onim igračima za koje je igra namijenjena, igra je pravi mali dragulj. Jedan od komentara igrača na forumu naveo je da smatra kako je Bear With Me najviše podcijenjena igra na platformi. Lijepo je čitati takve komentare, lijepo je vidjeti da ljudi uživaju i cijene vaš trud i rad.', '2. epizoda igre Bear With Me zagrebačkog Exordium Gamesa stiže u veljači', '2. epizoda igre Bear With Me zagrebačkog Exordium Gamesa stiže u veljači', 'img/blog_photos/post_1484918598.png', 'Bear With Me zagrebačkog Exordium Gamesa', '2017-01-20 14:23:21', '2017-01-21 14:37:56', 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `firma`
--

CREATE TABLE `firma` (
  `id_firme` int(11) UNSIGNED NOT NULL,
  `naziv` varchar(100) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `mjesto` varchar(50) NOT NULL,
  `drzava` varchar(50) NOT NULL,
  `web_url` varchar(100) NOT NULL,
  `logo_url` varchar(160) NOT NULL,
  `email` varchar(100) NOT NULL,
  `lozinka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `firma`
--

INSERT INTO `firma` (`id_firme`, `naziv`, `adresa`, `mjesto`, `drzava`, `web_url`, `logo_url`, `email`, `lozinka`) VALUES
(1, 'Fanta d.o.o.', 'Rudeška cesta 23', 'Zagreb', 'Hrvatska', 'http://www.fanta.hr/hr/home/', 'img/firm_logos/firmaId_1.jpg', 'fanta@fanta.com', '$2y$12$oa81CCgb5/oOVRWZzbHdPePC/7AQnr3ZGmRFgq46su2eoE25X1x3i'),
(2, 'Končar', 'Zagrebačka cesta 1234', 'Zagreb', 'Hrvatska', 'https://www.koncar.hr/', 'img/firm_logos/firmaId_2.jpg', 'koncar@koncar.com', '$2y$12$eGlgfE5wNII87Yup/9H9SOTJVCwWf9KH177NGZvkpzLkVuujoRp3a'),
(10, 'Hewlett Packard', 'Zagrebačka avenija 135', 'Zagreb', 'Hrvatska', 'http://www8.hp.com/hr/hr/home.html', 'img/firm_logos/firmaId_10.png', 'hp@hp.com', '$2y$12$A1QMKrjHLV5NXfhclYGLx.zT6KxWEZp9a90Gu5MHqmLQHTtG7K.rS'),
(11, 'iStyle', 'Rudeška cesta 12', 'Zagreb', 'Hrvatska', 'http://www.istyle.eu/hr/?gclid=COW4ksKd09ECFQoA0wodRncCTQ', 'img/firm_logos/firmaId_11.png', 'is@is.com', '$2y$12$ZyiWUQ9x5aqoOWrAIUCQQ.IwLbFjB/F.q4cx5ELfcWbazL6Of6zZy');

-- --------------------------------------------------------

--
-- Table structure for table `kategorija_clanka`
--

CREATE TABLE `kategorija_clanka` (
  `id_kategorije_clanka` int(11) UNSIGNED NOT NULL,
  `naziv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategorija_clanka`
--

INSERT INTO `kategorija_clanka` (`id_kategorije_clanka`, `naziv`) VALUES
(1, 'Informacijske tehnologije'),
(2, 'Digitalni marketing');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentara` int(11) UNSIGNED NOT NULL,
  `id_clanka` int(11) UNSIGNED NOT NULL,
  `komentar` varchar(500) NOT NULL,
  `ime_prezime` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `datum_vrijeme_objave` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentara`, `id_clanka`, `komentar`, `ime_prezime`, `email`, `datum_vrijeme_objave`, `status`) VALUES
(1, 17, 'Ja mislim da su kreativci uvijek dobrodošli', 'Josip Perković', 'jop@gmail.com', '2017-01-20 00:18:29', 1),
(2, 17, 'Nemojte pričati kad znamo da su ovi s filozofskog još uvijek najbolji!', 'Petar Magnum', 'magnum@sam.com', '2017-01-20 00:34:19', 1),
(3, 17, 'Komentiram', 'Borna Grilec', 'bgrill@bgril.com', '2017-01-20 15:16:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id_korisnika` int(11) UNSIGNED NOT NULL,
  `id_uloge` int(11) UNSIGNED NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `mjesto` varchar(50) NOT NULL,
  `drzava` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `lozinka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id_korisnika`, `id_uloge`, `ime`, `prezime`, `adresa`, `mjesto`, `drzava`, `email`, `lozinka`) VALUES
(2, 1, 'Borna', 'Grilec', '', '', '', 'borna@borna.com', '$2y$12$v9EW4aVPLSeboh5WzkY8DOMjbBhLc3snH1ZDAIDFjgB8Ns.zcIcSC'),
(3, 1, 'Admin', 'Adminko', '', '', '', 'admin@admin.com', '$2y$12$kxtQcHAkaBEqNbWqjXE7.OUjoCqR3Nn/3LxL18G/e0URFdr0knwHq'),
(4, 1, 'Petar', 'Perko', '', '', '', 'pe@pe.com', '$2y$12$dNJQNaBXIDLZHXq81atxVuRoKr3wZtbwovRfIqvOU6wHL3vonGTm.'),
(5, 1, 'Marko', 'Marković', '', '', '', 'ma@ma.com', '$2y$12$.2gt4oSwfHMkXvjM1DZQPOCRB4qDS7JqmEXpzgSDFGBWkQJJz4rwW'),
(7, 1, 'Sen', 'Zen', '', '', '', 'sen@zen.com', '$2y$12$OyYUlnYhNniVO7vKGF/R3Oscsw8dOHZ05juaIqongNFLjXdabtxEC');

-- --------------------------------------------------------

--
-- Table structure for table `posao`
--

CREATE TABLE `posao` (
  `id_posla` int(11) UNSIGNED NOT NULL,
  `id_firme` int(11) UNSIGNED NOT NULL,
  `radno_mjesto` varchar(50) NOT NULL,
  `mjesto_rada` varchar(70) NOT NULL,
  `posao_url` varchar(200) NOT NULL,
  `datum_vrijeme_objave` date NOT NULL,
  `datum_do` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posao`
--

INSERT INTO `posao` (`id_posla`, `id_firme`, `radno_mjesto`, `mjesto_rada`, `posao_url`, `datum_vrijeme_objave`, `datum_do`, `status`) VALUES
(17, 1, 'Front end developer', 'Zagreb (Croatia)', 'https://www.google.hr', '2017-01-18', '2017-01-23', 1),
(18, 2, 'Backend developer', 'Zagreb', 'https://www.koncar.hr/', '2017-01-19', '2017-01-24', 1),
(20, 10, 'Voditelj trgovine', 'Zagreb', 'http://www8.hp.com/hr/hr/home.html', '2017-01-21', '2017-02-02', 1),
(21, 10, 'Serviser računalne opreme', 'Zagreb', 'http://www8.hp.com/hr/hr/home.html', '2017-01-19', '2017-02-12', 1),
(22, 11, 'SMM marketing', 'Zagreb', 'http://www.istyle.eu/hr/?gclid=CKzx8vmp09ECFYky0wod5HQNug', '2017-01-12', '2017-02-12', 1),
(23, 11, 'Web analitičar', 'Zagreb', 'http://www.istyle.eu/hr/?gclid=CKzx8vmp09ECFYky0wod5HQNug', '2017-01-11', '2017-02-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `id_uloge` int(11) UNSIGNED NOT NULL,
  `naziv` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`id_uloge`, `naziv`) VALUES
(1, 'Administracija');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanak`
--
ALTER TABLE `clanak`
  ADD PRIMARY KEY (`id_clanka`),
  ADD KEY `id_kategorije_clanka` (`id_kategorije_clanka`),
  ADD KEY `id_korisnika` (`id_korisnika`);

--
-- Indexes for table `firma`
--
ALTER TABLE `firma`
  ADD PRIMARY KEY (`id_firme`);

--
-- Indexes for table `kategorija_clanka`
--
ALTER TABLE `kategorija_clanka`
  ADD PRIMARY KEY (`id_kategorije_clanka`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentara`),
  ADD KEY `id_clanka` (`id_clanka`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id_korisnika`),
  ADD KEY `id_uloge` (`id_uloge`);

--
-- Indexes for table `posao`
--
ALTER TABLE `posao`
  ADD PRIMARY KEY (`id_posla`),
  ADD KEY `id_firme` (`id_firme`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`id_uloge`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanak`
--
ALTER TABLE `clanak`
  MODIFY `id_clanka` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `firma`
--
ALTER TABLE `firma`
  MODIFY `id_firme` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `kategorija_clanka`
--
ALTER TABLE `kategorija_clanka`
  MODIFY `id_kategorije_clanka` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentara` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id_korisnika` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `posao`
--
ALTER TABLE `posao`
  MODIFY `id_posla` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `id_uloge` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `clanak`
--
ALTER TABLE `clanak`
  ADD CONSTRAINT `clanak_ibfk_1` FOREIGN KEY (`id_korisnika`) REFERENCES `korisnik` (`id_korisnika`) ON UPDATE CASCADE,
  ADD CONSTRAINT `clanak_ibfk_2` FOREIGN KEY (`id_kategorije_clanka`) REFERENCES `kategorija_clanka` (`id_kategorije_clanka`) ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_clanka`) REFERENCES `clanak` (`id_clanka`) ON UPDATE CASCADE;

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `korisnik_ibfk_1` FOREIGN KEY (`id_uloge`) REFERENCES `uloga` (`id_uloge`) ON UPDATE CASCADE;

--
-- Constraints for table `posao`
--
ALTER TABLE `posao`
  ADD CONSTRAINT `posao_ibfk_1` FOREIGN KEY (`id_firme`) REFERENCES `firma` (`id_firme`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
