-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2020 at 09:26 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cl_trident`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(225) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `date`, `name`, `phone`, `email`, `message`) VALUES
(1, '12/08/2020', 'Rosa Goodrich', '217-672-9748', 'goodrich.rosa@gmail.com', 'How would you like to have zero cost advertising for your website? Check out: https://bit.ly/ads-no-cost');

-- --------------------------------------------------------

--
-- Table structure for table `contacts_filter`
--

CREATE TABLE `contacts_filter` (
  `id` int(11) NOT NULL,
  `filter` varchar(10) NOT NULL,
  `direction` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts_filter`
--

INSERT INTO `contacts_filter` (`id`, `filter`, `direction`) VALUES
(1, 'name', 'ASC');

-- --------------------------------------------------------

--
-- Table structure for table `forbidden_words`
--

CREATE TABLE `forbidden_words` (
  `id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forbidden_words`
--

INSERT INTO `forbidden_words` (`id`, `word`) VALUES
(7, 'fuck'),
(8, 'anal'),
(11, 'sex'),
(12, 'dating'),
(13, 'adult'),
(14, 'girls'),
(15, 'http'),
(16, 'https'),
(17, 'dating'),
(18, 'Sexy'),
(19, 'adult'),
(20, 'http'),
(21, 'bitcoin'),
(22, 'bitcoin');

-- --------------------------------------------------------

--
-- Table structure for table `spam`
--

CREATE TABLE `spam` (
  `id` int(11) NOT NULL,
  `spam_identifier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spam`
--

INSERT INTO `spam` (`id`, `spam_identifier`) VALUES
(47, 'SÐµÑ…Ñƒ girls for thÐµ night in yÐ¾ur town UK: https://sms.i-link.us/bestadultdating875178'),
(49, 'ErnesztaFanty'),
(50, 'titirangi@msn.com'),
(51, 'SÐµÑ… dÐ°ting in Ð¡Ð°nÐ°dÐ° | Girls for sÐµx in Ð¡anÐ°dÐ°: https://vae.me/F1az'),
(55, 'myfatz'),
(56, 'easterhay@hotmail.com'),
(57, 'Adult dÐ°ting ameriÑan Ð¾nlinÐµ: http://xsle.net/sexygirls228748'),
(58, 'sunekl@hotmail.com'),
(59, 'Ðdult bÐµst 100 freÐµ ÑanÐ°diÐ°n dÐ°ting sites: https://links.wtf/PK1V'),
(60, 'acoustik1@hotmail.com'),
(61, 'DÐ°ting sitÐµ for sex with girls from thÐµ USA: http://www.nuratina.com/go/bestadultdating498649'),
(62, 'Adult number 1 dÐ°ting apÑ€: https://sms.i-link.us/bestadultdating874113'),
(63, 'missj880@gmail.com'),
(64, 'semuke86@yahoo.it'),
(65, 'Ðdult Ð¾nline dating bÑƒ the numbÐµrs https://1borsa.com/bestadultdating408526'),
(66, 'ylaboyrie@gmail.com'),
(67, 'DÐ°ting site for sÐµÑ… with girls in yÐ¾ur city: https://ecuadortenisclub.com/adultdating706701'),
(68, 'kiory_freeman@hotmail.co.uk'),
(69, 'ThÐµ bÐµst girls fÐ¾r sÐµÑ… in Ñƒour tÐ¾wn ÐU: https://slimex365.com/bestadultdating927973'),
(70, 'eric@talkwithcustomer.com'),
(71, 'pennyscott33@yahoo.com'),
(72, 'pepafly@msn.com'),
(73, 'djw96@yahoo.com'),
(74, 'pgydn@msn.com'),
(75, 'ba_rc@hotmail.de'),
(76, 'lena_cool@web.de'),
(77, 'matthias.gandke@web.de'),
(78, 'dallaschoins@gmail.com'),
(79, 'copsattitude95@hotmail.fr'),
(80, 'janinaohlert@gmx.de'),
(81, 'gaele@sfr.fr'),
(82, 'D-Kaitou@hotmail.com'),
(83, 'mojahed-00@hotmail.fr'),
(84, 'rus.gaby@noos.fr'),
(85, 'wova@centrum.cz'),
(86, 'joerg.dreissigacker@yahoo.com'),
(87, 'davmp@kimanddave.com'),
(88, 'quincunxquin@yahoo.com'),
(89, 'caonja@msn.com'),
(90, 'MÐµet seÑ…y girls in yÐ¾ur citÑƒ Ð¡Ð°nadÐ°: http://www.nuratina.com/go/bestsexygirls821690'),
(91, 'info@theclinicalsearchgroup.com'),
(92, 'MÐµet seÑ…y girls in yÐ¾ur citÑƒ Ð¡Ð°nadÐ°: http://www.nuratina.com/go/bestsexygirls821690'),
(93, 'marie67000@yahoo.fr'),
(94, 'DÐ°ting sitÐµ for seÑ… with girls frÐ¾m thÐµ USA: https://bogazicitente.com/sexdating897524'),
(95, 'edwardchiquis@hotmail.com'),
(96, 'Dating sitÐµ for sex with girls in thÐµ USÐ: https://sms.i-link.us/bestsexygirls237789'),
(97, 'sgawne0828@comcast.net'),
(98, 'ThÐµ bÐµst womÐµn fÐ¾r sex in ÑƒÐ¾ur tÐ¾wn UÐš: https://vae.me/NCLI'),
(99, 'ione@csirentals.co.za'),
(100, 'anne.lourdessamy@gmail.com'),
(101, 'jan.stappers@hotmail.com'),
(102, 'Adult bÐµst dÐ°ting wÐµbsite ÑÐ°liforniÐ°: http://xsle.net/adultdating173349'),
(103, 'zley77@gmail.com'),
(104, 'GÐµt to ÐºnÐ¾w, fucÐº. SEX dÐ°ting nÐµÐ°rby: https://jtbtigers.com/sexdating876203'),
(105, 'grownfolk@aol.com'),
(106, 'pattih59@yahoo.com'),
(107, 'marz143@msn.com'),
(108, 'cascadecoolheat@gmail.com'),
(109, 'j0an27@yahoo.com'),
(110, 'markheath@24nationwide.co.uk'),
(111, 'raphaeFoen@gmail.com'),
(112, 'gerapower@voila.fr'),
(113, 'anthonyfranco16@yahoo.de'),
(114, 'yjackson82@yahoo.com'),
(115, 'sjxyzh4bpdc73t9@mail.svenz.eu'),
(116, 'pppprofartesleliana@mail.de'),
(117, 'leogoss@web.de'),
(118, 'fenclmartin@yahoo.de'),
(119, 'sema87@yahoo.de'),
(120, 'josephpray@yahoo.com'),
(121, 'arlen_dixon@hotmail.com'),
(122, 'ÐœÐµine ErfolgsgÐµschichtÐµ. WiÐµ iÑh mit Ñ€Ð°ssivÐµm Ð•inkommen 10000 DÐ¾llar im ÐœÐ¾nat verdiÐµne: https://slimex365.com/passiveincomeneuro201379'),
(123, 'erudite@gmx.de'),
(124, 'jiajuwu_29@freenet.de'),
(125, 'Port481@hotmail.com'),
(126, 'isidro.chavez@gmail.com'),
(127, 'cit.y.s.ty.v.nu@gmx.at'),
(128, 'guillereault111@lycos.de'),
(129, 'lavaking@gmail.com'),
(130, 'madalina_sexoasa_eu@yahoo.com'),
(131, 'www.chester@yahoo.com'),
(132, 'sharonjean319@yahoo.com'),
(133, 'tuan79ftu@gmail.com'),
(134, 'woogiea@yahoo.com'),
(135, 'samvu@hotmail.com'),
(136, 'maya_wise@yahoo.com'),
(137, 'sharingankakashi93@yahoo.com'),
(138, 'ahmarelain@outlook.fr'),
(139, 'FrÐµe SeÑ… SÐµÑ… DÐ°ting: https://darknesstr.com/sexywoman106428'),
(140, 'salamanca.aleisha@outlook.com'),
(141, 'we_05@yahoo.com.ph'),
(142, 'xDxds@live.com'),
(143, ''),
(144, 'bluejeep86@msn.com'),
(145, 'mydownfall@hotmail.co.uk'),
(146, 'zveruga66@mail.ru'),
(147, 'tisso2010@yahoo.fr'),
(148, 'giant_pansy17@hotmail.co.uk'),
(149, 'SÐµÑ… dating site, seÑ… Ð¾n a first dÐ°te, sÐµx immediatelÑƒ https://1borsa.com/sexywoman400366'),
(150, 'muhammad.scollen@googlemail.com'),
(151, 'Muhammad Scollen'),
(152, 'smeite54@yahoo.fr'),
(153, 'Adult number 1 dating Ð°pp: https://links.wtf/IxsK'),
(154, 'heavenhell@web.de'),
(155, 'Find yÐ¾ursÐµlf Ð° girl fÐ¾r thÐµ night in yÐ¾ur citÑƒ AU: https://ecuadortenisclub.com/sexygirls736819'),
(156, 'marina.asbr@freenet.de'),
(157, 'The bÐµst girls fÐ¾r sex in Ñƒour town CanÐ°dÐ°: http://freeurlredirect.com/adultdating579120'),
(158, 'cp2011@web.de'),
(159, 'maryvonne.belligoux@gmx.com'),
(160, 'celine621@hotmail.com'),
(161, 'vyda77@ifrance.fr'),
(162, 'hjp.schoellkopf@free.fr'),
(163, 'ernestine.commons83@gmail.com'),
(164, 'uwe.m@ojooo.de'),
(165, 'peelireuttrptpe@wanadoo.fr'),
(166, 'junscom@gmail.com'),
(167, 'billyceasley@gmail.com'),
(168, 'clearbrookmbchurch@telus.net'),
(169, 'carylec@yahoo.com'),
(170, 'milady38@hotmail.com'),
(171, 'nlhawkins@talktalk.net'),
(172, 'why936@aol.com'),
(173, 'tckmailbox@aol.com'),
(174, 'andrewdeanst@gmail.com'),
(175, 'lennycoh@yahoo.com'),
(176, 'eliane.rh@favomoveis.com.br'),
(177, 'chana.58120@yahoo.com'),
(178, 'inbox404@glmux.com'),
(179, 'deelover501@yahoo.com'),
(180, 'erkan3758@hotmail.com'),
(181, 'helenlu2001@yahoo.com'),
(182, 'tylerbrock@msn.com'),
(183, 'carmen.lerner@gmail.com'),
(184, 'kilgoreabotrout@yahoo.com'),
(185, 'drokdahpahty@hotmail.com'),
(186, 'inbox410@glmux.com'),
(187, 'Josephagits'),
(188, 'daddyimsosorry@yahoo.com'),
(189, 'tjb4life11@yahoo.de'),
(190, 'jlcarlo_09@yahoo.com'),
(191, 'sylvie.baert@telenet.be'),
(192, 'kressanne-maria@gmx.de'),
(193, 'allway@cybertrade.co.za'),
(194, 'christine.jouas@yahoo.co.uk'),
(195, 'no-replyTuple@gmail.com'),
(196, 'jporter2407@gmail.com'),
(197, 'louise_hamilton88@hotmail.co.uk'),
(198, 'abdelkaderasraoui@gmail.com'),
(199, 'Adult nÐ°tivÐµ amÐµrican dÐ°ting Ð¾nlinÐµ: https://klurl.nl/?u=Adc5zk3Q'),
(200, 'libsmart@yahoo.com'),
(201, 'russell741@yahoo.co.uk'),
(202, 'sandruzzi@hotmail.com'),
(203, 'sweetjay1@msn.com'),
(204, 'sabrina10_dicaprio11@hotmail.co.uk'),
(205, 'dschoneberg@orange.fr'),
(206, 'craiglahey20@hotmail.co.uk'),
(207, 'junc-e@hotmail.com'),
(208, 'DeontayRogers311@yahoo.com'),
(209, 'josanss2009@hotmail.com'),
(210, 'giggznlegz05@hotmail.co.uk'),
(211, 'teterre781@free.fr'),
(212, 'windows-09@hotmail.fr'),
(213, 'abramnoja@yahoo.com'),
(214, 'inbox411@glmux.com'),
(215, 'rambo_lambo@hoymail.co.uk'),
(216, 'bhshipon@free.fr'),
(217, 'simaland6@gmail.com'),
(218, 'juicedrsca@live.fr'),
(219, 'jean.carlo.araujo@hotmail.com'),
(220, 'mvpzoul@yahoo.com'),
(221, 'jerry.warfe@gmail.com'),
(222, 'x-lilprincesselz-x@hotmail.co.uk'),
(223, 'ranjittanjoreart@hotmail.com'),
(224, 'sowyer07@gmail.com'),
(225, 'markaley@hotmail.co.uk'),
(226, 'delphine.marlay@villabeausoleil.com'),
(227, 'deon_brown@msn.com'),
(228, 'nickmam@live.fr'),
(229, 'adebisi2000@yahoo.co.uk'),
(230, 'pawsey.nora@gmail.com'),
(231, 'Champagne-jean.claude@orange.fr'),
(232, 'Ð•Ð°rnings on the IntÐµrnet from $8918 Ñ€er week: http://nuvrcazoa.grupocelebreeventos.com/ff10'),
(233, 'cillyzicke1@freenet.de'),
(234, 'deszem@yahoo.ca'),
(235, 'maru117@msn.com'),
(236, 's.lewis9486@yahoo.com'),
(237, 'tturner23@hotmail.com'),
(238, 'rify58@yahoo.de'),
(239, 'http'),
(240, 'mlebian@free.fr'),
(241, 'netty89@hotmail.co.uk'),
(242, 'ricardo.mcnally@gmail.com'),
(243, 'dojo316@msn.com'),
(244, 'andrey.chunaev@mail.ru'),
(245, 'mitchgersky@hotmail.fr'),
(246, 'kengric27@gmail.com'),
(247, 'Joo0_@hotmail.fr'),
(248, 'you-fail@free.fr'),
(249, 'steve.watkins@thyssenkrupp.com'),
(250, 'mohammed__13@hotmail.fr'),
(251, 'noreply@arteseo.co'),
(252, 'poisanong1@telkomsa.net'),
(253, 'shadow9993@hotmail.com'),
(254, 'auntyenda@yahoo.com'),
(255, 'ivanmarcuello@web.de'),
(256, 'adm19642000@yahoo.co.uk'),
(257, 'ruben.haller@freenet.de'),
(258, 'love_you@malak.fr'),
(259, 'm.aarine@hotmail.com'),
(260, 'bakkayarou@gmail.com'),
(261, 'tonicmich@free.fr'),
(262, 'faridl95@gmx.de'),
(263, 'pogy_ko_numune93@yahoo.com'),
(264, 'jet163000@163.com'),
(265, 'chgoblueice2@gmail.com'),
(266, 'annamaj@gmx.de'),
(267, 'inbox450@glmux.com'),
(268, 'calvincarter05977@gmail.com'),
(269, 'no-reply@hilkom-digital.de'),
(270, 'zhenia446@mail.ru'),
(271, 'expiry@cyberleviathan.com'),
(272, 'mahesh@yahoo.co.uk'),
(273, 'hogan.uwe24@outlook.com'),
(274, 'hogan.uwe24@outlook.com'),
(275, 'twandaaghypiazza1@yahoo.co.uk'),
(276, 'tetakhiling2015@mail.ru'),
(277, 'eric@talkwithwebvisitor.com'),
(278, 'charanjsv@yahoo.co.uk'),
(279, 'HaroldGaumn'),
(280, 'storybitestudio14@gmail.com'),
(281, 'inbox332@glmux.com'),
(282, 'fax.promotion@consultant.com'),
(283, 'cathleen.betche@msn.com'),
(284, 'claudiauclement@yahoo.com'),
(285, 'claudiauclement@yahoo.com'),
(286, 'doughty.todd@gmail.com'),
(287, 'betty@mail.com'),
(288, 'rosemarie.starr@msn.com'),
(289, 'contact@marketingddm.com'),
(290, 'lindsay.plott@gmail.com'),
(291, 'Lindsay Plott'),
(292, 'no-replyFoen@gmail.com'),
(293, 'rene.barham@yahoo.com'),
(294, 'claire@explainingyourbusiness.com'),
(295, 'ali.perales@gmail.com'),
(296, 'forsyth.elke@googlemail.com'),
(297, 'prince.swader@gmail.com'),
(298, 'emma_23@mail.com'),
(299, 'davewillis2008@gmail.com790.txt'),
(300, 'pallthith23@mail.com'),
(301, 'bradbroker16@gmail.com'),
(302, 'rachele.wimberly@msn.com'),
(303, 'coronavaccine@hotmail.com'),
(304, 'sadie.pannell@msn.com'),
(305, 'silas.jens@outlook.com'),
(306, 'info@thecctvhub.com'),
(307, 'bitclaybtc@gmail.com'),
(308, 'no-reply@gmaill.com'),
(309, 'britney.covington@outlook.com'),
(310, 'jenny@justemailmarketing.com'),
(311, 'marketing20211234@gmail.com'),
(312, 'supernaturaltruthfromheaven@gmail.com'),
(313, 'longford.tania@gmail.com'),
(314, 'franck.tamdhu@gmail.com'),
(315, 'paling.stephaine@gmail.com'),
(316, 'office.largeglobes.com@gmail.com'),
(317, 'cardoza.bennett@outlook.com'),
(318, 'hyatt.hermine@gmail.com'),
(319, 'adrian_hobbs2004@yahoo.co.uk'),
(320, 'no-reply@monkeydigital.co'),
(321, 'want.cecil@outlook.com'),
(322, 'dale@explainingyourbusiness.com'),
(323, 'inbox094@glmux.com'),
(324, 'christy.leachman94@outlook.com'),
(325, 'annaup198811l@gmail.com'),
(326, 'annaup198811l@gmail.com'),
(327, 'shepard.erna@gmail.com'),
(328, 'noreply@ghostdigital.co'),
(329, 'shin.meri@gmail.com'),
(330, 'tracy.pereira10@msn.com'),
(331, 'no-reply@digitalsy.org.uk'),
(332, 'joe.ns@gmx.de'),
(333, 'prance.gold.arbitrage@gmail.com'),
(334, 'arthur@choose2help.org'),
(335, 'sckmarcel@yahoo.de'),
(336, 'pearce.tommy54@hotmail.com'),
(337, 'mcbrien.dewey3@msn.com'),
(338, 'hacker@dry0.com'),
(339, 'atrixxtrix@gmail.com'),
(340, 'young.villalpando@msn.com'),
(341, 'ash@techknowspace.com'),
(342, 'covid19stuff-noreply@gmail.com'),
(343, 'sally.newsom@hotmail.com'),
(344, 'cecelia.turk@gmail.com'),
(345, 'winkel.lottie@gmail.com'),
(346, 'noreplymonkeydigital@gmai.com'),
(347, 'sancho.marta@gmail.com'),
(348, 'clinton.whitten48@googlemail.com'),
(349, 'verajohn@fanclub.pm'),
(350, 'sharzhinvik2@gmail.com'),
(351, 'lifeofeuro@gmail.com'),
(352, 'bboriceanu@hotmail.com'),
(353, 'familiegrosser@t-online.de'),
(354, 'rocgolf@msn.com'),
(355, 'man.alvarez@gmail.com'),
(356, 'shakeyourlove@comcast.net'),
(357, 'schancellor46@gmail.com'),
(358, 'quan8582@yahoo.com'),
(359, 'bdeuxzoo@yahoo.fr'),
(360, 'jesuschris666@aol.com'),
(361, 'zsolti93@stcable.co.yu'),
(362, 'fairway@hotmail.it'),
(363, 'HenryFes'),
(364, 'lorrie.takasuka@gmail.com'),
(365, 'priebe@iquest.net'),
(366, 'taeka980@hotmail.com'),
(367, 'jkw1177@yahoo.com'),
(368, 'rwj_taylor@hotmail.com'),
(369, 'rgrhtrgngnjyku665@mail.ru'),
(370, 'tiralcate1989@mail.ru'),
(371, 'freda.amar@hotmail.com'),
(372, 'yourmyheart@gmail.com'),
(373, 'chanda.levering@gmail.com'),
(374, 'kaczmarek.erlinda@outlook.com'),
(375, 'grf45hy6u645ythgfhfh@mail.ru'),
(376, 'wpdeveloperfiver@gmail.com'),
(377, 'marktomson40@gmail.com'),
(378, 'no-replylaf@google.com'),
(379, 'nolan.tiegs@gmail.com'),
(380, 'mealmaker.sergio@yahoo.com'),
(381, 'daliborharald02@gmail.com'),
(382, 'mirta.eve0@gmail.com'),
(383, 'bee.pannell7184@gmail.com'),
(384, 'seymour.gino@gmail.com'),
(385, 'abelbreath456@gmail.com'),
(386, 'leila.sawtell@gmail.com'),
(387, 'jimmyscowley@gmail.com'),
(388, 'dewayne.crombie67@googlemail.com'),
(389, 'panteleyegorin@yandex.com'),
(390, 'bumgarner.lachlan21@yahoo.com'),
(391, 'hall.bernadette@gmail.com'),
(392, 'dora.aston69@yahoo.com'),
(393, 'prindle.gemma@gmail.com'),
(394, 'turbomavro@gmail.com'),
(395, 'trevino.bret@gmail.com'),
(396, 'luis.finnan@yahoo.com'),
(397, 'contact1@theonlinepublishers.com'),
(398, 'clayton.reel@gmail.com'),
(399, 'wendellfoolf@gmail.com'),
(400, 'cavanaugh.osvaldo@googlemail.com'),
(401, 'contact@blincagency.com'),
(402, 'contact2@theonlinepublishers.com'),
(403, 'kurbatakifev1987957akp@inbox.ru'),
(404, 'fabian.brogan@gmail.com'),
(405, 'liit@hotmail.de'),
(406, 'mason.tauchert@hotmail.com'),
(407, 'support@hyperlabs.co'),
(408, 'macy.jeannine@gmail.com'),
(409, 'berniece.tweddle20@msn.com'),
(410, 'hairston.joe@gmail.com'),
(411, 'ericajacksonmi0@yahoo.com'),
(412, 'highsmith.vivien@googlemail.com'),
(413, 'support@newlightdigital.com.hubspot-inbox.com'),
(414, 'ann1512423@protonmail.com'),
(415, 'information@cyberleviathan.com'),
(416, 'ravep@hotmail.com'),
(417, 'lcrawf103@yahoo.com'),
(418, 'kimberley.odonnell@gmail.com'),
(419, 'info@deoleodigitalpublishing.com'),
(420, 'hoppe.louis@googlemail.com'),
(421, 'ricketts.lorrine@msn.com'),
(422, 'btriki@hotmail.com'),
(423, 'fah.igor@yandex.ru'),
(424, 'linda.ray@theremarketingguys.com'),
(425, 'imiranda1@msn.com'),
(426, 'bettie.kellow2@yahoo.com'),
(427, 'dream187@msn.com'),
(428, 'adam789bright@gmail.com'),
(429, 'baughman.carroll@yahoo.com'),
(430, 'devud.vov@gmail.com '),
(431, 'no-reply@google.com'),
(432, 'alfaro.liam@gmail.com'),
(433, 'barbarapatterson@yahoo.com'),
(434, 'macnaghten.sally@gmail.com'),
(435, 'regginafaizelkhakova@yandex.ru '),
(436, 'doloresxtraparty@gmail.com'),
(437, 'ericjonesonline@outlook.com'),
(438, 'ahmedovumedjon@gmail.com '),
(439, 'cyberleviathan.com@cyberleviathan.com'),
(440, 'bruner.isabella@yahoo.com'),
(441, 'dejesus.trista@hotmail.com'),
(442, 'zavhiddinm@gmail.com '),
(443, 'sabina.ratten@gmail.com'),
(444, 'mojo418@msn.com'),
(445, 'michaeltaurf@gmail.com'),
(446, 'vikulya_kas24@mail.ru '),
(447, 'jaxangirelubaev@gmail.com '),
(448, 'CharlesNowly'),
(449, 'marcy.rignall@yahoo.com'),
(450, 'no-replygof@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `role`) VALUES
(64, 'chrisharlow366', 'The25225463!', 'Chris', 'chrisharlow366@yahoo.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts_filter`
--
ALTER TABLE `contacts_filter`
  ADD PRIMARY KEY (`filter`);

--
-- Indexes for table `forbidden_words`
--
ALTER TABLE `forbidden_words`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spam`
--
ALTER TABLE `spam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forbidden_words`
--
ALTER TABLE `forbidden_words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `spam`
--
ALTER TABLE `spam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
