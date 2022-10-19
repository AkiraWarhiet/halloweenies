-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 04:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halloweenitems`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductId` int(5) NOT NULL,
  `ProductName` text NOT NULL,
  `ProductDesc` text NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `ProductName`, `ProductDesc`, `ProductPrice`, `ProductImage`) VALUES
(1, 'Adult Jack Skellington Costume', 'Become the King of Halloween Town when you wear this officially licensed Jack Skellington costume! This awesome costume comes with Jack\'s signature jacket, a bat bow tie, and a half mask that\'ll transform you into The Pumpkin King!', 49.99, 'jackskellington.png'),
(2, 'Adult Billy Butcherson Costume', 'Become your favorite Hocus Pocus character this Halloween! This officially licensed Billy Butcherson costume will show everyone your Disney fandom! The ripped up jacket with attached shirt will give you the most authentic look! Stitch your mouth shut and really get into character!', 49.99, 'billybutcherson.png'),
(3, 'Adult Hopper Costume', 'At the end of the third season of Stranger Things, Hopper\'s fate seemed to be up in the air. But in the fourth season of the series, we see that Hopper is alive (but certainly not well) holed up in a Russian prison. Suit up as your favorite Hawkins officer-turned-hero with this officially licensed costume! Featuring a fuzzy hat and a blue jacket that reads \"American\" on the chest, this winter-ready look will have you looking like Jim Hopper in no time.', 59.99, 'jimhopper.png'),
(4, 'Adult Classic Maleficent Costume', 'Put a curse on the whole neighborhood when you wear this officially licensed Adult Classic Maleficent Costume. Easily transform into the Mistress of Evil when you put on this costume, which includes a dress, choker, and Maleficent\'s iconic hat. ', 59.99, 'maleficent.png'),
(5, 'Adult Winifred Sanderson Costume', 'No one is safe this Halloween--not when the Sanderson Sisters are back and better than ever! Take on the role of Winifred Sanderson and cause trouble in the town of Salem when you wear this Winifred costume! Her signature, dark green velvet-like dress has never looked more gorgeous, wrapped around layers of purple fabric and accented with gold-colored foil designs. Bring the story of Hocus Pocus to life!', 54.99, 'winifredsanderson.png'),
(6, 'Adult Sally Dress', 'Dressing up as Sally from The Nightmare Before Christmas? Finish off the look with this incredible dress! When you wear this colorful dress, everyone will know that you\'re a huge fan of the movie.', 39.99, 'sally.png'),
(7, '3 Ft Spike Animatronic', 'Spike never had good luck. When the Zombie apocalypse came he couldn\'t end up like an average brain-hungry zombie roaming the Pacific Coast Highway for brains. Instead, he managed to fight off a horde of zombies converging in his backyard only to end up getting bitten by an undead version of man’s best friend. After the zombie dogs ate through his lower half his wife waited for them to find their next victim and drove a stake into his brain. Unfortunately, she couldn’t do it with eyes open – so Spike is left to hang around waiting for his next meal.\r\nLeave Spike hanging around with your spooky home décor this Halloween and he’s sure to add some fear to any display. Hanging out at about three feet tall, watch as his back and forth moving torso comes to life all while groaning in complete agony. The LED light up white eyes on this apocalyptic animatronic make it the perfect addition to any haunted house setting this Halloween. ', 179.99, 'spike.png'),
(8, '6 Ft Lord Raven Animatronic', 'Deep in the dark mountains of the black hills, the Lord Raven makes its nest from the clean-picked bones of its victims. Perched upon this throne, the beast waits until the sun dips below the mountain peaks before flapping its wings and emerging into the night to stalk its next victim. Your only chance to survive is catching a glimpse of its demonic eyes before Lord Raven and its minions descend upon you and turn you into their next feast, pecking you until only bones are left.\r\n\r\nAt six foot tall, the Lord Raven animatronic will tower over guests in your home. Watch as it lifts its arms and lowers its head to gather a closer look at its next victim. With light-up LED red eyes and tormenting voice lines, Lord Raven will spook you to your core! ', 299.99, 'lordraven.png'),
(9, 'Demon Slayer Figural Bag Clip Blind Pack', 'Test your luck and see which one of your favorite Demon Slayer characters you\'ll get in this Demon Slayer Figural Bag Clip Blind Pack. Show you\'re the ultimate fan of anime by adding one of these awesome bag clips to your backpack or collecting them all. You never know which one you\'re gonna get!', 7.99, 'demonslayerclips.png'),
(10, 'Gizmo Mini Backpack', 'Gremlins fans, we\'ve got the mini backpack you need! This Gizmo mini backpack features secure zipper closures that promise to keep your valuables safe. Adjustable straps, fuzzy, two-tone faux fur, 3D ears, and embroidered facial details make this mini backpack an everyday essential!', 59.99, 'gizmobackpack.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
