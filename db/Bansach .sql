﻿-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2015 at 02:28 PM
-- Server version: 5.5.44-0ubuntu0.14.10.1
-- PHP Version: 5.5.12-2ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookstore`
--
CREATE DATABASE IF NOT EXISTS `Bansach` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Bansach`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) unsigned NOT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `userId` int(11) unsigned DEFAULT NULL,
  `createDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `message`, `userId`, `createDate`) VALUES
(1, 'abc', 5, '2015-10-29 08:57:41'),
(2, 'abc', 1, '2015-10-29 09:18:31'),
(3, 'abc', 5, '2015-10-30 10:39:58'),
(4, '', 5, '2015-10-30 17:59:30'),
(5, 'abc', 5, '2015-11-02 13:57:30'),
(6, 'deff', 5, '2015-11-02 13:57:35'),
(7, 'abcdè\r\n', 3, '2015-11-06 09:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `nxb`
--

DROP TABLE IF EXISTS `nxb`;
CREATE TABLE IF NOT EXISTS `nxb` (
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `frequency` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `nxb`
--

INSERT INTO `nxb` (`id`, `name`, `content`, `image`, `frequency`) VALUES
(1, 'TP.Hồ Chí Minh', 'Mời các bạn tham dự Buổi giao lưu lúc 9h00 ngày 31/10/2015 (Thứ bảy) tại Hội trường Nhà xuất bản Tổng hợp Thành phố Hồ Chí Minh, 62 Nguyễn Thị Minh Khai, P. Đa Kao, Quận 1!!!!\r\nCùng Tác giả Phạm Phương Thảo và cuốn sách mới Hãy cứ đi về phía Nhân dân!!!\r\nTác giả chia sẻ những trăn trở về việc xây dựng và phát triển Thành phố từ góc độ của người đã từng tham gia quyết sách.\r\nNhà xuất bản Tổng hợp Thành phố Hồ Chí Minh gửi tặng phiếu ebook và sách Hãy cứ đi về phía Nhân dân đến các bạn tham gia đặt câu hỏi giao lưu nhé!!!\r\nCùng nhìn Thành phố Hồ Chí Minh từ góc độ xây dựng và phát triển nhé các bạn!!!!', 'image/nxb/tphochiminh.jpg', 2),
(2, 'văn Hóa Thông Tin', '- Được thành lập ngày 24 tháng 7 năm 1957 theo Nghị định số 47-VH-NĐ do Bộ trưởng Bộ Văn hóa Thông tin Hoàng Minh Giám ký, với tên gọi tiền thân là Nhà xuất bản Mỹ thuật và Âm nhạc.\r\n- Đến năm 1959, Bộ quyết định tách ra làm hai nhà xuất bản: Nhà xuất bản Mỹ thuật và Nhà xuất bản Âm nhạc\r\n- Ngày 15- 2- 1962, theo Quyết định số 838/VH – QĐ: hợp nhất ba nhà xuất bản Văn hóa Nghệ thuật, Mỹ thuật, Âm nhạc thành Nhà xuất bản Văn hóa Nghệ thuật.\r\n- Ngày 3- 2 - 1966, Quyết định số 09-VH/QĐ đổi tên Nhà xuất bản Văn hóa Nghệ thuật thành Nhà xuất bản Mỹ thuật, Âm nhạc\r\n- Ngày 28-9-1970, Quyết định số 76-VH/QĐ đổi tên lại là Nhà xuất bản Văn hóa Nghệ thuật\r\n- Ngày 15-6-1971, có thêm Quyết định số 83-VH/QĐ đổi tên Nhà xuất bản Mỹ thuật Âm nhạc, thuộc Cục xuất bản thành Nhà xuất bản Văn hóa thuộc Bộ Văn hóa\r\n- Ngày 31-8-1978, Quyết định số 127-VHTT hợp nhất ba nhà xuất bản: Nhà xuất bản Văn hóa, Nhà xuất bản Văn hóa Dân tộc và Nhà xuất bản Phổ thông và lấy tên là Nhà xuất bản Văn hóa\r\n- Ngày 13-10-1986,  Quyết định số 257/VH-QĐ tách ra làm ba nhà xuất bản: Văn hóa, Văn hóa Dân tộc, Âm nhạc\r\n- Ngày 23-11-1992, Bộ trưởng Bộ Văn hóa Thông tin Trần Hoàn ra Quyết định số 1662/QĐ-TC hợp nhất Nhà xuất bản Văn hóa và Nhà xuất bản Thông tin thành Nhà xuất bản Văn hóa Thông tin trực thuộc Bộ Văn hóa Thông tin.\r\n2. Chức năng, nhiệm vụ\r\n1. Nhà xuất bản Văn hóa Thông tin là một doanh nghiệp Nhà nước có pháp nhân đầy đủ; sản xuất kinh doanh xuất bản phẩm theo nhiệm vụ của Nhà xuất bản và theo luật pháp của Nhà nước\r\nNhà xuất bản Văn hóa Thông tin có trụ sở chính ở Hà Nội và chi nhánh tại thành phố Hồ Chí Minh; có con dấu và tài khoản riêng tại ngân hàng.\r\n2. Nhà xuất bản Văn hóa Thông tin có nhiệm vụ:\r\n     a. Xuất bản, nhận uỷ thác xuất bản và phát hành các loại xuất bản phẩm bao gồm sách, tranh ảnh, văn hóa phẩm kể cả băng video và cassette về văn hóa, thông tin nhằm giới thiệu những thành tựu và tinh hoa văn hóa của Việt Nam và thế giới; thông báo, giới thiệu và tuyên truyền cổ động đường lối, chính sách của Đảng và Nhà nước về chính trị, kinh tế, khoa học kỹ thuật, văn hóa xã hội cho quảng đại quần chúng nhân dân trong cả nước, người Việt Nam ở nước ngoài và người nước ngoài có nhu cầu.\r\n     b. Quản lý cán bộ nhân viên, cơ sở vật chất kỹ thuật; thực hiện chế độ, chính sách của Nhà nước; sử dụng, bảo toàn, phát triển vốn và nghĩa vụ nộp tài chính với Nhà nước theo quy định.', 'image/nxb/vanhoathongtin.jpg', 2),
(3, 'Văn Hóa', 'Tôi ít khi chọn đọc tác phẩm của người mà trước đó chưa biết gì về họ. Vì thế, khi cầm tập truyện ngắn Gió trên đồng, tôi thật sự chưa có niềm tin đây sẽ là tác phẩm đủ sức thu hút tôi.\r\n\r\nMột phần của sự nghi ngờ này cũng bởi tôi khá quen với những truyện ngắn của nhiều cây bút miền sông nước viết theo kiểu "kể chuyện đồng bằng".\r\n\r\nẤy vậy mà, tôi bị cuốn hút ngay từ truyện ngắn đầu tiên của tập này: Chuyện đồng bằng. Chuyện kể về mối tình khốc liệt giữa cô gái câm và một gã giang hồ có biệt tài phóng dao, trốn chui trốn nhủi về miệt vườn để rồi một ngày trở thành cứu tinh cho đoàn xiếc. Truyện được viết vào năm 1994, bối cảnh đã lùi xa cùng với những đau đớn của thân phận con người trong một thời đại chìm nổi. Tình yêu đau đớn và hy sinh kiên cường để đưa cái ác về thiện mỹ.', 'image/nxb/vanhoa.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts_comments_nm`
--

DROP TABLE IF EXISTS `posts_comments_nm`;
CREATE TABLE IF NOT EXISTS `posts_comments_nm` (
  `postId` int(11) unsigned NOT NULL,
  `commentId` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts_comments_nm`
--

INSERT INTO `posts_comments_nm` (`postId`, `commentId`) VALUES
(25, 1),
(26, 2),
(26, 3),
(26, 4),
(22, 5),
(22, 6),
(26, 7);

-- --------------------------------------------------------

--
-- Table structure for table `posts_reviews_nm`
--

DROP TABLE IF EXISTS `posts_reviews_nm`;
CREATE TABLE IF NOT EXISTS `posts_reviews_nm` (
  `postId` int(11) unsigned NOT NULL,
  `reviewId` int(11) unsigned NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
`id` int(11) unsigned NOT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `rate1` int(11) NOT NULL,
  `rate2` int(11) NOT NULL,
  `rate3` int(11) NOT NULL,
  `rate4` int(11) NOT NULL,
  `rate5` int(11) NOT NULL,
  `userId` int(11) unsigned DEFAULT NULL,
  `createDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

DROP TABLE IF EXISTS `tbl_book`;
CREATE TABLE IF NOT EXISTS `tbl_book` (
`id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `nxb` varchar(128) NOT NULL,
  `author` varchar(128) NOT NULL,
  `km_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  `cost` int(13) NOT NULL,
  `introduc` text NOT NULL,
  `namxb` int(11) NOT NULL,
  `slnhap` int(11) NOT NULL,
  `slcon` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `image`, `nxb`, `author`, `km_id`, `name`, `type`, `cost`, `introduc`, `namxb`, `slnhap`, `slcon`) VALUES
(1, '', 'abc', 'to hoai, abc', 9, 'abc', 1, 12123, 'dsad', 12312, 1231, 0),
(2, '', 'kim dong', 'mac dang khoa', 9, 'abcd', 1, 1000, '<p>\r\n	asdasd</p>\r\n', 1994, 300, 0),
(3, '', '12121', '2121', 9, '12', 2121, 212, '<p>\r\n	2121</p>\r\n', 212, 2121, 2121),
(4, 'asda', 'adas', 't', 5, 'asd', 0, 123, '1asd', 11, 231, 12312),
(5, 'image/minnanonihongo1.jpeg', 'nhat ban', 'nhat ban', 1, 'Minna no nihongo I', 1, 100000, 'Minna no Nihongo và Genki là hai giáo trình rất quen thuộc đối với những ai mới làm quen với tiếng Nhật. Phần đông những trung tâm dạy tiếng Nhật ở Việt Nam chọn Minna no Nihongo làm giáo trình chính, tuy nhiên vẫn có những bạn sử dụng Genki để bắt đầu học tiếng Nhật. Vậy những ưu điểm, khuyết điểm của hai giáo trình là gì, và lựa chọn nào sẽ là phù hợp cho trường hợp của bạn? Chúng ta hãy cùng tìm hiểu.', 1994, 120, 120),
(6, 'image/hatgiongtamhon1.jpeg', 'TP.Hồ CHí Minh', 'TP.Hồ CHí Minh', 1, 'Hạt Giống Tâm Hồn I', 2, 20000, 'Một bộ sách nổi tiếng về các câu chuyện nghệ thuật sống và giá trị đạo đức được Công ty First News Trí Việt góp nhặt, sưu tầm và nhận về từ sự đóng góp từ cộng đồng. Bộ sách là nguồn cảm hứng và sự thúc đẩy con người vươn lên trong mọi nghịch cảnh, chiến thắng chính mình, và sống xứng đáng với phẩm giá của mình. Bộ sách đã được đại đa số cộng đồng giới trẻ đón nhận.', 2006, 120, 120),
(7, 'image/ScreenShot00001.jpg', '2015', 'Nhiều Tác Giả ', 1, 'Giáo Trình Kỹ Thuật Lập Trình C Căn Bản Và Nâng Cao ', 1, 84000, 'Giáo trình Kỹ thuật lập trình Ngôn ngữ C được hình thành qua nhiều năm giảng dạy của các tác giả. Ngôn ngữ lập trình C là một môn học cơ sở trong chương trình đào tạo kỹ sư, cử nhân tin học của nhiều trường đại học. Ở đây sinh viên được trang bị những kiến thức cơ bản nhất về lập trình, các kỹ thuật  tổ chức dữ liệu và lập trình căn bản với ngôn ngữ C.\r\n\r\nĐể đáp ứng nhu cầu học tập ngôn ngữ lập trình C của sinh viên cũng như nhu cầu về tài liệu cho mọi người trong nhiều ngành khoa học và kỹ thuật cần nghiên cứu C để giải quyết các bài toán của mình, tác giả biên soạn cuốn sách này. Nội dung cuốn sách là tập hợp một cách có chọn lọc các bài giảng của các tác giả.', 2015, 100, 80),
(8, 'image/ScreenShot00002.jpg', 'NXB Lao Động Xã Hội', 'Nguyễn Nguyệt Minh', 2, 'Tìm Hiểu Về Công Nghệ Thông Tin', 1, 50000, 'Loài người đang bước vào thời đại thông tin. Thông tin, thông tin hóa, thông tin xã hội và nhiều từ ngữ mới bao hàm nội dung này đều đang trở thành chủ đề nóng hổi của xã hội.\r\n\r\nCuốn sách này chủ yếu giới thiệu về công nghệ thông tin hiện đại. Công nghệ thông tin ngày nay có quan hệ mật thiết với công nghệ máy tính, công nghệ tự động hóa. Do vậy, cuốn sách cũng giới thiệu cả về công nghệ máy tính và công nghệ tự động hóa nhằm đưa đến cho bạn đọc kiến thức tổng hợp và toàn diện.\r\n\r\nCuốn sách gồm những nội dung chính như sau:\r\n\r\nLàm thế nào để kết nối điện thoại lại với nhau?\r\n\r\nCáp quang\r\n\r\nCông nghệ Bluetooth\r\n\r\nĐịa chỉ IP\r\n\r\nTruyền hình vệ tinh\r\n\r\nMạng tích hợp IC\r\n\r\nCông nghệ WLAN\r\n\r\nHệ thống định vị toàn cầu GPS\r\n...', 2015, 100, 20),
(9, 'image/ScreenShot00003.jpg', 'NXB Hồng Đức', 'Nguyễn Đức Hiếu', 2, 'Tự Học Nhanh Word 2013', 1, 35000, 'Cuốn sách được biên soạn với mục đích củng cố kiến thức cơ bản, cập nhật các tính năng mới, trang bị các kỹ năng về ứng dụng WinWord cho người sử dụng máy tính. Sách trình bày về MS Office Word 2013 với những tính năng cơ bản và tiện dụng, hiện đại và tối ưu hóa giao diện.\r\n\r\nNội dung sách gồm những nội dung chính như sau:\r\n\r\n- Làm quen với Microsoft Word 2013.\r\n\r\n- Soạn thảo văn bản.\r\n\r\n- Hiệu chỉnh văn bản.\r\n\r\n- Làm việc với bảng biểu.\r\n\r\n- Chèn các đối tượng vào văn bản.\r\n\r\n- In ấn.', 2015, 60, 20),
(10, 'image/ScreenShot00004.jpg', '2015', 'Nguyễn Đức Hiếu', 1, 'Tự Học Photoshop CS6', 1, 40000, 'Cuốn sách được biên soạn với mục đích củng cố kiến thức cơ bản, cập nhật các tính năng mới, trang bị các kỹ năng về ứng dụng WinWord cho người sử dụng máy tính. Sách trình bày về MS Office Word 2013 với những tính năng cơ bản và tiện dụng, hiện đại và tối ưu hóa giao diện.\r\n\r\nNội dung sách gồm những nội dung chính như sau:\r\n\r\n- Làm quen với Microsoft Word 2013.\r\n\r\n- Soạn thảo văn bản.\r\n\r\n- Hiệu chỉnh văn bản.\r\n\r\n- Làm việc với bảng biểu.\r\n\r\n- Chèn các đối tượng vào văn bản.\r\n\r\n- In ấn.', 2015, 10, 5),
(11, 'image/ScreenShot00005.jpg', '2015', 'Nhật Minh - Hà Thành', 1, 'Tự học photoshop CS5', 1, 39000, 'Có thể nói, Adobe Photoshop CS5 là một trong những giải pháp tuyệt đỉnh cho các thao tác xử lý ảnh số cao cấp, cung cấp mọi tính năng phối ghép và biên tập vốn có trong Photoshop, cộng thêm những công cụ đột phá cho phép người sử dụng tạo lập và chỉnh sửa các nội dung 3D và chuyển động thú vị theo nhu cầu, sở thích. Với những đặc điểm ứng dụng vượt trội như: phá vỡ những giới hạn sáng tạo với những thiết kế 2D/3D đẳng cấp thế giới; sử dụng những tính năng lựa chọn, tô vẽ và tinh chỉnh mạnh mẽ mới nhằm tạo ra những bức ảnh đột phá, làm cho trang web thêm sống động và tạo nét riêng biệt cho mỗi trang web; dễ dàng lựa chọn các thành phần ảnh tinh tế cho bố cục; tạo các ảnh nghệ thuật 3D cho logo và nút bấm..., Adobe Photoshop CS5 luôn là sự lựa chọn hàng đầu của các tổ chức, cá nhân về một phần mềm đồ họa thực sự ấn tượng và tạo ra được những hiệu ứng mạnh mẽ, tích cực.\r\n\r\nTự học Adobe Photoshop CS5 sẽ cung cấp đến người sử dụng những thông tin cơ bản lẫn nâng cao liên quan đến một trong những phần mềm được yêu thích và sử dụng nhiều nhất hiện nay trên toàn thế giới.', 2015, 10, 10),
(12, 'image/ScreenShot00006.jpg', 'NXB Hồng Đức', 'Hà Thành - Trí Việt', 1, 'Tự Học Nhanh Word 2010', 1, 37000, 'Trong một vài năm gần đây, xu thế phát triển những phần mềm mã nguồn mở ngày càng nhiều, nhất là các ứng dụng trong bộ phần mềm văn phòng như soạn thảo văn bản, bảng tính hay ứng dụng trình chiếu. Tuy nhiên, Microsoft  Office vẫn chiếm được sự tin tưởng của người sử dụng, bằng việc cho ra đời phiên bản Office 2007 với giao diện đẹp, thiết kế khoa học. Ba ứng dụng phổ biến nhất là Word, Excel, PowperPoint.\r\n\r\nNội dung cuốn sáchgồm 7 bài học, hướng dẫn kiến thức và kỹ năng cơ bản liên quan đến Word  2010:\r\n\r\n- Soạn thảo văn bản\r\n\r\n- Hiệu chỉnh văn bản trên word 2010\r\n\r\n- Làm việc với bảng biểu\r\n\r\n- Chèn các đối tượng vào văn bản\r\n\r\n- Một số mẹo hay để thao tác nhanh trên word', 2015, 10, 10),
(13, 'image/ScreenShot00007.jpeg', 'NXB Hồng Đức', 'Hà Thành - Trí Việt', 2, 'Tự Học Nhanh Word 2007', 1, 33000, 'Trong một vài năm gần đây, xu thế phát triển những phần mềm mã nguồn mở ngày càng nhiều, nhất là các ứng dụng trong bộ phần mềm văn phòng như soạn thảo văn bản, bảng tính hay ứng dụng trình chiếu. Tuy nhiên, Microsoft  Office vẫn chiếm được sự tin tưởng của người sử dụng, bằng việc cho ra đời phiên bản Office 2007 với giao diện đẹp, thiết kế khoa học.\r\n\r\nNội dung cuốn sách hướng dẫn những thủ thuật cơ bản liên quan đến Word 2007:\r\n\r\nHướng dẫn học nhanh cách cài đặt và tìm hiểu giao diện Word 2007\r\n\r\nTự học nhanh cách soạn thảo văn bản trong Word 2007\r\n\r\nHọc nhanh cách chỉnh sửa văn bản trên Word 2007\r\n\r\nHọc nhanh cách vẽ hình, biểu đồ, biểu thức trong Word 2007', 2015, 15, 15),
(14, 'image/ScreenShot00008.jpeg', 'NXB Hồng Đức', 'Hà Thành - Trí Việt', 3, 'Tự Học Nhanh Excel 2010', 1, 49000, 'Trong một vài năm gần đây, xu thế phát triển những phần mềm mã nguồn mở ngày càng nhiều, nhất là các ứng dụng trong bộ phần mềm văn phòng như soạn thảo văn bản, bảng tính hay ứng dụng trình chiếu. Tuy nhiên, Microsoft  Office vẫn chiếm được sự tin tưởng của người sử dụng, bằng việc cho ra đời phiên bản Office 2007 với giao diện đẹp, thiết kế khoa học. Ba ứng dụng phổ biến nhất là Word, Excel, PowperPoint.\r\n\r\nNội dung cuốn sáchgồm 7 bài học, hướng dẫn kiến thức và kỹ năng cơ bản liên quan đến Excel 2010:\r\n\r\n- Thao tác với bảng tính\r\n\r\n- Làm việc với dữ liệu trên Excel 2010\r\n\r\n- Công thức và hàm, tìm hiểu một số hàm cơ bản trong Excel 2010\r\n\r\n- Mẹo nhỏ giúp thao tác nhanh với Excel 2010\r\n\r\n- In ấn trong Excel 2010', 2015, 10, 10),
(15, 'image/ScreenShot00009.jpg', 'NXB Bách Khoa Hà Nội', 'Jeremy Osborn và Nhóm AGI Creative', 1, 'Thiết Kế Web Với Dreamweaver', 1, 59000, 'Adobe Photoshop là phân mềm hàng đầu trong ngành công nghiệp xử lý ảnh số. Tương tự như Thiết kế web với Dreamweaver CS4, cuốn sách Thiết kê hình ảnh với Photoshop CS4 cung cấp hướng dẫn trọn vẹn về những kỹ năng sử dụng công cụ thiết yếu để thiết kế và thao tác với hình ảnh dùng trong in ấn, đăng tải lên web, làm nội dung truyền thông đa phương tiện, ghép vào clip và phục vụ việc thể hiện ý tưởng sáng tạo một cách trực quan bằng hình ảnh.', 2015, 10, 9),
(16, 'image/ScreenShot00010.jpg', 'NXB Hồng Đức', 'Trí Việt - Hà Thành', 1, 'Tự Học Nhanh Word 2003 - 2007', 1, 49000, 'Cuốn sách được biên soạn với mục đích củng cố kiến thức cơ bản, cập nhật các tính năng mới, trang bị các kỹ năng về ứng dụng WinWord cho người sử dụng máy tính. Sách trình bày về MS Office Wors 20003 với những tính năng cơ bản và tiện dụng, bên cạnh đó cũng giới thiệu về MS Office Word 2007 hiện đại và tối ưu hóa giao diện.\r\n\r\nNội dung sách gồm 3 phần:\r\n\r\n- Kiến thức cơ bản về Office Word 2003\r\n\r\n- Tự học nhanh Word qua hai phiên bản 2003 - 2007\r\n\r\n- Tự học hiệu chỉnh văn bản với Word 2003 - 2007', 2014, 5, 5),
(17, 'image/ScreenShot00011.jpg', 'NXB Hồng Đức', 'Hà Thành - Trí Việt', 1, 'Tin Học Dành Cho Người Tự Học', 1, 59000, 'Cuốn sách đáp ứng nhu cầu của người sử dụng máy tính, với mục đích giúp người học có thể sử dụng thành thạo nhiều phần mềm ứng dụng khác nhau.\r\n\r\nNội dung sách gồm 4 phần:\r\n\r\nPhần 1: Tìm hiểu các kiến thức cơ bản về phần cứng máy tính\r\n\r\nPhần 2: Kiến thức cơ bản về Windows XP\r\n\r\nPhần 3: Tự học các kiến thức cơ bản về các phần mềm tin học văn phòng\r\n\r\nPhần 4: Quản trị mạng', 2015, 10, 10),
(18, 'image/ScreenShot00012.jpg', 'NXB Hồng Đức', 'Hà Thành - Trí Việt', 1, 'Học Nhanh Tin Học Văn Phòng', 1, 45000, 'Cuốn sách trình bày các kiến thức cơ bản về Hệ điều hành Windows XP, Microsoft Office 2003, về ứng dụng Internet, nhằm giúp người học trang bị nhanh nhất các kiến thức về tin học văn phòng.\r\n\r\nNội dung sách gồm 5 phần:\r\n\r\n- Khám phá và làm việc trên hệ điều hành Windows\r\n\r\n- Các kiến thức Microsoft Word 2003\r\n\r\n- Các kiến thức về Microsoft Excel 2003\r\n\r\n- Các kiến thức về PowerPoint 2003\r\n\r\n- Cách lập hòm thư gmail và Blog trên Google Internet', 2015, 5, 5),
(19, 'image/ScreenShot00013.jpg', 'NXB Hồng Đức', 'Hà Thành - Trí Việt', 1, 'Hướng Dẫn Sử Dụng Excel 2007', 1, 49000, 'Trong một vài năm gần đây, xu thế phát triển những phần mềm mã nguồn mở ngày càng nhiều, nhất là các ứng dụng trong bộ phần mềm văn phòng như soạn thảo văn bản, bảng tính hay ứng dụng trình chiếu, torng số này có thể kể đến như Open Office, King Office. Tuy nhiên, Microsoft Office vẫn chiếm được sự tin tưởng của người sử dụng, bằng việc cho ra đời phiên bản Office 2007 với giao diện thiết kế khoa học, đẹp mắt.\r\n\r\nNội dung sách gồm 7 bài học, giới thiệu một trong ba ứng dụng phổ biến nhất của Microsoft là Excel.', 2015, 10, 10),
(20, 'image/ScreenShot00014.jpg', 'NXB Hồng Đức', 'Trí Việt - Hà Thành', 1, 'Tự Học Corel Draw X4', 1, 56000, 'Corel DRAW là một công cụ dùng cho việc thiết kế đồ họa với khả năng tinh tế và tốc độ vượt trội của Corel DRAW trong việc thực hiện những sản phẩm "văn hóa trực quan".\r\n\r\nBên cạnh ý tưởng sáng tạo của người thiết kế đồ họa, có thể nhận ra dấu ấn của Corel DRAW trong nhiều trang minh họa, quảng cáo, nhãn hiệu, bích chương. Ngoài ra, các chức năng vẽ chính xác làm cho Corel DRAW ngày càng được ưa chuộng trong việc thiết kế tài liệu, báo cáo thuộc các lĩnh vực khoa học kỹ thuật. Cuốn sách này giúp bạn tìm hiểu cách sử dụng Corel DRAW và rèn luyện những kỹ năng đồ họa căn bản nhất.', 2015, 10, 10),
(21, 'image/ScreenShot00015.jpg', 'NXB Thanh Hóa', 'Jonathan Herring', 1, 'Thực Hành AutoCad 2016 (Cơ Bản & Nâng Cao)', 1, 79000, 'Cuốn sách gồm những nội dung chính như sau:\r\n\r\nKhởi đầu với AutoCAD 2016\r\n\r\nCác kỹ năng bản vẽ cơ bản\r\n\r\nSử dụng trợ giúp bản vẽ\r\n\r\nChỉnh sửa các đối tượng\r\n\r\nĐịnh hình các đường cong\r\n\r\nKiểm soát tầm nhìn diện mạo đối tượng\r\n\r\nTổ chức các đối tượng\r\n\r\nLàm việc với các khối và Xref\r\n\r\nTạo và hiệu chỉnh văn bản\r\n\r\nĐo các kích thước\r\n\r\nGiữ quyền kiểm soát bằng các ràng buộc\r\n\r\nBố trí và chú thích các đối tượng.', 2015, 10, 5),
(22, 'image/ScreenShot00016.jpg', 'NXB Bách Khoa Hà Nội', 'Timothy J.O’ Leary - Linda I. O’leary', 1, 'Tin Học Cơ Sở', 1, 119000, 'Công nghệ cao và công nghệ thông tin nói riêng đã và đang giúp hàng loạt quốc gia châu Á, trong đó có Việt Nam, thu hẹp khoảng cách và bước kịp các quốc gia phương Tây về sự phát triển.\r\n\r\nTin Học Cơ Sở cung cấp cho người học những kiến thức căn bản cần biết về công nghệ thông tin. Sách truyền tải những nhận thức sâu sắc về tác động của công nghệ thông tin đối với cuộc sống con người và môi trường, nhằm bổ sung nền tảng thiết yếu để xây dựng những kỹ năng tin học cần thiết cho độc giả.', 2015, 10, 3),
(23, 'image/ScreenShot00017.jpg', 'NXB Thông Tin & Truyền Thông', 'Thái Thanh Sơn', 1, 'Tin Học Cơ Bản Ứng Dụng Trong Đời Sống', 1, 68000, 'Để giúp những người không chuyên về công nghệ thông tin có một tài liệu đơn giản, có thể tự học, dễ sử dụng, nhưng rất cơ bản và cần thiết nhất cho cuộc sống và công việc hàng ngày của mình, Ban công nghệ và ban đào tạo của viện nghiên cứu và phát triển tin học ứng dụng (AIRDI) tổ chức biên soạn nội dung xuất bản cuốn Tin Học Cơ Bản Ứng Dụng Trong Đời Sống. Nội dung cuốn sách gồm 8 chương:\r\n\r\nChương 1: Thông tin và lượng thông tin\r\n\r\nChương 2: Làm quen với máy tính\r\n\r\nChương 3: Chương trình soạn thảo máy tính\r\n\r\nChương 4: Chương trình bản tính Excel\r\n\r\nChương 5: Chương trình trình chiếu\r\n\r\nChương 6: Mạng máy tính, khai thác một vài dịch vụ trên Internet\r\n\r\nChương 7: Mạng xã hội Blog\r\n\r\nChương 8: Virus máy tính', 2015, 10, 10),
(24, 'image/ScreenShot00018.jpg', 'NXB Hồng Đức', 'Hà Thành - Trí Việt', 1, 'Học Thiết Kế Đồ Họa Trên CorelDRAW X3', 1, 45000, 'Chương 1: Làm việc với trang bản vẽ\r\n\r\nChương 2: Làm việc với các đối tượng trên Coreldraw X3\r\n\r\nChương 3: Làm việc với các công cụ vẽ hình của Coreldraw X3\r\n\r\nChương 4: Làm việc với các công cụ vẽ đường\r\n\r\nChương 5: Công cụ tô màu và đường biên\r\n\r\nChương 6:  Làm việc với công cụ văn bản trên Coreldraw X3', 2015, 10, 4),
(25, 'image/ScreenShot00019.jpg', 'NXB Hồng Đức', 'Hà Thành - Trí Việt', 1, 'Hướng Dẫn Sử Dụng Access 2003', 1, 56000, 'update', 2015, 10, 3),
(26, 'image/ScreenShot00020.jpg', 'NXB Văn Hoá Thông Tin', 'HVL.COM', 2, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 1, 56000, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút\r\n\r\nMicrosoft Windows 7 là một hệ điều hành được đông đảo người dùng sử dụng rộng rãi trên các máy tính ngày nay, vói các tính năng vượt trội và dễ sử dụng.\r\n\r\nQuyển sách Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút được biên soạn bao gồm các bài hướng dẫn ngắn gọn và dễ hiểu từng bước rõ ràng bằng hình minh họa, nhằm giúp bạn tự học và tự thực hành một cách nhanh chóng và đặc biệt không lãng phí thời gian của bạn như:\r\n\r\n-  Khởi đầu với Windows 7\r\n\r\n-  Quản lý Desktop\r\n\r\n-  Làm việc với các thư viện\r\n\r\n-  Thưởng thức các bức ảnh và Media\r\n\r\n-  Quản lý các thiết bị và máy in\r\n\r\n-  Kết nối một mạng Wireless\r\n\r\n-  Duyệt web với Internet Explorer 8\r\n\r\n-  Tạo và sử dụng Homegroup\r\n\r\n-  Kết nối với những máy tính Windows khác\r\n\r\n-  Sử dụng Windows Backup\r\n\r\n-  Các thủ thuật Windows 7\r\n\r\n-  Các phím tắt Windows 7\r\n\r\nQua quyển sách này, bạn sẽ tự học và tự thực hành nhằm sử dụng hệ điều hành Microsoft Windows 7 vào công việc của mình một cách nhanh chóng và hiệu quả nhất.', 2015, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giohang`
--

DROP TABLE IF EXISTS `tbl_giohang`;
CREATE TABLE IF NOT EXISTS `tbl_giohang` (
`id` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_book` varchar(200) NOT NULL,
  `cost` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id`, `id_book`, `id_user`, `name_book`, `cost`, `number`, `status`, `time`) VALUES
(2, 26, 1, 'abc', 12, 1, 1, '0000-00-00 00:00:00'),
(3, 26, 3, 'abcdef', 12, 1, 1, '0000-00-00 00:00:00'),
(4, 26, 2, 'abcdef', 1, 3, 0, '0000-00-00 00:00:00'),
(5, 0, 1, 'ancd', 12, 9, 1, '0000-00-00 00:00:00'),
(6, 0, 1, 'abcdègh', 123, 1, 1, '0000-00-00 00:00:00'),
(7, 26, 2, '1', 3, 1, 1, '0000-00-00 00:00:00'),
(8, 26, 2, 'abcd', 123, 12, 1, '2015-10-31 00:59:52'),
(9, 26, 0, 'abc', 0, 0, 0, '2015-10-31 01:03:48'),
(10, 22, 0, 'abcd', 0, 0, 0, '2015-10-31 01:18:38'),
(11, 26, 0, 'đấ', 0, 0, 0, '2015-10-31 01:26:54'),
(12, 26, 0, 'abcd', 0, 0, 0, '2015-10-31 01:30:02'),
(13, 26, 0, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 0, 0, 0, '2015-10-31 08:21:31'),
(14, 26, 0, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 0, 0, 0, '2015-10-31 08:23:00'),
(15, 25, 0, 'Hướng Dẫn Sử Dụng Access 2003', 0, 0, 0, '2015-10-31 08:24:01'),
(16, 25, 0, 'Hướng Dẫn Sử Dụng Access 2003', 0, 0, 0, '2015-10-31 08:26:59'),
(17, 24, 0, 'Học Thiết Kế Đồ Họa Trên CorelDRAW X3', 45000, 0, 45000, '2015-10-31 08:29:18'),
(18, 26, 0, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 0, 56000, '2015-10-31 08:29:44'),
(19, 26, 0, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 0, 1, '2015-10-31 08:30:16'),
(20, 26, 0, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 0, 1, '2015-10-31 08:30:37'),
(21, 26, 0, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 2, 1, '2015-10-31 08:32:07'),
(22, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 1, 1, '2015-10-31 11:55:13'),
(23, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 3, 1, '2015-10-31 12:23:48'),
(24, 22, 5, 'Tin Học Cơ Sở', 119000, 3, 1, '2015-10-31 12:24:19'),
(25, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 4, 1, '2015-10-31 12:25:28'),
(26, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 3, 1, '2015-10-31 12:26:02'),
(27, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 3, 1, '2015-10-31 12:39:31'),
(28, 24, 5, 'Học Thiết Kế Đồ Họa Trên CorelDRAW X3', 45000, 3, 1, '2015-10-31 12:43:04'),
(29, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 3, 1, '2015-10-31 12:44:11'),
(30, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 3, 1, '2015-10-31 12:45:31'),
(31, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 3, 1, '2015-10-31 12:48:15'),
(32, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 3, 1, '2015-10-31 12:49:00'),
(33, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 2, 1, '2015-10-31 12:49:27'),
(34, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 3, 1, '2015-11-01 14:50:23'),
(35, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 3, 1, '2015-11-01 14:50:28'),
(36, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 3, 1, '2015-11-01 14:59:10'),
(37, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 3, 1, '2015-11-01 14:59:16'),
(38, 25, 5, 'Hướng Dẫn Sử Dụng Access 2003', 56000, 3, 1, '2015-11-01 15:01:44'),
(39, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 3, 1, '2015-11-01 15:03:06'),
(40, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 4, 1, '2015-11-02 01:36:46'),
(41, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 1, 1, '2015-11-02 01:44:49'),
(42, 26, 5, 'Hướng Dẫn Tự Học Microsoft Windows 7 - Các Mẹo & Phím Tắt Trong 10 Phút', 56000, 1, 1, '2015-11-02 01:45:04'),
(43, 22, 5, 'Tin Học Cơ Sở', 119000, 1, 1, '2015-11-02 01:55:07'),
(44, 22, 5, 'Tin Học Cơ Sở', 119000, 3, 1, '2015-11-02 03:49:14'),
(45, 25, 5, 'Hướng Dẫn Sử Dụng Access 2003', 56000, 5, 1, '2015-11-02 03:50:20'),
(46, 24, 5, 'Học Thiết Kế Đồ Họa Trên CorelDRAW X3', 45000, 3, 1, '2015-11-02 06:48:33'),
(47, 21, 5, 'Thực Hành AutoCad 2016 (Cơ Bản & Nâng Cao)', 79000, 3, 1, '2015-11-02 07:16:16'),
(48, 22, 5, 'Tin Học Cơ Sở', 119000, 3, 1, '2015-11-03 07:57:43'),
(49, 24, 3, 'Học Thiết Kế Đồ Họa Trên CorelDRAW X3', 45000, 3, 1, '2015-11-07 08:27:07'),
(50, 21, 5, 'Thực Hành AutoCad 2016 (Cơ Bản & Nâng Cao)', 79000, 2, 1, '2015-11-23 08:07:38'),
(51, 25, 3, 'Hướng Dẫn Sử Dụng Access 2003', 56000, 2, 1, '2015-11-24 07:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_km`
--

DROP TABLE IF EXISTS `tbl_km`;
CREATE TABLE IF NOT EXISTS `tbl_km` (
`id` int(11) NOT NULL,
  `content` text NOT NULL,
  `phantram` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_km`
--

INSERT INTO `tbl_km` (`id`, `content`, `phantram`) VALUES
(9, '', 5),
(10, '', 10),
(11, '', 15),
(12, '', 20),
(13, '', 25),
(14, '', 30),
(15, '', 35),
(16, '', 40),
(17, '', 45),
(18, '', 50),
(19, '', 55),
(20, '', 60),
(21, '', 65),
(22, '', 70),
(23, '', 75),
(24, '', 80);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report`
--

DROP TABLE IF EXISTS `tbl_report`;
CREATE TABLE IF NOT EXISTS `tbl_report` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `messeage` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_report`
--

INSERT INTO `tbl_report` (`id`, `id_user`, `content`, `status`, `messeage`) VALUES
(1, 6, 'abcd', 0, 'Chưa trả lời');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tacgia`
--

DROP TABLE IF EXISTS `tbl_tacgia`;
CREATE TABLE IF NOT EXISTS `tbl_tacgia` (
`id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `profile` text NOT NULL,
  `frequency` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_tacgia`
--

INSERT INTO `tbl_tacgia` (`id`, `name`, `profile`, `frequency`) VALUES
(1, 'to hoai', 'abc', 1),
(2, 't', 'chua co', 1),
(3, 'Trần Đăng Khoa', 'abc', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

DROP TABLE IF EXISTS `tbl_type`;
CREATE TABLE IF NOT EXISTS `tbl_type` (
`id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `frequency` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
`id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `profile` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`, `profile`, `phone`, `user_type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'hoang@gmail.com', 'abcd', '12345678', 1),
(2, 'hadh', 'hadh', 'ha@gmail.com', '1212', '12121', 0),
(3, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'hadh@ows.vn', '132', '121', 2),
(4, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'hadh@ows.vn', '132', '121', 2),
(5, 'ha', '925cc8d2953eba624b2bfedf91a91613', 'hadh@ows.vn', 'hghgh', '1212', 1),
(6, 'test', '202cb962ac59075b964b07152d234b70', 'test', 'abc', '123', 0),
(7, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@gmail.com', 'abcdè', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_comments_userId` (`userId`);

--
-- Indexes for table `nxb`
--
ALTER TABLE `nxb`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_comments_nm`
--
ALTER TABLE `posts_comments_nm`
 ADD PRIMARY KEY (`postId`,`commentId`), ADD KEY `fk_posts_comments_comments` (`commentId`), ADD KEY `fk_posts_comments_posts` (`postId`);

--
-- Indexes for table `posts_reviews_nm`
--
ALTER TABLE `posts_reviews_nm`
 ADD PRIMARY KEY (`postId`,`reviewId`), ADD KEY `fk_posts_comments_comments` (`reviewId`), ADD KEY `fk_posts_comments_posts` (`postId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_comments_userId` (`userId`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_km`
--
ALTER TABLE `tbl_km`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_report`
--
ALTER TABLE `tbl_report`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tacgia`
--
ALTER TABLE `tbl_tacgia`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `nxb`
--
ALTER TABLE `nxb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `tbl_km`
--
ALTER TABLE `tbl_km`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_report`
--
ALTER TABLE `tbl_report`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_tacgia`
--
ALTER TABLE `tbl_tacgia`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
