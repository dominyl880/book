-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 10:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--
CREATE DATABASE IF NOT EXISTS `book` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `book`;

-- --------------------------------------------------------

--
-- Table structure for table `b_book`
--

CREATE TABLE `b_book` (
  `book_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_writer` varchar(100) NOT NULL,
  `book_detail` text NOT NULL,
  `book_price` float NOT NULL,
  `book_img` varchar(100) NOT NULL,
  `book_view` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `b_book`
--

INSERT INTO `b_book` (`book_id`, `type_id`, `book_name`, `book_writer`, `book_detail`, `book_price`, `book_img`, `book_view`) VALUES
(9, 2, 'โมงยามแห่งความสิ้นยินดี', 'กิตติศักดิ์ คงคา', 'จิตแพทย์เด็กและวัยรุ่น โรงพยาบาลจุฬาลงกรณ์ สภากาชาดไทยผลงานของผู้เขียน “มนุษย์ซึมเศร้ากับเรื่องเล่าสีขาวดำ” หนังสือรางวัลเซเว่นบุ๊คอวอร์ด และรางวัลหนังสือดีเด่น (ชมเชย) ประเภทสารคดี จากคณะกรรมการการศึกษาขั้นพื้นฐาน กระทรวงศึกษาธิการ', 0, '198194582_font.jpg', 14),
(10, 2, 'เมื่อฝนหยุดตก ผมจะหุบร่มที่กางมาตลอด', 'ชังอึนจิน', 'แฮจู หญิงสาวที่ทำงานในโรงงานถุงมือ เธอชอบไปยืนมองวิวจากหน้าต่างของอพาร์ตเมนต์บ่อยๆ ทุกครั้งที่เธอรู้สึกไม่สบายใจ ที่นั่นเธอมักจะได้พบกับ \"คุณร่ม\" วันนั้นคุณร่มมายืนใกล้ๆ ขณะเธอกำลังแหงนมองท้องฟ้า เขามักจะกางร่มตลอดเวลาไม่ว่าจะแดดออก หรือไม่มีแดด และจะพกร่มอีกหนึ่งคันมาด้วยราวกับว่าเขากำลังรอรับใครบางคน  แฮจูคิดว่าเขาอาจกำลังลงโทษตัวเองด้วยการขังตัวเองไว้ใต้ร่ม และยืนรออะไรบางอย่างที่ไม่มีวันปรากฏ แฮจูเองก็มีปมในใจ มีความสงสัยในเรื่องความฝัน ว่าจริงๆ ระหว่างการมีความฝันกับไม่มี แบบไหนดีกว่ากัน  แต่เมื่อถึงวันหนึ่งปมในใจคลาย ได้คำตอบ และถึงวันที่ฝนหยุดตก คุณร่มก็หุบร่มได้ แฮจูเองก็หุบร่มในใจได้ ระยะห่างระหว่างทั้งสองก็แคบลง', 0, '769958866_font.jpg', 9),
(11, 2, 'เรื่องตลก (ฉบับปกอ่อน)', 'มิลาน คุนเดอรา', 'ลุดวิก ปัญญาชนเจ้าความคิดและเจ้าความแค้นกลับมายังเมืองบ้านเกิดในโมราเวียเพื่อสะสางเรื่องค้างคาใจในวันวาน ที่นั่น เขาได้พบสหายเก่าคู่อาฆาต ดนตรีที่เคยเชื่อมั่น และหญิงสาวจากอดีตอันไกลโพ้นเมื่อกงล้อประวัติศาสตร์เมือนบิดความคิดฝันผู้คนจนผันไปไม่เหลือเค้า เรื่องล้อเล่นเปลี่ยนแปรเป็นบาดแผล ความแค้นเคืองผลักไสให้จิตใจกลัดหนองระหกระเหินรอนแรมด้วยแรงพยาบาท แผนแก้เผ็ดรสขมกลับกลายเป็นทั้งบทโศกและเรื่องตลก', 100, '1680266760_font.jpg', 2),
(12, 1, 'คณิตศาสตร์ ป.3 ', 'ฝ่ายวิชาการภูมิบัณฑิต', '* แบบทดสอบทุกสาระการเรียนรู้\r\n* แนวข้อสอบปลายภาคเรียน 1 และ 2', 255, '1354340907_font.jpg', 4),
(27, 1, 'แบบฝึกหัดคณิตศาสตร์คุมอง การบวกและการลบ ป.3', 'กองบรรณาธิการสำนักพิมพ์เอ็มไอเอส', '  แบบฝึกหัดคณิตศาสตร์ที่อิงจาก \"ระบบการเรียนแบบคุมอง\" ซึ่งเป็นระบบการเรียนที่ออกแบบเพื่อช่วยให้เด็กแต่ละคนก้าวไปถึงขีดศักยภาพสุดของตนเอง สอดคล้องกับหลักสูตรมาตรฐานคณิตศาสตรประเทศสหรัฐอเมริกา แบบฝึกหัดเล่มนี้จะช่วยให้บุตรหลานของท่านเรียนรู้การบวกและการลบเลขหลายหลักที่ท้าทายมากขึ้น ช่วยสร้างความมั่นใจในทักษะด้านคณิตศาสตร์ให้กับเด็กๆ ซึ่งจูงใจพวกเขาให้สนุกกับการเรียนได้ด้วยตนเอง', 85, '1110725889_font.jpg', 18),
(28, 1, 'ตะลุยโจทย์ สสวท. วิทยาศาสตร์ ป.3', 'ณัฐพล บัณฑิตเสน', 'หนังสือ “ตะลุยโจทย์ สสวท. วิทยาศาสตร์ ป.3” เล่มนี้ เป็นหนังสือที่รวบรวมแนวข้อสอบวิทยาศาสตร์ไว้หลากหลาย เพื่อให้นักเรียนได้ฝึกฝนทำโจทย์จนเกิดทักษะการเรียนรู้ ได้นำไปใช้เป็นแนวทางเพื่อการสอบแข่งขัน และยังช่วยให้นักเรียนได้ทบทวนเนื้อหาของแต่ละช่วงชั้นอีกด้วย', 209, '1232696911_font.jpg', 1),
(29, 1, 'แบบฝึกหัดคณิตศาสตร์ คุมอง การคูณ ป.3', 'กองบรรณาธิการสำนักพิมพ์เอ็มไอเอส', ' แบบฝึกหัดคณิตศาสตร์ที่อิงจาก \"ระบบการเรียนแบบคุมอง\" ซึ่งเป็นระบบการเรียนที่ออกแบบเพื่อช่วยให้เด็กแต่ละคนก้าวไปถึงขีดศักยภาพสุดของตนเอง สอดคล้องกับหลักสูตรมาตรฐานคณิตศาสตร์ ประเทศสหรัฐอเมริกา แบบฝึกหัดเล่มนี้จะช่วยให้บุตรหลานของท่านเรียนรู้ การคูณจนถึง 10x9 ช่วยสร้างความมั่นใจในทักษะด้านคณิตศาสตร์ให้กับเด็กๆ ซึ่งจูงใจพวกเขาให้สนุกกับการเรียนได้ด้วยตนเอง', 85, '158546865_font.jpg', 3),
(30, 1, 'แบบฝึกหัดคณิตศาสตร์ คุมอง การหาร ป.3', 'กองบรรณาธิการสำนักพิมพ์เอ็มไอเอส', ' แบบฝึกหัดคณิตศาสตร์ที่อิงจาก \"ระบบการเรียนแบบคุมอง\" ซึ่งเป็นระบบการเรียนที่ออกแบบเพื่อช่วยให้เด็กแต่ละคนก้าวไปถึงขีดศักยภาพสุดของตนเอง สอดคล้องกับหลักสูตรมาตรฐานคณิตศาสต์ ประเทศสหรัฐอเมริกา แบบฝึกหัดเล่มนี้จะช่วยให้บุตรหลานของท่านเรียนรู้การหารมีเศษและไม่มีเศษ ช่วยสร้างความมั่นใจในทักษะด้านคณิตศาสตร์ให้กับเด็กๆ ซึ่งจูงใจพวกเขาให้สนุกกับการเรียนได้ด้วยตนเอง', 85, '1616956461_font.jpg', 2),
(31, 1, 'พิชิตข้อสอบ NT ป.3 หลักเกณฑ์ใหม่ล่าสุดฯ', 'พัชราภรณ์ เย็นมนัส', 'แนะนำหลักเกณฑ์ตามโครงสร้างแบบทดสอบใหม่ (ฉบับล่าสุด) คัดแบบฝึกหัดที่หลากหลายทั้งปรนัยและอัตนัย สำหรับการสอบ NT ป.3 โดยเฉพาะ และแนวข้อสอบครบทั้งวิชาความสามารถด้านคณิตศาสตร์และความสามารถด้านภาษาไทย พร้อมเฉลยละเอียด เหมาะสำหรับนักเรียนระดับชั้น ป.3 ต้องสอบ NT ทั่วประเทศ', 249, '425037349_font.jpg', 1),
(32, 1, 'สังคม ระดับ ม.1-2-3 เรียนก็เข้าใจ สอบยิ่งง่ายเลย', 'ทีมวิชาการ Life Balance', 'สรุปโน้ตช่วยจำวิชาสังคมศึกษา ระดับ ม.1-2-3 ที่ออกสอบบ่อย อ่านง่าย จำไว ไม่เครียด ด้วยแผนผัง ไฮไลต์ และภาพประกอบสีสันสดใส เล่มบาง พกพาไปอ่านทบทวนง่าย เรียนรู้ได้ด้วยตัวเอง เหมาะสำหรับพิชิตข้อสอบ โควตา, ชิงทุน, เพิ่มเกรด และสอบเข้า ม.4 โรงเรียนดังทั่วประเทศ', 109, '579953599_font.jpg', 0),
(33, 2, 'ขมเป็นน้ำตาล หวานเป็นน้ำตา', 'Laura Esquivel (เลารา เอสกิเวล)', 'เล่าเรื่องของความรักที่ต้องหลบเร้น ระหว่างติตากับเปโดร สาวน้อยกับหนุ่มหล่อ ในช่วงต้นศตวรรษที่ยี่สิบที่สงครามของ สองกลุ่มก้อนในประเทศ คือฝ่ายรัฐบาลกับฝ่ายปฏิวัติ กำลังคุกรุ่น', 250, '1584621731_font.jpg', 1),
(34, 2, 'Talking To The Moon ขอสาบสูญใต้เงาจันทร์', 'ชนพัฒน์ เศรษฐโสรัถ', ' \"Talking To The Moon ขอสาบสูญใต้เงาจันทร์\" เล่มนี้ นำเสนอแปดเรื่องสั้นอ่านง่ายแต่ทำร้ายจิตใจ ที่ดัดแปลงจากประสบการณ์ของ ผู้เขียน Walking on the Sun ทุก ๆ วันบนดวงอาทิตย์ และ no man is an island ที่ได้พบได้สัมผัสขณะใช้ชีวิตอยู่ในประเทศญี่ปุ่น ทั้งความรักชั่วคราวที่อาจคงอยู่ตลอดไป ชีวิตเนิบช้าแต่ดำรงอยู่เพียงพริบตา เสียงอีกทึกที่ไม่มีใครได้ยิน และการสาบสูญที่ถูกใครบางคนจดจำ แปดเรื่องราวของคนธรรมดาที่ผสมเข้ากับวิทยาศาสตร์ และการพาดผ่านของเรื่องลี้ลับจนยากที่จะเดาตอนจบ...', 250, '1812762261_font.jpg', 5),
(35, 2, 'คดีฆาตกรรมภูเขาไฟฟูจิ', 'Yoshimura Tatsuya (โยชิมุระ ทัตสึยะ)', ' วันหยุดฤดูร้อน... \"สารวัตรชิงากิ\" ไปปีนภูเขาไฟฟูจิกับ \"นักสืบวาคุอิ\" ขณะชมพระอาทิตย์ขึ้นบนภูเขาชั้นเจ็ด มีชายนักปีนเขาถูกฆ่ารัดคออยู่หลังกระท่อมบนยอดเขา และในวันเดียวกัน พบศพหญิงสาวซึ่งเสียชีวิตมาแล้วหลายวันอยู่ภายในแมนชัน...สภาพศพถูกกระหน่ำแทงอย่างโหดเหี้ยมจนพรุนทั่วร่าง!', 295, '338469560_font.jpg', 0),
(36, 2, 'ร้านหนังสือเล็ก ๆ แห่งทัสคานี', 'Alba Donati (อัลบา โดนาติ)', 'เรามีหนังสือ \"ของเรา\" ไม่ใช่หนังสือที่คุณจะพบได้ทุกที่ มันเหมือนกับชั้นหนังสือของคุณเองที่บ้าน ไม่ว่าจะเก่าหรือเพิ่งออกใหม่ หนังสือต้องมีความหมาย มันถูกเลือกให้มาอยู่ตรงนั้นด้วยเหตุผลบางอย่าง...', 260, '2056031459_font.jpg', 3),
(37, 2, 'รักที่พลิกผันของมิสบริดเจอร์ตัน', 'Julia Quinn (จูเลีย ควินน์)', 'บางครั้งความรักก็มาโดยที่เราไม่ได้คาดฝัน...เมื่อคู่อริตลอดชีวิตจุมพิตกันในที่สุด สองหนุ่มสาวก็ได้พบว่าคนที่ตนทนอยู่ด้วยไม่ได้นั้น กลับกลายเป็นอีกครึ่งหนึ่งของชีวิตที่ขาดไม่ได้...', 320, '1197589960_font.jpg', 0),
(38, 2, 'ความทรงจำแห่งรัก', 'Julia Quinn (จูเลีย ควินน์)', '\"เซซิเลีย\" ยอมเดิมพันอนาคตของตนเองด้วยการมอบทั้งกายและใจ ให้แก่ชายที่หล่อนรัก แต่เมื่อความจริงถูกเปิดเผย \"เอ็ดเวิร์ด\" ก็มีเรื่องประหลาดใจจะมอบให้แก่ภรรยาคนใหม่ของเขา...', 320, '1460405485_font.jpg', 2),
(39, 3, 'คู่มือสะกดใจคน', 'นางสมร กรวิรัตน์', 'หนังสือเล่มนี้ได้รวบรวมเคล็ดลับและเทคนิคทางจิตวิทยาของผู้เชี่ยวชาญระดับโลกด้านพฤติกรรมศาสตร์ สามารถนำไปประยุกต์ใช้ได้ทันทีในการทำงานและชีวิตส่วนตัว โดยรวบรวมเนื้อหาประกอบด้วย 5 ส่วน ได้แก่ ทำให้ผู้อื่นชอบคุณ , พอกันทีกับการถูกตบตา, เป็นผู้ควบคุมในทุกสถานการณ์, ทำอย่างไรจึงจะเป็นผู้ชนะในทุกเวทีการแข่งขัน และทำให้ชีวิตง่ายขึ้น', 90, '1285826134_font.jpg', 0),
(40, 3, 'เจรจาอย่างมีชั้น ต่อรองอย่างมีเชิง', 'นางสมร กรวิรัตน์', 'ได้รวบรวมเนื้อหาเกี่ยวกับ ยุทธศาสตร์และยุทธวิธีในการเจรจาต่อรองให้เกิดเป็นทักษะ แห่งชีวิต เป็นสิ่งที่นำมาใช้ในการดำเนินชีวิตประจำวันได้ โดยที่ทุกฝ่ายจะได้รับผลประโยชน์ และสามารถรักษามิตรภาพไว้ได้เป็นอย่างดี หลังจากการเจรจาต่อรองสิ้นสุดลง', 90, '109506571_font.jpg', 0),
(41, 3, 'สารพันคำถามด้านศิลปะและประวัติศาสตร์ศิลปะไทย', 'นางระเบียบ แสงจันทร์', 'รวบรวมคำถาม- คำตอบด้านศิลปะและประวัติศาสตร์ศิลปะไทย ที่ “ น. ณ ปากน้ำ” ศิลปินแห่งชาติสาขาทัศนศิลป์ พยายามเขียนอธิบายเรื่องราวศิลปะและประวัติศาสตร์ศิลปะของไทยให้สามารถเข้าใจได้ง่าย ๆ ในรูปแบบคำถาม- คำตอบ โดยแยกเนื้อหาความรู้ออกเป็น 2 ส่วน ส่วนแรก เป็นคำถาม- ตอบเกี่ยวกับศาสตร์แห่งศิลปะ และอีกส่วนเป็นเรื่องประวัติศาสตร์ศิลปะไทย นับเป็นหนังสือคู่มือศึกษาเบื้องต้นเกี่ยวกับศิลปะและประวัติศาสตร์ศิลปะของไทยเล่มหนึ่ง', 90, '1790597806_font.jpg', 1),
(42, 3, 'ปลุกหัวใจกบฏ', 'อดัม มอร์แกน', 'หนังสือเรื่องนี้ เรียบเรียงจาก The Pirate Inside โดย อดัม มอร์แกน ผู้เขียนหนังสือขายดี “ ปลาเล็กกินปลาใหญ่”\r\n\r\nเนื้อหาของหนังสือเป็นการนำหลักการตลาดแบบรุกไปใช้ปฏิบัติจริง เจาะลึกถึงพฤติกรรมและคุณลักษณะที่ผู้เกี่ยวข้องกับแบรนด์จำเป็นต้องฝึกฝน เพื่อสร้างวัฒนธรรมของแบรนด์ผู้ท้าชิง และสร้างความแตกต่างให้เกิดขึ้น\r\n\r\nผู้เขียนได้เปรียบเทียบว่า การสร้างแบรนด์ในรูปแบบที่ไร้ความแตกต่างจากผู้อื่นคือ การเป็น “ ทหารเรือ” ขณะที่การปฏิบัติตามพฤติกรรมและตามคุณลักษณะที่จำเป็นในการสร้างแบรนด์คือ การเป็น “ โจรสลัดนักสร้าง แบรนด์” หรือ “ ผู้ท้าชิง”', 90, '645768067_font.jpg', 0),
(43, 3, 'รู้จักวิจัย ... ทำให้เป็น', 'นางระเบียบ แสงจันทร์', 'ผลงานที่กลั่นจากสมองเล่มล่าสุดของ อ.สุธีระ ประเสริฐสรรพ์ เจ้าของงานเขียนประสบการณ์การให้ทุนวิจัย สกว. นับตั้งแต่ สนุกกับงานวิจัย , วิจัย (ไม่) ให้สนุก, ลอกเลียน-เรียนรู้, วิจัย… ยังมีอะไรที่ไม่รู้ ( ว่าไม่รู้)      โดยเล่มล่าสุดนี้เป็นการเรียบเรียงจากการถอดเทปการบรรยายเกี่ยวกับการวิจัยที่ผู้เขียนได้รับเชิญให้ไปพูดในที่ต่าง ๆ ครั้งล่าสุดคือที่มหาวิทยาลัยศิลปากร และที่สถาบันเทคโนโลยีพระจอมเกล้าพระนครเหนือ  \r\n\r\nเนื้อหาแบ่งออกเป็น 4 ตอน ตอนที่ 1 เป็นเรื่องของการวิจัย : พัฒนาการโลกกับสถานภาพของโลก ตอนที่ 2 เป็นเรื่องของความเข้าใจที่ควรมีสำหรับการทำวิจัย ตอนที่ 3 เป็นเรื่องการทำวิทยานิพนธ์อย่างสร้างสรรค์ และตอนสุดท้าย เป็นเรื่องของการเขียนข้อเสนอโครงการอย่างไรให้ได้รับทุน ซึ่งทั้ง 4 ตอนนี้จะทำให้ผู้อ่านเข้าใจในมุมกว้าง ทั้งในฐานะการหาความรู้ทางวิชาการ การศึกษา เครื่องมือการพัฒนาตนและสังคม การบริหารงานวิชาการ การดำรงประเทศในท่ามกลางการแข่งขันทางความรู้ จนถึงมุมที่เจาะจง คือ การเขียนข้อเสนอโครงการวิจัย', 90, '1382129933_font.jpg', 0),
(44, 3, 'โรคตาใกล้ตัว', 'พญ.จุฑารัตน์ ป้อมสถิตย์', 'หนังสือเรื่องนี้ นำเสนอความรู้ ความสำคัญของ “ ตา. หนึ่งในอวัยวะที่สำคัญที่สุดของร่างกายมนุษย์ การดูแลให้ความสำคัญกับสุขภาพตา เพื่อให้ห่างไกลจากภาวะผิดปกติและโรคภัยต่าง ๆ ซึ่งอาจจะพรากแสงสว่างไปจากชีวิต', 90, '92290767_font.jpg', 0),
(45, 3, 'พระพุทธศาสนาเพื่อโลกสมัยใหม่', 'นางสมร กรวิรัตน์', 'รวบรวมแนวคิดทางพระพุทธศาสนาในทัศนะของการใช้ดำเนินชีวิตในโลกยุคปัจจุบัน ซึ่งมีเนื้อหาประกอบด้วย มหายานสูตร เป็นการสดุดีพระเกียรติคุณและความยิ่งใหญ่ของพระโพธิสัตว์ และ สัทธรรมปุณฑรีกสูตร เป็นคำสอนอันสูงส่งที่สอนว่าขณะมีชีวิตอยู่ในโลกที่ไม่สะอาดนี้ คนเราสามารถดำเนินชีวิตที่ถูกต้องได้โดยสิ่งยั่วเย้าต่าง ๆ ทำให้หวั่นไหวไม่ได้', 90, '2046523178_font.jpg', 0),
(46, 4, 'ยมลแห่งยมโลก 1 ', 'ฮิโรมุ อาราคาวะ', 'เด็กหนุ่มนามยูรุอาศัยอยู่ในหมู่บ้านเล็กๆกลางภูเขาลึก มักออกล่านกป่า และใช้ชีวิตเงียบสงบท่ามกลางธรรมชาติ ทว่าด้วยเหตุผลบางอย่าง อาซะ น้องสาวฝาแฝดของยูรุกลับต้องคอยทำ ‘หน้าที่’ ในห้องขังที่อยู่ลึกเข้าไปในหมู่บ้าน ราวกับถูกกักตัวไว้...จนวันหนึ่งหมู่บ้านอันสงบสุขเกิดเรื่องประหลาดจากกลุ่มผู้ใช้ ‘ยมล’ อสุรกายเหนือธรรมชาติ ทำให้ยูรุค่อยๆรับรู้ถึงความลับที่ซุกซ่อนไว้ในหมู่บ้านแห่งนี้ศึกการต่อสู้เหนือจินตนาการของ ‘ยมล’ อสุรกายสุดแกร่งกำลังเปิดฉากขึ้น!!', 65, '339582195_font.jpg', 2),
(47, 4, 'มหาศึกคนชนเทพ 16', 'อาจิจิกะ', 'ราชาผู้เริ่มต้น จิ๋นซีฮ่องเต้กับราชายมโลก ฮาเดสทำศึกเดือดกันจนรู้ผล!!ท้ายที่สุดแล้วชัยชนะจะตกเป็นของใครระหว่างฮาเดสผู้ยึดมั่นในหน้าที่พี่คนโตของพี่น้องมหาเทพแห่งตำนานกรีกกับจิ๋นซีฮ่องเต้ผู้เดิมพันด้วยศักดิ์ศรีความเป็นราชาผู้ปกครองแผ่นดินจีน!!', 95, '560449359_font.jpg', 4),
(48, 4, 'BLUE LOCK ขังดวลแข้ง เล่ม 21', 'MUNEYUKI KANESHIRO', 'ในที่สุดก็คว่าตัวที่พไปท้าทายตำแหน่ง เบอร์ 1 ของโลกได้สำเร็จ! อีโก้อิสต์กำลังอยู่ระหว่างพัฒนา!!ตัวเองได้สำเร็จ!!', 95, '1837737423_font.jpg', 0),
(49, 4, 'Cookierun: Kingdom Adventure เล่ม 1: ตะลุยดินแดนยักษจิ๋ว', 'Kim Kang Hyun', 'คุกกี้ผู้กล้าหาญตื่นขึ้นมาในป่าทึบข้างหมู่บ้านเล็ก ๆ แห่งหนึ่ง ในระหว่างที่เขาพบว่าตัวเองไม่มีความทรงจำก่อนหน้านี้อยู่เลย คุกกี้รสชะเอมก็ปรากฏตัวขึ้นแล้วบอกว่าคุกกี้ผู้กล้าหาญคือ “กุญแจสู่คำพยากรณ์” และพยายามจะจับตัวเขาไว้ แล้วอย่างนี้คุกกี้ผู้กล้าหาญจะรอดพ้นจากคุกกี้ผู้ชั่วร้ายและตามหาความทรงจำกลับคืนมาได้หรือไม่ มาลุ้นกัน!', 65, '1958923082_font.jpg', 0),
(50, 4, 'เกิดใหม่เป็นลูกโอชิ 07', 'AKA AKASAKA, MENGO YOKOYARI', 'สำหรับฉันการแสดงก็คือการล้างแค้นนั่นแหละ\r\nละครเวลที 2.5 มิติจากการ์ตูนยอดนิยม \"โตเกียวเบลต\" รอบจริงเปิดม่าน!!\r\nอาริมะ คานะ ดาราเด็กอัจฉริยะในอดีต กับคุโรคาวะ อากาเนะ ยอดฝีมือจาก \"คณะละครลาลาไล\" ในปัจจุบันผู้มีปมขัดแย้งกันโดยมีสาเหตุมาจากความสัมพันธ์ในวัยเด็ก ต้องมาประชันกันผ่านบทบาทของต่างฝ่ายบนเวที!!\r\nแล้วโฮชิโนะ อควอ ผู้ลุกขึ้นเผชิญหน้ากับบาดแผลทางใจของตนเองเพื่อให้ \"แสดงแบบใส่อารมณ์\" ได้มุ่งไปสู่เส้นทางชีวิตในฐานะนักแสดงแบบไหน!?\r\nภาค 5 ภาคละครเวที 2.5 มิติ บัดนี้เข้าสู่ช่วงไคลแมกซ์แล้ว!!', 76, '1635622179_font.gif', 1),
(51, 4, 'คุโรมาตี้ โรงเรียนคนบวม เล่ม 8', 'EIJI NONAKA', 'ทาเคโนะอุจิ หัวโจกของโรงเรียนคุโรมาตี้ เพื่อลบจุดอ่อนอาการเมารถ เขาจึงไปรักษาอาการเมารถกับคุณหมอท่านหนึ่ง ขั้นตอนรักษาจากหมอจะเริ่มจากการเก็บข้อมูลด้วยการออกปั่นจักรยานไปที่ต่างๆ และไปซัดกับแก๊งซิ่งจนทั้งแก๊งแพ้ราบคาบ การออกตามล่าจากแก๊งซิ่งเพื่อแก้แค้นเขาคืนจึงเริ่มต้นขึ้น!!', 69, '642787280_font.gif', 0),
(52, 4, 'คุโรมาตี้ โรงเรียนคนบวม เล่ม 1', 'EIJI NONAKA', 'คามิยามะ ทากาชิ นักเรียนใหม่โรงเรียนม.ปลายคุโรมาตี้ โรงเรียนแห่งนี้นอกจากจะเต็มไปด้วยเหล่านักเลงขี้เกียจเรียนแล้ว ที่นี่ยังอุดมไปด้วยเหล่านักเรียนบ๊องๆ บวมๆ หลุดโลก ขยันสร้างเสียงฮาไม่เหมือนใคร!!', 69, '968747351_font.gif', 3),
(53, 4, 'ก้าวแรกสู่สังเวียน เล่ม 71', 'JOJI MORIKAWA', 'เพื่อสัญญาที่มีกับไอ้หมอนั่น! ศึกชิงแชมป์รุ่นเฟเธอร์ระดับเอเชียแบซิฟิกเริ่มต้นขึ้นโดยมีศึกกับอิปโปเป็นเดิมพัน มิยาตะเต็มไปด้วยความมั่นใจที่ต้องการทําตามสัญญาที่มีกับอิปโปให้ได้ แต่การชกที่คิดว่าไม่น่ามีอะไรยุ่งยากกลับพลิกผัน เมื่อมิยาตะไปเป็นบุคคลปริศนาในที่นั่งของคนดูเขาถึงกับนิ่ง และนั่นเป็นโอกาสให้ผู้ท้าชิงโจมตีมาอย่างรุนแรง...!!', 69, '1676687158_font.gif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `b_fev`
--

CREATE TABLE `b_fev` (
  `fev_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b_fev`
--

INSERT INTO `b_fev` (`fev_id`, `book_id`, `user_id`) VALUES
(1, 9, 8),
(2, 10, 8),
(3, 27, 10),
(4, 27, 9),
(5, 29, 10),
(6, 46, 10),
(7, 47, 10),
(8, 34, 12),
(9, 27, 1),
(10, 27, 1),
(11, 27, 1),
(12, 27, 1),
(13, 27, 1),
(14, 27, 1),
(15, 27, 0),
(16, 46, 13),
(17, 29, 13),
(18, 10, 13);

-- --------------------------------------------------------

--
-- Table structure for table `b_history`
--

CREATE TABLE `b_history` (
  `history_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_start` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_end` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_retrun` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status_history` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b_history`
--

INSERT INTO `b_history` (`history_id`, `book_id`, `user_id`, `date_start`, `date_end`, `date_retrun`, `status_history`) VALUES
(7, 27, 10, '2023-05-09', '2023-05-16', '2023-05-09', 3),
(8, 27, 9, '2023-05-09', '2023-05-16', '2023-05-09', 3),
(9, 29, 10, '2023-05-09', '2023-05-16', '2023-05-09', 3),
(10, 10, 1, '2023-05-09', '2023-05-16', '2023-05-09', 3),
(11, 46, 10, '2023-05-09', '2023-05-16', '2023-05-09', 3),
(12, 47, 10, '2023-05-09', '2023-05-16', '2023-05-09', 3),
(13, 52, 11, '2023-05-09', '2023-05-16', '2023-05-09', 3),
(14, 27, 11, '2023-04-09', '2023-04-16', '2023-07-12', 3),
(15, 34, 12, '2023-07-12', '2023-07-19', '', 2),
(16, 52, 1, '2023-07-12', '2023-07-19', '', 2),
(17, 46, 13, '2024-01-05', '2024-01-12', '', 2),
(18, 29, 13, '2024-01-05', '', '', 1),
(19, 10, 13, '2024-01-05', '2024-01-12', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `b_type_book`
--

CREATE TABLE `b_type_book` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `b_type_book`
--

INSERT INTO `b_type_book` (`type_id`, `type_name`) VALUES
(1, 'วิชาการ'),
(2, 'วรรณกรรม'),
(3, 'เบ็ดเตล็ด'),
(4, 'การ์ตูน');

-- --------------------------------------------------------

--
-- Table structure for table `b_user`
--

CREATE TABLE `b_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `f_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tel` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_img` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `act_id` int(11) NOT NULL COMMENT '1=ปกติ \r\n2=ระงับการใช้งาน	',
  `status_user` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '1=บรรณารักษ์\r\n2=เจ้าหน้าที่ \r\n3=สมาชิก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b_user`
--

INSERT INTO `b_user` (`user_id`, `username`, `password`, `f_name`, `l_name`, `tel`, `user_img`, `act_id`, `status_user`) VALUES
(1, 'yanisa', '1234', 'ญาณิศา', 'สิมมา', '0811420328', 'user_img33660106.jpg', 1, '3'),
(2, 'admin', '1234', 'admin', 'admin', '', '', 1, '1'),
(9, '1', '1', 'อาภัสรา', 'อ่อนสุดใจ', '0811420328', '71250690_font.png', 1, '3'),
(10, 'nan', '1234', 'สามารถ', 'กานนิดา', '08114203286', '364993353_font.jpg', 1, '3'),
(11, 'petch', '123456789', 'kittipan', 'jantawai', '0902819248', '447097150_font.jpg', 1, '3'),
(12, 'H', '1234', 'Jssjj', 'Sjjsj', '0811420328', '', 2, '3'),
(13, 'many', '1234', 'ญาณิศา', 'สิมมา', '0811420328', '233406325_font.jpg', 1, '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_book`
--
ALTER TABLE `b_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `b_fev`
--
ALTER TABLE `b_fev`
  ADD PRIMARY KEY (`fev_id`);

--
-- Indexes for table `b_history`
--
ALTER TABLE `b_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `b_type_book`
--
ALTER TABLE `b_type_book`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `b_user`
--
ALTER TABLE `b_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_book`
--
ALTER TABLE `b_book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `b_fev`
--
ALTER TABLE `b_fev`
  MODIFY `fev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `b_history`
--
ALTER TABLE `b_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `b_type_book`
--
ALTER TABLE `b_type_book`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `b_user`
--
ALTER TABLE `b_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Database: `food`
--
CREATE DATABASE IF NOT EXISTS `food` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `food`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `status_user` varchar(25) NOT NULL,
  `status_ch` int(11) NOT NULL COMMENT '0=เข้าไม่ได้ \r\n1=เข้าได้',
  `user_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fname`, `lname`, `tel`, `status_user`, `status_ch`, `user_img`) VALUES
(1, 'yanisa', '1234', 'yanisa', '1234', '0811420328', 'admin', 1, ''),
(2, 'user1', '1234', 'นันทนา1', 'เนื้อทอง', '0811420328', 'member', 1, '20231001_185432000_iOS.png'),
(3, 'user2', '1234', 'นันทนา2', 'เนื้อทอง', '0811420328', 'member', 0, ''),
(7, 'yanisa2', '1234', 'ญาณิศา55', 'สิมมา', '0811420328', 'member', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"food\",\"table\":\"user\"},{\"db\":\"send_doc\",\"table\":\"user\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-10-27 12:55:04', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `send_doc`
--
CREATE DATABASE IF NOT EXISTS `send_doc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `send_doc`;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'ไอที'),
(2, 'บัญชี');

-- --------------------------------------------------------

--
-- Table structure for table `send_history`
--

CREATE TABLE `send_history` (
  `sh_id` int(11) NOT NULL,
  `ss_id` int(11) NOT NULL COMMENT 'ผู้ส่งเอกสาร',
  `sr_id` int(11) NOT NULL COMMENT 'ผู้รับเอกสาร',
  `department_id` int(11) NOT NULL COMMENT 'แผนก',
  `type_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `detail` varchar(150) NOT NULL,
  `status_send` int(11) NOT NULL,
  `date` varchar(25) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `send_history`
--

INSERT INTO `send_history` (`sh_id`, `ss_id`, `sr_id`, `department_id`, `type_id`, `title`, `detail`, `status_send`, `date`, `file`) VALUES
(6, 2, 3, 0, 9, 'img form me.', 'how to drow', 1, '2023-09-21', '1446854376_file.png'),
(7, 2, 0, 1, 8, 'vtuber', '', 1, '2023-09-21', '372028103_file.pdf'),
(8, 3, 0, 1, 9, 'วาดเล่น 3', '1234', 1, '2023-10-03', '865028628_file.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'type1'),
(8, 'วิชาการ'),
(9, 'การ์ตูน');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `department_id` int(11) NOT NULL,
  `status_user` int(11) NOT NULL,
  `status_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `username`, `password`, `tel`, `department_id`, `status_user`, `status_name`) VALUES
(1, 'yanisa', 'simma', 'yanisa', '1234', '0811420328', 0, 1, 'admin'),
(2, 'นันทนา', 'เนื้อทอง', 'user1', '1234', '0811420328', 1, 1, 'member'),
(3, 'นันทนา2', 'เนื้อทอง', 'user2', '1234', '0811420328', 1, 1, 'member'),
(4, '546', '2132', '2131', '23131', '3213121', 1, 1, 'member'),
(5, 'Yanisa', 'Simma', 'csdcsdf', 'sdfsdfsdfsdf', '542', 1, 1, 'member'),
(6, 'Yanisa', 'Simma', 'admin2', '1234', 'sac', 1, 1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `send_history`
--
ALTER TABLE `send_history`
  ADD PRIMARY KEY (`sh_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `send_history`
--
ALTER TABLE `send_history`
  MODIFY `sh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
