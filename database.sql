# 商品品牌
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
	`id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
	`zhname` VARCHAR(60) NOT NULL DEFAULT '' COMMENT '中文名称',
	`cnname` VARCHAR(60) NOT NULL DEFAULT '' COMMENT '英文名称',
	`origin_img` VARCHAR(255) NULL DEFAULT '' COMMENT '品牌LOGO',
	`sort` TINYINT UNSIGNED NULL DEFAULT '50' COMMENT '排序',
	`introduction` VARCHAR(255) NULL DEFAULT '' COMMENT '品牌简介',
	`is_show` TINYINT(1) UNSIGNED NOT NULL DEFAULT '1' COMMENT '是否显示',
	`created_at` TIMESTAMP NULL COMMENT '创建时间',
	`updated_at` TIMESTAMP NULL COMMENT '修改时间',
	`deleted_at` TIMESTAMP NULL COMMENT '删除时间',
	PRIMARY KEY(`id`),
	KEY `brand_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `brands`(`id`, `zhname`, `cnname`, `origin_img`, `sort`, `introduction`, `is_show`, `created_at`, `updated_at`, `deleted_at`) VALUES (1, '四季优美', 'SJYM', '', 50, '四季优美生物科技有限公司', 1, '2018-01-09 11:16:52', NULL, NULL);
INSERT INTO `brands`(`id`, `zhname`, `cnname`, `origin_img`, `sort`, `introduction`, `is_show`, `created_at`, `updated_at`, `deleted_at`) VALUES (2, '苹果', 'APPLE', '', 50, '苹果公司（Apple Inc. ）是美国的一家高科技公司。由史蒂夫·乔布斯、斯蒂夫·沃兹尼亚克和罗·韦恩(Ron Wayne)等人于1976年4月1日创立，并命名为美国苹果电脑公司（Apple Computer Inc. ），2007年1月9日更名为苹果公司，总部位于加利福尼亚州的库比蒂诺。', 0, '2018-01-09 11:17:24', NULL, NULL);
INSERT INTO `brands`(`id`, `zhname`, `cnname`, `origin_img`, `sort`, `introduction`, `is_show`, `created_at`, `updated_at`, `deleted_at`) VALUES (3, '小米', 'MI', '', 50, '北京小米科技有限责任公司成立2010年4月，是一家专注于智能硬件和电子产品研发的移动互联网公司。“为发烧而生”是小米的产品概念。小米公司创造了用互联网模式开发手机操作系统、发烧友参与开发改进的模式。[1]  小米还是继苹果、三星、华为之后第四家拥有手机芯片自研能力的科技公司。', 1, '2018-01-09 11:17:48', NULL, NULL);
