-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Cze 18, 2025 at 05:48 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_library`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `publication_year` int(11) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'dostępna',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `isbn`, `publication_year`, `publisher`, `category_id`, `description`, `cover_image`, `pages`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ziemiomorze', 'Ursula K. Le Guin', '9788382951158', 2013, 'Prószyński Media', 1, '\"Ziemiomorze\" Ursuli K. Le Guin to jeden z najznakomitszych cykli literatury fantasy, porównywany z dziełami J.R.R. Tolkiena czy C.S. Lewisa. Opisuje malowniczy świat pełen wysp, smoków i tajemnic, w którym najważniejsza jest równowaga między tworzącymi go siłami. Głównym bohaterem serii jest czarnoksiężnik Ged, poszczególne części opowiadają jego losy – od najmłodszych lat i pierwszych kroków stawianych w świecie magii, aż po czasy gdy zaczęła się ona stawać niebezpiecznym narzędziem w rękach zła.\r\nGed, którego Ziemiomorze na zawsze zapamięta jako Krogulca, zostaje wysłany na wyspę Roke, aby tam zgłębiać czarnoksięską sztukę. Jest obdarzony niezwykłymi magicznymi zdolnościami, więc po latach nauki zostaje Arcymagiem, który będzie musiał pomóc Najwyższej Kapłance Archipelagu – Tenar – uciec z labiryntu ciemności.\r\n\r\nNiestety, wraz z upływem lat równowaga Ziemiomorza zacznie się chwiać coraz bardziej, a prawdziwa magia i pradawne zwyczaje coraz częściej wykorzystywane będą przez mroczne siły zła i śmierci…\r\n\r\n\"Saga o Ziemiomorzu to opowieść o dojrzewaniu, o wyzbywaniu się młodzieńczej pychy i ducha rywalizacji, dorastaniu do wewnętrznej harmonii i mądrości, ale też zrozumienia ograniczoności ludzkich działań. Im większa moc i im większa władza, tym większa odpowiedzialność – przestrzega Le Guin.\"\r\n\"Wysokie obcasy\"\r\n\r\n\"Potrzebowałam sześciu książek i trzydziestu lat życia, by opowiedzieć historię Geda i Tenar. W tym czasie nieustannie dowiadywałam się czegoś nowego o krainach i ludach Ziemiomorza – bo wszystkie przygody i odkrycia bohaterów były też moimi przygodami i odkryciami. (…) I oto wreszcie macie przed sobą ukończoną historię. Oby lektura sprawiła wam równie wielką przyjemność, jak mnie jej pisanie!\"\r\nUrsula K. Le Guin', 'book_1745705534.jpg', 944, 'dostępna', '2025-04-22 16:30:50', '2025-04-26 22:12:14'),
(2, 'Diuna. Kroniki Diuny. Tom 1', 'Frank Herbert', '', 2007, 'Dom Wydawniczy Rebis', 1, 'Arrakis, zwana Diuną, to jedyne we wszechświecie źródło melanżu - substancji przedłużającej życie, umożliwiającej odbywanie podróży kosmicznych i przewidywanie przyszłości.\r\n\r\nZ rozkazu Padyszacha Imperatora Szaddama IV rządzący Diuną Harkonnenowie opuszczają swe największe źródło dochodów. Planetę otrzymują w lenno Atrydzi, ich zaciekli wrogowie. Zwycięstwo księcia Leto Atrydy jest jednak pozorne - przejęcie planety ukartowano.\r\n\r\nW odpowiedzi na atak połączonych sił Imperium i Harkonnenów dziedzic rodu Atrydów, Paul - końcowe niemal ogniwo planu eugenicznego Bene Gesserit - staje na czele rdzennych mieszkańców Diuny i wyciąga rękę po imperialny tron.', 'book_1745705390.jpg', 670, 'dostępna', '2025-04-26 21:49:35', '2025-04-26 22:09:50'),
(3, 'Mesjasz Diuny. Kroniki Diuny. Tom 2', 'Frank Herbert', '', 2007, 'Dom Wydawniczy Rebis', 1, 'Minęło kilkanaście lat, odkąd Fremeni pod dowództwem Paula Muad’Diba pokonali połączone siły Harkonnenów i imperialnych sardaukarów. Paul poślubił księżniczkę Irulanę i zasiadł na tronie Imperium. Pustynna Arrakis, zwana Diuną, jest stolicą wszechświata, a Imperator Paul Atryda wydaje z niej poprzedzone proroczymi wizjami rozkazy. Tymczasem stare ośrodki władzy - Bene Gesserit, Gildia Kosmiczna i Bene Tleilax - zawiązują spisek przeciw nowemu Imperatorowi.\r\n\r\nCzczony niczym bóg, Paul Muad’Dib wpada w pułapkę, jaką zastawiła na niego prorocza moc: zna dokładnie każdą chwilę swojej przyszłości, każdy swój ruch, każdą decyzję i - przede wszystkim - swój straszliwy finał...', 'book_1745705434.jpg', 272, 'dostępna', '2025-04-26 21:54:33', '2025-04-26 22:10:34'),
(4, 'Dzieci Diuny Kroniki Diuny tom 3', 'Frank Herbert', '', 2011, 'Dom Wydawniczy Rebis', 1, 'Arrakis zmienia się wolno, ale nieustannie. Pustynną niegdyś planetę w coraz większym stopniu pokrywa zieleń. Widząc tę transformację, bliźnięta Leto i Ghanima próbują ratować ginące czerwie. Gdy w stolicy przemawia tajemniczy Kaznodzieja, po osierocone przed laty dzieci Paula Muad\'Diba przybywa jego matka...', 'book_1745705984.jpg', 528, 'dostępna', '2025-04-26 21:55:21', '2025-04-26 22:19:44'),
(5, 'Bóg imperator Diuny. Kroniki Diuny. Tom 4', 'Frank Herbert', '', 2009, 'Dom Wydawniczy Rebis', 1, 'Czwarty tom cyklu \"Kroniki Diuny\".\r\n\r\nPokonawszy Alię i podporządkowawszy sobie ród Corrinów, Leto II objął rządy w Imperium i wprowadził je na swój Złoty Szlak. Trzy i pół tysiąca lat narzuconego spokoju zmieniło niewiele. Bene Gesserit, Tleilaxanie, Ixanie i Gildia Kosmiczna - trzymani w ryzach groźbą odcięcia dostaw melanżu - gotowi są zrobić wszystko, by w końcu pozbyć się człowieka-czerwia. Syn legendarnego Muad-Diba staje w obliczu najbardziej diabolicznego spisku w historii. Spisku, który może doprowadzić nawet do śmierci Boga...\r\n\r\n', 'book_1745705674.png', 496, 'dostępna', '2025-04-26 21:56:17', '2025-04-26 22:14:34'),
(6, 'Heretycy Diuny. Kroniki Diuny. Tom 5', 'Frank Herbert', '', 2009, 'Dom Wydawniczy Rebis', 1, 'Piąty tom cyklu \"Kroniki Diuny\".\r\n\r\nBlisko półtora tysiąca lat po śmierci Boga Imperatora we wszechświecie dużo się zmieniło. Nie ma Imperium, Rakis nie jest już jedynym źródłem melanżu, a rybomówne straciły wpływy. Tleilaxanie, Ixanie i Bene Gesserit pozostali jednak na scenie, a nieżyjący Leto II wciąż kładzie się cieniem na ich przyszłości.\r\n\r\nWalcząc o supremację, a zarazem usiłując ocalić zgromadzenie przed napływającymi z Rozproszenia Dostojnymi Matronami, Bene Gesserit układają diaboliczny plan. W jego centrum tkwią kolejny ghola Duncana Idaho i żyjąca na Rakis dziewczyna, która... rozkazuje czerwiom.', 'book_1745705721.jpeg', 576, 'dostępna', '2025-04-26 21:56:53', '2025-04-26 22:15:21'),
(7, 'Kapitularz Diuną. Kroniki Diuny. Tom 6', 'Frank Herbert', '', 2010, 'Dom Wydawniczy Rebis', 1, 'Kapitularz przechodzi z wolna transformację, w której wyniku Bene Gesserit mają nadzieję wznowić zbiory melanżu i zdobyć dominującą pozycję we wszechświecie. Toczy się jednak walka z czasem – Dostojne Matrony zaciskają nieustępliwie pętlę wokół głównej siedziby zgromadzenia. Dręczona wizjami własnej śmierci, Matka Przełożona Darwi Odrade robi wszystko, by ocalić siostry. Mimo sprzeciwu części z nich postanawia zagrać va banque i rzuca na szalę swe ostatnie atuty: gholę baszara Tega, byłą Dostojną Matronę Murbellę i obdarzonego niezwykłymi zdolnościami Duncana Idaho.\r\n\r\nTymczasem gdzieś w oddali czai się wróg stokroć potężniejszy od Dostojnych Matron i zarzuca swą sieć...', NULL, 568, 'dostępna', '2025-04-26 21:57:24', '2025-04-26 21:57:24'),
(8, 'Elryk z Melniboné', 'Moorcock Michael', '', 2024, ' Wydawnictwo Zysk i S-ka', 1, 'Mroczna opowieść fantasy, w której bohater o niezwykłych mocach próbuje ocalić przed zagładą rozpadający się świat starego imperium.\r\n\r\nOto niezwykłe przygody Elryka, ostatniego cesarza imperium Melniboné, oraz jego rozumnego wampirycznego miecza, Zwiastuna Burz, który potrafi wysysać dusze i siłę pokonanych przeciwników. Potęga Melnibonian, starożytnej rasy władającej światem przez dziesięć tysięcy lat, chyli się ku upadkowi, atakowana przez sąsiadujące ze Smoczą Wyspą ludzkie królestwa. Zasiadający na Rubinowym Tronie Elryk to wyjątkowy bohater - choć o słabym ciele i uzależniony od narkotyków podtrzymujących jego siły witalne, to jednak dzięki odziedziczonym po przodkach mocom jest potężnym czarnoksiężnikiem potrafiącym przyzywać demony, władającym żywiołami i do tego korzysta z ciągłej pomocy Władców Chaosu. Białowłosy i szkarłatnoooki Elryk z Melniboné samotnie kroczy wśród światów multiwersum, budząc strach wśród wrogów i przyjaciół, rywalizując ze swym podłym kuzynem Yrkoonem o panowanie nad baśniową krainą.\r\n„Elryk z Melniboné jest jednym z tych gigantów fantasy, którzy wstrząsnęli gatunkiem. Może nie tak znany jak Conan czy Gandalf, ale mimo to jest w tym samym nielicznym klubie postaci wymienianych jako przełomowe dla opowieści spod znaku magii i miecza”.', 'book_1745706146.jpg', 704, 'dostępna', '2025-04-26 22:21:19', '2025-04-26 22:22:26'),
(9, 'Fourth Wing. Empireum. Tom 1', 'Rebecca Yarros', '', 2023, 'Wydawnictwo Filia', 1, 'Smok bez swojego jeźdźca cierpi. Jeździec bez swojego smoka ginie. (Artykuł Pierwszy, Ustęp Pierwszy, Kodeks Jeźdźców Smoków)\r\n\r\nOto brutalny, elitarny świat wojskowej uczelni dla jeźdźców smoków autorstwa bestsellerowej autorki Rebeki Yarros!\r\n\r\nDwudziestoletnia Violet Sorrengail miała trafić do Kwadrantu Skrybów i wieść spokojne życie pośród książek i historii. A teraz głównodowodząca, znana również jako jej bezkompromisowa matka, nakazała Violet dołączyć do setek kandydatów pragnących zostać elitą Navarry – jeźdźców smoków.\r\n\r\nKiedy jednak nie grzeszysz wzrostem, a twoje ciało jest kruche, śmierć czyha tuż za rogiem… ponieważ smoki nie wiążą się z „kruchymi” ludźmi. One ich eliminują.\r\n\r\nSmoków chętnych do wytworzenia więzi jest mniej niż kadetów, toteż większość chce zabić Violet, aby zwiększyć swoje szanse. Reszta życzy jej śmierci przez to, kim jest jej matka – na przykład Xaden Riorson, najpotężniejszy i najbardziej bezwzględny dowódca skrzydła w Kwadrancie Jeźdźców.\r\n\r\nViolet będzie musiała polegać na swoim sprycie i inteligencji, żeby przetrwać.\r\n\r\nMimo to z każdym mijającym dniem tocząca się na granicach wojna się zaostrza i zbiera coraz większe żniwa, a bariery chroniące królestwo słabną. Co gorsza Violet zaczyna podejrzewać, że dowódcy ukrywają przed wszystkimi straszną tajemnicę.\r\n\r\nPrzyjaciele, wrogowie, kochankowie… wszyscy uczęszczający do Wojskowej Uczelni w Basgiacie mają swój cel, ponieważ jeśli już się tam znajdziesz, możesz opuścić ją na dwa sposoby… albo ją ukończysz, albo umrzesz.', 'book_1745839109.jpg', 528, 'dostępna', '2025-04-28 11:16:33', '2025-04-28 11:18:29'),
(10, 'Iron Flame. Empireum. Tom 2', 'Yarros Rebecca', '', 2024, 'Wydawnictwo Filia', 1, 'Wszyscy spodziewali się, że Violet Sorrengail umrze w trakcie pierwszego roku w Uczelni Wojskowej Basgiath. Jednak Odsiew był zaledwie pierwszym niemożliwym testem mającym na celu pozbycie się kadetów o słabej woli, niemających szczęścia i niegodnych.\r\n\r\nTeraz zacznie się prawdziwy trening i Violet już się zastanawia, jak to przetrwa. Nie chodzi o to, że jest wyczerpujący czy wyjątkowo brutalny albo stworzony do tego, by przesuwać próg bólu kadetów do granic wytrzymałości. Problem stanowi nowy wicekomendant, który postawił sobie za punkt honoru udowodnienie Violet, że jest bezsilna – chyba że zdradzi mężczyznę, którego kocha. Mimo że ciało Violet jest słabsze i bardziej kruche niż innych, dziewczyna wciąż ma spryt… oraz żelazną wolę. A dowództwo zapomniało o najważniejszej lekcji, jakiej nauczył ją Basgiath: jeźdźcy smoków tworzą własne zasady. Niestety w trakcie tego roku sama determinacja nie wystarczy.  \r\n\r\nPonieważ Violet zna prawdziwy sekret ukrywany przez Uczelnię Wojskową Basgiath – i być może nic, nawet smoczy ogień, nie będzie w stanie ich uratować. \r\n\r\n„W trakcie pierwszego roku część z nas traci życie. W trakcie drugiego reszta traci człowieczeństwo\"\r\n\r\nXaden Riorson    ', 'book_1745839277.jpg', 704, 'dostępna', '2025-04-28 11:21:12', '2025-04-28 11:21:17'),
(11, '1984', 'Orwell George', '', 2023, ' Świat Książki', 1, 'Okrutna i sugestywna wizja świata, w którym rządzi przemoc i strach, a władza panuje nie tylko nad losem człowieka, ale też nad jego myślami i uczuciami. Boleśnie aktualna opowieść o pragnieniu władzy i konsekwencjach jej nadużywania.\r\n\r\nZarazem to przejmująca, głęboko ludzka opowieść o samotności, o tęsknocie do miłości, wolności, prawdy. Historia tragicznej pary kochanków, Winstona i Julii, czytana na całym świecie, często w podziemnych lub przemycanych wydaniach, była głosem ostrzeżenia przed zniewoleniem umysłu. Użyte w niej pojęcia – „nowomowa”, „Policja Myśli”, „dwójmyślenie” czy „Wielki Brat” – weszły do języka potocznego wielu narodów.', 'book_1745845335.jpg', 336, 'dostępna', '2025-04-28 13:02:09', '2025-04-28 13:02:15'),
(12, 'Pięć małych świnek', 'Christie Agatha', '', 2021, 'Wydawnictwo Dolnośląskie', 2, 'Ekskluzywna edycja kolekcjonerska wybranych dzieł Agaty Christie z okazji 100-lecia wydania pierwszej książki z Herkulesem Poirot.\r\n\r\nAmyas Crale, genialny malarz czuły na kobiece wdzięki, jego zazdrosna żona Karolina oraz młoda głodna życia modelka Elza to nie było zgodne trio... Gdy Amyas został otruty, nikt nie miał wątpliwości, że morderczynią jest żona. Karolina, osądzona i skazana, pisze list do córki, w którym zapewnia o swojej niewinności. Badając tę sprawę sprzed lat, Herkules Poirot drobiazgowo analizuje wspomnienia świadków.\r\n\r\nPowieść przypomina konstrukcją film Rashomon Akiry Kurosawy: każdy ma prawo do własnej wersji wydarzeń, a kluczem jest prawda psychologiczna, nie poszlaki.', 'book_1745845479.jpg', 272, 'dostępna', '2025-04-28 13:04:14', '2025-04-28 13:04:39'),
(13, 'Zabójstwo Rogera Ackroyda', 'Christie Agatha', '', 2021, 'Wydawnictwo Dolnośląskie', 2, 'Atmosfera w King\'s Abbot jest daleka od sielanki. Plotki, samobójstwo, śmierć tytułowego Rogera Ackroyda... Herkules Poirot podejmuje grę z wyjątkowo perfidnym mordercą. Jego asystentem zostaje doktor Sheppard - miejscowy lekarz, który świetnie zna tajemnice niewielkiej społeczności.\r\n\r\nPowieść wywołała wiele kontrowersji, ponieważ niektóre wątki były sprzeczne z ówczesnymi kanonami literatury kryminalnej. Agata Christie została za to wykluczona z klubu zrzeszającego autorów powieści detektywistycznych.', 'book_1745845559.jpg', 280, 'dostępna', '2025-04-28 13:05:30', '2025-04-28 13:05:59'),
(14, 'I nie było już nikogo', 'Christie Agatha', '', 2021, 'Wydawnictwo Dolnośląskie', 2, 'Tajemniczy gospodarz zaprasza do domu na wyspie dziesięć osób. Gdy dwie z nich giną, goście zdają sobie sprawę, że to, co początkowo uważali za nieszczęśliwy wypadek, jest dziełem zabójcy. Postanawiają odkryć jego tożsamość, ale okazuje się, że… nikt nie ma alibi.\r\nOdizolowani od społeczeństwa, niezdolni do opuszczenia miejsca pobytu, umierają jeden po drugim w sposób opisany w dziecięcej rymowance, którą wywieszono w ich pokojach.', 'book_1745845608.jpg', 216, 'dostępna', '2025-04-28 13:06:33', '2025-04-28 13:06:48');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Fantastyka', 'Książki fantasy, science fiction i inne fantastyczne'),
(2, 'Kryminał', 'Powieści kryminalne i thrillery'),
(3, 'Literatura piękna', 'Klasyczna i współczesna literatura piękna'),
(4, 'Literatura faktu', 'Biografie, reportaże, historia'),
(5, 'Nauka', 'Książki naukowe i popularnonaukowe');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1745338274),
('m220101_000000_create_book_table', 1745338276);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-book-category_id` (`category_id`);

--
-- Indeksy dla tabeli `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indeksy dla tabeli `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk-book-category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
