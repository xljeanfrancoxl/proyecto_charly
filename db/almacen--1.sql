/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : almacen

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 08/06/2021 20:28:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria`  (
  `Id_categoria` int NULL DEFAULT NULL,
  `nombre_categoria` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES (1, 'camaras');

-- ----------------------------
-- Table structure for detalle
-- ----------------------------
DROP TABLE IF EXISTS `detalle`;
CREATE TABLE `detalle`  (
  `Id_detalle` int NULL DEFAULT NULL,
  `Id_producto` int NULL DEFAULT NULL,
  `Id_categoria` int NULL DEFAULT NULL,
  `Cantidad_ingreso_producto` int UNSIGNED NULL DEFAULT NULL,
  `Cantidad_salidad_producto` int UNSIGNED NULL DEFAULT NULL,
  `Estado_detalle` int NULL DEFAULT NULL,
  `Id_proveedor` int NULL DEFAULT NULL,
  `Total_acumulado` int NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of detalle
-- ----------------------------
INSERT INTO `detalle` VALUES (3, 2, 1, 6, 0, 1, 0, 18);

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto`  (
  `Id_producto` int NOT NULL AUTO_INCREMENT,
  `Nom_producto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Precio_prod` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Alerta_prod` int NULL DEFAULT NULL,
  `Cant_prod` int NULL DEFAULT NULL,
  `Estado_prod` int NULL DEFAULT NULL,
  `nom_categoria` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Ubicacion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Id_marca` int NULL DEFAULT NULL,
  `Id_proveedor` int NULL DEFAULT NULL,
  PRIMARY KEY (`Id_producto`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES (1, 'destornillador', '30', 2, 5, 0, 'herramientas', NULL, NULL, NULL, NULL);
INSERT INTO `producto` VALUES (2, 'camara 3x41 mps', '20', 2, 18, 0, 'camaras pequeñas', NULL, NULL, NULL, NULL);
INSERT INTO `producto` VALUES (3, 'cable utp', '10', 2, 7, 1, 'implementos camara', NULL, NULL, NULL, NULL);
INSERT INTO `producto` VALUES (11, 'producto 1', '10', NULL, 5, 1, 'HERRAMIENTA', '1', 'es una descripcion', 1, 1);

-- ----------------------------
-- Table structure for proveedor
-- ----------------------------
DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE `proveedor`  (
  `Id_Proveedor` int NOT NULL AUTO_INCREMENT,
  `Nom_proveedor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Dni_proveedor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Email_proveedor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Razon_social_proveedor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Ruc_proveedor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Telefono_proveedor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Id_Proveedor`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of proveedor
-- ----------------------------
INSERT INTO `proveedor` VALUES (1, 'jeanfranco', 'azca', '1', NULL, NULL, NULL);
INSERT INTO `proveedor` VALUES (2, 'jeanfranco', '73055907', 'franco@hotrmai.com', '132', '32359', '9953232186');
INSERT INTO `proveedor` VALUES (3, 'neysier', '6545', 'neyser@hkrmm.com', 'kljdskl', '231', '13223');
INSERT INTO `proveedor` VALUES (4, 'Pepito Grillo', '43997854', 'charizard@gmail.com', 'distribuidora de material de seguridad', '987654321', '978520765');

-- ----------------------------
-- Table structure for proveedores
-- ----------------------------
DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE `proveedores`  (
  `Id_proveedor` int NOT NULL,
  `Nombre_prove` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Apellido_prove` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Email_prove` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of proveedores
-- ----------------------------
INSERT INTO `proveedores` VALUES (2, NULL, NULL, NULL);
INSERT INTO `proveedores` VALUES (1, '123', NULL, NULL);
INSERT INTO `proveedores` VALUES (1, '123', NULL, NULL);
INSERT INTO `proveedores` VALUES (0, '123', '', '');
INSERT INTO `proveedores` VALUES (0, '123', '', '');
INSERT INTO `proveedores` VALUES (0, '2', '', '');
INSERT INTO `proveedores` VALUES (0, '123', '', '');
INSERT INTO `proveedores` VALUES (0, '321321', '321321', '21321');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'diego@blogdephp.com', 'blogdephp');

-- ----------------------------
-- Table structure for usurio
-- ----------------------------
DROP TABLE IF EXISTS `usurio`;
CREATE TABLE `usurio`  (
  `Id_usurio` int NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usurio
-- ----------------------------

-- ----------------------------
-- View structure for v_detalle
-- ----------------------------
DROP VIEW IF EXISTS `v_detalle`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_detalle` AS SELECT
	detalle.Id_detalle,
	producto.Nom_producto,
	categoria.nombre_categoria,
	producto.Precio_prod,
	detalle.Total_acumulado,
	detalle.Cantidad_ingreso_producto,
	detalle.Cantidad_salidad_producto,
	detalle.Estado_detalle ,
	proveedor.Nom_proveedor
FROM
	detalle
	JOIN producto ON producto.Id_producto = detalle.Id_producto
	JOIN categoria ON categoria.Id_categoria = detalle.Id_categoria
	JOIN proveedor ON proveedor.Id_Proveedor = detalle.Id_proveedor 
	ORDER BY detalle.Id_detalle ASC ; ;

SET FOREIGN_KEY_CHECKS = 1;
