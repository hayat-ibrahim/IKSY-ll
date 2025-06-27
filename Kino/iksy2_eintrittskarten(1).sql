-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 17. Jun 2025 um 21:39
-- Server-Version: 10.11.11-MariaDB
-- PHP-Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `iksy2_eintrittskarten`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `buchungen`
--

CREATE TABLE `buchungen` (
  `id` int(11) NOT NULL,
  `kunde_id` int(11) NOT NULL,
  `vorname` varchar(100) NOT NULL,
  `nachname` varchar(100) NOT NULL,
  `film_titel` varchar(255) NOT NULL,
  `gesamtbetrag` decimal(6,2) NOT NULL,
  `buchungsdatum` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `filme`
--

CREATE TABLE `filme` (
  `id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `veroeffentlichungsdatum` date NOT NULL,
  `dauer` int(11) NOT NULL,
  `bild_link` varchar(255) NOT NULL,
  `ticketPreis` float DEFAULT NULL,
  `beschreibung` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Daten für Tabelle `filme`
--

INSERT INTO `filme` (`id`, `titel`, `veroeffentlichungsdatum`, `dauer`, `bild_link`, `ticketPreis`, `beschreibung`) VALUES
(1, 'Mission: Impossible – The Final Reckoning', '2025-05-23', 156, '/filmplakate/mission_impossible.jpg', 12.5, 'Ethan Hunt und sein Team kämpfen gegen eine mächtige KI namens \"Entity\", die globale Netzwerke infiltriert hat. Die Mission führt sie an ihre Grenzen, während sie versuchen, die Welt vor einer drohenden Katastrophe zu retten.'),
(2, 'Thunderbolts', '2025-05-02', 145, '/filmplakate/thunderbolts.jpg', 11, 'Eine Gruppe von Antihelden wird von der Regierung rekrutiert, um gefährliche Missionen zu erfüllen. Gemeinsam müssen sie lernen, als Team zu agieren, um ihre Vergangenheit zu überwinden und die Welt zu retten.'),
(3, 'Ein Minecraft Film', '2025-04-03', 101, '/filmplakate/minecraft_film.jpg', 8, 'Vier Außenseiter werden durch ein Portal in die Welt von Minecraft gezogen. Dort müssen sie ihre Kreativität nutzen, um Herausforderungen zu meistern und den Weg zurück nach Hause zu finden.'),
(4, 'Final Destination: Bloodlines', '2025-05-16', 102, '/filmplakate/final_destination.jpg', 10.5, 'Stefani wird von wiederkehrenden Albträumen geplagt und entdeckt, dass ihre Familie von einem tödlichen Schicksal verfolgt wird. Sie muss das Geheimnis lüften, um ihre Liebsten zu retten.'),
(5, 'Until Dawn', '2025-04-24', 98, '/filmplakate/until_dawn.jpg', 10, 'Eine Gruppe von Freunden wird in einer abgelegenen Hütte von einem maskierten Killer gejagt. Nach jedem Tod wachen sie am Anfang des Abends auf und müssen einen Weg finden, dem tödlichen Kreislauf zu entkommen.'),
(6, 'The Accountant 2', '2025-05-06', 132, '/filmplakate/accountant2.jpg', 11.5, 'Christian Wolff, ein brillanter Mathematiker mit Autismus, wird erneut in eine gefährliche Verschwörung verwickelt. Gemeinsam mit seinem Bruder Braxton muss er einen Mordfall aufklären und sich seiner Vergangenheit stellen.'),
(7, 'Blood & Sinners', '2025-05-01', 115, '/filmplakate/blood_sinners.jpg', 9.5, 'Zwei Brüder kehren in ihre Heimatstadt zurück, um ein neues Leben zu beginnen. Doch dunkle Geheimnisse und übernatürliche Kräfte stellen ihre Pläne auf die Probe.'),
(8, 'The Amateur', '2025-05-03', 123, '/filmplakate/amateur.jpg', 10.5, 'Ein CIA-Kryptograph wird zum Spion, als er den Tod seiner Frau rächen will. Ohne Erfahrung im Feld begibt er sich auf eine gefährliche Mission, um die Verantwortlichen zur Strecke zu bringen.'),
(9, 'ATEEZ WORLD TOUR (TOWARDS)', '2025-05-14', 120, '/filmplakate/ateez.jpg', 14, 'Erlebe die energiegeladene Performance der K-Pop-Sensation ATEEZ auf ihrer Welttournee. Ein Muss für alle Fans der Gruppe.'),
(10, 'Balconettes', '2025-05-07', 94, '/filmplakate/balconettes.jpg', 9, 'Eine humorvolle Geschichte über das Leben und die Freundschaft von Frauen, die ihre Nachmittage auf dem Balkon verbringen und das Geschehen in ihrer Nachbarschaft beobachten.'),
(11, 'Bambi - Eine Lebensgeschichte...', '2025-05-10', 89, '/filmplakate/bambi.jpg', 7.5, 'Die bewegende Geschichte eines jungen Rehs, das die Herausforderungen des Lebens im Wald meistert und dabei wichtige Lektionen über Liebe, Verlust und das Erwachsenwerden lernt.'),
(12, 'Bang Boom Bang', '2025-05-09', 107, '/filmplakate/bang_boom_bang.jpg', 8.5, 'Eine chaotische Komödie über einen schiefgelaufenen Banküberfall und die skurrilen Charaktere, die darin verwickelt sind.'),
(13, 'Guardians of the Galaxy Vol. 4', '2025-06-20', 143, '/filmplakate/gotg4.jpg', 12, 'Die Guardians kehren zurück für ein weiteres intergalaktisches Abenteuer, bei dem sie sich neuen Feinden stellen und die Galaxie erneut retten müssen.'),
(14, 'Avatar: The Deep Abyss', '2025-05-22', 162, '/filmplakate/avatar2.jpg', 13, 'Jake Sully und Neytiri tauchen in die Tiefen der Ozeane von Pandora ein, um eine neue Bedrohung für ihre Welt zu bekämpfen.'),
(15, 'Fast & Furious: Legacy', '2025-05-18', 130, '/filmplakate/fast_legacy.jpg', 11.5, 'Dom Toretto und seine Crew müssen sich ihrer Vergangenheit stellen, als ein alter Feind zurückkehrt und ihre Familie bedroht.'),
(16, 'Spider-Man: New Dimensions', '2025-06-01', 112, '/filmplakate/spiderman_new.jpg', 12, 'Peter Parker wird in ein Multiversum gezogen, wo er auf verschiedene Versionen von Spider-Man trifft und gemeinsam mit ihnen eine neue Bedrohung bekämpft.'),
(17, 'The Joker Returns', '2025-06-10', 118, '/filmplakate/joker_returns.jpg', 11.5, 'Der Joker kehrt zurück und stürzt Gotham City erneut ins Chaos, während er sich seinem größten Gegner stellt.'),
(18, 'Inside Out 2', '2025-05-25', 101, '/filmplakate/inside_out2.jpg', 8, 'Rileys Emotionen erleben neue Abenteuer, als sie sich den Herausforderungen des Teenagerlebens stellen.'),
(19, 'Dune: Messiah', '2025-05-30', 155, '/filmplakate/dune_messiah.jpg', 12.5, 'Paul Atreides festigt seine Herrschaft über Arrakis, während er sich inneren und äußeren Bedrohungen gegenübersieht.'),
(20, 'The Batman Beyond', '2025-06-05', 140, '/filmplakate/batman_beyond.jpg', 12, 'Ein neuer Held übernimmt das Erbe von Batman, um Gotham City vor einer neuen Generation von Schurken zu schützen.'),
(21, 'Echoes of Tomorrow', '2025-07-10', 120, '/filmplakate/echoes_of_tomorrow.jpg', 11, 'Eine Zeitreisende kämpft gegen eine dunkle Organisation, die die Zukunft manipulieren will.'),
(22, 'Silent Horizon', '2025-07-15', 110, '/filmplakate/silent_horizon.jpg', 10, 'In einer postapokalyptischen Welt kämpft eine kleine Gruppe ums Überleben und versucht, das Geheimnis des Horizonts zu lüften.'),
(23, 'Neon City Nights', '2025-07-12', 105, '/filmplakate/neon_city_nights.jpg', 9.5, 'Ein Cyberpunk-Thriller über eine Detektivin, die in den dunklen Gassen einer futuristischen Stadt Verbrechen aufklärt.'),
(24, 'Last Stand Legacy', '2025-07-18', 130, '/filmplakate/last_stand_legacy.jpg', 11.5, 'Ein ehemaliger Soldat kehrt zurück, um seine Familie zu beschützen und eine Verschwörung aufzudecken.'),
(25, 'Whispers in the Wind', '2025-07-20', 95, '/filmplakate/whispers_in_the_wind.jpg', 8, 'Ein poetisches Drama über verlorene Liebe und das Finden von Hoffnung in der Stille.'),
(26, 'Shadow Realm', '2025-07-25', 115, '/filmplakate/shadow_realm.jpg', 10.5, 'Ein Fantasy-Abenteuer, in dem eine Gruppe Helden gegen dunkle Mächte kämpft, um ihr Reich zu retten.'),
(27, 'Quantum Rift', '2025-07-28', 125, '/filmplakate/quantum_rift.jpg', 12, 'Wissenschaftler entdecken ein Portal zu parallelen Universen, das unerwartete Konsequenzen hat.'),
(28, 'Crimson Tide', '2025-08-02', 140, '/filmplakate/crimson_tide.jpg', 11.5, 'Ein spannender Thriller über einen U-Boot-Kapitän, der eine politische Krise an der Schwelle zum Krieg verhindern muss.'),
(29, 'Golden Sands', '2025-08-05', 100, '/filmplakate/golden_sands.jpg', 9, 'Ein romantisches Drama, das an einem idyllischen Strand spielt und die Schicksale von zwei Liebenden erzählt.'),
(30, 'Ironclad', '2025-08-08', 150, '/filmplakate/ironclad.jpg', 12.5, 'Ein epischer Historienfilm über die Belagerung einer mittelalterlichen Festung und den Kampf um Freiheit.'),
(31, 'Solar Flare', '2025-08-10', 110, '/filmplakate/solar_flare.jpg', 11, 'Eine Naturkatastrophe durch einen massiven Sonnensturm bedroht die Erde, während Wissenschaftler einen Weg finden müssen, das Unheil abzuwenden.'),
(32, 'Midnight Whisper', '2025-08-12', 100, '/filmplakate/midnight_whisper.jpg', 9.5, 'Ein Mystery-Thriller über eine Frau, die dunkle Geheimnisse in ihrer Heimatstadt entdeckt.'),
(33, 'Neptune’s Call', '2025-08-14', 105, '/filmplakate/neptunes_call.jpg', 10, 'Ein Meeresforscher stößt auf eine unbekannte Unterwasserwelt und kämpft gegen eine gefährliche Bedrohung.'),
(34, 'Celestial Dance', '2025-08-16', 120, '/filmplakate/celestial_dance.jpg', 11, 'Ein romantischer Film über zwei Tänzer, die sich in einer intergalaktischen Gala verlieben.'),
(35, 'The Last Ember', '2025-08-18', 130, '/filmplakate/last_ember.jpg', 12, 'Ein Fantasy-Abenteuer über eine junge Kriegerin, die das letzte Feuer ihres Volkes bewahren muss.'),
(36, 'Frozen Shadows', '2025-08-20', 110, '/filmplakate/frozen_shadows.jpg', 10.5, 'Ein Thriller in der eisigen Wildnis, in dem ein Ermittler ein Geheimnis aufdeckt.'),
(37, 'Silent Thunder', '2025-08-22', 115, '/filmplakate/silent_thunder.jpg', 11, 'Ein Kriegsdrama über eine geheime Mission hinter feindlichen Linien.'),
(38, 'Veil of Secrets', '2025-08-24', 105, '/filmplakate/veil_of_secrets.jpg', 9.5, 'Ein spannender Thriller über eine Journalistin, die eine Verschwörung aufdeckt.'),
(39, 'Lunar Eclipse', '2025-08-26', 120, '/filmplakate/lunar_eclipse.jpg', 11.5, 'Ein Sci-Fi-Drama über eine Mission zum Mond, die schiefgeht.'),
(40, 'Phoenix Rising', '2025-08-28', 130, '/filmplakate/phoenix_rising.jpg', 12, 'Ein episches Drama über den Wiederaufbau nach einer Katastrophe.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kunde`
--

CREATE TABLE `kunde` (
  `id` int(11) NOT NULL,
  `vorname` varchar(100) DEFAULT NULL,
  `nachname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `passwort` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Daten für Tabelle `kunde`
--

INSERT INTO `kunde` (`id`, `vorname`, `nachname`, `email`, `passwort`) VALUES
(1, 'Test', '1', 'test1@gmail.com', '$2y$10$SUtyvQdNuuqUbBX/sQbdc.FRCIh2AB42Ix6cjt5Vs0MeCHQd7Hf5K'),
(2, 'Adam', 'K', 'adam@gmail.com', '$2y$10$oXpKs2bmB7uYy4zuB0xE6e5blanSJDuEw52ChGyVbiizawpeVaQoO'),
(3, 'Sam', 'Raffoul', 'samra@gmail.com', '$2y$10$rIyv4/Opeue2bAnIEdDMueIHc9ao9QsvCNoxcvTzMJGrht6OR02lC'),
(4, 'lul', 'hesha', 'lul@gmail.com', '$2y$10$hVvnsRseyA94EbGRYN31p.SN8v6cQYF3OAAOp6cEqQPLPVnkKZLJ2'),
(5, 'mom', 'hjs', 'zskj@gmail.com', '$2y$10$38ONXCSUCrmYr5839aa4x.Evi6ELdjOIO5Iy2GpilKtdocKhjuT.e'),
(6, 'Christoph1', 'Christoph2', 'mtu_2qfg47wzxnqi@byom.de', '$2y$10$x4E7R0qE78WRVKCDh7jK/uuKN56FyEs.lt8lKMjy4J3HDcnT7LMci'),
(7, 'Test2', 'test', 'tes21@gmail.com', '$2y$10$TDGDm2w2eH4aCBNKk/zo0.DV0PNfZh4UfLrgsv8dVVmdID4thoNIa'),
(8, 'Test3', 'test', 'test3@gmail.com', '$2y$10$mFcfIz.5yGs3Gkx0XQOlKOC7qNoZg5NomYuIi9Zcmrpwp9P0vTO2G');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `vorstellung`
--

CREATE TABLE `vorstellung` (
  `id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `saalnummer` int(11) NOT NULL,
  `datum` date NOT NULL,
  `uhrzeit` time NOT NULL,
  `kapazitaet` int(11) NOT NULL DEFAULT 75
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Daten für Tabelle `vorstellung`
--

INSERT INTO `vorstellung` (`id`, `film_id`, `saalnummer`, `datum`, `uhrzeit`, `kapazitaet`) VALUES
(1, 1, 1, '2025-06-01', '16:00:00', 75),
(2, 2, 2, '2025-06-01', '18:30:00', 75),
(3, 3, 3, '2025-06-01', '21:00:00', 75),
(4, 4, 1, '2025-06-02', '16:00:00', 75),
(5, 5, 2, '2025-06-02', '18:30:00', 75),
(6, 6, 3, '2025-06-02', '21:00:00', 75),
(7, 7, 1, '2025-06-03', '16:00:00', 75),
(8, 8, 2, '2025-06-03', '18:30:00', 75),
(9, 9, 3, '2025-06-03', '21:00:00', 75),
(10, 10, 1, '2025-06-04', '16:00:00', 75),
(11, 11, 2, '2025-06-04', '18:30:00', 75),
(12, 12, 3, '2025-06-04', '21:00:00', 75),
(13, 13, 1, '2025-06-05', '16:00:00', 75),
(14, 14, 2, '2025-06-05', '18:30:00', 75),
(15, 15, 3, '2025-06-05', '21:00:00', 75),
(16, 16, 1, '2025-06-06', '16:00:00', 75),
(17, 17, 2, '2025-06-06', '18:30:00', 75),
(18, 18, 3, '2025-06-06', '21:00:00', 75),
(19, 19, 1, '2025-06-07', '16:00:00', 75),
(20, 20, 2, '2025-06-07', '18:30:00', 75),
(21, 21, 3, '2025-06-07', '21:00:00', 75),
(22, 22, 1, '2025-06-08', '16:00:00', 75),
(23, 23, 2, '2025-06-08', '18:30:00', 75),
(24, 24, 3, '2025-06-08', '21:00:00', 75),
(25, 25, 1, '2025-06-09', '16:00:00', 75),
(26, 26, 2, '2025-06-09', '18:30:00', 75),
(27, 27, 3, '2025-06-09', '21:00:00', 75),
(28, 28, 1, '2025-06-10', '16:00:00', 75),
(29, 29, 2, '2025-06-10', '18:30:00', 75),
(30, 30, 3, '2025-06-10', '21:00:00', 75),
(31, 31, 1, '2025-06-11', '16:00:00', 75),
(32, 32, 2, '2025-06-11', '18:30:00', 75),
(33, 33, 3, '2025-06-11', '21:00:00', 75),
(34, 34, 1, '2025-06-12', '16:00:00', 75),
(35, 35, 2, '2025-06-12', '18:30:00', 75),
(36, 36, 3, '2025-06-12', '21:00:00', 75),
(37, 37, 1, '2025-06-13', '16:00:00', 75),
(38, 38, 2, '2025-06-13', '18:30:00', 75),
(39, 39, 3, '2025-06-13', '21:00:00', 75),
(40, 40, 1, '2025-06-14', '16:00:00', 75);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `buchungen`
--
ALTER TABLE `buchungen`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `kunde`
--
ALTER TABLE `kunde`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `vorstellung`
--
ALTER TABLE `vorstellung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_id` (`film_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `buchungen`
--
ALTER TABLE `buchungen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `kunde`
--
ALTER TABLE `kunde`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `vorstellung`
--
ALTER TABLE `vorstellung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `vorstellung`
--
ALTER TABLE `vorstellung`
  ADD CONSTRAINT `vorstellung_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `filme` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
