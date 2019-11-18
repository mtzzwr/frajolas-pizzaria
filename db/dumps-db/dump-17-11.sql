-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: db_pizzaria
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_contato`
--

DROP TABLE IF EXISTS `tbl_contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `homepage` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `profissao` varchar(80) NOT NULL,
  `sexo` char(1) NOT NULL,
  `tipo_mensagem` varchar(20) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contato`
--

LOCK TABLES `tbl_contato` WRITE;
/*!40000 ALTER TABLE `tbl_contato` DISABLE KEYS */;
INSERT INTO `tbl_contato` VALUES (36,'Mateus Gonçalves','mateus.gsep@gmail.com','11 91891-8918','11 1111-1111','','','Desenvolvedor','m','sugestao','show de bola'),(41,'josé','jose@gmail.com','11 22222-2222','11 4002-8922','amarelo','josé das fontes','lixeiro','m','critica','bom e ruim');
/*!40000 ALTER TABLE `tbl_contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_curiosidade`
--

DROP TABLE IF EXISTS `tbl_curiosidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_curiosidade` (
  `id_curiosidade` int(11) NOT NULL AUTO_INCREMENT,
  `imagem_curiosidade` varchar(100) NOT NULL,
  `titulo_curiosidade` varchar(100) NOT NULL,
  `desc_curiosidade` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_curiosidade`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_curiosidade`
--

LOCK TABLES `tbl_curiosidade` WRITE;
/*!40000 ALTER TABLE `tbl_curiosidade` DISABLE KEYS */;
INSERT INTO `tbl_curiosidade` VALUES (23,'926e3a2ab226ad3f76dbdd04342bef7b.jpg','neeew','wehw',1);
/*!40000 ALTER TABLE `tbl_curiosidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_diferenciais`
--

DROP TABLE IF EXISTS `tbl_diferenciais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_diferenciais` (
  `id_diferencial` int(11) NOT NULL AUTO_INCREMENT,
  `imagem_diferencial` varchar(100) NOT NULL,
  `titulo_diferencial` varchar(100) NOT NULL,
  `desc_diferencial` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_diferencial`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_diferenciais`
--

LOCK TABLES `tbl_diferenciais` WRITE;
/*!40000 ALTER TABLE `tbl_diferenciais` DISABLE KEYS */;
INSERT INTO `tbl_diferenciais` VALUES (14,'c802b840e7c504bd2fde7a3e58c1eb65.png','naaaa','aas',1);
/*!40000 ALTER TABLE `tbl_diferenciais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_historia`
--

DROP TABLE IF EXISTS `tbl_historia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_historia` (
  `id_historia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_historia` varchar(100) NOT NULL,
  `desc_historia` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_historia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_historia`
--

LOCK TABLES `tbl_historia` WRITE;
/*!40000 ALTER TABLE `tbl_historia` DISABLE KEYS */;
INSERT INTO `tbl_historia` VALUES (1,'teste','sahslhwuidhewudbebfbveyfevfveyfvetvfetvfetfe cve',1);
/*!40000 ALTER TABLE `tbl_historia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_loja`
--

DROP TABLE IF EXISTS `tbl_loja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_loja` (
  `id_loja` int(11) NOT NULL AUTO_INCREMENT,
  `imagem_loja` varchar(100) NOT NULL,
  `nome_loja` varchar(100) NOT NULL,
  `endereco_loja` varchar(255) NOT NULL,
  `telefone_loja` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_loja`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_loja`
--

LOCK TABLES `tbl_loja` WRITE;
/*!40000 ALTER TABLE `tbl_loja` DISABLE KEYS */;
INSERT INTO `tbl_loja` VALUES (1,'1d60a8289ae13fba50f543e3e6ca561a.png','teste loja','rua aquela ali, 999','(11) 98171-0101',0),(2,'c980103debeaa3cb89d57d70e7ee7c9e.png','brabank','rua augusta, 1918','(11) 98611-10111',1);
/*!40000 ALTER TABLE `tbl_loja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_nivel`
--

DROP TABLE IF EXISTS `tbl_nivel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_nivel` (
  `id_nivel` int(11) NOT NULL AUTO_INCREMENT,
  `nome_nivel` varchar(100) NOT NULL,
  `descricao_nivel` varchar(255) DEFAULT NULL,
  `adm_conteudo` tinyint(1) NOT NULL,
  `adm_fale_conosco` tinyint(1) NOT NULL,
  `adm_usuario` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nivel`
--

LOCK TABLES `tbl_nivel` WRITE;
/*!40000 ALTER TABLE `tbl_nivel` DISABLE KEYS */;
INSERT INTO `tbl_nivel` VALUES (1,'Administrador','Tem controle de todos os conteúdos do site',1,1,1,1),(2,'Operador de conteúdo','Tem controle apenas dos conteúdos do site',1,0,0,1),(3,'Operador do Fale Conosco','Tem controle apenas do Fale Conosco',0,1,0,0),(4,'Operador de Usuários','Tem controle apenas dos Usuários do sistema',0,0,1,1),(5,'qqqqqq','teste nivel',0,1,1,1),(6,'teste 2 ','controle do fale conosco',0,1,0,0),(7,'teste','teste nivel',0,1,0,0),(8,'Conteúdo e FC','Pode controlar o conteúdo e o fale conosco do site',1,1,0,1),(9,'novo nivel','teste',0,1,0,0);
/*!40000 ALTER TABLE `tbl_nivel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_titulo_subtitulo`
--

DROP TABLE IF EXISTS `tbl_titulo_subtitulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_titulo_subtitulo` (
  `id_titulo_subtitulo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` text NOT NULL,
  `pagina` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_titulo_subtitulo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_titulo_subtitulo`
--

LOCK TABLES `tbl_titulo_subtitulo` WRITE;
/*!40000 ALTER TABLE `tbl_titulo_subtitulo` DISABLE KEYS */;
INSERT INTO `tbl_titulo_subtitulo` VALUES (1,'algumas curiosidades','Texto aleatório','curiosidade',1),(2,'novo teste','aaaaaa','curiosidade',1),(3,'titulo loja','loja loja loja','lojas',1);
/*!40000 ALTER TABLE `tbl_titulo_subtitulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `sexo` char(1) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_usuario_nivel` (`id_nivel`),
  CONSTRAINT `fk_usuario_nivel` FOREIGN KEY (`id_nivel`) REFERENCES `tbl_nivel` (`id_nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuario`
--

LOCK TABLES `tbl_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_usuario` DISABLE KEYS */;
INSERT INTO `tbl_usuario` VALUES (16,'Mateus','49408031806','556915057','mateus.gsep@gmail.com','11 973716992','11 44440000','m','mtzzwr','123',1,1),(17,'lucas','51417600918','151618123','lucas@lucas.com.br','11 11111-1111','11 1111-1111','m','lucas','123',3,1),(18,'sam','51417600918','556890109','sam@gmail.com','11 82198-2918','','f','sam','123',8,1),(19,'gio','61790171691','556915558','gio@gmail.com','11 97371-6692','12 1219-8291','f','gio','123',3,1),(28,'marcos','1219281928','21212121','marcos@gmail.com','218281281','21972179','m','marcos','123',2,1),(30,'marcel','18718811711','551625125','marcel@teste.com','11817187187','1116171616','m','marcel','123',4,1);
/*!40000 ALTER TABLE `tbl_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-17 21:25:51
