DROP TABLE IF EXISTS booking;

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(20) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `Car_id` int(10) NOT NULL,
  `PickUpDate` date NOT NULL,
  `ReturnDate` date NOT NULL,
  `Confirmation_no` int(11) NOT NULL,
  `Identity` text NOT NULL,
  `Receipt` text NOT NULL,
  `Total_price` decimal(12,0) NOT NULL,
  `status` varchar(11) NOT NULL,
  `registrered_date` date NOT NULL,
  `Driver_id` int(11) NOT NULL,
  `self_drive` varchar(10) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4;

INSERT INTO booking VALUES("38","selestyle@gmail.com","09758958","23","2022-07-14","2022-07-21","43976","Cu6WxIiW8AA5JxW.jpg","Dy96SLnXcAE59k0.jpg","7560","Confirmed","2022-07-14","11","no");
INSERT INTO booking VALUES("39","yosef@gmail.com","09452635","19","2022-07-14","2022-07-20","0","images (1).jfif","images (3).jfif","8400","Canceled","2022-07-14","0","yes");
INSERT INTO booking VALUES("40","yosef@gmail.com","09758958","21","2022-07-15","2022-07-20","44215","images (1).jfif","images (3).jfif","7200","Returning","2022-07-15","0","yes");
INSERT INTO booking VALUES("41","bewket@gmail.com","09451236","25","2022-07-15","2022-07-17","0","blogger-image--347434802.jpg","images (3).jfif","3450","requested","2022-07-15","0","no");
INSERT INTO booking VALUES("42","beket19@gmail.com","0960032467","25","2022-07-22","2022-07-28","0","images (4).jfif","images (1).jfif","8050","Canceled","2022-07-15","0","no");
INSERT INTO booking VALUES("43","abebe@gmail.com","09758958","27","2022-07-15","2022-07-20","0","Ezx4R10VoAATSFJ.jpg","Dy96SLnXcAE59k0.jpg","10200","Returned","2022-07-15","29","no");


DROP TABLE IF EXISTS cars;

CREATE TABLE `cars` (
  `car_id` int(10) NOT NULL AUTO_INCREMENT,
  `CarBrand` varchar(10) NOT NULL,
  `PlateNumber` varchar(10) NOT NULL,
  `CarName` varchar(10) NOT NULL,
  `CarColor` varchar(10) NOT NULL,
  `PricePerDay` decimal(10,0) NOT NULL,
  `FuelType` varchar(10) NOT NULL,
  `ModelOfYear` varchar(10) NOT NULL,
  `SeatCapacity` int(5) NOT NULL,
  `Image` text NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

INSERT INTO cars VALUES("19","TOYOTA","Available","v8","black","1200","Kerosene","","33","2017-JEEP-GRAND-CHEROKEE-used-2813-135559-1.jpg","Available");
INSERT INTO cars VALUES("20","TOYOTA","B-ET-34222","Rav4","Red","1200","Kerosene","2022","6","a9ef735bf06fe7508ace5fe33a7ad57a.webp","Unavailabl");
INSERT INTO cars VALUES("21","TOYOTA","Available","Jeep","black","1200","Kerosene","","10","1994_land_rover_range_rover_for-sale.jpg","Unavailabl");
INSERT INTO cars VALUES("22","VertZ","Available","Corrolla","black","1233","Gas","","7","2113.jpg","Available");
INSERT INTO cars VALUES("23","Jeep","Available","Patrol","black","800","Kerosene","","6","images (5).jfif","Available");
INSERT INTO cars VALUES("24","Toyota","ET-asdf-34","Rav4","Siliver","1100","Natural Ga","2007","6","210925_volvo_xc60.jpg","Available");
INSERT INTO cars VALUES("25","TOYOTA","AMA-212212","Land Cruiz","white","950","Petroleum ","2017","11","3961a34afc47d56106a55c6a4bebf101--land-rover-discovery-hilux.jpg","Available");
INSERT INTO cars VALUES("26","TOYOTA","ET-5657-er","pickup","white","785","Petroleum ","2022-07","15","toyota-minibus-high-roof-2008-model-cars-for-sale-price-in-addis-ababa-Ethiopia-06-25-2018-10-59-36-900000nD03.jpg","Available");
INSERT INTO cars VALUES("27","TOYOTA","AA-2342352","LandCriuze","white","1500","Bio-Diesel","1233366662","8","images (4).jfif","Available");
INSERT INTO cars VALUES("28","TOYOTA","Available","Yaris","black","600","Petroleum ","","4","73720dcc6120c802919a8bebebdd14cf.jpg","Available");


DROP TABLE IF EXISTS customers;

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `Fname` varchar(12) NOT NULL,
  `Lname` varchar(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `photo` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Birth_date` date NOT NULL,
  `address` varchar(20) NOT NULL,
  `zip` varchar(11) NOT NULL,
  `question1` varchar(11) NOT NULL,
  `question2` varchar(11) NOT NULL,
  `question3` varchar(11) NOT NULL,
  `reistered_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

INSERT INTO customers VALUES("26","alex@gmail.com","468ffffaaec2db30fa8f67d11b0c6246","Alemu","Zeleke","0960032467","5008d1cf-9e1a-44bf-bb57-55497d322524.jfif","Female","1964-06-12","Addis Ababa","1000","Dog","besah","12345","2022-07-12");
INSERT INTO customers VALUES("28","selestyle@gmail.com","8017d33518fc52412ae39bfca3a8bc8e","solomon","yeshiwas","0960032467","CbeMoxRUkAAn7G3.jpg","male","1962-07-14","demark","1000","app","bi","broth","2022-07-13");
INSERT INTO customers VALUES("29","yosef@gmail.com","864cae5981d9089ae1e028bf61fe07cb","yosef","azanaw","09545444554","jo.jpg","male","1964-07-14","Gondar","1000","dog","alemu","1221","2022-07-14");
INSERT INTO customers VALUES("30","bewket@gmail.com","181ac11948d26a4623cf002e565a94d3","Bewket","Mekonnen","096231548","16451255007747.jpg","male","2007-06-15","Yjuve","1000","1","1","1","2022-07-15");
INSERT INTO customers VALUES("31","bewke4t@gmail.com","0980817b6a7893a83ba02ed178d13aa2","berrg","nnmmj","0960032467","Post_Fiji_Sample_Receipt.png","male","2022-07-27","Bahirdar","1000","dog","Kassa","1313","2022-07-15");
INSERT INTO customers VALUES("32","beket19@gmail.com","0980817b6a7893a83ba02ed178d13aa2","Bewket","Mekonnen","0960032467","images (5).jfif","male","2022-07-20","yejubie","1000","dog","Kassa","1919","2022-07-15");
INSERT INTO customers VALUES("33","abebe@gmail.com","995cd87680d82cec773901c308c25166","abebe","lema","0960032467","jo.jpg","male","1968-06-15","Bahirdar","1000","dog","elbe","23qwe","2022-07-15");


DROP TABLE IF EXISTS driver;

CREATE TABLE `driver` (
  `Driver_id` int(10) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `assigned_car` varchar(10) NOT NULL,
  `photo` varchar(10) NOT NULL,
  `phone` int(11) NOT NULL,
  `daily_payment` decimal(12,0) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`Driver_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO driver VALUES("24","aman","23","maxresdefa","910024051","200","free");
INSERT INTO driver VALUES("28","hewan","","1645125500","9215478","200","free");
INSERT INTO driver VALUES("29","Bewket3","27","4728.webp","945455455","200","free");


DROP TABLE IF EXISTS feedback;

CREATE TABLE `feedback` (
  `fed_id` int(5) NOT NULL AUTO_INCREMENT,
  `Email` varchar(10) NOT NULL,
  `Message` text NOT NULL,
  `DateOfSend` date NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`fed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO feedback VALUES("11","abe@gmail.","Actually i am mot intersted at all","2022-07-12","Unread");
INSERT INTO feedback VALUES("12","yon@gmail.","I am satisfied at your service","2022-07-14","Unread");
INSERT INTO feedback VALUES("13","dev1@gmail","Wow Greate service","2022-07-14","Unread");


DROP TABLE IF EXISTS notice;

CREATE TABLE `notice` (
  `notice_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(12) NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

INSERT INTO notice VALUES("4","2022-06-01"," \ndsvsdsvsdv","");
INSERT INTO notice VALUES("5","2022-06-15"," \nryetrfgjdfjrdfjrdfj","");
INSERT INTO notice VALUES("6","2022-06-18"," \ntjyiy8987","");
INSERT INTO notice VALUES("7","2022-06-18"," rf4ff\n","");
INSERT INTO notice VALUES("8","2022-06-22"," \nthe organization is now good","");
INSERT INTO notice VALUES("9","2022-06-24"," \n/lasdlkasdp;eadspqo[daskpoqkwdao[qkwdkpqekdpewofwefiwpoeoqpedopqoedopqeodpoqedkeqpdoqepkdopeoqdopweopdweodweofwrpo34t34[3tp53]tl]53","");
INSERT INTO notice VALUES("10","2022-07-01"," \nwesfwefwe","Unread");
INSERT INTO notice VALUES("11","2022-07-01"," \naasdfghjklkjjdsaSDFHGHJKJKGasdfghjkjhgfdsaasdfghkjhgsadfghewerrtyutuyiuuyeretryuyiuofdgfgjhsasdfdgfhhjsdfdgfhjhjhsdfdsfhgjhkjzxcvbnmnzxcvbnnddfhghdfhdfhfghfg\ndfhgfhgfhfghfghgfh","Unread");
INSERT INTO notice VALUES("12","2022-07-01"," \n","Unread");
INSERT INTO notice VALUES("13","2022-07-01","","Unread");
INSERT INTO notice VALUES("14","2022-07-01","Enter text here...Sdf,jhgfdsdafdgfdhghgdf","Unread");
INSERT INTO notice VALUES("15","2022-07-08","To day we will have a meeting ","Unread");
INSERT INTO notice VALUES("16","2022-07-08","The meeting is just delayed for the time being \ndue to unkown reason so , ","Unread");
INSERT INTO notice VALUES("17","2022-07-09","The three major encryption types are • Data Encryption Standard – DES • 2DES, 3DES • Advanced Encryption Standard – AES • AES-128 encrypts blocks of a 128-bit size • AES-192 encrypts blocks of a 192-bit size • AES-256 encrypts blocks of a 256-bit size • Rivest-Shamir-Adleman – RSA • Diffie-Hellman - DH • Blowfish • Twofish • Format Preserving ","Unread");
INSERT INTO notice VALUES("18","2022-07-09","dfgedffsdfsdfsfffffffffffffffffffffffffffffffvsdvv\ndfsdfds\nfdfdfd\n\n\n\n\n\nv\nsdfdsfd","Unread");
INSERT INTO notice VALUES("19","2022-07-09","sdsfdfsdfds","Unread");
INSERT INTO notice VALUES("20","2022-07-09","nm","Unread");
INSERT INTO notice VALUES("21","2022-07-09","With over 24 years of practice, Chet uses his vast experiences to assist his clients in the most efficient manner possible. Chet is a magna cum laude graduate of University of Miami School ","Unread");
INSERT INTO notice VALUES("22","2022-07-13","The meeting is on 10:00pm","Unread");
INSERT INTO notice VALUES("23","2022-07-14","There is A meeting tomorrow so \nNo anybody need to absent ","Unread");


DROP TABLE IF EXISTS report;

CREATE TABLE `report` (
  `report_id` int(10) NOT NULL AUTO_INCREMENT,
  `Total_birr` decimal(11,0) NOT NULL,
  `no_of_books` int(12) NOT NULL,
  `no_of_returned` int(22) NOT NULL,
  `no_of_available_car` int(22) NOT NULL,
  `no_of_registrered_customer` int(12) NOT NULL,
  `canceled_books` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4;

INSERT INTO report VALUES("48","16584","12","0","5","4","11","2022-07-12");
INSERT INTO report VALUES("49","24891","7","0","4","2","5","2022-07-13");
INSERT INTO report VALUES("52","32451","8","0","6","2","6","2022-07-14");
INSERT INTO report VALUES("53","32451","8","0","9","2","6","2022-07-14");
INSERT INTO report VALUES("54","40851","9","0","9","3","7","2022-07-14");
INSERT INTO report VALUES("55","34917","5","0","8","4","2","2022-07-15");
INSERT INTO report VALUES("56","34917","5","0","8","4","2","2022-07-15");
INSERT INTO report VALUES("57","44860","6","0","7","7","2","2022-07-15");


DROP TABLE IF EXISTS useraccount;

CREATE TABLE `useraccount` (
  `Acc_id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `email` varchar(12) NOT NULL,
  `Role` varchar(10) NOT NULL,
  `Statues` varchar(11) NOT NULL,
  PRIMARY KEY (`Acc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

INSERT INTO useraccount VALUES("1","admin","e64b78fc3bc91bcbc7dc232ba8ec59e0 ","admin@gmail.","system_adm","Active");
INSERT INTO useraccount VALUES("20","mebratu","52af1c55ac8566263cbf795087567a54","mebre@gmail.","Manager","Active");
INSERT INTO useraccount VALUES("21","Solomon","8017d33518fc52412ae39bfca3a8bc8e","sol@gail.com","Lease_Offi","Active");
INSERT INTO useraccount VALUES("22","Habtamu","150677a8e026edc24a9af0a8cb1e1fd5","habte@gmail.","Driver","Active");
INSERT INTO useraccount VALUES("23","abebe","de7247feb107e5f829174c87cac0ae76","abe@gmail.co","Lease_Offi","Active");
INSERT INTO useraccount VALUES("24","aman","6f458c8b0dee71aed925398fab341a44","aman@gmail.c","Driver","Active");
INSERT INTO useraccount VALUES("25","yosef","864cae5981d9089ae1e028bf61fe07cb","yos@gmail.co","Manager","Active");
INSERT INTO useraccount VALUES("26","bewket1","181ac11948d26a4623cf002e565a94d3","bewke@gmail.","Driver","Active");
INSERT INTO useraccount VALUES("27","yosef1","d96500ba3a0cdaea84607bcea3c3ea38","yosi34@gmail","Manager","Active");
INSERT INTO useraccount VALUES("28","hewan","1225209bb6e70aa2f4fcf69bfe0419c3","jojo@gmail.c","Driver","Active");
INSERT INTO useraccount VALUES("29","Bewket3","181ac11948d26a4623cf002e565a94d3","bewket1@gmai","Driver","Active");
INSERT INTO useraccount VALUES("30","mahder","b432e6865445709e638f685fc576e0f2","mahi12@gmail","Manager","Active");


