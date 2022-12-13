

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(40) DEFAULT NULL,
  `last_name_user` varchar(40) DEFAULT NULL,
  `email_user` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `users` (`id_user`, `name_user`, `last_name_user`, `email_user`) VALUES
(1, 'Oscar', 'Amado', 'oscarfamado@gmail.com');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);


ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

