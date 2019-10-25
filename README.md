# PHP_ContactForm

This is what you need, to install DB and Tables:

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 25. Okt 2019 um 07:47
-- Server-Version: 5.7.26
-- PHP-Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `PHP_ContactForm`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `php_cf_users`
--

CREATE TABLE `php_cf_users` (
  `id` int(11) NOT NULL,
  `vorname` text NOT NULL,
  `nachname` text NOT NULL,
  `adresse` text NOT NULL,
  `email` text NOT NULL,
  `kennwort` text NOT NULL,
  `md5_kennwort` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `php_cf_users`
--

INSERT INTO `php_cf_users` (`id`, `vorname`, `nachname`, `adresse`, `email`, `kennwort`, `md5_kennwort`, `status`) VALUES
(5, 'Max', 'Muster', '45500 Musterstadt Musterstr.', 'vlog.dman@gmail.com', 'UKFDR88duo', 'aca730b4b4525e6be51d59922b2d806d', 'Aktive'),
(6, 'Max', 'Muster', '45000 Demostadt Musterstr.', 'd.makas@icloud.com', 'aslk10Z', '54e80aed5ca058dab02affa3a51fddd8', 'Inaktive'),
(7, 'Demo', 'Demo', '45500 Demostadt Demostr.', 'vlog.dman2@gmail.com', 'qwerty45', 'aca37f65a3c3087a6effce9a819b8876', 'Aktive');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `php_cf_users`
--
ALTER TABLE `php_cf_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `php_cf_users`
--
ALTER TABLE `php_cf_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;