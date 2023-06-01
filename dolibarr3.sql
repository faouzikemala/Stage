-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 mai 2023 à 17:53
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dolibarr3`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounting_account`
--

DROP TABLE IF EXISTS `accounting_account`;
CREATE TABLE IF NOT EXISTS `accounting_account` (
  `rowid` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_pcg_version` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `pcg_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_parent` int(11) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `labelshort` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_accounting_category` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `reconcilable` tinyint(1) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_accounting_account` (`account_number`,`entity`,`fk_pcg_version`),
  KEY `idx_accounting_account_fk_pcg_version` (`fk_pcg_version`),
  KEY `idx_accounting_account_account_parent` (`account_parent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `accounting_bookkeeping`
--

DROP TABLE IF EXISTS `accounting_bookkeeping`;
CREATE TABLE IF NOT EXISTS `accounting_bookkeeping` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `piece_num` int(11) NOT NULL,
  `doc_date` date NOT NULL,
  `doc_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_ref` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_doc` int(11) NOT NULL,
  `fk_docdet` int(11) NOT NULL,
  `thirdparty_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subledger_account` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subledger_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_compte` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label_compte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label_operation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit` double NOT NULL,
  `credit` double NOT NULL,
  `montant` double DEFAULT NULL,
  `sens` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_amount` double DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lettering_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_lettering` datetime DEFAULT NULL,
  `date_lim_reglement` datetime DEFAULT NULL,
  `fk_user_author` int(11) NOT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user` int(11) DEFAULT NULL,
  `code_journal` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `journal_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_validated` datetime DEFAULT NULL,
  `date_export` datetime DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_accounting_bookkeeping_fk_docdet` (`fk_docdet`),
  KEY `idx_accounting_bookkeeping_numero_compte` (`numero_compte`,`entity`),
  KEY `idx_accounting_bookkeeping_code_journal` (`code_journal`,`entity`),
  KEY `idx_accounting_bookkeeping_piece_num` (`piece_num`,`entity`),
  KEY `idx_accounting_bookkeeping_fk_doc` (`fk_doc`),
  KEY `idx_accounting_bookkeeping_doc_date` (`doc_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `accounting_bookkeeping_tmp`
--

DROP TABLE IF EXISTS `accounting_bookkeeping_tmp`;
CREATE TABLE IF NOT EXISTS `accounting_bookkeeping_tmp` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `doc_date` date NOT NULL,
  `doc_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_ref` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_doc` int(11) NOT NULL,
  `fk_docdet` int(11) NOT NULL,
  `thirdparty_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subledger_account` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subledger_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_compte` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label_compte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label_operation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit` double NOT NULL,
  `credit` double NOT NULL,
  `montant` double NOT NULL,
  `sens` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_amount` double DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lettering_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_lettering` datetime DEFAULT NULL,
  `date_lim_reglement` datetime DEFAULT NULL,
  `fk_user_author` int(11) NOT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user` int(11) DEFAULT NULL,
  `code_journal` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `journal_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_num` int(11) NOT NULL,
  `date_validated` datetime DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_accounting_bookkeeping_tmp_fk_docdet` (`fk_docdet`),
  KEY `idx_accounting_bookkeeping_tmp_code_journal` (`code_journal`),
  KEY `idx_accounting_bookkeeping_tmp_doc_date` (`doc_date`),
  KEY `idx_accounting_bookkeeping_tmp_numero_compte` (`numero_compte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `accounting_fiscalyear`
--

DROP TABLE IF EXISTS `accounting_fiscalyear`;
CREATE TABLE IF NOT EXISTS `accounting_fiscalyear` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `statut` tinyint(1) NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datec` datetime NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `accounting_groups_account`
--

DROP TABLE IF EXISTS `accounting_groups_account`;
CREATE TABLE IF NOT EXISTS `accounting_groups_account` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_accounting_account` int(11) NOT NULL,
  `fk_c_accounting_category` int(11) NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `accounting_journal`
--

DROP TABLE IF EXISTS `accounting_journal`;
CREATE TABLE IF NOT EXISTS `accounting_journal` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nature` smallint(6) NOT NULL DEFAULT '1',
  `active` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_accounting_journal_code` (`code`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `accounting_system`
--

DROP TABLE IF EXISTS `accounting_system`;
CREATE TABLE IF NOT EXISTS `accounting_system` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_country` int(11) DEFAULT NULL,
  `pcg_version` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_accounting_system_pcg_version` (`pcg_version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `actioncomm`
--

DROP TABLE IF EXISTS `actioncomm`;
CREATE TABLE IF NOT EXISTS `actioncomm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datep` datetime DEFAULT NULL,
  `datep2` datetime DEFAULT NULL,
  `fk_action` int(11) DEFAULT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_mod` int(11) DEFAULT NULL,
  `fk_project` int(11) DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_contact` int(11) DEFAULT NULL,
  `fk_parent` int(11) NOT NULL,
  `fk_user_action` int(11) DEFAULT NULL,
  `fk_user_done` int(11) DEFAULT NULL,
  `transparency` int(11) DEFAULT NULL,
  `priority` smallint(6) DEFAULT NULL,
  `visibility` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `fulldayevent` smallint(6) NOT NULL,
  `percent` smallint(6) NOT NULL,
  `location` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `durationp` double DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `calling_duration` int(11) DEFAULT NULL,
  `email_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_msgid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_sender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_tocc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_tobcc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `errors_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recurid` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recurrule` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recurdateend` datetime DEFAULT NULL,
  `num_vote` int(11) DEFAULT NULL,
  `event_paid` smallint(6) NOT NULL,
  `status` smallint(6) NOT NULL,
  `fk_element` int(11) DEFAULT NULL,
  `elementtype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_actioncomm_ref` (`ref`,`entity`),
  KEY `idx_actioncomm_ref_ext` (`ref_ext`),
  KEY `idx_actioncomm_fk_contact` (`fk_contact`),
  KEY `idx_actioncomm_fk_element` (`fk_element`),
  KEY `idx_actioncomm_fk_project` (`fk_project`),
  KEY `idx_actioncomm_datep2` (`datep2`),
  KEY `idx_actioncomm_recurid` (`recurid`),
  KEY `idx_actioncomm_fk_soc` (`fk_soc`),
  KEY `idx_actioncomm_code` (`code`),
  KEY `idx_actioncomm_fk_user_action` (`fk_user_action`),
  KEY `idx_actioncomm_datep` (`datep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `actioncomm_extrafields`
--

DROP TABLE IF EXISTS `actioncomm_extrafields`;
CREATE TABLE IF NOT EXISTS `actioncomm_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_actioncomm_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `actioncomm_reminder`
--

DROP TABLE IF EXISTS `actioncomm_reminder`;
CREATE TABLE IF NOT EXISTS `actioncomm_reminder` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `dateremind` datetime NOT NULL,
  `typeremind` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_user` int(11) NOT NULL,
  `offsetvalue` int(11) NOT NULL,
  `offsetunit` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `lasterror` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_actioncomm` int(11) NOT NULL,
  `fk_email_template` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_actioncomm_reminder_unique` (`fk_actioncomm`,`fk_user`,`typeremind`,`offsetvalue`,`offsetunit`),
  KEY `idx_actioncomm_reminder_dateremind` (`dateremind`),
  KEY `idx_actioncomm_reminder_status` (`status`),
  KEY `idx_actioncomm_reminder_fk_user` (`fk_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `actioncomm_resources`
--

DROP TABLE IF EXISTS `actioncomm_resources`;
CREATE TABLE IF NOT EXISTS `actioncomm_resources` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_actioncomm` int(11) NOT NULL,
  `element_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_element` int(11) NOT NULL,
  `answer_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mandatory` smallint(6) DEFAULT NULL,
  `transparency` smallint(6) DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_actioncomm_resources` (`fk_actioncomm`,`element_type`,`fk_element`),
  KEY `idx_actioncomm_resources_fk_element` (`fk_element`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

DROP TABLE IF EXISTS `adherent`;
CREATE TABLE IF NOT EXISTS `adherent` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_adherent_type` int(11) DEFAULT NULL,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref_ext` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civility` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass_crypted` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `morphy` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `societe` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `zip` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialnetworks` text COLLATE utf8mb4_unicode_ci,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_perso` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_mobile` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` smallint(6) NOT NULL,
  `public` smallint(6) NOT NULL,
  `datefin` datetime DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datevalid` datetime DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_mod` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `canvas` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_adherent_ref` (`ref`,`entity`),
  UNIQUE KEY `uk_adherent_fk_soc` (`fk_soc`),
  UNIQUE KEY `uk_adherent_login` (`login`,`entity`),
  KEY `idx_adherent_fk_adherent_type` (`fk_adherent_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `adherent_extrafields`
--

DROP TABLE IF EXISTS `adherent_extrafields`;
CREATE TABLE IF NOT EXISTS `adherent_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_adherent_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `adherent_type`
--

DROP TABLE IF EXISTS `adherent_type`;
CREATE TABLE IF NOT EXISTS `adherent_type` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `statut` smallint(6) NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morphy` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `amount` double DEFAULT NULL,
  `vote` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `note` text COLLATE utf8mb4_unicode_ci,
  `mail_valid` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_adherent_type_libelle` (`libelle`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `adherent_type_extrafields`
--

DROP TABLE IF EXISTS `adherent_type_extrafields`;
CREATE TABLE IF NOT EXISTS `adherent_type_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_adherent_type_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `adherent_type_lang`
--

DROP TABLE IF EXISTS `adherent_type_lang`;
CREATE TABLE IF NOT EXISTS `adherent_type_lang` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_type` int(11) NOT NULL,
  `lang` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `advtargetemailing`
--

DROP TABLE IF EXISTS `advtargetemailing`;
CREATE TABLE IF NOT EXISTS `advtargetemailing` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_element` int(11) NOT NULL,
  `type_element` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filtervalue` text COLLATE utf8mb4_unicode_ci,
  `fk_user_author` int(11) NOT NULL,
  `datec` datetime NOT NULL,
  `fk_user_mod` int(11) NOT NULL,
  `tms` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_advtargetemailing_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `asset`
--

DROP TABLE IF EXISTS `asset`;
CREATE TABLE IF NOT EXISTS `asset` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_asset_type` int(11) DEFAULT NULL,
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_ht` double DEFAULT NULL,
  `amount_vat` double DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `date_creation` datetime NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) NOT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_asset_ref` (`ref`),
  KEY `idx_asset_fk_asset_type` (`fk_asset_type`),
  KEY `idx_asset_rowid` (`rowid`),
  KEY `idx_asset_entity` (`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `asset_extrafields`
--

DROP TABLE IF EXISTS `asset_extrafields`;
CREATE TABLE IF NOT EXISTS `asset_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_asset_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `asset_type`
--

DROP TABLE IF EXISTS `asset_type`;
CREATE TABLE IF NOT EXISTS `asset_type` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountancy_code_asset` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_depreciation_asset` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_depreciation_expense` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_asset_type_label` (`label`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `asset_type_extrafields`
--

DROP TABLE IF EXISTS `asset_type_extrafields`;
CREATE TABLE IF NOT EXISTS `asset_type_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_asset_type_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datev` date DEFAULT NULL,
  `dateo` date DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_account` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_rappro` int(11) DEFAULT NULL,
  `fk_type` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_releve` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_chq` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_compte` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rappro` tinyint(1) DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `fk_bordereau` int(11) DEFAULT NULL,
  `banque` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emetteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin_id` int(11) DEFAULT NULL,
  `origin_type` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_bank_dateo` (`dateo`),
  KEY `idx_bank_rappro` (`rappro`),
  KEY `idx_bank_datev` (`datev`),
  KEY `idx_bank_fk_account` (`fk_account`),
  KEY `idx_bank_num_releve` (`num_releve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `bank_account`
--

DROP TABLE IF EXISTS `bank_account`;
CREATE TABLE IF NOT EXISTS `bank_account` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_accountancy_journal` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `ref` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `bank` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_banque` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_guichet` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cle_rib` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bic` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iban_prefix` varchar(34) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_iban` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cle_iban` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domiciliation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `fk_pays` int(11) NOT NULL,
  `proprio` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `courant` smallint(6) NOT NULL,
  `clos` smallint(6) NOT NULL,
  `rappro` smallint(6) DEFAULT '1',
  `url` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_allowed` int(11) DEFAULT NULL,
  `min_desired` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ics` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ics_transfer` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_bank_account_label` (`label`,`entity`),
  KEY `idx_fk_accountancy_journal` (`fk_accountancy_journal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `bank_account_extrafields`
--

DROP TABLE IF EXISTS `bank_account_extrafields`;
CREATE TABLE IF NOT EXISTS `bank_account_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_bank_account_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `bank_categ`
--

DROP TABLE IF EXISTS `bank_categ`;
CREATE TABLE IF NOT EXISTS `bank_categ` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `bank_class`
--

DROP TABLE IF EXISTS `bank_class`;
CREATE TABLE IF NOT EXISTS `bank_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lineid` int(11) NOT NULL,
  `fk_categ` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_bank_class_lineid` (`lineid`,`fk_categ`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `bank_url`
--

DROP TABLE IF EXISTS `bank_url`;
CREATE TABLE IF NOT EXISTS `bank_url` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_bank` int(11) DEFAULT NULL,
  `url_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_bank_url` (`fk_bank`,`url_id`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `blockedlog`
--

DROP TABLE IF EXISTS `blockedlog`;
CREATE TABLE IF NOT EXISTS `blockedlog` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `date_creation` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `action` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amounts` double NOT NULL,
  `element` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `user_fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_object` int(11) DEFAULT NULL,
  `ref_object` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_object` datetime DEFAULT NULL,
  `signature` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signature_line` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object_data` mediumtext COLLATE utf8mb4_unicode_ci,
  `object_version` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certified` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `entity_action` (`entity`,`action`),
  KEY `entity_action_certified` (`entity`,`action`,`certified`),
  KEY `fk_object_element` (`fk_object`,`element`),
  KEY `entity` (`entity`),
  KEY `fk_user` (`fk_user`),
  KEY `signature` (`signature`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `blockedlog_authority`
--

DROP TABLE IF EXISTS `blockedlog_authority`;
CREATE TABLE IF NOT EXISTS `blockedlog_authority` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `blockchain` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `signature` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rowid`),
  KEY `signature` (`signature`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `bom_bom`
--

DROP TABLE IF EXISTS `bom_bom`;
CREATE TABLE IF NOT EXISTS `bom_bom` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_creat` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bomtype` int(11) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `fk_warehouse` int(11) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `efficiency` double DEFAULT '1',
  `duration` double DEFAULT NULL,
  `date_creation` datetime NOT NULL,
  `date_valid` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_bom_bom_ref` (`ref`,`entity`),
  KEY `idx_bom_bom_ref` (`ref`),
  KEY `idx_bom_bom_status` (`status`),
  KEY `bom_bom_fk_user_creat` (`fk_user_creat`),
  KEY `idx_bom_bom_fk_product` (`fk_product`),
  KEY `idx_bom_bom_rowid` (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `bom_bomline`
--

DROP TABLE IF EXISTS `bom_bomline`;
CREATE TABLE IF NOT EXISTS `bom_bomline` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_bom` int(11) DEFAULT NULL,
  `fk_product` int(11) NOT NULL,
  `fk_bom_child` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` double NOT NULL,
  `qty_frozen` smallint(6) DEFAULT NULL,
  `disable_stock_change` smallint(6) DEFAULT NULL,
  `efficiency` double NOT NULL DEFAULT '1',
  `position` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_bom_bomline_fk_product` (`fk_product`),
  KEY `idx_bom_bomline_rowid` (`rowid`),
  KEY `idx_bom_bomline_fk_bom` (`fk_bom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `bom_bomline_extrafields`
--

DROP TABLE IF EXISTS `bom_bomline_extrafields`;
CREATE TABLE IF NOT EXISTS `bom_bomline_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `bom_bom_extrafields`
--

DROP TABLE IF EXISTS `bom_bom_extrafields`;
CREATE TABLE IF NOT EXISTS `bom_bom_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_bom_bom_extrafields_fk_object` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `bookmark`
--

DROP TABLE IF EXISTS `bookmark`;
CREATE TABLE IF NOT EXISTS `bookmark` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) NOT NULL,
  `dateb` datetime DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `target` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_bookmark_title` (`fk_user`,`entity`,`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `bordereau_cheque`
--

DROP TABLE IF EXISTS `bordereau_cheque`;
CREATE TABLE IF NOT EXISTS `bordereau_cheque` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datec` datetime NOT NULL,
  `date_bordereau` date DEFAULT NULL,
  `amount` double NOT NULL,
  `nbcheque` smallint(6) NOT NULL,
  `fk_bank_account` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `statut` smallint(6) NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `note` text COLLATE utf8mb4_unicode_ci,
  `entity` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_bordereau_cheque` (`ref`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `boxes`
--

DROP TABLE IF EXISTS `boxes`;
CREATE TABLE IF NOT EXISTS `boxes` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `box_id` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `position` smallint(6) NOT NULL,
  `box_order` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_user` int(11) NOT NULL,
  `maxline` int(11) DEFAULT NULL,
  `params` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_boxes` (`entity`,`box_id`,`position`,`fk_user`),
  KEY `idx_boxes_fk_user` (`fk_user`),
  KEY `idx_boxes_boxid` (`box_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `boxes_def`
--

DROP TABLE IF EXISTS `boxes_def`;
CREATE TABLE IF NOT EXISTS `boxes_def` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `note` varchar(130) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_boxes_def` (`file`,`entity`,`note`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `budget`
--

DROP TABLE IF EXISTS `budget`;
CREATE TABLE IF NOT EXISTS `budget` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `import_key` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `budget_lines`
--

DROP TABLE IF EXISTS `budget_lines`;
CREATE TABLE IF NOT EXISTS `budget_lines` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_budget` int(11) DEFAULT NULL,
  `fk_project_ids` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `import_key` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_budget_lines` (`fk_budget`,`fk_project_ids`),
  KEY `IDX_24101960535C9FEB` (`fk_budget`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` tinytext COLLATE utf8mb4_unicode_ci,
  `color` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_parent` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '1',
  `fk_soc` int(11) DEFAULT NULL,
  `visible` int(11) NOT NULL DEFAULT '1',
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `categories_extrafields`
--

DROP TABLE IF EXISTS `categories_extrafields`;
CREATE TABLE IF NOT EXISTS `categories_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_categories_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_lang`
--

DROP TABLE IF EXISTS `categorie_lang`;
CREATE TABLE IF NOT EXISTS `categorie_lang` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_category` int(11) DEFAULT NULL,
  `lang` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_category_lang` (`fk_category`,`lang`),
  KEY `IDX_4620033534645A1F` (`fk_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `chargesociales`
--

DROP TABLE IF EXISTS `chargesociales`;
CREATE TABLE IF NOT EXISTS `chargesociales` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_ech` datetime NOT NULL,
  `libelle` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_creation` datetime DEFAULT NULL,
  `date_valid` datetime DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `fk_type` int(11) NOT NULL,
  `fk_account` int(11) DEFAULT NULL,
  `fk_mode_reglement` int(11) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `paye` smallint(6) NOT NULL,
  `periode` date DEFAULT NULL,
  `fk_projet` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_projet` int(11) DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_cloture` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_int` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_creation` datetime DEFAULT NULL,
  `date_valid` datetime DEFAULT NULL,
  `date_cloture` datetime DEFAULT NULL,
  `date_commande` date DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `source` smallint(6) DEFAULT NULL,
  `fk_statut` smallint(6) DEFAULT NULL,
  `amount_ht` double DEFAULT '0',
  `remise_percent` double DEFAULT NULL,
  `remise_absolue` double DEFAULT NULL,
  `remise` double DEFAULT NULL,
  `total_tva` double DEFAULT '0',
  `localtax1` double DEFAULT '0',
  `localtax2` double DEFAULT '0',
  `total_ht` double DEFAULT '0',
  `total_ttc` double DEFAULT '0',
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_source` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pos_source` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facture` tinyint(1) DEFAULT NULL,
  `fk_account` int(11) DEFAULT NULL,
  `fk_currency` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_cond_reglement` int(11) DEFAULT NULL,
  `fk_mode_reglement` int(11) DEFAULT NULL,
  `date_livraison` datetime DEFAULT NULL,
  `fk_shipping_method` int(11) DEFAULT NULL,
  `fk_warehouse` int(11) DEFAULT NULL,
  `fk_availability` int(11) DEFAULT NULL,
  `fk_input_reason` int(11) DEFAULT NULL,
  `fk_delivery_address` int(11) DEFAULT NULL,
  `fk_incoterms` int(11) DEFAULT NULL,
  `location_incoterms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_commande_ref` (`ref`,`entity`),
  KEY `idx_commande_fk_user_author` (`fk_user_author`),
  KEY `idx_commande_fk_user_cloture` (`fk_user_cloture`),
  KEY `idx_commande_fk_account` (`fk_account`),
  KEY `idx_commande_fk_currency` (`fk_currency`),
  KEY `idx_commande_fk_soc` (`fk_soc`),
  KEY `idx_commande_fk_user_valid` (`fk_user_valid`),
  KEY `idx_commande_fk_projet` (`fk_projet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `commandedet`
--

DROP TABLE IF EXISTS `commandedet`;
CREATE TABLE IF NOT EXISTS `commandedet` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_commande` int(11) DEFAULT NULL,
  `fk_commandefourndet` int(11) DEFAULT NULL,
  `fk_unit` int(11) DEFAULT NULL,
  `fk_parent_line` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `vat_src_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double DEFAULT NULL,
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `remise_percent` double DEFAULT NULL,
  `remise` double DEFAULT NULL,
  `fk_remise_except` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `subprice` double DEFAULT '0',
  `total_ht` double DEFAULT '0',
  `total_tva` double DEFAULT '0',
  `total_localtax1` double DEFAULT '0',
  `total_localtax2` double DEFAULT '0',
  `total_ttc` double DEFAULT '0',
  `product_type` int(11) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `info_bits` int(11) DEFAULT NULL,
  `buy_price_ht` double DEFAULT '0',
  `fk_product_fournisseur_price` int(11) DEFAULT NULL,
  `special_code` int(11) DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_subprice` double DEFAULT '0',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  KEY `idx_commandedet_fk_product` (`fk_product`),
  KEY `fk_commandedet_fk_commandefourndet` (`fk_commandefourndet`),
  KEY `idx_commandedet_fk_commande` (`fk_commande`),
  KEY `fk_commandedet_fk_unit` (`fk_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `commandedet_extrafields`
--

DROP TABLE IF EXISTS `commandedet_extrafields`;
CREATE TABLE IF NOT EXISTS `commandedet_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_commandedet_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `commande_extrafields`
--

DROP TABLE IF EXISTS `commande_extrafields`;
CREATE TABLE IF NOT EXISTS `commande_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_commande_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `commande_fournisseur`
--

DROP TABLE IF EXISTS `commande_fournisseur`;
CREATE TABLE IF NOT EXISTS `commande_fournisseur` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_soc` int(11) DEFAULT NULL,
  `ref` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_projet` int(11) DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_creation` datetime DEFAULT NULL,
  `date_valid` datetime DEFAULT NULL,
  `date_approve` datetime DEFAULT NULL,
  `date_approve2` datetime DEFAULT NULL,
  `date_commande` date DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `fk_user_approve` int(11) DEFAULT NULL,
  `fk_user_approve2` int(11) DEFAULT NULL,
  `source` smallint(6) NOT NULL,
  `fk_statut` smallint(6) DEFAULT NULL,
  `billed` smallint(6) DEFAULT NULL,
  `amount_ht` double DEFAULT '0',
  `remise_percent` double DEFAULT NULL,
  `remise` double DEFAULT NULL,
  `total_tva` double DEFAULT '0',
  `localtax1` double DEFAULT '0',
  `localtax2` double DEFAULT '0',
  `total_ht` double DEFAULT '0',
  `total_ttc` double DEFAULT '0',
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_livraison` datetime DEFAULT NULL,
  `fk_account` int(11) DEFAULT NULL,
  `fk_cond_reglement` int(11) DEFAULT NULL,
  `fk_mode_reglement` int(11) DEFAULT NULL,
  `fk_input_method` int(11) DEFAULT NULL,
  `fk_incoterms` int(11) DEFAULT NULL,
  `location_incoterms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_commande_fournisseur_ref` (`ref`,`fk_soc`,`entity`),
  KEY `idx_commande_fournisseur_fk_soc` (`fk_soc`),
  KEY `billed` (`billed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `commande_fournisseurdet`
--

DROP TABLE IF EXISTS `commande_fournisseurdet`;
CREATE TABLE IF NOT EXISTS `commande_fournisseurdet` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_unit` int(11) DEFAULT NULL,
  `fk_commande` int(11) NOT NULL,
  `fk_parent_line` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `ref` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `vat_src_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double DEFAULT '0',
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `remise_percent` double DEFAULT NULL,
  `remise` double DEFAULT NULL,
  `subprice` double DEFAULT '0',
  `total_ht` double DEFAULT '0',
  `total_tva` double DEFAULT '0',
  `total_localtax1` double DEFAULT '0',
  `total_localtax2` double DEFAULT '0',
  `total_ttc` double DEFAULT '0',
  `product_type` int(11) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `info_bits` int(11) DEFAULT NULL,
  `special_code` int(11) DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_subprice` double DEFAULT '0',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  KEY `idx_commande_fournisseurdet_fk_commande` (`fk_commande`),
  KEY `fk_commande_fournisseurdet_fk_unit` (`fk_unit`),
  KEY `idx_commande_fournisseurdet_fk_product` (`fk_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `commande_fournisseurdet_extrafields`
--

DROP TABLE IF EXISTS `commande_fournisseurdet_extrafields`;
CREATE TABLE IF NOT EXISTS `commande_fournisseurdet_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_commande_fournisseurdet_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `commande_fournisseur_dispatch`
--

DROP TABLE IF EXISTS `commande_fournisseur_dispatch`;
CREATE TABLE IF NOT EXISTS `commande_fournisseur_dispatch` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_reception` int(11) DEFAULT NULL,
  `fk_commande` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `fk_commandefourndet` int(11) DEFAULT NULL,
  `fk_projet` int(11) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `fk_entrepot` int(11) DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eatby` date DEFAULT NULL,
  `sellby` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rowid`),
  KEY `idx_commande_fournisseur_dispatch_fk_reception` (`fk_reception`),
  KEY `idx_commande_fournisseur_dispatch_fk_commande` (`fk_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `commande_fournisseur_dispatch_extrafields`
--

DROP TABLE IF EXISTS `commande_fournisseur_dispatch_extrafields`;
CREATE TABLE IF NOT EXISTS `commande_fournisseur_dispatch_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_commande_fournisseur_dispatch_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `commande_fournisseur_extrafields`
--

DROP TABLE IF EXISTS `commande_fournisseur_extrafields`;
CREATE TABLE IF NOT EXISTS `commande_fournisseur_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_commande_fournisseur_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `commande_fournisseur_log`
--

DROP TABLE IF EXISTS `commande_fournisseur_log`;
CREATE TABLE IF NOT EXISTS `commande_fournisseur_log` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datelog` datetime NOT NULL,
  `fk_commande` int(11) NOT NULL,
  `fk_statut` smallint(6) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_element` int(11) DEFAULT NULL,
  `element_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) DEFAULT '1',
  `import_key` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `constt`
--

DROP TABLE IF EXISTS `constt`;
CREATE TABLE IF NOT EXISTS `constt` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT 'string',
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `note` text COLLATE utf8mb4_unicode_ci,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_const` (`name`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

DROP TABLE IF EXISTS `contrat`;
CREATE TABLE IF NOT EXISTS `contrat` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `date_contrat` datetime DEFAULT NULL,
  `statut` smallint(6) DEFAULT NULL,
  `fin_validite` datetime DEFAULT NULL,
  `date_cloture` datetime DEFAULT NULL,
  `fk_projet` int(11) DEFAULT NULL,
  `fk_commercial_signature` int(11) DEFAULT NULL,
  `fk_commercial_suivi` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_user_cloture` int(11) DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_contrat_ref` (`ref`,`entity`),
  KEY `idx_contrat_fk_user_author` (`fk_user_author`),
  KEY `idx_contrat_fk_soc` (`fk_soc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `contratdet`
--

DROP TABLE IF EXISTS `contratdet`;
CREATE TABLE IF NOT EXISTS `contratdet` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_contrat` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `fk_unit` int(11) DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `statut` smallint(6) DEFAULT NULL,
  `label` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `fk_remise_except` int(11) DEFAULT NULL,
  `date_commande` datetime DEFAULT NULL,
  `date_ouverture_prevue` datetime DEFAULT NULL,
  `date_ouverture` datetime DEFAULT NULL,
  `date_fin_validite` datetime DEFAULT NULL,
  `date_cloture` datetime DEFAULT NULL,
  `vat_src_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double DEFAULT '0',
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` double NOT NULL,
  `remise_percent` double DEFAULT NULL,
  `subprice` double DEFAULT '0',
  `price_ht` double DEFAULT NULL,
  `remise` double DEFAULT NULL,
  `total_ht` double DEFAULT '0',
  `total_tva` double DEFAULT '0',
  `total_localtax1` double DEFAULT '0',
  `total_localtax2` double DEFAULT '0',
  `total_ttc` double DEFAULT '0',
  `product_type` int(11) DEFAULT '1',
  `info_bits` int(11) DEFAULT NULL,
  `buy_price_ht` double DEFAULT NULL,
  `fk_product_fournisseur_price` int(11) DEFAULT NULL,
  `fk_user_author` int(11) NOT NULL,
  `fk_user_ouverture` int(11) DEFAULT NULL,
  `fk_user_cloture` int(11) DEFAULT NULL,
  `commentaire` text COLLATE utf8mb4_unicode_ci,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_subprice` double DEFAULT '0',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  KEY `fk_contratdet_fk_unit` (`fk_unit`),
  KEY `idx_contratdet_fk_product` (`fk_product`),
  KEY `idx_contratdet_date_ouverture` (`date_ouverture`),
  KEY `idx_contratdet_date_fin_validite` (`date_fin_validite`),
  KEY `idx_contratdet_fk_contrat` (`fk_contrat`),
  KEY `idx_contratdet_date_ouverture_prevue` (`date_ouverture_prevue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `contratdet_extrafields`
--

DROP TABLE IF EXISTS `contratdet_extrafields`;
CREATE TABLE IF NOT EXISTS `contratdet_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_contratdet_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `contratdet_log`
--

DROP TABLE IF EXISTS `contratdet_log`;
CREATE TABLE IF NOT EXISTS `contratdet_log` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_contratdet` int(11) DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `date` datetime NOT NULL,
  `statut` smallint(6) NOT NULL,
  `fk_user_author` int(11) NOT NULL,
  `commentaire` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  KEY `idx_contratdet_log_date` (`date`),
  KEY `idx_contratdet_log_fk_contratdet` (`fk_contratdet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `contrat_extrafields`
--

DROP TABLE IF EXISTS `contrat_extrafields`;
CREATE TABLE IF NOT EXISTS `contrat_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_contrat_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `cronjob`
--

DROP TABLE IF EXISTS `cronjob`;
CREATE TABLE IF NOT EXISTS `cronjob` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `jobtype` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `command` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classesname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objectname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `methodename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `params` text COLLATE utf8mb4_unicode_ci,
  `md5params` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `datelastrun` datetime DEFAULT NULL,
  `datenextrun` datetime DEFAULT NULL,
  `datestart` datetime DEFAULT NULL,
  `dateend` datetime DEFAULT NULL,
  `datelastresult` datetime DEFAULT NULL,
  `lastresult` text COLLATE utf8mb4_unicode_ci,
  `lastoutput` text COLLATE utf8mb4_unicode_ci,
  `unitfrequency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3600',
  `frequency` int(11) NOT NULL,
  `maxrun` int(11) NOT NULL,
  `nbrun` int(11) DEFAULT NULL,
  `autodelete` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `processing` int(11) NOT NULL,
  `test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_mod` int(11) DEFAULT NULL,
  `fk_mailing` int(11) DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `libname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_cronjob_datelastrun` (`datelastrun`),
  KEY `idx_cronjob_datestart` (`datestart`),
  KEY `idx_cronjob_status` (`status`),
  KEY `idx_cronjob_datenextrun` (`datenextrun`),
  KEY `idx_cronjob_dateend` (`dateend`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_accounting_category`
--

DROP TABLE IF EXISTS `c_accounting_category`;
CREATE TABLE IF NOT EXISTS `c_accounting_category` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `code` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `range_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sens` tinyint(1) NOT NULL,
  `category_type` tinyint(1) NOT NULL,
  `formula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) DEFAULT NULL,
  `fk_country` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_accounting_category` (`code`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_actioncomm`
--

DROP TABLE IF EXISTS `c_actioncomm`;
CREATE TABLE IF NOT EXISTS `c_actioncomm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'system',
  `libelle` varchar(48) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `todo` tinyint(1) DEFAULT NULL,
  `color` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picto` varchar(48) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_c_actioncomm` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_action_trigger`
--

DROP TABLE IF EXISTS `c_action_trigger`;
CREATE TABLE IF NOT EXISTS `c_action_trigger` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `elementtype` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_action_trigger_code` (`code`),
  KEY `idx_action_trigger_rang` (`rang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_availability`
--

DROP TABLE IF EXISTS `c_availability`;
CREATE TABLE IF NOT EXISTS `c_availability` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `position` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_availability` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_barcode_type`
--

DROP TABLE IF EXISTS `c_barcode_type`;
CREATE TABLE IF NOT EXISTS `c_barcode_type` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coder` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `example` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_barcode_type` (`code`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_chargesociales`
--

DROP TABLE IF EXISTS `c_chargesociales`;
CREATE TABLE IF NOT EXISTS `c_chargesociales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deductible` smallint(6) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `code` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountancy_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_pays` int(11) NOT NULL DEFAULT '1',
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_civility`
--

DROP TABLE IF EXISTS `c_civility`;
CREATE TABLE IF NOT EXISTS `c_civility` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_civility` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_country`
--

DROP TABLE IF EXISTS `c_country`;
CREATE TABLE IF NOT EXISTS `c_country` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_iso` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eec` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `favorite` tinyint(1) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_c_country_label` (`label`),
  UNIQUE KEY `idx_c_country_code` (`code`),
  UNIQUE KEY `idx_c_country_code_iso` (`code_iso`)
) ENGINE=InnoDB AUTO_INCREMENT=492 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `c_country`
--

INSERT INTO `c_country` (`rowid`, `code`, `code_iso`, `label`, `eec`, `active`, `favorite`) VALUES
(1, 'FR', 'FRA', 'France', 1, 1, 0),
(2, 'BE', 'BEL', 'Belgium', 1, 1, 0),
(3, 'IT', 'ITA', 'Italy', 1, 1, 0),
(4, 'ES', 'ESP', 'Spain', 1, 1, 0),
(5, 'DE', 'DEU', 'Germany', 1, 1, 0),
(6, 'CH', 'CHE', 'Switzerland', 0, 1, 0),
(7, 'GB', 'GBR', 'United Kingdom', 0, 1, 0),
(8, 'IE', 'IRL', 'Ireland', 1, 1, 0),
(9, 'CN', 'CHN', 'China', 0, 1, 0),
(10, 'TN', 'TUN', 'Tunisia', 0, 1, 0),
(11, 'US', 'USA', 'United States', 0, 1, 0),
(12, 'MA', 'MAR', 'Morocco', 0, 1, 0),
(13, 'DZ', 'DZA', 'Algeria', 0, 1, 0),
(14, 'CA', 'CAN', 'Canada', 0, 1, 0),
(15, 'TG', 'TGO', 'Togo', 0, 1, 0),
(16, 'GA', 'GAB', 'Gabon', 0, 1, 0),
(17, 'NL', 'NLD', 'Netherlands', 1, 1, 0),
(18, 'HU', 'HUN', 'Hungary', 1, 1, 0),
(19, 'RU', 'RUS', 'Russia', 0, 1, 0),
(20, 'SE', 'SWE', 'Sweden', 1, 1, 0),
(21, 'CI', 'CIV', 'Côte d\'Ivoire', 0, 1, 0),
(22, 'SN', 'SEN', 'Senegal', 0, 1, 0),
(23, 'AR', 'ARG', 'Argentina', 0, 1, 0),
(24, 'CM', 'CMR', 'Cameroun', 0, 1, 0),
(25, 'PT', 'PRT', 'Portugal', 1, 1, 0),
(26, 'SA', 'SAU', 'Saudi Arabia', 0, 1, 0),
(27, 'MC', 'MCO', 'Monaco', 1, 1, 0),
(28, 'AU', 'AUS', 'Australia', 0, 1, 0),
(29, 'SG', 'SGP', 'Singapore', 0, 1, 0),
(30, 'AF', 'AFG', 'Afghanistan', 0, 1, 0),
(31, 'AX', 'ALA', 'Åland Island', 0, 1, 0),
(32, 'AL', 'ALB', 'Albania', 0, 1, 0),
(33, 'AS', 'ASM', 'American Samoa', 0, 1, 0),
(34, 'AD', 'AND', 'Andorra', 0, 1, 0),
(35, 'AO', 'AGO', 'Angola', 0, 1, 0),
(36, 'AI', 'AIA', 'Anguilla', 0, 1, 0),
(37, 'AQ', 'ATA', 'Antarctica', 0, 1, 0),
(38, 'AG', 'ATG', 'Antigua and Barbuda', 0, 1, 0),
(39, 'AM', 'ARM', 'Armenia', 0, 1, 0),
(40, 'AW', 'ABW', 'Aruba', 0, 1, 0),
(41, 'AT', 'AUT', 'Austria', 1, 1, 0),
(42, 'AZ', 'AZE', 'Azerbaijan', 0, 1, 0),
(43, 'BS', 'BHS', 'Bahamas', 0, 1, 0),
(44, 'BH', 'BHR', 'Bahrain', 0, 1, 0),
(45, 'BD', 'BGD', 'Bangladesh', 0, 1, 0),
(46, 'BB', 'BRB', 'Barbados', 0, 1, 0),
(47, 'BY', 'BLR', 'Belarus', 0, 1, 0),
(48, 'BZ', 'BLZ', 'Belize', 0, 1, 0),
(49, 'BJ', 'BEN', 'Benin', 0, 1, 0),
(50, 'BM', 'BMU', 'Bermuda', 0, 1, 0),
(51, 'BT', 'BTN', 'Bhutan', 0, 1, 0),
(52, 'BO', 'BOL', 'Bolivia', 0, 1, 0),
(53, 'BA', 'BIH', 'Bosnia and Herzegovina', 0, 1, 0),
(54, 'BW', 'BWA', 'Botswana', 0, 1, 0),
(55, 'BV', 'BVT', 'Bouvet Island', 0, 0, 0),
(56, 'BR', 'BRA', 'Brazil', 0, 1, 0),
(57, 'IO', 'IOT', 'British Indian Ocean Territory', 0, 1, 0),
(58, 'BN', 'BRN', 'Brunei', 0, 1, 0),
(59, 'BG', 'BGR', 'Bulgaria', 1, 1, 0),
(60, 'BF', 'BFA', 'Burkina Faso', 0, 1, 0),
(61, 'BI', 'BDI', 'Burundi', 0, 1, 0),
(62, 'KH', 'KHM', 'Cambodge / Cambodia', 0, 1, 0),
(63, 'CV', 'CPV', 'Cap-Vert', 0, 1, 0),
(64, 'KY', 'CYM', 'Iles Cayman', 0, 1, 0),
(65, 'CF', 'CAF', 'Central African Republic (CAR/RCA)', 0, 1, 0),
(66, 'TD', 'TCD', 'Tchad', 0, 1, 0),
(67, 'CL', 'CHL', 'Chile', 0, 1, 0),
(68, 'CX', 'CXR', 'Ile Christmas', 0, 1, 0),
(69, 'CC', 'CCK', 'Iles des Cocos (Keeling)', 0, 1, 0),
(70, 'CO', 'COL', 'Colombie', 0, 1, 0),
(71, 'KM', 'COM', 'Comores', 0, 1, 0),
(72, 'CG', 'COG', 'Congo', 0, 1, 0),
(73, 'CD', 'COD', 'DR Congo (RDC)', 0, 1, 0),
(74, 'CK', 'COK', 'Iles Cook', 0, 1, 0),
(75, 'CR', 'CRI', 'Costa Rica', 0, 1, 0),
(76, 'HR', 'HRV', 'Croatia', 1, 1, 0),
(77, 'CU', 'CUB', 'Cuba', 0, 1, 0),
(78, 'CY', 'CYP', 'Cyprus', 1, 1, 0),
(79, 'CZ', 'CZE', 'Czech Republic', 1, 1, 0),
(80, 'DK', 'DNK', 'Denmark', 1, 1, 0),
(81, 'DJ', 'DJI', 'Djibouti', 0, 1, 0),
(82, 'DM', 'DMA', 'Dominica', 0, 1, 0),
(83, 'DO', 'DOM', 'Dominican Republic', 0, 1, 0),
(84, 'EC', 'ECU', 'Republic of Ecuador', 0, 1, 0),
(85, 'EG', 'EGY', 'Egypt', 0, 1, 0),
(86, 'SV', 'SLV', 'El Salvador', 0, 1, 0),
(87, 'GQ', 'GNQ', 'Equatorial Guinea', 0, 1, 0),
(88, 'ER', 'ERI', 'Eritrea', 0, 1, 0),
(89, 'EE', 'EST', 'Estonia', 1, 1, 0),
(90, 'ET', 'ETH', 'Ethiopia', 0, 1, 0),
(91, 'FK', 'FLK', 'Falkland Islands', 0, 1, 0),
(92, 'FO', 'FRO', 'Faroe Islands', 0, 1, 0),
(93, 'FJ', 'FJI', 'Fidji Islands', 0, 1, 0),
(94, 'FI', 'FIN', 'Finland', 1, 1, 0),
(95, 'GF', 'GUF', 'French Guiana', 0, 1, 0),
(96, 'PF', 'PYF', 'French Polynesia', 0, 1, 0),
(97, 'TF', 'ATF', 'Terres australes françaises', 0, 1, 0),
(98, 'GM', 'GMB', 'Gambie', 0, 1, 0),
(99, 'GE', 'GEO', 'Georgia', 0, 1, 0),
(100, 'GH', 'GHA', 'Ghana', 0, 1, 0),
(101, 'GI', 'GIB', 'Gibraltar', 0, 1, 0),
(102, 'GR', 'GRC', 'Greece', 1, 1, 0),
(103, 'GL', 'GRL', 'Groenland', 0, 1, 0),
(104, 'GD', 'GRD', 'Grenade', 0, 1, 0),
(106, 'GU', 'GUM', 'Guam', 0, 1, 0),
(107, 'GT', 'GTM', 'Guatemala', 0, 1, 0),
(108, 'GN', 'GIN', 'Guinea', 0, 1, 0),
(109, 'GW', 'GNB', 'Guinea-Bissao', 0, 1, 0),
(111, 'HT', 'HTI', 'Haiti', 0, 1, 0),
(112, 'HM', 'HMD', 'Iles Heard et McDonald', 0, 1, 0),
(113, 'VA', 'VAT', 'Vatican City (Saint-Siège)', 0, 1, 0),
(114, 'HN', 'HND', 'Honduras', 0, 1, 0),
(115, 'HK', 'HKG', 'Hong Kong', 0, 1, 0),
(116, 'IS', 'ISL', 'Islande', 0, 1, 0),
(117, 'IN', 'IND', 'India', 0, 1, 0),
(118, 'ID', 'IDN', 'Indonesia', 0, 1, 0),
(119, 'IR', 'IRN', 'Iran', 0, 1, 0),
(120, 'IQ', 'IRQ', 'Iraq', 0, 1, 0),
(121, 'IL', 'ISR', 'Israel', 0, 1, 0),
(122, 'JM', 'JAM', 'Jamaica', 0, 1, 0),
(123, 'JP', 'JPN', 'Japan (Nippon)', 0, 1, 0),
(124, 'JO', 'JOR', 'Jordanie', 0, 1, 0),
(125, 'KZ', 'KAZ', 'Kazakhstan', 0, 1, 0),
(126, 'KE', 'KEN', 'Kenya', 0, 1, 0),
(127, 'KI', 'KIR', 'Kiribati', 0, 1, 0),
(128, 'KP', 'PRK', 'North Corea', 0, 1, 0),
(129, 'KR', 'KOR', 'South Corea', 0, 1, 0),
(130, 'KW', 'KWT', 'Koweït', 0, 1, 0),
(131, 'KG', 'KGZ', 'Kirghizistan', 0, 1, 0),
(132, 'LA', 'LAO', 'Laos', 0, 1, 0),
(133, 'LV', 'LVA', 'Lettonie', 1, 1, 0),
(134, 'LB', 'LBN', 'Liban', 0, 1, 0),
(135, 'LS', 'LSO', 'Lesotho', 0, 1, 0),
(136, 'LR', 'LBR', 'Liberia', 0, 1, 0),
(137, 'LY', 'LBY', 'Libye', 0, 1, 0),
(138, 'LI', 'LIE', 'Liechtenstein', 0, 1, 0),
(139, 'LT', 'LTU', 'Lituanie', 1, 1, 0),
(140, 'LU', 'LUX', 'Luxembourg', 1, 1, 0),
(141, 'MO', 'MAC', 'Macao', 0, 1, 0),
(142, 'MK', 'MKD', 'North Macedonia', 0, 1, 0),
(143, 'MG', 'MDG', 'Madagascar', 0, 1, 0),
(144, 'MW', 'MWI', 'Malawi', 0, 1, 0),
(145, 'MY', 'MYS', 'Malaisie', 0, 1, 0),
(146, 'MV', 'MDV', 'Maldives', 0, 1, 0),
(147, 'ML', 'MLI', 'Mali', 0, 1, 0),
(148, 'MT', 'MLT', 'Malte', 1, 1, 0),
(149, 'MH', 'MHL', 'Iles Marshall', 0, 1, 0),
(151, 'MR', 'MRT', 'Mauritanie', 0, 1, 0),
(152, 'MU', 'MUS', 'Maurice', 0, 1, 0),
(153, 'YT', 'MYT', 'Mayotte', 0, 1, 0),
(154, 'MX', 'MEX', 'Mexique', 0, 1, 0),
(155, 'FM', 'FSM', 'Micronésie', 0, 1, 0),
(156, 'MD', 'MDA', 'Moldavie', 0, 1, 0),
(157, 'MN', 'MNG', 'Mongolie', 0, 1, 0),
(158, 'MS', 'MSR', 'Monserrat', 0, 1, 0),
(159, 'MZ', 'MOZ', 'Mozambique', 0, 1, 0),
(160, 'MM', 'MMR', 'Birmanie (Myanmar)', 0, 1, 0),
(161, 'NA', 'NAM', 'Namibie', 0, 1, 0),
(162, 'NR', 'NRU', 'Nauru', 0, 1, 0),
(163, 'NP', 'NPL', 'Népal', 0, 1, 0),
(165, 'NC', 'NCL', 'New Caledonia', 0, 1, 0),
(166, 'NZ', 'NZL', 'New Zealand', 0, 1, 0),
(167, 'NI', 'NIC', 'Nicaragua', 0, 1, 0),
(168, 'NE', 'NER', 'Niger', 0, 1, 0),
(169, 'NG', 'NGA', 'Nigeria', 0, 1, 0),
(170, 'NU', 'NIU', 'Niue', 0, 1, 0),
(171, 'NF', 'NFK', 'Norfolk Island', 0, 1, 0),
(172, 'MP', 'MNP', 'Northern Mariana Islands', 0, 1, 0),
(173, 'NO', 'NOR', 'Norway', 0, 1, 0),
(174, 'OM', 'OMN', 'Oman', 0, 1, 0),
(175, 'PK', 'PAK', 'Pakistan', 0, 1, 0),
(176, 'PW', 'PLW', 'Palau', 0, 1, 0),
(177, 'PS', 'PSE', 'Palestinian territories', 0, 1, 0),
(178, 'PA', 'PAN', 'Panama', 0, 1, 0),
(179, 'PG', 'PNG', 'Papua New Guinea', 0, 1, 0),
(180, 'PY', 'PRY', 'Paraguay', 0, 1, 0),
(181, 'PE', 'PER', 'Peru', 0, 1, 0),
(182, 'PH', 'PHL', 'Philippines', 0, 1, 0),
(183, 'PN', 'PCN', 'Pitcairn Islands', 0, 1, 0),
(184, 'PL', 'POL', 'Pologne', 1, 1, 0),
(185, 'PR', 'PRI', 'Puerto Rico', 0, 1, 0),
(186, 'QA', 'QAT', 'Qatar', 0, 1, 0),
(188, 'RO', 'ROU', 'Romania', 1, 1, 0),
(189, 'RW', 'RWA', 'Rwanda', 0, 1, 0),
(190, 'SH', 'SHN', 'Saint Helena', 0, 1, 0),
(191, 'KN', 'KNA', 'Saint Kitts and Nevis', 0, 1, 0),
(192, 'LC', 'LCA', 'Saint Lucia', 0, 1, 0),
(193, 'PM', 'SPM', 'Saint Pierre and Miquelon', 0, 1, 0),
(194, 'VC', 'VCT', 'Saint Vincent and the Grenadines', 0, 1, 0),
(195, 'WS', 'WSM', 'Samoa', 0, 1, 0),
(196, 'SM', 'SMR', 'San Marino ', 0, 1, 0),
(197, 'ST', 'STP', 'Saint Thomas and Prince', 0, 1, 0),
(198, 'RS', 'SRB', 'Serbia', 0, 1, 0),
(199, 'SC', 'SYC', 'Seychelles', 0, 1, 0),
(200, 'SL', 'SLE', 'Sierra Leone', 0, 1, 0),
(201, 'SK', 'SVK', 'Slovakia', 1, 1, 0),
(202, 'SI', 'SVN', 'Slovenia', 1, 1, 0),
(203, 'SB', 'SLB', 'Solomon Islands', 0, 1, 0),
(204, 'SO', 'SOM', 'Somalia', 0, 1, 0),
(205, 'ZA', 'ZAF', 'South Africa', 0, 1, 0),
(206, 'GS', 'SGS', 'South Georgia and the South Sandwich Islands ', 0, 1, 0),
(207, 'LK', 'LKA', 'Sri Lanka', 0, 1, 0),
(208, 'SD', 'SDN', 'Sudan', 0, 1, 0),
(209, 'SR', 'SUR', 'Suriname', 0, 1, 0),
(210, 'SJ', 'SJM', 'Svalbard and Jan Mayen', 0, 1, 0),
(211, 'SZ', 'SWZ', 'Swaziland / Eswatini', 0, 1, 0),
(212, 'SY', 'SYR', 'Syria', 0, 1, 0),
(213, 'TW', 'TWN', 'Taiwan', 0, 1, 0),
(214, 'TJ', 'TJK', 'Tajikistan', 0, 1, 0),
(215, 'TZ', 'TZA', 'Tanzania', 0, 1, 0),
(216, 'TH', 'THA', 'Thailand', 0, 1, 0),
(217, 'TL', 'TLS', 'Timor-Leste', 0, 1, 0),
(218, 'TK', 'TKL', 'Tokelau', 0, 1, 0),
(219, 'TO', 'TON', 'Tonga', 0, 1, 0),
(220, 'TT', 'TTO', 'Trinidad and Tobago', 0, 1, 0),
(221, 'TR', 'TUR', 'Turkey', 0, 1, 0),
(222, 'TM', 'TKM', 'Turkmenistan', 0, 1, 0),
(223, 'TC', 'TCA', 'Turks and Caicos Islands', 0, 1, 0),
(224, 'TV', 'TUV', 'Tuvalu', 0, 1, 0),
(225, 'UG', 'UGA', 'Uganda', 0, 1, 0),
(226, 'UA', 'UKR', 'Ukraine', 0, 1, 0),
(227, 'AE', 'ARE', 'United Arab Emirates', 0, 1, 0),
(228, 'UM', 'UMI', 'United States Minor Outlying Islands', 0, 1, 0),
(229, 'UY', 'URY', 'Uruguay', 0, 1, 0),
(230, 'UZ', 'UZB', 'Uzbekistan', 0, 1, 0),
(231, 'VU', 'VUT', 'Vanuatu', 0, 1, 0),
(232, 'VE', 'VEN', 'Venezuela', 0, 1, 0),
(233, 'VN', 'VNM', 'Vietnam', 0, 1, 0),
(234, 'VG', 'VGB', 'British Virgin Islands', 0, 1, 0),
(235, 'VI', 'VIR', 'Virgin Islands of the United States', 0, 1, 0),
(236, 'WF', 'WLF', 'Wallis and Futuna', 0, 1, 0),
(237, 'EH', 'ESH', 'Western Sahara', 0, 1, 0),
(238, 'YE', 'YEM', 'Yemen', 0, 1, 0),
(239, 'ZM', 'ZMB', 'Zambia', 0, 1, 0),
(240, 'ZW', 'ZWE', 'Zimbabwe', 0, 1, 0),
(241, 'GG', 'GGY', 'Guernsey', 0, 1, 0),
(242, 'IM', 'IMN', 'Isle of Man', 0, 1, 0),
(243, 'JE', 'JEY', 'Jersey', 0, 1, 0),
(244, 'ME', 'MNE', 'Montenegro', 0, 1, 0),
(245, 'BL', 'BLM', 'Saint-Barthélemy', 0, 1, 0),
(246, 'MF', 'MAF', 'Saint-Martin', 0, 1, 0),
(247, 'XK', 'XKX', 'Kosovo', 0, 1, 0),
(300, 'CW', 'CUW', 'Curaçao', 0, 1, 0),
(301, 'SX', 'SXM', 'Sint Maarten', 0, 1, 0),
(491, '', NULL, '-', 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `c_currencies`
--

DROP TABLE IF EXISTS `c_currencies`;
CREATE TABLE IF NOT EXISTS `c_currencies` (
  `code_iso` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unicode` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`code_iso`),
  UNIQUE KEY `uk_c_currencies_code_iso` (`code_iso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_departements`
--

DROP TABLE IF EXISTS `c_departements`;
CREATE TABLE IF NOT EXISTS `c_departements` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_region` int(11) DEFAULT NULL,
  `code_departement` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cheflieu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tncc` int(11) DEFAULT NULL,
  `ncc` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_departements` (`code_departement`,`fk_region`),
  KEY `idx_departements_fk_region` (`fk_region`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_ecotaxe`
--

DROP TABLE IF EXISTS `c_ecotaxe`;
CREATE TABLE IF NOT EXISTS `c_ecotaxe` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_pays` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_ecotaxe` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_effectif`
--

DROP TABLE IF EXISTS `c_effectif`;
CREATE TABLE IF NOT EXISTS `c_effectif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_c_effectif` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_email_senderprofile`
--

DROP TABLE IF EXISTS `c_email_senderprofile`;
CREATE TABLE IF NOT EXISTS `c_email_senderprofile` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `private` smallint(6) NOT NULL,
  `date_creation` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signature` text COLLATE utf8mb4_unicode_ci,
  `position` smallint(6) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_email_senderprofile` (`entity`,`label`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_email_templates`
--

DROP TABLE IF EXISTS `c_email_templates`;
CREATE TABLE IF NOT EXISTS `c_email_templates` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_template` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private` smallint(6) NOT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `label` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` smallint(6) DEFAULT NULL,
  `enabled` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `topic` text COLLATE utf8mb4_unicode_ci,
  `joinfiles` text COLLATE utf8mb4_unicode_ci,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `content_lines` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_email_templates` (`entity`,`label`,`lang`),
  KEY `idx_type` (`type_template`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_exp_tax_cat`
--

DROP TABLE IF EXISTS `c_exp_tax_cat`;
CREATE TABLE IF NOT EXISTS `c_exp_tax_cat` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(48) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_exp_tax_range`
--

DROP TABLE IF EXISTS `c_exp_tax_range`;
CREATE TABLE IF NOT EXISTS `c_exp_tax_range` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_c_exp_tax_cat` int(11) NOT NULL DEFAULT '1',
  `range_ik` double NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_field_list`
--

DROP TABLE IF EXISTS `c_field_list`;
CREATE TABLE IF NOT EXISTS `c_field_list` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `element` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `align` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT 'left',
  `sort` tinyint(1) NOT NULL DEFAULT '1',
  `search` tinyint(1) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `enabled` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `rang` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_format_cards`
--

DROP TABLE IF EXISTS `c_format_cards`;
CREATE TABLE IF NOT EXISTS `c_format_cards` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paper_size` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orientation` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metric` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leftmargin` double NOT NULL,
  `topmargin` double NOT NULL,
  `nx` int(11) NOT NULL,
  `ny` int(11) NOT NULL,
  `spacex` double NOT NULL,
  `spacey` double NOT NULL,
  `width` double NOT NULL,
  `height` double NOT NULL,
  `font_size` int(11) NOT NULL,
  `custom_x` double NOT NULL,
  `custom_y` double NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_forme_juridique`
--

DROP TABLE IF EXISTS `c_forme_juridique`;
CREATE TABLE IF NOT EXISTS `c_forme_juridique` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `fk_pays` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isvatexempted` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_forme_juridique` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_holiday_types`
--

DROP TABLE IF EXISTS `c_holiday_types`;
CREATE TABLE IF NOT EXISTS `c_holiday_types` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `affect` int(11) NOT NULL,
  `delay` int(11) NOT NULL,
  `newByMonth` double NOT NULL DEFAULT '0',
  `fk_country` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_holiday_types` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_hrm_department`
--

DROP TABLE IF EXISTS `c_hrm_department`;
CREATE TABLE IF NOT EXISTS `c_hrm_department` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `pos` tinyint(1) NOT NULL,
  `code` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_hrm_function`
--

DROP TABLE IF EXISTS `c_hrm_function`;
CREATE TABLE IF NOT EXISTS `c_hrm_function` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `pos` tinyint(1) NOT NULL,
  `code` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_level` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_hrm_public_holiday`
--

DROP TABLE IF EXISTS `c_hrm_public_holiday`;
CREATE TABLE IF NOT EXISTS `c_hrm_public_holiday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL,
  `fk_country` int(11) DEFAULT NULL,
  `code` varchar(62) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dayrule` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '1',
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_c_hrm_public_holiday` (`entity`,`code`),
  UNIQUE KEY `uk_c_hrm_public_holiday2` (`entity`,`fk_country`,`dayrule`,`day`,`month`,`year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_incoterms`
--

DROP TABLE IF EXISTS `c_incoterms`;
CREATE TABLE IF NOT EXISTS `c_incoterms` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_incoterms` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_input_method`
--

DROP TABLE IF EXISTS `c_input_method`;
CREATE TABLE IF NOT EXISTS `c_input_method` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_input_method` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_input_reason`
--

DROP TABLE IF EXISTS `c_input_reason`;
CREATE TABLE IF NOT EXISTS `c_input_reason` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_input_reason` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_lead_status`
--

DROP TABLE IF EXISTS `c_lead_status`;
CREATE TABLE IF NOT EXISTS `c_lead_status` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `percent` double DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_lead_status_code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_paiement`
--

DROP TABLE IF EXISTS `c_paiement`;
CREATE TABLE IF NOT EXISTS `c_paiement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(62) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` smallint(6) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `accountancy_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_c_paiement_code` (`entity`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_paper_format`
--

DROP TABLE IF EXISTS `c_paper_format`;
CREATE TABLE IF NOT EXISTS `c_paper_format` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` double DEFAULT '0',
  `height` double DEFAULT '0',
  `unit` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_partnership_type`
--

DROP TABLE IF EXISTS `c_partnership_type`;
CREATE TABLE IF NOT EXISTS `c_partnership_type` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_payment_term`
--

DROP TABLE IF EXISTS `c_payment_term`;
CREATE TABLE IF NOT EXISTS `c_payment_term` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `code` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sortorder` smallint(6) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_facture` text COLLATE utf8mb4_unicode_ci,
  `type_cdr` tinyint(1) DEFAULT NULL,
  `nbjour` smallint(6) DEFAULT NULL,
  `decalage` smallint(6) DEFAULT NULL,
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_payment_term_code` (`entity`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_price_expression`
--

DROP TABLE IF EXISTS `c_price_expression`;
CREATE TABLE IF NOT EXISTS `c_price_expression` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expression` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_price_global_variable`
--

DROP TABLE IF EXISTS `c_price_global_variable`;
CREATE TABLE IF NOT EXISTS `c_price_global_variable` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `value` double DEFAULT '0',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_price_global_variable_updater`
--

DROP TABLE IF EXISTS `c_price_global_variable_updater`;
CREATE TABLE IF NOT EXISTS `c_price_global_variable_updater` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  `fk_variable` int(11) NOT NULL,
  `update_interval` int(11) DEFAULT NULL,
  `next_update` int(11) DEFAULT NULL,
  `last_status` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_productbatch_qcstatus`
--

DROP TABLE IF EXISTS `c_productbatch_qcstatus`;
CREATE TABLE IF NOT EXISTS `c_productbatch_qcstatus` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `code` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_productbatch_qcstatus` (`code`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_product_nature`
--

DROP TABLE IF EXISTS `c_product_nature`;
CREATE TABLE IF NOT EXISTS `c_product_nature` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` tinyint(1) NOT NULL,
  `label` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_product_nature` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_propalst`
--

DROP TABLE IF EXISTS `c_propalst`;
CREATE TABLE IF NOT EXISTS `c_propalst` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `code` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_c_propalst` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_prospectcontactlevel`
--

DROP TABLE IF EXISTS `c_prospectcontactlevel`;
CREATE TABLE IF NOT EXISTS `c_prospectcontactlevel` (
  `code` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sortorder` smallint(6) DEFAULT NULL,
  `active` smallint(6) NOT NULL DEFAULT '1',
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_prospectlevel`
--

DROP TABLE IF EXISTS `c_prospectlevel`;
CREATE TABLE IF NOT EXISTS `c_prospectlevel` (
  `code` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sortorder` smallint(6) DEFAULT NULL,
  `active` smallint(6) NOT NULL DEFAULT '1',
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_recruitment_origin`
--

DROP TABLE IF EXISTS `c_recruitment_origin`;
CREATE TABLE IF NOT EXISTS `c_recruitment_origin` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_regions`
--

DROP TABLE IF EXISTS `c_regions`;
CREATE TABLE IF NOT EXISTS `c_regions` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_pays` int(11) DEFAULT NULL,
  `code_region` int(11) NOT NULL,
  `cheflieu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tncc` int(11) DEFAULT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_code_region` (`code_region`),
  KEY `idx_c_regions_fk_pays` (`fk_pays`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_revenuestamp`
--

DROP TABLE IF EXISTS `c_revenuestamp`;
CREATE TABLE IF NOT EXISTS `c_revenuestamp` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_pays` int(11) NOT NULL,
  `taux` double NOT NULL,
  `revenuestamp_type` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fixed',
  `note` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `accountancy_code_sell` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_buy` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_shipment_mode`
--

DROP TABLE IF EXISTS `c_shipment_mode`;
CREATE TABLE IF NOT EXISTS `c_shipment_mode` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `tracking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_shipment_mode` (`code`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_shipment_package_type`
--

DROP TABLE IF EXISTS `c_shipment_package_type`;
CREATE TABLE IF NOT EXISTS `c_shipment_package_type` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `entity` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_socialnetworks`
--

DROP TABLE IF EXISTS `c_socialnetworks`;
CREATE TABLE IF NOT EXISTS `c_socialnetworks` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_c_socialnetworks_code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_stcomm`
--

DROP TABLE IF EXISTS `c_stcomm`;
CREATE TABLE IF NOT EXISTS `c_stcomm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picto` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_c_stcomm` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_stcommcontact`
--

DROP TABLE IF EXISTS `c_stcommcontact`;
CREATE TABLE IF NOT EXISTS `c_stcommcontact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picto` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_c_stcommcontact` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_ticket_category`
--

DROP TABLE IF EXISTS `c_ticket_category`;
CREATE TABLE IF NOT EXISTS `c_ticket_category` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) DEFAULT '1',
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` int(11) DEFAULT NULL,
  `use_default` int(11) DEFAULT '1',
  `fk_parent` int(11) NOT NULL,
  `force_severity` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pos` int(11) NOT NULL,
  `active` int(11) DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_code` (`code`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_ticket_resolution`
--

DROP TABLE IF EXISTS `c_ticket_resolution`;
CREATE TABLE IF NOT EXISTS `c_ticket_resolution` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) DEFAULT '1',
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) DEFAULT '1',
  `use_default` int(11) DEFAULT '1',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_code` (`code`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_ticket_severity`
--

DROP TABLE IF EXISTS `c_ticket_severity`;
CREATE TABLE IF NOT EXISTS `c_ticket_severity` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) DEFAULT '1',
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) DEFAULT '1',
  `use_default` int(11) DEFAULT '1',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_code` (`code`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_ticket_type`
--

DROP TABLE IF EXISTS `c_ticket_type`;
CREATE TABLE IF NOT EXISTS `c_ticket_type` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) DEFAULT '1',
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) DEFAULT '1',
  `use_default` int(11) DEFAULT '1',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_code` (`code`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_transport_mode`
--

DROP TABLE IF EXISTS `c_transport_mode`;
CREATE TABLE IF NOT EXISTS `c_transport_mode` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_transport_mode` (`code`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_tva`
--

DROP TABLE IF EXISTS `c_tva`;
CREATE TABLE IF NOT EXISTS `c_tva` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_pays` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taux` double NOT NULL,
  `localtax1` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localtax2` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recuperableonly` int(11) NOT NULL,
  `note` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `accountancy_code_sell` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_buy` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_tva_id` (`fk_pays`,`code`,`taux`,`recuperableonly`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_typent`
--

DROP TABLE IF EXISTS `c_typent`;
CREATE TABLE IF NOT EXISTS `c_typent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_country` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_c_typent` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_type_contact`
--

DROP TABLE IF EXISTS `c_type_contact`;
CREATE TABLE IF NOT EXISTS `c_type_contact` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `element` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'external',
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_type_contact_id` (`element`,`source`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_type_container`
--

DROP TABLE IF EXISTS `c_type_container`;
CREATE TABLE IF NOT EXISTS `c_type_container` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `label` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_type_container_id` (`code`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_type_fees`
--

DROP TABLE IF EXISTS `c_type_fees`;
CREATE TABLE IF NOT EXISTS `c_type_fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `accountancy_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `module` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_c_type_fees` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_type_resource`
--

DROP TABLE IF EXISTS `c_type_resource`;
CREATE TABLE IF NOT EXISTS `c_type_resource` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_type_resource_id` (`label`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_units`
--

DROP TABLE IF EXISTS `c_units`;
CREATE TABLE IF NOT EXISTS `c_units` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scale` int(11) DEFAULT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_label` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_c_units_code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `c_ziptown`
--

DROP TABLE IF EXISTS `c_ziptown`;
CREATE TABLE IF NOT EXISTS `c_ziptown` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_county` int(11) DEFAULT NULL,
  `fk_pays` int(11) DEFAULT NULL,
  `code` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_ziptown_fk_pays` (`zip`,`town`,`fk_pays`),
  KEY `idx_c_ziptown_fk_county` (`fk_county`),
  KEY `idx_c_ziptown_zip` (`zip`),
  KEY `idx_c_ziptown_fk_pays` (`fk_pays`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `default_values`
--

DROP TABLE IF EXISTS `default_values`;
CREATE TABLE IF NOT EXISTS `default_values` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `param` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_default_values` (`type`,`entity`,`user_id`,`page`,`param`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_int` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `date_valid` datetime DEFAULT NULL,
  `date_delivery` datetime DEFAULT NULL,
  `fk_address` int(11) DEFAULT NULL,
  `fk_statut` smallint(6) DEFAULT NULL,
  `total_ht` double DEFAULT '0',
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_incoterms` int(11) DEFAULT NULL,
  `location_incoterms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_delivery_uk_ref` (`ref`,`entity`),
  KEY `idx_delivery_fk_user_author` (`fk_user_author`),
  KEY `idx_delivery_fk_user_valid` (`fk_user_valid`),
  KEY `idx_delivery_fk_soc` (`fk_soc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `deliverydet`
--

DROP TABLE IF EXISTS `deliverydet`;
CREATE TABLE IF NOT EXISTS `deliverydet` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_delivery` int(11) DEFAULT NULL,
  `fk_origin_line` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `qty` double DEFAULT NULL,
  `subprice` double DEFAULT '0',
  `total_ht` double DEFAULT '0',
  `rang` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_deliverydet_fk_delivery` (`fk_delivery`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `deliverydet_extrafields`
--

DROP TABLE IF EXISTS `deliverydet_extrafields`;
CREATE TABLE IF NOT EXISTS `deliverydet_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_deliverydet_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `delivery_extrafields`
--

DROP TABLE IF EXISTS `delivery_extrafields`;
CREATE TABLE IF NOT EXISTS `delivery_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_delivery_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `deplacement`
--

DROP TABLE IF EXISTS `deplacement`;
CREATE TABLE IF NOT EXISTS `deplacement` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datec` datetime NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `dated` datetime DEFAULT NULL,
  `fk_user` int(11) NOT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `type` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_statut` int(11) NOT NULL DEFAULT '1',
  `km` double DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_projet` int(11) DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `document_model`
--

DROP TABLE IF EXISTS `document_model`;
CREATE TABLE IF NOT EXISTS `document_model` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `type` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_document_model` (`nom`,`type`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `don`
--

DROP TABLE IF EXISTS `don`;
CREATE TABLE IF NOT EXISTS `don` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_statut` smallint(6) NOT NULL,
  `datedon` datetime DEFAULT NULL,
  `amount` double DEFAULT '0',
  `fk_payment` int(11) DEFAULT NULL,
  `paid` smallint(6) NOT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `societe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `zip` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_country` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_mobile` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public` smallint(6) NOT NULL DEFAULT '1',
  `fk_projet` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `fk_user_author` int(11) NOT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `date_valid` datetime DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `don_extrafields`
--

DROP TABLE IF EXISTS `don_extrafields`;
CREATE TABLE IF NOT EXISTS `don_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_don_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `ecm_directories`
--

DROP TABLE IF EXISTS `ecm_directories`;
CREATE TABLE IF NOT EXISTS `ecm_directories` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_c` int(11) DEFAULT NULL,
  `fk_user_m` int(11) DEFAULT NULL,
  `label` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_parent` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cachenbofdoc` int(11) NOT NULL,
  `fullpath` varchar(750) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_c` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `acl` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_ecm_directories` (`label`,`fk_parent`,`entity`),
  KEY `idx_ecm_directories_fk_user_c` (`fk_user_c`),
  KEY `idx_ecm_directories_fk_user_m` (`fk_user_m`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `ecm_directories_extrafields`
--

DROP TABLE IF EXISTS `ecm_directories_extrafields`;
CREATE TABLE IF NOT EXISTS `ecm_directories_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_ecm_directories_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `ecm_files`
--

DROP TABLE IF EXISTS `ecm_files`;
CREATE TABLE IF NOT EXISTS `ecm_files` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `share` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `filepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `src_object_type` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `src_object_id` int(11) DEFAULT NULL,
  `fullpath_orig` varchar(750) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `keywords` varchar(750) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci,
  `position` int(11) DEFAULT NULL,
  `gen_or_uploaded` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_c` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_c` int(11) DEFAULT NULL,
  `fk_user_m` int(11) DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `acl` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_ecm_files` (`filepath`,`filename`,`entity`),
  KEY `idx_ecm_files_label` (`label`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `ecm_files_extrafields`
--

DROP TABLE IF EXISTS `ecm_files_extrafields`;
CREATE TABLE IF NOT EXISTS `ecm_files_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_ecm_files_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `element_contact`
--

DROP TABLE IF EXISTS `element_contact`;
CREATE TABLE IF NOT EXISTS `element_contact` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_c_type_contact` int(11) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `statut` smallint(6) DEFAULT '5',
  `element_id` int(11) NOT NULL,
  `fk_socpeople` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_element_contact_idx1` (`element_id`,`fk_c_type_contact`,`fk_socpeople`),
  KEY `fk_element_contact_fk_c_type_contact` (`fk_c_type_contact`),
  KEY `idx_element_contact_fk_socpeople` (`fk_socpeople`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `element_element`
--

DROP TABLE IF EXISTS `element_element`;
CREATE TABLE IF NOT EXISTS `element_element` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_source` int(11) NOT NULL,
  `sourcetype` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_target` int(11) NOT NULL,
  `targettype` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_element_element_idx1` (`fk_source`,`sourcetype`,`fk_target`,`targettype`),
  KEY `idx_element_element_fk_target` (`fk_target`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `element_resources`
--

DROP TABLE IF EXISTS `element_resources`;
CREATE TABLE IF NOT EXISTS `element_resources` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `element_id` int(11) DEFAULT NULL,
  `element_type` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resource_id` int(11) DEFAULT NULL,
  `resource_type` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `busy` int(11) DEFAULT NULL,
  `mandatory` int(11) DEFAULT NULL,
  `duree` double DEFAULT NULL,
  `fk_user_create` int(11) DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_element_resources_idx1` (`resource_id`,`resource_type`,`element_id`,`element_type`),
  KEY `idx_element_element_element_id` (`element_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `emailcollector_emailcollector`
--

DROP TABLE IF EXISTS `emailcollector_emailcollector`;
CREATE TABLE IF NOT EXISTS `emailcollector_emailcollector` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hostcharset` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT 'UTF-8',
  `login` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_directory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_directory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxemailpercollect` int(11) DEFAULT '100',
  `datelastresult` datetime DEFAULT NULL,
  `codelastresult` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastresult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datelastok` datetime DEFAULT NULL,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `date_creation` datetime NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) NOT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_emailcollector_emailcollector_ref` (`ref`,`entity`),
  KEY `idx_emailcollector_status` (`status`),
  KEY `idx_emailcollector_entity` (`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `emailcollector_emailcollectoraction`
--

DROP TABLE IF EXISTS `emailcollector_emailcollectoraction`;
CREATE TABLE IF NOT EXISTS `emailcollector_emailcollectoraction` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_emailcollector` int(11) DEFAULT NULL,
  `type` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionparam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creation` datetime NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) NOT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_emailcollector_emailcollectoraction` (`fk_emailcollector`,`type`),
  KEY `idx_emailcollector_fk_emailcollector` (`fk_emailcollector`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `emailcollector_emailcollectorfilter`
--

DROP TABLE IF EXISTS `emailcollector_emailcollectorfilter`;
CREATE TABLE IF NOT EXISTS `emailcollector_emailcollectorfilter` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_emailcollector` int(11) DEFAULT NULL,
  `type` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rulevalue` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creation` datetime NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) NOT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_emailcollector_emailcollectorfilter` (`fk_emailcollector`,`type`,`rulevalue`),
  KEY `idx_emailcollector_fk_emailcollector` (`fk_emailcollector`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `entrepot`
--

DROP TABLE IF EXISTS `entrepot`;
CREATE TABLE IF NOT EXISTS `entrepot` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_project` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `lieu` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_departement` int(11) DEFAULT NULL,
  `fk_pays` int(11) DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` tinyint(1) DEFAULT '1',
  `fk_user_author` int(11) DEFAULT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_entrepot_label` (`ref`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `entrepot_extrafields`
--

DROP TABLE IF EXISTS `entrepot_extrafields`;
CREATE TABLE IF NOT EXISTS `entrepot_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_entrepot_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `establishment`
--

DROP TABLE IF EXISTS `establishment`;
CREATE TABLE IF NOT EXISTS `establishment` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_state` int(11) DEFAULT NULL,
  `fk_country` int(11) DEFAULT NULL,
  `profid1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profid2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profid3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_user_author` int(11) NOT NULL,
  `fk_user_mod` int(11) DEFAULT NULL,
  `datec` datetime NOT NULL,
  `tms` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `eventorganization_conferenceorboothattendee`
--

DROP TABLE IF EXISTS `eventorganization_conferenceorboothattendee`;
CREATE TABLE IF NOT EXISTS `eventorganization_conferenceorboothattendee` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_actioncomm` int(11) DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_subscription` datetime DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `date_creation` datetime NOT NULL,
  `tms` datetime DEFAULT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_eventorganization_conferenceorboothattendee` (`fk_soc`,`fk_actioncomm`,`email`),
  KEY `idx_eventorganization_conferenceorboothattendee_fk_soc` (`fk_soc`),
  KEY `idx_eventorganization_conferenceorboothattendee_email` (`email`),
  KEY `idx_eventorganization_conferenceorboothattendee_rowid` (`rowid`),
  KEY `idx_eventorganization_conferenceorboothattendee_fk_actioncomm` (`fk_actioncomm`),
  KEY `idx_eventorganization_conferenceorboothattendee_status` (`status`),
  KEY `idx_eventorganization_conferenceorboothattendee_ref` (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `eventorganization_conferenceorboothattendee_extrafields`
--

DROP TABLE IF EXISTS `eventorganization_conferenceorboothattendee_extrafields`;
CREATE TABLE IF NOT EXISTS `eventorganization_conferenceorboothattendee_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT NULL,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_conferenceorboothattendee_fk_object` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `prefix_session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateevent` datetime DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_object` int(11) DEFAULT NULL,
  `authentication_method` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_oauth_token` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_events_dateevent` (`dateevent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `event_element`
--

DROP TABLE IF EXISTS `event_element`;
CREATE TABLE IF NOT EXISTS `event_element` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_source` int(11) NOT NULL,
  `fk_target` int(11) NOT NULL,
  `targettype` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `expedition`
--

DROP TABLE IF EXISTS `expedition`;
CREATE TABLE IF NOT EXISTS `expedition` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_shipping_method` int(11) DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_projet` int(11) DEFAULT NULL,
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_int` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `date_valid` datetime DEFAULT NULL,
  `date_delivery` datetime DEFAULT NULL,
  `date_expedition` datetime DEFAULT NULL,
  `fk_address` int(11) DEFAULT NULL,
  `tracking_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_statut` smallint(6) DEFAULT NULL,
  `billed` smallint(6) DEFAULT NULL,
  `height` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `size_units` int(11) DEFAULT NULL,
  `size` double DEFAULT NULL,
  `weight_units` int(11) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_incoterms` int(11) DEFAULT NULL,
  `location_incoterms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_expedition_uk_ref` (`ref`,`entity`),
  KEY `idx_expedition_fk_user_author` (`fk_user_author`),
  KEY `idx_expedition_fk_shipping_method` (`fk_shipping_method`),
  KEY `idx_expedition_fk_soc` (`fk_soc`),
  KEY `idx_expedition_fk_user_valid` (`fk_user_valid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `expeditiondet`
--

DROP TABLE IF EXISTS `expeditiondet`;
CREATE TABLE IF NOT EXISTS `expeditiondet` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_expedition` int(11) DEFAULT NULL,
  `fk_origin_line` int(11) DEFAULT NULL,
  `fk_entrepot` int(11) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_expeditiondet_fk_origin_line` (`fk_origin_line`),
  KEY `idx_expeditiondet_fk_expedition` (`fk_expedition`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `expeditiondet_batch`
--

DROP TABLE IF EXISTS `expeditiondet_batch`;
CREATE TABLE IF NOT EXISTS `expeditiondet_batch` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_expeditiondet` int(11) DEFAULT NULL,
  `eatby` date DEFAULT NULL,
  `sellby` date DEFAULT NULL,
  `batch` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` double NOT NULL,
  `fk_origin_stock` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_fk_expeditiondet` (`fk_expeditiondet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `expeditiondet_extrafields`
--

DROP TABLE IF EXISTS `expeditiondet_extrafields`;
CREATE TABLE IF NOT EXISTS `expeditiondet_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_expeditiondet_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `expedition_extrafields`
--

DROP TABLE IF EXISTS `expedition_extrafields`;
CREATE TABLE IF NOT EXISTS `expedition_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_expedition_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `expedition_package`
--

DROP TABLE IF EXISTS `expedition_package`;
CREATE TABLE IF NOT EXISTS `expedition_package` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_expedition` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` double DEFAULT '0',
  `fk_package_type` int(11) DEFAULT NULL,
  `height` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `size` double DEFAULT NULL,
  `size_units` int(11) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `weight_units` int(11) DEFAULT NULL,
  `dangerous_goods` smallint(6) DEFAULT NULL,
  `tail_lift` smallint(6) DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `expensereport`
--

DROP TABLE IF EXISTS `expensereport`;
CREATE TABLE IF NOT EXISTS `expensereport` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref_number_int` int(11) DEFAULT NULL,
  `ref_ext` int(11) DEFAULT NULL,
  `total_ht` double DEFAULT '0',
  `total_tva` double DEFAULT '0',
  `localtax1` double DEFAULT '0',
  `localtax2` double DEFAULT '0',
  `total_ttc` double DEFAULT '0',
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `date_create` datetime NOT NULL,
  `date_valid` datetime DEFAULT NULL,
  `date_approve` datetime DEFAULT NULL,
  `date_refuse` datetime DEFAULT NULL,
  `date_cancel` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_author` int(11) NOT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `fk_user_validator` int(11) DEFAULT NULL,
  `fk_user_approve` int(11) DEFAULT NULL,
  `fk_user_refuse` int(11) DEFAULT NULL,
  `fk_user_cancel` int(11) DEFAULT NULL,
  `fk_statut` int(11) NOT NULL,
  `fk_c_paiement` int(11) DEFAULT NULL,
  `paid` smallint(6) NOT NULL,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `detail_refuse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_cancel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `integration_compta` int(11) DEFAULT NULL,
  `fk_bank_account` int(11) DEFAULT NULL,
  `model_pdf` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_expensereport_uk_ref` (`ref`,`entity`),
  KEY `idx_expensereport_fk_user_author` (`fk_user_author`),
  KEY `idx_expensereport_fk_user_approve` (`fk_user_approve`),
  KEY `idx_expensereport_date_fin` (`date_fin`),
  KEY `idx_expensereport_fk_user_valid` (`fk_user_valid`),
  KEY `idx_expensereport_fk_refuse` (`fk_user_approve`),
  KEY `idx_expensereport_date_debut` (`date_debut`),
  KEY `idx_expensereport_fk_statut` (`fk_statut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `expensereport_det`
--

DROP TABLE IF EXISTS `expensereport_det`;
CREATE TABLE IF NOT EXISTS `expensereport_det` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_expensereport` int(11) NOT NULL,
  `docnumber` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_c_type_fees` int(11) NOT NULL,
  `fk_c_exp_tax_cat` int(11) DEFAULT NULL,
  `fk_projet` int(11) DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type` int(11) DEFAULT '-1',
  `qty` double NOT NULL,
  `subprice` double NOT NULL DEFAULT '0',
  `value_unit` double NOT NULL,
  `remise_percent` double DEFAULT NULL,
  `vat_src_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double DEFAULT NULL,
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_ht` double NOT NULL DEFAULT '0',
  `total_tva` double NOT NULL DEFAULT '0',
  `total_localtax1` double DEFAULT '0',
  `total_localtax2` double DEFAULT '0',
  `total_ttc` double NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `info_bits` int(11) DEFAULT NULL,
  `special_code` int(11) DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_subprice` double DEFAULT '0',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  `fk_facture` int(11) DEFAULT NULL,
  `fk_ecm_files` int(11) DEFAULT NULL,
  `fk_code_ventilation` int(11) DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rule_warning_message` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `expensereport_extrafields`
--

DROP TABLE IF EXISTS `expensereport_extrafields`;
CREATE TABLE IF NOT EXISTS `expensereport_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_expensereport_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `expensereport_ik`
--

DROP TABLE IF EXISTS `expensereport_ik`;
CREATE TABLE IF NOT EXISTS `expensereport_ik` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_c_exp_tax_cat` int(11) NOT NULL,
  `fk_range` int(11) NOT NULL,
  `coef` double NOT NULL,
  `ikoffset` double NOT NULL,
  `active` int(11) DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `expensereport_rules`
--

DROP TABLE IF EXISTS `expensereport_rules`;
CREATE TABLE IF NOT EXISTS `expensereport_rules` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `dates` datetime NOT NULL,
  `datee` datetime NOT NULL,
  `amount` double NOT NULL,
  `restrictive` tinyint(1) NOT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `fk_usergroup` int(11) DEFAULT NULL,
  `fk_c_type_fees` int(11) NOT NULL,
  `code_expense_rules_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_for_all` tinyint(1) DEFAULT NULL,
  `entity` int(11) DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `export_compta`
--

DROP TABLE IF EXISTS `export_compta`;
CREATE TABLE IF NOT EXISTS `export_compta` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_export` datetime NOT NULL,
  `fk_user` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `export_model`
--

DROP TABLE IF EXISTS `export_model`;
CREATE TABLE IF NOT EXISTS `export_model` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) DEFAULT NULL,
  `fk_user` int(11) NOT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filter` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_export_model` (`label`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `extrafields`
--

DROP TABLE IF EXISTS `extrafields`;
CREATE TABLE IF NOT EXISTS `extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `elementtype` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fieldcomputed` text COLLATE utf8mb4_unicode_ci,
  `fielddefault` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fieldunique` int(11) DEFAULT NULL,
  `fieldrequired` int(11) DEFAULT NULL,
  `perms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enabled` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pos` int(11) DEFAULT NULL,
  `alwayseditable` int(11) DEFAULT NULL,
  `param` text COLLATE utf8mb4_unicode_ci,
  `list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `printable` int(11) DEFAULT NULL,
  `totalizable` tinyint(1) DEFAULT NULL,
  `langs` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `help` text COLLATE utf8mb4_unicode_ci,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_extrafields_name` (`name`,`entity`,`elementtype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_facture_source` int(11) DEFAULT NULL,
  `fk_projet` int(11) DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_int` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` smallint(6) NOT NULL,
  `datec` datetime DEFAULT NULL,
  `datef` date DEFAULT NULL,
  `date_pointoftax` date DEFAULT NULL,
  `date_valid` date DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_closing` datetime DEFAULT NULL,
  `paye` smallint(6) NOT NULL,
  `remise_percent` double DEFAULT NULL,
  `remise_absolue` double DEFAULT NULL,
  `remise` double DEFAULT NULL,
  `close_code` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close_note` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_tva` double DEFAULT '0',
  `localtax1` double DEFAULT '0',
  `localtax2` double DEFAULT '0',
  `revenuestamp` double DEFAULT '0',
  `total_ht` double DEFAULT '0',
  `total_ttc` double DEFAULT '0',
  `fk_statut` smallint(6) NOT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_user_closing` int(11) DEFAULT NULL,
  `module_source` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pos_source` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_fac_rec_source` int(11) DEFAULT NULL,
  `increment` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_account` int(11) DEFAULT NULL,
  `fk_currency` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_cond_reglement` int(11) NOT NULL DEFAULT '1',
  `fk_mode_reglement` int(11) DEFAULT NULL,
  `date_lim_reglement` date DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_incoterms` int(11) DEFAULT NULL,
  `location_incoterms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_transport_mode` int(11) DEFAULT NULL,
  `situation_cycle_ref` smallint(6) DEFAULT NULL,
  `situation_counter` smallint(6) DEFAULT NULL,
  `situation_final` smallint(6) DEFAULT NULL,
  `retained_warranty` double DEFAULT NULL,
  `retained_warranty_date_limit` date DEFAULT NULL,
  `retained_warranty_fk_cond_reglement` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_facture_ref` (`ref`,`entity`),
  KEY `idx_facture_fk_account` (`fk_account`),
  KEY `idx_facture_fk_statut` (`fk_statut`),
  KEY `idx_facture_fk_user_author` (`fk_user_author`),
  KEY `idx_facture_fk_facture_source` (`fk_facture_source`),
  KEY `idx_facture_fk_projet` (`fk_projet`),
  KEY `idx_facture_fk_currency` (`fk_currency`),
  KEY `idx_facture_fk_soc` (`fk_soc`),
  KEY `idx_facture_fk_user_valid` (`fk_user_valid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `facturedet`
--

DROP TABLE IF EXISTS `facturedet`;
CREATE TABLE IF NOT EXISTS `facturedet` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_facture` int(11) DEFAULT NULL,
  `fk_unit` int(11) DEFAULT NULL,
  `fk_parent_line` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `vat_src_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double DEFAULT NULL,
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `remise_percent` double DEFAULT NULL,
  `remise` double DEFAULT NULL,
  `fk_remise_except` int(11) DEFAULT NULL,
  `subprice` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `total_ht` double DEFAULT NULL,
  `total_tva` double DEFAULT NULL,
  `total_localtax1` double DEFAULT '0',
  `total_localtax2` double DEFAULT '0',
  `total_ttc` double DEFAULT NULL,
  `product_type` int(11) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `info_bits` int(11) DEFAULT NULL,
  `buy_price_ht` double DEFAULT '0',
  `fk_product_fournisseur_price` int(11) DEFAULT NULL,
  `special_code` int(11) DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  `fk_contract_line` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_code_ventilation` int(11) NOT NULL,
  `situation_percent` double DEFAULT '100',
  `fk_prev_id` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_subprice` double DEFAULT '0',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_fk_remise_except` (`fk_remise_except`,`fk_facture`),
  KEY `idx_facturedet_fk_product` (`fk_product`),
  KEY `fk_facturedet_fk_unit` (`fk_unit`),
  KEY `idx_facturedet_fk_facture` (`fk_facture`),
  KEY `idx_facturedet_fk_code_ventilation` (`fk_code_ventilation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `facturedet_extrafields`
--

DROP TABLE IF EXISTS `facturedet_extrafields`;
CREATE TABLE IF NOT EXISTS `facturedet_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_facturedet_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `facturedet_rec`
--

DROP TABLE IF EXISTS `facturedet_rec`;
CREATE TABLE IF NOT EXISTS `facturedet_rec` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_unit` int(11) DEFAULT NULL,
  `fk_facture` int(11) NOT NULL,
  `fk_parent_line` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `product_type` int(11) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `vat_src_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double DEFAULT NULL,
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `remise_percent` double DEFAULT NULL,
  `remise` double DEFAULT NULL,
  `subprice` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `total_ht` double DEFAULT NULL,
  `total_tva` double DEFAULT NULL,
  `total_localtax1` double DEFAULT '0',
  `total_localtax2` double DEFAULT '0',
  `total_ttc` double DEFAULT NULL,
  `date_start_fill` int(11) DEFAULT NULL,
  `date_end_fill` int(11) DEFAULT NULL,
  `info_bits` int(11) DEFAULT NULL,
  `buy_price_ht` double DEFAULT '0',
  `fk_product_fournisseur_price` int(11) DEFAULT NULL,
  `special_code` int(10) UNSIGNED DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  `fk_contract_line` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_subprice` double DEFAULT '0',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  KEY `fk_facturedet_rec_fk_unit` (`fk_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `facturedet_rec_extrafields`
--

DROP TABLE IF EXISTS `facturedet_rec_extrafields`;
CREATE TABLE IF NOT EXISTS `facturedet_rec_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_facturedet_rec_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `facture_extrafields`
--

DROP TABLE IF EXISTS `facture_extrafields`;
CREATE TABLE IF NOT EXISTS `facture_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_facture_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `facture_fourn`
--

DROP TABLE IF EXISTS `facture_fourn`;
CREATE TABLE IF NOT EXISTS `facture_fourn` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_projet` int(11) DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `ref` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_supplier` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` smallint(6) NOT NULL,
  `datec` datetime DEFAULT NULL,
  `datef` date DEFAULT NULL,
  `date_pointoftax` date DEFAULT NULL,
  `date_valid` date DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_closing` datetime DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paye` smallint(6) NOT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `remise` double DEFAULT '0',
  `close_code` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close_note` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva` double DEFAULT '0',
  `localtax1` double DEFAULT '0',
  `localtax2` double DEFAULT '0',
  `total` double DEFAULT '0',
  `total_ht` double DEFAULT '0',
  `total_tva` double DEFAULT '0',
  `total_ttc` double DEFAULT '0',
  `fk_statut` smallint(6) NOT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_user_closing` int(11) DEFAULT NULL,
  `fk_facture_source` int(11) DEFAULT NULL,
  `fk_account` int(11) DEFAULT NULL,
  `fk_cond_reglement` int(11) DEFAULT NULL,
  `fk_mode_reglement` int(11) DEFAULT NULL,
  `date_lim_reglement` date DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `fk_incoterms` int(11) DEFAULT NULL,
  `location_incoterms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_transport_mode` int(11) DEFAULT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_facture_fourn_ref` (`ref`,`entity`),
  UNIQUE KEY `uk_facture_fourn_ref_supplier` (`ref_supplier`,`fk_soc`,`entity`),
  KEY `idx_facture_fourn_date_lim_reglement` (`date_lim_reglement`),
  KEY `idx_facture_fourn_fk_user_author` (`fk_user_author`),
  KEY `idx_facture_fourn_fk_projet` (`fk_projet`),
  KEY `idx_facture_fourn_fk_soc` (`fk_soc`),
  KEY `idx_facture_fourn_fk_user_valid` (`fk_user_valid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `facture_fourn_det`
--

DROP TABLE IF EXISTS `facture_fourn_det`;
CREATE TABLE IF NOT EXISTS `facture_fourn_det` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_facture_fourn` int(11) DEFAULT NULL,
  `fk_unit` int(11) DEFAULT NULL,
  `fk_parent_line` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `ref` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `pu_ht` double DEFAULT NULL,
  `pu_ttc` double DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `remise_percent` double DEFAULT NULL,
  `fk_remise_except` int(11) DEFAULT NULL,
  `vat_src_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double DEFAULT NULL,
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_ht` double DEFAULT NULL,
  `tva` double DEFAULT NULL,
  `total_localtax1` double DEFAULT '0',
  `total_localtax2` double DEFAULT '0',
  `total_ttc` double DEFAULT NULL,
  `product_type` int(11) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `info_bits` int(11) DEFAULT NULL,
  `fk_code_ventilation` int(11) NOT NULL,
  `special_code` int(11) DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_subprice` double DEFAULT '0',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_fk_remise_except` (`fk_remise_except`,`fk_facture_fourn`),
  KEY `fk_facture_fourn_det_fk_unit` (`fk_unit`),
  KEY `idx_facture_fourn_det_fk_product` (`fk_product`),
  KEY `idx_facture_fourn_det_fk_facture` (`fk_facture_fourn`),
  KEY `idx_facture_fourn_det_fk_code_ventilation` (`fk_code_ventilation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `facture_fourn_det_extrafields`
--

DROP TABLE IF EXISTS `facture_fourn_det_extrafields`;
CREATE TABLE IF NOT EXISTS `facture_fourn_det_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_facture_fourn_det_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `facture_fourn_extrafields`
--

DROP TABLE IF EXISTS `facture_fourn_extrafields`;
CREATE TABLE IF NOT EXISTS `facture_fourn_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_facture_fourn_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `facture_rec`
--

DROP TABLE IF EXISTS `facture_rec`;
CREATE TABLE IF NOT EXISTS `facture_rec` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_projet` int(11) DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `titre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `suspended` int(11) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `remise` double DEFAULT NULL,
  `remise_percent` double DEFAULT NULL,
  `remise_absolue` double DEFAULT NULL,
  `vat_src_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_tva` double DEFAULT '0',
  `localtax1` double DEFAULT '0',
  `localtax2` double DEFAULT '0',
  `revenuestamp` double DEFAULT '0',
  `total_ht` double DEFAULT '0',
  `total_ttc` double DEFAULT '0',
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_cond_reglement` int(11) NOT NULL DEFAULT '1',
  `fk_mode_reglement` int(11) DEFAULT NULL,
  `date_lim_reglement` date DEFAULT NULL,
  `fk_account` int(11) DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `modelpdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  `usenewprice` int(11) DEFAULT NULL,
  `frequency` int(11) DEFAULT NULL,
  `unit_frequency` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT 'm',
  `date_when` datetime DEFAULT NULL,
  `date_last_gen` datetime DEFAULT NULL,
  `nb_gen_done` int(11) DEFAULT NULL,
  `nb_gen_max` int(11) DEFAULT NULL,
  `auto_validate` int(11) DEFAULT NULL,
  `generate_pdf` int(11) DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_facture_rec_uk_titre` (`titre`,`entity`),
  KEY `idx_facture_rec_fk_user_author` (`fk_user_author`),
  KEY `idx_facture_rec_fk_soc` (`fk_soc`),
  KEY `idx_facture_rec_fk_projet` (`fk_projet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `facture_rec_extrafields`
--

DROP TABLE IF EXISTS `facture_rec_extrafields`;
CREATE TABLE IF NOT EXISTS `facture_rec_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_facture_rec_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `fichinter`
--

DROP TABLE IF EXISTS `fichinter`;
CREATE TABLE IF NOT EXISTS `fichinter` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_projet` int(11) DEFAULT NULL,
  `fk_contrat` int(11) DEFAULT NULL,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `date_valid` datetime DEFAULT NULL,
  `datei` date DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `fk_statut` smallint(6) DEFAULT NULL,
  `dateo` date DEFAULT NULL,
  `datee` date DEFAULT NULL,
  `datet` date DEFAULT NULL,
  `duree` double DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_fichinter_ref` (`ref`,`entity`),
  KEY `idx_fichinter_fk_soc` (`fk_soc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `fichinterdet`
--

DROP TABLE IF EXISTS `fichinterdet`;
CREATE TABLE IF NOT EXISTS `fichinterdet` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_fichinter` int(11) DEFAULT NULL,
  `fk_parent_line` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `duree` int(11) DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_fichinterdet_fk_fichinter` (`fk_fichinter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `fichinterdet_extrafields`
--

DROP TABLE IF EXISTS `fichinterdet_extrafields`;
CREATE TABLE IF NOT EXISTS `fichinterdet_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_ficheinterdet_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `fichinterdet_rec`
--

DROP TABLE IF EXISTS `fichinterdet_rec`;
CREATE TABLE IF NOT EXISTS `fichinterdet_rec` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_fichinter` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `duree` int(11) DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  `total_ht` double DEFAULT NULL,
  `subprice` double DEFAULT NULL,
  `fk_parent_line` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double DEFAULT NULL,
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `remise_percent` double DEFAULT NULL,
  `remise` double DEFAULT NULL,
  `fk_remise_except` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `total_tva` double DEFAULT NULL,
  `total_localtax1` double DEFAULT '0',
  `total_localtax2` double DEFAULT '0',
  `total_ttc` double DEFAULT NULL,
  `product_type` int(11) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `info_bits` int(11) DEFAULT NULL,
  `buy_price_ht` double DEFAULT '0',
  `fk_product_fournisseur_price` int(11) DEFAULT NULL,
  `fk_code_ventilation` int(11) NOT NULL,
  `fk_export_commpta` int(11) NOT NULL,
  `special_code` int(10) UNSIGNED DEFAULT NULL,
  `fk_unit` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `fichinter_extrafields`
--

DROP TABLE IF EXISTS `fichinter_extrafields`;
CREATE TABLE IF NOT EXISTS `fichinter_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_ficheinter_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `fichinter_rec`
--

DROP TABLE IF EXISTS `fichinter_rec`;
CREATE TABLE IF NOT EXISTS `fichinter_rec` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_projet` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `titre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_soc` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `fk_contrat` int(11) DEFAULT NULL,
  `duree` double DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `modelpdf` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `frequency` int(11) DEFAULT NULL,
  `unit_frequency` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT 'm',
  `date_when` datetime DEFAULT NULL,
  `date_last_gen` datetime DEFAULT NULL,
  `nb_gen_done` int(11) DEFAULT NULL,
  `nb_gen_max` int(11) DEFAULT NULL,
  `auto_validate` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_fichinter_rec_uk_titre` (`titre`,`entity`),
  KEY `idx_fichinter_rec_fk_user_author` (`fk_user_author`),
  KEY `idx_fichinter_rec_fk_soc` (`fk_soc`),
  KEY `idx_fichinter_rec_fk_projet` (`fk_projet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `holiday`
--

DROP TABLE IF EXISTS `holiday`;
CREATE TABLE IF NOT EXISTS `holiday` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_user` int(11) NOT NULL,
  `fk_user_create` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_type` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `halfday` int(11) DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT '1',
  `fk_validator` int(11) NOT NULL,
  `date_valid` datetime DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `date_refuse` datetime DEFAULT NULL,
  `fk_user_refuse` int(11) DEFAULT NULL,
  `date_cancel` datetime DEFAULT NULL,
  `fk_user_cancel` int(11) DEFAULT NULL,
  `detail_refuse` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_holiday_date_create` (`date_create`),
  KEY `idx_holiday_date_fin` (`date_fin`),
  KEY `idx_holiday_fk_user` (`fk_user`),
  KEY `idx_holiday_fk_user_create` (`fk_user_create`),
  KEY `idx_holiday_date_debut` (`date_debut`),
  KEY `idx_holiday_fk_validator` (`fk_validator`),
  KEY `idx_holiday_entity` (`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `holiday_config`
--

DROP TABLE IF EXISTS `holiday_config`;
CREATE TABLE IF NOT EXISTS `holiday_config` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_holiday_config` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `holiday_extrafields`
--

DROP TABLE IF EXISTS `holiday_extrafields`;
CREATE TABLE IF NOT EXISTS `holiday_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_holiday_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `holiday_logs`
--

DROP TABLE IF EXISTS `holiday_logs`;
CREATE TABLE IF NOT EXISTS `holiday_logs` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `date_action` datetime NOT NULL,
  `fk_user_action` int(11) NOT NULL,
  `fk_user_update` int(11) NOT NULL,
  `fk_type` int(11) NOT NULL,
  `type_action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prev_solde` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_solde` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `holiday_users`
--

DROP TABLE IF EXISTS `holiday_users`;
CREATE TABLE IF NOT EXISTS `holiday_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) NOT NULL,
  `fk_type` int(11) NOT NULL,
  `nb_holiday` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_holiday_users` (`fk_user`,`fk_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `import_model`
--

DROP TABLE IF EXISTS `import_model`;
CREATE TABLE IF NOT EXISTS `import_model` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_import_model` (`label`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `intracommreport`
--

DROP TABLE IF EXISTS `intracommreport`;
CREATE TABLE IF NOT EXISTS `intracommreport` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `type_declaration` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `periods` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_xml` text COLLATE utf8mb4_unicode_ci,
  `type_export` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) DEFAULT NULL,
  `ref` varchar(48) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `fk_warehouse` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_inventory` datetime DEFAULT NULL,
  `date_validation` datetime DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_inventory_ref` (`ref`,`entity`),
  KEY `idx_inventory_date_creation` (`date_creation`),
  KEY `idx_inventory_tms` (`tms`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `inventorydet`
--

DROP TABLE IF EXISTS `inventorydet`;
CREATE TABLE IF NOT EXISTS `inventorydet` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_inventory` int(11) DEFAULT NULL,
  `fk_warehouse` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `batch` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty_stock` double DEFAULT NULL,
  `qty_view` double DEFAULT NULL,
  `qty_regulated` double DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_inventorydet` (`fk_inventory`,`fk_warehouse`,`fk_product`,`batch`),
  KEY `idx_inventorydet_datec` (`datec`),
  KEY `idx_inventorydet_tms` (`tms`),
  KEY `idx_inventorydet_fk_inventory` (`fk_inventory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `knowledgemanagement_knowledgerecord`
--

DROP TABLE IF EXISTS `knowledgemanagement_knowledgerecord`;
CREATE TABLE IF NOT EXISTS `knowledgemanagement_knowledgerecord` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_creat` int(11) DEFAULT NULL,
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_creation` datetime NOT NULL,
  `tms` datetime DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_ticket` int(11) DEFAULT NULL,
  `fk_c_ticket_category` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_knowledgemanagement_knowledgerecord_ref` (`ref`),
  KEY `idx_knowledgemanagement_knowledgerecord_status` (`status`),
  KEY `idx_knowledgemanagement_knowledgerecord_rowid` (`rowid`),
  KEY `knowledgemanagement_knowledgerecord_fk_user_creat` (`fk_user_creat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `knowledgemanagement_knowledgerecord_extrafields`
--

DROP TABLE IF EXISTS `knowledgemanagement_knowledgerecord_extrafields`;
CREATE TABLE IF NOT EXISTS `knowledgemanagement_knowledgerecord_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT NULL,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_knowledgerecord_fk_object` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datea` datetime NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objecttype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objectid` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_links` (`objectid`,`label`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `llx_c_country`
--

DROP TABLE IF EXISTS `llx_c_country`;
CREATE TABLE IF NOT EXISTS `llx_c_country` (
  `rowid` int(11) NOT NULL,
  `code` varchar(2) NOT NULL,
  `code_iso` varchar(3) DEFAULT NULL,
  `label` varchar(128) NOT NULL,
  `eec` tinyint(4) NOT NULL DEFAULT '0',
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `favorite` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_c_country_code` (`code`),
  UNIQUE KEY `idx_c_country_label` (`label`),
  UNIQUE KEY `idx_c_country_code_iso` (`code_iso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `llx_c_country`
--

INSERT INTO `llx_c_country` (`rowid`, `code`, `code_iso`, `label`, `eec`, `active`, `favorite`) VALUES
(0, '', NULL, '-', 0, 1, 1),
(1, 'FR', 'FRA', 'France', 1, 1, 0),
(2, 'BE', 'BEL', 'Belgium', 1, 1, 0),
(3, 'IT', 'ITA', 'Italy', 1, 1, 0),
(4, 'ES', 'ESP', 'Spain', 1, 1, 0),
(5, 'DE', 'DEU', 'Germany', 1, 1, 0),
(6, 'CH', 'CHE', 'Switzerland', 0, 1, 0),
(7, 'GB', 'GBR', 'United Kingdom', 0, 1, 0),
(8, 'IE', 'IRL', 'Ireland', 1, 1, 0),
(9, 'CN', 'CHN', 'China', 0, 1, 0),
(10, 'TN', 'TUN', 'Tunisia', 0, 1, 0),
(11, 'US', 'USA', 'United States', 0, 1, 0),
(12, 'MA', 'MAR', 'Morocco', 0, 1, 0),
(13, 'DZ', 'DZA', 'Algeria', 0, 1, 0),
(14, 'CA', 'CAN', 'Canada', 0, 1, 0),
(15, 'TG', 'TGO', 'Togo', 0, 1, 0),
(16, 'GA', 'GAB', 'Gabon', 0, 1, 0),
(17, 'NL', 'NLD', 'Netherlands', 1, 1, 0),
(18, 'HU', 'HUN', 'Hungary', 1, 1, 0),
(19, 'RU', 'RUS', 'Russia', 0, 1, 0),
(20, 'SE', 'SWE', 'Sweden', 1, 1, 0),
(21, 'CI', 'CIV', 'Côte d\'Ivoire', 0, 1, 0),
(22, 'SN', 'SEN', 'Senegal', 0, 1, 0),
(23, 'AR', 'ARG', 'Argentina', 0, 1, 0),
(24, 'CM', 'CMR', 'Cameroun', 0, 1, 0),
(25, 'PT', 'PRT', 'Portugal', 1, 1, 0),
(26, 'SA', 'SAU', 'Saudi Arabia', 0, 1, 0),
(27, 'MC', 'MCO', 'Monaco', 1, 1, 0),
(28, 'AU', 'AUS', 'Australia', 0, 1, 0),
(29, 'SG', 'SGP', 'Singapore', 0, 1, 0),
(30, 'AF', 'AFG', 'Afghanistan', 0, 1, 0),
(31, 'AX', 'ALA', 'Åland Island', 0, 1, 0),
(32, 'AL', 'ALB', 'Albania', 0, 1, 0),
(33, 'AS', 'ASM', 'American Samoa', 0, 1, 0),
(34, 'AD', 'AND', 'Andorra', 0, 1, 0),
(35, 'AO', 'AGO', 'Angola', 0, 1, 0),
(36, 'AI', 'AIA', 'Anguilla', 0, 1, 0),
(37, 'AQ', 'ATA', 'Antarctica', 0, 1, 0),
(38, 'AG', 'ATG', 'Antigua and Barbuda', 0, 1, 0),
(39, 'AM', 'ARM', 'Armenia', 0, 1, 0),
(40, 'AW', 'ABW', 'Aruba', 0, 1, 0),
(41, 'AT', 'AUT', 'Austria', 1, 1, 0),
(42, 'AZ', 'AZE', 'Azerbaijan', 0, 1, 0),
(43, 'BS', 'BHS', 'Bahamas', 0, 1, 0),
(44, 'BH', 'BHR', 'Bahrain', 0, 1, 0),
(45, 'BD', 'BGD', 'Bangladesh', 0, 1, 0),
(46, 'BB', 'BRB', 'Barbados', 0, 1, 0),
(47, 'BY', 'BLR', 'Belarus', 0, 1, 0),
(48, 'BZ', 'BLZ', 'Belize', 0, 1, 0),
(49, 'BJ', 'BEN', 'Benin', 0, 1, 0),
(50, 'BM', 'BMU', 'Bermuda', 0, 1, 0),
(51, 'BT', 'BTN', 'Bhutan', 0, 1, 0),
(52, 'BO', 'BOL', 'Bolivia', 0, 1, 0),
(53, 'BA', 'BIH', 'Bosnia and Herzegovina', 0, 1, 0),
(54, 'BW', 'BWA', 'Botswana', 0, 1, 0),
(55, 'BV', 'BVT', 'Bouvet Island', 0, 0, 0),
(56, 'BR', 'BRA', 'Brazil', 0, 1, 0),
(57, 'IO', 'IOT', 'British Indian Ocean Territory', 0, 1, 0),
(58, 'BN', 'BRN', 'Brunei', 0, 1, 0),
(59, 'BG', 'BGR', 'Bulgaria', 1, 1, 0),
(60, 'BF', 'BFA', 'Burkina Faso', 0, 1, 0),
(61, 'BI', 'BDI', 'Burundi', 0, 1, 0),
(62, 'KH', 'KHM', 'Cambodge / Cambodia', 0, 1, 0),
(63, 'CV', 'CPV', 'Cap-Vert', 0, 1, 0),
(64, 'KY', 'CYM', 'Iles Cayman', 0, 1, 0),
(65, 'CF', 'CAF', 'Central African Republic (CAR/RCA)', 0, 1, 0),
(66, 'TD', 'TCD', 'Tchad', 0, 1, 0),
(67, 'CL', 'CHL', 'Chile', 0, 1, 0),
(68, 'CX', 'CXR', 'Ile Christmas', 0, 1, 0),
(69, 'CC', 'CCK', 'Iles des Cocos (Keeling)', 0, 1, 0),
(70, 'CO', 'COL', 'Colombie', 0, 1, 0),
(71, 'KM', 'COM', 'Comores', 0, 1, 0),
(72, 'CG', 'COG', 'Congo', 0, 1, 0),
(73, 'CD', 'COD', 'DR Congo (RDC)', 0, 1, 0),
(74, 'CK', 'COK', 'Iles Cook', 0, 1, 0),
(75, 'CR', 'CRI', 'Costa Rica', 0, 1, 0),
(76, 'HR', 'HRV', 'Croatia', 1, 1, 0),
(77, 'CU', 'CUB', 'Cuba', 0, 1, 0),
(78, 'CY', 'CYP', 'Cyprus', 1, 1, 0),
(79, 'CZ', 'CZE', 'Czech Republic', 1, 1, 0),
(80, 'DK', 'DNK', 'Denmark', 1, 1, 0),
(81, 'DJ', 'DJI', 'Djibouti', 0, 1, 0),
(82, 'DM', 'DMA', 'Dominica', 0, 1, 0),
(83, 'DO', 'DOM', 'Dominican Republic', 0, 1, 0),
(84, 'EC', 'ECU', 'Republic of Ecuador', 0, 1, 0),
(85, 'EG', 'EGY', 'Egypt', 0, 1, 0),
(86, 'SV', 'SLV', 'El Salvador', 0, 1, 0),
(87, 'GQ', 'GNQ', 'Equatorial Guinea', 0, 1, 0),
(88, 'ER', 'ERI', 'Eritrea', 0, 1, 0),
(89, 'EE', 'EST', 'Estonia', 1, 1, 0),
(90, 'ET', 'ETH', 'Ethiopia', 0, 1, 0),
(91, 'FK', 'FLK', 'Falkland Islands', 0, 1, 0),
(92, 'FO', 'FRO', 'Faroe Islands', 0, 1, 0),
(93, 'FJ', 'FJI', 'Fidji Islands', 0, 1, 0),
(94, 'FI', 'FIN', 'Finland', 1, 1, 0),
(95, 'GF', 'GUF', 'French Guiana', 0, 1, 0),
(96, 'PF', 'PYF', 'French Polynesia', 0, 1, 0),
(97, 'TF', 'ATF', 'Terres australes françaises', 0, 1, 0),
(98, 'GM', 'GMB', 'Gambie', 0, 1, 0),
(99, 'GE', 'GEO', 'Georgia', 0, 1, 0),
(100, 'GH', 'GHA', 'Ghana', 0, 1, 0),
(101, 'GI', 'GIB', 'Gibraltar', 0, 1, 0),
(102, 'GR', 'GRC', 'Greece', 1, 1, 0),
(103, 'GL', 'GRL', 'Groenland', 0, 1, 0),
(104, 'GD', 'GRD', 'Grenade', 0, 1, 0),
(106, 'GU', 'GUM', 'Guam', 0, 1, 0),
(107, 'GT', 'GTM', 'Guatemala', 0, 1, 0),
(108, 'GN', 'GIN', 'Guinea', 0, 1, 0),
(109, 'GW', 'GNB', 'Guinea-Bissao', 0, 1, 0),
(111, 'HT', 'HTI', 'Haiti', 0, 1, 0),
(112, 'HM', 'HMD', 'Iles Heard et McDonald', 0, 1, 0),
(113, 'VA', 'VAT', 'Vatican City (Saint-Siège)', 0, 1, 0),
(114, 'HN', 'HND', 'Honduras', 0, 1, 0),
(115, 'HK', 'HKG', 'Hong Kong', 0, 1, 0),
(116, 'IS', 'ISL', 'Islande', 0, 1, 0),
(117, 'IN', 'IND', 'India', 0, 1, 0),
(118, 'ID', 'IDN', 'Indonesia', 0, 1, 0),
(119, 'IR', 'IRN', 'Iran', 0, 1, 0),
(120, 'IQ', 'IRQ', 'Iraq', 0, 1, 0),
(121, 'IL', 'ISR', 'Israel', 0, 1, 0),
(122, 'JM', 'JAM', 'Jamaica', 0, 1, 0),
(123, 'JP', 'JPN', 'Japan (Nippon)', 0, 1, 0),
(124, 'JO', 'JOR', 'Jordanie', 0, 1, 0),
(125, 'KZ', 'KAZ', 'Kazakhstan', 0, 1, 0),
(126, 'KE', 'KEN', 'Kenya', 0, 1, 0),
(127, 'KI', 'KIR', 'Kiribati', 0, 1, 0),
(128, 'KP', 'PRK', 'North Corea', 0, 1, 0),
(129, 'KR', 'KOR', 'South Corea', 0, 1, 0),
(130, 'KW', 'KWT', 'Koweït', 0, 1, 0),
(131, 'KG', 'KGZ', 'Kirghizistan', 0, 1, 0),
(132, 'LA', 'LAO', 'Laos', 0, 1, 0),
(133, 'LV', 'LVA', 'Lettonie', 1, 1, 0),
(134, 'LB', 'LBN', 'Liban', 0, 1, 0),
(135, 'LS', 'LSO', 'Lesotho', 0, 1, 0),
(136, 'LR', 'LBR', 'Liberia', 0, 1, 0),
(137, 'LY', 'LBY', 'Libye', 0, 1, 0),
(138, 'LI', 'LIE', 'Liechtenstein', 0, 1, 0),
(139, 'LT', 'LTU', 'Lituanie', 1, 1, 0),
(140, 'LU', 'LUX', 'Luxembourg', 1, 1, 0),
(141, 'MO', 'MAC', 'Macao', 0, 1, 0),
(142, 'MK', 'MKD', 'North Macedonia', 0, 1, 0),
(143, 'MG', 'MDG', 'Madagascar', 0, 1, 0),
(144, 'MW', 'MWI', 'Malawi', 0, 1, 0),
(145, 'MY', 'MYS', 'Malaisie', 0, 1, 0),
(146, 'MV', 'MDV', 'Maldives', 0, 1, 0),
(147, 'ML', 'MLI', 'Mali', 0, 1, 0),
(148, 'MT', 'MLT', 'Malte', 1, 1, 0),
(149, 'MH', 'MHL', 'Iles Marshall', 0, 1, 0),
(151, 'MR', 'MRT', 'Mauritanie', 0, 1, 0),
(152, 'MU', 'MUS', 'Maurice', 0, 1, 0),
(153, 'YT', 'MYT', 'Mayotte', 0, 1, 0),
(154, 'MX', 'MEX', 'Mexique', 0, 1, 0),
(155, 'FM', 'FSM', 'Micronésie', 0, 1, 0),
(156, 'MD', 'MDA', 'Moldavie', 0, 1, 0),
(157, 'MN', 'MNG', 'Mongolie', 0, 1, 0),
(158, 'MS', 'MSR', 'Monserrat', 0, 1, 0),
(159, 'MZ', 'MOZ', 'Mozambique', 0, 1, 0),
(160, 'MM', 'MMR', 'Birmanie (Myanmar)', 0, 1, 0),
(161, 'NA', 'NAM', 'Namibie', 0, 1, 0),
(162, 'NR', 'NRU', 'Nauru', 0, 1, 0),
(163, 'NP', 'NPL', 'Népal', 0, 1, 0),
(165, 'NC', 'NCL', 'New Caledonia', 0, 1, 0),
(166, 'NZ', 'NZL', 'New Zealand', 0, 1, 0),
(167, 'NI', 'NIC', 'Nicaragua', 0, 1, 0),
(168, 'NE', 'NER', 'Niger', 0, 1, 0),
(169, 'NG', 'NGA', 'Nigeria', 0, 1, 0),
(170, 'NU', 'NIU', 'Niue', 0, 1, 0),
(171, 'NF', 'NFK', 'Norfolk Island', 0, 1, 0),
(172, 'MP', 'MNP', 'Northern Mariana Islands', 0, 1, 0),
(173, 'NO', 'NOR', 'Norway', 0, 1, 0),
(174, 'OM', 'OMN', 'Oman', 0, 1, 0),
(175, 'PK', 'PAK', 'Pakistan', 0, 1, 0),
(176, 'PW', 'PLW', 'Palau', 0, 1, 0),
(177, 'PS', 'PSE', 'Palestinian territories', 0, 1, 0),
(178, 'PA', 'PAN', 'Panama', 0, 1, 0),
(179, 'PG', 'PNG', 'Papua New Guinea', 0, 1, 0),
(180, 'PY', 'PRY', 'Paraguay', 0, 1, 0),
(181, 'PE', 'PER', 'Peru', 0, 1, 0),
(182, 'PH', 'PHL', 'Philippines', 0, 1, 0),
(183, 'PN', 'PCN', 'Pitcairn Islands', 0, 1, 0),
(184, 'PL', 'POL', 'Pologne', 1, 1, 0),
(185, 'PR', 'PRI', 'Puerto Rico', 0, 1, 0),
(186, 'QA', 'QAT', 'Qatar', 0, 1, 0),
(188, 'RO', 'ROU', 'Romania', 1, 1, 0),
(189, 'RW', 'RWA', 'Rwanda', 0, 1, 0),
(190, 'SH', 'SHN', 'Saint Helena', 0, 1, 0),
(191, 'KN', 'KNA', 'Saint Kitts and Nevis', 0, 1, 0),
(192, 'LC', 'LCA', 'Saint Lucia', 0, 1, 0),
(193, 'PM', 'SPM', 'Saint Pierre and Miquelon', 0, 1, 0),
(194, 'VC', 'VCT', 'Saint Vincent and the Grenadines', 0, 1, 0),
(195, 'WS', 'WSM', 'Samoa', 0, 1, 0),
(196, 'SM', 'SMR', 'San Marino ', 0, 1, 0),
(197, 'ST', 'STP', 'Saint Thomas and Prince', 0, 1, 0),
(198, 'RS', 'SRB', 'Serbia', 0, 1, 0),
(199, 'SC', 'SYC', 'Seychelles', 0, 1, 0),
(200, 'SL', 'SLE', 'Sierra Leone', 0, 1, 0),
(201, 'SK', 'SVK', 'Slovakia', 1, 1, 0),
(202, 'SI', 'SVN', 'Slovenia', 1, 1, 0),
(203, 'SB', 'SLB', 'Solomon Islands', 0, 1, 0),
(204, 'SO', 'SOM', 'Somalia', 0, 1, 0),
(205, 'ZA', 'ZAF', 'South Africa', 0, 1, 0),
(206, 'GS', 'SGS', 'South Georgia and the South Sandwich Islands ', 0, 1, 0),
(207, 'LK', 'LKA', 'Sri Lanka', 0, 1, 0),
(208, 'SD', 'SDN', 'Sudan', 0, 1, 0),
(209, 'SR', 'SUR', 'Suriname', 0, 1, 0),
(210, 'SJ', 'SJM', 'Svalbard and Jan Mayen', 0, 1, 0),
(211, 'SZ', 'SWZ', 'Swaziland / Eswatini', 0, 1, 0),
(212, 'SY', 'SYR', 'Syria', 0, 1, 0),
(213, 'TW', 'TWN', 'Taiwan', 0, 1, 0),
(214, 'TJ', 'TJK', 'Tajikistan', 0, 1, 0),
(215, 'TZ', 'TZA', 'Tanzania', 0, 1, 0),
(216, 'TH', 'THA', 'Thailand', 0, 1, 0),
(217, 'TL', 'TLS', 'Timor-Leste', 0, 1, 0),
(218, 'TK', 'TKL', 'Tokelau', 0, 1, 0),
(219, 'TO', 'TON', 'Tonga', 0, 1, 0),
(220, 'TT', 'TTO', 'Trinidad and Tobago', 0, 1, 0),
(221, 'TR', 'TUR', 'Turkey', 0, 1, 0),
(222, 'TM', 'TKM', 'Turkmenistan', 0, 1, 0),
(223, 'TC', 'TCA', 'Turks and Caicos Islands', 0, 1, 0),
(224, 'TV', 'TUV', 'Tuvalu', 0, 1, 0),
(225, 'UG', 'UGA', 'Uganda', 0, 1, 0),
(226, 'UA', 'UKR', 'Ukraine', 0, 1, 0),
(227, 'AE', 'ARE', 'United Arab Emirates', 0, 1, 0),
(228, 'UM', 'UMI', 'United States Minor Outlying Islands', 0, 1, 0),
(229, 'UY', 'URY', 'Uruguay', 0, 1, 0),
(230, 'UZ', 'UZB', 'Uzbekistan', 0, 1, 0),
(231, 'VU', 'VUT', 'Vanuatu', 0, 1, 0),
(232, 'VE', 'VEN', 'Venezuela', 0, 1, 0),
(233, 'VN', 'VNM', 'Vietnam', 0, 1, 0),
(234, 'VG', 'VGB', 'British Virgin Islands', 0, 1, 0),
(235, 'VI', 'VIR', 'Virgin Islands of the United States', 0, 1, 0),
(236, 'WF', 'WLF', 'Wallis and Futuna', 0, 1, 0),
(237, 'EH', 'ESH', 'Western Sahara', 0, 1, 0),
(238, 'YE', 'YEM', 'Yemen', 0, 1, 0),
(239, 'ZM', 'ZMB', 'Zambia', 0, 1, 0),
(240, 'ZW', 'ZWE', 'Zimbabwe', 0, 1, 0),
(241, 'GG', 'GGY', 'Guernsey', 0, 1, 0),
(242, 'IM', 'IMN', 'Isle of Man', 0, 1, 0),
(243, 'JE', 'JEY', 'Jersey', 0, 1, 0),
(244, 'ME', 'MNE', 'Montenegro', 0, 1, 0),
(245, 'BL', 'BLM', 'Saint-Barthélemy', 0, 1, 0),
(246, 'MF', 'MAF', 'Saint-Martin', 0, 1, 0),
(247, 'XK', 'XKX', 'Kosovo', 0, 1, 0),
(300, 'CW', 'CUW', 'Curaçao', 0, 1, 0),
(301, 'SX', 'SXM', 'Sint Maarten', 0, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `loan`
--

DROP TABLE IF EXISTS `loan`;
CREATE TABLE IF NOT EXISTS `loan` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `label` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_bank` int(11) DEFAULT NULL,
  `capital` double NOT NULL DEFAULT '0',
  `insurance_amount` double DEFAULT '0',
  `datestart` date DEFAULT NULL,
  `dateend` date DEFAULT NULL,
  `nbterm` double DEFAULT NULL,
  `rate` double NOT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `capital_position` double DEFAULT '0',
  `date_position` date DEFAULT NULL,
  `paid` smallint(6) NOT NULL,
  `accountancy_account_capital` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_account_insurance` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_account_interest` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_projet` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `loan_schedule`
--

DROP TABLE IF EXISTS `loan_schedule`;
CREATE TABLE IF NOT EXISTS `loan_schedule` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_loan` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datep` datetime DEFAULT NULL,
  `amount_capital` double DEFAULT '0',
  `amount_insurance` double DEFAULT '0',
  `amount_interest` double DEFAULT '0',
  `fk_typepayment` int(11) NOT NULL,
  `num_payment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `fk_bank` int(11) NOT NULL,
  `fk_payment_loan` int(11) DEFAULT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `localtax`
--

DROP TABLE IF EXISTS `localtax`;
CREATE TABLE IF NOT EXISTS `localtax` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `localtaxtype` tinyint(1) DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datep` date DEFAULT NULL,
  `datev` date DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `fk_bank` int(11) DEFAULT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `mailing`
--

DROP TABLE IF EXISTS `mailing`;
CREATE TABLE IF NOT EXISTS `mailing` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `statut` smallint(6) DEFAULT NULL,
  `titre` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `sujet` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci,
  `bgcolor` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bgimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cible` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbemail` int(11) DEFAULT NULL,
  `email_from` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_replyto` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_errorsto` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creat` datetime DEFAULT NULL,
  `date_valid` datetime DEFAULT NULL,
  `date_appro` datetime DEFAULT NULL,
  `date_envoi` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `fk_user_appro` int(11) DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joined_file1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joined_file2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joined_file3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joined_file4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `mailing_cibles`
--

DROP TABLE IF EXISTS `mailing_cibles`;
CREATE TABLE IF NOT EXISTS `mailing_cibles` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_mailing` int(11) NOT NULL,
  `fk_contact` int(11) NOT NULL,
  `lastname` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` smallint(6) NOT NULL,
  `source_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_id` int(11) DEFAULT NULL,
  `source_type` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_envoi` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `error_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_mailing_cibles` (`fk_mailing`,`email`),
  KEY `idx_mailing_cibles_tag` (`tag`),
  KEY `idx_mailing_cibles_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `mailing_unsubscribe`
--

DROP TABLE IF EXISTS `mailing_unsubscribe`;
CREATE TABLE IF NOT EXISTS `mailing_unsubscribe` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unsubscribegroup` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creat` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_mailing_unsubscribe` (`email`,`entity`,`unsubscribegroup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `menu_handler` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `module` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mainmenu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leftmenu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_menu` int(11) NOT NULL,
  `fk_mainmenu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_leftmenu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `langs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` smallint(6) DEFAULT NULL,
  `perms` text COLLATE utf8mb4_unicode_ci,
  `enabled` text COLLATE utf8mb4_unicode_ci,
  `usertype` int(11) NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_menu_uk_menu` (`menu_handler`,`fk_menu`,`position`,`url`,`entity`),
  KEY `idx_menu_menuhandler_type` (`menu_handler`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `mrp_mo`
--

DROP TABLE IF EXISTS `mrp_mo`;
CREATE TABLE IF NOT EXISTS `mrp_mo` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_creat` int(11) DEFAULT NULL,
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '(PROV)',
  `entity` int(11) NOT NULL DEFAULT '1',
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` double NOT NULL,
  `fk_warehouse` int(11) DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `date_creation` datetime NOT NULL,
  `date_valid` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `fk_product` int(11) NOT NULL,
  `date_start_planned` datetime DEFAULT NULL,
  `date_end_planned` datetime DEFAULT NULL,
  `fk_bom` int(11) DEFAULT NULL,
  `fk_project` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_mrp_mo_fk_project` (`fk_project`),
  KEY `idx_mrp_mo_entity` (`entity`),
  KEY `fk_mrp_mo_fk_user_creat` (`fk_user_creat`),
  KEY `idx_mrp_mo_fk_product` (`fk_product`),
  KEY `idx_mrp_mo_date_end_planned` (`date_end_planned`),
  KEY `idx_mrp_mo_fk_bom` (`fk_bom`),
  KEY `idx_mrp_mo_ref` (`ref`),
  KEY `idx_mrp_mo_fk_soc` (`fk_soc`),
  KEY `idx_mrp_mo_status` (`status`),
  KEY `idx_mrp_mo_date_start_planned` (`date_start_planned`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `mrp_mo_extrafields`
--

DROP TABLE IF EXISTS `mrp_mo_extrafields`;
CREATE TABLE IF NOT EXISTS `mrp_mo_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_mrp_mo_fk_object` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `mrp_production`
--

DROP TABLE IF EXISTS `mrp_production`;
CREATE TABLE IF NOT EXISTS `mrp_production` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_mo` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `fk_stock_movement` int(11) DEFAULT NULL,
  `origin_id` int(11) DEFAULT NULL,
  `origin_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  `fk_warehouse` int(11) DEFAULT NULL,
  `qty` double NOT NULL DEFAULT '1',
  `qty_frozen` smallint(6) DEFAULT NULL,
  `disable_stock_change` smallint(6) DEFAULT NULL,
  `batch` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_mrp_production` int(11) DEFAULT NULL,
  `date_creation` datetime NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) NOT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `fk_mrp_production_stock_movement` (`fk_stock_movement`),
  KEY `fk_mrp_production_product` (`fk_product`),
  KEY `idx_mrp_production_fk_mo` (`fk_mo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `multicurrency`
--

DROP TABLE IF EXISTS `multicurrency`;
CREATE TABLE IF NOT EXISTS `multicurrency` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `date_create` datetime DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) DEFAULT '1',
  `fk_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `multicurrency_rate`
--

DROP TABLE IF EXISTS `multicurrency_rate`;
CREATE TABLE IF NOT EXISTS `multicurrency_rate` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `date_sync` datetime DEFAULT NULL,
  `rate` double NOT NULL,
  `fk_multicurrency` int(11) NOT NULL,
  `entity` int(11) DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `notify`
--

DROP TABLE IF EXISTS `notify`;
CREATE TABLE IF NOT EXISTS `notify` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `daten` datetime DEFAULT NULL,
  `fk_action` int(11) NOT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_contact` int(11) DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `type` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT 'email',
  `type_target` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objet_type` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objet_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `notify_def`
--

DROP TABLE IF EXISTS `notify_def`;
CREATE TABLE IF NOT EXISTS `notify_def` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` date DEFAULT NULL,
  `fk_action` int(11) NOT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_contact` int(11) DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `type` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT 'email',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `notify_def_object`
--

DROP TABLE IF EXISTS `notify_def_object`;
CREATE TABLE IF NOT EXISTS `notify_def_object` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `objet_type` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objet_id` int(11) NOT NULL,
  `type_notif` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT 'browser',
  `date_notif` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `moreparam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `oauth_state`
--

DROP TABLE IF EXISTS `oauth_state`;
CREATE TABLE IF NOT EXISTS `oauth_state` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `fk_adherent` int(11) DEFAULT NULL,
  `entity` int(11) DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `oauth_token`
--

DROP TABLE IF EXISTS `oauth_token`;
CREATE TABLE IF NOT EXISTS `oauth_token` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` text COLLATE utf8mb4_unicode_ci,
  `tokenstring` text COLLATE utf8mb4_unicode_ci,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `fk_adherent` int(11) DEFAULT NULL,
  `restricted_ips` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `entity` int(11) DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `object_lang`
--

DROP TABLE IF EXISTS `object_lang`;
CREATE TABLE IF NOT EXISTS `object_lang` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_object` int(11) NOT NULL,
  `type_object` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_object_lang` (`fk_object`,`type_object`,`property`,`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `onlinesignature`
--

DROP TABLE IF EXISTS `onlinesignature`;
CREATE TABLE IF NOT EXISTS `onlinesignature` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `object_type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object_id` int(11) NOT NULL,
  `datec` datetime NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pathoffile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `opensurvey_comments`
--

DROP TABLE IF EXISTS `opensurvey_comments`;
CREATE TABLE IF NOT EXISTS `opensurvey_comments` (
  `id_comment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_sondage` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `usercomment` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id_comment`),
  KEY `idx_id_sondage` (`id_sondage`),
  KEY `idx_id_comment` (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `opensurvey_formquestions`
--

DROP TABLE IF EXISTS `opensurvey_formquestions`;
CREATE TABLE IF NOT EXISTS `opensurvey_formquestions` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `id_sondage` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `available_answers` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `opensurvey_sondage`
--

DROP TABLE IF EXISTS `opensurvey_sondage`;
CREATE TABLE IF NOT EXISTS `opensurvey_sondage` (
  `id_sondage` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `commentaires` text COLLATE utf8mb4_unicode_ci,
  `mail_admin` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_admin` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_user_creat` int(11) NOT NULL,
  `titre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_fin` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `format` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailsonde` tinyint(1) NOT NULL,
  `allow_comments` tinyint(1) NOT NULL DEFAULT '1',
  `allow_spy` tinyint(1) NOT NULL DEFAULT '1',
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `sujet` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id_sondage`),
  KEY `idx_date_fin` (`date_fin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `opensurvey_user_formanswers`
--

DROP TABLE IF EXISTS `opensurvey_user_formanswers`;
CREATE TABLE IF NOT EXISTS `opensurvey_user_formanswers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_survey` int(11) NOT NULL,
  `fk_question` int(11) NOT NULL,
  `reponses` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `opensurvey_user_studs`
--

DROP TABLE IF EXISTS `opensurvey_user_studs`;
CREATE TABLE IF NOT EXISTS `opensurvey_user_studs` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sondage` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponses` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_users`),
  KEY `idx_opensurvey_user_studs_nom` (`nom`),
  KEY `idx_opensurvey_user_studs_id_users` (`id_users`),
  KEY `idx_opensurvey_user_studs_id_sondage` (`id_sondage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `overwrite_trans`
--

DROP TABLE IF EXISTS `overwrite_trans`;
CREATE TABLE IF NOT EXISTS `overwrite_trans` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `lang` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transkey` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transvalue` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_overwrite_trans` (`lang`,`transkey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datep` datetime DEFAULT NULL,
  `amount` double DEFAULT '0',
  `multicurrency_amount` double DEFAULT '0',
  `fk_paiement` int(11) NOT NULL,
  `num_paiement` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `ext_payment_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ext_payment_site` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_bank` int(11) NOT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `statut` smallint(6) NOT NULL,
  `fk_export_compta` int(11) NOT NULL,
  `pos_change` double DEFAULT '0',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `paiementcharge`
--

DROP TABLE IF EXISTS `paiementcharge`;
CREATE TABLE IF NOT EXISTS `paiementcharge` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_charge` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datep` datetime DEFAULT NULL,
  `amount` double DEFAULT '0',
  `fk_typepaiement` int(11) NOT NULL,
  `num_paiement` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `fk_bank` int(11) NOT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `paiementfourn`
--

DROP TABLE IF EXISTS `paiementfourn`;
CREATE TABLE IF NOT EXISTS `paiementfourn` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) DEFAULT '1',
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `datep` datetime DEFAULT NULL,
  `amount` double DEFAULT '0',
  `multicurrency_amount` double DEFAULT '0',
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_paiement` int(11) NOT NULL,
  `num_paiement` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `fk_bank` int(11) NOT NULL,
  `statut` smallint(6) NOT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `paiementfourn_facturefourn`
--

DROP TABLE IF EXISTS `paiementfourn_facturefourn`;
CREATE TABLE IF NOT EXISTS `paiementfourn_facturefourn` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_paiementfourn` int(11) DEFAULT NULL,
  `fk_facturefourn` int(11) DEFAULT NULL,
  `amount` double DEFAULT '0',
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_amount` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_paiementfourn_facturefourn` (`fk_paiementfourn`,`fk_facturefourn`),
  KEY `idx_paiementfourn_facturefourn_fk_paiement` (`fk_paiementfourn`),
  KEY `idx_paiementfourn_facturefourn_fk_facture` (`fk_facturefourn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `paiement_facture`
--

DROP TABLE IF EXISTS `paiement_facture`;
CREATE TABLE IF NOT EXISTS `paiement_facture` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_facture` int(11) DEFAULT NULL,
  `fk_paiement` int(11) DEFAULT NULL,
  `amount` double DEFAULT '0',
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_amount` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_paiement_facture` (`fk_paiement`,`fk_facture`),
  KEY `idx_paiement_facture_fk_paiement` (`fk_paiement`),
  KEY `idx_paiement_facture_fk_facture` (`fk_facture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `partnership`
--

DROP TABLE IF EXISTS `partnership`;
CREATE TABLE IF NOT EXISTS `partnership` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '(PROV)',
  `status` smallint(6) NOT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_member` int(11) DEFAULT NULL,
  `date_partnership_start` date NOT NULL,
  `date_partnership_end` date NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `reason_decline_or_cancel` text COLLATE utf8mb4_unicode_ci,
  `date_creation` datetime NOT NULL,
  `fk_user_creat` int(11) NOT NULL,
  `tms` datetime DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_last_url_check_error` int(11) DEFAULT NULL,
  `last_check_backlink` datetime DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_partnership_ref` (`ref`,`entity`),
  KEY `idx_partnership_entity` (`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `partnership_extrafields`
--

DROP TABLE IF EXISTS `partnership_extrafields`;
CREATE TABLE IF NOT EXISTS `partnership_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_partnership_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `payment_donation`
--

DROP TABLE IF EXISTS `payment_donation`;
CREATE TABLE IF NOT EXISTS `payment_donation` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_donation` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datep` datetime DEFAULT NULL,
  `amount` double DEFAULT '0',
  `fk_typepayment` int(11) NOT NULL,
  `num_payment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `ext_payment_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ext_payment_site` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_bank` int(11) NOT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `payment_expensereport`
--

DROP TABLE IF EXISTS `payment_expensereport`;
CREATE TABLE IF NOT EXISTS `payment_expensereport` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_expensereport` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datep` datetime DEFAULT NULL,
  `amount` double DEFAULT '0',
  `fk_typepayment` int(11) NOT NULL,
  `num_payment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `fk_bank` int(11) NOT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `payment_loan`
--

DROP TABLE IF EXISTS `payment_loan`;
CREATE TABLE IF NOT EXISTS `payment_loan` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_loan` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datep` datetime DEFAULT NULL,
  `amount_capital` double DEFAULT '0',
  `amount_insurance` double DEFAULT '0',
  `amount_interest` double DEFAULT '0',
  `fk_typepayment` int(11) NOT NULL,
  `num_payment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `fk_bank` int(11) NOT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `payment_salary`
--

DROP TABLE IF EXISTS `payment_salary`;
CREATE TABLE IF NOT EXISTS `payment_salary` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) DEFAULT NULL,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `datep` date DEFAULT NULL,
  `datev` date DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `fk_projet` int(11) DEFAULT NULL,
  `fk_typepayment` int(11) NOT NULL,
  `num_payment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datesp` date DEFAULT NULL,
  `dateep` date DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `note` text COLLATE utf8mb4_unicode_ci,
  `fk_bank` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_salary` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_payment_salary_user` (`fk_user`,`entity`),
  KEY `idx_payment_salary_datep` (`datep`),
  KEY `idx_payment_salary_dateep` (`dateep`),
  KEY `idx_payment_salary_ref` (`num_payment`),
  KEY `idx_payment_salary_datesp` (`datesp`),
  KEY `IDX_B12B20E71AD0877` (`fk_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `payment_salary_extrafields`
--

DROP TABLE IF EXISTS `payment_salary_extrafields`;
CREATE TABLE IF NOT EXISTS `payment_salary_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_payment_salary_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `payment_various`
--

DROP TABLE IF EXISTS `payment_various`;
CREATE TABLE IF NOT EXISTS `payment_various` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_payment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `datep` date DEFAULT NULL,
  `datev` date DEFAULT NULL,
  `sens` smallint(6) NOT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `fk_typepayment` int(11) NOT NULL,
  `accountancy_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subledger_account` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_projet` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `note` text COLLATE utf8mb4_unicode_ci,
  `fk_bank` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `payment_vat`
--

DROP TABLE IF EXISTS `payment_vat`;
CREATE TABLE IF NOT EXISTS `payment_vat` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_tva` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT NULL,
  `datep` datetime DEFAULT NULL,
  `amount` double DEFAULT '0',
  `fk_typepaiement` int(11) NOT NULL,
  `num_paiement` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `fk_bank` int(11) NOT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `pos_cash_fence`
--

DROP TABLE IF EXISTS `pos_cash_fence`;
CREATE TABLE IF NOT EXISTS `pos_cash_fence` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opening` double DEFAULT '0',
  `cash` double DEFAULT '0',
  `card` double DEFAULT '0',
  `cheque` double DEFAULT '0',
  `status` int(11) DEFAULT NULL,
  `date_creation` datetime NOT NULL,
  `date_valid` datetime DEFAULT NULL,
  `day_close` int(11) DEFAULT NULL,
  `month_close` int(11) DEFAULT NULL,
  `year_close` int(11) DEFAULT NULL,
  `posmodule` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posnumber` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `tms` datetime DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `prelevement_bons`
--

DROP TABLE IF EXISTS `prelevement_bons`;
CREATE TABLE IF NOT EXISTS `prelevement_bons` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT 'debit-order',
  `ref` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datec` datetime DEFAULT NULL,
  `amount` double DEFAULT '0',
  `statut` smallint(6) DEFAULT NULL,
  `credite` smallint(6) DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `date_trans` datetime DEFAULT NULL,
  `method_trans` smallint(6) DEFAULT NULL,
  `fk_user_trans` int(11) DEFAULT NULL,
  `date_credit` datetime DEFAULT NULL,
  `fk_user_credit` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_prelevement_bons_ref` (`ref`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `prelevement_facture`
--

DROP TABLE IF EXISTS `prelevement_facture`;
CREATE TABLE IF NOT EXISTS `prelevement_facture` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_prelevement_lignes` int(11) DEFAULT NULL,
  `fk_facture` int(11) DEFAULT NULL,
  `fk_facture_fourn` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_prelevement_facture_fk_prelevement_lignes` (`fk_prelevement_lignes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `prelevement_facture_demande`
--

DROP TABLE IF EXISTS `prelevement_facture_demande`;
CREATE TABLE IF NOT EXISTS `prelevement_facture_demande` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_facture` int(11) DEFAULT NULL,
  `fk_facture_fourn` int(11) DEFAULT NULL,
  `sourcetype` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double NOT NULL,
  `date_demande` datetime NOT NULL,
  `traite` smallint(6) DEFAULT NULL,
  `date_traite` datetime DEFAULT NULL,
  `fk_prelevement_bons` int(11) DEFAULT NULL,
  `fk_user_demande` int(11) NOT NULL,
  `code_banque` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_guichet` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cle_rib` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ext_payment_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ext_payment_site` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_prelevement_facture_demande_fk_facture_fourn` (`fk_facture_fourn`),
  KEY `idx_prelevement_facture_demande_fk_facture` (`fk_facture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `prelevement_lignes`
--

DROP TABLE IF EXISTS `prelevement_lignes`;
CREATE TABLE IF NOT EXISTS `prelevement_lignes` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_prelevement_bons` int(11) DEFAULT NULL,
  `fk_soc` int(11) NOT NULL,
  `statut` smallint(6) DEFAULT NULL,
  `client_nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT '0',
  `code_banque` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_guichet` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cle_rib` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  KEY `idx_prelevement_lignes_fk_prelevement_bons` (`fk_prelevement_bons`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `prelevement_rejet`
--

DROP TABLE IF EXISTS `prelevement_rejet`;
CREATE TABLE IF NOT EXISTS `prelevement_rejet` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_prelevement_lignes` int(11) DEFAULT NULL,
  `date_rejet` datetime DEFAULT NULL,
  `motif` int(11) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `fk_user_creation` int(11) DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `afacturer` tinyint(1) DEFAULT NULL,
  `fk_facture` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `printing`
--

DROP TABLE IF EXISTS `printing`;
CREATE TABLE IF NOT EXISTS `printing` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `printer_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy` int(11) NOT NULL DEFAULT '1',
  `module` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_barcode_type` int(11) DEFAULT NULL,
  `fk_default_warehouse` int(11) DEFAULT NULL,
  `finished` tinyint(1) DEFAULT NULL,
  `fk_country` int(11) DEFAULT NULL,
  `fk_unit` int(11) DEFAULT NULL,
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref_ext` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_parent` int(11) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `customcode` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_state` int(11) DEFAULT NULL,
  `price` double DEFAULT '0',
  `price_ttc` double DEFAULT '0',
  `price_min` double DEFAULT '0',
  `price_min_ttc` double DEFAULT '0',
  `price_base_type` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT 'HT',
  `cost_price` double DEFAULT NULL,
  `default_vat_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double DEFAULT NULL,
  `recuperableonly` int(11) NOT NULL,
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `tosell` tinyint(1) DEFAULT '1',
  `tobuy` tinyint(1) DEFAULT '1',
  `onportal` tinyint(1) DEFAULT NULL,
  `tobatch` tinyint(1) NOT NULL,
  `batch_mask` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_product_type` int(11) DEFAULT NULL,
  `duration` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seuil_stock_alerte` double DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_sell` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_sell_intra` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_sell_export` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_buy` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_buy_intra` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_buy_export` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partnumber` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net_measure` double DEFAULT NULL,
  `net_measure_units` tinyint(1) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `weight_units` tinyint(1) DEFAULT NULL,
  `length` double DEFAULT NULL,
  `length_units` tinyint(1) DEFAULT NULL,
  `width` double DEFAULT NULL,
  `width_units` tinyint(1) DEFAULT NULL,
  `height` double DEFAULT NULL,
  `height_units` tinyint(1) DEFAULT NULL,
  `surface` double DEFAULT NULL,
  `surface_units` tinyint(1) DEFAULT NULL,
  `volume` double DEFAULT NULL,
  `volume_units` tinyint(1) DEFAULT NULL,
  `stock` double DEFAULT NULL,
  `pmp` double NOT NULL DEFAULT '0',
  `fifo` double DEFAULT NULL,
  `lifo` double DEFAULT NULL,
  `canvas` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lifetime` int(11) DEFAULT NULL,
  `qc_frequency` int(11) DEFAULT NULL,
  `hidden` tinyint(1) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_price_expression` int(11) DEFAULT NULL,
  `desiredstock` double DEFAULT NULL,
  `price_autogen` tinyint(1) DEFAULT NULL,
  `fk_project` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_product_ref` (`ref`,`entity`),
  UNIQUE KEY `uk_product_barcode` (`barcode`,`fk_barcode_type`,`entity`),
  KEY `idx_product_fk_barcode_type` (`fk_barcode_type`),
  KEY `fk_product_fk_unit` (`fk_unit`),
  KEY `fk_product_default_warehouse` (`fk_default_warehouse`),
  KEY `idx_product_label` (`label`),
  KEY `idx_product_import_key` (`import_key`),
  KEY `idx_product_fk_country` (`fk_country`),
  KEY `idx_product_fk_project` (`fk_project`),
  KEY `fk_product_finished` (`finished`),
  KEY `idx_product_barcode` (`barcode`),
  KEY `idx_product_seuil_stock_alerte` (`seuil_stock_alerte`),
  KEY `idx_product_fk_user_author` (`fk_user_author`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_association`
--

DROP TABLE IF EXISTS `product_association`;
CREATE TABLE IF NOT EXISTS `product_association` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_product_pere` int(11) NOT NULL,
  `fk_product_fils` int(11) NOT NULL,
  `qty` double DEFAULT NULL,
  `incdec` int(11) DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_product_association` (`fk_product_pere`,`fk_product_fils`),
  KEY `idx_product_association_fils` (`fk_product_fils`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_attribute`
--

DROP TABLE IF EXISTS `product_attribute`;
CREATE TABLE IF NOT EXISTS `product_attribute` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rang` int(11) NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_product_attribute_ref` (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_attribute_combination`
--

DROP TABLE IF EXISTS `product_attribute_combination`;
CREATE TABLE IF NOT EXISTS `product_attribute_combination` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_product_parent` int(11) NOT NULL,
  `fk_product_child` int(11) NOT NULL,
  `variation_price` double NOT NULL,
  `variation_price_percentage` int(11) DEFAULT NULL,
  `variation_weight` double NOT NULL,
  `variation_ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  KEY `idx_product_att_com_product_child` (`fk_product_child`),
  KEY `idx_product_att_com_product_parent` (`fk_product_parent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_attribute_combination2val`
--

DROP TABLE IF EXISTS `product_attribute_combination2val`;
CREATE TABLE IF NOT EXISTS `product_attribute_combination2val` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_prod_combination` int(11) NOT NULL,
  `fk_prod_attr` int(11) NOT NULL,
  `fk_prod_attr_val` int(11) NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_attribute_combination_price_level`
--

DROP TABLE IF EXISTS `product_attribute_combination_price_level`;
CREATE TABLE IF NOT EXISTS `product_attribute_combination_price_level` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_product_attribute_combination` int(11) NOT NULL DEFAULT '1',
  `fk_price_level` int(11) NOT NULL DEFAULT '1',
  `variation_price` double NOT NULL,
  `variation_price_percentage` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `fk_product_attribute_combination` (`fk_product_attribute_combination`,`fk_price_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_attribute_value`
--

DROP TABLE IF EXISTS `product_attribute_value`;
CREATE TABLE IF NOT EXISTS `product_attribute_value` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_product_attribute` int(11) NOT NULL,
  `ref` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_product_attribute_value` (`fk_product_attribute`,`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_batch`
--

DROP TABLE IF EXISTS `product_batch`;
CREATE TABLE IF NOT EXISTS `product_batch` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_product_stock` int(11) DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `eatby` datetime DEFAULT NULL,
  `sellby` datetime DEFAULT NULL,
  `batch` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` double NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_product_batch` (`fk_product_stock`,`batch`),
  KEY `idx_batch` (`batch`),
  KEY `idx_fk_product_stock` (`fk_product_stock`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_customer_price`
--

DROP TABLE IF EXISTS `product_customer_price`;
CREATE TABLE IF NOT EXISTS `product_customer_price` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_product` int(11) DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `ref_customer` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT '0',
  `price_ttc` double DEFAULT '0',
  `price_min` double DEFAULT '0',
  `price_min_ttc` double DEFAULT '0',
  `price_base_type` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT 'HT',
  `default_vat_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double DEFAULT NULL,
  `recuperableonly` int(11) NOT NULL,
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_customer_price_fk_product_fk_soc` (`fk_product`,`fk_soc`),
  KEY `idx_product_customer_price_fk_soc` (`fk_soc`),
  KEY `idx_product_customer_price_fk_user` (`fk_user`),
  KEY `IDX_579429CE23653981` (`fk_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_customer_price_log`
--

DROP TABLE IF EXISTS `product_customer_price_log`;
CREATE TABLE IF NOT EXISTS `product_customer_price_log` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datec` datetime DEFAULT NULL,
  `fk_product` int(11) NOT NULL,
  `fk_soc` int(11) NOT NULL,
  `ref_customer` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT '0',
  `price_ttc` double DEFAULT '0',
  `price_min` double DEFAULT '0',
  `price_min_ttc` double DEFAULT '0',
  `price_base_type` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT 'HT',
  `default_vat_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double DEFAULT NULL,
  `recuperableonly` int(11) NOT NULL,
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_extrafields`
--

DROP TABLE IF EXISTS `product_extrafields`;
CREATE TABLE IF NOT EXISTS `product_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_product_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_fournisseur_price`
--

DROP TABLE IF EXISTS `product_fournisseur_price`;
CREATE TABLE IF NOT EXISTS `product_fournisseur_price` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_barcode_type` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_soc` int(11) DEFAULT NULL,
  `ref_fourn` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_fourn` text COLLATE utf8mb4_unicode_ci,
  `fk_availability` int(11) DEFAULT NULL,
  `price` double DEFAULT '0',
  `quantity` double DEFAULT NULL,
  `remise_percent` double NOT NULL,
  `remise` double NOT NULL,
  `unitprice` double DEFAULT '0',
  `charges` double DEFAULT '0',
  `default_vat_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double NOT NULL,
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_bits` int(11) NOT NULL,
  `fk_supplier_price_expression` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time_days` int(11) DEFAULT NULL,
  `supplier_reputation` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packaging` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_unitprice` double DEFAULT NULL,
  `multicurrency_price` double DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_product_barcode` (`barcode`,`fk_barcode_type`,`entity`),
  UNIQUE KEY `uk_product_fournisseur_price_ref` (`ref_fourn`,`fk_soc`,`quantity`,`entity`),
  KEY `idx_product_fournisseur_price_fk_user` (`fk_user`),
  KEY `idx_product_fk_barcode_type` (`fk_barcode_type`),
  KEY `idx_product_fourn_price_fk_product` (`fk_product`,`entity`),
  KEY `idx_product_fourn_price_fk_soc` (`fk_soc`,`entity`),
  KEY `idx_product_barcode` (`barcode`),
  KEY `IDX_631BA57F23653981` (`fk_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_fournisseur_price_extrafields`
--

DROP TABLE IF EXISTS `product_fournisseur_price_extrafields`;
CREATE TABLE IF NOT EXISTS `product_fournisseur_price_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_product_fournisseur_price_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_fournisseur_price_log`
--

DROP TABLE IF EXISTS `product_fournisseur_price_log`;
CREATE TABLE IF NOT EXISTS `product_fournisseur_price_log` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `datec` datetime DEFAULT NULL,
  `fk_product_fournisseur` int(11) NOT NULL,
  `price` double DEFAULT '0',
  `quantity` double DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_unitprice` double DEFAULT NULL,
  `multicurrency_price` double DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_lang`
--

DROP TABLE IF EXISTS `product_lang`;
CREATE TABLE IF NOT EXISTS `product_lang` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_product` int(11) DEFAULT NULL,
  `lang` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_product_lang` (`fk_product`,`lang`),
  KEY `IDX_BCE1A6C323653981` (`fk_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_lot`
--

DROP TABLE IF EXISTS `product_lot`;
CREATE TABLE IF NOT EXISTS `product_lot` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) DEFAULT '1',
  `fk_product` int(11) NOT NULL,
  `batch` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eatby` date DEFAULT NULL,
  `sellby` date DEFAULT NULL,
  `eol_date` datetime DEFAULT NULL,
  `manufacturing_date` datetime DEFAULT NULL,
  `scrapping_date` datetime DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `import_key` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_product_lot` (`fk_product`,`batch`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_lot_extrafields`
--

DROP TABLE IF EXISTS `product_lot_extrafields`;
CREATE TABLE IF NOT EXISTS `product_lot_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_product_lot_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_perentity`
--

DROP TABLE IF EXISTS `product_perentity`;
CREATE TABLE IF NOT EXISTS `product_perentity` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_product` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `accountancy_code_sell` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_sell_intra` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_sell_export` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_buy` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_buy_intra` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_buy_export` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pmp` double DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_product_perentity` (`fk_product`,`entity`),
  KEY `idx_product_perentity_fk_product` (`fk_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_price`
--

DROP TABLE IF EXISTS `product_price`;
CREATE TABLE IF NOT EXISTS `product_price` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_price` datetime NOT NULL,
  `price_level` smallint(6) DEFAULT '1',
  `price` double DEFAULT NULL,
  `price_ttc` double DEFAULT NULL,
  `price_min` double DEFAULT NULL,
  `price_min_ttc` double DEFAULT NULL,
  `price_base_type` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT 'HT',
  `default_vat_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double NOT NULL DEFAULT '0',
  `recuperableonly` int(11) NOT NULL,
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tosell` tinyint(1) DEFAULT '1',
  `price_by_qty` int(11) NOT NULL,
  `fk_price_expression` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_price` double DEFAULT NULL,
  `multicurrency_price_ttc` double DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_product_price_fk_product` (`fk_product`),
  KEY `idx_product_price_fk_user_author` (`fk_user_author`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_pricerules`
--

DROP TABLE IF EXISTS `product_pricerules`;
CREATE TABLE IF NOT EXISTS `product_pricerules` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `fk_level` int(11) NOT NULL,
  `var_percent` double NOT NULL,
  `var_min_percent` double NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `unique_level` (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_price_by_qty`
--

DROP TABLE IF EXISTS `product_price_by_qty`;
CREATE TABLE IF NOT EXISTS `product_price_by_qty` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_product_price` int(11) DEFAULT NULL,
  `price` double DEFAULT '0',
  `price_base_type` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT 'HT',
  `quantity` double DEFAULT NULL,
  `remise_percent` double NOT NULL,
  `remise` double NOT NULL,
  `unitprice` double DEFAULT '0',
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_price` double DEFAULT NULL,
  `multicurrency_price_ttc` double DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_product_price_by_qty_level` (`fk_product_price`,`quantity`),
  KEY `idx_product_price_by_qty_fk_product_price` (`fk_product_price`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_stock`
--

DROP TABLE IF EXISTS `product_stock`;
CREATE TABLE IF NOT EXISTS `product_stock` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_product` int(11) NOT NULL,
  `fk_entrepot` int(11) NOT NULL,
  `reel` double DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_product_stock` (`fk_product`,`fk_entrepot`),
  KEY `idx_product_stock_fk_entrepot` (`fk_entrepot`),
  KEY `idx_product_stock_fk_product` (`fk_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `product_warehouse_properties`
--

DROP TABLE IF EXISTS `product_warehouse_properties`;
CREATE TABLE IF NOT EXISTS `product_warehouse_properties` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_product` int(11) NOT NULL,
  `fk_entrepot` int(11) NOT NULL,
  `seuil_stock_alerte` double DEFAULT NULL,
  `desiredstock` double DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_soc` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `dateo` date DEFAULT NULL,
  `datee` date DEFAULT NULL,
  `ref` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `fk_user_creat` int(11) NOT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `public` int(11) DEFAULT NULL,
  `fk_statut` int(11) NOT NULL,
  `fk_opp_status` int(11) DEFAULT NULL,
  `opp_percent` double DEFAULT NULL,
  `fk_opp_status_end` int(11) DEFAULT NULL,
  `date_close` datetime DEFAULT NULL,
  `fk_user_close` int(11) DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `email_msgid` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opp_amount` double DEFAULT NULL,
  `budget_amount` double DEFAULT NULL,
  `usage_opportunity` int(11) DEFAULT NULL,
  `usage_task` int(11) DEFAULT '1',
  `usage_bill_time` int(11) DEFAULT NULL,
  `usage_organize_event` int(11) DEFAULT NULL,
  `accept_conference_suggestions` int(11) DEFAULT NULL,
  `accept_booth_suggestions` int(11) DEFAULT NULL,
  `price_registration` double DEFAULT NULL,
  `price_booth` double DEFAULT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_projet_ref` (`ref`,`entity`),
  KEY `idx_projet_fk_soc` (`fk_soc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `projet_extrafields`
--

DROP TABLE IF EXISTS `projet_extrafields`;
CREATE TABLE IF NOT EXISTS `projet_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_projet_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `projet_task`
--

DROP TABLE IF EXISTS `projet_task`;
CREATE TABLE IF NOT EXISTS `projet_task` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_projet` int(11) DEFAULT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `ref` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_task_parent` int(11) NOT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `dateo` datetime DEFAULT NULL,
  `datee` datetime DEFAULT NULL,
  `datev` datetime DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `duration_effective` double DEFAULT NULL,
  `planned_workload` double DEFAULT NULL,
  `progress` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_statut` smallint(6) NOT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `rang` int(11) DEFAULT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_projet_task_ref` (`ref`,`entity`),
  KEY `idx_projet_task_fk_user_creat` (`fk_user_creat`),
  KEY `idx_projet_task_fk_projet` (`fk_projet`),
  KEY `idx_projet_task_fk_user_valid` (`fk_user_valid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `projet_task_extrafields`
--

DROP TABLE IF EXISTS `projet_task_extrafields`;
CREATE TABLE IF NOT EXISTS `projet_task_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_projet_task_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `projet_task_time`
--

DROP TABLE IF EXISTS `projet_task_time`;
CREATE TABLE IF NOT EXISTS `projet_task_time` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_task` int(11) NOT NULL,
  `task_date` date DEFAULT NULL,
  `task_datehour` datetime DEFAULT NULL,
  `task_date_withhour` int(11) DEFAULT NULL,
  `task_duration` double DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `thm` double DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `invoice_line_id` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `note` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  KEY `idx_projet_task_time_date` (`task_date`),
  KEY `idx_projet_task_time_task` (`fk_task`),
  KEY `idx_projet_task_time_datehour` (`task_datehour`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `propal`
--

DROP TABLE IF EXISTS `propal`;
CREATE TABLE IF NOT EXISTS `propal` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_projet` int(11) DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_cloture` int(11) DEFAULT NULL,
  `fk_user_signature` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_int` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `datep` date DEFAULT NULL,
  `fin_validite` datetime DEFAULT NULL,
  `date_valid` datetime DEFAULT NULL,
  `date_signature` datetime DEFAULT NULL,
  `date_cloture` datetime DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_statut` smallint(6) NOT NULL,
  `price` double DEFAULT NULL,
  `remise_percent` double DEFAULT NULL,
  `remise_absolue` double DEFAULT NULL,
  `remise` double DEFAULT NULL,
  `total_ht` double DEFAULT '0',
  `total_tva` double DEFAULT '0',
  `localtax1` double DEFAULT '0',
  `localtax2` double DEFAULT '0',
  `total_ttc` double DEFAULT '0',
  `fk_account` int(11) DEFAULT NULL,
  `fk_currency` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_cond_reglement` int(11) DEFAULT NULL,
  `fk_mode_reglement` int(11) DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_livraison` date DEFAULT NULL,
  `fk_shipping_method` int(11) DEFAULT NULL,
  `fk_warehouse` int(11) DEFAULT NULL,
  `fk_availability` int(11) DEFAULT NULL,
  `fk_input_reason` int(11) DEFAULT NULL,
  `fk_incoterms` int(11) DEFAULT NULL,
  `location_incoterms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_delivery_address` int(11) DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_propal_ref` (`ref`,`entity`),
  KEY `idx_propal_fk_user_author` (`fk_user_author`),
  KEY `idx_propal_fk_user_signature` (`fk_user_signature`),
  KEY `idx_propal_fk_projet` (`fk_projet`),
  KEY `idx_propal_fk_currency` (`fk_currency`),
  KEY `idx_propal_fk_warehouse` (`fk_warehouse`),
  KEY `idx_propal_fk_soc` (`fk_soc`),
  KEY `idx_propal_fk_user_valid` (`fk_user_valid`),
  KEY `idx_propal_fk_user_cloture` (`fk_user_cloture`),
  KEY `idx_propal_fk_account` (`fk_account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `propaldet`
--

DROP TABLE IF EXISTS `propaldet`;
CREATE TABLE IF NOT EXISTS `propaldet` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_propal` int(11) DEFAULT NULL,
  `fk_unit` int(11) DEFAULT NULL,
  `fk_parent_line` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `fk_remise_except` int(11) DEFAULT NULL,
  `vat_src_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double DEFAULT '0',
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `remise_percent` double DEFAULT NULL,
  `remise` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `subprice` double DEFAULT '0',
  `total_ht` double DEFAULT '0',
  `total_tva` double DEFAULT '0',
  `total_localtax1` double DEFAULT '0',
  `total_localtax2` double DEFAULT '0',
  `total_ttc` double DEFAULT '0',
  `product_type` int(11) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `info_bits` int(11) DEFAULT NULL,
  `buy_price_ht` double DEFAULT '0',
  `fk_product_fournisseur_price` int(11) DEFAULT NULL,
  `special_code` int(11) DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_subprice` double DEFAULT '0',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  KEY `idx_propaldet_fk_product` (`fk_product`),
  KEY `idx_propaldet_fk_propal` (`fk_propal`),
  KEY `fk_propaldet_fk_unit` (`fk_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `propaldet_extrafields`
--

DROP TABLE IF EXISTS `propaldet_extrafields`;
CREATE TABLE IF NOT EXISTS `propaldet_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_propaldet_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `propal_extrafields`
--

DROP TABLE IF EXISTS `propal_extrafields`;
CREATE TABLE IF NOT EXISTS `propal_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_propal_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `propal_merge_pdf_product`
--

DROP TABLE IF EXISTS `propal_merge_pdf_product`;
CREATE TABLE IF NOT EXISTS `propal_merge_pdf_product` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_product` int(11) NOT NULL,
  `file_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_mod` int(11) NOT NULL,
  `datec` datetime NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `reception`
--

DROP TABLE IF EXISTS `reception`;
CREATE TABLE IF NOT EXISTS `reception` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_shipping_method` int(11) DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_projet` int(11) DEFAULT NULL,
  `ref_ext` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_int` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_supplier` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `date_valid` datetime DEFAULT NULL,
  `date_delivery` datetime DEFAULT NULL,
  `date_reception` datetime DEFAULT NULL,
  `tracking_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_statut` smallint(6) DEFAULT NULL,
  `billed` smallint(6) DEFAULT NULL,
  `height` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `size_units` int(11) DEFAULT NULL,
  `size` double DEFAULT NULL,
  `weight_units` int(11) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_incoterms` int(11) DEFAULT NULL,
  `location_incoterms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_reception_uk_ref` (`ref`,`entity`),
  KEY `idx_reception_fk_user_author` (`fk_user_author`),
  KEY `idx_reception_fk_shipping_method` (`fk_shipping_method`),
  KEY `idx_reception_fk_user_valid` (`fk_user_valid`),
  KEY `idx_reception_fk_soc` (`fk_soc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `reception_extrafields`
--

DROP TABLE IF EXISTS `reception_extrafields`;
CREATE TABLE IF NOT EXISTS `reception_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_reception_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `recruitment_recruitmentcandidature`
--

DROP TABLE IF EXISTS `recruitment_recruitmentcandidature`;
CREATE TABLE IF NOT EXISTS `recruitment_recruitmentcandidature` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_creat` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '(PROV)',
  `fk_recruitmentjobposition` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `date_creation` datetime NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_modif` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `firstname` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `remuneration_requested` int(11) DEFAULT NULL,
  `remuneration_proposed` int(11) DEFAULT NULL,
  `email_msgid` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_recruitment_origin` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_recruitmentcandidature_email_msgid` (`email_msgid`),
  KEY `idx_recruitment_recruitmentcandidature_rowid` (`rowid`),
  KEY `recruitment_recruitmentcandidature_fk_user_creat` (`fk_user_creat`),
  KEY `idx_recruitment_recruitmentcandidature_ref` (`ref`),
  KEY `idx_recruitment_recruitmentcandidature_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `recruitment_recruitmentcandidature_extrafields`
--

DROP TABLE IF EXISTS `recruitment_recruitmentcandidature_extrafields`;
CREATE TABLE IF NOT EXISTS `recruitment_recruitmentcandidature_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_recruitmentcandidature_fk_object` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `recruitment_recruitmentjobposition`
--

DROP TABLE IF EXISTS `recruitment_recruitmentjobposition`;
CREATE TABLE IF NOT EXISTS `recruitment_recruitmentjobposition` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_establishment` int(11) DEFAULT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_recruiter` int(11) DEFAULT NULL,
  `fk_user_supervisor` int(11) DEFAULT NULL,
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '(PROV)',
  `entity` int(11) NOT NULL DEFAULT '1',
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '1',
  `fk_soc` int(11) DEFAULT NULL,
  `fk_project` int(11) DEFAULT NULL,
  `email_recruiter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_planned` date DEFAULT NULL,
  `remuneration_suggested` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `date_creation` datetime NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_modif` int(11) DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  PRIMARY KEY (`rowid`),
  KEY `recruitment_recruitmentjobposition_fk_user_supervisor` (`fk_user_supervisor`),
  KEY `recruitment_recruitmentjobposition_fk_user_creat` (`fk_user_creat`),
  KEY `idx_recruitment_recruitmentjobposition_ref` (`ref`),
  KEY `idx_recruitment_recruitmentjobposition_fk_project` (`fk_project`),
  KEY `recruitment_recruitmentjobposition_fk_user_recruiter` (`fk_user_recruiter`),
  KEY `recruitment_recruitmentjobposition_fk_establishment` (`fk_establishment`),
  KEY `idx_recruitment_recruitmentjobposition_status` (`status`),
  KEY `idx_recruitment_recruitmentjobposition_rowid` (`rowid`),
  KEY `idx_recruitment_recruitmentjobposition_fk_soc` (`fk_soc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `recruitment_recruitmentjobposition_extrafields`
--

DROP TABLE IF EXISTS `recruitment_recruitmentjobposition_extrafields`;
CREATE TABLE IF NOT EXISTS `recruitment_recruitmentjobposition_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_recruitmentjobposition_fk_object` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `resource`
--

DROP TABLE IF EXISTS `resource`;
CREATE TABLE IF NOT EXISTS `resource` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_country` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asset_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `fk_code_type_resource` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `date_valid` datetime DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `fk_statut` smallint(6) NOT NULL,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_resource_ref` (`ref`,`entity`),
  KEY `idx_resource_fk_country` (`fk_country`),
  KEY `fk_code_type_resource_idx` (`fk_code_type_resource`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `resource_extrafields`
--

DROP TABLE IF EXISTS `resource_extrafields`;
CREATE TABLE IF NOT EXISTS `resource_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_resource_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `rights_def`
--

DROP TABLE IF EXISTS `rights_def`;
CREATE TABLE IF NOT EXISTS `rights_def` (
  `id` int(11) NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_position` int(11) NOT NULL,
  `family_position` int(11) NOT NULL,
  `perms` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subperms` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bydefault` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `fk_user` int(11) NOT NULL,
  `datep` date DEFAULT NULL,
  `datev` date DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `fk_projet` int(11) DEFAULT NULL,
  `fk_typepayment` int(11) NOT NULL,
  `num_payment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datesp` date DEFAULT NULL,
  `dateep` date DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `note` text COLLATE utf8mb4_unicode_ci,
  `fk_bank` int(11) DEFAULT NULL,
  `paye` smallint(6) NOT NULL,
  `fk_account` int(11) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `session_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_variable` text COLLATE utf8mb4_unicode_ci,
  `last_accessed` datetime NOT NULL,
  `fk_user` int(11) NOT NULL,
  `remote_ip` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

DROP TABLE IF EXISTS `societe`;
CREATE TABLE IF NOT EXISTS `societe` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_alias` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_int` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` tinyint(1) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `code_client` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_fournisseur` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_compta` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_compta_fournisseur` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_departement` int(11) DEFAULT NULL,
  `fk_pays` int(11) DEFAULT NULL,
  `fk_account` int(11) DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialnetworks` text COLLATE utf8mb4_unicode_ci,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_effectif` int(11) DEFAULT NULL,
  `fk_typent` int(11) DEFAULT NULL,
  `fk_forme_juridique` int(11) DEFAULT NULL,
  `fk_currency` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siren` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siret` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ape` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idprof4` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idprof5` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idprof6` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_intra` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capital` double DEFAULT NULL,
  `fk_stcomm` int(11) NOT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefix_comm` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` tinyint(1) DEFAULT NULL,
  `fournisseur` tinyint(1) DEFAULT NULL,
  `supplier_account` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_prospectlevel` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_incoterms` int(11) DEFAULT NULL,
  `location_incoterms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_bad` tinyint(1) DEFAULT NULL,
  `customer_rate` double DEFAULT NULL,
  `supplier_rate` double DEFAULT NULL,
  `remise_client` double DEFAULT NULL,
  `remise_supplier` double DEFAULT NULL,
  `mode_reglement` tinyint(1) DEFAULT NULL,
  `cond_reglement` tinyint(1) DEFAULT NULL,
  `transport_mode` tinyint(1) DEFAULT NULL,
  `mode_reglement_supplier` tinyint(1) DEFAULT NULL,
  `cond_reglement_supplier` tinyint(1) DEFAULT NULL,
  `transport_mode_supplier` tinyint(1) DEFAULT NULL,
  `fk_shipping_method` int(11) DEFAULT NULL,
  `tva_assuj` tinyint(1) DEFAULT '1',
  `localtax1_assuj` tinyint(1) DEFAULT NULL,
  `localtax1_value` double DEFAULT NULL,
  `localtax2_assuj` tinyint(1) DEFAULT NULL,
  `localtax2_value` double DEFAULT NULL,
  `barcode` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_barcode_type` int(11) DEFAULT NULL,
  `price_level` int(11) DEFAULT NULL,
  `outstanding_limit` double DEFAULT NULL,
  `order_min_amount` double DEFAULT NULL,
  `supplier_order_min_amount` double DEFAULT NULL,
  `default_lang` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_squarred` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canvas` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_warehouse` int(11) DEFAULT NULL,
  `webservices_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webservices_key` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_sell` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_buy` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_societe_code_fournisseur` (`code_fournisseur`,`entity`),
  UNIQUE KEY `uk_societe_barcode` (`barcode`,`fk_barcode_type`,`entity`),
  UNIQUE KEY `uk_societe_prefix_comm` (`prefix_comm`,`entity`),
  UNIQUE KEY `uk_societe_code_client` (`code_client`,`entity`),
  KEY `idx_societe_typent` (`fk_typent`),
  KEY `idx_societe_shipping_method` (`fk_shipping_method`),
  KEY `idx_societe_user_creat` (`fk_user_creat`),
  KEY `idx_societe_stcomm` (`fk_stcomm`),
  KEY `idx_societe_account` (`fk_account`),
  KEY `idx_societe_forme_juridique` (`fk_forme_juridique`),
  KEY `idx_societe_user_modif` (`fk_user_modif`),
  KEY `idx_societe_pays` (`fk_pays`),
  KEY `idx_societe_prospectlevel` (`fk_prospectlevel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `societe_account`
--

DROP TABLE IF EXISTS `societe_account`;
CREATE TABLE IF NOT EXISTS `societe_account` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_website` int(11) DEFAULT NULL,
  `entity` int(11) DEFAULT '1',
  `login` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_encoding` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass_crypted` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass_temp` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_account` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_account` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `date_last_login` datetime DEFAULT NULL,
  `date_previous_login` datetime DEFAULT NULL,
  `date_creation` datetime NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) NOT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_societe_account_key_account_soc` (`entity`,`fk_soc`,`key_account`,`site`,`fk_website`),
  UNIQUE KEY `uk_societe_account_login_website_soc` (`entity`,`fk_soc`,`login`,`site`,`fk_website`),
  KEY `idx_societe_account_fk_website` (`fk_website`),
  KEY `idx_societe_account_login` (`login`),
  KEY `idx_societe_account_fk_soc` (`fk_soc`),
  KEY `idx_societe_account_rowid` (`rowid`),
  KEY `idx_societe_account_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `societe_address`
--

DROP TABLE IF EXISTS `societe_address`;
CREATE TABLE IF NOT EXISTS `societe_address` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `label` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_pays` int(11) DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `societe_commerciaux`
--

DROP TABLE IF EXISTS `societe_commerciaux`;
CREATE TABLE IF NOT EXISTS `societe_commerciaux` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_societe_commerciaux` (`fk_soc`,`fk_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `societe_contacts`
--

DROP TABLE IF EXISTS `societe_contacts`;
CREATE TABLE IF NOT EXISTS `societe_contacts` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_c_type_contact` int(11) DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_socpeople` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `date_creation` datetime NOT NULL,
  `tms` datetime DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `idx_societe_contacts_idx1` (`entity`,`fk_soc`,`fk_c_type_contact`,`fk_socpeople`),
  KEY `fk_societe_contacts_fk_soc` (`fk_soc`),
  KEY `fk_societe_contacts_fk_c_type_contact` (`fk_c_type_contact`),
  KEY `fk_societe_contacts_fk_socpeople` (`fk_socpeople`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `societe_extrafields`
--

DROP TABLE IF EXISTS `societe_extrafields`;
CREATE TABLE IF NOT EXISTS `societe_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_societe_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `societe_perentity`
--

DROP TABLE IF EXISTS `societe_perentity`;
CREATE TABLE IF NOT EXISTS `societe_perentity` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_soc` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `accountancy_code_sell` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountancy_code_buy` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_societe_perentity` (`fk_soc`,`entity`),
  KEY `idx_societe_perentity_fk_soc` (`fk_soc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `societe_prices`
--

DROP TABLE IF EXISTS `societe_prices`;
CREATE TABLE IF NOT EXISTS `societe_prices` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_soc` int(11) DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `price_level` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `societe_remise`
--

DROP TABLE IF EXISTS `societe_remise`;
CREATE TABLE IF NOT EXISTS `societe_remise` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_soc` int(11) NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `remise_client` double NOT NULL DEFAULT '0',
  `note` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `societe_remise_supplier`
--

DROP TABLE IF EXISTS `societe_remise_supplier`;
CREATE TABLE IF NOT EXISTS `societe_remise_supplier` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_soc` int(11) NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `remise_supplier` double NOT NULL DEFAULT '0',
  `note` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `societe_rib`
--

DROP TABLE IF EXISTS `societe_rib`;
CREATE TABLE IF NOT EXISTS `societe_rib` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_soc` int(11) DEFAULT NULL,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ban',
  `label` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_banque` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_guichet` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cle_rib` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bic` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iban_prefix` varchar(34) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domiciliation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proprio` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_rib` smallint(6) NOT NULL,
  `rum` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_rum` date DEFAULT NULL,
  `frstrecur` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT 'FRST',
  `last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cvn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_date_month` int(11) DEFAULT NULL,
  `exp_date_year` int(11) DEFAULT NULL,
  `country_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ending_date` date DEFAULT NULL,
  `max_total_amount_of_all_payments` double DEFAULT NULL,
  `preapproval_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting_date` date DEFAULT NULL,
  `total_amount_of_all_payments` double DEFAULT NULL,
  `stripe_card_ref` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_account` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipaddress` varchar(68) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_societe_rib` (`label`,`fk_soc`),
  KEY `societe_rib_fk_societe` (`fk_soc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `socpeople`
--

DROP TABLE IF EXISTS `socpeople`;
CREATE TABLE IF NOT EXISTS `socpeople` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civility` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_departement` int(11) DEFAULT NULL,
  `fk_pays` int(11) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `poste` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_perso` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_mobile` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialnetworks` text COLLATE utf8mb4_unicode_ci,
  `jabberid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_email` smallint(6) NOT NULL,
  `priv` smallint(6) NOT NULL,
  `fk_prospectcontactlevel` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_stcommcontact` int(11) NOT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `default_lang` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canvas` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  KEY `idx_socpeople_fk_user_creat` (`fk_user_creat`),
  KEY `idx_socpeople_fk_soc` (`fk_soc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `socpeople_extrafields`
--

DROP TABLE IF EXISTS `socpeople_extrafields`;
CREATE TABLE IF NOT EXISTS `socpeople_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_socpeople_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `stock_mouvement`
--

DROP TABLE IF EXISTS `stock_mouvement`;
CREATE TABLE IF NOT EXISTS `stock_mouvement` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datem` datetime DEFAULT NULL,
  `fk_product` int(11) NOT NULL,
  `batch` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eatby` date DEFAULT NULL,
  `sellby` date DEFAULT NULL,
  `fk_entrepot` int(11) NOT NULL,
  `value` double DEFAULT NULL,
  `price` double DEFAULT '0',
  `type_mouvement` smallint(6) DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventorycode` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_project` int(11) DEFAULT NULL,
  `fk_origin` int(11) DEFAULT NULL,
  `origintype` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_projet` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_stock_mouvement_fk_entrepot` (`fk_entrepot`),
  KEY `idx_stock_mouvement_fk_product` (`fk_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `subscription`
--

DROP TABLE IF EXISTS `subscription`;
CREATE TABLE IF NOT EXISTS `subscription` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `fk_adherent` int(11) DEFAULT NULL,
  `fk_type` int(11) DEFAULT NULL,
  `dateadh` datetime DEFAULT NULL,
  `datef` datetime DEFAULT NULL,
  `subscription` double DEFAULT NULL,
  `fk_bank` int(11) DEFAULT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_subscription` (`fk_adherent`,`dateadh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `supplier_proposal`
--

DROP TABLE IF EXISTS `supplier_proposal`;
CREATE TABLE IF NOT EXISTS `supplier_proposal` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_int` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_projet` int(11) DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `date_valid` datetime DEFAULT NULL,
  `date_cloture` datetime DEFAULT NULL,
  `fk_user_author` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_user_valid` int(11) DEFAULT NULL,
  `fk_user_cloture` int(11) DEFAULT NULL,
  `fk_statut` smallint(6) NOT NULL,
  `price` double DEFAULT NULL,
  `remise_percent` double DEFAULT NULL,
  `remise_absolue` double DEFAULT NULL,
  `remise` double DEFAULT NULL,
  `total_ht` double DEFAULT '0',
  `total_tva` double DEFAULT '0',
  `localtax1` double DEFAULT '0',
  `localtax2` double DEFAULT '0',
  `total_ttc` double DEFAULT '0',
  `fk_account` int(11) DEFAULT NULL,
  `fk_currency` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_cond_reglement` int(11) DEFAULT NULL,
  `fk_mode_reglement` int(11) DEFAULT NULL,
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_main_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_livraison` date DEFAULT NULL,
  `fk_shipping_method` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extraparams` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_tx` double DEFAULT '1',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `supplier_proposaldet`
--

DROP TABLE IF EXISTS `supplier_proposaldet`;
CREATE TABLE IF NOT EXISTS `supplier_proposaldet` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_supplier_proposal` int(11) DEFAULT NULL,
  `fk_unit` int(11) DEFAULT NULL,
  `fk_parent_line` int(11) DEFAULT NULL,
  `fk_product` int(11) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `fk_remise_except` int(11) DEFAULT NULL,
  `vat_src_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva_tx` double DEFAULT '0',
  `localtax1_tx` double DEFAULT '0',
  `localtax1_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localtax2_tx` double DEFAULT '0',
  `localtax2_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `remise_percent` double DEFAULT NULL,
  `remise` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `subprice` double DEFAULT '0',
  `total_ht` double DEFAULT '0',
  `total_tva` double DEFAULT '0',
  `total_localtax1` double DEFAULT '0',
  `total_localtax2` double DEFAULT '0',
  `total_ttc` double DEFAULT '0',
  `product_type` int(11) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `info_bits` int(11) DEFAULT NULL,
  `buy_price_ht` double DEFAULT '0',
  `fk_product_fournisseur_price` int(11) DEFAULT NULL,
  `special_code` int(11) DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  `ref_fourn` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_multicurrency` int(11) DEFAULT NULL,
  `multicurrency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multicurrency_subprice` double DEFAULT '0',
  `multicurrency_total_ht` double DEFAULT '0',
  `multicurrency_total_tva` double DEFAULT '0',
  `multicurrency_total_ttc` double DEFAULT '0',
  PRIMARY KEY (`rowid`),
  KEY `idx_supplier_proposaldet_fk_product` (`fk_product`),
  KEY `idx_supplier_proposaldet_fk_supplier_proposal` (`fk_supplier_proposal`),
  KEY `fk_supplier_proposaldet_fk_unit` (`fk_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `supplier_proposaldet_extrafields`
--

DROP TABLE IF EXISTS `supplier_proposaldet_extrafields`;
CREATE TABLE IF NOT EXISTS `supplier_proposaldet_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_supplier_proposaldet_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `supplier_proposal_extrafields`
--

DROP TABLE IF EXISTS `supplier_proposal_extrafields`;
CREATE TABLE IF NOT EXISTS `supplier_proposal_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_supplier_proposal_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `takepos_floor_tables`
--

DROP TABLE IF EXISTS `takepos_floor_tables`;
CREATE TABLE IF NOT EXISTS `takepos_floor_tables` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leftpos` double DEFAULT NULL,
  `toppos` double DEFAULT NULL,
  `floor` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) DEFAULT '1',
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `track_id` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_project` int(11) DEFAULT NULL,
  `origin_email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_user_create` int(11) DEFAULT NULL,
  `fk_user_assign` int(11) DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `fk_statut` int(11) DEFAULT NULL,
  `resolution` int(11) DEFAULT NULL,
  `progress` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timing` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `severity_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `date_read` datetime DEFAULT NULL,
  `date_close` datetime DEFAULT NULL,
  `notify_tiers_at_create` tinyint(1) DEFAULT NULL,
  `email_msgid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_ticket_track_id` (`track_id`),
  UNIQUE KEY `uk_ticket_ref` (`ref`,`entity`),
  KEY `idx_ticket_entity` (`entity`),
  KEY `idx_ticket_fk_user_assign` (`fk_user_assign`),
  KEY `idx_ticket_fk_statut` (`fk_statut`),
  KEY `idx_ticket_fk_soc` (`fk_soc`),
  KEY `idx_ticket_fk_project` (`fk_project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `ticket_extrafields`
--

DROP TABLE IF EXISTS `ticket_extrafields`;
CREATE TABLE IF NOT EXISTS `ticket_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_ticket_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `tva`
--

DROP TABLE IF EXISTS `tva`;
CREATE TABLE IF NOT EXISTS `tva` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `datec` datetime DEFAULT NULL,
  `datep` date DEFAULT NULL,
  `datev` date DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `fk_typepayment` int(11) DEFAULT NULL,
  `num_payment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `note` text COLLATE utf8mb4_unicode_ci,
  `paye` smallint(6) NOT NULL,
  `fk_account` int(11) DEFAULT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref_ext` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_int` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` smallint(6) DEFAULT NULL,
  `employee` tinyint(1) DEFAULT '1',
  `fk_establishment` int(11) DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_encoding` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass_crypted` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass_temp` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_key` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civility` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_state` int(11) DEFAULT NULL,
  `fk_country` int(11) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `job` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` text COLLATE utf8mb4_unicode_ci,
  `socialnetworks` text COLLATE utf8mb4_unicode_ci,
  `fk_soc` int(11) DEFAULT NULL,
  `fk_socpeople` int(11) DEFAULT NULL,
  `fk_member` int(11) DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `fk_user_expense_validator` int(11) DEFAULT NULL,
  `fk_user_holiday_validator` int(11) DEFAULT NULL,
  `idpers1` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idpers2` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idpers3` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datelastlogin` datetime DEFAULT NULL,
  `datepreviouslogin` datetime DEFAULT NULL,
  `datelastpassvalidation` datetime DEFAULT NULL,
  `datestartvalidity` datetime DEFAULT NULL,
  `dateendvalidity` datetime DEFAULT NULL,
  `iplastlogin` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ippreviouslogin` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `egroupware_id` int(11) DEFAULT NULL,
  `ldap_sid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `openid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` tinyint(1) DEFAULT '1',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_barcode_type` int(11) DEFAULT NULL,
  `accountancy_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_holiday` int(11) DEFAULT NULL,
  `thm` double DEFAULT NULL,
  `tjm` double DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `salaryextra` double DEFAULT NULL,
  `dateemployment` date DEFAULT NULL,
  `dateemploymentend` date DEFAULT NULL,
  `weeklyhours` double DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_range` int(11) DEFAULT NULL,
  `default_c_exp_tax_cat` int(11) DEFAULT NULL,
  `fk_warehouse` int(11) DEFAULT NULL,
  `roles` json NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_user_login` (`login`,`entity`),
  UNIQUE KEY `uk_user_fk_member` (`fk_member`),
  UNIQUE KEY `uk_user_fk_socpeople` (`fk_socpeople`),
  UNIQUE KEY `uk_user_api_key` (`api_key`),
  KEY `idx_user_fk_societe` (`fk_soc`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`rowid`, `entity`, `ref_ext`, `ref_int`, `admin`, `employee`, `fk_establishment`, `datec`, `tms`, `fk_user_creat`, `fk_user_modif`, `login`, `pass_encoding`, `password`, `pass_crypted`, `pass_temp`, `api_key`, `gender`, `civility`, `lastname`, `firstname`, `address`, `zip`, `town`, `fk_state`, `fk_country`, `birth`, `job`, `office_phone`, `office_fax`, `user_mobile`, `personal_mobile`, `email`, `personal_email`, `signature`, `socialnetworks`, `fk_soc`, `fk_socpeople`, `fk_member`, `fk_user`, `fk_user_expense_validator`, `fk_user_holiday_validator`, `idpers1`, `idpers2`, `idpers3`, `note_public`, `note`, `model_pdf`, `datelastlogin`, `datepreviouslogin`, `datelastpassvalidation`, `datestartvalidity`, `dateendvalidity`, `iplastlogin`, `ippreviouslogin`, `egroupware_id`, `ldap_sid`, `openid`, `statut`, `photo`, `lang`, `color`, `barcode`, `fk_barcode_type`, `accountancy_code`, `nb_holiday`, `thm`, `tjm`, `salary`, `salaryextra`, `dateemployment`, `dateemploymentend`, `weeklyhours`, `import_key`, `default_range`, `default_c_exp_tax_cat`, `fk_warehouse`, `roles`) VALUES
(1, 1, NULL, NULL, 0, 1, 0, NULL, NULL, NULL, NULL, 'admin', NULL, '$2y$13$rEHXClGP6v5uUE8L.34Ga.57HJVUmTFuR5ltoMCVedRzEn88CxkCW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"ROLE_SUPER_ADMIN\"]');

-- --------------------------------------------------------

--
-- Structure de la table `usergroup`
--

DROP TABLE IF EXISTS `usergroup`;
CREATE TABLE IF NOT EXISTS `usergroup` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `note` text COLLATE utf8mb4_unicode_ci,
  `model_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_usergroup_name` (`nom`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `usergroup_extrafields`
--

DROP TABLE IF EXISTS `usergroup_extrafields`;
CREATE TABLE IF NOT EXISTS `usergroup_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_usergroup_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `usergroup_rights`
--

DROP TABLE IF EXISTS `usergroup_rights`;
CREATE TABLE IF NOT EXISTS `usergroup_rights` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_usergroup` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_id` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_usergroup_rights` (`entity`,`fk_usergroup`,`fk_id`),
  KEY `fk_usergroup_rights_fk_usergroup` (`fk_usergroup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `usergroup_user`
--

DROP TABLE IF EXISTS `usergroup_user`;
CREATE TABLE IF NOT EXISTS `usergroup_user` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) DEFAULT NULL,
  `fk_usergroup` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_usergroup_user` (`entity`,`fk_user`,`fk_usergroup`),
  KEY `fk_usergroup_user_fk_user` (`fk_user`),
  KEY `fk_usergroup_user_fk_usergroup` (`fk_usergroup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `user_alert`
--

DROP TABLE IF EXISTS `user_alert`;
CREATE TABLE IF NOT EXISTS `user_alert` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `fk_contact` int(11) DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `user_clicktodial`
--

DROP TABLE IF EXISTS `user_clicktodial`;
CREATE TABLE IF NOT EXISTS `user_clicktodial` (
  `fk_user` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poste` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`fk_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `user_employment`
--

DROP TABLE IF EXISTS `user_employment`;
CREATE TABLE IF NOT EXISTS `user_employment` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_ext` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `job` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `salary` double DEFAULT NULL,
  `salaryextra` double DEFAULT NULL,
  `weeklyhours` double DEFAULT NULL,
  `dateemployment` date DEFAULT NULL,
  `dateemploymentend` date DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_user_employment` (`ref`,`entity`),
  KEY `fk_user_employment_fk_user` (`fk_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `user_extrafields`
--

DROP TABLE IF EXISTS `user_extrafields`;
CREATE TABLE IF NOT EXISTS `user_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_user_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `user_param`
--

DROP TABLE IF EXISTS `user_param`;
CREATE TABLE IF NOT EXISTS `user_param` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `param` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_user_param` (`fk_user`,`param`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `user_rib`
--

DROP TABLE IF EXISTS `user_rib`;
CREATE TABLE IF NOT EXISTS `user_rib` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) NOT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `datec` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `label` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_banque` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_guichet` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cle_rib` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bic` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iban_prefix` varchar(34) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domiciliation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proprio` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `user_rights`
--

DROP TABLE IF EXISTS `user_rights`;
CREATE TABLE IF NOT EXISTS `user_rights` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT '1',
  `fk_id` int(11) NOT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_user_rights` (`entity`,`fk_user`,`fk_id`),
  KEY `fk_user_rights_fk_user_user` (`fk_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `website`
--

DROP TABLE IF EXISTS `website`;
CREATE TABLE IF NOT EXISTS `website` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `type_container` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'page',
  `entity` int(11) NOT NULL DEFAULT '1',
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maincolor` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maincolorbis` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherlang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `fk_default_home` int(11) DEFAULT NULL,
  `use_manifest` int(11) DEFAULT NULL,
  `virtualhost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `lastaccess` datetime DEFAULT NULL,
  `pageviews_month` bigint(20) UNSIGNED DEFAULT NULL,
  `pageviews_total` bigint(20) UNSIGNED DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_website_ref` (`ref`,`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `website_extrafields`
--

DROP TABLE IF EXISTS `website_extrafields`;
CREATE TABLE IF NOT EXISTS `website_extrafields` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_object` int(11) NOT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_website_extrafields` (`fk_object`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `website_page`
--

DROP TABLE IF EXISTS `website_page`;
CREATE TABLE IF NOT EXISTS `website_page` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_website` int(11) DEFAULT NULL,
  `type_container` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'page',
  `pageurl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aliasalt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_page` int(11) DEFAULT NULL,
  `allowed_in_frames` int(11) DEFAULT NULL,
  `htmlheader` text COLLATE utf8mb4_unicode_ci,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT '1',
  `grabbed_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `author_alias` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `object_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_object` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_website_page_url` (`fk_website`,`pageurl`),
  KEY `IDX_160F5F54B74060CB` (`fk_website`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `workstation_workstation`
--

DROP TABLE IF EXISTS `workstation_workstation`;
CREATE TABLE IF NOT EXISTS `workstation_workstation` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_creat` int(11) DEFAULT NULL,
  `ref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '(PROV)',
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_public` text COLLATE utf8mb4_unicode_ci,
  `entity` int(11) DEFAULT '1',
  `note_private` text COLLATE utf8mb4_unicode_ci,
  `date_creation` datetime NOT NULL,
  `tms` datetime DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `nb_operators_required` int(11) DEFAULT NULL,
  `thm_operator_estimated` double DEFAULT NULL,
  `thm_machine_estimated` double DEFAULT NULL,
  PRIMARY KEY (`rowid`),
  KEY `idx_workstation_workstation_ref` (`ref`),
  KEY `idx_workstation_workstation_status` (`status`),
  KEY `idx_workstation_workstation_rowid` (`rowid`),
  KEY `fk_workstation_workstation_fk_user_creat` (`fk_user_creat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `workstation_workstation_resource`
--

DROP TABLE IF EXISTS `workstation_workstation_resource`;
CREATE TABLE IF NOT EXISTS `workstation_workstation_resource` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT NULL,
  `fk_resource` int(11) DEFAULT NULL,
  `fk_workstation` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `workstation_workstation_usergroup`
--

DROP TABLE IF EXISTS `workstation_workstation_usergroup`;
CREATE TABLE IF NOT EXISTS `workstation_workstation_usergroup` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `tms` datetime DEFAULT NULL,
  `fk_usergroup` int(11) DEFAULT NULL,
  `fk_workstation` int(11) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `zapier_hook`
--

DROP TABLE IF EXISTS `zapier_hook`;
CREATE TABLE IF NOT EXISTS `zapier_hook` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
  `entity` int(11) NOT NULL DEFAULT '1',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date_creation` datetime NOT NULL,
  `fk_user` int(11) NOT NULL,
  `tms` datetime DEFAULT CURRENT_TIMESTAMP,
  `import_key` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accounting_account`
--
ALTER TABLE `accounting_account`
  ADD CONSTRAINT `FK_44BEAB9350F7F1E2` FOREIGN KEY (`fk_pcg_version`) REFERENCES `accounting_system` (`pcg_version`);

--
-- Contraintes pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD CONSTRAINT `FK_90D3F060546B3269` FOREIGN KEY (`fk_adherent_type`) REFERENCES `adherent_type` (`rowid`),
  ADD CONSTRAINT `FK_90D3F060728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`);

--
-- Contraintes pour la table `asset`
--
ALTER TABLE `asset`
  ADD CONSTRAINT `FK_2AF5A5C98D45872` FOREIGN KEY (`fk_asset_type`) REFERENCES `asset_type` (`rowid`);

--
-- Contraintes pour la table `bank_account`
--
ALTER TABLE `bank_account`
  ADD CONSTRAINT `FK_53A23E0A25020DCA` FOREIGN KEY (`fk_accountancy_journal`) REFERENCES `accounting_journal` (`rowid`);

--
-- Contraintes pour la table `bom_bom`
--
ALTER TABLE `bom_bom`
  ADD CONSTRAINT `FK_101EE6F6AEB84554` FOREIGN KEY (`fk_user_creat`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `bom_bomline`
--
ALTER TABLE `bom_bomline`
  ADD CONSTRAINT `FK_16807E2488D6618F` FOREIGN KEY (`fk_bom`) REFERENCES `bom_bom` (`rowid`);

--
-- Contraintes pour la table `boxes`
--
ALTER TABLE `boxes`
  ADD CONSTRAINT `FK_CDF1B2E9D8177B3F` FOREIGN KEY (`box_id`) REFERENCES `boxes_def` (`rowid`);

--
-- Contraintes pour la table `budget_lines`
--
ALTER TABLE `budget_lines`
  ADD CONSTRAINT `FK_24101960535C9FEB` FOREIGN KEY (`fk_budget`) REFERENCES `budget` (`rowid`);

--
-- Contraintes pour la table `categorie_lang`
--
ALTER TABLE `categorie_lang`
  ADD CONSTRAINT `FK_4620033534645A1F` FOREIGN KEY (`fk_category`) REFERENCES `categorie` (`rowid`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_6EEAA67D70BBF439` FOREIGN KEY (`fk_projet`) REFERENCES `projet` (`rowid`),
  ADD CONSTRAINT `FK_6EEAA67D728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`),
  ADD CONSTRAINT `FK_6EEAA67D9EAB0434` FOREIGN KEY (`fk_user_valid`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_6EEAA67DAC00A97B` FOREIGN KEY (`fk_user_cloture`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_6EEAA67DB10B6FC1` FOREIGN KEY (`fk_user_author`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `commandedet`
--
ALTER TABLE `commandedet`
  ADD CONSTRAINT `FK_1BD67B4D5085D26D` FOREIGN KEY (`fk_unit`) REFERENCES `c_units` (`rowid`),
  ADD CONSTRAINT `FK_1BD67B4D5CC2E5A3` FOREIGN KEY (`fk_commande`) REFERENCES `commande` (`rowid`),
  ADD CONSTRAINT `FK_1BD67B4DD9F95825` FOREIGN KEY (`fk_commandefourndet`) REFERENCES `commande_fournisseurdet` (`rowid`);

--
-- Contraintes pour la table `commande_fournisseur`
--
ALTER TABLE `commande_fournisseur`
  ADD CONSTRAINT `FK_7F6F4F53728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`);

--
-- Contraintes pour la table `commande_fournisseurdet`
--
ALTER TABLE `commande_fournisseurdet`
  ADD CONSTRAINT `FK_3B6B2FBC5085D26D` FOREIGN KEY (`fk_unit`) REFERENCES `c_units` (`rowid`);

--
-- Contraintes pour la table `commande_fournisseur_dispatch`
--
ALTER TABLE `commande_fournisseur_dispatch`
  ADD CONSTRAINT `FK_943A0DD0318F52BF` FOREIGN KEY (`fk_reception`) REFERENCES `reception` (`rowid`);

--
-- Contraintes pour la table `contrat`
--
ALTER TABLE `contrat`
  ADD CONSTRAINT `FK_60349993728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`),
  ADD CONSTRAINT `FK_60349993B10B6FC1` FOREIGN KEY (`fk_user_author`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `contratdet`
--
ALTER TABLE `contratdet`
  ADD CONSTRAINT `FK_811F530623653981` FOREIGN KEY (`fk_product`) REFERENCES `product` (`rowid`),
  ADD CONSTRAINT `FK_811F53065085D26D` FOREIGN KEY (`fk_unit`) REFERENCES `c_units` (`rowid`),
  ADD CONSTRAINT `FK_811F5306901BA4BF` FOREIGN KEY (`fk_contrat`) REFERENCES `contrat` (`rowid`);

--
-- Contraintes pour la table `contratdet_log`
--
ALTER TABLE `contratdet_log`
  ADD CONSTRAINT `FK_DE20032271719995` FOREIGN KEY (`fk_contratdet`) REFERENCES `contratdet` (`rowid`);

--
-- Contraintes pour la table `c_departements`
--
ALTER TABLE `c_departements`
  ADD CONSTRAINT `FK_BB5C7EAC2FCC99E6` FOREIGN KEY (`fk_region`) REFERENCES `c_regions` (`code_region`);

--
-- Contraintes pour la table `c_regions`
--
ALTER TABLE `c_regions`
  ADD CONSTRAINT `FK_30EAEE28B8A1E290` FOREIGN KEY (`fk_pays`) REFERENCES `c_country` (`rowid`);

--
-- Contraintes pour la table `c_ziptown`
--
ALTER TABLE `c_ziptown`
  ADD CONSTRAINT `FK_FC726125784C97B5` FOREIGN KEY (`fk_county`) REFERENCES `c_departements` (`rowid`),
  ADD CONSTRAINT `FK_FC726125B8A1E290` FOREIGN KEY (`fk_pays`) REFERENCES `c_country` (`rowid`);

--
-- Contraintes pour la table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `FK_3781EC10728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`),
  ADD CONSTRAINT `FK_3781EC109EAB0434` FOREIGN KEY (`fk_user_valid`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_3781EC10B10B6FC1` FOREIGN KEY (`fk_user_author`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `deliverydet`
--
ALTER TABLE `deliverydet`
  ADD CONSTRAINT `FK_8B2F3C385A9AFCE` FOREIGN KEY (`fk_delivery`) REFERENCES `delivery` (`rowid`);

--
-- Contraintes pour la table `ecm_directories`
--
ALTER TABLE `ecm_directories`
  ADD CONSTRAINT `FK_BC7E7C43215C282F` FOREIGN KEY (`fk_user_m`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_BC7E7C43C6E40528` FOREIGN KEY (`fk_user_c`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `element_contact`
--
ALTER TABLE `element_contact`
  ADD CONSTRAINT `FK_BB89A66C6565973A` FOREIGN KEY (`fk_c_type_contact`) REFERENCES `c_type_contact` (`rowid`);

--
-- Contraintes pour la table `emailcollector_emailcollectoraction`
--
ALTER TABLE `emailcollector_emailcollectoraction`
  ADD CONSTRAINT `FK_74AB30B59E73468C` FOREIGN KEY (`fk_emailcollector`) REFERENCES `emailcollector_emailcollector` (`rowid`);

--
-- Contraintes pour la table `emailcollector_emailcollectorfilter`
--
ALTER TABLE `emailcollector_emailcollectorfilter`
  ADD CONSTRAINT `FK_4CA3E33A9E73468C` FOREIGN KEY (`fk_emailcollector`) REFERENCES `emailcollector_emailcollector` (`rowid`);

--
-- Contraintes pour la table `eventorganization_conferenceorboothattendee`
--
ALTER TABLE `eventorganization_conferenceorboothattendee`
  ADD CONSTRAINT `FK_AFC4E17D28F34ECA` FOREIGN KEY (`fk_actioncomm`) REFERENCES `actioncomm` (`id`),
  ADD CONSTRAINT `FK_AFC4E17D728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`);

--
-- Contraintes pour la table `expedition`
--
ALTER TABLE `expedition`
  ADD CONSTRAINT `FK_692907E728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`),
  ADD CONSTRAINT `FK_692907E9EAB0434` FOREIGN KEY (`fk_user_valid`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_692907EACA0AB1A` FOREIGN KEY (`fk_shipping_method`) REFERENCES `c_shipment_mode` (`rowid`),
  ADD CONSTRAINT `FK_692907EB10B6FC1` FOREIGN KEY (`fk_user_author`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `expeditiondet`
--
ALTER TABLE `expeditiondet`
  ADD CONSTRAINT `FK_CE52AD07F6FC5AED` FOREIGN KEY (`fk_expedition`) REFERENCES `expedition` (`rowid`);

--
-- Contraintes pour la table `expeditiondet_batch`
--
ALTER TABLE `expeditiondet_batch`
  ADD CONSTRAINT `FK_1DB4A9B4AA18D8C5` FOREIGN KEY (`fk_expeditiondet`) REFERENCES `expeditiondet` (`rowid`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `FK_FE86641070BBF439` FOREIGN KEY (`fk_projet`) REFERENCES `projet` (`rowid`),
  ADD CONSTRAINT `FK_FE866410728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`),
  ADD CONSTRAINT `FK_FE8664107F13843D` FOREIGN KEY (`fk_facture_source`) REFERENCES `facture` (`rowid`),
  ADD CONSTRAINT `FK_FE8664109EAB0434` FOREIGN KEY (`fk_user_valid`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_FE866410B10B6FC1` FOREIGN KEY (`fk_user_author`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `facturedet`
--
ALTER TABLE `facturedet`
  ADD CONSTRAINT `FK_E611BB115085D26D` FOREIGN KEY (`fk_unit`) REFERENCES `c_units` (`rowid`),
  ADD CONSTRAINT `FK_E611BB11EA9593C` FOREIGN KEY (`fk_facture`) REFERENCES `facture` (`rowid`);

--
-- Contraintes pour la table `facturedet_rec`
--
ALTER TABLE `facturedet_rec`
  ADD CONSTRAINT `FK_127096805085D26D` FOREIGN KEY (`fk_unit`) REFERENCES `c_units` (`rowid`);

--
-- Contraintes pour la table `facture_fourn`
--
ALTER TABLE `facture_fourn`
  ADD CONSTRAINT `FK_C418E78270BBF439` FOREIGN KEY (`fk_projet`) REFERENCES `projet` (`rowid`),
  ADD CONSTRAINT `FK_C418E782728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`),
  ADD CONSTRAINT `FK_C418E7829EAB0434` FOREIGN KEY (`fk_user_valid`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_C418E782B10B6FC1` FOREIGN KEY (`fk_user_author`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `facture_fourn_det`
--
ALTER TABLE `facture_fourn_det`
  ADD CONSTRAINT `FK_47F9AFB65085D26D` FOREIGN KEY (`fk_unit`) REFERENCES `c_units` (`rowid`),
  ADD CONSTRAINT `FK_47F9AFB6A0529240` FOREIGN KEY (`fk_facture_fourn`) REFERENCES `facture_fourn` (`rowid`);

--
-- Contraintes pour la table `facture_rec`
--
ALTER TABLE `facture_rec`
  ADD CONSTRAINT `FK_175076370BBF439` FOREIGN KEY (`fk_projet`) REFERENCES `projet` (`rowid`),
  ADD CONSTRAINT `FK_1750763728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`),
  ADD CONSTRAINT `FK_1750763B10B6FC1` FOREIGN KEY (`fk_user_author`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `fichinter`
--
ALTER TABLE `fichinter`
  ADD CONSTRAINT `FK_E28F562D728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`);

--
-- Contraintes pour la table `fichinterdet`
--
ALTER TABLE `fichinterdet`
  ADD CONSTRAINT `FK_5E0E211B83D681BD` FOREIGN KEY (`fk_fichinter`) REFERENCES `fichinter` (`rowid`);

--
-- Contraintes pour la table `fichinter_rec`
--
ALTER TABLE `fichinter_rec`
  ADD CONSTRAINT `FK_E118F1E770BBF439` FOREIGN KEY (`fk_projet`) REFERENCES `projet` (`rowid`),
  ADD CONSTRAINT `FK_E118F1E7B10B6FC1` FOREIGN KEY (`fk_user_author`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `knowledgemanagement_knowledgerecord`
--
ALTER TABLE `knowledgemanagement_knowledgerecord`
  ADD CONSTRAINT `FK_AA904D34AEB84554` FOREIGN KEY (`fk_user_creat`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `mrp_mo`
--
ALTER TABLE `mrp_mo`
  ADD CONSTRAINT `FK_873BAEBAAEB84554` FOREIGN KEY (`fk_user_creat`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `mrp_production`
--
ALTER TABLE `mrp_production`
  ADD CONSTRAINT `FK_CF5F3EFA23653981` FOREIGN KEY (`fk_product`) REFERENCES `product` (`rowid`),
  ADD CONSTRAINT `FK_CF5F3EFA56C9055C` FOREIGN KEY (`fk_mo`) REFERENCES `mrp_mo` (`rowid`),
  ADD CONSTRAINT `FK_CF5F3EFACE15285C` FOREIGN KEY (`fk_stock_movement`) REFERENCES `stock_mouvement` (`rowid`);

--
-- Contraintes pour la table `paiement_facture`
--
ALTER TABLE `paiement_facture`
  ADD CONSTRAINT `FK_E3BCD4E183F439C0` FOREIGN KEY (`fk_paiement`) REFERENCES `paiement` (`rowid`),
  ADD CONSTRAINT `FK_E3BCD4E1EA9593C` FOREIGN KEY (`fk_facture`) REFERENCES `facture` (`rowid`);

--
-- Contraintes pour la table `payment_salary`
--
ALTER TABLE `payment_salary`
  ADD CONSTRAINT `FK_B12B20E71AD0877` FOREIGN KEY (`fk_user`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `prelevement_facture`
--
ALTER TABLE `prelevement_facture`
  ADD CONSTRAINT `FK_1D69B30B509CA962` FOREIGN KEY (`fk_prelevement_lignes`) REFERENCES `prelevement_lignes` (`rowid`);

--
-- Contraintes pour la table `prelevement_lignes`
--
ALTER TABLE `prelevement_lignes`
  ADD CONSTRAINT `FK_E334E4C2E27A0718` FOREIGN KEY (`fk_prelevement_bons`) REFERENCES `prelevement_bons` (`rowid`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD5085D26D` FOREIGN KEY (`fk_unit`) REFERENCES `c_units` (`rowid`),
  ADD CONSTRAINT `FK_D34A04ADA1BB03FA` FOREIGN KEY (`fk_barcode_type`) REFERENCES `c_barcode_type` (`rowid`),
  ADD CONSTRAINT `FK_D34A04ADA35CF44A` FOREIGN KEY (`fk_country`) REFERENCES `c_country` (`rowid`),
  ADD CONSTRAINT `FK_D34A04ADA64FAB3C` FOREIGN KEY (`finished`) REFERENCES `c_product_nature` (`code`),
  ADD CONSTRAINT `FK_D34A04ADB3E62DA3` FOREIGN KEY (`fk_default_warehouse`) REFERENCES `entrepot` (`rowid`);

--
-- Contraintes pour la table `product_batch`
--
ALTER TABLE `product_batch`
  ADD CONSTRAINT `FK_595729888E2058FE` FOREIGN KEY (`fk_product_stock`) REFERENCES `product_stock` (`rowid`);

--
-- Contraintes pour la table `product_customer_price`
--
ALTER TABLE `product_customer_price`
  ADD CONSTRAINT `FK_579429CE1AD0877` FOREIGN KEY (`fk_user`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_579429CE23653981` FOREIGN KEY (`fk_product`) REFERENCES `product` (`rowid`),
  ADD CONSTRAINT `FK_579429CE728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`);

--
-- Contraintes pour la table `product_fournisseur_price`
--
ALTER TABLE `product_fournisseur_price`
  ADD CONSTRAINT `FK_631BA57F1AD0877` FOREIGN KEY (`fk_user`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_631BA57F23653981` FOREIGN KEY (`fk_product`) REFERENCES `product` (`rowid`),
  ADD CONSTRAINT `FK_631BA57FA1BB03FA` FOREIGN KEY (`fk_barcode_type`) REFERENCES `c_barcode_type` (`rowid`);

--
-- Contraintes pour la table `product_lang`
--
ALTER TABLE `product_lang`
  ADD CONSTRAINT `FK_BCE1A6C323653981` FOREIGN KEY (`fk_product`) REFERENCES `product` (`rowid`);

--
-- Contraintes pour la table `product_price`
--
ALTER TABLE `product_price`
  ADD CONSTRAINT `FK_6B94598523653981` FOREIGN KEY (`fk_product`) REFERENCES `product` (`rowid`),
  ADD CONSTRAINT `FK_6B945985B10B6FC1` FOREIGN KEY (`fk_user_author`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `product_price_by_qty`
--
ALTER TABLE `product_price_by_qty`
  ADD CONSTRAINT `FK_64D66F8EFDE2C47` FOREIGN KEY (`fk_product_price`) REFERENCES `product_price` (`rowid`);

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_50159CA9728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`);

--
-- Contraintes pour la table `projet_task`
--
ALTER TABLE `projet_task`
  ADD CONSTRAINT `FK_25AC340A70BBF439` FOREIGN KEY (`fk_projet`) REFERENCES `projet` (`rowid`),
  ADD CONSTRAINT `FK_25AC340A9EAB0434` FOREIGN KEY (`fk_user_valid`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_25AC340AAEB84554` FOREIGN KEY (`fk_user_creat`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `propal`
--
ALTER TABLE `propal`
  ADD CONSTRAINT `FK_36A4E75D70BBF439` FOREIGN KEY (`fk_projet`) REFERENCES `projet` (`rowid`),
  ADD CONSTRAINT `FK_36A4E75D728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`),
  ADD CONSTRAINT `FK_36A4E75D9EAB0434` FOREIGN KEY (`fk_user_valid`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_36A4E75DAC00A97B` FOREIGN KEY (`fk_user_cloture`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_36A4E75DB10B6FC1` FOREIGN KEY (`fk_user_author`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_36A4E75DDB66654C` FOREIGN KEY (`fk_user_signature`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `propaldet`
--
ALTER TABLE `propaldet`
  ADD CONSTRAINT `FK_5B9D2F26160A8FCD` FOREIGN KEY (`fk_propal`) REFERENCES `propal` (`rowid`),
  ADD CONSTRAINT `FK_5B9D2F265085D26D` FOREIGN KEY (`fk_unit`) REFERENCES `c_units` (`rowid`);

--
-- Contraintes pour la table `reception`
--
ALTER TABLE `reception`
  ADD CONSTRAINT `FK_50D6852F728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`),
  ADD CONSTRAINT `FK_50D6852F9EAB0434` FOREIGN KEY (`fk_user_valid`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_50D6852FACA0AB1A` FOREIGN KEY (`fk_shipping_method`) REFERENCES `c_shipment_mode` (`rowid`),
  ADD CONSTRAINT `FK_50D6852FB10B6FC1` FOREIGN KEY (`fk_user_author`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `recruitment_recruitmentcandidature`
--
ALTER TABLE `recruitment_recruitmentcandidature`
  ADD CONSTRAINT `FK_6D4697B8AEB84554` FOREIGN KEY (`fk_user_creat`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `recruitment_recruitmentjobposition`
--
ALTER TABLE `recruitment_recruitmentjobposition`
  ADD CONSTRAINT `FK_26F6F61333550021` FOREIGN KEY (`fk_user_supervisor`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_26F6F613AB6857D5` FOREIGN KEY (`fk_user_recruiter`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_26F6F613AEB84554` FOREIGN KEY (`fk_user_creat`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_26F6F613BFA5C42C` FOREIGN KEY (`fk_establishment`) REFERENCES `establishment` (`rowid`);

--
-- Contraintes pour la table `resource`
--
ALTER TABLE `resource`
  ADD CONSTRAINT `FK_BC91F416A35CF44A` FOREIGN KEY (`fk_country`) REFERENCES `c_country` (`rowid`);

--
-- Contraintes pour la table `societe_account`
--
ALTER TABLE `societe_account`
  ADD CONSTRAINT `FK_B8F0DB27728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`),
  ADD CONSTRAINT `FK_B8F0DB27B74060CB` FOREIGN KEY (`fk_website`) REFERENCES `website` (`rowid`);

--
-- Contraintes pour la table `societe_contacts`
--
ALTER TABLE `societe_contacts`
  ADD CONSTRAINT `FK_47340164643F13C4` FOREIGN KEY (`fk_socpeople`) REFERENCES `socpeople` (`rowid`),
  ADD CONSTRAINT `FK_473401646565973A` FOREIGN KEY (`fk_c_type_contact`) REFERENCES `c_type_contact` (`rowid`),
  ADD CONSTRAINT `FK_47340164728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`);

--
-- Contraintes pour la table `societe_rib`
--
ALTER TABLE `societe_rib`
  ADD CONSTRAINT `FK_4D967BEA728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`);

--
-- Contraintes pour la table `socpeople`
--
ALTER TABLE `socpeople`
  ADD CONSTRAINT `FK_566C454728A85CF` FOREIGN KEY (`fk_soc`) REFERENCES `societe` (`rowid`),
  ADD CONSTRAINT `FK_566C454AEB84554` FOREIGN KEY (`fk_user_creat`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `supplier_proposaldet`
--
ALTER TABLE `supplier_proposaldet`
  ADD CONSTRAINT `FK_B4F2DE505085D26D` FOREIGN KEY (`fk_unit`) REFERENCES `c_units` (`rowid`),
  ADD CONSTRAINT `FK_B4F2DE50FC5B720B` FOREIGN KEY (`fk_supplier_proposal`) REFERENCES `supplier_proposal` (`rowid`);

--
-- Contraintes pour la table `usergroup_rights`
--
ALTER TABLE `usergroup_rights`
  ADD CONSTRAINT `FK_254072B82B3DAF87` FOREIGN KEY (`fk_usergroup`) REFERENCES `usergroup` (`rowid`);

--
-- Contraintes pour la table `usergroup_user`
--
ALTER TABLE `usergroup_user`
  ADD CONSTRAINT `FK_E9B5A1C01AD0877` FOREIGN KEY (`fk_user`) REFERENCES `user` (`rowid`),
  ADD CONSTRAINT `FK_E9B5A1C02B3DAF87` FOREIGN KEY (`fk_usergroup`) REFERENCES `usergroup` (`rowid`);

--
-- Contraintes pour la table `user_employment`
--
ALTER TABLE `user_employment`
  ADD CONSTRAINT `FK_186F5A741AD0877` FOREIGN KEY (`fk_user`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `user_rights`
--
ALTER TABLE `user_rights`
  ADD CONSTRAINT `FK_6432CA3E1AD0877` FOREIGN KEY (`fk_user`) REFERENCES `user` (`rowid`);

--
-- Contraintes pour la table `website_page`
--
ALTER TABLE `website_page`
  ADD CONSTRAINT `FK_160F5F54B74060CB` FOREIGN KEY (`fk_website`) REFERENCES `website` (`rowid`);

--
-- Contraintes pour la table `workstation_workstation`
--
ALTER TABLE `workstation_workstation`
  ADD CONSTRAINT `FK_59B783A9AEB84554` FOREIGN KEY (`fk_user_creat`) REFERENCES `user` (`rowid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
