-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 19, 2022 lúc 09:37 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `topcv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `infocv`
--

CREATE TABLE `infocv` (
  `IdInfoCV` int(11) NOT NULL,
  `IdAccount` int(11) NOT NULL,
  `FirstName` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DoB` date NOT NULL,
  `Sex` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hometown` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PermanentAddress` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Avatar` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CityforCV` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WorkExperience` float NOT NULL,
  `PhoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `infocv`
--

INSERT INTO `infocv` (`IdInfoCV`, `IdAccount`, `FirstName`, `LastName`, `DoB`, `Sex`, `Email`, `Hometown`, `PermanentAddress`, `Avatar`, `CityforCV`, `WorkExperience`, `PhoneNumber`) VALUES
(1, 1, 'Nguyễn Huy ', 'Phúc dzz', '2001-06-22', 'q', 'smspro@gmail.com', 'Hà Nội', 'Tây Mỗ', 'public/userimg/brand_2.jpg', 'Hà Nội', 1, 326691468),
(2, 2, 'Trần Việt', 'Hoàn', '2022-05-04', 'Khong', 'khach2@gmail.com', 'Ninh Bình', 'Ha Noi', 'public/userimg/hutao.png', 'Ha Noi', 10, 833529833),
(12, 35, 'xxxxx', 'xxxxx', '2022-06-04', 'Nữ', 'xxxxx@zxxxxx.xxxxx', 'xxxxx', 'xxxxx', 'public/userimg/cbp6.jpg', 'xxxxx', 2, 0),
(13, 36, 'vvv', 'vvv', '2022-06-04', 'Nữ', 'vvv@vvvvv.vvv', 'vvv', 'vvv', 'public/userimg/cbp1.jpg', 'vvv', 2, 0),
(14, 37, 'phuc', 'phuc', '2022-06-19', 'Nữ', 'phuc@phuc.phuc', 'phuc', 'phuc', 'public/userimg/brand_2.jpg', 'phuc', 4, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `inforecruit`
--

CREATE TABLE `inforecruit` (
  `IdInfoRecruit` int(11) NOT NULL,
  `IdRecruit` int(11) NOT NULL,
  `FirstName` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Avatar` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NameOfCompany` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WorkPlace` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WorkLocation` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Sex` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `inforecruit`
--

INSERT INTO `inforecruit` (`IdInfoRecruit`, `IdRecruit`, `FirstName`, `LastName`, `Email`, `Avatar`, `NameOfCompany`, `WorkPlace`, `WorkLocation`, `PhoneNumber`, `Sex`) VALUES
(1, 1, 'Công ty Cổ Phần Đầu tư Giáo dục Và Phát triển Nguồn Lực Quốc Tế', 'Pasal', 'Pasal@gmail.com', 'public/recruitimg/cong-ty-co-phan-dau-tu-giao-duc-va-phat-trien-nguon-luc-quoc-te-pasal-5ad4093c6754b_rs.jpg', 'Công ty Cổ Phần Đầu tư Giáo dục Và Phát triển Nguồn Lực Quốc Tế Pasal', 'Head Office Số 2, Ngõ 54 Phỗ Vũ Trọng Phụng, Thanh Xuân, Hà Nội.', 'Hà Nội.', 1234556768, 'Nam'),
(2, 2, 'CÔNG TY CỔ PHẦN', 'STRINGEE', 'STRINGEE@gmail.com', 'public/recruitimg/b6a9197abf1fb50d875a1aa78ce6baea-61480a5153262.jpg', 'CÔNG TY CỔ PHẦN STRINGEE', 'Tầng 16 Tòa nhà văn phòng 2 – Dự án Sun Square, Số 21 Đường Lê Đức Thọ, Phường Mỹ Đình 2, Quận Nam Từ Liêm, Thành phố Hà Nội.', 'Hà Nội.', 334455112, 'Nam'),
(3, 3, 'Công ty TNHH', 'transcosmos Việt Nam', 'transcosmos@gmail.com', 'public/recruitimg/cong-ty-tnhh-transcosmos-viet-nam-61c9331426cc8.png', 'Công ty TNHH transcosmos Việt Nam', 'Tầng 8 & tầng 20, tòa nhà VTC Online, 18 Tam Trinh, Hai Bà Trưng, Hà Nội.', 'Hà Nội', 2147483647, 'Nam'),
(7, 4, 'aaaaa', 'aaaaa', 'aaaaaaaa@aaaaaaaa.aaaaaaaa', 'public/recruitimg/brand_8.jpg', 'aaaaaaaaaaaaaaa', 'aaaaa', 'aaaaa', 1231, 'Nam'),
(11, 10, 'nnn', 'nnn', 'nnn@nnn.nnn', 'public/recruitimg/brand_4.jpg', 'nnn', 'nnn', 'nnn', 0, 'Nữ'),
(12, 11, 'ttt', 'ttt', 'ttt@ttt.ttt', 'public/recruitimg/wibu_banner.jpg', 'ttt', 'ttt', 'ttt', 12312, 'Không'),
(13, 12, 'CÔNG TY TNHH ', 'NGÔN NGỮ TOÀN CẦU 4.0', 'NGONNGUTOANCAU4.0@gmail.com', 'public/recruitimg/7ac81002541db0a583dca6357fd3894c-629dce3b0d7e2.png', 'CÔNG TY TNHH NGÔN NGỮ TOÀN CẦU 4.0', '101 Võ Chí Công, Phường Hoà Xuân, Quận Cẩm Lệ, Thành phố Đà Nẵng, Việt Nam', '101 Võ Chí Công, Phường Hoà Xuân, Quận Cẩm Lệ, Thành phố Đà Nẵng, Việt Nam', 129573452, 'Không');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobcv`
--

CREATE TABLE `jobcv` (
  `IdJobCV` int(11) NOT NULL,
  `IdJobInfo` int(11) NOT NULL,
  `IdInfoCV` int(11) NOT NULL,
  `TrangThai` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `jobcv`
--

INSERT INTO `jobcv` (`IdJobCV`, `IdJobInfo`, `IdInfoCV`, `TrangThai`) VALUES
(19, 1, 1, 'Từ Chối'),
(20, 1, 1, 'Xem Sau'),
(22, 3, 2, ''),
(23, 3, 1, ''),
(24, 1, 1, 'Phỏng Vấn'),
(25, 2, 1, ''),
(26, 1, 1, 'Phỏng Vấn'),
(27, 2, 2, ''),
(28, 10, 2, ''),
(30, 12, 1, ''),
(31, 14, 2, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobinfo`
--

CREATE TABLE `jobinfo` (
  `IdJobInfo` int(11) NOT NULL,
  `IdInfoRecruit` int(11) NOT NULL,
  `Refresh` date NOT NULL,
  `Job` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MucLuong` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhThucLam` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CapBac` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `YeuCauKinhNghiem` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiTinh` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuongCanTuyen` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `jobinfo`
--

INSERT INTO `jobinfo` (`IdJobInfo`, `IdInfoRecruit`, `Refresh`, `Job`, `MucLuong`, `HinhThucLam`, `CapBac`, `YeuCauKinhNghiem`, `GioiTinh`, `SoLuongCanTuyen`, `MoTa`) VALUES
(1, 1, '2022-06-06', 'Chuyên Viên Chăm Sóc Khách Hàng - Nữ (Thu Nhập Lên Tới 15 Triệu/Tháng)', '8-15 triệu', 'Toàn thời gian', 'Nhân viên', 'Dưới 1 năm', 'Nữ', '3 người', 'Nắm bắt tình trạng lớp học, tiếp nhận và xử lý các thắc mắc, khiếu nại của học viên/khách hàng. Tiếp nhận và xử lý các thủ tục học tập liên quan đến bảo lưu/chuyển lớp/học lại ... Phối hợp với các phòng ban cung cấp tới học viên thông tin lịch khai giảng/mở lớp & thực hiện các công tác tri ân học viên trong quá trình học và các dịp đặc biệt.'),
(2, 1, '2022-06-07', 'Chuyên Viên Digital Marketing (Thu Nhập Hấp Dẫn) ', '8-12 triệu', 'Toàn thời gian', 'Nhân Viên', 'Không yêu cầu kinh nghiệm', 'Không yêu cầu', '2 người', '1. Triển khai chiến dịch quảng cáo online <br/> - Thiết lập các chiến dịch quảng cáo định kỳ tuần/tháng trên các nền tảng quảng cáo trực tuyến căn cứ kế hoạch của phòng Marketing.  <br/> - Có kinh nghiệm vận hành Facebook Ads triển khai các chiến dịch quảng cáo facebook theo hình thức chuyển đổi là một lợi thế.  <br/> - Theo dõi và điều chỉnh, đo lường hiệu quả và nội dung của chiến dịch quảng cáo.  <br/> 2. Quản lý các công cụ Digital Marketing  <br/> - Xây dựng kế hoạch và tổ chức thực hiện tích hợp các công cụ Digital Marketing cho hoạt động của nhóm như Chatbot, phần mềm Marketing Automation, Chat Online và các công cụ khác.  <br/> - Hỗ trợ các nhân sự khác thuộc phòng Marketing và Phòng ban/Cơ sở khác về việc sử dụng công cụ Digital Marketing để tối ưu hiệu quả.'),
(3, 2, '2022-05-15', 'Web Developer (PHP, Vuejs) ~ 2500$ ', 'Tới 2,500 USD', 'Toàn thời gian', 'Nhân viên', 'Dưới 1 năm', 'Không yêu cầu', '2 người', '● Chịu trách nhiệm nghiên cứu & phát triển các sản phẩm Web sử dụng ngôn ngữ/công nghệ: PHP, Vuejs/JavaScript, MySQL, Redis, Memcached, RabbitMQ, Socket.io, WebRTC, ElasticSearch, Solr,...  <br/>● Xây dựng bộ JavaScript SDK voice/video call dựa trên WebRTC.  <br/>● Xây dựng các plugin cho: Zendesk, Hubspot, Salesforce, Slack, Zoho,...  <br/> ● Tối ưu kiến trúc hệ thống, các ứng dụng Web cho hàng chục triệu người dùng thực tế.'),
(4, 3, '0000-00-00', 'Nhân Viên Tư Vấn - Chăm Sóc Khách Hàng Lương Cứng 7 Triệu - Data Có Sẵn zz', '8-12 triệu', 'Toàn thời gian', 'Nhân viên', 'Dưới 1 năm', 'Không', '20 người', '- Gọi theo danh sách khách hàng tiềm năng có sẵn để giới thiệu về các gói khám sức khỏe của Bảo Việt và lợi ích của mỗi gói <br/>  - Tư vấn, giải đáp các thông tin cần thiết cho khách hàng<br/>  - Hướng dẫn, thuyết phục khách hàng đăng kí các gói khám<br/>  - Theo dõi gói khám của khách, hỗ trợ khách hàng sau khi đăng kí<br/>  - Cập nhật thông tin lên hệ thống<br/>  - Báo cáo với Nhóm Trưởng khi có yêu cầu<br/>  ĐỊA ĐIỂM LÀM VIỆC:<br/>  Văn phòng Công ty Transcosmos Việt Nam, tòa nhà VTC Online, 18 Tam Trinh, Hai Bà Trưng, Hà Nội<br/>  THỜI GIAN LÀM VIỆC:<br/>  Thời gian làm việc: 08h00~17h00, từ thứ 2 đến thứ 7<br/>'),
(5, 3, '2022-05-03', 'Nhân Viên Chốt Lịch Hẹn Kiêm Chăm Sóc Khách Hàng - Lương Cứng 7Tr + Bonus (Thu Nhập 10 - 15Tr) ', 'Tới 15 triệu', 'Toàn thời gian', 'Nhân viên', 'Không yêu cầu kinh nghiệm', 'Không yêu cầu', '10 người', 'Gọi khách hàng theo thông tin của công ty cung cấp, tư vấn gói sản phẩm chăm sức khỏe của Bảo Việt.<br/> Giải đáp các thắc mắc của khách hàng, chốt thời gian và thủ tục để nhân viên xuống gặp trực tiếp khách hàng hoàn tất hồ sơ.<br/> Thực hiện chỉ tiêu số lượng cuộc gọi và thời gian tiếp cập khách hàng mỗi ngày theo yêu cầu<br/> Thời gian : Làm giờ hành chính, từ 8h00 – 17h00 (từ thứ 2 đến thứ 7)<br/> Địa Chỉ :Transcosmos Lầu 10 tòa nhà Scetpa, 19A Cộng Hòa, phường 12, quận Tân Bình<br/>'),
(6, 3, '2022-05-12', 'Nhân Viên Chăm Sóc Khách Hàng Gojek - Làm Việc Tại Quận 4 ', '7.3-8.3 triệu', 'Toàn thời gian', 'Nhân viên', 'Dưới 1 năm', 'Không yêu cầu', '1 người', 'Cung cấp thông tin và phản hồi thông tin tới khách hàng<br/> Giải quyết các khiếu nại, thắc mắc của khách hàng (nhà hàng)<br/> Các công việc khác cấp trên giao xuống<br/> Được đào tạo thêm trong quá trình làm việc<br/> Địa chỉ làm việc (làm việc tại văn phòng Gojek): Bến Vân Đồn, Quận 4, TpHCM<br/> Phỏng vấn online'),
(7, 3, '2022-06-07', 'Nhân Viên Chăm Sóc Khách Hàng ( Việt - Anh & Lương 10 - 15 Triệu / Tháng )', '10-15 triệu', 'Toàn thời gian', 'Nhân viên', 'Dưới 1 năm', 'Không yêu cầu', 'Nhân viên', 'Cung cấp thông tin dịch vụ, giải đáp thắc mắc của khách hàng<br/>  Giải quyết các khiếu nại, xử lý các vấn đề liên quan đến dịch vụ cho khách hàng<br/>  Hỗ trợ khách hàng thay đổi các thông tin của khách hàng <br/>  Hỗ trợ khách hàng qua các kênh online: Kênh Chat, Email, Call, App<br/>  Không sales<br/>  Được đào tạo thêm về nghiệp vụ trong quá trình thử việc<br/>  Phỏng vấn online<br/>'),
(8, 3, '2022-06-07', 'Nhân Viên Tư Vấn - Chốt Lịch Hẹn (Lương 10.000.000 Trở Lên) ', 'Tới 15 triệu', 'Toàn thời gian', 'Nhân viên', 'Không yêu cầu kinh nghiệm', 'Không yêu cầu', '30 người', '- Gọi khách hàng qua nguồn khách hàng của công ty cung cấp, tư vấn gói sản phẩm chăm sức khỏe của Bảo Việt.<br/> - Giải đáp các thắc mắc của khách hàng, chốt thời gian và thủ tục để nhân viên xuống gặp trực tiếp khách hàng hoàn tất hồ sơ.<br/> - Thực hiện chỉ tiêu số lượng cuộc gọi và thời gian tiếp cập khách hàng mỗi ngày theo yêu cầu<br/> - Thời gian : Làm giờ hành chính, từ 8h00 – 17h00 (từ thứ 2 đến thứ 7)<br/> - Địa Chỉ :Transcosmos Lầu 10 tòa nhà Scetpa, 19A Cộng Hòa, phường 12, quận Tân Bình<br/>'),
(9, 2, '2022-06-03', 'Nhân Viên Kinh Doanh Phần Mềm Thị Trường Mỹ (Thu Nhập Từ 30M) ', 'Trên 30 triệu', 'Toàn thời gian', 'Nhân viên', 'Dưới 1 năm', 'Không yêu cầu', '10 người', '● Tìm kiếm và tiếp cận khách hàng mục tiêu (khách hàng doanh nghiệp tại thị trường Mỹ và các nước mà Stringee triển khai bán hàng) qua các kênh như: Linkedin, email, telephone, social network, sự kiện,...). <br/> ● Thiết lập các buổi demo giới thiệu sản phẩm với khách hàng quan tâm thông qua video call. <br/> ● Phân tích và dự đoán nhu cầu tiềm năng của khách hàng để đề xuất giải pháp bán hàng và sản phẩm up sales. <br/> ● Quản lý mối quan hệ với các khách hàng đã có (hướng dẫn sử dụng, kết nối với team kỹ thuật,...). <br/> ● Tổng hợp và đề xuất phát triển các tính năng, nhu cầu mới của khách hàng phù hợp với hệ sinh thái giải pháp của Stringee.'),
(10, 2, '2022-06-01', 'IT Support / Hỗ Trợ Kỹ Thuật Phần Mềm ~ 1300$ ', 'Tới 1,300 USD', 'Toàn thời gian', 'Nhân viên', '1 năm', 'Không yêu cầu', '2 người', '● Hỗ trợ khách hàng các vấn đề kỹ thuật như cấu hình tài khoản, cấu hình phần mềm, cài đặt các thiết bị/phần mềm hỗ trợ, phối hợp với các phòng ban nhằm đem lại trải nghiệm tốt nhất cho khách hàng. <br/> ● Hướng dẫn khách hàng tích hợp API/SDK của Stringee vào nền tảng web, app của khách hàng. <br/> ● Xác định, tái hiện các vấn đề kỹ thuật phát sinh, đồng thời phối hợp với khối Sản phẩm trong quá trình xử lý. <br/> ● Hướng dẫn và tư vấn khách hàng sử dụng phần mềm một cách hiệu quả nhất. <br/> ● Tham gia các cuộc họp với khách hàng nhằm tìm hiểu yêu cầu, bài toán của khách hàng, đưa ra các giải pháp phù hợp và giải đáp vướng mắc của khách hàng trong quá trình tích hợp API/SDK của Stringee. <br/> ● Soạn thảo tài liệu hướng dẫn, tài liệu kỹ thuật theo yêu cầu.'),
(11, 2, '2022-06-07', 'IOS Developer ~ 1000$ - 2000$ ', '1,000-2,000 USD', 'Toàn thời gian', 'Nhân viên', 'Dưới 1 năm', 'Không yêu cầu', '2 người', '● Phát triển các ứng dụng iOS (Objective-C, Swift, React Native). <br/> ● Phát triển bộ Stringee Call SDK cho voice call/video call dựa trên WebRTC. <br/> ● Phát triển bộ Stringee Chat SDK. <br/> ● Hỗ trợ các developer (khách hàng của Stringee) tích hợp các SDK vào mobile app của họ.'),
(12, 2, '2022-06-18', 'bảo vệ', '8-12 triệu', 'Bán thời gian', 'Nhân viên', 'Không yêu cầu kinh nghiệm', 'Nam', '10 người', ''),
(13, 3, '2022-06-18', 'Quét nhà', 'Tới 15 triệu', 'Toàn thời gian', 'Nhân viên', 'Không yêu cầu kinh nghiệm', 'Nữ', '3 người', ''),
(14, 13, '0000-00-00', 'Chuyên Viên Tư Vấn Giáo Dục Cao Cấp Tại Đà Nẵng - Thu Nhập Lên Đến 8 Triệu', 'Trên 8 triệu', 'Toàn thời gian', 'Nhân viên', 'Không yêu cầu kinh nghiệm', 'Không', '5 người', 'Đạt được mục tiêu doanh số hàng tháng và hàng năm  Tuyển sinh mới (20 học sinh / tháng)  Tỷ lệ giữ chân học sinh hiện tại (80% tỷ lệ giữ chân tổng thể)  Tạo khách hàng tiềm năng mới (200 khách hàng/ tháng)  Giám sát nhân viên EC  Đào tạo dẫn đầu  Tạo tập lệnh  Phân công công việc tuyển dụng & dịch vụ khách hàng hàng ngày / hàng tuần / hàng tháng  Thực hiện chiến lược bán hàng & sự kiện theo chỉ đạo của Giám đốc chi nhánh  Giải quyết hoặc báo cáo tất cả các vấn đề về dịch vụ khách hàng  Lập báo cáo bán hàng hàng tháng  Nghiên cứu thị trường giáo dục, khách hàng tiềm năng và đối thủ cạnh tranh của Wordplay  Thúc đẩy các mối quan hệ và tạo mối quan hệ đối tác trong cộng đồng  Cung cấp phản hồi và đề xuất cách cải tiến để đảm bảo tính liên tục giữa các bộ phận Bán hàng, Tiếp thị, Văn phòng và Giáo dục.  Cung cấp thành tích kinh doanh hàng tháng của thành viên trong nhóm vào cuối mỗi tháng cho kế toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `useraccountcv`
--

CREATE TABLE `useraccountcv` (
  `IdAccount` int(11) NOT NULL,
  `UserName` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `useraccountcv`
--

INSERT INTO `useraccountcv` (`IdAccount`, `UserName`, `Password`) VALUES
(1, 'khach1', '50d25ceee6f203926768fe7450f924a7'),
(2, 'khach2', '496e396cb50410a33d6fd2a464e2d009'),
(35, 'xxxxx', 'fb0e22c79ac75679e9881e6ba183b354'),
(36, 'vvv', '4786f3282f04de5b5c7317c490c6d922'),
(37, 'phuc', '886d057a091559e2f5dff95d1d01360b');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `useradmin`
--

CREATE TABLE `useradmin` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `useradmin`
--

INSERT INTO `useradmin` (`ID`, `UserName`, `Password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userrecruit`
--

CREATE TABLE `userrecruit` (
  `IdRecruit` int(11) NOT NULL,
  `UserName` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `userrecruit`
--

INSERT INTO `userrecruit` (`IdRecruit`, `UserName`, `Password`) VALUES
(1, 'recruit1', '2f94f30078531217e8a5c97c5c3c7029'),
(2, 'recruit2', '2da412e2a927a9f414884b6979f44548'),
(3, 'recruit3', '62169db923e5a23b5e0cb0964f407cf5'),
(4, 'recruit4', 'afbf178be1393641a0cdf67b43339f3d'),
(10, 'nnn', 'a1931ec126bbad3fa7a3fc64209fd921'),
(11, 'ttt', '9990775155c3518a0d7917f7780b24aa'),
(12, 'recruit5', '15a2b4a11b499d11badfb13400872c59');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `infocv`
--
ALTER TABLE `infocv`
  ADD PRIMARY KEY (`IdInfoCV`),
  ADD KEY `IdAccount` (`IdAccount`);

--
-- Chỉ mục cho bảng `inforecruit`
--
ALTER TABLE `inforecruit`
  ADD PRIMARY KEY (`IdInfoRecruit`),
  ADD KEY `IdRecruit` (`IdRecruit`);

--
-- Chỉ mục cho bảng `jobcv`
--
ALTER TABLE `jobcv`
  ADD PRIMARY KEY (`IdJobCV`),
  ADD KEY `IdJobInfo` (`IdJobInfo`),
  ADD KEY `IdInfoCV` (`IdInfoCV`);

--
-- Chỉ mục cho bảng `jobinfo`
--
ALTER TABLE `jobinfo`
  ADD PRIMARY KEY (`IdJobInfo`),
  ADD KEY `IdInfoRecruit` (`IdInfoRecruit`);

--
-- Chỉ mục cho bảng `useraccountcv`
--
ALTER TABLE `useraccountcv`
  ADD PRIMARY KEY (`IdAccount`);

--
-- Chỉ mục cho bảng `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `userrecruit`
--
ALTER TABLE `userrecruit`
  ADD PRIMARY KEY (`IdRecruit`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `infocv`
--
ALTER TABLE `infocv`
  MODIFY `IdInfoCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `inforecruit`
--
ALTER TABLE `inforecruit`
  MODIFY `IdInfoRecruit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `jobcv`
--
ALTER TABLE `jobcv`
  MODIFY `IdJobCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `jobinfo`
--
ALTER TABLE `jobinfo`
  MODIFY `IdJobInfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `useraccountcv`
--
ALTER TABLE `useraccountcv`
  MODIFY `IdAccount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `userrecruit`
--
ALTER TABLE `userrecruit`
  MODIFY `IdRecruit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `infocv`
--
ALTER TABLE `infocv`
  ADD CONSTRAINT `infocv_ibfk_1` FOREIGN KEY (`IdAccount`) REFERENCES `useraccountcv` (`IdAccount`);

--
-- Các ràng buộc cho bảng `inforecruit`
--
ALTER TABLE `inforecruit`
  ADD CONSTRAINT `inforecruit_ibfk_1` FOREIGN KEY (`IdRecruit`) REFERENCES `userrecruit` (`IdRecruit`);

--
-- Các ràng buộc cho bảng `jobcv`
--
ALTER TABLE `jobcv`
  ADD CONSTRAINT `jobcv_ibfk_1` FOREIGN KEY (`IdJobInfo`) REFERENCES `jobinfo` (`IdJobInfo`),
  ADD CONSTRAINT `jobcv_ibfk_2` FOREIGN KEY (`IdInfoCV`) REFERENCES `infocv` (`IdInfoCV`);

--
-- Các ràng buộc cho bảng `jobinfo`
--
ALTER TABLE `jobinfo`
  ADD CONSTRAINT `jobinfo_ibfk_1` FOREIGN KEY (`IdInfoRecruit`) REFERENCES `inforecruit` (`IdInfoRecruit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
