
CREATE TABLE `orders` (
  `OrderID` int(20) NOT NULL,
  `Theme` varchar(255) NOT NULL,
  `StudentID` varchar(20) NOT NULL,
  `Gender` char(10) NOT NULL,
  `ContactNO` int(10) NOT NULL,
  `ProductID` varchar(20) NOT NULL,
  `Material` text NOT NULL,
  `Color` text NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Price` decimal(10,0) NOT NULL
);

INSERT INTO `orders` (`OrderID`, `Theme`, `StudentID`, `Gender`, `ContactNO`, `ProductID`, `Material`, `Color`, `Size`, `Price`) VALUES
(1, 'BATTA', '45454454', 'Male', 766807668, '1234', 'Wool', '#ff0000', 'M', '100');



CREATE TABLE `tshirts` (
  `Theme` text NOT NULL,
  `prodID` varchar(10) NOT NULL,
  `Material` varchar(20) NOT NULL,
  `Color1` varchar(20) NOT NULL,
  `Color2` varchar(20) NOT NULL,
  `Color3` varchar(20) NOT NULL,
  `Color4` text NOT NULL,
  `Prices` decimal(10,0) NOT NULL,
  `ContactNO` int(11) NOT NULL
);

INSERT INTO `tshirts` (`Theme`, `prodID`, `Material`, `Color1`, `Color2`, `Color3`, `Color4`, `Prices`, `ContactNO`) VALUES
('BATTA', '1234', 'Wool', '#ffff00', '#ff0000', '#00ff40', '#400040', '100', 713033790),
('NSBM', 'SE1040', 'Cotton', '#ffff00', '#ff0000', '#00ff40', '#400040', '100', 766807668);


CREATE TABLE `students` (
  `stuid` varchar(8) NOT NULL,
  `password` varchar(20) NOT NULL);

INSERT INTO `students` (`stuid`, `password`) VALUES
('admin','password'),
('21006502','password'),
('21011848','password'),
('21009439','password'),
('21006863','password'),
('21009419','password'),
('21010128','password');
