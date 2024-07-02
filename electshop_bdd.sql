-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 12 Juin 2022 à 14:41
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pfc_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `table_cat`
--

CREATE TABLE IF NOT EXISTS `table_cat` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(255) NOT NULL,
  `aff_ach` int(1) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `table_cat`
--

INSERT INTO `table_cat` (`id_categorie`, `cat_nom`, `aff_ach`) VALUES
(16, 'Technologie:', 1),
(17, 'Automobile:', 1),
(18, 'Sports et Loisirs ', 1),
(21, 'Articles MÃ©nagÃ¨res', 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_client`
--

CREATE TABLE IF NOT EXISTS `table_client` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `nom_c` varchar(100) NOT NULL,
  `prenom_c` varchar(100) NOT NULL,
  `email_c` varchar(100) NOT NULL,
  `tel_c` varchar(50) NOT NULL,
  `id_pays` int(11) NOT NULL,
  `add_c` text NOT NULL,
  `willaya_c` varchar(100) NOT NULL,
  `ville_c` varchar(100) NOT NULL,
  `code_postal_c` varchar(30) NOT NULL,
  `pass_c` varchar(100) NOT NULL,
  `dateins_c` varchar(100) NOT NULL,
  `post` varchar(20) NOT NULL,
  `num_cni_pc` int(20) NOT NULL,
  `num_reg` int(30) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `table_client`
--

INSERT INTO `table_client` (`id_c`, `nom_c`, `prenom_c`, `email_c`, `tel_c`, `id_pays`, `add_c`, `willaya_c`, `ville_c`, `code_postal_c`, `pass_c`, `dateins_c`, `post`, `num_cni_pc`, `num_reg`) VALUES
(2, 'BOUAICHI', 'Billal', 'boutique@gmail.com', '0560464466', 3, '15 ABBAN REMTANE', 'bejaia', 'akbou', '06000', '886a9f9edb12bdd4ac1d58f0283b6855', '2022-04-21 01:06:38', 'boutique', 107217850, 2147483647),
(3, 'client ', 'client', 'client@gmail.com', '0560464466', 3, 'elhad', 'bejaia', 'timezrit', '06019', '62608e08adc29a8d6dbc9754e659f125', '2022-04-21 01:17:06', 'client', 0, 0),
(4, 'BOUREDJIOUA', '', 'meriem@gmail.com', '', 3, '', '', '', '', '9a6ac4ed5bfdcd39e143838774b6b02f', '2022-05-26 12:14:37', 'client', 0, 0),
(5, 'bbbb', '', 'bbbb@gmail.com', '', 3, '', '', '', '', '65ba841e01d6db7733e90a5b7f9e6f80', '2022-05-26 01:45:44', 'client', 0, 0),
(6, 'mimi', '', 'mimi@gmail.com', '', 3, '', '', '', '', 'e10adc3949ba59abbe56e057f20f883e', '2022-05-26 03:13:31', 'client', 0, 0),
(7, '', 'adel', 'adel@gmail.com', '', 3, '', '', '', '', '94c93d4f9686cfeae29e9cbc3230cbf9', '2022-06-07 12:31:56', 'boutique', 107219950, 2147483647);

-- --------------------------------------------------------

--
-- Structure de la table `table_panier`
--

CREATE TABLE IF NOT EXISTS `table_panier` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `idper` int(4) NOT NULL,
  `idproduit` int(4) NOT NULL,
  `quant` int(6) NOT NULL,
  `idboutique` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `table_pays`
--

CREATE TABLE IF NOT EXISTS `table_pays` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=246 ;

--
-- Contenu de la table `table_pays`
--

INSERT INTO `table_pays` (`country_id`, `country_name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'American Samoa'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antarctica'),
(9, 'Antigua and Barbuda'),
(10, 'Argentina'),
(11, 'Armenia'),
(12, 'Aruba'),
(13, 'Australia'),
(14, 'Austria'),
(15, 'Azerbaijan'),
(16, 'Bahamas'),
(17, 'Bahrain'),
(18, 'Bangladesh'),
(19, 'Barbados'),
(20, 'Belarus'),
(21, 'Belgium'),
(22, 'Belize'),
(23, 'Benin'),
(24, 'Bermuda'),
(25, 'Bhutan'),
(26, 'Bolivia'),
(27, 'Bosnia and Herzegovina'),
(28, 'Botswana'),
(29, 'Bouvet Island'),
(30, 'Brazil'),
(31, 'British Indian Ocean Territory'),
(32, 'Brunei Darussalam'),
(33, 'Bulgaria'),
(34, 'Burkina Faso'),
(35, 'Burundi'),
(36, 'Cambodia'),
(37, 'Cameroon'),
(38, 'Canada'),
(39, 'Cape Verde'),
(40, 'Cayman Islands'),
(41, 'Central African Republic'),
(42, 'Chad'),
(43, 'Chile'),
(44, 'China'),
(45, 'Christmas Island'),
(46, 'Cocos (Keeling) Islands'),
(47, 'Colombia'),
(48, 'Comoros'),
(49, 'Congo'),
(50, 'Cook Islands'),
(51, 'Costa Rica'),
(52, 'Croatia (Hrvatska)'),
(53, 'Cuba'),
(54, 'Cyprus'),
(55, 'Czech Republic'),
(56, 'Denmark'),
(57, 'Djibouti'),
(58, 'Dominica'),
(59, 'Dominican Republic'),
(60, 'East Timor'),
(61, 'Ecuador'),
(62, 'Egypt'),
(63, 'El Salvador'),
(64, 'Equatorial Guinea'),
(65, 'Eritrea'),
(66, 'Estonia'),
(67, 'Ethiopia'),
(68, 'Falkland Islands (Malvinas)'),
(69, 'Faroe Islands'),
(70, 'Fiji'),
(71, 'Finland'),
(72, 'France'),
(73, 'France, Metropolitan'),
(74, 'French Guiana'),
(75, 'French Polynesia'),
(76, 'French Southern Territories'),
(77, 'Gabon'),
(78, 'Gambia'),
(79, 'Georgia'),
(80, 'Germany'),
(81, 'Ghana'),
(82, 'Gibraltar'),
(83, 'Guernsey'),
(84, 'Greece'),
(85, 'Greenland'),
(86, 'Grenada'),
(87, 'Guadeloupe'),
(88, 'Guam'),
(89, 'Guatemala'),
(90, 'Guinea'),
(91, 'Guinea-Bissau'),
(92, 'Guyana'),
(93, 'Haiti'),
(94, 'Heard and Mc Donald Islands'),
(95, 'Honduras'),
(96, 'Hong Kong'),
(97, 'Hungary'),
(98, 'Iceland'),
(99, 'India'),
(100, 'Isle of Man'),
(101, 'Indonesia'),
(102, 'Iran (Islamic Republic of)'),
(103, 'Iraq'),
(104, 'Ireland'),
(105, 'Israel'),
(106, 'Italy'),
(107, 'Ivory Coast'),
(108, 'Jersey'),
(109, 'Jamaica'),
(110, 'Japan'),
(111, 'Jordan'),
(112, 'Kazakhstan'),
(113, 'Kenya'),
(114, 'Kiribati'),
(115, 'Korea, Democratic People''s Republic of'),
(116, 'Korea, Republic of'),
(117, 'Kosovo'),
(118, 'Kuwait'),
(119, 'Kyrgyzstan'),
(120, 'Lao People''s Democratic Republic'),
(121, 'Latvia'),
(122, 'Lebanon'),
(123, 'Lesotho'),
(124, 'Liberia'),
(125, 'Libyan Arab Jamahiriya'),
(126, 'Liechtenstein'),
(127, 'Lithuania'),
(128, 'Luxembourg'),
(129, 'Macau'),
(130, 'Macedonia'),
(131, 'Madagascar'),
(132, 'Malawi'),
(133, 'Malaysia'),
(134, 'Maldives'),
(135, 'Mali'),
(136, 'Malta'),
(137, 'Marshall Islands'),
(138, 'Martinique'),
(139, 'Mauritania'),
(140, 'Mauritius'),
(141, 'Mayotte'),
(142, 'Mexico'),
(143, 'Micronesia, Federated States of'),
(144, 'Moldova, Republic of'),
(145, 'Monaco'),
(146, 'Mongolia'),
(147, 'Montenegro'),
(148, 'Montserrat'),
(149, 'Morocco'),
(150, 'Mozambique'),
(151, 'Myanmar'),
(152, 'Namibia'),
(153, 'Nauru'),
(154, 'Nepal'),
(155, 'Netherlands'),
(156, 'Netherlands Antilles'),
(157, 'New Caledonia'),
(158, 'New Zealand'),
(159, 'Nicaragua'),
(160, 'Niger'),
(161, 'Nigeria'),
(162, 'Niue'),
(163, 'Norfolk Island'),
(164, 'Northern Mariana Islands'),
(165, 'Norway'),
(166, 'Oman'),
(167, 'Pakistan'),
(168, 'Palau'),
(169, 'Palestine'),
(170, 'Panama'),
(171, 'Papua New Guinea'),
(172, 'Paraguay'),
(173, 'Peru'),
(174, 'Philippines'),
(175, 'Pitcairn'),
(176, 'Poland'),
(177, 'Portugal'),
(178, 'Puerto Rico'),
(179, 'Qatar'),
(180, 'Reunion'),
(181, 'Romania'),
(182, 'Russian Federation'),
(183, 'Rwanda'),
(184, 'Saint Kitts and Nevis'),
(185, 'Saint Lucia'),
(186, 'Saint Vincent and the Grenadines'),
(187, 'Samoa'),
(188, 'San Marino'),
(189, 'Sao Tome and Principe'),
(190, 'Saudi Arabia'),
(191, 'Senegal'),
(192, 'Serbia'),
(193, 'Seychelles'),
(194, 'Sierra Leone'),
(195, 'Singapore'),
(196, 'Slovakia'),
(197, 'Slovenia'),
(198, 'Solomon Islands'),
(199, 'Somalia'),
(200, 'South Africa'),
(201, 'South Georgia South Sandwich Islands'),
(202, 'Spain'),
(203, 'Sri Lanka'),
(204, 'St. Helena'),
(205, 'St. Pierre and Miquelon'),
(206, 'Sudan'),
(207, 'Suriname'),
(208, 'Svalbard and Jan Mayen Islands'),
(209, 'Swaziland'),
(210, 'Sweden'),
(211, 'Switzerland'),
(212, 'Syrian Arab Republic'),
(213, 'Taiwan'),
(214, 'Tajikistan'),
(215, 'Tanzania, United Republic of'),
(216, 'Thailand'),
(217, 'Togo'),
(218, 'Tokelau'),
(219, 'Tonga'),
(220, 'Trinidad and Tobago'),
(221, 'Tunisia'),
(222, 'Turkey'),
(223, 'Turkmenistan'),
(224, 'Turks and Caicos Islands'),
(225, 'Tuvalu'),
(226, 'Uganda'),
(227, 'Ukraine'),
(228, 'United Arab Emirates'),
(229, 'United Kingdom'),
(230, 'United States'),
(231, 'United States minor outlying islands'),
(232, 'Uruguay'),
(233, 'Uzbekistan'),
(234, 'Vanuatu'),
(235, 'Vatican City State'),
(236, 'Venezuela'),
(237, 'Vietnam'),
(238, 'Virgin Islands (British)'),
(239, 'Virgin Islands (U.S.)'),
(240, 'Wallis and Futuna Islands'),
(241, 'Western Sahara'),
(242, 'Yemen'),
(243, 'Zaire'),
(244, 'Zambia'),
(245, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Structure de la table `table_produit`
--

CREATE TABLE IF NOT EXISTS `table_produit` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_nom` varchar(255) NOT NULL,
  `p_prixanc` varchar(10) NOT NULL,
  `p_prix` varchar(10) NOT NULL,
  `p_quantite` int(10) NOT NULL,
  `p_photo` varchar(255) NOT NULL,
  `p_info` text NOT NULL,
  `p_desc` text NOT NULL,
  `p_vue` int(11) NOT NULL,
  `p_boutique` varchar(5) NOT NULL,
  `p_active` int(1) NOT NULL,
  `id_souscat` int(11) NOT NULL,
  `cat_id` int(4) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `table_produit`
--

INSERT INTO `table_produit` (`p_id`, `p_nom`, `p_prixanc`, `p_prix`, `p_quantite`, `p_photo`, `p_info`, `p_desc`, `p_vue`, `p_boutique`, `p_active`, `id_souscat`, `cat_id`) VALUES
(13, 'Tente', '12000', '10500', 20, 'produit-13.jpg', '<h1 id="title" class="a-size-large a-spacing-none" style="padding: 0px; margin-top: 0px; text-rendering: optimizelegibility; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; margin-bottom: 0px !important; font-size: 24px !important; line-height: 32px !important;"><span id="productTitle" class="a-size-large product-title-word-break" style="text-rendering: optimizelegibility; word-break: break-word; line-height: 32px !important;">Night Cat Tente de Camping pour 1 2 Personne Homme ImpermÃ©able Tentes de RandonnÃ©e Installation Facile Poids LÃ©ger pour la RandonnÃ©e ArriÃ¨re-Cour</span></h1>', '<ul class="a-unordered-list a-vertical a-spacing-mini" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(15, 17, 17); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;"><li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item">âœ… ã€Ã‰tancheã€‘ Tissu Durable 210D Oxford avec des coutures entiÃ¨rement cancÃ©es traitÃ©es avec une note de pulvÃ©risation Ã©tanche jusqu''Ã  3000 mm assure un environnement sec et propre Ã  l''intÃ©rieur de cette tente de camping</span></li><li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item">âœ… ã€Grand Espaceã€‘ Cette tente de sac Ã  dos est spacieuse pour un adulte et ses Ã©quipements en plein air avec la taille interne de 220 * 120 * 120cm, peut mÃªme s''adapter Ã  2 personnes nÃ©cessaires</span></li><li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item">âœ… ã€Conception Excellenteã€‘ Une couche et une design d''une porte ont rÃ©duit le poids total de cette tente de randonnÃ©e, la porte de la maille intÃ©rieure offre une bonne ventilation et conserve des insectes Ã  l''extÃ©rieur, la porte Ã©tanche extÃ©rieure maintient vos chaussures ou vos animaux domestiques secs dans le hall.</span></li><li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item">âœ… ã€Facile Ã  Transporterã€‘ Cette tente de chat de nuit 1 personne est facile Ã  installer et Ã  transporter en raison de sa petite taille de 44 * 13,8 * 11,6 cm et de poids de 2 kg, en tant que tentes pour le camping, c''est une tente idÃ©ale pour les adultes et des gamins</span></li><li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item">âœ… ã€ATTENTION ET GARANTIEã€‘ Vos bons magasins et votre expÃ©rience en utilisant notre premiÃ¨re prioritÃ© et nous nous sommes engagÃ©s Ã  assurer une satisfaction de 100% Ã  nos clients. Tout problÃ¨me de matÃ©riau ou de fabrication se produit, n''hÃ©sitez pas Ã  nous contacter</span></li></ul>', 8, '0', 1, 9, 18),
(14, 'Erima Filet ', '4500', '3500', 40, 'produit-14.jpg', '<h1 id="title" class="a-size-large a-spacing-none" style="padding: 0px; margin-top: 0px; text-rendering: optimizelegibility; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; margin-bottom: 0px !important; font-size: 24px !important; line-height: 32px !important;"><span id="productTitle" class="a-size-large product-title-word-break" style="text-rendering: optimizelegibility; word-break: break-word; line-height: 32px !important;">Erima Filet 12 Ballons Mixte Adulte, Noir/Green, Taille Unique</span></h1>', '', 3, '0', 1, 10, 18),
(15, 'Apple iPad Pro', '136 119', '106 730', 9, 'produit-15.jpg', '<table class="a-normal a-spacing-micro" style="width: 407.812px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; background-color: rgb(255, 255, 255); margin-bottom: 4px !important;"><tbody><tr class="a-spacing-small po-brand" style="margin-bottom: 8px !important;"><td class="a-span3" style="vertical-align: top; padding-right: 3px; padding-bottom: 3px; width: 106.75px; float: none !important;"><span class="a-size-base a-text-bold" style="font-weight: 700 !important; line-height: 20px !important;">Marque</span></td><td class="a-span9" style="vertical-align: top; padding-bottom: 3px; padding-left: 3px; width: 301.062px; float: none !important;"><span class="a-size-base" style="line-height: 20px !important;">Apple</span></td></tr><tr class="a-spacing-small po-display.size" style="margin-bottom: 8px !important;"><td class="a-span3" style="vertical-align: top; padding-top: 3px; padding-right: 3px; padding-bottom: 3px; width: 106.75px; float: none !important;"><span class="a-size-base a-text-bold" style="font-weight: 700 !important; line-height: 20px !important;">Taille de l''Ã©cran</span></td><td class="a-span9" style="vertical-align: top; padding-top: 3px; padding-bottom: 3px; padding-left: 3px; width: 301.062px; float: none !important;"><span class="a-size-base" style="line-height: 20px !important;">11 Pouces</span></td></tr><tr class="a-spacing-small po-color" style="margin-bottom: 8px !important;"><td class="a-span3" style="vertical-align: top; padding-top: 3px; padding-right: 3px; padding-bottom: 3px; width: 106.75px; float: none !important;"><span class="a-size-base a-text-bold" style="font-weight: 700 !important; line-height: 20px !important;">Couleur</span></td><td class="a-span9" style="vertical-align: top; padding-top: 3px; padding-bottom: 3px; padding-left: 3px; width: 301.062px; float: none !important;"><span class="a-size-base" style="line-height: 20px !important;">Gris sidÃ©ral</span></td></tr><tr class="a-spacing-small po-wireless_communication_technology" style="margin-bottom: 8px !important;"><td class="a-span3" style="vertical-align: top; padding-top: 3px; padding-right: 3px; padding-bottom: 3px; width: 106.75px; float: none !important;"><span class="a-size-base a-text-bold" style="font-weight: 700 !important; line-height: 20px !important;">Technologie de communication sans fil</span></td><td class="a-span9" style="vertical-align: top; padding-top: 3px; padding-bottom: 3px; padding-left: 3px; width: 301.062px; float: none !important;"><span class="a-size-base" style="line-height: 20px !important;">Wi-Fi</span></td></tr><tr class="a-spacing-small po-human_interface_input" style="margin-bottom: 8px !important;"><td class="a-span3" style="vertical-align: top; padding-top: 3px; padding-right: 3px; width: 106.75px; float: none !important;"><span class="a-size-base a-text-bold" style="font-weight: 700 !important; line-height: 20px !important;">EntrÃ©e de l''interface humaine</span></td></tr></tbody></table>', '<ul class="a-unordered-list a-vertical a-spacing-mini" style="margin-bottom: 0px; margin-left: 18px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;"><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">Puce Apple M1 pour des performances Ã  couper le souffle</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">Superbe Ã©cran Liquid Retina de 11poucesÂ¹ avec ProMotion, TrueTone et large gamme de couleursP3</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">CamÃ©ra TrueDepth intÃ©grant un objectif avant ultra grand-angle avec Cadre centrÃ©</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">Appareils photo grand-angle 12Mpx et ultra grand-angle 10Mpx, et scanner LiDAR pour une rÃ©alitÃ© augmentÃ©e immersive</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">Inclut la taxe sur les primes dâ€™assurance au taux applicable</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">AcceÌ€s direct aux experts Apple</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">Service de remplacement express</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">Couverture mateÌrielle de votre iPad, de sa batterie, du caÌ‚ble USB et de lâ€™adaptateur secteur fournis, et de lâ€™Apple Pencil acheteÌ en meÌ‚me temps que lâ€™iPad, Un clavier pour iPad de marque Apple</span></li></ul>', 8, '2', 1, 2, 16),
(16, 'Canon EOS 2000D', '70000', '67.900', 10, 'produit-16.jpg', '<table id="productDetails_techSpec_section_1" class="a-keyvalue prodDetTable" role="presentation" style="margin-bottom: 22px; width: 606.672px; border-bottom: 1px solid rgb(231, 231, 231); table-layout: fixed; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; background-color: rgb(255, 255, 255);"><tbody><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Marque</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽCanon</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Couleur</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽNoir</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Type de produit</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽSLR</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">RÃ©solution du capteur</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž24.1 MP</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Zoom optique</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž8.3 x</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Ecran</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž3 pouces</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Stabilisation d''image</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽOui</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">CaractÃ©ristiques spÃ©ciales</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽWiFi</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Type d''installation</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽCanon EF</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Distance focale</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž55 - 18</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Ouverture du diaphragme</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž5.6 MillimÃ¨tres</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Type de viseur</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽOptique</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Connectivity technologies</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽHDMI</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">MÃ©moire</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž1</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Zoom numÃ©rique</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž10 x</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">ModÃ¨le</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž2728C003</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Type de batterie</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽLithium-ion</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">RÃ©solution vidÃ©o</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž1080p</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Garantie constructeur</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž2 ans constructeur</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Dimensions du colis</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž26.5 x 20.1 x 16.7 centimÃ¨tres</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Package Weight</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž1.42 Kilogrammes</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Dimensions de l''article L&nbsp;x&nbsp;l&nbsp;x&nbsp;H</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž7.8 x 12.9 x 10.1 centimÃ¨tres</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Poids de l''article</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž475 Grammes</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Camera Lens</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽMonture d''objectif d''interface: Canon EF, Canon EF-S</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Couleur du modÃ¨le</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽNoir</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Vitesse du mode rafale</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž3 fps</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">A la stabilisation d''image</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽNon</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">PiÃ¨ces incluses</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽKit de vidÃ©os</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">ISO Range</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž100-6400</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Max Focal Length</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž55</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Min Focal Length</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž18</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Vitesse d''obturation minimale</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž30 seconds</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">AnnÃ©e du modÃ¨le</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž2018</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Objective Lens Diameter</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž58 MillimÃ¨tres</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">RÃ©fÃ©rence</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž2728C003</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Taille</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽPlein format</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Niveau d'' etancheite</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽNon rÃ©sistant Ã  lâ€™eau</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Maximum Aperture Range</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽF5.6</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Expanded ISO Maximum</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž6400</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Autofocus Points</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž9</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Style</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽEOS 2000D + EF-S 18-55mm II</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Photo Filter Thread Size</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž58 MillimÃ¨tres</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">RÃ©solution fixe effective</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž24.1 MP</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">DisponibilitÃ© des piÃ¨ces dÃ©tachÃ©es</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽInformation indisponible sur les piÃ¨ces dÃ©tachÃ©es</td></tr></tbody></table>', '<ul class="a-unordered-list a-vertical a-spacing-mini" style="margin-bottom: 0px; margin-left: 18px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;"><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">Video Full HD 1080p</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">WiFi/NFC</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">Ecran 7,5 cm</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">Filtres crÃ©atifs avancÃ©s</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">Processeur DIGIC 4+</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">Angle de visualisation (horizontalement / verticalement): Environ. 170 Â°</span></li></ul>', 7, '2', 1, 4, 16),
(17, 'Meuble TV', '7000', '12000', 30, 'produit-17.jpg', '<table class="a-normal a-spacing-micro" style="width: 432.469px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; background-color: rgb(255, 255, 255); margin-bottom: 4px !important;"><tbody><tr class="a-spacing-small po-color" style="margin-bottom: 8px !important;"><td class="a-span3" style="vertical-align: top; padding-right: 3px; padding-bottom: 3px; width: 113.219px; float: none !important;"><span class="a-size-base a-text-bold" style="font-weight: 700 !important; line-height: 20px !important;">Couleur</span></td><td class="a-span9" style="vertical-align: top; padding-bottom: 3px; padding-left: 3px; width: 319.25px; float: none !important;"><span class="a-size-base" style="line-height: 20px !important;">ChÃªne Noir</span></td></tr><tr class="a-spacing-small po-brand" style="margin-bottom: 8px !important;"><td class="a-span3" style="vertical-align: top; padding-top: 3px; padding-right: 3px; padding-bottom: 3px; width: 113.219px; float: none !important;"><span class="a-size-base a-text-bold" style="font-weight: 700 !important; line-height: 20px !important;">Marque</span></td><td class="a-span9" style="vertical-align: top; padding-top: 3px; padding-bottom: 3px; padding-left: 3px; width: 319.25px; float: none !important;"><span class="a-size-base" style="line-height: 20px !important;">Movian</span></td></tr><tr class="a-spacing-small po-size" style="margin-bottom: 8px !important;"><td class="a-span3" style="vertical-align: top; padding-top: 3px; padding-right: 3px; padding-bottom: 3px; width: 113.219px; float: none !important;"><span class="a-size-base a-text-bold" style="font-weight: 700 !important; line-height: 20px !important;">Taille</span></td><td class="a-span9" style="vertical-align: top; padding-top: 3px; padding-bottom: 3px; padding-left: 3px; width: 319.25px; float: none !important;"><span class="a-size-base" style="line-height: 20px !important;">MDB-3S</span></td></tr><tr class="a-spacing-small po-item_weight" style="margin-bottom: 8px !important;"><td class="a-span3" style="vertical-align: top; padding-top: 3px; padding-right: 3px; padding-bottom: 3px; width: 113.219px; float: none !important;"><span class="a-size-base a-text-bold" style="font-weight: 700 !important; line-height: 20px !important;">Poids de l''article</span></td><td class="a-span9" style="vertical-align: top; padding-top: 3px; padding-bottom: 3px; padding-left: 3px; width: 319.25px; float: none !important;"><span class="a-size-base" style="line-height: 20px !important;">7 Kilogrammes</span></td></tr><tr class="a-spacing-small po-style" style="margin-bottom: 8px !important;"><td class="a-span3" style="vertical-align: top; padding-top: 3px; padding-right: 3px; width: 113.219px; float: none !important;"><span class="a-size-base a-text-bold" style="font-weight: 700 !important; line-height: 20px !important;">Style</span></td><td class="a-span9" style="vertical-align: top; padding-top: 3px; padding-left: 3px; width: 319.25px; float: none !important;"><span class="a-size-base" style="line-height: 20px !important;">Meuble TV Ã  3 EtagÃ¨res</span></td></tr></tbody></table>', '<ul class="a-unordered-list a-vertical a-spacing-mini" style="margin-bottom: 0px; margin-left: 18px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;"><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">DIMENSIONS : ExtÃ©rieures : L 73,2 x P 29 x H 36,6 cm | Compartiment gauche : L 22,6 x P 28,8 x H 34,2 cm | Compartiment droit : L 45,4 x P 28,8 x H 16,5 cm | DiamÃ¨tre du trou de cÃ¢ble : 5 cm|Taille de tv recommandÃ©e : 32 V</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">CAPACITÃ‰ : Poids sur le plateau supÃ©rieur : 10 kg |Poids de l''Ã©tagÃ¨re IntÃ©rieure : 20 kg |Poids total du produit : 50 kg| Poids du produit: 7,8 kg</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">USAGE : Ce meuble TV trouvera sa place dans votre intÃ©rieur et vous procurera un double plaisir (rangement + apaisement). GrÃ¢ce aux ouvertures, vous pourrez accÃ©der librement Ã  vos effets. IdÃ©al pour un rangement dans un salon, une chambre. Faites de ce meuble votre compagnon de plaisir quotidien !</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">MONTAGE : Gain de temps assurÃ© avec le montage rapide et simple de ce meuble grÃ¢ce au manuel d''assemblage/illustrÃ© fourni dans le colis ou sur le carton. Vous n''aurez besoin que d''un tournevis, de la concentration et suivre les Ã©tapes de montage !</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">MATÃ‰RIAU : Ce meuble a Ã©tÃ© fabriquÃ© Ã  base de panneaux de particules robustes et solides pour assurer une excellente stabilitÃ© mÃªme sur un sol lÃ©gÃ¨rement irrÃ©gulier et protÃ©ger le sol des rayures. De plus, ce meuble est un produit Ã©cologique, il a Ã©tÃ© fabriquÃ© Ã  partir de bois issu de forÃªts gÃ©rÃ©es durablement.</span></li><li style="list-style: disc; overflow-wrap: break-word;"><span class="a-list-item">INCLUS DANS LA LIVRAISON : 1x Meuble TV avec Ã©tagÃ¨res 1x Instructions de montage 1x Sac d''accessoires (sans tournevis)</span></li></ul>', 5, '2', 1, 13, 21),
(18, 'Micro-Ondes', '18000', '15000', 9, 'produit-18.jpg', '<table id="productDetails_techSpec_section_1" class="a-keyvalue prodDetTable" role="presentation" style="margin-bottom: 22px; width: 606.672px; border-bottom: 1px solid rgb(231, 231, 231); table-layout: fixed; padding: 0px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; background-color: rgb(255, 255, 255);"><tbody><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Marque</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽBRANDT</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">RÃ©fÃ©rence</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽSM2606W</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Poids de l''article</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž12 kilogrammes</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">NumÃ©ro du modÃ¨le de l''article</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽSM2606W</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">CapacitÃ©</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž26 Litres</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Dimensions du produit</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž26</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Type d''installation</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽAutonome</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">RÃ©fÃ©rence</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽSm2606w</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Couleur</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽBlanc</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Tension</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž230 Volts</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Watt</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž900 Watts</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">MatÃ©riau</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽAcier alliÃ©</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Poids</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž12 Kilogrammes</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">Garantie constructeur</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€Ž2 ans</td></tr><tr><th class="a-color-secondary a-size-base prodDetSectionEntry" style="vertical-align: top; padding: 7px 14px 6px; background-color: rgb(243, 243, 243); font-weight: 400; border-top: 1px solid rgb(231, 231, 231); overflow-wrap: break-word; width: 303.328px; line-height: 20px !important;">DisponibilitÃ© des piÃ¨ces dÃ©tachÃ©es</th><td class="a-size-base prodDetAttrValue" style="vertical-align: top; padding: 7px 14px 6px; border-top: 1px solid rgb(231, 231, 231); color: rgb(51, 51, 51); word-break: break-word; line-height: 20px !important;">â€ŽInformation indisponible sur les piÃ¨ces dÃ©tachÃ©es</td></tr></tbody></table>', '', 6, '0', 1, 12, 21),
(19, 'Couvre-siÃ¨ge', '4500', '4000', 40, 'produit-19.jpg', '<ul class="a-unordered-list a-vertical a-spacing-mini" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(15, 17, 17); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;"><li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item">Confort: GrÃ¢ce Ã  la housse de siÃ¨ge Novara, vous pouvez parcourir de plus longues distances dans le confort et la commoditÃ©.</span></li><li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item">ProtÃ¨ge les siÃ¨ges d''origine, confÃ¨re un nouveau look au vÃ©hicule</span></li><li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item">Nettoyage: Vous pouvez facilement retirer le coussin du siÃ¨ge de la voiture et le laver dans la machine Ã  laver Ã  30 Â°C.</span></li><li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item">Installation: Le coussin de siÃ¨ge peut Ãªtre facilement fixÃ© Ã  l''aide de deux ceintures.</span></li><li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item">AdaptÃ©: Convient Ã  toutes les marques de vÃ©hicules</span></li></ul>', '', 3, '0', 1, 6, 17);
INSERT INTO `table_produit` (`p_id`, `p_nom`, `p_prixanc`, `p_prix`, `p_quantite`, `p_photo`, `p_info`, `p_desc`, `p_vue`, `p_boutique`, `p_active`, `id_souscat`, `cat_id`) VALUES
(20, 'dsfgbb', '4562', '10', 10, 'produit-20.jpg', '<p>bgdfs</p>', '<p>bfqd</p>', 0, '7', 1, 12, 21);

-- --------------------------------------------------------

--
-- Structure de la table `table_souhaite`
--

CREATE TABLE IF NOT EXISTS `table_souhaite` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `idper` int(11) NOT NULL,
  `idproduit` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `table_souhaite`
--

INSERT INTO `table_souhaite` (`id`, `idper`, `idproduit`) VALUES
(4, 3, 13),
(5, 3, 17);

-- --------------------------------------------------------

--
-- Structure de la table `table_souscat`
--

CREATE TABLE IF NOT EXISTS `table_souscat` (
  `id_souscat` int(11) NOT NULL AUTO_INCREMENT,
  `nom_souscat` varchar(255) NOT NULL,
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`id_souscat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `table_souscat`
--

INSERT INTO `table_souscat` (`id_souscat`, `nom_souscat`, `id_cat`) VALUES
(2, 'TÃ©lÃ©phonie ', 16),
(3, 'MatÃ©riels Informatique', 16),
(4, 'MatÃ©riel audio et vidÃ©o ', 16),
(6, 'Accessoires Auto ', 17),
(7, 'Auto Ã©lectronique', 17),
(8, 'PiÃ¨ces dÃ©tachÃ©es ', 17),
(9, 'Camping', 18),
(10, 'Fitness', 18),
(11, 'Chasse et Peche', 18),
(12, 'Ã‰lectromÃ©nager ', 21),
(13, 'Meuble', 21),
(14, 'DÃ©coration intÃ©rieure', 21);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_demmande`
--

CREATE TABLE IF NOT EXISTS `tbl_demmande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `idboutique` int(5) NOT NULL,
  `nom_client` varchar(255) NOT NULL,
  `email_client` varchar(255) NOT NULL,
  `date_dem` varchar(50) NOT NULL,
  `quantite` int(3) NOT NULL,
  `id_produit` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nom_client` (`nom_client`),
  KEY `nom_client_2` (`nom_client`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `tbl_demmande`
--

INSERT INTO `tbl_demmande` (`id`, `id_client`, `idboutique`, `nom_client`, `email_client`, `date_dem`, `quantite`, `id_produit`) VALUES
(23, 3, 0, 'client ', 'client@gmail.com', '2022-06-07 12:14:24', 1, 18),
(24, 3, 0, 'client ', 'client@gmail.com', '2022-06-07 12:15:09', 1, 19);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_p_photo`
--

CREATE TABLE IF NOT EXISTS `tbl_p_photo` (
  `pp_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `p_id` int(11) NOT NULL,
  PRIMARY KEY (`pp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `tbl_p_photo`
--

INSERT INTO `tbl_p_photo` (`pp_id`, `photo`, `p_id`) VALUES
(1, '1.jpg', 13),
(2, '2.jpg', 16);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom_u` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel_u` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nom_u`, `email`, `tel_u`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '000000000', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_vente`
--

CREATE TABLE IF NOT EXISTS `tbl_vente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `idboutique` int(5) NOT NULL,
  `date_vente` varchar(50) NOT NULL,
  `quantite` int(3) NOT NULL,
  `id_produit` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `tbl_vente`
--

INSERT INTO `tbl_vente` (`id`, `id_client`, `idboutique`, `date_vente`, `quantite`, `id_produit`) VALUES
(26, 3, 2, '2022-06-09 06:17:40', 1, 15),
(25, 3, 0, '2022-06-06 06:01:34', 1, 18);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
