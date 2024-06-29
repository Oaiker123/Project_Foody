-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2023 lúc 08:02 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `img` varchar(200) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. Chuyển khoản trự tiếp\r\n2.Chuyển khoản\r\n3.Thanh toán online',
  `ngaydathang` varchar(50) NOT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0.Đơn hàng mới\r\n1.Đang xử lý\r\n2.Đang giao hàng\r\n3.Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(113, 32, 'oai2004', '124/49', '0123456789', 'tranbaoai2004@gmail.com', 0, '10:37:32am 08/12/2023', 297000, 3, NULL, NULL, NULL),
(114, 2, 'admin', '124/49 Hòe Thị', '0353712030', 'oaitbph36440@fpt.edu.vn', 0, '10:45:31am 08/12/2023', 399000, 4, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(49, 'Good!', 2, 44, '07:25:12am 07/12/2023'),
(50, 'Hàng mẫu mã đẹp , đúng mô tả!', 2, 43, '05:25:05pm 07/12/2023'),
(51, 'Đẹp Lắm!', 2, 43, '05:25:09pm 07/12/2023'),
(52, 'Hàng mẫu mã đẹp , đúng mô tả!', 2, 39, '06:59:52pm 07/12/2023'),
(53, 'Balo Xin Nha !', 2, 39, '07:00:56pm 07/12/2023'),
(54, 'Hàng mẫu mã đẹp, đúng mô tả!', 2, 42, '08:16:37am 08/12/2023'),
(55, 'Good!', 32, 44, '10:34:44am 08/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(174, 32, 44, '1200bzhspm-1200x676.jpg', 'Pizza hải sản', 99000, 3, 198000, 113),
(175, 2, 42, 'b939b13df0ca02945bdb.jpg', 'Pizza gà phô mai', 150000, 2, 150000, 114),
(176, 2, 44, '1200bzhspm-1200x676.jpg', 'Pizza hải sản', 99000, 1, 99000, 114);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(22, 'Đồ ăn Hàn'),
(23, 'Đồ ăn vặt'),
(25, 'Mì'),
(26, 'Combo Khổng Lồ'),
(28, 'Pizza');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL DEFAULT 10.2,
  `price_old` double NOT NULL DEFAULT 10.2,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `price_old`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(21, 'Tobokki phô mai', 60000, 89000, 'tbkp1.jpg', 'Dành cho những tín đồ thích sự dai của phô mai, Tobokki phô mai kéo sợi cùng với nước sốt đậm vị Hàn Quốc chắc chắn sẽ không làm mọi người thất vọng.', 9, 22),
(22, 'Gà sốt cay', 69000, 99000, 'gsc4.jpg', 'Món gà rán sốt cay có lớp vỏ bên ngoài giòn tan, vị cay cay và độ mặn ngọt vừa phải cùng với thịt gà mềm ngọt bên trong chắc hẳn sẽ là một món ăn hoàn hảo.', 5, 22),
(23, 'Mỳ trộn sốt cay', 49000, 69000, 'mth4.jpg', 'Mì trộn Hàn Quốc ngày nay đã trở nên phổ biến và được ưa chuộng không chỉ tại Hàn Quốc mà còn trên toàn thế giới. “Cơn sốt” mì trộn cũng khiến giới trẻ Việt Nam mê mẩn và đổ xô đi trải nghiệm, thưởng thức', 4, 22),
(24, 'Kim bắp ', 39000, 69000, 'kb3.jpg', 'Kim bắp là một trong những món ăn Hàn Quốc dễ làm và được rất nhiều người ưu chuộng. Hãy cùng meila thử món ngon này nhé.', 45, 22),
(25, 'Mỳ ý sốt kem', 49000, 69000, 'OIP.jpg', 'Mỳ ý sốt kem được nhiều người yêu thích hơn cả. Được làm từ bột mì nên sợi mỳ ý dai dai, giòn giòn ngon miệng chắc chắn sẽ làm quý khách hài lòng.', 6, 25),
(26, 'Mỳ ý sốt bò bằm', 59000, 79000, 'hinh-mon-mi-y.jpg', 'Mì Ý sốt bò băm hay còn gọi là Spaghetti, là món ăn ngon và phổ biến, dùng kèm với hỗn hợp sốt cà chua và thịt bò bằm có nguồn gốc từ Italia.', 5, 25),
(27, 'Mỳ ý sốt kem nấm.', 49000, 79000, 'msk1.jpeg', 'Là món ăn ngon, trong đó mùi thơm của thịt hun khói quyện với vị chua béo hài hòa của xốt Mayonnaise và vị ngọt của các loại nấm tạo hương vị rất lạ miệng, chứa đầy đủ thành phần dinh dưỡng cho cơ thể.', 23, 25),
(28, 'Mỳ ý sốt cà chua ', 49000, 69000, 'msc3.jpg', 'Mì Ý sốt cà chua với điều đặc trưng nhất giúp chúng ta phân biệt mì Ý với các loại mì của nước khác chính là nhờ bột mì Semolina – được làm từ loại lúa mì cứng nhất, có màu hổ phách.', 7, 25),
(29, 'Hot dog', 99000, 139000, 'hd4.jpg', 'Hot dog - đồ ăn vặt được mọi người yêu thích, cắn ngập mồm với chiếc hot dog to bự.', 5, 23),
(30, 'Bánh gà ', 69000, 119000, 'bg4.jpg', 'Bánh gà từ lâu đã trở thành món ăn vặt đường phố quen thuộc của nhiều thế hệ học sinh, sinh viên khi đáp ứng được đầy đủ 3 tiêu chí ngon – bổ – rẻ.', 173, 23),
(31, 'Mẹt viên chiên', 69000, 99000, 'met3.jpeg', 'Mẹt viên chiên nhà Melia với phong phú các mặt hàng được các bạn trẻ rất yêu thích.', 343, 23),
(32, 'Nem chua rán 2.0', 59000, 89000, 'nc1.jpg', 'Nem chua rán có thể tạo ra được nhiều món ăn ngon. Trong đó món nem chua rán được nhiều người yêu thích bởi hương vị độc đáo, dễ ăn, thích hợp với nhiều người.', 96, 23),
(37, 'Combo Pizza Tình Yêu', 99000, 139000, 'Combo-1.jpg', '   Một pizza cỡ vừa 1 mì ý 2 COCA cỡ nhỏ ,Jam bông, dứa, sốt cà chua, pho mai.\r\n- Áp dụng 1 e-code/hóa đơn \r\n- Áp dụng chung các chương trình khuyến mãi, combo giảm giá, ưu đãi thẻ ngân hàng \r\n- Không áp dụng cho Pizza Chất 89.000VND và các sản phẩm thuộc Menu Thật Chất', 9, 26),
(38, 'Combo Gà Rán Sốt Siêu Cay', 99000, 149000, 'tải xuống.jpg', '      Hai miếng gà sốt cay  + khoai tây + nước gà rán sốt cay là một món gà thơm ngon, hấp dẫn và cách làm vô cùng đơn giản, ai ăn cũng mê.\r\nÁp dụng 1 e-code/hóa đơn \r\nÁp dụng chung các chương trình khuyến mãi, combo giảm giá, ưu đãi thẻ ngân hàng ', 45, 26),
(39, 'Combo Mẹt cá viên chiên Sushi', 88000, 146000, 'file_restaurant_photo_ysbh_16218-5e09d0ba-210524132429.jpeg', 'Tụ tập chiến thả phanh MẸT VIÊN CHIÊN đầy ụ chỉ với 88k duy nhất tại FOODY.\r\nÁp dụng 1 e-code/hóa đơn \r\nÁp dụng chung các chương trình khuyến mãi, combo giảm giá, ưu đãi thẻ ngân hàng ', 20, 26),
(40, 'Combo mì Ý sốt Bò Bằm', 69000, 99000, '317217-set-chao-bit-tet-body (3).jpg', 'Phần ăn chính gồm 1 mỳ ý . Phần ăn phụ gồm 1 coca size vừa giúp tiết kiệm hơn.\r\nÁp dụng 1 e-code/hóa đơn.\r\nÁp dụng chung các chương trình khuyến mãi, combo giảm giá, ưu đãi thẻ ngân hàng.', 5, 26),
(41, 'Pizza hawaii', 100000, 120000, 'pizza-xuc-xich-pho-mai-vuong_50w.jpg', 'Mang hương vị của Hawaii về căn bếp nhà bạn với chiếc pizza Hawaii thơm nức mũi.', 11, 28),
(42, 'Pizza gà phô mai', 150000, 175000, 'b939b13df0ca02945bdb.jpg', 'Càng ăn, càng nghiện với món pizza gà phô mai cực kỳ thơm ngon, hấp dẫn này.', 43, 28),
(43, 'Pizza bắp phô mai', 89000, 110000, '419_cach_lam_pizza_bang_noi_chien_khong_dau_2.jpg', 'Một chiếc pizza bắp phô mai vàng tươi, thơm ngây ngất chính là “chân ái” của các tín đồ phô mai đó.', 30, 28),
(44, 'Pizza hải sản', 99000, 125000, '1200bzhspm-1200x676.jpg', 'Ngon mê ly với món pizza hải sản đầy ụ nhân này. Mùi phô mai nướng lên hòa lẫn với mùi thơm của hải sản, các loại rau củ sẽ khiến bạn phải phát thèm.', 57, 28);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(2, 'admin', 'Oai2004@', 'oaitbph36440@fpt.edu.vn', '124/49 Hòe Thị', '0353712030', 1),
(32, 'oai2004', '1', 'tranbaoai2004@gmail.com', '124/49', '0123456789', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnpay`
--

CREATE TABLE `vnpay` (
  `id` int(10) NOT NULL,
  `vnp_Amount` varchar(50) NOT NULL,
  `vnp_BankCode` varchar(50) NOT NULL,
  `vnp_BankTranNo` varchar(50) NOT NULL,
  `vnp_CardType` varchar(50) NOT NULL,
  `vnp_OrderInfo` varchar(50) NOT NULL,
  `vnp_PayDate` varchar(50) NOT NULL,
  `vnp_ResponseCode` varchar(50) NOT NULL,
  `vnp_TmnCode` varchar(50) NOT NULL,
  `vnp_TransactionNo` varchar(50) NOT NULL,
  `vnp_TransactionStatus` varchar(50) NOT NULL,
  `vnp_TxlRef` varchar(50) NOT NULL,
  `vnp_SecureHash` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp_bl` (`idpro`),
  ADD KEY `id_user_bl` (`iduser`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bill` (`idbill`),
  ADD KEY `id_sanpham` (`idpro`),
  ADD KEY `id_user` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dm_sp` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `id_sp_bl` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `id_user_bl` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `id_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `id_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `id_dm_sp` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
