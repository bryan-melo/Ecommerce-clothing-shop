USE clothes;

-- phpMyAdmin SQL
-- version 8.1
-- https://www.phpmyadmin.net/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `clothes`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Shivansh', 'Chhabra', '2020-03-28 13:07:17'),
(2, 'Bryan', 'Melo', '2020-03-28 13:07:17'), 
(3, 'Somtochi', 'Ezeh', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int NOT NULL AUTO_INCREMENT,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
  `item_color` varchar(50) NOT NULL,
  `item_description` text NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;



--
-- Inserting data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`, `item_color`, `item_description`) 
VALUES
  (1, 'Express', 'Leather Jacket', 49.99, '../assets/Products/men/image1.png', '2023-08-04 16:30:00', '#795548', "&emsp;Introducing our Premium Brown Leather Jacket: The epitome of timeless style and unmatched quality. Crafted from the finest, supple brown leather, this jacket exudes sophistication and elegance. Its sleek design features a tailored fit, accentuating your silhouette while providing superior comfort.<br><br>
&emsp;Embrace the versatility of this wardrobe staple as it effortlessly complements both casual and formal ensembles. Whether you're heading to a business meeting or a night out with friends, this premium brown leather jacket adds a touch of refinement to any outfit.<br><br>
Experience the luxurious sensation of soft leather against your skin and relish the durable construction that ensures this jacket will age gracefully over time. The meticulous attention to detail and expert craftsmanship make it a cherished addition to your collection."), 
  (2, 'Gymshark', 'Gymshark Jogger Pants', 29.99, '../assets/Products/men/image2.png', '2023-08-04 16:30:00', '#FCF3CF', "&emsp;Introducing Gymshark Men's Jogger Pants: Your ultimate fusion of style and functionality. These jogger pants are meticulously designed to elevate your workout sessions and beyond. Crafted with the finest materials, they offer superior comfort and durability for all your active pursuits.<br><br>
&emsp;Embrace the perfect fit with the tapered leg design, ensuring a modern and streamlined look. The stretchable fabric allows unrestricted movement, making them ideal for your most intense training sessions or simply lounging around.<br><br>
&emsp;Featuring a minimalist yet trendy design, Gymshark Men's Jogger Pants effortlessly blend with any athleisure outfit, giving you a confident and fashionable edge both inside and outside the gym. The iconic Gymshark logo discreetly graces the leg, representing your dedication to quality and performance."),
  (3, 'Nike', 'NIKE Jogger Pants', 29.99, '../assets/Products/men/image3.png', '2023-08-04 16:30:00', '#17202A', "&emsp;Introducing Nike Men's Jogger Pants: Where style meets performance, these joggers are a testament to Nike's commitment to excellence. Engineered to provide optimal comfort and versatility, they are the perfect addition to your active lifestyle.<br><br>
&emsp;Crafted with premium materials, these jogger pants boast a lightweight and breathable fabric, allowing you to stay cool and focused during your workouts. The innovative moisture-wicking technology keeps sweat at bay, ensuring you stay dry and comfortable, no matter how intense the session.<br><br>
&emsp;Designed with a modern and athletic fit, Nike Men's Jogger Pants offer unrestricted movement, making them ideal for running, training, or simply lounging. The elastic waistband with an adjustable drawstring provides a customized and secure fit, ensuring they stay in place throughout your activities."),
  (4, 'Shein', 'Brown Top & Bottoms', 14.99, '../assets/Products/men/image4.png', '2023-08-04 16:30:00', '#795548', "&emsp;Introducing Shein Men's Short Sleeve Button-Up and Shorts: Embrace laid-back sophistication with this stylish ensemble designed to elevate your summer wardrobe. Crafted by Shein, a symbol of trendy fashion, this set effortlessly combines comfort and fashion-forward flair.<br><br>
&emsp;The Short Sleeve Button-Up shirt boasts a contemporary and relaxed fit, making it perfect for both casual outings and warm-weather adventures. Its lightweight and breathable fabric keep you cool, while the short sleeves add a touch of versatility to your look.<br><br>
&emsp;Complementing the shirt, the Shorts offer a tailored yet comfortable fit, allowing easy movement during your day-to-day activities. The high-quality material ensures durability, making them your go-to choice for countless summer escapades."),
  (5, 'Omega', 'Streetwear Jacket', 39.99, '../assets/Products/men/image5.png', '2023-08-04 16:30:00', '#17202A', "&emsp;Introducing the Omega Men's Streetwear Jacket: Redefine urban style with this iconic jacket that seamlessly blends fashion and function. Inspired by the dynamic energy of the city, this streetwear piece from Omega is a must-have for fashion-forward individuals.<br><br>
&emsp;Crafted with meticulous attention to detail, this jacket boasts a modern silhouette that flatters all body types. The high-quality materials ensure durability, making it a reliable companion for your everyday adventures.<br><br>
&emsp;Stay on-trend with the jacket's unique design elements, featuring bold color accents and contemporary patterns. The thoughtfully placed pockets add a touch of practicality, providing ample space to carry your essentials on the go."),
  (6, 'Omega', 'Crop Top | Navy & Tan', 19.99, '../assets/Products/women/image1.png', '2023-08-04 16:30:00', '#000099', "&emsp;Introducing the Omega Women's Crop Top: Elevate your style with this chic and trendy crop top designed to make a statement. Embrace the perfect fusion of fashion and comfort, brought to you by Omega, a symbol of modern elegance.<br><br>
&emsp;Crafted with the utmost care, this crop top features a flattering silhouette that accentuates your curves and complements various body shapes. The premium fabric offers a soft and luxurious feel against your skin, ensuring all-day comfort without compromising on style.<br><br>
&emsp;Be at the forefront of fashion with the Omega Women's Crop Top, adorned with eye-catching details that set it apart from the rest. The cropped length and modern neckline add a touch of sophistication, making it a versatile piece for both casual outings and stylish evenings."),
  (7, 'COACH', 'Dress | Navy blue w/ Gold & White Accents', 29.99, '../assets/Products/women/image2.png', '2023-08-04 16:30:00', '#000099', "&emsp;Introducing the Coach Women's Dress: A timeless and elegant piece that embodies the essence of luxury and sophistication. Meticulously designed by Coach, a symbol of refined craftsmanship, this dress is a stunning addition to your wardrobe.<br><br>
&emsp;Crafted with the finest materials, this dress exudes a sense of understated glamour. The flowing silhouette drapes gracefully, flattering every figure with its tailored fit. The attention to detail is evident in every stitch, ensuring a flawless and comfortable wearing experience.<br><br>
&emsp;With its versatile design, the Coach Women's Dress effortlessly transitions from day to night, making it a perfect choice for various occasions. From a sophisticated office look to an enchanting evening affair, this dress will make you the center of attention."),
  (8, 'Chanel', 'Short Sleeve Top & Pants', 34.99, '../assets/Products/women/image3.png', '2023-08-04 16:30:00', '#FCF3CF', "&emsp;Introducing the Chanel Women's Short Sleeve Top and Pants: A true embodiment of elegance and sophistication, this exquisite ensemble from Chanel redefines luxury fashion. Immerse yourself in the world of haute couture with this stunning set, meticulously crafted to elevate your style to new heights.<br><br>
&emsp;The Short Sleeve Top exudes timeless charm with its refined silhouette and delicate details. The luxurious fabric drapes gracefully, offering a perfect balance of comfort and allure. The iconic Chanel logo discreetly graces the design, representing the epitome of chic and timeless style.<br><br>
&emsp;Complementing the top, the Pants boast a tailored fit that effortlessly flatters your figure. The expert craftsmanship ensures a flawless look and unparalleled comfort. Whether you're attending a high-profile event or enjoying a casual day out, these pants exude versatility and sophistication."),
  (9, 'Shein', 'Dress | White w/Black Accents', 9.99, '../assets/Products/women/image4.png', '2023-08-04 16:30:00', '#FCF3CF', "&emsp;Introducing the Shein Women's Dress: Embrace comfort and style as you slip into the perfect nightwear ensemble. This exquisite night dress from Shein is designed to provide a blissful night's sleep while keeping you effortlessly chic.<br><br>
&emsp;Crafted from soft and breathable fabrics, this night dress gently caresses your skin, ensuring a cozy and relaxing experience all night long. The flowing silhouette allows for unrestricted movement, making it an ideal choice for lounging around or getting a good night's rest.<br><br>
&emsp;Indulge in the subtle yet alluring details of this night dress. Delicate lace accents and tasteful embellishments add a touch of femininity, creating a look that's both graceful and captivating."),
  (10, 'Omega', 'Elegant Dress', 24.99, '../assets/Products/women/image5.png', '2023-08-04 16:30:00', '#F1C40F', "&emsp;Introducing the Omega Women's Elegant Dress: An exquisite masterpiece that exudes timeless sophistication and refined elegance. Meticulously crafted by Omega, this dress is a symbol of grace and style, making it the perfect choice for special occasions and memorable events.<br><br>
&emsp;Crafted with the finest materials, this elegant dress drapes beautifully and feels luxurious against your skin. The flowing silhouette flatters all body types, creating an ethereal and enchanting look that captures hearts.<br><br>
&emsp;Immerse yourself in the enchanting details of this dress. Delicate embellishments and tasteful accents adorn the design, adding a touch of glamour and elevating your style to new heights. The expert tailoring ensures a flawless fit, making you feel confident and radiant as you walk into any room."),
  (11, 'Carters', 'Graphic Shirt & Shorts', 19.99, '../assets/Products/kids/image1.png', '2023-08-04 16:30:00', '#FCF3CF', "&emsp;Introducing Carter's Kids Graphic Shirt & Shorts: A playful and stylish outfit designed to let your child's personality shine. Crafted by Carter's, a trusted name in children's fashion, this delightful set is perfect for fun-filled adventures and comfortable playtime.<br><br>
&emsp;The Graphic Shirt boasts vibrant and eye-catching designs that capture the imagination. From cute animal characters to cool geometric patterns, these playful graphics add a touch of excitement to your child's wardrobe. Crafted with soft and breathable fabric, the shirt ensures all-day comfort, allowing your little one to explore the world with ease.<br><br>
&emsp;Complementing the shirt, the Shorts offer a perfect blend of style and functionality. With an elastic waistband and a comfortable fit, these shorts are ideal for active play and unrestricted movement. The durable fabric can withstand hours of fun while maintaining its vibrant colors and shape."),
  (12, 'Carters', 'Blue & Black Outfit', 14.99, '../assets/Products/kids/image2.png', '2023-08-04 16:30:00', '#3F51B5', "&emsp;Introducing Carter's Kids Blue & Black Outfit: A stylish and trendy ensemble designed to keep your little one looking cool and confident. Crafted by Carter's, a renowned name in children's fashion, this outfit is a perfect balance of comfort and contemporary style.<br><br>
&emsp;The Blue & Black Outfit features a versatile combination of colors, with a chic mix of blue and black. The shirt boasts a modern design with subtle details, while the shorts exude a sporty and fashionable vibe. The contrasting colors create a striking and eye-catching look that's sure to turn heads.<br><br>
&emsp;Crafted with soft and high-quality materials, this outfit ensures your child stays comfortable throughout the day. The breathable fabric keeps them cool during active play, making it an ideal choice for both indoor and outdoor adventures."),
  (13, 'Carters', 'Black & Red Outfit', 12.99, '../assets/Products/kids/image3.png', '2023-08-04 16:30:00', '#C62828', "&emsp;Introducing Carter's Kids Black & Red Outfit: A bold and stylish ensemble that promises to make your little one stand out in the crowd. Created by Carter's, a trusted name in children's fashion, this outfit combines comfort, durability, and contemporary design for the trendiest kids on the block.<br><br>
&emsp;The Black & Red Outfit features a dynamic contrast of colors, with a striking combination of black and red. The shirt boasts a sleek and modern design with attention-grabbing details, while the shorts exude a sporty and fashion-forward vibe. This eye-catching ensemble ensures your child makes a confident statement wherever they go.<br><br>
&emsp;Crafted with soft and high-quality materials, this outfit ensures your child stays comfortable all day long. The breathable fabric keeps them cool during active play, making it perfect for indoor and outdoor adventures alike."),
  (14, 'Carters', 'White & Green Outfit', 19.99, '../assets/Products/kids/image4.png', '2023-08-04 16:30:00', '#00695C', "&emsp;Introducing Carter's Kids White & Green Outfit: A fresh and charming ensemble designed to bring a touch of nature's vibrancy to your child's wardrobe. Brought to you by Carter's, a renowned name in children's fashion, this outfit embodies comfort, style, and a delightful splash of color.<br><br>
&emsp;The White & Green Outfit showcases a delightful combination of colors, with a serene blend of white and green. The shirt boasts a playful and modern design, while the shorts exude a fun and relaxed vibe. This captivating ensemble adds a cheerful pop to your child's everyday look.<br><br>
&emsp;Crafted with premium, soft materials, this outfit ensures your child stays cozy and comfortable throughout their adventures. The breathable fabric keeps them cool and at ease during active play, making it ideal for indoor and outdoor activities."),
  (15, 'Carters', 'Light Blue Dress', 9.99, '../assets/Products/kids/image5.png', '2023-08-04 16:30:00', '#90CAF9', "&emsp;Introducing Carter's Kids Light Blue Dress: An enchanting and charming dress that captures the essence of youthful elegance. Crafted by Carter's, a trusted name in children's fashion, this dress is a delightful addition to your child's wardrobe.<br><br>
&emsp;The Light Blue Dress features a soft and delicate shade of blue that embodies a sense of serenity and grace. The dress boasts a timeless design with intricate details, exuding sophistication while maintaining a playful and youthful charm.<br><br>
&emsp;Crafted with premium materials, this dress offers unparalleled comfort, allowing your child to move and play with ease. The breathable fabric keeps them cool and comfortable during both formal occasions and everyday adventures."),
  (16, 'COACH', 'Oversized Glasses', 14.99, '../assets/Products/accessories/image1.png', '2023-08-04 16:30:00', '#FAFAFA', "&emsp;Introducing COACH Oversized Glasses: Elevate your eyewear game with these striking and stylish oversized glasses from the iconic brand COACH. Designed to make a bold statement, these glasses exude contemporary charm while offering unmatched functionality.<br><br>
&emsp;Crafted with precision and attention to detail, these oversized glasses feature a modern and sophisticated design that complements a variety of face shapes. The high-quality materials ensure durability and long-lasting wear, making them a timeless addition to your eyewear collection.<br><br>
&emsp;With their large frames, these glasses not only elevate your fashion quotient but also provide optimal coverage, shielding your eyes from harmful rays and reducing eye strain during prolonged screen time."),
  (17, 'Apple', 'iPhone 11 | 12 | 13 Phone Case', 9.99, '../assets/Products/accessories/image2.png', '2023-08-04 16:30:00', '#17202A', "&emsp;Introducing the Apple iPhone 11 | 12 | 13 Phone Case: The ultimate fusion of style, protection, and functionality for your cherished iPhone. This premium phone case is meticulously designed to safeguard your device while enhancing its sleek aesthetics.<br><br>
&emsp;Crafted from high-quality materials, this phone case offers robust protection against everyday bumps, scratches, and minor drops. The precision-engineered design ensures a perfect fit, allowing easy access to all buttons and ports without compromising on protection.<br><br>
&emsp;Experience the seamless compatibility of this phone case with Apple iPhone 11, 12, and 13 models. Whether you have the latest iPhone or a previous version, rest assured that this case has been tailor-made to meet Apple's high standards."),
  (18, 'Lids', 'New York Hat | Tan', 19.99, '../assets/Products/accessories/image3.png', '2023-08-04 16:30:00', '#BCAAA4', "&emsp;Introducing the Lids New York Hat: A timeless symbol of urban style and hometown pride. This iconic hat from Lids captures the essence of the bustling streets of New York, infusing every wear with a sense of contemporary charm.<br><br>
&emsp;Crafted with quality materials, this hat offers both comfort and durability, making it your go-to choice for any adventure or casual outing. The classic design and expert tailoring ensure a perfect fit, making this hat a must-have addition to your hat collection.<br><br>
&emsp;Embrace the spirit of the city that never sleeps with the Lids New York Hat. The stylish logo discreetly adorns the front, representing your love for New York and its vibrant energy."),
  (19, 'Omega', 'Yellow Watch w/Bird Design', 14.99, '../assets/Products/accessories/image4.png', '2023-08-04 16:30:00', '#FFF59D', "&emsp;Introducing the Omega Yellow Watch with Bird Design: A striking timepiece that seamlessly marries sophistication and artistic allure. This exquisite watch from Omega captures the essence of nature's beauty, showcasing a unique and captivating bird design that sets it apart from the rest.<br><br>
&emsp;Crafted with precision and passion, this yellow watch boasts a vibrant and attention-grabbing hue that adds a touch of cheer to your wrist. The expert craftsmanship ensures a perfect balance of durability and style, making it a statement piece that stands the test of time.<br><br>
&emsp;The watch's dial features a stunning bird design, delicately etched to showcase the grace and elegance of these majestic creatures. Every glance at the watch reveals a new facet of its captivating design, adding a touch of artistry to your timekeeping."),
  (20, 'Tiffany & Co.', 'Custom Watch', 49.99, '../assets/Products/accessories/image5.png', '2023-08-04 16:30:00', '#283747', "&emsp;Introducing the Tiffany & Co. Custom Made Men's Watch: A timepiece that goes beyond luxury – it becomes an expression of your personal style. Crafted with utmost attention to detail by the renowned brand Tiffany & Co., this watch is a testament to fine craftsmanship and elegance.<br><br>
&emsp;Indulge in the exclusivity of a custom-made watch, tailored to your preferences and designed to embody your unique personality. From the dial to the strap, every element is meticulously chosen to reflect your taste and passion for exquisite timepieces.<br><br>
&emsp;With a sophisticated and timeless design, this men's watch exudes refinement and sophistication. The expertly crafted case and dial showcase the signature Tiffany & Co. elegance, while the precision movement ensures accurate timekeeping.");

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL,
  `item_size` varchar(10),
  PRIMARY KEY (`cart_id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------