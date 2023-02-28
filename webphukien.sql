-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2022 at 07:15 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webphukien`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `content` text COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `status` int NOT NULL,
  `id_category` int NOT NULL,
  `posted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `content`, `description`, `image`, `status`, `id_category`, `posted_at`) VALUES
(10, 'Apple Watch giảm giá', '<h2><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Bạn đang t&igrave;m kiếm&nbsp;<a href=\"https://www.thegioididong.com/dong-ho-thong-minh\" target=\"_blank\" title=\"smartwatc\" type=\"smartwatc\">smartwatch</a>&nbsp;cho bản th&acirc;n? Bạn đang ph&acirc;n v&acirc;n chưa chốt được deal n&agrave;o ngon? Xem ngay b&agrave;i viết n&agrave;y đi n&agrave;o! Ch&agrave;o th&aacute;ng mới&nbsp;<a href=\"http://www.thegioididong.com/\" target=\"_blank\" title=\"Thế Giới Di Động\" type=\"Thế Giới Di Động\">Thế Giới Di Động</a>&nbsp;đang sale sốc cho nhiều mẫu smartwatch, v&ograve;ng tay th&ocirc;ng minh với đa dạng mẫu m&atilde; v&agrave; thương hiệu. Kh&ocirc;ng để c&aacute;c bạn chờ l&acirc;u, chi tiết ngay b&ecirc;n dưới.</span></span></h2>\r\n\r\n<p><strong>Thời gian ưu đ&atilde;i:</strong>&nbsp;Đến 31/12/2022 (&Aacute;p dụng tuỳ sản phẩm).</p>\r\n\r\n<p><strong>Lưu &yacute;:</strong></p>\r\n\r\n<ul>\r\n	<li>Khuyến m&atilde;i c&oacute; thể kết th&uacute;c sớm trước thời hạn nếu hết số lượng sản phẩm.</li>\r\n	<li>Một số sản phẩm khuyến m&atilde;i chỉ &aacute;p dụng khi mua online.</li>\r\n	<li>&Ocirc; sản phẩm chưa hiển thị ưu đ&atilde;i ch&iacute;nh x&aacute;c, để hiện ưu đ&atilde;i ch&iacute;nh x&aacute;c, kh&aacute;ch cần bấm&nbsp;<strong>Xem chi tiết</strong>.</li>\r\n</ul>\r\n', '<h3><strong>Apple Watch giảm gi&aacute;</strong></h3>\r\n\r\n<ul>\r\n	<li>Giảm đến 3 triệu + Giảm th&ecirc;m 5% nếu mua k&egrave;m iPhone | iPad | MacBook</li>\r\n	<li>Với c&aacute;c đơn h&agrave;ng từ 7 triệu, thanh to&aacute;n qua VNPAY giảm th&ecirc;m 300.000 đồng</li>\r\n</ul>\r\n', '1669999336_applewatchsale.jpeg', 1, 7, '2022-12-02 17:11:20'),
(11, 'Ra mắt Vivo S16 và S16 Pro', '<p>Như h&igrave;nh ảnh ở tr&ecirc;n, c&aacute;c thiết bị đối thủ của S16 Pro đều được trang bị vi xử l&yacute; Snapdragon 8+ Gen 1 xung nhịp thấp. Hiện tại, con chip n&agrave;y đang c&oacute; tr&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd/oppo-reno9-pro-plus\" target=\"_blank\" title=\"Reno9 Pro+\" type=\"Reno9 Pro+\">Reno9 Pro+</a>. Ngo&agrave;i ra, Vivo S15 Pro cũng được cho l&agrave; sẽ cạnh tranh với c&aacute;c thiết bị hỗ trợ chip Dimensity 8200 kh&aacute;c như&nbsp;<a href=\"https://www.thegioididong.com/dtdd/vivo-iqoo-neo7se\" target=\"_blank\" title=\"iQOO Neo7 SE\" type=\"iQOO Neo7 SE\">iQOO Neo7 SE</a>, Realme GT Neo5 v&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/xiaomi-redmi-k60\" target=\"_blank\" title=\"Redmi K60\" type=\"Redmi K60\">Redmi K60</a>.</p>\r\n\r\n<p>Quay trở lại th&aacute;ng trước, hai điện thoại đến từ nh&agrave; Vivo c&oacute; số model l&agrave; V2244A v&agrave; V2245A đ&atilde; được chứng nhận bởi cơ quan 3C của Trung Quốc. C&oacute; khả năng những thiết bị n&agrave;y sẽ ra mắt với t&ecirc;n gọi Vivo S16 v&agrave; Vivo S16 Pro.</p>\r\n\r\n<p>Theo đ&oacute;, Vivo S16 c&oacute; thể sẽ c&oacute; c&aacute;c m&agrave;u như Đen, Xanh dương v&agrave; T&iacute;m, trong khi S16 Pro sẽ c&oacute; m&agrave;u Đen, Xanh l&aacute; c&acirc;y v&agrave; V&agrave;ng cam. Cũng c&oacute; tin đồn cho rằng h&atilde;ng sẽ ra mắt th&ecirc;m thiết bị Vivo S16e chạy chip Exynos 1080 trong bộ sưu tập S16.</p>\r\n', '<h2><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">V&agrave;o hồi th&aacute;ng 5 năm nay, h&atilde;ng c&ocirc;ng nghệ nổi tiếng ở Trung Quốc đ&atilde; ra mắt&nbsp;<a href=\"https://www.thegioididong.com/dtdd/vivo-s15\" target=\"_blank\" title=\"Vivo S15 series\" type=\"Vivo S15 series\">Vivo S15 series</a>. Kh&ocirc;ng dừng lại ở đ&oacute;, c&aacute;c b&aacute;o c&aacute;o gần đ&acirc;y c&ograve;n tuy&ecirc;n bố rằng c&ocirc;ng ty đang chuẩn bị tung ra d&ograve;ng S16. Theo th&ocirc;ng tin r&ograve; rỉ mới của Tipster Digital Chat Station tiết lộ rằng,&nbsp;<a href=\"https://www.thegioididong.com/dtdd/vivo-s16\" target=\"_blank\" title=\"Vivo S16 series\" type=\"Vivo S16 series\">Vivo S16 series</a>&nbsp;sẽ ra mắt v&agrave;o cuối th&aacute;ng 12/2022.</span></span></h2>\r\n', '1669999506_raMatVivoS16va16pro.jpg', 1, 9, '2022-12-02 17:11:20'),
(12, 'Trầm trồ với hiệu năng Snapdragon 8 Gen 2', '<p>Như bạn c&oacute; thể thấy trong h&igrave;nh tr&ecirc;n, chiếc điện thoại đ&atilde; đạt được 1.282.790 điểm AnTuTu. Trong biểu đồ n&agrave;y, sản phẩm được so s&aacute;nh với một loạt c&aacute;c thiết bị Android phổ biến kh&aacute;c, chủ yếu chạy Snapdragon 8 Gen 1 v&agrave; Snapdragon 8+ Gen 1. Tuy nhi&ecirc;n, bạn cũng sẽ nhận thấy Google Pixel 7 Pro với chip Google Tensor G2 cũng xuất hiện.</p>\r\n\r\n<p>C&oacute; thể thấy rằng thiết bị đứng thứ hai l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/xiaomi-12s-ultra\" target=\"_blank\" title=\"Điện thoại Xiaomi 12S Ultra\" type=\"Điện thoại Xiaomi 12S Ultra\">Xiaomi 12S Ultra</a>&nbsp;với số điểm 1.015.251, thấp hơn đ&aacute;ng kể.&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-fold4\" target=\"_blank\" title=\"Galaxy Z Fold 4\" type=\"Galaxy Z Fold 4\">Galaxy Z Fold4</a>&nbsp;đạt dưới 1.000.000 điểm. Pixel 7 Pro b&aacute;m s&aacute;t kh&aacute; nhiều với 767.316 điểm.</p>\r\n\r\n<p>Cũng cần lưu &yacute; rằng thiết bị chạy MediaTek Dimensity 9200 đ&atilde; ch&iacute;nh thức đạt được 1,26 triệu điểm AnTuTu. V&igrave; vậy, con chip n&agrave;y đ&atilde; đạt gần tới những g&igrave; Snapdragon 8 Gen 2 mang lại, &iacute;t nhất l&agrave; về sức mạnh tuyệt đối.</p>\r\n\r\n<p>Về điểm benchmark tr&ecirc;n nền tảng Geekbench, khi n&oacute;i đến hiệu năng đơn nh&acirc;n, Snapdragon 8 Gen 2 chỉ bị Apple A16 Bionic v&agrave; Apple A15 Bionic vượt qua. Snapdragon 8 Gen 2 đ&atilde; ghi được 1.491 điểm v&agrave; theo sau l&agrave; Galaxy Z Fold4 với 1.315 điểm.&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-14-pro-max\" target=\"_blank\" title=\"iPhone 14 Pro Max\" type=\"iPhone 14 Pro Max\">iPhone 14 Pro Max</a>&nbsp;đạt 1.873 điểm, trong khi&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-14-plus\" target=\"_blank\" title=\"iPhone 14 Plus\" type=\"iPhone 14 Plus\">iPhone 14 Plus</a>&nbsp;đạt 1.753 điểm trong b&agrave;i kiểm tra n&agrave;y.</p>\r\n\r\n<p>Về điểm số đa nh&acirc;n, con chip nh&agrave; Qualcomm dẫn trước Apple A15 Bionic, nhưng vẫn k&eacute;m Apple A16 Bionic của d&ograve;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-14-pro\" target=\"_blank\" title=\"iPhone 14 Pro\" type=\"iPhone 14 Pro\">iPhone 14 Pro</a>. Snapdragon 8 Gen 2 đạt 5.180 điểm, &iacute;t hơn so với 5.329 điểm của iPhone 14 Pro Max. iPhone 14 Plus đạt 4.813 điểm.</p>\r\n\r\n<p>Bạn c&oacute; ấn tượng với những g&igrave; m&agrave; Snapdragon 8 Gen 2 mang lại? Để lại &yacute; kiến b&ecirc;n dưới nh&eacute;!</p>\r\n\r\n<p>Tham khảo th&ecirc;m nhiều mẫu&nbsp;<a href=\"http://thegioididong.com/dtdd\" title=\"điện thoại\" type=\"điện thoại\">điện thoại</a>&nbsp;với cấu h&igrave;nh cao đang được b&aacute;n ch&iacute;nh h&atilde;ng tại&nbsp;<a href=\"https://www.thegioididong.com/\" target=\"_blank\" title=\"Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng\" type=\"Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng\">Thế Giới Di Động</a>&nbsp;với nhiều ưu đ&atilde;i hấp dẫn. Click v&agrave;o n&uacute;t cam để biết th&ecirc;m chi tiết!</p>\r\n', '<h2><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Snapdragon 8 Gen 2 l&agrave; bộ vi xử l&yacute; mới v&agrave; mạnh mẽ nhất d&agrave;nh cho smartphone của Qualcomm t&iacute;nh đến thời điểm hiện tại. Con chip đ&atilde; được thử nghiệm tr&ecirc;n c&aacute;c nền tảng đo điểm chuẩn ch&iacute;nh, như AnTuTu v&agrave; Geekbench, qua đ&oacute; ph&ocirc; diễn sức mạnh to lớn của m&igrave;nh.</span></span></h2>\r\n\r\n<p>Snapdragon 8 Gen 2 sử dụng vi kiến ​​tr&uacute;c 1+4+3 mới, dẫn đầu l&agrave; CPU dựa tr&ecirc;n Kryo Prime Arm Cortex-X3. Đ&acirc;y cũng l&agrave; con chip 4 nm được sản xuất bởi TSMC, ch&iacute;nh c&ocirc;ng ty đ&atilde; cung cấp bộ vi xử l&yacute; Snapdragon 8+ Gen 1 thực sự tuyệt vời.</p>\r\n', '1669999802_snap8gen2.jpg', 1, 9, '2022-12-02 17:11:20'),
(13, 'Rò rỉ thiết kế Samsung Galaxy A54: Được lấy nhiều cảm hứng từ các dòng flagship!', '<p>Galaxy A54 c&oacute; ba phần camera ri&ecirc;ng biệt cho mỗi cảm biến thay v&igrave; một cụm camera lớn tr&ecirc;n th&acirc;n m&aacute;y. H&igrave;nh ảnh render dường như cũng x&aacute;c nhận Samsung c&oacute; thể loại bỏ một camera ở mặt sau của Galaxy A54, cụ thể l&agrave; cảm biến độ s&acirc;u trường ảnh.</p>\r\n\r\n<p>V&igrave; vậy, hệ thống camera của Samsung Galaxy A54 sẽ bao gồm một camera ch&iacute;nh, một camera g&oacute;c si&ecirc;u rộng v&agrave; cảm biến chụp ảnh macro.</p>\r\n\r\n<p>Dựa tr&ecirc;n th&ocirc;ng tin r&ograve; rỉ, ta cũng c&oacute; thể thấy thiết bị c&oacute; mặt sau ho&agrave;n to&agrave;n phẳng v&agrave; khung viền bo tr&ograve;n bao quanh thiết bị, tương tự như&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s22\" target=\"_blank\" title=\"s22\" type=\"s22\">Galaxy S22</a>&nbsp;hoặc&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s22-plus\" target=\"_blank\" title=\"s22+\" type=\"s22+\">Galaxy S22+</a>. M&agrave;n h&igrave;nh cũng được ho&agrave;n thiện phẳng v&agrave; c&oacute; camera selfie đục lỗ Infinity-O.</p>\r\n\r\n<p>Galaxy A54 c&oacute; thể được trang bị vi&ecirc;n pin lớn hơn một ch&uacute;t so với Galaxy A53, nhưng hầu hết c&aacute;c th&ocirc;ng số kỹ thuật kh&aacute;c vẫn chưa được c&ocirc;ng bố ở thời điểm n&agrave;y.</p>\r\n\r\n<p>Trong trường hợp Samsung vẫn duy tr&igrave; lịch tr&igrave;nh ra mắt trong 12 th&aacute;ng, c&oacute; thể ch&uacute;ng ta sẽ thấy Galaxy A54 l&ecirc;n kệ v&agrave;o th&aacute;ng 3/2023.</p>\r\n', '<h2><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">C&aacute;c th&ocirc;ng tin r&ograve; rỉ về mẫu smartphone tầm trung&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-a54\" target=\"_blank\" title=\"Galaxy A54\" type=\"Galaxy A54\">Galaxy A54</a>&nbsp;đang bắt đầu xuất hiện nhiều hơn. V&agrave; gần đ&acirc;y, những h&igrave;nh ảnh render đ&atilde; được c&ocirc;ng bố cho ta c&aacute;i nh&igrave;n r&otilde; n&eacute;t hơn về thiết kế của thiết bị đến từ nh&agrave;&nbsp;<a href=\"https://www.thegioididong.com/samsung\" target=\"_blank\" title=\"Samsung\" type=\"Samsung\">Samsung</a>&nbsp;n&agrave;y.</span></span></h2>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Những h&igrave;nh ảnh từ 91Mobiles cho thấy Samsung sẽ &aacute;p dụng ng&ocirc;n ngữ thiết kế camera của thế hệ flagship&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s23-5g\" target=\"_blank\" title=\"s23\" type=\"s23\">Galaxy S23</a>&nbsp;tr&ecirc;n nhiều d&ograve;ng sản phẩm cho năm 2023, bao gồm cả Galaxy A.</span></span></p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:1067.29px; top:25px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n', '1669999903_samsunga54.jpg', 1, 9, '2022-12-02 17:11:20'),
(14, 'AirPods giảm sốc đến 1.8 triệu, giá quá ngon, có cả mẫu mới nhất', '<p><a href=\"https://www.thegioididong.com/tai-nghe/bluetooth-airpods-pro-magsafe-charge-apple-mlwk3\" target=\"_blank\" title=\"AirPods Pro\" type=\"AirPods Pro\">AirPods Pro</a>&nbsp;c&oacute; k&iacute;ch thước housing nhỏ nhắn đi k&egrave;m 3 k&iacute;ch cỡ n&uacute;t tai mềm mại kh&aacute;c nhau cho bạn dễ d&agrave;ng lựa chọn để đảm bảo đeo tai nghe dạng in-ear thoải m&aacute;i, b&aacute;m chặt v&agrave;o khổ tai v&agrave; hỗ trợ loại bỏ tiếng ồn tối ưu.</p>\r\n\r\n<p>Chip H1 do Apple thiết kế giảm độ trễ &acirc;m thanh xuống thấp, xử l&yacute; &acirc;m thanh kỹ thuật số tinh vi cho c&aacute;c dải &acirc;m tinh khiết, &acirc;m trầm mạnh mẽ. Adaptive EQ tự động điều chỉnh dải tần số thấp v&agrave; trung để b&agrave;i h&aacute;t bạn đang thưởng thức tương th&iacute;ch cho cấu tạo tai của bạn, mang đến trải nghiệm nhất qu&aacute;n, phong ph&uacute; hơn.</p>\r\n\r\n<p>Đầu ti&ecirc;n, nhắc đến điểm cải tiến đ&aacute;ng &quot;ăn tiền&quot; nhất tr&ecirc;n chiếc tai nghe n&agrave;y ch&iacute;nh l&agrave; AirPods 2 được t&iacute;ch hợp chip xử l&yacute; H1 thế hệ mới cho thời gian chuyển đổi kết nối giữa c&aacute;c thiết bị nhanh hơn gấp 2 lần so với phi&ecirc;n bản cũ.</p>\r\n\r\n<p>Về chất &acirc;m, hơi thi&ecirc;n bass ở mức độ nhẹ nhưng vẫn đầy đủ c&aacute;c chất &acirc;m cho những bạn d&ugrave;ng th&ocirc;ng thường, kh&ocirc;ng y&ecirc;u cầu qu&aacute; cao về chất &acirc;m nghe nhạc. Đối với c&aacute;c dải &acirc;m như mid v&agrave; treble th&igrave; kh&aacute; tr&ograve;n vai. Với dải mid th&igrave; kh&aacute; ổn, r&otilde; r&agrave;ng v&agrave; t&aacute;ch bạch, c&ugrave;ng dải treble hơi thi&ecirc;n &acirc;m cao.&nbsp;</p>\r\n', '<h2><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Cuối tuần săn liền chiếc deal độc nhất của&nbsp;<a href=\"https://www.thegioididong.com/\" target=\"_blank\" title=\"Thế Giới Di Động\" type=\"Thế Giới Di Động\">Thế Giới Di Động</a>&nbsp;n&egrave; iFans ơi! Loạt&nbsp;<a href=\"https://www.thegioididong.com/tai-nghe-apple\" target=\"_blank\" title=\"AirPods\" type=\"AirPods\">AirPods</a>&nbsp;giảm cực sốc đến 1.8 triệu đồng, gi&aacute; đang rất ưu đ&atilde;i chờ bạn chốt đơn. Chi tiết khuyến m&atilde;i ngay b&ecirc;n dưới, c&ugrave;ng m&igrave;nh xem ngay!</span></span></h2>\r\n\r\n<p>Thời gian khuyến m&atilde;i:&nbsp;Dự kiến đến ng&agrave;y 4/12/2022.</p>\r\n\r\n<p><strong>Lưu &yacute;:</strong></p>\r\n\r\n<ul>\r\n	<li>Một số sản phẩm c&oacute;&nbsp;khuyến m&atilde;i chỉ &aacute;p dụng khi đặt mua online.</li>\r\n	<li>Khuyến m&atilde;i c&oacute; thể kết th&uacute;c sớm trước thời hạn nếu hết số lượng sản phẩm hoặc th&ocirc;ng tin khuyến m&atilde;i c&oacute; thay đổi.</li>\r\n	<li>Gi&aacute; v&agrave; khuyến m&atilde;i hiện tại &aacute;p dụng cho khu vực Hồ Ch&iacute; Minh, c&oacute; thể kh&aacute;c so với c&aacute;c tỉnh th&agrave;nh kh&aacute;c. Kh&aacute;ch h&agrave;ng cần chọn khu vực m&igrave;nh sinh sống để xem gi&aacute; v&agrave; khuyến m&atilde;i ch&iacute;nh x&aacute;c nhất.</li>\r\n	<li>&Ocirc; sản phẩm chưa hiển thị ưu đ&atilde;i ch&iacute;nh x&aacute;c,&nbsp;để hiện ưu đ&atilde;i ch&iacute;nh x&aacute;c, kh&aacute;ch cần&nbsp;bấm&nbsp;<strong>Xem chi tiết</strong>.</li>\r\n</ul>\r\n\r\n<div class=\"ddict_btn\" style=\"left:1062.4px; top:38px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n', '1670079846_airpodSale.jpg', 1, 7, '2022-12-03 15:04:06'),
(15, 'Bạn đã biết đến công nghệ sạc không dây và những mẫu điện thoại có công nghệ này?', '<p><span style=\"font-size:16px\"><span style=\"color:#333333\"><span style=\"font-family:Helvetica,Arial,&quot;DejaVu Sans&quot;,&quot;Liberation Sans&quot;,Freesans,sans-serif\">C&ocirc;ng nghệ sạc kh&ocirc;ng d&acirc;y l&agrave; một t&iacute;nh năng sạc pin cho thiết bị đang dần phổ biến trong thời gian gần đ&acirc;y. Khi sạc pin cho&nbsp;</span></span></span><span style=\"font-size:16px\"><span style=\"color:#333333\"><span style=\"font-family:Helvetica,Arial,&quot;DejaVu Sans&quot;,&quot;Liberation Sans&quot;,Freesans,sans-serif\">điện thoại,&nbsp;</span></span></span><a href=\"https://www.thegioididong.com/tai-nghe-khong-day\" style=\"padding:0px; text-decoration:none; transition:all 0.2s ease 0s; color:#288ad6; font-size:16px; font-family:Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-style:normal; font-variant-ligatures:normal; font-weight:400; text-align:start; white-space:normal\" target=\"_blank\" title=\"tai nghe không dây\" type=\"tai nghe không dây\">tai nghe kh&ocirc;ng d&acirc;y</a><span style=\"font-size:16px\"><span style=\"color:#333333\"><span style=\"font-family:Helvetica,Arial,&quot;DejaVu Sans&quot;,&quot;Liberation Sans&quot;,Freesans,sans-serif\">,... hoặc những thiết bị hỗ trợ c&ocirc;ng nghệ n&agrave;y th&igrave; bạn kh&ocirc;ng cần cắm chu&ocirc;i sạc trực tiếp v&agrave;o thiết bị, việc bạn cần l&agrave;m l&agrave; đặt thiết bị của bạn tr&ecirc;n một đế sạc kh&ocirc;ng d&acirc;y đ&atilde; được cắm điện.</span></span></span></p>\r\n\r\n<p>Vậy sạc kh&ocirc;ng d&acirc;y c&oacute; an to&agrave;n kh&ocirc;ng? Theo như m&igrave;nh t&igrave;m hiểu, c&ocirc;ng nghệ n&agrave;y dựa tr&ecirc;n nguy&ecirc;n l&yacute; từ trường điện tử, t&aacute;c động l&ecirc;n thiết bị sở hữu c&ugrave;ng nguồn dẫn khiến những sản phẩm như điện thoại, tai nghe kh&ocirc;ng d&acirc;y,... c&oacute; thể được sạc một c&aacute;ch an to&agrave;n.</p>\r\n\r\n<p>Đặc biệt hơn, c&ocirc;ng nghệ sạc kh&ocirc;ng d&acirc;y thường được t&iacute;ch hợp tr&ecirc;n những mẫu flagship cao cấp của c&aacute;c h&atilde;ng. Đ&acirc;y được xem l&agrave; những mẫu điện thoại được c&aacute;c h&atilde;ng trau chuốt từng ch&uacute;t một, sở hữu nhiều t&iacute;nh năng cao cấp, ph&ugrave; hợp với mọi nhu cầu của người d&ugrave;ng chọn mua.</p>\r\n', '<p>H&atilde;y c&ugrave;ng&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc\" target=\"_blank\" title=\"24h công nghệ\" type=\"24h công nghệ\">24h C&ocirc;ng nghệ</a>&nbsp;t&igrave;m hiểu về c&ocirc;ng nghệ sạc đầy hữu &iacute;ch n&agrave;y trong b&agrave;i viết ng&agrave;y h&ocirc;m nay v&agrave; những mẫu điện thoại hỗ trợ sạc kh&ocirc;ng d&acirc;y đang được l&ecirc;n kệ tại&nbsp;<a href=\"https://www.thegioididong.com/\" target=\"_blank\" title=\"Thế Giới Di Động\" type=\"Thế Giới Di Động\">Thế Giới Di Động</a>&nbsp;trong b&agrave;i viết lần n&agrave;y nh&eacute;!</p>\r\n', '1670080430_sacKhongDay.jpg', 1, 6, '2022-12-03 15:13:50'),
(16, '4 lý do nên mua Apple Watch ở thời điểm hiện tại, màn hình nét, hiệu năng mạnh,...', '<h3><strong>1. C&oacute; n&ecirc;n mua Apple Watch l&agrave; thiết bị đeo tay được đầu tư chỉn chu?</strong></h3>\r\n\r\n<p>Những chiếc Apple Watch kh&ocirc;ng chỉ l&agrave; một chiếc đồng hồ th&ocirc;ng minh b&igrave;nh thường, m&agrave; n&oacute; thường được nh&igrave;n nhận với h&igrave;nh ảnh của một phụ kiện thời trang. Lu&ocirc;n được Apple đầu tư thời gian, c&ocirc;ng sức để cải tiến sự gọn nhẹ, ph&ugrave; hợp với y&ecirc;u cầu ng&agrave;y c&agrave;ng cao của người d&ugrave;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/dong-ho-thong-minh-apple-watch-series-7\" target=\"_blank\" title=\"Apple Watch Series 7\" type=\"Apple Watch Series 7\">Apple Watch Series 7</a>&nbsp;được đ&aacute;nh gi&aacute; l&agrave; chiếc Apple Watch tốt nhất ở thời điểm hiện tại, thiết bị vẫn giữ được được những đặc điểm vốn c&oacute; của thế hệ trước. Nhưng được n&acirc;ng cấp v&agrave; cải tiến rất nhiều điểm khiến người d&ugrave;ng m&ecirc; mẩn.</p>\r\n\r\n<h3><strong>2. C&oacute; n&ecirc;n mua Apple Watch để thiết lập một lối sống l&agrave;nh mạnh?</strong></h3>\r\n\r\n<p>L&agrave; một chiếc đồng hồ th&ocirc;ng minh, dĩ nhi&ecirc;n Apple Watch vẫn l&agrave; sự lựa chọn gi&uacute;p bạn c&oacute; một cuộc sống l&agrave;nh mạnh. Thiết bị sẽ lu&ocirc;n theo d&otilde;i bạn 24/24 từ giấc ngủ cho đến những hoạt động hằng ng&agrave;y của bạn, đưa ra những chỉ số nhằm gi&uacute;p bạn cải thiện lối sống v&agrave; sức khỏe. Đ&acirc;y cũng ch&iacute;nh l&agrave; l&yacute; do mua Apple Watch thuyết phục nhất đối với m&igrave;nh.</p>\r\n', '<h2><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Hệ sinh th&aacute;i của&nbsp;<a href=\"https://www.thegioididong.com/apple\" target=\"_blank\" title=\"Apple\" type=\"Apple\">Apple</a>&nbsp;lu&ocirc;n được người d&ugrave;ng ủng hộ v&agrave; th&iacute;ch th&uacute;, từ chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\" title=\"iPhone\" type=\"iPhone\">iPhone</a>&nbsp;đa dụng đến những mẫu&nbsp;<a href=\"https://www.thegioididong.com/laptop-apple-macbook\" target=\"_blank\" title=\"MacBook\" type=\"MacBook\">MacBook</a>&nbsp;mạnh mẽ. C&oacute; lẽ bạn kh&ocirc;ng c&ograve;n qu&aacute; xa lạ với những chiếc&nbsp;<a href=\"https://www.thegioididong.com/dong-ho-thong-minh-apple\" target=\"_blank\" title=\"Apple Watch\" type=\"Apple Watch\">Apple Watch</a>&nbsp;đầy tinh tế, sang trọng khiến những người d&ugrave;ng y&ecirc;u th&iacute;ch ngay từ c&aacute;i nh&igrave;n đầu ti&ecirc;n. Vậy bạn&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/co-nen-mua-apple-watch-day-la-4-ly-do-1384939\" target=\"_blank\" title=\"có nên mua Apple Watch\" type=\"có nên mua Apple Watch\">c&oacute; n&ecirc;n mua Apple Watch</a>&nbsp;trong thời điểm hiện tại? H&atilde;y c&ugrave;ng&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc\" target=\"_blank\" title=\"24h Công nghệ\" type=\"24h Công nghệ\">24h C&ocirc;ng nghệ</a>&nbsp;t&igrave;m hiểu nh&eacute;!</span></span></h2>\r\n\r\n<div class=\"ddict_btn\" style=\"left:1076.95px; top:30px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n', '1670081101_lydomuaapplewatch.jpg', 1, 9, '2022-12-03 15:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb3_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `name`) VALUES
(6, 'Tin mới nhất'),
(7, 'Tin tức khuyến mãi'),
(9, 'Tin tức công nghệ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `name_receiver` varchar(100) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `phone_receiver` char(15) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `address_receiver` varchar(200) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `status` int NOT NULL,
  `total_price` char(20) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name_receiver`, `phone_receiver`, `address_receiver`, `status`, `total_price`, `created_at`) VALUES
(4, 2, 'Phúc venus', '03232323232', 'Đồng tháp', 1, '800000', '2022-11-29 18:41:35'),
(5, 2, 'Phúc Jusdas', '0939492097', 'Kiên Giang', 1, '5980000', '2022-11-29 19:37:21'),
(6, 2, 'Phúc', '03232323232', 'Hậu giang', 0, '5980000', '2022-12-04 13:45:13'),
(7, 2, 'Phúc Đặng', '09397995138', 'Đồng Tháp', 0, '9975000', '2022-12-04 13:53:38'),
(8, 2, 'Phúc Jusdas', '0232323232323', 'TP Cần Thơ', 0, '4190000', '2022-12-04 14:02:35'),
(9, 2, 'Tấn Lộc', '03298765', 'Vĩnh Long', 0, '100000', '2022-12-04 14:10:31'),
(10, 2, 'Phúc', '03232323232', 'Hậu giang', 0, '150000', '2022-12-04 14:11:17'),
(11, 2, 'Ngân', '0378994325', 'Trà vinh', 0, '590000', '2022-12-04 14:13:23'),
(12, 2, 'Đặng Phúc', '0949492592', 'Đồng Tháp', 0, '4190000', '2022-12-05 17:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`order_id`, `product_id`, `quantity`) VALUES
(4, 15, 2),
(4, 12, 2),
(5, 8, 1),
(5, 10, 1),
(6, 8, 1),
(6, 10, 1),
(7, 15, 2),
(7, 8, 2),
(7, 13, 1),
(8, 8, 1),
(9, 16, 1),
(10, 12, 1),
(11, 18, 1),
(12, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `price` varchar(50) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(200) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `content` text COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `id_category` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `quantity`, `image`, `description`, `content`, `id_category`, `status`) VALUES
(8, 'Tai nghe Bluetooth AirPods 3', '4190000', 5, '1669565831tainghekoday_apple.jpeg', '<h3><a href=\"https://www.thegioididong.com/tai-nghe/tai-nghe-bluetooth-airpods-3-lightning-charge-apple-mpny3-trang\" target=\"_blank\" title=\"Tai nghe Bluetooth AirPods 3 Lightning Charge Apple MPNY3 Trắng\">Tai nghe Bluetooth AirPods 3 Lightning Charge Apple MPNY3 Trắng</a>&nbsp;sở hữu thiết kế gọn nhẹ, m&agrave;u sắc trang nh&atilde; c&ugrave;ng nhiều c&ocirc;ng nghệ hiện đại đang chờ đ&oacute;n c&aacute;c iFan như: kết nối Bluetooth, Adaptive EQ, Chip Apple H1,...</h3>\r\n', '<p>&bull; Thiết kế&nbsp;<a href=\"https://www.thegioididong.com/tai-nghe\" target=\"_blank\" title=\"Tham khảo các dòng tai nghe đang bán trên thegioididong.com\">tai nghe</a>&nbsp;nhỏ gọn với m&agrave;u trắng sang trọng vốn quen thuộc tr&ecirc;n c&aacute;c d&ograve;ng&nbsp;<a href=\"https://www.thegioididong.com/tai-nghe-apple\" target=\"_blank\" title=\"Tham khảo các sản phẩm tai nghe Apple đang bán trên thegioididong.com\">tai nghe Apple</a>. Dạng&nbsp;<a href=\"https://www.thegioididong.com/tai-nghe-earbuds\" target=\"_blank\" title=\"Tham khảo các dòng tai nghe Earbuds đang bán trên thegioididong.com\">tai nghe Earbuds</a>&nbsp;cho cảm gi&aacute;c thoải m&aacute;i khi đeo.</p>\r\n\r\n<p>&bull; T&iacute;ch hợp c&aacute;c c&ocirc;ng nghệ &acirc;m thanh ti&ecirc;n tiến độc quyền nh&agrave; Apple như: Adaptive EQ, Chip Apple H1,&nbsp;Spatial Audio&nbsp;gi&uacute;p tai nghe tự động hiệu chỉnh v&agrave; tối ưu &acirc;m thanh ph&aacute;t ra đem đến trải nghiệm tuyệt vời cho người d&ugrave;ng.</p>\r\n\r\n<p>&bull;&nbsp;<a href=\"https://www.thegioididong.com/tai-nghe-bluetooth\" target=\"_blank\" title=\"Tham khảo Tai nghe Bluetooth đang bán trên thegioididong.com\">Tai nghe Bluetooth</a>&nbsp;cho đường truyền kết nối ổn định, nhanh ch&oacute;ng trong phạm vi kh&aacute; rộng.</p>\r\n\r\n<p>&bull; Hỗ trợ mic đ&agrave;m thoại tiện dụng, thu &acirc;m thanh r&otilde; r&agrave;ng, chi tiết.</p>\r\n\r\n<p>&bull; Trang bị chuẩn&nbsp;<a href=\"https://www.thegioididong.com/tai-nghe-chong-nuoc\" target=\"_blank\" title=\"Tham khảo các dòng tai nghe chống nước đang bán trên thegioididong.com\">chống nước IPX4</a>&nbsp;cho ph&eacute;p bạn thoải m&aacute;i sử dụng trong c&aacute;c hoạt động thể thao thường ng&agrave;y m&agrave; kh&ocirc;ng cần lo ngại vấn đề b&aacute;m d&iacute;nh mồ h&ocirc;i.</p>\r\n\r\n<p>&bull; Dễ d&agrave;ng kết nối với nhiều thiết bị nhờ khả năng tương th&iacute;ch với hệ điều h&agrave;nh Android, iOS, macOS, iPadOS.</p>\r\n\r\n<p>&bull; C&oacute; thể sử dụng li&ecirc;n tục trong khoảng 6 giờ v&agrave; k&eacute;o d&agrave;i l&ecirc;n đến 30 giờ nếu d&ugrave;ng chung với hộp sạc.</p>\r\n', 13, 1),
(10, 'Tai nghe Bluetooth OPPO Air 2 Pro', '1790000', 5, '1669566150tainghekoday_oppo.jpg', '<p><a href=\"https://www.thegioididong.com/tai-nghe/bluetooth-true-wireless-oppo-enco-air-2-pro-ete21\" target=\"_blank\" title=\"Tai nghe Bluetooth TWS OPPO ENCO Air 2 Pro ETE21\">Tai nghe Bluetooth TWS OPPO ENCO Air 2 Pro ETE21</a>&nbsp;l&agrave; chiếc tai nghe mới được ra mắt của nh&agrave; OPPO v&agrave;o th&aacute;ng 8/2022, chỉ v&agrave;i th&aacute;ng sau khi phi&ecirc;n bản tiền nhiệm của n&oacute; l&agrave; OPPO ENCO Air 2 ra đời. Đến với phi&ecirc;n bản Pro n&agrave;y, nh&agrave; OPPO đ&atilde; c&oacute; v&agrave;i n&acirc;ng cấp m&agrave; m&igrave;nh rất th&iacute;ch</p>\r\n', '<p>Thay v&igrave; thiết kế dạng nắp hộp trong suốt như trước kia, chiếc tai nghe Bluetooth TWS OPPO ENCO Air 2 Pro ETE21 n&agrave;y mang đến thiết kế hộp đựng được bao k&iacute;n ho&agrave;n to&agrave;n tạo cảm gi&aacute;c chắc chắn cho hộp đựng. C&aacute;c chi tiết thiết kế như bản lề, đường bo g&oacute;c m&igrave;nh nhận thấy chiếc ENCO Air 2 Pro n&agrave;y vẫn được chăm ch&uacute;t tỉ mỉ. B&ecirc;n ngo&agrave;i hộp sạc sẽ gồm c&oacute;:</p>\r\n\r\n<p>- Đ&egrave;n b&aacute;o pin ngay ph&iacute;a dưới nắp hộp c&oacute; thể hiển thị 3 m&agrave;u sắc trạng th&aacute;i pin:&nbsp;Đỏ (Pin yếu, sắp hết pin) - V&agrave;ng (Mức pin vừa) - Xanh l&aacute; (Pin ở trạng th&aacute;i đầy). Cụ thể, khi mở nắp hộp ra (đảm bảo tai nghe nằm trong hộp sạc), m&agrave;u đ&egrave;n b&aacute;o sẽ thể hiện lượng pin c&ograve;n lại của tai nghe. Khi đ&oacute;ng hộp sạc lại m&agrave;u đ&egrave;n b&aacute;o sẽ thể hiện lượng pin c&ograve;n lại của hộp sạc.</p>\r\n\r\n<p>- Khe cắm sạc cho hộp đựng.</p>\r\n', 13, 1),
(11, 'Tai nghe Bluetooth  Mozard Air 3 Đen ', '530000', 1, '1669566233tainghekoday_mozard.jpg', '<h3>Thiết kế gọn g&agrave;ng thuận tiện mang theo b&ecirc;n m&igrave;nh</h3>\r\n', '<p>Bề mặt của hộp đựng&nbsp;<a href=\"https://www.thegioididong.com/tai-nghe/tai-nghe-bluetooth-true-wireless-mozard-air-3-den\" target=\"_blank\" title=\"Tai nghe Bluetooth True Wireless Mozard Air 3 Đen\">tai nghe Bluetooth True Wireless Mozard Air 3 đen&nbsp;</a>được l&agrave;m hơi nh&aacute;m gi&uacute;p dễ d&agrave;ng cầm nắm khi tay d&iacute;nh nước hay đổ mồ h&ocirc;i. Hộp đựng c&oacute; k&iacute;ch thước vừa phải c&oacute; thể dễ d&agrave;ng mang theo khi tập thể dục, đi c&agrave; ph&ecirc;, du lịch,...</p>\r\n\r\n<p>N&uacute;t đệm của tai nghe Mozard n&agrave;y được l&agrave;m bởi chất liệu cao cấp cực &ecirc;m, kh&ocirc;ng g&acirc;y đau hay kh&oacute; chịu khi bạn sử dụng trong thời gian d&agrave;i.</p>\r\n', 13, 1),
(12, 'Tai nghe EP Awei Q29Hi Đen', '150000', 3, '1669566364tainghecoday_awai.jpg', '<p>&nbsp;Tai nghe EP Awei Q29Hi Đen thiết kế thời trang, nhỏ gọn, dễ d&agrave;ng mang theo</p>\r\n', '<ul>\r\n	<li>Thiết kế thời trang, nhỏ gọn, dễ d&agrave;ng mang theo.</li>\r\n	<li>C&oacute; jack cắm 3.5mm, tương th&iacute;ch với nhiều thiết bị.</li>\r\n	<li>C&oacute; đệm tai cao su cho cảm gi&aacute;c dễ chịu, hạn chế tiếng ồn v&agrave; c&oacute; &acirc;m thanh ra tốt.</li>\r\n	<li>N&uacute;t điều khiển tr&ecirc;n tai nghe tiện lợi</li>\r\n</ul>\r\n', 12, 1),
(13, 'Tai nghe EP Gaming Asus Rog Cetra II ', '1095000', 4, '1669566532tainnghecodayasus.jpg', '<h3>Thiết kế c&ocirc;ng th&aacute;i học, vỏ nh&ocirc;m b&oacute;ng đẹp</h3>\r\n', '<ul>\r\n	<li>Vỏ nh&ocirc;m nhẹ cho tai nghe nổi bật, kiểu d&aacute;ng c&ocirc;ng th&aacute;i học đeo dễ chịu.</li>\r\n	<li>Driver ASUS Essence&nbsp;mang đến chất &acirc;m sống động, tối ưu khi chơi game.</li>\r\n	<li>Độ d&agrave;i d&acirc;y 1.3 m, đầu cắm 3.5 mm&nbsp;tương th&iacute;ch&nbsp;Nintendo Switch,&nbsp;Xbox Series X/S, điện thoại, Mac, PC,...</li>\r\n	<li>3 ph&iacute;m bấm dễ chỉnh ph&aacute;t/dừng chơi nhạc, tăng/giảm &acirc;m lượng.</li>\r\n</ul>\r\n', 12, 1),
(14, 'Tai nghe  EP Gaming Rapoo VM150', '450000', 8, '1669566607tainghecoday_repo.jpg', '<h3>EP Gaming Rapoo VM150 thiết kế dạng&nbsp;<a href=\"https://www.thegioididong.com/tai-nghe-nhet-trong\" target=\"_blank\" title=\"Tham khảo tai nghe nhét tai kinh doanh tại Thế Giới Di Động\">tai nghe nh&eacute;t tai</a>&nbsp;gọn nhẹ, c&aacute; t&iacute;nh, hiện đại</h3>\r\n', '<ul>\r\n	<li>Tai nghe thiết kế gọn nhẹ với kiểu d&aacute;ng trẻ trung, phong c&aacute;ch.</li>\r\n	<li>Tai nghe dạng n&uacute;t gi&uacute;p&nbsp;c&aacute;ch &acirc;m tốt<strong>&nbsp;</strong>với b&ecirc;n ngo&agrave;i.</li>\r\n	<li>Chất &acirc;m to r&otilde;, độ trễ thấp khi chơi game.</li>\r\n	<li>Giọng thoại trong trẻo nhờ t&iacute;ch hợp 2 mic thoại, với&nbsp;1 mic in-line control v&agrave; 1 mic rời&nbsp;tiện lợi.</li>\r\n	<li>Đệm tai tr&ograve;n, chất liệu silicone mềm mại, dễ đeo v&agrave;o tai.</li>\r\n	<li>D&acirc;y d&agrave;i&nbsp;129 cm&nbsp;thoải m&aacute;i để vừa d&ugrave;ng m&aacute;y vừa nghe nhạc</li>\r\n</ul>\r\n', 12, 1),
(15, 'Ốp lưng MagSafe iPhone 14 Pro Max', '250000', 5, '1669566855opi14promax.jpg', '<p>Thiết kế ốp &ocirc;m trọn th&acirc;n m&aacute;y, cầm chắc tay.</p>\r\n', '<ul dir=\"ltr\">\r\n	<li>K&iacute;ch thước tương th&iacute;ch với&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-14-pro-max\" target=\"_blank\" title=\"Tham khảo iPhone 14 Pro Max đang bán tại Thế Giới Di Động\">iPhone 14 Pro Max</a>.</li>\r\n	<li>Chất liệu nhựa cứng viền dẻo, hạn chế trầy xước, b&aacute;m bụi, chống sốc cao.</li>\r\n	<li><a href=\"https://www.thegioididong.com/op-lung-flipcover\" target=\"_blank\" title=\"Tham khảo các sản phẩm ốp lưng đang bán tại Thế Giới Di Động\">Ốp lưng</a>&nbsp;hỗ trợ sạc kh&ocirc;ng d&acirc;y MagSafe tiện lợi, kh&ocirc;ng cần th&aacute;o ốp khi sạc.</li>\r\n	<li>Viền hồng nổi bật với phong c&aacute;ch ngọt ng&agrave;o v&agrave; nữ t&iacute;nh.</li>\r\n</ul>\r\n', 3, 1),
(16, 'Miếng dán kính 6.5 inch GSP-110', '100000', 3, '1669567024miengdan6.5in.jpg', '<p>Dễ d&aacute;n, dễ gỡ, linh hoạt thay thế miếng d&aacute;n khi cần.</p>\r\n', '<ul>\r\n	<li>Miếng d&aacute;n mỏng nhẹ, b&aacute;m chắc v&agrave;o m&agrave;n h&igrave;nh, hạn chế tối đa t&igrave;nh trạng bong, rớt.</li>\r\n	<li>Bảo vệ m&agrave;n h&igrave;nh điện thoại khỏi những vết xước v&agrave; b&aacute;m d&iacute;nh dấu v&acirc;n tay khi d&ugrave;ng.</li>\r\n	<li>Miếng d&aacute;n trong suốt, kh&ocirc;ng l&agrave;m ảnh hưởng đến khả năng hiển thị của m&agrave;n h&igrave;nh.</li>\r\n</ul>\r\n', 16, 1),
(17, 'Miếng dán màn hình iPhone 14 Pro Max', '70000', 5, '1669567158miendangi14promax.jpg', '<p>Độ phản hồi nhanh nhạy tương ứng với từng thao t&aacute;c chạm.</p>\r\n', '<ul dir=\"ltr\">\r\n	<li>Sản phẩm chuy&ecirc;n dụng cho d&ograve;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-14-pro-max\" target=\"_blank\" title=\"Tham khảo iPhone 14 Pro Max đang bán tại thegioididong.com\">iPhone 14 Pro Max</a>.</li>\r\n	<li>Giảm tối đa trầy xước khi bị rơi rớt, va chạm.</li>\r\n	<li>Miếng d&aacute;n si&ecirc;u mỏng, độ trong suốt cao, kh&ocirc;ng l&agrave;m ảnh hưởng đến h&igrave;nh ảnh hiển thị tr&ecirc;n m&agrave;n h&igrave;nh.</li>\r\n</ul>\r\n', 16, 1),
(18, 'Cáp Type C Lightning 1m Apple', '590000', 5, '1669997904CapSacApple.jpeg', '<h3><a href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-lightning-1m-apple-mm0a3-trang\" target=\"_blank\" title=\"Cáp Type C - Lightning 1m Apple MM0A3 Trắng\">C&aacute;p Type C - Lightning 1m Apple MM0A3 Trắng</a>&nbsp;sở hữu thiết kế đơn giản, độ d&agrave;i 1 m c&ugrave;ng khả năng sạc nhanh l&ecirc;n đến 87 W ch&iacute;nh l&agrave; sự lựa chọn tuyệt vời cho c&aacute;c iFans ch&acirc;n ch&iacute;nh.</h3>\r\n\r\n<h3>Thiết kế tinh giản, chiều d&agrave;i l&yacute; tưởng 1 m</h3>\r\n', '<h3>&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>C&aacute;p sạc&nbsp;<strong>m&agrave;u trắng sang trọng</strong>, c&oacute; chiều d&agrave;i&nbsp;<strong>1 m</strong>, ph&ugrave; hợp d&ugrave;ng tại nh&agrave;, c&ocirc;ng ty.</li>\r\n	<li>Sạc pin mạnh mẽ với mức c&ocirc;ng suất l&ecirc;n đến&nbsp;<strong>87 W</strong>.&nbsp;</li>\r\n	<li>Đồng bộ h&oacute;a dữ liệu hiệu quả giữa điện thoại v&agrave; laptop.&nbsp;</li>\r\n	<li><strong>Đầu v&agrave;o Type-C&nbsp;</strong>v&agrave;<strong>&nbsp;đầu ra&nbsp;Lightning&nbsp;</strong>sử dụng với c&aacute;c thiết bị Apple, adapter sạc, sạc dự ph&ograve;ng.</li>\r\n	<li>Mẫu d&acirc;y c&aacute;p Apple MM0A3 giống Apple MX0K2, chỉ kh&aacute;c m&atilde; l&ocirc;.</li>\r\n	<li>H&agrave;ng ch&iacute;nh h&atilde;ng Apple, nguy&ecirc;n seal 100%.</li>\r\n	<li>Lưu &yacute;: Thanh to&aacute;n trước khi mở seal.</li>\r\n</ul>\r\n\r\n<div class=\"ddict_btn\" style=\"left:1070.16px; top:31px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n', 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb3_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`) VALUES
(3, 'Ốp Lưng'),
(12, 'Tai nghe có dây'),
(13, 'Tai nghe không dây'),
(16, 'Kính cường lực'),
(19, 'Cáp sạc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `phone_number` char(15) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb3_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone_number`, `address`) VALUES
(1, 'phúc', 'dangvanphuc7122001@gmail.com', '202cb962ac59075b964b07152d234b70', '03232323232', 'Đồng tháp'),
(2, 'Phúc', 'phuc@gmail.com', '202cb962ac59075b964b07152d234b70', '03232323232', 'Hậu giang'),
(3, 'Apple', 'phuc@ok.com', '202cb962ac59075b964b07152d234b70', '03232323232', 'Korea'),
(4, 'Đặng Phúc', 'phuc@bakad.com', '202cb962ac59075b964b07152d234b70', '03232323232', 'Kiên giang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `news_category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `product_category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
