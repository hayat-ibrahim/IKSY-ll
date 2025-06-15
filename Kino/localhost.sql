-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 06. Jun 2025 um 16:39
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
CREATE DATABASE IF NOT EXISTS `iksy2_eintrittskarten` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci;
USE `iksy2_eintrittskarten`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `filme`
--

CREATE TABLE `filme` (
  `id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `veroeffentlichungsdatum` date NOT NULL,
  `dauer` int(11) NOT NULL,
  `uhrzeiten` varchar(255) NOT NULL,
  `bild_link` varchar(255) NOT NULL,
  `saalnummer` int(11) NOT NULL,
  `ticketPreis` float DEFAULT NULL,
  `beschreibung` text DEFAULT NULL
) ;

--
-- Daten für Tabelle `filme`
INSERT INTO `filme` (`id`, `titel`, `veroeffentlichungsdatum`, `dauer`, `uhrzeiten`, `bild_link`, `saalnummer`, `ticketPreis`, `beschreibung`) VALUES
(1, 'Mission: Impossible – The Final Reckoning', '2025-05-23', 156, '15:10, 19:30, 22:50', '/filmplakate/mission_impossible.jpg', 3, 12.50, 'Ethan Hunt und sein Team kämpfen gegen eine mächtige KI namens "Entity", die globale Netzwerke infiltriert hat. Die Mission führt sie an ihre Grenzen, während sie versuchen, die Welt vor einer drohenden Katastrophe zu retten.'),
(2, 'Thunderbolts', '2025-05-02', 145, '17:30', '/filmplakate/thunderbolts.jpg', 5, 11.00, 'Eine Gruppe von Antihelden wird von der Regierung rekrutiert, um gefährliche Missionen zu erfüllen. Gemeinsam müssen sie lernen, als Team zu agieren, um ihre Vergangenheit zu überwinden und die Welt zu retten.'),
(3, 'Ein Minecraft Film', '2025-04-03', 101, '18:00', '/filmplakate/minecraft_film.jpg', 5, 8.00, 'Vier Außenseiter werden durch ein Portal in die Welt von Minecraft gezogen. Dort müssen sie ihre Kreativität nutzen, um Herausforderungen zu meistern und den Weg zurück nach Hause zu finden.'),
(4, 'Final Destination: Bloodlines', '2025-05-16', 102, '20:15', '/filmplakate/final_destination.jpg', 2, 10.50, 'Stefani wird von wiederkehrenden Albträumen geplagt und entdeckt, dass ihre Familie von einem tödlichen Schicksal verfolgt wird. Sie muss das Geheimnis lüften, um ihre Liebsten zu retten.'),
(5, 'Until Dawn', '2025-04-24', 98, '17:40', '/filmplakate/until_dawn.jpg', 1, 10.00, 'Eine Gruppe von Freunden wird in einer abgelegenen Hütte von einem maskierten Killer gejagt. Nach jedem Tod wachen sie am Anfang des Abends auf und müssen einen Weg finden, dem tödlichen Kreislauf zu entkommen.'),
(6, 'The Accountant 2', '2025-05-06', 132, '20:45', '/filmplakate/accountant2.jpg', 2, 11.50, 'Christian Wolff, ein brillanter Mathematiker mit Autismus, wird erneut in eine gefährliche Verschwörung verwickelt. Gemeinsam mit seinem Bruder Braxton muss er einen Mordfall aufklären und sich seiner Vergangenheit stellen.'),
(7, 'Blood & Sinners', '2025-05-01', 115, '19:30', '/filmplakate/blood_sinners.jpg', 5, 9.50, 'Zwei Brüder kehren in ihre Heimatstadt zurück, um ein neues Leben zu beginnen. Doch dunkle Geheimnisse und übernatürliche Kräfte stellen ihre Pläne auf die Probe.'),
(8, 'The Amateur', '2025-05-03', 123, '17:50', '/filmplakate/amateur.jpg', 3, 10.50, 'Ein CIA-Kryptograph wird zum Spion, als er den Tod seiner Frau rächen will. Ohne Erfahrung im Feld begibt er sich auf eine gefährliche Mission, um die Verantwortlichen zur Strecke zu bringen.'),
(9, 'ATEEZ WORLD TOUR (TOWARDS)', '2025-05-14', 120, '16:00, 21:00', '/filmplakate/ateez.jpg', 3, 14.00, 'Erlebe die energiegeladene Performance der K-Pop-Sensation ATEEZ auf ihrer Welttournee. Ein Muss für alle Fans der Gruppe.'),
(10, 'Balconettes', '2025-05-07', 94, '20:00', '/filmplakate/balconettes.jpg', 5, 9.00, 'Eine humorvolle Geschichte über das Leben und die Freundschaft von Frauen, die ihre Nachmittage auf dem Balkon verbringen und das Geschehen in ihrer Nachbarschaft beobachten.'),
(11, 'Bambi - Eine Lebensgeschichte...', '2025-05-10', 89, '16:00', '/filmplakate/bambi.jpg', 4, 7.50, 'Die bewegende Geschichte eines jungen Rehs, das die Herausforderungen des Lebens im Wald meistert und dabei wichtige Lektionen über Liebe, Verlust und das Erwachsenwerden lernt.'),
(12, 'Bang Boom Bang', '2025-05-09', 107, '21:30', '/filmplakate/bang_boom_bang.jpg', 4, 8.50, 'Eine chaotische Komödie über einen schiefgelaufenen Banküberfall und die skurrilen Charaktere, die darin verwickelt sind.'),
(13, 'Guardians of the Galaxy Vol. 4', '2025-06-20', 143, '18:30', '/filmplakate/gotg4.jpg', 5, 12.00, 'Die Guardians kehren zurück für ein weiteres intergalaktisches Abenteuer, bei dem sie sich neuen Feinden stellen und die Galaxie erneut retten müssen.'),
(14, 'Avatar: The Deep Abyss', '2025-05-22', 162, '19:00', '/filmplakate/avatar2.jpg', 1, 13.00, 'Jake Sully und Neytiri tauchen in die Tiefen der Ozeane von Pandora ein, um eine neue Bedrohung für ihre Welt zu bekämpfen.'),
(15, 'Fast & Furious: Legacy', '2025-05-18', 130, '17:45, 21:15', '/filmplakate/fast_legacy.jpg', 2, 11.50, 'Dom Toretto und seine Crew müssen sich ihrer Vergangenheit stellen, als ein alter Feind zurückkehrt und ihre Familie bedroht.'),
(16, 'Spider-Man: New Dimensions', '2025-06-01', 112, '16:30', '/filmplakate/spiderman_new.jpg', 1, 12.00, 'Peter Parker wird in ein Multiversum gezogen, wo er auf verschiedene Versionen von Spider-Man trifft und gemeinsam mit ihnen eine neue Bedrohung bekämpft.'),
(17, 'The Joker Returns', '2025-06-10', 118, '20:00', '/filmplakate/joker_returns.jpg', 1, 11.50, 'Der Joker kehrt zurück und stürzt Gotham City erneut ins Chaos, während er sich seinem größten Gegner stellt.'),
(18, 'Inside Out 2', '2025-05-25', 101, '15:00, 17:15', '/filmplakate/inside_out2.jpg', 4, 8.00, 'Rileys Emotionen erleben neue Abenteuer, als sie sich den Herausforderungen des Teenagerlebens stellen.'),
(19, 'Dune: Messiah', '2025-05-30', 155, '18:00, 21:00', '/filmplakate/dune_messiah.jpg', 4, 12.50, 'Paul Atreides festigt seine Herrschaft über Arrakis, während er sich inneren und äußeren Bedrohungen gegenübersieht.'),
(20, 'The Batman Beyond', '2025-06-05', 140, '19:45', '/filmplakate/batman_beyond.jpg', 2, 12.00, 'Ein neuer Held übernimmt das Erbe von Batman, um Gotham City vor einer neuen Generation von Schurken zu schützen.');

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
(2, 'Adam', 'K', 'adam@gmail.com', '$2y$10$oXpKs2bmB7uYy4zuB0xE6e5blanSJDuEw52ChGyVbiizawpeVaQoO');

--
-- Indizes der exportierten Tabellen
--

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
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `filme`
--
ALTER TABLE `filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT für Tabelle `kunde`
--
ALTER TABLE `kunde`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
