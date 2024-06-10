-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2024 at 01:24 PM
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
-- Database: `pw2024_tubes_233040049`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_game` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rilis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `size` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `details` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `image`, `nama_game`, `rilis`, `size`, `details`) VALUES
(1, 'ML.jpg', 'MOBILE LEGENDS', '14 Juli 2016', '323,4 MB', 'Mobile Legends: Bang Bang adalah permainan video seluler ber-genre multiplayer online battle arena (MOBA) yang dikembangkan dan diterbitkan oleh Moonton, anak perusahaan dari ByteDance.  Dirilis pada tahun 2016, gim ini makin populer di seluruh dunia, terutama di wilayah Asia Tenggara, dan sejak itu telah melampaui 1 miliar kali unduhan, dengan puncak pemain bulanan sebanyak 100 juta. Pada tahun 2021, &quot;Mobile Legends: Bang Bang&quot; mencapai pendapatan kotor sepanjang masa sebesar US$1 miliar dengan 44 persen pendapatannya berasal dari luar Asia, menjadikannya gim seluler teratas dari genre-nya dengan daya tarik paling global.'),
(2, 'PUBG.jpg', 'PUBG MOBILE', '19 Maret 2018', '3,02 GB', 'PUBG Mobile adalah sebuah permainan video battle royale gratis dimainkan yang dikembangkan oleh LightSpeed dan Quantum Studio, sebuah divisi dari Tencent Games. Ini merupakan adaptasi permainan piranti genggam dari PlayerUnknown&#039;s Battlegrounds yang dirilis untuk Android dan iOS pada tanggal 19 Maret 2018.  Permainan ini diterbitkan oleh beberapa penerbit di berbagai wilayah, seperti Krafton, Tencent, dan VNG. Pada April 2022, PUBG Mobile telah mendapatkan lebih dari satu miliar unduhan dan menghasilkan lebih dari US$8,3 miliar, menjadikannya permainan piranti genggam terlaris keempat. Ini juga termasuk permainan piranti genggam yang paling sering dimainkan sepanjang masa. Pada 2021, permainan ini mengeluarkan versi India, Battlegrounds Mobile India, dan permainan yang terpisah dari Semesta PUBG.'),
(3, 'FREEFIRE.jpg', 'FREE FIRE', '4 Desember 2017', '1,46 GB', 'Garena Free Fire atau biasa disebut Free Fire (sering disingkat FF) adalah permainan battle royale yang dikembangkan oleh 111 Dots Studio[1] dan diterbitkan oleh Garena untuk Android dan iOS. Permainan ini merupakan permainan piranti genggam yang paling banyak diunduh secara global pada tahun 2019. Karena popularitasnya, permainan ini menerima penghargaan untuk &quot;Best Popular Vote Game&quot; oleh Google Play Store pada tahun 2019. Pada Mei 2020, Garena Free Fire telah mencetak rekor dengan lebih dari 80 juta pengguna aktif harian di seluruh dunia. Pada November 2019, Garena Free Fire telah mendapat lebih dari US$1 miliar di seluruh dunia.'),
(4, 'CLASHOFCLANS.jpg', 'CLASH OF CLANS', '2 Agustus 2012', '300 MB', 'Clash of Clans adalah permainan video strategi seluler freemium yang dikembangkan dan diterbitkan oleh pengembang permainan Finlandia, Supercell. Permainan ini dirilis untuk platform iOS pada 2 Agustus 2012, dan di Google Play untuk Android pada 7 Oktober 2013.  Permainan ini berlatarkan tema fantasi[3] dunia persistent[4] dimana pemainnya adalah kepala desa. Clash of Clans menugaskan pemain untuk membangun desa mereka sendiri menggunakan sumber daya yang diperoleh dari menyerang desa pemain lain atau memproduksinya di desa sendiri. Untuk menyerang, pemain melatih berbagai jenis pasukan menggunakan sumber daya. Sumber daya utamanya adalah emas, elixir dan elixir hitam. Pemain dapat bergabung untuk membuat klan, grup hingga lima puluh orang, yang kemudian dapat berpartisipasi dalam Perang Klan bersama, menyumbang dan menerima pasukan, dan mengobrol satu sama lain.'),
(5, 'BRAWLSTARS.jpg', 'BRAWL STARS', '15 Juni 2017', '1,07 GB', 'Brawl Stars adalah arena pertarungan daring multipemain dan penembak pahlawan orang ketiga video game dikembangkan dan diterbitkan oleh perusahaan video game Finlandia, Supercell.[1] Ini dirilis di seluruh dunia pada 12 Desember 2018, di iOS dan Android. Gim ini menampilkan berbagai mode permainan, masing-masing dengan tujuan berbeda. Pemain dapat memilih dari pilihan Jagoan, yaitu karakter yang dapat dikontrol dengan joystick di layar dalam pertandingan gim.'),
(6, 'GENSHINIMPACT.jpg', 'GENSHIN IMPACT', '28 September 2020', '2,66 GB', 'Genshin Impact adalah permainan yang bergenre dunia terbuka (open world) sekaligus bermain peran aksi. Pada permainan ini, pemain memungkinkan untuk mengendalikan salah satu karakter yang dapat digantikan di dalam sebuah party (kelompok).[3] Karakter-karakter yang ditukarkan dapat dilakukan dengan cepat selama melakukan kombat sehingga memungkinkan pemain untuk menggunakan kombinasi kemampuan dan serangan yang berbeda.[4] Karakter yang dapat memiliki kemampuan diperkuat dengan berbagai cara, seperti menaikkan level-nya secara langsung dan memperkuat artefak beserta senjata yang dapat digunakan oleh seorang karakter.[5] Selain berpetualang, pemain dapat mencoba berbagai tantangan untuk mendapatkan hadiah. Pemain dapat melawan raja dan tantangan berhadiah di seluruh Pulau Teyvat, tetapi hadiah tersebut didapatkan dengan menggunakan mata uang yang disebut Original Resin.[6] Menyelesaikan tantangan-tantangan tersebut dapat menambah kenaikan pemain dengan cara meningkatkan Adventure Rank, yang dapat membuka misi baru, tantangan, dan menaikkan World Level.[7] World Level adalah ukuran mengenai seberapa kuat musuh-musuh di dunia dan seberapa besar hadiah yang jarang didapatkan setelah mengalahkannya.'),
(7, 'AOV.jpg', 'ARENA OF VALOR', '12 Oktober 2016', '308,9 MB', 'Arena of Valor merupakan sebuah game multiplayer online battle arena (moba) yang dibuat untuk Android, iOS, hingga Nintento Switch. Dulunya AoV dikenal dengan Honor of Kings dan dibuat untuk pasar Tiongkok. Baru pada 2017, Garena ikut memasarkan game ini untuk pasar Asia Tenggara.  Secara gameplay, AoV memiliki kemiripan dengan League of Legends, yaitu 5 lawan 5. Para pemain bisa mengontrol hero yang memiliki kemampuan berbeda. Hero tersebut juga bisa dilengkapi dengan item dan arcana. Pemain memulai game dari level paling rendah dan bisa menghasilkan gold dengan berbagai cara.  Hero-hero AoV bisa membunuh karakter lain seperti minion atau monster untuk menambah gold. Setelah itu mereka bisa membunuh lawan dan menghancurkan turret. Dengan semakin tingginya level seorang pemain, ia bisa membuka skill-skill baru yang membuat hero-nya semakin sakti.  Mode bermain yang ada di AoV ada beberapa dan bisa dimainkan semua. Kamu bisa bermain 5 vs 5 di Ranked atau Grand Battle, 1 vs 1 di Black City, main balapan dengan mode Duo-race, hingga Mayhem Mode 10 vs 10. Jadi, di AoV kamu bisa memainkan banyak game tidak hanya 5 vs 5 saja.'),
(8, 'LOL.jpg', 'LEAGUE OF LEGENDS', '27 Oktober 2009', '3,05 GB', 'League of Legends (disingkat LoL) adalah sebuah permainan video arena pertarungan daring multipemain yang dikembangkan dan diterbitkan oleh Riot Games untuk Microsoft Windows dan macOS. Permainan tersebut terinspirasi oleh Warcraft III: The Frozen Throne dari seri Defense of the Ancients.'),
(9, 'VALORANT.jpg', 'VALORANT', '2 Juni 2020', '7,02 GB', 'Valorant (bergaya sebagai VALORANT) adalah permainan video POP (penembak orang pertama) taktis multipemain gratis yang dikembangkan dan diterbitkan oleh Riot Games, untuk Microsoft Windows. Pertama kali menggoda dengan nama kode Project A pada Oktober 2019, permainan memulai periode beta tertutup dengan akses terbatas pada 7 April 2020, diikuti dengan perilisan resmi pada 2 Juni 2020. Pengembangan permainan dimulai pada 2014.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'ghani@gmail.com', 'ghani123'),
(2, 'ghani121@gamil.com', '$2y$10$zGPR7AfzdEVTZdnoWo/8FetqralL4D6skGzZE09/F9vjc9lbATSH2'),
(3, '123@gmail.com', '$2y$10$rHjSGOPAZ0/AedRj4NNJ/OHEJ/qkkPlmxcfuvLvRNd52ux6bmGNd2'),
(4, 'hilmy12345', '$2y$10$zLYnj9QYXMfVrPVWjT7XNemNR.WRTeiw4Qzu4isQZGu4EqJZg73Sm'),
(5, 'hilmiw', '$2y$10$EIuW/0Ob5JSw77MwWl7xj.Om5bx42e4mkuEiACFUVeZHu5hYxkFAC'),
(6, 'ghanialiyandi', '$2y$10$TSxWKaciW7I7nu83O/A6kuRFiGWS6KJB3ubqAc8a2TCjxcRVeuA3G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
