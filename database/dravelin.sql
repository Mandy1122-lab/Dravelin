-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2024 年 06 月 20 日 12:05
-- 伺服器版本： 8.0.36
-- PHP 版本： 8.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `dravelin`
--

-- --------------------------------------------------------

--
-- 資料表結構 `actor`
--

CREATE TABLE `actor` (
  `a_id` int NOT NULL COMMENT '編號',
  `a_name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '名稱',
  `a_pic` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '圖片'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='演員';

--
-- 傾印資料表的資料 `actor`
--

INSERT INTO `actor` (`a_id`, `a_name`, `a_pic`) VALUES
(1, '許光漢', 'https://img.myvideo.net.tw/images/directorActor/70/S0003370.png'),
(2, '柯佳嬿', 'https://cdn.bella.tw/indeximage/DTLrHhmWqbd1RDYygO6k5aNnQv2keRQthfwz4V6I.jpeg'),
(3, '温昇豪', 'https://tavis.tw/Upload/6488b340-7583-40ef-aea5-768dadb76f0f.jpg'),
(4, '王淨', 'https://img.myvideo.net.tw/images/directorActor/81/S0001881.png'),
(5, '陳意涵', 'https://i.epochtimes.com/assets/uploads/2019/09/1909240748562384-450x300.jpg'),
(6, '劉以豪', 'https://s.yimg.com/ny/api/res/1.2/6.qgkIeDxVLNicKmlZdEpQ--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTUxMg--/https://68.media.tumblr.com/da0cddd2bddb51eee38fc07d80783381/tumblr_inline_opfa2eEJSf1usgltf_1280.jpg'),
(7, '范冰冰', '/RES/G1_1.jpg'),
(8, '釋行宇', '/RES/G1_2.jpg'),
(9, '陳偉霆', '/RES/G1_4.jpg'),
(10, '於和偉', '/RES/G1_5.jpg'),
(11, '黃軒', '/RES/G1_6.jpg'),
(12, '王耀慶', '/RES/G1_7.jpg'),
(13, '陳喬恩', '/RES/G1_9.jpg'),
(14, '黃秋生', '/RES/G1_10.jpg'),
(15, '崔振赫', '/RES/G1_13.jpg'),
(16, '李立群', '/RES/G1_14.jpg'),
(17, '蔡文靜', '/RES/G1_15.jpg'),
(18, '李侑菲', '/RES/G1_16.jpg'),
(19, '陳漢典', '/RES/G1_17.jpg'),
(20, '鍾鎮濤', '/RES/G1_18.jpg'),
(21, '新井浩文', '/RES/G1_19.jpg'),
(22, '劉芸', '/RES/G1_20.jpg'),
(23, '周放', '/RES/G1_21.jpg'),
(24, '吳慷仁', 'https://dramago.ptsplus.tv/wp-content/uploads/2024/04/%E5%8A%87%E5%A4%A0%EF%BD%9C%E5%90%B3%E6%85%B7%E4%BB%81-01_%E5%9C%961%E6%9B%BF%E4%BB%A3.jpg'),
(25, '陶喆', '/RES/G1_45.jpg'),
(26, '夏于喬', '/RES/G1_69.jpg'),
(27, '舒淇', '/RES/G1_126.jpg'),
(28, '愛瑪·沃特森', '/RES/G1_153.jpg'),
(29, '陳冠霖', '/RES/G1_160.jpg'),
(30, '吳克群', '/RES/G1_297.jpg'),
(31, '李佳穎', '/RES/G1_302.jpg'),
(32, '庹宗康', '/RES/G1_304.jpg'),
(33, '佐藤健', '/RES/G1_311.jpg'),
(34, '王子(邱勝翊)', 'https://media.vogue.com.tw/photos/5e94238afb4a7300088fe303/16:9/w_1280,c_limit/%E7%8E%8B%E5%AD%90%E9%82%B1%E5%8B%9D%E7%BF%8A%E6%85%B6%E7%94%9F02.jpg'),
(35, '班奈狄克·康柏拜區', '/RES/G1_459.jpg'),
(36, '馬丁·費里曼', '/RES/G1_486.jpg'),
(37, '蔡昌憲', '/RES/G1_608.jpg'),
(39, '戴夫·巴帝斯塔', '/RES/G1_685.jpg'),
(40, '馬克·魯法洛', '/RES/G1_747.jpg'),
(41, '郭采潔', '/RES/G1_752.jpg'),
(42, '尼可拉斯·凱吉', '/RES/G1_933.jpg'),
(43, '成龍', '/RES/G1_980.jpg'),
(44, '徐懷鈺', '/RES/G1_983.jpg'),
(45, '阮經天', 'https://image.agentm.tw/images/artist/e23b02cc-1fb5-42ab-baa9-3c7a503ce815.jpg'),
(49, '馮·迪索', '/RES/G1_1125.jpg'),
(50, '甄子丹', '/RES/G1_1323.jpg'),
(51, '吳亦凡', '/RES/G1_1399.jpg'),
(52, '曾沛慈', '/RES/G1_1360.jpg'),
(53, '崔宇植', '/RES/G1_1350.jpg'),
(54, '炎亞綸', '/RES/G1_1480.jpg'),
(55, '索菲婭·科波拉', '/RES/G1_1490.jpg'),
(56, '豬哥亮', '/RES/G1_1515.jpg'),
(57, '朴寶英', '/RES/G1_1617.jpg'),
(58, '安德魯·加菲爾德', '/RES/G1_1578.jpg'),
(59, '神童', '/RES/G1_1678.jpg'),
(60, '張震嶽', '/RES/G1_1693.jpg'),
(61, '勞倫斯·費許朋', '/RES/G1_1835.jpg'),
(62, '澎恰恰', '/RES/G1_1764.jpg'),
(63, '賈靜雯', 'https://hips.hearstapps.com/hmg-prod/images/fotojet-3-1635421193.jpg?crop=0.487xw:0.974xh;0,0&resize=640:*'),
(64, '丹尼爾·克雷格', '/RES/G1_1914.jpg'),
(65, '張鈞甯', '/RES/G1_1915.jpg'),
(66, '王彩樺', 'https://image.enjoymovie.net/pSiTXevLsii7Ov5h3XBPWXbJBKU=/256x256/smart/core/p/bKAVKkyYWX.jpg'),
(67, '陳昊森', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtv3D1eGP-dfihRjgWVSNPXmhUgAFP9Oa62_77iF2zAA&s'),
(68, '戴立忍', 'https://live.staticflickr.com/4074/4885022613_a72614dd98_b.jpg'),
(69, '洪都拉斯', 'https://attach.setn.com/newsimages/2023/03/26/4094938-PH.jpg'),
(70, '法比歐', 'https://images.chinatimes.com/newsphoto/2022-11-23/656/20221123004422.jpg'),
(71, '曾敬驊', 'https://cc.tvbs.com.tw/img/upload/2023/08/11/20230811132739-9b337492.jpeg'),
(72, '魏如萱', 'https://cc.tvbs.com.tw/img/upload/2022/07/16/20220716143819-537375c7.jpg'),
(73, '謝盈萱', 'https://storage.googleapis.com/www-cw-com-tw/ckeditor/202210/ckeditor-6350038da4e78.jpg'),
(76, '邱澤', 'https://img.myvideo.net.tw/images/directorActor/17/S0001617.png'),
(77, '林依晨', 'https://media.gq.com.tw/photos/5dbc53112551d400086a18b3/1:1/w_2000,h_2000,c_limit/2018041769789985.jpg'),
(78, '林心如', 'https://hips.hearstapps.com/hmg-prod/images/wjejcn-1647835598.jpg?crop=0.467xw:0.935xh;0.0212xw,0&resize=640:*'),
(79, '安德魯·林肯', '/RES/G1_2079.jpg'),
(80, '陳柏霖', '/RES/G1_2141.jpg'),
(81, '劉在錫', '/RES/G1_2213.jpg'),
(82, '郭雪芙', 'https://img.ttshow.tw/images/celebrity/%E9%83%AD%E9%9B%AA%E8%8A%99.jpg'),
(83, '伊能靜', '/RES/G1_2424.jpg'),
(84, '櫻井翔', '/RES/G1_2423.jpg'),
(85, '李鍾碩', 'https://img.myvideo.net.tw/images/directorActor/73/S0002873.png'),
(86, '王心凌', 'https://cdn2.ettoday.net/images/5859/e5859763.jpg'),
(87, '裴勇浚', '/RES/G1_2611.jpg'),
(88, '修杰楷', '/RES/G1_2610.jpg'),
(89, '麥特·勒布郎', '/RES/G1_2727.jpg'),
(90, '金宇彬', '/RES/G1_2845.jpg'),
(91, '安東尼·麥基', '/RES/G1_2938.jpg'),
(92, '李千娜', '/RES/G1_2942.jpg'),
(93, '傑森·摩莫亞', '/RES/G1_3054.jpg'),
(94, '金秀賢', 'https://hips.hearstapps.com/hmg-prod/images/11-1638967540.jpg?crop=0.473xw:1.00xh;0.0277xw,0&resize=640:*'),
(95, '鍾欣凌', 'https://cw1.tw/CP/images/article/P1417151822265.jpg'),
(96, '朱軒洋', 'https://today-obs.line-scdn.net/0hKTBgZfjRFHt_HgQXDRBrLEdIGApMeA5yXXpdHV0aHUgAMlooEy1HGFgcQldaKFJ9X3APT1JOGklUJ1V4Qw/w580'),
(97, '風田', 'https://img.ttshow.tw/images/celebrity/%E9%A2%A8%E7%94%B0.jpg'),
(98, '蔡淑臻', 'https://ibw.bwnet.com.tw/ac_gallery/2024/04/a743fc39-a81a-2e5c-6ebf-438f00a2807f_620.jpg'),
(99, '施柏宇', 'https://static.styletc.com/images/cover/7/26907/md-45382d32e954cd63a0c4d341a8c2ed9b.jpg'),
(100, '王傳一', '/RES/G1_33.jpg'),
(101, '朱麗安·摩爾', '/RES/G1_41.jpg'),
(102, '林秀香', '/RES/G1_42.jpg'),
(103, '內田有紀', '/RES/G1_52.jpg'),
(104, '金賽綸', '/RES/G1_60.jpg'),
(105, '艾莉絲·布拉加', '/RES/G1_65.jpg'),
(106, '申正根', '/RES/G1_133.jpg'),
(107, '申世京', '/RES/G1_145.jpg'),
(108, '劉海鎮', '/RES/G1_40.jpg'),
(109, '申素率', '/RES/G1_148.jpg'),
(110, '山下智久', '/RES/G1_83.jpg'),
(111, '金剛', '/RES/G1_95.jpg'),
(112, '茱兒·芭莉摩', '/RES/G1_98.jpg'),
(113, '尹汝貞', '/RES/G1_99.jpg'),
(114, '休·傑克曼', '/RES/G1_105.jpg'),
(115, '黃鴻升', '/RES/G1_111.jpg'),
(116, '摩根·莉莉', '/RES/G1_128.jpg'),
(117, '泰莉莎·帕爾墨', '/RES/G1_161.jpg'),
(118, '劉俊相', '/RES/G1_175.jpg'),
(119, '金材昱', '/RES/G1_207.jpg'),
(120, '高山峰', '/RES/G1_323.jpg'),
(121, '鄒承恩', '/RES/G1_455.jpg'),
(122, '顧寶明', '/RES/G1_570.jpg'),
(123, '狄鶯', '/RES/G1_956.jpg'),
(124, '許孟哲', '/RES/G1_973.jpg'),
(125, '陸明君', '/RES/G1_1069.jpg'),
(126, '路嘉欣', '/RES/G1_166.jpg'),
(127, '姚淳耀', '/RES/G1_1300.jpg'),
(128, '楊貴媚', '/RES/G1_1635.jpg'),
(129, '喻虹淵', '/RES/G1_2158.jpg'),
(130, '洪小玲', '/RES/G1_2256.jpg'),
(131, '劉家昌', '/RES/G1_2598.jpg'),
(132, '沈建宏', '/RES/G1_2847.jpg'),
(134, '張書豪', '/RES/G1_3605.jpg'),
(135, '孫越', '/RES/G1_3670.jpg'),
(136, '曾少宗', '/RES/G1_3883.jpg'),
(137, '簡嫚書', '/RES/G1_4541.jpg'),
(138, '翁滋蔓', '/RES/G1_5119.jpg'),
(139, '況明潔', '/RES/G1_5125.jpg'),
(140, '鈕承澤', '/RES/G1_5213.jpg'),
(141, '謝承均', '/RES/G1_5226.jpg'),
(142, '宋逸民', '/RES/G1_5432.jpg'),
(143, '趙正平', '/RES/G1_5568.jpg'),
(144, '曾國城', '/RES/G1_5601.jpg'),
(145, '柯有倫', '/RES/G1_5858.jpg'),
(146, '馬如龍', '/RES/G1_6096.jpg'),
(147, '敖犬', '/RES/G1_5975.jpg'),
(148, '柯宇綸', '/RES/G1_6151.jpg'),
(149, '簡孝儒', '/RES/G1_6334.jpg'),
(150, '許瑋甯', 'https://media.nownews.com/nn_media/thumbnail/2023/09/1694140733214-25ab143fff0a46f38f223ab568a50596-800x533.webp?unShow=false'),
(152, '高捷', '/RES/G1_7946.jpg'),
(153, '江淑娜', '/RES/G1_7993.jpg'),
(154, '柯淑勤', '/RES/G1_8080.jpg'),
(155, '林美秀', '/RES/G1_8267.jpg'),
(156, '天心', '/RES/G1_8301.jpg'),
(157, '梁赫群', '/RES/G1_8357.jpg'),
(158, '張小燕', '/RES/G1_8785.jpg'),
(159, '張孝全', '/RES/G1_9298.jpg'),
(160, '庹宗華', '/RES/G1_9898.jpg'),
(161, '謝欣穎', '/RES/G1_9950.jpg'),
(162, '王仁甫', '/RES/G1_10118.jpg'),
(164, '楊謹華', '/RES/G1_10350.jpg'),
(165, '王宥勝', '/RES/G1_10392.jpg'),
(166, '龍劭華', '/RES/G1_10842.jpg'),
(167, '張睿家', '/RES/G1_11367.jpg'),
(168, '魏蔓', '/RES/G1_11480.jpg'),
(169, '路斯明', '/RES/G1_11495.jpg'),
(170, '邵庭', '/RES/G1_11588.jpg'),
(171, '夏如芝', '/RES/G1_12084.jpg'),
(172, '納豆', '/RES/G1_12295.jpg'),
(173, '蔡淑臻', '/RES/G1_7797.jpg'),
(174, '許效舜', '/RES/G1_7778.jpg'),
(175, '阿Ken', '/RES/G1_7777.jpg'),
(176, '李國毅', '/RES/G1_7755.jpg'),
(177, '王柏傑', '/RES/G1_7737.jpg'),
(178, '房思瑜', '/RES/G1_7508.jpg'),
(179, '許時豪', '/RES/G1_7501.jpg'),
(180, '吳念真', '/RES/G1_7432.jpg'),
(181, '九孔', '/RES/G1_7192.jpg'),
(182, '竇智孔', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAgQDbOJ6fE9AHHWdVxNJ5IZ_5AQ60yovVbHugWEq53Q&s'),
(183, '郎祖筠', '/RES/G1_7030.jpg'),
(184, '張兆誌', '/RES/G1_7013.jpg'),
(185, '張勛傑', '/RES/G1_6915.jpg'),
(186, '李現', '/RES/G1_238.jpg'),
(188, '袁富華', 'https://cdn.hk01.com/di/media/images/2105139/org/1a28adb4de44021e8e2d9b91b587547a.jpg/Fk5UT1dJOg7dLshKfStb-kqJ1wusiz_JjTpm_406Zv8?v=w1920'),
(189, '陳以文', 'https://upload.wikimedia.org/wikipedia/commons/3/30/陳以文.png'),
(190, '李李仁', 'https://cw1.tw/CH/images/channel_master/f7a90186-1d20-4bac-abd4-57fd71b4d2ac.jpg'),
(191, '謝瓊煖', 'https://image.agentm.tw/images/artist/7cec1266-2a14-456d-b9f1-63b7e9cd9c55.jpg'),
(192, '邵雨薇', 'https://s3-ap-northeast-1.amazonaws.com/tw.com.carture/images/1200/170922009604.jpg'),
(193, '鳳小岳', 'https://p7.itc.cn/images01/20210815/54d03242d03c49dc91f6d1e04e568204.jpeg'),
(194, '李天柱', 'https://cdn2.ettoday.net/images/5565/d5565305.jpg'),
(195, '宋芸樺', 'https://storage.googleapis.com/www-cw-com-tw/article/202311/article-655f20b739d2b.jpg'),
(196, '禾浩辰', 'https://dramago.ptsplus.tv/wp-content/uploads/2023/06/劇夠｜禾浩辰-02-scaled.jpg'),
(197, '賴雅妍', 'https://images.chinatimes.com/newsphoto/2019-09-08/656/20190908002442.jpg'),
(198, '張立昂', 'https://images.chinatimes.com/newsphoto/2023-09-19/656/20230919001653.jpg'),
(199, '藍心湄', 'https://media.vogue.com.tw/photos/5db84f4a46ca340008da13d8/2:3/w_2560%2Cc_limit/2018011562957809.jpg'),
(200, '李㼈', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2Pn24xFXS-swvZLIObKbUI7F2romQ2ZPjKiCUQHq3zg&s'),
(201, '周慧敏', 'https://i.epochtimes.com/assets/uploads/2019/04/1904240644521487-450x360.jpg'),
(202, '陸弈靜', 'https://upload.wikimedia.org/wikipedia/commons/5/57/陸弈靜.png'),
(203, '張再興', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4r_-0yDXbKYTt3jZf0b9CDrkW2syn8Ax-xYmdT1nPMg&s'),
(204, '楊祐寧', 'https://storage.googleapis.com/ctinews/ckeditor/images/20230720155625_%E6%A5%8A%E7%A5%90%E5%AF%A7%E9%A6%96%E5%9C%960720.jpg'),
(205, '傑森·摩莫亞', '/RES/G1_3114.jpg'),
(206, '侯佩岑', '/RES/G1_3412.jpg'),
(207, '克里斯·漢斯沃', '/RES/G1_3380.jpg'),
(208, '薛仕凌', 'https://d1j71ui15yt4f9.cloudfront.net/wp-content/uploads/2021/09/30222639/20210930000209.jpg'),
(209, '郭子乾', 'https://www.hpcf.tw/wp-content/uploads/2022/03/FB_08900-e1647536834197.jpeg'),
(210, '曾珮瑜', 'https://media.nownews.com/nn_media/thumbnail/images/article/201611/12715362_1014868718535551_2416372517547732780_n.jpg'),
(212, '陳庭妮', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0XDNWgfZiSBHZB3yjX46nr-Dzi39GwVvm5gO4JwnoyQ&s'),
(213, '吳映潔', 'https://i.epochtimes.com/assets/uploads/2018/09/1809170520431487-450x360.jpg'),
(214, '謝坤達', 'https://today-obs.line-scdn.net/0hJpZwSQAFFV9nDgcW91pqCF9YGS5UaA9WRWxcPxYJGDwaIgcPU2pGPEtbT3NCPlFeRz9eahdZT2kfNwVaXA/w644'),
(215, '王識賢', 'https://i.kfs.io/muser/global/28318453v2/cropresize/600x600.jpg'),
(216, '楊麗音', 'https://imgs.gvm.com.tw/upload/gallery/20221108/121819.jpg'),
(217, '于子育', 'https://imgs.gvm.com.tw/upload/gallery/20220824/114169.jpg'),
(218, '夏靖庭', 'https://v3-statics.mirrormedia.mg/images/4ee3f16d-56ff-4e8c-829e-23283fa3ddb7-w800.webP'),
(219, '藍葦華', 'https://static.styletc.com/images/cover/75/36975/md-ee7eaa8cccdabd8d90f8f6aa7eb4a08d.jpeg'),
(220, '林柏宏', 'https://static.rti.org.tw/assets/thumbnails/2021/11/08/88440688f0358a6de83c874762f92649.jpg'),
(221, '馬念先', 'https://blow.streetvoice.com/wp-content/uploads/2014/08/%E9%A6%AC%E5%BF%B5%E5%85%88.jpg'),
(222, '蔡振南', 'https://images.chinatimes.com/newsphoto/2018-01-28/656/20180128002698.jpg'),
(223, '黃路梓茵(lulu)', 'https://www.winnews.com.tw/wp-content/uploads/2023/07/%E8%96%87%E4%BD%B3%E6%B4%97%E9%A1%8F%E7%B3%BB%E5%88%97%E4%BB%A3%E8%A8%80%E4%BA%BALULU%E5%BD%A2%E8%B1%A1%E5%9C%96-1-scaled.jpg'),
(224, '陽靚', 'https://today-obs.line-scdn.net/0h8dYEvJ_RZ0tkPHFJxB4YHF5qZCRXUHRIAAo2SCdSOXxICyRNDVwsfUc6bn8dBSAVCg4hKUg8fHocXCBIXV0s/w644'),
(225, '劉品言', 'https://images.chinatimes.com/newsphoto/2022-03-15/656/20220315001701.jpg'),
(226, '張可昀(小甜甜)', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSesDlASPNk94NIwvb-M4qmT7oH0H5Hc-fKgBPMOKPQ-w&s'),
(227, '黃姵嘉', 'https://images.chinatimes.com/newsphoto/2023-12-01/656/20231201003892.jpg'),
(228, '張書偉', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZwza2yS-Cso3SsAEkx_Aro-vSK-_hndcCxGuvAhq_mA&s'),
(229, '李杏', 'https://dramago.ptsplus.tv/wp-content/uploads/2023/07/%E5%8A%87%E5%A4%A0%EF%BD%9C%E6%9D%8E%E6%9D%8F-01-1.jpg'),
(230, '馬克·魯法洛', '/RES/G1_3447.jpg'),
(231, '袁艾菲', '/RES/G1_10046.jpg'),
(232, '曾莞婷', 'https://media.nownews.com/nn_media/thumbnail/2021/08/1628081692582-efaa38bd2fdb4e5d85b09123f44d4362-800x533.jpg?unShow=false'),
(233, '比莉(王雪娥)', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJmLNwpu3T416rdIf73Jhqu4svUtHPA61CGQWZI1kJrA&s'),
(238, '傅孟柏', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZqRWeWjtmclipbW0SZqIuAywev69JqCLR-ANMxpKUWA&s'),
(239, '顏毓麟', 'https://image.moviecool.asia/person/y1DwnRYGHRc/photo.png'),
(240, '曾之喬', 'https://lh5.googleusercontent.com/proxy/rKEZbmQbh9V4p6Id1pNr00AnDqQvisusTmTlEWnG0lYQF_0FJwK_Zqi-tSfXzvHfPMeMyjGMjtNrRRznG_ljOfRiGs3KDxengjkPaJRM5RXbsJHXYt9AM8a0PMij-q_m'),
(241, '郭書瑤', 'https://i.epochtimes.com/assets/uploads/2023/01/id13905479-2301120749131487-450x308.jpg'),
(242, '李沐', 'https://dramago.ptsplus.tv/wp-content/uploads/2022/08/%E5%8A%87%E5%A4%A0%EF%BD%9C%E6%9D%8E%E6%B2%90.jpg'),
(243, '許傑輝', 'https://img.ltn.com.tw/Upload/ent/page/800/2023/06/13/phpOzj0L8.jpg'),
(244, '邱凱偉', 'https://dramago.ptsplus.tv/wp-content/uploads/2023/05/%E5%8A%87%E5%A4%A0%EF%BD%9CDarren%E9%82%B1%E5%87%B1%E5%81%89-01_%E5%B0%81%E9%9D%A2%E7%85%A7mrtriangle0305-2.jpg'),
(245, '范逸臣', 'https://i.kfs.io/artist/global/214,0v2/fit/500x500.jpg'),
(246, '田中千繪', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQ2Y66kQ4NC_vXPp8svg7FWXq9PdP_NdUgOIJQuQsd4Q&s'),
(247, '瓦奇拉維特·奇瓦雷', 'https://upload.wikimedia.org/wikipedia/commons/2/2b/BVC18.jpg'),
(248, '東達婉·丹緹維賈坤', 'https://upload.wikimedia.org/wikipedia/commons/f/f9/Tontawan_%40_GQ_MEN_OF_THE_YEAR_2022.png'),
(249, '林哲熹', 'https://dramago.ptsplus.tv/wp-content/uploads/2023/07/%E5%8A%87%E5%A4%A0%EF%BD%9C%E6%9E%97%E5%93%B2%E7%86%B9_01_%E6%9E%97%E5%93%B2%E7%86%B9%E5%B0%81%E9%9D%A2%E7%85%A72.jpg'),
(250, '王大陸', 'https://images.chinatimes.com/newsphoto/2018-05-16/656/20180516004622.jpg'),
(251, '李玉璽', 'https://i.kfs.io/playlist/global/66974268v3/cropresize/600x600.jpg'),
(252, '屈中恆', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxBmMtQ2hDGFVN2wCwTrUcHqg5JrN6XwTjg0YB-TStRA&s'),
(253, '張立東', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcV88ZeWFKg7xV7HvJVBdREj1D65VcW6xQt_lXsS9ePQ&s'),
(254, '張孝全', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbOKK434Yfmi-Pg0cIOTIAZuwjVHzKd-WdX31urXPdZA&s'),
(255, '鄭人碩', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLNZxEkF-P2oOvH7oYdqdNOo4_A4KSHaeosaGzhAhTsg&s'),
(256, '鄭元暢', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ8Tz9JvJBOjAv09xk8ZHWAnzR_0leZTYW_gkG7dIZYg&s'),
(257, '温貞菱', 'https://attach.setn.com/newsimages/2022/11/25/3935626-PH.jpg'),
(258, '雷洪', 'https://images.chinatimes.com/newsphoto/2021-02-15/656/20210215000303.jpg'),
(259, '全智賢', 'https://hips.hearstapps.com/hmg-prod/images/fotojet-6-1622691498.jpg?crop=0.494xw:0.987xh;0.506xw,0&resize=640:*'),
(260, '滿島光', 'https://hips.hearstapps.com/hmg-prod/images/collage1-1670321091.png?crop=0.492xw:0.984xh;0,0&resize=640:*');

-- --------------------------------------------------------

--
-- 資料表結構 `actord`
--

CREATE TABLE `actord` (
  `ad_id` int NOT NULL COMMENT '編號',
  `a_id` int NOT NULL COMMENT '演員編號',
  `d_id` int NOT NULL COMMENT '劇集編號'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='演員演出劇集';

--
-- 傾印資料表的資料 `actord`
--

INSERT INTO `actord` (`ad_id`, `a_id`, `d_id`) VALUES
(17, 1, 2),
(18, 2, 2),
(19, 3, 3),
(21, 99, 2),
(22, 98, 4),
(23, 96, 4),
(24, 97, 4),
(25, 78, 1),
(26, 164, 1),
(27, 193, 1),
(28, 82, 1),
(29, 204, 1),
(30, 161, 1),
(31, 191, 1),
(32, 209, 3),
(33, 208, 3),
(34, 69, 3),
(36, 34, 2),
(37, 210, 4),
(45, 3, 7),
(46, 210, 7),
(47, 73, 7),
(48, 217, 7),
(49, 216, 7),
(50, 219, 7),
(51, 218, 7),
(52, 221, 1),
(53, 95, 8),
(54, 226, 8),
(55, 225, 8),
(56, 124, 8),
(57, 227, 8),
(58, 228, 8),
(59, 228, 3),
(60, 229, 3),
(61, 63, 9),
(62, 2, 9),
(63, 24, 9),
(64, 166, 9),
(65, 220, 9),
(66, 232, 9),
(67, 69, 9),
(68, 233, 9),
(75, 240, 12),
(76, 238, 12),
(77, 239, 12),
(78, 2, 12),
(79, 95, 12),
(80, 241, 12),
(81, 1, 12),
(82, 67, 12),
(83, 217, 12),
(84, 242, 12),
(85, 247, 13),
(86, 248, 13),
(87, 254, 14),
(88, 150, 14),
(89, 215, 14),
(90, 242, 14),
(91, 255, 14),
(92, 221, 14),
(93, 69, 14),
(94, 78, 14),
(95, 203, 14),
(97, 77, 15),
(98, 256, 15),
(99, 150, 15),
(100, 54, 15),
(101, 221, 15),
(102, 80, 16),
(103, 77, 16),
(104, 155, 16),
(105, 37, 16),
(106, 6, 16),
(107, 221, 16),
(108, 240, 16),
(109, 4, 1),
(110, 71, 1),
(111, 71, 14),
(112, 239, 2),
(113, 240, 2),
(114, 115, 2),
(115, 70, 17),
(116, 24, 17),
(117, 218, 17),
(118, 257, 17),
(119, 258, 17),
(121, 241, 18),
(122, 196, 18),
(123, 225, 18),
(124, 94, 19),
(125, 259, 19),
(126, 33, 20),
(127, 260, 20),
(128, 24, 22),
(129, 2, 22),
(130, 160, 22),
(131, 127, 22),
(132, 245, 23),
(133, 3, 24),
(134, 63, 24),
(135, 24, 24),
(136, 191, 24),
(137, 249, 24),
(138, 52, 24),
(139, 69, 24);

-- --------------------------------------------------------

--
-- 資料表結構 `actorm`
--

CREATE TABLE `actorm` (
  `am_id` int NOT NULL COMMENT '編號',
  `a_id` int NOT NULL COMMENT '演員編號',
  `m_id` int NOT NULL COMMENT '電影編號'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='演員演出電影';

--
-- 傾印資料表的資料 `actorm`
--

INSERT INTO `actorm` (`am_id`, `a_id`, `m_id`) VALUES
(1, 4, 2),
(2, 5, 1),
(3, 6, 1),
(5, 45, 4),
(6, 70, 3),
(7, 67, 3),
(8, 68, 3),
(9, 66, 3),
(10, 69, 3),
(13, 71, 3),
(20, 188, 4),
(21, 189, 4),
(22, 190, 4),
(23, 191, 4),
(24, 4, 4),
(25, 192, 6),
(26, 155, 6),
(27, 193, 6),
(28, 194, 6),
(29, 136, 6),
(30, 195, 7),
(31, 196, 7),
(32, 197, 7),
(33, 198, 7),
(34, 199, 7),
(35, 200, 7),
(36, 201, 7),
(37, 1, 8),
(39, 2, 8),
(40, 99, 8),
(41, 71, 9),
(42, 192, 9),
(43, 202, 9),
(44, 203, 9),
(46, 210, 4),
(47, 196, 1),
(48, 213, 1),
(49, 212, 1),
(50, 134, 1),
(51, 134, 9),
(52, 214, 9),
(53, 217, 6),
(54, 1, 2),
(55, 221, 2),
(56, 220, 2),
(57, 221, 3),
(58, 54, 2),
(59, 203, 2),
(60, 222, 2),
(61, 76, 10),
(62, 150, 10),
(63, 95, 10),
(64, 222, 10),
(65, 219, 10),
(66, 223, 10),
(67, 224, 10),
(68, 95, 11),
(69, 54, 11),
(70, 228, 11),
(71, 227, 11),
(72, 243, 11),
(73, 244, 11),
(74, 245, 12),
(75, 246, 12),
(76, 204, 13),
(77, 4, 13),
(78, 189, 13),
(79, 179, 13),
(80, 249, 13),
(81, 195, 14),
(82, 250, 14),
(83, 251, 14),
(84, 13, 14),
(85, 252, 14),
(86, 253, 14);

-- --------------------------------------------------------

--
-- 資料表結構 `area`
--

CREATE TABLE `area` (
  `area_id` int NOT NULL,
  `area_name` varchar(30) NOT NULL,
  `area_pic` varchar(300) NOT NULL,
  `area_choose` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `area_pic`, `area_choose`) VALUES
(1, '一起去海邊吹風吧', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/aa/29/8b/beach.jpg?w=1200&h=-1&s=1&cx=1253&cy=1217&chk=v1_0adb78ae72340253082e', 'list.php?sc_id=2'),
(2, '揮別秋光 啟幕四季的最後一場旅行', 'https://www.jrtimes.tw/upload/control/3c51a299-5739-47d4-8090-4521764cf9f9.jpg', 'list.php?sc_id=1'),
(3, '重拾台灣歷史', 'https://lh6.googleusercontent.com/proxy/ftE9b5G2aCq3-kbAMJ_NAjO27AJM_IE8J0JzWFTt_81q5l08_xCbNHNq3ql4ArREB9TKQhLBUY9QiwO1gh7cBWSb2pqlBqALZlRY', 'list.php?sc_id=17');

-- --------------------------------------------------------

--
-- 資料表結構 `carousel`
--

CREATE TABLE `carousel` (
  `carousel_id` int NOT NULL,
  `carousel_pic` varchar(300) NOT NULL,
  `carousel_link` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `carousel`
--

INSERT INTO `carousel` (`carousel_id`, `carousel_pic`, `carousel_link`) VALUES
(1, 'img/carousel-poster1.jpg', 'spot-info.php?s_id=62'),
(2, 'https://www.tfai.org.tw/uploadFile/upload/2c9580828ab07611018c489f59350200.jpg', 'event-details.php?id=2'),
(3, 'https://www.tfai.org.tw/uploadFile/upload/2c958082861b978b0186de4cb1d4012f.png', 'event-details.php?id=1'),
(4, 'img/carousel-poster2.jpg', 'spot-info.php?s_id=3');

-- --------------------------------------------------------

--
-- 資料表結構 `country`
--

CREATE TABLE `country` (
  `c_id` int NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_pic` varchar(300) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `country`
--

INSERT INTO `country` (`c_id`, `c_name`, `c_pic`) VALUES
(1, '台灣', 'https://stage.taipei101mall.com.tw/uploads/seo/616965e786aab.png'),
(2, '日本', 'https://a.cdn-hotels.com/gdcs/production147/d1285/0745ceba-e251-44dd-900d-758bd7078d8a.jpg?impolicy=fcrop&w=800&h=533&q=medium'),
(3, '韓國', 'https://hips.hearstapps.com/hmg-prod/images/gyeongbokgung-palace-twilight-sunset-royalty-free-image-1676444752.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(4, '中國', 'https://cdn.hk01.com/di/media/images/2534382/org/ecb1634a6d9603ae87b98bf980e9abfb.jpg/1Dum9vnc_xicXZiyVOIiZD4wl68mkgqBZiI212YiNtc?v=w1920'),
(5, '泰國', 'https://media.timeout.com/images/105240236/image.jpg'),
(6, '其他', 'https://images.chinatimes.com/newsphoto/2022-09-23/656/20220923003024.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `cspot`
--

CREATE TABLE `cspot` (
  `cs_id` int NOT NULL,
  `c_id` int NOT NULL,
  `s_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `cspot`
--

INSERT INTO `cspot` (`cs_id`, `c_id`, `s_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 15),
(8, 1, 16),
(9, 1, 17),
(10, 1, 18),
(11, 1, 19),
(12, 1, 20),
(13, 1, 21),
(14, 1, 22),
(15, 1, 23),
(16, 1, 24),
(17, 1, 25),
(18, 1, 26),
(19, 1, 27),
(20, 1, 28),
(21, 1, 29),
(22, 1, 29),
(23, 1, 30),
(24, 1, 31),
(25, 1, 32),
(26, 1, 33),
(27, 1, 34),
(65, 1, 33),
(66, 1, 35),
(67, 1, 40),
(68, 1, 41),
(69, 1, 42),
(70, 1, 43),
(71, 1, 44),
(72, 1, 45),
(73, 1, 48),
(74, 1, 47),
(75, 1, 49),
(76, 1, 50),
(77, 1, 51),
(78, 1, 52),
(79, 1, 53),
(80, 1, 54),
(81, 1, 55),
(82, 1, 56),
(84, 3, 58),
(85, 1, 59),
(86, 1, 60),
(87, 1, 61),
(88, 1, 62),
(89, 1, 63),
(90, 1, 64),
(91, 1, 65),
(93, 2, 66),
(94, 1, 67),
(95, 1, 68);

-- --------------------------------------------------------

--
-- 資料表結構 `displayitems`
--

CREATE TABLE `displayitems` (
  `item_id` int NOT NULL,
  `list_id` int DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_poster` varchar(255) DEFAULT NULL,
  `item_genre` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `detail_link` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `genre_link` varchar(255) DEFAULT NULL,
  `genre_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `displayitems`
--

INSERT INTO `displayitems` (`item_id`, `list_id`, `item_name`, `item_poster`, `item_genre`, `detail_link`, `genre_link`, `genre_id`) VALUES
(302, 123, '比悲傷更悲傷的故事', 'https://upload.wikimedia.org/wikipedia/zh/5/5f/More_Than_Blue%2C_2018.jpg', '愛情', 'movie-detail.php?m_id=1', 'movie-genre.php?g_id=2', NULL),
(303, 123, '關於我和鬼變成家人的那件事', 'https://upload.wikimedia.org/wikipedia/zh/3/3f/Marry_My_Dead_Body.jpeg', '喜劇', 'movie-detail.php?m_id=2', 'movie-genre.php?g_id=5', NULL),
(304, 123, '刻在你心底的名字', 'https://upload.wikimedia.org/wikipedia/zh/4/44/Your_Name_Engraved_Herein.jpg', '愛情', 'movie-detail.php?m_id=3', 'movie-genre.php?g_id=2', NULL),
(305, 123, '當男人戀愛時', 'https://www.nlpi.edu.tw/FileDownLoad/MovieFestival/20221124140429656.jpg', '愛情犯罪', 'movie-detail.php?m_id=10', 'movie-genre.php?g_id=2', NULL),
(306, 123, '我的婆婆怎麼把OO搞丟了', 'https://taiwancinema.bamid.gov.tw/ImageData/60/2022/89522/t_89522.jpg?v=202405070924327248187', '喜劇家庭', 'movie-detail.php?m_id=11', 'movie-genre.php?g_id=5', NULL),
(307, 123, '我的少女時代', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxZ1JTa6dqVUsu3h9tNt6qAgLAhZtDscg3BNwOzeP_1g&s', '愛情校園喜劇', 'movie-detail.php?m_id=14', 'movie-genre.php?g_id=2', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `displaylist`
--

CREATE TABLE `displaylist` (
  `list_id` int NOT NULL,
  `list_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `displaylist`
--

INSERT INTO `displaylist` (`list_id`, `list_name`) VALUES
(123, '最新電影');

-- --------------------------------------------------------

--
-- 資料表結構 `drama`
--

CREATE TABLE `drama` (
  `d_id` int NOT NULL,
  `d_name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `d_intro` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `d_date` date NOT NULL,
  `d_pic` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `c_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `drama`
--

INSERT INTO `drama` (`d_id`, `d_name`, `d_intro`, `d_date`, `d_pic`, `c_id`) VALUES
(1, '華燈初上', '1988年10月6日，一群攝影社學生在臺北市中山區雞南山東坡段發現一具無名女屍，經警方勘驗後死者身上有一來自於台北條通日式酒店「光」的遺物，鏡頭一轉，事件的過去映入了眼簾，隨著警方對於女屍案的深入追查，五光十色的條通文化，陪酒小姐的愛恨情仇，悲歡離合的人間倫常，都隨著女屍案的真相逐漸水落石出......', '2021-11-26', 'https://upload.wikimedia.org/wikipedia/zh/thumb/a/a3/Light_The_Night_Taiwan.jpg/250px-Light_The_Night_Taiwan.jpg', 1),
(2, '想見你', '描述2019年的黃雨萱在失去交往多年的男友王詮勝後，憑藉著思念回到1998年、靈魂穿越成為另一個和自己長得一模一樣的女孩陳韻如，並遇到和她逝世的男友長得一模一樣的男孩李子維，以及默默守候陳韻如的莫俊傑，在種種謎團和複雜交錯的時空之中，嘗試改變過去和未來的命運。', '2019-11-17', 'https://images.kktv.com.tw/covers/48/48589798c7af98ff4965c2f00d02dc9139e8afc9.md.jpg', 1),
(3, '茶金', '以1950年代為背景，述說新竹北埔的客家茶產業，如何在爾虞我詐的商場中，面對強大競爭起落浮沉，靠著茶業創造經濟奇蹟為題材。', '2021-11-13', 'https://upload.wikimedia.org/wikipedia/zh/8/8d/Gold_Leaf_Poster.jpg', 1),
(4, '村裡來了個暴走女外科', '《村裡來了個暴走女外科｜第1集》女外科醫師小劉來到鄉村小醫院，像是都市的牛仔，利用自己的特殊技能與固執的處世原則，改變村裡種種令人眼界大開、啼笑皆非的醫療狀況。看似救世主般降臨的背後，卻有著傷痕累累的秘密，自我放逐到醫界的邊緣後，在偏鄉地區醫院拾回「初心」的故事。', '2022-05-07', 'https://upload.wikimedia.org/wikipedia/zh/a/a6/Mad_Doctor_PTS.jpg', 1),
(7, '俗女養成記', '39歲的陳嘉玲，沒房沒車沒老公沒小孩，還丟了工作，正式加入女魯蛇的行列。這是什麼意思呢？這表示當年不惜引發家庭革命也決心要離開家鄉的她，在台北奮鬥了近二十年，到頭來是一場空。 陳嘉玲到底是如何把自己的人生走到這般境地的？', '2019-08-04', 'https://upload.wikimedia.org/wikipedia/zh/thumb/1/1c/The_Making_of_an_Ordinary_Woman.jpg/210px-The_Making_of_an_Ordinary_Woman.jpg', 1),
(8, '我的婆婆怎麼那麼可愛', '小鷗（奚伊鷗）是蘇家最小的媳婦，不幸在進門前後，公公跟老公就相繼掛掉，使她完全不得夫家人心。守寡的小鷗也不想再跟婆家有任何牽連，但天不從人願，命運使她跟婆婆越走越近。落到無家可歸的彩香急需幫助，經由烘焙師發貴的巧妙牽引，小鷗跟彩香約定不以婆媳關係，而以事業夥伴的身分聯手拯救珍賀齋。小鷗在接觸烘焙之後，發現珍賀齋缺乏明星商品，決定以鳳梨酥來重振家風。辛辛苦苦終於讓事業有了起色，不料那些在台北的「詐騙集團」又蠢蠢欲動……。', '2020-06-06', 'https://m.litv.tv/image/optimize?src=https%3A%2F%2Fp-cdnstatic.svc.litv.tv%2Fpics%2F64648-000000-560982.jpg&resize=%7B%22width%22%3A360%7D&removeAlpha=true', 1),
(9, '媽，別鬧了！', '改編自作家陳名瑉小說《我媽的異國婚姻》（圓神出版社出版），草舍文化製作的《媽，別鬧了！ 》。講述一個60歲的媽媽，在丈夫過世後擔心兩個女兒，一個「愛情恐慌症」、一個「渣男製造機」永遠嫁不出去。與其靠女兒過下半生，不如先把自己嫁出去追求幸福，最後透過網路交友遠嫁到澳洲的真人真事。', '2022-07-15', '/RES/G3_9374.jpg', 1),
(12, '無神之地不下雨', '講述因環境問題使眾神選擇不再祝福這片土地，隨著最後一場雨的到來，眾神紛紛離開祂們所眷戀的人間。 世界之初，有個全能的造物主（Kakarayan），祂將祝福賜與這片大地，於是山川、草木、鳥獸魚蟲成了我們的父母兄弟，我們將祂們稱為神靈（Kawas）。但隨著歲月流逝，我們逐漸淡忘神靈給我們的守護與祝福，於是，造物主決定收回所有的降福，從此之後，人世將成為無神之境。 在末日最後一場雨落下之前，所有神都將離開，沒想到諸神的撤退計畫竟被一個平凡的人類女孩打亂。', '2021-10-17', '/RES/G3_2416.jpg', 1),
(13, '流星花園（泰版）', '講述一個典型的女孩Gorya，與最好的朋友Kaning在花店當兼職維持生計。但Gorya通過了名校高中的入學考試，令人生從此天翻地覆', '2021-12-18', 'https://upload.wikimedia.org/wikipedia/zh/3/3f/F4_Thailand%2C_Boys_Over_Flowers_GMMTV.jpg', 5),
(14, '誰是被害者', '全劇題材涉及性別平權、勞工權益、精神疾病等社會議題，劇情描述一名患有亞斯伯格症的鑑識人員在發現自己女兒牽涉命案後，跟社會記者一同追查由這宗案件引發的連續遺願命案，並從中學會理解自己和他人痛苦。', '2020-04-30', 'https://upload.wikimedia.org/wikipedia/zh/0/0b/The_Victims%27_Game.jpg', 1),
(15, '惡作劇之吻', '袁湘琴(林依晨飾)是一個單純開朗的高中女學生，自從在開學典禮上看見代表新生致詞的 江直樹(快播編輯鄭元暢飾)後，便不由自主地喜歡上這個號稱IQ 200 的超級天才少年。經過兩年多無望的暗戀，她鼓足勇氣在學校中對他表白，卻遭到他無情的拒絕，更由於她的莽撞，一時間成了全校的笑柄。然而屋漏偏逢連夜雨，就在湘琴告白被拒後，剛遷入的新家竟然被地震震垮了！', '2005-09-25', 'RES/G3_5917.jpg', 1),
(16, '我可能不會愛你', '程又青，行動力滿滿、仗義執言、很優秀、很厲害，也很驕傲，能受得了她的，只有那個相識十四年的男人---李大仁。三十歲生日那天，李大仁傳來的初老症狀讓她心驚膽戰，原來…她開始老了？面對同年齡卻展現成熟男人魅力的李大仁，她忍不住接受了那十萬元的賭約，看看在三十五歲之前誰會先結婚！可是好男人在哪裡？以為對她有意思的小助理是同志，說如果他愛女人一定會愛她；前男友帶著女友甜甜蜜蜜，還花大錢求婚羨煞所有人；而她…竟然只對那個五年前劈腿，現在又出現在面前說不能沒有她的男人，開始心動！不過交往可以，結婚可以，放棄李大仁這個朋友？門都沒有！', '2011-09-18', 'https://g.udn.com.tw/upfiles/B_MI/milton1932/PSN_PHOTO/231/f_8346231_1.JPG', 1),
(17, '斯卡羅', '改編自19世紀臺灣史實，1867年3月12日，美籍商船「羅妹號」在臺灣恆春半島南端發生船難，登島求生時因誤闖原住民領地而遇害。彼時，蝶妹18歲，因通曉多種語言，以翻譯的身分協助抵臺的美國領事李仙得進行相關調查，並被迫捲入複雜的族群紛爭⋯', '2021-08-14', 'https://upload.wikimedia.org/wikipedia/zh/thumb/1/1e/SEQALU_Poster.jpeg/250px-SEQALU_Poster.jpeg', 1),
(18, '未來媽媽', '處於人生不同階段的三名女性，努力面對婚姻及養兒育女的課題。', '2020-11-27', 'https://lineimg.omusic.com.tw/img/album/4161600.jpg?v=20210423142027', 1),
(19, '來自星星的你', '400年前來到地球的一名外星人就快能回到自己的星球了，但他遇見一位知名女演員後，卻又不想回家了。', '2013-12-18', 'https://cdn.hk01.com/di/media/images/dw/20211116/537265008409579520930425.jpeg/F6xYvK7Qt06cAtyVvUFIS39RyaQyE09Jq1XGc6tVxnM?v=w1920', 3),
(20, 'First Love 初戀', '曾經，也英和晴道是讓彼此更完整的那個人。幾十年過去，他們的生活經歷意外轉折，兩人發現往事依然縈繞難去。\r\n', '2022-11-24', 'https://s.yimg.com/ny/api/res/1.2/7rZB2IdJeF64_lX_f2kL0w--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MA--/https://media.zenfs.com/no/news_tvbs_com_tw_938/2351460b8fbcdb34af676bb1f960758a', 2),
(21, '台灣犯罪故事', '由四個單元故事組成，分別為〈出軌〉、〈生死困局〉、〈惡有引力〉、〈黑潮之下〉。本劇以2000年代為背景，四個單元故事改編自台灣真實犯罪案件，包含滅門血案、姦殺案、詐保案與冤獄案。', '2023-01-04', 'https://upload.wikimedia.org/wikipedia/zh/8/88/Taiwan_Crime_Stories.jpg', 1),
(22, '模仿犯', '故事設定於台灣90年代後期，電視台如雨後春筍般出現、媒體第四權興起也成為影集中的重要背景。一名擅長偵辦兇殺刑案的檢察官郭曉其（吳慷仁 飾）面對當時第一起連續殺人命案，兇手獨特的犯案手法與瘋狂行徑，讓剛興起的各大電視媒體爭相報導，隨著偷拍、炒話題、搶收視率越演越烈，兇手也跟著媒體亂象開始操弄人心、挑釁司法，種種原因讓他決心不惜染髒自己的手，賭上人生也要拖出兇手的犯案證據。', '2023-03-31', 'https://upload.wikimedia.org/wikipedia/zh/5/5d/Copycat_Killer_2023.jpeg', 1),
(23, '八尺門辯護人', '述說出身阿美族的公設辯護人佟寶駒，遠離部落多年，因為一樁印尼漁工殺害同族的滅門血案，被指派為嫌犯辯護，而回到家鄉基隆八尺門，與族人處在對立面。他找到鄰居的印尼看護莉娜當通譯，與即將成為法官且充滿理想主義的替代役男連晉平，要一起釐清真相，卻一步步踏入因命案所牽引的重重疑雲與糾葛。', '2023-07-02', 'https://upload.wikimedia.org/wikipedia/zh/7/7e/%E5%85%AB%E5%B0%BA%E9%96%80%E7%9A%84%E8%BE%AF%E8%AD%B7%E4%BA%BA.png', 1),
(24, '我們與惡的距離', '她是一位母親，也是一位新聞編輯台主管，二年前一起無差別殺人事件中，她失去了兒子，創辦網路先驅報的丈夫，在兒子過世後，因現實磨難漸行漸遠而準備離婚，年幼的女兒行為日漸失序，終逼二人必須重新檢視自己身上的傷口。兇嫌的辯護律師在死刑定讞後，仍想要了解其犯罪動機，開啟了眾人命運的連結。', '2019-03-24', 'https://upload.wikimedia.org/wikipedia/zh/e/ec/The_World_Between_Us_Poster.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `event`
--

CREATE TABLE `event` (
  `e_id` int NOT NULL COMMENT '編號',
  `e_name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '名稱',
  `e_number` int DEFAULT NULL,
  `e_start` date NOT NULL COMMENT '開始日',
  `e_end` date NOT NULL COMMENT '結束日',
  `e_pic` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '圖',
  `e_info` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '資訊',
  `e_rule` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '規則',
  `e_link` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='活動';

--
-- 傾印資料表的資料 `event`
--

INSERT INTO `event` (`e_id`, `e_name`, `e_number`, `e_start`, `e_end`, `e_pic`, `e_info`, `e_rule`, `e_link`) VALUES
(1, '映画故事屋', NULL, '2024-04-22', '2024-06-02', 'https://www.tfai.org.tw/uploadFile/upload/2c958082861b978b0186de4cb1d4012f.png', '爸爸媽媽阿公阿嬤照過來！\r\n<br><br>\r\n影視聽中心在週末下午，邀請專業的說故事老師們，推出系列親子共讀活動，帶領小朋友一起透過繪本認識影視聽小宇宙，再搭配動手作課程，讓各種感官都得到滿足，機會難得，加入我們的行列吧！\r\n<br><br>\r\n合適年齡｜建議4-10歲孩童入場 <br>\r\n參與人數｜每場孩童15位<br>\r\n活動費用｜500元（含材料費、點心費，每位孩童至多一位家長陪伴）<br>\r\n活動地點｜國家電影及視聽文化中心 1F多功能室（新北市新莊區文藝路2號）\r\n\r\n', '▷申辦影視聽中心會員享8折/9折優惠，消費滿額可再參與本中心會員集點活動，請於報名頁面填寫身分證字號，以便審查資格。\r\n<br><br>\r\n▷映画故事屋專屬集點活動：凡報名2024年「映画故事屋」系列場次，每組參加一場即可於現場獲得一點，集滿4點可兌換漫畫「畫電影的人」或「女伶回憶錄」二擇一，兌換截止日至2025年1月31日。\r\n（本年度其他場次將另行公布）\r\n<br><br>\r\n▷家長可享停車平日費率優惠。', 'https://www.tfai.org.tw/zh/program/detail/2c958082861b978b0186c5c6697e0121'),
(2, '給逃亡者的末日狂歡--復古蚤市＋BACK TO 90’s末日派對', NULL, '2024-04-10', '2024-05-27', 'https://www.tfai.org.tw/uploadFile/upload/2c9580828ab07611018c489f59350200.jpg', '王財祥導演的作品《給逃亡者的恰恰》於1997年上映三天匆匆下檔，\r\n但因影像風格延伸自導演於意識形態廣告公司拍攝的一系列作品，且保留下台灣九〇年代諸多小眾文化場景與藝術家身影，而成為傳說中的夢幻逸片。在電影重新出土的最後一場放映，讓我們與逃離者共舞，伴著碎裂華麗的影像，回到九〇年代的末日荒蕪，擁抱逸逃出日常與故事的喜悅。', '❶憑當日《給逃亡者的恰恰》放映節目票根，可於戶外廣場活動服務台兌換「#開喜烏龍茶」一罐。\r\n<br>\r\n❷ TFAI會員消費集點贈好禮！歡迎現場申辦！\r\n<br><br>\r\n──．‣ ──．‣ 更多活動詳情，敬請鎖定官方社群粉專  ', ''),
(3, '影迷俱樂部：影視聽特有種', NULL, '2024-05-02', '2024-06-18', 'https://www.tfai.org.tw/uploadFile/upload/2c9580828e7a3690018ee147e4ca00b1.jpg', '講座地點：國家影視聽中心多功能室(新北市新莊區文藝路2號1樓)<br>\r\n講座主持：陳煒智 ；與談嘉賓：王振愷 、余為政<br>\r\n參加資格：不限\r\n<br><br>\r\n2024年影迷俱樂部的第一期，特別推出「影視聽特有種」單元，以華語電影史發展流變為經緯，聚焦台灣，精選多部「只有在影視聽中心才能看到」的精彩影片或珍貴版本，從阮玲玉到林青霞，從台語片、政宣片，到台灣最早期的動畫片，還有，距今四十年前的文藝青年、七十年前的文藝青年、一百二十年前的文藝青年，在光影流動的膠捲當中，創造了什麼不朽的印記，留下了什麼值得我們一再吟詠、低迴的片刻美好！', '◆免費參加，講座使用ACCUPASS系統免費索票；觀影活動、特別展示、主題選書請直接來時間圖書館報通關密語：「我要參加『影迷俱樂部』」，即可參加。\r\n<br>\r\n◆主辦單位保有最終修改、變更、活動解釋及取消本活動之權利，若有相關異動將會公告於網站， 恕不另行通知。\r\n<br><br>\r\n索票時間：即日起至活動開場(4/27 16:00)為止<br>\r\n入場方式：現場憑報名成功之QRcode入場 (15：45開放入場)。講座開始時(16：00)未到者視同未報名，將取消資格，並開放現場民眾依序入場<br>\r\n退票辦法：若報名成功，卻因故無法參加，請務必於演出前於系統上取消報名，或聯絡【時間圖書館】為您服務，服務電話：02-85228000#3201，服務信箱：library@tfai.org.tw', 'https://www.tfai.org.tw/zh/program/detail/2c9580828e7a3690018ee14a263600b2'),
(4, '國家影視聽中心46週年館慶系列活動', NULL, '2024-05-05', '2024-07-05', 'https://www.tfai.org.tw/uploadFile/upload/2c9580828c8c1176018de3b5b25d02c7.jpg', '日日有影 ——\r\n是真實的一步一腳印，\r\n是日日守護的記憶與痕跡。\r\n有輝煌的歷史、有你我的回憶，\r\n更少不了溫暖的同慶！\r\n讓我們持續推動影視聽文化，\r\n走入大家每日的日常。', '3F 時間圖書館 ►\r\n不限會員，全月開放參觀！並可體驗影音服務。\r\n<br>\r\n1F 光影食趣與時光選品 ►\r\n會員消費中心文創品及出版品(部分商品除外)皆可享有6折優惠！\r\n<br>\r\n非會員則無折扣。\r\n光影食趣餐廳消費出示會員卡，可享85折優惠。', 'https://www.tfai.org.tw/zh/program/seriesList/2c9580828c8c1176018dce95313f02ac');

-- --------------------------------------------------------

--
-- 資料表結構 `genre`
--

CREATE TABLE `genre` (
  `g_id` int NOT NULL,
  `g_name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='作品類別';

--
-- 傾印資料表的資料 `genre`
--

INSERT INTO `genre` (`g_id`, `g_name`) VALUES
(1, '時代'),
(2, '愛情'),
(3, '校園'),
(4, '犯罪'),
(5, '喜劇'),
(6, '懸疑'),
(7, '科幻'),
(11, '家庭');

-- --------------------------------------------------------

--
-- 資料表結構 `genred`
--

CREATE TABLE `genred` (
  `gd_id` int NOT NULL,
  `g_id` int NOT NULL,
  `d_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `genred`
--

INSERT INTO `genred` (`gd_id`, `g_id`, `d_id`) VALUES
(1, 6, 1),
(2, 1, 3),
(3, 6, 2),
(4, 5, 4),
(9, 1, 7),
(12, 5, 7),
(13, 5, 8),
(14, 11, 8),
(15, 5, 9),
(16, 11, 9),
(18, 2, 12),
(19, 7, 12),
(20, 2, 13),
(21, 3, 13),
(22, 4, 14),
(23, 6, 14),
(24, 2, 15),
(25, 5, 15),
(26, 2, 16),
(27, 1, 17),
(28, 11, 18),
(29, 2, 19),
(30, 5, 19),
(31, 2, 20),
(32, 4, 21),
(33, 4, 22),
(34, 4, 23),
(35, 6, 22),
(36, 2, 2),
(37, 7, 2),
(38, 4, 24);

-- --------------------------------------------------------

--
-- 資料表結構 `genrem`
--

CREATE TABLE `genrem` (
  `gm_id` int NOT NULL,
  `m_id` int NOT NULL,
  `g_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `genrem`
--

INSERT INTO `genrem` (`gm_id`, `m_id`, `g_id`) VALUES
(1, 1, 2),
(2, 2, 5),
(3, 3, 2),
(4, 4, 4),
(7, 6, 4),
(8, 6, 6),
(9, 7, 2),
(10, 7, 5),
(11, 8, 2),
(12, 8, 6),
(13, 9, 5),
(14, 10, 2),
(15, 10, 4),
(16, 9, 11),
(17, 11, 5),
(18, 11, 11),
(19, 12, 1),
(20, 12, 2),
(21, 12, 5),
(22, 13, 4),
(23, 13, 7),
(24, 14, 2),
(25, 14, 3),
(26, 14, 5);

-- --------------------------------------------------------

--
-- 資料表結構 `hotspot`
--

CREATE TABLE `hotspot` (
  `h_id` int NOT NULL,
  `s_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- 傾印資料表的資料 `hotspot`
--

INSERT INTO `hotspot` (`h_id`, `s_id`) VALUES
(4, 1),
(8, 21),
(9, 35),
(10, 64);

-- --------------------------------------------------------

--
-- 資料表結構 `listd`
--

CREATE TABLE `listd` (
  `ld_id` int NOT NULL,
  `d_id` int NOT NULL,
  `l_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `listd`
--

INSERT INTO `listd` (`ld_id`, `d_id`, `l_id`) VALUES
(1, 2, 2),
(9, 1, 2),
(10, 3, 2),
(12, 12, 1),
(14, 14, 1),
(20, 7, 1),
(21, 2, 11),
(22, 1, 11),
(23, 7, 11),
(24, 15, 11),
(25, 16, 11),
(28, 8, 2),
(29, 17, 2),
(30, 24, 11),
(31, 23, 1),
(32, 24, 1),
(33, 9, 2),
(43, 4, 2),
(44, 7, 2);

-- --------------------------------------------------------

--
-- 資料表結構 `listdrama`
--

CREATE TABLE `listdrama` (
  `l_id` int NOT NULL,
  `l_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `listdrama`
--

INSERT INTO `listdrama` (`l_id`, `l_name`) VALUES
(1, '熱門劇集'),
(2, '最新劇集'),
(11, '不看就落伍！經典台灣劇集');

-- --------------------------------------------------------

--
-- 資料表結構 `listm`
--

CREATE TABLE `listm` (
  `lm_id` int NOT NULL,
  `m_id` int NOT NULL,
  `l_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `listm`
--

INSERT INTO `listm` (`lm_id`, `m_id`, `l_id`) VALUES
(1, 2, 2),
(7, 9, 1),
(8, 4, 1),
(10, 1, 2),
(15, 3, 2),
(16, 10, 2),
(17, 12, 1),
(18, 11, 2),
(19, 14, 2),
(20, 12, 20),
(21, 2, 20),
(22, 3, 20),
(23, 4, 20);

-- --------------------------------------------------------

--
-- 資料表結構 `listmovie`
--

CREATE TABLE `listmovie` (
  `l_id` int NOT NULL,
  `l_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `listmovie`
--

INSERT INTO `listmovie` (`l_id`, `l_name`) VALUES
(1, '現正熱播-電影'),
(2, '最新電影'),
(20, '金馬獎專區');

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `m_id` int NOT NULL,
  `m_name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `m_intro` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `m_date` date NOT NULL,
  `m_pic` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `c_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `movie`
--

INSERT INTO `movie` (`m_id`, `m_name`, `m_intro`, `m_date`, `m_pic`, `c_id`) VALUES
(1, '比悲傷更悲傷的故事', '張哲凱和宋媛媛兩人是孤兒，在高中的時候認識。 哲凱在父親罹患癌症去世後被母親拋棄，而媛媛在一場車禍中失去了一家人。 他們是靈魂伴侶，一起合住。 深知媛媛最害怕被留下一人，哲凱始終保守著自己患癌症末期的祕密，並催促媛媛嫁一個善良健康的男人。', '2018-11-30', 'https://upload.wikimedia.org/wikipedia/zh/5/5f/More_Than_Blue%2C_2018.jpg', 1),
(2, '關於我和鬼變成家人的那件事', '劇情描述恐同又怕鬼的直男警察吳明翰在辦案蒐證時誤撿紅包，與和男友論及婚嫁、卻因一場意外冤死的毛毛，捨不得孫子還沒結婚就死掉的阿嬤，腦洞大開地想出冥婚這個方法，兩人被迫結為連理。不願就範的明翰開始衰運連連，不但甩不掉冥婚對象，連警花林子晴埋線已久的緝毒案也被他搞砸，別無選擇的他為斬斷姻緣，決定與「鬼老公」毛毛攜手辦案，找出肇事兇手替毛毛伸冤，展開一段荒謬又笑中帶淚的旅程。', '2023-02-10', 'https://upload.wikimedia.org/wikipedia/zh/3/3f/Marry_My_Dead_Body.jpeg', 1),
(3, '刻在你心底的名字', '故事聚焦在80年代剛解嚴的台灣，一對遊走在友誼，愛慕之間的高中同窗阿漢(陳昊森飾)與Birdy(曾敬驊飾演)，他們在青春的騷動與性啟蒙的渴望牽引下冒險，而學妹班班(邵奕玫飾)的出現讓曖昧關係產生變化。 ', '2020-09-30', 'https://upload.wikimedia.org/wikipedia/zh/4/44/Your_Name_Engraved_Herein.jpg', 1),
(4, '周處除三害', '通緝犯陳桂林（阮經天飾）在角頭大哥告別式上囂張尋仇，卻發現自己竟然只是排名第三的通緝犯，於是他查出前兩名通緝犯的下落，要將他們一一除掉。', '2023-10-06', 'https://imgcdn.cna.com.tw/www/WebPhotos/800/20240311/1413x2048_wmkn_361843808603_0.jpg', 1),
(6, '惡女', '黃立美（邵雨薇 飾）是一位著名的記者及新聞主播。正當她忙於與交往多年的男友林大為（曾少宗 飾）籌備婚禮時，她發現父親（李天柱 飾）打算與認識沒多久且身世成謎的女人何秀蘭（林美秀 飾）再婚。就在婚禮前夕，秀蘭因成為謀殺嫌疑犯而上了頭條新聞。起因是與秀蘭交往過的其中三位前男友，竟然都因燒炭自殺而亡，且都在死前匯出鉅款給秀蘭。與三樁命案扯上關係的秀蘭堅稱她沒有殺害任何人。為了保護父親，立美不惜一切代價阻止媒體報導秀蘭與父親的關係，同時也與檢察官李國倫（鳳小岳 飾）一起展開調查。', '2023-10-27', 'https://upload.wikimedia.org/wikipedia/zh/1/18/Lost_In_Perfection.jpg', 1),
(7, '等一個人咖啡', '這間咖啡聽不只烘出香醇的咖啡，還醞釀出新進員工、員工同學、咖啡廳常客之間的複雜糾葛的感情。', '2014-08-15', 'https://upload.wikimedia.org/wikipedia/zh/1/18/Cafe.waiting.love_poster.png', 1),
(8, '想見你（電影版）', '神秘的錄音帶將年輕女子捲入錯綜交纏的時間迴圈，她拼命想與深愛的男人相守，卻似乎注定要一次次失去對方。', '2023-12-20', 'https://upload.wikimedia.org/wikipedia/zh/7/78/Someday_or_One_Day_Film.jpeg', 1),
(9, '我的麻吉4個鬼', '地獄倒楣男阿緯舉目無親無依無靠，老闆跑路工作也丟了，萬念俱灰下只想結束自己倒楣的人生，沒想到不僅死不成還被4個冤鬼纏身，衰上加衰！經過發發大師「降落」指點，只要完成4鬼遺願就可以送他們安心上路，於是阿緯只好心不甘情不願開始一段幫鬼圓夢的超級任務。 過程中和救護員筱茵越走越近，阿緯的命運被這群鬼帶到一條全新的岔路……', '2023-08-18', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSME5gJGN42dwREENGzOoJYNhaqthkO_BJmIb8aeoQK2g&s', 1),
(10, '當男人戀愛時', '討債流氓阿成（邱澤 飾），看似兇狠、實際上卻有顆柔軟的心，他在一次討債過程中對債主女兒浩婷（許瑋甯 飾）一見鍾情，進而提出要用「塗鴉合約」，以吃飯、散步的方式來抵銷她們家的債務。這種吊兒啷噹的態度，簡直顛覆了浩婷的世界，兩人完全不對盤的個性，究竟會擦出怎麼樣的火花？', '2021-04-01', 'https://www.nlpi.edu.tw/FileDownLoad/MovieFestival/20221124140429656.jpg', 1),
(11, '我的婆婆怎麼把OO搞丟了', '蘇家婆婆彩香粉紅少女心大發，追星不成竟弄丟大明星OO引來警方關切，蘇家噗嚨共子女紛紛傻眼，兒子秉仁不負責落跑、女兒秉愛揮刀找線索、秉忠秉孝不孝提議報警。為幫婆婆找回ＯＯ，小鷗與發貴感情陷危機，還與閨密大美一同被上銬進警局！最愛婆婆的一哥又將如何迎戰情敵，贏回彩香的心？', '2023-01-13', 'https://taiwancinema.bamid.gov.tw/ImageData/60/2022/89522/t_89522.jpg?v=202405070924327248187', 1),
(12, '海角七號', '年輕搖滾歌手試圖將一捆送錯地址的久遠情書送到原始收件人手中，並在過程中與一名星途不順的模特共譜戀曲。', '2008-08-22', 'https://upload.wikimedia.org/wikipedia/zh/8/85/Cape_No7.jpg', 1),
(13, '複身犯', '是無辜的受害者？還是心懷不軌的加害者？一場離奇的意外爆炸車禍，竟牽扯出駭人聽聞的連環兒童失蹤案件。警方為了追查失蹤兒童的下落，五名罹難乘客被迫死而復生，利用意識上傳技術借屍還魂。五名人格就這樣上傳至一副軀殼：一個被判死刑的腦死植物人。五個嫌疑犯、五種版本的「真相」，卻讓案件更撲朔迷離。', '2021-02-26', 'https://upload.wikimedia.org/wikipedia/zh/b/b1/%E8%A4%87%E8%BA%AB%E7%8A%AF.jpg', 1),
(14, '我的少女時代', '林真心，一個平凡至極的高中女生，偏偏喜歡上全校最受歡迎的男神歐陽非凡。 偶然發現他和校花陶敏敏交往的秘密；在喜歡敏敏的流氓學生徐太宇的脅迫下，兩人組成「失戀陣線聯盟」，誓言拆散這對金童玉女，幫彼此倒追心上人。 一個LOSER壁花如何走到白馬王子身邊？一個地痞混混如何把到聖女校花？兩人一路笑料百出。', '2015-08-13', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxZ1JTa6dqVUsu3h9tNt6qAgLAhZtDscg3BNwOzeP_1g&s', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `record`
--

CREATE TABLE `record` (
  `r_id` int NOT NULL,
  `r_name` varchar(10) NOT NULL,
  `r_acc` varchar(50) NOT NULL,
  `r_date` date NOT NULL,
  `e_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `record`
--

INSERT INTO `record` (`r_id`, `r_name`, `r_acc`, `r_date`, `e_id`) VALUES
(8, 'test', '1', '2024-04-11', 4),
(9, 'aaron', 'oa@aaron.com.tw', '2024-04-12', 4),
(10, 'abc', '123@mail.com', '2024-05-07', 1),
(11, 'aaa', '1231@', '2024-05-07', 2),
(12, 'aaa', '1231@', '2024-05-08', 2),
(13, 'David', 'David@gmail.com', '2024-05-14', 2),
(14, 'David', 'David@gmail.com', '2024-05-15', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `schedule`
--

CREATE TABLE `schedule` (
  `sch_id` int NOT NULL,
  `s_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `schedule`
--

INSERT INTO `schedule` (`sch_id`, `s_id`) VALUES
(26, 3),
(27, 23),
(24, 29);

--
-- 觸發器 `schedule`
--
DELIMITER $$
CREATE TRIGGER `CheckRowCount` BEFORE INSERT ON `schedule` FOR EACH ROW BEGIN
  IF (SELECT COUNT(*) FROM schedule) >= 5 THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Cannot insert more than 5 rows';
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- 資料表結構 `scomplication`
--

CREATE TABLE `scomplication` (
  `sc_id` int NOT NULL,
  `sc_name` varchar(20) NOT NULL,
  `sc_pic` varchar(300) NOT NULL,
  `sc_intro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `scomplication`
--

INSERT INTO `scomplication` (`sc_id`, `sc_name`, `sc_pic`, `sc_intro`) VALUES
(1, '揮別秋光 啟幕四季<br>最後一場旅行', 'https://www.jrtimes.tw/upload/control/3c51a299-5739-47d4-8090-4521764cf9f9.jpg', ''),
(2, '一起去海邊吹風吧', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/aa/29/8b/beach.jpg?w=1200&h=-1&s=1&cx=1253&cy=1217&chk=v1_0adb78ae72340253082e', ''),
(17, '重拾台灣歷史', 'https://lh6.googleusercontent.com/proxy/ftE9b5G2aCq3-kbAMJ_NAjO27AJM_IE8J0JzWFTt_81q5l08_xCbNHNq3ql4ArREB9TKQhLBUY9QiwO1gh7cBWSb2pqlBqALZlRY', ''),
(19, '華燈初上的美食', 'https://www.woo-oh.com/archive/image/edcontent3/hikari0001.jpg', '');

-- --------------------------------------------------------

--
-- 資料表結構 `spot`
--

CREATE TABLE `spot` (
  `s_id` int NOT NULL,
  `s_name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `s_intro` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `s_info` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `s_pic` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `s_photo` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `s_add` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `lat_lon` text NOT NULL,
  `frame` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `spot`
--

INSERT INTO `spot` (`s_id`, `s_name`, `s_intro`, `s_info`, `s_pic`, `s_photo`, `s_add`, `lat_lon`, `frame`) VALUES
(1, '臺北市立永春高級中學', '（英語：Taipei Municipal Yongchun Senior High School，簡稱YCSH），位在臺北市信義區四獸山的象山，比鄰永春陂生態濕地公園與大都會客運松職站。', '營業時間:周休二日<br>電話:0227272983', 'https://lh3.googleusercontent.com/p/AF1QipORPmLvd7tyoNPcS5t5ObGiJ5Vg_YxcUXH6G6c2=s1360-w1360-h1020', 'https://s.yimg.com/ny/api/res/1.2/919kNs4UcvNsBG6BBXbS2Q--/YXBwaWQ9aGlnaGxhbmRlcjt3PTk2MDtoPTY0MDtjZj13ZWJw/https://media.zenfs.com/zh-Hant-TW/homerun/newtalk.tw/0817ebd367df638b18f3f4b1ecf1ab57', '台北市信義區松山路654號', '25.03363493432403, 121.57962490097616', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.017665963498!2d121.57626677550553!3d25.033474538312475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442aba8bf68805d%3A0xf1629ebf3c9f4897!2z6Ie65YyX5biC56uL5rC45pil6auY57Sa5Lit5a24!5e0!3m2!1szh-TW!2stw!4v1715527842273!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(2, '小半樓', '2014年12月，方啟文老師成立小半樓，以陶來交流，讓學生有發揮的空間。', '營業時間:14:00~19:00 (日、一、二休息) <br>\r\n電話:0982 816 009 ', 'https://dcm.s3.hicloud.net.tw/new/collection/2020-12-07/b8bcec92-238f-42a3-8a86-48d09d464eb1/5ca5bf75-766f-485b-a984-15fd0ad0bc7f.jpg', 'https://mimihan.tw/wp-content/uploads/20200229195044_12.jpg', '台南市民權路一段199巷7號', '22.999924450294113, 120.242087753613', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14690.620379766839!2d120.2420663!3d22.9997072!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e76885bb4cd67%3A0x671f80339fd563bc!2z5bCP5Y2K5qiTIOmZtiDlkpbllaEg6Iy2!5e0!3m2!1szh-TW!2stw!4v1715527787221!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(3, 'Sugar Bar', '設有戶外雅座 · 提供好喝的雞尾酒 · 提供吧台餐點', '營業時間:周日公休<br>電話：02 2542 5659', 'https://taiwantour.info/wp-content/uploads/2022/03/1647221876-6d96d7b822c4efdbec81e87e78767262.jpg', 'https://obs.line-scdn.net/0hjNh_pOTiNWFVJiE7OItKNm5wORBmUzFnLhQnGSNya1EsRXtidUIqV3A6bgN5Rm5nPRR_G3kmbwZ-QSUzaBV4AQ', '台北市中山區林森北路107巷24號1樓', '25.050200992328783, 121.52574090912768', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.5290907474887!2d121.52319817550591!3d25.0500503376449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a965f53c0ff9%3A0x8bd1bf29f3b9c325!2sSugar%20Bar!5e0!3m2!1szh-TW!2stw!4v1716475994992!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(4, '日月老茶廠', '日月老茶廠<br>\r\n感受陽光土地、日月星辰<br>\r\n為茶調和出獨特的魅力', '營業時間:08:00 ~ 17:00 <br>電話:0492895508', 'https://travel.nantou.gov.tw/wp-content/uploads/2021/10/AT038-日月老茶廠-IG-kai_foodtravel.jpg', 'https://www.niusnews.com/upload/imgs/default/2021_12_ARENA_12/GoldLeaf/256787799_216059947332518_5195444790666829943_n.jpeg', '南投縣魚池鄉有水巷38號', '23.892615533753435, 120.92292289560068', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7295.845902581984!2d120.9133956935791!3d23.89235070000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3468d64c409b94a3%3A0xc85ae6d33f31ca69!2z5pel5pyI6ICB6Iy25bug!5e0!3m2!1szh-TW!2stw!4v1716477591536!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(5, '湖心亭', '湖心亭所在地為日治明治36年（1903）開園之「臺中公園」，園內原有自然水塘，經人工整修後成池。明治41年（1908）10月為慶祝縱貫鐵路全線通車典禮，於池中建亭，來臺主持通車式的日本閑院宮載仁親王曾於此亭休憩、觀看表演。<br>\r\n\r\n戰後臺中公園更名為「中山公園」，池改稱「日月湖」，亭則改稱「湖心亭」。民國88年（1999）市府以湖心亭為縱貫鐵路通車典禮紀念見證，且長期為臺中市的地標，具有無可取代的代表性，指定為市定古蹟。<br>\r\n\r\n民國89年（2000）「中山公園」才又改稱「臺中公園」迄今。', '營業時間:06:00 ~ 22:00<br>電話:0933511377', 'https://www.tchac.taichung.gov.tw/uploads/tchac/information/large/b590f872-f154-4117-8e40-c0526f49b07d.jpg', 'https://static.rti.org.tw/assets/thumbnails/2022/03/11/03d9ac98a8983cb63cd40e737a99ce70.png', '台中市北區自由路二段湖心亭', '24.143866084384676, 120.68419246677222', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.7995935489253!2d120.68162827548214!3d24.143675173564336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d6b764b8677%3A0xb079eb901c52f836!2z5rmW5b-D5Lqt77yI5biC5a6a5Y-k6Lmf77yJ!5e0!3m2!1szh-TW!2stw!4v1716477638059!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(6, '林安泰古厝', '林安泰古厝，又稱榮泰厝（臺語：Îng-thài-tshù），是位於臺灣臺北市中山區濱江公園的四合院，原於乾隆年間建在今大安區，1978年因敦化南路拓寬而面臨拆除，引起古蹟保護運動，促進《文化資產保存法》立法，1984年遷建後作民俗文物館之用，今列歷史建築。', '營業時間：每星期二至星期日09:00-17:00（最後入園時間為16:45）<br>電話：0225996026', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/林安泰古厝民俗文物館雨前樓、隨月閣、映月池.jpg/220px-林安泰古厝民俗文物館雨前樓、隨月閣、映月池.jpg', 'https://v3-statics.mirrormedia.mg/images/20230804203416-1b8224beea6da698578e093b2482459e-w2400.webP', '台北市中山區濱江街5號', '25.07223530770075, 121.53034873796399', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.8814495528045!2d121.52779527550655!3d25.07200693675979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a95490469cf3%3A0x657243debe0532cd!2z5p6X5a6J5rOw5Y-k5Y6d!5e0!3m2!1szh-TW!2stw!4v1716477687571!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(15, '鳳和高中', '臺南市私立鳳和高級中學，簡稱鳳和中學，位於臺灣臺南市柳營區東昇里，創校於1962年，設有國中部。因為少子化的影響，辦學59年後，在108學年度（2019年）停止招生', '停止營業', 'https://lh3.googleusercontent.com/p/AF1QipMGj7JQKAS2x_fRjS_n7nmHgyz-D8x6tjeIe864=s1360-w1360-h1020', 'https://mimihan.tw/wp-content/uploads/20200229195033_86.jpg', '台南市柳營區中山東路二段1330號', '23.27965293912004, 120.32602031266975', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d938238.6917146447!2d119.10653457812501!3d23.2796354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e8614209bb419%3A0xf8eadd310963357c!2z6Ie65Y2X5biC56eB56uL6bOz5ZKM6auY57Sa5Lit5a24!5e0!3m2!1szh-TW!2stw!4v1716477727874!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(16, '閒情茗品屋', '是一家傳統的早餐店，店內販售著鍋燒意麵、三明治、吐司等餐點，這裡的鍋燒意麵很有名，來店的客人幾乎都會來上一碗', '電話：06 265 1951<br>營業時間：06:30~18:00（星期日到14:00）', 'https://mimihan.tw/wp-content/uploads/20200229201954_76.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR64hCFT7-10P57M2T3-oAi3-_HciFLitucelI_A2Jzlw&s', '台南市南區金華路二段57巷97號', '22.978664664364103, 120.18766803827106', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.231006316805!2d120.18511457545313!3d22.97853131796994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e75dead1b5a13%3A0x2244365a5e68923e!2z6ZaS5oOF6IyX5ZOB5bGL!5e0!3m2!1szh-TW!2stw!4v1716477780939!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(17, '台南二寮觀日亭', '二寮日出是全臺灣海拔最低的觀日出勝地，被譽為「最接近城市的曙光」。', '開放時間：全天開放<br>門票資訊：無門票收費<br>連絡電話：(06)6900399', 'https://www.siraya-nsa.gov.tw/image/86432/1024x768', 'https://mimihan.tw/wp-content/uploads/20200229195056_67.jpg', '台南市左鎮區二寮里', '22.99288865851816, 120.40991817690548', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.8082179608264!2d120.40753637545347!3d22.994078767390583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e6f15d5ea73f9%3A0xaab02ee62f7e6d0f!2z5Y-w5Y2X5LqM5a-u6KeA5pel5Lqt!5e0!3m2!1szh-TW!2stw!4v1716477882636!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(18, '龍泉冰店', '龍泉冰店是在地百年老店，裡頭賣著傳統的八寶冰、湯圓、剉冰。', '電話：06-5721796<br>營業時間：07:00~19:00', 'https://today-obs.line-scdn.net/0hTADezgxkC255HCNWpdV0OUNKCAFKcBhtHSpabTpyVVoAKBttRXIRAFoVVF4AK0wwFy1NDlkVEF8HJB9vTHMQ/w1200', 'https://s.yimg.com/ny/api/res/1.2/4Znu_C6IL1ZwlFTu2t0Ldw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTQyNw--/https://media.zenfs.com/zh-TW/mirrormedia.mg/716574de58f9d48df21b66a9511e530c', '台南市麻豆區平等路2-4號', '23.18488658989744, 120.24823978208785', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.600863639754!2d120.24563267545827!3d23.18476331025588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e7e80803f61db%3A0xa9c78d6edb7fd376!2z6b6N5rOJ5Yaw5bqX!5e0!3m2!1szh-TW!2stw!4v1716477907021!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(19, '牛庄社區', '以農立庄、克苦難勞', '電話：06 583 0536', 'https://sixstar.moc.gov.tw/g_upload_sixstar/community/image/A0/B0/C0/D0/E21/F555/85652a30-c04a-4485-a92f-43127849d602.JPG', 'https://stunning-asia.com/wp-content/uploads/%E6%83%B3%E8%A6%8B%E4%BD%A0%E6%8B%8D%E6%94%9D%E5%9C%B0%E9%BB%9E-%E7%89%9B%E5%BA%84%E7%A4%BE%E5%8D%80.jpg', '臺南市善化區牛庄里牛庄138-2號', '23.14041176991071, 120.31657609779347', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.8430425679803!2d120.31426957545703!3d23.139411711957585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e7d424d1c1d2f%3A0x7295cc8d7ce9fada!2z54mb5bqE56S-5Y2A!5e0!3m2!1szh-TW!2stw!4v1716477928056!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(20, '小巷亭食品有限公司', '主要走的是台式日本料理，價格相對是比較平價一些所以深受歡迎', '營業時間：11:30-20:00（週二公休）<br>電話：0225552386', 'https://ak-d.tripcdn.com/images/0100i120009cmv7639917_Z_640_10000_R5.png_.webp?proc=autoorient&proc=source%2ftrip', 'https://today-obs.line-scdn.net/0hJZCWZ6vqFXV-LgKkni5qIkZ4GQRNSA98XE9TFwt6HhVaAltwSkpGFgktGVkDGlVzXhwKQV19Tk1QGgEiFw/w644', '台北市大同區南京西路250巷8號', '25.053526116948607, 121.5154255460009', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.4267793648883!2d121.51285047550606!3d25.05352013750497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a96ca1961a57%3A0x4f88f2dd49ddde71!2z5bCP5be35Lqt6aOf5ZOB5pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1716477972057!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(21, '亞里士餐廳', '充滿懷舊氛圍的精緻餐廳，供應傳統牛排、雞肉與海鮮料理。', '營業時間：11:30-14:30 17:30-21:30（週二公休）<br>電話：0225615730', 'https://ak-d.tripcdn.com/images/01054120009cmvbnq63BB_Z_640_10000_R5.png_.webp?proc=autoorient&proc=source%2ftrip', 'https://bucket-img.tnlmedia.com/cabinet/files/consoles/4/teams/8/2022/9/H5ZJf05f6wZIvOpyrZ4NVEA5f7YLQLvV5gGDNaqL.jpg?auto=format%2Ccompress&fit=max&w=1920', '台北市中山區長安東路一段27號', '25.049411141139487, 121.52427380598944', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.5484086491583!2d121.52170037550593!3d25.049395137671166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a96f749aa501%3A0xa00bed6be6043d32!2z5Lqe6YeM5aOr6aSQ5buz!5e0!3m2!1szh-TW!2stw!4v1716477999689!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(22, '華西街珍果', '華西街珍果販售許多新鮮果汁、水果冰品等，絕對是炎炎夏日時必來的小攤！', '營業時間：12:00-00:00<br>電話：0223089390', 'https://tluxe-aws.hmgcdn.com/public/article/2017/atl_20220704101914_143.jpg', 'https://obs.line-scdn.net/0hQlWsfdZpDkNqChny9JNxFFNcAjJZbhtFBHJFcRoIWHtPPFUWAT5AOUpaACdbak5AA3BIJxwPVHVFO0oSVGg', '台北市萬華區華西街113攤', '25.038545127706893, 121.4984417956346', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.872968315126!2d121.49586687550556!3d25.038384738114743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a9a947d828a5%3A0x381b89d65748e210!2z6I-v6KW_6KGX54-N5p6c!5e0!3m2!1szh-TW!2stw!4v1716478020472!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(23, '珍棧神奇小吃', '招牌有切仔麵、麻油炒豬肝等古早味小吃，而由珍棧神奇小吃私房手作的「小魚乾辣椒醬」是內行人必點。\r\n\r\n\r\n', '營業時間：06:00-13:00（週一公休）<br>電話：0970762828', 'https://www.tony60533.com/wp-content/uploads/2023/10/4-9.jpg', 'https://today-obs.line-scdn.net/0hGDHOb2W-GGt1Ngw19bFnPE1gFBpGUAJiV1hQWgRkRwhaGg01HVRLCFE2FUdQUQxoVQBTD1M3EltQD15qGw/w644', '新北市三重區重陽路一段44巷91號', '25.057921670261994, 121.48394346994907', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.2971092911084!2d121.48136897550609!3d25.05791713732773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a8e4f447dbff%3A0xf9d966be17091be6!2z54-N5qOn56We5aWH5bCP5ZCD!5e0!3m2!1szh-TW!2stw!4v1716478040952!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(24, '茶之鄉泡沫紅茶店', '茶之鄉泡沫紅茶店是不少學生課餘時間聊天的好地方，招牌必點為蔥爆肉飯，除了各式飲料外，學生們也大推毛豆及炸豆腐等小點！', '營業時間：11:30-23:30<br>電話：0222053507', 'https://live.staticflickr.com/65535/52154076462_3f12d0c70a_b.jpg', 'https://www.niusnews.com/upload/imgs/default/202201_CHOU/0103L/9.jpg', '新北市新莊區民安路144巷9號1樓', '25.02525611650025, 121.42408651455757', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.260028508339!2d121.42150897550529!3d25.02524813864365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7f2de0f0d15%3A0x53bd153e6bc4c3ab!2z6Iy25LmL6YSJ5rOh5rKr57SF6Iy25bqX!5e0!3m2!1szh-TW!2stw!4v1716478063735!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(25, '婷亭翠玉', '簡餐餐廳', '已停業', 'https://www.garnish.tv/page/pimg/thumbnail/20190504140613.png', 'https://www.niusnews.com/upload/imgs/default/202201_CHOU/0103L/010.jpg', '台北市大安區安和路二段174號', '25.0253287002013, 121.54992902479704', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.257807445417!2d121.54735527550511!3d25.0253235386406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442aa323d9983e9%3A0xb440869f78fadc53!2zMTA25Y-w5YyX5biC5aSn5a6J5Y2A5a6J5ZKM6Lev5LqM5q61MTc06Jmf!5e0!3m2!1szh-TW!2stw!4v1716478118499!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(26, '紅樓夢美容院', '已有四十多年的開店歷史，是許多住在附近的長輩洗頭去處', '營業時間：09:00-19:00（週日公休）<br>電話：0223119369', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJutwOgd_i7AkDygyPEHKFCsmgW_NJIWpDy2CWSBytUA&s', 'https://www.niusnews.com/upload/imgs/default/202201_CHOU/0103L/10.jpg', '台北市中正區重慶南路一段44號', '25.04459790934458, 121.51311415468278', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.6901059838897!2d121.51053907550572!3d25.044588737864725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a90cbb848557%3A0x762a370c4dc4f594!2z57SF5qiT5aSi576O5a656Zmi!5e0!3m2!1szh-TW!2stw!4v1716478181768!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(27, '姜阿新洋樓', '建於1946年的洋樓，費時3年完工，有著獨特美感，呈現在中西融合的形式風格。\r\n\r\n從洋樓外觀即可欣賞多種高難度且精巧的泥作工法，並融合了歐洲傳統的半圓拱、凸窗等古典建築技法，內部的雕刻裝飾則帶有東方吉祥寓意，並展示出許多珍貴的古董家俱，是棟東西並融，美侖美奐的建築傑作。', '全預約參觀制<br>營業時間：10:00-17:00（週一公休）<br>電話：035803586', 'https://cloud.culture.tw/e_new_upload/task/ec0c4582-6042-444b-9a5a-3afe8cb1b3ff/20060724000014/5687ab0a2f1613fa9a730b05bfbc6f855beb3892.jpg', 'https://gcp-obs.line-scdn.net/0hJOftjhwBFWBbDQYTsONqN2JbGRFofxNoInVYACoNH1EmPE5iNTtcGnsMQlJqNVc-YHddDilZQ1ZzaQE1Yzw/w1200', '新竹縣北埔鄉北埔街10號', '24.700145871613227, 121.05788396597805', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.778309361659!2d121.05531777549669!3d24.700146451653424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34684894e00aedad%3A0x640291f4c7cf0295!2z5aec6Zi_5paw5rSL5qiT77yI5YWo6aCQ57SE5bCO6Ka977yJQ2hpYW5nIEEtSHNpbiBNYW5zaW9u!5e0!3m2!1szh-TW!2stw!4v1716478251441!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(28, '大溪老茶廠', '從1926年便開始營業。比起單純的觀光工廠，這是一座「還在運作的茶葉博物館」。走進廠區，可以看見一幅幅老照片，以及製茶的老機器，訴說著一個時代的繁華。同時間，還能看見持續製茶的工作現場。', '營業時間：09:30-17:00（六日營業至17:30）<br>電話：033825089', 'https://travel.tycg.gov.tw/content/images/attractions/34120/1024x768_attractions-image-foxkg865kkkztkogulbyeq.jpg', 'https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/291054615_368388712099640_5369057413479161314_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_ohc=exryYDfN8TMQ7kNvgEyHJ66&_nc_ht=scontent-tpe1-1.xx&oh=00_AfB1nQuG7Fn6C6a8Z6j_Z_I8O6h0IWH1lCZZhfwtsgrxaQ&oe=663D66AE', '桃園市大溪區復興路二段732巷80號', '24.830717496632893, 121.32839602434312', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.971128439465!2d121.32579807550009!3d24.830660946449093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3468171ee0081a35%3A0xe7343fef248d4897!2z5aSn5rqq6ICB6Iy25bug!5e0!3m2!1szh-TW!2stw!4v1716478274982!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(29, '殷海光故居', '殷海光故居位於溫州街十八巷十六弄內，是日治時期台大教授的宿舍。1949殷海光搬遷來台後，便居住於此。此棟屋舍為一層樓之日式木造房屋，屋舍周邊充滿綠意點綴。屋內保存了殷海光先生重要的文化資產，見證追求自由的思想家曾經的過往。', '營業時間：11:00-17:00（週日、一公休）<br>電話：0223645310', 'https://www.travel.taipei/content/images/attractions/64826/1024x768_attractions-image-qgzrseu1d0sokqb-0kczgg.jpg', 'https://mook-aws.hmgcdn.com/public/article/a2/28661/A28661_1642156731_7.jpg', '台北市大安區溫州街18巷16弄1之1號', '25.02418004600887, 121.53198903912343', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.2915910799557!2d121.52941507550533!3d25.024176638686804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a9860fd5d69f%3A0x38445c6a26ce2b23!2z5q635rW35YWJ5pWF5bGF!5e0!3m2!1szh-TW!2stw!4v1716478296697!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(30, '瑞舞丹大戲院', '自1962年開始營業到1989年歇業，至今已有50多年歷史的戲院。走進戲院內，能夠看到木製的長椅與看台，以及30多年前的電影公告與售價，好像回到到那令懷念的舊時光呢！', '只有活動日會對外開放', 'https://www.funhualien.com.tw/wp-content/uploads/20200116144000_53.jpg', 'https://mook-aws.hmgcdn.com/public/article/a2/28661/A28661_1642156731_8.jpg', '花蓮縣富里鄉永安街106之6號', '23.174337403208444, 121.24826363840357', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.887166526024!2d121.24572107545787!3d23.17431791064812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346f0d5b20a39d0d%3A0x95d3973c79fb6f7b!2z55Ge6Iie5Li55aSn5oiy6Zmi!5e0!3m2!1szh-TW!2stw!4v1716478323282!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(31, '大稻埕十連棟', '位在迪化街的十連棟，因鄰近淡水河水門與台北橋，具備地理優勢，而形成以碾米廠為主的產業聚落，除了了森元洋線外，十連棟六個商號有五家是經營碾米廠的。雖然如今當時的繁華風貌已不再，加上後來改建，但仿巴洛克建築二層樓建築門面，仍舊保存完善。', '營業時間：11:00-21:00<br>電話：0225573606', 'https://www.peopo.org/files/public/styles/full/public/images/28752/%E5%9C%96%E7%89%87%E5%85%AB.jpg?itok=lX49Hxss', 'https://blog.myvideo.net.tw/wp-content/uploads/2023/11/editor7142331023.jpg', '台北市大同區迪化街一段362號', '25.06277729571704, 121.50919004348198', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.154102494325!2d121.50661827550636!3d25.06276553713244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a93e64d1b365%3A0x99eb9b0106f7ecab!2z6L-q5YyW6KGX5Y2B6YCj5qOf!5e0!3m2!1szh-TW!2stw!4v1716478348014!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(32, '台北城人文茶館', '台北城人文茶館，位於台北鬧區西門町，走進店裡彷彿穿越時光隧道，濃厚的復古風裝潢，讓人陶醉在其中，可見兩旁牆上掛著舊台北的掛畫。', '營業時間：10:00-01:00<br>電話：0223883528', 'https://disk.sharelife.tw/gallery/49176-75382/e027150520441314.jpg', 'https://images.newtalk.tw/resize_action2/800/album/album/1/5c174f1f12f7b.jpg', '台北市萬華區武昌街二段85-1號', '25.045312659921773, 121.50478896347525', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.6690817631807!2d121.50221347550583!3d25.04530193783613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a908c8bf5b57%3A0x399a1e302e9fbb90!2z5Y-w5YyX5Z-O5Lq65paH6Iy26aSo!5e0!3m2!1szh-TW!2stw!4v1716478370330!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(33, 'Santé Lounge & Bar', '店內環境舒適、輕鬆，有彷彿在朋友家客廳喝酒的自在感，酒類價格合理、選擇多樣，多是輕鬆易入口的風味，單杯酒有時會出現厲害款式，還有簡單佐酒小食，環境理想。', '營業時間：14:00-12:00（週一公休）<br>電話：0225552386', 'https://d1r3ekpbhdi0gp.cloudfront.net/uploads/photo_attachment/picture/1358/90449a6e56c6b73b.jpg', 'https://images.newtalk.tw/resize_action2/800/album/album/1/5c174f878cb90.jpg', '台北市大安區復興南路一段295巷24號', '25.0350731527523, 121.54529119248092', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.9716592218633!2d121.54271237550553!3d25.035035838249634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abd3cbc371a9%3A0xc1edd744fa5b29!2sSant%C3%A9%20Lounge%20%26%20Bar!5e0!3m2!1szh-TW!2stw!4v1716478409965!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(34, '4F劇場咖啡', '坐落於中山堂四樓，在喧鬧的西門町商圈中充滿人文歷史、靜謐的咖啡廳。', '營業時間：11:00-19:00（週一公休）<br>電話：0223315055', 'https://www.filmcommission.taipei/retrieve/20220616154723.JPG', 'https://images.newtalk.tw/resize_action2/800/album/album/1/5c174fd1cd79a.jpg', '台北市中正區延平南路98號', '25.042510909683646, 121.5103561037312', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.736869011506!2d121.50762077550574!3d25.04300233792869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a90bbfc240a1%3A0xb02302a258025478!2zNEbliofloLTlkpbllaE!5e0!3m2!1szh-TW!2stw!4v1716478454279!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(35, '金德興藥舖', '阮家古厝，位於菁寮老街上，在地人稱他為「金德興藥舖」，屬於街屋形式建築，列為直轄市定古蹟的瑰寶。阮家古厝約建於清乾隆年間(西元1734-1795年)，屬於傳統街屋形式建築，並具有閣樓形式，在台灣算是很少見的，古厝整體為木造結構，由福州的杉木榫接而成，未見一釘一卯，且還保留著古色古香的中藥櫃。', '營業時間:10:00~17:00 (二、三休息) <br>電話:(06)6621261 ', 'https://lh4.googleusercontent.com/proxy/QtR2WAnd8MadH4zJWZRZx-ZBYvvOJ8WmnH_TpCr143iNHzjHtFhWFFldJhVGo6fta-zhlq28x_6fU-lm9Dr4vuZx2gbZe4QywZ_mEQ', 'https://www.chasetogether.com.tw/upload_public/article/lhofo6jqsy.jpg', '台南市後壁區墨林里菁寮191號', '23.379235587655984, 120.33594615373974', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.2483046824523!2d120.33340507546293!3d23.379232902924215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e85530e0a6e51%3A0xf4ed496187d5c4af!2z6YeR5b636IiI5Lit6Jel6Yuq!5e0!3m2!1szh-TW!2stw!4v1716478481896!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(40, '綠川書橋', '綠川書橋是台中市綠川水岸的一個新景點。這裡保留了原本河道兩排的老樹，並在人行步橋上設置了桌椅和書架，讓遊客可以在欣賞美景的同時閱讀書籍。一座跨越15米的集成木構橋，其特殊的簍空造型讓人眼前一亮。橋上設有座位和書箱，讓民眾們可以在這裡閱讀、喝咖啡，感受老樹和老宅的風華。此外，附近還有一本書店，增添了不少人文氣質。', '開放時間：全天開放', 'https://buuz.tw/wp-content/uploads/20220410115553_50.jpg', 'https://today-obs.line-scdn.net/0hjsh4O5-mNVxVTSYXKotKC20bOS1mKy9Vdyt7aXMePGh9YXAOOS5mP3NPO3ArKHFedSgoMiBJbTwqdXQKPQ/w1200', '台中市南區復興路三段348巷', '24.132217557016727, 120.67954868047501', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.1259612431413!2d120.6769729754819!3d24.13221417401097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d71b03a76cf%3A0x98e8a9bd071f89f6!2z57ag5bed5pu45qmL!5e0!3m2!1szh-TW!2stw!4v1716478501898!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(41, '龍來冰果室', '台北市萬華區的龍來冰果室（龍來果汁）位於廣州街88號，近捷運龍山寺站3號出口步行五分鐘內即可到達，龍來冰果室（龍來果汁）是一間非常具有古老味的冰果室，在台北早期繁華的萬華區，位在剝皮寮舊址（現在已成為歷史古蹟保存）的對面，早期大概是小姐客人必來一盤的水果切盤點心，如今在夜幕低垂之際，龍來冰果室成為整條街上最亮眼的那間店。', '暫時關閉', 'https://www.jumpman.tw/wp-content/uploads/2021/03/20210216-DSC09258.jpg', 'https://gcp-obs.line-scdn.net/0hxKsSYFs0J2ROKjPiRa9YM3d8KxV9WCFsN1I7Bmt6e1VlGnw7c0k9Hm4sKlF_SjQ6IFBsCmMsKl1iTWFldE4/w1200', '台北市萬華區廣州街88號', '25.03677027889902, 121.50255928029149', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.928711673576!2d121.50002727550562!3d25.036493238190893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a9a8a718445d%3A0x9cffdc5cf35b0c78!2zMTA45Y-w5YyX5biC6JCs6I-v5Y2A5buj5bee6KGXODjomZ8!5e0!3m2!1szh-TW!2stw!4v1716478546215!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(42, 'E7PLAY 新莊館', '全台首創一票玩到底的『多功能複合式室內休閒場館』，一張門票入館，館內數十種設施通通任你玩、玩到飽、玩到瘋！ E7新莊館，結合了保齡球、電子飛鏢吧、撞球、動感遊戲機台、雜誌漫畫+桌遊，與按摩椅區等十幾項運動休閒設施。南台灣最新型態、最受歡迎的運動娛樂主題館，每年超過25萬進館人次體驗過這股新感覺的潮流。', '開放時間：一~五 12:00-23:00，六、日 10:00-23:00<br>連絡電話：(02)82015771', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/de/23/eb/caption.jpg?w=1200&h=1200&s=1', 'https://gcp-obs.line-scdn.net/0hamdGpcF-PkJZPirEU0FBFWBoMjNqTDhKIEZyIHw6YnIkXGVBYV0jOHltYXBoB31ANURwICg6N3ZxDy1GMQg/w1200', '新北市新莊區民安路188巷5號7F', '25.023425596117374, 121.42493095341685', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.319726802033!2d121.42233457550516!3d25.0232214387252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7f372aeac87%3A0x8cbb7cf4b6337cde!2zRTdQTEFZIOaWsOiOiumkqA!5e0!3m2!1szh-TW!2stw!4v1716478570014!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(43, '祖師廟口沙茶牛肉大王', '本店今年（113年）已有七十一年歷史，自製沙茶口味，全省僅此一家，別無分店。感謝舊雨新知，繼續惠顧。ps:112年9月1日起營業至下午五時止。', '營業時間：11:00-17:00(周日公休)<br>連絡電話：(02)23891608', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7VWoYtJOD75SgXZB3hob6-aUe4sOJ3gRQY0kYOtsuVg&s', 'https://s.yimg.com/ny/api/res/1.2/lLRGjqvn2rfMRL.t4EA3Uw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTk2MDtoPTYwMDtjZj13ZWJw/https://media-mbst-pub-ue1.s3.amazonaws.com/creatr-uploaded-images/2020-09/40350f30-02d9-11eb-bdfb-fbeb411259b8', '台北市萬華區貴陽街二段115之18號', '25.040220064085023, 121.5024842097925', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.822744345736!2d121.49994147550579!3d25.040088838046124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a9a808493fbb%3A0x8f08f34f0ec8ffab!2z56WW5bir5buf5Y-j5rKZ6Iy254mb6IKJ5aSn546L!5e0!3m2!1szh-TW!2stw!4v1716478594914!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(44, '阿隆麵攤', '一家隱藏在巷弄內的溫馨小麵攤', '營業時間:08:00~20:00 (周休二日) <br>電話:(02)23049507', 'https://lordcat.tw/wp-content/uploads/2022/08/1659424092-79098832e869b16a88bc623a04f5f7af.jpg', 'https://www.woo-oh.com/archive/image/momsiteview__8_.jpg', '台北市萬華區大理街31號', '25.034831774478032, 121.50224848214187', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d464318.66362724325!2d120.76981286382592!3d24.606806293725153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a9af5ca1556f%3A0xdf26284d5209877b!2z6Zi_6ZqG6bq15pSk!5e0!3m2!1szh-TW!2stw!4v1716478632048!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(45, '鳩之澤溫泉', '鳩之澤因群山環繞，多望溪穿越，而形成澤地，加以棲息鳥類繁多，鳥鳴聲縈繞於翠谷幽蘭，不絕於耳，而得其名。\r\n流水潺潺、鳩鳴關關，這個從詩境裡走出來的景致，讓人將城市的熙熙攘攘拋卻腦後。目前區內規劃有「鳩之澤溫泉」與「鳩之澤自然步道」，來到此地請用最舒適的節奏，享受森林浴與溫泉浴，讓身心都煥然一新。', '營業時間:09:00-19:00', 'https://tps.forest.gov.tw/TPSWeb/wSite/public/Attachment/f1562133004891.jpg', 'https://www.woo-oh.com/archive/image/momsiteview__12_.jpg', '宜蘭縣大同鄉燒水巷25號', '24.5455890574913, 121.50813721349535', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.2605069004385!2d121.50541032549272!3d24.545658257781838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34687111556219c5%3A0x26c7b3967f3a7f35!2z6bOp5LmL5r6k5rqr5rOJ!5e0!3m2!1szh-TW!2stw!4v1716478702362!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(47, '瓶蓋工廠台北製造所', '南港瓶蓋工廠經過整修，將以「瓶蓋工廠 台北製造所」的面貌重新開放，這裡將建構成一個開放學習的場域，園區內包含 職人手創空間、數位製造區、共享辦公室、多功能展演空間等等，結合職人、新創、會展三大主軸，透過職人與新創是瓶蓋工廠的核心雙引擎，會展則是推動雙引擎的動力來源。', '營業時間:10:00-18:00<br>連絡電話：(02)27859900', 'https://www.travel.taipei/content/images/attractions/207926/1024x768_attractions-image-7r12wtgxlk6t0rqtaxcvvg.jpg', 'https://res.klook.com/image/upload/fl_lossy.progressive,q_85/c_fill,w_1000/v1639042844/blog/iza7fptscjpz2fdk8atb.webp', '台北市南港區南港路二段13號', '25.05382184586497, 121.60478775330667', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.423184750251!2d121.60219137550614!3d25.05364203750008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442ab5e0481f73d%3A0xd45012a70ff13733!2z55O26JOL5bel5bug5Y-w5YyX6KO96YCg5omA!5e0!3m2!1szh-TW!2stw!4v1716478725330!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(48, '東里車站', '每天平均約20人進出的東里車站，看似不起眼，卻被譽為「山線最美的車站」，一走進月台便被眼前的美景所吸引，整片無邊無際的綠色稻田映在眼前，小小的東里車站被圍繞在田野間，壯觀令人驚呼不已的田園景緻，深深吸引不少遊客前來探訪。', '開放時間：全天開放', 'https://ws.hl.gov.tw/001/Upload/420/relpic/10974/77139/de067df5-07c9-4dde-bfee-79668141293c.jpg', 'https://res.klook.com/image/upload/fl_lossy.progressive,q_85/c_fill,w_1000/v1639043188/blog/ubqied6rqhtjofaiwhg0.webp', '花蓮縣富里鄉東里村大莊路15-6號', '23.272469927891784, 121.30419577628207', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.1963302898585!2d121.29930908259293!3d23.27231485283246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346f6b769868db2b%3A0x72c7cdbe275c8c39!2z5p2x6YeM6LuK56uZ!5e0!3m2!1szh-TW!2stw!4v1716478765861!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(49, '深緣及水善糖文化園區', '1904年創辦的善化糖廠，舊名為「臺南製糖株式會社」、「灣裡製糖所」，1961年更名為善化糖廠！\r\n\r\n日治時代全臺共有41間製糖廠，1980年代製糖產業沒落後，現僅存善化與虎尾兩座糖廠仍在生產。\r\n\r\n※每年12月到3月為製糖期。\r\n\r\n廠區有善糖文物館、親水公園、百年大樟樹、冰品部、深緣及水文化園區(深緣烘焙、及水火鍋、茶研悅舍複合餐廳、光文會館、南亭曲水流觴)。', '營業時間:10:00-20:30 (星期一公休) <br>電話:(06)6621261 ', 'https://letsplay.tw/wp-content/uploads/20211129195746_75.jpg', 'https://imgs.gvm.com.tw/upload/gallery/20201026/75327_01.jpg', '台南市善化區228號', '23.15405126294349, 120.28972302452368', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.448799365504!2d120.28713737545728!3d23.153814511417497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e7db554c3840d%3A0x5deb9b6459bba445!2z5rex57ej5Y-K5rC05ZaE57OW5paH5YyW5ZyS5Y2A!5e0!3m2!1szh-TW!2stw!4v1716478786244!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(50, '三坑老街', '這條老街建有古早的客家風格建築，以及販售客家商品的店家', '營業時間：08:30-18:00', 'https://travel.tycg.gov.tw/Image/6881/?r=1598944231393', 'https://today-obs.line-scdn.net/0hITCfgqnBFnt-HwK9DSRpLEZJGgpNeQxyXHoJGQ9ISElSMwR_EStFGF5IGFcDLQYqXnBRGVkaH0MEfVkrQQ/w1200', '桃園市龍潭區三坑老街45號', '24.84453879598761, 121.24850409783667', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1810.3042979051627!2d121.24511903871158!3d24.843055478489777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683d9da1893543%3A0x99f0b6c13e921667!2z5LiJ5Z2R6ICB6KGX!5e0!3m2!1szh-TW!2stw!4v1716478808178!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(51, 'Xpark', '先進的水族館，設有水母缸、企鵝展覽及人工潮汐池', '營業時間：10:00-18:00<br>電話：032875000', 'https://lh5.googleusercontent.com/p/AF1QipPJvgoQ4G4NdYKPRskr5Y-oAdIw7nNO2oveTzm2=w408-h271-k-no', 'https://today-obs.line-scdn.net/0hXvnV7OpnB1lTLxOfIBN4Dmt5CyhgSR1QcRtLNiN9WmF7A0EHaUBUOn9_DnUtTUEIcxtOOHZ4W2ssSEEJOg/w1200', '桃園市中壢區春德路105號', '25.0183590328507, 121.21454490739036', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.4954315614423!2d121.21166957550493!3d25.017255538965344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346821054aea7a77%3A0x3fbe6503408633ef!2sXpark!5e0!3m2!1szh-TW!2stw!4v1716478830629!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(52, '安平航海城', '安平航海城(原三○四兵工廠橡欣樓)原為廢舊建築，荒廢十多年後由深緣及水有限公司向文化局承租全資整建為文化園區，適逢荷蘭(東印度公司)來臺400年(1624-2024)，設計為十七世紀大航海時代多國文化意象與內涵，園區除介紹臺南(大員/安平)的前世今生，也完整呈現四百年來臺灣在世界所扮演的國際角色與發展歷程，同步提供歐美關聯文化之西式與在地餐飲服務。', '營業時間:10:00–19:00(星期一公休)', 'https://www.butterflylove.com.tw/wp-content/uploads/2024/01/-11-jpg.webp', 'https://today-obs.line-scdn.net/0h5G3RhU84amgOK3-s4EMVPzZ9Zhk9TXBhLEggXn94NVghBy87Nx05C3kqM0RzGyRuLkskBy58YFFwTHg5NA/w1200', '台南市安平區湖內一街33號', '22.99852205213208, 120.15734881808557', ''),
(53, '海角七號阿嘉的家', '販售紀念品且適合拍照的禮品店，店旁有因 2008 年電影《海角七號》而聞名的郵筒複製品', '營業時間：09:00-18:00<br>電話：088892585', 'https://lh5.googleusercontent.com/p/AF1QipMCPINzt6FGj9kl7PtnBz3qWldUeZ9XQA00ez_g=w408-h272-k-no', 'https://attach.setn.com/newsimages/2018/08/20/1506101-PH.jpg', '屏東縣恆春鎮光明路90號', '22.002419877502902, 120.74324639379489', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3699.232317578707!2d120.74067247542999!3d22.00240775362678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3471b0cef9558f79%3A0xda3acf32841fb13!2z5rW36KeS5LiD6Jmf6Zi_5ZiJ55qE5a62!5e0!3m2!1szh-TW!2stw!4v1716478898910!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(54, '大崗山自然生態園區', '大崗山範圍橫跨岡山、燕巢、阿蓮和田寮四區，幅員遼闊廣大，海拔最高312公尺，居高臨下的地勢優勢，在過去曾為封閉的軍事重鎮，入山還得經過申請；現在的大崗山風景區，不僅遍佈古剎名塔，亦為登山步道熱門景點，更有神秘的石灰岩地形值得一探究竟。', '開放時間：全天開放<br>電話：076311177', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSgjMgk8GexbTK4Tp5MiGQFdhKo38NQjei6hDV4FUavanwhiyOX', 'https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/331320912_1129684197725230_4099460717567015729_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_ohc=MKOGFOxgXfYQ7kNvgEI-K0l&_nc_ht=scontent-tpe1-1.xx&oh=00_AfDAuXjN9R1iqA1URoq9_Fvd3NC8Y5pFw7qALQxMJczTDw&oe=663F6EAE', '高雄市阿蓮區Unnamed Road, 822', '22.842081268092457, 120.34497385443785', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1838.0930663085392!2d120.3468626386991!3d22.86958156618774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e6d540c495af9%3A0x256df4e8936b3991!2z5aSn5bSX5bGx6Ieq54S255Sf5oWL5ZyS5Y2A!5e0!3m2!1szh-TW!2stw!4v1716478921110!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(55, '金石園', '金石園坐落於基隆山麓，俯瞰太平洋，全區共38.6公頃，全部是合法墓園區，相較於其他墓園，其地理位置更是十分方便，不用特地跑到深山老林，下萬瑞快速道路順大路行駛約莫 5 分鐘即可抵達。另外，由於附近就有港口，夜晚還能從園區看到許多挑燈作業的漁船，有別於多數墓園的死寂，金石園多了一份生氣與熱鬧。', '開放時間：08:30–16:30<br>連絡電話：0800526999', 'https://jinshih.com/img/about03.jpg', 'https://images.chinatimes.com/newsphoto/2020-05-05/1024/20200505005873.jpg', '新北市瑞芳區海濱里海濱路2巷1號', '25.125715687032752, 121.83739899563729', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.2971507843886!2d121.834824075508!3d25.12564283459499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x345d450c76c7d30d%3A0x964dece38119d765!2z6YeR55-z5ZyS!5e0!3m2!1szh-TW!2stw!4v1716478949945!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(56, '木柵公園', '幽靜宜人的場所，夏天以螢火蟲聞名，並設有戶外泳池和健行步道', '24小時營業', 'https://lh5.googleusercontent.com/p/AF1QipOSDLOzvhAg25xZEyTIjXy6oL0kr8hOBi4jEEcP=w408-h306-k-no', 'https://s.yimg.com/ny/api/res/1.2/nYacQht2wcT4OjlfwovhSw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTk2MDtoPTQwOTtjZj13ZWJw/https://media.zenfs.com/zh-Hant-TW/homerun/tumblr.kkday.com/64ab0d51448b9907c08ad4e31969f054', '台北市文山區興隆路四段50號', '24.987116631942087, 121.5599586407007', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.3831802414925!2d121.55737757550412!3d24.987092440178543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442aa752ff27de5%3A0x2e4ad9ff4c78c717!2z5pyo5p-15YWs5ZyS!5e0!3m2!1szh-TW!2stw!4v1716478969809!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(58, '首爾塔', '首爾塔也稱為南山塔，是首爾著名的地標性建築，適合欣賞城市全景。N首爾塔的主打景點是觀景台，搭乘南山纜車登上觀景台即可從雲端俯瞰首爾，而首爾塔位處的南山公園則是首爾最大公園和最佳觀景地點。南山塔（又稱首爾塔 Seoul Tower）已經成為首爾地標和遊客必訪的打卡景點，近年熱門的Hello Kitty樂園也在這。', '營業時間：10:00-23:00（週六營業至23:59）', 'https://lh5.googleusercontent.com/p/AF1QipNJ9LsLugH0jgBwMPETbXV8_qtXYPZt2M2UKQ3V=w408-h544-k-no', 'https://pic.pimg.tw/kathec/1394896741-4136737623.jpg', '105 Namsangongwon-gil, Yongsan-gu, Seoul, 南韓', '37.55178182382661, 126.98861283807602', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.165108484145!2d126.98565167592832!3d37.551173625008815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca257a88e6aa9%3A0x5cf8577c2e7982a5!2z6aaW54i-5aGU!5e0!3m2!1szh-TW!2stw!4v1716478989792!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(59, '臺北市立動物園', '臺北市立動物園是中華民國臺灣臺北市的一座公立動物園，隸屬於臺北市政府教育局。1914年創立於圓山地區，舊稱「圓山動物園」，與臺北市立兒童育樂中心相鄰。1986年，因圓山原址無法擴建，而遷至木柵區，因此成為臺灣民眾現在所熟悉的「木柵動物園」。', '開放時間：09:00–17:00<br>連絡電話：(02)29382300', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVKz8Qr3JpG-VAygi-FN2ebut2XcCVVX5-CjH1cv8uKQ&s', 'https://www.homita.com.hk/upload/3.2%20-%20Copy%201.png', '台北市文山區新光路二段30號', '24.998689886417516, 121.58102861097653', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.0455441046365!2d121.57841077550466!3d24.998568339717142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442aa604a32818f%3A0xaafe06fd09b4d766!2z6Ie65YyX5biC56uL5YuV54mp5ZyS!5e0!3m2!1szh-TW!2stw!4v1716479014077!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(60, '教育部陽明山童軍露營場', '自民國五十八年起即在此從事童軍訓練活動，保有陽明山的原生林木，林相最完整，近幾年來，本中心在不破壞自然環境之下，致力改善設施並陸續增加景觀，融合現代設施與原野環境，期能四季各有不同的遊憩氣氛，是台北近郊難得的一處身心休閒場所，陽明山國家公園內最完整的遊憩帶，兼具遊憩、教育、活動之功能。\r\n\r\n本中心為童軍訓練營地非一般休閒場所，基本設備無缺但無遊樂設施。', '電話：02-27401336<br>e-mail：scouts@scout.org.tw', 'https://www.scout.org.tw/upload/images/2021112613530257821.png', 'https://s.yimg.com/ny/api/res/1.2/CQDPOan2Cp95UgCf0R20Lw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTk2MDtoPTQzNjtjZj13ZWJw/https://media.zenfs.com/zh-Hant-TW/homerun/tumblr.kkday.com/df3c517282c789fc890d74b5b34b157c', '台北市北投區竹子湖路1-10號', '25.16088957506242, 121.54821145312714', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.362856169231!2d121.5449287755089!3d25.157222933318405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442add69ff2ee15%3A0x4cb1e161d2180e92!2z5pWZ6IKy6YOo6Zm95piO5bGx56ul6LuN6Zyy54ef5aC0!5e0!3m2!1szh-TW!2stw!4v1716479038942!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(61, '泰安觀止溫泉會館', '整棟的建築工法以清水模、鐵木質感僕質呈現，結合柔和高雅肖楠原木傢俱，羅織成獨特浪漫幸福。是懂得愛自己，泡湯、住宿、會議、美食首選的最佳溫泉設計會館。', '入住時間：下午4:00 ，退房時間：上午11:00<br>連絡電話：(03)7941777', 'https://cdn2.ettoday.net/images/4051/e4051593.jpg', 'https://s.yimg.com/ny/api/res/1.2/Njg2HkQ0g5uByiqtCDCzOA--/YXBwaWQ9aGlnaGxhbmRlcjt3PTk2MDtoPTcyMDtjZj13ZWJw/https://media.zenfs.com/zh_hant_tw/News/NOWnews/i1822713.jpg', '苗栗縣泰安鄉圓墩58號', '24.467788988827706, 120.9518083802744', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463775.66303245985!2d120.91797698714697!3d24.752706390655703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346855a2c2b0a18f%3A0x59b54d7855dd766b!2z5rOw5a6J6KeA5q2i5rqr5rOJ5pyD6aSo!5e0!3m2!1szh-TW!2stw!4v1716479060790!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(62, '紅毛城（前清英國領事官邸）', '前清英國領事官邸，是一棟紅磚二層洋樓，是英國在臺灣所建造的第三座（也是最後一座）領事官邸。外觀典雅，不同於主樓封閉、剛毅的風格，這座造型優美的建築物是由英國人設計，中國工匠施工建造。\r\n\r\n牆壁用的是中國的紅磚，屋頂是閩南式紅瓦，整體建築呈現多樣化的異國風情。洋樓內有紅磚、拱圈、迴廊和斜屋頂，是典型英國「殖民地樣式建築」。內部有客廳、書房、餐廳、旋轉式樓梯、壁爐等空間與設施，部分空間模擬自當時的家居情境。', '開放時間：09:30–18:00<br>連絡電話：(02)26231001', 'https://www.tshs.ntpc.gov.tw/files/file_pool/1/0G256598048834816834/a1.jpg', 'https://www.chasetogether.com.tw/upload_public/article/1mvtyw7jst.jpg', '新北市淡水區中正路28巷1號', '25.175398203917965, 121.4334885379674', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.8282401451274!2d121.43093507550931!3d25.175276832587983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a54fdd4aedf7%3A0x2a7b885e597fdadc!2z5YmN5riF6Iux5ZyL6aCY5LqL5a6Y6YK4!5e0!3m2!1szh-TW!2stw!4v1716479083071!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(63, '台灣基督長老教會台南神學院', '台南神學院是臺灣南部一間隸屬台灣基督長老教會的神學院，以培育合用的教會牧養神職與事奉人員，來服事眾教會及臺灣社會成為一個合乎上帝旨意的國度為設校宗旨。其創校可追溯至1869年馬雅各醫師及李庥牧師在旗後、府城所設立的「傳道者養成班」，1876年巴克禮牧師再將兩者合併為「府城學院」，曾因戰爭而數度停辦。', '營業時間:08:00–17:30 (六、日休息) <br>電話:(06)2371291', 'https://www.ttcs.org.tw/images/news/_ack1523-rev.jpg', 'https://www.chasetogether.com.tw/upload_public/article/9zhfwg4ggs.jpg', '台南市東區東門路一段117號', '22.98875656827496, 120.21406918208241', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1880554.9496578148!2d117.77507215624998!3d22.988539300000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e768f80f3692f%3A0xced611af8eb497e4!2z5Y-w54Gj5Z-6552j6ZW36ICB5pWZ5pyD5Y-w5Y2X56We5a246Zmi!5e0!3m2!1szh-TW!2stw!4v1716479128442!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(64, '新店分局楓子林派出所', '政府機構', '營業時間：24小時<br>電話：0226631240', 'https://www.filmassist.ntpc.gov.tw/content/images/scene/263/1024x768_scene-image-h_ohtukv-0-jur_nq1wx8g.jpg', 'https://www.filmassist.ntpc.gov.tw/content/images/articles/9116/1024x768_articles-image-sgaxrhqn4k-fl58_u6lgpq.jpg', '新北市石碇區楓子林路32號', '25.01087524119548, 121.64375950627871', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14462.8156294886!2d121.6423433!3d25.0101752!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x345d54d8580e8a57%3A0xce49c3718238c7e6!2z5paw5YyX5biC5pS_5bqc6K2m5a-f5bGA5paw5bqX5YiG5bGA5qWT5a2Q5p6X5rS-5Ye65omA!5e0!3m2!1szh-TW!2stw!4v1716530182691!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(65, '新北大都會公園', '新北大都會公園占地十分遼闊，且設置有完善的兒童遊樂設施，是全台最大的堤坡公園，更是親子假日遊憩的首選，上百種遊樂設施，到夜晚便會亮起充足的燈光，讓孩子白天玩到黑夜。地理位置鄰近市區，用餐或交通都很方便，不管是遊客、一般民眾或是劇組都可在此舒適地從事休憩及拍攝活動。而遼闊的草地、獨特又可愛的兒童設施更是各大兒童用品廣告、慢跑、野餐場景取景的首選。', '營業時間：24小時<br>電話：0289699596', 'https://www.filmassist.ntpc.gov.tw/content/images/scene/7273/1024x768_scene-image-pzbse2pl40qboo0y6adjcg.jpg', 'https://www.filmassist.ntpc.gov.tw/content/images/articles/8368/1024x768_articles-image-mlsnjmqbguqyeedy6ku56w.jpg', '新北市三重區水漾路一段', '25.055949960720643, 121.48087464602443', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14457.477825432452!2d121.4807459!3d25.055464!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a8fac6152a05%3A0x3821847e329dcd64!2z5paw5YyX5aSn6YO95pyD5YWs5ZyS!5e0!3m2!1szh-TW!2stw!4v1716533260059!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(66, '札幌市天文台', '歷史悠久的天文台，有望遠鏡可以在晝夜觀測天體。', '營業時間：10:00-12:00 14:00-16:00（週一公休）<br>電話：+81115119624', 'https://lh5.googleusercontent.com/p/AF1QipPPayGYk5Wywty--CW93Mpe81KP5g6PuC0Aue6_=w408-h306-k-no', 'https://hips.hearstapps.com/hmg-prod/images/%E6%9C%AD%E5%B9%8C%E5%A4%A9%E6%96%87%E5%8F%B0-1671790869.jpg?crop=1.00xw:0.785xh;0,0.0848xh&resize=980:*', '1-17 Nakajimakoen, Chuo Ward, Sapporo, Hokkaido 064-0931日本', '43.04569003807274, 141.3524010846585', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11663.26490376549!2d141.352444!3d43.045298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2a212ffeaa3f%3A0x9311707fcd307299!2sSapporo%20City%20Observatory!5e0!3m2!1szh-TW!2stw!4v1716703679524!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(67, '法務部廉政署廉政研習中心', '該場地場管單位為法務部，可協調拍攝區域主要為：會客室、禁閉室、晒衣場、廠房等。場景可能依不同時間樣貌會有所變動。', '電話：0226657807', 'https://www.filmassist.ntpc.gov.tw/content/images/scene/1561/1024x768_scene-image-fgdfqz5o0ee-fd_r5tmszw.jpg', 'https://www.filmassist.ntpc.gov.tw/content/images/articles/9029/1024x768_articles-image-bite23hno0w8canepu7esa.jpg', '新北市坪林區大林里逮魚堀49號', '24.930977870420794, 121.70086477670738', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14472.244737565668!2d121.7006502!3d24.9299855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3467ff3e52ce857d%3A0xc3ea0ebe501a375c!2z5rOV5YuZ6YOo5buJ5pS_572y5buJ5pS_56CU57-S5Lit5b-D!5e0!3m2!1szh-TW!2stw!4v1716734579150!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(68, '觀音山國家風景區(八里療養院)', '八里療養院為公立精神專科教學醫院，坐落於山清水秀的觀音山國家公園內。可暸望淡水河出海口與八里落日等美景，在櫻花季時也是一熱門景點，吸引不少遊客前往賞櫻。', '營業時間:08:00–17:00 <br>電話:(02)26231001', 'https://image.cache.storm.mg/styles/smg-800xauto-er/s3/media/image/2016/11/04/20161104-070915_U589_M214552_3b30.jpg?itok=Bte2pYqP', 'https://today-obs.line-scdn.net/0hEloQVqnRGkNSKDDnyUllFGh-GSxhRAlANh5LQBFGRHctSl8daUxSLXEgQHsrT10dO01WLXMgAXJ3TwpGO01S/w1200', '新北市八里區華富山33號', '25.147068927880515, 121.41212236090313', '<iframe src=\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115589.82546852897!2d121.26559029726559!3d25.129535499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a5ee98778f37%3A0xa7e304fab0f2c389!2z6KeA6Z-z5bGx6YGK5a6i5Lit5b-DICjop4Dpn7PlsbHnrqHnkIbnq5kp!5e0!3m2!1szh-TW!2stw!4v1717152623739!5m2!1szh-TW!2stw\\\" width=\\\"600\\\" height=\\\"450\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\" referrerpolicy=\\\"no-referrer-when-downgrade\\\"></iframe>');

-- --------------------------------------------------------

--
-- 資料表結構 `spotcoll`
--

CREATE TABLE `spotcoll` (
  `spc_id` int NOT NULL,
  `sc_id` int NOT NULL,
  `s_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `spotcoll`
--

INSERT INTO `spotcoll` (`spc_id`, `sc_id`, `s_id`) VALUES
(3, 2, 5),
(4, 2, 6),
(8, 1, 28),
(12, 17, 31),
(13, 1, 3),
(14, 17, 29),
(15, 17, 30),
(16, 17, 35),
(17, 17, 52),
(18, 17, 63),
(19, 17, 62),
(20, 17, 6),
(21, 19, 3),
(24, 19, 20),
(25, 19, 21),
(26, 19, 22),
(27, 19, 23),
(28, 19, 24),
(29, 19, 25);

-- --------------------------------------------------------

--
-- 資料表結構 `spotd`
--

CREATE TABLE `spotd` (
  `sd_id` int NOT NULL,
  `d_id` int NOT NULL,
  `s_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='劇集拍攝景點';

--
-- 傾印資料表的資料 `spotd`
--

INSERT INTO `spotd` (`sd_id`, `d_id`, `s_id`) VALUES
(1, 1, 3),
(2, 2, 2),
(3, 3, 4),
(9, 2, 15),
(10, 2, 16),
(11, 2, 17),
(12, 2, 18),
(13, 2, 19),
(14, 1, 20),
(15, 1, 21),
(16, 1, 22),
(17, 1, 23),
(18, 1, 24),
(19, 1, 25),
(20, 1, 26),
(21, 3, 27),
(22, 3, 28),
(23, 3, 29),
(24, 3, 30),
(25, 3, 31),
(26, 7, 35),
(27, 2, 36),
(28, 1, 37),
(29, 1, 38),
(30, 9, 44),
(31, 9, 45),
(32, 9, 46),
(33, 12, 47),
(34, 12, 48),
(35, 8, 49),
(36, 4, 50),
(37, 4, 51),
(38, 14, 55),
(41, 15, 59),
(43, 16, 61),
(44, 17, 62),
(45, 17, 63),
(50, 18, 65),
(55, 19, 58),
(56, 20, 66),
(57, 21, 67),
(58, 22, 67),
(59, 23, 67),
(60, 3, 62),
(61, 24, 68);

-- --------------------------------------------------------

--
-- 資料表結構 `spotm`
--

CREATE TABLE `spotm` (
  `sm_id` int NOT NULL,
  `m_id` int NOT NULL COMMENT '電影編號',
  `s_id` int NOT NULL COMMENT '景點編號'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='電影拍攝景點';

--
-- 傾印資料表的資料 `spotm`
--

INSERT INTO `spotm` (`sm_id`, `m_id`, `s_id`) VALUES
(1, 3, 5),
(2, 1, 1),
(3, 2, 6),
(4, 1, 32),
(5, 1, 33),
(6, 1, 34),
(7, 4, 40),
(8, 10, 41),
(9, 10, 42),
(10, 3, 43),
(11, 11, 52),
(12, 12, 53),
(13, 11, 54),
(14, 14, 56),
(17, 8, 18),
(18, 8, 2),
(20, 14, 60),
(21, 2, 64),
(22, 10, 64),
(26, 4, 67),
(27, 10, 67);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL COMMENT '使用者編號',
  `user_acc` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '帳號',
  `user_pass` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '密碼',
  `user_name` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '姓名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`user_id`, `user_acc`, `user_pass`, `user_name`) VALUES
(1, 'manager1', '1234567', 'user1'),
(2, 'manager2', '7654321', 'user2'),
(3, 'manager3', '1212121', 'user3');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`a_id`);

--
-- 資料表索引 `actord`
--
ALTER TABLE `actord`
  ADD PRIMARY KEY (`ad_id`),
  ADD KEY `a_id` (`a_id`),
  ADD KEY `d_id` (`d_id`);

--
-- 資料表索引 `actorm`
--
ALTER TABLE `actorm`
  ADD PRIMARY KEY (`am_id`),
  ADD KEY `a_id` (`a_id`),
  ADD KEY `m_id` (`m_id`);

--
-- 資料表索引 `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- 資料表索引 `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`carousel_id`);

--
-- 資料表索引 `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`c_id`);

--
-- 資料表索引 `cspot`
--
ALTER TABLE `cspot`
  ADD PRIMARY KEY (`cs_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`);

--
-- 資料表索引 `displayitems`
--
ALTER TABLE `displayitems`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `list_id` (`list_id`);

--
-- 資料表索引 `displaylist`
--
ALTER TABLE `displaylist`
  ADD PRIMARY KEY (`list_id`);

--
-- 資料表索引 `drama`
--
ALTER TABLE `drama`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `c_id` (`c_id`);

--
-- 資料表索引 `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`);

--
-- 資料表索引 `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`g_id`);

--
-- 資料表索引 `genred`
--
ALTER TABLE `genred`
  ADD PRIMARY KEY (`gd_id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `g_id` (`g_id`);

--
-- 資料表索引 `genrem`
--
ALTER TABLE `genrem`
  ADD PRIMARY KEY (`gm_id`),
  ADD KEY `g_id` (`g_id`),
  ADD KEY `m_id` (`m_id`);

--
-- 資料表索引 `hotspot`
--
ALTER TABLE `hotspot`
  ADD PRIMARY KEY (`h_id`),
  ADD KEY `s_id` (`s_id`);

--
-- 資料表索引 `listd`
--
ALTER TABLE `listd`
  ADD PRIMARY KEY (`ld_id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `l_id` (`l_id`);

--
-- 資料表索引 `listdrama`
--
ALTER TABLE `listdrama`
  ADD PRIMARY KEY (`l_id`);

--
-- 資料表索引 `listm`
--
ALTER TABLE `listm`
  ADD PRIMARY KEY (`lm_id`),
  ADD KEY `l_id` (`l_id`),
  ADD KEY `m_id` (`m_id`);

--
-- 資料表索引 `listmovie`
--
ALTER TABLE `listmovie`
  ADD PRIMARY KEY (`l_id`);

--
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `c_id` (`c_id`);

--
-- 資料表索引 `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `e_id` (`e_id`);

--
-- 資料表索引 `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sch_id`),
  ADD KEY `s_id` (`s_id`);

--
-- 資料表索引 `scomplication`
--
ALTER TABLE `scomplication`
  ADD PRIMARY KEY (`sc_id`);

--
-- 資料表索引 `spot`
--
ALTER TABLE `spot`
  ADD PRIMARY KEY (`s_id`);

--
-- 資料表索引 `spotcoll`
--
ALTER TABLE `spotcoll`
  ADD PRIMARY KEY (`spc_id`),
  ADD KEY `sc_id` (`sc_id`),
  ADD KEY `s_id` (`s_id`);

--
-- 資料表索引 `spotd`
--
ALTER TABLE `spotd`
  ADD PRIMARY KEY (`sd_id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `spotd_ibfk_3` (`s_id`);

--
-- 資料表索引 `spotm`
--
ALTER TABLE `spotm`
  ADD PRIMARY KEY (`sm_id`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `s_id` (`s_id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `actor`
--
ALTER TABLE `actor`
  MODIFY `a_id` int NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=262;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `actord`
--
ALTER TABLE `actord`
  MODIFY `ad_id` int NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=142;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `actorm`
--
ALTER TABLE `actorm`
  MODIFY `am_id` int NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=90;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `country`
--
ALTER TABLE `country`
  MODIFY `c_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `cspot`
--
ALTER TABLE `cspot`
  MODIFY `cs_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `displayitems`
--
ALTER TABLE `displayitems`
  MODIFY `item_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `displaylist`
--
ALTER TABLE `displaylist`
  MODIFY `list_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `drama`
--
ALTER TABLE `drama`
  MODIFY `d_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `genre`
--
ALTER TABLE `genre`
  MODIFY `g_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `genred`
--
ALTER TABLE `genred`
  MODIFY `gd_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `genrem`
--
ALTER TABLE `genrem`
  MODIFY `gm_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `hotspot`
--
ALTER TABLE `hotspot`
  MODIFY `h_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `listd`
--
ALTER TABLE `listd`
  MODIFY `ld_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `listdrama`
--
ALTER TABLE `listdrama`
  MODIFY `l_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `listm`
--
ALTER TABLE `listm`
  MODIFY `lm_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `listmovie`
--
ALTER TABLE `listmovie`
  MODIFY `l_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `movie`
--
ALTER TABLE `movie`
  MODIFY `m_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `record`
--
ALTER TABLE `record`
  MODIFY `r_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sch_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `scomplication`
--
ALTER TABLE `scomplication`
  MODIFY `sc_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `spot`
--
ALTER TABLE `spot`
  MODIFY `s_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `spotcoll`
--
ALTER TABLE `spotcoll`
  MODIFY `spc_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `spotd`
--
ALTER TABLE `spotd`
  MODIFY `sd_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `spotm`
--
ALTER TABLE `spotm`
  MODIFY `sm_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT COMMENT '使用者編號', AUTO_INCREMENT=4;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `actord`
--
ALTER TABLE `actord`
  ADD CONSTRAINT `actord_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `actor` (`a_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `actord_ibfk_2` FOREIGN KEY (`d_id`) REFERENCES `drama` (`d_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `actorm`
--
ALTER TABLE `actorm`
  ADD CONSTRAINT `actorm_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `actor` (`a_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `actorm_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `cspot`
--
ALTER TABLE `cspot`
  ADD CONSTRAINT `cspot_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `country` (`c_id`),
  ADD CONSTRAINT `cspot_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `spot` (`s_id`);

--
-- 資料表的限制式 `displayitems`
--
ALTER TABLE `displayitems`
  ADD CONSTRAINT `displayitems_ibfk_1` FOREIGN KEY (`list_id`) REFERENCES `displaylist` (`list_id`);

--
-- 資料表的限制式 `drama`
--
ALTER TABLE `drama`
  ADD CONSTRAINT `drama_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `country` (`c_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `genred`
--
ALTER TABLE `genred`
  ADD CONSTRAINT `genred_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `drama` (`d_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `genred_ibfk_2` FOREIGN KEY (`g_id`) REFERENCES `genre` (`g_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `genrem`
--
ALTER TABLE `genrem`
  ADD CONSTRAINT `genrem_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `genre` (`g_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `genrem_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `hotspot`
--
ALTER TABLE `hotspot`
  ADD CONSTRAINT `hotspot_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `spot` (`s_id`);

--
-- 資料表的限制式 `listd`
--
ALTER TABLE `listd`
  ADD CONSTRAINT `listd_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `drama` (`d_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `listd_ibfk_2` FOREIGN KEY (`l_id`) REFERENCES `listdrama` (`l_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `listm`
--
ALTER TABLE `listm`
  ADD CONSTRAINT `listm_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `listmovie` (`l_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `listm_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `country` (`c_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `record_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `event` (`e_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `spot` (`s_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `spotcoll`
--
ALTER TABLE `spotcoll`
  ADD CONSTRAINT `spotcoll_ibfk_1` FOREIGN KEY (`sc_id`) REFERENCES `scomplication` (`sc_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `spotcoll_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `spot` (`s_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `spotd`
--
ALTER TABLE `spotd`
  ADD CONSTRAINT `spotd_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `drama` (`d_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `spotm`
--
ALTER TABLE `spotm`
  ADD CONSTRAINT `spotm_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `spotm_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `spot` (`s_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
