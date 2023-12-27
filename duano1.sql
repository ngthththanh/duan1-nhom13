-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 12, 2023 lúc 11:30 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duano1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int NOT NULL,
  `id_tk` int NOT NULL,
  `id_sp` int NOT NULL,
  `ngaybinhluan` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `id_tk`, `id_sp`, `ngaybinhluan`, `noidung`) VALUES
(58, 23, 15, '2023-11-23', '123\r\n'),
(59, 23, 15, '2023-11-23', '123\r\n'),
(60, 23, 18, '2023-11-23', '1332'),
(61, 23, 17, '2023-11-24', '12345'),
(62, 23, 18, '2023-11-24', '123'),
(63, 23, 18, '2023-11-24', '111'),
(64, 21, 3, '2023-11-29', '`123\r\n'),
(65, 23, 12, '2023-11-29', '1234'),
(66, 23, 12, '2023-11-29', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int NOT NULL,
  `ten_dm` varchar(255) NOT NULL,
  `trangthai_dm` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `ten_dm`, `trangthai_dm`) VALUES
(2, 'Phụ Kiện Giày Dép', 0),
(4, 'Giày Thể Thao Nữ(Sneakers)', NULL),
(5, 'Giày Thể Thao Nam(Sneaker)', NULL),
(11, 'Giày Thể Thao Nam Nữ', NULL),
(13, 'Giày Lười ', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kich_thuoc`
--

CREATE TABLE `kich_thuoc` (
  `id` int NOT NULL,
  `id_sanpham` int NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `so_luong` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `kich_thuoc`
--

INSERT INTO `kich_thuoc` (`id`, `id_sanpham`, `ten`, `so_luong`) VALUES
(31, 18, '38', 80),
(35, 13, '38', 100),
(36, 18, '39', 900),
(40, 34, '38', 900),
(41, 34, '39', 109),
(42, 34, '37', 200),
(43, 33, '38', 2000),
(44, 33, '37', 100),
(45, 33, '39', 500),
(46, 32, '37', 234),
(47, 32, '38', 988),
(48, 32, '39', 987),
(49, 2, '38', 10),
(50, 34, '', 10),
(51, 12, '39', 10),
(52, 4, '37', 100),
(55, 0, '37', 10),
(58, 2, '37', 10),
(59, 2, '39', 900),
(60, 0, '38', 10),
(61, 2, '40', 100),
(62, 36, '37', 100),
(63, 36, '38', 900),
(64, 36, '39', 2000),
(65, 36, '40', 100),
(66, 41, '37', 10),
(67, 48, '37', 100),
(68, 48, '38', 109),
(69, 48, '39', 900),
(70, 48, '40', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia_sp` varchar(255) NOT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `mota` text,
  `luotxem` int DEFAULT NULL,
  `id_dm` int NOT NULL,
  `trangthaI` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `gia_sp`, `hinh`, `mota`, `luotxem`, `id_dm`, `trangthaI`) VALUES
(1, 'Jordan Trainer 1 Low', '456000', '7.jpg', 'Giày Air Jordan Trainer ST có thiết kế cổ điển, sang trọng nhưng vẫn vô cùng thể thao. Với công nghệ tiên tiến của Nike  Air Jordan Trainer ST thật sự là mẫu giày tuyệt vời dành cho các hoạt động thể thao như chạy bộ, tập gym...\r\n\r\nAir Jordan Trainer ST được Nike chăm chút đến từng chi tiết nhỏ nhất giúp cho đôi chân vận động rất uyển chuyển tự nhiên, đảm bảo an toàn cho bàn chân và ngón chân trong quá trình luyện tập.', 20, 5, 0),
(2, 'Air Jordan 12 Low Wolf Grey', '3449000', '5.jpg', 'Air Jordan 12 Low Retro ‘Wolf Grey’ thể hiện lớp hoàn thiện đơn sắc nhẹ nhàng trên một phiên bản lặp lại cấu hình thấp của thiết kế cổ điển năm 1996 của Tinker Hatfield. Phần trên được khâu bằng da lộn màu xám có lỗ nhỏ với các lớp phủ có kết cấu thằn lằn bằng da tổng hợp có tông màu. Các mảng màu vàng tương phản trên các điểm nhấn thương hiệu Jumpman ở mấu gót và lót giày. Đôi giày thể thao này được gắn trên đế giữa Phylon màu xám phù hợp, được trang bị đệm Zoom Air có chiều dài đầy đủ và được gia cố bằng một tấm đế bằng sợi carbon.', 30, 5, 0),
(3, 'Nike Jr.Tiempo Legend VI FG', '5699000', '8.jpg', 'Giày Nike Air Force 1 được đánh giá là một trong những mẫu Sneaker đình đám nhất và điển hình nhất trong danh mục những đôi giày thể thao thời trang của giới trẻ.\r\n\r\nMẫu giày Nike Air Force 1 thực sự cân bằng được phong cách thời trang với kết hợp dễ dàng dành cho những bộ trang phục thông thường cho cả nam và nữ như quần jeans, short hay những kiểu áo yếm tinh nghịch thậm chí là những chiếc váy ngắn. Mẫu giày Nike Air Force 1 với cổ cao trên mắt cá chân thường được các bạn nam kết hợp cùng với những mẫu quần jeans sắn gấu.', 90, 11, 0),
(4, ' Nike LeBron Soldier 10', '22434', '4.jpg', 'Giày Nike Air Force 1 được đánh giá là một trong những mẫu Sneaker đình đám nhất và điển hình nhất trong danh mục những đôi giày thể thao thời trang của giới trẻ.\r\n\r\nMẫu giày Nike Air Force 1 thực sự cân bằng được phong cách thời trang với kết hợp dễ dàng dành cho những bộ trang phục thông thường cho cả nam và nữ như quần jeans, short hay những kiểu áo yếm tinh nghịch thậm chí là những chiếc váy ngắn. Mẫu giày Nike Air Force 1 với cổ cao trên mắt cá chân thường được các bạn nam kết hợp cùng với những mẫu quần jeans sắn gấu.', 80, 5, 0),
(5, 'A Classic Nike SB Stefan Janoski Max In White / Black', '3000000', '5.jpg', 'Air Jordan 12 Low Retro ‘Wolf Grey’ thể hiện lớp hoàn thiện đơn sắc nhẹ nhàng trên một phiên bản lặp lại cấu hình thấp của thiết kế cổ điển năm 1996 của Tinker Hatfield. Phần trên được khâu bằng da lộn màu xám có lỗ nhỏ với các lớp phủ có kết cấu thằn lằn bằng da tổng hợp có tông màu. Các mảng màu vàng tương phản trên các điểm nhấn thương hiệu Jumpman ở mấu gót và lót giày. Đôi giày thể thao này được gắn trên đế giữa Phylon màu xám phù hợp, được trang bị đệm Zoom Air có chiều dài đầy đủ và được gia cố bằng một tấm đế bằng sợi carbon.', 87, 5, 0),
(8, ' Nike Air Jordan 12 Low Wolf Grey', '2500000', '10.jpg', 'Giày Air Jordan Trainer ST có thiết kế cổ điển, sang trọng nhưng vẫn vô cùng thể thao. Với công nghệ tiên tiến của Nike  Air Jordan Trainer ST thật sự là mẫu giày tuyệt vời dành cho các hoạt động thể thao như chạy bộ, tập gym...\r\nAir Jordan Trainer ST được Nike chăm chút đến từng chi tiết nhỏ nhất giúp cho đôi chân vận động rất uyển chuyển tự nhiên, đảm bảo an toàn cho bàn chân và ngón chân trong quá trình luyện tập.', 56, 5, 0),
(9, 'NIKE FREE RN MOTION FLYKNIT 2017 NAM - XÁM', '2590000', '1.jpg', 'Giày Air Jordan Trainer ST có thiết kế cổ điển, sang trọng nhưng vẫn vô cùng thể thao. Với công nghệ tiên tiến của Nike  Air Jordan Trainer ST thật sự là mẫu giày tuyệt vời dành cho các hoạt động thể thao như chạy bộ, tập gym...\r\n\r\nAir Jordan Trainer ST được Nike chăm chút đến từng chi tiết nhỏ nhất giúp cho đôi chân vận động rất uyển chuyển tự nhiên, đảm bảo an toàn cho bàn chân và ngón chân trong quá trình luyện tập.', 12, 5, 0),
(10, 'Nike Zoom Matumbo Track 3K-10K Distance', '1500000', '6.jpg', 'Giày Nike Air Force 1 được đánh giá là một trong những mẫu Sneaker đình đám nhất và điển hình nhất trong danh mục những đôi giày thể thao thời trang của giới trẻ.\r\n\r\nMẫu giày Nike Air Force 1 thực sự cân bằng được phong cách thời trang với kết hợp dễ dàng dành cho những bộ trang phục thông thường cho cả nam và nữ như quần jeans, short hay những kiểu áo yếm tinh nghịch thậm chí là những chiếc váy ngắn. Mẫu giày Nike Air Force 1 với cổ cao trên mắt cá chân thường được các bạn nam kết hợp cùng với những mẫu quần jeans sắn gấu.', 34, 11, 0),
(11, 'Nike Tiempo Legend VI SG PRO Green 819680-103', '800000', '3.jpg', 'Giày Nike Air Force 1 được đánh giá là một trong những mẫu Sneaker đình đám nhất và điển hình nhất trong danh mục những đôi giày thể thao thời trang của giới trẻ.\r\n\r\nMẫu giày Nike Air Force 1 thực sự cân bằng được phong cách thời trang với kết hợp dễ dàng dành cho những bộ trang phục thông thường cho cả nam và nữ như quần jeans, short hay những kiểu áo yếm tinh nghịch thậm chí là những chiếc váy ngắn. Mẫu giày Nike Air Force 1 với cổ cao trên mắt cá chân thường được các bạn nam kết hợp cùng với những mẫu quần jeans sắn gấu.', 37, 5, 0),
(12, 'Converse One Star', '790000', '9.jpg', 'Giày Air Jordan Trainer ST có thiết kế cổ điển, sang trọng nhưng vẫn vô cùng thể thao. Với công nghệ tiên tiến của Nike  Air Jordan Trainer ST thật sự là mẫu giày tuyệt vời dành cho các hoạt động thể thao như chạy bộ, tập gym...\r\n\r\nAir Jordan Trainer ST được Nike chăm chút đến từng chi tiết nhỏ nhất giúp cho đôi chân vận động rất uyển chuyển tự nhiên, đảm bảo an toàn cho bàn chân và ngón chân trong quá trình luyện tập.', 86, 11, 0),
(15, 'GIÀY NIKE ZOOM BELLA 6 NỮ - TRẮNG HỒNG', '2370000', '13.jpg', 'Giày Nike Zoom Bella 6 có thiết kế dành tuyệt vời dành cho việc luyện tập thể thao và tập gym. Kiểu dáng đẹp, công nghệ đỉnh cao là những đặc điểm khiến nó trở thành mẫu giày training không thể bỏ qua.\r\n\r\nPhần upper chất liệu vải mesh rất thoáng và bền chắc, phần đế giữa công nghệ Zoom Air mới nhất rất êm, đàn hồi tốt hỗ trợ hoàn thành mọi động tác tập luyện phức tạp nhất. Phần đế ngoài với chất liệu bền bì chắc chắn giúp bạn an toàn khi luyện tập.', 59, 4, 0),
(17, 'GIÀY ADIDAS GRAND COURT BASE 2.0 NỮ - TRẮNG', '1090000', '14.jpg', 'Giày adidas Grand Court Base 2.0 phiên bản nâng cấp rất được ưu chuộng của dòng Grand Court Base .Với những cải tiến mới khiến cho mẫu giày này bền đẹp và năng động hơn khá nhiều.\r\n\r\nPhần upper được làm từ da cao cấp, phần đế làm từ cao su tự nhiên cực kỳ bền. Giày adidas Grand Court Base 2.0 chắc chắn sẽ là một mẫu giày thời trang không thể nào bỏ qua được trong năm nay.', 74, 4, 0),
(18, 'GIÀY LACOSTE CONCOURS 118 NAM - NÂU', '790000', '15.jpg', 'Giày Lacoste Concours 118 sử dụng chất liệu da cao cấp cùng logo dập chìm đã toát lên sự sang trọng, tinh tế đặc trưng vốn có của thương hiệu đến từ nước Pháp -kinh đô thời trang của thế giới. Đường kim, mũi chỉ được may hoàn hảo đến từng chi tiết.\r\n\r\nMẫu giày này sẽ tăng thêm sự lịch lãm,menly cho chính chủ nhân của nó.', 47, 13, 1),
(29, ' Giày thể thao thời trang nữ Cali Dream Mis Lifestyle SS22-3855_Be-trắng', '2000000', '21.jpg', 'Sạch sẽ và đơn giản khác xa với vẻ ngoài và cảm giác đơn giản khiến Puma Cali Dream mang phong cách cổ điển trở thành một ngôi sao nổi bật trong số các lựa chọn đế dày ngày nay . Đó là một trong những lựa chọn sẵn sàng cho mọi mùa trong năm mang đến cho bạn sự năng nổ, thoải mái nhưng vẫn cực kỳ nổi bật. Đôi giày thời trang này được đánh giá cực kỳ bền bỉ vì nó được thiết kế để tồn tại lâu dài.', 69, 11, 1),
(30, ' Giày thể thao thời trang nữ Cali Dream Mis Lifestyle SS22-3855_Hồng-trắng', '20000', '22.jpg', 'Sạch sẽ và đơn giản khác xa với vẻ ngoài và cảm giác đơn giản khiến Puma Cali Dream mang phong cách cổ điển trở thành một ngôi sao nổi bật trong số các lựa chọn đế dày ngày nay . Đó là một trong những lựa chọn sẵn sàng cho mọi mùa trong năm mang đến cho bạn sự năng nổ, thoải mái nhưng vẫn cực kỳ nổi bật. Đôi giày thời trang này được đánh giá cực kỳ bền bỉ vì nó được thiết kế để tồn tại lâu dài.', 68, 4, 1),
(31, 'Giày New Balance 574 Legacy ‘Angora Outerspace’ U574LGTO', '1090000', '23.jpg', 'Sạch sẽ và đơn giản khác xa với vẻ ngoài và cảm giác đơn giản khiến Puma Cali Dream mang phong cách cổ điển trở thành một ngôi sao nổi bật trong số các lựa chọn đế dày ngày nay . Đó là một trong những lựa chọn sẵn sàng cho mọi mùa trong năm mang đến cho bạn sự năng nổ, thoải mái nhưng vẫn cực kỳ nổi bật. Đôi giày thời trang này được đánh giá cực kỳ bền bỉ vì nó được thiết kế để tồn tại lâu dài.', 26, 4, 1),
(32, 'Giày sneaker NB 574 xám hồng', '500000', '24.jpg', 'Giày Lacoste Concours 118 sử dụng chất liệu da cao cấp cùng logo dập chìm đã toát lên sự sang trọng, tinh tế đặc trưng vốn có của thương hiệu đến từ nước Pháp -kinh đô thời trang của thế giới. Đường kim, mũi chỉ được may hoàn hảo đến từng chi tiết. Mẫu giày này sẽ tăng thêm sự lịch lãm,menly cho chính chủ nhân của nó.', 34, 4, 1),
(33, 'Giày Hermes Paris Loafer ‘Black’ H221965ZA01420', '1090000', '25.jpg', 'Là thương hiệu đại diện cho thời trang cao cấp, giày lười Hermes cho nam và nữ dành được nhiều tình cảm của người tiêu dùng. Những mẫu giầy Hermes authentic luôn chinh phục các tín đồ thời trang từ thiết kế đến sự hoàn hảo trong từng chi tiết, thể hiện phong cách và đẳng cấp của người mang. Điều quan trọng cần lưu ý là nên lựa chọn đúng địa chỉ store để sở hữu những sản phẩm của Hermès Paris chất lượng nhất.', 89, 13, 1),
(36, ' Adidas Originals Rivalry Low Premium - White', '1090000', '27.jpg', 'Nâng cao trạng thái của bạn. Chỉ cần xỏ chân vào đôi giày adidas này là bạn đã sẵn sàng đến thư giãn bên hồ bơi và đến khách sạn sang trọng. Dù mơ mộng hay thực tế, cảm giác VIP đều rất mạnh mẽ. Có lẽ là do chất liệu da cao cấp, màu sắc nhẹ nhàng và thiết kế B-ball mang phong cách retro. Là một tay chơi gỗ cứng lớn vào những năm 80, những cú đá này có tất cả những gì bạn cần cho cuộc sống hàng ngày. Sản phẩm này được sản xuất bằng vật liệu tái chế như một phần trong tham vọng của chúng tôi nhằm chấm dứt rác thải nhựa.', 98, 11, 1),
(48, 'GIÀY NEW BALANCE 302 ‘BEIGE BLACK’ CT302RF', '2000000', '22.jpg', 'Giày New Balance 550 ‘Off White Chile Red’ (Mã sản phẩm: BB550VTB) là một phiên bản độc đáo của dòng giày thể thao New Balance 550, được thiết kế với sự kết hợp tinh tế của màu off-white (kem nhạt) và chile red (đỏ ớt), mang đến một phong cách hiện đại và cá tính. Đây là mẫu giày phù hợp cho những người yêu thích sự kết hợp màu sắc nổi bật và thời trang.', 23, 11, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int NOT NULL COMMENT '1 là user 0 là admin',
  `user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `hoten` text NOT NULL,
  `hinh_tk` varchar(255) DEFAULT NULL,
  `sdt` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0396189342',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `diachi` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Trịnh văn bô',
  `phanquyen` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `user`, `hoten`, `hinh_tk`, `sdt`, `email`, `pass`, `diachi`, `phanquyen`) VALUES
(21, 'thanhthanh023', 'Nguyễn Thị Thanh Thanh', NULL, '0336948023', 'thanhnttph43622@fpt.edu.com', 'ngthththanh2003', 'Ninh Bình', '1'),
(23, 'ngthththanh', 'Nguyễn Thị Thanh Thanh', NULL, '0359688283', 'nguyenthanhthanhgatay@gmail.com', '123456', 'Ninh Bình', '2'),
(37, 'thanh', 'Nguyễn Thị Thanh Thanh', NULL, NULL, 'trandung2282003@gmail.com', '12345a', NULL, '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int NOT NULL,
  `iddh` int NOT NULL,
  `idpro` int NOT NULL,
  `soluong` int NOT NULL DEFAULT '0',
  `dongia` double(10,2) NOT NULL DEFAULT '0.00',
  `tensp` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `ngaybinhdathang` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `iddh`, `idpro`, `soluong`, `dongia`, `tensp`, `img`, `ngaybinhdathang`) VALUES
(1, 1, 33, 4, 1090000.00, 'Giày Hermes Paris Loafer ‘Black’ H221965ZA01420', '25.jpg', '2023-12-10'),
(2, 1, 36, 1, 1090000.00, ' Adidas Originals Rivalry Low Premium - White', '27.jpg', '2023-12-10'),
(3, 2, 36, 1, 1090000.00, ' Adidas Originals Rivalry Low Premium - White', '27.jpg', '2023-12-10'),
(4, 3, 33, 1, 1090000.00, 'Giày Hermes Paris Loafer ‘Black’ H221965ZA01420', '25.jpg', '2023-12-10'),
(5, 4, 36, 1, 1090000.00, ' Adidas Originals Rivalry Low Premium - White', '../uploads/27.jpg', '2023-12-10'),
(6, 5, 1, 1, 456000.00, 'Jordan Trainer 1 Low', '../uploads/7.jpg', '2023-12-11'),
(7, 5, 9, 1, 2590000.00, 'NIKE FREE RN MOTION FLYKNIT 2017 NAM - XÁM', '../uploads/1.jpg', '2023-12-11'),
(8, 5, 32, 1, 500000.00, 'Giày sneaker NB 574 xám hồng', '../uploads/24.jpg', '2023-12-11'),
(9, 5, 36, 1, 1090000.00, ' Adidas Originals Rivalry Low Premium - White', '../uploads/27.jpg', '2023-12-11'),
(10, 6, 33, 5, 1090000.00, 'Giày Hermes Paris Loafer ‘Black’ H221965ZA01420', '../uploads/25.jpg', '2023-12-11'),
(11, 6, 36, 2, 1090000.00, ' Adidas Originals Rivalry Low Premium - White', '../uploads/27.jpg', '2023-12-11'),
(12, 6, 32, 1, 500000.00, 'Giày sneaker NB 574 xám hồng', '../uploads/24.jpg', '2023-12-11'),
(13, 6, 3, 1, 5699000.00, 'Nike Jr.Tiempo Legend VI FG', '../uploads/8.jpg', '2023-12-11'),
(14, 7, 36, 1, 1090000.00, ' Adidas Originals Rivalry Low Premium - White', '27.jpg', '2023-12-11'),
(15, 7, 33, 1, 1090000.00, 'Giày Hermes Paris Loafer ‘Black’ H221965ZA01420', '../uploads/25.jpg', '2023-12-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int NOT NULL,
  `madh` varchar(20) NOT NULL,
  `tongdonhang` double(10,2) NOT NULL DEFAULT '0.00',
  `phuongthuc` int NOT NULL DEFAULT '1',
  `iduser` int DEFAULT NULL,
  `hoten` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tell` varchar(20) NOT NULL,
  `pttt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'thanhtoankhinhanhang',
  `trangthai` varchar(50) NOT NULL DEFAULT 'choxuly'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `madh`, `tongdonhang`, `phuongthuc`, `iduser`, `hoten`, `address`, `email`, `tell`, `pttt`, `trangthai`) VALUES
(1, 'shopbh954892', 5450000.00, 1, NULL, 'phạm thị thiên', 'ninhbinh', 'thienggg@fff.com', '0396189342', '1', 'choxuly'),
(2, 'shopbh117704', 1090000.00, 1, NULL, 'phạm thị thiên', 'ninhbinh', 'thienggg@fff.com', '0396189342', '1', 'choxuly'),
(3, 'shopbh184930', 1090000.00, 1, NULL, 'phạm thị thiên', 'thien@gmail.com', 'thienggg@fff.com', '0396189342', '1', 'choxuly'),
(4, 'shopbh93201', 1090000.00, 1, NULL, 'phạm thị thiên', 'Trịnh Văn Bô ', '', '0396189342', 'VNPAY', 'choxuly'),
(5, 'shopbh892355', 4636000.00, 1, NULL, 'phạm thị thiên', 'Trịnh Văn Bô ', '', '0396189342', 'VNPAY', 'choxuly'),
(6, 'shopbh683007', 13829000.00, 1, NULL, 'Nguyễn Thị Thanh Thanh', 'Trịnh Văn Bô ', 'ninh binhf', '0396189342', 'thanhtoankhinhanhang', 'choxuly'),
(7, 'shopbh932435', 2180000.00, 1, NULL, 'Nguyễn Thị Thanh Thanh', 'Trịnh Văn Bô ', '', '0396189342', 'VNPAY', 'hoanthanhdonhang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnpay`
--

CREATE TABLE `vnpay` (
  `id` int NOT NULL,
  `vnp_Amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'tổng số tiền',
  `vnp_BankCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_BankTranNo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_CardType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_OrderInfo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_PayDate` datetime NOT NULL,
  `vnp_ResponseCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_TmnCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_TransactionNo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_TransactionStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '0 là thanh toán thành công còn lại là thất bại',
  `vnp_TxnRef` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_SecureHash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vnpay`
--

INSERT INTO `vnpay` (`id`, `vnp_Amount`, `vnp_BankCode`, `vnp_BankTranNo`, `vnp_CardType`, `vnp_OrderInfo`, `vnp_PayDate`, `vnp_ResponseCode`, `vnp_TmnCode`, `vnp_TransactionNo`, `vnp_TransactionStatus`, `vnp_TxnRef`, `vnp_SecureHash`) VALUES
(1, '1185000000', 'NCB', 'VNP14224643', 'ATM', 'Thanh toán giao dịch : 8184', '2023-12-07 09:04:01', '00', 'I1MTCNW2', '14224643', '00', '8184', '05fb486a9bee7a097fcabd25ecf16db0844a526eaa617e76ed60ec0ed907717d33697ecac1db754dc00e62d2da3dd499a5b73dc8d1e60189eccf7255fcd6a6bf'),
(2, '474000000', 'NCB', 'VNP14224681', 'ATM', 'Thanh toán giao dịch : 6459', '2023-12-07 09:14:57', '00', 'I1MTCNW2', '14224681', '00', '6459', 'ffec33d65de06c33bb183bc7cda4becfcae1578e9d1676af6e74fda75786e91611a1ed2cb2af9dc6c50169525011cf2b772fcec2b1329689b57ed2bd4eb99411'),
(3, '920000000', 'NCB', 'VNP14224771', 'ATM', 'Thanh toán giao dịch : 5758', '2023-12-07 09:46:17', '00', 'I1MTCNW2', '14224771', '00', '5758', '7c23ea76ded9ff24fe607f932e754251da5047bbbbe107070696d7959e51328e5d377ebb59f50d49a53c81281289dd53a512691e9b8ee3b9949ff8c27b7278d4'),
(4, '920000000', 'NCB', 'VNP14224771', 'ATM', 'Thanh toán giao dịch : 5758', '2023-12-07 09:46:17', '00', 'I1MTCNW2', '14224771', '00', '5758', '7c23ea76ded9ff24fe607f932e754251da5047bbbbe107070696d7959e51328e5d377ebb59f50d49a53c81281289dd53a512691e9b8ee3b9949ff8c27b7278d4'),
(5, '920000000', 'NCB', 'VNP14224839', 'ATM', 'Thanh toán giao dịch : 6617', '2023-12-07 10:09:32', '00', 'I1MTCNW2', '14224839', '00', '6617', '0de5e2d6a567193d4ed0322703e85754c7c5fedc2c24c2447c32fc1cdfea0f4555d40cd5508758b1d15f86d0615af67d244c1cfd3f15b5643bfb1fe77d4a385d'),
(6, '79000000', 'NCB', 'VNP14224913', 'ATM', 'Thanh toán giao dịch : 5727', '2023-12-07 10:30:07', '00', 'I1MTCNW2', '14224913', '00', '5727', '5b164af994a5c6ffecf18ded0edb3abffd95c73c97642e24dd01eaca4394272d03822177860ed8c77580dd3f703d7f47fbc88ab9a17de999be685aed90c4067e'),
(7, '79000000', 'NCB', 'VNP14224918', 'ATM', 'Thanh toán giao dịch : 6553', '2023-12-07 10:31:38', '00', 'I1MTCNW2', '14224918', '00', '6553', '682da4e0d0dff877774106525f7d018baacbb113d3a97222ecbe96d6210d8bce0d0b81fa48c80f1570b9f788e7fe3bedfbe83a9ca7bbea08f4c2a364fe4f89b8'),
(8, '79000000', 'NCB', 'VNP14224931', 'ATM', 'Thanh toán giao dịch : 4525', '2023-12-07 10:36:30', '00', 'I1MTCNW2', '14224931', '00', '4525', '0346240814564e7c98cc3123f6b83141caf97e8c888fcf114d2956abb1353e5235e0cd4a8aa7a0c5f8ccbe2d941744b340d585bb0c9ff19196378476a5208e7d'),
(9, '79000000', 'NCB', 'VNP14224936', 'ATM', 'Thanh toán giao dịch : 168', '2023-12-07 10:38:54', '00', 'I1MTCNW2', '14224936', '00', '168', '808fca6069ed61ca39583bc39e032d59b52f3b0036fe9c21fbd8b578de5d134eea64b9569074fd2ed8800e997a8e65eb31d644f726ac24ffd5bf5143dac362df'),
(10, '218000000', 'NCB', 'VNP14224942', 'ATM', 'Thanh toán giao dịch : 5466', '2023-12-07 10:40:17', '00', 'I1MTCNW2', '14224942', '00', '5466', '4ca79af9a48d7ff848e2d4926111d14272a28d694a893b632d10fe22a9140c9c66428ee857e4e00a01034ef244163d131cbbdd1c817d3ef802e9627c176431c8'),
(11, '218000000', 'NCB', 'VNP14224942', 'ATM', 'Thanh toán giao dịch : 5466', '2023-12-07 10:40:17', '00', 'I1MTCNW2', '14224942', '00', '5466', '4ca79af9a48d7ff848e2d4926111d14272a28d694a893b632d10fe22a9140c9c66428ee857e4e00a01034ef244163d131cbbdd1c817d3ef802e9627c176431c8'),
(12, '711000000', 'NCB', 'VNP14226276', 'ATM', 'Thanh toán giao dịch : 6203', '2023-12-07 18:03:50', '00', 'I1MTCNW2', '14226276', '00', '6203', '207a20a058c67470e7976e81a3eca579952edc529aba47a849c9f3ef8cdbcdc1167f1f82130ace24abffb72907e8f0ebe12c5ec250867e10471e056cbd761721'),
(13, '474000000', 'NCB', 'VNP14226306', 'ATM', 'Thanh toán giao dịch : 300', '2023-12-07 18:23:40', '00', 'I1MTCNW2', '14226306', '00', '300', 'aac9a6abb81cde7dcd510f19ea419a9f3d11e85ce43828b96918fc42b5c877932995e64c5073ae9a2ff27080ded832d58930fc6a1d3c4c39714ca0ae06582da7'),
(14, '237000000', 'NCB', 'VNP14226351', 'ATM', 'Thanh toán giao dịch : 4126', '2023-12-07 18:48:55', '00', 'I1MTCNW2', '14226351', '00', '4126', '9e3d236f41fb540be6d45b92a569065e2a55f6213d45cf115a7634e0cced8f5c43c994a335cdf7d6f5fca1c4fa0a1c9daf3d722638aca27ee821b8db5e2caabb'),
(15, '237000000', 'NCB', 'VNP14226761', 'ATM', 'Thanh toán giao dịch : 3606', '2023-12-07 21:43:30', '00', 'I1MTCNW2', '14226761', '00', '3606', '467c02c10b7a1fad18e0de9f302ed2e854089f6eccc1d453f94ada2e23fe8e5eaa699d5a24000360e89a6af8f63732efbef507370af083d7dea5f0f6102888bb'),
(16, '219000000', 'NCB', 'VNP14233529', 'ATM', 'Thanh toán giao dịch : 5325', '2023-12-10 22:39:01', '00', 'I1MTCNW2', '14233529', '00', '5325', 'b87b6357a4c7c44911cd0564bf76625bd8c682afeeda9a72a3b130c264f320dcb9f802505500f8c3cf2160b121b3bad0af6799e8c8d22478db38353b4c99d3e1'),
(17, '109000000', 'NCB', 'VNP14234019', 'ATM', 'Thanh toán giao dịch : 2068', '2023-12-11 06:55:45', '00', 'I1MTCNW2', '14234019', '00', '2068', '8b31e86a5af50365a4f9d1ff770e1299475717ba80b95b5317b6db7f6e91f19aca3dbf45af687069eae50fe198d135131623c989a272a75b6aab0516c80c8e89'),
(18, '463600000', 'NCB', 'VNP14234929', 'ATM', 'Thanh toán giao dịch : 727', '2023-12-11 14:38:23', '00', 'I1MTCNW2', '14234929', '00', '727', 'd07943ce6f7398f114c4eab1e4cd3320b5bad686352b9ce757ed6c6ce0dda8397011b4b0a3243893daf066a43aef3b2d2f1acdd014309fae4b797981adf480dd'),
(19, '218000000', 'NCB', 'VNP14235566', 'ATM', 'Thanh toán giao dịch : 7669', '2023-12-11 18:28:36', '00', 'I1MTCNW2', '14235566', '00', '7669', 'eec9df442e5269356b5e7bdc425a1f209430d0e5b4adaae93118f0f78068222b7924c97bc39bc041fbac431c647f5c1813d81eb1f53712e3dda6e9166c84ba89');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `bl-sp` (`id_sp`),
  ADD KEY `bl-tk` (`id_tk`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `kich_thuoc`
--
ALTER TABLE `kich_thuoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `sp_dm` (`id_dm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khoangoai` (`iduser`);

--
-- Chỉ mục cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `kich_thuoc`
--
ALTER TABLE `kich_thuoc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int NOT NULL AUTO_INCREMENT COMMENT '1 là user 0 là admin', AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `bl-sp` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `bl-tk` FOREIGN KEY (`id_tk`) REFERENCES `taikhoan` (`id_tk`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sp_dm` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id_dm`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `khoangoai` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id_tk`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
