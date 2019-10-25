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