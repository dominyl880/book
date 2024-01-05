-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 09:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_64309010020`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `b_book`
--

INSERT INTO `b_book` (`book_id`, `type_id`, `book_name`, `book_writer`, `book_detail`, `book_price`, `book_img`, `book_view`) VALUES
(9, 2, 'โมงยามแห่งความสิ้นยินดี', 'กิตติศักดิ์ คงคา', 'จิตแพทย์เด็กและวัยรุ่น โรงพยาบาลจุฬาลงกรณ์ สภากาชาดไทยผลงานของผู้เขียน “มนุษย์ซึมเศร้ากับเรื่องเล่าสีขาวดำ” หนังสือรางวัลเซเว่นบุ๊คอวอร์ด และรางวัลหนังสือดีเด่น (ชมเชย) ประเภทสารคดี จากคณะกรรมการการศึกษาขั้นพื้นฐาน กระทรวงศึกษาธิการ', 0, '198194582_font.jpg', 14),
(10, 2, 'เมื่อฝนหยุดตก ผมจะหุบร่มที่กางมาตลอด', 'ชังอึนจิน', 'แฮจู หญิงสาวที่ทำงานในโรงงานถุงมือ เธอชอบไปยืนมองวิวจากหน้าต่างของอพาร์ตเมนต์บ่อยๆ ทุกครั้งที่เธอรู้สึกไม่สบายใจ ที่นั่นเธอมักจะได้พบกับ \"คุณร่ม\" วันนั้นคุณร่มมายืนใกล้ๆ ขณะเธอกำลังแหงนมองท้องฟ้า เขามักจะกางร่มตลอดเวลาไม่ว่าจะแดดออก หรือไม่มีแดด และจะพกร่มอีกหนึ่งคันมาด้วยราวกับว่าเขากำลังรอรับใครบางคน  แฮจูคิดว่าเขาอาจกำลังลงโทษตัวเองด้วยการขังตัวเองไว้ใต้ร่ม และยืนรออะไรบางอย่างที่ไม่มีวันปรากฏ แฮจูเองก็มีปมในใจ มีความสงสัยในเรื่องความฝัน ว่าจริงๆ ระหว่างการมีความฝันกับไม่มี แบบไหนดีกว่ากัน  แต่เมื่อถึงวันหนึ่งปมในใจคลาย ได้คำตอบ และถึงวันที่ฝนหยุดตก คุณร่มก็หุบร่มได้ แฮจูเองก็หุบร่มในใจได้ ระยะห่างระหว่างทั้งสองก็แคบลง', 0, '769958866_font.jpg', 8),
(11, 2, 'เรื่องตลก (ฉบับปกอ่อน)', 'มิลาน คุนเดอรา', 'ลุดวิก ปัญญาชนเจ้าความคิดและเจ้าความแค้นกลับมายังเมืองบ้านเกิดในโมราเวียเพื่อสะสางเรื่องค้างคาใจในวันวาน ที่นั่น เขาได้พบสหายเก่าคู่อาฆาต ดนตรีที่เคยเชื่อมั่น และหญิงสาวจากอดีตอันไกลโพ้นเมื่อกงล้อประวัติศาสตร์เมือนบิดความคิดฝันผู้คนจนผันไปไม่เหลือเค้า เรื่องล้อเล่นเปลี่ยนแปรเป็นบาดแผล ความแค้นเคืองผลักไสให้จิตใจกลัดหนองระหกระเหินรอนแรมด้วยแรงพยาบาท แผนแก้เผ็ดรสขมกลับกลายเป็นทั้งบทโศกและเรื่องตลก', 100, '1680266760_font.jpg', 2),
(12, 1, 'คณิตศาสตร์ ป.3 ', 'ฝ่ายวิชาการภูมิบัณฑิต', '* แบบทดสอบทุกสาระการเรียนรู้\r\n* แนวข้อสอบปลายภาคเรียน 1 และ 2', 255, '1354340907_font.jpg', 4),
(27, 1, 'แบบฝึกหัดคณิตศาสตร์คุมอง การบวกและการลบ ป.3', 'กองบรรณาธิการสำนักพิมพ์เอ็มไอเอส', '  แบบฝึกหัดคณิตศาสตร์ที่อิงจาก \"ระบบการเรียนแบบคุมอง\" ซึ่งเป็นระบบการเรียนที่ออกแบบเพื่อช่วยให้เด็กแต่ละคนก้าวไปถึงขีดศักยภาพสุดของตนเอง สอดคล้องกับหลักสูตรมาตรฐานคณิตศาสตรประเทศสหรัฐอเมริกา แบบฝึกหัดเล่มนี้จะช่วยให้บุตรหลานของท่านเรียนรู้การบวกและการลบเลขหลายหลักที่ท้าทายมากขึ้น ช่วยสร้างความมั่นใจในทักษะด้านคณิตศาสตร์ให้กับเด็กๆ ซึ่งจูงใจพวกเขาให้สนุกกับการเรียนได้ด้วยตนเอง', 85, '1110725889_font.jpg', 17),
(28, 1, 'ตะลุยโจทย์ สสวท. วิทยาศาสตร์ ป.3', 'ณัฐพล บัณฑิตเสน', 'หนังสือ “ตะลุยโจทย์ สสวท. วิทยาศาสตร์ ป.3” เล่มนี้ เป็นหนังสือที่รวบรวมแนวข้อสอบวิทยาศาสตร์ไว้หลากหลาย เพื่อให้นักเรียนได้ฝึกฝนทำโจทย์จนเกิดทักษะการเรียนรู้ ได้นำไปใช้เป็นแนวทางเพื่อการสอบแข่งขัน และยังช่วยให้นักเรียนได้ทบทวนเนื้อหาของแต่ละช่วงชั้นอีกด้วย', 209, '1232696911_font.jpg', 1),
(29, 1, 'แบบฝึกหัดคณิตศาสตร์ คุมอง การคูณ ป.3', 'กองบรรณาธิการสำนักพิมพ์เอ็มไอเอส', ' แบบฝึกหัดคณิตศาสตร์ที่อิงจาก \"ระบบการเรียนแบบคุมอง\" ซึ่งเป็นระบบการเรียนที่ออกแบบเพื่อช่วยให้เด็กแต่ละคนก้าวไปถึงขีดศักยภาพสุดของตนเอง สอดคล้องกับหลักสูตรมาตรฐานคณิตศาสตร์ ประเทศสหรัฐอเมริกา แบบฝึกหัดเล่มนี้จะช่วยให้บุตรหลานของท่านเรียนรู้ การคูณจนถึง 10x9 ช่วยสร้างความมั่นใจในทักษะด้านคณิตศาสตร์ให้กับเด็กๆ ซึ่งจูงใจพวกเขาให้สนุกกับการเรียนได้ด้วยตนเอง', 85, '158546865_font.jpg', 2),
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
(46, 4, 'ยมลแห่งยมโลก 1 ', 'ฮิโรมุ อาราคาวะ', 'เด็กหนุ่มนามยูรุอาศัยอยู่ในหมู่บ้านเล็กๆกลางภูเขาลึก มักออกล่านกป่า และใช้ชีวิตเงียบสงบท่ามกลางธรรมชาติ ทว่าด้วยเหตุผลบางอย่าง อาซะ น้องสาวฝาแฝดของยูรุกลับต้องคอยทำ ‘หน้าที่’ ในห้องขังที่อยู่ลึกเข้าไปในหมู่บ้าน ราวกับถูกกักตัวไว้...จนวันหนึ่งหมู่บ้านอันสงบสุขเกิดเรื่องประหลาดจากกลุ่มผู้ใช้ ‘ยมล’ อสุรกายเหนือธรรมชาติ ทำให้ยูรุค่อยๆรับรู้ถึงความลับที่ซุกซ่อนไว้ในหมู่บ้านแห่งนี้ศึกการต่อสู้เหนือจินตนาการของ ‘ยมล’ อสุรกายสุดแกร่งกำลังเปิดฉากขึ้น!!', 65, '339582195_font.jpg', 1),
(47, 4, 'มหาศึกคนชนเทพ 16', 'อาจิจิกะ', 'ราชาผู้เริ่มต้น จิ๋นซีฮ่องเต้กับราชายมโลก ฮาเดสทำศึกเดือดกันจนรู้ผล!!ท้ายที่สุดแล้วชัยชนะจะตกเป็นของใครระหว่างฮาเดสผู้ยึดมั่นในหน้าที่พี่คนโตของพี่น้องมหาเทพแห่งตำนานกรีกกับจิ๋นซีฮ่องเต้ผู้เดิมพันด้วยศักดิ์ศรีความเป็นราชาผู้ปกครองแผ่นดินจีน!!', 95, '560449359_font.jpg', 4),
(48, 4, 'BLUE LOCK ขังดวลแข้ง เล่ม 21', 'MUNEYUKI KANESHIRO', 'ในที่สุดก็คว่าตัวที่พไปท้าทายตำแหน่ง เบอร์ 1 ของโลกได้สำเร็จ! อีโก้อิสต์กำลังอยู่ระหว่างพัฒนา!!ตัวเองได้สำเร็จ!!', 95, '1837737423_font.jpg', 0),
(49, 4, 'Cookierun: Kingdom Adventure เล่ม 1: ตะลุยดินแดนยักษจิ๋ว', 'Kim Kang Hyun', 'คุกกี้ผู้กล้าหาญตื่นขึ้นมาในป่าทึบข้างหมู่บ้านเล็ก ๆ แห่งหนึ่ง ในระหว่างที่เขาพบว่าตัวเองไม่มีความทรงจำก่อนหน้านี้อยู่เลย คุกกี้รสชะเอมก็ปรากฏตัวขึ้นแล้วบอกว่าคุกกี้ผู้กล้าหาญคือ “กุญแจสู่คำพยากรณ์” และพยายามจะจับตัวเขาไว้ แล้วอย่างนี้คุกกี้ผู้กล้าหาญจะรอดพ้นจากคุกกี้ผู้ชั่วร้ายและตามหาความทรงจำกลับคืนมาได้หรือไม่ มาลุ้นกัน!', 65, '1958923082_font.jpg', 0),
(50, 4, 'เกิดใหม่เป็นลูกโอชิ 07', 'AKA AKASAKA, MENGO YOKOYARI', 'สำหรับฉันการแสดงก็คือการล้างแค้นนั่นแหละ\r\nละครเวลที 2.5 มิติจากการ์ตูนยอดนิยม \"โตเกียวเบลต\" รอบจริงเปิดม่าน!!\r\nอาริมะ คานะ ดาราเด็กอัจฉริยะในอดีต กับคุโรคาวะ อากาเนะ ยอดฝีมือจาก \"คณะละครลาลาไล\" ในปัจจุบันผู้มีปมขัดแย้งกันโดยมีสาเหตุมาจากความสัมพันธ์ในวัยเด็ก ต้องมาประชันกันผ่านบทบาทของต่างฝ่ายบนเวที!!\r\nแล้วโฮชิโนะ อควอ ผู้ลุกขึ้นเผชิญหน้ากับบาดแผลทางใจของตนเองเพื่อให้ \"แสดงแบบใส่อารมณ์\" ได้มุ่งไปสู่เส้นทางชีวิตในฐานะนักแสดงแบบไหน!?\r\nภาค 5 ภาคละครเวที 2.5 มิติ บัดนี้เข้าสู่ช่วงไคลแมกซ์แล้ว!!', 76, '1635622179_font.gif', 1),
(51, 4, 'คุโรมาตี้ โรงเรียนคนบวม เล่ม 8', 'EIJI NONAKA', 'ทาเคโนะอุจิ หัวโจกของโรงเรียนคุโรมาตี้ เพื่อลบจุดอ่อนอาการเมารถ เขาจึงไปรักษาอาการเมารถกับคุณหมอท่านหนึ่ง ขั้นตอนรักษาจากหมอจะเริ่มจากการเก็บข้อมูลด้วยการออกปั่นจักรยานไปที่ต่างๆ และไปซัดกับแก๊งซิ่งจนทั้งแก๊งแพ้ราบคาบ การออกตามล่าจากแก๊งซิ่งเพื่อแก้แค้นเขาคืนจึงเริ่มต้นขึ้น!!', 69, '642787280_font.gif', 0),
(52, 1, 'คุโรมาตี้ โรงเรียนคนบวม เล่ม 1', 'EIJI NONAKA', 'คามิยามะ ทากาชิ นักเรียนใหม่โรงเรียนม.ปลายคุโรมาตี้ โรงเรียนแห่งนี้นอกจากจะเต็มไปด้วยเหล่านักเลงขี้เกียจเรียนแล้ว ที่นี่ยังอุดมไปด้วยเหล่านักเรียนบ๊องๆ บวมๆ หลุดโลก ขยันสร้างเสียงฮาไม่เหมือนใคร!!', 69, '968747351_font.gif', 3),
(53, 4, 'ก้าวแรกสู่สังเวียน เล่ม 71', 'JOJI MORIKAWA', 'เพื่อสัญญาที่มีกับไอ้หมอนั่น! ศึกชิงแชมป์รุ่นเฟเธอร์ระดับเอเชียแบซิฟิกเริ่มต้นขึ้นโดยมีศึกกับอิปโปเป็นเดิมพัน มิยาตะเต็มไปด้วยความมั่นใจที่ต้องการทําตามสัญญาที่มีกับอิปโปให้ได้ แต่การชกที่คิดว่าไม่น่ามีอะไรยุ่งยากกลับพลิกผัน เมื่อมิยาตะไปเป็นบุคคลปริศนาในที่นั่งของคนดูเขาถึงกับนิ่ง และนั่นเป็นโอกาสให้ผู้ท้าชิงโจมตีมาอย่างรุนแรง...!!', 69, '1676687158_font.gif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `b_fev`
--

CREATE TABLE `b_fev` (
  `fev_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(15, 27, 0);

-- --------------------------------------------------------

--
-- Table structure for table `b_history`
--

CREATE TABLE `b_history` (
  `history_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_start` varchar(25) CHARACTER SET utf8 NOT NULL,
  `date_end` varchar(25) CHARACTER SET utf8 NOT NULL,
  `date_retrun` varchar(25) CHARACTER SET utf8 NOT NULL,
  `status_history` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(16, 52, 1, '2023-07-12', '2023-07-19', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `b_type_book`
--

CREATE TABLE `b_type_book` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `f_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tel` text CHARACTER SET utf8 NOT NULL,
  `user_img` varchar(35) CHARACTER SET utf8 NOT NULL,
  `act_id` int(11) NOT NULL COMMENT '1=ปกติ \r\n2=ระงับการใช้งาน	',
  `status_user` varchar(25) CHARACTER SET utf8 NOT NULL COMMENT '1=บรรณารักษ์\r\n2=เจ้าหน้าที่ \r\n3=สมาชิก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_user`
--

INSERT INTO `b_user` (`user_id`, `username`, `password`, `f_name`, `l_name`, `tel`, `user_img`, `act_id`, `status_user`) VALUES
(1, 'yanisa', '1234', 'ญาณิศา', 'สิมมา', '0811420328', 'user_img33660106.jpg', 1, '3'),
(2, 'admin', '1234', 'admin', 'admin', '', '', 1, '1'),
(8, 'gg', 'gg', 'gg', 'gg', '0811420328', '677287178_font.png', 1, '3'),
(9, '1', '1', 'อาภัสรา', 'อ่อนสุดใจ', '0811420328', '71250690_font.png', 1, '3'),
(10, 'nan', '1234', 'สามารถ', 'กานนิดา', '08114203286', '364993353_font.jpg', 1, '3'),
(11, 'petch', '123456789', 'kittipan', 'jantawai', '0902819248', '447097150_font.jpg', 1, '3'),
(12, 'H', '1234', 'Jssjj', 'Sjjsj', '0811420328', '', 1, '3');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `de_ID` varchar(20) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `de_ID`, `department_name`) VALUES
(0, '-', '-'),
(9, '1234', 'บัญชี'),
(10, '5678', 'การตลาด'),
(12, '30901-200455', 'เทคโนโลยีสารสนเทศ');

-- --------------------------------------------------------

--
-- Table structure for table `f_title`
--

CREATE TABLE `f_title` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_title`
--

INSERT INTO `f_title` (`f_id`, `f_name`) VALUES
(1, 'นาย'),
(2, 'นางสาว'),
(3, 'นาง');

-- --------------------------------------------------------

--
-- Table structure for table `g_player`
--

CREATE TABLE `g_player` (
  `player_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `level` float NOT NULL,
  `fuel` float NOT NULL,
  `ammo` float NOT NULL,
  `steel` float NOT NULL,
  `bauxite` float NOT NULL,
  `development_material` float NOT NULL,
  `improvement_material` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `g_player`
--

INSERT INTO `g_player` (`player_id`, `user_id`, `level`, `fuel`, `ammo`, `steel`, `bauxite`, `development_material`, `improvement_material`) VALUES
(2, 6, 0, 1000, 1000, 1000, 1000, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `g_user`
--

CREATE TABLE `g_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status_user` int(11) NOT NULL,
  `act_id` int(11) NOT NULL,
  `u_date` varchar(20) NOT NULL,
  `u_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `g_user`
--

INSERT INTO `g_user` (`user_id`, `username`, `password`, `name`, `tel`, `address`, `status_user`, `act_id`, `u_date`, `u_time`) VALUES
(6, 'yanisa', '1234', 'ญาณิศา สิมมา', '0811420328', '136/1 asdasdasd', 1, 1, '2023-05-21', '21:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `level_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_name`) VALUES
(1, 'ปวช.'),
(2, 'ปวส.');

-- --------------------------------------------------------

--
-- Table structure for table `list_data`
--

CREATE TABLE `list_data` (
  `list_data_id` int(11) NOT NULL,
  `list_data_name` varchar(100) NOT NULL,
  `list_data_price` float NOT NULL,
  `list_data_unit` varchar(25) NOT NULL,
  `list_data_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list_data`
--

INSERT INTO `list_data` (`list_data_id`, `list_data_name`, `list_data_price`, `list_data_unit`, `list_data_img`) VALUES
(4, 'กระดาษ', 10, 'แผ่น', 'list_data_img898606211.jpg'),
(5, 'ดินสอ', 5, 'แท่ง', 'list_data_img1059209378.png'),
(6, 'ปากกา', 10, 'ด้าม', 'list_data_img1593714619.jpg'),
(7, 'ยางลบ', 5, 'ก้อน', 'list_data_img723618486.jpg'),
(8, 'กระดาษถ่ายเอกสาร A4 80 แกรม 500 แผ่น Idea', 120, 'รีม', 'list_data_img1303980473.jpeg'),
(9, 'ฮาร์ดดิส SSD 256 GB ', 1690, 'ตัว', 'list_data_img71276799.png'),
(10, ' คีย์บอร์ด Logitech K120', 360, 'ตัว', 'list_data_img1247559192.jpg'),
(11, 'กรรไกร 6 นิ้ว delta', 30, 'อัน', 'list_data_img495300405.jpeg'),
(12, 'แฟ้มเสนอเซ็นต์', 150, 'แฟ้ม', 'list_data_img1248950937.jpg'),
(13, 'ฮาร์ดดิส HDD 1 TB ', 1000, 'ตัว', 'list_data_img1152736121.jpg'),
(14, ' คีย์บอร์ด YOUDA', 350, 'ตัว', 'list_data_img357459276.png');

-- --------------------------------------------------------

--
-- Table structure for table `result_detail`
--

CREATE TABLE `result_detail` (
  `rd_id` int(11) NOT NULL,
  `cr_id` int(11) NOT NULL,
  `wg_id` int(11) DEFAULT NULL,
  `list_data_name` varchar(200) NOT NULL,
  `list_data_price` float NOT NULL,
  `qty` float NOT NULL,
  `list_data_unit` varchar(25) NOT NULL,
  `sum` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result_detail`
--

INSERT INTO `result_detail` (`rd_id`, `cr_id`, `wg_id`, `list_data_name`, `list_data_price`, `qty`, `list_data_unit`, `sum`) VALUES
(645, 70, 7, 'กระดาษ', 10, 2, 'แผ่น', 20),
(646, 70, 7, 'ดินสอ', 5, 2, 'แท่ง', 10),
(647, 70, 7, 'ปากกา', 10, 1, 'ด้าม', 10),
(648, 70, 7, 'กระดาษถ่ายเอกสาร A4 80 แกรม 500 แผ่น Idea', 120, 1, 'รีม', 120),
(649, 71, 7, 'กระดาษ', 10, 1, 'แผ่น', 10),
(650, 71, 7, 'ดินสอ', 5, 1, 'แท่ง', 5);

-- --------------------------------------------------------

--
-- Table structure for table `result_head`
--

CREATE TABLE `result_head` (
  `cr_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wg_id` int(11) NOT NULL,
  `rd_title` varchar(150) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `sub_ID` varchar(50) NOT NULL,
  `subject_name` varchar(150) NOT NULL,
  `level_name` varchar(25) NOT NULL,
  `level_num` varchar(10) NOT NULL,
  `people` float NOT NULL,
  `term` varchar(5) NOT NULL,
  `year` varchar(10) NOT NULL,
  `training_project` varchar(50) DEFAULT NULL,
  `training_project_name` varchar(100) NOT NULL,
  `project_nature` varchar(100) NOT NULL,
  `f_day` date NOT NULL,
  `l_day` date NOT NULL,
  `total` float NOT NULL,
  `result_1` varchar(50) NOT NULL,
  `amount_1` float NOT NULL,
  `unit_1` varchar(20) NOT NULL,
  `result_2` varchar(50) NOT NULL,
  `amount_2` float NOT NULL,
  `unit_2` varchar(20) NOT NULL,
  `result_3` varchar(50) NOT NULL,
  `amount_3` float NOT NULL,
  `unit_3` varchar(20) NOT NULL,
  `T1` varchar(150) NOT NULL,
  `T2` varchar(150) NOT NULL,
  `T3` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result_head`
--

INSERT INTO `result_head` (`cr_id`, `user_id`, `wg_id`, `rd_title`, `department_name`, `sub_ID`, `subject_name`, `level_name`, `level_num`, `people`, `term`, `year`, `training_project`, `training_project_name`, `project_nature`, `f_day`, `l_day`, `total`, `result_1`, `amount_1`, `unit_1`, `result_2`, `amount_2`, `unit_2`, `result_3`, `amount_3`, `unit_3`, `T1`, `T2`, `T3`, `date`, `time`, `comment`) VALUES
(70, 20, 7, 'เบิก ซ้อมคอมพื้นฐาน2', 'เทคโนโลยีสารสนเทศ', '111444-42452', 'ซ้อมคอมพิวเตอร์พื้นฐาน2', 'ปวช.', '1/1', 35, '2', '2565', '', 'การเรียนการสอน', 'ตามใบงาน/แผนการสอน', '2023-03-14', '2023-03-18', 235, 'ชุดการฝึกการสอน', 26, 'ชุด', '', 0, '', '', 0, '', 'นายพฤทธิ์ เขื่อนแก้ว', 'นายพฤทธิ์  เขื่อนแก้ว', 'นายกิตติพล  วิเชียรเชื้อ', '2023-03-14', '00:39:02', ''),
(71, 1, 7, 'เบิก ซ้อมคอมพื้นฐาน', 'เทคโนโลยีสารสนเทศ', '11110-22220', 'ซ้อมคอมพิวเตอร์พื้นฐาน2', 'ปวช.', '1/1', 35, '2', '2565', '', 'การเรียนการสอน', 'ตามใบงาน/แผนการสอน', '2023-03-20', '2023-03-21', 15, 'ชุดการฝึกการสอน', 26, 'ชุด', '', 0, '', '', 0, '', 'นางสาวญาณิศา สิมมา', 'นายพฤทธิ์  เขื่อนแก้ว', 'นายกิตติพล  วิเชียรเชื้อ', '2023-03-20', '18:15:13', '');

-- --------------------------------------------------------

--
-- Table structure for table `result_type`
--

CREATE TABLE `result_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result_type`
--

INSERT INTO `result_type` (`type_id`, `type_name`) VALUES
(1, 'สผ.1'),
(2, 'สผ.1'),
(3, 'สผ.3'),
(4, 'ใบเบิกเงินภายใน'),
(5, 'หัวหน้าแผนกสรุป'),
(6, 'ขออนุญาตส่ง');

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE `sex` (
  `sex_id` int(11) NOT NULL,
  `sex_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sex`
--

INSERT INTO `sex` (`sex_id`, `sex_name`) VALUES
(1, 'ชาย'),
(2, 'หญิง');

-- --------------------------------------------------------

--
-- Table structure for table `subject_data`
--

CREATE TABLE `subject_data` (
  `subject_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `sub_ID` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_data`
--

INSERT INTO `subject_data` (`subject_id`, `department_id`, `sub_ID`, `subject_name`) VALUES
(8, 0, '', '-'),
(9, 12, '1234-4567', 'การขายเบื้องต้น'),
(10, 12, '1234-5678dd', 'เครือข่าย'),
(11, 12, '5555', 'Test01'),
(19, 8, '3333333', 'Test'),
(20, 10, '1234-5678dd', 'Test'),
(21, 9, '30501-7889', 'บัญชีเบื้องต้น');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(150) NOT NULL,
  `department_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `department_id`, `status_id`) VALUES
(7, 'นายกิตติพล  วิเชียรเชื้อ', 0, 6),
(8, 'าณิศาาา สิมมามา', 9, 7),
(9, 'นางสาวบาบา นานา', 10, 7),
(11, 'กกก กกก', 11, 7),
(13, 'นายพฤทธิ์  เขื่อนแก้ว', 12, 7),
(14, 'นางสาวภทัรวรรณ ตันสกุล', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_status`
--

CREATE TABLE `teacher_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_status`
--

INSERT INTO `teacher_status` (`status_id`, `status_name`) VALUES
(0, '-'),
(5, 'ผู้อำนวยการ'),
(6, 'รองฝ่ายวิชาการ'),
(7, 'หัวหน้าสาขา'),
(8, 'ครู/อาจารย์');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `sex_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  `status_user` varchar(10) NOT NULL,
  `act_id` int(11) NOT NULL,
  `user_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เก็บข้อมูลสมาชิกทั้งหมด';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_id`, `fname`, `lname`, `username`, `password`, `email`, `tel`, `sex_id`, `address`, `department_id`, `status_user`, `act_id`, `user_img`) VALUES
(1, 2, 'ญาณิศา', 'สิมมา', 'ญาณิศา', '1234', 'nanlo9783@gmail.com', '0811420328', 2, '136/1 ถ.พิชัย ต.ปากเพรียว อ.เมือง จ.สระบุรี', 12, 'member', 2, 'user_img866764124.jpg'),
(2, 1, 'ญาณิศา', 'สิมมา', 'admin', '1234', 'nanlo9783@gmail.com', '0811420328', 2, '136/1 ซ1', 0, 'admin', 2, 'user_img69568981.jpg'),
(10, 1, 'ณฐินี', 'เจริญงามสกุล', 'ณฐินี', '1234', 'nanlo9783@gmail.com', '0811112222', 2, '7wuwhsjsis', 12, 'member', 2, 'user_img1355305018.png'),
(11, 1, 'การตลาด', 'มามี', 'การตลาด1', '1234', 'nanlo9783@gmail.com', '0811420328', 2, '136/1 ถ.พิชัย ต.ปากเพรียว อ.เมื่อง จ.สระบุรี', 10, 'member', 2, 'user_img780422769.jpg'),
(20, 1, 'พฤทธิ์', 'เขื่อนแก้ว', 'keng', '1234', 'keng99@gmail.com', '0811420328', 1, '136/1 ถ.พิชัย ต.ปากเพรียว อ.เมื่อง จ.สระบุรี', 12, 'subadmin', 2, 'user_img1792841843.jfif'),
(21, 2, 'ทดสอบ', 'นะจ๊ะ', 'การตลาด', '1234', 'nanlo9783@gmail.com', '0811420328', 2, '136/1 ถ.พิชัย ต.ปากเพรียว อ.เมื่อง จ.สระบุรี', 10, 'subadmin', 2, 'user_img1242079598.jpg'),
(30, 2, 'บัญชี', 'หัวหน้า', 'บัญชี', '1234', 'nanlo9783@gmail.com', '0811420328', 2, '136/1 ถ.พิชัย ต.ปากเพรียว อ.เมื่อง จ.สระบุรี', 9, 'admin', 2, 'user_img564440680.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_act`
--

CREATE TABLE `user_act` (
  `act_id` int(11) NOT NULL,
  `act_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_act`
--

INSERT INTO `user_act` (`act_id`, `act_name`) VALUES
(1, 'รอการตจรวจสอบ'),
(2, 'ตรวจสอบแล้ว'),
(3, 'ระงับการใช้งาน');

-- --------------------------------------------------------

--
-- Table structure for table `work_group`
--

CREATE TABLE `work_group` (
  `wg_id` int(11) NOT NULL,
  `wg_title` varchar(150) NOT NULL,
  `wg_detail` varchar(250) NOT NULL,
  `wg_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `wg_level` varchar(10) NOT NULL,
  `wg_level_num` varchar(10) NOT NULL,
  `wg_people` varchar(10) NOT NULL,
  `wg_term` varchar(10) NOT NULL,
  `wg_year` varchar(10) NOT NULL,
  `wg_result` varchar(100) NOT NULL,
  `wg_name_k` varchar(50) NOT NULL,
  `wg_project_nature` varchar(100) NOT NULL,
  `wg_f_day` date DEFAULT NULL COMMENT 'วันเริ่มต้นการฝึก',
  `wg_l_day` date DEFAULT NULL COMMENT 'วันสิ้นสุดการฝึก',
  `wg_date` date NOT NULL COMMENT 'วันเอกสาร',
  `wg_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_group`
--

INSERT INTO `work_group` (`wg_id`, `wg_title`, `wg_detail`, `wg_status`, `user_id`, `department_id`, `wg_level`, `wg_level_num`, `wg_people`, `wg_term`, `wg_year`, `wg_result`, `wg_name_k`, `wg_project_nature`, `wg_f_day`, `wg_l_day`, `wg_date`, `wg_time`) VALUES
(6, 'ส่งเอกสาร IT 2565', ' ส่งเอกสารตรงนี้ครับ\r\nสทส.2/1 จำนวน 26 คน ', 2, 20, 12, 'ปวส.', '2/1', '26', '2', '2565', 'ชุดฝึกสอน', 'วัสดุฝึก 2/2565', 'ตามใบงาน/แผนการสอน', '2023-04-19', '2024-02-20', '2023-03-14', '00:42:37'),
(7, 'ส่งเอกสาร ', ' ddd', 1, 20, 12, 'ปวช.', '2/1', '26', '2', '2565', 'ชุดประลอง', 'วัสดุฝึก 2/2565', 'ตามใบงาน/แผนการสอน', '2023-03-14', '2023-03-14', '2023-03-14', '00:43:06');

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
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `f_title`
--
ALTER TABLE `f_title`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `g_player`
--
ALTER TABLE `g_player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `g_user`
--
ALTER TABLE `g_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `list_data`
--
ALTER TABLE `list_data`
  ADD PRIMARY KEY (`list_data_id`);

--
-- Indexes for table `result_detail`
--
ALTER TABLE `result_detail`
  ADD PRIMARY KEY (`rd_id`);

--
-- Indexes for table `result_head`
--
ALTER TABLE `result_head`
  ADD PRIMARY KEY (`cr_id`);

--
-- Indexes for table `result_type`
--
ALTER TABLE `result_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`sex_id`);

--
-- Indexes for table `subject_data`
--
ALTER TABLE `subject_data`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `teacher_status`
--
ALTER TABLE `teacher_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_act`
--
ALTER TABLE `user_act`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `work_group`
--
ALTER TABLE `work_group`
  ADD PRIMARY KEY (`wg_id`);

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
  MODIFY `fev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `b_history`
--
ALTER TABLE `b_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `b_type_book`
--
ALTER TABLE `b_type_book`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `b_user`
--
ALTER TABLE `b_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `f_title`
--
ALTER TABLE `f_title`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `g_player`
--
ALTER TABLE `g_player`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `g_user`
--
ALTER TABLE `g_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_data`
--
ALTER TABLE `list_data`
  MODIFY `list_data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `result_detail`
--
ALTER TABLE `result_detail`
  MODIFY `rd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `result_head`
--
ALTER TABLE `result_head`
  MODIFY `cr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `result_type`
--
ALTER TABLE `result_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sex`
--
ALTER TABLE `sex`
  MODIFY `sex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject_data`
--
ALTER TABLE `subject_data`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teacher_status`
--
ALTER TABLE `teacher_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_act`
--
ALTER TABLE `user_act`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_group`
--
ALTER TABLE `work_group`
  MODIFY `wg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
