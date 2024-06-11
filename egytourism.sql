-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 18, 2022 at 05:28 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egytourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `adminname`, `password`) VALUES
(1, 'Mohamed Sameh', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `msg_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`msg_id`, `name`, `email`, `message`) VALUES
(1, 'Mohamed', 'mohamedsameh162000@gmail.com', 'hi there'),
(2, 'Mohamed', 'mohamedsameh162000@gmail.com', 'nonono'),
(3, 'm', 'm@m.m', 'mnkj'),
(4, 'm', 'mm@m.m', 'mmm'),
(5, 'vfvf', 'mohamedsameh162000@gmail.com', 'dddd'),
(6, 'Mohamed', 'mohamedsameh162000@gmail.com', 'mohamed'),
(7, 'm', 'mohamedsameh162000@gmail.com', 'bbbbbm'),
(8, 'Mohamed', 'mohamedsameh162000@gmail.com', 'mmm'),
(9, 'Mohamed', 'mohamedsameh162000@gmail.com', 'kkk'),
(10, 'Ali nabil', 'Alinabil389@gmail.com ', 'Gg ya shabab'),
(11, 'Ali nabil', 'Alinabil389@gmail.com ', 'Bro sameh top'),
(12, 'Ali nabil', 'Alinabil389@gmail.com ', 'Ø­Ø§ÙˆÙŠØ§Ù‡'),
(13, 'Mohamed Ehab', 'kareem@kareem.com', 'fjeihgieebgen'),
(14, 'ahmed', 'ahmed@ahmed.com', 'feihgfjeiohgeongekobgiunj'),
(15, 'mohamed', 'mohamed@mohamed.com', 'jfekjg;le,vml;enbelkb'),
(16, 'CrytoAlero', 'ressam_memo19@hotmail.com', 'Have no money? Earn it online. https://lak.rbertilsson.se/'),
(17, 'CrytoAlero', 'robin.walker247@comcast.net', 'Even a child knows how to make money. This robot is what you need! https://lak.rbertilsson.se/'),
(18, 'CrytoAlero', 'godinovirgie@yahoo.com', 'Trust your dollar to the Robot and see how it grows to $100. https://lak.rbertilsson.se/'),
(19, 'CrytoAlero', 'susannah_wells@hotmail.com', 'Have no financial skills? Let Robot make money for you. https://lak.rbertilsson.se/'),
(20, 'CrytoAlero', 'Billy_King27@yahoo.com', 'Thousands of bucks are guaranteed if you use this robot. https://lak.rbertilsson.se/'),
(21, 'CrytoAlero', 'jcruz@null.net', 'No need to worry about the future if your use this financial robot. https://lak.rbertilsson.se/'),
(22, 'CrytoAlero', 'robertoforte@live.com', 'The fastest way to make you wallet thick is here. https://lak.rbertilsson.se/'),
(23, 'CrytoAlero', 'lightandsound06@yahoo.com', 'Launch the financial Robot and do your business. https://lak.rbertilsson.se/'),
(24, 'CrytoAlero', 'rn21barb@aol.com', 'Online job can be really effective if you use this Robot. https://lak.rbertilsson.se/'),
(25, 'CrytoAlero', 'yankeefan159@yahoo.com', 'Launch the robot and let it bring you money. https://lak.rbertilsson.se/'),
(26, 'CrytoAlero', 'AZBSBL21@aol.com', 'Need money? The financial robot is your solution. https://lak.rbertilsson.se/'),
(27, 'CrytoAlero', 'Billy_King27@yahoo.com', 'The huge income without investments is available. https://lak.rbertilsson.se/'),
(28, 'CrytoAlero', 'mkm330@yahoo.com', 'Looking for an easy way to make money? Check out the financial robot. https://lak.rbertilsson.se/'),
(29, 'CrytoAlero', 'Gianl811@msn.com', 'Thousands of bucks are guaranteed if you use this robot. https://lak.rbertilsson.se/'),
(30, 'CrytoAlero', 'peteraniekan@ymail.com', 'The online financial Robot is your key to success. https://lak.rbertilsson.se/'),
(31, 'CrytoAlero', 'Carylec@frontiernet.net', 'Everyone can earn as much as he wants now. https://lak.rbertilsson.se/'),
(32, 'CrytoAlero', 'doublell16@yahoo.com', 'The best online job for retirees. Make your old ages rich. https://lak.rbertilsson.se/'),
(33, 'CrytoAlero', 'mazharul_smile@yahoo.com', 'Find out about the fastest way for a financial independence. https://lak.rbertilsson.se/'),
(34, 'CrytoAlero', 'scholarships_22@yahoo.com', 'Invest $1 today to make $1000 tomorrow. https://lak.rbertilsson.se/'),
(35, 'CrytoAlero', 'lxwpolzkwm1qb@yahoo.com', 'Rich people are rich because they use this robot. https://lak.rbertilsson.se/'),
(36, 'CrytoAlero', 'parasempre_1@hotmail.com', 'Invest $1 today to make $1000 tomorrow. https://lak.rbertilsson.se/'),
(37, 'CrytoAlero', 'peteraniekan@ymail.com', 'Trust your dollar to the Robot and see how it grows to $100. https://lak.rbertilsson.se/'),
(38, 'CrytoAlero', 'tiaboglin@gmail.com', 'Wow! This is a fastest way for a financial independence. https://lak.rbertilsson.se/'),
(39, 'CrytoAlero', 'tetedede13@gmail.com', 'Let your money grow into the capital with this Robot. https://lak.rbertilsson.se/'),
(40, 'CrytoAlero', 'rosalvalujano@yahoo.com', 'Feel free to buy everything you want with the additional income. https://lak.rbertilsson.se/'),
(41, 'CrytoAlero', 'rn21barb@aol.com', 'No need to worry about the future if your use this financial robot. https://lak.rbertilsson.se/'),
(42, 'CrytoAlero', 'moonfairie24@comcast.net', 'Earn additional money without efforts and skills. https://lak.rbertilsson.se/'),
(43, 'CrytoAlero', 'rman772008@yahoo.com', 'The online job can bring you a fantastic profit. https://lak.rbertilsson.se/'),
(44, 'CrytoAlero', 'slsa4879@brealynnvideos.com', 'Thousands of bucks are guaranteed if you use this robot. https://lak.rbertilsson.se/'),
(45, 'CrytoAlero', 'fionaroyds@hotmail.com', 'Try out the automatic robot to keep earning all day long. https://lak.rbertilsson.se/'),
(46, 'CrytoAlero', 'bombers.jw35@yahoo.com', 'Robot never sleeps. It makes money for you 24/7. https://lak.rbertilsson.se/'),
(47, 'CrytoAlero', 'slsa4879@brealynnvideos.com', 'Try out the best financial robot in the Internet. https://lak.rbertilsson.se/'),
(48, 'CrytoAlero', 'mzclauz@yahoo.com', 'See how Robot makes $1000 from $1 of investment. https://lak.rbertilsson.se/'),
(49, 'CrytoAlero', 'Rose40Budsley@aol.com', 'See how Robot makes $1000 from $1 of investment. https://lak.rbertilsson.se/'),
(50, 'CrytoAlero', 'glmayfield@nc.rr.com', 'Launch the financial Bot now to start earning. https://lak.rbertilsson.se/'),
(51, 'CrytoAlero', 'ipnew1@yahoo.com', 'Let the financial Robot be your companion in the financial market. https://lak.rbertilsson.se/'),
(52, 'CrytoAlero', 'damonmoran@ymail.com', 'Making money can be extremely easy if you use this Robot. https://lak.rbertilsson.se/'),
(53, 'CrytoAlero', 'aslanemmi@hotmail.com', 'Launch the financial Robot and do your business. https://lak.rbertilsson.se/'),
(54, 'CrytoAlero', 'marco.hinze15@yahoo.com', 'The success formula is found. Learn more about it. https://lak.rbertilsson.se/'),
(55, 'CrytoAlero', 'paulina_starzec@hotmail.com', 'Make thousands every week working online here. https://lak.rbertilsson.se/'),
(56, 'CrytoAlero', 'pkpribor@ukr.net', 'See how Robot makes $1000 from $1 of investment. https://lak.rbertilsson.se/'),
(57, 'CrytoAlero', 'otisboatus@hotmail.com', 'The huge income without investments is available, now! https://lak.rbertilsson.se/'),
(58, 'CrytoAlero', 'recepture67@hotmail.com', 'Trust the financial Bot to become rich. https://lak.rbertilsson.se/'),
(59, 'CrytoAlero', 'annennyenriche@ymail.com', 'Even a child knows how to make $100 today with the help of this robot. https://lak.rbertilsson.se/'),
(60, 'CrytoAlero', 'rupert@nevin.com', 'Make your computer to be you earning instrument. https://lak.rbertilsson.se/'),
(61, 'CrytoAlero', 'harveywy@grayinbox.org', 'Automatic robot is the best start for financial independence. https://lak.rbertilsson.se/'),
(62, 'CrytoAlero', 'alexishawari@hotmail.com', 'Make dollars just sitting home. https://lak.rbertilsson.se/'),
(63, 'CrytoAlero', 'bridgetroseperson@gmail.com', 'Let your money grow into the capital with this Robot. https://lak.rbertilsson.se/'),
(64, 'CrytoAlero', 'ewekizaf@sdd2q.com', 'The additional income for everyone. https://lak.rbertilsson.se/'),
(65, 'ErnestEnupt', 'no-replyMimiArilssum@gmail.com', 'Hi!  egtourism.live \r\n \r\nWe put up of the sale \r\n \r\nSending your commercial offer through the Contact us form which can be found on the sites in the contact section. Contact form are filled in by our program and the captcha is solved. The profit of this m'),
(66, 'CrytoAlero', 'kadbar3783@nrms.org', 'Financial robot keeps bringing you money while you sleep. https://lak.rbertilsson.se/'),
(67, 'CrytoAlero', 'damonmoran@ymail.com', 'No need to work anymore while you have the Robot launched! https://lak.rbertilsson.se/'),
(68, 'CrytoAlero', 'lovely_tuul@yahoo.com', 'We know how to make our future rich and do you? https://lak.rbertilsson.se/');

-- --------------------------------------------------------

--
-- Table structure for table `museums`
--

CREATE TABLE `museums` (
  `m_id` int(10) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `location` longtext NOT NULL,
  `m_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `museums`
--

INSERT INTO `museums` (`m_id`, `m_name`, `about`, `work`, `location`, `m_img`) VALUES
(1, 'The Egyptian Museum (Tahrir)', 'The Egyptian Museum is the oldest archaeological museum in the Middle East, and houses the largest collection of Pharaonic antiquities in the world. The museum displays an extensive collection spanning from the Predynastic Period to the Greco-Roman Era.', 'All Week - 09:00 AM to 03:00 PM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.6185285223546!2d31.233616199999997!3d30.047800100000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458b14d72adf029%3A0x9a38f9bbb6edbfe4!2sThe%20Egyptian%20Museum!5e0!3m2!1sen!2seg!4v1656', 'museum-imgs/tah.jpg'),
(2, 'Mummification Museum', 'Mummification museum in Luxor (ancient Thebes), intended to provide an understanding of the process to preserve the body. The ancient Egyptians not only applied embalming to dead humans but also to many animals (Cats, dogs, crocodiles…. etc.). ', 'All Week - 09:00 AM to 01:00 PM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.088901358092!2d31.227927815041756!3d30.00560358189643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145847105643425d%3A0x5c7b299fa692161a!2sThe%20Coptic%20Museum!5e0!3m2!1sen!2seg!4v1656', 'museum-imgs/mum.jpg'),
(3, 'Museum of Islamic Art', 'The Mmuseum of Islamic Art contains one of the largest and most extensive collections of Islamic artifacts in the world. The idea of collecting and display the grand collection of artifacts began in 1880 AD. ', 'Every day - 09:00 AM to 05:00 PM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.7259310183313!2d31.2527212!3d30.0447197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f7d6211c891%3A0xad7d1092373bae8b!2sMuseum%20of%20Islamic%20Art%20in%20Cairo!5e0!3m2!1sen!2seg!4v165', 'museum-imgs/isl.jpg'),
(4, 'The Coptic Museum', 'The Coptic Museum houses the largest collection of Coptic artifacts in the world and was inaugurated in 1910. The museum was established through the efforts of Marcus Simaika Pasha, a prominent Coptic figure .', 'Everyday - 09:00 AM to 05:00 PM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.920623177244!2d31.27577191504309!3d30.067809681873864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f9c699355ff%3A0xc03331c32d0926e5!2sThe%20Coptic%20Museum!5e0!3m2!1sen!2seg!4v1656018863279!5m2!1sen!2seg', 'museum-imgs/cop.jpg'),
(5, 'National Museum of Egyptian Civilization(NMEC)', 'The NMEC is the first of its kind in Egypt and the Arab world. It presents the full range of the richness and diversity of Egyptian civilization throughout the ages, from prehistoric times to the present day by focusing on its continuity and stability.', 'Everyday - 09:00 AM to 05:00 PM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.0002467999875!2d31.248260400000003!3d30.0081493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458476863e39e8f%3A0xc2e058446f8f145d!2sThe%20National%20Museum%20of%20Egyptian%20Civilization!5', 'museum-imgs/nmec.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `about` longtext NOT NULL,
  `year` varchar(50) DEFAULT NULL,
  `era` varchar(50) DEFAULT NULL,
  `museum` varchar(50) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `other` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `name`, `about`, `year`, `era`, `museum`, `type`, `other`, `image`) VALUES
(90, 'Amenhotep III and Tiye Colossal Statue', 'This colossal statue depicts the royal couple, Amenhotep III and his wife Tiye, along with their three daughters. This is the largest known ancient Egyptian family group statue ever carved, and it is fitting that it dates to the reign of Amenhotep III, whose prosperous rule was marked by great such monumentality.', '(c.1390–1352 BC)', 'New Kingdom, Dynasty 18, reign of Amenhotep', 'The Egyptian Museum (Tahrir)', 'Pharonic', 'Medium: Limestone Provenance: Luxor', '62bfcdbe5223e.jpg'),
(91, 'Khafre Statue', 'This statue depicts King Khafre (Khefren to the Greeks), the builder of the second largest pyramid at Giza. It was found in the valley temple of his pyramid complex. The king is majestically seated on a throne with all the confidence of a man who built a mountain. The two sides of his throne are decorated with the sema-tawy, symbol of the unity of Upper and Lower Egypt, signifying his rule over the two halves of the country. Perched on the back of the throne, behind the king&#039;s head, the god Horus in the form of a falcon spreads his wings around the king&#039;s head in a gesture of protection.', '(c.2558–2532 BC)', 'Old Kingdom, 4th Dynasty, reign of Khafre', 'The Egyptian Museum (Tahrir)', 'Pharonic', 'Medium: Diorite Provenance: Giza', '62bfd15803fa8.jpg'),
(100, 'Khufu Statue', 'This statue depicts King Khufu (known to the Greeks as Cheops), the builder of the Great Pyramid of Giza. Ironically, this small, 7.5 cm tall, statuette is the only confirmed contemporary three dimensional of this king. When it was first discovered, the head was missing. Noticing that the break was recent, Sir Flinders Petrie, aware of the importance of the find, ordered a search for the missing head, which was finally discovered three weeks later.', '(c.2589ï¿½2566 BC)c', 'Old Kingdom, 4th Dynasty, reign of Khufu', 'The Egyptian Museum (Tahrir)', 'Pharonic', 'Medium: Ivory Provenance: Abydos', '62bfdcd89c85a.jpg'),
(101, 'Masks of Yuya and Thuya', 'The mummies of Yuya and Thuya were discovered wearing these cartonnage masks covered with gold leaf. Yuya was the father of Queen Tiye, wife of king Amenhotep III, and husband of Thuya. Yuya came from the town of Akhmim, where he probably held estates and where he was a priest of the Egyptian god Min, the chief god of the area. Thuya held important religious titles, in addition to the title of the Royal Mother of the Great Wife of the King.', '(c.1390–1352 BC)', 'New Kingdom, 18th Dynasty, reign of Amenhotep III', 'The Egyptian Museum (Tahrir)', 'Pharonic', 'Medium: Cartonnage, gold Provenance: Luxor, Valley of the Kings, Tomb of Yuya and Tjuya (KV46)', '62bfdd9de356b.jpg'),
(102, 'Menkaura triads', 'Group statue of king Menkaura. This sculpted group statue, shows King «Menkaure» between two ladies. The goddess «Hathor» is on his right and goddess (Bat), is on his left. He wears the crown of Upper Egypt (The white crown). Goddess «Hathor» wears her usual crown, composed of the sun disk between the two cow&#039;s horns, while the other lady is wearing the symbol of her nome.', '(ca. 2494-2472 BC).', 'Old Kingdom, Dynasty 4, Reign of Menkaure ', 'The Egyptian Museum (Tahrir)', 'Pharonic', 'Medium: Grey-green Schist. Provenance: Giza, Valley Temple of Menkaure.', '62bfde6e37765.jpg'),
(103, 'Statue of the Dwarf Seneb and his Family', 'For the sake of the symmetry of the composition, the sculptor carves the couple’s two children where Seneb’s legs would have been, had he been of the same height as his wife. The children are represented naked, with their index finger in their mouth–the standard manner in which children were typically depicted in art. The boy is seen on the viewer’s left, wearing a sidelock of youth and depicted in skin that is darker than his sister’s, who stands on his left. The sidelock of youth was typically worn by male children, and was cut off at puberty', '(24th – 23rd Century BC)', 'Late Dynasty 5- Early Dynasty 6', 'The Egyptian Museum (Tahrir)', 'Pharonic', 'Provenance: Giza, Tomb of Seneb. Medium: Painted Limestone.', '62bfdf4ea4631.jpg'),
(104, 'Statue of Mentuhotep', 'He is depicted wearing the Red Crown and the tight fitting costume of the Sed festival, a jubilee celebrated after 30 years of a reign. His black skin and the position of his crossed arms associate him with the god Osiris, god of death, fertility, and resurrection. The statue was found by chance in 1900 by Howard Carter as he rode through the forecourt of Mentuhotep’s mortuary temple at Deir al-Bahari, when his horse tripped on something. Upon investigation, this turned out to be a stone slab covering a shaft. Carter excavated it, and discovered a small chamber containing the statue intricately wrapped in linen, along with other artifacts.', '(c.2055–2004 BC)', 'Middle Kingdom, 11th Dynasty, Nebheptre Mentuhotep', 'The Egyptian Museum (Tahrir)', 'Pharonic', 'Medium: Painted sandstone Provenance: Deir al-Bahari, Mortuary complex of Mentuhotep Nebheptre', '62bfe031b7d0e.jpg'),
(105, 'Statue of Ka-aper', 'The number of wooden statues that survived from ancient Egypt is very small, compared to their stone counterparts. The reasons behind this are that the quality of local wood was poor. High-quality wood, such as cedar, had to be imported from places like Lebanon. Another reason is that wood does not survive the as well as stone. Many wooden statues probably disintegrated through time. This beautiful piece was made for the priest-reader, Ka-aper. It was originally plastered and painted. He is represented in a striding pose, with his left foot forward, and holding a staff (now substituted with a copy) in his left hand. ', '(ca. 2465-2323 BC)', 'Old Kingdom, Dynasty 5 ', 'The Egyptian Museum (Tahrir)', 'Pharonic', 'Provenance: Saqqara, Mastaba of Ka-aper Medium: Wood; Eyes: Rock crystal, calcite, copper, black stone', '62bfe0eebce29.jpg'),
(106, 'Sarcophagus of Kawit', 'This is the sarcophagus of Queen Kawit, the wife of King Nebhepetre Mentuhotep, the founder of the Middle Kingdom. The outer faces are beautifully decorated with daily life scenes, in one case depicting her drinking in front of a table laden with food, while one of the maids is hairdressing the queen&#039;s hair, and a maid pours her next drink. She holds a mirror in her free hand. In another scene, she is shown holding a lotus flower to her nose while dipping her finger in an unguent container held up by a servant. Her chest lies in front of her, the jewelry inside it depicted one on top of the other. Other scenes show cows being milked or calves breastfeeding.', '(c.2055–2004 BC)', 'Middle Kingdom, 11th Dynasty, reign of Nebhepetre ', 'The Egyptian Museum (Tahrir)', 'Pharonic', 'Medium: Limestone Provenance: Deir al Bahari', '62bfe1905b383.jpg'),
(107, 'Narmer Palette', 'The Narmer Palette contains some of the earliest hieroglyphic inscriptions ever found. It is thought to depict the unification of Upper and Lower Egypt under King Narmer. On one side, the king, wearing the Red Crown of Lower Egypt, marches in a victory procession. Below him, the necks of two mythical animals, called serpopards, intertwine, while being restrained by human figures. They are thought to represent Upper and Lower Egypt being brought under the king&#039;s control. On the other side, the king is depicted wearing the White Crown of Upper Egypt, about to smite a Lower Egyptian chief.', ' (c.3100 BC)', 'Early Dynastic Period, 1st Dynasty, reign of Narme', 'The Egyptian Museum (Tahrir)', 'Pharonic', 'Medium: Green schist Provenance: Hierakonpolis', '62bfe232d2629.jpg'),
(108, 'Osiris Statuette', 'Osiris was the god of vegetation and the underworld. He was the deity who oversaw the weighing of the heart, which determined whether the deceased was worthy of admittance into the afterlife. For this reason, he was revered by the deceased, and statuettes such as this one were made to be placed in tombs. Another reason for this veneration are the stories of the death of Osiris, his mummification and subsequent transition to the afterlife, an outcome which every human hoped to emulate.', '664–332 B.C.', 'Dynasty 26–30', 'Mummification Museum', 'Pharonic', 'Medium: Leaded bronze', '62bfe3ff264d0.jpg'),
(109, 'Statue of Nephthys', 'Nephthys, whose name means “Mistress of the House”, played an important role in ancient Egyptian funerary beliefs. Her and her sister Isis’ grief at the death of their brother Osiris made them the archetypal mourners for the dead. She is here depicted in the standard mourning position, kneeling; had her arm not been missing, it would have been turned upward, with the palm of her hand facing her forehead. When she and Isis discovered the body of their murdered brother, they stood on either side of him, and resurrected him. For these reasons, Isis and Nephthys are depicted at either end of a coffin or sarcophagus, often in the mourning position. This figure of Nephthys most likely comes from precisely this context.', '304 B.C.–A.D. 364', ' Ptolemaic or Roman Period', 'Mummification Museum', 'Coptic', 'Medium: Cupreous metal', '62bfe4da04c3f.jpg'),
(110, 'The Mummy of Masaharti', 'General of the army, and high priest of Amun at Thebes. He was the son of king piedjem I. His mummy was found in the royal cache at Deir El Bahri in 1881. The mummy of Masaharti was perfected, show the high standard for the art of mummification during Dynasty 21, the face was painted with red ocher, and the middle finger of the right hand still has it’s gold finger cap.', '1054-1045 BC', '20th dynasty', 'Mummification Museum', 'Pharonic', '-', '62bfe5f653092.jpg'),
(111, 'Astrolabe, Compass, Celestial sphere', 'Astrolabe, copper alloy, inlaid with gold and silver, bearing the name Sultan Bayezid 9th AH/15th AD century-Turkey Compass of copper inlaid with silver', '1070 AH ', 'The Ottoman era in 1070 AH ', 'Museum of Islamic Art', 'Islamic', 'Safavid period 12th century AH / 18 AD - Iran Celestial sphere of copper by the work of the manufacturer Ziauddin Mohammed The Ottoman era in 1070 AH - Egypt', '62bfe6e65b089.jpg'),
(112, 'Door of silver laminated wood', 'A door of silver laminated wood dating back to the era of the family of Muhammad Ali 13th A.H - 19th A.D century.', '13th A.H - 19th A.D century.', 'the era of the family of Muhammad Ali', 'Museum of Islamic Art', 'Islamic', '-', '62bfe7dc6f4b8.jpg'),
(113, 'Ewer made of copper', 'Ewer made of copper decorated in enamel and gold.', '13th A.H/ 19th A.D century', 'Islamic era', 'Museum of Islamic Art', 'Islamic', 'Mideum : copper  Provinence : Iran - Qajar.', '62bfe9dcc714a.jpg'),
(114, 'Incense Burner', 'Incense burner made of a copper alloy inlaid with gold and silver.', '8th century AH / 14th century AD', 'Mamluk Period', 'Museum of Islamic Art', 'Islamic', 'Medium: Copper, gold, silver Provenance: Egypt', '62bfeaa7266f9.jpg'),
(116, 'Mosque lamp', 'Mosque lamp containing the name , titles and the symbol of Prince Shaykhu One of the princes of Sultan Hassan. The neck is decorated with Naskh inscription, containing a Qur&#039;anic verse from  Surat Al-Nur &quot; the Light&quot;. ', '9H/15m century', 'Mamluk period', 'Museum of Islamic Art', 'Islamic', 'Medium: Glass   Province : Cairo', '62bfec281d864.jpg'),
(117, 'Pitcher Belonging to Tabtaq', 'A jug made of copper inlayed with silver with decorations and inscriptions in the Naskh script, represented in the titles of the owner of the jug, including “what he did in the order of the headquarters of the honorable high Mawlawi al-Adli al-Ghazi al-Mujahideen al-Murabati al-Makhdudumi al-Saifi Tabaq al-Malik al-Ashrafy.” He is one of the princes of King al-Ashraf Khalil bin Qalawun', ' 709-741 AH / 1309-1340 AD.', 'Mamluk period', 'Museum of Islamic Art', 'Islamic', 'He is one of the princes of King al-Ashraf Khalil bin Qalawun. It appears on the jug (logos). It bears the drawing of a cup denoting the job of the water- supplier or the drinker - the one responsible for the Sultan’s drinkies .', '62bfecb463e01.jpg'),
(118, 'Qibla finder of wood', 'Qibla finder of wood lacqatuered painted wood. ', '12 A.H/ 18th A.D Century.  ', 'Islamic era', 'Museum of Islamic Art', 'Islamic', 'Provinence: Turkey.Ottoman .', '62bfed295c2be.jpg'),
(119, 'Surgical scalpel', 'A surgical scalpel with a long handle tends in a sharp blade; the blade is less thick and less narrow than the handle. Excavations which took place in the city of Fustat – the first capital of Islamic Egypt established by Amr ibn al-&#039;As in the year AH 21 / AD 641 – revealed a large cache of surgical instruments, considered to be the oldest extant of their kind. This collection demonstrates Islamic Egypt&#039;s remarkable progress in the fields of medicine and surgery.', 'Hegira 3rd century / AD 9th century', 'Islamic era', 'Museum of Islamic Art', 'Islamic', ' Medium: Cast copper. Province:  Egypt ', '62bfedcfba009.png'),
(120, 'Decorated niche of Virgin Mary', 'Decorated  Niche of Virgin Mary suckling  the infant Jesus. Excavations at the Monastery of St. Jeremiah in Saqqara have yielded several niches that were pierced into the eastern walls of monks’ cells. Monks used these niches as spaces in which to pray. These niches bear Christian scenes showing the enthroned Jesus. Two niches are decorated with the Virgin Mary nursing the infant Jesus. She is depicted flanked by angels and saints.', '6th or 7th century A.D', 'Coptic era', 'The Coptic Museum', 'Coptic', 'Medium : Tempera  Monastery of St. Jeremiah - Saqqara ', '62bfee886eed8.jpg'),
(121, 'Icon of Saint Antony and Saint Paul', 'This famous icon represents the visit of Saint Antony (on the left) to Saint Paul, who lived  in the eastern desert near the Red Sea.', '(c.2589–2566 BC)', 'Coptic era', 'The Coptic Museum', 'Coptic', '-', '62bfef565fbc9.jpg'),
(122, 'Ivory comb', 'In Egypt the use of combs can be traced back more than five thousand years when they included in burials of both men and women, a custom that continued well into the Byzantine times when some burials document the practice of placing a comb on the chest of the deceased. Wood was the most common material used for making combs, Ivory examples like this one was luxury items, some perhaps intended for liturgical use.', '6th century A.D.', 'Coptic era', 'The Coptic Museum', 'Coptic', 'This ivory comb, from the Byzantine Era (330 A.D.- 641 A.D.) with its fine quality and decoration suggests that it was rather used in a liturgical context than for every-day purposes. The central panel on one side shows two angles support a wreath inside of which a warrior on horseback.', '62bfefe2443cc.jpg'),
(123, 'Lustreware', 'Lustreware', 'AH 358-567 / AD 969-1169', 'Fatimid Period', 'National Museum of Egyptian Civilization(NMEC)', 'Islamic', 'Medium: pottery Provenance: unknown', '62bff207b2403.jpg'),
(124, 'Granite statue of King Thutmose III', 'Thutmose III (variously also spelt Tuthmosis or Thothmes), sometimes called Thutmose the Great,[3] was the sixth pharaoh of the Eighteenth Dynasty. Officially, Thutmose III ruled Egypt for almost 54 years and his reign is usually dated from 28 April 1479 BC to 11 March 1425 BC, from the age of two and until his death at age fifty-six; however, during the first 22 years of his reign, he was coregent with his stepmother and aunt, Hatshepsut, who was named the pharaoh', '5000 B.C', 'Pharonic', 'National Museum of Egyptian Civilization(NMEC)', 'Pharonic', 'Medium: Granite Provenance : Karnak', '62bff2a02aede.jpg'),
(125, 'Bracelets of King Ramesses II', 'Gold and lapis lazuli bracelets of King Ramesses II', ' ca. 1279–1213 BC ', 'Dynasty 18, reign of King Ramesses II', 'National Museum of Egyptian Civilization(NMEC)', 'Pharonic', 'Medium: Gold and lapis lazuli Provenance : Tall Basta, Eastern Delta', '62bff3443ae87.jpg'),
(126, 'Belt of Prince Ptah-Shepses', 'Belt of Prince Ptah-Shepses made of gold, red carnelian and volcanic glass', ' ca. 2323-2150', 'Old Kingdom, dynasty 6', 'National Museum of Egyptian Civilization(NMEC)', 'Pharonic', ' Medium :Gold Provenance : Saqqara', '62bff3bddf858.jpg'),
(127, 'A lamp in the name of Sultan Hassan', 'A lantern of glass on its neck has a gilded Quranic writing, and on its body an inscription in blue enamel with the name of Sultan Hassan, from the Sultan Hassan School.', '264', 'Mamluk Period', 'National Museum of Egyptian Civilization(NMEC)', 'Islamic', 'Medium : Enameled glass Provenance: Egypt', '62bff45550e18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(10) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `cardno` bigint(16) NOT NULL,
  `date` date NOT NULL,
  `amount` varchar(10) NOT NULL,
  `expdate` int(10) NOT NULL,
  `cvv` int(3) NOT NULL,
  `user_id` int(10) NOT NULL,
  `sub_type` varchar(100) NOT NULL,
  `sub_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `transaction_id`, `cardno`, `date`, `amount`, `expdate`, `cvv`, `user_id`, `sub_type`, `sub_id`) VALUES
(8, '295069226', 1234567891322222, '2022-06-29', '0', 2022, 123, 35, '1 Month', 4),
(9, '219065757', 1111123554444444, '2022-06-30', '0', 2023, 159, 36, '1 Year', 5),
(10, '1606721898', 20, '2022-06-30', '100', 2022, 123, 37, '1 Month', 6),
(11, '806295215', 1236544444444444, '2022-06-30', '99.99$', 2045, 159, 38, '1 Month', 7),
(12, '526977824', 7888888888889888, '2022-06-30', '99.99$', 2024, 123, 39, '1 Month', 8),
(13, '1736927302', 1478888888888888, '2022-06-30', '', 2023, 144, 40, '1 Year', 9),
(14, '2004247538', 9871547896325789, '2022-07-02', '', 2024, 147, 41, '1 Year', 10),
(15, '539761928', 1111111111111111, '2022-07-03', '99.99$', 2022, 111, 42, '1 Month', 11),
(16, '442929708', 36, '2022-07-04', '99.99$', 2022, 365, 43, '1 Month', 12),
(17, '1858276188', 1223666559988, '2022-07-04', '99.99$', 2026, 580, 44, '1 Month', 13),
(18, '1910444522', 1234567812345678, '2022-07-05', '', 2026, 125, 45, '1 Year', 14),
(19, '715293413', 1234567898765432, '2022-07-14', '99.99$', 2022, 258, 46, '1 Month', 15),
(20, '543472770', 1234567812345687, '2022-07-23', '', 2026, 123, 47, '1 Year', 16),
(21, '491993132', 11111111, '2022-07-25', '', 2022, 555, 48, '1 Year', 17),
(22, '2131835985', 99999999999, '2022-07-27', '', 2022, 666, 49, '1 Year', 18),
(23, '497632444', 1423569896583214, '2022-08-08', '', 2025, 369, 50, '1 Year', 19);

-- --------------------------------------------------------

--
-- Table structure for table `premium`
--

CREATE TABLE `premium` (
  `part_id` int(6) NOT NULL,
  `video` varchar(255) NOT NULL,
  `f_video` varchar(255) DEFAULT NULL,
  `s_video` varchar(255) DEFAULT NULL,
  `audio` varchar(255) NOT NULL,
  `s_audio` varchar(255) DEFAULT NULL,
  `pano_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premium`
--

INSERT INTO `premium` (`part_id`, `video`, `f_video`, `s_video`, `audio`, `s_audio`, `pano_img`) VALUES
(90, 'videos/IMG_0357.mp4', 'videos/IMG_0514.mp4', 'videos/IMG_0443.mp4', 'audio/amenhotep-english.mp3', 'audio/amenhotep-arabic.mp3', 'morei/20.jpg'),
(91, 'videos/IMG_0521.mp4', 'videos/IMG_0357.mp4', 'videos/IMG_0357.mp4', 'audio/kenglish.mp3', 'audio/karabic.mp3', 'morei/khaefre4.jpg'),
(100, 'videos/IMG_0521.mp4', 'videos/IMG_0481.mp4', 'videos/VID-20200215-WA0076.mp4', 'audio/kuenglish.mp3', 'audio/kuarabic.mp3', 'morei/kh (1).jpg'),
(101, 'videos/IMG_0527.mp4', 'videos/IMG_0357.mp4', 'videos/IMG_0514.mp4', 'audio/ytenglish.mp3', 'audio/ytarabic.mp3', 'morei/yuya-tuya.jpg'),
(102, 'videos/IMG_0357.mp4', 'videos/IMG_0514.mp4', 'videos/', 'audio/menglish.mp3', 'audio/marabic.mp3', 'morei/king-menkawre-2.jpg'),
(103, 'videos/IMG_0443.mp4', 'videos/IMG_0357.mp4', 'videos/IMG_0514.mp4', 'audio/dwenglish.mp3', 'audio/dwarabic.mp3', 'morei/emjg4vlxgaev7f.jpg'),
(104, 'videos/IMG_0357.mp4', 'videos/IMG_0443.mp4', 'videos/IMG_0514.mp4', 'audio/stmenglish.mp3', 'audio/stmarabic.mp3', 'morei/3d527ccff6ac007b1a2aa68a0ec504b1.jpg'),
(105, 'videos/IMG_0443.mp4', 'videos/IMG_0514.mp4', 'videos/IMG_0357.mp4', 'audio/stenglish.mp3', 'audio/starabic.mp3', 'morei/ewd6kixxsaaxpkl.jpg'),
(106, 'videos/IMG_0514.mp4', 'videos/IMG_0443.mp4', 'videos/IMG_0357.mp4', 'audio/senglish.mp3', 'audio/sarabic.mp3', 'morei/19574_800x800-1.jpg'),
(107, 'videos/IMG_0443.mp4', 'videos/IMG_0357.mp4', 'videos/IMG_0514.mp4', 'audio/nenglish.mp3', 'audio/narabic.mp3', 'morei/ev_qi_xxyaguhgm.jpg'),
(108, 'videos/IMG_0357.mp4', 'videos/IMG_0514.mp4', 'videos/IMG_0443.mp4', 'audio/osoris-en.mp3', 'audio/osoris-ar.mp3', 'morei/LC-61_45_EGDP027998.jpg'),
(109, 'videos/IMG_0443.mp4', 'videos/IMG_0357.mp4', 'videos/IMG_0514.mp4', 'audio/nepth-en.mp3', 'audio/nepth-ar.mp3', 'morei/dsc_0790.jpg'),
(110, 'videos/IMG_0357.mp4', 'videos/IMG_0443.mp4', 'videos/IMG_0514.mp4', 'audio/masha-en.mp3', 'audio/masha-ar.mp3', 'morei/0_156.jpg'),
(111, 'videos/IMG_0514.mp4', 'videos/IMG_0443.mp4', 'videos/', 'audio/en.mp3', 'audio/ar.mp3', 'morei/img_20190729_105038.jpg'),
(112, 'videos/IMG_0357.mp4', 'videos/IMG_0443.mp4', 'videos/IMG_0514.mp4', 'audio/door-en.mp3', 'audio/door-ar.mp3', 'morei/door2.jpg'),
(113, 'videos/IMG_0443.mp4', 'videos/', 'videos/', 'audio/eweren.mp3', 'audio/ewer-ar.mp3', 'morei/16374-2.jpg'),
(114, 'videos/IMG_0443.mp4', 'videos/', 'videos/', 'audio/burner-en.mp3', 'audio/burner-ar.mp3', 'morei/aaag_0057.jpg'),
(116, 'videos/IMG_0443.mp4', 'videos/', 'videos/', 'audio/lamp-en.mp3', 'audio/lamp-ar.mp3', 'morei/upload_product_entity_db_product_mainimage_c9cd95d54c203d9c81be15f61b22b6cc.jpg'),
(117, 'videos/IMG_0514.mp4', 'videos/', 'videos/', 'audio/tabtaq-en.mp3', 'audio/tabtaq-ar.mp3', 'morei/271174427_665311167810148_6316734871679706987_n.jpg'),
(118, 'videos/IMG_0357.mp4', 'videos/', 'videos/', 'audio/qibla-en.mp3', 'audio/qibla-ar.mp3', 'morei/1_edit_2.jpg'),
(119, 'videos/IMG_0443.mp4', 'videos/', 'videos/', 'audio/surg-en.mp3', 'audio/surg-ar.mp3', 'morei/1.png'),
(120, 'videos/IMG_0443.mp4', 'videos/', 'videos/', 'audio/niche-en.mp3', 'audio/niche-ar.mp3', 'morei/1.jpg'),
(121, 'videos/IMG_0443.mp4', 'videos/', 'videos/', 'audio/anton-en.mp3', 'audio/anton-ar.mp3', 'morei/g75a3519.jpg'),
(122, 'videos/IMG_0443.mp4', 'videos/IMG_0514.mp4', 'videos/IMG_0357.mp4', 'audio/comb-en.mp3', 'audio/comb-ar.mp3', 'morei/coptic-museum1.jpg'),
(123, 'videos/IMG_0443.mp4', 'videos/', 'videos/', 'audio/lust-en.mp3', 'audio/lust-ar.mp3', 'morei/dsc_9583-.jpg'),
(124, 'videos/IMG_0357.mp4', 'videos/IMG_0514.mp4', 'videos/', 'audio/gran-en.mp3', 'audio/gran-ar.mp3', 'morei/koooooo1.jpg'),
(125, 'videos/IMG_0514.mp4', 'videos/', 'videos/', 'audio/ramsees-en.mp3', 'audio/ramsees-ar.mp3', 'morei/dsc_9620-555555.jpg'),
(126, 'videos/IMG_0443.mp4', 'videos/IMG_0514.mp4', 'videos/IMG_0357.mp4', 'audio/belt-en.mp3', 'audio/belt-ar.mp3', 'morei/crown.jpg'),
(127, 'videos/IMG_0514.mp4', 'videos/IMG_0443.mp4', 'videos/', 'audio/sult-english.mp3', 'audio/sult-arabic.mp3', 'morei/2222.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` int(10) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `mobile` int(30) NOT NULL,
  `cardno` int(30) NOT NULL,
  `exp` varchar(200) NOT NULL,
  `cvv` int(10) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `subscription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `fullName`, `userName`, `email`, `password`, `country`, `mobile`, `cardno`, `exp`, `cvv`, `gender`, `subscription`) VALUES
(17, 'Mohamed Sameh Mohamed Farid', 'MohamedEhab', 'mohamedsameh162000@gmail.com', '123', 'Egypt', 1124449731, 9875421, '2022-01', 355, 'male', ''),
(20, 'Kamelllll', 'Kamel', 'kamel@kamel.kamel', 'kamolaa', 'Algeria', 112478, 2147483647, '2022-12', 111, 'male', 'one-year'),
(21, 'kamlll', 'kamlll', 'kaml@k.kk', 'nonono', 'lk', 2147483647, 2147483647, '2023-12', 147, 'male', '1 Month'),
(22, 'mn', 'mnn', 'mn@hag', 'nonono', 'akkal', 124785, 2147483647, '2041-12', 159, 'female', '1 Month'),
(23, 'mnmn', 'mnnn', 'nnmn@m', 'mnmnmn', 'mnjkl', 14785, 2147483647, '2038-12', 111, 'male', '1 Month'),
(24, 'koko', 'kokoui', 'koko@em.m', 'nonono', 'mnn', 1478569, 2147483647, '2042-12', 147, 'male', '1 Month'),
(25, 'joe', 'joeeey', 'joe@joe.joe', 'nonono', 'Egypt', 2147483647, 2147483647, '2024-10', 145, 'male', '1 Month'),
(26, 'nnnn', 'mmnnmnm', 'nn@hj', 'nonono', 'mnn', 1444444444, 2147483647, '2025-12', 147, 'male', '1 Month'),
(27, 'Mohamed Sameh Mohamed Farid', 'MohamedS1611', 'mohamedsameh162000@gmail.com', '12345', 'Egypt', 1124449731, 2147483647, '2022-07', 123, 'male', '1 Month'),
(35, 'Mohamed Sameh Mohamed Farid', 'MohamedS1611', 'mohamedsameh162000@gmail.com', '12345', 'Egypt', 1124449731, 2147483647, '2022-07', 123, 'male', '1 Month'),
(36, 'Youssif Mostafa Ahmed', 'JoeBro', 'joe@gmail.com', 'joejoe', 'Egypt', 1122342293, 2147483647, '2023-12', 159, 'male', '1 Year'),
(37, 'omar mansour', 'mansour159', 'mansouro621@gmail.com', 'omarmansour1', 'egypt', 1022285478, 20, '2022-07', 123, 'male', '1 Month'),
(38, 'koko', 'kokoo', 'koko@kooo', 'kokokoko', 'egy', 123569872, 2147483647, '2045-12', 159, 'male', '1 Month'),
(39, 'Mohamed Sameh Mohamed Fariddmnmoo', 'momoo', 'mohamedsameh16dd0@gmail.com', 'gogogo', 'Egypt', 2147483647, 2147483647, '2024-01', 123, 'male', '1 Month'),
(40, 'jj', 'jjj', 'jj@mn.m', 'mnmnmn', 'eeee', 1458788988, 2147483647, '2023-01', 144, 'male', '1 Year'),
(41, 'Mohamed Sameh', 'MohamedS16', 'mohamed@mohamed.com', 'Barcelona10', 'Egypt', 2147483647, 2147483647, '2024-01', 147, 'male', '1 Year'),
(42, 'Mohamed Sameh Mohamed', 'MohamedS16', 'mohamedsameh162000@gmail.com', '123456', 'Egypt', 1124449731, 2147483647, '2022-07', 111, 'male', '1 Month'),
(43, 'Ali nabil', 'Alinabil00', 'alinabil389@gmail.com', '12345', 'Egypt ', 1099930302, 36, '2022-07', 365, 'male', '1 Month'),
(44, 'Nour', 'Nour', 'elaria@nour.nour', '123123', 'Egupt', 5585666, 2147483647, '2026-07', 580, 'female', '1 Month'),
(45, 'Menna', 'Menna', 'menna@menna.menna', '12345678', 'Egypt', 11111111, 2147483647, '2026-07', 125, 'female', '1 Year'),
(46, 'magda', 'magda', 'magda@magda.magda', '123456', 'egypt', 2147483647, 2147483647, '2022-09', 258, 'female', '1 Month'),
(47, 'Nagi', 'Nagi', 'nagi@nagi.nagi', 'naginagi', 'Nagi', 1111111111, 2147483647, '2026-07', 123, 'male', '1 Year'),
(48, 'Kareem Ahmed', 'kareemahmed', 'kareem@123.com', '123456', 'Egypt', 111111111, 11111111, '2022-07', 555, 'male', '1 Year'),
(49, 'ahmed', 'ahmed', 'ahmed@ahmed.com', '123456', 'Egypt', 1111111111, 2147483647, '2022-12', 666, 'male', '1 Year'),
(50, 'Mostafa', 'mostafa', 'mostafa@gmail.com', '123456', 'Egypt', 1030206854, 2147483647, '2025-08', 369, 'male', '1 Year');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `user_id`, `duration`, `start_date`, `end_date`) VALUES
(4, 35, '1 Month', '2022-06-29', '0000-00-00'),
(5, 36, '1 Year', '2022-06-30', '0000-00-00'),
(6, 37, '1 Month', '2022-06-30', '0000-00-00'),
(7, 38, '1 Month', '2022-06-30', '0000-00-00'),
(8, 39, '1 Month', '2022-06-30', '0000-00-00'),
(9, 40, '1 Year', '2022-06-30', '0000-00-00'),
(10, 41, '1 Year', '2022-07-02', '0000-00-00'),
(11, 42, '1 Month', '2022-07-03', '0000-00-00'),
(12, 43, '1 Month', '2022-07-04', '0000-00-00'),
(13, 44, '1 Month', '2022-07-04', '0000-00-00'),
(14, 45, '1 Year', '2022-07-05', '0000-00-00'),
(15, 46, '1 Month', '2022-07-14', '0000-00-00'),
(16, 47, '1 Year', '2022-07-23', '0000-00-00'),
(17, 48, '1 Year', '2022-07-25', '0000-00-00'),
(18, 49, '1 Year', '2022-07-27', '0000-00-00'),
(19, 50, '1 Year', '2022-08-08', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `swr`
--

CREATE TABLE `swr` (
  `images` varchar(255) NOT NULL,
  `part_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `swr`
--

INSERT INTO `swr` (`images`, `part_id`) VALUES
('20 (1).jpg', 90),
('20.jpg', 90),
('tye3.jpg', 90),
('tye4.jpg', 90),
('tye5.jpg', 90),
('khaefre.jpg', 91),
('khaefre1.jpg', 91),
('khaefre2.jpg', 91),
('khaefre3.jpg', 91),
('khaefre4.jpg', 91),
('kh (1).jpg', 100),
('kh.jpg', 100),
('kh1.jpg', 100),
('kh3.jpg', 100),
('mask-of-thuiu_3.jpg', 101),
('mask-of-thuiu_edit1_small.jpg', 101),
('mask-of-yuya.jpg', 101),
('yuya.jpg', 101),
('yuya-tuya.jpg', 101),
('king-menkawre-2.jpg', 102),
('untitled-9.jpg', 102),
('emjg4vlxgaev7f.jpg', 103),
('1.jpg', 104),
('2.jpg', 104),
('3d527ccff6ac007b1a2aa68a0ec504b1.jpg', 104),
('montuhotep.jpg', 104),
('eunzp02wsach6jc.jpg', 105),
('ewd6kixxsaaxpkl.jpg', 105),
('kaaper-1.jpg', 105),
('19574_800x800-1.jpg', 106),
('img_20200213_113820.jpg', 106),
('img_20200213_113916.jpg', 106),
('img_20200213_113938.jpg', 106),
('img_20200213_114019.jpg', 106),
('1.jpg', 107),
('2.jpg', 107),
('ev_qi_xxyaguhgm.jpg', 107),
('ev_qjzvwkaaoen6.jpg', 107),
('palettee.jpg', 107),
('59.jpg', 108),
('59-copy.jpg', 108),
('60-copy.jpg', 108),
('61.45.jpg', 108),
('61.45_lp.jpg', 108),
('LC-61_45_EGDP027998.jpg', 108),
('LC-61_45_EGDP028003.jpg', 108),
('LC-61_45_EGDP028004.jpg', 108),
('LC-61_45_EGDP028005.jpg', 108),
('LC-61_45_EGDP028007.jpg', 108),
('LC-61_45_EGDP028008.jpg', 108),
('LC-61_45_EGDP028009.jpg', 108),
('dsc_0790.jpg', 109),
('dsc_0791.jpg', 109),
('dsc_0802.jpg', 109),
('0_156.jpg', 110),
('1.jpg', 110),
('3.jpg', 110),
('img_4193.jpg', 111),
('img_20190729_104919.jpg', 111),
('img_20190729_105038.jpg', 111),
('img_20190729_105112.jpg', 111),
('door2.jpg', 112),
('door3 (1).jpg', 112),
('door3.jpg', 112),
('img_20190729_104613.jpg', 112),
('16374-2.jpg', 113),
('img_4212.jpg', 113),
('img_4214.jpg', 113),
('aaag_0057.jpg', 114),
('img_20190729_113234.jpg', 114),
('img_20190729_113240.jpg', 114),
('img_4194.jpg', 116),
('img_20190729_105607.jpg', 116),
('upload_product_entity_db_product_mainimage_c9cd95d54c203d9c81be15f61b22b6cc.jpg', 116),
('271174427_665311167810148_6316734871679706987_n.jpg', 117),
('1_edit_2.jpg', 118),
('3348.jpg', 118),
('img_20190729_104705.jpg', 118),
('img_20190729_104714.jpg', 118),
('1.jpg', 120),
('2.jpg', 120),
('3.jpg', 120),
('2.jpg', 121),
('g75a3519.jpg', 121),
('g75a3520.jpg', 121),
('coptic-museum1.jpg', 122),
('koooooo1.jpg', 124),
('dsc_9620-555555.jpg', 125),
('crown.jpg', 126),
('2222.jpg', 127),
('1.png', 119),
('dsc_9583-.jpg', 123),
('logo1.png', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `museums`
--
ALTER TABLE `museums`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `m_name` (`m_name`(191));

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `museum` (`museum`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `premium`
--
ALTER TABLE `premium`
  ADD UNIQUE KEY `part_id` (`part_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscription_ibfk_1` (`user_id`);

--
-- Indexes for table `swr`
--
ALTER TABLE `swr`
  ADD KEY `part_id` (`part_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `msg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `museums`
--
ALTER TABLE `museums`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`userid`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `subscription` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `premium`
--
ALTER TABLE `premium`
  ADD CONSTRAINT `premium_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `parts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`userid`);

--
-- Constraints for table `swr`
--
ALTER TABLE `swr`
  ADD CONSTRAINT `swr_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `parts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
