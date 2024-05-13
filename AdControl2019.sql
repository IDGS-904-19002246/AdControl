-- --------------------------------------------------------
-- Host:                         74.208.39.15
-- Versión del servidor:         5.5.68-MariaDB - MariaDB Server
-- SO del servidor:              Linux
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para adcontrol2019
CREATE DATABASE IF NOT EXISTS `adcontrol2019` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `adcontrol2019`;

-- Volcando estructura para tabla adcontrol2019.asist_alumnos
CREATE TABLE IF NOT EXISTS `asist_alumnos` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `agid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agid` (`agid`),
  KEY `gid` (`gid`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=136434 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.asist_alumnos_historial
CREATE TABLE IF NOT EXISTS `asist_alumnos_historial` (
  `histAsid` int(11) NOT NULL AUTO_INCREMENT,
  `agid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `fechallamada` date DEFAULT NULL,
  `horallamada` time DEFAULT NULL,
  `historial_llamada` text,
  PRIMARY KEY (`histAsid`),
  KEY `agid` (`agid`),
  KEY `gid` (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.asist_instructores
CREATE TABLE IF NOT EXISTS `asist_instructores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `bitacora` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `gid` (`gid`),
  KEY `asid` (`asid`)
) ENGINE=MyISAM AUTO_INCREMENT=65843 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.asist_personal
CREATE TABLE IF NOT EXISTS `asist_personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `retardo` int(1) DEFAULT NULL,
  `entrada_salida` int(1) DEFAULT '0',
  `checador` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=161997 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.auladiser_documentos
CREATE TABLE IF NOT EXISTS `auladiser_documentos` (
  `docid` int(11) NOT NULL AUTO_INCREMENT,
  `doctipo` varchar(255) NOT NULL DEFAULT '0',
  `doctitulo` varchar(255) NOT NULL DEFAULT '',
  `docfrev` date NOT NULL DEFAULT '0000-00-00',
  `docfile` varchar(255) NOT NULL DEFAULT '',
  `docespecificaciones` text,
  UNIQUE KEY `docid` (`docid`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.auladiser_sedes
CREATE TABLE IF NOT EXISTS `auladiser_sedes` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sclave` varchar(3) DEFAULT '',
  `sDirector` varchar(255) DEFAULT 'Juan Antonio Ayala',
  `sDirectoremail` varchar(255) DEFAULT 'dax@auladiser.com',
  `abreviatura` varchar(255) DEFAULT NULL,
  `sendyapp` int(11) DEFAULT NULL,
  `manejamatriz` int(1) DEFAULT '0',
  `srazonsocial` varchar(255) DEFAULT NULL,
  `srfc` varchar(255) DEFAULT NULL,
  `sdomicilio` varchar(255) DEFAULT NULL,
  `scolonia` varchar(255) DEFAULT NULL,
  `sciudad` varchar(255) DEFAULT NULL,
  `sestado` varchar(255) DEFAULT NULL,
  `edoid` int(11) DEFAULT NULL,
  `scorreoFacturas` varchar(255) DEFAULT 'facturacion@auladiser.com',
  `stelefonos` varchar(255) DEFAULT NULL,
  `stelefonoWhatsapp` varchar(255) DEFAULT '4771242568',
  `sWhatsappBoton` varchar(255) DEFAULT '4771242568',
  `sSupervisor` varchar(255) DEFAULT 'supervisor@adcall.com.mx',
  `sSupervisorPass` varchar(255) DEFAULT NULL,
  `scp` int(10) DEFAULT NULL,
  `semail` varchar(255) DEFAULT NULL,
  `scalink` varchar(255) DEFAULT NULL,
  `slada` varchar(255) DEFAULT NULL,
  `snumTarjetaDeposito` varchar(255) DEFAULT '5204 1602 0461 3397',
  `snumTarjetaNombre` varchar(255) DEFAULT 'NANCY FABIOLA RUIZ PADRON',
  `snumCuentaDeposito` varchar(255) DEFAULT '7009-6838679',
  `snumClabeTransferencia` varchar(255) DEFAULT '002225700968386790',
  `snumBanco` varchar(255) DEFAULT 'BANAMEX',
  `sFiscalBanco` varchar(255) DEFAULT 'BANORTE',
  `sFiscalCuenta` varchar(255) DEFAULT '0211132671',
  `sFiscalClabe` varchar(255) DEFAULT '072225002111326714',
  `sFiscalSucursal` varchar(255) DEFAULT '0175',
  `sFiscalRFC` varchar(255) DEFAULT 'EFE130831JQ1',
  `sapoderado` varchar(255) DEFAULT NULL,
  `sescritura` varchar(255) DEFAULT NULL,
  `sfechaescritura` varchar(255) DEFAULT NULL,
  `snotario` varchar(255) DEFAULT NULL,
  `sciudadnotario` varchar(255) DEFAULT NULL,
  `snumnotario` int(11) DEFAULT NULL,
  `sregistrocomercio` varchar(255) DEFAULT NULL,
  `sfecharegistro` varchar(255) DEFAULT NULL,
  `sregistroPatronalimss` varchar(255) DEFAULT NULL,
  `archivo_conexion` varchar(255) DEFAULT NULL,
  `folder_sControl` varchar(255) DEFAULT NULL,
  `imgGoogleMaps` varchar(255) DEFAULT NULL,
  `linkGoogleMaps` text,
  `activa` int(1) DEFAULT '0',
  `sformulario` int(2) DEFAULT NULL,
  UNIQUE KEY `sid` (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.codigodescuento
CREATE TABLE IF NOT EXISTS `codigodescuento` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) DEFAULT NULL,
  `descuento` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.diplomas
CREATE TABLE IF NOT EXISTS `diplomas` (
  `folio` int(11) NOT NULL AUTO_INCREMENT,
  `foliomd` varchar(255) NOT NULL,
  `agid` int(11) NOT NULL,
  `alumno` varchar(255) NOT NULL,
  `diplomado` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `diploma` varchar(255) NOT NULL,
  `fecha_envio` date NOT NULL,
  `fecha_ultenvio` date NOT NULL,
  `correo` varchar(255) NOT NULL,
  `comentario` text,
  PRIMARY KEY (`folio`),
  UNIQUE KEY `folio` (`folio`),
  KEY `agid` (`agid`)
) ENGINE=MyISAM AUTO_INCREMENT=6929 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.diplomas_envios_certificados
CREATE TABLE IF NOT EXISTS `diplomas_envios_certificados` (
  `envioid` int(11) NOT NULL AUTO_INCREMENT,
  `agid` int(11) DEFAULT NULL,
  `folio` int(11) DEFAULT NULL,
  `fecha_envio` date DEFAULT NULL,
  `quien_envio` int(11) DEFAULT NULL,
  UNIQUE KEY `envioid` (`envioid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.diplomas_envios_solicitudes
CREATE TABLE IF NOT EXISTS `diplomas_envios_solicitudes` (
  `solid` int(11) NOT NULL AUTO_INCREMENT,
  `solfecha` date DEFAULT NULL,
  `solaid` int(11) DEFAULT NULL,
  `solgid` int(11) DEFAULT NULL,
  `solagid` int(11) DEFAULT NULL,
  PRIMARY KEY (`solid`)
) ENGINE=MyISAM AUTO_INCREMENT=8208 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos
CREATE TABLE IF NOT EXISTS `dwork_alumnos` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `sedeid` int(11) DEFAULT '1',
  `sedeclave` varchar(3) CHARACTER SET utf8 DEFAULT 'LE',
  `anombres` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `aapellido_paterno` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `aapellido_materno` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `adireccion` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `acolonia` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `acp` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `aciudad` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `edoid` int(11) NOT NULL DEFAULT '0',
  `aestado` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `atel_casa` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `atel_oficina` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `atel_cel` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `atel_cel_verificado` int(1) DEFAULT '0',
  `acorreo` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `acorreo_verificado` int(1) DEFAULT '0',
  `acorreo2` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `fid` int(11) NOT NULL DEFAULT '0',
  `afecha_nac` date NOT NULL DEFAULT '0000-00-00',
  `aestudio` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `atitulado` int(1) NOT NULL,
  `aescuela` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `aegreso` int(4) NOT NULL,
  `afoto` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `asexo` int(1) NOT NULL DEFAULT '0',
  `acomentario` text CHARACTER SET utf8 NOT NULL,
  `aedad` int(11) NOT NULL DEFAULT '0',
  `aedo_civil` int(11) NOT NULL DEFAULT '0',
  `aocupacion` varchar(255) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `aldependientes` int(11) NOT NULL,
  `ausuario` int(11) NOT NULL DEFAULT '0',
  `fechaalta` datetime NOT NULL,
  `facturado` int(1) NOT NULL,
  `constanciafiscal` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `adoctoife` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `numeroife` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `adoctocomprobante` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `file_ife` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `file_comprobante` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `aempresa` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `acargoempresa` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `alactivo` int(1) NOT NULL,
  `alOnline` int(1) DEFAULT '0',
  `aemergnombre` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `aemergtelefono` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `aemergparentesco` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `actualizado` int(1) NOT NULL,
  `sesion` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sesion_examen` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(16) CHARACTER SET utf8 DEFAULT NULL,
  `indeseable` int(1) DEFAULT '0',
  `nombresendy` varchar(255) CHARACTER SET utf8 DEFAULT '0',
  `thechecker` varchar(255) CHARACTER SET utf8 DEFAULT 'no',
  `mailerlite` int(1) DEFAULT '0',
  `aTablaFiltradosMailer` int(1) DEFAULT '0',
  UNIQUE KEY `aid` (`aid`),
  FULLTEXT KEY `anombres` (`anombres`),
  FULLTEXT KEY `aapellido_paterno` (`aapellido_paterno`),
  FULLTEXT KEY `aapellido_materno` (`aapellido_materno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_abonos
CREATE TABLE IF NOT EXISTS `dwork_alumnos_abonos` (
  `abid` int(11) NOT NULL AUTO_INCREMENT,
  `sedeid` int(11) DEFAULT '1',
  `sedeclave` varchar(2) DEFAULT 'LE',
  `abfecha` date NOT NULL DEFAULT '0000-00-00',
  `abhora` time NOT NULL,
  `agid` int(11) NOT NULL DEFAULT '0',
  `abcantidad` varchar(255) NOT NULL DEFAULT '',
  `abdevolucion` float DEFAULT NULL,
  `abfechadevolucion` date DEFAULT NULL,
  `abiva` float NOT NULL,
  `abtotal` float NOT NULL,
  `aformacobro` varchar(255) NOT NULL,
  `mesessinintereses` int(1) DEFAULT NULL,
  `paypalFolio` varchar(255) DEFAULT NULL,
  `atarjeta` varchar(255) NOT NULL,
  `atarjeta_autorizacion` varchar(255) NOT NULL DEFAULT '',
  `atarjeta_tipo` varchar(255) DEFAULT NULL,
  `atarjeta_terminacion` varchar(255) DEFAULT NULL,
  `abancotransferencia` varchar(255) NOT NULL,
  `anumdeposito` varchar(255) NOT NULL,
  `acomprobantetrans` varchar(255) NOT NULL,
  `anumcheque` varchar(255) NOT NULL DEFAULT '',
  `abancocheque` varchar(255) NOT NULL,
  `abcuenta` varchar(255) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL,
  `abletra` varchar(255) NOT NULL,
  `factura` int(11) NOT NULL,
  `verificado` int(1) NOT NULL,
  `inscripcion` int(1) DEFAULT '0',
  `comisionRebajada` float DEFAULT NULL,
  UNIQUE KEY `abid` (`abid`),
  KEY `agid` (`agid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_abonos_eliminados
CREATE TABLE IF NOT EXISTS `dwork_alumnos_abonos_eliminados` (
  `abid` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) DEFAULT NULL,
  `abfecha` date NOT NULL DEFAULT '0000-00-00',
  `abhora` time NOT NULL,
  `agid` int(11) NOT NULL DEFAULT '0',
  `abcantidad` varchar(255) NOT NULL DEFAULT '',
  `abiva` float NOT NULL,
  `abtotal` float NOT NULL,
  `aformacobro` varchar(255) NOT NULL,
  `atarjeta` varchar(255) NOT NULL,
  `atarjeta_autorizacion` int(11) NOT NULL,
  `abancotransferencia` varchar(255) NOT NULL,
  `anumdeposito` varchar(255) NOT NULL,
  `acomprobantetrans` varchar(255) NOT NULL,
  `anumcheque` int(11) NOT NULL,
  `abancocheque` varchar(255) NOT NULL,
  `abcuenta` int(1) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL,
  `abletra` varchar(255) NOT NULL,
  `factura` int(11) NOT NULL,
  `verificado` int(1) NOT NULL,
  `abrazon` varchar(255) DEFAULT NULL,
  UNIQUE KEY `abid` (`abid`),
  KEY `agid` (`agid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_clientes
CREATE TABLE IF NOT EXISTS `dwork_alumnos_clientes` (
  `acid` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL DEFAULT '0',
  `clid` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `acid` (`acid`),
  KEY `aid` (`aid`),
  KEY `clid` (`clid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_cobranza
CREATE TABLE IF NOT EXISTS `dwork_alumnos_cobranza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agid` int(11) DEFAULT NULL,
  `hfecha` date DEFAULT NULL,
  `hhora` time DEFAULT NULL,
  `htexto` text,
  `uid` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `agid` (`agid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_constancias
CREATE TABLE IF NOT EXISTS `dwork_alumnos_constancias` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cfecha` date NOT NULL DEFAULT '0000-00-00',
  `agid` int(11) NOT NULL DEFAULT '0',
  `ctipo` varchar(255) NOT NULL DEFAULT '',
  `carchivo` varchar(255) NOT NULL,
  UNIQUE KEY `cid` (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_devoluciones
CREATE TABLE IF NOT EXISTS `dwork_alumnos_devoluciones` (
  `devid` int(11) NOT NULL AUTO_INCREMENT,
  `devfecha` date NOT NULL DEFAULT '0000-00-00',
  `devhora` time NOT NULL,
  `agid` int(11) NOT NULL DEFAULT '0',
  `devcantidad` varchar(255) NOT NULL DEFAULT '',
  `deviva` float NOT NULL,
  `devtotal` float NOT NULL,
  `devformacobro` varchar(255) NOT NULL,
  `devnumcheque` int(11) NOT NULL,
  `devbancocheque` varchar(255) NOT NULL,
  `devcuenta` int(1) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL,
  `devletra` varchar(255) NOT NULL,
  `factura` int(11) NOT NULL,
  `verificado` int(1) NOT NULL,
  `devRazon` text,
  UNIQUE KEY `devid` (`devid`),
  KEY `agid` (`agid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_faltas
CREATE TABLE IF NOT EXISTS `dwork_alumnos_faltas` (
  `faltaid` int(11) NOT NULL AUTO_INCREMENT,
  `agid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `adeudo` float DEFAULT NULL,
  `motivo` text,
  `fecha_llamada` date DEFAULT NULL,
  `hora_llamada` date DEFAULT NULL,
  `fecha_falta` date DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  UNIQUE KEY `faltaid` (`faltaid`),
  KEY `agid` (`agid`),
  KEY `gid` (`gid`),
  KEY `usuario` (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_grupos
CREATE TABLE IF NOT EXISTS `dwork_alumnos_grupos` (
  `agid` int(11) NOT NULL AUTO_INCREMENT,
  `sedeclave` varchar(2) DEFAULT 'LE',
  `verificado` int(1) DEFAULT '1',
  `foliocontrato` int(11) NOT NULL,
  `contrato_file` varchar(255) DEFAULT NULL,
  `fecha_altagpo` date DEFAULT NULL,
  `gid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `tpgid` int(11) NOT NULL DEFAULT '0',
  `tipopago` int(1) DEFAULT NULL,
  `formapago` int(1) NOT NULL,
  `seismeses` int(1) DEFAULT '0',
  `aplicapromo` int(1) DEFAULT '1',
  `aplicapromotxt` varchar(255) DEFAULT NULL,
  `deid` int(11) NOT NULL DEFAULT '0',
  `agconstancia` int(1) NOT NULL DEFAULT '0',
  `agdiploma` int(1) NOT NULL DEFAULT '0',
  `agcertificado` int(1) DEFAULT '0',
  `agcertificacion` varchar(255) DEFAULT NULL,
  `agcertificacionVigencia` date DEFAULT NULL,
  `descuento` text NOT NULL,
  `autorizo` int(11) NOT NULL,
  `equipo` int(1) NOT NULL,
  `alactivo` int(1) NOT NULL,
  `uid` int(11) NOT NULL,
  `diploma` int(1) DEFAULT '0',
  `pidpromo` int(11) DEFAULT NULL,
  `con_relacion` int(11) DEFAULT NULL,
  `retome` int(1) DEFAULT '0',
  `aviso` int(1) DEFAULT '0',
  `recordatorio` int(1) DEFAULT '0',
  `certificado` int(1) DEFAULT NULL,
  `adeudocondonado` int(1) DEFAULT '0',
  `dequienes` int(11) DEFAULT NULL,
  `pagado_comision` int(1) DEFAULT '0',
  `fecha_comision` date DEFAULT '0000-00-00',
  `cobranza_judicial` int(1) DEFAULT '0',
  `cobranza_judicial_incobrable` text,
  `modulos` varchar(255) DEFAULT NULL,
  `deserto` int(1) DEFAULT '0',
  `deserto_razon` text,
  `codigoEvaluacion` varchar(255) DEFAULT NULL,
  `codigoStatus` int(1) DEFAULT '0',
  `oportunidades` int(1) DEFAULT '0',
  `calificacion` float DEFAULT NULL,
  `veMateriales` int(1) DEFAULT '0',
  `razonRechazo` text,
  `comentarios` text,
  `abonos` int(1) DEFAULT '0',
  `pagado` int(1) DEFAULT '0',
  `cortesia` int(1) DEFAULT '0',
  `metodopago` varchar(100) DEFAULT 'contado',
  `apruebaContrato` int(1) DEFAULT '1',
  `alonline` int(1) DEFAULT '0',
  `adoctopago` varchar(255) DEFAULT NULL,
  `aceptopoliticas` int(1) DEFAULT '0',
  UNIQUE KEY `agid` (`agid`),
  KEY `gid` (`gid`),
  KEY `aid` (`aid`),
  KEY `uid` (`uid`),
  KEY `foliocontrato` (`foliocontrato`)
) ENGINE=MyISAM AUTO_INCREMENT=64065 DEFAULT CHARSET=latin1 COMMENT='//formaPago: ////0 plazos - 1 contado - 2 MSI';

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_grupos_disersion
CREATE TABLE IF NOT EXISTS `dwork_alumnos_grupos_disersion` (
  `diserid` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `agid` int(11) DEFAULT NULL,
  `foliocontrato` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `apagar` float DEFAULT NULL,
  `pagado` float DEFAULT NULL,
  `fecha_ultpago` date DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `razon_disersion` text,
  `inscribio` int(11) DEFAULT NULL,
  `comisionpagada` int(11) DEFAULT NULL,
  `comisionfecha` date DEFAULT NULL,
  UNIQUE KEY `diserid` (`diserid`),
  KEY `aid` (`aid`),
  KEY `agid` (`agid`),
  KEY `gid` (`gid`),
  KEY `pid` (`pid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_grupos_retomes
CREATE TABLE IF NOT EXISTS `dwork_alumnos_grupos_retomes` (
  `retid` int(11) NOT NULL AUTO_INCREMENT,
  `agid` int(11) DEFAULT NULL,
  `foliocontrato` int(11) NOT NULL DEFAULT '0',
  `fecha_peticion` date DEFAULT '0000-00-00',
  `gid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) DEFAULT '0',
  `carta_retome` varchar(255) DEFAULT NULL,
  `r_comentarios` text,
  `r_asistencias` float DEFAULT '0',
  `certificado` int(1) DEFAULT '0',
  `retomando` int(11) DEFAULT '0',
  `autorizado` int(1) DEFAULT '0',
  `gid_autorizado` int(11) DEFAULT '0',
  `autorizo` int(11) DEFAULT '0',
  UNIQUE KEY `agid` (`retid`),
  KEY `gid` (`gid`),
  KEY `aid` (`aid`),
  KEY `foliocontrato` (`foliocontrato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_grupos_unidades_activas
CREATE TABLE IF NOT EXISTS `dwork_alumnos_grupos_unidades_activas` (
  `uniactid` int(11) NOT NULL AUTO_INCREMENT,
  `asid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  `unid` int(11) DEFAULT NULL,
  `fecharelease` date DEFAULT NULL,
  `comentarios` text,
  UNIQUE KEY `uniactid` (`uniactid`),
  KEY `gid` (`gid`),
  KEY `mid` (`mid`),
  KEY `unid` (`unid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_historia_cambios
CREATE TABLE IF NOT EXISTS `dwork_alumnos_historia_cambios` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `anombres` varchar(255) NOT NULL DEFAULT '',
  `aapellido_paterno` varchar(255) NOT NULL DEFAULT '',
  `aapellido_materno` varchar(255) NOT NULL DEFAULT '',
  `adireccion` varchar(255) NOT NULL DEFAULT '',
  `acolonia` varchar(255) NOT NULL DEFAULT '',
  `acp` varchar(255) NOT NULL DEFAULT '',
  `aciudad` varchar(255) NOT NULL DEFAULT '',
  `edoid` int(11) NOT NULL DEFAULT '0',
  `atel_casa` varchar(255) NOT NULL DEFAULT '',
  `atel_oficina` varchar(255) NOT NULL DEFAULT '',
  `acorreo` varchar(255) NOT NULL DEFAULT '',
  `acorreo2` varchar(255) NOT NULL,
  `afoto` varchar(255) NOT NULL DEFAULT '',
  `atel_cel` varchar(255) NOT NULL DEFAULT '',
  `acomentario` text NOT NULL,
  `fechaticket` datetime NOT NULL,
  `horaticket` time NOT NULL,
  `adoctoife` varchar(255) NOT NULL,
  `adoctocomprobante` varchar(255) NOT NULL,
  `revisado` int(1) NOT NULL,
  `sesion` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  UNIQUE KEY `aid` (`aid`),
  FULLTEXT KEY `anombres` (`anombres`),
  FULLTEXT KEY `aapellido_paterno` (`aapellido_paterno`),
  FULLTEXT KEY `aapellido_materno` (`aapellido_materno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_ingresos
CREATE TABLE IF NOT EXISTS `dwork_alumnos_ingresos` (
  `ingreid` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `ingrescript` varchar(255) DEFAULT NULL,
  `ingrefecha` date DEFAULT NULL,
  `ingrehora` time DEFAULT NULL,
  UNIQUE KEY `ingreid` (`ingreid`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_notas
CREATE TABLE IF NOT EXISTS `dwork_alumnos_notas` (
  `notaid` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `agid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `nota` text CHARACTER SET utf8mb4,
  `notaFecha` date DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  UNIQUE KEY `faltaid` (`notaid`),
  KEY `agid` (`agid`),
  KEY `gid` (`gid`),
  KEY `usuario` (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_notificaciones
CREATE TABLE IF NOT EXISTS `dwork_alumnos_notificaciones` (
  `notid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(11) DEFAULT '0',
  `ntitulo` varchar(255) DEFAULT NULL,
  `notificacion` text,
  `nfecha` date DEFAULT '0000-00-00',
  `icono` varchar(255) DEFAULT 'ti-calendar',
  PRIMARY KEY (`notid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Los iconos pueden ser:\n\nfa fa-link\nti-calendar\nti-settings\nti-user';

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_pagos
CREATE TABLE IF NOT EXISTS `dwork_alumnos_pagos` (
  `pgid` int(11) NOT NULL AUTO_INCREMENT,
  `agid` int(11) NOT NULL DEFAULT '0',
  `pgnumero` int(11) NOT NULL DEFAULT '0',
  `pgcuantos` int(11) NOT NULL DEFAULT '0',
  `pgfecha` date NOT NULL DEFAULT '0000-00-00',
  `pgcantidad` varchar(255) NOT NULL DEFAULT '',
  `pgfactor_descuento` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `pgid` (`pgid`),
  KEY `agid` (`agid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_pagos_emails
CREATE TABLE IF NOT EXISTS `dwork_alumnos_pagos_emails` (
  `aemid` int(11) NOT NULL AUTO_INCREMENT,
  `agid` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `monto` float NOT NULL,
  `email` text NOT NULL,
  UNIQUE KEY `aemid` (`aemid`),
  KEY `agid` (`agid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_sesiones
CREATE TABLE IF NOT EXISTS `dwork_alumnos_sesiones` (
  `asesid` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `sesion` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  UNIQUE KEY `asesid` (`asesid`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=62330 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_testimonios
CREATE TABLE IF NOT EXISTS `dwork_alumnos_testimonios` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `aid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) DEFAULT '0',
  `agid` int(11) DEFAULT NULL,
  `aemail` varchar(255) NOT NULL DEFAULT '',
  `tcont` text NOT NULL,
  `tsug` text NOT NULL,
  `tfecha` date NOT NULL DEFAULT '0000-00-00',
  `publicado` int(1) NOT NULL DEFAULT '0',
  `permitido` int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `tid` (`tid`),
  KEY `aid` (`aid`),
  KEY `agid` (`agid`)
) ENGINE=MyISAM AUTO_INCREMENT=84098 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_alumnos_testproductos_rel
CREATE TABLE IF NOT EXISTS `dwork_alumnos_testproductos_rel` (
  `tpid` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `tpid` (`tpid`),
  KEY `tid` (`tid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=287 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_asesores_certificaciones
CREATE TABLE IF NOT EXISTS `dwork_asesores_certificaciones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `asid` int(11) DEFAULT NULL,
  `certificacion` varchar(255) DEFAULT NULL,
  `certimg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_asesores_educacion
CREATE TABLE IF NOT EXISTS `dwork_asesores_educacion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `asid` int(11) DEFAULT NULL,
  `escuela` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `anoegreso` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_asesores_empleos
CREATE TABLE IF NOT EXISTS `dwork_asesores_empleos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `asid` int(11) DEFAULT NULL,
  `empresa` varchar(255) DEFAULT NULL,
  `puesto` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `fechainicial` int(4) DEFAULT NULL,
  `fechafinal` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_asesores_grupos
CREATE TABLE IF NOT EXISTS `dwork_asesores_grupos` (
  `asgid` int(11) NOT NULL AUTO_INCREMENT,
  `asid` int(11) NOT NULL DEFAULT '0',
  `gid` int(11) NOT NULL DEFAULT '0',
  `apxh` int(4) NOT NULL,
  `agidhrs` float NOT NULL,
  UNIQUE KEY `asgid` (`asgid`),
  KEY `gid` (`gid`),
  KEY `asid` (`asid`)
) ENGINE=MyISAM AUTO_INCREMENT=6804 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_asesores_historia_cambios
CREATE TABLE IF NOT EXISTS `dwork_asesores_historia_cambios` (
  `ashid` int(11) NOT NULL AUTO_INCREMENT,
  `asid` int(11) DEFAULT NULL,
  `astit` varchar(20) DEFAULT NULL,
  `asnombre` varchar(255) NOT NULL DEFAULT '',
  `asapellido_paterno` varchar(255) NOT NULL DEFAULT '',
  `asapellido_materno` varchar(255) NOT NULL DEFAULT '',
  `asdomicilio` varchar(255) NOT NULL DEFAULT '',
  `astelefono` varchar(255) NOT NULL DEFAULT '',
  `astelefono_cel` varchar(255) DEFAULT NULL,
  `astelefono_ofna` varchar(255) DEFAULT NULL,
  `asRFC` varchar(255) DEFAULT NULL,
  `asemail` varchar(255) NOT NULL DEFAULT '',
  `ascomentario` text NOT NULL,
  `revisado` int(1) NOT NULL,
  `fechaticket` date DEFAULT NULL,
  `horaticket` time DEFAULT NULL,
  `sesion` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  UNIQUE KEY `aid` (`ashid`),
  KEY `asid` (`asid`),
  FULLTEXT KEY `anombres` (`asnombre`),
  FULLTEXT KEY `aapellido_paterno` (`asapellido_paterno`),
  FULLTEXT KEY `aapellido_materno` (`asapellido_materno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_asesores_ingresos
CREATE TABLE IF NOT EXISTS `dwork_asesores_ingresos` (
  `ingreid` int(20) NOT NULL AUTO_INCREMENT,
  `asid` int(11) DEFAULT NULL,
  `ingrescript` varchar(255) DEFAULT NULL,
  `ingrefecha` date DEFAULT NULL,
  `ingrehora` time DEFAULT NULL,
  UNIQUE KEY `ingreid` (`ingreid`),
  KEY `asid` (`asid`)
) ENGINE=MyISAM AUTO_INCREMENT=133910 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_asesores_sesiones
CREATE TABLE IF NOT EXISTS `dwork_asesores_sesiones` (
  `asesid` int(11) NOT NULL AUTO_INCREMENT,
  `asclave` int(11) DEFAULT NULL,
  `sesion` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  UNIQUE KEY `asesid` (`asesid`),
  KEY `asclave` (`asclave`)
) ENGINE=MyISAM AUTO_INCREMENT=19931 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_asesores_skills
CREATE TABLE IF NOT EXISTS `dwork_asesores_skills` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `asid` int(11) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `porcentaje` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_asesores_solicitudes_pagos
CREATE TABLE IF NOT EXISTS `dwork_asesores_solicitudes_pagos` (
  `aspgid` int(11) NOT NULL AUTO_INCREMENT,
  `asid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `asesor` varchar(255) NOT NULL DEFAULT '',
  `ashoras` varchar(255) NOT NULL DEFAULT '',
  `asmotivo` varchar(255) NOT NULL DEFAULT '',
  `asemail` varchar(255) NOT NULL DEFAULT '',
  `ascomentario` text NOT NULL,
  `asfechasolicitud` date DEFAULT NULL,
  `asfechahora` time DEFAULT NULL,
  `asfactura` varchar(255) DEFAULT NULL,
  `asxml` varchar(255) DEFAULT NULL,
  `statussolicitud` int(1) DEFAULT '0',
  `comentarios_quienpaga` text,
  `asReferenciaPago` varchar(255) DEFAULT NULL,
  `asPagada` int(1) DEFAULT '0',
  UNIQUE KEY `aid` (`aspgid`),
  KEY `asid` (`asid`),
  KEY `gid` (`gid`),
  FULLTEXT KEY `anombres` (`asesor`)
) ENGINE=MyISAM AUTO_INCREMENT=2630 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_asesores_suspensiones
CREATE TABLE IF NOT EXISTS `dwork_asesores_suspensiones` (
  `suspenid` int(11) NOT NULL AUTO_INCREMENT,
  `asid` int(11) DEFAULT NULL,
  `susfechahizo` varchar(255) NOT NULL DEFAULT '',
  `susfechasuspend` varchar(255) NOT NULL DEFAULT '',
  `susrazon` text NOT NULL,
  `sesion` varchar(255) DEFAULT NULL,
  UNIQUE KEY `aid` (`suspenid`),
  KEY `asid` (`asid`),
  FULLTEXT KEY `anombres` (`susfechahizo`),
  FULLTEXT KEY `aapellido_paterno` (`susfechasuspend`),
  FULLTEXT KEY `aapellido_materno` (`susrazon`)
) ENGINE=MyISAM AUTO_INCREMENT=614 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_asuetos
CREATE TABLE IF NOT EXISTS `dwork_asuetos` (
  `asid` int(11) NOT NULL AUTO_INCREMENT,
  `asfecha` date NOT NULL,
  UNIQUE KEY `asid` (`asid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_certificaciones_examenes
CREATE TABLE IF NOT EXISTS `dwork_certificaciones_examenes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `marca` varchar(255) DEFAULT NULL,
  `clase` varchar(255) DEFAULT NULL,
  `examen` varchar(255) DEFAULT '',
  `clave` varchar(255) DEFAULT NULL,
  `retake` varchar(2) DEFAULT 'SI',
  `precio_alumnos` varchar(255) DEFAULT NULL,
  `precio_publico` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_certificaciones_simulacion
CREATE TABLE IF NOT EXISTS `dwork_certificaciones_simulacion` (
  `simulid` int(11) NOT NULL AUTO_INCREMENT,
  `simulacion` varchar(255) DEFAULT '0',
  `certid` int(11) DEFAULT '0',
  `agid` int(11) DEFAULT '0',
  `gid` int(11) DEFAULT '0',
  `sfechacaducan` date DEFAULT NULL,
  `comentarios` text,
  UNIQUE KEY `simulid` (`simulid`),
  KEY `certid` (`certid`),
  KEY `agid` (`agid`),
  KEY `gid` (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_certificaciones_vouchers
CREATE TABLE IF NOT EXISTS `dwork_certificaciones_vouchers` (
  `vouchid` int(11) NOT NULL AUTO_INCREMENT,
  `voucher` varchar(255) DEFAULT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `fechacaducan` date DEFAULT NULL,
  `sede` varchar(2) DEFAULT NULL,
  `retake` varchar(255) DEFAULT NULL,
  `software` varchar(255) DEFAULT NULL,
  `alumno` varchar(255) DEFAULT '',
  `gid` int(11) DEFAULT NULL,
  `fechaasignacion` date DEFAULT NULL,
  `fechaExamen` date DEFAULT NULL,
  `comentarios` text,
  `fechaalta` date DEFAULT NULL,
  `status` int(1) DEFAULT '0' COMMENT '0 disponible, 1 asignado, 2 eliminado',
  UNIQUE KEY `simulid` (`vouchid`),
  KEY `agid` (`alumno`),
  KEY `gid` (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_cobranza
CREATE TABLE IF NOT EXISTS `dwork_cobranza` (
  `cobid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cobFechaIni` date DEFAULT '0000-00-00',
  `cobFechaFin` date DEFAULT NULL,
  `numSemana` int(4) DEFAULT '0',
  `porCobrar` float DEFAULT '0',
  `extrajudicial` float DEFAULT '0',
  `cobrado` float DEFAULT '0',
  `cobradoConIva` float DEFAULT '0',
  `cobradoExtrajudicial` float DEFAULT '0',
  `gruposId` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cobid`)
) ENGINE=MyISAM AUTO_INCREMENT=224 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa
CREATE TABLE IF NOT EXISTS `dwork_empresa` (
  `eid` mediumint(11) NOT NULL AUTO_INCREMENT,
  `sedeid` int(11) DEFAULT NULL,
  `eclave` varchar(4) DEFAULT NULL,
  `ersocial` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `ecomercial` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `edireccion` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `ecolonia` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `etel` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `eWhatsapp` varchar(255) DEFAULT NULL,
  `eciudad` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `eedo` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `epais` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `ecp` int(10) DEFAULT NULL,
  `erfc` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `elogo` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `eclaves` text NOT NULL,
  `horario` int(1) DEFAULT NULL,
  `replegal` varchar(255) DEFAULT NULL,
  `apoderado` varchar(255) DEFAULT NULL,
  `notario` varchar(255) DEFAULT NULL,
  `notario_num` varchar(255) DEFAULT NULL,
  `notario_ciudad` varchar(255) DEFAULT NULL,
  `notario_estado` varchar(255) DEFAULT NULL,
  `escritura_publica` varchar(255) DEFAULT NULL,
  `escritura_publica_poder` varchar(255) DEFAULT NULL,
  `registro_patronal` varchar(255) DEFAULT NULL,
  `bidimensional` varchar(255) DEFAULT NULL,
  `aprobacion` varchar(255) DEFAULT NULL,
  `folio_clave` varchar(10) DEFAULT NULL,
  `folio_inicial` int(11) DEFAULT NULL,
  `folio_final` int(11) DEFAULT NULL,
  `fecha_autorizacion` date DEFAULT NULL,
  `ciudad_pleitos` varchar(255) DEFAULT NULL,
  `estado_pleitos` varchar(255) DEFAULT NULL,
  `email_ventas` varchar(255) DEFAULT NULL,
  `email_facturacion` varchar(255) DEFAULT NULL,
  `tarjetaoxxo` varchar(255) DEFAULT NULL,
  UNIQUE KEY `eid` (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_asesores
CREATE TABLE IF NOT EXISTS `dwork_empresa_asesores` (
  `asid` int(11) NOT NULL AUTO_INCREMENT,
  `asclave` int(11) DEFAULT NULL,
  `sedeclave` varchar(2) DEFAULT 'LE',
  `asfoto` varchar(255) DEFAULT NULL,
  `astit` varchar(10) NOT NULL,
  `asnombre` varchar(255) NOT NULL DEFAULT '',
  `asapellido_paterno` varchar(255) NOT NULL DEFAULT '',
  `asapellido_materno` varchar(255) NOT NULL DEFAULT '',
  `asnombre_landing` varchar(255) DEFAULT NULL,
  `asdomicilio` varchar(255) NOT NULL DEFAULT '',
  `asvaloracion` varchar(255) DEFAULT NULL,
  `astestimonios` int(11) DEFAULT NULL,
  `asestudiantes` int(11) DEFAULT NULL,
  `asciudad` varchar(255) DEFAULT NULL,
  `asestado` varchar(255) DEFAULT NULL,
  `asnumeroife` varchar(255) DEFAULT NULL,
  `asnacionalidad` varchar(255) DEFAULT 'MEXICANA',
  `asedad` int(4) DEFAULT NULL,
  `astelefono` varchar(255) NOT NULL DEFAULT '',
  `astelefono_cel` varchar(255) DEFAULT NULL,
  `astelefono_ofna` varchar(255) DEFAULT NULL,
  `asRFC` varchar(255) NOT NULL DEFAULT '',
  `asCURP` varchar(255) DEFAULT NULL,
  `asemail` varchar(255) NOT NULL,
  `emailempresa` varchar(255) DEFAULT NULL,
  `aspassword` varchar(255) DEFAULT NULL,
  `extension3cx` int(11) DEFAULT '0',
  `asactivo` int(1) NOT NULL,
  `asestudios` text NOT NULL,
  `ascertificaciones` text NOT NULL,
  `sesion` varchar(255) DEFAULT NULL,
  `mailaula` varchar(255) DEFAULT NULL,
  `programas` varchar(255) DEFAULT NULL,
  `notas` text,
  `gruposdados` text,
  `actualizado` int(1) DEFAULT '0',
  `aresena` text,
  `skype` int(1) DEFAULT NULL,
  `Banco` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `BancoCuenta` varchar(255) DEFAULT NULL,
  `BancoClabe` varchar(255) DEFAULT NULL,
  `BancoSucursal` varchar(255) DEFAULT NULL,
  `BancoTarjeta` varchar(255) DEFAULT NULL,
  `aswm3cx` varchar(255) DEFAULT NULL,
  `asnacimiento` date DEFAULT '0000-00-00',
  `asresumen` text,
  `configurador` varchar(255) DEFAULT NULL,
  UNIQUE KEY `asid` (`asid`),
  FULLTEXT KEY `asnombre` (`asnombre`),
  FULLTEXT KEY `asapellido_paterno` (`asapellido_paterno`),
  FULLTEXT KEY `asapellido_materno` (`asapellido_materno`)
) ENGINE=MyISAM AUTO_INCREMENT=15197 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_aulas
CREATE TABLE IF NOT EXISTS `dwork_empresa_aulas` (
  `auid` int(11) NOT NULL AUTO_INCREMENT,
  `sedeclave` varchar(2) DEFAULT 'LE',
  `sedeid` int(11) DEFAULT NULL,
  `domicilio` varchar(255) DEFAULT NULL,
  `imgMapa` varchar(255) DEFAULT NULL,
  `googleMaps` varchar(255) DEFAULT NULL,
  `audescripcion` varchar(255) NOT NULL DEFAULT '',
  `iniciales` varchar(2) DEFAULT NULL,
  `aucapacidad` int(5) NOT NULL,
  `auquorum` int(11) NOT NULL,
  `auactiva` int(1) DEFAULT '0',
  `aqmb` float DEFAULT '0',
  `aplataforma` varchar(255) DEFAULT NULL,
  `aplanta` varchar(255) DEFAULT NULL,
  `aucolor` varchar(255) DEFAULT NULL,
  UNIQUE KEY `auid` (`auid`),
  FULLTEXT KEY `audescripcion` (`audescripcion`)
) ENGINE=MyISAM AUTO_INCREMENT=2031 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_certificaciones
CREATE TABLE IF NOT EXISTS `dwork_empresa_certificaciones` (
  `certid` int(11) NOT NULL AUTO_INCREMENT,
  `certclave` varchar(255) NOT NULL,
  `certparentid` int(11) NOT NULL DEFAULT '0',
  `certificacion` varchar(255) NOT NULL DEFAULT '',
  `certdesc` text NOT NULL,
  `certbeneficios` text NOT NULL,
  `certhoras` int(11) NOT NULL,
  `certidiomas` int(1) NOT NULL,
  `certpdf` varchar(255) NOT NULL DEFAULT '',
  `certpartner` int(2) NOT NULL,
  `certactiva` int(1) NOT NULL DEFAULT '1',
  `certcosto` float NOT NULL,
  `certcostoalumnos` float NOT NULL,
  UNIQUE KEY `certid` (`certid`),
  FULLTEXT KEY `certificacion` (`certificacion`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_cotizaciones
CREATE TABLE IF NOT EXISTS `dwork_empresa_cotizaciones` (
  `cotid` int(11) NOT NULL AUTO_INCREMENT,
  `cotfecha` date NOT NULL,
  `cotempresa` varchar(255) NOT NULL,
  `cotcontacto` varchar(255) NOT NULL DEFAULT '',
  `cottel` varchar(255) NOT NULL DEFAULT '',
  `cotemail` varchar(255) NOT NULL DEFAULT '',
  `cottipo` varchar(255) NOT NULL,
  `cotciudad` varchar(255) NOT NULL DEFAULT '',
  `ejecutivo` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `horasgpo` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `cotgrupos` int(5) DEFAULT '1',
  `participantes` int(11) DEFAULT '0',
  `inversion` float DEFAULT '0',
  `inversionRealContado` float DEFAULT '0',
  `inversionRealCredito` float DEFAULT '0',
  `vigencia` varchar(255) DEFAULT NULL,
  `iva` float DEFAULT NULL,
  `monto` float DEFAULT NULL,
  `descprod` text,
  `duracion` int(11) DEFAULT NULL,
  `horario` text,
  `fechainicio` text,
  `certificacion` int(1) DEFAULT NULL,
  `costocertificacion` float DEFAULT NULL,
  `firma` text,
  `cstatus` varchar(255) DEFAULT 'PENDIENTE',
  `sedeclave` varchar(2) DEFAULT 'LE',
  UNIQUE KEY `coid` (`cotid`),
  KEY `uid` (`ejecutivo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_departamentos
CREATE TABLE IF NOT EXISTS `dwork_empresa_departamentos` (
  `dip` int(11) NOT NULL AUTO_INCREMENT,
  `ddepto` varchar(255) NOT NULL DEFAULT '',
  `ddesc` text NOT NULL,
  `sid` int(11) NOT NULL DEFAULT '0',
  `linkdepartamento` varchar(255) DEFAULT NULL,
  UNIQUE KEY `dip` (`dip`),
  KEY `sid` (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 PACK_KEYS=0;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_fuentes
CREATE TABLE IF NOT EXISTS `dwork_empresa_fuentes` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fparent` int(11) DEFAULT NULL,
  `fdescripcion` varchar(255) NOT NULL DEFAULT '',
  `factiva` int(1) NOT NULL,
  `fclave` varchar(10) DEFAULT NULL,
  `mostrar` int(1) DEFAULT '1',
  `fhubspot` varchar(255) DEFAULT NULL,
  UNIQUE KEY `fid` (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_grupos
CREATE TABLE IF NOT EXISTS `dwork_empresa_grupos` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `gventa` int(1) DEFAULT '0',
  `grupoespecial` int(1) DEFAULT '0',
  `gpassword` varchar(255) DEFAULT NULL,
  `sid` int(11) NOT NULL DEFAULT '1',
  `sedeclave` varchar(2) DEFAULT 'LE',
  `pid` int(11) NOT NULL DEFAULT '0',
  `gintensivo` int(1) NOT NULL DEFAULT '0',
  `gf_inicio` date NOT NULL DEFAULT '0000-00-00',
  `gf_inicio_publicidad` date DEFAULT NULL,
  `gf_termino_publicidad` date DEFAULT NULL,
  `gf_inicio_venta` date DEFAULT NULL,
  `gf_inicio_cierre` date DEFAULT NULL,
  `gf_termino` date NOT NULL DEFAULT '0000-00-00',
  `gequipo` varchar(20) DEFAULT NULL,
  `gejecutivo` int(11) DEFAULT NULL,
  `auid` int(11) NOT NULL DEFAULT '0',
  `hid` int(11) NOT NULL DEFAULT '0',
  `hoid` int(11) NOT NULL,
  `hohid` int(11) NOT NULL,
  `gsesiones` varchar(255) NOT NULL DEFAULT '',
  `gsesionesimpartidas` int(2) DEFAULT '0',
  `gprecio` float NOT NULL,
  `gpreciotarjeta` float DEFAULT NULL,
  `gpreciocontado` float NOT NULL,
  `gpagoinicial` float NOT NULL,
  `gcuantospagos` int(3) NOT NULL,
  `gmontopagos` float NOT NULL,
  `grecurrencia` int(1) DEFAULT '0',
  `ghrs_sesion` varchar(255) NOT NULL DEFAULT '',
  `gfoto_grupo` varchar(255) NOT NULL DEFAULT '',
  `gduracion` varchar(255) NOT NULL DEFAULT '',
  `gcapacidad` varchar(20) NOT NULL DEFAULT '',
  `gstatus` int(1) NOT NULL,
  `gstatusMasivo` int(1) DEFAULT '0',
  `gsweb` int(1) NOT NULL,
  `gpromocion` int(11) NOT NULL,
  `gciudad` varchar(255) DEFAULT 'LEON, GUANAJUATO',
  `gprogramacion1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gprogramacion` date DEFAULT '0000-00-00',
  `gcerrado_mkt` int(1) DEFAULT '0',
  `gcomentariogrupo` text,
  `gmaterias` text,
  `gcertificacion` int(1) DEFAULT '0',
  `gdcto` int(11) DEFAULT NULL,
  `alumnospagados` int(5) DEFAULT '0',
  `actualizado` int(1) DEFAULT '0',
  `enlaceMSI` varchar(255) DEFAULT NULL,
  UNIQUE KEY `gid` (`gid`),
  KEY `pid` (`pid`),
  KEY `gstatus` (`gstatus`),
  KEY `hoid` (`hoid`),
  KEY `hohid` (`hohid`),
  KEY `auid` (`auid`)
) ENGINE=MyISAM AUTO_INCREMENT=5690 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_horarios
CREATE TABLE IF NOT EXISTS `dwork_empresa_horarios` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `hdesc` varchar(255) NOT NULL DEFAULT '',
  `h0` int(11) NOT NULL DEFAULT '0',
  `h1` int(11) NOT NULL DEFAULT '0',
  `h2` int(11) NOT NULL DEFAULT '0',
  `h3` int(11) NOT NULL DEFAULT '0',
  `h4` int(11) NOT NULL DEFAULT '0',
  `h5` int(11) NOT NULL DEFAULT '0',
  `h6` int(11) NOT NULL DEFAULT '0',
  `hentrada` time NOT NULL DEFAULT '00:00:00',
  `hsalida` time NOT NULL DEFAULT '00:00:00',
  `hcomida` time NOT NULL DEFAULT '00:00:00',
  `hregreso` time NOT NULL DEFAULT '00:00:00',
  `hsabado` time NOT NULL DEFAULT '00:00:00',
  `hactivo` int(1) NOT NULL,
  UNIQUE KEY `hid` (`hid`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_nomina_pagos
CREATE TABLE IF NOT EXISTS `dwork_empresa_nomina_pagos` (
  `nompid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `nomfecha` date DEFAULT NULL,
  `nomfechaInicio` date DEFAULT NULL,
  `nomfechaFin` date DEFAULT NULL,
  `nomsueldo` float DEFAULT NULL,
  `nomtiposueldo` varchar(255) DEFAULT NULL,
  `nomcostoxdia` float DEFAULT NULL,
  `nomprestamos` float DEFAULT NULL,
  `nomfaltas` float DEFAULT NULL,
  `nomretardos` float DEFAULT NULL,
  `nomIMSS` float DEFAULT NULL,
  `nomtotalRebaja` float DEFAULT NULL,
  `nomdiasextras` float DEFAULT NULL,
  `nomincentivo` float DEFAULT NULL,
  `nomtotalExtra` float DEFAULT NULL,
  `nomtotalQuincena` float DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  UNIQUE KEY `nompid` (`nompid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_personal_puestos
CREATE TABLE IF NOT EXISTS `dwork_empresa_personal_puestos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dip` int(11) DEFAULT NULL,
  `puesto` varchar(255) DEFAULT NULL,
  `funciones` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_productos
CREATE TABLE IF NOT EXISTS `dwork_empresa_productos` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `nuevoPid` int(11) DEFAULT NULL,
  `promocion2x1` int(11) DEFAULT '0',
  `pclave` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `pdivision` varchar(25) CHARACTER SET utf8 DEFAULT 'AD',
  `ptid` int(11) NOT NULL DEFAULT '0',
  `pactivo` int(1) NOT NULL DEFAULT '1',
  `precurrente` int(1) DEFAULT '0',
  `pnombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pnombrelanding` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pnombrediploma` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pncorto` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `pnombreBigin` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pnombre_hubspot` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ptextoventas` text CHARACTER SET utf8,
  `phoras` int(11) NOT NULL DEFAULT '0',
  `sesiones` int(11) NOT NULL DEFAULT '0',
  `vtube` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pinversion` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `pinversion_minimotarjeta` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pinversion_certificacion` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `pinversion_contado` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `p_inversion_adistancia` varchar(255) CHARACTER SET utf8 DEFAULT '0',
  `mesessinintereses` int(11) DEFAULT NULL,
  `papagos` int(1) NOT NULL,
  `pmontoinscripcion` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pcantpagos` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pmontopagos` varchar(255) CHARACTER SET utf8 NOT NULL,
  `precurrencia` int(1) DEFAULT '0',
  `presumen` text CHARACTER SET utf8 NOT NULL,
  `pdirigidoa` text CHARACTER SET utf8 NOT NULL,
  `prequisitos` text CHARACTER SET utf8 NOT NULL,
  `porden` float NOT NULL DEFAULT '0',
  `pcompatibles` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `marca` int(11) NOT NULL,
  `tematicas` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pmaterias` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pnivel` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `psubject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pcertificacion` int(2) DEFAULT '0',
  `softwares` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `metatags` text CHARACTER SET utf8,
  `online` int(1) DEFAULT '0',
  `tagstawk` text CHARACTER SET utf8,
  `urlcorta` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `urlgruposface` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `copy` text CHARACTER SET utf8,
  `pmeta` text CHARACTER SET utf8 NOT NULL,
  `presumen_mobil` text CHARACTER SET utf8 NOT NULL,
  `pnombreBiginCRM` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `palumnos` int(11) DEFAULT NULL,
  `ptestimonios` int(11) DEFAULT NULL,
  `pvaloracion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `linkBrochure` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  UNIQUE KEY `pid` (`pid`),
  KEY `ptid` (`ptid`),
  KEY `pactivo` (`pactivo`),
  FULLTEXT KEY `pnombre` (`pnombre`),
  FULLTEXT KEY `tagstawk` (`tagstawk`)
) ENGINE=MyISAM AUTO_INCREMENT=924 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_productos_objetivos
CREATE TABLE IF NOT EXISTS `dwork_empresa_productos_objetivos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `objetivo` varchar(255) DEFAULT NULL,
  `orden` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=691 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_productos_requisitos
CREATE TABLE IF NOT EXISTS `dwork_empresa_productos_requisitos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `requisito` varchar(255) DEFAULT NULL,
  `orden` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_productos_tipos
CREATE TABLE IF NOT EXISTS `dwork_empresa_productos_tipos` (
  `ptid` int(11) NOT NULL AUTO_INCREMENT,
  `ptdescripcion` varchar(255) NOT NULL DEFAULT '',
  `ptipoactivo` int(11) DEFAULT '0',
  UNIQUE KEY `ptid` (`ptid`),
  FULLTEXT KEY `ptdescripcion` (`ptdescripcion`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_promociones
CREATE TABLE IF NOT EXISTS `dwork_empresa_promociones` (
  `promoid` int(11) NOT NULL AUTO_INCREMENT,
  `promocion` varchar(255) DEFAULT NULL,
  `promotitulo` varchar(255) DEFAULT NULL,
  `promodesc` text NOT NULL,
  `promobases` text,
  `promovigencia` date DEFAULT NULL,
  `promoactiva` int(1) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `pdescuento` float DEFAULT NULL,
  `pdescuentotipo` varchar(20) DEFAULT NULL,
  `msi` int(2) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  UNIQUE KEY `promoid` (`promoid`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_proveedores
CREATE TABLE IF NOT EXISTS `dwork_empresa_proveedores` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `prazonsocial` varchar(255) NOT NULL,
  `pnombrecomercial` varchar(255) NOT NULL,
  `pdireccion` text NOT NULL,
  `pcolonia` varchar(255) NOT NULL,
  `pcp` int(19) NOT NULL,
  `ptelefono` varchar(255) NOT NULL,
  `pciudad` varchar(255) NOT NULL,
  `pestado` varchar(255) NOT NULL,
  `prfc` varchar(255) NOT NULL,
  `pclabe` varchar(255) NOT NULL,
  `pcuentabco` varchar(255) NOT NULL,
  `pbanco` varchar(255) NOT NULL,
  `pbeneficiario` varchar(255) NOT NULL,
  `pformapago` int(1) NOT NULL,
  `pcurp` varchar(255) NOT NULL,
  `presponsable` varchar(255) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `tipodoc` int(1) NOT NULL,
  `asid` int(11) DEFAULT NULL,
  UNIQUE KEY `pid` (`pid`),
  FULLTEXT KEY `prazonsocial` (`prazonsocial`),
  FULLTEXT KEY `pnombrecomercial` (`pnombrecomercial`)
) ENGINE=MyISAM AUTO_INCREMENT=729 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_recibos
CREATE TABLE IF NOT EXISTS `dwork_empresa_recibos` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `abid` int(11) NOT NULL DEFAULT '0',
  `pgid` int(11) NOT NULL DEFAULT '0',
  `rfacturado` int(1) NOT NULL DEFAULT '0',
  `rfecha_deposito` date NOT NULL DEFAULT '0000-00-00',
  `rcuenta` int(1) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL,
  `rpagado` int(1) NOT NULL,
  UNIQUE KEY `rid` (`rid`),
  KEY `abid` (`abid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=64055 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_empresa_tipos_pago
CREATE TABLE IF NOT EXISTS `dwork_empresa_tipos_pago` (
  `tpgid` int(11) NOT NULL AUTO_INCREMENT,
  `tpgdescripcion` varchar(255) NOT NULL DEFAULT '',
  `tpgcantidad_pagos` int(11) NOT NULL DEFAULT '0',
  `tpgdias_sig_pago` int(11) NOT NULL DEFAULT '0',
  `tpgprimer_pago` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `pgid` (`tpgid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_estados
CREATE TABLE IF NOT EXISTS `dwork_estados` (
  `edoid` char(2) NOT NULL DEFAULT '',
  `paid` int(2) NOT NULL DEFAULT '0',
  `edoedo` varchar(255) NOT NULL DEFAULT '',
  `esdoCT` varchar(255) DEFAULT NULL,
  UNIQUE KEY `edoid` (`edoid`),
  KEY `paid` (`paid`),
  FULLTEXT KEY `edoedo` (`edoedo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_estados_ciudades
CREATE TABLE IF NOT EXISTS `dwork_estados_ciudades` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `edoid` int(11) NOT NULL,
  `cd_id_inegi` int(11) NOT NULL,
  `cd_nombre` varchar(255) NOT NULL DEFAULT '',
  `cd_mobreCT` varchar(255) DEFAULT NULL,
  `sedeclave` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=2459 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_grupos_suspension
CREATE TABLE IF NOT EXISTS `dwork_grupos_suspension` (
  `suspenid` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) DEFAULT NULL,
  `sufecha` date DEFAULT NULL,
  `surazon` text,
  `sufechafin` date DEFAULT NULL,
  UNIQUE KEY `suspenid` (`suspenid`),
  KEY `gid` (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_horarios_dias
CREATE TABLE IF NOT EXISTS `dwork_horarios_dias` (
  `hoid` int(11) NOT NULL AUTO_INCREMENT,
  `hodesc` varchar(255) NOT NULL,
  `hodescripcion` varchar(255) DEFAULT NULL,
  `hodescC` varchar(255) DEFAULT NULL,
  `hoactivo` int(1) NOT NULL DEFAULT '0',
  `hscript` char(1) NOT NULL,
  `d1` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `d3` int(11) NOT NULL,
  `d4` int(11) NOT NULL,
  `d5` int(11) NOT NULL,
  `d6` int(11) NOT NULL,
  `d0` int(11) NOT NULL,
  `hodescW` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `hoid` (`hoid`),
  FULLTEXT KEY `hodesc` (`hodesc`)
) ENGINE=MyISAM AUTO_INCREMENT=519 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_horarios_horas
CREATE TABLE IF NOT EXISTS `dwork_horarios_horas` (
  `hohid` int(11) NOT NULL AUTO_INCREMENT,
  `hohdesc` varchar(255) NOT NULL,
  `hohoras` float NOT NULL,
  `hscript` varchar(1) NOT NULL,
  `hchekin` time DEFAULT NULL,
  `hchekinmax` time DEFAULT NULL,
  `hohactivo` int(1) DEFAULT '0',
  `hohdescW` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `hohid` (`hohid`)
) ENGINE=MyISAM AUTO_INCREMENT=540 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_instructores_pagos
CREATE TABLE IF NOT EXISTS `dwork_instructores_pagos` (
  `asbid` int(11) NOT NULL AUTO_INCREMENT,
  `asbfecha` date NOT NULL DEFAULT '0000-00-00',
  `asid` int(11) NOT NULL DEFAULT '0',
  `gid` int(11) NOT NULL,
  `ashoraspago` float NOT NULL,
  `asbcantidad` varchar(255) NOT NULL,
  `asformapago` varchar(255) NOT NULL,
  `asbancotransferencia` varchar(255) NOT NULL,
  `asnumcheque` int(11) NOT NULL,
  `asbancocheque` varchar(255) NOT NULL,
  `aspoliza` int(11) NOT NULL,
  `asfacturado` int(1) NOT NULL,
  `pid` int(11) NOT NULL,
  UNIQUE KEY `abid` (`asbid`),
  KEY `asid` (`asid`),
  KEY `gid` (`gid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_listas_asistencia
CREATE TABLE IF NOT EXISTS `dwork_listas_asistencia` (
  `laid` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `lafecha` date NOT NULL DEFAULT '0000-00-00',
  `lahora` time NOT NULL DEFAULT '00:00:00',
  UNIQUE KEY `laid` (`laid`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_menu
CREATE TABLE IF NOT EXISTS `dwork_menu` (
  `mid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mico` varchar(255) DEFAULT NULL,
  `mparent` int(11) DEFAULT '0',
  `mnombre` varchar(255) DEFAULT NULL,
  `marchivo` varchar(255) DEFAULT NULL,
  `morden` int(11) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_menu_permisos
CREATE TABLE IF NOT EXISTS `dwork_menu_permisos` (
  `perid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `perid` (`perid`),
  KEY `modid` (`mid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1 PACK_KEYS=0;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_modulos
CREATE TABLE IF NOT EXISTS `dwork_modulos` (
  `modid` int(11) NOT NULL AUTO_INCREMENT,
  `mparent` int(11) NOT NULL DEFAULT '0',
  `mnombre` varchar(255) CHARACTER SET latin5 COLLATE latin5_bin NOT NULL,
  `mdescripcion` text NOT NULL,
  `micono` varchar(255) NOT NULL DEFAULT '',
  `micono_th` varchar(255) NOT NULL DEFAULT '',
  `mcarpeta` varchar(255) NOT NULL DEFAULT '',
  `marchivo` varchar(255) NOT NULL DEFAULT '',
  `orden` int(2) NOT NULL DEFAULT '0',
  `mactivo` int(1) DEFAULT '0',
  `mvideo` varchar(255) DEFAULT NULL,
  UNIQUE KEY `modid` (`modid`),
  KEY `mparent` (`mparent`)
) ENGINE=MyISAM AUTO_INCREMENT=418 DEFAULT CHARSET=latin1 PACK_KEYS=0;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_paises
CREATE TABLE IF NOT EXISTS `dwork_paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(64) NOT NULL DEFAULT '',
  `iso` char(2) NOT NULL DEFAULT '',
  `iso3` char(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `IDX_COUNTRIES_NAME` (`pais`)
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_personal
CREATE TABLE IF NOT EXISTS `dwork_personal` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `sedeid` int(11) DEFAULT '1',
  `sedeclave` varchar(20) DEFAULT 'LE',
  `extension` int(5) DEFAULT '0',
  `extensionBase` int(5) DEFAULT '0',
  `numWhatsapp` varchar(255) DEFAULT NULL,
  `claveExtension` int(5) DEFAULT NULL,
  `pnombre` varchar(255) NOT NULL DEFAULT '',
  `papellidos` varchar(255) NOT NULL DEFAULT '',
  `pnombrecorto` varchar(255) DEFAULT NULL,
  `panomina` int(1) DEFAULT '0',
  `notas` text,
  `psueldo` float NOT NULL,
  `pIMSSrebaja` float NOT NULL DEFAULT '66.27',
  `psueldoTipo` varchar(255) DEFAULT 'QUINCENAL',
  `pbonoasistencia` float DEFAULT NULL,
  `pbonopuntualidad` float DEFAULT NULL,
  `ppagohora` varchar(255) NOT NULL,
  `numTarjeta` varchar(255) DEFAULT NULL,
  `pgen` int(1) NOT NULL DEFAULT '0',
  `prfc` varchar(255) NOT NULL DEFAULT '',
  `pimss` varchar(255) NOT NULL DEFAULT '',
  `pcurp` varchar(255) DEFAULT NULL,
  `pdireccion` text NOT NULL,
  `pciudad` varchar(255) NOT NULL DEFAULT '',
  `pestado` varchar(255) NOT NULL DEFAULT '0',
  `ppais` varchar(255) NOT NULL DEFAULT '0',
  `ptel` varchar(255) NOT NULL DEFAULT '',
  `pfoto` varchar(255) NOT NULL DEFAULT '',
  `dip` int(3) NOT NULL DEFAULT '0',
  `eqid` int(11) NOT NULL,
  `ppuesto` varchar(255) NOT NULL DEFAULT '',
  `pincrementosueldofecha` date DEFAULT '0000-00-00',
  `fid` int(2) NOT NULL DEFAULT '0',
  `sid` int(2) NOT NULL DEFAULT '0',
  `pfecha1alta` date NOT NULL DEFAULT '0000-00-00',
  `pfechaalta` date NOT NULL DEFAULT '0000-00-00',
  `pfechabaja` date DEFAULT NULL,
  `plogin` varchar(20) NOT NULL DEFAULT '',
  `ppass` varchar(255) NOT NULL DEFAULT '',
  `pemail` varchar(255) NOT NULL DEFAULT '',
  `pemail_empresa` varchar(255) DEFAULT NULL,
  `pass_email` varchar(255) DEFAULT NULL,
  `pemail_gmail` varchar(255) DEFAULT NULL,
  `pass_gmail` varchar(255) DEFAULT NULL,
  `pemail_skype` varchar(255) DEFAULT NULL,
  `plan_skype` date DEFAULT NULL,
  `telefonoSkype` varchar(255) DEFAULT NULL,
  `subioReporte` int(1) DEFAULT '0',
  `hid` int(2) NOT NULL DEFAULT '0',
  `inactivo` int(11) NOT NULL,
  `depositan` int(1) NOT NULL,
  `numerocuenta` int(11) DEFAULT NULL,
  `sesion` varchar(255) DEFAULT NULL,
  `sesion_gen` varchar(255) DEFAULT NULL,
  `hr_entrada1` time DEFAULT '00:00:00',
  `hr_salida1` time DEFAULT '00:00:00',
  `hr_entrada2` time DEFAULT '00:00:00',
  `hr_salida2` time DEFAULT '00:00:00',
  `hr_Sabados1` time DEFAULT '00:00:00',
  `hr_Sabados2` time DEFAULT '00:00:00',
  `fecha_nacimiento` date DEFAULT '0000-00-00',
  `cuotaVentas` float DEFAULT NULL,
  `cuotaVentas2` float DEFAULT NULL,
  `cuotaVentas3` float DEFAULT NULL,
  `llamadasEfectivasMes` int(11) DEFAULT NULL,
  `descansaSabados` float DEFAULT '25000',
  `InscritosMes` int(11) DEFAULT '0',
  `comision` float DEFAULT '0',
  `nivel` int(1) DEFAULT '0',
  `super` int(1) DEFAULT '0',
  UNIQUE KEY `eid` (`pid`),
  KEY `dip` (`dip`)
) ENGINE=MyISAM AUTO_INCREMENT=1000279 DEFAULT CHARSET=latin1 COMMENT='no usar el 26, 27 y 29 por que son usuarios para queretaro';

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_personal_chekin
CREATE TABLE IF NOT EXISTS `dwork_personal_chekin` (
  `chid` int(100) NOT NULL AUTO_INCREMENT,
  `sesid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `chkdia` date NOT NULL DEFAULT '0000-00-00',
  `chkhora` time NOT NULL DEFAULT '00:00:00',
  UNIQUE KEY `chid` (`chid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=57989 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_personal_comisiones
CREATE TABLE IF NOT EXISTS `dwork_personal_comisiones` (
  `comid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `personalid` int(11) DEFAULT '0',
  `montocomision` float DEFAULT NULL,
  `totalbolsa` float DEFAULT NULL,
  `comisionsupervisados` float DEFAULT '0',
  `totalcomision` float DEFAULT '0',
  `supervisados` int(11) DEFAULT '0',
  `observaciones` text,
  `mescomisiones` int(3) DEFAULT '0',
  `aniocomisiones` int(4) DEFAULT '0',
  `fechapago` date DEFAULT NULL,
  `numInscritos` int(11) DEFAULT '0',
  PRIMARY KEY (`comid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_personal_comisiones_detalles
CREATE TABLE IF NOT EXISTS `dwork_personal_comisiones_detalles` (
  `comdid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `agid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `comision` float DEFAULT NULL,
  `bolsa` float DEFAULT NULL,
  PRIMARY KEY (`comdid`)
) ENGINE=MyISAM AUTO_INCREMENT=234 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_personal_cuentasycorreos
CREATE TABLE IF NOT EXISTS `dwork_personal_cuentasycorreos` (
  `cuentaid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `extension` int(11) DEFAULT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `disponible` int(1) DEFAULT '1',
  PRIMARY KEY (`cuentaid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_personal_equipos
CREATE TABLE IF NOT EXISTS `dwork_personal_equipos` (
  `eqid` int(11) NOT NULL AUTO_INCREMENT,
  `dip` int(11) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  UNIQUE KEY `eqid` (`eqid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_personal_frases
CREATE TABLE IF NOT EXISTS `dwork_personal_frases` (
  `frid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `frase` varchar(50) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `frcaduca` date DEFAULT NULL,
  PRIMARY KEY (`frid`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_personal_modulos_permisos
CREATE TABLE IF NOT EXISTS `dwork_personal_modulos_permisos` (
  `perid` int(11) NOT NULL AUTO_INCREMENT,
  `modid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `perid` (`perid`),
  KEY `modid` (`modid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=5784 DEFAULT CHARSET=latin1 PACK_KEYS=0;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_personal_sesiones
CREATE TABLE IF NOT EXISTS `dwork_personal_sesiones` (
  `sesid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `sdate` date NOT NULL DEFAULT '0000-00-00',
  `sactive` int(1) NOT NULL DEFAULT '1',
  `shorainicio` time NOT NULL DEFAULT '00:00:00',
  `shorafin` time NOT NULL DEFAULT '00:00:00',
  UNIQUE KEY `sesid` (`sesid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=118773 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_personal_usuarios
CREATE TABLE IF NOT EXISTS `dwork_personal_usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `asesor` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `extension` int(5) DEFAULT NULL,
  `ocupado` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_productos_relacion
CREATE TABLE IF NOT EXISTS `dwork_productos_relacion` (
  `relid` int(11) NOT NULL AUTO_INCREMENT,
  `relprodid` int(11) NOT NULL DEFAULT '0',
  `prodid` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `relid` (`relid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_prospectos_foraneos
CREATE TABLE IF NOT EXISTS `dwork_prospectos_foraneos` (
  `prforid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `ciudad` varchar(255) NOT NULL DEFAULT '',
  `telefono` varchar(255) NOT NULL DEFAULT '',
  `correo` varchar(255) NOT NULL DEFAULT '',
  `comentarios` text NOT NULL,
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  UNIQUE KEY `prforid` (`prforid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_recados
CREATE TABLE IF NOT EXISTS `dwork_recados` (
  `rid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rfecha` date DEFAULT NULL,
  `rhora` time DEFAULT NULL,
  `recado` text,
  `ejecutivo` int(11) DEFAULT NULL,
  `rdestinatario` int(11) DEFAULT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_software
CREATE TABLE IF NOT EXISTS `dwork_software` (
  `softid` int(11) NOT NULL AUTO_INCREMENT,
  `software` varchar(255) NOT NULL DEFAULT '',
  `softico` varchar(255) NOT NULL,
  `softmarca` varchar(255) NOT NULL DEFAULT '',
  `softdescripcion` text NOT NULL,
  `softrequisitos` text,
  `softlink` text NOT NULL,
  `smac` int(1) NOT NULL DEFAULT '0',
  `sactivo` int(1) NOT NULL DEFAULT '1',
  UNIQUE KEY `softid` (`softid`),
  FULLTEXT KEY `software` (`software`)
) ENGINE=MyISAM AUTO_INCREMENT=195 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_software_producto
CREATE TABLE IF NOT EXISTS `dwork_software_producto` (
  `softprodid` int(11) NOT NULL AUTO_INCREMENT,
  `prodid` int(11) NOT NULL DEFAULT '0',
  `softid` varchar(25) NOT NULL DEFAULT '0',
  UNIQUE KEY `softprodid` (`softprodid`),
  KEY `prodid` (`prodid`),
  KEY `softid` (`softid`)
) ENGINE=MyISAM AUTO_INCREMENT=148 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_solicitudes_inscripcion
CREATE TABLE IF NOT EXISTS `dwork_solicitudes_inscripcion` (
  `siid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `clave` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `siimd5` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `siifecha` timestamp NULL DEFAULT NULL,
  `siimonto` float DEFAULT NULL,
  `siiformapago` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `siipagos` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'un pago',
  `siifacturado` int(1) DEFAULT '0',
  `siiemail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `alonline` int(1) DEFAULT '0',
  `siipromo` int(1) DEFAULT '0',
  `siipromotext` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`siid`)
) ENGINE=MyISAM AUTO_INCREMENT=4487 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_usuarios_sedes_relacion
CREATE TABLE IF NOT EXISTS `dwork_usuarios_sedes_relacion` (
  `usid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `sedeclave` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`usid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_vouchers_solicitudes
CREATE TABLE IF NOT EXISTS `dwork_vouchers_solicitudes` (
  `svid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `svFecha` date DEFAULT NULL,
  `svSede` varchar(5) DEFAULT NULL,
  `svCantidad` int(11) DEFAULT NULL,
  `svSubtotal` float DEFAULT '0',
  `svIva` float DEFAULT '0',
  `svTotal` float DEFAULT '0',
  `svPago` varchar(255) DEFAULT '0',
  `svStatus` int(1) DEFAULT NULL,
  `svSolicito` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`svid`)
) ENGINE=MyISAM AUTO_INCREMENT=238 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwork_vouchers_solicitudes_desglose
CREATE TABLE IF NOT EXISTS `dwork_vouchers_solicitudes_desglose` (
  `svdid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `svid` int(11) DEFAULT NULL,
  `svdMarca` varchar(255) DEFAULT NULL,
  `svdCantidad` int(11) DEFAULT NULL,
  `svPrecioUSD` float DEFAULT NULL,
  `svPrecio` float DEFAULT '0',
  `svMonto` float DEFAULT '0',
  PRIMARY KEY (`svdid`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.dwrok_empresa_productos_prepostrequisitos
CREATE TABLE IF NOT EXISTS `dwrok_empresa_productos_prepostrequisitos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(1) DEFAULT '0',
  `tipo` int(11) DEFAULT '1',
  `descripcion` varchar(255) DEFAULT NULL,
  `orden` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.empresas_capacitadas
CREATE TABLE IF NOT EXISTS `empresas_capacitadas` (
  `empid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Empresa` varchar(255) DEFAULT NULL,
  `Empresa2` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.empresa_whatsapps
CREATE TABLE IF NOT EXISTS `empresa_whatsapps` (
  `wid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `wnumero` varchar(255) DEFAULT NULL,
  `wdesc` varchar(255) DEFAULT NULL,
  `wtelefono` varchar(255) DEFAULT NULL,
  `wcomentarios` text,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.encuesta
CREATE TABLE IF NOT EXISTS `encuesta` (
  `encid` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`encid`),
  UNIQUE KEY `encid` (`encid`)
) ENGINE=MyISAM AUTO_INCREMENT=353 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.evaluaciones_alumnos
CREATE TABLE IF NOT EXISTS `evaluaciones_alumnos` (
  `evid` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `agid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `asid` int(11) DEFAULT NULL,
  `efecha` date DEFAULT NULL,
  UNIQUE KEY `evid` (`evid`),
  KEY `aid` (`aid`),
  KEY `agid` (`agid`),
  KEY `pid` (`pid`),
  KEY `gid` (`gid`),
  KEY `asid` (`asid`)
) ENGINE=MyISAM AUTO_INCREMENT=72615 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.evaluaciones_opciones
CREATE TABLE IF NOT EXISTS `evaluaciones_opciones` (
  `evidop` int(11) NOT NULL AUTO_INCREMENT,
  `evidoparent` int(11) DEFAULT NULL,
  `eopcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`evidop`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.evaluaciones_respuestas
CREATE TABLE IF NOT EXISTS `evaluaciones_respuestas` (
  `opcid` int(11) NOT NULL AUTO_INCREMENT,
  `evid` int(11) DEFAULT NULL,
  `evidop` int(11) DEFAULT NULL,
  `e1` int(11) DEFAULT NULL,
  `e2` int(11) DEFAULT NULL,
  `e3` int(11) DEFAULT NULL,
  `e4` int(11) DEFAULT NULL,
  `e5` int(11) DEFAULT NULL,
  UNIQUE KEY `opcid` (`opcid`),
  KEY `evid` (`evid`)
) ENGINE=MyISAM AUTO_INCREMENT=1948711 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.examenes_auladiser
CREATE TABLE IF NOT EXISTS `examenes_auladiser` (
  `exid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `activo` int(1) DEFAULT '1',
  UNIQUE KEY `exid` (`exid`),
  KEY `mid` (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.examenes_auladiser_alumnos
CREATE TABLE IF NOT EXISTS `examenes_auladiser_alumnos` (
  `exaid` int(11) NOT NULL AUTO_INCREMENT,
  `agid` int(11) NOT NULL,
  `exafecha` date DEFAULT NULL,
  `exapuntuacion` int(11) NOT NULL DEFAULT '0',
  `exastatus` int(11) NOT NULL DEFAULT '0',
  `codigoEvaluacion` varchar(255) DEFAULT NULL,
  `codigoStatus` int(1) DEFAULT '0',
  `exatiempo` time DEFAULT '00:00:00',
  UNIQUE KEY `exid` (`exaid`),
  KEY `agid` (`agid`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.examenes_auladiser_alumnos_respuestas
CREATE TABLE IF NOT EXISTS `examenes_auladiser_alumnos_respuestas` (
  `respid` int(11) NOT NULL AUTO_INCREMENT,
  `agid` int(11) NOT NULL DEFAULT '0',
  `mid` int(11) NOT NULL DEFAULT '0',
  `exaid` int(11) NOT NULL DEFAULT '0',
  `pregid` int(11) NOT NULL DEFAULT '0',
  `resrespuesta` char(11) DEFAULT NULL,
  `rescalificacion` int(1) NOT NULL DEFAULT '0',
  `resstatus` int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `pregid` (`respid`),
  KEY `agid` (`agid`),
  KEY `mid` (`mid`),
  KEY `exaid` (`exaid`)
) ENGINE=MyISAM AUTO_INCREMENT=1237 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.examenes_auladiser_preguntas
CREATE TABLE IF NOT EXISTS `examenes_auladiser_preguntas` (
  `pregid` int(11) NOT NULL AUTO_INCREMENT,
  `exid` int(11) DEFAULT NULL,
  `pregunta` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `respuesta` char(11) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  UNIQUE KEY `pregid` (`pregid`),
  KEY `exid` (`exid`)
) ENGINE=MyISAM AUTO_INCREMENT=680 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.examenes_auladiser_prospectos
CREATE TABLE IF NOT EXISTS `examenes_auladiser_prospectos` (
  `exaid` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(255) NOT NULL,
  `codigoEvaluacion` varchar(255) DEFAULT '0',
  `exafecha` date DEFAULT '0000-00-00',
  `exapuntuacion` int(11) NOT NULL DEFAULT '0',
  `exastatus` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `exid` (`exaid`),
  KEY `clave` (`clave`),
  KEY `codigoEvaluacion` (`codigoEvaluacion`)
) ENGINE=MyISAM AUTO_INCREMENT=731 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.examenes_auladiser_prospectos_respuestas
CREATE TABLE IF NOT EXISTS `examenes_auladiser_prospectos_respuestas` (
  `respid` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(255) NOT NULL DEFAULT '0',
  `mid` int(11) NOT NULL DEFAULT '0',
  `exaid` int(11) NOT NULL DEFAULT '0',
  `pregid` int(11) NOT NULL DEFAULT '0',
  `resrespuesta` char(11) DEFAULT NULL,
  `resstatus` int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `respid` (`respid`),
  KEY `clave` (`clave`),
  KEY `mid` (`mid`),
  KEY `exaid` (`exaid`),
  KEY `pregid` (`pregid`)
) ENGINE=MyISAM AUTO_INCREMENT=13599 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.fichas_descargas
CREATE TABLE IF NOT EXISTS `fichas_descargas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `fid` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `clave` varchar(11) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64240 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.frases_celebres
CREATE TABLE IF NOT EXISTS `frases_celebres` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `frase` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.hitsauladiser
CREATE TABLE IF NOT EXISTS `hitsauladiser` (
  `hitid` int(11) NOT NULL AUTO_INCREMENT,
  `hreferidor` varchar(255) NOT NULL DEFAULT '',
  `hnavegador` varchar(255) NOT NULL DEFAULT '',
  `hip` varchar(255) NOT NULL DEFAULT '',
  `hdia` date NOT NULL DEFAULT '0000-00-00',
  `hhora` time NOT NULL DEFAULT '00:00:00',
  `pagina` varchar(255) NOT NULL DEFAULT '',
  `sede` varchar(255) DEFAULT NULL,
  UNIQUE KEY `hitid` (`hitid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.hitsboletines
CREATE TABLE IF NOT EXISTS `hitsboletines` (
  `hitid` int(11) NOT NULL AUTO_INCREMENT,
  `bolid` int(11) NOT NULL DEFAULT '0',
  `hreferidor` varchar(255) NOT NULL DEFAULT '',
  `hnavegador` varchar(255) NOT NULL DEFAULT '',
  `hip` varchar(255) NOT NULL DEFAULT '',
  `hdia` date NOT NULL DEFAULT '0000-00-00',
  `hhora` time NOT NULL DEFAULT '00:00:00',
  UNIQUE KEY `hitid` (`hitid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.hitscert
CREATE TABLE IF NOT EXISTS `hitscert` (
  `hitid` int(11) NOT NULL AUTO_INCREMENT,
  `certid` int(11) NOT NULL DEFAULT '0',
  `hreferidor` varchar(255) NOT NULL DEFAULT '',
  `hnavegador` varchar(255) NOT NULL DEFAULT '',
  `hip` varchar(255) NOT NULL DEFAULT '',
  `hdia` date NOT NULL DEFAULT '0000-00-00',
  `hhora` time NOT NULL DEFAULT '00:00:00',
  UNIQUE KEY `hitid` (`hitid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.hitsprod
CREATE TABLE IF NOT EXISTS `hitsprod` (
  `hitid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `hreferidor` varchar(255) NOT NULL DEFAULT '',
  `hnavegador` varchar(255) NOT NULL DEFAULT '',
  `hip` varchar(255) NOT NULL DEFAULT '',
  `hdia` date NOT NULL DEFAULT '0000-00-00',
  `hhora` time NOT NULL DEFAULT '00:00:00',
  `sede` varchar(255) DEFAULT NULL,
  UNIQUE KEY `hitid` (`hitid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=7320573 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.hitssoft
CREATE TABLE IF NOT EXISTS `hitssoft` (
  `hitid` int(11) NOT NULL AUTO_INCREMENT,
  `softid` int(11) NOT NULL DEFAULT '0',
  `hreferidor` varchar(255) NOT NULL DEFAULT '',
  `hnavegador` varchar(255) NOT NULL DEFAULT '',
  `hip` varchar(255) NOT NULL DEFAULT '',
  `hdia` date NOT NULL DEFAULT '0000-00-00',
  `hhora` time NOT NULL DEFAULT '00:00:00',
  UNIQUE KEY `hitid` (`hitid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.img_archivos
CREATE TABLE IF NOT EXISTS `img_archivos` (
  `imid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `imtid` int(11) DEFAULT '0',
  `imarchivo` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`imid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.img_tipos
CREATE TABLE IF NOT EXISTS `img_tipos` (
  `imtid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `imtipo` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`imtid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.instalaciones_galeria
CREATE TABLE IF NOT EXISTS `instalaciones_galeria` (
  `fi_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fi_foto` varchar(255) DEFAULT NULL,
  `fi_desc` varchar(255) DEFAULT NULL,
  `fi_sede` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`fi_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.marcas
CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(255) DEFAULT NULL,
  `marca_desc` text NOT NULL,
  `mactiva` int(1) DEFAULT '0',
  `diploma` varchar(255) DEFAULT NULL,
  `menu` int(1) DEFAULT '0',
  `imgLanding` varchar(255) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.myphp_who_names
CREATE TABLE IF NOT EXISTS `myphp_who_names` (
  `memid` int(11) NOT NULL AUTO_INCREMENT,
  `mem_name` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `memid` (`memid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.partners
CREATE TABLE IF NOT EXISTS `partners` (
  `partid` int(11) NOT NULL AUTO_INCREMENT,
  `partnombre` varchar(255) NOT NULL,
  `parthtml` text NOT NULL,
  `partlink` varchar(255) NOT NULL,
  `porden` int(11) DEFAULT NULL,
  UNIQUE KEY `partid` (`partid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.productos_modulos
CREATE TABLE IF NOT EXISTS `productos_modulos` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `softwaretxt` varchar(255) DEFAULT NULL,
  `mnombre` varchar(255) CHARACTER SET latin5 COLLATE latin5_bin NOT NULL,
  `mcopy` text,
  `mhoras` int(11) DEFAULT NULL,
  `hrTaller` int(11) DEFAULT NULL,
  `hrCurso` int(11) DEFAULT NULL,
  `hrDip` int(11) DEFAULT NULL,
  `hrEsp` int(11) DEFAULT NULL,
  `mnivel` varchar(26) NOT NULL,
  `opcional` int(1) DEFAULT '0',
  `unidades` int(3) DEFAULT NULL,
  `mimagen` varchar(255) DEFAULT NULL,
  `mob1` varchar(255) DEFAULT NULL,
  `mob2` varchar(255) DEFAULT NULL,
  `mob3` varchar(255) DEFAULT NULL,
  UNIQUE KEY `mid` (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=5596 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.productos_modulos_subunidades
CREATE TABLE IF NOT EXISTS `productos_modulos_subunidades` (
  `sunid` int(11) NOT NULL AUTO_INCREMENT,
  `unid` int(11) NOT NULL,
  `sunorden` int(3) DEFAULT NULL,
  `sunnombre` varchar(255) NOT NULL DEFAULT '',
  `unPDF` text NOT NULL,
  `unVideo` text NOT NULL,
  `unAssets` varchar(255) NOT NULL,
  `uparent` int(11) NOT NULL,
  `clase5` int(5) DEFAULT '0',
  `clase8` int(11) DEFAULT NULL,
  PRIMARY KEY (`sunid`),
  UNIQUE KEY `unid` (`sunid`),
  KEY `mid` (`unid`),
  KEY `uparent` (`uparent`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.productos_modulos_unidades
CREATE TABLE IF NOT EXISTS `productos_modulos_unidades` (
  `unid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `unorden` int(3) DEFAULT NULL,
  `unnombre` varchar(255) NOT NULL,
  `unPDF` text NOT NULL,
  `unVideo` text NOT NULL,
  `unAssets` varchar(255) NOT NULL,
  `uparent` int(11) NOT NULL,
  `clase5` int(5) DEFAULT '0',
  `clase8` int(11) DEFAULT NULL,
  PRIMARY KEY (`unid`),
  UNIQUE KEY `unid` (`unid`),
  KEY `mid` (`mid`),
  KEY `uparent` (`uparent`)
) ENGINE=MyISAM AUTO_INCREMENT=14508 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.productos_modulos_unidades_complementos
CREATE TABLE IF NOT EXISTS `productos_modulos_unidades_complementos` (
  `compid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `compnombre` varchar(255) NOT NULL,
  `compdescarga` varchar(255) NOT NULL,
  PRIMARY KEY (`compid`),
  UNIQUE KEY `unid` (`compid`),
  KEY `mid` (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.salumnos_alumnos_abonos
CREATE TABLE IF NOT EXISTS `salumnos_alumnos_abonos` (
  `sabid` int(11) NOT NULL AUTO_INCREMENT,
  `sabfecha` date NOT NULL DEFAULT '0000-00-00',
  `sabhora` time NOT NULL DEFAULT '00:00:00',
  `agid` int(11) NOT NULL DEFAULT '0',
  `sabcantidad` varchar(255) NOT NULL DEFAULT '',
  `sabiva` float NOT NULL,
  `sabtotal` float NOT NULL,
  `saformacobro` varchar(255) NOT NULL,
  `sacomprobante` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `sverificado` int(1) NOT NULL,
  UNIQUE KEY `abid` (`sabid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.tematicas
CREATE TABLE IF NOT EXISTS `tematicas` (
  `tematid` int(11) NOT NULL AUTO_INCREMENT,
  `tematica` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `tematid` (`tematid`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.tematicas_productos
CREATE TABLE IF NOT EXISTS `tematicas_productos` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `activo` int(1) DEFAULT '0',
  `ttematica` varchar(255) DEFAULT NULL,
  `tdescripcion` text,
  `icobootstrap` varchar(255) DEFAULT NULL,
  `diasemana` int(1) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `mailerliteGID` int(25) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.templates
CREATE TABLE IF NOT EXISTS `templates` (
  `tid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `tnombre` varchar(255) DEFAULT NULL,
  `thtml` text,
  `tactivo` int(1) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.testimonios_video
CREATE TABLE IF NOT EXISTS `testimonios_video` (
  `testid` int(11) NOT NULL AUTO_INCREMENT,
  `testitulo` varchar(255) DEFAULT NULL,
  `testimg` varchar(255) DEFAULT NULL,
  `testcode` text,
  `testhits` int(11) DEFAULT NULL,
  `testorden` int(11) DEFAULT NULL,
  `testfrace` varchar(255) DEFAULT NULL,
  `testdesc` varchar(255) DEFAULT NULL,
  UNIQUE KEY `testid` (`testid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla adcontrol2019.TG_whos_online
CREATE TABLE IF NOT EXISTS `TG_whos_online` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `timestamp` int(15) NOT NULL DEFAULT '0',
  `ip` varchar(40) NOT NULL DEFAULT '',
  `file` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`),
  KEY `file` (`file`),
  KEY `timestamp` (`timestamp`)
) ENGINE=MyISAM AUTO_INCREMENT=13418136 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
