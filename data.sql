-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 10, 2021 at 04:54 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test`
--

--
-- Dumping data for table `todo-tasks`
--

INSERT INTO `todo-tasks` (`id`, `text`, `status`, `createdAt`, `modifiedAt`) VALUES
(1, 'This is my task', 1, '2021-02-09 20:50:57', '2021-02-08 18:02:57'),
(2, 'This is my task', 1, '2021-02-08 21:02:39', '2021-02-08 21:02:39'),
(3, 'New task', 0, '2021-02-08 21:02:35', '2021-02-08 21:02:35'),
(4, 'New task', 0, '2021-02-08 21:02:42', '2021-02-08 21:02:42');
