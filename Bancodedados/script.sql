
create database fatecbarueri;
use fatecbarueri;
CREATE TABLE `fatecbarueri`.`tbl_adm` (
  `id_Adm` INT NOT NULL AUTO_INCREMENT,
  `nome_adm` VARCHAR(30) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(15) NOT NULL,
    PRIMARY KEY (`id_Adm`)
);
CREATE TABLE `tbl_noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  imagem text null,
  `subtitulo` varchar(45) NOT NULL,
  `noticia` Text NOT NULL,
  `dt_publicacao` datetime NOT NULL,
  `id_Adm` int(11) NOT NULL,
   PRIMARY KEY (`id_noticia`)
);

insert into tbl_adm (nome_adm,email,senha) values ('Adm','usuarioUniversal123@primeirousuario','698dc19d489c4e4');
