<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-06-23 00:34:39 --> Helper loaded: language_helper
INFO - 2019-06-23 00:34:39 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 00:34:39 --> Model Class Initialized
INFO - 2019-06-23 00:34:39 --> Model Class Initialized
INFO - 2019-06-23 00:34:39 --> Model Class Initialized
INFO - 2019-06-23 00:34:39 --> Model Class Initialized
INFO - 2019-06-23 00:34:39 --> Model Class Initialized
INFO - 2019-06-23 00:34:39 --> Final output sent to browser
DEBUG - 2019-06-23 00:34:39 --> Total execution time: 0.8416
INFO - 2019-06-23 00:34:42 --> Helper loaded: language_helper
INFO - 2019-06-23 00:34:42 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 00:34:42 --> Model Class Initialized
INFO - 2019-06-23 00:34:42 --> Model Class Initialized
INFO - 2019-06-23 00:34:42 --> Model Class Initialized
INFO - 2019-06-23 00:34:42 --> Model Class Initialized
INFO - 2019-06-23 00:34:42 --> Model Class Initialized
INFO - 2019-06-23 00:34:42 --> Final output sent to browser
DEBUG - 2019-06-23 00:34:42 --> Total execution time: 0.7774
INFO - 2019-06-23 00:34:45 --> Helper loaded: language_helper
INFO - 2019-06-23 00:34:45 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 00:34:45 --> Model Class Initialized
INFO - 2019-06-23 00:34:45 --> Model Class Initialized
INFO - 2019-06-23 00:34:45 --> Model Class Initialized
INFO - 2019-06-23 00:34:45 --> Model Class Initialized
INFO - 2019-06-23 00:34:45 --> Helper loaded: form_helper
INFO - 2019-06-23 00:34:45 --> Form Validation Class Initialized
DEBUG - 2019-06-23 00:34:45 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/form_validation.php
INFO - 2019-06-23 00:34:46 --> Model Class Initialized
INFO - 2019-06-23 00:34:46 --> Model Class Initialized
ERROR - 2019-06-23 00:34:46 --> Query error: Unknown column 'order_details.status' in 'field list' - Invalid query: SELECT `orders`.*, `order_details`.`qty`, `order_details`.`price`, `order_details`.`sub_total`, `order_details`.`status`, `order_details`.`product_id`, `order_details`.`created_at` AS `order_date`, `products`.`name`, CONCAT(`customers`.`firstname`, " ", `customers`.`lastname`) AS customer_fullname, `customers`.`address`, `customers`.`contact_number`, `customers`.`email`
FROM `orders`
LEFT JOIN `order_details` ON `order_details`.`order_id` = `orders`.`id`
LEFT JOIN `products` ON `products`.`id` = `order_details`.`product_id`
INNER JOIN `customers` as `customers` ON `customers`.`id` = `orders`.`customer_id`
WHERE `customer_id` = '1'
AND `resto_id` = '1'
AND `order_status` = 'pending'
INFO - 2019-06-23 00:34:46 --> Language file loaded: language/english/db_lang.php
INFO - 2019-06-23 00:34:59 --> Helper loaded: language_helper
INFO - 2019-06-23 00:34:59 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 00:34:59 --> Model Class Initialized
INFO - 2019-06-23 00:34:59 --> Model Class Initialized
INFO - 2019-06-23 00:34:59 --> Model Class Initialized
INFO - 2019-06-23 00:34:59 --> Model Class Initialized
INFO - 2019-06-23 00:34:59 --> Model Class Initialized
INFO - 2019-06-23 00:34:59 --> Final output sent to browser
DEBUG - 2019-06-23 00:34:59 --> Total execution time: 0.9737
INFO - 2019-06-23 00:35:01 --> Helper loaded: language_helper
INFO - 2019-06-23 00:35:01 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 00:35:01 --> Model Class Initialized
INFO - 2019-06-23 00:35:01 --> Model Class Initialized
INFO - 2019-06-23 00:35:01 --> Model Class Initialized
INFO - 2019-06-23 00:35:01 --> Model Class Initialized
INFO - 2019-06-23 00:35:01 --> Model Class Initialized
INFO - 2019-06-23 00:35:01 --> Final output sent to browser
DEBUG - 2019-06-23 00:35:01 --> Total execution time: 0.8673
INFO - 2019-06-23 00:40:13 --> Helper loaded: language_helper
INFO - 2019-06-23 00:40:13 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 00:40:13 --> Model Class Initialized
INFO - 2019-06-23 00:40:13 --> Model Class Initialized
INFO - 2019-06-23 00:40:13 --> Model Class Initialized
INFO - 2019-06-23 00:40:13 --> Model Class Initialized
INFO - 2019-06-23 00:40:13 --> Model Class Initialized
INFO - 2019-06-23 00:40:13 --> Final output sent to browser
DEBUG - 2019-06-23 00:40:13 --> Total execution time: 0.8729
INFO - 2019-06-23 00:40:49 --> Final output sent to browser
DEBUG - 2019-06-23 00:40:49 --> Total execution time: 1.4679
INFO - 2019-06-23 00:40:57 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2019-06-23 00:40:57 --> Model Class Initialized
INFO - 2019-06-23 00:40:57 --> Model Class Initialized
INFO - 2019-06-23 00:40:59 --> Final output sent to browser
DEBUG - 2019-06-23 00:40:59 --> Total execution time: 1.5165
INFO - 2019-06-23 00:41:06 --> Model Class Initialized
INFO - 2019-06-23 00:41:06 --> Model Class Initialized
INFO - 2019-06-23 00:41:06 --> Model Class Initialized
INFO - 2019-06-23 00:41:06 --> Final output sent to browser
DEBUG - 2019-06-23 00:41:06 --> Total execution time: 1.0723
INFO - 2019-06-23 00:41:20 --> Model Class Initialized
INFO - 2019-06-23 00:41:20 --> Model Class Initialized
INFO - 2019-06-23 00:41:20 --> Model Class Initialized
INFO - 2019-06-23 00:41:20 --> Final output sent to browser
DEBUG - 2019-06-23 00:41:20 --> Total execution time: 1.0080
INFO - 2019-06-23 00:47:25 --> Model Class Initialized
INFO - 2019-06-23 00:47:25 --> Model Class Initialized
INFO - 2019-06-23 00:47:25 --> Model Class Initialized
INFO - 2019-06-23 00:47:25 --> Final output sent to browser
DEBUG - 2019-06-23 00:47:25 --> Total execution time: 1.4893
INFO - 2019-06-23 00:47:25 --> Model Class Initialized
INFO - 2019-06-23 00:47:25 --> Model Class Initialized
INFO - 2019-06-23 00:47:25 --> Model Class Initialized
INFO - 2019-06-23 00:47:26 --> Final output sent to browser
DEBUG - 2019-06-23 00:47:26 --> Total execution time: 1.0881
INFO - 2019-06-23 00:48:31 --> Model Class Initialized
INFO - 2019-06-23 00:48:31 --> Model Class Initialized
INFO - 2019-06-23 00:48:31 --> Model Class Initialized
INFO - 2019-06-23 00:48:31 --> Final output sent to browser
DEBUG - 2019-06-23 00:48:31 --> Total execution time: 0.9949
INFO - 2019-06-23 00:48:33 --> Model Class Initialized
INFO - 2019-06-23 00:48:33 --> Model Class Initialized
INFO - 2019-06-23 00:48:33 --> Final output sent to browser
DEBUG - 2019-06-23 00:48:33 --> Total execution time: 1.5735
INFO - 2019-06-23 00:48:36 --> Model Class Initialized
INFO - 2019-06-23 00:48:36 --> Model Class Initialized
INFO - 2019-06-23 00:48:36 --> Model Class Initialized
INFO - 2019-06-23 00:48:36 --> Final output sent to browser
DEBUG - 2019-06-23 00:48:36 --> Total execution time: 1.1106
INFO - 2019-06-23 00:48:38 --> Model Class Initialized
INFO - 2019-06-23 00:48:38 --> Model Class Initialized
INFO - 2019-06-23 00:48:38 --> Final output sent to browser
DEBUG - 2019-06-23 00:48:38 --> Total execution time: 1.0727
INFO - 2019-06-23 00:48:46 --> Model Class Initialized
INFO - 2019-06-23 00:48:46 --> Model Class Initialized
INFO - 2019-06-23 00:48:46 --> Final output sent to browser
DEBUG - 2019-06-23 00:48:46 --> Total execution time: 1.2117
INFO - 2019-06-23 00:48:52 --> Model Class Initialized
INFO - 2019-06-23 00:48:52 --> Model Class Initialized
INFO - 2019-06-23 00:48:52 --> Model Class Initialized
INFO - 2019-06-23 00:48:53 --> Final output sent to browser
DEBUG - 2019-06-23 00:48:53 --> Total execution time: 1.0782
INFO - 2019-06-23 00:48:55 --> Model Class Initialized
INFO - 2019-06-23 00:48:55 --> Model Class Initialized
INFO - 2019-06-23 00:48:55 --> Model Class Initialized
INFO - 2019-06-23 00:48:55 --> Final output sent to browser
DEBUG - 2019-06-23 00:48:56 --> Total execution time: 1.1476
INFO - 2019-06-23 00:49:00 --> Model Class Initialized
INFO - 2019-06-23 00:49:00 --> Model Class Initialized
INFO - 2019-06-23 00:49:00 --> Model Class Initialized
INFO - 2019-06-23 00:49:00 --> Final output sent to browser
DEBUG - 2019-06-23 00:49:00 --> Total execution time: 1.2123
INFO - 2019-06-23 00:49:20 --> Model Class Initialized
INFO - 2019-06-23 00:49:20 --> Model Class Initialized
INFO - 2019-06-23 00:49:20 --> Final output sent to browser
DEBUG - 2019-06-23 00:49:20 --> Total execution time: 0.9977
INFO - 2019-06-23 00:49:23 --> Model Class Initialized
INFO - 2019-06-23 00:49:23 --> Model Class Initialized
INFO - 2019-06-23 00:49:23 --> Model Class Initialized
INFO - 2019-06-23 00:49:23 --> Final output sent to browser
DEBUG - 2019-06-23 00:49:23 --> Total execution time: 1.0402
INFO - 2019-06-23 01:06:18 --> Model Class Initialized
INFO - 2019-06-23 01:06:18 --> Model Class Initialized
INFO - 2019-06-23 01:06:18 --> Final output sent to browser
DEBUG - 2019-06-23 01:06:18 --> Total execution time: 0.5060
INFO - 2019-06-23 01:06:44 --> Model Class Initialized
INFO - 2019-06-23 01:06:44 --> Model Class Initialized
INFO - 2019-06-23 01:06:44 --> Model Class Initialized
INFO - 2019-06-23 01:06:44 --> Final output sent to browser
DEBUG - 2019-06-23 01:06:44 --> Total execution time: 0.5055
INFO - 2019-06-23 01:06:46 --> Model Class Initialized
INFO - 2019-06-23 01:06:46 --> Model Class Initialized
INFO - 2019-06-23 01:06:46 --> Model Class Initialized
INFO - 2019-06-23 01:06:46 --> Final output sent to browser
DEBUG - 2019-06-23 01:06:46 --> Total execution time: 0.5916
INFO - 2019-06-23 01:07:00 --> Model Class Initialized
INFO - 2019-06-23 01:07:00 --> Model Class Initialized
INFO - 2019-06-23 01:07:00 --> Model Class Initialized
INFO - 2019-06-23 01:07:00 --> Final output sent to browser
DEBUG - 2019-06-23 01:07:00 --> Total execution time: 1.2102
INFO - 2019-06-23 01:07:26 --> Model Class Initialized
INFO - 2019-06-23 01:07:26 --> Model Class Initialized
INFO - 2019-06-23 01:07:26 --> Model Class Initialized
INFO - 2019-06-23 01:07:26 --> Final output sent to browser
DEBUG - 2019-06-23 01:07:26 --> Total execution time: 1.1242
INFO - 2019-06-23 01:09:20 --> Model Class Initialized
INFO - 2019-06-23 01:09:20 --> Model Class Initialized
INFO - 2019-06-23 01:09:20 --> Model Class Initialized
INFO - 2019-06-23 01:09:22 --> Model Class Initialized
INFO - 2019-06-23 01:09:22 --> Model Class Initialized
INFO - 2019-06-23 01:09:22 --> Model Class Initialized
INFO - 2019-06-23 01:09:22 --> Final output sent to browser
DEBUG - 2019-06-23 01:09:22 --> Total execution time: 1.4070
INFO - 2019-06-23 01:10:53 --> Model Class Initialized
INFO - 2019-06-23 01:10:53 --> Model Class Initialized
INFO - 2019-06-23 01:10:53 --> Final output sent to browser
DEBUG - 2019-06-23 01:10:53 --> Total execution time: 1.0218
INFO - 2019-06-23 01:11:58 --> Helper loaded: language_helper
INFO - 2019-06-23 01:11:58 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 01:11:58 --> Model Class Initialized
INFO - 2019-06-23 01:11:58 --> Model Class Initialized
INFO - 2019-06-23 01:11:58 --> Model Class Initialized
INFO - 2019-06-23 01:11:58 --> Model Class Initialized
INFO - 2019-06-23 01:11:59 --> Final output sent to browser
DEBUG - 2019-06-23 01:11:59 --> Total execution time: 0.9564
INFO - 2019-06-23 01:20:39 --> Helper loaded: language_helper
INFO - 2019-06-23 01:20:39 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 01:20:39 --> Model Class Initialized
INFO - 2019-06-23 01:20:39 --> Model Class Initialized
INFO - 2019-06-23 01:20:39 --> Model Class Initialized
INFO - 2019-06-23 01:20:39 --> Model Class Initialized
INFO - 2019-06-23 01:20:39 --> Final output sent to browser
DEBUG - 2019-06-23 01:20:39 --> Total execution time: 1.1793
INFO - 2019-06-23 01:21:23 --> Helper loaded: language_helper
INFO - 2019-06-23 01:21:23 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 01:21:23 --> Model Class Initialized
INFO - 2019-06-23 01:21:23 --> Model Class Initialized
INFO - 2019-06-23 01:21:23 --> Model Class Initialized
INFO - 2019-06-23 01:21:23 --> Model Class Initialized
INFO - 2019-06-23 01:21:23 --> Final output sent to browser
DEBUG - 2019-06-23 01:21:23 --> Total execution time: 0.7294
INFO - 2019-06-23 01:22:28 --> Helper loaded: language_helper
INFO - 2019-06-23 01:22:28 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 01:22:28 --> Model Class Initialized
INFO - 2019-06-23 01:22:29 --> Model Class Initialized
INFO - 2019-06-23 01:22:29 --> Model Class Initialized
INFO - 2019-06-23 01:22:29 --> Model Class Initialized
INFO - 2019-06-23 01:22:29 --> Final output sent to browser
DEBUG - 2019-06-23 01:22:29 --> Total execution time: 0.9562
INFO - 2019-06-23 01:25:06 --> Helper loaded: language_helper
INFO - 2019-06-23 01:25:06 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 01:25:06 --> Model Class Initialized
INFO - 2019-06-23 01:25:06 --> Model Class Initialized
INFO - 2019-06-23 01:25:06 --> Model Class Initialized
INFO - 2019-06-23 01:25:06 --> Model Class Initialized
INFO - 2019-06-23 01:25:06 --> Final output sent to browser
DEBUG - 2019-06-23 01:25:06 --> Total execution time: 0.8250
INFO - 2019-06-23 01:25:08 --> Helper loaded: language_helper
INFO - 2019-06-23 01:25:08 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 01:25:08 --> Model Class Initialized
INFO - 2019-06-23 01:25:08 --> Model Class Initialized
INFO - 2019-06-23 01:25:08 --> Model Class Initialized
INFO - 2019-06-23 01:25:08 --> Model Class Initialized
INFO - 2019-06-23 01:25:08 --> Final output sent to browser
DEBUG - 2019-06-23 01:25:08 --> Total execution time: 0.8916
INFO - 2019-06-23 01:25:53 --> Helper loaded: language_helper
INFO - 2019-06-23 01:25:53 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 01:25:53 --> Model Class Initialized
INFO - 2019-06-23 01:25:53 --> Model Class Initialized
INFO - 2019-06-23 01:25:53 --> Model Class Initialized
INFO - 2019-06-23 01:25:53 --> Model Class Initialized
INFO - 2019-06-23 01:25:53 --> Final output sent to browser
DEBUG - 2019-06-23 01:25:53 --> Total execution time: 1.0164
INFO - 2019-06-23 01:25:55 --> Helper loaded: language_helper
INFO - 2019-06-23 01:25:55 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 01:25:55 --> Model Class Initialized
INFO - 2019-06-23 01:25:55 --> Model Class Initialized
INFO - 2019-06-23 01:25:55 --> Model Class Initialized
INFO - 2019-06-23 01:25:55 --> Model Class Initialized
INFO - 2019-06-23 01:25:55 --> Model Class Initialized
INFO - 2019-06-23 01:25:55 --> Final output sent to browser
DEBUG - 2019-06-23 01:25:55 --> Total execution time: 0.9438
INFO - 2019-06-23 01:26:15 --> Helper loaded: language_helper
INFO - 2019-06-23 01:26:15 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 01:26:15 --> Model Class Initialized
INFO - 2019-06-23 01:26:15 --> Model Class Initialized
INFO - 2019-06-23 01:26:15 --> Model Class Initialized
INFO - 2019-06-23 01:26:15 --> Model Class Initialized
INFO - 2019-06-23 01:26:15 --> Final output sent to browser
DEBUG - 2019-06-23 01:26:15 --> Total execution time: 0.9801
INFO - 2019-06-23 01:33:45 --> Model Class Initialized
INFO - 2019-06-23 01:33:45 --> Model Class Initialized
INFO - 2019-06-23 01:33:45 --> Model Class Initialized
INFO - 2019-06-23 01:33:45 --> Final output sent to browser
DEBUG - 2019-06-23 01:33:45 --> Total execution time: 1.3735
INFO - 2019-06-23 02:27:21 --> Helper loaded: language_helper
INFO - 2019-06-23 02:27:21 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 02:27:21 --> Model Class Initialized
INFO - 2019-06-23 02:27:21 --> Model Class Initialized
INFO - 2019-06-23 02:27:21 --> Model Class Initialized
INFO - 2019-06-23 02:27:21 --> Model Class Initialized
INFO - 2019-06-23 02:27:21 --> Final output sent to browser
DEBUG - 2019-06-23 02:27:21 --> Total execution time: 1.3115
INFO - 2019-06-23 02:39:48 --> Helper loaded: language_helper
INFO - 2019-06-23 02:39:48 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 02:39:48 --> Model Class Initialized
INFO - 2019-06-23 02:39:48 --> Model Class Initialized
INFO - 2019-06-23 02:39:48 --> Model Class Initialized
INFO - 2019-06-23 02:39:48 --> Model Class Initialized
INFO - 2019-06-23 02:39:48 --> Model Class Initialized
INFO - 2019-06-23 02:39:48 --> Final output sent to browser
DEBUG - 2019-06-23 02:39:48 --> Total execution time: 0.5915
