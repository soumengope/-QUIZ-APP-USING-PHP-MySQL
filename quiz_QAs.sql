-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2024 at 06:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz_QAs`
--

CREATE TABLE `quiz_QAs` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `question` varchar(250) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_QAs`
--

INSERT INTO `quiz_QAs` (`id`, `type`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(1, 'html', 'What does HTML stand for?', 'Hyper Text Markup Language', 'High-level Text Markup Language', 'Hyperlink and Text Markup Language', 'Hyper Transfer Markup Language', 'opt1'),
(2, 'html', 'Which tag is used to create a hyperlink in HTML ?', '&ltlink&gt', '&lta&gt', '&lthyperlink&gt', '&lturl&gt', 'opt2'),
(3, 'html', 'What is the correct HTML element for inserting a line break?', '&ltbr&gt', '&ltlb&gt', '&ltbreak&gt', '&ltlinebreak&gt', 'opt1'),
(4, 'html', 'Which HTML tag is used for creating an unordered list ?', '&ltul&gt', '&ltol&gt', '&ltli&gt', '&ltlist&gt', 'opt1'),
(5, 'html', 'What is the purpose of the HTML &lthead&gt tag', 'Defines the main content of the HTML document', 'Contains metadata about the HTML document', 'Represents a section pf a webpage', 'Specifies the title of the HTML document', 'opt2'),
(6, 'html', 'Which attribute is used to define inline styles in HTML?', 'style', 'css', 'design', 'format', 'opt1'),
(7, 'html', 'What is the correct way to comment out multiple lines in HTML?', '&lt!-- This is a comment --&gt', '// This is a comment //', '/* This is a comment */', '# This is a comment#', 'opt1'),
(8, 'html', 'What does the HTML &ltimg&gt tag represent?', 'Image', 'Link', 'Text', 'Table', 'opt1'),
(9, 'html', 'Which HTML attributes is used to define the language of the script', 'Language', 'Script-language', 'Lang', 'Script-lang', 'opt3'),
(10, 'html', 'What does the HTML &ltform&gt element do?', 'Defines a section of a document', 'Represents a clickable button', 'Create a form for user input', 'Specifies a table in the document', 'opt3'),
(11, 'css', 'What does CSS stand for?', 'Computer Style Sheets', 'Creative Style Sheets', 'Cascading Style Sheets', 'Colorful Style Sheets', 'opt3'),
(12, 'css', 'In CSS, what property is used to change the text color of an element?', 'text-color', 'color', 'font-color', 'text-style', 'opt2'),
(13, 'css', 'How can you include external CSS in an HTML document?', '&ltcss&gt...&lt/css&gt', '&ltstyle src=\"style.css\"&gt', '&ltlink rel=\"stylesheet\" href=\"style.css\"&gt', '&ltexternal-css&gt...&lt/external-css&gt', 'opt3'),
(14, 'css', 'What is the purpose of the \"box-sizing\" property in CSS?', 'Controls the background of a box', 'Sets the box model for an element', 'Defines the width and height of a box', 'Specifies the type of box shadow', 'opt2'),
(15, 'css', 'How do you center an element horizontally in CSS?', 'text-align: center;', 'align: center;', ' margin: auto;', 'position: center;', 'opt3'),
(16, 'css', 'Which CSS property is used for changing the font size of an element?', 'font-size', 'text-size', 'size', 'text-font', 'opt1'),
(17, 'css', 'What is the purpose of the \"z-index\" property in CSS?', 'Controls the transparency of an element', 'Sets the stacking order of positioned elements', 'Specifies the width of an element', 'Defines the shadow of an element', 'opt2'),
(18, 'css', 'Which CSS property is used for creating rounded corners?', 'corner-radius', 'border-radius', 'rounded-corners', 'box-corner', 'opt2'),
(19, 'css', 'Question: What is the purpose of the \"transition\" property in CSS?', 'Specifies the duration of an animation', 'Defines the timing function of an animation', 'Sets the starting point of an animation', 'Controls the rotation of an element', 'opt1'),
(20, 'css', 'How do you select all paragraphs with the class \"highlight\" in CSS?', '.highlight p', 'p.highlight', '#highlight p', 'p.class(\"highlight\")', 'opt2'),
(21, 'js', 'What is JavaScript primarily used for in web development?', 'Styling web pages', 'Creating dynamic content and interactivity', 'Database management', 'Server-side scripting', 'opt2'),
(22, 'js', 'How do you declare a variable in JavaScript?', 'v variableName;', 'var variableName;', 'variable variableName;', ' let variableName;', 'opt4'),
(23, 'js', 'What does the \"DOM\" stand for in JavaScript?', 'Document Object Model', 'Data Object Model', 'Document Order Model', 'Dynamic Object Model', 'opt1'),
(24, 'js', 'What keyword is used to define a function in JavaScript?', 'func', 'define', 'function', 'method', 'opt3'),
(25, 'js', 'Which operator is used for strict equality comparison in JavaScript?', '==', '===', '=', '!==', 'opt2'),
(26, 'js', 'How do you add a comment in JavaScript?', ' // This is a comment', '&lt!-- This is a comment --&gt', '/* This is a comment */', '\"This is a comment\"', 'opt1'),
(27, 'js', 'What does the \"typeof\" operator do in JavaScript?', 'Checks if a variable is defined', 'Returns the type of a variable', 'Concatenates two strings', 'Converts a variable to a boolean', 'opt2'),
(28, 'js', 'How do you initiate an asynchronous operation in JavaScript?', 'async function()', 'await asyncOperation()', 'async await asyncOperation()', 'startAsyncOperation()', 'opt1'),
(29, 'js', 'What is the purpose of the \"localStorage\" object in JavaScript?', 'To store data on the server', 'To store data temporarily on the client-side', 'To define local variables', 'To manage external libraries', 'opt2'),
(30, 'js', 'How do you handle errors in JavaScript?', 'try, catch, finally', 'if, else', 'switch, case', 'error()', 'opt1'),
(31, 'php', 'What does PHP stand for?', 'Personal Home Page', 'Hypertext Preprocessor', ' Public Hosting Platform', 'Preprocessed Hypertext', 'opt2'),
(32, 'php', 'How do you start a PHP block?', '&lt?php', '&lt%php', '&lt?', '&lt?ph', 'opt1'),
(33, 'php', 'Which of the following is the correct way to comment in PHP?', '// This is a comment', '/* This is a comment */', '# This is a comment', 'All of the above', 'opt4'),
(34, 'php', 'How do you concatenate two strings in PHP?', 'str_concat()', 'join()', 'concat()', '.', 'opt4'),
(35, 'php', 'In PHP, how do you declare a variable?', 'variable $name;', '$name = \"variable\";', 'var name = \"variable\";', 'declare $name \"variable\";', 'opt2'),
(36, 'php', 'Which superglobal variable is used to collect form data after submitting an HTML form with the \"post\" method?', '$_POST', '$_GET', ' $_REQUEST', '$_FORM', 'opt1'),
(37, 'php', 'What does the function echo do in PHP?', 'Outputs text to the console', 'Prints content to the web page', 'Performs mathematical calculations', 'Declares a variable', 'opt2'),
(38, 'php', 'How do you include an external PHP file in another PHP file?', 'include(\"file.php\");', 'require(\"file.php\");', 'import(\"file.php\");', 'both A and B', 'opt4'),
(39, 'php', 'Which of the following is used to start a session in PHP?', 'start_session()', 'session_start()', 'begin_session()', 'init_session()', 'opt2'),
(40, 'php', 'What is the purpose of the \"mysqli\" extension in PHP?', 'To manipulate images', 'To perform database operations', 'To handle XML data', 'To create and manipulate PDF files', 'opt2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz_QAs`
--
ALTER TABLE `quiz_QAs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz_QAs`
--
ALTER TABLE `quiz_QAs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
