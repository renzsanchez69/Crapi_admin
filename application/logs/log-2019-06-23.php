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
INFO - 2019-06-23 12:26:55 --> Config Class Initialized
INFO - 2019-06-23 12:26:55 --> Hooks Class Initialized
DEBUG - 2019-06-23 12:26:55 --> UTF-8 Support Enabled
INFO - 2019-06-23 12:26:55 --> Utf8 Class Initialized
INFO - 2019-06-23 12:26:55 --> URI Class Initialized
INFO - 2019-06-23 12:26:55 --> Router Class Initialized
INFO - 2019-06-23 12:26:55 --> Output Class Initialized
INFO - 2019-06-23 12:26:55 --> Security Class Initialized
DEBUG - 2019-06-23 12:26:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 12:26:55 --> Input Class Initialized
INFO - 2019-06-23 12:26:55 --> Language Class Initialized
INFO - 2019-06-23 12:26:55 --> Language Class Initialized
INFO - 2019-06-23 12:26:55 --> Config Class Initialized
INFO - 2019-06-23 12:26:55 --> Loader Class Initialized
DEBUG - 2019-06-23 12:26:55 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 12:26:55 --> Helper loaded: url_helper
INFO - 2019-06-23 12:26:55 --> Helper loaded: inflector_helper
INFO - 2019-06-23 12:26:55 --> Helper loaded: string_helper
INFO - 2019-06-23 12:26:55 --> Helper loaded: array_helper
INFO - 2019-06-23 12:26:55 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 12:26:55 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 12:26:55 --> Database Driver Class Initialized
INFO - 2019-06-23 12:26:55 --> Controller Class Initialized
INFO - 2019-06-23 18:26:55 --> Helper loaded: language_helper
INFO - 2019-06-23 18:26:55 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 18:26:55 --> Model Class Initialized
INFO - 2019-06-23 18:26:55 --> Model Class Initialized
INFO - 2019-06-23 18:26:55 --> Model Class Initialized
INFO - 2019-06-23 18:26:55 --> Model Class Initialized
INFO - 2019-06-23 18:26:55 --> Final output sent to browser
DEBUG - 2019-06-23 18:26:55 --> Total execution time: 0.2310
INFO - 2019-06-23 14:07:56 --> Config Class Initialized
INFO - 2019-06-23 14:07:56 --> Hooks Class Initialized
DEBUG - 2019-06-23 14:07:56 --> UTF-8 Support Enabled
INFO - 2019-06-23 14:07:56 --> Utf8 Class Initialized
INFO - 2019-06-23 14:07:56 --> URI Class Initialized
INFO - 2019-06-23 14:07:56 --> Router Class Initialized
INFO - 2019-06-23 14:07:56 --> Output Class Initialized
INFO - 2019-06-23 14:07:56 --> Security Class Initialized
DEBUG - 2019-06-23 14:07:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 14:07:56 --> Input Class Initialized
INFO - 2019-06-23 14:07:56 --> Language Class Initialized
INFO - 2019-06-23 14:07:56 --> Language Class Initialized
INFO - 2019-06-23 14:07:56 --> Config Class Initialized
INFO - 2019-06-23 14:07:56 --> Loader Class Initialized
DEBUG - 2019-06-23 14:07:56 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 14:07:56 --> Helper loaded: url_helper
INFO - 2019-06-23 14:07:56 --> Helper loaded: inflector_helper
INFO - 2019-06-23 14:07:56 --> Helper loaded: string_helper
INFO - 2019-06-23 14:07:56 --> Helper loaded: array_helper
INFO - 2019-06-23 14:07:56 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 14:07:56 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 14:07:56 --> Database Driver Class Initialized
INFO - 2019-06-23 14:07:56 --> Controller Class Initialized
INFO - 2019-06-23 20:07:56 --> Helper loaded: language_helper
INFO - 2019-06-23 20:07:56 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 20:07:56 --> Model Class Initialized
INFO - 2019-06-23 20:07:56 --> Model Class Initialized
INFO - 2019-06-23 20:07:56 --> Model Class Initialized
INFO - 2019-06-23 20:07:56 --> Model Class Initialized
INFO - 2019-06-23 20:07:56 --> Final output sent to browser
DEBUG - 2019-06-23 20:07:56 --> Total execution time: 0.2241
INFO - 2019-06-23 14:07:59 --> Config Class Initialized
INFO - 2019-06-23 14:07:59 --> Hooks Class Initialized
DEBUG - 2019-06-23 14:07:59 --> UTF-8 Support Enabled
INFO - 2019-06-23 14:07:59 --> Utf8 Class Initialized
INFO - 2019-06-23 14:07:59 --> URI Class Initialized
INFO - 2019-06-23 14:07:59 --> Router Class Initialized
INFO - 2019-06-23 14:07:59 --> Output Class Initialized
INFO - 2019-06-23 14:07:59 --> Security Class Initialized
DEBUG - 2019-06-23 14:07:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 14:07:59 --> Input Class Initialized
INFO - 2019-06-23 14:07:59 --> Language Class Initialized
INFO - 2019-06-23 14:07:59 --> Language Class Initialized
INFO - 2019-06-23 14:07:59 --> Config Class Initialized
INFO - 2019-06-23 14:07:59 --> Loader Class Initialized
DEBUG - 2019-06-23 14:07:59 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 14:07:59 --> Helper loaded: url_helper
INFO - 2019-06-23 14:07:59 --> Helper loaded: inflector_helper
INFO - 2019-06-23 14:07:59 --> Helper loaded: string_helper
INFO - 2019-06-23 14:07:59 --> Helper loaded: array_helper
INFO - 2019-06-23 14:07:59 --> Config Class Initialized
INFO - 2019-06-23 14:07:59 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 14:07:59 --> Hooks Class Initialized
DEBUG - 2019-06-23 14:07:59 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
DEBUG - 2019-06-23 14:07:59 --> UTF-8 Support Enabled
INFO - 2019-06-23 14:07:59 --> Database Driver Class Initialized
INFO - 2019-06-23 14:07:59 --> Utf8 Class Initialized
INFO - 2019-06-23 14:07:59 --> URI Class Initialized
INFO - 2019-06-23 14:07:59 --> Controller Class Initialized
INFO - 2019-06-23 14:07:59 --> Router Class Initialized
INFO - 2019-06-23 20:07:59 --> Helper loaded: language_helper
INFO - 2019-06-23 14:07:59 --> Output Class Initialized
INFO - 2019-06-23 20:07:59 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 14:07:59 --> Security Class Initialized
INFO - 2019-06-23 20:07:59 --> Model Class Initialized
DEBUG - 2019-06-23 14:07:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 20:07:59 --> Model Class Initialized
INFO - 2019-06-23 14:07:59 --> Input Class Initialized
INFO - 2019-06-23 14:07:59 --> Language Class Initialized
INFO - 2019-06-23 20:07:59 --> Model Class Initialized
INFO - 2019-06-23 14:07:59 --> Language Class Initialized
INFO - 2019-06-23 20:07:59 --> Model Class Initialized
INFO - 2019-06-23 14:07:59 --> Config Class Initialized
INFO - 2019-06-23 14:07:59 --> Loader Class Initialized
INFO - 2019-06-23 20:07:59 --> Final output sent to browser
DEBUG - 2019-06-23 14:07:59 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 20:07:59 --> Total execution time: 0.2810
INFO - 2019-06-23 14:07:59 --> Helper loaded: url_helper
INFO - 2019-06-23 14:07:59 --> Helper loaded: inflector_helper
INFO - 2019-06-23 14:08:00 --> Config Class Initialized
INFO - 2019-06-23 14:08:00 --> Helper loaded: string_helper
INFO - 2019-06-23 14:08:00 --> Hooks Class Initialized
INFO - 2019-06-23 14:08:00 --> Helper loaded: array_helper
DEBUG - 2019-06-23 14:08:00 --> UTF-8 Support Enabled
INFO - 2019-06-23 14:08:00 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 14:08:00 --> Utf8 Class Initialized
DEBUG - 2019-06-23 14:08:00 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 14:08:00 --> URI Class Initialized
INFO - 2019-06-23 14:08:00 --> Database Driver Class Initialized
INFO - 2019-06-23 14:08:00 --> Router Class Initialized
INFO - 2019-06-23 14:08:00 --> Controller Class Initialized
INFO - 2019-06-23 14:08:00 --> Output Class Initialized
INFO - 2019-06-23 20:08:00 --> Helper loaded: language_helper
INFO - 2019-06-23 14:08:00 --> Security Class Initialized
INFO - 2019-06-23 20:08:00 --> Language file loaded: language/english/general_lang.php
DEBUG - 2019-06-23 14:08:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 20:08:00 --> Model Class Initialized
INFO - 2019-06-23 14:08:00 --> Input Class Initialized
INFO - 2019-06-23 14:08:00 --> Language Class Initialized
INFO - 2019-06-23 20:08:00 --> Model Class Initialized
INFO - 2019-06-23 14:08:00 --> Language Class Initialized
INFO - 2019-06-23 20:08:00 --> Model Class Initialized
INFO - 2019-06-23 14:08:00 --> Config Class Initialized
INFO - 2019-06-23 14:08:00 --> Loader Class Initialized
INFO - 2019-06-23 20:08:00 --> Model Class Initialized
DEBUG - 2019-06-23 14:08:00 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 20:08:00 --> Final output sent to browser
INFO - 2019-06-23 14:08:00 --> Helper loaded: url_helper
DEBUG - 2019-06-23 20:08:00 --> Total execution time: 0.3292
INFO - 2019-06-23 14:08:00 --> Helper loaded: inflector_helper
INFO - 2019-06-23 14:08:00 --> Config Class Initialized
INFO - 2019-06-23 14:08:00 --> Hooks Class Initialized
INFO - 2019-06-23 14:08:00 --> Helper loaded: string_helper
DEBUG - 2019-06-23 14:08:00 --> UTF-8 Support Enabled
INFO - 2019-06-23 14:08:00 --> Helper loaded: array_helper
INFO - 2019-06-23 14:08:00 --> Utf8 Class Initialized
INFO - 2019-06-23 14:08:00 --> URI Class Initialized
INFO - 2019-06-23 14:08:00 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 14:08:00 --> Router Class Initialized
DEBUG - 2019-06-23 14:08:00 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 14:08:00 --> Output Class Initialized
INFO - 2019-06-23 14:08:00 --> Database Driver Class Initialized
INFO - 2019-06-23 14:08:00 --> Security Class Initialized
INFO - 2019-06-23 14:08:00 --> Controller Class Initialized
DEBUG - 2019-06-23 14:08:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 20:08:00 --> Helper loaded: language_helper
INFO - 2019-06-23 14:08:00 --> Input Class Initialized
INFO - 2019-06-23 20:08:00 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 14:08:00 --> Language Class Initialized
INFO - 2019-06-23 20:08:00 --> Model Class Initialized
INFO - 2019-06-23 14:08:00 --> Language Class Initialized
INFO - 2019-06-23 20:08:00 --> Model Class Initialized
INFO - 2019-06-23 14:08:00 --> Config Class Initialized
INFO - 2019-06-23 14:08:00 --> Loader Class Initialized
INFO - 2019-06-23 20:08:00 --> Model Class Initialized
DEBUG - 2019-06-23 14:08:00 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 20:08:00 --> Model Class Initialized
INFO - 2019-06-23 14:08:00 --> Helper loaded: url_helper
INFO - 2019-06-23 14:08:00 --> Helper loaded: inflector_helper
INFO - 2019-06-23 20:08:00 --> Final output sent to browser
INFO - 2019-06-23 14:08:00 --> Helper loaded: string_helper
DEBUG - 2019-06-23 20:08:00 --> Total execution time: 0.3918
INFO - 2019-06-23 14:08:00 --> Helper loaded: array_helper
INFO - 2019-06-23 14:08:00 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 14:08:00 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 14:08:00 --> Database Driver Class Initialized
INFO - 2019-06-23 14:08:00 --> Controller Class Initialized
INFO - 2019-06-23 20:08:00 --> Helper loaded: language_helper
INFO - 2019-06-23 20:08:00 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 20:08:00 --> Model Class Initialized
INFO - 2019-06-23 20:08:00 --> Model Class Initialized
INFO - 2019-06-23 20:08:00 --> Model Class Initialized
INFO - 2019-06-23 20:08:00 --> Model Class Initialized
INFO - 2019-06-23 20:08:00 --> Final output sent to browser
DEBUG - 2019-06-23 20:08:00 --> Total execution time: 0.3452
INFO - 2019-06-23 15:43:21 --> Config Class Initialized
INFO - 2019-06-23 15:43:21 --> Hooks Class Initialized
DEBUG - 2019-06-23 15:43:22 --> UTF-8 Support Enabled
INFO - 2019-06-23 15:43:22 --> Utf8 Class Initialized
INFO - 2019-06-23 15:43:22 --> URI Class Initialized
INFO - 2019-06-23 15:43:22 --> Router Class Initialized
INFO - 2019-06-23 15:43:22 --> Output Class Initialized
INFO - 2019-06-23 15:43:22 --> Security Class Initialized
DEBUG - 2019-06-23 15:43:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 15:43:22 --> Input Class Initialized
INFO - 2019-06-23 15:43:22 --> Language Class Initialized
INFO - 2019-06-23 15:43:22 --> Language Class Initialized
INFO - 2019-06-23 15:43:22 --> Config Class Initialized
INFO - 2019-06-23 15:43:22 --> Loader Class Initialized
DEBUG - 2019-06-23 15:43:22 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 15:43:22 --> Helper loaded: url_helper
INFO - 2019-06-23 15:43:22 --> Helper loaded: inflector_helper
INFO - 2019-06-23 15:43:22 --> Helper loaded: string_helper
INFO - 2019-06-23 15:43:22 --> Helper loaded: array_helper
INFO - 2019-06-23 15:43:22 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 15:43:22 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 15:43:22 --> Database Driver Class Initialized
INFO - 2019-06-23 15:43:22 --> Controller Class Initialized
INFO - 2019-06-23 21:43:22 --> Helper loaded: language_helper
INFO - 2019-06-23 21:43:22 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 21:43:22 --> Model Class Initialized
INFO - 2019-06-23 21:43:22 --> Model Class Initialized
INFO - 2019-06-23 21:43:22 --> Model Class Initialized
INFO - 2019-06-23 21:43:22 --> Model Class Initialized
INFO - 2019-06-23 21:43:22 --> Final output sent to browser
DEBUG - 2019-06-23 21:43:22 --> Total execution time: 0.7919
INFO - 2019-06-23 15:43:49 --> Config Class Initialized
INFO - 2019-06-23 15:43:49 --> Hooks Class Initialized
DEBUG - 2019-06-23 15:43:49 --> UTF-8 Support Enabled
INFO - 2019-06-23 15:43:49 --> Utf8 Class Initialized
INFO - 2019-06-23 15:43:49 --> URI Class Initialized
INFO - 2019-06-23 15:43:49 --> Router Class Initialized
INFO - 2019-06-23 15:43:49 --> Output Class Initialized
INFO - 2019-06-23 15:43:49 --> Security Class Initialized
DEBUG - 2019-06-23 15:43:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 15:43:49 --> Input Class Initialized
INFO - 2019-06-23 15:43:49 --> Language Class Initialized
INFO - 2019-06-23 15:43:49 --> Language Class Initialized
INFO - 2019-06-23 15:43:49 --> Config Class Initialized
INFO - 2019-06-23 15:43:49 --> Loader Class Initialized
DEBUG - 2019-06-23 15:43:49 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 15:43:49 --> Helper loaded: url_helper
INFO - 2019-06-23 15:43:49 --> Helper loaded: inflector_helper
INFO - 2019-06-23 15:43:49 --> Helper loaded: string_helper
INFO - 2019-06-23 15:43:49 --> Helper loaded: array_helper
INFO - 2019-06-23 15:43:49 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 15:43:49 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 15:43:49 --> Database Driver Class Initialized
INFO - 2019-06-23 15:43:49 --> Controller Class Initialized
INFO - 2019-06-23 21:43:49 --> Helper loaded: language_helper
INFO - 2019-06-23 21:43:49 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 21:43:49 --> Model Class Initialized
INFO - 2019-06-23 21:43:49 --> Model Class Initialized
INFO - 2019-06-23 21:43:49 --> Model Class Initialized
INFO - 2019-06-23 21:43:49 --> Model Class Initialized
INFO - 2019-06-23 21:43:49 --> Final output sent to browser
DEBUG - 2019-06-23 21:43:49 --> Total execution time: 0.2267
INFO - 2019-06-23 15:43:51 --> Config Class Initialized
INFO - 2019-06-23 15:43:51 --> Hooks Class Initialized
DEBUG - 2019-06-23 15:43:51 --> UTF-8 Support Enabled
INFO - 2019-06-23 15:43:51 --> Utf8 Class Initialized
INFO - 2019-06-23 15:43:51 --> URI Class Initialized
INFO - 2019-06-23 15:43:51 --> Router Class Initialized
INFO - 2019-06-23 15:43:51 --> Output Class Initialized
INFO - 2019-06-23 15:43:51 --> Security Class Initialized
DEBUG - 2019-06-23 15:43:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 15:43:51 --> Input Class Initialized
INFO - 2019-06-23 15:43:51 --> Language Class Initialized
INFO - 2019-06-23 15:43:51 --> Language Class Initialized
INFO - 2019-06-23 15:43:51 --> Config Class Initialized
INFO - 2019-06-23 15:43:51 --> Loader Class Initialized
DEBUG - 2019-06-23 15:43:51 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 15:43:51 --> Helper loaded: url_helper
INFO - 2019-06-23 15:43:51 --> Helper loaded: inflector_helper
INFO - 2019-06-23 15:43:51 --> Helper loaded: string_helper
INFO - 2019-06-23 15:43:51 --> Helper loaded: array_helper
INFO - 2019-06-23 15:43:51 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 15:43:51 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 15:43:51 --> Database Driver Class Initialized
INFO - 2019-06-23 15:43:51 --> Controller Class Initialized
INFO - 2019-06-23 21:43:51 --> Helper loaded: language_helper
INFO - 2019-06-23 21:43:51 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 21:43:51 --> Model Class Initialized
INFO - 2019-06-23 21:43:51 --> Model Class Initialized
INFO - 2019-06-23 21:43:51 --> Model Class Initialized
INFO - 2019-06-23 21:43:51 --> Model Class Initialized
INFO - 2019-06-23 21:43:51 --> Final output sent to browser
DEBUG - 2019-06-23 21:43:51 --> Total execution time: 0.2360
INFO - 2019-06-23 15:43:54 --> Config Class Initialized
INFO - 2019-06-23 15:43:54 --> Hooks Class Initialized
DEBUG - 2019-06-23 15:43:54 --> UTF-8 Support Enabled
INFO - 2019-06-23 15:43:54 --> Utf8 Class Initialized
INFO - 2019-06-23 15:43:54 --> URI Class Initialized
INFO - 2019-06-23 15:43:54 --> Router Class Initialized
INFO - 2019-06-23 15:43:54 --> Output Class Initialized
INFO - 2019-06-23 15:43:54 --> Security Class Initialized
DEBUG - 2019-06-23 15:43:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 15:43:54 --> Input Class Initialized
INFO - 2019-06-23 15:43:54 --> Language Class Initialized
INFO - 2019-06-23 15:43:54 --> Language Class Initialized
INFO - 2019-06-23 15:43:54 --> Config Class Initialized
INFO - 2019-06-23 15:43:54 --> Loader Class Initialized
DEBUG - 2019-06-23 15:43:54 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 15:43:54 --> Helper loaded: url_helper
INFO - 2019-06-23 15:43:54 --> Helper loaded: inflector_helper
INFO - 2019-06-23 15:43:54 --> Helper loaded: string_helper
INFO - 2019-06-23 15:43:54 --> Helper loaded: array_helper
INFO - 2019-06-23 15:43:54 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 15:43:54 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 15:43:54 --> Database Driver Class Initialized
INFO - 2019-06-23 15:43:54 --> Controller Class Initialized
INFO - 2019-06-23 21:43:54 --> Helper loaded: language_helper
INFO - 2019-06-23 21:43:54 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 21:43:54 --> Model Class Initialized
INFO - 2019-06-23 21:43:54 --> Model Class Initialized
INFO - 2019-06-23 21:43:54 --> Model Class Initialized
INFO - 2019-06-23 21:43:54 --> Model Class Initialized
INFO - 2019-06-23 21:43:54 --> Final output sent to browser
DEBUG - 2019-06-23 21:43:54 --> Total execution time: 0.2385
INFO - 2019-06-23 16:29:56 --> Config Class Initialized
INFO - 2019-06-23 16:29:56 --> Hooks Class Initialized
DEBUG - 2019-06-23 16:29:56 --> UTF-8 Support Enabled
INFO - 2019-06-23 16:29:56 --> Utf8 Class Initialized
INFO - 2019-06-23 16:29:56 --> URI Class Initialized
INFO - 2019-06-23 16:29:56 --> Router Class Initialized
INFO - 2019-06-23 16:29:56 --> Output Class Initialized
INFO - 2019-06-23 16:29:56 --> Security Class Initialized
DEBUG - 2019-06-23 16:29:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 16:29:56 --> Input Class Initialized
INFO - 2019-06-23 16:29:56 --> Language Class Initialized
INFO - 2019-06-23 16:29:56 --> Language Class Initialized
INFO - 2019-06-23 16:29:56 --> Config Class Initialized
INFO - 2019-06-23 16:29:56 --> Loader Class Initialized
DEBUG - 2019-06-23 16:29:56 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 16:29:56 --> Helper loaded: url_helper
INFO - 2019-06-23 16:29:56 --> Helper loaded: inflector_helper
INFO - 2019-06-23 16:29:56 --> Helper loaded: string_helper
INFO - 2019-06-23 16:29:56 --> Helper loaded: array_helper
INFO - 2019-06-23 16:29:56 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 16:29:56 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 16:29:56 --> Database Driver Class Initialized
INFO - 2019-06-23 16:29:56 --> Controller Class Initialized
INFO - 2019-06-23 22:29:56 --> Helper loaded: language_helper
INFO - 2019-06-23 22:29:56 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 22:29:56 --> Model Class Initialized
INFO - 2019-06-23 22:29:56 --> Model Class Initialized
INFO - 2019-06-23 22:29:56 --> Model Class Initialized
INFO - 2019-06-23 22:29:56 --> Model Class Initialized
INFO - 2019-06-23 22:29:56 --> Final output sent to browser
DEBUG - 2019-06-23 22:29:56 --> Total execution time: 0.2322
INFO - 2019-06-23 17:00:54 --> Config Class Initialized
INFO - 2019-06-23 17:00:54 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:00:54 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:00:54 --> Utf8 Class Initialized
INFO - 2019-06-23 17:00:54 --> URI Class Initialized
INFO - 2019-06-23 17:00:54 --> Router Class Initialized
INFO - 2019-06-23 17:00:54 --> Output Class Initialized
INFO - 2019-06-23 17:00:54 --> Security Class Initialized
DEBUG - 2019-06-23 17:00:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:00:54 --> Input Class Initialized
INFO - 2019-06-23 17:00:54 --> Language Class Initialized
INFO - 2019-06-23 17:00:54 --> Language Class Initialized
INFO - 2019-06-23 17:00:54 --> Config Class Initialized
INFO - 2019-06-23 17:00:54 --> Loader Class Initialized
DEBUG - 2019-06-23 17:00:54 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:00:54 --> Helper loaded: url_helper
INFO - 2019-06-23 17:00:54 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:00:54 --> Helper loaded: string_helper
INFO - 2019-06-23 17:00:54 --> Helper loaded: array_helper
INFO - 2019-06-23 17:00:54 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:00:54 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:00:54 --> Database Driver Class Initialized
INFO - 2019-06-23 17:00:54 --> Controller Class Initialized
INFO - 2019-06-23 23:00:54 --> Helper loaded: language_helper
INFO - 2019-06-23 23:00:54 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:00:54 --> Model Class Initialized
INFO - 2019-06-23 23:00:54 --> Model Class Initialized
INFO - 2019-06-23 23:00:54 --> Model Class Initialized
INFO - 2019-06-23 23:00:54 --> Model Class Initialized
INFO - 2019-06-23 23:00:54 --> Final output sent to browser
DEBUG - 2019-06-23 23:00:54 --> Total execution time: 0.3319
INFO - 2019-06-23 17:07:14 --> Config Class Initialized
INFO - 2019-06-23 17:07:14 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:07:14 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:07:14 --> Utf8 Class Initialized
INFO - 2019-06-23 17:07:14 --> URI Class Initialized
INFO - 2019-06-23 17:07:14 --> Router Class Initialized
INFO - 2019-06-23 17:07:14 --> Output Class Initialized
INFO - 2019-06-23 17:07:14 --> Security Class Initialized
DEBUG - 2019-06-23 17:07:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:07:14 --> Input Class Initialized
INFO - 2019-06-23 17:07:14 --> Language Class Initialized
INFO - 2019-06-23 17:07:14 --> Language Class Initialized
INFO - 2019-06-23 17:07:14 --> Config Class Initialized
INFO - 2019-06-23 17:07:14 --> Loader Class Initialized
DEBUG - 2019-06-23 17:07:14 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:07:14 --> Helper loaded: url_helper
INFO - 2019-06-23 17:07:14 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:07:14 --> Helper loaded: string_helper
INFO - 2019-06-23 17:07:14 --> Helper loaded: array_helper
INFO - 2019-06-23 17:07:14 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:07:14 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:07:14 --> Database Driver Class Initialized
INFO - 2019-06-23 17:07:14 --> Controller Class Initialized
INFO - 2019-06-23 23:07:14 --> Helper loaded: language_helper
INFO - 2019-06-23 23:07:14 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:07:14 --> Model Class Initialized
INFO - 2019-06-23 23:07:14 --> Model Class Initialized
INFO - 2019-06-23 23:07:14 --> Model Class Initialized
INFO - 2019-06-23 23:07:14 --> Model Class Initialized
INFO - 2019-06-23 23:07:14 --> Model Class Initialized
INFO - 2019-06-23 23:07:14 --> Final output sent to browser
DEBUG - 2019-06-23 23:07:14 --> Total execution time: 0.3316
INFO - 2019-06-23 17:07:23 --> Config Class Initialized
INFO - 2019-06-23 17:07:23 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:07:23 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:07:23 --> Utf8 Class Initialized
INFO - 2019-06-23 17:07:23 --> URI Class Initialized
INFO - 2019-06-23 17:07:23 --> Router Class Initialized
INFO - 2019-06-23 17:07:23 --> Output Class Initialized
INFO - 2019-06-23 17:07:23 --> Security Class Initialized
DEBUG - 2019-06-23 17:07:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:07:23 --> Input Class Initialized
INFO - 2019-06-23 17:07:23 --> Language Class Initialized
INFO - 2019-06-23 17:07:23 --> Language Class Initialized
INFO - 2019-06-23 17:07:23 --> Config Class Initialized
INFO - 2019-06-23 17:07:23 --> Loader Class Initialized
DEBUG - 2019-06-23 17:07:23 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:07:23 --> Helper loaded: url_helper
INFO - 2019-06-23 17:07:23 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:07:23 --> Helper loaded: string_helper
INFO - 2019-06-23 17:07:23 --> Helper loaded: array_helper
INFO - 2019-06-23 17:07:23 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:07:23 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:07:23 --> Database Driver Class Initialized
INFO - 2019-06-23 17:07:23 --> Controller Class Initialized
INFO - 2019-06-23 23:07:23 --> Helper loaded: language_helper
INFO - 2019-06-23 23:07:23 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:07:23 --> Model Class Initialized
INFO - 2019-06-23 23:07:23 --> Model Class Initialized
INFO - 2019-06-23 23:07:23 --> Model Class Initialized
INFO - 2019-06-23 23:07:23 --> Model Class Initialized
INFO - 2019-06-23 23:07:23 --> Model Class Initialized
INFO - 2019-06-23 23:07:23 --> Final output sent to browser
DEBUG - 2019-06-23 23:07:23 --> Total execution time: 0.2907
INFO - 2019-06-23 17:07:29 --> Config Class Initialized
INFO - 2019-06-23 17:07:29 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:07:29 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:07:29 --> Utf8 Class Initialized
INFO - 2019-06-23 17:07:29 --> URI Class Initialized
INFO - 2019-06-23 17:07:29 --> Router Class Initialized
INFO - 2019-06-23 17:07:29 --> Output Class Initialized
INFO - 2019-06-23 17:07:29 --> Security Class Initialized
DEBUG - 2019-06-23 17:07:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:07:29 --> Input Class Initialized
INFO - 2019-06-23 17:07:29 --> Language Class Initialized
INFO - 2019-06-23 17:07:29 --> Language Class Initialized
INFO - 2019-06-23 17:07:29 --> Config Class Initialized
INFO - 2019-06-23 17:07:29 --> Loader Class Initialized
DEBUG - 2019-06-23 17:07:29 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:07:29 --> Helper loaded: url_helper
INFO - 2019-06-23 17:07:29 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:07:29 --> Helper loaded: string_helper
INFO - 2019-06-23 17:07:29 --> Helper loaded: array_helper
INFO - 2019-06-23 17:07:29 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:07:29 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:07:29 --> Database Driver Class Initialized
INFO - 2019-06-23 17:07:29 --> Controller Class Initialized
INFO - 2019-06-23 23:07:29 --> Helper loaded: language_helper
INFO - 2019-06-23 23:07:29 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:07:29 --> Model Class Initialized
INFO - 2019-06-23 23:07:29 --> Model Class Initialized
INFO - 2019-06-23 23:07:29 --> Model Class Initialized
INFO - 2019-06-23 23:07:29 --> Model Class Initialized
INFO - 2019-06-23 23:07:29 --> Model Class Initialized
INFO - 2019-06-23 23:07:29 --> Final output sent to browser
DEBUG - 2019-06-23 23:07:29 --> Total execution time: 0.2864
INFO - 2019-06-23 17:07:32 --> Config Class Initialized
INFO - 2019-06-23 17:07:32 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:07:32 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:07:32 --> Utf8 Class Initialized
INFO - 2019-06-23 17:07:32 --> URI Class Initialized
INFO - 2019-06-23 17:07:32 --> Router Class Initialized
INFO - 2019-06-23 17:07:32 --> Output Class Initialized
INFO - 2019-06-23 17:07:32 --> Security Class Initialized
DEBUG - 2019-06-23 17:07:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:07:32 --> Input Class Initialized
INFO - 2019-06-23 17:07:32 --> Language Class Initialized
INFO - 2019-06-23 17:07:32 --> Language Class Initialized
INFO - 2019-06-23 17:07:32 --> Config Class Initialized
INFO - 2019-06-23 17:07:32 --> Loader Class Initialized
DEBUG - 2019-06-23 17:07:32 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:07:32 --> Helper loaded: url_helper
INFO - 2019-06-23 17:07:32 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:07:32 --> Helper loaded: string_helper
INFO - 2019-06-23 17:07:32 --> Helper loaded: array_helper
INFO - 2019-06-23 17:07:32 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:07:32 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:07:32 --> Database Driver Class Initialized
INFO - 2019-06-23 17:07:32 --> Controller Class Initialized
INFO - 2019-06-23 23:07:32 --> Helper loaded: language_helper
INFO - 2019-06-23 23:07:32 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:07:32 --> Model Class Initialized
INFO - 2019-06-23 23:07:32 --> Model Class Initialized
INFO - 2019-06-23 23:07:32 --> Model Class Initialized
INFO - 2019-06-23 23:07:32 --> Model Class Initialized
INFO - 2019-06-23 23:07:32 --> Model Class Initialized
INFO - 2019-06-23 23:07:32 --> Final output sent to browser
DEBUG - 2019-06-23 23:07:32 --> Total execution time: 0.2956
INFO - 2019-06-23 17:08:14 --> Config Class Initialized
INFO - 2019-06-23 17:08:14 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:08:14 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:08:14 --> Utf8 Class Initialized
INFO - 2019-06-23 17:08:14 --> URI Class Initialized
INFO - 2019-06-23 17:08:14 --> Router Class Initialized
INFO - 2019-06-23 17:08:14 --> Output Class Initialized
INFO - 2019-06-23 17:08:14 --> Security Class Initialized
DEBUG - 2019-06-23 17:08:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:08:14 --> Input Class Initialized
INFO - 2019-06-23 17:08:14 --> Language Class Initialized
INFO - 2019-06-23 17:08:14 --> Language Class Initialized
INFO - 2019-06-23 17:08:14 --> Config Class Initialized
INFO - 2019-06-23 17:08:14 --> Loader Class Initialized
DEBUG - 2019-06-23 17:08:14 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:08:14 --> Helper loaded: url_helper
INFO - 2019-06-23 17:08:14 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:08:14 --> Helper loaded: string_helper
INFO - 2019-06-23 17:08:14 --> Helper loaded: array_helper
INFO - 2019-06-23 17:08:14 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:08:14 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:08:14 --> Database Driver Class Initialized
INFO - 2019-06-23 17:08:14 --> Controller Class Initialized
INFO - 2019-06-23 23:08:14 --> Helper loaded: language_helper
INFO - 2019-06-23 23:08:14 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:08:14 --> Model Class Initialized
INFO - 2019-06-23 23:08:14 --> Model Class Initialized
INFO - 2019-06-23 23:08:14 --> Model Class Initialized
INFO - 2019-06-23 23:08:14 --> Model Class Initialized
INFO - 2019-06-23 23:08:14 --> Model Class Initialized
INFO - 2019-06-23 23:08:14 --> Final output sent to browser
DEBUG - 2019-06-23 23:08:14 --> Total execution time: 0.3387
INFO - 2019-06-23 17:08:34 --> Config Class Initialized
INFO - 2019-06-23 17:08:34 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:08:34 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:08:34 --> Utf8 Class Initialized
INFO - 2019-06-23 17:08:34 --> URI Class Initialized
INFO - 2019-06-23 17:08:34 --> Router Class Initialized
INFO - 2019-06-23 17:08:34 --> Output Class Initialized
INFO - 2019-06-23 17:08:34 --> Security Class Initialized
DEBUG - 2019-06-23 17:08:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:08:34 --> Input Class Initialized
INFO - 2019-06-23 17:08:34 --> Language Class Initialized
INFO - 2019-06-23 17:08:35 --> Language Class Initialized
INFO - 2019-06-23 17:08:35 --> Config Class Initialized
INFO - 2019-06-23 17:08:35 --> Loader Class Initialized
DEBUG - 2019-06-23 17:08:35 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:08:35 --> Helper loaded: url_helper
INFO - 2019-06-23 17:08:35 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:08:35 --> Helper loaded: string_helper
INFO - 2019-06-23 17:08:35 --> Helper loaded: array_helper
INFO - 2019-06-23 17:08:35 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:08:35 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:08:35 --> Database Driver Class Initialized
INFO - 2019-06-23 17:08:35 --> Controller Class Initialized
INFO - 2019-06-23 23:08:35 --> Helper loaded: language_helper
INFO - 2019-06-23 23:08:35 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:08:35 --> Model Class Initialized
INFO - 2019-06-23 23:08:35 --> Model Class Initialized
INFO - 2019-06-23 23:08:35 --> Model Class Initialized
INFO - 2019-06-23 23:08:35 --> Model Class Initialized
INFO - 2019-06-23 23:08:35 --> Model Class Initialized
INFO - 2019-06-23 23:08:35 --> Final output sent to browser
DEBUG - 2019-06-23 23:08:35 --> Total execution time: 0.3047
INFO - 2019-06-23 17:08:42 --> Config Class Initialized
INFO - 2019-06-23 17:08:42 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:08:42 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:08:42 --> Utf8 Class Initialized
INFO - 2019-06-23 17:08:42 --> URI Class Initialized
INFO - 2019-06-23 17:08:42 --> Router Class Initialized
INFO - 2019-06-23 17:08:42 --> Output Class Initialized
INFO - 2019-06-23 17:08:42 --> Security Class Initialized
DEBUG - 2019-06-23 17:08:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:08:42 --> Input Class Initialized
INFO - 2019-06-23 17:08:42 --> Language Class Initialized
INFO - 2019-06-23 17:08:42 --> Language Class Initialized
INFO - 2019-06-23 17:08:42 --> Config Class Initialized
INFO - 2019-06-23 17:08:42 --> Loader Class Initialized
DEBUG - 2019-06-23 17:08:42 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:08:42 --> Helper loaded: url_helper
INFO - 2019-06-23 17:08:42 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:08:42 --> Helper loaded: string_helper
INFO - 2019-06-23 17:08:42 --> Helper loaded: array_helper
INFO - 2019-06-23 17:08:42 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:08:42 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:08:42 --> Database Driver Class Initialized
INFO - 2019-06-23 17:08:43 --> Controller Class Initialized
INFO - 2019-06-23 23:08:43 --> Helper loaded: language_helper
INFO - 2019-06-23 23:08:43 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:08:43 --> Model Class Initialized
INFO - 2019-06-23 23:08:43 --> Model Class Initialized
INFO - 2019-06-23 23:08:43 --> Model Class Initialized
INFO - 2019-06-23 23:08:43 --> Model Class Initialized
INFO - 2019-06-23 23:08:43 --> Model Class Initialized
INFO - 2019-06-23 23:08:43 --> Final output sent to browser
DEBUG - 2019-06-23 23:08:43 --> Total execution time: 0.2939
INFO - 2019-06-23 17:08:56 --> Config Class Initialized
INFO - 2019-06-23 17:08:56 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:08:56 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:08:56 --> Utf8 Class Initialized
INFO - 2019-06-23 17:08:56 --> URI Class Initialized
INFO - 2019-06-23 17:08:56 --> Router Class Initialized
INFO - 2019-06-23 17:08:56 --> Output Class Initialized
INFO - 2019-06-23 17:08:56 --> Security Class Initialized
DEBUG - 2019-06-23 17:08:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:08:56 --> Input Class Initialized
INFO - 2019-06-23 17:08:56 --> Language Class Initialized
INFO - 2019-06-23 17:08:56 --> Language Class Initialized
INFO - 2019-06-23 17:08:56 --> Config Class Initialized
INFO - 2019-06-23 17:08:56 --> Loader Class Initialized
DEBUG - 2019-06-23 17:08:56 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:08:56 --> Helper loaded: url_helper
INFO - 2019-06-23 17:08:56 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:08:56 --> Helper loaded: string_helper
INFO - 2019-06-23 17:08:56 --> Helper loaded: array_helper
INFO - 2019-06-23 17:08:56 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:08:56 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:08:56 --> Database Driver Class Initialized
INFO - 2019-06-23 17:08:56 --> Controller Class Initialized
INFO - 2019-06-23 23:08:56 --> Helper loaded: language_helper
INFO - 2019-06-23 23:08:56 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:08:56 --> Model Class Initialized
INFO - 2019-06-23 23:08:56 --> Model Class Initialized
INFO - 2019-06-23 23:08:56 --> Model Class Initialized
INFO - 2019-06-23 23:08:56 --> Model Class Initialized
INFO - 2019-06-23 23:08:56 --> Model Class Initialized
INFO - 2019-06-23 23:08:56 --> Final output sent to browser
DEBUG - 2019-06-23 23:08:56 --> Total execution time: 0.2875
INFO - 2019-06-23 17:18:53 --> Config Class Initialized
INFO - 2019-06-23 17:18:53 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:18:53 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:18:53 --> Utf8 Class Initialized
INFO - 2019-06-23 17:18:53 --> URI Class Initialized
INFO - 2019-06-23 17:18:53 --> Router Class Initialized
INFO - 2019-06-23 17:18:53 --> Output Class Initialized
INFO - 2019-06-23 17:18:53 --> Security Class Initialized
DEBUG - 2019-06-23 17:18:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:18:53 --> Input Class Initialized
INFO - 2019-06-23 17:18:53 --> Language Class Initialized
INFO - 2019-06-23 17:18:53 --> Language Class Initialized
INFO - 2019-06-23 17:18:53 --> Config Class Initialized
INFO - 2019-06-23 17:18:53 --> Loader Class Initialized
DEBUG - 2019-06-23 17:18:53 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:18:53 --> Helper loaded: url_helper
INFO - 2019-06-23 17:18:53 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:18:53 --> Helper loaded: string_helper
INFO - 2019-06-23 17:18:53 --> Helper loaded: array_helper
INFO - 2019-06-23 17:18:53 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:18:53 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:18:53 --> Database Driver Class Initialized
INFO - 2019-06-23 17:18:53 --> Controller Class Initialized
INFO - 2019-06-23 23:18:53 --> Helper loaded: language_helper
INFO - 2019-06-23 23:18:53 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:18:53 --> Model Class Initialized
INFO - 2019-06-23 23:18:53 --> Model Class Initialized
INFO - 2019-06-23 23:18:53 --> Model Class Initialized
INFO - 2019-06-23 23:18:53 --> Model Class Initialized
INFO - 2019-06-23 23:18:53 --> Model Class Initialized
INFO - 2019-06-23 23:18:53 --> Final output sent to browser
DEBUG - 2019-06-23 23:18:53 --> Total execution time: 0.2858
INFO - 2019-06-23 17:19:14 --> Config Class Initialized
INFO - 2019-06-23 17:19:14 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:19:14 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:19:14 --> Utf8 Class Initialized
INFO - 2019-06-23 17:19:14 --> URI Class Initialized
INFO - 2019-06-23 17:19:14 --> Router Class Initialized
INFO - 2019-06-23 17:19:14 --> Output Class Initialized
INFO - 2019-06-23 17:19:14 --> Security Class Initialized
DEBUG - 2019-06-23 17:19:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:19:14 --> Input Class Initialized
INFO - 2019-06-23 17:19:14 --> Language Class Initialized
INFO - 2019-06-23 17:19:14 --> Language Class Initialized
INFO - 2019-06-23 17:19:14 --> Config Class Initialized
INFO - 2019-06-23 17:19:14 --> Loader Class Initialized
DEBUG - 2019-06-23 17:19:14 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:19:14 --> Helper loaded: url_helper
INFO - 2019-06-23 17:19:14 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:19:14 --> Helper loaded: string_helper
INFO - 2019-06-23 17:19:14 --> Helper loaded: array_helper
INFO - 2019-06-23 17:19:14 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:19:14 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:19:14 --> Database Driver Class Initialized
INFO - 2019-06-23 17:19:14 --> Controller Class Initialized
INFO - 2019-06-23 23:19:14 --> Helper loaded: language_helper
INFO - 2019-06-23 23:19:14 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:19:14 --> Model Class Initialized
INFO - 2019-06-23 23:19:14 --> Model Class Initialized
INFO - 2019-06-23 23:19:14 --> Model Class Initialized
INFO - 2019-06-23 23:19:14 --> Model Class Initialized
INFO - 2019-06-23 23:19:14 --> Model Class Initialized
INFO - 2019-06-23 23:19:14 --> Final output sent to browser
DEBUG - 2019-06-23 23:19:14 --> Total execution time: 0.2907
INFO - 2019-06-23 17:19:15 --> Config Class Initialized
INFO - 2019-06-23 17:19:15 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:19:15 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:19:15 --> Utf8 Class Initialized
INFO - 2019-06-23 17:19:15 --> URI Class Initialized
INFO - 2019-06-23 17:19:15 --> Router Class Initialized
INFO - 2019-06-23 17:19:15 --> Output Class Initialized
INFO - 2019-06-23 17:19:15 --> Security Class Initialized
DEBUG - 2019-06-23 17:19:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:19:15 --> Input Class Initialized
INFO - 2019-06-23 17:19:15 --> Language Class Initialized
INFO - 2019-06-23 17:19:15 --> Language Class Initialized
INFO - 2019-06-23 17:19:15 --> Config Class Initialized
INFO - 2019-06-23 17:19:15 --> Loader Class Initialized
DEBUG - 2019-06-23 17:19:15 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:19:15 --> Helper loaded: url_helper
INFO - 2019-06-23 17:19:15 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:19:15 --> Helper loaded: string_helper
INFO - 2019-06-23 17:19:15 --> Helper loaded: array_helper
INFO - 2019-06-23 17:19:15 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:19:15 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:19:15 --> Database Driver Class Initialized
INFO - 2019-06-23 17:19:15 --> Controller Class Initialized
INFO - 2019-06-23 23:19:15 --> Helper loaded: language_helper
INFO - 2019-06-23 23:19:15 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:19:15 --> Model Class Initialized
INFO - 2019-06-23 23:19:15 --> Model Class Initialized
INFO - 2019-06-23 23:19:15 --> Model Class Initialized
INFO - 2019-06-23 23:19:15 --> Model Class Initialized
INFO - 2019-06-23 23:19:15 --> Model Class Initialized
INFO - 2019-06-23 23:19:15 --> Final output sent to browser
DEBUG - 2019-06-23 23:19:15 --> Total execution time: 0.3017
INFO - 2019-06-23 17:19:30 --> Config Class Initialized
INFO - 2019-06-23 17:19:30 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:19:30 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:19:30 --> Utf8 Class Initialized
INFO - 2019-06-23 17:19:30 --> URI Class Initialized
INFO - 2019-06-23 17:19:30 --> Router Class Initialized
INFO - 2019-06-23 17:19:30 --> Output Class Initialized
INFO - 2019-06-23 17:19:30 --> Security Class Initialized
DEBUG - 2019-06-23 17:19:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:19:30 --> Input Class Initialized
INFO - 2019-06-23 17:19:30 --> Language Class Initialized
INFO - 2019-06-23 17:19:30 --> Language Class Initialized
INFO - 2019-06-23 17:19:30 --> Config Class Initialized
INFO - 2019-06-23 17:19:30 --> Loader Class Initialized
DEBUG - 2019-06-23 17:19:30 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:19:30 --> Helper loaded: url_helper
INFO - 2019-06-23 17:19:30 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:19:30 --> Helper loaded: string_helper
INFO - 2019-06-23 17:19:30 --> Helper loaded: array_helper
INFO - 2019-06-23 17:19:30 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:19:30 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:19:30 --> Database Driver Class Initialized
INFO - 2019-06-23 17:19:30 --> Controller Class Initialized
INFO - 2019-06-23 23:19:30 --> Helper loaded: language_helper
INFO - 2019-06-23 23:19:30 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:19:30 --> Model Class Initialized
INFO - 2019-06-23 23:19:30 --> Model Class Initialized
INFO - 2019-06-23 23:19:30 --> Model Class Initialized
INFO - 2019-06-23 23:19:30 --> Model Class Initialized
INFO - 2019-06-23 23:19:30 --> Model Class Initialized
INFO - 2019-06-23 23:19:30 --> Final output sent to browser
DEBUG - 2019-06-23 23:19:30 --> Total execution time: 0.2989
INFO - 2019-06-23 17:19:35 --> Config Class Initialized
INFO - 2019-06-23 17:19:35 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:19:35 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:19:35 --> Utf8 Class Initialized
INFO - 2019-06-23 17:19:35 --> URI Class Initialized
INFO - 2019-06-23 17:19:35 --> Router Class Initialized
INFO - 2019-06-23 17:19:35 --> Output Class Initialized
INFO - 2019-06-23 17:19:35 --> Security Class Initialized
DEBUG - 2019-06-23 17:19:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:19:35 --> Input Class Initialized
INFO - 2019-06-23 17:19:35 --> Language Class Initialized
INFO - 2019-06-23 17:19:35 --> Language Class Initialized
INFO - 2019-06-23 17:19:35 --> Config Class Initialized
INFO - 2019-06-23 17:19:35 --> Loader Class Initialized
DEBUG - 2019-06-23 17:19:35 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:19:35 --> Helper loaded: url_helper
INFO - 2019-06-23 17:19:35 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:19:35 --> Helper loaded: string_helper
INFO - 2019-06-23 17:19:35 --> Helper loaded: array_helper
INFO - 2019-06-23 17:19:35 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:19:35 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:19:35 --> Database Driver Class Initialized
INFO - 2019-06-23 17:19:35 --> Controller Class Initialized
INFO - 2019-06-23 23:19:35 --> Helper loaded: language_helper
INFO - 2019-06-23 23:19:35 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:19:35 --> Model Class Initialized
INFO - 2019-06-23 23:19:35 --> Model Class Initialized
INFO - 2019-06-23 23:19:35 --> Model Class Initialized
INFO - 2019-06-23 23:19:35 --> Model Class Initialized
INFO - 2019-06-23 23:19:35 --> Model Class Initialized
INFO - 2019-06-23 23:19:35 --> Final output sent to browser
DEBUG - 2019-06-23 23:19:35 --> Total execution time: 0.2814
INFO - 2019-06-23 17:20:05 --> Config Class Initialized
INFO - 2019-06-23 17:20:05 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:20:05 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:20:05 --> Utf8 Class Initialized
INFO - 2019-06-23 17:20:05 --> URI Class Initialized
INFO - 2019-06-23 17:20:05 --> Router Class Initialized
INFO - 2019-06-23 17:20:05 --> Output Class Initialized
INFO - 2019-06-23 17:20:05 --> Security Class Initialized
DEBUG - 2019-06-23 17:20:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:20:05 --> Input Class Initialized
INFO - 2019-06-23 17:20:05 --> Language Class Initialized
INFO - 2019-06-23 17:20:05 --> Language Class Initialized
INFO - 2019-06-23 17:20:05 --> Config Class Initialized
INFO - 2019-06-23 17:20:05 --> Loader Class Initialized
DEBUG - 2019-06-23 17:20:05 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:20:05 --> Helper loaded: url_helper
INFO - 2019-06-23 17:20:05 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:20:05 --> Helper loaded: string_helper
INFO - 2019-06-23 17:20:05 --> Helper loaded: array_helper
INFO - 2019-06-23 17:20:05 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:20:05 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:20:05 --> Database Driver Class Initialized
INFO - 2019-06-23 17:20:05 --> Controller Class Initialized
INFO - 2019-06-23 23:20:05 --> Helper loaded: language_helper
INFO - 2019-06-23 23:20:05 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:20:05 --> Model Class Initialized
INFO - 2019-06-23 23:20:05 --> Model Class Initialized
INFO - 2019-06-23 23:20:05 --> Model Class Initialized
INFO - 2019-06-23 23:20:05 --> Model Class Initialized
INFO - 2019-06-23 23:20:05 --> Model Class Initialized
INFO - 2019-06-23 23:20:05 --> Final output sent to browser
DEBUG - 2019-06-23 23:20:05 --> Total execution time: 0.2734
INFO - 2019-06-23 17:20:06 --> Config Class Initialized
INFO - 2019-06-23 17:20:06 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:20:06 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:20:06 --> Utf8 Class Initialized
INFO - 2019-06-23 17:20:06 --> URI Class Initialized
INFO - 2019-06-23 17:20:06 --> Router Class Initialized
INFO - 2019-06-23 17:20:06 --> Output Class Initialized
INFO - 2019-06-23 17:20:06 --> Security Class Initialized
DEBUG - 2019-06-23 17:20:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:20:06 --> Input Class Initialized
INFO - 2019-06-23 17:20:06 --> Language Class Initialized
INFO - 2019-06-23 17:20:06 --> Language Class Initialized
INFO - 2019-06-23 17:20:06 --> Config Class Initialized
INFO - 2019-06-23 17:20:06 --> Loader Class Initialized
DEBUG - 2019-06-23 17:20:06 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:20:06 --> Helper loaded: url_helper
INFO - 2019-06-23 17:20:06 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:20:06 --> Helper loaded: string_helper
INFO - 2019-06-23 17:20:06 --> Helper loaded: array_helper
INFO - 2019-06-23 17:20:06 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:20:06 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:20:06 --> Database Driver Class Initialized
INFO - 2019-06-23 17:20:06 --> Controller Class Initialized
INFO - 2019-06-23 23:20:06 --> Helper loaded: language_helper
INFO - 2019-06-23 23:20:06 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:20:06 --> Model Class Initialized
INFO - 2019-06-23 23:20:06 --> Model Class Initialized
INFO - 2019-06-23 23:20:06 --> Model Class Initialized
INFO - 2019-06-23 23:20:06 --> Model Class Initialized
INFO - 2019-06-23 23:20:06 --> Model Class Initialized
INFO - 2019-06-23 23:20:06 --> Final output sent to browser
DEBUG - 2019-06-23 23:20:06 --> Total execution time: 0.2756
INFO - 2019-06-23 17:20:27 --> Config Class Initialized
INFO - 2019-06-23 17:20:27 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:20:27 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:20:27 --> Utf8 Class Initialized
INFO - 2019-06-23 17:20:27 --> URI Class Initialized
INFO - 2019-06-23 17:20:27 --> Router Class Initialized
INFO - 2019-06-23 17:20:27 --> Output Class Initialized
INFO - 2019-06-23 17:20:27 --> Security Class Initialized
DEBUG - 2019-06-23 17:20:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:20:27 --> Input Class Initialized
INFO - 2019-06-23 17:20:27 --> Language Class Initialized
INFO - 2019-06-23 17:20:27 --> Language Class Initialized
INFO - 2019-06-23 17:20:27 --> Config Class Initialized
INFO - 2019-06-23 17:20:27 --> Loader Class Initialized
DEBUG - 2019-06-23 17:20:27 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:20:27 --> Helper loaded: url_helper
INFO - 2019-06-23 17:20:27 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:20:27 --> Helper loaded: string_helper
INFO - 2019-06-23 17:20:27 --> Helper loaded: array_helper
INFO - 2019-06-23 17:20:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:20:27 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:20:27 --> Database Driver Class Initialized
INFO - 2019-06-23 17:20:27 --> Controller Class Initialized
INFO - 2019-06-23 23:20:27 --> Helper loaded: language_helper
INFO - 2019-06-23 23:20:27 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:20:27 --> Model Class Initialized
INFO - 2019-06-23 23:20:27 --> Model Class Initialized
INFO - 2019-06-23 23:20:27 --> Model Class Initialized
INFO - 2019-06-23 23:20:27 --> Model Class Initialized
INFO - 2019-06-23 23:20:27 --> Model Class Initialized
INFO - 2019-06-23 23:20:27 --> Final output sent to browser
DEBUG - 2019-06-23 23:20:27 --> Total execution time: 0.2758
INFO - 2019-06-23 17:20:30 --> Config Class Initialized
INFO - 2019-06-23 17:20:30 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:20:30 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:20:30 --> Utf8 Class Initialized
INFO - 2019-06-23 17:20:30 --> URI Class Initialized
INFO - 2019-06-23 17:20:30 --> Router Class Initialized
INFO - 2019-06-23 17:20:30 --> Output Class Initialized
INFO - 2019-06-23 17:20:30 --> Security Class Initialized
DEBUG - 2019-06-23 17:20:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:20:30 --> Input Class Initialized
INFO - 2019-06-23 17:20:30 --> Language Class Initialized
INFO - 2019-06-23 17:20:30 --> Language Class Initialized
INFO - 2019-06-23 17:20:30 --> Config Class Initialized
INFO - 2019-06-23 17:20:30 --> Loader Class Initialized
DEBUG - 2019-06-23 17:20:30 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:20:30 --> Helper loaded: url_helper
INFO - 2019-06-23 17:20:30 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:20:30 --> Helper loaded: string_helper
INFO - 2019-06-23 17:20:30 --> Helper loaded: array_helper
INFO - 2019-06-23 17:20:30 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:20:30 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:20:30 --> Database Driver Class Initialized
INFO - 2019-06-23 17:20:30 --> Controller Class Initialized
INFO - 2019-06-23 23:20:30 --> Helper loaded: language_helper
INFO - 2019-06-23 23:20:30 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:20:30 --> Model Class Initialized
INFO - 2019-06-23 23:20:30 --> Model Class Initialized
INFO - 2019-06-23 23:20:30 --> Model Class Initialized
INFO - 2019-06-23 23:20:30 --> Model Class Initialized
INFO - 2019-06-23 23:20:30 --> Model Class Initialized
INFO - 2019-06-23 23:20:30 --> Final output sent to browser
DEBUG - 2019-06-23 23:20:30 --> Total execution time: 0.2989
INFO - 2019-06-23 17:20:31 --> Config Class Initialized
INFO - 2019-06-23 17:20:31 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:20:31 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:20:31 --> Utf8 Class Initialized
INFO - 2019-06-23 17:20:31 --> URI Class Initialized
INFO - 2019-06-23 17:20:31 --> Router Class Initialized
INFO - 2019-06-23 17:20:31 --> Output Class Initialized
INFO - 2019-06-23 17:20:31 --> Security Class Initialized
DEBUG - 2019-06-23 17:20:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:20:31 --> Input Class Initialized
INFO - 2019-06-23 17:20:31 --> Language Class Initialized
INFO - 2019-06-23 17:20:31 --> Language Class Initialized
INFO - 2019-06-23 17:20:31 --> Config Class Initialized
INFO - 2019-06-23 17:20:31 --> Loader Class Initialized
DEBUG - 2019-06-23 17:20:31 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:20:31 --> Helper loaded: url_helper
INFO - 2019-06-23 17:20:31 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:20:31 --> Helper loaded: string_helper
INFO - 2019-06-23 17:20:31 --> Helper loaded: array_helper
INFO - 2019-06-23 17:20:31 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:20:31 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:20:31 --> Database Driver Class Initialized
INFO - 2019-06-23 17:20:31 --> Controller Class Initialized
INFO - 2019-06-23 23:20:31 --> Helper loaded: language_helper
INFO - 2019-06-23 23:20:31 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:20:31 --> Model Class Initialized
INFO - 2019-06-23 23:20:31 --> Model Class Initialized
INFO - 2019-06-23 23:20:31 --> Model Class Initialized
INFO - 2019-06-23 23:20:31 --> Model Class Initialized
INFO - 2019-06-23 23:20:31 --> Model Class Initialized
INFO - 2019-06-23 23:20:31 --> Final output sent to browser
DEBUG - 2019-06-23 23:20:31 --> Total execution time: 0.2877
INFO - 2019-06-23 17:20:43 --> Config Class Initialized
INFO - 2019-06-23 17:20:43 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:20:43 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:20:43 --> Utf8 Class Initialized
INFO - 2019-06-23 17:20:43 --> URI Class Initialized
INFO - 2019-06-23 17:20:43 --> Router Class Initialized
INFO - 2019-06-23 17:20:43 --> Output Class Initialized
INFO - 2019-06-23 17:20:43 --> Security Class Initialized
DEBUG - 2019-06-23 17:20:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:20:43 --> Input Class Initialized
INFO - 2019-06-23 17:20:43 --> Language Class Initialized
INFO - 2019-06-23 17:20:43 --> Language Class Initialized
INFO - 2019-06-23 17:20:43 --> Config Class Initialized
INFO - 2019-06-23 17:20:43 --> Loader Class Initialized
DEBUG - 2019-06-23 17:20:43 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:20:43 --> Helper loaded: url_helper
INFO - 2019-06-23 17:20:43 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:20:43 --> Helper loaded: string_helper
INFO - 2019-06-23 17:20:43 --> Helper loaded: array_helper
INFO - 2019-06-23 17:20:43 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:20:43 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:20:43 --> Database Driver Class Initialized
INFO - 2019-06-23 17:20:43 --> Controller Class Initialized
INFO - 2019-06-23 23:20:43 --> Helper loaded: language_helper
INFO - 2019-06-23 23:20:43 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:20:43 --> Model Class Initialized
INFO - 2019-06-23 23:20:43 --> Model Class Initialized
INFO - 2019-06-23 23:20:43 --> Model Class Initialized
INFO - 2019-06-23 23:20:43 --> Model Class Initialized
INFO - 2019-06-23 23:20:43 --> Model Class Initialized
INFO - 2019-06-23 23:20:43 --> Final output sent to browser
DEBUG - 2019-06-23 23:20:43 --> Total execution time: 0.2840
INFO - 2019-06-23 17:21:04 --> Config Class Initialized
INFO - 2019-06-23 17:21:04 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:21:04 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:21:04 --> Utf8 Class Initialized
INFO - 2019-06-23 17:21:04 --> URI Class Initialized
INFO - 2019-06-23 17:21:04 --> Router Class Initialized
INFO - 2019-06-23 17:21:04 --> Output Class Initialized
INFO - 2019-06-23 17:21:04 --> Security Class Initialized
DEBUG - 2019-06-23 17:21:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:21:04 --> Input Class Initialized
INFO - 2019-06-23 17:21:04 --> Language Class Initialized
INFO - 2019-06-23 17:21:04 --> Language Class Initialized
INFO - 2019-06-23 17:21:04 --> Config Class Initialized
INFO - 2019-06-23 17:21:04 --> Loader Class Initialized
DEBUG - 2019-06-23 17:21:04 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:21:04 --> Helper loaded: url_helper
INFO - 2019-06-23 17:21:04 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:21:04 --> Helper loaded: string_helper
INFO - 2019-06-23 17:21:04 --> Helper loaded: array_helper
INFO - 2019-06-23 17:21:04 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:21:04 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:21:04 --> Database Driver Class Initialized
INFO - 2019-06-23 17:21:04 --> Controller Class Initialized
INFO - 2019-06-23 23:21:04 --> Helper loaded: language_helper
INFO - 2019-06-23 23:21:04 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:21:04 --> Model Class Initialized
INFO - 2019-06-23 23:21:04 --> Model Class Initialized
INFO - 2019-06-23 23:21:04 --> Model Class Initialized
INFO - 2019-06-23 23:21:05 --> Model Class Initialized
INFO - 2019-06-23 23:21:05 --> Model Class Initialized
INFO - 2019-06-23 23:21:05 --> Final output sent to browser
DEBUG - 2019-06-23 23:21:05 --> Total execution time: 0.3123
INFO - 2019-06-23 17:21:10 --> Config Class Initialized
INFO - 2019-06-23 17:21:10 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:21:10 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:21:10 --> Utf8 Class Initialized
INFO - 2019-06-23 17:21:10 --> URI Class Initialized
INFO - 2019-06-23 17:21:10 --> Router Class Initialized
INFO - 2019-06-23 17:21:11 --> Output Class Initialized
INFO - 2019-06-23 17:21:11 --> Security Class Initialized
DEBUG - 2019-06-23 17:21:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:21:11 --> Input Class Initialized
INFO - 2019-06-23 17:21:11 --> Language Class Initialized
INFO - 2019-06-23 17:21:11 --> Language Class Initialized
INFO - 2019-06-23 17:21:11 --> Config Class Initialized
INFO - 2019-06-23 17:21:11 --> Loader Class Initialized
DEBUG - 2019-06-23 17:21:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:21:11 --> Helper loaded: url_helper
INFO - 2019-06-23 17:21:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:21:11 --> Helper loaded: string_helper
INFO - 2019-06-23 17:21:11 --> Helper loaded: array_helper
INFO - 2019-06-23 17:21:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:21:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:21:11 --> Database Driver Class Initialized
INFO - 2019-06-23 17:21:11 --> Controller Class Initialized
INFO - 2019-06-23 23:21:11 --> Helper loaded: language_helper
INFO - 2019-06-23 23:21:11 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:21:11 --> Model Class Initialized
INFO - 2019-06-23 23:21:11 --> Model Class Initialized
INFO - 2019-06-23 23:21:11 --> Model Class Initialized
INFO - 2019-06-23 23:21:11 --> Model Class Initialized
INFO - 2019-06-23 23:21:11 --> Model Class Initialized
INFO - 2019-06-23 23:21:11 --> Final output sent to browser
DEBUG - 2019-06-23 23:21:11 --> Total execution time: 0.2974
INFO - 2019-06-23 17:22:41 --> Config Class Initialized
INFO - 2019-06-23 17:22:41 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:22:41 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:22:41 --> Utf8 Class Initialized
INFO - 2019-06-23 17:22:41 --> URI Class Initialized
INFO - 2019-06-23 17:22:41 --> Router Class Initialized
INFO - 2019-06-23 17:22:41 --> Output Class Initialized
INFO - 2019-06-23 17:22:41 --> Security Class Initialized
DEBUG - 2019-06-23 17:22:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:22:41 --> Input Class Initialized
INFO - 2019-06-23 17:22:41 --> Language Class Initialized
INFO - 2019-06-23 17:22:41 --> Language Class Initialized
INFO - 2019-06-23 17:22:41 --> Config Class Initialized
INFO - 2019-06-23 17:22:41 --> Loader Class Initialized
DEBUG - 2019-06-23 17:22:41 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:22:41 --> Helper loaded: url_helper
INFO - 2019-06-23 17:22:41 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:22:41 --> Helper loaded: string_helper
INFO - 2019-06-23 17:22:41 --> Helper loaded: array_helper
INFO - 2019-06-23 17:22:41 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:22:41 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:22:41 --> Database Driver Class Initialized
INFO - 2019-06-23 17:22:41 --> Controller Class Initialized
INFO - 2019-06-23 23:22:41 --> Helper loaded: language_helper
INFO - 2019-06-23 23:22:41 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:22:41 --> Model Class Initialized
INFO - 2019-06-23 23:22:41 --> Model Class Initialized
INFO - 2019-06-23 23:22:41 --> Model Class Initialized
INFO - 2019-06-23 23:22:41 --> Model Class Initialized
INFO - 2019-06-23 23:22:41 --> Model Class Initialized
INFO - 2019-06-23 23:22:41 --> Final output sent to browser
DEBUG - 2019-06-23 23:22:41 --> Total execution time: 0.3132
INFO - 2019-06-23 17:22:44 --> Config Class Initialized
INFO - 2019-06-23 17:22:44 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:22:44 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:22:44 --> Utf8 Class Initialized
INFO - 2019-06-23 17:22:44 --> URI Class Initialized
INFO - 2019-06-23 17:22:44 --> Router Class Initialized
INFO - 2019-06-23 17:22:44 --> Output Class Initialized
INFO - 2019-06-23 17:22:44 --> Security Class Initialized
DEBUG - 2019-06-23 17:22:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:22:44 --> Input Class Initialized
INFO - 2019-06-23 17:22:44 --> Language Class Initialized
INFO - 2019-06-23 17:22:44 --> Language Class Initialized
INFO - 2019-06-23 17:22:44 --> Config Class Initialized
INFO - 2019-06-23 17:22:44 --> Loader Class Initialized
DEBUG - 2019-06-23 17:22:44 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:22:44 --> Helper loaded: url_helper
INFO - 2019-06-23 17:22:44 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:22:44 --> Helper loaded: string_helper
INFO - 2019-06-23 17:22:44 --> Helper loaded: array_helper
INFO - 2019-06-23 17:22:44 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:22:44 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:22:44 --> Database Driver Class Initialized
INFO - 2019-06-23 17:22:44 --> Controller Class Initialized
INFO - 2019-06-23 23:22:44 --> Helper loaded: language_helper
INFO - 2019-06-23 23:22:44 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:22:44 --> Model Class Initialized
INFO - 2019-06-23 23:22:44 --> Model Class Initialized
INFO - 2019-06-23 23:22:44 --> Model Class Initialized
INFO - 2019-06-23 23:22:44 --> Model Class Initialized
INFO - 2019-06-23 23:22:44 --> Model Class Initialized
INFO - 2019-06-23 23:22:44 --> Final output sent to browser
DEBUG - 2019-06-23 23:22:44 --> Total execution time: 0.2685
INFO - 2019-06-23 17:25:38 --> Config Class Initialized
INFO - 2019-06-23 17:25:38 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:25:38 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:25:38 --> Utf8 Class Initialized
INFO - 2019-06-23 17:25:38 --> URI Class Initialized
INFO - 2019-06-23 17:25:38 --> Router Class Initialized
INFO - 2019-06-23 17:25:38 --> Output Class Initialized
INFO - 2019-06-23 17:25:38 --> Security Class Initialized
DEBUG - 2019-06-23 17:25:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:25:38 --> Input Class Initialized
INFO - 2019-06-23 17:25:38 --> Language Class Initialized
INFO - 2019-06-23 17:25:38 --> Language Class Initialized
INFO - 2019-06-23 17:25:38 --> Config Class Initialized
INFO - 2019-06-23 17:25:38 --> Loader Class Initialized
DEBUG - 2019-06-23 17:25:38 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:25:38 --> Helper loaded: url_helper
INFO - 2019-06-23 17:25:38 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:25:38 --> Helper loaded: string_helper
INFO - 2019-06-23 17:25:38 --> Helper loaded: array_helper
INFO - 2019-06-23 17:25:38 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:25:38 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:25:38 --> Database Driver Class Initialized
INFO - 2019-06-23 17:25:38 --> Controller Class Initialized
INFO - 2019-06-23 23:25:38 --> Helper loaded: language_helper
INFO - 2019-06-23 23:25:38 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:25:38 --> Model Class Initialized
INFO - 2019-06-23 23:25:38 --> Model Class Initialized
INFO - 2019-06-23 23:25:38 --> Model Class Initialized
INFO - 2019-06-23 23:25:38 --> Model Class Initialized
INFO - 2019-06-23 23:25:38 --> Model Class Initialized
INFO - 2019-06-23 23:25:38 --> Final output sent to browser
DEBUG - 2019-06-23 23:25:38 --> Total execution time: 0.3064
INFO - 2019-06-23 17:25:47 --> Config Class Initialized
INFO - 2019-06-23 17:25:47 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:25:47 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:25:47 --> Utf8 Class Initialized
INFO - 2019-06-23 17:25:47 --> URI Class Initialized
INFO - 2019-06-23 17:25:47 --> Router Class Initialized
INFO - 2019-06-23 17:25:47 --> Output Class Initialized
INFO - 2019-06-23 17:25:47 --> Security Class Initialized
DEBUG - 2019-06-23 17:25:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:25:47 --> Input Class Initialized
INFO - 2019-06-23 17:25:47 --> Language Class Initialized
INFO - 2019-06-23 17:25:47 --> Language Class Initialized
INFO - 2019-06-23 17:25:47 --> Config Class Initialized
INFO - 2019-06-23 17:25:47 --> Loader Class Initialized
DEBUG - 2019-06-23 17:25:47 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:25:47 --> Helper loaded: url_helper
INFO - 2019-06-23 17:25:47 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:25:47 --> Helper loaded: string_helper
INFO - 2019-06-23 17:25:47 --> Helper loaded: array_helper
INFO - 2019-06-23 17:25:47 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:25:47 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:25:47 --> Database Driver Class Initialized
INFO - 2019-06-23 17:25:47 --> Controller Class Initialized
INFO - 2019-06-23 23:25:47 --> Helper loaded: language_helper
INFO - 2019-06-23 23:25:47 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:25:47 --> Model Class Initialized
INFO - 2019-06-23 23:25:47 --> Model Class Initialized
INFO - 2019-06-23 23:25:47 --> Model Class Initialized
INFO - 2019-06-23 23:25:47 --> Model Class Initialized
INFO - 2019-06-23 23:25:47 --> Model Class Initialized
INFO - 2019-06-23 23:25:47 --> Final output sent to browser
DEBUG - 2019-06-23 23:25:47 --> Total execution time: 0.2810
INFO - 2019-06-23 17:29:23 --> Config Class Initialized
INFO - 2019-06-23 17:29:23 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:29:23 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:29:23 --> Utf8 Class Initialized
INFO - 2019-06-23 17:29:23 --> URI Class Initialized
INFO - 2019-06-23 17:29:23 --> Router Class Initialized
INFO - 2019-06-23 17:29:23 --> Output Class Initialized
INFO - 2019-06-23 17:29:23 --> Security Class Initialized
DEBUG - 2019-06-23 17:29:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:29:23 --> Input Class Initialized
INFO - 2019-06-23 17:29:23 --> Language Class Initialized
INFO - 2019-06-23 17:29:23 --> Language Class Initialized
INFO - 2019-06-23 17:29:23 --> Config Class Initialized
INFO - 2019-06-23 17:29:23 --> Loader Class Initialized
DEBUG - 2019-06-23 17:29:23 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:29:23 --> Helper loaded: url_helper
INFO - 2019-06-23 17:29:23 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:29:23 --> Helper loaded: string_helper
INFO - 2019-06-23 17:29:23 --> Helper loaded: array_helper
INFO - 2019-06-23 17:29:23 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:29:23 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:29:23 --> Database Driver Class Initialized
INFO - 2019-06-23 17:29:23 --> Controller Class Initialized
INFO - 2019-06-23 23:29:23 --> Helper loaded: language_helper
INFO - 2019-06-23 23:29:23 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:29:23 --> Model Class Initialized
INFO - 2019-06-23 23:29:23 --> Model Class Initialized
INFO - 2019-06-23 23:29:23 --> Model Class Initialized
INFO - 2019-06-23 23:29:23 --> Model Class Initialized
INFO - 2019-06-23 23:29:23 --> Model Class Initialized
INFO - 2019-06-23 23:29:23 --> Final output sent to browser
DEBUG - 2019-06-23 23:29:23 --> Total execution time: 0.2825
INFO - 2019-06-23 17:32:41 --> Config Class Initialized
INFO - 2019-06-23 17:32:41 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:32:41 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:32:41 --> Utf8 Class Initialized
INFO - 2019-06-23 17:32:41 --> URI Class Initialized
INFO - 2019-06-23 17:32:41 --> Router Class Initialized
INFO - 2019-06-23 17:32:41 --> Output Class Initialized
INFO - 2019-06-23 17:32:41 --> Security Class Initialized
DEBUG - 2019-06-23 17:32:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:32:41 --> Input Class Initialized
INFO - 2019-06-23 17:32:41 --> Language Class Initialized
INFO - 2019-06-23 17:32:41 --> Language Class Initialized
INFO - 2019-06-23 17:32:41 --> Config Class Initialized
INFO - 2019-06-23 17:32:41 --> Loader Class Initialized
DEBUG - 2019-06-23 17:32:41 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:32:41 --> Helper loaded: url_helper
INFO - 2019-06-23 17:32:41 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:32:41 --> Helper loaded: string_helper
INFO - 2019-06-23 17:32:41 --> Helper loaded: array_helper
INFO - 2019-06-23 17:32:41 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:32:41 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:32:41 --> Database Driver Class Initialized
INFO - 2019-06-23 17:32:41 --> Controller Class Initialized
INFO - 2019-06-23 23:32:41 --> Helper loaded: language_helper
INFO - 2019-06-23 23:32:41 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:32:41 --> Model Class Initialized
INFO - 2019-06-23 23:32:41 --> Model Class Initialized
INFO - 2019-06-23 23:32:41 --> Model Class Initialized
INFO - 2019-06-23 23:32:41 --> Model Class Initialized
INFO - 2019-06-23 23:32:41 --> Model Class Initialized
INFO - 2019-06-23 23:32:41 --> Final output sent to browser
DEBUG - 2019-06-23 23:32:41 --> Total execution time: 0.2674
INFO - 2019-06-23 17:33:02 --> Config Class Initialized
INFO - 2019-06-23 17:33:02 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:33:02 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:33:02 --> Utf8 Class Initialized
INFO - 2019-06-23 17:33:02 --> URI Class Initialized
INFO - 2019-06-23 17:33:02 --> Router Class Initialized
INFO - 2019-06-23 17:33:02 --> Output Class Initialized
INFO - 2019-06-23 17:33:02 --> Security Class Initialized
DEBUG - 2019-06-23 17:33:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:33:02 --> Input Class Initialized
INFO - 2019-06-23 17:33:02 --> Language Class Initialized
INFO - 2019-06-23 17:33:02 --> Language Class Initialized
INFO - 2019-06-23 17:33:02 --> Config Class Initialized
INFO - 2019-06-23 17:33:02 --> Loader Class Initialized
DEBUG - 2019-06-23 17:33:02 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:33:02 --> Helper loaded: url_helper
INFO - 2019-06-23 17:33:02 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:33:02 --> Helper loaded: string_helper
INFO - 2019-06-23 17:33:02 --> Helper loaded: array_helper
INFO - 2019-06-23 17:33:02 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:33:02 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:33:02 --> Database Driver Class Initialized
INFO - 2019-06-23 17:33:02 --> Controller Class Initialized
INFO - 2019-06-23 23:33:02 --> Helper loaded: language_helper
INFO - 2019-06-23 23:33:02 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:33:02 --> Model Class Initialized
INFO - 2019-06-23 23:33:02 --> Model Class Initialized
INFO - 2019-06-23 23:33:02 --> Model Class Initialized
INFO - 2019-06-23 23:33:03 --> Model Class Initialized
INFO - 2019-06-23 23:33:03 --> Model Class Initialized
INFO - 2019-06-23 23:33:03 --> Final output sent to browser
DEBUG - 2019-06-23 23:33:03 --> Total execution time: 0.3137
INFO - 2019-06-23 17:33:35 --> Config Class Initialized
INFO - 2019-06-23 17:33:35 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:33:35 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:33:35 --> Utf8 Class Initialized
INFO - 2019-06-23 17:33:35 --> URI Class Initialized
INFO - 2019-06-23 17:33:35 --> Router Class Initialized
INFO - 2019-06-23 17:33:35 --> Output Class Initialized
INFO - 2019-06-23 17:33:35 --> Security Class Initialized
DEBUG - 2019-06-23 17:33:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:33:35 --> Input Class Initialized
INFO - 2019-06-23 17:33:35 --> Language Class Initialized
INFO - 2019-06-23 17:33:35 --> Language Class Initialized
INFO - 2019-06-23 17:33:35 --> Config Class Initialized
INFO - 2019-06-23 17:33:35 --> Loader Class Initialized
DEBUG - 2019-06-23 17:33:35 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:33:35 --> Helper loaded: url_helper
INFO - 2019-06-23 17:33:35 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:33:35 --> Helper loaded: string_helper
INFO - 2019-06-23 17:33:36 --> Helper loaded: array_helper
INFO - 2019-06-23 17:33:36 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:33:36 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:33:36 --> Database Driver Class Initialized
INFO - 2019-06-23 17:33:36 --> Controller Class Initialized
INFO - 2019-06-23 23:33:36 --> Helper loaded: language_helper
INFO - 2019-06-23 23:33:36 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:33:36 --> Model Class Initialized
INFO - 2019-06-23 23:33:36 --> Model Class Initialized
INFO - 2019-06-23 23:33:36 --> Model Class Initialized
INFO - 2019-06-23 23:33:36 --> Model Class Initialized
INFO - 2019-06-23 23:33:36 --> Model Class Initialized
INFO - 2019-06-23 23:33:36 --> Final output sent to browser
DEBUG - 2019-06-23 23:33:36 --> Total execution time: 0.3262
INFO - 2019-06-23 17:33:47 --> Config Class Initialized
INFO - 2019-06-23 17:33:47 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:33:47 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:33:47 --> Utf8 Class Initialized
INFO - 2019-06-23 17:33:47 --> URI Class Initialized
INFO - 2019-06-23 17:33:47 --> Router Class Initialized
INFO - 2019-06-23 17:33:48 --> Output Class Initialized
INFO - 2019-06-23 17:33:48 --> Security Class Initialized
DEBUG - 2019-06-23 17:33:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:33:48 --> Input Class Initialized
INFO - 2019-06-23 17:33:48 --> Language Class Initialized
INFO - 2019-06-23 17:33:48 --> Language Class Initialized
INFO - 2019-06-23 17:33:48 --> Config Class Initialized
INFO - 2019-06-23 17:33:48 --> Loader Class Initialized
DEBUG - 2019-06-23 17:33:48 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:33:48 --> Helper loaded: url_helper
INFO - 2019-06-23 17:33:48 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:33:48 --> Helper loaded: string_helper
INFO - 2019-06-23 17:33:48 --> Helper loaded: array_helper
INFO - 2019-06-23 17:33:48 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:33:48 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:33:48 --> Database Driver Class Initialized
INFO - 2019-06-23 17:33:48 --> Controller Class Initialized
INFO - 2019-06-23 23:33:48 --> Helper loaded: language_helper
INFO - 2019-06-23 23:33:48 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:33:48 --> Model Class Initialized
INFO - 2019-06-23 23:33:48 --> Model Class Initialized
INFO - 2019-06-23 23:33:48 --> Model Class Initialized
INFO - 2019-06-23 23:33:48 --> Model Class Initialized
INFO - 2019-06-23 23:33:48 --> Model Class Initialized
INFO - 2019-06-23 23:33:48 --> Final output sent to browser
DEBUG - 2019-06-23 23:33:48 --> Total execution time: 0.3520
INFO - 2019-06-23 17:34:21 --> Config Class Initialized
INFO - 2019-06-23 17:34:21 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:34:21 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:34:21 --> Utf8 Class Initialized
INFO - 2019-06-23 17:34:21 --> URI Class Initialized
INFO - 2019-06-23 17:34:21 --> Router Class Initialized
INFO - 2019-06-23 17:34:21 --> Output Class Initialized
INFO - 2019-06-23 17:34:21 --> Security Class Initialized
DEBUG - 2019-06-23 17:34:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:34:21 --> Input Class Initialized
INFO - 2019-06-23 17:34:21 --> Language Class Initialized
INFO - 2019-06-23 17:34:21 --> Language Class Initialized
INFO - 2019-06-23 17:34:21 --> Config Class Initialized
INFO - 2019-06-23 17:34:21 --> Loader Class Initialized
DEBUG - 2019-06-23 17:34:21 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:34:21 --> Helper loaded: url_helper
INFO - 2019-06-23 17:34:21 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:34:21 --> Helper loaded: string_helper
INFO - 2019-06-23 17:34:21 --> Helper loaded: array_helper
INFO - 2019-06-23 17:34:21 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:34:21 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:34:21 --> Database Driver Class Initialized
INFO - 2019-06-23 17:34:21 --> Controller Class Initialized
INFO - 2019-06-23 23:34:21 --> Helper loaded: language_helper
INFO - 2019-06-23 23:34:21 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:34:21 --> Model Class Initialized
INFO - 2019-06-23 23:34:21 --> Model Class Initialized
INFO - 2019-06-23 23:34:21 --> Model Class Initialized
INFO - 2019-06-23 23:34:21 --> Model Class Initialized
INFO - 2019-06-23 23:34:21 --> Model Class Initialized
INFO - 2019-06-23 23:34:21 --> Final output sent to browser
DEBUG - 2019-06-23 23:34:21 --> Total execution time: 0.3246
INFO - 2019-06-23 17:34:23 --> Config Class Initialized
INFO - 2019-06-23 17:34:23 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:34:23 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:34:23 --> Utf8 Class Initialized
INFO - 2019-06-23 17:34:23 --> URI Class Initialized
INFO - 2019-06-23 17:34:23 --> Router Class Initialized
INFO - 2019-06-23 17:34:23 --> Output Class Initialized
INFO - 2019-06-23 17:34:23 --> Security Class Initialized
DEBUG - 2019-06-23 17:34:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:34:23 --> Input Class Initialized
INFO - 2019-06-23 17:34:23 --> Language Class Initialized
INFO - 2019-06-23 17:34:23 --> Language Class Initialized
INFO - 2019-06-23 17:34:23 --> Config Class Initialized
INFO - 2019-06-23 17:34:23 --> Loader Class Initialized
DEBUG - 2019-06-23 17:34:23 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:34:23 --> Helper loaded: url_helper
INFO - 2019-06-23 17:34:23 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:34:23 --> Helper loaded: string_helper
INFO - 2019-06-23 17:34:23 --> Helper loaded: array_helper
INFO - 2019-06-23 17:34:23 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:34:23 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:34:23 --> Database Driver Class Initialized
INFO - 2019-06-23 17:34:23 --> Controller Class Initialized
INFO - 2019-06-23 23:34:23 --> Helper loaded: language_helper
INFO - 2019-06-23 23:34:23 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:34:23 --> Model Class Initialized
INFO - 2019-06-23 23:34:23 --> Model Class Initialized
INFO - 2019-06-23 23:34:23 --> Model Class Initialized
INFO - 2019-06-23 23:34:23 --> Model Class Initialized
INFO - 2019-06-23 23:34:23 --> Model Class Initialized
INFO - 2019-06-23 23:34:23 --> Final output sent to browser
DEBUG - 2019-06-23 23:34:23 --> Total execution time: 0.3201
INFO - 2019-06-23 17:34:38 --> Config Class Initialized
INFO - 2019-06-23 17:34:38 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:34:38 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:34:38 --> Utf8 Class Initialized
INFO - 2019-06-23 17:34:38 --> URI Class Initialized
INFO - 2019-06-23 17:34:38 --> Router Class Initialized
INFO - 2019-06-23 17:34:38 --> Output Class Initialized
INFO - 2019-06-23 17:34:38 --> Security Class Initialized
DEBUG - 2019-06-23 17:34:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:34:38 --> Input Class Initialized
INFO - 2019-06-23 17:34:38 --> Language Class Initialized
INFO - 2019-06-23 17:34:38 --> Language Class Initialized
INFO - 2019-06-23 17:34:38 --> Config Class Initialized
INFO - 2019-06-23 17:34:38 --> Loader Class Initialized
DEBUG - 2019-06-23 17:34:38 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:34:38 --> Helper loaded: url_helper
INFO - 2019-06-23 17:34:38 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:34:38 --> Helper loaded: string_helper
INFO - 2019-06-23 17:34:38 --> Helper loaded: array_helper
INFO - 2019-06-23 17:34:38 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:34:38 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:34:38 --> Database Driver Class Initialized
INFO - 2019-06-23 17:34:38 --> Controller Class Initialized
INFO - 2019-06-23 23:34:38 --> Helper loaded: language_helper
INFO - 2019-06-23 23:34:38 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:34:38 --> Model Class Initialized
INFO - 2019-06-23 23:34:38 --> Model Class Initialized
INFO - 2019-06-23 23:34:38 --> Model Class Initialized
INFO - 2019-06-23 23:34:38 --> Model Class Initialized
INFO - 2019-06-23 23:34:38 --> Model Class Initialized
INFO - 2019-06-23 23:34:38 --> Final output sent to browser
DEBUG - 2019-06-23 23:34:38 --> Total execution time: 0.3290
INFO - 2019-06-23 17:36:02 --> Config Class Initialized
INFO - 2019-06-23 17:36:02 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:36:02 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:36:02 --> Utf8 Class Initialized
INFO - 2019-06-23 17:36:02 --> URI Class Initialized
INFO - 2019-06-23 17:36:02 --> Router Class Initialized
INFO - 2019-06-23 17:36:02 --> Output Class Initialized
INFO - 2019-06-23 17:36:02 --> Security Class Initialized
DEBUG - 2019-06-23 17:36:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:36:02 --> Input Class Initialized
INFO - 2019-06-23 17:36:02 --> Language Class Initialized
INFO - 2019-06-23 17:36:02 --> Language Class Initialized
INFO - 2019-06-23 17:36:02 --> Config Class Initialized
INFO - 2019-06-23 17:36:02 --> Loader Class Initialized
DEBUG - 2019-06-23 17:36:02 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:36:02 --> Helper loaded: url_helper
INFO - 2019-06-23 17:36:02 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:36:02 --> Helper loaded: string_helper
INFO - 2019-06-23 17:36:02 --> Helper loaded: array_helper
INFO - 2019-06-23 17:36:02 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:36:02 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:36:02 --> Database Driver Class Initialized
INFO - 2019-06-23 17:36:02 --> Controller Class Initialized
INFO - 2019-06-23 23:36:02 --> Helper loaded: language_helper
INFO - 2019-06-23 23:36:02 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:36:02 --> Model Class Initialized
INFO - 2019-06-23 23:36:02 --> Model Class Initialized
INFO - 2019-06-23 23:36:02 --> Model Class Initialized
INFO - 2019-06-23 23:36:02 --> Model Class Initialized
INFO - 2019-06-23 23:36:02 --> Model Class Initialized
INFO - 2019-06-23 23:36:02 --> Final output sent to browser
DEBUG - 2019-06-23 23:36:02 --> Total execution time: 0.3204
INFO - 2019-06-23 17:36:05 --> Config Class Initialized
INFO - 2019-06-23 17:36:05 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:36:05 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:36:05 --> Utf8 Class Initialized
INFO - 2019-06-23 17:36:05 --> URI Class Initialized
INFO - 2019-06-23 17:36:05 --> Router Class Initialized
INFO - 2019-06-23 17:36:05 --> Output Class Initialized
INFO - 2019-06-23 17:36:05 --> Security Class Initialized
DEBUG - 2019-06-23 17:36:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:36:05 --> Input Class Initialized
INFO - 2019-06-23 17:36:05 --> Language Class Initialized
INFO - 2019-06-23 17:36:05 --> Language Class Initialized
INFO - 2019-06-23 17:36:05 --> Config Class Initialized
INFO - 2019-06-23 17:36:05 --> Loader Class Initialized
DEBUG - 2019-06-23 17:36:05 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:36:05 --> Helper loaded: url_helper
INFO - 2019-06-23 17:36:05 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:36:05 --> Helper loaded: string_helper
INFO - 2019-06-23 17:36:05 --> Helper loaded: array_helper
INFO - 2019-06-23 17:36:05 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:36:05 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:36:05 --> Database Driver Class Initialized
INFO - 2019-06-23 17:36:05 --> Controller Class Initialized
INFO - 2019-06-23 23:36:05 --> Helper loaded: language_helper
INFO - 2019-06-23 23:36:05 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:36:05 --> Model Class Initialized
INFO - 2019-06-23 23:36:05 --> Model Class Initialized
INFO - 2019-06-23 23:36:05 --> Model Class Initialized
INFO - 2019-06-23 23:36:05 --> Model Class Initialized
INFO - 2019-06-23 23:36:05 --> Model Class Initialized
INFO - 2019-06-23 23:36:05 --> Final output sent to browser
DEBUG - 2019-06-23 23:36:05 --> Total execution time: 0.3014
INFO - 2019-06-23 17:36:39 --> Config Class Initialized
INFO - 2019-06-23 17:36:39 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:36:39 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:36:39 --> Utf8 Class Initialized
INFO - 2019-06-23 17:36:39 --> URI Class Initialized
INFO - 2019-06-23 17:36:39 --> Router Class Initialized
INFO - 2019-06-23 17:36:39 --> Output Class Initialized
INFO - 2019-06-23 17:36:39 --> Security Class Initialized
DEBUG - 2019-06-23 17:36:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:36:39 --> Input Class Initialized
INFO - 2019-06-23 17:36:39 --> Language Class Initialized
INFO - 2019-06-23 17:36:39 --> Language Class Initialized
INFO - 2019-06-23 17:36:39 --> Config Class Initialized
INFO - 2019-06-23 17:36:39 --> Loader Class Initialized
DEBUG - 2019-06-23 17:36:39 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:36:39 --> Helper loaded: url_helper
INFO - 2019-06-23 17:36:39 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:36:39 --> Helper loaded: string_helper
INFO - 2019-06-23 17:36:39 --> Helper loaded: array_helper
INFO - 2019-06-23 17:36:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:36:39 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:36:40 --> Database Driver Class Initialized
INFO - 2019-06-23 17:36:40 --> Controller Class Initialized
INFO - 2019-06-23 23:36:40 --> Helper loaded: language_helper
INFO - 2019-06-23 23:36:40 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:36:40 --> Model Class Initialized
INFO - 2019-06-23 23:36:40 --> Model Class Initialized
INFO - 2019-06-23 23:36:40 --> Model Class Initialized
INFO - 2019-06-23 23:36:40 --> Model Class Initialized
INFO - 2019-06-23 23:36:40 --> Model Class Initialized
INFO - 2019-06-23 23:36:40 --> Final output sent to browser
DEBUG - 2019-06-23 23:36:40 --> Total execution time: 0.3143
INFO - 2019-06-23 17:36:42 --> Config Class Initialized
INFO - 2019-06-23 17:36:42 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:36:42 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:36:42 --> Utf8 Class Initialized
INFO - 2019-06-23 17:36:42 --> URI Class Initialized
INFO - 2019-06-23 17:36:42 --> Router Class Initialized
INFO - 2019-06-23 17:36:43 --> Output Class Initialized
INFO - 2019-06-23 17:36:43 --> Security Class Initialized
DEBUG - 2019-06-23 17:36:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:36:43 --> Input Class Initialized
INFO - 2019-06-23 17:36:43 --> Language Class Initialized
INFO - 2019-06-23 17:36:43 --> Language Class Initialized
INFO - 2019-06-23 17:36:43 --> Config Class Initialized
INFO - 2019-06-23 17:36:43 --> Loader Class Initialized
DEBUG - 2019-06-23 17:36:43 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:36:43 --> Helper loaded: url_helper
INFO - 2019-06-23 17:36:43 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:36:43 --> Helper loaded: string_helper
INFO - 2019-06-23 17:36:43 --> Helper loaded: array_helper
INFO - 2019-06-23 17:36:43 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:36:43 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:36:43 --> Database Driver Class Initialized
INFO - 2019-06-23 17:36:43 --> Controller Class Initialized
INFO - 2019-06-23 23:36:43 --> Helper loaded: language_helper
INFO - 2019-06-23 23:36:43 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:36:43 --> Model Class Initialized
INFO - 2019-06-23 23:36:43 --> Model Class Initialized
INFO - 2019-06-23 23:36:43 --> Model Class Initialized
INFO - 2019-06-23 23:36:43 --> Model Class Initialized
INFO - 2019-06-23 23:36:43 --> Model Class Initialized
INFO - 2019-06-23 23:36:43 --> Final output sent to browser
DEBUG - 2019-06-23 23:36:43 --> Total execution time: 0.3071
INFO - 2019-06-23 17:37:18 --> Config Class Initialized
INFO - 2019-06-23 17:37:19 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:37:19 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:37:19 --> Utf8 Class Initialized
INFO - 2019-06-23 17:37:19 --> URI Class Initialized
INFO - 2019-06-23 17:37:19 --> Router Class Initialized
INFO - 2019-06-23 17:37:19 --> Output Class Initialized
INFO - 2019-06-23 17:37:19 --> Security Class Initialized
DEBUG - 2019-06-23 17:37:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:37:19 --> Input Class Initialized
INFO - 2019-06-23 17:37:19 --> Language Class Initialized
INFO - 2019-06-23 17:37:19 --> Language Class Initialized
INFO - 2019-06-23 17:37:19 --> Config Class Initialized
INFO - 2019-06-23 17:37:19 --> Loader Class Initialized
DEBUG - 2019-06-23 17:37:19 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:37:19 --> Helper loaded: url_helper
INFO - 2019-06-23 17:37:19 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:37:19 --> Helper loaded: string_helper
INFO - 2019-06-23 17:37:19 --> Helper loaded: array_helper
INFO - 2019-06-23 17:37:19 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:37:19 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:37:19 --> Database Driver Class Initialized
INFO - 2019-06-23 17:37:19 --> Controller Class Initialized
INFO - 2019-06-23 23:37:19 --> Helper loaded: language_helper
INFO - 2019-06-23 23:37:19 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:37:19 --> Model Class Initialized
INFO - 2019-06-23 23:37:19 --> Model Class Initialized
INFO - 2019-06-23 23:37:19 --> Model Class Initialized
INFO - 2019-06-23 23:37:19 --> Model Class Initialized
INFO - 2019-06-23 23:37:19 --> Model Class Initialized
INFO - 2019-06-23 23:37:19 --> Final output sent to browser
DEBUG - 2019-06-23 23:37:19 --> Total execution time: 0.3280
INFO - 2019-06-23 17:37:55 --> Config Class Initialized
INFO - 2019-06-23 17:37:55 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:37:55 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:37:55 --> Utf8 Class Initialized
INFO - 2019-06-23 17:37:55 --> URI Class Initialized
INFO - 2019-06-23 17:37:55 --> Router Class Initialized
INFO - 2019-06-23 17:37:55 --> Output Class Initialized
INFO - 2019-06-23 17:37:55 --> Security Class Initialized
DEBUG - 2019-06-23 17:37:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:37:55 --> Input Class Initialized
INFO - 2019-06-23 17:37:55 --> Language Class Initialized
INFO - 2019-06-23 17:37:55 --> Language Class Initialized
INFO - 2019-06-23 17:37:55 --> Config Class Initialized
INFO - 2019-06-23 17:37:55 --> Loader Class Initialized
DEBUG - 2019-06-23 17:37:55 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:37:55 --> Helper loaded: url_helper
INFO - 2019-06-23 17:37:55 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:37:55 --> Helper loaded: string_helper
INFO - 2019-06-23 17:37:55 --> Helper loaded: array_helper
INFO - 2019-06-23 17:37:55 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:37:55 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:37:55 --> Database Driver Class Initialized
INFO - 2019-06-23 17:37:55 --> Controller Class Initialized
INFO - 2019-06-23 23:37:55 --> Helper loaded: language_helper
INFO - 2019-06-23 23:37:55 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:37:55 --> Model Class Initialized
INFO - 2019-06-23 23:37:55 --> Model Class Initialized
INFO - 2019-06-23 23:37:55 --> Model Class Initialized
INFO - 2019-06-23 23:37:55 --> Model Class Initialized
INFO - 2019-06-23 23:37:55 --> Model Class Initialized
INFO - 2019-06-23 23:37:55 --> Final output sent to browser
DEBUG - 2019-06-23 23:37:55 --> Total execution time: 0.3047
INFO - 2019-06-23 17:38:06 --> Config Class Initialized
INFO - 2019-06-23 17:38:06 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:38:06 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:38:06 --> Utf8 Class Initialized
INFO - 2019-06-23 17:38:06 --> URI Class Initialized
INFO - 2019-06-23 17:38:06 --> Router Class Initialized
INFO - 2019-06-23 17:38:06 --> Output Class Initialized
INFO - 2019-06-23 17:38:06 --> Security Class Initialized
DEBUG - 2019-06-23 17:38:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:38:06 --> Input Class Initialized
INFO - 2019-06-23 17:38:06 --> Language Class Initialized
INFO - 2019-06-23 17:38:06 --> Language Class Initialized
INFO - 2019-06-23 17:38:06 --> Config Class Initialized
INFO - 2019-06-23 17:38:06 --> Loader Class Initialized
DEBUG - 2019-06-23 17:38:06 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:38:06 --> Helper loaded: url_helper
INFO - 2019-06-23 17:38:06 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:38:06 --> Helper loaded: string_helper
INFO - 2019-06-23 17:38:06 --> Helper loaded: array_helper
INFO - 2019-06-23 17:38:06 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:38:06 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:38:06 --> Database Driver Class Initialized
INFO - 2019-06-23 17:38:06 --> Controller Class Initialized
INFO - 2019-06-23 23:38:06 --> Helper loaded: language_helper
INFO - 2019-06-23 23:38:06 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:38:07 --> Model Class Initialized
INFO - 2019-06-23 23:38:07 --> Model Class Initialized
INFO - 2019-06-23 23:38:07 --> Model Class Initialized
INFO - 2019-06-23 23:38:07 --> Model Class Initialized
INFO - 2019-06-23 23:38:07 --> Model Class Initialized
INFO - 2019-06-23 23:38:07 --> Final output sent to browser
DEBUG - 2019-06-23 23:38:07 --> Total execution time: 0.3102
INFO - 2019-06-23 17:38:09 --> Config Class Initialized
INFO - 2019-06-23 17:38:09 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:38:09 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:38:09 --> Utf8 Class Initialized
INFO - 2019-06-23 17:38:09 --> URI Class Initialized
INFO - 2019-06-23 17:38:09 --> Router Class Initialized
INFO - 2019-06-23 17:38:09 --> Output Class Initialized
INFO - 2019-06-23 17:38:09 --> Security Class Initialized
DEBUG - 2019-06-23 17:38:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:38:09 --> Input Class Initialized
INFO - 2019-06-23 17:38:09 --> Language Class Initialized
INFO - 2019-06-23 17:38:09 --> Language Class Initialized
INFO - 2019-06-23 17:38:09 --> Config Class Initialized
INFO - 2019-06-23 17:38:09 --> Loader Class Initialized
DEBUG - 2019-06-23 17:38:09 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:38:09 --> Helper loaded: url_helper
INFO - 2019-06-23 17:38:09 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:38:09 --> Helper loaded: string_helper
INFO - 2019-06-23 17:38:09 --> Helper loaded: array_helper
INFO - 2019-06-23 17:38:09 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:38:09 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:38:09 --> Database Driver Class Initialized
INFO - 2019-06-23 17:38:09 --> Controller Class Initialized
INFO - 2019-06-23 23:38:10 --> Helper loaded: language_helper
INFO - 2019-06-23 23:38:10 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:38:10 --> Model Class Initialized
INFO - 2019-06-23 23:38:10 --> Model Class Initialized
INFO - 2019-06-23 23:38:10 --> Model Class Initialized
INFO - 2019-06-23 23:38:10 --> Model Class Initialized
INFO - 2019-06-23 23:38:10 --> Model Class Initialized
INFO - 2019-06-23 23:38:10 --> Final output sent to browser
DEBUG - 2019-06-23 23:38:10 --> Total execution time: 0.3073
INFO - 2019-06-23 17:40:21 --> Config Class Initialized
INFO - 2019-06-23 17:40:21 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:40:21 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:40:21 --> Utf8 Class Initialized
INFO - 2019-06-23 17:40:21 --> URI Class Initialized
INFO - 2019-06-23 17:40:21 --> Router Class Initialized
INFO - 2019-06-23 17:40:21 --> Output Class Initialized
INFO - 2019-06-23 17:40:21 --> Security Class Initialized
DEBUG - 2019-06-23 17:40:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:40:21 --> Input Class Initialized
INFO - 2019-06-23 17:40:21 --> Language Class Initialized
INFO - 2019-06-23 17:40:21 --> Language Class Initialized
INFO - 2019-06-23 17:40:21 --> Config Class Initialized
INFO - 2019-06-23 17:40:21 --> Loader Class Initialized
DEBUG - 2019-06-23 17:40:21 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:40:21 --> Helper loaded: url_helper
INFO - 2019-06-23 17:40:21 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:40:21 --> Helper loaded: string_helper
INFO - 2019-06-23 17:40:21 --> Helper loaded: array_helper
INFO - 2019-06-23 17:40:21 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:40:21 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:40:21 --> Database Driver Class Initialized
INFO - 2019-06-23 17:40:21 --> Controller Class Initialized
INFO - 2019-06-23 23:40:21 --> Helper loaded: language_helper
INFO - 2019-06-23 23:40:21 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:40:21 --> Model Class Initialized
INFO - 2019-06-23 23:40:21 --> Model Class Initialized
INFO - 2019-06-23 23:40:21 --> Model Class Initialized
INFO - 2019-06-23 23:40:21 --> Model Class Initialized
INFO - 2019-06-23 23:40:21 --> Final output sent to browser
DEBUG - 2019-06-23 23:40:21 --> Total execution time: 0.2831
INFO - 2019-06-23 17:46:12 --> Config Class Initialized
INFO - 2019-06-23 17:46:12 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:46:12 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:46:12 --> Utf8 Class Initialized
INFO - 2019-06-23 17:46:12 --> URI Class Initialized
INFO - 2019-06-23 17:46:12 --> Router Class Initialized
INFO - 2019-06-23 17:46:12 --> Output Class Initialized
INFO - 2019-06-23 17:46:12 --> Security Class Initialized
DEBUG - 2019-06-23 17:46:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:46:12 --> Input Class Initialized
INFO - 2019-06-23 17:46:12 --> Language Class Initialized
INFO - 2019-06-23 17:46:12 --> Language Class Initialized
INFO - 2019-06-23 17:46:12 --> Config Class Initialized
INFO - 2019-06-23 17:46:12 --> Loader Class Initialized
DEBUG - 2019-06-23 17:46:12 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:46:12 --> Helper loaded: url_helper
INFO - 2019-06-23 17:46:12 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:46:12 --> Helper loaded: string_helper
INFO - 2019-06-23 17:46:12 --> Helper loaded: array_helper
INFO - 2019-06-23 17:46:12 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:46:12 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:46:12 --> Database Driver Class Initialized
INFO - 2019-06-23 17:46:12 --> Controller Class Initialized
INFO - 2019-06-23 23:46:12 --> Helper loaded: language_helper
INFO - 2019-06-23 23:46:12 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:46:12 --> Model Class Initialized
INFO - 2019-06-23 23:46:12 --> Model Class Initialized
INFO - 2019-06-23 23:46:12 --> Model Class Initialized
INFO - 2019-06-23 23:46:12 --> Model Class Initialized
ERROR - 2019-06-23 23:46:12 --> Severity: Notice --> Undefined variable: fields C:\xampp\htdocs\crapi_admin\application\modules\api_v1\controllers\Employees.php 43
INFO - 2019-06-23 23:46:12 --> Final output sent to browser
DEBUG - 2019-06-23 23:46:12 --> Total execution time: 0.3206
INFO - 2019-06-23 17:46:43 --> Config Class Initialized
INFO - 2019-06-23 17:46:43 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:46:43 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:46:43 --> Utf8 Class Initialized
INFO - 2019-06-23 17:46:43 --> URI Class Initialized
INFO - 2019-06-23 17:46:43 --> Router Class Initialized
INFO - 2019-06-23 17:46:43 --> Output Class Initialized
INFO - 2019-06-23 17:46:43 --> Security Class Initialized
DEBUG - 2019-06-23 17:46:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:46:43 --> Input Class Initialized
INFO - 2019-06-23 17:46:43 --> Language Class Initialized
INFO - 2019-06-23 17:46:43 --> Language Class Initialized
INFO - 2019-06-23 17:46:43 --> Config Class Initialized
INFO - 2019-06-23 17:46:43 --> Loader Class Initialized
DEBUG - 2019-06-23 17:46:43 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:46:43 --> Helper loaded: url_helper
INFO - 2019-06-23 17:46:43 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:46:43 --> Helper loaded: string_helper
INFO - 2019-06-23 17:46:43 --> Helper loaded: array_helper
INFO - 2019-06-23 17:46:43 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:46:43 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:46:43 --> Database Driver Class Initialized
INFO - 2019-06-23 17:46:43 --> Controller Class Initialized
INFO - 2019-06-23 23:46:43 --> Helper loaded: language_helper
INFO - 2019-06-23 23:46:43 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:46:43 --> Model Class Initialized
INFO - 2019-06-23 23:46:43 --> Model Class Initialized
INFO - 2019-06-23 23:46:43 --> Model Class Initialized
INFO - 2019-06-23 23:46:43 --> Model Class Initialized
INFO - 2019-06-23 23:46:43 --> Final output sent to browser
DEBUG - 2019-06-23 23:46:43 --> Total execution time: 0.2875
INFO - 2019-06-23 17:47:00 --> Config Class Initialized
INFO - 2019-06-23 17:47:00 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:47:00 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:47:00 --> Utf8 Class Initialized
INFO - 2019-06-23 17:47:00 --> URI Class Initialized
INFO - 2019-06-23 17:47:00 --> Router Class Initialized
INFO - 2019-06-23 17:47:00 --> Output Class Initialized
INFO - 2019-06-23 17:47:00 --> Security Class Initialized
DEBUG - 2019-06-23 17:47:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:47:00 --> Input Class Initialized
INFO - 2019-06-23 17:47:00 --> Language Class Initialized
INFO - 2019-06-23 17:47:00 --> Language Class Initialized
INFO - 2019-06-23 17:47:00 --> Config Class Initialized
INFO - 2019-06-23 17:47:00 --> Loader Class Initialized
DEBUG - 2019-06-23 17:47:00 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:47:00 --> Helper loaded: url_helper
INFO - 2019-06-23 17:47:00 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:47:00 --> Helper loaded: string_helper
INFO - 2019-06-23 17:47:00 --> Helper loaded: array_helper
INFO - 2019-06-23 17:47:00 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:47:00 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:47:00 --> Database Driver Class Initialized
INFO - 2019-06-23 17:47:00 --> Controller Class Initialized
INFO - 2019-06-23 23:47:00 --> Helper loaded: language_helper
INFO - 2019-06-23 23:47:00 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:47:00 --> Model Class Initialized
INFO - 2019-06-23 23:47:00 --> Model Class Initialized
INFO - 2019-06-23 23:47:00 --> Model Class Initialized
INFO - 2019-06-23 23:47:00 --> Model Class Initialized
INFO - 2019-06-23 23:47:00 --> Model Class Initialized
INFO - 2019-06-23 23:47:00 --> Final output sent to browser
DEBUG - 2019-06-23 23:47:00 --> Total execution time: 0.3179
INFO - 2019-06-23 17:51:29 --> Config Class Initialized
INFO - 2019-06-23 17:51:29 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:51:29 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:51:29 --> Utf8 Class Initialized
INFO - 2019-06-23 17:51:29 --> URI Class Initialized
INFO - 2019-06-23 17:51:29 --> Router Class Initialized
INFO - 2019-06-23 17:51:29 --> Output Class Initialized
INFO - 2019-06-23 17:51:29 --> Security Class Initialized
DEBUG - 2019-06-23 17:51:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:51:29 --> Input Class Initialized
INFO - 2019-06-23 17:51:29 --> Language Class Initialized
INFO - 2019-06-23 17:51:29 --> Language Class Initialized
INFO - 2019-06-23 17:51:29 --> Config Class Initialized
INFO - 2019-06-23 17:51:29 --> Loader Class Initialized
DEBUG - 2019-06-23 17:51:29 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:51:29 --> Helper loaded: url_helper
INFO - 2019-06-23 17:51:29 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:51:29 --> Helper loaded: string_helper
INFO - 2019-06-23 17:51:29 --> Helper loaded: array_helper
INFO - 2019-06-23 17:51:29 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:51:29 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:51:29 --> Database Driver Class Initialized
INFO - 2019-06-23 17:51:29 --> Controller Class Initialized
INFO - 2019-06-23 23:51:29 --> Helper loaded: language_helper
INFO - 2019-06-23 23:51:29 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:51:29 --> Model Class Initialized
INFO - 2019-06-23 23:51:29 --> Model Class Initialized
INFO - 2019-06-23 23:51:29 --> Model Class Initialized
INFO - 2019-06-23 23:51:29 --> Model Class Initialized
INFO - 2019-06-23 23:51:29 --> Final output sent to browser
DEBUG - 2019-06-23 23:51:29 --> Total execution time: 0.2767
INFO - 2019-06-23 17:51:36 --> Config Class Initialized
INFO - 2019-06-23 17:51:36 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:51:36 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:51:36 --> Utf8 Class Initialized
INFO - 2019-06-23 17:51:36 --> URI Class Initialized
INFO - 2019-06-23 17:51:36 --> Router Class Initialized
INFO - 2019-06-23 17:51:36 --> Output Class Initialized
INFO - 2019-06-23 17:51:36 --> Security Class Initialized
DEBUG - 2019-06-23 17:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:51:36 --> Input Class Initialized
INFO - 2019-06-23 17:51:36 --> Language Class Initialized
INFO - 2019-06-23 17:51:36 --> Language Class Initialized
INFO - 2019-06-23 17:51:36 --> Config Class Initialized
INFO - 2019-06-23 17:51:36 --> Loader Class Initialized
DEBUG - 2019-06-23 17:51:36 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:51:36 --> Helper loaded: url_helper
INFO - 2019-06-23 17:51:36 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:51:36 --> Helper loaded: string_helper
INFO - 2019-06-23 17:51:36 --> Helper loaded: array_helper
INFO - 2019-06-23 17:51:36 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:51:36 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:51:36 --> Database Driver Class Initialized
INFO - 2019-06-23 17:51:36 --> Controller Class Initialized
INFO - 2019-06-23 23:51:36 --> Helper loaded: language_helper
INFO - 2019-06-23 23:51:36 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:51:36 --> Model Class Initialized
INFO - 2019-06-23 23:51:36 --> Model Class Initialized
INFO - 2019-06-23 23:51:36 --> Model Class Initialized
INFO - 2019-06-23 23:51:36 --> Model Class Initialized
INFO - 2019-06-23 23:51:36 --> Model Class Initialized
INFO - 2019-06-23 23:51:36 --> Final output sent to browser
DEBUG - 2019-06-23 23:51:36 --> Total execution time: 0.2990
INFO - 2019-06-23 17:51:49 --> Config Class Initialized
INFO - 2019-06-23 17:51:49 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:51:49 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:51:49 --> Utf8 Class Initialized
INFO - 2019-06-23 17:51:49 --> URI Class Initialized
INFO - 2019-06-23 17:51:49 --> Router Class Initialized
INFO - 2019-06-23 17:51:49 --> Output Class Initialized
INFO - 2019-06-23 17:51:49 --> Security Class Initialized
DEBUG - 2019-06-23 17:51:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:51:49 --> Input Class Initialized
INFO - 2019-06-23 17:51:49 --> Language Class Initialized
INFO - 2019-06-23 17:51:49 --> Language Class Initialized
INFO - 2019-06-23 17:51:49 --> Config Class Initialized
INFO - 2019-06-23 17:51:49 --> Loader Class Initialized
DEBUG - 2019-06-23 17:51:49 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:51:49 --> Helper loaded: url_helper
INFO - 2019-06-23 17:51:49 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:51:49 --> Helper loaded: string_helper
INFO - 2019-06-23 17:51:49 --> Helper loaded: array_helper
INFO - 2019-06-23 17:51:49 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:51:49 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:51:49 --> Database Driver Class Initialized
INFO - 2019-06-23 17:51:49 --> Controller Class Initialized
INFO - 2019-06-23 23:51:49 --> Helper loaded: language_helper
INFO - 2019-06-23 23:51:49 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:51:49 --> Model Class Initialized
INFO - 2019-06-23 23:51:49 --> Model Class Initialized
INFO - 2019-06-23 23:51:49 --> Model Class Initialized
INFO - 2019-06-23 23:51:49 --> Model Class Initialized
INFO - 2019-06-23 23:51:49 --> Model Class Initialized
INFO - 2019-06-23 23:51:49 --> Final output sent to browser
DEBUG - 2019-06-23 23:51:49 --> Total execution time: 0.2918
INFO - 2019-06-23 17:51:59 --> Config Class Initialized
INFO - 2019-06-23 17:51:59 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:51:59 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:51:59 --> Utf8 Class Initialized
INFO - 2019-06-23 17:51:59 --> URI Class Initialized
INFO - 2019-06-23 17:51:59 --> Router Class Initialized
INFO - 2019-06-23 17:51:59 --> Output Class Initialized
INFO - 2019-06-23 17:51:59 --> Security Class Initialized
DEBUG - 2019-06-23 17:51:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:51:59 --> Input Class Initialized
INFO - 2019-06-23 17:51:59 --> Language Class Initialized
INFO - 2019-06-23 17:51:59 --> Language Class Initialized
INFO - 2019-06-23 17:51:59 --> Config Class Initialized
INFO - 2019-06-23 17:51:59 --> Loader Class Initialized
DEBUG - 2019-06-23 17:51:59 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:51:59 --> Helper loaded: url_helper
INFO - 2019-06-23 17:51:59 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:51:59 --> Helper loaded: string_helper
INFO - 2019-06-23 17:51:59 --> Helper loaded: array_helper
INFO - 2019-06-23 17:51:59 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:51:59 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:51:59 --> Database Driver Class Initialized
INFO - 2019-06-23 17:51:59 --> Controller Class Initialized
INFO - 2019-06-23 23:51:59 --> Helper loaded: language_helper
INFO - 2019-06-23 23:51:59 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:51:59 --> Model Class Initialized
INFO - 2019-06-23 23:51:59 --> Model Class Initialized
INFO - 2019-06-23 23:51:59 --> Model Class Initialized
INFO - 2019-06-23 23:51:59 --> Model Class Initialized
INFO - 2019-06-23 23:51:59 --> Model Class Initialized
INFO - 2019-06-23 23:51:59 --> Final output sent to browser
DEBUG - 2019-06-23 23:51:59 --> Total execution time: 0.3022
INFO - 2019-06-23 17:52:03 --> Config Class Initialized
INFO - 2019-06-23 17:52:03 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:52:03 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:52:03 --> Utf8 Class Initialized
INFO - 2019-06-23 17:52:03 --> URI Class Initialized
INFO - 2019-06-23 17:52:03 --> Router Class Initialized
INFO - 2019-06-23 17:52:03 --> Output Class Initialized
INFO - 2019-06-23 17:52:03 --> Security Class Initialized
DEBUG - 2019-06-23 17:52:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:52:03 --> Input Class Initialized
INFO - 2019-06-23 17:52:03 --> Language Class Initialized
INFO - 2019-06-23 17:52:03 --> Language Class Initialized
INFO - 2019-06-23 17:52:03 --> Config Class Initialized
INFO - 2019-06-23 17:52:03 --> Loader Class Initialized
DEBUG - 2019-06-23 17:52:03 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:52:03 --> Helper loaded: url_helper
INFO - 2019-06-23 17:52:03 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:52:03 --> Helper loaded: string_helper
INFO - 2019-06-23 17:52:03 --> Helper loaded: array_helper
INFO - 2019-06-23 17:52:03 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:52:03 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:52:03 --> Database Driver Class Initialized
INFO - 2019-06-23 17:52:03 --> Controller Class Initialized
INFO - 2019-06-23 23:52:03 --> Helper loaded: language_helper
INFO - 2019-06-23 23:52:03 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:52:03 --> Model Class Initialized
INFO - 2019-06-23 23:52:03 --> Model Class Initialized
INFO - 2019-06-23 23:52:03 --> Model Class Initialized
INFO - 2019-06-23 23:52:03 --> Model Class Initialized
INFO - 2019-06-23 23:52:03 --> Model Class Initialized
INFO - 2019-06-23 23:52:03 --> Final output sent to browser
DEBUG - 2019-06-23 23:52:03 --> Total execution time: 0.2779
INFO - 2019-06-23 17:52:46 --> Config Class Initialized
INFO - 2019-06-23 17:52:46 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:52:46 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:52:46 --> Utf8 Class Initialized
INFO - 2019-06-23 17:52:46 --> URI Class Initialized
INFO - 2019-06-23 17:52:46 --> Router Class Initialized
INFO - 2019-06-23 17:52:46 --> Output Class Initialized
INFO - 2019-06-23 17:52:46 --> Security Class Initialized
DEBUG - 2019-06-23 17:52:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:52:46 --> Input Class Initialized
INFO - 2019-06-23 17:52:46 --> Language Class Initialized
INFO - 2019-06-23 17:52:46 --> Language Class Initialized
INFO - 2019-06-23 17:52:46 --> Config Class Initialized
INFO - 2019-06-23 17:52:46 --> Loader Class Initialized
DEBUG - 2019-06-23 17:52:46 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:52:46 --> Helper loaded: url_helper
INFO - 2019-06-23 17:52:46 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:52:46 --> Helper loaded: string_helper
INFO - 2019-06-23 17:52:46 --> Helper loaded: array_helper
INFO - 2019-06-23 17:52:46 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:52:46 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:52:46 --> Database Driver Class Initialized
INFO - 2019-06-23 17:52:46 --> Controller Class Initialized
INFO - 2019-06-23 23:52:46 --> Helper loaded: language_helper
INFO - 2019-06-23 23:52:46 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:52:46 --> Model Class Initialized
INFO - 2019-06-23 23:52:46 --> Model Class Initialized
INFO - 2019-06-23 23:52:46 --> Model Class Initialized
INFO - 2019-06-23 23:52:46 --> Model Class Initialized
INFO - 2019-06-23 23:52:46 --> Model Class Initialized
INFO - 2019-06-23 23:52:46 --> Final output sent to browser
DEBUG - 2019-06-23 23:52:47 --> Total execution time: 0.3142
INFO - 2019-06-23 17:52:49 --> Config Class Initialized
INFO - 2019-06-23 17:52:49 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:52:49 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:52:49 --> Utf8 Class Initialized
INFO - 2019-06-23 17:52:49 --> URI Class Initialized
INFO - 2019-06-23 17:52:49 --> Router Class Initialized
INFO - 2019-06-23 17:52:49 --> Output Class Initialized
INFO - 2019-06-23 17:52:49 --> Security Class Initialized
DEBUG - 2019-06-23 17:52:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:52:49 --> Input Class Initialized
INFO - 2019-06-23 17:52:49 --> Language Class Initialized
INFO - 2019-06-23 17:52:49 --> Language Class Initialized
INFO - 2019-06-23 17:52:49 --> Config Class Initialized
INFO - 2019-06-23 17:52:49 --> Loader Class Initialized
DEBUG - 2019-06-23 17:52:49 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:52:49 --> Helper loaded: url_helper
INFO - 2019-06-23 17:52:49 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:52:49 --> Helper loaded: string_helper
INFO - 2019-06-23 17:52:49 --> Helper loaded: array_helper
INFO - 2019-06-23 17:52:49 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:52:49 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:52:49 --> Database Driver Class Initialized
INFO - 2019-06-23 17:52:49 --> Controller Class Initialized
INFO - 2019-06-23 23:52:50 --> Helper loaded: language_helper
INFO - 2019-06-23 23:52:50 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:52:50 --> Model Class Initialized
INFO - 2019-06-23 23:52:50 --> Model Class Initialized
INFO - 2019-06-23 23:52:50 --> Model Class Initialized
INFO - 2019-06-23 23:52:50 --> Model Class Initialized
INFO - 2019-06-23 23:52:50 --> Model Class Initialized
INFO - 2019-06-23 23:52:50 --> Final output sent to browser
DEBUG - 2019-06-23 23:52:50 --> Total execution time: 0.3119
INFO - 2019-06-23 17:54:39 --> Config Class Initialized
INFO - 2019-06-23 17:54:39 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:54:39 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:54:39 --> Utf8 Class Initialized
INFO - 2019-06-23 17:54:39 --> URI Class Initialized
INFO - 2019-06-23 17:54:39 --> Router Class Initialized
INFO - 2019-06-23 17:54:39 --> Output Class Initialized
INFO - 2019-06-23 17:54:39 --> Security Class Initialized
DEBUG - 2019-06-23 17:54:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:54:39 --> Input Class Initialized
INFO - 2019-06-23 17:54:39 --> Language Class Initialized
INFO - 2019-06-23 17:54:39 --> Language Class Initialized
INFO - 2019-06-23 17:54:39 --> Config Class Initialized
INFO - 2019-06-23 17:54:39 --> Loader Class Initialized
DEBUG - 2019-06-23 17:54:39 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:54:39 --> Helper loaded: url_helper
INFO - 2019-06-23 17:54:39 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:54:39 --> Helper loaded: string_helper
INFO - 2019-06-23 17:54:39 --> Helper loaded: array_helper
INFO - 2019-06-23 17:54:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:54:39 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:54:39 --> Database Driver Class Initialized
INFO - 2019-06-23 17:54:39 --> Controller Class Initialized
INFO - 2019-06-23 23:54:39 --> Helper loaded: language_helper
INFO - 2019-06-23 23:54:39 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:54:39 --> Model Class Initialized
INFO - 2019-06-23 23:54:39 --> Model Class Initialized
INFO - 2019-06-23 23:54:39 --> Model Class Initialized
INFO - 2019-06-23 23:54:39 --> Model Class Initialized
INFO - 2019-06-23 23:54:39 --> Model Class Initialized
INFO - 2019-06-23 23:54:39 --> Final output sent to browser
DEBUG - 2019-06-23 23:54:39 --> Total execution time: 0.3018
INFO - 2019-06-23 17:54:52 --> Config Class Initialized
INFO - 2019-06-23 17:54:52 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:54:52 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:54:52 --> Utf8 Class Initialized
INFO - 2019-06-23 17:54:52 --> URI Class Initialized
INFO - 2019-06-23 17:54:52 --> Router Class Initialized
INFO - 2019-06-23 17:54:52 --> Output Class Initialized
INFO - 2019-06-23 17:54:52 --> Security Class Initialized
DEBUG - 2019-06-23 17:54:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:54:52 --> Input Class Initialized
INFO - 2019-06-23 17:54:52 --> Language Class Initialized
INFO - 2019-06-23 17:54:52 --> Language Class Initialized
INFO - 2019-06-23 17:54:52 --> Config Class Initialized
INFO - 2019-06-23 17:54:52 --> Loader Class Initialized
DEBUG - 2019-06-23 17:54:52 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:54:52 --> Helper loaded: url_helper
INFO - 2019-06-23 17:54:52 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:54:52 --> Helper loaded: string_helper
INFO - 2019-06-23 17:54:52 --> Helper loaded: array_helper
INFO - 2019-06-23 17:54:52 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:54:52 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:54:52 --> Database Driver Class Initialized
INFO - 2019-06-23 17:54:52 --> Controller Class Initialized
INFO - 2019-06-23 23:54:52 --> Helper loaded: language_helper
INFO - 2019-06-23 23:54:52 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:54:52 --> Model Class Initialized
INFO - 2019-06-23 23:54:52 --> Model Class Initialized
INFO - 2019-06-23 23:54:52 --> Model Class Initialized
INFO - 2019-06-23 23:54:52 --> Model Class Initialized
INFO - 2019-06-23 23:54:52 --> Model Class Initialized
INFO - 2019-06-23 23:54:52 --> Final output sent to browser
DEBUG - 2019-06-23 23:54:52 --> Total execution time: 0.3056
INFO - 2019-06-23 17:54:59 --> Config Class Initialized
INFO - 2019-06-23 17:54:59 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:54:59 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:54:59 --> Utf8 Class Initialized
INFO - 2019-06-23 17:54:59 --> URI Class Initialized
INFO - 2019-06-23 17:54:59 --> Router Class Initialized
INFO - 2019-06-23 17:54:59 --> Output Class Initialized
INFO - 2019-06-23 17:54:59 --> Security Class Initialized
DEBUG - 2019-06-23 17:54:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:54:59 --> Input Class Initialized
INFO - 2019-06-23 17:54:59 --> Language Class Initialized
INFO - 2019-06-23 17:54:59 --> Language Class Initialized
INFO - 2019-06-23 17:54:59 --> Config Class Initialized
INFO - 2019-06-23 17:54:59 --> Loader Class Initialized
DEBUG - 2019-06-23 17:54:59 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:54:59 --> Helper loaded: url_helper
INFO - 2019-06-23 17:54:59 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:54:59 --> Helper loaded: string_helper
INFO - 2019-06-23 17:54:59 --> Helper loaded: array_helper
INFO - 2019-06-23 17:54:59 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:54:59 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:54:59 --> Database Driver Class Initialized
INFO - 2019-06-23 17:54:59 --> Controller Class Initialized
INFO - 2019-06-23 23:54:59 --> Helper loaded: language_helper
INFO - 2019-06-23 23:54:59 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:54:59 --> Model Class Initialized
INFO - 2019-06-23 23:54:59 --> Model Class Initialized
INFO - 2019-06-23 23:54:59 --> Model Class Initialized
INFO - 2019-06-23 23:54:59 --> Model Class Initialized
INFO - 2019-06-23 23:54:59 --> Model Class Initialized
INFO - 2019-06-23 23:54:59 --> Final output sent to browser
DEBUG - 2019-06-23 23:54:59 --> Total execution time: 0.2919
INFO - 2019-06-23 17:55:35 --> Config Class Initialized
INFO - 2019-06-23 17:55:35 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:55:35 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:55:35 --> Utf8 Class Initialized
INFO - 2019-06-23 17:55:35 --> URI Class Initialized
INFO - 2019-06-23 17:55:35 --> Router Class Initialized
INFO - 2019-06-23 17:55:35 --> Output Class Initialized
INFO - 2019-06-23 17:55:35 --> Security Class Initialized
DEBUG - 2019-06-23 17:55:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:55:35 --> Input Class Initialized
INFO - 2019-06-23 17:55:35 --> Language Class Initialized
INFO - 2019-06-23 17:55:35 --> Language Class Initialized
INFO - 2019-06-23 17:55:35 --> Config Class Initialized
INFO - 2019-06-23 17:55:35 --> Loader Class Initialized
DEBUG - 2019-06-23 17:55:35 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:55:35 --> Helper loaded: url_helper
INFO - 2019-06-23 17:55:35 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:55:35 --> Helper loaded: string_helper
INFO - 2019-06-23 17:55:35 --> Helper loaded: array_helper
INFO - 2019-06-23 17:55:35 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:55:35 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:55:36 --> Database Driver Class Initialized
INFO - 2019-06-23 17:55:36 --> Controller Class Initialized
INFO - 2019-06-23 23:55:36 --> Helper loaded: language_helper
INFO - 2019-06-23 23:55:36 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:55:36 --> Model Class Initialized
INFO - 2019-06-23 23:55:36 --> Model Class Initialized
INFO - 2019-06-23 23:55:36 --> Model Class Initialized
INFO - 2019-06-23 23:55:36 --> Model Class Initialized
INFO - 2019-06-23 23:55:36 --> Model Class Initialized
INFO - 2019-06-23 23:55:36 --> Final output sent to browser
DEBUG - 2019-06-23 23:55:36 --> Total execution time: 0.3329
INFO - 2019-06-23 17:55:36 --> Config Class Initialized
INFO - 2019-06-23 17:55:36 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:55:36 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:55:36 --> Utf8 Class Initialized
INFO - 2019-06-23 17:55:36 --> URI Class Initialized
INFO - 2019-06-23 17:55:36 --> Router Class Initialized
INFO - 2019-06-23 17:55:36 --> Output Class Initialized
INFO - 2019-06-23 17:55:36 --> Security Class Initialized
DEBUG - 2019-06-23 17:55:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:55:36 --> Input Class Initialized
INFO - 2019-06-23 17:55:36 --> Language Class Initialized
INFO - 2019-06-23 17:55:36 --> Language Class Initialized
INFO - 2019-06-23 17:55:36 --> Config Class Initialized
INFO - 2019-06-23 17:55:36 --> Loader Class Initialized
DEBUG - 2019-06-23 17:55:37 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:55:37 --> Helper loaded: url_helper
INFO - 2019-06-23 17:55:37 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:55:37 --> Helper loaded: string_helper
INFO - 2019-06-23 17:55:37 --> Helper loaded: array_helper
INFO - 2019-06-23 17:55:37 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:55:37 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:55:37 --> Database Driver Class Initialized
INFO - 2019-06-23 17:55:37 --> Controller Class Initialized
INFO - 2019-06-23 23:55:37 --> Helper loaded: language_helper
INFO - 2019-06-23 23:55:37 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:55:37 --> Model Class Initialized
INFO - 2019-06-23 23:55:37 --> Model Class Initialized
INFO - 2019-06-23 23:55:37 --> Model Class Initialized
INFO - 2019-06-23 23:55:37 --> Model Class Initialized
INFO - 2019-06-23 23:55:37 --> Model Class Initialized
INFO - 2019-06-23 23:55:37 --> Final output sent to browser
DEBUG - 2019-06-23 23:55:37 --> Total execution time: 0.3246
INFO - 2019-06-23 17:55:45 --> Config Class Initialized
INFO - 2019-06-23 17:55:45 --> Hooks Class Initialized
INFO - 2019-06-23 17:55:46 --> Config Class Initialized
DEBUG - 2019-06-23 17:55:46 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:55:46 --> Hooks Class Initialized
INFO - 2019-06-23 17:55:46 --> Utf8 Class Initialized
DEBUG - 2019-06-23 17:55:46 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:55:46 --> URI Class Initialized
INFO - 2019-06-23 17:55:46 --> Utf8 Class Initialized
INFO - 2019-06-23 17:55:46 --> URI Class Initialized
INFO - 2019-06-23 17:55:46 --> Router Class Initialized
INFO - 2019-06-23 17:55:46 --> Router Class Initialized
INFO - 2019-06-23 17:55:46 --> Output Class Initialized
INFO - 2019-06-23 17:55:46 --> Output Class Initialized
INFO - 2019-06-23 17:55:46 --> Security Class Initialized
INFO - 2019-06-23 17:55:46 --> Security Class Initialized
DEBUG - 2019-06-23 17:55:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 17:55:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:55:46 --> Input Class Initialized
INFO - 2019-06-23 17:55:46 --> Input Class Initialized
INFO - 2019-06-23 17:55:46 --> Language Class Initialized
INFO - 2019-06-23 17:55:46 --> Language Class Initialized
INFO - 2019-06-23 17:55:46 --> Language Class Initialized
INFO - 2019-06-23 17:55:46 --> Language Class Initialized
INFO - 2019-06-23 17:55:46 --> Config Class Initialized
INFO - 2019-06-23 17:55:46 --> Config Class Initialized
INFO - 2019-06-23 17:55:46 --> Loader Class Initialized
INFO - 2019-06-23 17:55:46 --> Loader Class Initialized
DEBUG - 2019-06-23 17:55:46 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 17:55:46 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:55:46 --> Helper loaded: url_helper
INFO - 2019-06-23 17:55:46 --> Helper loaded: url_helper
INFO - 2019-06-23 17:55:46 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:55:46 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:55:46 --> Helper loaded: string_helper
INFO - 2019-06-23 17:55:46 --> Helper loaded: string_helper
INFO - 2019-06-23 17:55:46 --> Helper loaded: array_helper
INFO - 2019-06-23 17:55:46 --> Helper loaded: array_helper
INFO - 2019-06-23 17:55:46 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:55:46 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:55:46 --> Database Driver Class Initialized
INFO - 2019-06-23 17:55:46 --> Controller Class Initialized
INFO - 2019-06-23 23:55:46 --> Helper loaded: language_helper
INFO - 2019-06-23 23:55:46 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:55:46 --> Model Class Initialized
INFO - 2019-06-23 23:55:46 --> Model Class Initialized
INFO - 2019-06-23 23:55:46 --> Model Class Initialized
INFO - 2019-06-23 23:55:46 --> Model Class Initialized
INFO - 2019-06-23 23:55:46 --> Model Class Initialized
INFO - 2019-06-23 23:55:46 --> Final output sent to browser
DEBUG - 2019-06-23 23:55:46 --> Total execution time: 0.4579
INFO - 2019-06-23 17:55:46 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:55:46 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:55:46 --> Database Driver Class Initialized
INFO - 2019-06-23 17:55:46 --> Controller Class Initialized
INFO - 2019-06-23 23:55:46 --> Helper loaded: language_helper
INFO - 2019-06-23 23:55:46 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:55:46 --> Model Class Initialized
INFO - 2019-06-23 23:55:46 --> Model Class Initialized
INFO - 2019-06-23 23:55:46 --> Model Class Initialized
INFO - 2019-06-23 23:55:46 --> Model Class Initialized
INFO - 2019-06-23 23:55:46 --> Final output sent to browser
DEBUG - 2019-06-23 23:55:46 --> Total execution time: 0.5628
INFO - 2019-06-23 17:58:21 --> Config Class Initialized
INFO - 2019-06-23 17:58:21 --> Hooks Class Initialized
INFO - 2019-06-23 17:58:21 --> Config Class Initialized
DEBUG - 2019-06-23 17:58:21 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:58:21 --> Hooks Class Initialized
INFO - 2019-06-23 17:58:21 --> Utf8 Class Initialized
DEBUG - 2019-06-23 17:58:21 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:58:21 --> URI Class Initialized
INFO - 2019-06-23 17:58:21 --> Utf8 Class Initialized
INFO - 2019-06-23 17:58:21 --> URI Class Initialized
INFO - 2019-06-23 17:58:21 --> Router Class Initialized
INFO - 2019-06-23 17:58:21 --> Router Class Initialized
INFO - 2019-06-23 17:58:22 --> Output Class Initialized
INFO - 2019-06-23 17:58:22 --> Output Class Initialized
INFO - 2019-06-23 17:58:22 --> Security Class Initialized
INFO - 2019-06-23 17:58:22 --> Security Class Initialized
DEBUG - 2019-06-23 17:58:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 17:58:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:58:22 --> Input Class Initialized
INFO - 2019-06-23 17:58:22 --> Input Class Initialized
INFO - 2019-06-23 17:58:22 --> Language Class Initialized
INFO - 2019-06-23 17:58:22 --> Language Class Initialized
INFO - 2019-06-23 17:58:22 --> Language Class Initialized
INFO - 2019-06-23 17:58:22 --> Language Class Initialized
INFO - 2019-06-23 17:58:22 --> Config Class Initialized
INFO - 2019-06-23 17:58:22 --> Config Class Initialized
INFO - 2019-06-23 17:58:22 --> Loader Class Initialized
INFO - 2019-06-23 17:58:22 --> Loader Class Initialized
DEBUG - 2019-06-23 17:58:22 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 17:58:22 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:58:22 --> Helper loaded: url_helper
INFO - 2019-06-23 17:58:22 --> Helper loaded: url_helper
INFO - 2019-06-23 17:58:22 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:58:22 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:58:22 --> Helper loaded: string_helper
INFO - 2019-06-23 17:58:22 --> Helper loaded: string_helper
INFO - 2019-06-23 17:58:22 --> Helper loaded: array_helper
INFO - 2019-06-23 17:58:22 --> Helper loaded: array_helper
INFO - 2019-06-23 17:58:22 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:58:22 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:58:22 --> Database Driver Class Initialized
INFO - 2019-06-23 17:58:22 --> Controller Class Initialized
INFO - 2019-06-23 23:58:22 --> Helper loaded: language_helper
INFO - 2019-06-23 23:58:22 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:58:22 --> Model Class Initialized
INFO - 2019-06-23 23:58:22 --> Model Class Initialized
INFO - 2019-06-23 23:58:22 --> Model Class Initialized
INFO - 2019-06-23 23:58:22 --> Model Class Initialized
INFO - 2019-06-23 23:58:22 --> Model Class Initialized
INFO - 2019-06-23 23:58:22 --> Final output sent to browser
DEBUG - 2019-06-23 23:58:22 --> Total execution time: 0.4609
INFO - 2019-06-23 17:58:22 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:58:22 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:58:22 --> Database Driver Class Initialized
INFO - 2019-06-23 17:58:22 --> Controller Class Initialized
INFO - 2019-06-23 23:58:22 --> Helper loaded: language_helper
INFO - 2019-06-23 23:58:22 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:58:22 --> Model Class Initialized
INFO - 2019-06-23 23:58:22 --> Model Class Initialized
INFO - 2019-06-23 23:58:22 --> Model Class Initialized
INFO - 2019-06-23 23:58:22 --> Model Class Initialized
INFO - 2019-06-23 23:58:22 --> Final output sent to browser
DEBUG - 2019-06-23 23:58:22 --> Total execution time: 0.5986
INFO - 2019-06-23 17:59:05 --> Config Class Initialized
INFO - 2019-06-23 17:59:05 --> Config Class Initialized
INFO - 2019-06-23 17:59:05 --> Hooks Class Initialized
INFO - 2019-06-23 17:59:05 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:59:05 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 17:59:05 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:59:05 --> Utf8 Class Initialized
INFO - 2019-06-23 17:59:05 --> Utf8 Class Initialized
INFO - 2019-06-23 17:59:05 --> URI Class Initialized
INFO - 2019-06-23 17:59:05 --> URI Class Initialized
INFO - 2019-06-23 17:59:05 --> Router Class Initialized
INFO - 2019-06-23 17:59:05 --> Router Class Initialized
INFO - 2019-06-23 17:59:05 --> Output Class Initialized
INFO - 2019-06-23 17:59:05 --> Output Class Initialized
INFO - 2019-06-23 17:59:05 --> Security Class Initialized
INFO - 2019-06-23 17:59:05 --> Security Class Initialized
DEBUG - 2019-06-23 17:59:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:59:05 --> Input Class Initialized
DEBUG - 2019-06-23 17:59:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:59:05 --> Input Class Initialized
INFO - 2019-06-23 17:59:05 --> Language Class Initialized
INFO - 2019-06-23 17:59:05 --> Language Class Initialized
INFO - 2019-06-23 17:59:05 --> Language Class Initialized
INFO - 2019-06-23 17:59:05 --> Language Class Initialized
INFO - 2019-06-23 17:59:05 --> Config Class Initialized
INFO - 2019-06-23 17:59:05 --> Loader Class Initialized
INFO - 2019-06-23 17:59:05 --> Config Class Initialized
INFO - 2019-06-23 17:59:05 --> Loader Class Initialized
DEBUG - 2019-06-23 17:59:05 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 17:59:05 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:59:05 --> Helper loaded: url_helper
INFO - 2019-06-23 17:59:05 --> Helper loaded: url_helper
INFO - 2019-06-23 17:59:05 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:59:05 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:59:05 --> Helper loaded: string_helper
INFO - 2019-06-23 17:59:05 --> Helper loaded: string_helper
INFO - 2019-06-23 17:59:05 --> Helper loaded: array_helper
INFO - 2019-06-23 17:59:06 --> Helper loaded: array_helper
INFO - 2019-06-23 17:59:06 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:59:06 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:59:06 --> Database Driver Class Initialized
INFO - 2019-06-23 17:59:06 --> Controller Class Initialized
INFO - 2019-06-23 23:59:06 --> Helper loaded: language_helper
INFO - 2019-06-23 23:59:06 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:59:06 --> Model Class Initialized
INFO - 2019-06-23 23:59:06 --> Model Class Initialized
INFO - 2019-06-23 23:59:06 --> Model Class Initialized
INFO - 2019-06-23 23:59:06 --> Model Class Initialized
INFO - 2019-06-23 23:59:06 --> Model Class Initialized
INFO - 2019-06-23 23:59:06 --> Final output sent to browser
DEBUG - 2019-06-23 23:59:06 --> Total execution time: 0.5004
INFO - 2019-06-23 17:59:06 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:59:06 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:59:06 --> Database Driver Class Initialized
INFO - 2019-06-23 17:59:06 --> Controller Class Initialized
INFO - 2019-06-23 23:59:06 --> Helper loaded: language_helper
INFO - 2019-06-23 23:59:06 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:59:06 --> Model Class Initialized
INFO - 2019-06-23 23:59:06 --> Model Class Initialized
INFO - 2019-06-23 23:59:06 --> Model Class Initialized
INFO - 2019-06-23 23:59:06 --> Model Class Initialized
INFO - 2019-06-23 23:59:06 --> Final output sent to browser
DEBUG - 2019-06-23 23:59:06 --> Total execution time: 0.6333
INFO - 2019-06-23 17:59:09 --> Config Class Initialized
INFO - 2019-06-23 17:59:09 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:59:09 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:59:09 --> Utf8 Class Initialized
INFO - 2019-06-23 17:59:09 --> URI Class Initialized
INFO - 2019-06-23 17:59:09 --> Router Class Initialized
INFO - 2019-06-23 17:59:09 --> Output Class Initialized
INFO - 2019-06-23 17:59:09 --> Security Class Initialized
DEBUG - 2019-06-23 17:59:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:59:09 --> Input Class Initialized
INFO - 2019-06-23 17:59:09 --> Language Class Initialized
INFO - 2019-06-23 17:59:09 --> Language Class Initialized
INFO - 2019-06-23 17:59:09 --> Config Class Initialized
INFO - 2019-06-23 17:59:09 --> Loader Class Initialized
DEBUG - 2019-06-23 17:59:09 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:59:09 --> Helper loaded: url_helper
INFO - 2019-06-23 17:59:09 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:59:09 --> Helper loaded: string_helper
INFO - 2019-06-23 17:59:09 --> Helper loaded: array_helper
INFO - 2019-06-23 17:59:09 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:59:09 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:59:09 --> Database Driver Class Initialized
INFO - 2019-06-23 17:59:09 --> Controller Class Initialized
INFO - 2019-06-23 23:59:09 --> Helper loaded: language_helper
INFO - 2019-06-23 23:59:09 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:59:09 --> Model Class Initialized
INFO - 2019-06-23 23:59:09 --> Model Class Initialized
INFO - 2019-06-23 23:59:09 --> Model Class Initialized
INFO - 2019-06-23 23:59:09 --> Model Class Initialized
INFO - 2019-06-23 23:59:09 --> Final output sent to browser
DEBUG - 2019-06-23 23:59:09 --> Total execution time: 0.2994
INFO - 2019-06-23 17:59:15 --> Config Class Initialized
INFO - 2019-06-23 17:59:15 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:59:15 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:59:15 --> Utf8 Class Initialized
INFO - 2019-06-23 17:59:15 --> URI Class Initialized
INFO - 2019-06-23 17:59:15 --> Router Class Initialized
INFO - 2019-06-23 17:59:15 --> Output Class Initialized
INFO - 2019-06-23 17:59:15 --> Security Class Initialized
DEBUG - 2019-06-23 17:59:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:59:15 --> Input Class Initialized
INFO - 2019-06-23 17:59:15 --> Language Class Initialized
INFO - 2019-06-23 17:59:15 --> Language Class Initialized
INFO - 2019-06-23 17:59:15 --> Config Class Initialized
INFO - 2019-06-23 17:59:15 --> Loader Class Initialized
DEBUG - 2019-06-23 17:59:15 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:59:15 --> Helper loaded: url_helper
INFO - 2019-06-23 17:59:15 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:59:15 --> Helper loaded: string_helper
INFO - 2019-06-23 17:59:15 --> Helper loaded: array_helper
INFO - 2019-06-23 17:59:16 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:59:16 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:59:16 --> Database Driver Class Initialized
INFO - 2019-06-23 17:59:16 --> Controller Class Initialized
INFO - 2019-06-23 23:59:16 --> Helper loaded: language_helper
INFO - 2019-06-23 23:59:16 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:59:16 --> Model Class Initialized
INFO - 2019-06-23 23:59:16 --> Model Class Initialized
INFO - 2019-06-23 23:59:16 --> Model Class Initialized
INFO - 2019-06-23 23:59:16 --> Model Class Initialized
INFO - 2019-06-23 23:59:16 --> Final output sent to browser
DEBUG - 2019-06-23 23:59:16 --> Total execution time: 0.3096
INFO - 2019-06-23 17:59:29 --> Config Class Initialized
INFO - 2019-06-23 17:59:29 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:59:29 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:59:29 --> Utf8 Class Initialized
INFO - 2019-06-23 17:59:29 --> URI Class Initialized
INFO - 2019-06-23 17:59:29 --> Router Class Initialized
INFO - 2019-06-23 17:59:29 --> Output Class Initialized
INFO - 2019-06-23 17:59:29 --> Security Class Initialized
DEBUG - 2019-06-23 17:59:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:59:29 --> Input Class Initialized
INFO - 2019-06-23 17:59:29 --> Language Class Initialized
INFO - 2019-06-23 17:59:29 --> Language Class Initialized
INFO - 2019-06-23 17:59:29 --> Config Class Initialized
INFO - 2019-06-23 17:59:29 --> Loader Class Initialized
DEBUG - 2019-06-23 17:59:29 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:59:29 --> Helper loaded: url_helper
INFO - 2019-06-23 17:59:29 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:59:29 --> Helper loaded: string_helper
INFO - 2019-06-23 17:59:29 --> Helper loaded: array_helper
INFO - 2019-06-23 17:59:29 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:59:29 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:59:29 --> Database Driver Class Initialized
INFO - 2019-06-23 17:59:29 --> Controller Class Initialized
INFO - 2019-06-23 23:59:29 --> Helper loaded: language_helper
INFO - 2019-06-23 23:59:29 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:59:29 --> Model Class Initialized
INFO - 2019-06-23 23:59:29 --> Model Class Initialized
INFO - 2019-06-23 23:59:29 --> Model Class Initialized
INFO - 2019-06-23 23:59:29 --> Model Class Initialized
INFO - 2019-06-23 23:59:29 --> Final output sent to browser
DEBUG - 2019-06-23 23:59:29 --> Total execution time: 0.2923
INFO - 2019-06-23 17:59:31 --> Config Class Initialized
INFO - 2019-06-23 17:59:31 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:59:31 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:59:31 --> Utf8 Class Initialized
INFO - 2019-06-23 17:59:31 --> URI Class Initialized
INFO - 2019-06-23 17:59:31 --> Router Class Initialized
INFO - 2019-06-23 17:59:31 --> Output Class Initialized
INFO - 2019-06-23 17:59:31 --> Security Class Initialized
DEBUG - 2019-06-23 17:59:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:59:31 --> Input Class Initialized
INFO - 2019-06-23 17:59:31 --> Language Class Initialized
INFO - 2019-06-23 17:59:31 --> Language Class Initialized
INFO - 2019-06-23 17:59:31 --> Config Class Initialized
INFO - 2019-06-23 17:59:31 --> Loader Class Initialized
DEBUG - 2019-06-23 17:59:31 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:59:31 --> Helper loaded: url_helper
INFO - 2019-06-23 17:59:31 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:59:31 --> Helper loaded: string_helper
INFO - 2019-06-23 17:59:31 --> Helper loaded: array_helper
INFO - 2019-06-23 17:59:31 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:59:31 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:59:31 --> Database Driver Class Initialized
INFO - 2019-06-23 17:59:31 --> Controller Class Initialized
INFO - 2019-06-23 23:59:31 --> Helper loaded: language_helper
INFO - 2019-06-23 23:59:31 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:59:31 --> Model Class Initialized
INFO - 2019-06-23 23:59:31 --> Model Class Initialized
INFO - 2019-06-23 23:59:31 --> Model Class Initialized
INFO - 2019-06-23 23:59:31 --> Model Class Initialized
INFO - 2019-06-23 23:59:31 --> Final output sent to browser
DEBUG - 2019-06-23 23:59:31 --> Total execution time: 0.3256
INFO - 2019-06-23 17:59:36 --> Config Class Initialized
INFO - 2019-06-23 17:59:36 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:59:36 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:59:36 --> Utf8 Class Initialized
INFO - 2019-06-23 17:59:36 --> URI Class Initialized
INFO - 2019-06-23 17:59:36 --> Router Class Initialized
INFO - 2019-06-23 17:59:36 --> Output Class Initialized
INFO - 2019-06-23 17:59:36 --> Security Class Initialized
DEBUG - 2019-06-23 17:59:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:59:36 --> Input Class Initialized
INFO - 2019-06-23 17:59:36 --> Language Class Initialized
INFO - 2019-06-23 17:59:36 --> Language Class Initialized
INFO - 2019-06-23 17:59:36 --> Config Class Initialized
INFO - 2019-06-23 17:59:36 --> Loader Class Initialized
DEBUG - 2019-06-23 17:59:36 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:59:36 --> Helper loaded: url_helper
INFO - 2019-06-23 17:59:36 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:59:36 --> Helper loaded: string_helper
INFO - 2019-06-23 17:59:36 --> Helper loaded: array_helper
INFO - 2019-06-23 17:59:36 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:59:36 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:59:36 --> Database Driver Class Initialized
INFO - 2019-06-23 17:59:36 --> Controller Class Initialized
INFO - 2019-06-23 23:59:36 --> Helper loaded: language_helper
INFO - 2019-06-23 23:59:36 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:59:36 --> Model Class Initialized
INFO - 2019-06-23 23:59:36 --> Model Class Initialized
INFO - 2019-06-23 23:59:36 --> Model Class Initialized
INFO - 2019-06-23 23:59:36 --> Model Class Initialized
INFO - 2019-06-23 23:59:36 --> Final output sent to browser
DEBUG - 2019-06-23 23:59:36 --> Total execution time: 0.3148
INFO - 2019-06-23 17:59:42 --> Config Class Initialized
INFO - 2019-06-23 17:59:42 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:59:42 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:59:42 --> Utf8 Class Initialized
INFO - 2019-06-23 17:59:42 --> URI Class Initialized
INFO - 2019-06-23 17:59:42 --> Router Class Initialized
INFO - 2019-06-23 17:59:42 --> Output Class Initialized
INFO - 2019-06-23 17:59:42 --> Security Class Initialized
DEBUG - 2019-06-23 17:59:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:59:42 --> Input Class Initialized
INFO - 2019-06-23 17:59:42 --> Language Class Initialized
INFO - 2019-06-23 17:59:42 --> Language Class Initialized
INFO - 2019-06-23 17:59:42 --> Config Class Initialized
INFO - 2019-06-23 17:59:42 --> Loader Class Initialized
DEBUG - 2019-06-23 17:59:42 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:59:42 --> Helper loaded: url_helper
INFO - 2019-06-23 17:59:42 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:59:42 --> Helper loaded: string_helper
INFO - 2019-06-23 17:59:42 --> Helper loaded: array_helper
INFO - 2019-06-23 17:59:42 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:59:42 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:59:42 --> Database Driver Class Initialized
INFO - 2019-06-23 17:59:43 --> Controller Class Initialized
INFO - 2019-06-23 23:59:43 --> Helper loaded: language_helper
INFO - 2019-06-23 23:59:43 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:59:43 --> Model Class Initialized
INFO - 2019-06-23 23:59:43 --> Model Class Initialized
INFO - 2019-06-23 23:59:43 --> Model Class Initialized
INFO - 2019-06-23 23:59:43 --> Model Class Initialized
INFO - 2019-06-23 23:59:43 --> Final output sent to browser
DEBUG - 2019-06-23 23:59:43 --> Total execution time: 0.3057
INFO - 2019-06-23 17:59:52 --> Config Class Initialized
INFO - 2019-06-23 17:59:52 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:59:52 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:59:52 --> Utf8 Class Initialized
INFO - 2019-06-23 17:59:52 --> URI Class Initialized
INFO - 2019-06-23 17:59:52 --> Router Class Initialized
INFO - 2019-06-23 17:59:52 --> Output Class Initialized
INFO - 2019-06-23 17:59:52 --> Security Class Initialized
DEBUG - 2019-06-23 17:59:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:59:52 --> Input Class Initialized
INFO - 2019-06-23 17:59:52 --> Language Class Initialized
INFO - 2019-06-23 17:59:52 --> Language Class Initialized
INFO - 2019-06-23 17:59:52 --> Config Class Initialized
INFO - 2019-06-23 17:59:52 --> Loader Class Initialized
DEBUG - 2019-06-23 17:59:52 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:59:52 --> Helper loaded: url_helper
INFO - 2019-06-23 17:59:52 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:59:52 --> Helper loaded: string_helper
INFO - 2019-06-23 17:59:52 --> Helper loaded: array_helper
INFO - 2019-06-23 17:59:52 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:59:52 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:59:52 --> Database Driver Class Initialized
INFO - 2019-06-23 17:59:52 --> Controller Class Initialized
INFO - 2019-06-23 23:59:52 --> Helper loaded: language_helper
INFO - 2019-06-23 23:59:52 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:59:52 --> Model Class Initialized
INFO - 2019-06-23 23:59:52 --> Model Class Initialized
INFO - 2019-06-23 23:59:52 --> Model Class Initialized
INFO - 2019-06-23 23:59:52 --> Model Class Initialized
INFO - 2019-06-23 23:59:52 --> Final output sent to browser
DEBUG - 2019-06-23 23:59:52 --> Total execution time: 0.3150
INFO - 2019-06-23 17:59:55 --> Config Class Initialized
INFO - 2019-06-23 17:59:55 --> Hooks Class Initialized
DEBUG - 2019-06-23 17:59:55 --> UTF-8 Support Enabled
INFO - 2019-06-23 17:59:55 --> Utf8 Class Initialized
INFO - 2019-06-23 17:59:55 --> URI Class Initialized
INFO - 2019-06-23 17:59:55 --> Router Class Initialized
INFO - 2019-06-23 17:59:55 --> Output Class Initialized
INFO - 2019-06-23 17:59:55 --> Security Class Initialized
DEBUG - 2019-06-23 17:59:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 17:59:55 --> Input Class Initialized
INFO - 2019-06-23 17:59:55 --> Language Class Initialized
INFO - 2019-06-23 17:59:55 --> Language Class Initialized
INFO - 2019-06-23 17:59:55 --> Config Class Initialized
INFO - 2019-06-23 17:59:55 --> Loader Class Initialized
DEBUG - 2019-06-23 17:59:55 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 17:59:55 --> Helper loaded: url_helper
INFO - 2019-06-23 17:59:55 --> Helper loaded: inflector_helper
INFO - 2019-06-23 17:59:55 --> Helper loaded: string_helper
INFO - 2019-06-23 17:59:55 --> Helper loaded: array_helper
INFO - 2019-06-23 17:59:55 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 17:59:55 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 17:59:55 --> Database Driver Class Initialized
INFO - 2019-06-23 17:59:55 --> Controller Class Initialized
INFO - 2019-06-23 23:59:55 --> Helper loaded: language_helper
INFO - 2019-06-23 23:59:55 --> Language file loaded: language/english/general_lang.php
INFO - 2019-06-23 23:59:55 --> Model Class Initialized
INFO - 2019-06-23 23:59:55 --> Model Class Initialized
INFO - 2019-06-23 23:59:55 --> Model Class Initialized
INFO - 2019-06-23 23:59:55 --> Model Class Initialized
INFO - 2019-06-23 23:59:55 --> Final output sent to browser
DEBUG - 2019-06-23 23:59:55 --> Total execution time: 0.2995
INFO - 2019-06-23 18:00:02 --> Config Class Initialized
INFO - 2019-06-23 18:00:02 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:00:02 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:00:02 --> Utf8 Class Initialized
INFO - 2019-06-23 18:00:02 --> URI Class Initialized
INFO - 2019-06-23 18:00:02 --> Router Class Initialized
INFO - 2019-06-23 18:00:02 --> Output Class Initialized
INFO - 2019-06-23 18:00:02 --> Security Class Initialized
DEBUG - 2019-06-23 18:00:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:00:02 --> Input Class Initialized
INFO - 2019-06-23 18:00:02 --> Language Class Initialized
INFO - 2019-06-23 18:00:02 --> Language Class Initialized
INFO - 2019-06-23 18:00:02 --> Config Class Initialized
INFO - 2019-06-23 18:00:02 --> Loader Class Initialized
DEBUG - 2019-06-23 18:00:02 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:00:02 --> Helper loaded: url_helper
INFO - 2019-06-23 18:00:02 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:00:02 --> Helper loaded: string_helper
INFO - 2019-06-23 18:00:02 --> Helper loaded: array_helper
INFO - 2019-06-23 18:00:02 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:00:02 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:00:02 --> Database Driver Class Initialized
INFO - 2019-06-23 18:00:02 --> Controller Class Initialized
INFO - 2019-06-23 18:00:05 --> Config Class Initialized
INFO - 2019-06-23 18:00:05 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:00:05 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:00:05 --> Utf8 Class Initialized
INFO - 2019-06-23 18:00:05 --> URI Class Initialized
INFO - 2019-06-23 18:00:05 --> Router Class Initialized
INFO - 2019-06-23 18:00:05 --> Output Class Initialized
INFO - 2019-06-23 18:00:05 --> Security Class Initialized
DEBUG - 2019-06-23 18:00:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:00:05 --> Input Class Initialized
INFO - 2019-06-23 18:00:05 --> Language Class Initialized
INFO - 2019-06-23 18:00:05 --> Language Class Initialized
INFO - 2019-06-23 18:00:05 --> Config Class Initialized
INFO - 2019-06-23 18:00:05 --> Loader Class Initialized
DEBUG - 2019-06-23 18:00:05 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:00:05 --> Helper loaded: url_helper
INFO - 2019-06-23 18:00:05 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:00:05 --> Helper loaded: string_helper
INFO - 2019-06-23 18:00:05 --> Helper loaded: array_helper
INFO - 2019-06-23 18:00:05 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:00:05 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:00:05 --> Database Driver Class Initialized
INFO - 2019-06-23 18:00:05 --> Controller Class Initialized
INFO - 2019-06-23 18:00:29 --> Config Class Initialized
INFO - 2019-06-23 18:00:29 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:00:29 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:00:29 --> Utf8 Class Initialized
INFO - 2019-06-23 18:00:29 --> URI Class Initialized
INFO - 2019-06-23 18:00:29 --> Router Class Initialized
INFO - 2019-06-23 18:00:29 --> Output Class Initialized
INFO - 2019-06-23 18:00:29 --> Security Class Initialized
DEBUG - 2019-06-23 18:00:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:00:29 --> Input Class Initialized
INFO - 2019-06-23 18:00:29 --> Language Class Initialized
INFO - 2019-06-23 18:00:29 --> Language Class Initialized
INFO - 2019-06-23 18:00:29 --> Config Class Initialized
INFO - 2019-06-23 18:00:29 --> Loader Class Initialized
DEBUG - 2019-06-23 18:00:29 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:00:29 --> Helper loaded: url_helper
INFO - 2019-06-23 18:00:29 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:00:29 --> Helper loaded: string_helper
INFO - 2019-06-23 18:00:29 --> Helper loaded: array_helper
INFO - 2019-06-23 18:00:29 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:00:29 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:00:29 --> Database Driver Class Initialized
INFO - 2019-06-23 18:00:29 --> Controller Class Initialized
INFO - 2019-06-23 18:00:34 --> Config Class Initialized
INFO - 2019-06-23 18:00:34 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:00:34 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:00:34 --> Utf8 Class Initialized
INFO - 2019-06-23 18:00:34 --> URI Class Initialized
INFO - 2019-06-23 18:00:34 --> Router Class Initialized
INFO - 2019-06-23 18:00:34 --> Output Class Initialized
INFO - 2019-06-23 18:00:34 --> Security Class Initialized
DEBUG - 2019-06-23 18:00:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:00:34 --> Input Class Initialized
INFO - 2019-06-23 18:00:34 --> Language Class Initialized
INFO - 2019-06-23 18:00:34 --> Language Class Initialized
INFO - 2019-06-23 18:00:34 --> Config Class Initialized
INFO - 2019-06-23 18:00:34 --> Loader Class Initialized
DEBUG - 2019-06-23 18:00:34 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:00:34 --> Helper loaded: url_helper
INFO - 2019-06-23 18:00:34 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:00:34 --> Helper loaded: string_helper
INFO - 2019-06-23 18:00:34 --> Helper loaded: array_helper
INFO - 2019-06-23 18:00:34 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:00:34 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:00:34 --> Database Driver Class Initialized
INFO - 2019-06-23 18:00:34 --> Controller Class Initialized
INFO - 2019-06-23 18:00:39 --> Config Class Initialized
INFO - 2019-06-23 18:00:39 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:00:39 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:00:39 --> Utf8 Class Initialized
INFO - 2019-06-23 18:00:39 --> URI Class Initialized
INFO - 2019-06-23 18:00:39 --> Router Class Initialized
INFO - 2019-06-23 18:00:39 --> Output Class Initialized
INFO - 2019-06-23 18:00:39 --> Security Class Initialized
DEBUG - 2019-06-23 18:00:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:00:39 --> Input Class Initialized
INFO - 2019-06-23 18:00:39 --> Language Class Initialized
INFO - 2019-06-23 18:00:39 --> Language Class Initialized
INFO - 2019-06-23 18:00:39 --> Config Class Initialized
INFO - 2019-06-23 18:00:39 --> Loader Class Initialized
DEBUG - 2019-06-23 18:00:39 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:00:39 --> Helper loaded: url_helper
INFO - 2019-06-23 18:00:39 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:00:39 --> Helper loaded: string_helper
INFO - 2019-06-23 18:00:39 --> Helper loaded: array_helper
INFO - 2019-06-23 18:00:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:00:39 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:00:39 --> Database Driver Class Initialized
INFO - 2019-06-23 18:00:39 --> Controller Class Initialized
INFO - 2019-06-23 18:01:23 --> Config Class Initialized
INFO - 2019-06-23 18:01:23 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:01:23 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:01:23 --> Utf8 Class Initialized
INFO - 2019-06-23 18:01:23 --> URI Class Initialized
INFO - 2019-06-23 18:01:23 --> Router Class Initialized
INFO - 2019-06-23 18:01:23 --> Output Class Initialized
INFO - 2019-06-23 18:01:23 --> Security Class Initialized
DEBUG - 2019-06-23 18:01:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:01:23 --> Input Class Initialized
INFO - 2019-06-23 18:01:23 --> Language Class Initialized
INFO - 2019-06-23 18:01:24 --> Language Class Initialized
INFO - 2019-06-23 18:01:24 --> Config Class Initialized
INFO - 2019-06-23 18:01:24 --> Loader Class Initialized
DEBUG - 2019-06-23 18:01:24 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:01:24 --> Helper loaded: url_helper
INFO - 2019-06-23 18:01:24 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:01:24 --> Helper loaded: string_helper
INFO - 2019-06-23 18:01:24 --> Helper loaded: array_helper
INFO - 2019-06-23 18:01:24 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:01:24 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:01:24 --> Database Driver Class Initialized
INFO - 2019-06-23 18:01:24 --> Controller Class Initialized
INFO - 2019-06-23 18:01:27 --> Config Class Initialized
INFO - 2019-06-23 18:01:27 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:01:27 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:01:27 --> Utf8 Class Initialized
INFO - 2019-06-23 18:01:27 --> URI Class Initialized
INFO - 2019-06-23 18:01:27 --> Router Class Initialized
INFO - 2019-06-23 18:01:27 --> Output Class Initialized
INFO - 2019-06-23 18:01:27 --> Security Class Initialized
DEBUG - 2019-06-23 18:01:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:01:27 --> Input Class Initialized
INFO - 2019-06-23 18:01:27 --> Language Class Initialized
INFO - 2019-06-23 18:01:27 --> Language Class Initialized
INFO - 2019-06-23 18:01:27 --> Config Class Initialized
INFO - 2019-06-23 18:01:27 --> Loader Class Initialized
DEBUG - 2019-06-23 18:01:27 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:01:27 --> Helper loaded: url_helper
INFO - 2019-06-23 18:01:27 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:01:27 --> Helper loaded: string_helper
INFO - 2019-06-23 18:01:27 --> Helper loaded: array_helper
INFO - 2019-06-23 18:01:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:01:27 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:01:27 --> Database Driver Class Initialized
INFO - 2019-06-23 18:01:27 --> Controller Class Initialized
INFO - 2019-06-23 18:03:53 --> Config Class Initialized
INFO - 2019-06-23 18:03:53 --> Hooks Class Initialized
INFO - 2019-06-23 18:03:53 --> Config Class Initialized
DEBUG - 2019-06-23 18:03:53 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:03:53 --> Hooks Class Initialized
INFO - 2019-06-23 18:03:53 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:03:53 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:03:53 --> URI Class Initialized
INFO - 2019-06-23 18:03:53 --> Utf8 Class Initialized
INFO - 2019-06-23 18:03:53 --> URI Class Initialized
INFO - 2019-06-23 18:03:53 --> Router Class Initialized
INFO - 2019-06-23 18:03:53 --> Router Class Initialized
INFO - 2019-06-23 18:03:53 --> Output Class Initialized
INFO - 2019-06-23 18:03:53 --> Security Class Initialized
INFO - 2019-06-23 18:03:53 --> Output Class Initialized
INFO - 2019-06-23 18:03:53 --> Security Class Initialized
DEBUG - 2019-06-23 18:03:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:03:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:03:53 --> Input Class Initialized
INFO - 2019-06-23 18:03:54 --> Config Class Initialized
INFO - 2019-06-23 18:03:54 --> Input Class Initialized
INFO - 2019-06-23 18:03:54 --> Language Class Initialized
INFO - 2019-06-23 18:03:54 --> Config Class Initialized
INFO - 2019-06-23 18:03:54 --> Language Class Initialized
INFO - 2019-06-23 18:03:54 --> Hooks Class Initialized
INFO - 2019-06-23 18:03:54 --> Hooks Class Initialized
INFO - 2019-06-23 18:03:54 --> Language Class Initialized
INFO - 2019-06-23 18:03:54 --> Config Class Initialized
INFO - 2019-06-23 18:03:54 --> Language Class Initialized
DEBUG - 2019-06-23 18:03:54 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:03:54 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:03:54 --> Loader Class Initialized
INFO - 2019-06-23 18:03:54 --> Utf8 Class Initialized
INFO - 2019-06-23 18:03:54 --> Config Class Initialized
INFO - 2019-06-23 18:03:54 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:03:54 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:03:54 --> Loader Class Initialized
INFO - 2019-06-23 18:03:54 --> URI Class Initialized
INFO - 2019-06-23 18:03:54 --> URI Class Initialized
INFO - 2019-06-23 18:03:54 --> Helper loaded: url_helper
DEBUG - 2019-06-23 18:03:54 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:03:54 --> Router Class Initialized
INFO - 2019-06-23 18:03:54 --> Router Class Initialized
INFO - 2019-06-23 18:03:54 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:03:54 --> Helper loaded: url_helper
INFO - 2019-06-23 18:03:54 --> Output Class Initialized
INFO - 2019-06-23 18:03:54 --> Output Class Initialized
INFO - 2019-06-23 18:03:54 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:03:54 --> Helper loaded: string_helper
INFO - 2019-06-23 18:03:54 --> Security Class Initialized
INFO - 2019-06-23 18:03:54 --> Security Class Initialized
INFO - 2019-06-23 18:03:54 --> Helper loaded: string_helper
INFO - 2019-06-23 18:03:54 --> Helper loaded: array_helper
DEBUG - 2019-06-23 18:03:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:03:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:03:54 --> Helper loaded: array_helper
INFO - 2019-06-23 18:03:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:03:54 --> Input Class Initialized
INFO - 2019-06-23 18:03:54 --> Input Class Initialized
DEBUG - 2019-06-23 18:03:54 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:03:54 --> Language Class Initialized
INFO - 2019-06-23 18:03:54 --> Language Class Initialized
INFO - 2019-06-23 18:03:54 --> Database Driver Class Initialized
INFO - 2019-06-23 18:03:54 --> Language Class Initialized
INFO - 2019-06-23 18:03:54 --> Language Class Initialized
INFO - 2019-06-23 18:03:54 --> Controller Class Initialized
INFO - 2019-06-23 18:03:54 --> Config Class Initialized
INFO - 2019-06-23 18:03:54 --> Config Class Initialized
INFO - 2019-06-23 18:03:54 --> Loader Class Initialized
INFO - 2019-06-23 18:03:54 --> Loader Class Initialized
DEBUG - 2019-06-23 18:03:54 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:03:54 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:03:54 --> Helper loaded: url_helper
INFO - 2019-06-23 18:03:54 --> Helper loaded: url_helper
INFO - 2019-06-23 18:03:54 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:03:54 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:03:54 --> Helper loaded: string_helper
INFO - 2019-06-23 18:03:54 --> Helper loaded: string_helper
INFO - 2019-06-23 18:03:54 --> Helper loaded: array_helper
INFO - 2019-06-23 18:03:54 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:03:54 --> Helper loaded: array_helper
DEBUG - 2019-06-23 18:03:54 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:03:54 --> Database Driver Class Initialized
INFO - 2019-06-23 18:03:54 --> Controller Class Initialized
INFO - 2019-06-23 18:03:54 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:03:54 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:03:54 --> Database Driver Class Initialized
INFO - 2019-06-23 18:03:54 --> Controller Class Initialized
INFO - 2019-06-23 18:03:54 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:03:54 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:03:54 --> Database Driver Class Initialized
INFO - 2019-06-23 18:03:54 --> Controller Class Initialized
INFO - 2019-06-23 18:04:45 --> Config Class Initialized
INFO - 2019-06-23 18:04:45 --> Hooks Class Initialized
INFO - 2019-06-23 18:04:45 --> Config Class Initialized
DEBUG - 2019-06-23 18:04:45 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:04:45 --> Hooks Class Initialized
INFO - 2019-06-23 18:04:45 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:04:45 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:04:45 --> URI Class Initialized
INFO - 2019-06-23 18:04:45 --> Utf8 Class Initialized
INFO - 2019-06-23 18:04:45 --> URI Class Initialized
INFO - 2019-06-23 18:04:45 --> Router Class Initialized
INFO - 2019-06-23 18:04:45 --> Router Class Initialized
INFO - 2019-06-23 18:04:45 --> Output Class Initialized
INFO - 2019-06-23 18:04:45 --> Output Class Initialized
INFO - 2019-06-23 18:04:45 --> Security Class Initialized
INFO - 2019-06-23 18:04:45 --> Security Class Initialized
DEBUG - 2019-06-23 18:04:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:04:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:04:45 --> Input Class Initialized
INFO - 2019-06-23 18:04:45 --> Input Class Initialized
INFO - 2019-06-23 18:04:45 --> Language Class Initialized
INFO - 2019-06-23 18:04:45 --> Language Class Initialized
INFO - 2019-06-23 18:04:45 --> Language Class Initialized
INFO - 2019-06-23 18:04:45 --> Language Class Initialized
INFO - 2019-06-23 18:04:45 --> Config Class Initialized
INFO - 2019-06-23 18:04:45 --> Config Class Initialized
INFO - 2019-06-23 18:04:45 --> Loader Class Initialized
INFO - 2019-06-23 18:04:45 --> Loader Class Initialized
DEBUG - 2019-06-23 18:04:45 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:04:45 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:04:45 --> Helper loaded: url_helper
INFO - 2019-06-23 18:04:45 --> Helper loaded: url_helper
INFO - 2019-06-23 18:04:45 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:04:45 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:04:45 --> Helper loaded: string_helper
INFO - 2019-06-23 18:04:45 --> Helper loaded: string_helper
INFO - 2019-06-23 18:04:45 --> Helper loaded: array_helper
INFO - 2019-06-23 18:04:45 --> Helper loaded: array_helper
INFO - 2019-06-23 18:04:45 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:04:45 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:04:45 --> Database Driver Class Initialized
INFO - 2019-06-23 18:04:45 --> Controller Class Initialized
INFO - 2019-06-23 18:04:45 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:04:45 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:04:45 --> Database Driver Class Initialized
INFO - 2019-06-23 18:04:45 --> Controller Class Initialized
INFO - 2019-06-23 18:04:52 --> Config Class Initialized
INFO - 2019-06-23 18:04:52 --> Config Class Initialized
INFO - 2019-06-23 18:04:52 --> Hooks Class Initialized
INFO - 2019-06-23 18:04:52 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:04:52 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:04:52 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:04:52 --> Utf8 Class Initialized
INFO - 2019-06-23 18:04:52 --> Utf8 Class Initialized
INFO - 2019-06-23 18:04:52 --> URI Class Initialized
INFO - 2019-06-23 18:04:52 --> URI Class Initialized
INFO - 2019-06-23 18:04:52 --> Router Class Initialized
INFO - 2019-06-23 18:04:52 --> Router Class Initialized
INFO - 2019-06-23 18:04:52 --> Output Class Initialized
INFO - 2019-06-23 18:04:52 --> Output Class Initialized
INFO - 2019-06-23 18:04:52 --> Security Class Initialized
INFO - 2019-06-23 18:04:52 --> Security Class Initialized
DEBUG - 2019-06-23 18:04:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:04:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:04:52 --> Input Class Initialized
INFO - 2019-06-23 18:04:52 --> Input Class Initialized
INFO - 2019-06-23 18:04:52 --> Language Class Initialized
INFO - 2019-06-23 18:04:52 --> Language Class Initialized
INFO - 2019-06-23 18:04:52 --> Language Class Initialized
INFO - 2019-06-23 18:04:52 --> Language Class Initialized
INFO - 2019-06-23 18:04:52 --> Config Class Initialized
INFO - 2019-06-23 18:04:52 --> Config Class Initialized
INFO - 2019-06-23 18:04:52 --> Loader Class Initialized
INFO - 2019-06-23 18:04:52 --> Loader Class Initialized
DEBUG - 2019-06-23 18:04:52 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:04:52 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:04:52 --> Helper loaded: url_helper
INFO - 2019-06-23 18:04:52 --> Helper loaded: url_helper
INFO - 2019-06-23 18:04:52 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:04:52 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:04:52 --> Helper loaded: string_helper
INFO - 2019-06-23 18:04:52 --> Helper loaded: string_helper
INFO - 2019-06-23 18:04:52 --> Helper loaded: array_helper
INFO - 2019-06-23 18:04:52 --> Helper loaded: array_helper
INFO - 2019-06-23 18:04:52 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:04:52 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:04:52 --> Database Driver Class Initialized
INFO - 2019-06-23 18:04:52 --> Controller Class Initialized
INFO - 2019-06-23 18:04:52 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:04:52 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:04:52 --> Database Driver Class Initialized
INFO - 2019-06-23 18:04:53 --> Controller Class Initialized
INFO - 2019-06-23 18:04:55 --> Config Class Initialized
INFO - 2019-06-23 18:04:55 --> Config Class Initialized
INFO - 2019-06-23 18:04:55 --> Hooks Class Initialized
INFO - 2019-06-23 18:04:55 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:04:55 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:04:55 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:04:55 --> Utf8 Class Initialized
INFO - 2019-06-23 18:04:55 --> Utf8 Class Initialized
INFO - 2019-06-23 18:04:55 --> URI Class Initialized
INFO - 2019-06-23 18:04:55 --> URI Class Initialized
INFO - 2019-06-23 18:04:55 --> Router Class Initialized
INFO - 2019-06-23 18:04:55 --> Router Class Initialized
INFO - 2019-06-23 18:04:55 --> Output Class Initialized
INFO - 2019-06-23 18:04:55 --> Output Class Initialized
INFO - 2019-06-23 18:04:55 --> Security Class Initialized
INFO - 2019-06-23 18:04:55 --> Security Class Initialized
DEBUG - 2019-06-23 18:04:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:04:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:04:55 --> Input Class Initialized
INFO - 2019-06-23 18:04:55 --> Input Class Initialized
INFO - 2019-06-23 18:04:55 --> Language Class Initialized
INFO - 2019-06-23 18:04:55 --> Language Class Initialized
INFO - 2019-06-23 18:04:55 --> Language Class Initialized
INFO - 2019-06-23 18:04:55 --> Language Class Initialized
INFO - 2019-06-23 18:04:55 --> Config Class Initialized
INFO - 2019-06-23 18:04:55 --> Loader Class Initialized
INFO - 2019-06-23 18:04:55 --> Config Class Initialized
INFO - 2019-06-23 18:04:55 --> Loader Class Initialized
DEBUG - 2019-06-23 18:04:55 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:04:55 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:04:55 --> Helper loaded: url_helper
INFO - 2019-06-23 18:04:55 --> Helper loaded: url_helper
INFO - 2019-06-23 18:04:55 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:04:55 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:04:55 --> Helper loaded: string_helper
INFO - 2019-06-23 18:04:55 --> Helper loaded: string_helper
INFO - 2019-06-23 18:04:55 --> Helper loaded: array_helper
INFO - 2019-06-23 18:04:55 --> Helper loaded: array_helper
INFO - 2019-06-23 18:04:55 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:04:55 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:04:56 --> Database Driver Class Initialized
INFO - 2019-06-23 18:04:56 --> Controller Class Initialized
INFO - 2019-06-23 18:04:56 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:04:56 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:04:56 --> Database Driver Class Initialized
INFO - 2019-06-23 18:04:56 --> Controller Class Initialized
INFO - 2019-06-23 18:04:58 --> Config Class Initialized
INFO - 2019-06-23 18:04:58 --> Config Class Initialized
INFO - 2019-06-23 18:04:58 --> Hooks Class Initialized
INFO - 2019-06-23 18:04:58 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:04:58 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:04:58 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:04:58 --> Utf8 Class Initialized
INFO - 2019-06-23 18:04:58 --> Utf8 Class Initialized
INFO - 2019-06-23 18:04:58 --> URI Class Initialized
INFO - 2019-06-23 18:04:58 --> URI Class Initialized
INFO - 2019-06-23 18:04:58 --> Router Class Initialized
INFO - 2019-06-23 18:04:58 --> Router Class Initialized
INFO - 2019-06-23 18:04:58 --> Output Class Initialized
INFO - 2019-06-23 18:04:58 --> Output Class Initialized
INFO - 2019-06-23 18:04:58 --> Security Class Initialized
INFO - 2019-06-23 18:04:58 --> Security Class Initialized
DEBUG - 2019-06-23 18:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:04:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:04:58 --> Input Class Initialized
INFO - 2019-06-23 18:04:58 --> Input Class Initialized
INFO - 2019-06-23 18:04:58 --> Language Class Initialized
INFO - 2019-06-23 18:04:58 --> Language Class Initialized
INFO - 2019-06-23 18:04:58 --> Language Class Initialized
INFO - 2019-06-23 18:04:58 --> Language Class Initialized
INFO - 2019-06-23 18:04:58 --> Config Class Initialized
INFO - 2019-06-23 18:04:58 --> Config Class Initialized
INFO - 2019-06-23 18:04:58 --> Loader Class Initialized
INFO - 2019-06-23 18:04:58 --> Loader Class Initialized
DEBUG - 2019-06-23 18:04:58 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:04:58 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:04:58 --> Helper loaded: url_helper
INFO - 2019-06-23 18:04:58 --> Helper loaded: url_helper
INFO - 2019-06-23 18:04:58 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:04:58 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:04:58 --> Helper loaded: string_helper
INFO - 2019-06-23 18:04:58 --> Helper loaded: string_helper
INFO - 2019-06-23 18:04:58 --> Helper loaded: array_helper
INFO - 2019-06-23 18:04:58 --> Helper loaded: array_helper
INFO - 2019-06-23 18:04:58 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:04:58 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:04:58 --> Database Driver Class Initialized
INFO - 2019-06-23 18:04:58 --> Controller Class Initialized
INFO - 2019-06-23 18:04:58 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:04:58 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:04:58 --> Database Driver Class Initialized
INFO - 2019-06-23 18:04:58 --> Controller Class Initialized
INFO - 2019-06-23 18:05:07 --> Config Class Initialized
INFO - 2019-06-23 18:05:07 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:05:07 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:05:07 --> Utf8 Class Initialized
INFO - 2019-06-23 18:05:07 --> URI Class Initialized
INFO - 2019-06-23 18:05:07 --> Router Class Initialized
INFO - 2019-06-23 18:05:07 --> Output Class Initialized
INFO - 2019-06-23 18:05:07 --> Security Class Initialized
DEBUG - 2019-06-23 18:05:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:05:07 --> Input Class Initialized
INFO - 2019-06-23 18:05:07 --> Language Class Initialized
INFO - 2019-06-23 18:05:07 --> Language Class Initialized
INFO - 2019-06-23 18:05:07 --> Config Class Initialized
INFO - 2019-06-23 18:05:07 --> Loader Class Initialized
DEBUG - 2019-06-23 18:05:07 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:05:07 --> Helper loaded: url_helper
INFO - 2019-06-23 18:05:07 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:05:07 --> Helper loaded: string_helper
INFO - 2019-06-23 18:05:07 --> Helper loaded: array_helper
INFO - 2019-06-23 18:05:07 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:05:07 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:05:07 --> Database Driver Class Initialized
INFO - 2019-06-23 18:05:07 --> Controller Class Initialized
INFO - 2019-06-23 18:05:08 --> Config Class Initialized
INFO - 2019-06-23 18:05:08 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:05:08 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:05:08 --> Utf8 Class Initialized
INFO - 2019-06-23 18:05:08 --> URI Class Initialized
INFO - 2019-06-23 18:05:08 --> Router Class Initialized
INFO - 2019-06-23 18:05:08 --> Output Class Initialized
INFO - 2019-06-23 18:05:08 --> Security Class Initialized
DEBUG - 2019-06-23 18:05:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:05:08 --> Input Class Initialized
INFO - 2019-06-23 18:05:08 --> Language Class Initialized
INFO - 2019-06-23 18:05:08 --> Language Class Initialized
INFO - 2019-06-23 18:05:08 --> Config Class Initialized
INFO - 2019-06-23 18:05:08 --> Loader Class Initialized
DEBUG - 2019-06-23 18:05:08 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:05:08 --> Helper loaded: url_helper
INFO - 2019-06-23 18:05:08 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:05:08 --> Helper loaded: string_helper
INFO - 2019-06-23 18:05:08 --> Helper loaded: array_helper
INFO - 2019-06-23 18:05:08 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:05:08 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:05:08 --> Database Driver Class Initialized
INFO - 2019-06-23 18:05:08 --> Controller Class Initialized
INFO - 2019-06-23 18:05:40 --> Config Class Initialized
INFO - 2019-06-23 18:05:40 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:05:40 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:05:40 --> Utf8 Class Initialized
INFO - 2019-06-23 18:05:40 --> URI Class Initialized
INFO - 2019-06-23 18:05:40 --> Router Class Initialized
INFO - 2019-06-23 18:05:40 --> Output Class Initialized
INFO - 2019-06-23 18:05:40 --> Security Class Initialized
DEBUG - 2019-06-23 18:05:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:05:40 --> Input Class Initialized
INFO - 2019-06-23 18:05:40 --> Language Class Initialized
INFO - 2019-06-23 18:05:40 --> Language Class Initialized
INFO - 2019-06-23 18:05:40 --> Config Class Initialized
INFO - 2019-06-23 18:05:40 --> Loader Class Initialized
DEBUG - 2019-06-23 18:05:40 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:05:40 --> Helper loaded: url_helper
INFO - 2019-06-23 18:05:40 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:05:40 --> Helper loaded: string_helper
INFO - 2019-06-23 18:05:40 --> Helper loaded: array_helper
INFO - 2019-06-23 18:05:40 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:05:40 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:05:40 --> Database Driver Class Initialized
INFO - 2019-06-23 18:05:40 --> Controller Class Initialized
INFO - 2019-06-23 18:05:43 --> Config Class Initialized
INFO - 2019-06-23 18:05:43 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:05:43 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:05:43 --> Utf8 Class Initialized
INFO - 2019-06-23 18:05:43 --> URI Class Initialized
INFO - 2019-06-23 18:05:43 --> Router Class Initialized
INFO - 2019-06-23 18:05:43 --> Output Class Initialized
INFO - 2019-06-23 18:05:43 --> Security Class Initialized
DEBUG - 2019-06-23 18:05:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:05:43 --> Input Class Initialized
INFO - 2019-06-23 18:05:43 --> Language Class Initialized
INFO - 2019-06-23 18:05:43 --> Language Class Initialized
INFO - 2019-06-23 18:05:43 --> Config Class Initialized
INFO - 2019-06-23 18:05:43 --> Loader Class Initialized
DEBUG - 2019-06-23 18:05:43 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:05:43 --> Helper loaded: url_helper
INFO - 2019-06-23 18:05:43 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:05:43 --> Helper loaded: string_helper
INFO - 2019-06-23 18:05:43 --> Helper loaded: array_helper
INFO - 2019-06-23 18:05:43 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:05:43 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:05:43 --> Database Driver Class Initialized
INFO - 2019-06-23 18:05:43 --> Controller Class Initialized
INFO - 2019-06-23 18:05:47 --> Config Class Initialized
INFO - 2019-06-23 18:05:47 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:05:47 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:05:47 --> Utf8 Class Initialized
INFO - 2019-06-23 18:05:47 --> URI Class Initialized
INFO - 2019-06-23 18:05:47 --> Router Class Initialized
INFO - 2019-06-23 18:05:47 --> Output Class Initialized
INFO - 2019-06-23 18:05:47 --> Security Class Initialized
DEBUG - 2019-06-23 18:05:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:05:47 --> Input Class Initialized
INFO - 2019-06-23 18:05:47 --> Language Class Initialized
INFO - 2019-06-23 18:05:47 --> Language Class Initialized
INFO - 2019-06-23 18:05:48 --> Config Class Initialized
INFO - 2019-06-23 18:05:48 --> Loader Class Initialized
DEBUG - 2019-06-23 18:05:48 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:05:48 --> Helper loaded: url_helper
INFO - 2019-06-23 18:05:48 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:05:48 --> Helper loaded: string_helper
INFO - 2019-06-23 18:05:48 --> Helper loaded: array_helper
INFO - 2019-06-23 18:05:48 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:05:48 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:05:48 --> Database Driver Class Initialized
INFO - 2019-06-23 18:05:48 --> Controller Class Initialized
INFO - 2019-06-23 18:06:32 --> Config Class Initialized
INFO - 2019-06-23 18:06:32 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:06:32 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:06:33 --> Utf8 Class Initialized
INFO - 2019-06-23 18:06:33 --> URI Class Initialized
INFO - 2019-06-23 18:06:33 --> Router Class Initialized
INFO - 2019-06-23 18:06:33 --> Output Class Initialized
INFO - 2019-06-23 18:06:33 --> Security Class Initialized
DEBUG - 2019-06-23 18:06:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:06:33 --> Input Class Initialized
INFO - 2019-06-23 18:06:33 --> Language Class Initialized
INFO - 2019-06-23 18:06:33 --> Language Class Initialized
INFO - 2019-06-23 18:06:33 --> Config Class Initialized
INFO - 2019-06-23 18:06:33 --> Loader Class Initialized
DEBUG - 2019-06-23 18:06:33 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:06:33 --> Helper loaded: url_helper
INFO - 2019-06-23 18:06:33 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:06:33 --> Helper loaded: string_helper
INFO - 2019-06-23 18:06:33 --> Helper loaded: array_helper
INFO - 2019-06-23 18:06:33 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:06:33 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:06:33 --> Database Driver Class Initialized
INFO - 2019-06-23 18:06:33 --> Controller Class Initialized
INFO - 2019-06-23 18:06:39 --> Config Class Initialized
INFO - 2019-06-23 18:06:39 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:06:39 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:06:39 --> Utf8 Class Initialized
INFO - 2019-06-23 18:06:39 --> URI Class Initialized
INFO - 2019-06-23 18:06:39 --> Router Class Initialized
INFO - 2019-06-23 18:06:39 --> Output Class Initialized
INFO - 2019-06-23 18:06:39 --> Security Class Initialized
DEBUG - 2019-06-23 18:06:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:06:39 --> Input Class Initialized
INFO - 2019-06-23 18:06:39 --> Language Class Initialized
INFO - 2019-06-23 18:06:39 --> Language Class Initialized
INFO - 2019-06-23 18:06:39 --> Config Class Initialized
INFO - 2019-06-23 18:06:39 --> Loader Class Initialized
DEBUG - 2019-06-23 18:06:39 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:06:39 --> Helper loaded: url_helper
INFO - 2019-06-23 18:06:39 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:06:39 --> Helper loaded: string_helper
INFO - 2019-06-23 18:06:39 --> Helper loaded: array_helper
INFO - 2019-06-23 18:06:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:06:39 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:06:39 --> Database Driver Class Initialized
INFO - 2019-06-23 18:06:39 --> Controller Class Initialized
INFO - 2019-06-23 18:08:18 --> Config Class Initialized
INFO - 2019-06-23 18:08:18 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:08:18 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:08:18 --> Utf8 Class Initialized
INFO - 2019-06-23 18:08:18 --> URI Class Initialized
INFO - 2019-06-23 18:08:18 --> Router Class Initialized
INFO - 2019-06-23 18:08:18 --> Output Class Initialized
INFO - 2019-06-23 18:08:18 --> Security Class Initialized
DEBUG - 2019-06-23 18:08:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:08:18 --> Input Class Initialized
INFO - 2019-06-23 18:08:18 --> Language Class Initialized
INFO - 2019-06-23 18:08:18 --> Language Class Initialized
INFO - 2019-06-23 18:08:18 --> Config Class Initialized
INFO - 2019-06-23 18:08:18 --> Loader Class Initialized
DEBUG - 2019-06-23 18:08:18 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:08:18 --> Helper loaded: url_helper
INFO - 2019-06-23 18:08:18 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:08:18 --> Helper loaded: string_helper
INFO - 2019-06-23 18:08:18 --> Helper loaded: array_helper
INFO - 2019-06-23 18:08:18 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:08:18 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:08:18 --> Database Driver Class Initialized
INFO - 2019-06-23 18:08:18 --> Controller Class Initialized
INFO - 2019-06-23 18:09:00 --> Config Class Initialized
INFO - 2019-06-23 18:09:00 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:09:00 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:09:00 --> Utf8 Class Initialized
INFO - 2019-06-23 18:09:00 --> URI Class Initialized
INFO - 2019-06-23 18:09:00 --> Router Class Initialized
INFO - 2019-06-23 18:09:00 --> Output Class Initialized
INFO - 2019-06-23 18:09:00 --> Security Class Initialized
DEBUG - 2019-06-23 18:09:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:09:00 --> Input Class Initialized
INFO - 2019-06-23 18:09:00 --> Language Class Initialized
INFO - 2019-06-23 18:09:00 --> Language Class Initialized
INFO - 2019-06-23 18:09:00 --> Config Class Initialized
INFO - 2019-06-23 18:09:00 --> Loader Class Initialized
DEBUG - 2019-06-23 18:09:01 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:09:01 --> Helper loaded: url_helper
INFO - 2019-06-23 18:09:01 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:09:01 --> Helper loaded: string_helper
INFO - 2019-06-23 18:09:01 --> Helper loaded: array_helper
INFO - 2019-06-23 18:09:01 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:09:01 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:09:01 --> Database Driver Class Initialized
INFO - 2019-06-23 18:09:01 --> Controller Class Initialized
INFO - 2019-06-23 18:09:01 --> Config Class Initialized
INFO - 2019-06-23 18:09:01 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:09:01 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:09:01 --> Utf8 Class Initialized
INFO - 2019-06-23 18:09:01 --> URI Class Initialized
INFO - 2019-06-23 18:09:01 --> Router Class Initialized
INFO - 2019-06-23 18:09:01 --> Output Class Initialized
INFO - 2019-06-23 18:09:01 --> Security Class Initialized
DEBUG - 2019-06-23 18:09:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:09:01 --> Input Class Initialized
INFO - 2019-06-23 18:09:01 --> Language Class Initialized
INFO - 2019-06-23 18:09:01 --> Language Class Initialized
INFO - 2019-06-23 18:09:01 --> Config Class Initialized
INFO - 2019-06-23 18:09:01 --> Loader Class Initialized
DEBUG - 2019-06-23 18:09:01 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:09:01 --> Helper loaded: url_helper
INFO - 2019-06-23 18:09:01 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:09:01 --> Helper loaded: string_helper
INFO - 2019-06-23 18:09:01 --> Helper loaded: array_helper
INFO - 2019-06-23 18:09:01 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:09:01 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:09:01 --> Database Driver Class Initialized
INFO - 2019-06-23 18:09:01 --> Controller Class Initialized
INFO - 2019-06-23 18:09:26 --> Config Class Initialized
INFO - 2019-06-23 18:09:26 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:09:26 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:09:26 --> Utf8 Class Initialized
INFO - 2019-06-23 18:09:26 --> URI Class Initialized
INFO - 2019-06-23 18:09:26 --> Router Class Initialized
INFO - 2019-06-23 18:09:26 --> Output Class Initialized
INFO - 2019-06-23 18:09:26 --> Security Class Initialized
DEBUG - 2019-06-23 18:09:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:09:26 --> Input Class Initialized
INFO - 2019-06-23 18:09:26 --> Language Class Initialized
INFO - 2019-06-23 18:09:26 --> Language Class Initialized
INFO - 2019-06-23 18:09:26 --> Config Class Initialized
INFO - 2019-06-23 18:09:26 --> Loader Class Initialized
DEBUG - 2019-06-23 18:09:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:09:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:09:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:09:27 --> Helper loaded: string_helper
INFO - 2019-06-23 18:09:27 --> Helper loaded: array_helper
INFO - 2019-06-23 18:09:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:09:27 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:09:27 --> Database Driver Class Initialized
INFO - 2019-06-23 18:09:27 --> Controller Class Initialized
INFO - 2019-06-23 18:10:04 --> Config Class Initialized
INFO - 2019-06-23 18:10:04 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:10:04 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:10:04 --> Utf8 Class Initialized
INFO - 2019-06-23 18:10:04 --> URI Class Initialized
INFO - 2019-06-23 18:10:04 --> Router Class Initialized
INFO - 2019-06-23 18:10:04 --> Output Class Initialized
INFO - 2019-06-23 18:10:04 --> Security Class Initialized
DEBUG - 2019-06-23 18:10:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:10:04 --> Input Class Initialized
INFO - 2019-06-23 18:10:04 --> Language Class Initialized
INFO - 2019-06-23 18:10:04 --> Language Class Initialized
INFO - 2019-06-23 18:10:04 --> Config Class Initialized
INFO - 2019-06-23 18:10:04 --> Loader Class Initialized
DEBUG - 2019-06-23 18:10:04 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:10:04 --> Helper loaded: url_helper
INFO - 2019-06-23 18:10:04 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:10:04 --> Helper loaded: string_helper
INFO - 2019-06-23 18:10:04 --> Helper loaded: array_helper
INFO - 2019-06-23 18:10:04 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:10:04 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:10:04 --> Database Driver Class Initialized
INFO - 2019-06-23 18:10:04 --> Controller Class Initialized
INFO - 2019-06-23 18:10:07 --> Config Class Initialized
INFO - 2019-06-23 18:10:07 --> Config Class Initialized
INFO - 2019-06-23 18:10:07 --> Hooks Class Initialized
INFO - 2019-06-23 18:10:07 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:10:07 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:10:07 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:10:07 --> Utf8 Class Initialized
INFO - 2019-06-23 18:10:07 --> Utf8 Class Initialized
INFO - 2019-06-23 18:10:07 --> URI Class Initialized
INFO - 2019-06-23 18:10:07 --> URI Class Initialized
INFO - 2019-06-23 18:10:07 --> Router Class Initialized
INFO - 2019-06-23 18:10:07 --> Router Class Initialized
INFO - 2019-06-23 18:10:07 --> Output Class Initialized
INFO - 2019-06-23 18:10:07 --> Output Class Initialized
INFO - 2019-06-23 18:10:07 --> Security Class Initialized
INFO - 2019-06-23 18:10:07 --> Security Class Initialized
DEBUG - 2019-06-23 18:10:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:10:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:10:07 --> Input Class Initialized
INFO - 2019-06-23 18:10:07 --> Input Class Initialized
INFO - 2019-06-23 18:10:07 --> Language Class Initialized
INFO - 2019-06-23 18:10:07 --> Language Class Initialized
INFO - 2019-06-23 18:10:07 --> Language Class Initialized
INFO - 2019-06-23 18:10:07 --> Language Class Initialized
INFO - 2019-06-23 18:10:07 --> Config Class Initialized
INFO - 2019-06-23 18:10:07 --> Config Class Initialized
INFO - 2019-06-23 18:10:07 --> Loader Class Initialized
INFO - 2019-06-23 18:10:07 --> Loader Class Initialized
DEBUG - 2019-06-23 18:10:07 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:10:07 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:10:07 --> Helper loaded: url_helper
INFO - 2019-06-23 18:10:07 --> Helper loaded: url_helper
INFO - 2019-06-23 18:10:07 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:10:07 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:10:08 --> Helper loaded: string_helper
INFO - 2019-06-23 18:10:08 --> Helper loaded: string_helper
INFO - 2019-06-23 18:10:08 --> Helper loaded: array_helper
INFO - 2019-06-23 18:10:08 --> Helper loaded: array_helper
INFO - 2019-06-23 18:10:08 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:10:08 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:10:08 --> Database Driver Class Initialized
INFO - 2019-06-23 18:10:08 --> Controller Class Initialized
INFO - 2019-06-23 18:10:08 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:10:08 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:10:08 --> Database Driver Class Initialized
INFO - 2019-06-23 18:10:08 --> Controller Class Initialized
INFO - 2019-06-23 18:10:08 --> Config Class Initialized
INFO - 2019-06-23 18:10:08 --> Config Class Initialized
INFO - 2019-06-23 18:10:08 --> Hooks Class Initialized
INFO - 2019-06-23 18:10:08 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:10:08 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:10:08 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:10:08 --> Utf8 Class Initialized
INFO - 2019-06-23 18:10:08 --> Utf8 Class Initialized
INFO - 2019-06-23 18:10:08 --> URI Class Initialized
INFO - 2019-06-23 18:10:08 --> Router Class Initialized
INFO - 2019-06-23 18:10:08 --> URI Class Initialized
INFO - 2019-06-23 18:10:08 --> Output Class Initialized
INFO - 2019-06-23 18:10:08 --> Router Class Initialized
INFO - 2019-06-23 18:10:08 --> Security Class Initialized
DEBUG - 2019-06-23 18:10:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:10:08 --> Output Class Initialized
INFO - 2019-06-23 18:10:08 --> Input Class Initialized
INFO - 2019-06-23 18:10:08 --> Security Class Initialized
INFO - 2019-06-23 18:10:08 --> Language Class Initialized
DEBUG - 2019-06-23 18:10:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:10:08 --> Language Class Initialized
INFO - 2019-06-23 18:10:08 --> Input Class Initialized
INFO - 2019-06-23 18:10:08 --> Config Class Initialized
INFO - 2019-06-23 18:10:08 --> Language Class Initialized
INFO - 2019-06-23 18:10:08 --> Loader Class Initialized
DEBUG - 2019-06-23 18:10:08 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:10:08 --> Language Class Initialized
INFO - 2019-06-23 18:10:08 --> Helper loaded: url_helper
INFO - 2019-06-23 18:10:08 --> Config Class Initialized
INFO - 2019-06-23 18:10:08 --> Loader Class Initialized
INFO - 2019-06-23 18:10:08 --> Helper loaded: inflector_helper
DEBUG - 2019-06-23 18:10:08 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:10:08 --> Helper loaded: string_helper
INFO - 2019-06-23 18:10:08 --> Helper loaded: url_helper
INFO - 2019-06-23 18:10:08 --> Helper loaded: array_helper
INFO - 2019-06-23 18:10:08 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:10:08 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:10:08 --> Helper loaded: string_helper
DEBUG - 2019-06-23 18:10:08 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:10:08 --> Helper loaded: array_helper
INFO - 2019-06-23 18:10:08 --> Database Driver Class Initialized
INFO - 2019-06-23 18:10:09 --> Controller Class Initialized
INFO - 2019-06-23 18:10:09 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:10:09 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:10:09 --> Database Driver Class Initialized
INFO - 2019-06-23 18:10:09 --> Controller Class Initialized
INFO - 2019-06-23 18:10:11 --> Config Class Initialized
INFO - 2019-06-23 18:10:11 --> Hooks Class Initialized
INFO - 2019-06-23 18:10:11 --> Config Class Initialized
DEBUG - 2019-06-23 18:10:11 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:10:11 --> Hooks Class Initialized
INFO - 2019-06-23 18:10:11 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:10:11 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:10:11 --> URI Class Initialized
INFO - 2019-06-23 18:10:11 --> Utf8 Class Initialized
INFO - 2019-06-23 18:10:11 --> URI Class Initialized
INFO - 2019-06-23 18:10:11 --> Router Class Initialized
INFO - 2019-06-23 18:10:11 --> Router Class Initialized
INFO - 2019-06-23 18:10:11 --> Output Class Initialized
INFO - 2019-06-23 18:10:11 --> Output Class Initialized
INFO - 2019-06-23 18:10:11 --> Security Class Initialized
INFO - 2019-06-23 18:10:11 --> Security Class Initialized
DEBUG - 2019-06-23 18:10:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:10:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:10:11 --> Input Class Initialized
INFO - 2019-06-23 18:10:11 --> Input Class Initialized
INFO - 2019-06-23 18:10:11 --> Language Class Initialized
INFO - 2019-06-23 18:10:11 --> Language Class Initialized
INFO - 2019-06-23 18:10:11 --> Language Class Initialized
INFO - 2019-06-23 18:10:11 --> Language Class Initialized
INFO - 2019-06-23 18:10:11 --> Config Class Initialized
INFO - 2019-06-23 18:10:11 --> Loader Class Initialized
INFO - 2019-06-23 18:10:11 --> Config Class Initialized
INFO - 2019-06-23 18:10:11 --> Loader Class Initialized
DEBUG - 2019-06-23 18:10:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:10:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:10:12 --> Helper loaded: url_helper
INFO - 2019-06-23 18:10:12 --> Helper loaded: url_helper
INFO - 2019-06-23 18:10:12 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:10:12 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:10:12 --> Helper loaded: string_helper
INFO - 2019-06-23 18:10:12 --> Helper loaded: string_helper
INFO - 2019-06-23 18:10:12 --> Helper loaded: array_helper
INFO - 2019-06-23 18:10:12 --> Helper loaded: array_helper
INFO - 2019-06-23 18:10:12 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:10:12 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:10:12 --> Database Driver Class Initialized
INFO - 2019-06-23 18:10:12 --> Controller Class Initialized
INFO - 2019-06-23 18:10:12 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:10:12 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:10:12 --> Database Driver Class Initialized
INFO - 2019-06-23 18:10:12 --> Controller Class Initialized
INFO - 2019-06-23 18:10:29 --> Config Class Initialized
INFO - 2019-06-23 18:10:29 --> Hooks Class Initialized
INFO - 2019-06-23 18:10:29 --> Config Class Initialized
DEBUG - 2019-06-23 18:10:29 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:10:29 --> Hooks Class Initialized
INFO - 2019-06-23 18:10:29 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:10:29 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:10:29 --> URI Class Initialized
INFO - 2019-06-23 18:10:29 --> Utf8 Class Initialized
INFO - 2019-06-23 18:10:29 --> URI Class Initialized
INFO - 2019-06-23 18:10:29 --> Router Class Initialized
INFO - 2019-06-23 18:10:30 --> Router Class Initialized
INFO - 2019-06-23 18:10:30 --> Output Class Initialized
INFO - 2019-06-23 18:10:30 --> Output Class Initialized
INFO - 2019-06-23 18:10:30 --> Security Class Initialized
INFO - 2019-06-23 18:10:30 --> Security Class Initialized
DEBUG - 2019-06-23 18:10:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:10:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:10:30 --> Input Class Initialized
INFO - 2019-06-23 18:10:30 --> Input Class Initialized
INFO - 2019-06-23 18:10:30 --> Language Class Initialized
INFO - 2019-06-23 18:10:30 --> Language Class Initialized
INFO - 2019-06-23 18:10:30 --> Language Class Initialized
INFO - 2019-06-23 18:10:30 --> Language Class Initialized
INFO - 2019-06-23 18:10:30 --> Config Class Initialized
INFO - 2019-06-23 18:10:30 --> Config Class Initialized
INFO - 2019-06-23 18:10:30 --> Loader Class Initialized
INFO - 2019-06-23 18:10:30 --> Loader Class Initialized
DEBUG - 2019-06-23 18:10:30 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:10:30 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:10:30 --> Helper loaded: url_helper
INFO - 2019-06-23 18:10:30 --> Helper loaded: url_helper
INFO - 2019-06-23 18:10:30 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:10:30 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:10:30 --> Helper loaded: string_helper
INFO - 2019-06-23 18:10:30 --> Helper loaded: string_helper
INFO - 2019-06-23 18:10:30 --> Helper loaded: array_helper
INFO - 2019-06-23 18:10:30 --> Helper loaded: array_helper
INFO - 2019-06-23 18:10:30 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:10:30 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:10:30 --> Database Driver Class Initialized
INFO - 2019-06-23 18:10:30 --> Controller Class Initialized
INFO - 2019-06-23 18:10:30 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:10:30 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:10:30 --> Database Driver Class Initialized
INFO - 2019-06-23 18:10:30 --> Controller Class Initialized
INFO - 2019-06-23 18:10:31 --> Config Class Initialized
INFO - 2019-06-23 18:10:31 --> Config Class Initialized
INFO - 2019-06-23 18:10:31 --> Hooks Class Initialized
INFO - 2019-06-23 18:10:31 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:10:31 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:10:31 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:10:31 --> Utf8 Class Initialized
INFO - 2019-06-23 18:10:31 --> Utf8 Class Initialized
INFO - 2019-06-23 18:10:31 --> URI Class Initialized
INFO - 2019-06-23 18:10:31 --> URI Class Initialized
INFO - 2019-06-23 18:10:31 --> Router Class Initialized
INFO - 2019-06-23 18:10:31 --> Router Class Initialized
INFO - 2019-06-23 18:10:31 --> Output Class Initialized
INFO - 2019-06-23 18:10:31 --> Output Class Initialized
INFO - 2019-06-23 18:10:31 --> Security Class Initialized
INFO - 2019-06-23 18:10:31 --> Security Class Initialized
DEBUG - 2019-06-23 18:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:10:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:10:31 --> Input Class Initialized
INFO - 2019-06-23 18:10:31 --> Input Class Initialized
INFO - 2019-06-23 18:10:31 --> Language Class Initialized
INFO - 2019-06-23 18:10:31 --> Language Class Initialized
INFO - 2019-06-23 18:10:32 --> Language Class Initialized
INFO - 2019-06-23 18:10:32 --> Language Class Initialized
INFO - 2019-06-23 18:10:32 --> Config Class Initialized
INFO - 2019-06-23 18:10:32 --> Config Class Initialized
INFO - 2019-06-23 18:10:32 --> Loader Class Initialized
INFO - 2019-06-23 18:10:32 --> Loader Class Initialized
DEBUG - 2019-06-23 18:10:32 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:10:32 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:10:32 --> Helper loaded: url_helper
INFO - 2019-06-23 18:10:32 --> Helper loaded: url_helper
INFO - 2019-06-23 18:10:32 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:10:32 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:10:32 --> Helper loaded: string_helper
INFO - 2019-06-23 18:10:32 --> Helper loaded: string_helper
INFO - 2019-06-23 18:10:32 --> Helper loaded: array_helper
INFO - 2019-06-23 18:10:32 --> Helper loaded: array_helper
INFO - 2019-06-23 18:10:32 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:10:32 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:10:32 --> Database Driver Class Initialized
INFO - 2019-06-23 18:10:32 --> Controller Class Initialized
INFO - 2019-06-23 18:10:32 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:10:32 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:10:32 --> Database Driver Class Initialized
INFO - 2019-06-23 18:10:32 --> Controller Class Initialized
INFO - 2019-06-23 18:10:40 --> Config Class Initialized
INFO - 2019-06-23 18:10:40 --> Config Class Initialized
INFO - 2019-06-23 18:10:40 --> Hooks Class Initialized
INFO - 2019-06-23 18:10:40 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:10:40 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:10:40 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:10:40 --> Utf8 Class Initialized
INFO - 2019-06-23 18:10:40 --> Utf8 Class Initialized
INFO - 2019-06-23 18:10:40 --> URI Class Initialized
INFO - 2019-06-23 18:10:40 --> URI Class Initialized
INFO - 2019-06-23 18:10:40 --> Router Class Initialized
INFO - 2019-06-23 18:10:40 --> Router Class Initialized
INFO - 2019-06-23 18:10:40 --> Output Class Initialized
INFO - 2019-06-23 18:10:40 --> Output Class Initialized
INFO - 2019-06-23 18:10:40 --> Security Class Initialized
INFO - 2019-06-23 18:10:40 --> Security Class Initialized
DEBUG - 2019-06-23 18:10:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:10:40 --> Input Class Initialized
DEBUG - 2019-06-23 18:10:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:10:40 --> Input Class Initialized
INFO - 2019-06-23 18:10:40 --> Language Class Initialized
INFO - 2019-06-23 18:10:40 --> Language Class Initialized
INFO - 2019-06-23 18:10:41 --> Language Class Initialized
INFO - 2019-06-23 18:10:41 --> Language Class Initialized
INFO - 2019-06-23 18:10:41 --> Config Class Initialized
INFO - 2019-06-23 18:10:41 --> Loader Class Initialized
INFO - 2019-06-23 18:10:41 --> Config Class Initialized
INFO - 2019-06-23 18:10:41 --> Loader Class Initialized
DEBUG - 2019-06-23 18:10:41 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:10:41 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:10:41 --> Helper loaded: url_helper
INFO - 2019-06-23 18:10:41 --> Helper loaded: url_helper
INFO - 2019-06-23 18:10:41 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:10:41 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:10:41 --> Helper loaded: string_helper
INFO - 2019-06-23 18:10:41 --> Helper loaded: string_helper
INFO - 2019-06-23 18:10:41 --> Helper loaded: array_helper
INFO - 2019-06-23 18:10:41 --> Helper loaded: array_helper
INFO - 2019-06-23 18:10:41 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:10:41 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:10:41 --> Database Driver Class Initialized
INFO - 2019-06-23 18:10:41 --> Controller Class Initialized
INFO - 2019-06-23 18:10:41 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:10:41 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:10:41 --> Database Driver Class Initialized
INFO - 2019-06-23 18:10:41 --> Controller Class Initialized
INFO - 2019-06-23 18:11:07 --> Config Class Initialized
INFO - 2019-06-23 18:11:07 --> Hooks Class Initialized
INFO - 2019-06-23 18:11:07 --> Config Class Initialized
DEBUG - 2019-06-23 18:11:07 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:11:07 --> Hooks Class Initialized
INFO - 2019-06-23 18:11:07 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:11:07 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:11:07 --> URI Class Initialized
INFO - 2019-06-23 18:11:07 --> Utf8 Class Initialized
INFO - 2019-06-23 18:11:07 --> URI Class Initialized
INFO - 2019-06-23 18:11:07 --> Router Class Initialized
INFO - 2019-06-23 18:11:07 --> Router Class Initialized
INFO - 2019-06-23 18:11:07 --> Output Class Initialized
INFO - 2019-06-23 18:11:07 --> Output Class Initialized
INFO - 2019-06-23 18:11:07 --> Security Class Initialized
INFO - 2019-06-23 18:11:07 --> Security Class Initialized
DEBUG - 2019-06-23 18:11:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:11:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:11:07 --> Input Class Initialized
INFO - 2019-06-23 18:11:07 --> Input Class Initialized
INFO - 2019-06-23 18:11:07 --> Language Class Initialized
INFO - 2019-06-23 18:11:07 --> Language Class Initialized
INFO - 2019-06-23 18:11:07 --> Language Class Initialized
INFO - 2019-06-23 18:11:07 --> Language Class Initialized
INFO - 2019-06-23 18:11:07 --> Config Class Initialized
INFO - 2019-06-23 18:11:07 --> Config Class Initialized
INFO - 2019-06-23 18:11:07 --> Loader Class Initialized
INFO - 2019-06-23 18:11:07 --> Loader Class Initialized
DEBUG - 2019-06-23 18:11:07 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:11:07 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:11:07 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:07 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:07 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:07 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:07 --> Helper loaded: string_helper
INFO - 2019-06-23 18:11:07 --> Helper loaded: string_helper
INFO - 2019-06-23 18:11:07 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:07 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:07 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:11:07 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:07 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:07 --> Controller Class Initialized
INFO - 2019-06-23 18:11:07 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:11:07 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:07 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:07 --> Controller Class Initialized
INFO - 2019-06-23 18:11:17 --> Config Class Initialized
INFO - 2019-06-23 18:11:17 --> Config Class Initialized
INFO - 2019-06-23 18:11:17 --> Hooks Class Initialized
INFO - 2019-06-23 18:11:17 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:11:17 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:11:17 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:11:17 --> Utf8 Class Initialized
INFO - 2019-06-23 18:11:17 --> Utf8 Class Initialized
INFO - 2019-06-23 18:11:17 --> URI Class Initialized
INFO - 2019-06-23 18:11:17 --> URI Class Initialized
INFO - 2019-06-23 18:11:17 --> Router Class Initialized
INFO - 2019-06-23 18:11:17 --> Router Class Initialized
INFO - 2019-06-23 18:11:17 --> Output Class Initialized
INFO - 2019-06-23 18:11:17 --> Security Class Initialized
INFO - 2019-06-23 18:11:17 --> Config Class Initialized
DEBUG - 2019-06-23 18:11:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:11:17 --> Output Class Initialized
INFO - 2019-06-23 18:11:17 --> Input Class Initialized
INFO - 2019-06-23 18:11:17 --> Hooks Class Initialized
INFO - 2019-06-23 18:11:17 --> Config Class Initialized
INFO - 2019-06-23 18:11:17 --> Language Class Initialized
DEBUG - 2019-06-23 18:11:17 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:11:17 --> Security Class Initialized
INFO - 2019-06-23 18:11:17 --> Hooks Class Initialized
INFO - 2019-06-23 18:11:17 --> Language Class Initialized
INFO - 2019-06-23 18:11:17 --> Utf8 Class Initialized
INFO - 2019-06-23 18:11:17 --> Config Class Initialized
DEBUG - 2019-06-23 18:11:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:11:17 --> URI Class Initialized
DEBUG - 2019-06-23 18:11:17 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:11:17 --> Input Class Initialized
INFO - 2019-06-23 18:11:17 --> Loader Class Initialized
INFO - 2019-06-23 18:11:17 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:11:17 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:11:17 --> Language Class Initialized
INFO - 2019-06-23 18:11:17 --> Router Class Initialized
INFO - 2019-06-23 18:11:17 --> URI Class Initialized
INFO - 2019-06-23 18:11:17 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:17 --> Output Class Initialized
INFO - 2019-06-23 18:11:17 --> Language Class Initialized
INFO - 2019-06-23 18:11:17 --> Router Class Initialized
INFO - 2019-06-23 18:11:17 --> Config Class Initialized
INFO - 2019-06-23 18:11:17 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:17 --> Loader Class Initialized
INFO - 2019-06-23 18:11:17 --> Security Class Initialized
INFO - 2019-06-23 18:11:17 --> Output Class Initialized
DEBUG - 2019-06-23 18:11:17 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:11:17 --> Helper loaded: string_helper
DEBUG - 2019-06-23 18:11:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:11:17 --> Security Class Initialized
INFO - 2019-06-23 18:11:17 --> Input Class Initialized
INFO - 2019-06-23 18:11:17 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:17 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:17 --> Language Class Initialized
DEBUG - 2019-06-23 18:11:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:11:17 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:11:17 --> Input Class Initialized
INFO - 2019-06-23 18:11:17 --> Language Class Initialized
INFO - 2019-06-23 18:11:17 --> Config Class Initialized
INFO - 2019-06-23 18:11:17 --> Helper loaded: string_helper
DEBUG - 2019-06-23 18:11:17 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:17 --> Language Class Initialized
INFO - 2019-06-23 18:11:17 --> Loader Class Initialized
INFO - 2019-06-23 18:11:17 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:17 --> Language Class Initialized
DEBUG - 2019-06-23 18:11:17 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:11:17 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:17 --> Config Class Initialized
INFO - 2019-06-23 18:11:17 --> Controller Class Initialized
INFO - 2019-06-23 18:11:17 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:17 --> Loader Class Initialized
INFO - 2019-06-23 18:11:17 --> Helper loaded: inflector_helper
DEBUG - 2019-06-23 18:11:17 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:11:17 --> Helper loaded: string_helper
INFO - 2019-06-23 18:11:17 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:17 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:18 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:18 --> Helper loaded: string_helper
INFO - 2019-06-23 18:11:18 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:18 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:11:18 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:18 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:18 --> Controller Class Initialized
INFO - 2019-06-23 18:11:18 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:11:18 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:18 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:18 --> Controller Class Initialized
INFO - 2019-06-23 18:11:18 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:11:18 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:18 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:18 --> Controller Class Initialized
INFO - 2019-06-23 18:11:22 --> Config Class Initialized
INFO - 2019-06-23 18:11:22 --> Hooks Class Initialized
INFO - 2019-06-23 18:11:22 --> Config Class Initialized
DEBUG - 2019-06-23 18:11:22 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:11:22 --> Hooks Class Initialized
INFO - 2019-06-23 18:11:22 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:11:22 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:11:22 --> URI Class Initialized
INFO - 2019-06-23 18:11:22 --> Utf8 Class Initialized
INFO - 2019-06-23 18:11:22 --> URI Class Initialized
INFO - 2019-06-23 18:11:22 --> Router Class Initialized
INFO - 2019-06-23 18:11:22 --> Router Class Initialized
INFO - 2019-06-23 18:11:22 --> Output Class Initialized
INFO - 2019-06-23 18:11:22 --> Output Class Initialized
INFO - 2019-06-23 18:11:22 --> Security Class Initialized
INFO - 2019-06-23 18:11:22 --> Security Class Initialized
DEBUG - 2019-06-23 18:11:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:11:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:11:22 --> Input Class Initialized
INFO - 2019-06-23 18:11:22 --> Input Class Initialized
INFO - 2019-06-23 18:11:22 --> Language Class Initialized
INFO - 2019-06-23 18:11:22 --> Language Class Initialized
INFO - 2019-06-23 18:11:22 --> Language Class Initialized
INFO - 2019-06-23 18:11:22 --> Language Class Initialized
INFO - 2019-06-23 18:11:22 --> Config Class Initialized
INFO - 2019-06-23 18:11:22 --> Config Class Initialized
INFO - 2019-06-23 18:11:22 --> Loader Class Initialized
INFO - 2019-06-23 18:11:22 --> Loader Class Initialized
DEBUG - 2019-06-23 18:11:22 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:11:22 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:11:22 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:22 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:22 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:22 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:22 --> Helper loaded: string_helper
INFO - 2019-06-23 18:11:22 --> Helper loaded: string_helper
INFO - 2019-06-23 18:11:22 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:22 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:22 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:11:22 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:22 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:22 --> Controller Class Initialized
INFO - 2019-06-23 18:11:23 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:11:23 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:23 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:23 --> Controller Class Initialized
INFO - 2019-06-23 18:11:25 --> Config Class Initialized
INFO - 2019-06-23 18:11:25 --> Config Class Initialized
INFO - 2019-06-23 18:11:25 --> Hooks Class Initialized
INFO - 2019-06-23 18:11:25 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:11:25 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:11:25 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:11:25 --> Utf8 Class Initialized
INFO - 2019-06-23 18:11:25 --> Utf8 Class Initialized
INFO - 2019-06-23 18:11:25 --> URI Class Initialized
INFO - 2019-06-23 18:11:25 --> URI Class Initialized
INFO - 2019-06-23 18:11:25 --> Router Class Initialized
INFO - 2019-06-23 18:11:25 --> Router Class Initialized
INFO - 2019-06-23 18:11:25 --> Output Class Initialized
INFO - 2019-06-23 18:11:25 --> Output Class Initialized
INFO - 2019-06-23 18:11:25 --> Security Class Initialized
INFO - 2019-06-23 18:11:25 --> Security Class Initialized
DEBUG - 2019-06-23 18:11:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:11:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:11:25 --> Input Class Initialized
INFO - 2019-06-23 18:11:25 --> Input Class Initialized
INFO - 2019-06-23 18:11:25 --> Language Class Initialized
INFO - 2019-06-23 18:11:25 --> Language Class Initialized
INFO - 2019-06-23 18:11:25 --> Language Class Initialized
INFO - 2019-06-23 18:11:25 --> Language Class Initialized
INFO - 2019-06-23 18:11:25 --> Config Class Initialized
INFO - 2019-06-23 18:11:25 --> Config Class Initialized
INFO - 2019-06-23 18:11:25 --> Config Class Initialized
INFO - 2019-06-23 18:11:25 --> Config Class Initialized
INFO - 2019-06-23 18:11:25 --> Loader Class Initialized
INFO - 2019-06-23 18:11:25 --> Loader Class Initialized
INFO - 2019-06-23 18:11:25 --> Hooks Class Initialized
INFO - 2019-06-23 18:11:25 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:11:25 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:11:25 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:11:25 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:11:25 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:11:25 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:25 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:25 --> Utf8 Class Initialized
INFO - 2019-06-23 18:11:25 --> Utf8 Class Initialized
INFO - 2019-06-23 18:11:25 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:25 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:25 --> URI Class Initialized
INFO - 2019-06-23 18:11:25 --> URI Class Initialized
INFO - 2019-06-23 18:11:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:11:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:11:26 --> Router Class Initialized
INFO - 2019-06-23 18:11:26 --> Router Class Initialized
INFO - 2019-06-23 18:11:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:26 --> Output Class Initialized
INFO - 2019-06-23 18:11:26 --> Output Class Initialized
INFO - 2019-06-23 18:11:26 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:11:26 --> Security Class Initialized
INFO - 2019-06-23 18:11:26 --> Security Class Initialized
DEBUG - 2019-06-23 18:11:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
DEBUG - 2019-06-23 18:11:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:11:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:11:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:26 --> Input Class Initialized
INFO - 2019-06-23 18:11:26 --> Input Class Initialized
INFO - 2019-06-23 18:11:26 --> Language Class Initialized
INFO - 2019-06-23 18:11:26 --> Language Class Initialized
INFO - 2019-06-23 18:11:26 --> Controller Class Initialized
INFO - 2019-06-23 18:11:26 --> Language Class Initialized
INFO - 2019-06-23 18:11:26 --> Language Class Initialized
INFO - 2019-06-23 18:11:26 --> Config Class Initialized
INFO - 2019-06-23 18:11:26 --> Config Class Initialized
INFO - 2019-06-23 18:11:26 --> Loader Class Initialized
INFO - 2019-06-23 18:11:26 --> Loader Class Initialized
DEBUG - 2019-06-23 18:11:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:11:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:11:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:26 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:11:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:11:26 --> Helper loaded: string_helper
DEBUG - 2019-06-23 18:11:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:26 --> Controller Class Initialized
INFO - 2019-06-23 18:11:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:11:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:26 --> Controller Class Initialized
INFO - 2019-06-23 18:11:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:11:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:26 --> Controller Class Initialized
INFO - 2019-06-23 18:11:31 --> Config Class Initialized
INFO - 2019-06-23 18:11:31 --> Config Class Initialized
INFO - 2019-06-23 18:11:31 --> Hooks Class Initialized
INFO - 2019-06-23 18:11:31 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:11:31 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:11:31 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:11:31 --> Utf8 Class Initialized
INFO - 2019-06-23 18:11:31 --> Utf8 Class Initialized
INFO - 2019-06-23 18:11:31 --> URI Class Initialized
INFO - 2019-06-23 18:11:31 --> URI Class Initialized
INFO - 2019-06-23 18:11:31 --> Router Class Initialized
INFO - 2019-06-23 18:11:31 --> Router Class Initialized
INFO - 2019-06-23 18:11:31 --> Output Class Initialized
INFO - 2019-06-23 18:11:31 --> Output Class Initialized
INFO - 2019-06-23 18:11:31 --> Security Class Initialized
INFO - 2019-06-23 18:11:31 --> Security Class Initialized
DEBUG - 2019-06-23 18:11:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:11:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:11:31 --> Input Class Initialized
INFO - 2019-06-23 18:11:31 --> Input Class Initialized
INFO - 2019-06-23 18:11:31 --> Language Class Initialized
INFO - 2019-06-23 18:11:31 --> Language Class Initialized
INFO - 2019-06-23 18:11:31 --> Language Class Initialized
INFO - 2019-06-23 18:11:31 --> Language Class Initialized
INFO - 2019-06-23 18:11:31 --> Config Class Initialized
INFO - 2019-06-23 18:11:31 --> Config Class Initialized
INFO - 2019-06-23 18:11:31 --> Loader Class Initialized
INFO - 2019-06-23 18:11:31 --> Loader Class Initialized
DEBUG - 2019-06-23 18:11:31 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:11:31 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:11:31 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:31 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:31 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:31 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:31 --> Helper loaded: string_helper
INFO - 2019-06-23 18:11:31 --> Helper loaded: string_helper
INFO - 2019-06-23 18:11:31 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:31 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:31 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:11:31 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:31 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:31 --> Controller Class Initialized
INFO - 2019-06-23 18:11:31 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:11:31 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:31 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:31 --> Controller Class Initialized
INFO - 2019-06-23 18:11:34 --> Config Class Initialized
INFO - 2019-06-23 18:11:34 --> Config Class Initialized
INFO - 2019-06-23 18:11:34 --> Hooks Class Initialized
INFO - 2019-06-23 18:11:34 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:11:34 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:11:34 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:11:34 --> Utf8 Class Initialized
INFO - 2019-06-23 18:11:34 --> Utf8 Class Initialized
INFO - 2019-06-23 18:11:34 --> URI Class Initialized
INFO - 2019-06-23 18:11:34 --> URI Class Initialized
INFO - 2019-06-23 18:11:34 --> Router Class Initialized
INFO - 2019-06-23 18:11:34 --> Router Class Initialized
INFO - 2019-06-23 18:11:34 --> Output Class Initialized
INFO - 2019-06-23 18:11:34 --> Output Class Initialized
INFO - 2019-06-23 18:11:34 --> Security Class Initialized
INFO - 2019-06-23 18:11:34 --> Security Class Initialized
DEBUG - 2019-06-23 18:11:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:11:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:11:34 --> Input Class Initialized
INFO - 2019-06-23 18:11:34 --> Input Class Initialized
INFO - 2019-06-23 18:11:34 --> Language Class Initialized
INFO - 2019-06-23 18:11:34 --> Language Class Initialized
INFO - 2019-06-23 18:11:34 --> Language Class Initialized
INFO - 2019-06-23 18:11:34 --> Language Class Initialized
INFO - 2019-06-23 18:11:34 --> Config Class Initialized
INFO - 2019-06-23 18:11:34 --> Config Class Initialized
INFO - 2019-06-23 18:11:34 --> Loader Class Initialized
INFO - 2019-06-23 18:11:34 --> Loader Class Initialized
DEBUG - 2019-06-23 18:11:34 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:11:34 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:11:34 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:34 --> Helper loaded: url_helper
INFO - 2019-06-23 18:11:34 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:34 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:11:34 --> Helper loaded: string_helper
INFO - 2019-06-23 18:11:34 --> Helper loaded: string_helper
INFO - 2019-06-23 18:11:34 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:34 --> Helper loaded: array_helper
INFO - 2019-06-23 18:11:34 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:11:34 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:34 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:34 --> Controller Class Initialized
INFO - 2019-06-23 18:11:34 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:11:34 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:11:34 --> Database Driver Class Initialized
INFO - 2019-06-23 18:11:34 --> Controller Class Initialized
INFO - 2019-06-23 18:12:10 --> Config Class Initialized
INFO - 2019-06-23 18:12:10 --> Config Class Initialized
INFO - 2019-06-23 18:12:10 --> Hooks Class Initialized
INFO - 2019-06-23 18:12:10 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:12:10 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:12:10 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:12:10 --> Utf8 Class Initialized
INFO - 2019-06-23 18:12:10 --> Utf8 Class Initialized
INFO - 2019-06-23 18:12:10 --> URI Class Initialized
INFO - 2019-06-23 18:12:10 --> URI Class Initialized
INFO - 2019-06-23 18:12:10 --> Router Class Initialized
INFO - 2019-06-23 18:12:10 --> Router Class Initialized
INFO - 2019-06-23 18:12:10 --> Output Class Initialized
INFO - 2019-06-23 18:12:10 --> Output Class Initialized
INFO - 2019-06-23 18:12:10 --> Security Class Initialized
INFO - 2019-06-23 18:12:10 --> Security Class Initialized
DEBUG - 2019-06-23 18:12:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:12:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:12:10 --> Input Class Initialized
INFO - 2019-06-23 18:12:10 --> Input Class Initialized
INFO - 2019-06-23 18:12:10 --> Language Class Initialized
INFO - 2019-06-23 18:12:10 --> Language Class Initialized
INFO - 2019-06-23 18:12:10 --> Language Class Initialized
INFO - 2019-06-23 18:12:10 --> Language Class Initialized
INFO - 2019-06-23 18:12:10 --> Config Class Initialized
INFO - 2019-06-23 18:12:10 --> Config Class Initialized
INFO - 2019-06-23 18:12:10 --> Loader Class Initialized
INFO - 2019-06-23 18:12:10 --> Loader Class Initialized
DEBUG - 2019-06-23 18:12:10 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:12:10 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:12:10 --> Helper loaded: url_helper
INFO - 2019-06-23 18:12:10 --> Helper loaded: url_helper
INFO - 2019-06-23 18:12:10 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:12:10 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:12:10 --> Helper loaded: string_helper
INFO - 2019-06-23 18:12:10 --> Helper loaded: string_helper
INFO - 2019-06-23 18:12:10 --> Helper loaded: array_helper
INFO - 2019-06-23 18:12:10 --> Helper loaded: array_helper
INFO - 2019-06-23 18:12:10 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:12:10 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:12:10 --> Database Driver Class Initialized
INFO - 2019-06-23 18:12:10 --> Controller Class Initialized
INFO - 2019-06-23 18:12:10 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:12:10 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:12:10 --> Database Driver Class Initialized
INFO - 2019-06-23 18:12:10 --> Controller Class Initialized
INFO - 2019-06-23 18:13:00 --> Config Class Initialized
INFO - 2019-06-23 18:13:00 --> Hooks Class Initialized
INFO - 2019-06-23 18:13:00 --> Config Class Initialized
INFO - 2019-06-23 18:13:00 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:13:00 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:13:00 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:13:00 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:00 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:00 --> URI Class Initialized
INFO - 2019-06-23 18:13:00 --> URI Class Initialized
INFO - 2019-06-23 18:13:00 --> Router Class Initialized
INFO - 2019-06-23 18:13:00 --> Router Class Initialized
INFO - 2019-06-23 18:13:00 --> Output Class Initialized
INFO - 2019-06-23 18:13:00 --> Output Class Initialized
INFO - 2019-06-23 18:13:00 --> Security Class Initialized
INFO - 2019-06-23 18:13:00 --> Security Class Initialized
DEBUG - 2019-06-23 18:13:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:13:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:00 --> Input Class Initialized
INFO - 2019-06-23 18:13:00 --> Input Class Initialized
INFO - 2019-06-23 18:13:00 --> Language Class Initialized
INFO - 2019-06-23 18:13:00 --> Language Class Initialized
INFO - 2019-06-23 18:13:00 --> Language Class Initialized
INFO - 2019-06-23 18:13:00 --> Language Class Initialized
INFO - 2019-06-23 18:13:00 --> Config Class Initialized
INFO - 2019-06-23 18:13:00 --> Config Class Initialized
INFO - 2019-06-23 18:13:00 --> Loader Class Initialized
INFO - 2019-06-23 18:13:00 --> Loader Class Initialized
DEBUG - 2019-06-23 18:13:00 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:13:00 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:00 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:00 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:00 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:00 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:01 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:01 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:01 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:01 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:01 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:01 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:01 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:01 --> Controller Class Initialized
INFO - 2019-06-23 18:13:01 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:01 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:01 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:01 --> Controller Class Initialized
INFO - 2019-06-23 18:13:01 --> Config Class Initialized
INFO - 2019-06-23 18:13:01 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:13:01 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:13:01 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:01 --> URI Class Initialized
INFO - 2019-06-23 18:13:01 --> Router Class Initialized
INFO - 2019-06-23 18:13:01 --> Output Class Initialized
INFO - 2019-06-23 18:13:01 --> Security Class Initialized
DEBUG - 2019-06-23 18:13:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:01 --> Config Class Initialized
INFO - 2019-06-23 18:13:01 --> Config Class Initialized
INFO - 2019-06-23 18:13:01 --> Input Class Initialized
INFO - 2019-06-23 18:13:01 --> Hooks Class Initialized
INFO - 2019-06-23 18:13:01 --> Hooks Class Initialized
INFO - 2019-06-23 18:13:01 --> Language Class Initialized
DEBUG - 2019-06-23 18:13:01 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:13:01 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:13:01 --> Language Class Initialized
INFO - 2019-06-23 18:13:01 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:01 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:01 --> Config Class Initialized
INFO - 2019-06-23 18:13:01 --> URI Class Initialized
INFO - 2019-06-23 18:13:01 --> Loader Class Initialized
INFO - 2019-06-23 18:13:01 --> URI Class Initialized
INFO - 2019-06-23 18:13:01 --> Router Class Initialized
DEBUG - 2019-06-23 18:13:01 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:01 --> Router Class Initialized
INFO - 2019-06-23 18:13:01 --> Output Class Initialized
INFO - 2019-06-23 18:13:01 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:01 --> Output Class Initialized
INFO - 2019-06-23 18:13:01 --> Security Class Initialized
INFO - 2019-06-23 18:13:01 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:01 --> Security Class Initialized
DEBUG - 2019-06-23 18:13:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:01 --> Helper loaded: string_helper
DEBUG - 2019-06-23 18:13:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:01 --> Input Class Initialized
INFO - 2019-06-23 18:13:01 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:01 --> Input Class Initialized
INFO - 2019-06-23 18:13:02 --> Language Class Initialized
INFO - 2019-06-23 18:13:02 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:13:02 --> Language Class Initialized
INFO - 2019-06-23 18:13:02 --> Language Class Initialized
DEBUG - 2019-06-23 18:13:02 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:02 --> Language Class Initialized
INFO - 2019-06-23 18:13:02 --> Config Class Initialized
INFO - 2019-06-23 18:13:02 --> Config Class Initialized
INFO - 2019-06-23 18:13:02 --> Loader Class Initialized
INFO - 2019-06-23 18:13:02 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:02 --> Loader Class Initialized
DEBUG - 2019-06-23 18:13:02 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:13:02 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:02 --> Controller Class Initialized
INFO - 2019-06-23 18:13:02 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:02 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:02 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:02 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:02 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:02 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:02 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:02 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:02 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:02 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:02 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:02 --> Controller Class Initialized
INFO - 2019-06-23 18:13:02 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:02 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:02 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:02 --> Controller Class Initialized
INFO - 2019-06-23 18:13:03 --> Config Class Initialized
INFO - 2019-06-23 18:13:03 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:13:03 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:13:03 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:03 --> URI Class Initialized
INFO - 2019-06-23 18:13:03 --> Router Class Initialized
INFO - 2019-06-23 18:13:03 --> Output Class Initialized
INFO - 2019-06-23 18:13:03 --> Config Class Initialized
INFO - 2019-06-23 18:13:03 --> Config Class Initialized
INFO - 2019-06-23 18:13:03 --> Security Class Initialized
INFO - 2019-06-23 18:13:03 --> Hooks Class Initialized
INFO - 2019-06-23 18:13:03 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:13:03 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:13:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:03 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:13:03 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:13:03 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:03 --> Input Class Initialized
INFO - 2019-06-23 18:13:03 --> URI Class Initialized
INFO - 2019-06-23 18:13:03 --> URI Class Initialized
INFO - 2019-06-23 18:13:03 --> Language Class Initialized
INFO - 2019-06-23 18:13:03 --> Router Class Initialized
INFO - 2019-06-23 18:13:03 --> Language Class Initialized
INFO - 2019-06-23 18:13:03 --> Router Class Initialized
INFO - 2019-06-23 18:13:03 --> Output Class Initialized
INFO - 2019-06-23 18:13:03 --> Config Class Initialized
INFO - 2019-06-23 18:13:03 --> Output Class Initialized
INFO - 2019-06-23 18:13:03 --> Loader Class Initialized
INFO - 2019-06-23 18:13:03 --> Security Class Initialized
INFO - 2019-06-23 18:13:03 --> Security Class Initialized
DEBUG - 2019-06-23 18:13:03 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:13:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:03 --> Helper loaded: url_helper
DEBUG - 2019-06-23 18:13:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:03 --> Input Class Initialized
INFO - 2019-06-23 18:13:03 --> Input Class Initialized
INFO - 2019-06-23 18:13:03 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:03 --> Language Class Initialized
INFO - 2019-06-23 18:13:03 --> Language Class Initialized
INFO - 2019-06-23 18:13:03 --> Language Class Initialized
INFO - 2019-06-23 18:13:03 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:03 --> Language Class Initialized
INFO - 2019-06-23 18:13:03 --> Config Class Initialized
INFO - 2019-06-23 18:13:03 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:03 --> Loader Class Initialized
INFO - 2019-06-23 18:13:03 --> Config Class Initialized
INFO - 2019-06-23 18:13:03 --> Loader Class Initialized
DEBUG - 2019-06-23 18:13:03 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:03 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:03 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:03 --> Helper loaded: url_helper
DEBUG - 2019-06-23 18:13:03 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:03 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:03 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:03 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:03 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:03 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:03 --> Controller Class Initialized
INFO - 2019-06-23 18:13:03 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:03 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:03 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:03 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:03 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:03 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:03 --> Controller Class Initialized
INFO - 2019-06-23 18:13:03 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:03 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:03 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:03 --> Controller Class Initialized
INFO - 2019-06-23 18:13:04 --> Config Class Initialized
INFO - 2019-06-23 18:13:04 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:13:04 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:13:04 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:04 --> URI Class Initialized
INFO - 2019-06-23 18:13:04 --> Router Class Initialized
INFO - 2019-06-23 18:13:04 --> Output Class Initialized
INFO - 2019-06-23 18:13:04 --> Security Class Initialized
DEBUG - 2019-06-23 18:13:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:04 --> Config Class Initialized
INFO - 2019-06-23 18:13:04 --> Config Class Initialized
INFO - 2019-06-23 18:13:04 --> Input Class Initialized
INFO - 2019-06-23 18:13:04 --> Hooks Class Initialized
INFO - 2019-06-23 18:13:04 --> Hooks Class Initialized
INFO - 2019-06-23 18:13:04 --> Language Class Initialized
DEBUG - 2019-06-23 18:13:04 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:13:04 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:13:04 --> Language Class Initialized
INFO - 2019-06-23 18:13:04 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:04 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:04 --> Config Class Initialized
INFO - 2019-06-23 18:13:04 --> URI Class Initialized
INFO - 2019-06-23 18:13:04 --> URI Class Initialized
INFO - 2019-06-23 18:13:04 --> Loader Class Initialized
DEBUG - 2019-06-23 18:13:04 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:04 --> Router Class Initialized
INFO - 2019-06-23 18:13:04 --> Router Class Initialized
INFO - 2019-06-23 18:13:04 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:04 --> Output Class Initialized
INFO - 2019-06-23 18:13:04 --> Output Class Initialized
INFO - 2019-06-23 18:13:04 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:04 --> Security Class Initialized
INFO - 2019-06-23 18:13:04 --> Security Class Initialized
INFO - 2019-06-23 18:13:04 --> Helper loaded: string_helper
DEBUG - 2019-06-23 18:13:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:13:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:04 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:04 --> Input Class Initialized
INFO - 2019-06-23 18:13:04 --> Input Class Initialized
INFO - 2019-06-23 18:13:04 --> Language Class Initialized
INFO - 2019-06-23 18:13:04 --> Language Class Initialized
INFO - 2019-06-23 18:13:04 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:13:04 --> Language Class Initialized
INFO - 2019-06-23 18:13:04 --> Language Class Initialized
DEBUG - 2019-06-23 18:13:04 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:04 --> Config Class Initialized
INFO - 2019-06-23 18:13:04 --> Config Class Initialized
INFO - 2019-06-23 18:13:04 --> Loader Class Initialized
INFO - 2019-06-23 18:13:04 --> Loader Class Initialized
INFO - 2019-06-23 18:13:04 --> Database Driver Class Initialized
DEBUG - 2019-06-23 18:13:04 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:13:04 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:04 --> Controller Class Initialized
INFO - 2019-06-23 18:13:04 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:04 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:04 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:04 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:04 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:04 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:04 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:04 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:04 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:04 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:04 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:04 --> Controller Class Initialized
INFO - 2019-06-23 18:13:04 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:04 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:04 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:04 --> Controller Class Initialized
INFO - 2019-06-23 18:13:07 --> Config Class Initialized
INFO - 2019-06-23 18:13:07 --> Config Class Initialized
INFO - 2019-06-23 18:13:07 --> Hooks Class Initialized
INFO - 2019-06-23 18:13:07 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:13:07 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:13:07 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:13:07 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:07 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:07 --> URI Class Initialized
INFO - 2019-06-23 18:13:07 --> URI Class Initialized
INFO - 2019-06-23 18:13:07 --> Router Class Initialized
INFO - 2019-06-23 18:13:07 --> Router Class Initialized
INFO - 2019-06-23 18:13:07 --> Output Class Initialized
INFO - 2019-06-23 18:13:07 --> Output Class Initialized
INFO - 2019-06-23 18:13:07 --> Security Class Initialized
INFO - 2019-06-23 18:13:07 --> Security Class Initialized
DEBUG - 2019-06-23 18:13:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:13:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:07 --> Input Class Initialized
INFO - 2019-06-23 18:13:07 --> Input Class Initialized
INFO - 2019-06-23 18:13:07 --> Language Class Initialized
INFO - 2019-06-23 18:13:07 --> Language Class Initialized
INFO - 2019-06-23 18:13:07 --> Language Class Initialized
INFO - 2019-06-23 18:13:07 --> Language Class Initialized
INFO - 2019-06-23 18:13:07 --> Config Class Initialized
INFO - 2019-06-23 18:13:07 --> Loader Class Initialized
INFO - 2019-06-23 18:13:07 --> Config Class Initialized
INFO - 2019-06-23 18:13:07 --> Loader Class Initialized
DEBUG - 2019-06-23 18:13:07 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:13:07 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:07 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:07 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:07 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:07 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:07 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:07 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:07 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:07 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:07 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:07 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:07 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:07 --> Controller Class Initialized
INFO - 2019-06-23 18:13:08 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:08 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:08 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:08 --> Controller Class Initialized
INFO - 2019-06-23 18:13:25 --> Config Class Initialized
INFO - 2019-06-23 18:13:25 --> Config Class Initialized
INFO - 2019-06-23 18:13:25 --> Hooks Class Initialized
INFO - 2019-06-23 18:13:25 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:13:25 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:13:25 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:13:25 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:25 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:25 --> URI Class Initialized
INFO - 2019-06-23 18:13:25 --> URI Class Initialized
INFO - 2019-06-23 18:13:25 --> Router Class Initialized
INFO - 2019-06-23 18:13:25 --> Router Class Initialized
INFO - 2019-06-23 18:13:25 --> Output Class Initialized
INFO - 2019-06-23 18:13:25 --> Output Class Initialized
INFO - 2019-06-23 18:13:25 --> Security Class Initialized
INFO - 2019-06-23 18:13:25 --> Config Class Initialized
INFO - 2019-06-23 18:13:25 --> Security Class Initialized
INFO - 2019-06-23 18:13:25 --> Config Class Initialized
INFO - 2019-06-23 18:13:25 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:13:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:13:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:25 --> Hooks Class Initialized
INFO - 2019-06-23 18:13:25 --> Input Class Initialized
INFO - 2019-06-23 18:13:25 --> Input Class Initialized
DEBUG - 2019-06-23 18:13:25 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:13:25 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:13:25 --> Language Class Initialized
INFO - 2019-06-23 18:13:25 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:25 --> Language Class Initialized
INFO - 2019-06-23 18:13:25 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:25 --> Language Class Initialized
INFO - 2019-06-23 18:13:25 --> URI Class Initialized
INFO - 2019-06-23 18:13:26 --> URI Class Initialized
INFO - 2019-06-23 18:13:26 --> Language Class Initialized
INFO - 2019-06-23 18:13:26 --> Router Class Initialized
INFO - 2019-06-23 18:13:26 --> Config Class Initialized
INFO - 2019-06-23 18:13:26 --> Config Class Initialized
INFO - 2019-06-23 18:13:26 --> Router Class Initialized
INFO - 2019-06-23 18:13:26 --> Loader Class Initialized
INFO - 2019-06-23 18:13:26 --> Loader Class Initialized
INFO - 2019-06-23 18:13:26 --> Output Class Initialized
DEBUG - 2019-06-23 18:13:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:26 --> Output Class Initialized
DEBUG - 2019-06-23 18:13:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:26 --> Security Class Initialized
INFO - 2019-06-23 18:13:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:26 --> Security Class Initialized
INFO - 2019-06-23 18:13:26 --> Helper loaded: url_helper
DEBUG - 2019-06-23 18:13:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:26 --> Helper loaded: inflector_helper
DEBUG - 2019-06-23 18:13:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:26 --> Input Class Initialized
INFO - 2019-06-23 18:13:26 --> Input Class Initialized
INFO - 2019-06-23 18:13:26 --> Language Class Initialized
INFO - 2019-06-23 18:13:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:26 --> Language Class Initialized
INFO - 2019-06-23 18:13:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:26 --> Language Class Initialized
INFO - 2019-06-23 18:13:26 --> Language Class Initialized
INFO - 2019-06-23 18:13:26 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:13:26 --> Config Class Initialized
INFO - 2019-06-23 18:13:26 --> Loader Class Initialized
INFO - 2019-06-23 18:13:26 --> Config Class Initialized
DEBUG - 2019-06-23 18:13:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:26 --> Loader Class Initialized
DEBUG - 2019-06-23 18:13:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:26 --> Database Driver Class Initialized
DEBUG - 2019-06-23 18:13:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:26 --> Controller Class Initialized
INFO - 2019-06-23 18:13:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:26 --> Controller Class Initialized
INFO - 2019-06-23 18:13:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:26 --> Controller Class Initialized
INFO - 2019-06-23 18:13:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:26 --> Controller Class Initialized
INFO - 2019-06-23 18:13:27 --> Config Class Initialized
INFO - 2019-06-23 18:13:27 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:13:27 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:13:27 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:27 --> URI Class Initialized
INFO - 2019-06-23 18:13:27 --> Router Class Initialized
INFO - 2019-06-23 18:13:27 --> Output Class Initialized
INFO - 2019-06-23 18:13:27 --> Security Class Initialized
DEBUG - 2019-06-23 18:13:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:27 --> Input Class Initialized
INFO - 2019-06-23 18:13:27 --> Language Class Initialized
INFO - 2019-06-23 18:13:27 --> Language Class Initialized
INFO - 2019-06-23 18:13:27 --> Config Class Initialized
INFO - 2019-06-23 18:13:27 --> Loader Class Initialized
DEBUG - 2019-06-23 18:13:27 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:27 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:27 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:27 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:27 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:27 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:27 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:27 --> Controller Class Initialized
INFO - 2019-06-23 18:13:28 --> Config Class Initialized
INFO - 2019-06-23 18:13:28 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:13:28 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:13:28 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:28 --> URI Class Initialized
INFO - 2019-06-23 18:13:28 --> Router Class Initialized
INFO - 2019-06-23 18:13:28 --> Output Class Initialized
INFO - 2019-06-23 18:13:28 --> Security Class Initialized
DEBUG - 2019-06-23 18:13:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:28 --> Input Class Initialized
INFO - 2019-06-23 18:13:28 --> Language Class Initialized
INFO - 2019-06-23 18:13:28 --> Language Class Initialized
INFO - 2019-06-23 18:13:28 --> Config Class Initialized
INFO - 2019-06-23 18:13:28 --> Loader Class Initialized
DEBUG - 2019-06-23 18:13:28 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:28 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:28 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:28 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:28 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:28 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:28 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:28 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:28 --> Controller Class Initialized
INFO - 2019-06-23 18:13:53 --> Config Class Initialized
INFO - 2019-06-23 18:13:53 --> Config Class Initialized
INFO - 2019-06-23 18:13:53 --> Hooks Class Initialized
INFO - 2019-06-23 18:13:53 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:13:53 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:13:53 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:13:53 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:53 --> Utf8 Class Initialized
INFO - 2019-06-23 18:13:53 --> URI Class Initialized
INFO - 2019-06-23 18:13:53 --> URI Class Initialized
INFO - 2019-06-23 18:13:53 --> Router Class Initialized
INFO - 2019-06-23 18:13:53 --> Router Class Initialized
INFO - 2019-06-23 18:13:53 --> Output Class Initialized
INFO - 2019-06-23 18:13:53 --> Output Class Initialized
INFO - 2019-06-23 18:13:53 --> Security Class Initialized
INFO - 2019-06-23 18:13:53 --> Security Class Initialized
DEBUG - 2019-06-23 18:13:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:13:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:13:53 --> Input Class Initialized
INFO - 2019-06-23 18:13:53 --> Input Class Initialized
INFO - 2019-06-23 18:13:53 --> Language Class Initialized
INFO - 2019-06-23 18:13:53 --> Language Class Initialized
INFO - 2019-06-23 18:13:53 --> Language Class Initialized
INFO - 2019-06-23 18:13:53 --> Language Class Initialized
INFO - 2019-06-23 18:13:53 --> Config Class Initialized
INFO - 2019-06-23 18:13:53 --> Loader Class Initialized
INFO - 2019-06-23 18:13:53 --> Config Class Initialized
INFO - 2019-06-23 18:13:53 --> Loader Class Initialized
DEBUG - 2019-06-23 18:13:53 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:13:53 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:13:53 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:53 --> Helper loaded: url_helper
INFO - 2019-06-23 18:13:53 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:53 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:13:53 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:53 --> Helper loaded: string_helper
INFO - 2019-06-23 18:13:53 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:53 --> Helper loaded: array_helper
INFO - 2019-06-23 18:13:53 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:53 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:53 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:53 --> Controller Class Initialized
INFO - 2019-06-23 18:13:53 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:13:53 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:13:53 --> Database Driver Class Initialized
INFO - 2019-06-23 18:13:53 --> Controller Class Initialized
INFO - 2019-06-23 18:14:14 --> Config Class Initialized
INFO - 2019-06-23 18:14:14 --> Config Class Initialized
INFO - 2019-06-23 18:14:14 --> Hooks Class Initialized
INFO - 2019-06-23 18:14:14 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:14 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:14:14 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:14 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:14 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:14 --> URI Class Initialized
INFO - 2019-06-23 18:14:14 --> URI Class Initialized
INFO - 2019-06-23 18:14:14 --> Router Class Initialized
INFO - 2019-06-23 18:14:14 --> Router Class Initialized
INFO - 2019-06-23 18:14:14 --> Output Class Initialized
INFO - 2019-06-23 18:14:14 --> Output Class Initialized
INFO - 2019-06-23 18:14:14 --> Security Class Initialized
INFO - 2019-06-23 18:14:14 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:14:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:14 --> Input Class Initialized
INFO - 2019-06-23 18:14:14 --> Input Class Initialized
INFO - 2019-06-23 18:14:14 --> Language Class Initialized
INFO - 2019-06-23 18:14:14 --> Language Class Initialized
INFO - 2019-06-23 18:14:14 --> Language Class Initialized
INFO - 2019-06-23 18:14:14 --> Language Class Initialized
INFO - 2019-06-23 18:14:14 --> Config Class Initialized
INFO - 2019-06-23 18:14:14 --> Config Class Initialized
INFO - 2019-06-23 18:14:14 --> Loader Class Initialized
INFO - 2019-06-23 18:14:14 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:14 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:14:14 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:14 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:14 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:14 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:14 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:14 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:14 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:14 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:14 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:14 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:14 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:14 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:14 --> Controller Class Initialized
INFO - 2019-06-23 18:14:14 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:14 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:14 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:14 --> Controller Class Initialized
INFO - 2019-06-23 18:14:15 --> Config Class Initialized
INFO - 2019-06-23 18:14:15 --> Hooks Class Initialized
INFO - 2019-06-23 18:14:15 --> Config Class Initialized
DEBUG - 2019-06-23 18:14:15 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:15 --> Hooks Class Initialized
INFO - 2019-06-23 18:14:15 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:14:15 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:15 --> URI Class Initialized
INFO - 2019-06-23 18:14:15 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:15 --> URI Class Initialized
INFO - 2019-06-23 18:14:15 --> Router Class Initialized
INFO - 2019-06-23 18:14:15 --> Router Class Initialized
INFO - 2019-06-23 18:14:15 --> Output Class Initialized
INFO - 2019-06-23 18:14:15 --> Output Class Initialized
INFO - 2019-06-23 18:14:15 --> Security Class Initialized
INFO - 2019-06-23 18:14:15 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:14:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:15 --> Input Class Initialized
INFO - 2019-06-23 18:14:15 --> Input Class Initialized
INFO - 2019-06-23 18:14:15 --> Language Class Initialized
INFO - 2019-06-23 18:14:15 --> Language Class Initialized
INFO - 2019-06-23 18:14:15 --> Language Class Initialized
INFO - 2019-06-23 18:14:15 --> Language Class Initialized
INFO - 2019-06-23 18:14:15 --> Config Class Initialized
INFO - 2019-06-23 18:14:15 --> Config Class Initialized
INFO - 2019-06-23 18:14:15 --> Loader Class Initialized
INFO - 2019-06-23 18:14:15 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:15 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:14:15 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:15 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:15 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:15 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:15 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:15 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:15 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:15 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:15 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:15 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:15 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:15 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:15 --> Controller Class Initialized
INFO - 2019-06-23 18:14:16 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:16 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:16 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:16 --> Controller Class Initialized
INFO - 2019-06-23 18:14:18 --> Config Class Initialized
INFO - 2019-06-23 18:14:18 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:18 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:18 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:18 --> URI Class Initialized
INFO - 2019-06-23 18:14:18 --> Router Class Initialized
INFO - 2019-06-23 18:14:18 --> Output Class Initialized
INFO - 2019-06-23 18:14:18 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:18 --> Input Class Initialized
INFO - 2019-06-23 18:14:18 --> Language Class Initialized
INFO - 2019-06-23 18:14:18 --> Language Class Initialized
INFO - 2019-06-23 18:14:18 --> Config Class Initialized
INFO - 2019-06-23 18:14:18 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:18 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:18 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:18 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:18 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:18 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:18 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:18 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:18 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:18 --> Controller Class Initialized
INFO - 2019-06-23 18:14:23 --> Config Class Initialized
INFO - 2019-06-23 18:14:23 --> Config Class Initialized
INFO - 2019-06-23 18:14:23 --> Hooks Class Initialized
INFO - 2019-06-23 18:14:23 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:23 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:14:23 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:23 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:23 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:23 --> URI Class Initialized
INFO - 2019-06-23 18:14:23 --> URI Class Initialized
INFO - 2019-06-23 18:14:23 --> Router Class Initialized
INFO - 2019-06-23 18:14:23 --> Router Class Initialized
INFO - 2019-06-23 18:14:23 --> Output Class Initialized
INFO - 2019-06-23 18:14:23 --> Output Class Initialized
INFO - 2019-06-23 18:14:23 --> Security Class Initialized
INFO - 2019-06-23 18:14:23 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:14:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:23 --> Input Class Initialized
INFO - 2019-06-23 18:14:23 --> Input Class Initialized
INFO - 2019-06-23 18:14:23 --> Language Class Initialized
INFO - 2019-06-23 18:14:24 --> Language Class Initialized
INFO - 2019-06-23 18:14:24 --> Language Class Initialized
INFO - 2019-06-23 18:14:24 --> Language Class Initialized
INFO - 2019-06-23 18:14:24 --> Config Class Initialized
INFO - 2019-06-23 18:14:24 --> Config Class Initialized
INFO - 2019-06-23 18:14:24 --> Loader Class Initialized
INFO - 2019-06-23 18:14:24 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:24 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:14:24 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:24 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:24 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:24 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:24 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:24 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:24 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:24 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:24 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:24 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:24 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:24 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:24 --> Controller Class Initialized
INFO - 2019-06-23 18:14:24 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:24 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:24 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:24 --> Controller Class Initialized
INFO - 2019-06-23 18:14:25 --> Config Class Initialized
INFO - 2019-06-23 18:14:25 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:25 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:25 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:25 --> URI Class Initialized
INFO - 2019-06-23 18:14:25 --> Router Class Initialized
INFO - 2019-06-23 18:14:25 --> Output Class Initialized
INFO - 2019-06-23 18:14:25 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:25 --> Input Class Initialized
INFO - 2019-06-23 18:14:25 --> Language Class Initialized
INFO - 2019-06-23 18:14:25 --> Language Class Initialized
INFO - 2019-06-23 18:14:25 --> Config Class Initialized
INFO - 2019-06-23 18:14:25 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:25 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:25 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:25 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:25 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:25 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:25 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:25 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:25 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:25 --> Controller Class Initialized
INFO - 2019-06-23 18:14:26 --> Config Class Initialized
INFO - 2019-06-23 18:14:26 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:26 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:26 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:26 --> URI Class Initialized
INFO - 2019-06-23 18:14:26 --> Router Class Initialized
INFO - 2019-06-23 18:14:26 --> Output Class Initialized
INFO - 2019-06-23 18:14:26 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:26 --> Input Class Initialized
INFO - 2019-06-23 18:14:26 --> Language Class Initialized
INFO - 2019-06-23 18:14:26 --> Language Class Initialized
INFO - 2019-06-23 18:14:26 --> Config Class Initialized
INFO - 2019-06-23 18:14:26 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:26 --> Controller Class Initialized
INFO - 2019-06-23 18:14:26 --> Config Class Initialized
INFO - 2019-06-23 18:14:26 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:26 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:26 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:26 --> URI Class Initialized
INFO - 2019-06-23 18:14:26 --> Router Class Initialized
INFO - 2019-06-23 18:14:26 --> Config Class Initialized
INFO - 2019-06-23 18:14:26 --> Config Class Initialized
INFO - 2019-06-23 18:14:26 --> Output Class Initialized
INFO - 2019-06-23 18:14:26 --> Hooks Class Initialized
INFO - 2019-06-23 18:14:26 --> Hooks Class Initialized
INFO - 2019-06-23 18:14:26 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:26 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:14:26 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:14:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:26 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:26 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:26 --> Input Class Initialized
INFO - 2019-06-23 18:14:26 --> URI Class Initialized
INFO - 2019-06-23 18:14:26 --> URI Class Initialized
INFO - 2019-06-23 18:14:26 --> Language Class Initialized
INFO - 2019-06-23 18:14:27 --> Router Class Initialized
INFO - 2019-06-23 18:14:27 --> Router Class Initialized
INFO - 2019-06-23 18:14:27 --> Language Class Initialized
INFO - 2019-06-23 18:14:27 --> Output Class Initialized
INFO - 2019-06-23 18:14:27 --> Output Class Initialized
INFO - 2019-06-23 18:14:27 --> Config Class Initialized
INFO - 2019-06-23 18:14:27 --> Security Class Initialized
INFO - 2019-06-23 18:14:27 --> Security Class Initialized
INFO - 2019-06-23 18:14:27 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:27 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:14:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:14:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:27 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:27 --> Input Class Initialized
INFO - 2019-06-23 18:14:27 --> Input Class Initialized
INFO - 2019-06-23 18:14:27 --> Language Class Initialized
INFO - 2019-06-23 18:14:27 --> Language Class Initialized
INFO - 2019-06-23 18:14:27 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:27 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:27 --> Language Class Initialized
INFO - 2019-06-23 18:14:27 --> Language Class Initialized
INFO - 2019-06-23 18:14:27 --> Config Class Initialized
INFO - 2019-06-23 18:14:27 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:27 --> Config Class Initialized
INFO - 2019-06-23 18:14:27 --> Loader Class Initialized
INFO - 2019-06-23 18:14:27 --> Loader Class Initialized
INFO - 2019-06-23 18:14:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:27 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:14:27 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:14:27 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:27 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:27 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:27 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:27 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:27 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:27 --> Controller Class Initialized
INFO - 2019-06-23 18:14:27 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:27 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:27 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:27 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:27 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:27 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:27 --> Controller Class Initialized
INFO - 2019-06-23 18:14:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:27 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:27 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:27 --> Controller Class Initialized
INFO - 2019-06-23 18:14:29 --> Config Class Initialized
INFO - 2019-06-23 18:14:29 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:29 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:29 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:29 --> URI Class Initialized
INFO - 2019-06-23 18:14:29 --> Router Class Initialized
INFO - 2019-06-23 18:14:29 --> Output Class Initialized
INFO - 2019-06-23 18:14:29 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:29 --> Input Class Initialized
INFO - 2019-06-23 18:14:29 --> Language Class Initialized
INFO - 2019-06-23 18:14:29 --> Language Class Initialized
INFO - 2019-06-23 18:14:29 --> Config Class Initialized
INFO - 2019-06-23 18:14:29 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:29 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:29 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:29 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:29 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:29 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:29 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:29 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:29 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:29 --> Controller Class Initialized
INFO - 2019-06-23 18:14:36 --> Config Class Initialized
INFO - 2019-06-23 18:14:36 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:36 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:36 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:36 --> URI Class Initialized
INFO - 2019-06-23 18:14:36 --> Router Class Initialized
INFO - 2019-06-23 18:14:36 --> Output Class Initialized
INFO - 2019-06-23 18:14:36 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:36 --> Input Class Initialized
INFO - 2019-06-23 18:14:36 --> Language Class Initialized
INFO - 2019-06-23 18:14:36 --> Language Class Initialized
INFO - 2019-06-23 18:14:36 --> Config Class Initialized
INFO - 2019-06-23 18:14:36 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:36 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:36 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:36 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:36 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:36 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:36 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:36 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:36 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:36 --> Controller Class Initialized
INFO - 2019-06-23 18:14:40 --> Config Class Initialized
INFO - 2019-06-23 18:14:40 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:40 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:40 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:40 --> URI Class Initialized
INFO - 2019-06-23 18:14:40 --> Router Class Initialized
INFO - 2019-06-23 18:14:40 --> Output Class Initialized
INFO - 2019-06-23 18:14:40 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:40 --> Input Class Initialized
INFO - 2019-06-23 18:14:40 --> Language Class Initialized
INFO - 2019-06-23 18:14:40 --> Language Class Initialized
INFO - 2019-06-23 18:14:40 --> Config Class Initialized
INFO - 2019-06-23 18:14:40 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:40 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:40 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:41 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:41 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:41 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:41 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:41 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:41 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:41 --> Controller Class Initialized
INFO - 2019-06-23 18:14:45 --> Config Class Initialized
INFO - 2019-06-23 18:14:45 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:45 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:45 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:45 --> URI Class Initialized
INFO - 2019-06-23 18:14:45 --> Router Class Initialized
INFO - 2019-06-23 18:14:45 --> Output Class Initialized
INFO - 2019-06-23 18:14:45 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:45 --> Input Class Initialized
INFO - 2019-06-23 18:14:45 --> Language Class Initialized
INFO - 2019-06-23 18:14:45 --> Language Class Initialized
INFO - 2019-06-23 18:14:45 --> Config Class Initialized
INFO - 2019-06-23 18:14:45 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:45 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:45 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:45 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:45 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:45 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:45 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:45 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:45 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:45 --> Controller Class Initialized
INFO - 2019-06-23 18:14:49 --> Config Class Initialized
INFO - 2019-06-23 18:14:49 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:49 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:49 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:49 --> URI Class Initialized
INFO - 2019-06-23 18:14:49 --> Router Class Initialized
INFO - 2019-06-23 18:14:49 --> Output Class Initialized
INFO - 2019-06-23 18:14:49 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:49 --> Input Class Initialized
INFO - 2019-06-23 18:14:49 --> Language Class Initialized
INFO - 2019-06-23 18:14:49 --> Language Class Initialized
INFO - 2019-06-23 18:14:49 --> Config Class Initialized
INFO - 2019-06-23 18:14:49 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:49 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:49 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:49 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:49 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:49 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:49 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:49 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:49 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:49 --> Controller Class Initialized
INFO - 2019-06-23 18:14:52 --> Config Class Initialized
INFO - 2019-06-23 18:14:52 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:52 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:53 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:53 --> URI Class Initialized
INFO - 2019-06-23 18:14:53 --> Router Class Initialized
INFO - 2019-06-23 18:14:53 --> Output Class Initialized
INFO - 2019-06-23 18:14:53 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:53 --> Input Class Initialized
INFO - 2019-06-23 18:14:53 --> Language Class Initialized
INFO - 2019-06-23 18:14:53 --> Language Class Initialized
INFO - 2019-06-23 18:14:53 --> Config Class Initialized
INFO - 2019-06-23 18:14:53 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:53 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:53 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:53 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:53 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:53 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:53 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:53 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:53 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:53 --> Controller Class Initialized
INFO - 2019-06-23 18:14:55 --> Config Class Initialized
INFO - 2019-06-23 18:14:55 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:56 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:56 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:56 --> URI Class Initialized
INFO - 2019-06-23 18:14:56 --> Router Class Initialized
INFO - 2019-06-23 18:14:56 --> Output Class Initialized
INFO - 2019-06-23 18:14:56 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:56 --> Input Class Initialized
INFO - 2019-06-23 18:14:56 --> Language Class Initialized
INFO - 2019-06-23 18:14:56 --> Language Class Initialized
INFO - 2019-06-23 18:14:56 --> Config Class Initialized
INFO - 2019-06-23 18:14:56 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:56 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:56 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:56 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:56 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:56 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:56 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:56 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:56 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:56 --> Controller Class Initialized
INFO - 2019-06-23 18:14:59 --> Config Class Initialized
INFO - 2019-06-23 18:14:59 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:14:59 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:14:59 --> Utf8 Class Initialized
INFO - 2019-06-23 18:14:59 --> URI Class Initialized
INFO - 2019-06-23 18:14:59 --> Router Class Initialized
INFO - 2019-06-23 18:14:59 --> Output Class Initialized
INFO - 2019-06-23 18:14:59 --> Security Class Initialized
DEBUG - 2019-06-23 18:14:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:14:59 --> Input Class Initialized
INFO - 2019-06-23 18:14:59 --> Language Class Initialized
INFO - 2019-06-23 18:14:59 --> Language Class Initialized
INFO - 2019-06-23 18:14:59 --> Config Class Initialized
INFO - 2019-06-23 18:14:59 --> Loader Class Initialized
DEBUG - 2019-06-23 18:14:59 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:14:59 --> Helper loaded: url_helper
INFO - 2019-06-23 18:14:59 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:14:59 --> Helper loaded: string_helper
INFO - 2019-06-23 18:14:59 --> Helper loaded: array_helper
INFO - 2019-06-23 18:14:59 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:14:59 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:14:59 --> Database Driver Class Initialized
INFO - 2019-06-23 18:14:59 --> Controller Class Initialized
INFO - 2019-06-23 18:15:54 --> Config Class Initialized
INFO - 2019-06-23 18:15:54 --> Hooks Class Initialized
INFO - 2019-06-23 18:15:54 --> Config Class Initialized
INFO - 2019-06-23 18:15:54 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:15:54 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:15:54 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:15:54 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:15:54 --> Utf8 Class Initialized
INFO - 2019-06-23 18:15:54 --> URI Class Initialized
INFO - 2019-06-23 18:15:54 --> URI Class Initialized
INFO - 2019-06-23 18:15:54 --> Router Class Initialized
INFO - 2019-06-23 18:15:54 --> Router Class Initialized
INFO - 2019-06-23 18:15:54 --> Output Class Initialized
INFO - 2019-06-23 18:15:54 --> Output Class Initialized
INFO - 2019-06-23 18:15:54 --> Security Class Initialized
INFO - 2019-06-23 18:15:54 --> Security Class Initialized
DEBUG - 2019-06-23 18:15:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:15:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:15:54 --> Input Class Initialized
INFO - 2019-06-23 18:15:54 --> Input Class Initialized
INFO - 2019-06-23 18:15:54 --> Language Class Initialized
INFO - 2019-06-23 18:15:54 --> Language Class Initialized
INFO - 2019-06-23 18:15:54 --> Language Class Initialized
INFO - 2019-06-23 18:15:54 --> Language Class Initialized
INFO - 2019-06-23 18:15:54 --> Config Class Initialized
INFO - 2019-06-23 18:15:54 --> Loader Class Initialized
INFO - 2019-06-23 18:15:54 --> Config Class Initialized
INFO - 2019-06-23 18:15:54 --> Loader Class Initialized
DEBUG - 2019-06-23 18:15:54 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:15:54 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:15:54 --> Helper loaded: url_helper
INFO - 2019-06-23 18:15:54 --> Helper loaded: url_helper
INFO - 2019-06-23 18:15:54 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:15:54 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:15:54 --> Helper loaded: string_helper
INFO - 2019-06-23 18:15:54 --> Helper loaded: string_helper
INFO - 2019-06-23 18:15:54 --> Helper loaded: array_helper
INFO - 2019-06-23 18:15:54 --> Helper loaded: array_helper
INFO - 2019-06-23 18:15:54 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:15:54 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:15:54 --> Database Driver Class Initialized
INFO - 2019-06-23 18:15:54 --> Controller Class Initialized
INFO - 2019-06-23 18:15:54 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:15:54 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:15:54 --> Database Driver Class Initialized
INFO - 2019-06-23 18:15:54 --> Controller Class Initialized
INFO - 2019-06-23 18:16:09 --> Config Class Initialized
INFO - 2019-06-23 18:16:09 --> Hooks Class Initialized
INFO - 2019-06-23 18:16:09 --> Config Class Initialized
INFO - 2019-06-23 18:16:09 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:16:09 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:16:09 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:16:09 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:09 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:09 --> URI Class Initialized
INFO - 2019-06-23 18:16:09 --> URI Class Initialized
INFO - 2019-06-23 18:16:09 --> Router Class Initialized
INFO - 2019-06-23 18:16:09 --> Router Class Initialized
INFO - 2019-06-23 18:16:09 --> Output Class Initialized
INFO - 2019-06-23 18:16:09 --> Output Class Initialized
INFO - 2019-06-23 18:16:09 --> Security Class Initialized
INFO - 2019-06-23 18:16:09 --> Security Class Initialized
DEBUG - 2019-06-23 18:16:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:16:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:16:09 --> Input Class Initialized
INFO - 2019-06-23 18:16:09 --> Input Class Initialized
INFO - 2019-06-23 18:16:09 --> Language Class Initialized
INFO - 2019-06-23 18:16:09 --> Language Class Initialized
INFO - 2019-06-23 18:16:09 --> Language Class Initialized
INFO - 2019-06-23 18:16:09 --> Language Class Initialized
INFO - 2019-06-23 18:16:09 --> Config Class Initialized
INFO - 2019-06-23 18:16:09 --> Config Class Initialized
INFO - 2019-06-23 18:16:09 --> Loader Class Initialized
INFO - 2019-06-23 18:16:09 --> Loader Class Initialized
DEBUG - 2019-06-23 18:16:09 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:16:09 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:16:09 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:09 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:09 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:09 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:09 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:09 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:09 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:09 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:09 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:09 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:09 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:09 --> Controller Class Initialized
INFO - 2019-06-23 18:16:09 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:09 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:09 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:09 --> Controller Class Initialized
INFO - 2019-06-23 18:16:24 --> Config Class Initialized
INFO - 2019-06-23 18:16:24 --> Config Class Initialized
INFO - 2019-06-23 18:16:24 --> Hooks Class Initialized
INFO - 2019-06-23 18:16:24 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:16:24 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:16:24 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:16:24 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:16:24 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:24 --> URI Class Initialized
INFO - 2019-06-23 18:16:24 --> URI Class Initialized
INFO - 2019-06-23 18:16:24 --> Router Class Initialized
INFO - 2019-06-23 18:16:24 --> Router Class Initialized
INFO - 2019-06-23 18:16:24 --> Output Class Initialized
INFO - 2019-06-23 18:16:24 --> Output Class Initialized
INFO - 2019-06-23 18:16:24 --> Security Class Initialized
INFO - 2019-06-23 18:16:24 --> Security Class Initialized
DEBUG - 2019-06-23 18:16:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:16:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:16:24 --> Input Class Initialized
INFO - 2019-06-23 18:16:24 --> Language Class Initialized
INFO - 2019-06-23 18:16:24 --> Input Class Initialized
INFO - 2019-06-23 18:16:24 --> Language Class Initialized
INFO - 2019-06-23 18:16:24 --> Language Class Initialized
INFO - 2019-06-23 18:16:24 --> Config Class Initialized
INFO - 2019-06-23 18:16:24 --> Loader Class Initialized
INFO - 2019-06-23 18:16:24 --> Language Class Initialized
DEBUG - 2019-06-23 18:16:24 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:16:24 --> Config Class Initialized
INFO - 2019-06-23 18:16:24 --> Loader Class Initialized
INFO - 2019-06-23 18:16:24 --> Helper loaded: url_helper
DEBUG - 2019-06-23 18:16:24 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:16:24 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:24 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:24 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:24 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:24 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:24 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:24 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:16:24 --> Helper loaded: array_helper
DEBUG - 2019-06-23 18:16:24 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:24 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:24 --> Controller Class Initialized
INFO - 2019-06-23 18:16:24 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:24 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:24 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:24 --> Controller Class Initialized
INFO - 2019-06-23 18:16:25 --> Config Class Initialized
INFO - 2019-06-23 18:16:25 --> Config Class Initialized
INFO - 2019-06-23 18:16:25 --> Hooks Class Initialized
INFO - 2019-06-23 18:16:25 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:16:25 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:16:25 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:16:25 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:25 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:25 --> URI Class Initialized
INFO - 2019-06-23 18:16:25 --> URI Class Initialized
INFO - 2019-06-23 18:16:25 --> Router Class Initialized
INFO - 2019-06-23 18:16:25 --> Router Class Initialized
INFO - 2019-06-23 18:16:25 --> Output Class Initialized
INFO - 2019-06-23 18:16:25 --> Output Class Initialized
INFO - 2019-06-23 18:16:25 --> Security Class Initialized
INFO - 2019-06-23 18:16:25 --> Security Class Initialized
DEBUG - 2019-06-23 18:16:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:16:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:16:25 --> Input Class Initialized
INFO - 2019-06-23 18:16:25 --> Input Class Initialized
INFO - 2019-06-23 18:16:25 --> Language Class Initialized
INFO - 2019-06-23 18:16:25 --> Language Class Initialized
INFO - 2019-06-23 18:16:25 --> Language Class Initialized
INFO - 2019-06-23 18:16:25 --> Language Class Initialized
INFO - 2019-06-23 18:16:25 --> Config Class Initialized
INFO - 2019-06-23 18:16:25 --> Config Class Initialized
INFO - 2019-06-23 18:16:25 --> Loader Class Initialized
INFO - 2019-06-23 18:16:25 --> Loader Class Initialized
DEBUG - 2019-06-23 18:16:25 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:16:25 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:16:25 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:25 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:25 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:25 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:25 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:25 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:25 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:25 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:25 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:25 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:25 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:25 --> Controller Class Initialized
INFO - 2019-06-23 18:16:25 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:25 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:25 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:25 --> Controller Class Initialized
INFO - 2019-06-23 18:16:26 --> Config Class Initialized
INFO - 2019-06-23 18:16:26 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:16:26 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:16:26 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:26 --> URI Class Initialized
INFO - 2019-06-23 18:16:26 --> Router Class Initialized
INFO - 2019-06-23 18:16:26 --> Output Class Initialized
INFO - 2019-06-23 18:16:26 --> Security Class Initialized
DEBUG - 2019-06-23 18:16:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:16:26 --> Input Class Initialized
INFO - 2019-06-23 18:16:26 --> Language Class Initialized
INFO - 2019-06-23 18:16:26 --> Language Class Initialized
INFO - 2019-06-23 18:16:26 --> Config Class Initialized
INFO - 2019-06-23 18:16:26 --> Loader Class Initialized
DEBUG - 2019-06-23 18:16:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:16:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:26 --> Controller Class Initialized
INFO - 2019-06-23 18:16:27 --> Config Class Initialized
INFO - 2019-06-23 18:16:27 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:16:27 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:16:27 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:27 --> URI Class Initialized
INFO - 2019-06-23 18:16:27 --> Router Class Initialized
INFO - 2019-06-23 18:16:27 --> Output Class Initialized
INFO - 2019-06-23 18:16:27 --> Security Class Initialized
DEBUG - 2019-06-23 18:16:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:16:27 --> Input Class Initialized
INFO - 2019-06-23 18:16:27 --> Language Class Initialized
INFO - 2019-06-23 18:16:27 --> Language Class Initialized
INFO - 2019-06-23 18:16:27 --> Config Class Initialized
INFO - 2019-06-23 18:16:27 --> Loader Class Initialized
DEBUG - 2019-06-23 18:16:27 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:16:27 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:27 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:27 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:27 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:27 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:27 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:27 --> Controller Class Initialized
INFO - 2019-06-23 18:16:29 --> Config Class Initialized
INFO - 2019-06-23 18:16:29 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:16:29 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:16:29 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:29 --> URI Class Initialized
INFO - 2019-06-23 18:16:29 --> Router Class Initialized
INFO - 2019-06-23 18:16:29 --> Output Class Initialized
INFO - 2019-06-23 18:16:29 --> Security Class Initialized
DEBUG - 2019-06-23 18:16:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:16:29 --> Input Class Initialized
INFO - 2019-06-23 18:16:29 --> Language Class Initialized
INFO - 2019-06-23 18:16:29 --> Language Class Initialized
INFO - 2019-06-23 18:16:29 --> Config Class Initialized
INFO - 2019-06-23 18:16:29 --> Loader Class Initialized
DEBUG - 2019-06-23 18:16:29 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:16:29 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:29 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:29 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:29 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:29 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:29 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:29 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:29 --> Controller Class Initialized
INFO - 2019-06-23 18:16:40 --> Config Class Initialized
INFO - 2019-06-23 18:16:40 --> Config Class Initialized
INFO - 2019-06-23 18:16:40 --> Hooks Class Initialized
INFO - 2019-06-23 18:16:40 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:16:40 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:16:40 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:16:40 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:40 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:40 --> URI Class Initialized
INFO - 2019-06-23 18:16:40 --> URI Class Initialized
INFO - 2019-06-23 18:16:40 --> Router Class Initialized
INFO - 2019-06-23 18:16:40 --> Router Class Initialized
INFO - 2019-06-23 18:16:40 --> Output Class Initialized
INFO - 2019-06-23 18:16:40 --> Output Class Initialized
INFO - 2019-06-23 18:16:40 --> Security Class Initialized
INFO - 2019-06-23 18:16:40 --> Security Class Initialized
DEBUG - 2019-06-23 18:16:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:16:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:16:40 --> Input Class Initialized
INFO - 2019-06-23 18:16:40 --> Input Class Initialized
INFO - 2019-06-23 18:16:40 --> Language Class Initialized
INFO - 2019-06-23 18:16:40 --> Language Class Initialized
INFO - 2019-06-23 18:16:40 --> Language Class Initialized
INFO - 2019-06-23 18:16:40 --> Language Class Initialized
INFO - 2019-06-23 18:16:40 --> Config Class Initialized
INFO - 2019-06-23 18:16:40 --> Config Class Initialized
INFO - 2019-06-23 18:16:40 --> Loader Class Initialized
INFO - 2019-06-23 18:16:40 --> Loader Class Initialized
DEBUG - 2019-06-23 18:16:40 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:16:40 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:16:40 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:40 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:40 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:40 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:40 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:40 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:40 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:40 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:40 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:40 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:40 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:40 --> Controller Class Initialized
INFO - 2019-06-23 18:16:40 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:40 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:40 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:40 --> Controller Class Initialized
INFO - 2019-06-23 18:16:41 --> Config Class Initialized
INFO - 2019-06-23 18:16:41 --> Config Class Initialized
INFO - 2019-06-23 18:16:41 --> Hooks Class Initialized
INFO - 2019-06-23 18:16:41 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:16:41 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:16:41 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:16:41 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:41 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:41 --> URI Class Initialized
INFO - 2019-06-23 18:16:41 --> URI Class Initialized
INFO - 2019-06-23 18:16:41 --> Router Class Initialized
INFO - 2019-06-23 18:16:41 --> Router Class Initialized
INFO - 2019-06-23 18:16:41 --> Output Class Initialized
INFO - 2019-06-23 18:16:41 --> Output Class Initialized
INFO - 2019-06-23 18:16:41 --> Security Class Initialized
INFO - 2019-06-23 18:16:41 --> Security Class Initialized
DEBUG - 2019-06-23 18:16:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:16:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:16:41 --> Input Class Initialized
INFO - 2019-06-23 18:16:41 --> Input Class Initialized
INFO - 2019-06-23 18:16:41 --> Language Class Initialized
INFO - 2019-06-23 18:16:41 --> Language Class Initialized
INFO - 2019-06-23 18:16:41 --> Language Class Initialized
INFO - 2019-06-23 18:16:41 --> Language Class Initialized
INFO - 2019-06-23 18:16:41 --> Config Class Initialized
INFO - 2019-06-23 18:16:41 --> Loader Class Initialized
INFO - 2019-06-23 18:16:41 --> Config Class Initialized
INFO - 2019-06-23 18:16:41 --> Loader Class Initialized
DEBUG - 2019-06-23 18:16:41 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:16:41 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:16:41 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:41 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:41 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:41 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:41 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:41 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:41 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:41 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:41 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:41 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:41 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:41 --> Controller Class Initialized
INFO - 2019-06-23 18:16:41 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:41 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:41 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:41 --> Controller Class Initialized
INFO - 2019-06-23 18:16:42 --> Config Class Initialized
INFO - 2019-06-23 18:16:42 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:16:42 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:16:42 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:42 --> URI Class Initialized
INFO - 2019-06-23 18:16:42 --> Router Class Initialized
INFO - 2019-06-23 18:16:42 --> Output Class Initialized
INFO - 2019-06-23 18:16:42 --> Security Class Initialized
DEBUG - 2019-06-23 18:16:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:16:42 --> Input Class Initialized
INFO - 2019-06-23 18:16:42 --> Language Class Initialized
INFO - 2019-06-23 18:16:42 --> Language Class Initialized
INFO - 2019-06-23 18:16:42 --> Config Class Initialized
INFO - 2019-06-23 18:16:42 --> Loader Class Initialized
DEBUG - 2019-06-23 18:16:42 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:16:42 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:42 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:42 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:42 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:42 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:42 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:43 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:43 --> Controller Class Initialized
INFO - 2019-06-23 18:16:44 --> Config Class Initialized
INFO - 2019-06-23 18:16:44 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:16:44 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:16:44 --> Utf8 Class Initialized
INFO - 2019-06-23 18:16:44 --> URI Class Initialized
INFO - 2019-06-23 18:16:44 --> Router Class Initialized
INFO - 2019-06-23 18:16:44 --> Output Class Initialized
INFO - 2019-06-23 18:16:44 --> Security Class Initialized
DEBUG - 2019-06-23 18:16:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:16:44 --> Input Class Initialized
INFO - 2019-06-23 18:16:44 --> Language Class Initialized
INFO - 2019-06-23 18:16:44 --> Language Class Initialized
INFO - 2019-06-23 18:16:44 --> Config Class Initialized
INFO - 2019-06-23 18:16:44 --> Loader Class Initialized
DEBUG - 2019-06-23 18:16:44 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:16:44 --> Helper loaded: url_helper
INFO - 2019-06-23 18:16:44 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:16:44 --> Helper loaded: string_helper
INFO - 2019-06-23 18:16:44 --> Helper loaded: array_helper
INFO - 2019-06-23 18:16:44 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:16:44 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:16:44 --> Database Driver Class Initialized
INFO - 2019-06-23 18:16:44 --> Controller Class Initialized
INFO - 2019-06-23 18:17:11 --> Config Class Initialized
INFO - 2019-06-23 18:17:11 --> Config Class Initialized
INFO - 2019-06-23 18:17:11 --> Hooks Class Initialized
INFO - 2019-06-23 18:17:11 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:17:11 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:17:11 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:17:11 --> Utf8 Class Initialized
INFO - 2019-06-23 18:17:11 --> Utf8 Class Initialized
INFO - 2019-06-23 18:17:11 --> URI Class Initialized
INFO - 2019-06-23 18:17:11 --> URI Class Initialized
INFO - 2019-06-23 18:17:11 --> Router Class Initialized
INFO - 2019-06-23 18:17:11 --> Router Class Initialized
INFO - 2019-06-23 18:17:11 --> Output Class Initialized
INFO - 2019-06-23 18:17:11 --> Output Class Initialized
INFO - 2019-06-23 18:17:11 --> Security Class Initialized
INFO - 2019-06-23 18:17:11 --> Security Class Initialized
DEBUG - 2019-06-23 18:17:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:17:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:17:11 --> Input Class Initialized
INFO - 2019-06-23 18:17:11 --> Input Class Initialized
INFO - 2019-06-23 18:17:11 --> Language Class Initialized
INFO - 2019-06-23 18:17:11 --> Language Class Initialized
INFO - 2019-06-23 18:17:11 --> Language Class Initialized
INFO - 2019-06-23 18:17:11 --> Language Class Initialized
INFO - 2019-06-23 18:17:11 --> Config Class Initialized
INFO - 2019-06-23 18:17:11 --> Config Class Initialized
INFO - 2019-06-23 18:17:11 --> Loader Class Initialized
INFO - 2019-06-23 18:17:11 --> Loader Class Initialized
DEBUG - 2019-06-23 18:17:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:17:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:17:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:17:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:17:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:17:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:17:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:17:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:17:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:17:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:17:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:17:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:17:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:17:11 --> Controller Class Initialized
INFO - 2019-06-23 18:17:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:17:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:17:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:17:11 --> Controller Class Initialized
INFO - 2019-06-23 18:17:12 --> Config Class Initialized
INFO - 2019-06-23 18:17:12 --> Config Class Initialized
INFO - 2019-06-23 18:17:12 --> Hooks Class Initialized
INFO - 2019-06-23 18:17:12 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:17:12 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:17:12 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:17:12 --> Utf8 Class Initialized
INFO - 2019-06-23 18:17:12 --> Utf8 Class Initialized
INFO - 2019-06-23 18:17:12 --> URI Class Initialized
INFO - 2019-06-23 18:17:12 --> URI Class Initialized
INFO - 2019-06-23 18:17:12 --> Router Class Initialized
INFO - 2019-06-23 18:17:12 --> Router Class Initialized
INFO - 2019-06-23 18:17:12 --> Output Class Initialized
INFO - 2019-06-23 18:17:12 --> Output Class Initialized
INFO - 2019-06-23 18:17:12 --> Security Class Initialized
INFO - 2019-06-23 18:17:12 --> Security Class Initialized
DEBUG - 2019-06-23 18:17:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:17:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:17:12 --> Input Class Initialized
INFO - 2019-06-23 18:17:12 --> Input Class Initialized
INFO - 2019-06-23 18:17:12 --> Language Class Initialized
INFO - 2019-06-23 18:17:12 --> Language Class Initialized
INFO - 2019-06-23 18:17:12 --> Language Class Initialized
INFO - 2019-06-23 18:17:12 --> Language Class Initialized
INFO - 2019-06-23 18:17:12 --> Config Class Initialized
INFO - 2019-06-23 18:17:12 --> Config Class Initialized
INFO - 2019-06-23 18:17:12 --> Loader Class Initialized
INFO - 2019-06-23 18:17:12 --> Loader Class Initialized
DEBUG - 2019-06-23 18:17:12 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:17:12 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:17:12 --> Helper loaded: url_helper
INFO - 2019-06-23 18:17:12 --> Helper loaded: url_helper
INFO - 2019-06-23 18:17:12 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:17:12 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:17:12 --> Helper loaded: string_helper
INFO - 2019-06-23 18:17:12 --> Helper loaded: string_helper
INFO - 2019-06-23 18:17:12 --> Helper loaded: array_helper
INFO - 2019-06-23 18:17:12 --> Helper loaded: array_helper
INFO - 2019-06-23 18:17:12 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:17:12 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:17:12 --> Database Driver Class Initialized
INFO - 2019-06-23 18:17:12 --> Controller Class Initialized
INFO - 2019-06-23 18:17:12 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:17:13 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:17:13 --> Database Driver Class Initialized
INFO - 2019-06-23 18:17:13 --> Controller Class Initialized
INFO - 2019-06-23 18:17:23 --> Config Class Initialized
INFO - 2019-06-23 18:17:23 --> Config Class Initialized
INFO - 2019-06-23 18:17:23 --> Hooks Class Initialized
INFO - 2019-06-23 18:17:23 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:17:23 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:17:23 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:17:23 --> Utf8 Class Initialized
INFO - 2019-06-23 18:17:23 --> Utf8 Class Initialized
INFO - 2019-06-23 18:17:23 --> URI Class Initialized
INFO - 2019-06-23 18:17:23 --> URI Class Initialized
INFO - 2019-06-23 18:17:23 --> Router Class Initialized
INFO - 2019-06-23 18:17:23 --> Router Class Initialized
INFO - 2019-06-23 18:17:23 --> Output Class Initialized
INFO - 2019-06-23 18:17:23 --> Output Class Initialized
INFO - 2019-06-23 18:17:23 --> Security Class Initialized
INFO - 2019-06-23 18:17:23 --> Security Class Initialized
DEBUG - 2019-06-23 18:17:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:17:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:17:23 --> Input Class Initialized
INFO - 2019-06-23 18:17:23 --> Input Class Initialized
INFO - 2019-06-23 18:17:23 --> Language Class Initialized
INFO - 2019-06-23 18:17:23 --> Language Class Initialized
INFO - 2019-06-23 18:17:23 --> Language Class Initialized
INFO - 2019-06-23 18:17:23 --> Language Class Initialized
INFO - 2019-06-23 18:17:23 --> Config Class Initialized
INFO - 2019-06-23 18:17:23 --> Config Class Initialized
INFO - 2019-06-23 18:17:23 --> Loader Class Initialized
INFO - 2019-06-23 18:17:23 --> Loader Class Initialized
DEBUG - 2019-06-23 18:17:23 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:17:23 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:17:23 --> Helper loaded: url_helper
INFO - 2019-06-23 18:17:23 --> Helper loaded: url_helper
INFO - 2019-06-23 18:17:23 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:17:23 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:17:23 --> Helper loaded: string_helper
INFO - 2019-06-23 18:17:23 --> Helper loaded: string_helper
INFO - 2019-06-23 18:17:23 --> Helper loaded: array_helper
INFO - 2019-06-23 18:17:23 --> Helper loaded: array_helper
INFO - 2019-06-23 18:17:23 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:17:23 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:17:23 --> Database Driver Class Initialized
INFO - 2019-06-23 18:17:23 --> Controller Class Initialized
INFO - 2019-06-23 18:17:23 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:17:23 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:17:23 --> Database Driver Class Initialized
INFO - 2019-06-23 18:17:23 --> Controller Class Initialized
INFO - 2019-06-23 18:17:26 --> Config Class Initialized
INFO - 2019-06-23 18:17:26 --> Config Class Initialized
INFO - 2019-06-23 18:17:26 --> Hooks Class Initialized
INFO - 2019-06-23 18:17:26 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:17:26 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:17:26 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:17:26 --> Utf8 Class Initialized
INFO - 2019-06-23 18:17:26 --> Utf8 Class Initialized
INFO - 2019-06-23 18:17:26 --> URI Class Initialized
INFO - 2019-06-23 18:17:26 --> URI Class Initialized
INFO - 2019-06-23 18:17:26 --> Router Class Initialized
INFO - 2019-06-23 18:17:26 --> Router Class Initialized
INFO - 2019-06-23 18:17:26 --> Output Class Initialized
INFO - 2019-06-23 18:17:26 --> Output Class Initialized
INFO - 2019-06-23 18:17:26 --> Security Class Initialized
INFO - 2019-06-23 18:17:26 --> Security Class Initialized
DEBUG - 2019-06-23 18:17:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:17:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:17:26 --> Input Class Initialized
INFO - 2019-06-23 18:17:26 --> Input Class Initialized
INFO - 2019-06-23 18:17:26 --> Language Class Initialized
INFO - 2019-06-23 18:17:26 --> Language Class Initialized
INFO - 2019-06-23 18:17:26 --> Language Class Initialized
INFO - 2019-06-23 18:17:26 --> Language Class Initialized
INFO - 2019-06-23 18:17:26 --> Config Class Initialized
INFO - 2019-06-23 18:17:26 --> Config Class Initialized
INFO - 2019-06-23 18:17:26 --> Loader Class Initialized
INFO - 2019-06-23 18:17:26 --> Loader Class Initialized
DEBUG - 2019-06-23 18:17:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:17:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:17:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:17:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:17:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:17:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:17:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:17:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:17:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:17:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:17:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:17:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:17:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:17:26 --> Controller Class Initialized
INFO - 2019-06-23 18:17:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:17:27 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:17:27 --> Database Driver Class Initialized
INFO - 2019-06-23 18:17:27 --> Controller Class Initialized
INFO - 2019-06-23 18:20:17 --> Config Class Initialized
INFO - 2019-06-23 18:20:17 --> Hooks Class Initialized
INFO - 2019-06-23 18:20:17 --> Config Class Initialized
INFO - 2019-06-23 18:20:17 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:20:17 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:20:17 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:20:17 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:20:17 --> URI Class Initialized
INFO - 2019-06-23 18:20:17 --> Utf8 Class Initialized
INFO - 2019-06-23 18:20:17 --> URI Class Initialized
INFO - 2019-06-23 18:20:17 --> Router Class Initialized
INFO - 2019-06-23 18:20:17 --> Router Class Initialized
INFO - 2019-06-23 18:20:17 --> Output Class Initialized
INFO - 2019-06-23 18:20:17 --> Output Class Initialized
INFO - 2019-06-23 18:20:17 --> Security Class Initialized
INFO - 2019-06-23 18:20:17 --> Security Class Initialized
DEBUG - 2019-06-23 18:20:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:20:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:20:17 --> Input Class Initialized
INFO - 2019-06-23 18:20:17 --> Input Class Initialized
INFO - 2019-06-23 18:20:17 --> Language Class Initialized
INFO - 2019-06-23 18:20:17 --> Language Class Initialized
INFO - 2019-06-23 18:20:17 --> Language Class Initialized
INFO - 2019-06-23 18:20:17 --> Language Class Initialized
INFO - 2019-06-23 18:20:17 --> Config Class Initialized
INFO - 2019-06-23 18:20:17 --> Loader Class Initialized
INFO - 2019-06-23 18:20:17 --> Config Class Initialized
INFO - 2019-06-23 18:20:17 --> Loader Class Initialized
DEBUG - 2019-06-23 18:20:17 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:20:17 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:20:17 --> Helper loaded: url_helper
INFO - 2019-06-23 18:20:17 --> Helper loaded: url_helper
INFO - 2019-06-23 18:20:17 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:20:17 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:20:17 --> Helper loaded: string_helper
INFO - 2019-06-23 18:20:18 --> Helper loaded: string_helper
INFO - 2019-06-23 18:20:18 --> Helper loaded: array_helper
INFO - 2019-06-23 18:20:18 --> Helper loaded: array_helper
INFO - 2019-06-23 18:20:18 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:20:18 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:20:18 --> Database Driver Class Initialized
INFO - 2019-06-23 18:20:18 --> Controller Class Initialized
INFO - 2019-06-23 18:20:18 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:20:18 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:20:18 --> Database Driver Class Initialized
INFO - 2019-06-23 18:20:18 --> Controller Class Initialized
INFO - 2019-06-23 18:20:18 --> Config Class Initialized
INFO - 2019-06-23 18:20:18 --> Config Class Initialized
INFO - 2019-06-23 18:20:18 --> Hooks Class Initialized
INFO - 2019-06-23 18:20:18 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:20:18 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:20:18 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:20:18 --> Utf8 Class Initialized
INFO - 2019-06-23 18:20:18 --> Utf8 Class Initialized
INFO - 2019-06-23 18:20:18 --> URI Class Initialized
INFO - 2019-06-23 18:20:18 --> URI Class Initialized
INFO - 2019-06-23 18:20:18 --> Router Class Initialized
INFO - 2019-06-23 18:20:18 --> Router Class Initialized
INFO - 2019-06-23 18:20:18 --> Output Class Initialized
INFO - 2019-06-23 18:20:18 --> Output Class Initialized
INFO - 2019-06-23 18:20:18 --> Security Class Initialized
INFO - 2019-06-23 18:20:18 --> Security Class Initialized
DEBUG - 2019-06-23 18:20:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:20:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:20:18 --> Input Class Initialized
INFO - 2019-06-23 18:20:18 --> Input Class Initialized
INFO - 2019-06-23 18:20:18 --> Language Class Initialized
INFO - 2019-06-23 18:20:18 --> Language Class Initialized
INFO - 2019-06-23 18:20:18 --> Language Class Initialized
INFO - 2019-06-23 18:20:18 --> Language Class Initialized
INFO - 2019-06-23 18:20:18 --> Config Class Initialized
INFO - 2019-06-23 18:20:18 --> Config Class Initialized
INFO - 2019-06-23 18:20:18 --> Loader Class Initialized
INFO - 2019-06-23 18:20:18 --> Loader Class Initialized
DEBUG - 2019-06-23 18:20:18 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:20:18 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:20:18 --> Helper loaded: url_helper
INFO - 2019-06-23 18:20:18 --> Helper loaded: url_helper
INFO - 2019-06-23 18:20:18 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:20:18 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:20:18 --> Helper loaded: string_helper
INFO - 2019-06-23 18:20:18 --> Helper loaded: string_helper
INFO - 2019-06-23 18:20:19 --> Helper loaded: array_helper
INFO - 2019-06-23 18:20:19 --> Helper loaded: array_helper
INFO - 2019-06-23 18:20:19 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:20:19 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:20:19 --> Database Driver Class Initialized
INFO - 2019-06-23 18:20:19 --> Controller Class Initialized
INFO - 2019-06-23 18:20:19 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:20:19 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:20:19 --> Database Driver Class Initialized
INFO - 2019-06-23 18:20:19 --> Controller Class Initialized
INFO - 2019-06-23 18:21:02 --> Config Class Initialized
INFO - 2019-06-23 18:21:02 --> Config Class Initialized
INFO - 2019-06-23 18:21:02 --> Hooks Class Initialized
INFO - 2019-06-23 18:21:02 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:21:02 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:21:02 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:21:02 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:02 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:02 --> URI Class Initialized
INFO - 2019-06-23 18:21:02 --> URI Class Initialized
INFO - 2019-06-23 18:21:02 --> Router Class Initialized
INFO - 2019-06-23 18:21:02 --> Router Class Initialized
INFO - 2019-06-23 18:21:02 --> Output Class Initialized
INFO - 2019-06-23 18:21:02 --> Output Class Initialized
INFO - 2019-06-23 18:21:02 --> Security Class Initialized
INFO - 2019-06-23 18:21:02 --> Security Class Initialized
DEBUG - 2019-06-23 18:21:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:21:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:21:02 --> Input Class Initialized
INFO - 2019-06-23 18:21:02 --> Input Class Initialized
INFO - 2019-06-23 18:21:02 --> Language Class Initialized
INFO - 2019-06-23 18:21:02 --> Language Class Initialized
INFO - 2019-06-23 18:21:02 --> Language Class Initialized
INFO - 2019-06-23 18:21:02 --> Language Class Initialized
INFO - 2019-06-23 18:21:02 --> Config Class Initialized
INFO - 2019-06-23 18:21:02 --> Config Class Initialized
INFO - 2019-06-23 18:21:02 --> Loader Class Initialized
INFO - 2019-06-23 18:21:02 --> Loader Class Initialized
DEBUG - 2019-06-23 18:21:02 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:21:02 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:21:02 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:03 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:03 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:03 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:03 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:03 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:03 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:03 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:03 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:03 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:03 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:03 --> Controller Class Initialized
INFO - 2019-06-23 18:21:03 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:03 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:03 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:03 --> Controller Class Initialized
INFO - 2019-06-23 18:21:05 --> Config Class Initialized
INFO - 2019-06-23 18:21:05 --> Config Class Initialized
INFO - 2019-06-23 18:21:05 --> Hooks Class Initialized
INFO - 2019-06-23 18:21:05 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:21:05 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:21:05 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:21:05 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:05 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:05 --> URI Class Initialized
INFO - 2019-06-23 18:21:05 --> URI Class Initialized
INFO - 2019-06-23 18:21:05 --> Router Class Initialized
INFO - 2019-06-23 18:21:05 --> Router Class Initialized
INFO - 2019-06-23 18:21:05 --> Output Class Initialized
INFO - 2019-06-23 18:21:05 --> Output Class Initialized
INFO - 2019-06-23 18:21:05 --> Security Class Initialized
INFO - 2019-06-23 18:21:05 --> Security Class Initialized
DEBUG - 2019-06-23 18:21:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:21:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:21:05 --> Input Class Initialized
INFO - 2019-06-23 18:21:06 --> Input Class Initialized
INFO - 2019-06-23 18:21:06 --> Language Class Initialized
INFO - 2019-06-23 18:21:06 --> Language Class Initialized
INFO - 2019-06-23 18:21:06 --> Language Class Initialized
INFO - 2019-06-23 18:21:06 --> Language Class Initialized
INFO - 2019-06-23 18:21:06 --> Config Class Initialized
INFO - 2019-06-23 18:21:06 --> Loader Class Initialized
INFO - 2019-06-23 18:21:06 --> Config Class Initialized
INFO - 2019-06-23 18:21:06 --> Loader Class Initialized
DEBUG - 2019-06-23 18:21:06 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:21:06 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:21:06 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:06 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:06 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:06 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:06 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:06 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:06 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:06 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:06 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:06 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:06 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:06 --> Controller Class Initialized
INFO - 2019-06-23 18:21:06 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:06 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:06 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:06 --> Controller Class Initialized
INFO - 2019-06-23 18:21:17 --> Config Class Initialized
INFO - 2019-06-23 18:21:17 --> Config Class Initialized
INFO - 2019-06-23 18:21:17 --> Hooks Class Initialized
INFO - 2019-06-23 18:21:17 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:21:17 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:21:17 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:21:17 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:17 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:17 --> URI Class Initialized
INFO - 2019-06-23 18:21:18 --> URI Class Initialized
INFO - 2019-06-23 18:21:18 --> Router Class Initialized
INFO - 2019-06-23 18:21:18 --> Router Class Initialized
INFO - 2019-06-23 18:21:18 --> Output Class Initialized
INFO - 2019-06-23 18:21:18 --> Output Class Initialized
INFO - 2019-06-23 18:21:18 --> Security Class Initialized
INFO - 2019-06-23 18:21:18 --> Security Class Initialized
DEBUG - 2019-06-23 18:21:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:21:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:21:18 --> Input Class Initialized
INFO - 2019-06-23 18:21:18 --> Input Class Initialized
INFO - 2019-06-23 18:21:18 --> Language Class Initialized
INFO - 2019-06-23 18:21:18 --> Language Class Initialized
INFO - 2019-06-23 18:21:18 --> Language Class Initialized
INFO - 2019-06-23 18:21:18 --> Language Class Initialized
INFO - 2019-06-23 18:21:18 --> Config Class Initialized
INFO - 2019-06-23 18:21:18 --> Loader Class Initialized
INFO - 2019-06-23 18:21:18 --> Config Class Initialized
INFO - 2019-06-23 18:21:18 --> Loader Class Initialized
DEBUG - 2019-06-23 18:21:18 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:21:18 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:21:18 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:18 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:18 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:18 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:18 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:18 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:18 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:18 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:18 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:18 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:18 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:18 --> Controller Class Initialized
INFO - 2019-06-23 18:21:18 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:18 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:18 --> Config Class Initialized
INFO - 2019-06-23 18:21:18 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:18 --> Config Class Initialized
INFO - 2019-06-23 18:21:18 --> Hooks Class Initialized
INFO - 2019-06-23 18:21:18 --> Hooks Class Initialized
INFO - 2019-06-23 18:21:18 --> Controller Class Initialized
DEBUG - 2019-06-23 18:21:18 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:21:18 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:21:18 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:18 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:18 --> URI Class Initialized
INFO - 2019-06-23 18:21:18 --> URI Class Initialized
INFO - 2019-06-23 18:21:18 --> Router Class Initialized
INFO - 2019-06-23 18:21:18 --> Router Class Initialized
INFO - 2019-06-23 18:21:18 --> Output Class Initialized
INFO - 2019-06-23 18:21:18 --> Output Class Initialized
INFO - 2019-06-23 18:21:18 --> Security Class Initialized
INFO - 2019-06-23 18:21:18 --> Security Class Initialized
DEBUG - 2019-06-23 18:21:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:21:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:21:18 --> Input Class Initialized
INFO - 2019-06-23 18:21:18 --> Input Class Initialized
INFO - 2019-06-23 18:21:18 --> Language Class Initialized
INFO - 2019-06-23 18:21:18 --> Language Class Initialized
INFO - 2019-06-23 18:21:18 --> Language Class Initialized
INFO - 2019-06-23 18:21:18 --> Language Class Initialized
INFO - 2019-06-23 18:21:18 --> Config Class Initialized
INFO - 2019-06-23 18:21:18 --> Config Class Initialized
INFO - 2019-06-23 18:21:18 --> Loader Class Initialized
INFO - 2019-06-23 18:21:18 --> Loader Class Initialized
DEBUG - 2019-06-23 18:21:18 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:21:18 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:21:18 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:18 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:18 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:18 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:18 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:18 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:19 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:19 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:19 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:19 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:19 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:19 --> Controller Class Initialized
INFO - 2019-06-23 18:21:19 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:19 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:19 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:19 --> Controller Class Initialized
INFO - 2019-06-23 18:21:38 --> Config Class Initialized
INFO - 2019-06-23 18:21:38 --> Config Class Initialized
INFO - 2019-06-23 18:21:38 --> Hooks Class Initialized
INFO - 2019-06-23 18:21:38 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:21:38 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:21:38 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:21:38 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:21:38 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:38 --> URI Class Initialized
INFO - 2019-06-23 18:21:38 --> URI Class Initialized
INFO - 2019-06-23 18:21:38 --> Router Class Initialized
INFO - 2019-06-23 18:21:38 --> Router Class Initialized
INFO - 2019-06-23 18:21:38 --> Output Class Initialized
INFO - 2019-06-23 18:21:38 --> Output Class Initialized
INFO - 2019-06-23 18:21:38 --> Security Class Initialized
INFO - 2019-06-23 18:21:38 --> Security Class Initialized
DEBUG - 2019-06-23 18:21:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:21:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:21:38 --> Input Class Initialized
INFO - 2019-06-23 18:21:38 --> Input Class Initialized
INFO - 2019-06-23 18:21:38 --> Language Class Initialized
INFO - 2019-06-23 18:21:38 --> Language Class Initialized
INFO - 2019-06-23 18:21:38 --> Language Class Initialized
INFO - 2019-06-23 18:21:38 --> Language Class Initialized
INFO - 2019-06-23 18:21:38 --> Config Class Initialized
INFO - 2019-06-23 18:21:38 --> Config Class Initialized
INFO - 2019-06-23 18:21:38 --> Loader Class Initialized
INFO - 2019-06-23 18:21:38 --> Loader Class Initialized
DEBUG - 2019-06-23 18:21:38 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:21:38 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:21:38 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:38 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:38 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:38 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:39 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:39 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:39 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:39 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:39 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:39 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:39 --> Controller Class Initialized
INFO - 2019-06-23 18:21:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:39 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:39 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:39 --> Controller Class Initialized
INFO - 2019-06-23 18:21:41 --> Config Class Initialized
INFO - 2019-06-23 18:21:41 --> Hooks Class Initialized
INFO - 2019-06-23 18:21:41 --> Config Class Initialized
INFO - 2019-06-23 18:21:41 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:21:41 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:21:41 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:21:41 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:41 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:41 --> URI Class Initialized
INFO - 2019-06-23 18:21:41 --> URI Class Initialized
INFO - 2019-06-23 18:21:41 --> Router Class Initialized
INFO - 2019-06-23 18:21:41 --> Router Class Initialized
INFO - 2019-06-23 18:21:41 --> Output Class Initialized
INFO - 2019-06-23 18:21:41 --> Output Class Initialized
INFO - 2019-06-23 18:21:41 --> Security Class Initialized
INFO - 2019-06-23 18:21:41 --> Security Class Initialized
DEBUG - 2019-06-23 18:21:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:21:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:21:41 --> Input Class Initialized
INFO - 2019-06-23 18:21:41 --> Input Class Initialized
INFO - 2019-06-23 18:21:41 --> Language Class Initialized
INFO - 2019-06-23 18:21:41 --> Language Class Initialized
INFO - 2019-06-23 18:21:41 --> Language Class Initialized
INFO - 2019-06-23 18:21:42 --> Language Class Initialized
INFO - 2019-06-23 18:21:42 --> Config Class Initialized
INFO - 2019-06-23 18:21:42 --> Config Class Initialized
INFO - 2019-06-23 18:21:42 --> Loader Class Initialized
INFO - 2019-06-23 18:21:42 --> Loader Class Initialized
DEBUG - 2019-06-23 18:21:42 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:21:42 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:21:42 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:42 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:42 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:42 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:42 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:42 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:42 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:42 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:42 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:42 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:42 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:42 --> Controller Class Initialized
INFO - 2019-06-23 18:21:42 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:42 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:42 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:42 --> Controller Class Initialized
INFO - 2019-06-23 18:21:46 --> Config Class Initialized
INFO - 2019-06-23 18:21:46 --> Config Class Initialized
INFO - 2019-06-23 18:21:46 --> Hooks Class Initialized
INFO - 2019-06-23 18:21:46 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:21:46 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:21:46 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:21:46 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:46 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:46 --> URI Class Initialized
INFO - 2019-06-23 18:21:46 --> URI Class Initialized
INFO - 2019-06-23 18:21:46 --> Router Class Initialized
INFO - 2019-06-23 18:21:46 --> Router Class Initialized
INFO - 2019-06-23 18:21:46 --> Output Class Initialized
INFO - 2019-06-23 18:21:46 --> Output Class Initialized
INFO - 2019-06-23 18:21:46 --> Security Class Initialized
INFO - 2019-06-23 18:21:46 --> Security Class Initialized
DEBUG - 2019-06-23 18:21:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:21:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:21:46 --> Input Class Initialized
INFO - 2019-06-23 18:21:46 --> Input Class Initialized
INFO - 2019-06-23 18:21:46 --> Language Class Initialized
INFO - 2019-06-23 18:21:46 --> Language Class Initialized
INFO - 2019-06-23 18:21:46 --> Language Class Initialized
INFO - 2019-06-23 18:21:46 --> Language Class Initialized
INFO - 2019-06-23 18:21:46 --> Config Class Initialized
INFO - 2019-06-23 18:21:46 --> Loader Class Initialized
INFO - 2019-06-23 18:21:46 --> Config Class Initialized
INFO - 2019-06-23 18:21:46 --> Loader Class Initialized
DEBUG - 2019-06-23 18:21:46 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:21:46 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:21:46 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:46 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:46 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:46 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:46 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:46 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:46 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:46 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:46 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:47 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:47 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:47 --> Controller Class Initialized
INFO - 2019-06-23 18:21:47 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:47 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:47 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:47 --> Controller Class Initialized
INFO - 2019-06-23 18:21:49 --> Config Class Initialized
INFO - 2019-06-23 18:21:49 --> Config Class Initialized
INFO - 2019-06-23 18:21:49 --> Hooks Class Initialized
INFO - 2019-06-23 18:21:49 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:21:49 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:21:49 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:21:49 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:49 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:49 --> URI Class Initialized
INFO - 2019-06-23 18:21:49 --> URI Class Initialized
INFO - 2019-06-23 18:21:49 --> Router Class Initialized
INFO - 2019-06-23 18:21:49 --> Router Class Initialized
INFO - 2019-06-23 18:21:49 --> Output Class Initialized
INFO - 2019-06-23 18:21:49 --> Output Class Initialized
INFO - 2019-06-23 18:21:49 --> Security Class Initialized
INFO - 2019-06-23 18:21:49 --> Security Class Initialized
DEBUG - 2019-06-23 18:21:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:21:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:21:49 --> Input Class Initialized
INFO - 2019-06-23 18:21:49 --> Input Class Initialized
INFO - 2019-06-23 18:21:49 --> Language Class Initialized
INFO - 2019-06-23 18:21:49 --> Language Class Initialized
INFO - 2019-06-23 18:21:49 --> Language Class Initialized
INFO - 2019-06-23 18:21:49 --> Language Class Initialized
INFO - 2019-06-23 18:21:49 --> Config Class Initialized
INFO - 2019-06-23 18:21:49 --> Config Class Initialized
INFO - 2019-06-23 18:21:49 --> Loader Class Initialized
INFO - 2019-06-23 18:21:49 --> Loader Class Initialized
DEBUG - 2019-06-23 18:21:49 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:21:49 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:21:49 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:49 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:49 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:49 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:49 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:49 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:49 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:49 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:49 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:50 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:50 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:50 --> Controller Class Initialized
INFO - 2019-06-23 18:21:50 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:50 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:50 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:50 --> Controller Class Initialized
INFO - 2019-06-23 18:21:54 --> Config Class Initialized
INFO - 2019-06-23 18:21:54 --> Config Class Initialized
INFO - 2019-06-23 18:21:54 --> Hooks Class Initialized
INFO - 2019-06-23 18:21:55 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:21:55 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:21:55 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:21:55 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:55 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:55 --> URI Class Initialized
INFO - 2019-06-23 18:21:55 --> URI Class Initialized
INFO - 2019-06-23 18:21:55 --> Router Class Initialized
INFO - 2019-06-23 18:21:55 --> Router Class Initialized
INFO - 2019-06-23 18:21:55 --> Output Class Initialized
INFO - 2019-06-23 18:21:55 --> Output Class Initialized
INFO - 2019-06-23 18:21:55 --> Security Class Initialized
INFO - 2019-06-23 18:21:55 --> Security Class Initialized
DEBUG - 2019-06-23 18:21:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:21:55 --> Input Class Initialized
DEBUG - 2019-06-23 18:21:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:21:55 --> Language Class Initialized
INFO - 2019-06-23 18:21:55 --> Input Class Initialized
INFO - 2019-06-23 18:21:55 --> Language Class Initialized
INFO - 2019-06-23 18:21:55 --> Language Class Initialized
INFO - 2019-06-23 18:21:55 --> Language Class Initialized
INFO - 2019-06-23 18:21:55 --> Config Class Initialized
INFO - 2019-06-23 18:21:55 --> Config Class Initialized
INFO - 2019-06-23 18:21:55 --> Loader Class Initialized
INFO - 2019-06-23 18:21:55 --> Loader Class Initialized
DEBUG - 2019-06-23 18:21:55 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:21:55 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:21:55 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:55 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:55 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:55 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:55 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:55 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:55 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:55 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:55 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:55 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:55 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:55 --> Controller Class Initialized
INFO - 2019-06-23 18:21:55 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:55 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:55 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:55 --> Controller Class Initialized
INFO - 2019-06-23 18:21:58 --> Config Class Initialized
INFO - 2019-06-23 18:21:58 --> Hooks Class Initialized
INFO - 2019-06-23 18:21:58 --> Config Class Initialized
DEBUG - 2019-06-23 18:21:58 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:21:58 --> Hooks Class Initialized
INFO - 2019-06-23 18:21:58 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:21:58 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:21:58 --> URI Class Initialized
INFO - 2019-06-23 18:21:58 --> Utf8 Class Initialized
INFO - 2019-06-23 18:21:58 --> URI Class Initialized
INFO - 2019-06-23 18:21:58 --> Router Class Initialized
INFO - 2019-06-23 18:21:58 --> Router Class Initialized
INFO - 2019-06-23 18:21:58 --> Output Class Initialized
INFO - 2019-06-23 18:21:58 --> Output Class Initialized
INFO - 2019-06-23 18:21:58 --> Security Class Initialized
INFO - 2019-06-23 18:21:58 --> Security Class Initialized
DEBUG - 2019-06-23 18:21:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:21:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:21:58 --> Input Class Initialized
INFO - 2019-06-23 18:21:58 --> Input Class Initialized
INFO - 2019-06-23 18:21:58 --> Language Class Initialized
INFO - 2019-06-23 18:21:58 --> Language Class Initialized
INFO - 2019-06-23 18:21:58 --> Language Class Initialized
INFO - 2019-06-23 18:21:58 --> Language Class Initialized
INFO - 2019-06-23 18:21:58 --> Config Class Initialized
INFO - 2019-06-23 18:21:58 --> Loader Class Initialized
INFO - 2019-06-23 18:21:58 --> Config Class Initialized
INFO - 2019-06-23 18:21:58 --> Loader Class Initialized
DEBUG - 2019-06-23 18:21:58 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:21:58 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:21:58 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:58 --> Helper loaded: url_helper
INFO - 2019-06-23 18:21:58 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:58 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:21:58 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:58 --> Helper loaded: string_helper
INFO - 2019-06-23 18:21:58 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:58 --> Helper loaded: array_helper
INFO - 2019-06-23 18:21:58 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:58 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:58 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:58 --> Controller Class Initialized
INFO - 2019-06-23 18:21:58 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:21:58 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:21:58 --> Database Driver Class Initialized
INFO - 2019-06-23 18:21:58 --> Controller Class Initialized
INFO - 2019-06-23 18:23:18 --> Config Class Initialized
INFO - 2019-06-23 18:23:18 --> Config Class Initialized
INFO - 2019-06-23 18:23:18 --> Hooks Class Initialized
INFO - 2019-06-23 18:23:18 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:23:18 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:23:18 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:23:18 --> Utf8 Class Initialized
INFO - 2019-06-23 18:23:18 --> Utf8 Class Initialized
INFO - 2019-06-23 18:23:18 --> URI Class Initialized
INFO - 2019-06-23 18:23:18 --> URI Class Initialized
INFO - 2019-06-23 18:23:18 --> Router Class Initialized
INFO - 2019-06-23 18:23:18 --> Router Class Initialized
INFO - 2019-06-23 18:23:18 --> Output Class Initialized
INFO - 2019-06-23 18:23:18 --> Output Class Initialized
INFO - 2019-06-23 18:23:18 --> Security Class Initialized
INFO - 2019-06-23 18:23:18 --> Security Class Initialized
DEBUG - 2019-06-23 18:23:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:23:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:23:18 --> Input Class Initialized
INFO - 2019-06-23 18:23:18 --> Input Class Initialized
INFO - 2019-06-23 18:23:18 --> Language Class Initialized
INFO - 2019-06-23 18:23:18 --> Language Class Initialized
INFO - 2019-06-23 18:23:18 --> Language Class Initialized
INFO - 2019-06-23 18:23:18 --> Language Class Initialized
INFO - 2019-06-23 18:23:18 --> Config Class Initialized
INFO - 2019-06-23 18:23:18 --> Config Class Initialized
INFO - 2019-06-23 18:23:18 --> Loader Class Initialized
INFO - 2019-06-23 18:23:18 --> Loader Class Initialized
DEBUG - 2019-06-23 18:23:18 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:23:18 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:23:18 --> Helper loaded: url_helper
INFO - 2019-06-23 18:23:18 --> Helper loaded: url_helper
INFO - 2019-06-23 18:23:18 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:23:18 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:23:18 --> Helper loaded: string_helper
INFO - 2019-06-23 18:23:18 --> Helper loaded: string_helper
INFO - 2019-06-23 18:23:18 --> Helper loaded: array_helper
INFO - 2019-06-23 18:23:18 --> Helper loaded: array_helper
INFO - 2019-06-23 18:23:18 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:23:18 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:23:19 --> Database Driver Class Initialized
INFO - 2019-06-23 18:23:19 --> Controller Class Initialized
INFO - 2019-06-23 18:23:19 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:23:19 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:23:19 --> Database Driver Class Initialized
INFO - 2019-06-23 18:23:19 --> Controller Class Initialized
INFO - 2019-06-23 18:23:26 --> Config Class Initialized
INFO - 2019-06-23 18:23:26 --> Config Class Initialized
INFO - 2019-06-23 18:23:26 --> Hooks Class Initialized
INFO - 2019-06-23 18:23:26 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:23:26 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:23:26 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:23:26 --> Utf8 Class Initialized
INFO - 2019-06-23 18:23:26 --> Utf8 Class Initialized
INFO - 2019-06-23 18:23:26 --> URI Class Initialized
INFO - 2019-06-23 18:23:26 --> URI Class Initialized
INFO - 2019-06-23 18:23:26 --> Router Class Initialized
INFO - 2019-06-23 18:23:26 --> Router Class Initialized
INFO - 2019-06-23 18:23:26 --> Output Class Initialized
INFO - 2019-06-23 18:23:26 --> Output Class Initialized
INFO - 2019-06-23 18:23:26 --> Security Class Initialized
INFO - 2019-06-23 18:23:26 --> Security Class Initialized
DEBUG - 2019-06-23 18:23:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:23:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:23:26 --> Input Class Initialized
INFO - 2019-06-23 18:23:26 --> Input Class Initialized
INFO - 2019-06-23 18:23:26 --> Language Class Initialized
INFO - 2019-06-23 18:23:26 --> Language Class Initialized
INFO - 2019-06-23 18:23:26 --> Language Class Initialized
INFO - 2019-06-23 18:23:26 --> Language Class Initialized
INFO - 2019-06-23 18:23:26 --> Config Class Initialized
INFO - 2019-06-23 18:23:26 --> Loader Class Initialized
INFO - 2019-06-23 18:23:26 --> Config Class Initialized
INFO - 2019-06-23 18:23:26 --> Loader Class Initialized
DEBUG - 2019-06-23 18:23:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:23:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:23:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:23:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:23:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:23:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:23:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:23:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:23:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:23:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:23:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:23:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:23:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:23:26 --> Controller Class Initialized
INFO - 2019-06-23 18:23:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:23:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:23:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:23:26 --> Controller Class Initialized
INFO - 2019-06-23 18:23:29 --> Config Class Initialized
INFO - 2019-06-23 18:23:29 --> Config Class Initialized
INFO - 2019-06-23 18:23:29 --> Hooks Class Initialized
INFO - 2019-06-23 18:23:29 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:23:29 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:23:29 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:23:29 --> Utf8 Class Initialized
INFO - 2019-06-23 18:23:29 --> Utf8 Class Initialized
INFO - 2019-06-23 18:23:29 --> URI Class Initialized
INFO - 2019-06-23 18:23:29 --> URI Class Initialized
INFO - 2019-06-23 18:23:29 --> Router Class Initialized
INFO - 2019-06-23 18:23:29 --> Router Class Initialized
INFO - 2019-06-23 18:23:29 --> Output Class Initialized
INFO - 2019-06-23 18:23:29 --> Output Class Initialized
INFO - 2019-06-23 18:23:29 --> Security Class Initialized
INFO - 2019-06-23 18:23:29 --> Security Class Initialized
DEBUG - 2019-06-23 18:23:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:23:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:23:29 --> Input Class Initialized
INFO - 2019-06-23 18:23:29 --> Input Class Initialized
INFO - 2019-06-23 18:23:29 --> Language Class Initialized
INFO - 2019-06-23 18:23:29 --> Language Class Initialized
INFO - 2019-06-23 18:23:29 --> Language Class Initialized
INFO - 2019-06-23 18:23:29 --> Language Class Initialized
INFO - 2019-06-23 18:23:29 --> Config Class Initialized
INFO - 2019-06-23 18:23:29 --> Loader Class Initialized
INFO - 2019-06-23 18:23:29 --> Config Class Initialized
INFO - 2019-06-23 18:23:29 --> Loader Class Initialized
DEBUG - 2019-06-23 18:23:29 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:23:29 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:23:29 --> Helper loaded: url_helper
INFO - 2019-06-23 18:23:29 --> Helper loaded: url_helper
INFO - 2019-06-23 18:23:29 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:23:29 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:23:29 --> Helper loaded: string_helper
INFO - 2019-06-23 18:23:29 --> Helper loaded: string_helper
INFO - 2019-06-23 18:23:29 --> Helper loaded: array_helper
INFO - 2019-06-23 18:23:29 --> Helper loaded: array_helper
INFO - 2019-06-23 18:23:29 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:23:29 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:23:29 --> Database Driver Class Initialized
INFO - 2019-06-23 18:23:29 --> Controller Class Initialized
INFO - 2019-06-23 18:23:29 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:23:29 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:23:29 --> Database Driver Class Initialized
INFO - 2019-06-23 18:23:29 --> Controller Class Initialized
INFO - 2019-06-23 18:24:02 --> Config Class Initialized
INFO - 2019-06-23 18:24:02 --> Config Class Initialized
INFO - 2019-06-23 18:24:02 --> Hooks Class Initialized
INFO - 2019-06-23 18:24:02 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:24:02 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:24:02 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:24:02 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:02 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:02 --> URI Class Initialized
INFO - 2019-06-23 18:24:02 --> URI Class Initialized
INFO - 2019-06-23 18:24:02 --> Router Class Initialized
INFO - 2019-06-23 18:24:02 --> Router Class Initialized
INFO - 2019-06-23 18:24:02 --> Output Class Initialized
INFO - 2019-06-23 18:24:02 --> Output Class Initialized
INFO - 2019-06-23 18:24:02 --> Security Class Initialized
INFO - 2019-06-23 18:24:02 --> Security Class Initialized
DEBUG - 2019-06-23 18:24:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:24:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:24:02 --> Input Class Initialized
INFO - 2019-06-23 18:24:02 --> Input Class Initialized
INFO - 2019-06-23 18:24:02 --> Language Class Initialized
INFO - 2019-06-23 18:24:02 --> Language Class Initialized
INFO - 2019-06-23 18:24:02 --> Language Class Initialized
INFO - 2019-06-23 18:24:02 --> Language Class Initialized
INFO - 2019-06-23 18:24:02 --> Config Class Initialized
INFO - 2019-06-23 18:24:02 --> Config Class Initialized
INFO - 2019-06-23 18:24:02 --> Loader Class Initialized
INFO - 2019-06-23 18:24:02 --> Loader Class Initialized
DEBUG - 2019-06-23 18:24:02 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:24:02 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:24:02 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:02 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:02 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:02 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:02 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:02 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:02 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:02 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:02 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:24:02 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:02 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:02 --> Controller Class Initialized
INFO - 2019-06-23 18:24:02 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:24:02 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:02 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:02 --> Controller Class Initialized
INFO - 2019-06-23 18:24:05 --> Config Class Initialized
INFO - 2019-06-23 18:24:05 --> Config Class Initialized
INFO - 2019-06-23 18:24:05 --> Hooks Class Initialized
INFO - 2019-06-23 18:24:05 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:24:05 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:24:05 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:24:05 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:05 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:05 --> URI Class Initialized
INFO - 2019-06-23 18:24:05 --> URI Class Initialized
INFO - 2019-06-23 18:24:05 --> Router Class Initialized
INFO - 2019-06-23 18:24:05 --> Router Class Initialized
INFO - 2019-06-23 18:24:05 --> Output Class Initialized
INFO - 2019-06-23 18:24:05 --> Output Class Initialized
INFO - 2019-06-23 18:24:05 --> Security Class Initialized
DEBUG - 2019-06-23 18:24:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:24:05 --> Security Class Initialized
INFO - 2019-06-23 18:24:05 --> Input Class Initialized
INFO - 2019-06-23 18:24:05 --> Language Class Initialized
DEBUG - 2019-06-23 18:24:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:24:05 --> Language Class Initialized
INFO - 2019-06-23 18:24:05 --> Input Class Initialized
INFO - 2019-06-23 18:24:05 --> Config Class Initialized
INFO - 2019-06-23 18:24:05 --> Language Class Initialized
INFO - 2019-06-23 18:24:05 --> Loader Class Initialized
DEBUG - 2019-06-23 18:24:05 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:24:05 --> Language Class Initialized
INFO - 2019-06-23 18:24:05 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:05 --> Config Class Initialized
INFO - 2019-06-23 18:24:05 --> Loader Class Initialized
INFO - 2019-06-23 18:24:05 --> Helper loaded: inflector_helper
DEBUG - 2019-06-23 18:24:05 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:24:05 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:05 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:05 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:05 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:05 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:24:05 --> Helper loaded: string_helper
DEBUG - 2019-06-23 18:24:05 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:05 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:05 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:05 --> Controller Class Initialized
INFO - 2019-06-23 18:24:05 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:24:05 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:05 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:05 --> Controller Class Initialized
INFO - 2019-06-23 18:24:10 --> Config Class Initialized
INFO - 2019-06-23 18:24:10 --> Hooks Class Initialized
INFO - 2019-06-23 18:24:10 --> Config Class Initialized
DEBUG - 2019-06-23 18:24:10 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:24:10 --> Hooks Class Initialized
INFO - 2019-06-23 18:24:10 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:24:10 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:24:10 --> URI Class Initialized
INFO - 2019-06-23 18:24:10 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:10 --> URI Class Initialized
INFO - 2019-06-23 18:24:10 --> Router Class Initialized
INFO - 2019-06-23 18:24:10 --> Router Class Initialized
INFO - 2019-06-23 18:24:10 --> Output Class Initialized
INFO - 2019-06-23 18:24:10 --> Output Class Initialized
INFO - 2019-06-23 18:24:10 --> Security Class Initialized
INFO - 2019-06-23 18:24:10 --> Security Class Initialized
DEBUG - 2019-06-23 18:24:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:24:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:24:10 --> Input Class Initialized
INFO - 2019-06-23 18:24:11 --> Input Class Initialized
INFO - 2019-06-23 18:24:11 --> Language Class Initialized
INFO - 2019-06-23 18:24:11 --> Language Class Initialized
INFO - 2019-06-23 18:24:11 --> Language Class Initialized
INFO - 2019-06-23 18:24:11 --> Language Class Initialized
INFO - 2019-06-23 18:24:11 --> Config Class Initialized
INFO - 2019-06-23 18:24:11 --> Config Class Initialized
INFO - 2019-06-23 18:24:11 --> Loader Class Initialized
INFO - 2019-06-23 18:24:11 --> Loader Class Initialized
DEBUG - 2019-06-23 18:24:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:24:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:24:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:24:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:11 --> Controller Class Initialized
INFO - 2019-06-23 18:24:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:24:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:11 --> Controller Class Initialized
INFO - 2019-06-23 18:24:13 --> Config Class Initialized
INFO - 2019-06-23 18:24:13 --> Config Class Initialized
INFO - 2019-06-23 18:24:13 --> Hooks Class Initialized
INFO - 2019-06-23 18:24:13 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:24:13 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:24:13 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:24:13 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:13 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:13 --> URI Class Initialized
INFO - 2019-06-23 18:24:13 --> URI Class Initialized
INFO - 2019-06-23 18:24:13 --> Router Class Initialized
INFO - 2019-06-23 18:24:13 --> Router Class Initialized
INFO - 2019-06-23 18:24:14 --> Output Class Initialized
INFO - 2019-06-23 18:24:14 --> Output Class Initialized
INFO - 2019-06-23 18:24:14 --> Security Class Initialized
INFO - 2019-06-23 18:24:14 --> Security Class Initialized
DEBUG - 2019-06-23 18:24:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:24:14 --> Input Class Initialized
DEBUG - 2019-06-23 18:24:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:24:14 --> Input Class Initialized
INFO - 2019-06-23 18:24:14 --> Language Class Initialized
INFO - 2019-06-23 18:24:14 --> Language Class Initialized
INFO - 2019-06-23 18:24:14 --> Language Class Initialized
INFO - 2019-06-23 18:24:14 --> Language Class Initialized
INFO - 2019-06-23 18:24:14 --> Config Class Initialized
INFO - 2019-06-23 18:24:14 --> Config Class Initialized
INFO - 2019-06-23 18:24:14 --> Loader Class Initialized
INFO - 2019-06-23 18:24:14 --> Loader Class Initialized
DEBUG - 2019-06-23 18:24:14 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:24:14 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:24:14 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:14 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:14 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:14 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:14 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:14 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:14 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:14 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:24:14 --> Helper loaded: array_helper
DEBUG - 2019-06-23 18:24:14 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:14 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:14 --> Controller Class Initialized
INFO - 2019-06-23 18:24:14 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:24:14 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:14 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:14 --> Controller Class Initialized
INFO - 2019-06-23 18:24:15 --> Config Class Initialized
INFO - 2019-06-23 18:24:15 --> Hooks Class Initialized
INFO - 2019-06-23 18:24:15 --> Config Class Initialized
INFO - 2019-06-23 18:24:15 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:24:15 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:24:15 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:24:15 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:15 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:15 --> URI Class Initialized
INFO - 2019-06-23 18:24:15 --> URI Class Initialized
INFO - 2019-06-23 18:24:15 --> Router Class Initialized
INFO - 2019-06-23 18:24:15 --> Router Class Initialized
INFO - 2019-06-23 18:24:15 --> Output Class Initialized
INFO - 2019-06-23 18:24:15 --> Output Class Initialized
INFO - 2019-06-23 18:24:15 --> Security Class Initialized
INFO - 2019-06-23 18:24:15 --> Security Class Initialized
DEBUG - 2019-06-23 18:24:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:24:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:24:15 --> Input Class Initialized
INFO - 2019-06-23 18:24:15 --> Input Class Initialized
INFO - 2019-06-23 18:24:15 --> Language Class Initialized
INFO - 2019-06-23 18:24:16 --> Language Class Initialized
INFO - 2019-06-23 18:24:16 --> Language Class Initialized
INFO - 2019-06-23 18:24:16 --> Language Class Initialized
INFO - 2019-06-23 18:24:16 --> Config Class Initialized
INFO - 2019-06-23 18:24:16 --> Config Class Initialized
INFO - 2019-06-23 18:24:16 --> Loader Class Initialized
INFO - 2019-06-23 18:24:16 --> Loader Class Initialized
DEBUG - 2019-06-23 18:24:16 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:24:16 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:24:16 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:16 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:16 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:16 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:16 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:16 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:16 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:16 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:16 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:24:16 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:16 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:16 --> Controller Class Initialized
INFO - 2019-06-23 18:24:16 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:24:16 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:16 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:16 --> Controller Class Initialized
INFO - 2019-06-23 18:24:18 --> Config Class Initialized
INFO - 2019-06-23 18:24:18 --> Config Class Initialized
INFO - 2019-06-23 18:24:18 --> Hooks Class Initialized
INFO - 2019-06-23 18:24:18 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:24:18 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:24:18 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:24:18 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:18 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:18 --> URI Class Initialized
INFO - 2019-06-23 18:24:18 --> URI Class Initialized
INFO - 2019-06-23 18:24:18 --> Router Class Initialized
INFO - 2019-06-23 18:24:18 --> Router Class Initialized
INFO - 2019-06-23 18:24:18 --> Output Class Initialized
INFO - 2019-06-23 18:24:19 --> Output Class Initialized
INFO - 2019-06-23 18:24:19 --> Security Class Initialized
INFO - 2019-06-23 18:24:19 --> Security Class Initialized
DEBUG - 2019-06-23 18:24:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:24:19 --> Input Class Initialized
DEBUG - 2019-06-23 18:24:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:24:19 --> Language Class Initialized
INFO - 2019-06-23 18:24:19 --> Input Class Initialized
INFO - 2019-06-23 18:24:19 --> Language Class Initialized
INFO - 2019-06-23 18:24:19 --> Language Class Initialized
INFO - 2019-06-23 18:24:19 --> Language Class Initialized
INFO - 2019-06-23 18:24:19 --> Config Class Initialized
INFO - 2019-06-23 18:24:19 --> Config Class Initialized
INFO - 2019-06-23 18:24:19 --> Loader Class Initialized
INFO - 2019-06-23 18:24:19 --> Loader Class Initialized
DEBUG - 2019-06-23 18:24:19 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:24:19 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:24:19 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:19 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:19 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:19 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:19 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:19 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:19 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:19 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:19 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:24:19 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:19 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:19 --> Controller Class Initialized
INFO - 2019-06-23 18:24:19 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:24:19 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:19 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:19 --> Controller Class Initialized
INFO - 2019-06-23 18:24:38 --> Config Class Initialized
INFO - 2019-06-23 18:24:38 --> Hooks Class Initialized
INFO - 2019-06-23 18:24:38 --> Config Class Initialized
INFO - 2019-06-23 18:24:38 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:24:38 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:24:38 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:24:38 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:38 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:39 --> URI Class Initialized
INFO - 2019-06-23 18:24:39 --> URI Class Initialized
INFO - 2019-06-23 18:24:39 --> Router Class Initialized
INFO - 2019-06-23 18:24:39 --> Router Class Initialized
INFO - 2019-06-23 18:24:39 --> Output Class Initialized
INFO - 2019-06-23 18:24:39 --> Output Class Initialized
INFO - 2019-06-23 18:24:39 --> Security Class Initialized
INFO - 2019-06-23 18:24:39 --> Security Class Initialized
DEBUG - 2019-06-23 18:24:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:24:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:24:39 --> Input Class Initialized
INFO - 2019-06-23 18:24:39 --> Input Class Initialized
INFO - 2019-06-23 18:24:39 --> Language Class Initialized
INFO - 2019-06-23 18:24:39 --> Language Class Initialized
INFO - 2019-06-23 18:24:39 --> Language Class Initialized
INFO - 2019-06-23 18:24:39 --> Language Class Initialized
INFO - 2019-06-23 18:24:39 --> Config Class Initialized
INFO - 2019-06-23 18:24:39 --> Loader Class Initialized
INFO - 2019-06-23 18:24:39 --> Config Class Initialized
INFO - 2019-06-23 18:24:39 --> Loader Class Initialized
DEBUG - 2019-06-23 18:24:39 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:24:39 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:24:39 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:39 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:39 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:39 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:39 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:39 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:39 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:39 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:24:39 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:39 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:39 --> Controller Class Initialized
INFO - 2019-06-23 18:24:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:24:39 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:39 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:39 --> Controller Class Initialized
INFO - 2019-06-23 18:24:42 --> Config Class Initialized
INFO - 2019-06-23 18:24:42 --> Config Class Initialized
INFO - 2019-06-23 18:24:42 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:24:42 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:24:42 --> Hooks Class Initialized
INFO - 2019-06-23 18:24:42 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:24:42 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:24:42 --> URI Class Initialized
INFO - 2019-06-23 18:24:42 --> Utf8 Class Initialized
INFO - 2019-06-23 18:24:42 --> Router Class Initialized
INFO - 2019-06-23 18:24:42 --> Output Class Initialized
INFO - 2019-06-23 18:24:42 --> URI Class Initialized
INFO - 2019-06-23 18:24:42 --> Security Class Initialized
INFO - 2019-06-23 18:24:42 --> Router Class Initialized
DEBUG - 2019-06-23 18:24:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:24:42 --> Output Class Initialized
INFO - 2019-06-23 18:24:42 --> Input Class Initialized
INFO - 2019-06-23 18:24:42 --> Language Class Initialized
INFO - 2019-06-23 18:24:42 --> Security Class Initialized
INFO - 2019-06-23 18:24:42 --> Language Class Initialized
DEBUG - 2019-06-23 18:24:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:24:42 --> Config Class Initialized
INFO - 2019-06-23 18:24:42 --> Loader Class Initialized
INFO - 2019-06-23 18:24:42 --> Input Class Initialized
INFO - 2019-06-23 18:24:42 --> Language Class Initialized
DEBUG - 2019-06-23 18:24:42 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:24:42 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:42 --> Language Class Initialized
INFO - 2019-06-23 18:24:42 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:24:42 --> Config Class Initialized
INFO - 2019-06-23 18:24:42 --> Loader Class Initialized
INFO - 2019-06-23 18:24:42 --> Helper loaded: string_helper
DEBUG - 2019-06-23 18:24:42 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:24:42 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:42 --> Helper loaded: url_helper
INFO - 2019-06-23 18:24:42 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:24:42 --> Helper loaded: inflector_helper
DEBUG - 2019-06-23 18:24:42 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:42 --> Helper loaded: string_helper
INFO - 2019-06-23 18:24:42 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:42 --> Helper loaded: array_helper
INFO - 2019-06-23 18:24:42 --> Controller Class Initialized
INFO - 2019-06-23 18:24:42 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:24:42 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:24:42 --> Database Driver Class Initialized
INFO - 2019-06-23 18:24:42 --> Controller Class Initialized
INFO - 2019-06-23 18:25:34 --> Config Class Initialized
INFO - 2019-06-23 18:25:34 --> Hooks Class Initialized
INFO - 2019-06-23 18:25:34 --> Config Class Initialized
DEBUG - 2019-06-23 18:25:34 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:25:34 --> Hooks Class Initialized
INFO - 2019-06-23 18:25:34 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:25:34 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:25:34 --> URI Class Initialized
INFO - 2019-06-23 18:25:34 --> Utf8 Class Initialized
INFO - 2019-06-23 18:25:34 --> URI Class Initialized
INFO - 2019-06-23 18:25:34 --> Router Class Initialized
INFO - 2019-06-23 18:25:34 --> Router Class Initialized
INFO - 2019-06-23 18:25:34 --> Output Class Initialized
INFO - 2019-06-23 18:25:34 --> Output Class Initialized
INFO - 2019-06-23 18:25:34 --> Security Class Initialized
INFO - 2019-06-23 18:25:34 --> Security Class Initialized
DEBUG - 2019-06-23 18:25:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:25:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:25:34 --> Input Class Initialized
INFO - 2019-06-23 18:25:34 --> Input Class Initialized
INFO - 2019-06-23 18:25:34 --> Language Class Initialized
INFO - 2019-06-23 18:25:34 --> Language Class Initialized
INFO - 2019-06-23 18:25:34 --> Language Class Initialized
INFO - 2019-06-23 18:25:34 --> Language Class Initialized
INFO - 2019-06-23 18:25:34 --> Config Class Initialized
INFO - 2019-06-23 18:25:34 --> Config Class Initialized
INFO - 2019-06-23 18:25:34 --> Loader Class Initialized
INFO - 2019-06-23 18:25:34 --> Loader Class Initialized
DEBUG - 2019-06-23 18:25:34 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:25:34 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:25:34 --> Helper loaded: url_helper
INFO - 2019-06-23 18:25:34 --> Helper loaded: url_helper
INFO - 2019-06-23 18:25:34 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:25:34 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:25:34 --> Helper loaded: string_helper
INFO - 2019-06-23 18:25:34 --> Helper loaded: string_helper
INFO - 2019-06-23 18:25:34 --> Helper loaded: array_helper
INFO - 2019-06-23 18:25:34 --> Helper loaded: array_helper
INFO - 2019-06-23 18:25:34 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:25:34 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:25:34 --> Database Driver Class Initialized
INFO - 2019-06-23 18:25:34 --> Controller Class Initialized
INFO - 2019-06-23 18:25:34 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:25:34 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:25:34 --> Database Driver Class Initialized
INFO - 2019-06-23 18:25:34 --> Controller Class Initialized
INFO - 2019-06-23 18:25:36 --> Config Class Initialized
INFO - 2019-06-23 18:25:37 --> Hooks Class Initialized
INFO - 2019-06-23 18:25:37 --> Config Class Initialized
INFO - 2019-06-23 18:25:37 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:25:37 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:25:37 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:25:37 --> Utf8 Class Initialized
INFO - 2019-06-23 18:25:37 --> Utf8 Class Initialized
INFO - 2019-06-23 18:25:37 --> URI Class Initialized
INFO - 2019-06-23 18:25:37 --> URI Class Initialized
INFO - 2019-06-23 18:25:37 --> Router Class Initialized
INFO - 2019-06-23 18:25:37 --> Router Class Initialized
INFO - 2019-06-23 18:25:37 --> Output Class Initialized
INFO - 2019-06-23 18:25:37 --> Output Class Initialized
INFO - 2019-06-23 18:25:37 --> Security Class Initialized
INFO - 2019-06-23 18:25:37 --> Security Class Initialized
DEBUG - 2019-06-23 18:25:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:25:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:25:37 --> Input Class Initialized
INFO - 2019-06-23 18:25:37 --> Input Class Initialized
INFO - 2019-06-23 18:25:37 --> Language Class Initialized
INFO - 2019-06-23 18:25:37 --> Language Class Initialized
INFO - 2019-06-23 18:25:37 --> Language Class Initialized
INFO - 2019-06-23 18:25:37 --> Language Class Initialized
INFO - 2019-06-23 18:25:37 --> Config Class Initialized
INFO - 2019-06-23 18:25:37 --> Loader Class Initialized
INFO - 2019-06-23 18:25:37 --> Config Class Initialized
INFO - 2019-06-23 18:25:37 --> Loader Class Initialized
DEBUG - 2019-06-23 18:25:37 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:25:37 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:25:37 --> Helper loaded: url_helper
INFO - 2019-06-23 18:25:37 --> Helper loaded: url_helper
INFO - 2019-06-23 18:25:37 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:25:37 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:25:37 --> Helper loaded: string_helper
INFO - 2019-06-23 18:25:37 --> Helper loaded: string_helper
INFO - 2019-06-23 18:25:37 --> Helper loaded: array_helper
INFO - 2019-06-23 18:25:37 --> Helper loaded: array_helper
INFO - 2019-06-23 18:25:37 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:25:37 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:25:37 --> Database Driver Class Initialized
INFO - 2019-06-23 18:25:37 --> Controller Class Initialized
INFO - 2019-06-23 18:25:37 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:25:37 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:25:37 --> Database Driver Class Initialized
INFO - 2019-06-23 18:25:37 --> Controller Class Initialized
INFO - 2019-06-23 18:25:37 --> Config Class Initialized
INFO - 2019-06-23 18:25:37 --> Config Class Initialized
INFO - 2019-06-23 18:25:37 --> Hooks Class Initialized
INFO - 2019-06-23 18:25:37 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:25:37 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:25:37 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:25:37 --> Utf8 Class Initialized
INFO - 2019-06-23 18:25:37 --> Utf8 Class Initialized
INFO - 2019-06-23 18:25:37 --> URI Class Initialized
INFO - 2019-06-23 18:25:37 --> URI Class Initialized
INFO - 2019-06-23 18:25:38 --> Router Class Initialized
INFO - 2019-06-23 18:25:38 --> Router Class Initialized
INFO - 2019-06-23 18:25:38 --> Output Class Initialized
INFO - 2019-06-23 18:25:38 --> Output Class Initialized
INFO - 2019-06-23 18:25:38 --> Security Class Initialized
INFO - 2019-06-23 18:25:38 --> Security Class Initialized
DEBUG - 2019-06-23 18:25:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:25:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:25:38 --> Input Class Initialized
INFO - 2019-06-23 18:25:38 --> Input Class Initialized
INFO - 2019-06-23 18:25:38 --> Language Class Initialized
INFO - 2019-06-23 18:25:38 --> Language Class Initialized
INFO - 2019-06-23 18:25:38 --> Language Class Initialized
INFO - 2019-06-23 18:25:38 --> Language Class Initialized
INFO - 2019-06-23 18:25:38 --> Config Class Initialized
INFO - 2019-06-23 18:25:38 --> Loader Class Initialized
INFO - 2019-06-23 18:25:38 --> Config Class Initialized
INFO - 2019-06-23 18:25:38 --> Loader Class Initialized
DEBUG - 2019-06-23 18:25:38 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:25:38 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:25:38 --> Helper loaded: url_helper
INFO - 2019-06-23 18:25:38 --> Helper loaded: url_helper
INFO - 2019-06-23 18:25:38 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:25:38 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:25:38 --> Helper loaded: string_helper
INFO - 2019-06-23 18:25:38 --> Helper loaded: string_helper
INFO - 2019-06-23 18:25:38 --> Helper loaded: array_helper
INFO - 2019-06-23 18:25:38 --> Helper loaded: array_helper
INFO - 2019-06-23 18:25:38 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:25:38 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:25:38 --> Database Driver Class Initialized
INFO - 2019-06-23 18:25:38 --> Controller Class Initialized
INFO - 2019-06-23 18:25:38 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:25:38 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:25:38 --> Database Driver Class Initialized
INFO - 2019-06-23 18:25:38 --> Controller Class Initialized
INFO - 2019-06-23 18:26:26 --> Config Class Initialized
INFO - 2019-06-23 18:26:26 --> Config Class Initialized
INFO - 2019-06-23 18:26:26 --> Hooks Class Initialized
INFO - 2019-06-23 18:26:26 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:26:26 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:26:26 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:26:26 --> Utf8 Class Initialized
INFO - 2019-06-23 18:26:26 --> Utf8 Class Initialized
INFO - 2019-06-23 18:26:26 --> URI Class Initialized
INFO - 2019-06-23 18:26:26 --> URI Class Initialized
INFO - 2019-06-23 18:26:26 --> Router Class Initialized
INFO - 2019-06-23 18:26:26 --> Router Class Initialized
INFO - 2019-06-23 18:26:26 --> Output Class Initialized
INFO - 2019-06-23 18:26:26 --> Output Class Initialized
INFO - 2019-06-23 18:26:26 --> Security Class Initialized
INFO - 2019-06-23 18:26:26 --> Security Class Initialized
DEBUG - 2019-06-23 18:26:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:26:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:26:26 --> Input Class Initialized
INFO - 2019-06-23 18:26:26 --> Input Class Initialized
INFO - 2019-06-23 18:26:26 --> Language Class Initialized
INFO - 2019-06-23 18:26:26 --> Language Class Initialized
INFO - 2019-06-23 18:26:26 --> Language Class Initialized
INFO - 2019-06-23 18:26:26 --> Config Class Initialized
INFO - 2019-06-23 18:26:26 --> Language Class Initialized
INFO - 2019-06-23 18:26:26 --> Config Class Initialized
INFO - 2019-06-23 18:26:26 --> Loader Class Initialized
INFO - 2019-06-23 18:26:26 --> Loader Class Initialized
DEBUG - 2019-06-23 18:26:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:26:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:26:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:26:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:26:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:26:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:26:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:26:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:26:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:26:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:26:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:26:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:26:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:26:26 --> Controller Class Initialized
INFO - 2019-06-23 18:26:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:26:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:26:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:26:26 --> Controller Class Initialized
INFO - 2019-06-23 18:27:41 --> Config Class Initialized
INFO - 2019-06-23 18:27:41 --> Config Class Initialized
INFO - 2019-06-23 18:27:41 --> Hooks Class Initialized
INFO - 2019-06-23 18:27:41 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:27:41 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:27:41 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:27:41 --> Utf8 Class Initialized
INFO - 2019-06-23 18:27:41 --> Utf8 Class Initialized
INFO - 2019-06-23 18:27:41 --> URI Class Initialized
INFO - 2019-06-23 18:27:41 --> URI Class Initialized
INFO - 2019-06-23 18:27:41 --> Router Class Initialized
INFO - 2019-06-23 18:27:41 --> Router Class Initialized
INFO - 2019-06-23 18:27:41 --> Output Class Initialized
INFO - 2019-06-23 18:27:41 --> Output Class Initialized
INFO - 2019-06-23 18:27:41 --> Security Class Initialized
INFO - 2019-06-23 18:27:41 --> Security Class Initialized
DEBUG - 2019-06-23 18:27:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:27:41 --> Input Class Initialized
DEBUG - 2019-06-23 18:27:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:27:41 --> Input Class Initialized
INFO - 2019-06-23 18:27:41 --> Language Class Initialized
INFO - 2019-06-23 18:27:41 --> Language Class Initialized
INFO - 2019-06-23 18:27:41 --> Language Class Initialized
INFO - 2019-06-23 18:27:41 --> Language Class Initialized
INFO - 2019-06-23 18:27:41 --> Config Class Initialized
INFO - 2019-06-23 18:27:41 --> Config Class Initialized
INFO - 2019-06-23 18:27:41 --> Loader Class Initialized
INFO - 2019-06-23 18:27:41 --> Loader Class Initialized
DEBUG - 2019-06-23 18:27:41 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:27:41 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:27:41 --> Helper loaded: url_helper
INFO - 2019-06-23 18:27:41 --> Helper loaded: url_helper
INFO - 2019-06-23 18:27:41 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:27:41 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:27:41 --> Helper loaded: string_helper
INFO - 2019-06-23 18:27:41 --> Helper loaded: string_helper
INFO - 2019-06-23 18:27:41 --> Helper loaded: array_helper
INFO - 2019-06-23 18:27:41 --> Helper loaded: array_helper
INFO - 2019-06-23 18:27:41 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:27:41 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:27:41 --> Database Driver Class Initialized
INFO - 2019-06-23 18:27:41 --> Controller Class Initialized
INFO - 2019-06-23 18:27:41 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:27:41 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:27:41 --> Database Driver Class Initialized
INFO - 2019-06-23 18:27:41 --> Controller Class Initialized
INFO - 2019-06-23 18:28:02 --> Config Class Initialized
INFO - 2019-06-23 18:28:02 --> Config Class Initialized
INFO - 2019-06-23 18:28:02 --> Hooks Class Initialized
INFO - 2019-06-23 18:28:02 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:28:02 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:28:02 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:28:02 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:28:02 --> URI Class Initialized
INFO - 2019-06-23 18:28:02 --> Utf8 Class Initialized
INFO - 2019-06-23 18:28:02 --> URI Class Initialized
INFO - 2019-06-23 18:28:02 --> Router Class Initialized
INFO - 2019-06-23 18:28:02 --> Router Class Initialized
INFO - 2019-06-23 18:28:02 --> Output Class Initialized
INFO - 2019-06-23 18:28:02 --> Output Class Initialized
INFO - 2019-06-23 18:28:02 --> Security Class Initialized
INFO - 2019-06-23 18:28:02 --> Security Class Initialized
DEBUG - 2019-06-23 18:28:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:28:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:28:02 --> Input Class Initialized
INFO - 2019-06-23 18:28:02 --> Input Class Initialized
INFO - 2019-06-23 18:28:02 --> Language Class Initialized
INFO - 2019-06-23 18:28:02 --> Language Class Initialized
INFO - 2019-06-23 18:28:02 --> Language Class Initialized
INFO - 2019-06-23 18:28:02 --> Language Class Initialized
INFO - 2019-06-23 18:28:02 --> Config Class Initialized
INFO - 2019-06-23 18:28:02 --> Loader Class Initialized
INFO - 2019-06-23 18:28:02 --> Config Class Initialized
DEBUG - 2019-06-23 18:28:02 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:28:02 --> Loader Class Initialized
DEBUG - 2019-06-23 18:28:02 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:28:02 --> Helper loaded: url_helper
INFO - 2019-06-23 18:28:02 --> Helper loaded: url_helper
INFO - 2019-06-23 18:28:02 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:28:02 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:28:02 --> Helper loaded: string_helper
INFO - 2019-06-23 18:28:02 --> Helper loaded: string_helper
INFO - 2019-06-23 18:28:02 --> Helper loaded: array_helper
INFO - 2019-06-23 18:28:02 --> Helper loaded: array_helper
INFO - 2019-06-23 18:28:02 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:28:02 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:28:02 --> Database Driver Class Initialized
INFO - 2019-06-23 18:28:02 --> Controller Class Initialized
INFO - 2019-06-23 18:28:02 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:28:02 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:28:03 --> Database Driver Class Initialized
INFO - 2019-06-23 18:28:03 --> Controller Class Initialized
INFO - 2019-06-23 18:28:23 --> Config Class Initialized
INFO - 2019-06-23 18:28:23 --> Config Class Initialized
INFO - 2019-06-23 18:28:23 --> Hooks Class Initialized
INFO - 2019-06-23 18:28:23 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:28:23 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:28:23 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:28:23 --> Utf8 Class Initialized
INFO - 2019-06-23 18:28:23 --> Utf8 Class Initialized
INFO - 2019-06-23 18:28:23 --> URI Class Initialized
INFO - 2019-06-23 18:28:23 --> URI Class Initialized
INFO - 2019-06-23 18:28:23 --> Router Class Initialized
INFO - 2019-06-23 18:28:23 --> Router Class Initialized
INFO - 2019-06-23 18:28:23 --> Output Class Initialized
INFO - 2019-06-23 18:28:23 --> Output Class Initialized
INFO - 2019-06-23 18:28:23 --> Security Class Initialized
INFO - 2019-06-23 18:28:23 --> Security Class Initialized
DEBUG - 2019-06-23 18:28:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:28:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:28:23 --> Input Class Initialized
INFO - 2019-06-23 18:28:23 --> Input Class Initialized
INFO - 2019-06-23 18:28:23 --> Language Class Initialized
INFO - 2019-06-23 18:28:23 --> Language Class Initialized
INFO - 2019-06-23 18:28:23 --> Language Class Initialized
INFO - 2019-06-23 18:28:23 --> Language Class Initialized
INFO - 2019-06-23 18:28:23 --> Config Class Initialized
INFO - 2019-06-23 18:28:23 --> Loader Class Initialized
INFO - 2019-06-23 18:28:23 --> Config Class Initialized
INFO - 2019-06-23 18:28:23 --> Loader Class Initialized
DEBUG - 2019-06-23 18:28:23 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:28:23 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:28:23 --> Helper loaded: url_helper
INFO - 2019-06-23 18:28:23 --> Helper loaded: url_helper
INFO - 2019-06-23 18:28:23 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:28:23 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:28:23 --> Helper loaded: string_helper
INFO - 2019-06-23 18:28:23 --> Helper loaded: string_helper
INFO - 2019-06-23 18:28:23 --> Helper loaded: array_helper
INFO - 2019-06-23 18:28:23 --> Helper loaded: array_helper
INFO - 2019-06-23 18:28:23 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:28:23 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:28:23 --> Database Driver Class Initialized
INFO - 2019-06-23 18:28:23 --> Controller Class Initialized
INFO - 2019-06-23 18:28:24 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:28:24 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:28:24 --> Database Driver Class Initialized
INFO - 2019-06-23 18:28:24 --> Controller Class Initialized
INFO - 2019-06-23 18:28:41 --> Config Class Initialized
INFO - 2019-06-23 18:28:41 --> Config Class Initialized
INFO - 2019-06-23 18:28:41 --> Hooks Class Initialized
INFO - 2019-06-23 18:28:41 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:28:41 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:28:41 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:28:41 --> Utf8 Class Initialized
INFO - 2019-06-23 18:28:41 --> Utf8 Class Initialized
INFO - 2019-06-23 18:28:41 --> URI Class Initialized
INFO - 2019-06-23 18:28:41 --> URI Class Initialized
INFO - 2019-06-23 18:28:41 --> Router Class Initialized
INFO - 2019-06-23 18:28:41 --> Router Class Initialized
INFO - 2019-06-23 18:28:41 --> Output Class Initialized
INFO - 2019-06-23 18:28:41 --> Output Class Initialized
INFO - 2019-06-23 18:28:41 --> Security Class Initialized
INFO - 2019-06-23 18:28:41 --> Security Class Initialized
DEBUG - 2019-06-23 18:28:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:28:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:28:41 --> Input Class Initialized
INFO - 2019-06-23 18:28:41 --> Input Class Initialized
INFO - 2019-06-23 18:28:41 --> Language Class Initialized
INFO - 2019-06-23 18:28:41 --> Language Class Initialized
INFO - 2019-06-23 18:28:41 --> Language Class Initialized
INFO - 2019-06-23 18:28:41 --> Language Class Initialized
INFO - 2019-06-23 18:28:41 --> Config Class Initialized
INFO - 2019-06-23 18:28:41 --> Loader Class Initialized
INFO - 2019-06-23 18:28:41 --> Config Class Initialized
INFO - 2019-06-23 18:28:41 --> Loader Class Initialized
DEBUG - 2019-06-23 18:28:41 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:28:41 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:28:41 --> Helper loaded: url_helper
INFO - 2019-06-23 18:28:41 --> Helper loaded: url_helper
INFO - 2019-06-23 18:28:41 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:28:41 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:28:41 --> Helper loaded: string_helper
INFO - 2019-06-23 18:28:41 --> Helper loaded: string_helper
INFO - 2019-06-23 18:28:41 --> Helper loaded: array_helper
INFO - 2019-06-23 18:28:42 --> Helper loaded: array_helper
INFO - 2019-06-23 18:28:42 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:28:42 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:28:42 --> Database Driver Class Initialized
INFO - 2019-06-23 18:28:42 --> Controller Class Initialized
INFO - 2019-06-23 18:28:42 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:28:42 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:28:42 --> Database Driver Class Initialized
INFO - 2019-06-23 18:28:42 --> Controller Class Initialized
INFO - 2019-06-23 18:29:28 --> Config Class Initialized
INFO - 2019-06-23 18:29:28 --> Config Class Initialized
INFO - 2019-06-23 18:29:28 --> Hooks Class Initialized
INFO - 2019-06-23 18:29:28 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:29:28 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:29:28 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:29:28 --> Utf8 Class Initialized
INFO - 2019-06-23 18:29:28 --> Utf8 Class Initialized
INFO - 2019-06-23 18:29:28 --> URI Class Initialized
INFO - 2019-06-23 18:29:28 --> URI Class Initialized
INFO - 2019-06-23 18:29:28 --> Router Class Initialized
INFO - 2019-06-23 18:29:28 --> Router Class Initialized
INFO - 2019-06-23 18:29:28 --> Output Class Initialized
INFO - 2019-06-23 18:29:28 --> Output Class Initialized
INFO - 2019-06-23 18:29:28 --> Security Class Initialized
INFO - 2019-06-23 18:29:28 --> Security Class Initialized
DEBUG - 2019-06-23 18:29:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:29:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:29:28 --> Input Class Initialized
INFO - 2019-06-23 18:29:28 --> Input Class Initialized
INFO - 2019-06-23 18:29:28 --> Language Class Initialized
INFO - 2019-06-23 18:29:28 --> Language Class Initialized
INFO - 2019-06-23 18:29:28 --> Language Class Initialized
INFO - 2019-06-23 18:29:28 --> Language Class Initialized
INFO - 2019-06-23 18:29:28 --> Config Class Initialized
INFO - 2019-06-23 18:29:28 --> Config Class Initialized
INFO - 2019-06-23 18:29:28 --> Loader Class Initialized
INFO - 2019-06-23 18:29:28 --> Loader Class Initialized
DEBUG - 2019-06-23 18:29:28 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:29:28 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:29:28 --> Helper loaded: url_helper
INFO - 2019-06-23 18:29:28 --> Helper loaded: url_helper
INFO - 2019-06-23 18:29:28 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:29:28 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:29:28 --> Helper loaded: string_helper
INFO - 2019-06-23 18:29:28 --> Helper loaded: string_helper
INFO - 2019-06-23 18:29:28 --> Helper loaded: array_helper
INFO - 2019-06-23 18:29:28 --> Helper loaded: array_helper
INFO - 2019-06-23 18:29:28 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:29:28 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:29:28 --> Database Driver Class Initialized
INFO - 2019-06-23 18:29:28 --> Controller Class Initialized
INFO - 2019-06-23 18:29:28 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:29:28 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:29:28 --> Database Driver Class Initialized
INFO - 2019-06-23 18:29:28 --> Controller Class Initialized
INFO - 2019-06-23 18:30:20 --> Config Class Initialized
INFO - 2019-06-23 18:30:20 --> Hooks Class Initialized
INFO - 2019-06-23 18:30:20 --> Config Class Initialized
INFO - 2019-06-23 18:30:20 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:30:20 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:30:20 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:30:20 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:30:20 --> Utf8 Class Initialized
INFO - 2019-06-23 18:30:20 --> URI Class Initialized
INFO - 2019-06-23 18:30:20 --> URI Class Initialized
INFO - 2019-06-23 18:30:20 --> Router Class Initialized
INFO - 2019-06-23 18:30:20 --> Router Class Initialized
INFO - 2019-06-23 18:30:20 --> Output Class Initialized
INFO - 2019-06-23 18:30:20 --> Output Class Initialized
INFO - 2019-06-23 18:30:20 --> Security Class Initialized
INFO - 2019-06-23 18:30:20 --> Security Class Initialized
DEBUG - 2019-06-23 18:30:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:30:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:30:20 --> Input Class Initialized
INFO - 2019-06-23 18:30:20 --> Input Class Initialized
INFO - 2019-06-23 18:30:20 --> Language Class Initialized
INFO - 2019-06-23 18:30:20 --> Language Class Initialized
INFO - 2019-06-23 18:30:20 --> Language Class Initialized
INFO - 2019-06-23 18:30:20 --> Language Class Initialized
INFO - 2019-06-23 18:30:20 --> Config Class Initialized
INFO - 2019-06-23 18:30:20 --> Config Class Initialized
INFO - 2019-06-23 18:30:20 --> Loader Class Initialized
INFO - 2019-06-23 18:30:20 --> Loader Class Initialized
DEBUG - 2019-06-23 18:30:20 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:30:20 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:30:20 --> Helper loaded: url_helper
INFO - 2019-06-23 18:30:20 --> Helper loaded: url_helper
INFO - 2019-06-23 18:30:20 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:30:20 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:30:20 --> Helper loaded: string_helper
INFO - 2019-06-23 18:30:20 --> Helper loaded: string_helper
INFO - 2019-06-23 18:30:20 --> Helper loaded: array_helper
INFO - 2019-06-23 18:30:20 --> Helper loaded: array_helper
INFO - 2019-06-23 18:30:20 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:30:20 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:30:20 --> Database Driver Class Initialized
INFO - 2019-06-23 18:30:20 --> Controller Class Initialized
INFO - 2019-06-23 18:30:20 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:30:20 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:30:20 --> Database Driver Class Initialized
INFO - 2019-06-23 18:30:20 --> Controller Class Initialized
INFO - 2019-06-23 18:30:27 --> Config Class Initialized
INFO - 2019-06-23 18:30:27 --> Config Class Initialized
INFO - 2019-06-23 18:30:27 --> Hooks Class Initialized
INFO - 2019-06-23 18:30:27 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:30:27 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:30:27 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:30:27 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:30:27 --> Utf8 Class Initialized
INFO - 2019-06-23 18:30:27 --> URI Class Initialized
INFO - 2019-06-23 18:30:27 --> URI Class Initialized
INFO - 2019-06-23 18:30:27 --> Router Class Initialized
INFO - 2019-06-23 18:30:27 --> Router Class Initialized
INFO - 2019-06-23 18:30:27 --> Output Class Initialized
INFO - 2019-06-23 18:30:27 --> Output Class Initialized
INFO - 2019-06-23 18:30:27 --> Security Class Initialized
INFO - 2019-06-23 18:30:27 --> Security Class Initialized
DEBUG - 2019-06-23 18:30:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:30:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:30:27 --> Input Class Initialized
INFO - 2019-06-23 18:30:27 --> Input Class Initialized
INFO - 2019-06-23 18:30:27 --> Language Class Initialized
INFO - 2019-06-23 18:30:27 --> Language Class Initialized
INFO - 2019-06-23 18:30:27 --> Language Class Initialized
INFO - 2019-06-23 18:30:27 --> Language Class Initialized
INFO - 2019-06-23 18:30:27 --> Config Class Initialized
INFO - 2019-06-23 18:30:27 --> Config Class Initialized
INFO - 2019-06-23 18:30:27 --> Loader Class Initialized
INFO - 2019-06-23 18:30:27 --> Loader Class Initialized
DEBUG - 2019-06-23 18:30:27 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:30:27 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:30:27 --> Helper loaded: url_helper
INFO - 2019-06-23 18:30:27 --> Helper loaded: url_helper
INFO - 2019-06-23 18:30:27 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:30:27 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:30:27 --> Helper loaded: string_helper
INFO - 2019-06-23 18:30:27 --> Helper loaded: string_helper
INFO - 2019-06-23 18:30:27 --> Helper loaded: array_helper
INFO - 2019-06-23 18:30:27 --> Helper loaded: array_helper
INFO - 2019-06-23 18:30:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:30:27 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:30:27 --> Database Driver Class Initialized
INFO - 2019-06-23 18:30:27 --> Controller Class Initialized
INFO - 2019-06-23 18:30:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:30:27 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:30:27 --> Database Driver Class Initialized
INFO - 2019-06-23 18:30:27 --> Controller Class Initialized
INFO - 2019-06-23 18:30:31 --> Config Class Initialized
INFO - 2019-06-23 18:30:31 --> Hooks Class Initialized
INFO - 2019-06-23 18:30:31 --> Config Class Initialized
DEBUG - 2019-06-23 18:30:31 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:30:31 --> Hooks Class Initialized
INFO - 2019-06-23 18:30:31 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:30:31 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:30:31 --> URI Class Initialized
INFO - 2019-06-23 18:30:31 --> Utf8 Class Initialized
INFO - 2019-06-23 18:30:31 --> URI Class Initialized
INFO - 2019-06-23 18:30:31 --> Router Class Initialized
INFO - 2019-06-23 18:30:31 --> Router Class Initialized
INFO - 2019-06-23 18:30:31 --> Output Class Initialized
INFO - 2019-06-23 18:30:31 --> Output Class Initialized
INFO - 2019-06-23 18:30:31 --> Security Class Initialized
INFO - 2019-06-23 18:30:31 --> Security Class Initialized
DEBUG - 2019-06-23 18:30:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:30:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:30:31 --> Input Class Initialized
INFO - 2019-06-23 18:30:31 --> Input Class Initialized
INFO - 2019-06-23 18:30:31 --> Language Class Initialized
INFO - 2019-06-23 18:30:31 --> Language Class Initialized
INFO - 2019-06-23 18:30:31 --> Language Class Initialized
INFO - 2019-06-23 18:30:31 --> Language Class Initialized
INFO - 2019-06-23 18:30:31 --> Config Class Initialized
INFO - 2019-06-23 18:30:31 --> Config Class Initialized
INFO - 2019-06-23 18:30:31 --> Loader Class Initialized
INFO - 2019-06-23 18:30:31 --> Loader Class Initialized
DEBUG - 2019-06-23 18:30:31 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:30:31 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:30:31 --> Helper loaded: url_helper
INFO - 2019-06-23 18:30:31 --> Helper loaded: url_helper
INFO - 2019-06-23 18:30:31 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:30:31 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:30:31 --> Helper loaded: string_helper
INFO - 2019-06-23 18:30:31 --> Helper loaded: string_helper
INFO - 2019-06-23 18:30:31 --> Helper loaded: array_helper
INFO - 2019-06-23 18:30:31 --> Helper loaded: array_helper
INFO - 2019-06-23 18:30:31 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:30:31 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:30:31 --> Database Driver Class Initialized
INFO - 2019-06-23 18:30:31 --> Controller Class Initialized
INFO - 2019-06-23 18:30:31 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:30:31 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:30:31 --> Database Driver Class Initialized
INFO - 2019-06-23 18:30:31 --> Controller Class Initialized
INFO - 2019-06-23 18:30:35 --> Config Class Initialized
INFO - 2019-06-23 18:30:35 --> Config Class Initialized
INFO - 2019-06-23 18:30:35 --> Hooks Class Initialized
INFO - 2019-06-23 18:30:35 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:30:35 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:30:35 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:30:35 --> Utf8 Class Initialized
INFO - 2019-06-23 18:30:35 --> Utf8 Class Initialized
INFO - 2019-06-23 18:30:35 --> URI Class Initialized
INFO - 2019-06-23 18:30:35 --> URI Class Initialized
INFO - 2019-06-23 18:30:35 --> Router Class Initialized
INFO - 2019-06-23 18:30:35 --> Router Class Initialized
INFO - 2019-06-23 18:30:35 --> Output Class Initialized
INFO - 2019-06-23 18:30:35 --> Output Class Initialized
INFO - 2019-06-23 18:30:35 --> Security Class Initialized
INFO - 2019-06-23 18:30:35 --> Security Class Initialized
DEBUG - 2019-06-23 18:30:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:30:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:30:35 --> Input Class Initialized
INFO - 2019-06-23 18:30:35 --> Input Class Initialized
INFO - 2019-06-23 18:30:35 --> Language Class Initialized
INFO - 2019-06-23 18:30:35 --> Language Class Initialized
INFO - 2019-06-23 18:30:35 --> Language Class Initialized
INFO - 2019-06-23 18:30:35 --> Language Class Initialized
INFO - 2019-06-23 18:30:35 --> Config Class Initialized
INFO - 2019-06-23 18:30:35 --> Loader Class Initialized
INFO - 2019-06-23 18:30:35 --> Config Class Initialized
INFO - 2019-06-23 18:30:35 --> Loader Class Initialized
DEBUG - 2019-06-23 18:30:35 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:30:35 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:30:35 --> Helper loaded: url_helper
INFO - 2019-06-23 18:30:35 --> Helper loaded: url_helper
INFO - 2019-06-23 18:30:35 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:30:35 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:30:35 --> Helper loaded: string_helper
INFO - 2019-06-23 18:30:35 --> Helper loaded: string_helper
INFO - 2019-06-23 18:30:35 --> Helper loaded: array_helper
INFO - 2019-06-23 18:30:35 --> Helper loaded: array_helper
INFO - 2019-06-23 18:30:35 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:30:35 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:30:35 --> Database Driver Class Initialized
INFO - 2019-06-23 18:30:35 --> Controller Class Initialized
INFO - 2019-06-23 18:30:35 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:30:35 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:30:35 --> Database Driver Class Initialized
INFO - 2019-06-23 18:30:35 --> Controller Class Initialized
INFO - 2019-06-23 18:30:48 --> Config Class Initialized
INFO - 2019-06-23 18:30:48 --> Config Class Initialized
INFO - 2019-06-23 18:30:48 --> Hooks Class Initialized
INFO - 2019-06-23 18:30:48 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:30:48 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:30:48 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:30:48 --> Utf8 Class Initialized
INFO - 2019-06-23 18:30:48 --> Utf8 Class Initialized
INFO - 2019-06-23 18:30:48 --> URI Class Initialized
INFO - 2019-06-23 18:30:48 --> URI Class Initialized
INFO - 2019-06-23 18:30:48 --> Router Class Initialized
INFO - 2019-06-23 18:30:48 --> Router Class Initialized
INFO - 2019-06-23 18:30:48 --> Output Class Initialized
INFO - 2019-06-23 18:30:48 --> Output Class Initialized
INFO - 2019-06-23 18:30:48 --> Security Class Initialized
INFO - 2019-06-23 18:30:48 --> Security Class Initialized
DEBUG - 2019-06-23 18:30:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:30:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:30:48 --> Input Class Initialized
INFO - 2019-06-23 18:30:48 --> Input Class Initialized
INFO - 2019-06-23 18:30:48 --> Language Class Initialized
INFO - 2019-06-23 18:30:48 --> Language Class Initialized
INFO - 2019-06-23 18:30:48 --> Language Class Initialized
INFO - 2019-06-23 18:30:48 --> Language Class Initialized
INFO - 2019-06-23 18:30:48 --> Config Class Initialized
INFO - 2019-06-23 18:30:48 --> Loader Class Initialized
INFO - 2019-06-23 18:30:48 --> Config Class Initialized
INFO - 2019-06-23 18:30:48 --> Loader Class Initialized
DEBUG - 2019-06-23 18:30:48 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:30:48 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:30:48 --> Helper loaded: url_helper
INFO - 2019-06-23 18:30:48 --> Helper loaded: url_helper
INFO - 2019-06-23 18:30:48 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:30:48 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:30:48 --> Helper loaded: string_helper
INFO - 2019-06-23 18:30:48 --> Helper loaded: string_helper
INFO - 2019-06-23 18:30:48 --> Helper loaded: array_helper
INFO - 2019-06-23 18:30:48 --> Helper loaded: array_helper
INFO - 2019-06-23 18:30:48 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:30:48 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:30:48 --> Database Driver Class Initialized
INFO - 2019-06-23 18:30:48 --> Controller Class Initialized
INFO - 2019-06-23 18:30:48 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:30:48 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:30:48 --> Database Driver Class Initialized
INFO - 2019-06-23 18:30:48 --> Controller Class Initialized
INFO - 2019-06-23 18:31:04 --> Config Class Initialized
INFO - 2019-06-23 18:31:04 --> Hooks Class Initialized
INFO - 2019-06-23 18:31:04 --> Config Class Initialized
INFO - 2019-06-23 18:31:04 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:31:04 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:31:04 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:31:04 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:31:04 --> Utf8 Class Initialized
INFO - 2019-06-23 18:31:04 --> URI Class Initialized
INFO - 2019-06-23 18:31:04 --> URI Class Initialized
INFO - 2019-06-23 18:31:04 --> Router Class Initialized
INFO - 2019-06-23 18:31:04 --> Router Class Initialized
INFO - 2019-06-23 18:31:04 --> Output Class Initialized
INFO - 2019-06-23 18:31:04 --> Output Class Initialized
INFO - 2019-06-23 18:31:04 --> Security Class Initialized
INFO - 2019-06-23 18:31:04 --> Security Class Initialized
DEBUG - 2019-06-23 18:31:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:31:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:31:04 --> Input Class Initialized
INFO - 2019-06-23 18:31:04 --> Input Class Initialized
INFO - 2019-06-23 18:31:04 --> Language Class Initialized
INFO - 2019-06-23 18:31:04 --> Language Class Initialized
INFO - 2019-06-23 18:31:04 --> Language Class Initialized
INFO - 2019-06-23 18:31:04 --> Config Class Initialized
INFO - 2019-06-23 18:31:04 --> Language Class Initialized
INFO - 2019-06-23 18:31:04 --> Config Class Initialized
INFO - 2019-06-23 18:31:04 --> Loader Class Initialized
INFO - 2019-06-23 18:31:04 --> Loader Class Initialized
DEBUG - 2019-06-23 18:31:04 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:31:04 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:31:04 --> Helper loaded: url_helper
INFO - 2019-06-23 18:31:04 --> Helper loaded: url_helper
INFO - 2019-06-23 18:31:04 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:31:04 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:31:04 --> Helper loaded: string_helper
INFO - 2019-06-23 18:31:04 --> Helper loaded: string_helper
INFO - 2019-06-23 18:31:04 --> Helper loaded: array_helper
INFO - 2019-06-23 18:31:04 --> Helper loaded: array_helper
INFO - 2019-06-23 18:31:04 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:31:04 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:31:04 --> Database Driver Class Initialized
INFO - 2019-06-23 18:31:04 --> Controller Class Initialized
INFO - 2019-06-23 18:31:04 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:31:04 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:31:04 --> Database Driver Class Initialized
INFO - 2019-06-23 18:31:04 --> Controller Class Initialized
INFO - 2019-06-23 18:31:08 --> Config Class Initialized
INFO - 2019-06-23 18:31:08 --> Hooks Class Initialized
INFO - 2019-06-23 18:31:08 --> Config Class Initialized
DEBUG - 2019-06-23 18:31:08 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:31:08 --> Hooks Class Initialized
INFO - 2019-06-23 18:31:08 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:31:08 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:31:08 --> URI Class Initialized
INFO - 2019-06-23 18:31:08 --> Utf8 Class Initialized
INFO - 2019-06-23 18:31:08 --> URI Class Initialized
INFO - 2019-06-23 18:31:08 --> Router Class Initialized
INFO - 2019-06-23 18:31:08 --> Router Class Initialized
INFO - 2019-06-23 18:31:08 --> Output Class Initialized
INFO - 2019-06-23 18:31:08 --> Output Class Initialized
INFO - 2019-06-23 18:31:08 --> Security Class Initialized
INFO - 2019-06-23 18:31:08 --> Security Class Initialized
DEBUG - 2019-06-23 18:31:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:31:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:31:08 --> Input Class Initialized
INFO - 2019-06-23 18:31:08 --> Input Class Initialized
INFO - 2019-06-23 18:31:08 --> Language Class Initialized
INFO - 2019-06-23 18:31:08 --> Language Class Initialized
INFO - 2019-06-23 18:31:08 --> Language Class Initialized
INFO - 2019-06-23 18:31:08 --> Language Class Initialized
INFO - 2019-06-23 18:31:08 --> Config Class Initialized
INFO - 2019-06-23 18:31:08 --> Loader Class Initialized
INFO - 2019-06-23 18:31:08 --> Config Class Initialized
INFO - 2019-06-23 18:31:08 --> Loader Class Initialized
DEBUG - 2019-06-23 18:31:08 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:31:08 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:31:08 --> Helper loaded: url_helper
INFO - 2019-06-23 18:31:08 --> Helper loaded: url_helper
INFO - 2019-06-23 18:31:08 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:31:08 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:31:08 --> Helper loaded: string_helper
INFO - 2019-06-23 18:31:08 --> Helper loaded: string_helper
INFO - 2019-06-23 18:31:08 --> Helper loaded: array_helper
INFO - 2019-06-23 18:31:08 --> Helper loaded: array_helper
INFO - 2019-06-23 18:31:08 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:31:08 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:31:08 --> Database Driver Class Initialized
INFO - 2019-06-23 18:31:08 --> Controller Class Initialized
INFO - 2019-06-23 18:31:08 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:31:08 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:31:08 --> Database Driver Class Initialized
INFO - 2019-06-23 18:31:08 --> Controller Class Initialized
INFO - 2019-06-23 18:33:32 --> Config Class Initialized
INFO - 2019-06-23 18:33:32 --> Config Class Initialized
INFO - 2019-06-23 18:33:32 --> Hooks Class Initialized
INFO - 2019-06-23 18:33:32 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:33:32 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:33:32 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:33:32 --> Utf8 Class Initialized
INFO - 2019-06-23 18:33:32 --> Utf8 Class Initialized
INFO - 2019-06-23 18:33:32 --> URI Class Initialized
INFO - 2019-06-23 18:33:32 --> URI Class Initialized
INFO - 2019-06-23 18:33:32 --> Router Class Initialized
INFO - 2019-06-23 18:33:32 --> Router Class Initialized
INFO - 2019-06-23 18:33:32 --> Output Class Initialized
INFO - 2019-06-23 18:33:32 --> Output Class Initialized
INFO - 2019-06-23 18:33:32 --> Security Class Initialized
INFO - 2019-06-23 18:33:32 --> Security Class Initialized
DEBUG - 2019-06-23 18:33:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:33:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:33:32 --> Input Class Initialized
INFO - 2019-06-23 18:33:32 --> Input Class Initialized
INFO - 2019-06-23 18:33:32 --> Language Class Initialized
INFO - 2019-06-23 18:33:32 --> Language Class Initialized
INFO - 2019-06-23 18:33:32 --> Language Class Initialized
INFO - 2019-06-23 18:33:32 --> Language Class Initialized
INFO - 2019-06-23 18:33:32 --> Config Class Initialized
INFO - 2019-06-23 18:33:32 --> Config Class Initialized
INFO - 2019-06-23 18:33:32 --> Loader Class Initialized
INFO - 2019-06-23 18:33:32 --> Loader Class Initialized
DEBUG - 2019-06-23 18:33:32 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:33:32 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:33:32 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:32 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:32 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:32 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:32 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:32 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:32 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:32 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:32 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:32 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:32 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:32 --> Controller Class Initialized
INFO - 2019-06-23 18:33:32 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:32 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:32 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:32 --> Controller Class Initialized
INFO - 2019-06-23 18:33:38 --> Config Class Initialized
INFO - 2019-06-23 18:33:38 --> Config Class Initialized
INFO - 2019-06-23 18:33:38 --> Hooks Class Initialized
INFO - 2019-06-23 18:33:38 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:33:38 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:33:38 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:33:38 --> Utf8 Class Initialized
INFO - 2019-06-23 18:33:38 --> Utf8 Class Initialized
INFO - 2019-06-23 18:33:38 --> URI Class Initialized
INFO - 2019-06-23 18:33:38 --> URI Class Initialized
INFO - 2019-06-23 18:33:38 --> Router Class Initialized
INFO - 2019-06-23 18:33:38 --> Router Class Initialized
INFO - 2019-06-23 18:33:38 --> Output Class Initialized
INFO - 2019-06-23 18:33:38 --> Output Class Initialized
INFO - 2019-06-23 18:33:38 --> Security Class Initialized
INFO - 2019-06-23 18:33:38 --> Security Class Initialized
DEBUG - 2019-06-23 18:33:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:33:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:33:38 --> Input Class Initialized
INFO - 2019-06-23 18:33:38 --> Input Class Initialized
INFO - 2019-06-23 18:33:38 --> Language Class Initialized
INFO - 2019-06-23 18:33:38 --> Language Class Initialized
INFO - 2019-06-23 18:33:38 --> Language Class Initialized
INFO - 2019-06-23 18:33:38 --> Language Class Initialized
INFO - 2019-06-23 18:33:38 --> Config Class Initialized
INFO - 2019-06-23 18:33:38 --> Config Class Initialized
INFO - 2019-06-23 18:33:38 --> Loader Class Initialized
INFO - 2019-06-23 18:33:38 --> Loader Class Initialized
DEBUG - 2019-06-23 18:33:38 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:33:38 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:33:38 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:38 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:38 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:38 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:38 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:38 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:38 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:38 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:39 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:39 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:39 --> Controller Class Initialized
INFO - 2019-06-23 18:33:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:39 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:39 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:39 --> Controller Class Initialized
INFO - 2019-06-23 18:33:39 --> Config Class Initialized
INFO - 2019-06-23 18:33:39 --> Hooks Class Initialized
INFO - 2019-06-23 18:33:40 --> Config Class Initialized
DEBUG - 2019-06-23 18:33:40 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:33:40 --> Hooks Class Initialized
INFO - 2019-06-23 18:33:40 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:33:40 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:33:40 --> URI Class Initialized
INFO - 2019-06-23 18:33:40 --> Utf8 Class Initialized
INFO - 2019-06-23 18:33:40 --> URI Class Initialized
INFO - 2019-06-23 18:33:40 --> Router Class Initialized
INFO - 2019-06-23 18:33:40 --> Router Class Initialized
INFO - 2019-06-23 18:33:40 --> Output Class Initialized
INFO - 2019-06-23 18:33:40 --> Output Class Initialized
INFO - 2019-06-23 18:33:40 --> Security Class Initialized
INFO - 2019-06-23 18:33:40 --> Security Class Initialized
DEBUG - 2019-06-23 18:33:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:33:40 --> Input Class Initialized
DEBUG - 2019-06-23 18:33:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:33:40 --> Input Class Initialized
INFO - 2019-06-23 18:33:40 --> Language Class Initialized
INFO - 2019-06-23 18:33:40 --> Language Class Initialized
INFO - 2019-06-23 18:33:40 --> Language Class Initialized
INFO - 2019-06-23 18:33:40 --> Config Class Initialized
INFO - 2019-06-23 18:33:40 --> Language Class Initialized
INFO - 2019-06-23 18:33:40 --> Config Class Initialized
INFO - 2019-06-23 18:33:40 --> Loader Class Initialized
INFO - 2019-06-23 18:33:40 --> Loader Class Initialized
DEBUG - 2019-06-23 18:33:40 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:33:40 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:33:40 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:40 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:40 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:40 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:40 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:40 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:40 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:40 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:40 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:40 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:40 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:40 --> Controller Class Initialized
INFO - 2019-06-23 18:33:40 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:40 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:40 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:40 --> Controller Class Initialized
INFO - 2019-06-23 18:33:48 --> Config Class Initialized
INFO - 2019-06-23 18:33:48 --> Config Class Initialized
INFO - 2019-06-23 18:33:48 --> Hooks Class Initialized
INFO - 2019-06-23 18:33:48 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:33:48 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:33:48 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:33:48 --> Utf8 Class Initialized
INFO - 2019-06-23 18:33:48 --> Utf8 Class Initialized
INFO - 2019-06-23 18:33:48 --> URI Class Initialized
INFO - 2019-06-23 18:33:48 --> URI Class Initialized
INFO - 2019-06-23 18:33:48 --> Router Class Initialized
INFO - 2019-06-23 18:33:48 --> Router Class Initialized
INFO - 2019-06-23 18:33:48 --> Output Class Initialized
INFO - 2019-06-23 18:33:48 --> Output Class Initialized
INFO - 2019-06-23 18:33:48 --> Security Class Initialized
INFO - 2019-06-23 18:33:48 --> Security Class Initialized
DEBUG - 2019-06-23 18:33:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:33:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:33:49 --> Input Class Initialized
INFO - 2019-06-23 18:33:49 --> Input Class Initialized
INFO - 2019-06-23 18:33:49 --> Language Class Initialized
INFO - 2019-06-23 18:33:49 --> Language Class Initialized
INFO - 2019-06-23 18:33:49 --> Language Class Initialized
INFO - 2019-06-23 18:33:49 --> Config Class Initialized
INFO - 2019-06-23 18:33:49 --> Language Class Initialized
INFO - 2019-06-23 18:33:49 --> Loader Class Initialized
INFO - 2019-06-23 18:33:49 --> Config Class Initialized
INFO - 2019-06-23 18:33:49 --> Loader Class Initialized
DEBUG - 2019-06-23 18:33:49 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:33:49 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:33:49 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:49 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:49 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:49 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:49 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:49 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:49 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:49 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:49 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:49 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:49 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:49 --> Controller Class Initialized
INFO - 2019-06-23 18:33:49 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:49 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:49 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:49 --> Controller Class Initialized
INFO - 2019-06-23 18:33:51 --> Config Class Initialized
INFO - 2019-06-23 18:33:51 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:33:51 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:33:51 --> Utf8 Class Initialized
INFO - 2019-06-23 18:33:51 --> URI Class Initialized
INFO - 2019-06-23 18:33:51 --> Router Class Initialized
INFO - 2019-06-23 18:33:51 --> Output Class Initialized
INFO - 2019-06-23 18:33:51 --> Security Class Initialized
DEBUG - 2019-06-23 18:33:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:33:51 --> Input Class Initialized
INFO - 2019-06-23 18:33:51 --> Language Class Initialized
INFO - 2019-06-23 18:33:51 --> Language Class Initialized
INFO - 2019-06-23 18:33:51 --> Config Class Initialized
INFO - 2019-06-23 18:33:51 --> Loader Class Initialized
DEBUG - 2019-06-23 18:33:51 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:33:51 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:51 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:51 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:51 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:51 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:51 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:51 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:51 --> Controller Class Initialized
INFO - 2019-06-23 18:33:51 --> Config Class Initialized
INFO - 2019-06-23 18:33:51 --> Config Class Initialized
INFO - 2019-06-23 18:33:51 --> Hooks Class Initialized
INFO - 2019-06-23 18:33:51 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:33:51 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:33:51 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:33:51 --> Utf8 Class Initialized
INFO - 2019-06-23 18:33:51 --> Utf8 Class Initialized
INFO - 2019-06-23 18:33:51 --> URI Class Initialized
INFO - 2019-06-23 18:33:51 --> URI Class Initialized
INFO - 2019-06-23 18:33:51 --> Router Class Initialized
INFO - 2019-06-23 18:33:52 --> Router Class Initialized
INFO - 2019-06-23 18:33:52 --> Output Class Initialized
INFO - 2019-06-23 18:33:52 --> Output Class Initialized
INFO - 2019-06-23 18:33:52 --> Security Class Initialized
INFO - 2019-06-23 18:33:52 --> Security Class Initialized
DEBUG - 2019-06-23 18:33:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:33:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:33:52 --> Input Class Initialized
INFO - 2019-06-23 18:33:52 --> Input Class Initialized
INFO - 2019-06-23 18:33:52 --> Language Class Initialized
INFO - 2019-06-23 18:33:52 --> Language Class Initialized
INFO - 2019-06-23 18:33:52 --> Language Class Initialized
INFO - 2019-06-23 18:33:52 --> Language Class Initialized
INFO - 2019-06-23 18:33:52 --> Config Class Initialized
INFO - 2019-06-23 18:33:52 --> Loader Class Initialized
INFO - 2019-06-23 18:33:52 --> Config Class Initialized
INFO - 2019-06-23 18:33:52 --> Loader Class Initialized
DEBUG - 2019-06-23 18:33:52 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:33:52 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:33:52 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:52 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:52 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:52 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:52 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:52 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:52 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:52 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:52 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:52 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:52 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:52 --> Controller Class Initialized
INFO - 2019-06-23 18:33:52 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:52 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:52 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:52 --> Controller Class Initialized
INFO - 2019-06-23 18:33:55 --> Config Class Initialized
INFO - 2019-06-23 18:33:55 --> Config Class Initialized
INFO - 2019-06-23 18:33:55 --> Hooks Class Initialized
INFO - 2019-06-23 18:33:55 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:33:55 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:33:55 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:33:55 --> Utf8 Class Initialized
INFO - 2019-06-23 18:33:55 --> Utf8 Class Initialized
INFO - 2019-06-23 18:33:55 --> URI Class Initialized
INFO - 2019-06-23 18:33:55 --> URI Class Initialized
INFO - 2019-06-23 18:33:55 --> Router Class Initialized
INFO - 2019-06-23 18:33:55 --> Router Class Initialized
INFO - 2019-06-23 18:33:55 --> Output Class Initialized
INFO - 2019-06-23 18:33:55 --> Output Class Initialized
INFO - 2019-06-23 18:33:55 --> Security Class Initialized
INFO - 2019-06-23 18:33:55 --> Security Class Initialized
DEBUG - 2019-06-23 18:33:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:33:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:33:55 --> Input Class Initialized
INFO - 2019-06-23 18:33:55 --> Input Class Initialized
INFO - 2019-06-23 18:33:55 --> Language Class Initialized
INFO - 2019-06-23 18:33:55 --> Language Class Initialized
INFO - 2019-06-23 18:33:55 --> Language Class Initialized
INFO - 2019-06-23 18:33:55 --> Language Class Initialized
INFO - 2019-06-23 18:33:55 --> Config Class Initialized
INFO - 2019-06-23 18:33:55 --> Config Class Initialized
INFO - 2019-06-23 18:33:55 --> Loader Class Initialized
INFO - 2019-06-23 18:33:55 --> Loader Class Initialized
DEBUG - 2019-06-23 18:33:55 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:33:55 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:33:55 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:55 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:55 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:55 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:55 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:55 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:55 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:55 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:55 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:55 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:55 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:55 --> Controller Class Initialized
INFO - 2019-06-23 18:33:55 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:55 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:55 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:55 --> Controller Class Initialized
INFO - 2019-06-23 18:33:58 --> Config Class Initialized
INFO - 2019-06-23 18:33:58 --> Hooks Class Initialized
INFO - 2019-06-23 18:33:58 --> Config Class Initialized
DEBUG - 2019-06-23 18:33:58 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:33:58 --> Hooks Class Initialized
INFO - 2019-06-23 18:33:58 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:33:58 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:33:58 --> URI Class Initialized
INFO - 2019-06-23 18:33:58 --> Utf8 Class Initialized
INFO - 2019-06-23 18:33:58 --> URI Class Initialized
INFO - 2019-06-23 18:33:58 --> Router Class Initialized
INFO - 2019-06-23 18:33:58 --> Router Class Initialized
INFO - 2019-06-23 18:33:58 --> Output Class Initialized
INFO - 2019-06-23 18:33:58 --> Output Class Initialized
INFO - 2019-06-23 18:33:58 --> Security Class Initialized
INFO - 2019-06-23 18:33:58 --> Security Class Initialized
DEBUG - 2019-06-23 18:33:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:33:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:33:58 --> Input Class Initialized
INFO - 2019-06-23 18:33:58 --> Input Class Initialized
INFO - 2019-06-23 18:33:58 --> Language Class Initialized
INFO - 2019-06-23 18:33:58 --> Language Class Initialized
INFO - 2019-06-23 18:33:58 --> Language Class Initialized
INFO - 2019-06-23 18:33:58 --> Language Class Initialized
INFO - 2019-06-23 18:33:58 --> Config Class Initialized
INFO - 2019-06-23 18:33:58 --> Config Class Initialized
INFO - 2019-06-23 18:33:58 --> Loader Class Initialized
INFO - 2019-06-23 18:33:58 --> Loader Class Initialized
DEBUG - 2019-06-23 18:33:58 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:33:58 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:33:58 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:58 --> Helper loaded: url_helper
INFO - 2019-06-23 18:33:58 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:58 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:33:58 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:58 --> Helper loaded: string_helper
INFO - 2019-06-23 18:33:58 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:58 --> Helper loaded: array_helper
INFO - 2019-06-23 18:33:58 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:58 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:58 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:58 --> Controller Class Initialized
INFO - 2019-06-23 18:33:58 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:33:58 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:33:58 --> Database Driver Class Initialized
INFO - 2019-06-23 18:33:58 --> Controller Class Initialized
INFO - 2019-06-23 18:34:00 --> Config Class Initialized
INFO - 2019-06-23 18:34:00 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:34:00 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:34:00 --> Utf8 Class Initialized
INFO - 2019-06-23 18:34:00 --> URI Class Initialized
INFO - 2019-06-23 18:34:00 --> Router Class Initialized
INFO - 2019-06-23 18:34:00 --> Output Class Initialized
INFO - 2019-06-23 18:34:00 --> Security Class Initialized
DEBUG - 2019-06-23 18:34:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:34:00 --> Input Class Initialized
INFO - 2019-06-23 18:34:00 --> Language Class Initialized
INFO - 2019-06-23 18:34:00 --> Language Class Initialized
INFO - 2019-06-23 18:34:00 --> Config Class Initialized
INFO - 2019-06-23 18:34:00 --> Loader Class Initialized
DEBUG - 2019-06-23 18:34:00 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:34:00 --> Helper loaded: url_helper
INFO - 2019-06-23 18:34:00 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:34:00 --> Helper loaded: string_helper
INFO - 2019-06-23 18:34:00 --> Helper loaded: array_helper
INFO - 2019-06-23 18:34:01 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:34:01 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:34:01 --> Database Driver Class Initialized
INFO - 2019-06-23 18:34:01 --> Controller Class Initialized
INFO - 2019-06-23 18:34:01 --> Config Class Initialized
INFO - 2019-06-23 18:34:01 --> Config Class Initialized
INFO - 2019-06-23 18:34:01 --> Hooks Class Initialized
INFO - 2019-06-23 18:34:01 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:34:01 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:34:01 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:34:01 --> Utf8 Class Initialized
INFO - 2019-06-23 18:34:01 --> Utf8 Class Initialized
INFO - 2019-06-23 18:34:01 --> URI Class Initialized
INFO - 2019-06-23 18:34:01 --> URI Class Initialized
INFO - 2019-06-23 18:34:01 --> Router Class Initialized
INFO - 2019-06-23 18:34:01 --> Router Class Initialized
INFO - 2019-06-23 18:34:01 --> Output Class Initialized
INFO - 2019-06-23 18:34:01 --> Output Class Initialized
INFO - 2019-06-23 18:34:01 --> Security Class Initialized
INFO - 2019-06-23 18:34:01 --> Security Class Initialized
DEBUG - 2019-06-23 18:34:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:34:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:34:01 --> Input Class Initialized
INFO - 2019-06-23 18:34:01 --> Input Class Initialized
INFO - 2019-06-23 18:34:01 --> Language Class Initialized
INFO - 2019-06-23 18:34:01 --> Language Class Initialized
INFO - 2019-06-23 18:34:01 --> Language Class Initialized
INFO - 2019-06-23 18:34:01 --> Language Class Initialized
INFO - 2019-06-23 18:34:01 --> Config Class Initialized
INFO - 2019-06-23 18:34:01 --> Loader Class Initialized
INFO - 2019-06-23 18:34:01 --> Config Class Initialized
INFO - 2019-06-23 18:34:01 --> Loader Class Initialized
DEBUG - 2019-06-23 18:34:01 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:34:01 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:34:01 --> Helper loaded: url_helper
INFO - 2019-06-23 18:34:01 --> Helper loaded: url_helper
INFO - 2019-06-23 18:34:01 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:34:01 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:34:01 --> Helper loaded: string_helper
INFO - 2019-06-23 18:34:01 --> Helper loaded: string_helper
INFO - 2019-06-23 18:34:01 --> Helper loaded: array_helper
INFO - 2019-06-23 18:34:01 --> Helper loaded: array_helper
INFO - 2019-06-23 18:34:01 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:34:01 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:34:01 --> Database Driver Class Initialized
INFO - 2019-06-23 18:34:01 --> Controller Class Initialized
INFO - 2019-06-23 18:34:01 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:34:01 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:34:01 --> Database Driver Class Initialized
INFO - 2019-06-23 18:34:01 --> Controller Class Initialized
INFO - 2019-06-23 18:34:09 --> Config Class Initialized
INFO - 2019-06-23 18:34:09 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:34:09 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:34:09 --> Utf8 Class Initialized
INFO - 2019-06-23 18:34:09 --> URI Class Initialized
INFO - 2019-06-23 18:34:09 --> Router Class Initialized
INFO - 2019-06-23 18:34:09 --> Output Class Initialized
INFO - 2019-06-23 18:34:09 --> Security Class Initialized
DEBUG - 2019-06-23 18:34:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:34:09 --> Input Class Initialized
INFO - 2019-06-23 18:34:09 --> Language Class Initialized
INFO - 2019-06-23 18:34:09 --> Language Class Initialized
INFO - 2019-06-23 18:34:09 --> Config Class Initialized
INFO - 2019-06-23 18:34:09 --> Loader Class Initialized
DEBUG - 2019-06-23 18:34:09 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:34:09 --> Helper loaded: url_helper
INFO - 2019-06-23 18:34:09 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:34:09 --> Helper loaded: string_helper
INFO - 2019-06-23 18:34:09 --> Helper loaded: array_helper
INFO - 2019-06-23 18:34:09 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:34:09 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:34:09 --> Database Driver Class Initialized
INFO - 2019-06-23 18:34:09 --> Controller Class Initialized
INFO - 2019-06-23 18:34:28 --> Config Class Initialized
INFO - 2019-06-23 18:34:28 --> Config Class Initialized
INFO - 2019-06-23 18:34:28 --> Hooks Class Initialized
INFO - 2019-06-23 18:34:28 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:34:28 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:34:28 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:34:28 --> Utf8 Class Initialized
INFO - 2019-06-23 18:34:28 --> Utf8 Class Initialized
INFO - 2019-06-23 18:34:28 --> URI Class Initialized
INFO - 2019-06-23 18:34:28 --> URI Class Initialized
INFO - 2019-06-23 18:34:28 --> Router Class Initialized
INFO - 2019-06-23 18:34:28 --> Output Class Initialized
INFO - 2019-06-23 18:34:28 --> Router Class Initialized
INFO - 2019-06-23 18:34:28 --> Security Class Initialized
DEBUG - 2019-06-23 18:34:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:34:28 --> Input Class Initialized
INFO - 2019-06-23 18:34:28 --> Output Class Initialized
INFO - 2019-06-23 18:34:28 --> Language Class Initialized
INFO - 2019-06-23 18:34:28 --> Security Class Initialized
INFO - 2019-06-23 18:34:28 --> Language Class Initialized
DEBUG - 2019-06-23 18:34:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:34:28 --> Config Class Initialized
INFO - 2019-06-23 18:34:28 --> Input Class Initialized
INFO - 2019-06-23 18:34:28 --> Loader Class Initialized
INFO - 2019-06-23 18:34:28 --> Language Class Initialized
DEBUG - 2019-06-23 18:34:28 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:34:28 --> Language Class Initialized
INFO - 2019-06-23 18:34:28 --> Config Class Initialized
INFO - 2019-06-23 18:34:28 --> Helper loaded: url_helper
INFO - 2019-06-23 18:34:28 --> Loader Class Initialized
INFO - 2019-06-23 18:34:28 --> Helper loaded: inflector_helper
DEBUG - 2019-06-23 18:34:28 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:34:28 --> Helper loaded: string_helper
INFO - 2019-06-23 18:34:28 --> Helper loaded: url_helper
INFO - 2019-06-23 18:34:28 --> Helper loaded: array_helper
INFO - 2019-06-23 18:34:28 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:34:28 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:34:28 --> Helper loaded: string_helper
DEBUG - 2019-06-23 18:34:28 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:34:28 --> Helper loaded: array_helper
INFO - 2019-06-23 18:34:28 --> Database Driver Class Initialized
INFO - 2019-06-23 18:34:28 --> Controller Class Initialized
INFO - 2019-06-23 18:34:29 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:34:29 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:34:29 --> Database Driver Class Initialized
INFO - 2019-06-23 18:34:29 --> Controller Class Initialized
INFO - 2019-06-23 18:34:30 --> Config Class Initialized
INFO - 2019-06-23 18:34:30 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:34:30 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:34:30 --> Utf8 Class Initialized
INFO - 2019-06-23 18:34:30 --> URI Class Initialized
INFO - 2019-06-23 18:34:30 --> Router Class Initialized
INFO - 2019-06-23 18:34:30 --> Output Class Initialized
INFO - 2019-06-23 18:34:30 --> Security Class Initialized
DEBUG - 2019-06-23 18:34:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:34:30 --> Input Class Initialized
INFO - 2019-06-23 18:34:30 --> Language Class Initialized
INFO - 2019-06-23 18:34:30 --> Language Class Initialized
INFO - 2019-06-23 18:34:30 --> Config Class Initialized
INFO - 2019-06-23 18:34:30 --> Loader Class Initialized
DEBUG - 2019-06-23 18:34:30 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:34:30 --> Helper loaded: url_helper
INFO - 2019-06-23 18:34:30 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:34:30 --> Helper loaded: string_helper
INFO - 2019-06-23 18:34:30 --> Helper loaded: array_helper
INFO - 2019-06-23 18:34:30 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:34:30 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:34:30 --> Database Driver Class Initialized
INFO - 2019-06-23 18:34:30 --> Controller Class Initialized
INFO - 2019-06-23 18:34:32 --> Config Class Initialized
INFO - 2019-06-23 18:34:32 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:34:32 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:34:32 --> Utf8 Class Initialized
INFO - 2019-06-23 18:34:32 --> URI Class Initialized
INFO - 2019-06-23 18:34:32 --> Router Class Initialized
INFO - 2019-06-23 18:34:32 --> Output Class Initialized
INFO - 2019-06-23 18:34:33 --> Security Class Initialized
DEBUG - 2019-06-23 18:34:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:34:33 --> Input Class Initialized
INFO - 2019-06-23 18:34:33 --> Language Class Initialized
INFO - 2019-06-23 18:34:33 --> Language Class Initialized
INFO - 2019-06-23 18:34:33 --> Config Class Initialized
INFO - 2019-06-23 18:34:33 --> Loader Class Initialized
DEBUG - 2019-06-23 18:34:33 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:34:33 --> Helper loaded: url_helper
INFO - 2019-06-23 18:34:33 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:34:33 --> Helper loaded: string_helper
INFO - 2019-06-23 18:34:33 --> Helper loaded: array_helper
INFO - 2019-06-23 18:34:33 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:34:33 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:34:33 --> Database Driver Class Initialized
INFO - 2019-06-23 18:34:33 --> Controller Class Initialized
INFO - 2019-06-23 18:34:35 --> Config Class Initialized
INFO - 2019-06-23 18:34:35 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:34:35 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:34:35 --> Utf8 Class Initialized
INFO - 2019-06-23 18:34:35 --> URI Class Initialized
INFO - 2019-06-23 18:34:35 --> Router Class Initialized
INFO - 2019-06-23 18:34:35 --> Output Class Initialized
INFO - 2019-06-23 18:34:35 --> Security Class Initialized
DEBUG - 2019-06-23 18:34:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:34:35 --> Input Class Initialized
INFO - 2019-06-23 18:34:35 --> Language Class Initialized
INFO - 2019-06-23 18:34:35 --> Language Class Initialized
INFO - 2019-06-23 18:34:35 --> Config Class Initialized
INFO - 2019-06-23 18:34:35 --> Loader Class Initialized
DEBUG - 2019-06-23 18:34:35 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:34:35 --> Helper loaded: url_helper
INFO - 2019-06-23 18:34:35 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:34:35 --> Helper loaded: string_helper
INFO - 2019-06-23 18:34:35 --> Helper loaded: array_helper
INFO - 2019-06-23 18:34:35 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:34:35 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:34:35 --> Database Driver Class Initialized
INFO - 2019-06-23 18:34:35 --> Controller Class Initialized
INFO - 2019-06-23 18:34:38 --> Config Class Initialized
INFO - 2019-06-23 18:34:38 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:34:38 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:34:38 --> Utf8 Class Initialized
INFO - 2019-06-23 18:34:38 --> URI Class Initialized
INFO - 2019-06-23 18:34:38 --> Router Class Initialized
INFO - 2019-06-23 18:34:38 --> Output Class Initialized
INFO - 2019-06-23 18:34:38 --> Security Class Initialized
DEBUG - 2019-06-23 18:34:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:34:38 --> Input Class Initialized
INFO - 2019-06-23 18:34:38 --> Language Class Initialized
INFO - 2019-06-23 18:34:38 --> Language Class Initialized
INFO - 2019-06-23 18:34:38 --> Config Class Initialized
INFO - 2019-06-23 18:34:38 --> Loader Class Initialized
DEBUG - 2019-06-23 18:34:38 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:34:38 --> Helper loaded: url_helper
INFO - 2019-06-23 18:34:38 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:34:38 --> Helper loaded: string_helper
INFO - 2019-06-23 18:34:38 --> Helper loaded: array_helper
INFO - 2019-06-23 18:34:38 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:34:38 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:34:38 --> Database Driver Class Initialized
INFO - 2019-06-23 18:34:38 --> Controller Class Initialized
INFO - 2019-06-23 18:34:41 --> Config Class Initialized
INFO - 2019-06-23 18:34:41 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:34:42 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:34:42 --> Utf8 Class Initialized
INFO - 2019-06-23 18:34:42 --> URI Class Initialized
INFO - 2019-06-23 18:34:42 --> Router Class Initialized
INFO - 2019-06-23 18:34:42 --> Output Class Initialized
INFO - 2019-06-23 18:34:42 --> Security Class Initialized
DEBUG - 2019-06-23 18:34:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:34:42 --> Input Class Initialized
INFO - 2019-06-23 18:34:42 --> Language Class Initialized
INFO - 2019-06-23 18:34:42 --> Language Class Initialized
INFO - 2019-06-23 18:34:42 --> Config Class Initialized
INFO - 2019-06-23 18:34:42 --> Loader Class Initialized
DEBUG - 2019-06-23 18:34:42 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:34:42 --> Helper loaded: url_helper
INFO - 2019-06-23 18:34:42 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:34:42 --> Helper loaded: string_helper
INFO - 2019-06-23 18:34:42 --> Helper loaded: array_helper
INFO - 2019-06-23 18:34:42 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:34:42 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:34:42 --> Database Driver Class Initialized
INFO - 2019-06-23 18:34:42 --> Controller Class Initialized
INFO - 2019-06-23 18:34:43 --> Config Class Initialized
INFO - 2019-06-23 18:34:43 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:34:43 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:34:43 --> Utf8 Class Initialized
INFO - 2019-06-23 18:34:43 --> URI Class Initialized
INFO - 2019-06-23 18:34:43 --> Router Class Initialized
INFO - 2019-06-23 18:34:43 --> Output Class Initialized
INFO - 2019-06-23 18:34:43 --> Security Class Initialized
DEBUG - 2019-06-23 18:34:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:34:43 --> Input Class Initialized
INFO - 2019-06-23 18:34:43 --> Language Class Initialized
INFO - 2019-06-23 18:34:43 --> Language Class Initialized
INFO - 2019-06-23 18:34:43 --> Config Class Initialized
INFO - 2019-06-23 18:34:43 --> Loader Class Initialized
DEBUG - 2019-06-23 18:34:43 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:34:43 --> Helper loaded: url_helper
INFO - 2019-06-23 18:34:43 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:34:43 --> Helper loaded: string_helper
INFO - 2019-06-23 18:34:43 --> Helper loaded: array_helper
INFO - 2019-06-23 18:34:43 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:34:43 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:34:43 --> Database Driver Class Initialized
INFO - 2019-06-23 18:34:43 --> Controller Class Initialized
INFO - 2019-06-23 18:34:43 --> Config Class Initialized
INFO - 2019-06-23 18:34:43 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:34:43 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:34:43 --> Utf8 Class Initialized
INFO - 2019-06-23 18:34:43 --> URI Class Initialized
INFO - 2019-06-23 18:34:44 --> Router Class Initialized
INFO - 2019-06-23 18:34:44 --> Output Class Initialized
INFO - 2019-06-23 18:34:44 --> Security Class Initialized
DEBUG - 2019-06-23 18:34:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:34:44 --> Input Class Initialized
INFO - 2019-06-23 18:34:44 --> Language Class Initialized
INFO - 2019-06-23 18:34:44 --> Language Class Initialized
INFO - 2019-06-23 18:34:44 --> Config Class Initialized
INFO - 2019-06-23 18:34:44 --> Loader Class Initialized
DEBUG - 2019-06-23 18:34:44 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:34:44 --> Helper loaded: url_helper
INFO - 2019-06-23 18:34:44 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:34:44 --> Helper loaded: string_helper
INFO - 2019-06-23 18:34:44 --> Helper loaded: array_helper
INFO - 2019-06-23 18:34:44 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:34:44 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:34:44 --> Database Driver Class Initialized
INFO - 2019-06-23 18:34:44 --> Controller Class Initialized
INFO - 2019-06-23 18:35:07 --> Config Class Initialized
INFO - 2019-06-23 18:35:07 --> Hooks Class Initialized
INFO - 2019-06-23 18:35:07 --> Config Class Initialized
INFO - 2019-06-23 18:35:07 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:35:07 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:35:07 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:35:07 --> Utf8 Class Initialized
INFO - 2019-06-23 18:35:07 --> Utf8 Class Initialized
INFO - 2019-06-23 18:35:07 --> URI Class Initialized
INFO - 2019-06-23 18:35:07 --> URI Class Initialized
INFO - 2019-06-23 18:35:07 --> Router Class Initialized
INFO - 2019-06-23 18:35:07 --> Router Class Initialized
INFO - 2019-06-23 18:35:07 --> Output Class Initialized
INFO - 2019-06-23 18:35:07 --> Output Class Initialized
INFO - 2019-06-23 18:35:07 --> Security Class Initialized
INFO - 2019-06-23 18:35:07 --> Security Class Initialized
DEBUG - 2019-06-23 18:35:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:35:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:35:07 --> Input Class Initialized
INFO - 2019-06-23 18:35:07 --> Input Class Initialized
INFO - 2019-06-23 18:35:07 --> Language Class Initialized
INFO - 2019-06-23 18:35:07 --> Language Class Initialized
INFO - 2019-06-23 18:35:07 --> Language Class Initialized
INFO - 2019-06-23 18:35:07 --> Language Class Initialized
INFO - 2019-06-23 18:35:07 --> Config Class Initialized
INFO - 2019-06-23 18:35:07 --> Config Class Initialized
INFO - 2019-06-23 18:35:07 --> Loader Class Initialized
INFO - 2019-06-23 18:35:07 --> Loader Class Initialized
DEBUG - 2019-06-23 18:35:07 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:35:07 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:35:07 --> Helper loaded: url_helper
INFO - 2019-06-23 18:35:07 --> Helper loaded: url_helper
INFO - 2019-06-23 18:35:07 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:35:07 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:35:07 --> Helper loaded: string_helper
INFO - 2019-06-23 18:35:08 --> Helper loaded: string_helper
INFO - 2019-06-23 18:35:08 --> Helper loaded: array_helper
INFO - 2019-06-23 18:35:08 --> Helper loaded: array_helper
INFO - 2019-06-23 18:35:08 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:35:08 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:35:08 --> Database Driver Class Initialized
INFO - 2019-06-23 18:35:08 --> Controller Class Initialized
INFO - 2019-06-23 18:35:08 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:35:08 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:35:08 --> Database Driver Class Initialized
INFO - 2019-06-23 18:35:08 --> Controller Class Initialized
INFO - 2019-06-23 18:35:10 --> Config Class Initialized
INFO - 2019-06-23 18:35:10 --> Config Class Initialized
INFO - 2019-06-23 18:35:10 --> Hooks Class Initialized
INFO - 2019-06-23 18:35:10 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:35:10 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:35:10 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:35:10 --> Utf8 Class Initialized
INFO - 2019-06-23 18:35:10 --> Utf8 Class Initialized
INFO - 2019-06-23 18:35:10 --> URI Class Initialized
INFO - 2019-06-23 18:35:10 --> URI Class Initialized
INFO - 2019-06-23 18:35:10 --> Router Class Initialized
INFO - 2019-06-23 18:35:10 --> Router Class Initialized
INFO - 2019-06-23 18:35:10 --> Output Class Initialized
INFO - 2019-06-23 18:35:10 --> Output Class Initialized
INFO - 2019-06-23 18:35:10 --> Security Class Initialized
INFO - 2019-06-23 18:35:10 --> Security Class Initialized
DEBUG - 2019-06-23 18:35:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:35:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:35:10 --> Input Class Initialized
INFO - 2019-06-23 18:35:10 --> Input Class Initialized
INFO - 2019-06-23 18:35:10 --> Language Class Initialized
INFO - 2019-06-23 18:35:10 --> Language Class Initialized
INFO - 2019-06-23 18:35:10 --> Language Class Initialized
INFO - 2019-06-23 18:35:10 --> Language Class Initialized
INFO - 2019-06-23 18:35:10 --> Config Class Initialized
INFO - 2019-06-23 18:35:10 --> Config Class Initialized
INFO - 2019-06-23 18:35:10 --> Loader Class Initialized
INFO - 2019-06-23 18:35:10 --> Loader Class Initialized
DEBUG - 2019-06-23 18:35:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:35:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:35:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:35:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:35:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:35:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:35:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:35:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:35:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:35:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:35:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:35:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:35:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:35:11 --> Controller Class Initialized
INFO - 2019-06-23 18:35:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:35:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:35:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:35:11 --> Controller Class Initialized
INFO - 2019-06-23 18:35:16 --> Config Class Initialized
INFO - 2019-06-23 18:35:16 --> Config Class Initialized
INFO - 2019-06-23 18:35:16 --> Hooks Class Initialized
INFO - 2019-06-23 18:35:16 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:35:16 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:35:16 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:35:16 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:35:16 --> URI Class Initialized
INFO - 2019-06-23 18:35:16 --> Utf8 Class Initialized
INFO - 2019-06-23 18:35:16 --> URI Class Initialized
INFO - 2019-06-23 18:35:16 --> Router Class Initialized
INFO - 2019-06-23 18:35:16 --> Router Class Initialized
INFO - 2019-06-23 18:35:16 --> Output Class Initialized
INFO - 2019-06-23 18:35:16 --> Output Class Initialized
INFO - 2019-06-23 18:35:16 --> Security Class Initialized
INFO - 2019-06-23 18:35:17 --> Security Class Initialized
DEBUG - 2019-06-23 18:35:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:35:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:35:17 --> Input Class Initialized
INFO - 2019-06-23 18:35:17 --> Input Class Initialized
INFO - 2019-06-23 18:35:17 --> Language Class Initialized
INFO - 2019-06-23 18:35:17 --> Language Class Initialized
INFO - 2019-06-23 18:35:17 --> Language Class Initialized
INFO - 2019-06-23 18:35:17 --> Language Class Initialized
INFO - 2019-06-23 18:35:17 --> Config Class Initialized
INFO - 2019-06-23 18:35:17 --> Config Class Initialized
INFO - 2019-06-23 18:35:17 --> Loader Class Initialized
INFO - 2019-06-23 18:35:17 --> Loader Class Initialized
DEBUG - 2019-06-23 18:35:17 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:35:17 --> Helper loaded: url_helper
INFO - 2019-06-23 18:35:17 --> Helper loaded: inflector_helper
DEBUG - 2019-06-23 18:35:17 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:35:17 --> Helper loaded: string_helper
INFO - 2019-06-23 18:35:17 --> Config Class Initialized
INFO - 2019-06-23 18:35:17 --> Hooks Class Initialized
INFO - 2019-06-23 18:35:17 --> Config Class Initialized
INFO - 2019-06-23 18:35:17 --> Helper loaded: url_helper
INFO - 2019-06-23 18:35:17 --> Helper loaded: array_helper
INFO - 2019-06-23 18:35:17 --> Hooks Class Initialized
INFO - 2019-06-23 18:35:17 --> Helper loaded: inflector_helper
DEBUG - 2019-06-23 18:35:17 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:35:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:35:17 --> Helper loaded: string_helper
INFO - 2019-06-23 18:35:17 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:35:17 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:35:17 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:35:17 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:35:17 --> Helper loaded: array_helper
INFO - 2019-06-23 18:35:17 --> URI Class Initialized
INFO - 2019-06-23 18:35:17 --> URI Class Initialized
INFO - 2019-06-23 18:35:17 --> Database Driver Class Initialized
INFO - 2019-06-23 18:35:17 --> Router Class Initialized
INFO - 2019-06-23 18:35:17 --> Controller Class Initialized
INFO - 2019-06-23 18:35:17 --> Router Class Initialized
INFO - 2019-06-23 18:35:17 --> Output Class Initialized
INFO - 2019-06-23 18:35:17 --> Output Class Initialized
INFO - 2019-06-23 18:35:17 --> Security Class Initialized
INFO - 2019-06-23 18:35:17 --> Security Class Initialized
DEBUG - 2019-06-23 18:35:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:35:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:35:17 --> Input Class Initialized
INFO - 2019-06-23 18:35:17 --> Input Class Initialized
INFO - 2019-06-23 18:35:17 --> Language Class Initialized
INFO - 2019-06-23 18:35:17 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:35:17 --> Language Class Initialized
INFO - 2019-06-23 18:35:17 --> Language Class Initialized
INFO - 2019-06-23 18:35:17 --> Language Class Initialized
INFO - 2019-06-23 18:35:17 --> Config Class Initialized
DEBUG - 2019-06-23 18:35:17 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:35:17 --> Loader Class Initialized
INFO - 2019-06-23 18:35:17 --> Config Class Initialized
INFO - 2019-06-23 18:35:17 --> Database Driver Class Initialized
INFO - 2019-06-23 18:35:17 --> Loader Class Initialized
DEBUG - 2019-06-23 18:35:17 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:35:17 --> Controller Class Initialized
DEBUG - 2019-06-23 18:35:17 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:35:17 --> Helper loaded: url_helper
INFO - 2019-06-23 18:35:17 --> Helper loaded: url_helper
INFO - 2019-06-23 18:35:17 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:35:17 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:35:17 --> Helper loaded: string_helper
INFO - 2019-06-23 18:35:17 --> Helper loaded: string_helper
INFO - 2019-06-23 18:35:17 --> Helper loaded: array_helper
INFO - 2019-06-23 18:35:17 --> Helper loaded: array_helper
INFO - 2019-06-23 18:35:17 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:35:17 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:35:17 --> Database Driver Class Initialized
INFO - 2019-06-23 18:35:17 --> Controller Class Initialized
INFO - 2019-06-23 18:35:17 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:35:17 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:35:18 --> Database Driver Class Initialized
INFO - 2019-06-23 18:35:18 --> Controller Class Initialized
INFO - 2019-06-23 18:37:11 --> Config Class Initialized
INFO - 2019-06-23 18:37:11 --> Config Class Initialized
INFO - 2019-06-23 18:37:11 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:37:11 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:37:11 --> Hooks Class Initialized
INFO - 2019-06-23 18:37:11 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:37:11 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:37:11 --> URI Class Initialized
INFO - 2019-06-23 18:37:11 --> Utf8 Class Initialized
INFO - 2019-06-23 18:37:11 --> URI Class Initialized
INFO - 2019-06-23 18:37:11 --> Router Class Initialized
INFO - 2019-06-23 18:37:11 --> Router Class Initialized
INFO - 2019-06-23 18:37:11 --> Output Class Initialized
INFO - 2019-06-23 18:37:11 --> Output Class Initialized
INFO - 2019-06-23 18:37:11 --> Security Class Initialized
INFO - 2019-06-23 18:37:11 --> Security Class Initialized
DEBUG - 2019-06-23 18:37:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:37:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:37:11 --> Input Class Initialized
INFO - 2019-06-23 18:37:11 --> Input Class Initialized
INFO - 2019-06-23 18:37:11 --> Language Class Initialized
INFO - 2019-06-23 18:37:11 --> Language Class Initialized
INFO - 2019-06-23 18:37:11 --> Language Class Initialized
INFO - 2019-06-23 18:37:11 --> Language Class Initialized
INFO - 2019-06-23 18:37:11 --> Config Class Initialized
INFO - 2019-06-23 18:37:11 --> Loader Class Initialized
INFO - 2019-06-23 18:37:11 --> Config Class Initialized
INFO - 2019-06-23 18:37:11 --> Loader Class Initialized
DEBUG - 2019-06-23 18:37:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:37:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:37:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:37:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:37:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:37:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:37:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:37:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:37:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:37:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:37:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:37:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:37:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:37:11 --> Controller Class Initialized
INFO - 2019-06-23 18:37:12 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:37:12 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:37:12 --> Database Driver Class Initialized
INFO - 2019-06-23 18:37:12 --> Controller Class Initialized
INFO - 2019-06-23 18:37:13 --> Config Class Initialized
INFO - 2019-06-23 18:37:13 --> Config Class Initialized
INFO - 2019-06-23 18:37:13 --> Hooks Class Initialized
INFO - 2019-06-23 18:37:13 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:37:13 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:37:13 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:37:13 --> Utf8 Class Initialized
INFO - 2019-06-23 18:37:13 --> Utf8 Class Initialized
INFO - 2019-06-23 18:37:13 --> URI Class Initialized
INFO - 2019-06-23 18:37:13 --> URI Class Initialized
INFO - 2019-06-23 18:37:13 --> Router Class Initialized
INFO - 2019-06-23 18:37:13 --> Router Class Initialized
INFO - 2019-06-23 18:37:13 --> Output Class Initialized
INFO - 2019-06-23 18:37:13 --> Output Class Initialized
INFO - 2019-06-23 18:37:13 --> Security Class Initialized
INFO - 2019-06-23 18:37:13 --> Security Class Initialized
DEBUG - 2019-06-23 18:37:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:37:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:37:13 --> Input Class Initialized
INFO - 2019-06-23 18:37:13 --> Input Class Initialized
INFO - 2019-06-23 18:37:13 --> Language Class Initialized
INFO - 2019-06-23 18:37:13 --> Language Class Initialized
INFO - 2019-06-23 18:37:13 --> Language Class Initialized
INFO - 2019-06-23 18:37:13 --> Language Class Initialized
INFO - 2019-06-23 18:37:13 --> Config Class Initialized
INFO - 2019-06-23 18:37:13 --> Loader Class Initialized
INFO - 2019-06-23 18:37:13 --> Config Class Initialized
INFO - 2019-06-23 18:37:13 --> Loader Class Initialized
DEBUG - 2019-06-23 18:37:13 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:37:13 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:37:13 --> Helper loaded: url_helper
INFO - 2019-06-23 18:37:13 --> Helper loaded: url_helper
INFO - 2019-06-23 18:37:13 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:37:13 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:37:13 --> Helper loaded: string_helper
INFO - 2019-06-23 18:37:13 --> Helper loaded: string_helper
INFO - 2019-06-23 18:37:13 --> Helper loaded: array_helper
INFO - 2019-06-23 18:37:13 --> Helper loaded: array_helper
INFO - 2019-06-23 18:37:13 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:37:13 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:37:13 --> Database Driver Class Initialized
INFO - 2019-06-23 18:37:13 --> Controller Class Initialized
INFO - 2019-06-23 18:37:14 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:37:14 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:37:14 --> Database Driver Class Initialized
INFO - 2019-06-23 18:37:14 --> Controller Class Initialized
INFO - 2019-06-23 18:37:16 --> Config Class Initialized
INFO - 2019-06-23 18:37:16 --> Config Class Initialized
INFO - 2019-06-23 18:37:16 --> Hooks Class Initialized
INFO - 2019-06-23 18:37:16 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:37:16 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:37:16 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:37:16 --> Utf8 Class Initialized
INFO - 2019-06-23 18:37:16 --> Utf8 Class Initialized
INFO - 2019-06-23 18:37:16 --> URI Class Initialized
INFO - 2019-06-23 18:37:16 --> URI Class Initialized
INFO - 2019-06-23 18:37:16 --> Router Class Initialized
INFO - 2019-06-23 18:37:16 --> Router Class Initialized
INFO - 2019-06-23 18:37:16 --> Output Class Initialized
INFO - 2019-06-23 18:37:16 --> Output Class Initialized
INFO - 2019-06-23 18:37:16 --> Security Class Initialized
INFO - 2019-06-23 18:37:16 --> Security Class Initialized
DEBUG - 2019-06-23 18:37:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:37:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:37:16 --> Input Class Initialized
INFO - 2019-06-23 18:37:16 --> Input Class Initialized
INFO - 2019-06-23 18:37:16 --> Language Class Initialized
INFO - 2019-06-23 18:37:16 --> Language Class Initialized
INFO - 2019-06-23 18:37:16 --> Language Class Initialized
INFO - 2019-06-23 18:37:16 --> Language Class Initialized
INFO - 2019-06-23 18:37:16 --> Config Class Initialized
INFO - 2019-06-23 18:37:16 --> Config Class Initialized
INFO - 2019-06-23 18:37:16 --> Loader Class Initialized
INFO - 2019-06-23 18:37:16 --> Loader Class Initialized
DEBUG - 2019-06-23 18:37:16 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:37:16 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:37:16 --> Helper loaded: url_helper
INFO - 2019-06-23 18:37:16 --> Helper loaded: url_helper
INFO - 2019-06-23 18:37:16 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:37:16 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:37:16 --> Helper loaded: string_helper
INFO - 2019-06-23 18:37:16 --> Helper loaded: string_helper
INFO - 2019-06-23 18:37:16 --> Helper loaded: array_helper
INFO - 2019-06-23 18:37:16 --> Helper loaded: array_helper
INFO - 2019-06-23 18:37:16 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:37:16 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:37:16 --> Database Driver Class Initialized
INFO - 2019-06-23 18:37:16 --> Controller Class Initialized
INFO - 2019-06-23 18:37:17 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:37:17 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:37:17 --> Database Driver Class Initialized
INFO - 2019-06-23 18:37:17 --> Controller Class Initialized
INFO - 2019-06-23 18:37:49 --> Config Class Initialized
INFO - 2019-06-23 18:37:49 --> Hooks Class Initialized
INFO - 2019-06-23 18:37:49 --> Config Class Initialized
DEBUG - 2019-06-23 18:37:49 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:37:49 --> Hooks Class Initialized
INFO - 2019-06-23 18:37:49 --> Utf8 Class Initialized
INFO - 2019-06-23 18:37:49 --> URI Class Initialized
DEBUG - 2019-06-23 18:37:49 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:37:49 --> Router Class Initialized
INFO - 2019-06-23 18:37:49 --> Utf8 Class Initialized
INFO - 2019-06-23 18:37:49 --> URI Class Initialized
INFO - 2019-06-23 18:37:49 --> Output Class Initialized
INFO - 2019-06-23 18:37:49 --> Router Class Initialized
INFO - 2019-06-23 18:37:49 --> Security Class Initialized
INFO - 2019-06-23 18:37:49 --> Output Class Initialized
DEBUG - 2019-06-23 18:37:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:37:49 --> Security Class Initialized
INFO - 2019-06-23 18:37:49 --> Input Class Initialized
INFO - 2019-06-23 18:37:49 --> Language Class Initialized
DEBUG - 2019-06-23 18:37:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:37:49 --> Language Class Initialized
INFO - 2019-06-23 18:37:49 --> Input Class Initialized
INFO - 2019-06-23 18:37:49 --> Config Class Initialized
INFO - 2019-06-23 18:37:49 --> Language Class Initialized
INFO - 2019-06-23 18:37:49 --> Loader Class Initialized
DEBUG - 2019-06-23 18:37:49 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:37:49 --> Language Class Initialized
INFO - 2019-06-23 18:37:50 --> Helper loaded: url_helper
INFO - 2019-06-23 18:37:50 --> Config Class Initialized
INFO - 2019-06-23 18:37:50 --> Loader Class Initialized
INFO - 2019-06-23 18:37:50 --> Helper loaded: inflector_helper
DEBUG - 2019-06-23 18:37:50 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:37:50 --> Helper loaded: string_helper
INFO - 2019-06-23 18:37:50 --> Helper loaded: url_helper
INFO - 2019-06-23 18:37:50 --> Helper loaded: array_helper
INFO - 2019-06-23 18:37:50 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:37:50 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:37:50 --> Helper loaded: string_helper
DEBUG - 2019-06-23 18:37:50 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:37:50 --> Helper loaded: array_helper
INFO - 2019-06-23 18:37:50 --> Database Driver Class Initialized
INFO - 2019-06-23 18:37:50 --> Controller Class Initialized
INFO - 2019-06-23 18:37:50 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:37:50 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:37:50 --> Database Driver Class Initialized
INFO - 2019-06-23 18:37:50 --> Controller Class Initialized
INFO - 2019-06-23 18:37:52 --> Config Class Initialized
INFO - 2019-06-23 18:37:52 --> Config Class Initialized
INFO - 2019-06-23 18:37:52 --> Hooks Class Initialized
INFO - 2019-06-23 18:37:52 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:37:52 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:37:52 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:37:52 --> Utf8 Class Initialized
INFO - 2019-06-23 18:37:52 --> Utf8 Class Initialized
INFO - 2019-06-23 18:37:52 --> URI Class Initialized
INFO - 2019-06-23 18:37:52 --> URI Class Initialized
INFO - 2019-06-23 18:37:52 --> Router Class Initialized
INFO - 2019-06-23 18:37:52 --> Router Class Initialized
INFO - 2019-06-23 18:37:52 --> Output Class Initialized
INFO - 2019-06-23 18:37:52 --> Output Class Initialized
INFO - 2019-06-23 18:37:52 --> Security Class Initialized
INFO - 2019-06-23 18:37:52 --> Security Class Initialized
DEBUG - 2019-06-23 18:37:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:37:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:37:52 --> Input Class Initialized
INFO - 2019-06-23 18:37:52 --> Input Class Initialized
INFO - 2019-06-23 18:37:52 --> Language Class Initialized
INFO - 2019-06-23 18:37:52 --> Language Class Initialized
INFO - 2019-06-23 18:37:52 --> Language Class Initialized
INFO - 2019-06-23 18:37:52 --> Config Class Initialized
INFO - 2019-06-23 18:37:52 --> Language Class Initialized
INFO - 2019-06-23 18:37:52 --> Config Class Initialized
INFO - 2019-06-23 18:37:52 --> Loader Class Initialized
INFO - 2019-06-23 18:37:53 --> Loader Class Initialized
DEBUG - 2019-06-23 18:37:53 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:37:53 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:37:53 --> Helper loaded: url_helper
INFO - 2019-06-23 18:37:53 --> Helper loaded: url_helper
INFO - 2019-06-23 18:37:53 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:37:53 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:37:53 --> Helper loaded: string_helper
INFO - 2019-06-23 18:37:53 --> Helper loaded: string_helper
INFO - 2019-06-23 18:37:53 --> Helper loaded: array_helper
INFO - 2019-06-23 18:37:53 --> Helper loaded: array_helper
INFO - 2019-06-23 18:37:53 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:37:53 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:37:53 --> Database Driver Class Initialized
INFO - 2019-06-23 18:37:53 --> Controller Class Initialized
INFO - 2019-06-23 18:37:53 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:37:53 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:37:53 --> Database Driver Class Initialized
INFO - 2019-06-23 18:37:53 --> Controller Class Initialized
INFO - 2019-06-23 18:39:10 --> Config Class Initialized
INFO - 2019-06-23 18:39:10 --> Hooks Class Initialized
INFO - 2019-06-23 18:39:10 --> Config Class Initialized
INFO - 2019-06-23 18:39:10 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:39:10 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:39:10 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:39:10 --> Utf8 Class Initialized
INFO - 2019-06-23 18:39:10 --> Utf8 Class Initialized
INFO - 2019-06-23 18:39:10 --> URI Class Initialized
INFO - 2019-06-23 18:39:10 --> URI Class Initialized
INFO - 2019-06-23 18:39:10 --> Router Class Initialized
INFO - 2019-06-23 18:39:10 --> Router Class Initialized
INFO - 2019-06-23 18:39:10 --> Output Class Initialized
INFO - 2019-06-23 18:39:10 --> Output Class Initialized
INFO - 2019-06-23 18:39:10 --> Security Class Initialized
INFO - 2019-06-23 18:39:10 --> Security Class Initialized
DEBUG - 2019-06-23 18:39:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:39:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:39:11 --> Input Class Initialized
INFO - 2019-06-23 18:39:11 --> Input Class Initialized
INFO - 2019-06-23 18:39:11 --> Language Class Initialized
INFO - 2019-06-23 18:39:11 --> Language Class Initialized
INFO - 2019-06-23 18:39:11 --> Language Class Initialized
INFO - 2019-06-23 18:39:11 --> Language Class Initialized
INFO - 2019-06-23 18:39:11 --> Config Class Initialized
INFO - 2019-06-23 18:39:11 --> Config Class Initialized
INFO - 2019-06-23 18:39:11 --> Config Class Initialized
INFO - 2019-06-23 18:39:11 --> Config Class Initialized
INFO - 2019-06-23 18:39:11 --> Loader Class Initialized
INFO - 2019-06-23 18:39:11 --> Loader Class Initialized
INFO - 2019-06-23 18:39:11 --> Hooks Class Initialized
INFO - 2019-06-23 18:39:11 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:39:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:39:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:39:11 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:39:11 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:39:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:39:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:39:11 --> Utf8 Class Initialized
INFO - 2019-06-23 18:39:11 --> Utf8 Class Initialized
INFO - 2019-06-23 18:39:11 --> URI Class Initialized
INFO - 2019-06-23 18:39:11 --> URI Class Initialized
INFO - 2019-06-23 18:39:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:39:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:39:11 --> Router Class Initialized
INFO - 2019-06-23 18:39:11 --> Router Class Initialized
INFO - 2019-06-23 18:39:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:39:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:39:11 --> Output Class Initialized
INFO - 2019-06-23 18:39:11 --> Output Class Initialized
INFO - 2019-06-23 18:39:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:39:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:39:11 --> Security Class Initialized
INFO - 2019-06-23 18:39:11 --> Security Class Initialized
INFO - 2019-06-23 18:39:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:39:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:39:11 --> Input Class Initialized
INFO - 2019-06-23 18:39:11 --> Input Class Initialized
INFO - 2019-06-23 18:39:11 --> Language Class Initialized
INFO - 2019-06-23 18:39:11 --> Language Class Initialized
INFO - 2019-06-23 18:39:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:39:11 --> Language Class Initialized
INFO - 2019-06-23 18:39:11 --> Language Class Initialized
INFO - 2019-06-23 18:39:11 --> Controller Class Initialized
INFO - 2019-06-23 18:39:11 --> Config Class Initialized
INFO - 2019-06-23 18:39:11 --> Config Class Initialized
INFO - 2019-06-23 18:39:11 --> Loader Class Initialized
INFO - 2019-06-23 18:39:11 --> Loader Class Initialized
DEBUG - 2019-06-23 18:39:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:39:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:39:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:39:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:39:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:39:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:39:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:39:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:39:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:39:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:39:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:39:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:39:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:39:11 --> Controller Class Initialized
INFO - 2019-06-23 18:39:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:39:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:39:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:39:11 --> Controller Class Initialized
INFO - 2019-06-23 18:39:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:39:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:39:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:39:11 --> Controller Class Initialized
INFO - 2019-06-23 18:39:16 --> Config Class Initialized
INFO - 2019-06-23 18:39:16 --> Hooks Class Initialized
INFO - 2019-06-23 18:39:16 --> Config Class Initialized
INFO - 2019-06-23 18:39:16 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:39:16 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:39:17 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:39:17 --> Utf8 Class Initialized
INFO - 2019-06-23 18:39:17 --> Utf8 Class Initialized
INFO - 2019-06-23 18:39:17 --> URI Class Initialized
INFO - 2019-06-23 18:39:17 --> URI Class Initialized
INFO - 2019-06-23 18:39:17 --> Router Class Initialized
INFO - 2019-06-23 18:39:17 --> Router Class Initialized
INFO - 2019-06-23 18:39:17 --> Output Class Initialized
INFO - 2019-06-23 18:39:17 --> Output Class Initialized
INFO - 2019-06-23 18:39:17 --> Security Class Initialized
INFO - 2019-06-23 18:39:17 --> Security Class Initialized
DEBUG - 2019-06-23 18:39:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:39:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:39:17 --> Input Class Initialized
INFO - 2019-06-23 18:39:17 --> Input Class Initialized
INFO - 2019-06-23 18:39:17 --> Language Class Initialized
INFO - 2019-06-23 18:39:17 --> Language Class Initialized
INFO - 2019-06-23 18:39:17 --> Language Class Initialized
INFO - 2019-06-23 18:39:17 --> Config Class Initialized
INFO - 2019-06-23 18:39:17 --> Language Class Initialized
INFO - 2019-06-23 18:39:17 --> Config Class Initialized
INFO - 2019-06-23 18:39:17 --> Loader Class Initialized
INFO - 2019-06-23 18:39:17 --> Loader Class Initialized
DEBUG - 2019-06-23 18:39:17 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:39:17 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:39:17 --> Helper loaded: url_helper
INFO - 2019-06-23 18:39:17 --> Helper loaded: url_helper
INFO - 2019-06-23 18:39:17 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:39:17 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:39:17 --> Helper loaded: string_helper
INFO - 2019-06-23 18:39:17 --> Helper loaded: string_helper
INFO - 2019-06-23 18:39:17 --> Helper loaded: array_helper
INFO - 2019-06-23 18:39:17 --> Helper loaded: array_helper
INFO - 2019-06-23 18:39:17 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:39:17 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:39:17 --> Database Driver Class Initialized
INFO - 2019-06-23 18:39:17 --> Controller Class Initialized
INFO - 2019-06-23 18:39:17 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:39:17 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:39:17 --> Database Driver Class Initialized
INFO - 2019-06-23 18:39:17 --> Controller Class Initialized
INFO - 2019-06-23 18:39:20 --> Config Class Initialized
INFO - 2019-06-23 18:39:20 --> Config Class Initialized
INFO - 2019-06-23 18:39:20 --> Hooks Class Initialized
INFO - 2019-06-23 18:39:20 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:39:20 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:39:20 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:39:20 --> Utf8 Class Initialized
INFO - 2019-06-23 18:39:20 --> Utf8 Class Initialized
INFO - 2019-06-23 18:39:20 --> URI Class Initialized
INFO - 2019-06-23 18:39:20 --> URI Class Initialized
INFO - 2019-06-23 18:39:20 --> Router Class Initialized
INFO - 2019-06-23 18:39:20 --> Router Class Initialized
INFO - 2019-06-23 18:39:20 --> Output Class Initialized
INFO - 2019-06-23 18:39:20 --> Output Class Initialized
INFO - 2019-06-23 18:39:20 --> Security Class Initialized
INFO - 2019-06-23 18:39:20 --> Security Class Initialized
DEBUG - 2019-06-23 18:39:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:39:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:39:20 --> Input Class Initialized
INFO - 2019-06-23 18:39:20 --> Input Class Initialized
INFO - 2019-06-23 18:39:20 --> Language Class Initialized
INFO - 2019-06-23 18:39:20 --> Language Class Initialized
INFO - 2019-06-23 18:39:20 --> Language Class Initialized
INFO - 2019-06-23 18:39:20 --> Language Class Initialized
INFO - 2019-06-23 18:39:20 --> Config Class Initialized
INFO - 2019-06-23 18:39:20 --> Loader Class Initialized
INFO - 2019-06-23 18:39:20 --> Config Class Initialized
INFO - 2019-06-23 18:39:20 --> Loader Class Initialized
DEBUG - 2019-06-23 18:39:20 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:39:20 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:39:20 --> Helper loaded: url_helper
INFO - 2019-06-23 18:39:20 --> Helper loaded: url_helper
INFO - 2019-06-23 18:39:20 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:39:20 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:39:20 --> Helper loaded: string_helper
INFO - 2019-06-23 18:39:20 --> Helper loaded: string_helper
INFO - 2019-06-23 18:39:20 --> Helper loaded: array_helper
INFO - 2019-06-23 18:39:20 --> Helper loaded: array_helper
INFO - 2019-06-23 18:39:20 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:39:20 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:39:20 --> Database Driver Class Initialized
INFO - 2019-06-23 18:39:20 --> Controller Class Initialized
INFO - 2019-06-23 18:39:20 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:39:20 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:39:20 --> Database Driver Class Initialized
INFO - 2019-06-23 18:39:20 --> Controller Class Initialized
INFO - 2019-06-23 18:39:32 --> Config Class Initialized
INFO - 2019-06-23 18:39:32 --> Config Class Initialized
INFO - 2019-06-23 18:39:32 --> Hooks Class Initialized
INFO - 2019-06-23 18:39:32 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:39:32 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:39:32 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:39:32 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:39:32 --> Utf8 Class Initialized
INFO - 2019-06-23 18:39:32 --> URI Class Initialized
INFO - 2019-06-23 18:39:32 --> URI Class Initialized
INFO - 2019-06-23 18:39:32 --> Router Class Initialized
INFO - 2019-06-23 18:39:32 --> Router Class Initialized
INFO - 2019-06-23 18:39:32 --> Output Class Initialized
INFO - 2019-06-23 18:39:32 --> Output Class Initialized
INFO - 2019-06-23 18:39:32 --> Security Class Initialized
INFO - 2019-06-23 18:39:32 --> Security Class Initialized
DEBUG - 2019-06-23 18:39:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:39:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:39:32 --> Input Class Initialized
INFO - 2019-06-23 18:39:32 --> Input Class Initialized
INFO - 2019-06-23 18:39:32 --> Language Class Initialized
INFO - 2019-06-23 18:39:32 --> Language Class Initialized
INFO - 2019-06-23 18:39:32 --> Language Class Initialized
INFO - 2019-06-23 18:39:32 --> Config Class Initialized
INFO - 2019-06-23 18:39:32 --> Language Class Initialized
INFO - 2019-06-23 18:39:32 --> Config Class Initialized
INFO - 2019-06-23 18:39:32 --> Loader Class Initialized
INFO - 2019-06-23 18:39:32 --> Loader Class Initialized
DEBUG - 2019-06-23 18:39:32 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:39:32 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:39:32 --> Helper loaded: url_helper
INFO - 2019-06-23 18:39:33 --> Helper loaded: url_helper
INFO - 2019-06-23 18:39:33 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:39:33 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:39:33 --> Helper loaded: string_helper
INFO - 2019-06-23 18:39:33 --> Helper loaded: string_helper
INFO - 2019-06-23 18:39:33 --> Helper loaded: array_helper
INFO - 2019-06-23 18:39:33 --> Helper loaded: array_helper
INFO - 2019-06-23 18:39:33 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:39:33 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:39:33 --> Database Driver Class Initialized
INFO - 2019-06-23 18:39:33 --> Controller Class Initialized
INFO - 2019-06-23 18:39:33 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:39:33 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:39:33 --> Database Driver Class Initialized
INFO - 2019-06-23 18:39:33 --> Controller Class Initialized
INFO - 2019-06-23 18:41:19 --> Config Class Initialized
INFO - 2019-06-23 18:41:19 --> Config Class Initialized
INFO - 2019-06-23 18:41:19 --> Hooks Class Initialized
INFO - 2019-06-23 18:41:19 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:41:19 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:41:19 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:41:19 --> Utf8 Class Initialized
INFO - 2019-06-23 18:41:19 --> Utf8 Class Initialized
INFO - 2019-06-23 18:41:19 --> URI Class Initialized
INFO - 2019-06-23 18:41:19 --> URI Class Initialized
INFO - 2019-06-23 18:41:19 --> Router Class Initialized
INFO - 2019-06-23 18:41:19 --> Router Class Initialized
INFO - 2019-06-23 18:41:19 --> Output Class Initialized
INFO - 2019-06-23 18:41:19 --> Output Class Initialized
INFO - 2019-06-23 18:41:19 --> Security Class Initialized
INFO - 2019-06-23 18:41:19 --> Security Class Initialized
DEBUG - 2019-06-23 18:41:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:41:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:41:19 --> Input Class Initialized
INFO - 2019-06-23 18:41:19 --> Input Class Initialized
INFO - 2019-06-23 18:41:19 --> Language Class Initialized
INFO - 2019-06-23 18:41:19 --> Language Class Initialized
INFO - 2019-06-23 18:41:19 --> Language Class Initialized
INFO - 2019-06-23 18:41:19 --> Language Class Initialized
INFO - 2019-06-23 18:41:19 --> Config Class Initialized
INFO - 2019-06-23 18:41:19 --> Config Class Initialized
INFO - 2019-06-23 18:41:19 --> Loader Class Initialized
INFO - 2019-06-23 18:41:19 --> Loader Class Initialized
DEBUG - 2019-06-23 18:41:19 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:41:19 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:41:19 --> Helper loaded: url_helper
INFO - 2019-06-23 18:41:19 --> Helper loaded: url_helper
INFO - 2019-06-23 18:41:19 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:41:19 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:41:19 --> Helper loaded: string_helper
INFO - 2019-06-23 18:41:19 --> Helper loaded: string_helper
INFO - 2019-06-23 18:41:19 --> Helper loaded: array_helper
INFO - 2019-06-23 18:41:19 --> Helper loaded: array_helper
INFO - 2019-06-23 18:41:19 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:41:19 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:41:19 --> Database Driver Class Initialized
INFO - 2019-06-23 18:41:19 --> Controller Class Initialized
INFO - 2019-06-23 18:41:19 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:41:19 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:41:19 --> Database Driver Class Initialized
INFO - 2019-06-23 18:41:19 --> Controller Class Initialized
INFO - 2019-06-23 18:41:21 --> Config Class Initialized
INFO - 2019-06-23 18:41:21 --> Hooks Class Initialized
INFO - 2019-06-23 18:41:21 --> Config Class Initialized
DEBUG - 2019-06-23 18:41:21 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:41:21 --> Hooks Class Initialized
INFO - 2019-06-23 18:41:21 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:41:21 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:41:21 --> URI Class Initialized
INFO - 2019-06-23 18:41:21 --> Utf8 Class Initialized
INFO - 2019-06-23 18:41:21 --> URI Class Initialized
INFO - 2019-06-23 18:41:21 --> Router Class Initialized
INFO - 2019-06-23 18:41:21 --> Router Class Initialized
INFO - 2019-06-23 18:41:21 --> Output Class Initialized
INFO - 2019-06-23 18:41:21 --> Output Class Initialized
INFO - 2019-06-23 18:41:21 --> Security Class Initialized
INFO - 2019-06-23 18:41:21 --> Security Class Initialized
DEBUG - 2019-06-23 18:41:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:41:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:41:21 --> Input Class Initialized
INFO - 2019-06-23 18:41:21 --> Input Class Initialized
INFO - 2019-06-23 18:41:21 --> Language Class Initialized
INFO - 2019-06-23 18:41:21 --> Language Class Initialized
INFO - 2019-06-23 18:41:21 --> Language Class Initialized
INFO - 2019-06-23 18:41:21 --> Language Class Initialized
INFO - 2019-06-23 18:41:21 --> Config Class Initialized
INFO - 2019-06-23 18:41:21 --> Config Class Initialized
INFO - 2019-06-23 18:41:21 --> Loader Class Initialized
INFO - 2019-06-23 18:41:21 --> Loader Class Initialized
DEBUG - 2019-06-23 18:41:21 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:41:21 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:41:21 --> Helper loaded: url_helper
INFO - 2019-06-23 18:41:21 --> Helper loaded: url_helper
INFO - 2019-06-23 18:41:21 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:41:21 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:41:21 --> Helper loaded: string_helper
INFO - 2019-06-23 18:41:21 --> Helper loaded: string_helper
INFO - 2019-06-23 18:41:21 --> Helper loaded: array_helper
INFO - 2019-06-23 18:41:21 --> Helper loaded: array_helper
INFO - 2019-06-23 18:41:21 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:41:21 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:41:21 --> Database Driver Class Initialized
INFO - 2019-06-23 18:41:21 --> Controller Class Initialized
INFO - 2019-06-23 18:41:22 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:41:22 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:41:22 --> Database Driver Class Initialized
INFO - 2019-06-23 18:41:22 --> Controller Class Initialized
INFO - 2019-06-23 18:41:24 --> Config Class Initialized
INFO - 2019-06-23 18:41:24 --> Config Class Initialized
INFO - 2019-06-23 18:41:24 --> Hooks Class Initialized
INFO - 2019-06-23 18:41:24 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:41:24 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:41:24 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:41:24 --> Utf8 Class Initialized
INFO - 2019-06-23 18:41:24 --> Utf8 Class Initialized
INFO - 2019-06-23 18:41:24 --> URI Class Initialized
INFO - 2019-06-23 18:41:24 --> URI Class Initialized
INFO - 2019-06-23 18:41:24 --> Router Class Initialized
INFO - 2019-06-23 18:41:24 --> Router Class Initialized
INFO - 2019-06-23 18:41:24 --> Output Class Initialized
INFO - 2019-06-23 18:41:24 --> Output Class Initialized
INFO - 2019-06-23 18:41:24 --> Security Class Initialized
INFO - 2019-06-23 18:41:24 --> Security Class Initialized
DEBUG - 2019-06-23 18:41:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:41:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:41:24 --> Input Class Initialized
INFO - 2019-06-23 18:41:24 --> Input Class Initialized
INFO - 2019-06-23 18:41:24 --> Language Class Initialized
INFO - 2019-06-23 18:41:24 --> Language Class Initialized
INFO - 2019-06-23 18:41:24 --> Language Class Initialized
INFO - 2019-06-23 18:41:24 --> Language Class Initialized
INFO - 2019-06-23 18:41:24 --> Config Class Initialized
INFO - 2019-06-23 18:41:24 --> Config Class Initialized
INFO - 2019-06-23 18:41:24 --> Loader Class Initialized
INFO - 2019-06-23 18:41:24 --> Loader Class Initialized
DEBUG - 2019-06-23 18:41:24 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:41:24 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:41:24 --> Helper loaded: url_helper
INFO - 2019-06-23 18:41:24 --> Helper loaded: url_helper
INFO - 2019-06-23 18:41:24 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:41:24 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:41:24 --> Helper loaded: string_helper
INFO - 2019-06-23 18:41:24 --> Helper loaded: string_helper
INFO - 2019-06-23 18:41:24 --> Helper loaded: array_helper
INFO - 2019-06-23 18:41:24 --> Helper loaded: array_helper
INFO - 2019-06-23 18:41:24 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:41:24 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:41:24 --> Database Driver Class Initialized
INFO - 2019-06-23 18:41:24 --> Controller Class Initialized
INFO - 2019-06-23 18:41:25 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:41:25 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:41:25 --> Database Driver Class Initialized
INFO - 2019-06-23 18:41:25 --> Controller Class Initialized
INFO - 2019-06-23 18:41:30 --> Config Class Initialized
INFO - 2019-06-23 18:41:30 --> Config Class Initialized
INFO - 2019-06-23 18:41:30 --> Hooks Class Initialized
INFO - 2019-06-23 18:41:30 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:41:30 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:41:30 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:41:30 --> Utf8 Class Initialized
INFO - 2019-06-23 18:41:30 --> Utf8 Class Initialized
INFO - 2019-06-23 18:41:30 --> URI Class Initialized
INFO - 2019-06-23 18:41:30 --> URI Class Initialized
INFO - 2019-06-23 18:41:30 --> Router Class Initialized
INFO - 2019-06-23 18:41:30 --> Router Class Initialized
INFO - 2019-06-23 18:41:30 --> Output Class Initialized
INFO - 2019-06-23 18:41:30 --> Output Class Initialized
INFO - 2019-06-23 18:41:30 --> Security Class Initialized
INFO - 2019-06-23 18:41:30 --> Security Class Initialized
DEBUG - 2019-06-23 18:41:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:41:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:41:30 --> Input Class Initialized
INFO - 2019-06-23 18:41:30 --> Input Class Initialized
INFO - 2019-06-23 18:41:30 --> Language Class Initialized
INFO - 2019-06-23 18:41:30 --> Language Class Initialized
INFO - 2019-06-23 18:41:30 --> Language Class Initialized
INFO - 2019-06-23 18:41:30 --> Language Class Initialized
INFO - 2019-06-23 18:41:30 --> Config Class Initialized
INFO - 2019-06-23 18:41:30 --> Config Class Initialized
INFO - 2019-06-23 18:41:30 --> Loader Class Initialized
INFO - 2019-06-23 18:41:30 --> Loader Class Initialized
DEBUG - 2019-06-23 18:41:30 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:41:30 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:41:30 --> Helper loaded: url_helper
INFO - 2019-06-23 18:41:30 --> Helper loaded: url_helper
INFO - 2019-06-23 18:41:30 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:41:30 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:41:30 --> Helper loaded: string_helper
INFO - 2019-06-23 18:41:30 --> Helper loaded: string_helper
INFO - 2019-06-23 18:41:30 --> Helper loaded: array_helper
INFO - 2019-06-23 18:41:30 --> Helper loaded: array_helper
INFO - 2019-06-23 18:41:30 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:41:31 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:41:31 --> Database Driver Class Initialized
INFO - 2019-06-23 18:41:31 --> Controller Class Initialized
INFO - 2019-06-23 18:41:31 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:41:31 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:41:31 --> Database Driver Class Initialized
INFO - 2019-06-23 18:41:31 --> Controller Class Initialized
INFO - 2019-06-23 18:41:33 --> Config Class Initialized
INFO - 2019-06-23 18:41:33 --> Config Class Initialized
INFO - 2019-06-23 18:41:33 --> Hooks Class Initialized
INFO - 2019-06-23 18:41:33 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:41:33 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:41:33 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:41:33 --> Utf8 Class Initialized
INFO - 2019-06-23 18:41:33 --> Utf8 Class Initialized
INFO - 2019-06-23 18:41:33 --> URI Class Initialized
INFO - 2019-06-23 18:41:33 --> URI Class Initialized
INFO - 2019-06-23 18:41:33 --> Router Class Initialized
INFO - 2019-06-23 18:41:33 --> Router Class Initialized
INFO - 2019-06-23 18:41:33 --> Output Class Initialized
INFO - 2019-06-23 18:41:33 --> Output Class Initialized
INFO - 2019-06-23 18:41:33 --> Security Class Initialized
INFO - 2019-06-23 18:41:33 --> Security Class Initialized
DEBUG - 2019-06-23 18:41:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:41:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:41:33 --> Input Class Initialized
INFO - 2019-06-23 18:41:33 --> Input Class Initialized
INFO - 2019-06-23 18:41:33 --> Language Class Initialized
INFO - 2019-06-23 18:41:33 --> Language Class Initialized
INFO - 2019-06-23 18:41:33 --> Language Class Initialized
INFO - 2019-06-23 18:41:33 --> Language Class Initialized
INFO - 2019-06-23 18:41:33 --> Config Class Initialized
INFO - 2019-06-23 18:41:33 --> Config Class Initialized
INFO - 2019-06-23 18:41:33 --> Loader Class Initialized
INFO - 2019-06-23 18:41:33 --> Loader Class Initialized
DEBUG - 2019-06-23 18:41:33 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:41:34 --> Helper loaded: url_helper
DEBUG - 2019-06-23 18:41:34 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:41:34 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:41:34 --> Helper loaded: url_helper
INFO - 2019-06-23 18:41:34 --> Config Class Initialized
INFO - 2019-06-23 18:41:34 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:41:34 --> Helper loaded: string_helper
INFO - 2019-06-23 18:41:34 --> Config Class Initialized
INFO - 2019-06-23 18:41:34 --> Hooks Class Initialized
INFO - 2019-06-23 18:41:34 --> Helper loaded: array_helper
INFO - 2019-06-23 18:41:34 --> Hooks Class Initialized
INFO - 2019-06-23 18:41:34 --> Helper loaded: string_helper
DEBUG - 2019-06-23 18:41:34 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:41:34 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:41:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:41:34 --> Helper loaded: array_helper
INFO - 2019-06-23 18:41:34 --> Utf8 Class Initialized
INFO - 2019-06-23 18:41:34 --> Utf8 Class Initialized
INFO - 2019-06-23 18:41:34 --> URI Class Initialized
DEBUG - 2019-06-23 18:41:34 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:41:34 --> URI Class Initialized
INFO - 2019-06-23 18:41:34 --> Router Class Initialized
INFO - 2019-06-23 18:41:34 --> Database Driver Class Initialized
INFO - 2019-06-23 18:41:34 --> Router Class Initialized
INFO - 2019-06-23 18:41:34 --> Output Class Initialized
INFO - 2019-06-23 18:41:34 --> Output Class Initialized
INFO - 2019-06-23 18:41:34 --> Controller Class Initialized
INFO - 2019-06-23 18:41:34 --> Security Class Initialized
INFO - 2019-06-23 18:41:34 --> Security Class Initialized
DEBUG - 2019-06-23 18:41:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:41:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:41:34 --> Input Class Initialized
INFO - 2019-06-23 18:41:34 --> Input Class Initialized
INFO - 2019-06-23 18:41:34 --> Language Class Initialized
INFO - 2019-06-23 18:41:34 --> Language Class Initialized
INFO - 2019-06-23 18:41:34 --> Language Class Initialized
INFO - 2019-06-23 18:41:34 --> Language Class Initialized
INFO - 2019-06-23 18:41:34 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:41:34 --> Config Class Initialized
INFO - 2019-06-23 18:41:34 --> Loader Class Initialized
INFO - 2019-06-23 18:41:34 --> Config Class Initialized
DEBUG - 2019-06-23 18:41:34 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:41:34 --> Loader Class Initialized
DEBUG - 2019-06-23 18:41:34 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:41:34 --> Database Driver Class Initialized
DEBUG - 2019-06-23 18:41:34 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:41:34 --> Helper loaded: url_helper
INFO - 2019-06-23 18:41:34 --> Helper loaded: url_helper
INFO - 2019-06-23 18:41:34 --> Controller Class Initialized
INFO - 2019-06-23 18:41:34 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:41:34 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:41:34 --> Helper loaded: string_helper
INFO - 2019-06-23 18:41:34 --> Helper loaded: string_helper
INFO - 2019-06-23 18:41:34 --> Helper loaded: array_helper
INFO - 2019-06-23 18:41:34 --> Helper loaded: array_helper
INFO - 2019-06-23 18:41:34 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:41:34 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:41:34 --> Database Driver Class Initialized
INFO - 2019-06-23 18:41:34 --> Controller Class Initialized
INFO - 2019-06-23 18:41:34 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:41:34 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:41:34 --> Database Driver Class Initialized
INFO - 2019-06-23 18:41:34 --> Controller Class Initialized
INFO - 2019-06-23 18:42:58 --> Config Class Initialized
INFO - 2019-06-23 18:42:58 --> Config Class Initialized
INFO - 2019-06-23 18:42:58 --> Hooks Class Initialized
INFO - 2019-06-23 18:42:58 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:42:58 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:42:58 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:42:58 --> Utf8 Class Initialized
INFO - 2019-06-23 18:42:58 --> Utf8 Class Initialized
INFO - 2019-06-23 18:42:58 --> URI Class Initialized
INFO - 2019-06-23 18:42:58 --> URI Class Initialized
INFO - 2019-06-23 18:42:58 --> Router Class Initialized
INFO - 2019-06-23 18:42:58 --> Router Class Initialized
INFO - 2019-06-23 18:42:58 --> Output Class Initialized
INFO - 2019-06-23 18:42:58 --> Output Class Initialized
INFO - 2019-06-23 18:42:58 --> Security Class Initialized
INFO - 2019-06-23 18:42:58 --> Security Class Initialized
DEBUG - 2019-06-23 18:42:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:42:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:42:58 --> Input Class Initialized
INFO - 2019-06-23 18:42:58 --> Input Class Initialized
INFO - 2019-06-23 18:42:58 --> Language Class Initialized
INFO - 2019-06-23 18:42:58 --> Language Class Initialized
INFO - 2019-06-23 18:42:58 --> Language Class Initialized
INFO - 2019-06-23 18:42:58 --> Language Class Initialized
INFO - 2019-06-23 18:42:58 --> Config Class Initialized
INFO - 2019-06-23 18:42:58 --> Loader Class Initialized
INFO - 2019-06-23 18:42:58 --> Config Class Initialized
INFO - 2019-06-23 18:42:58 --> Loader Class Initialized
DEBUG - 2019-06-23 18:42:58 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:42:58 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:42:58 --> Helper loaded: url_helper
INFO - 2019-06-23 18:42:58 --> Helper loaded: url_helper
INFO - 2019-06-23 18:42:58 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:42:58 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:42:58 --> Helper loaded: string_helper
INFO - 2019-06-23 18:42:58 --> Helper loaded: string_helper
INFO - 2019-06-23 18:42:58 --> Helper loaded: array_helper
INFO - 2019-06-23 18:42:58 --> Helper loaded: array_helper
INFO - 2019-06-23 18:42:58 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:42:58 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:42:58 --> Database Driver Class Initialized
INFO - 2019-06-23 18:42:58 --> Controller Class Initialized
INFO - 2019-06-23 18:42:58 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:42:58 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:42:58 --> Database Driver Class Initialized
INFO - 2019-06-23 18:42:58 --> Controller Class Initialized
INFO - 2019-06-23 18:43:10 --> Config Class Initialized
INFO - 2019-06-23 18:43:10 --> Config Class Initialized
INFO - 2019-06-23 18:43:10 --> Hooks Class Initialized
INFO - 2019-06-23 18:43:10 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:43:10 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:43:10 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:43:10 --> Utf8 Class Initialized
INFO - 2019-06-23 18:43:10 --> Utf8 Class Initialized
INFO - 2019-06-23 18:43:10 --> URI Class Initialized
INFO - 2019-06-23 18:43:10 --> URI Class Initialized
INFO - 2019-06-23 18:43:10 --> Router Class Initialized
INFO - 2019-06-23 18:43:10 --> Router Class Initialized
INFO - 2019-06-23 18:43:10 --> Output Class Initialized
INFO - 2019-06-23 18:43:10 --> Output Class Initialized
INFO - 2019-06-23 18:43:10 --> Security Class Initialized
INFO - 2019-06-23 18:43:10 --> Security Class Initialized
DEBUG - 2019-06-23 18:43:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:43:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:43:10 --> Input Class Initialized
INFO - 2019-06-23 18:43:10 --> Input Class Initialized
INFO - 2019-06-23 18:43:10 --> Language Class Initialized
INFO - 2019-06-23 18:43:10 --> Language Class Initialized
INFO - 2019-06-23 18:43:10 --> Language Class Initialized
INFO - 2019-06-23 18:43:10 --> Language Class Initialized
INFO - 2019-06-23 18:43:10 --> Config Class Initialized
INFO - 2019-06-23 18:43:10 --> Config Class Initialized
INFO - 2019-06-23 18:43:10 --> Loader Class Initialized
INFO - 2019-06-23 18:43:10 --> Loader Class Initialized
DEBUG - 2019-06-23 18:43:10 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:43:10 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:43:10 --> Helper loaded: url_helper
INFO - 2019-06-23 18:43:10 --> Helper loaded: url_helper
INFO - 2019-06-23 18:43:10 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:43:10 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:43:10 --> Helper loaded: string_helper
INFO - 2019-06-23 18:43:10 --> Helper loaded: string_helper
INFO - 2019-06-23 18:43:10 --> Helper loaded: array_helper
INFO - 2019-06-23 18:43:10 --> Helper loaded: array_helper
INFO - 2019-06-23 18:43:10 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:43:10 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:43:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:43:11 --> Controller Class Initialized
INFO - 2019-06-23 18:43:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:43:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:43:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:43:11 --> Controller Class Initialized
INFO - 2019-06-23 18:43:16 --> Config Class Initialized
INFO - 2019-06-23 18:43:16 --> Config Class Initialized
INFO - 2019-06-23 18:43:16 --> Hooks Class Initialized
INFO - 2019-06-23 18:43:16 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:43:16 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:43:16 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:43:16 --> Utf8 Class Initialized
INFO - 2019-06-23 18:43:16 --> Utf8 Class Initialized
INFO - 2019-06-23 18:43:16 --> URI Class Initialized
INFO - 2019-06-23 18:43:16 --> URI Class Initialized
INFO - 2019-06-23 18:43:16 --> Router Class Initialized
INFO - 2019-06-23 18:43:16 --> Router Class Initialized
INFO - 2019-06-23 18:43:16 --> Output Class Initialized
INFO - 2019-06-23 18:43:16 --> Output Class Initialized
INFO - 2019-06-23 18:43:16 --> Security Class Initialized
INFO - 2019-06-23 18:43:16 --> Security Class Initialized
DEBUG - 2019-06-23 18:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:43:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:43:16 --> Input Class Initialized
INFO - 2019-06-23 18:43:16 --> Input Class Initialized
INFO - 2019-06-23 18:43:16 --> Language Class Initialized
INFO - 2019-06-23 18:43:16 --> Language Class Initialized
INFO - 2019-06-23 18:43:16 --> Language Class Initialized
INFO - 2019-06-23 18:43:16 --> Config Class Initialized
INFO - 2019-06-23 18:43:16 --> Language Class Initialized
INFO - 2019-06-23 18:43:16 --> Config Class Initialized
INFO - 2019-06-23 18:43:16 --> Loader Class Initialized
INFO - 2019-06-23 18:43:16 --> Loader Class Initialized
DEBUG - 2019-06-23 18:43:16 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:43:16 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:43:16 --> Helper loaded: url_helper
INFO - 2019-06-23 18:43:16 --> Helper loaded: url_helper
INFO - 2019-06-23 18:43:16 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:43:16 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:43:16 --> Helper loaded: string_helper
INFO - 2019-06-23 18:43:16 --> Helper loaded: string_helper
INFO - 2019-06-23 18:43:16 --> Helper loaded: array_helper
INFO - 2019-06-23 18:43:16 --> Helper loaded: array_helper
INFO - 2019-06-23 18:43:17 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:43:17 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:43:17 --> Database Driver Class Initialized
INFO - 2019-06-23 18:43:17 --> Controller Class Initialized
INFO - 2019-06-23 18:43:17 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:43:17 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:43:17 --> Database Driver Class Initialized
INFO - 2019-06-23 18:43:17 --> Controller Class Initialized
INFO - 2019-06-23 18:43:25 --> Config Class Initialized
INFO - 2019-06-23 18:43:25 --> Hooks Class Initialized
INFO - 2019-06-23 18:43:25 --> Config Class Initialized
DEBUG - 2019-06-23 18:43:25 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:43:25 --> Hooks Class Initialized
INFO - 2019-06-23 18:43:25 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:43:25 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:43:25 --> URI Class Initialized
INFO - 2019-06-23 18:43:25 --> Utf8 Class Initialized
INFO - 2019-06-23 18:43:25 --> URI Class Initialized
INFO - 2019-06-23 18:43:25 --> Router Class Initialized
INFO - 2019-06-23 18:43:25 --> Router Class Initialized
INFO - 2019-06-23 18:43:25 --> Output Class Initialized
INFO - 2019-06-23 18:43:25 --> Output Class Initialized
INFO - 2019-06-23 18:43:25 --> Security Class Initialized
INFO - 2019-06-23 18:43:25 --> Security Class Initialized
DEBUG - 2019-06-23 18:43:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:43:26 --> Input Class Initialized
DEBUG - 2019-06-23 18:43:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:43:26 --> Language Class Initialized
INFO - 2019-06-23 18:43:26 --> Input Class Initialized
INFO - 2019-06-23 18:43:26 --> Language Class Initialized
INFO - 2019-06-23 18:43:26 --> Language Class Initialized
INFO - 2019-06-23 18:43:26 --> Config Class Initialized
INFO - 2019-06-23 18:43:26 --> Loader Class Initialized
INFO - 2019-06-23 18:43:26 --> Language Class Initialized
DEBUG - 2019-06-23 18:43:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:43:26 --> Config Class Initialized
INFO - 2019-06-23 18:43:26 --> Loader Class Initialized
INFO - 2019-06-23 18:43:26 --> Helper loaded: url_helper
DEBUG - 2019-06-23 18:43:26 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:43:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:43:26 --> Helper loaded: url_helper
INFO - 2019-06-23 18:43:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:43:26 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:43:26 --> Helper loaded: array_helper
INFO - 2019-06-23 18:43:26 --> Helper loaded: string_helper
INFO - 2019-06-23 18:43:26 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:43:26 --> Helper loaded: array_helper
DEBUG - 2019-06-23 18:43:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:43:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:43:26 --> Controller Class Initialized
INFO - 2019-06-23 18:43:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:43:26 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:43:26 --> Database Driver Class Initialized
INFO - 2019-06-23 18:43:26 --> Controller Class Initialized
INFO - 2019-06-23 18:44:58 --> Config Class Initialized
INFO - 2019-06-23 18:44:58 --> Config Class Initialized
INFO - 2019-06-23 18:44:58 --> Hooks Class Initialized
INFO - 2019-06-23 18:44:58 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:44:58 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:44:59 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:44:59 --> Utf8 Class Initialized
INFO - 2019-06-23 18:44:59 --> Utf8 Class Initialized
INFO - 2019-06-23 18:44:59 --> URI Class Initialized
INFO - 2019-06-23 18:44:59 --> URI Class Initialized
INFO - 2019-06-23 18:44:59 --> Router Class Initialized
INFO - 2019-06-23 18:44:59 --> Router Class Initialized
INFO - 2019-06-23 18:44:59 --> Output Class Initialized
INFO - 2019-06-23 18:44:59 --> Output Class Initialized
INFO - 2019-06-23 18:44:59 --> Security Class Initialized
INFO - 2019-06-23 18:44:59 --> Security Class Initialized
DEBUG - 2019-06-23 18:44:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:44:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:44:59 --> Input Class Initialized
INFO - 2019-06-23 18:44:59 --> Input Class Initialized
INFO - 2019-06-23 18:44:59 --> Language Class Initialized
INFO - 2019-06-23 18:44:59 --> Language Class Initialized
INFO - 2019-06-23 18:44:59 --> Language Class Initialized
INFO - 2019-06-23 18:44:59 --> Language Class Initialized
INFO - 2019-06-23 18:44:59 --> Config Class Initialized
INFO - 2019-06-23 18:44:59 --> Config Class Initialized
INFO - 2019-06-23 18:44:59 --> Loader Class Initialized
INFO - 2019-06-23 18:44:59 --> Loader Class Initialized
DEBUG - 2019-06-23 18:44:59 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:44:59 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:44:59 --> Helper loaded: url_helper
INFO - 2019-06-23 18:44:59 --> Helper loaded: url_helper
INFO - 2019-06-23 18:44:59 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:44:59 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:44:59 --> Helper loaded: string_helper
INFO - 2019-06-23 18:44:59 --> Helper loaded: string_helper
INFO - 2019-06-23 18:44:59 --> Helper loaded: array_helper
INFO - 2019-06-23 18:44:59 --> Helper loaded: array_helper
INFO - 2019-06-23 18:44:59 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:44:59 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:44:59 --> Database Driver Class Initialized
INFO - 2019-06-23 18:44:59 --> Controller Class Initialized
INFO - 2019-06-23 18:44:59 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:44:59 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:44:59 --> Database Driver Class Initialized
INFO - 2019-06-23 18:44:59 --> Controller Class Initialized
INFO - 2019-06-23 18:45:53 --> Config Class Initialized
INFO - 2019-06-23 18:45:53 --> Config Class Initialized
INFO - 2019-06-23 18:45:53 --> Hooks Class Initialized
INFO - 2019-06-23 18:45:53 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:45:53 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:45:53 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:45:53 --> Utf8 Class Initialized
INFO - 2019-06-23 18:45:53 --> Utf8 Class Initialized
INFO - 2019-06-23 18:45:53 --> URI Class Initialized
INFO - 2019-06-23 18:45:53 --> URI Class Initialized
INFO - 2019-06-23 18:45:53 --> Router Class Initialized
INFO - 2019-06-23 18:45:53 --> Router Class Initialized
INFO - 2019-06-23 18:45:53 --> Output Class Initialized
INFO - 2019-06-23 18:45:53 --> Output Class Initialized
INFO - 2019-06-23 18:45:53 --> Security Class Initialized
INFO - 2019-06-23 18:45:53 --> Security Class Initialized
DEBUG - 2019-06-23 18:45:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:45:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:45:53 --> Input Class Initialized
INFO - 2019-06-23 18:45:53 --> Input Class Initialized
INFO - 2019-06-23 18:45:53 --> Language Class Initialized
INFO - 2019-06-23 18:45:53 --> Language Class Initialized
INFO - 2019-06-23 18:45:53 --> Language Class Initialized
INFO - 2019-06-23 18:45:53 --> Language Class Initialized
INFO - 2019-06-23 18:45:53 --> Config Class Initialized
INFO - 2019-06-23 18:45:53 --> Loader Class Initialized
INFO - 2019-06-23 18:45:53 --> Config Class Initialized
INFO - 2019-06-23 18:45:53 --> Loader Class Initialized
DEBUG - 2019-06-23 18:45:53 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:45:53 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:45:53 --> Helper loaded: url_helper
INFO - 2019-06-23 18:45:53 --> Helper loaded: url_helper
INFO - 2019-06-23 18:45:53 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:45:53 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:45:53 --> Helper loaded: string_helper
INFO - 2019-06-23 18:45:53 --> Helper loaded: string_helper
INFO - 2019-06-23 18:45:53 --> Helper loaded: array_helper
INFO - 2019-06-23 18:45:53 --> Helper loaded: array_helper
INFO - 2019-06-23 18:45:53 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:45:53 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:45:53 --> Database Driver Class Initialized
INFO - 2019-06-23 18:45:53 --> Controller Class Initialized
INFO - 2019-06-23 18:45:53 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:45:53 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:45:53 --> Database Driver Class Initialized
INFO - 2019-06-23 18:45:53 --> Controller Class Initialized
INFO - 2019-06-23 18:46:09 --> Config Class Initialized
INFO - 2019-06-23 18:46:09 --> Hooks Class Initialized
INFO - 2019-06-23 18:46:09 --> Config Class Initialized
DEBUG - 2019-06-23 18:46:09 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:46:09 --> Hooks Class Initialized
INFO - 2019-06-23 18:46:09 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:46:09 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:46:09 --> URI Class Initialized
INFO - 2019-06-23 18:46:09 --> Utf8 Class Initialized
INFO - 2019-06-23 18:46:09 --> URI Class Initialized
INFO - 2019-06-23 18:46:09 --> Router Class Initialized
INFO - 2019-06-23 18:46:09 --> Router Class Initialized
INFO - 2019-06-23 18:46:09 --> Output Class Initialized
INFO - 2019-06-23 18:46:09 --> Output Class Initialized
INFO - 2019-06-23 18:46:09 --> Security Class Initialized
INFO - 2019-06-23 18:46:09 --> Security Class Initialized
DEBUG - 2019-06-23 18:46:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:46:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:46:09 --> Input Class Initialized
INFO - 2019-06-23 18:46:09 --> Input Class Initialized
INFO - 2019-06-23 18:46:09 --> Language Class Initialized
INFO - 2019-06-23 18:46:09 --> Language Class Initialized
INFO - 2019-06-23 18:46:09 --> Language Class Initialized
INFO - 2019-06-23 18:46:09 --> Language Class Initialized
INFO - 2019-06-23 18:46:09 --> Config Class Initialized
INFO - 2019-06-23 18:46:09 --> Config Class Initialized
INFO - 2019-06-23 18:46:09 --> Loader Class Initialized
INFO - 2019-06-23 18:46:09 --> Loader Class Initialized
DEBUG - 2019-06-23 18:46:09 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:46:09 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:46:09 --> Helper loaded: url_helper
INFO - 2019-06-23 18:46:09 --> Helper loaded: url_helper
INFO - 2019-06-23 18:46:09 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:46:09 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:46:09 --> Helper loaded: string_helper
INFO - 2019-06-23 18:46:09 --> Helper loaded: string_helper
INFO - 2019-06-23 18:46:09 --> Helper loaded: array_helper
INFO - 2019-06-23 18:46:09 --> Helper loaded: array_helper
INFO - 2019-06-23 18:46:09 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:46:09 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:46:09 --> Database Driver Class Initialized
INFO - 2019-06-23 18:46:09 --> Controller Class Initialized
INFO - 2019-06-23 18:46:09 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:46:09 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:46:09 --> Database Driver Class Initialized
INFO - 2019-06-23 18:46:09 --> Controller Class Initialized
INFO - 2019-06-23 18:46:19 --> Config Class Initialized
INFO - 2019-06-23 18:46:19 --> Config Class Initialized
INFO - 2019-06-23 18:46:19 --> Hooks Class Initialized
INFO - 2019-06-23 18:46:19 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:46:19 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:46:19 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:46:19 --> Utf8 Class Initialized
INFO - 2019-06-23 18:46:19 --> Utf8 Class Initialized
INFO - 2019-06-23 18:46:19 --> URI Class Initialized
INFO - 2019-06-23 18:46:19 --> URI Class Initialized
INFO - 2019-06-23 18:46:19 --> Router Class Initialized
INFO - 2019-06-23 18:46:19 --> Router Class Initialized
INFO - 2019-06-23 18:46:19 --> Output Class Initialized
INFO - 2019-06-23 18:46:19 --> Output Class Initialized
INFO - 2019-06-23 18:46:19 --> Security Class Initialized
INFO - 2019-06-23 18:46:19 --> Security Class Initialized
DEBUG - 2019-06-23 18:46:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:46:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:46:19 --> Input Class Initialized
INFO - 2019-06-23 18:46:19 --> Input Class Initialized
INFO - 2019-06-23 18:46:19 --> Language Class Initialized
INFO - 2019-06-23 18:46:19 --> Language Class Initialized
INFO - 2019-06-23 18:46:19 --> Language Class Initialized
INFO - 2019-06-23 18:46:19 --> Config Class Initialized
INFO - 2019-06-23 18:46:19 --> Language Class Initialized
INFO - 2019-06-23 18:46:19 --> Config Class Initialized
INFO - 2019-06-23 18:46:19 --> Loader Class Initialized
INFO - 2019-06-23 18:46:19 --> Loader Class Initialized
DEBUG - 2019-06-23 18:46:19 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:46:19 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:46:19 --> Helper loaded: url_helper
INFO - 2019-06-23 18:46:19 --> Helper loaded: url_helper
INFO - 2019-06-23 18:46:19 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:46:19 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:46:19 --> Helper loaded: string_helper
INFO - 2019-06-23 18:46:19 --> Helper loaded: string_helper
INFO - 2019-06-23 18:46:19 --> Helper loaded: array_helper
INFO - 2019-06-23 18:46:19 --> Helper loaded: array_helper
INFO - 2019-06-23 18:46:19 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:46:19 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:46:19 --> Database Driver Class Initialized
INFO - 2019-06-23 18:46:19 --> Controller Class Initialized
INFO - 2019-06-23 18:46:19 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:46:19 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:46:19 --> Database Driver Class Initialized
INFO - 2019-06-23 18:46:19 --> Controller Class Initialized
INFO - 2019-06-23 18:46:23 --> Config Class Initialized
INFO - 2019-06-23 18:46:23 --> Config Class Initialized
INFO - 2019-06-23 18:46:23 --> Hooks Class Initialized
INFO - 2019-06-23 18:46:23 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:46:23 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:46:23 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:46:23 --> Utf8 Class Initialized
INFO - 2019-06-23 18:46:23 --> Utf8 Class Initialized
INFO - 2019-06-23 18:46:23 --> URI Class Initialized
INFO - 2019-06-23 18:46:23 --> URI Class Initialized
INFO - 2019-06-23 18:46:23 --> Router Class Initialized
INFO - 2019-06-23 18:46:23 --> Router Class Initialized
INFO - 2019-06-23 18:46:23 --> Output Class Initialized
INFO - 2019-06-23 18:46:23 --> Output Class Initialized
INFO - 2019-06-23 18:46:23 --> Security Class Initialized
INFO - 2019-06-23 18:46:23 --> Security Class Initialized
DEBUG - 2019-06-23 18:46:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:46:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:46:23 --> Input Class Initialized
INFO - 2019-06-23 18:46:23 --> Input Class Initialized
INFO - 2019-06-23 18:46:23 --> Language Class Initialized
INFO - 2019-06-23 18:46:23 --> Language Class Initialized
INFO - 2019-06-23 18:46:23 --> Language Class Initialized
INFO - 2019-06-23 18:46:23 --> Language Class Initialized
INFO - 2019-06-23 18:46:23 --> Config Class Initialized
INFO - 2019-06-23 18:46:23 --> Loader Class Initialized
INFO - 2019-06-23 18:46:23 --> Config Class Initialized
INFO - 2019-06-23 18:46:23 --> Loader Class Initialized
DEBUG - 2019-06-23 18:46:23 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:46:23 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:46:23 --> Helper loaded: url_helper
INFO - 2019-06-23 18:46:23 --> Helper loaded: url_helper
INFO - 2019-06-23 18:46:23 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:46:23 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:46:23 --> Helper loaded: string_helper
INFO - 2019-06-23 18:46:23 --> Helper loaded: string_helper
INFO - 2019-06-23 18:46:23 --> Helper loaded: array_helper
INFO - 2019-06-23 18:46:23 --> Helper loaded: array_helper
INFO - 2019-06-23 18:46:23 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:46:23 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:46:23 --> Database Driver Class Initialized
INFO - 2019-06-23 18:46:23 --> Controller Class Initialized
INFO - 2019-06-23 18:46:23 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:46:23 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:46:23 --> Database Driver Class Initialized
INFO - 2019-06-23 18:46:23 --> Controller Class Initialized
INFO - 2019-06-23 18:46:27 --> Config Class Initialized
INFO - 2019-06-23 18:46:27 --> Config Class Initialized
INFO - 2019-06-23 18:46:27 --> Hooks Class Initialized
INFO - 2019-06-23 18:46:27 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:46:27 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:46:27 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:46:27 --> Utf8 Class Initialized
INFO - 2019-06-23 18:46:27 --> Utf8 Class Initialized
INFO - 2019-06-23 18:46:27 --> URI Class Initialized
INFO - 2019-06-23 18:46:27 --> URI Class Initialized
INFO - 2019-06-23 18:46:27 --> Router Class Initialized
INFO - 2019-06-23 18:46:27 --> Router Class Initialized
INFO - 2019-06-23 18:46:27 --> Output Class Initialized
INFO - 2019-06-23 18:46:27 --> Output Class Initialized
INFO - 2019-06-23 18:46:27 --> Security Class Initialized
INFO - 2019-06-23 18:46:27 --> Security Class Initialized
DEBUG - 2019-06-23 18:46:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:46:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:46:27 --> Input Class Initialized
INFO - 2019-06-23 18:46:27 --> Input Class Initialized
INFO - 2019-06-23 18:46:27 --> Language Class Initialized
INFO - 2019-06-23 18:46:27 --> Language Class Initialized
INFO - 2019-06-23 18:46:27 --> Language Class Initialized
INFO - 2019-06-23 18:46:27 --> Config Class Initialized
INFO - 2019-06-23 18:46:27 --> Language Class Initialized
INFO - 2019-06-23 18:46:27 --> Loader Class Initialized
INFO - 2019-06-23 18:46:27 --> Config Class Initialized
INFO - 2019-06-23 18:46:27 --> Loader Class Initialized
DEBUG - 2019-06-23 18:46:27 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:46:27 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:46:27 --> Helper loaded: url_helper
INFO - 2019-06-23 18:46:27 --> Helper loaded: url_helper
INFO - 2019-06-23 18:46:27 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:46:27 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:46:27 --> Helper loaded: string_helper
INFO - 2019-06-23 18:46:27 --> Helper loaded: string_helper
INFO - 2019-06-23 18:46:27 --> Helper loaded: array_helper
INFO - 2019-06-23 18:46:27 --> Helper loaded: array_helper
INFO - 2019-06-23 18:46:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:46:27 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:46:27 --> Database Driver Class Initialized
INFO - 2019-06-23 18:46:27 --> Controller Class Initialized
INFO - 2019-06-23 18:46:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:46:27 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:46:27 --> Database Driver Class Initialized
INFO - 2019-06-23 18:46:27 --> Controller Class Initialized
INFO - 2019-06-23 18:47:04 --> Config Class Initialized
INFO - 2019-06-23 18:47:04 --> Hooks Class Initialized
INFO - 2019-06-23 18:47:04 --> Config Class Initialized
INFO - 2019-06-23 18:47:04 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:47:04 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:47:04 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:47:04 --> Utf8 Class Initialized
INFO - 2019-06-23 18:47:04 --> Utf8 Class Initialized
INFO - 2019-06-23 18:47:04 --> URI Class Initialized
INFO - 2019-06-23 18:47:04 --> URI Class Initialized
INFO - 2019-06-23 18:47:04 --> Router Class Initialized
INFO - 2019-06-23 18:47:04 --> Router Class Initialized
INFO - 2019-06-23 18:47:04 --> Output Class Initialized
INFO - 2019-06-23 18:47:04 --> Output Class Initialized
INFO - 2019-06-23 18:47:04 --> Security Class Initialized
INFO - 2019-06-23 18:47:04 --> Security Class Initialized
DEBUG - 2019-06-23 18:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:47:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:47:04 --> Input Class Initialized
INFO - 2019-06-23 18:47:04 --> Input Class Initialized
INFO - 2019-06-23 18:47:04 --> Language Class Initialized
INFO - 2019-06-23 18:47:04 --> Language Class Initialized
INFO - 2019-06-23 18:47:04 --> Language Class Initialized
INFO - 2019-06-23 18:47:04 --> Language Class Initialized
INFO - 2019-06-23 18:47:04 --> Config Class Initialized
INFO - 2019-06-23 18:47:04 --> Config Class Initialized
INFO - 2019-06-23 18:47:04 --> Loader Class Initialized
INFO - 2019-06-23 18:47:04 --> Loader Class Initialized
DEBUG - 2019-06-23 18:47:04 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:47:04 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:47:04 --> Helper loaded: url_helper
INFO - 2019-06-23 18:47:04 --> Helper loaded: url_helper
INFO - 2019-06-23 18:47:04 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:47:04 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:47:04 --> Helper loaded: string_helper
INFO - 2019-06-23 18:47:04 --> Helper loaded: string_helper
INFO - 2019-06-23 18:47:04 --> Helper loaded: array_helper
INFO - 2019-06-23 18:47:04 --> Helper loaded: array_helper
INFO - 2019-06-23 18:47:04 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:47:04 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:47:04 --> Database Driver Class Initialized
INFO - 2019-06-23 18:47:04 --> Controller Class Initialized
INFO - 2019-06-23 18:47:04 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:47:04 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:47:04 --> Database Driver Class Initialized
INFO - 2019-06-23 18:47:04 --> Controller Class Initialized
INFO - 2019-06-23 18:47:11 --> Config Class Initialized
INFO - 2019-06-23 18:47:11 --> Config Class Initialized
INFO - 2019-06-23 18:47:11 --> Hooks Class Initialized
INFO - 2019-06-23 18:47:11 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:47:11 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:47:11 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:47:11 --> Utf8 Class Initialized
INFO - 2019-06-23 18:47:11 --> Utf8 Class Initialized
INFO - 2019-06-23 18:47:11 --> URI Class Initialized
INFO - 2019-06-23 18:47:11 --> URI Class Initialized
INFO - 2019-06-23 18:47:11 --> Router Class Initialized
INFO - 2019-06-23 18:47:11 --> Router Class Initialized
INFO - 2019-06-23 18:47:11 --> Output Class Initialized
INFO - 2019-06-23 18:47:11 --> Output Class Initialized
INFO - 2019-06-23 18:47:11 --> Security Class Initialized
INFO - 2019-06-23 18:47:11 --> Security Class Initialized
DEBUG - 2019-06-23 18:47:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:47:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:47:11 --> Input Class Initialized
INFO - 2019-06-23 18:47:11 --> Input Class Initialized
INFO - 2019-06-23 18:47:11 --> Language Class Initialized
INFO - 2019-06-23 18:47:11 --> Language Class Initialized
INFO - 2019-06-23 18:47:11 --> Language Class Initialized
INFO - 2019-06-23 18:47:11 --> Language Class Initialized
INFO - 2019-06-23 18:47:11 --> Config Class Initialized
INFO - 2019-06-23 18:47:11 --> Config Class Initialized
INFO - 2019-06-23 18:47:11 --> Loader Class Initialized
INFO - 2019-06-23 18:47:11 --> Loader Class Initialized
DEBUG - 2019-06-23 18:47:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:47:11 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:47:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:47:11 --> Helper loaded: url_helper
INFO - 2019-06-23 18:47:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:47:11 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:47:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:47:11 --> Helper loaded: string_helper
INFO - 2019-06-23 18:47:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:47:11 --> Helper loaded: array_helper
INFO - 2019-06-23 18:47:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:47:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:47:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:47:11 --> Controller Class Initialized
INFO - 2019-06-23 18:47:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:47:11 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:47:11 --> Database Driver Class Initialized
INFO - 2019-06-23 18:47:11 --> Controller Class Initialized
INFO - 2019-06-23 18:47:39 --> Config Class Initialized
INFO - 2019-06-23 18:47:39 --> Config Class Initialized
INFO - 2019-06-23 18:47:39 --> Hooks Class Initialized
INFO - 2019-06-23 18:47:39 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:47:39 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:47:39 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:47:39 --> Utf8 Class Initialized
INFO - 2019-06-23 18:47:39 --> Utf8 Class Initialized
INFO - 2019-06-23 18:47:39 --> URI Class Initialized
INFO - 2019-06-23 18:47:39 --> URI Class Initialized
INFO - 2019-06-23 18:47:39 --> Router Class Initialized
INFO - 2019-06-23 18:47:39 --> Router Class Initialized
INFO - 2019-06-23 18:47:39 --> Output Class Initialized
INFO - 2019-06-23 18:47:39 --> Output Class Initialized
INFO - 2019-06-23 18:47:39 --> Security Class Initialized
INFO - 2019-06-23 18:47:39 --> Security Class Initialized
DEBUG - 2019-06-23 18:47:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:47:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:47:39 --> Input Class Initialized
INFO - 2019-06-23 18:47:39 --> Input Class Initialized
INFO - 2019-06-23 18:47:39 --> Language Class Initialized
INFO - 2019-06-23 18:47:39 --> Language Class Initialized
INFO - 2019-06-23 18:47:39 --> Language Class Initialized
INFO - 2019-06-23 18:47:39 --> Language Class Initialized
INFO - 2019-06-23 18:47:39 --> Config Class Initialized
INFO - 2019-06-23 18:47:39 --> Config Class Initialized
INFO - 2019-06-23 18:47:39 --> Loader Class Initialized
INFO - 2019-06-23 18:47:39 --> Loader Class Initialized
DEBUG - 2019-06-23 18:47:39 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:47:39 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:47:39 --> Helper loaded: url_helper
INFO - 2019-06-23 18:47:39 --> Helper loaded: url_helper
INFO - 2019-06-23 18:47:39 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:47:39 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:47:39 --> Helper loaded: string_helper
INFO - 2019-06-23 18:47:39 --> Helper loaded: string_helper
INFO - 2019-06-23 18:47:39 --> Helper loaded: array_helper
INFO - 2019-06-23 18:47:39 --> Helper loaded: array_helper
INFO - 2019-06-23 18:47:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:47:39 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:47:39 --> Database Driver Class Initialized
INFO - 2019-06-23 18:47:39 --> Controller Class Initialized
INFO - 2019-06-23 18:47:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:47:39 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:47:39 --> Database Driver Class Initialized
INFO - 2019-06-23 18:47:39 --> Controller Class Initialized
INFO - 2019-06-23 18:47:43 --> Config Class Initialized
INFO - 2019-06-23 18:47:43 --> Hooks Class Initialized
INFO - 2019-06-23 18:47:43 --> Config Class Initialized
INFO - 2019-06-23 18:47:43 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:47:43 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:47:43 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:47:43 --> Utf8 Class Initialized
INFO - 2019-06-23 18:47:43 --> Utf8 Class Initialized
INFO - 2019-06-23 18:47:43 --> URI Class Initialized
INFO - 2019-06-23 18:47:43 --> URI Class Initialized
INFO - 2019-06-23 18:47:43 --> Router Class Initialized
INFO - 2019-06-23 18:47:43 --> Router Class Initialized
INFO - 2019-06-23 18:47:43 --> Output Class Initialized
INFO - 2019-06-23 18:47:43 --> Output Class Initialized
INFO - 2019-06-23 18:47:43 --> Security Class Initialized
INFO - 2019-06-23 18:47:43 --> Security Class Initialized
DEBUG - 2019-06-23 18:47:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:47:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:47:43 --> Input Class Initialized
INFO - 2019-06-23 18:47:43 --> Input Class Initialized
INFO - 2019-06-23 18:47:43 --> Language Class Initialized
INFO - 2019-06-23 18:47:43 --> Language Class Initialized
INFO - 2019-06-23 18:47:43 --> Language Class Initialized
INFO - 2019-06-23 18:47:43 --> Language Class Initialized
INFO - 2019-06-23 18:47:43 --> Config Class Initialized
INFO - 2019-06-23 18:47:43 --> Config Class Initialized
INFO - 2019-06-23 18:47:43 --> Loader Class Initialized
INFO - 2019-06-23 18:47:43 --> Loader Class Initialized
DEBUG - 2019-06-23 18:47:43 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:47:43 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:47:43 --> Helper loaded: url_helper
INFO - 2019-06-23 18:47:43 --> Helper loaded: url_helper
INFO - 2019-06-23 18:47:43 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:47:43 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:47:43 --> Helper loaded: string_helper
INFO - 2019-06-23 18:47:43 --> Helper loaded: string_helper
INFO - 2019-06-23 18:47:43 --> Helper loaded: array_helper
INFO - 2019-06-23 18:47:43 --> Helper loaded: array_helper
INFO - 2019-06-23 18:47:43 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:47:43 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:47:43 --> Database Driver Class Initialized
INFO - 2019-06-23 18:47:43 --> Controller Class Initialized
INFO - 2019-06-23 18:47:43 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:47:43 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:47:43 --> Database Driver Class Initialized
INFO - 2019-06-23 18:47:43 --> Controller Class Initialized
INFO - 2019-06-23 18:47:53 --> Config Class Initialized
INFO - 2019-06-23 18:47:53 --> Config Class Initialized
INFO - 2019-06-23 18:47:53 --> Hooks Class Initialized
INFO - 2019-06-23 18:47:53 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:47:53 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:47:53 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:47:53 --> Utf8 Class Initialized
INFO - 2019-06-23 18:47:53 --> Utf8 Class Initialized
INFO - 2019-06-23 18:47:53 --> URI Class Initialized
INFO - 2019-06-23 18:47:53 --> URI Class Initialized
INFO - 2019-06-23 18:47:53 --> Router Class Initialized
INFO - 2019-06-23 18:47:53 --> Router Class Initialized
INFO - 2019-06-23 18:47:53 --> Output Class Initialized
INFO - 2019-06-23 18:47:53 --> Output Class Initialized
INFO - 2019-06-23 18:47:53 --> Security Class Initialized
INFO - 2019-06-23 18:47:53 --> Security Class Initialized
DEBUG - 2019-06-23 18:47:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:47:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:47:53 --> Input Class Initialized
INFO - 2019-06-23 18:47:53 --> Input Class Initialized
INFO - 2019-06-23 18:47:53 --> Language Class Initialized
INFO - 2019-06-23 18:47:53 --> Language Class Initialized
INFO - 2019-06-23 18:47:53 --> Language Class Initialized
INFO - 2019-06-23 18:47:53 --> Language Class Initialized
INFO - 2019-06-23 18:47:53 --> Config Class Initialized
INFO - 2019-06-23 18:47:53 --> Loader Class Initialized
INFO - 2019-06-23 18:47:53 --> Config Class Initialized
INFO - 2019-06-23 18:47:53 --> Loader Class Initialized
DEBUG - 2019-06-23 18:47:53 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:47:53 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:47:53 --> Helper loaded: url_helper
INFO - 2019-06-23 18:47:53 --> Helper loaded: url_helper
INFO - 2019-06-23 18:47:53 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:47:53 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:47:53 --> Helper loaded: string_helper
INFO - 2019-06-23 18:47:53 --> Helper loaded: string_helper
INFO - 2019-06-23 18:47:53 --> Helper loaded: array_helper
INFO - 2019-06-23 18:47:53 --> Helper loaded: array_helper
INFO - 2019-06-23 18:47:53 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:47:53 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:47:53 --> Database Driver Class Initialized
INFO - 2019-06-23 18:47:53 --> Controller Class Initialized
INFO - 2019-06-23 18:47:53 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:47:53 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:47:53 --> Database Driver Class Initialized
INFO - 2019-06-23 18:47:53 --> Controller Class Initialized
INFO - 2019-06-23 18:47:54 --> Config Class Initialized
INFO - 2019-06-23 18:47:54 --> Config Class Initialized
INFO - 2019-06-23 18:47:54 --> Hooks Class Initialized
INFO - 2019-06-23 18:47:54 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:47:54 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:47:54 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:47:54 --> Utf8 Class Initialized
INFO - 2019-06-23 18:47:54 --> Utf8 Class Initialized
INFO - 2019-06-23 18:47:54 --> URI Class Initialized
INFO - 2019-06-23 18:47:54 --> URI Class Initialized
INFO - 2019-06-23 18:47:54 --> Router Class Initialized
INFO - 2019-06-23 18:47:54 --> Router Class Initialized
INFO - 2019-06-23 18:47:54 --> Output Class Initialized
INFO - 2019-06-23 18:47:54 --> Output Class Initialized
INFO - 2019-06-23 18:47:54 --> Security Class Initialized
INFO - 2019-06-23 18:47:54 --> Security Class Initialized
DEBUG - 2019-06-23 18:47:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:47:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:47:54 --> Input Class Initialized
INFO - 2019-06-23 18:47:54 --> Input Class Initialized
INFO - 2019-06-23 18:47:54 --> Language Class Initialized
INFO - 2019-06-23 18:47:54 --> Language Class Initialized
INFO - 2019-06-23 18:47:54 --> Language Class Initialized
INFO - 2019-06-23 18:47:54 --> Language Class Initialized
INFO - 2019-06-23 18:47:54 --> Config Class Initialized
INFO - 2019-06-23 18:47:54 --> Config Class Initialized
INFO - 2019-06-23 18:47:54 --> Loader Class Initialized
INFO - 2019-06-23 18:47:54 --> Loader Class Initialized
DEBUG - 2019-06-23 18:47:54 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:47:54 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:47:54 --> Helper loaded: url_helper
INFO - 2019-06-23 18:47:54 --> Helper loaded: url_helper
INFO - 2019-06-23 18:47:54 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:47:54 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:47:54 --> Helper loaded: string_helper
INFO - 2019-06-23 18:47:54 --> Helper loaded: string_helper
INFO - 2019-06-23 18:47:54 --> Helper loaded: array_helper
INFO - 2019-06-23 18:47:54 --> Helper loaded: array_helper
INFO - 2019-06-23 18:47:54 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:47:54 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:47:54 --> Database Driver Class Initialized
INFO - 2019-06-23 18:47:54 --> Controller Class Initialized
INFO - 2019-06-23 18:47:54 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:47:55 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:47:55 --> Database Driver Class Initialized
INFO - 2019-06-23 18:47:55 --> Controller Class Initialized
INFO - 2019-06-23 18:49:00 --> Config Class Initialized
INFO - 2019-06-23 18:49:00 --> Config Class Initialized
INFO - 2019-06-23 18:49:00 --> Hooks Class Initialized
INFO - 2019-06-23 18:49:00 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:49:00 --> UTF-8 Support Enabled
DEBUG - 2019-06-23 18:49:00 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:49:00 --> Utf8 Class Initialized
INFO - 2019-06-23 18:49:00 --> Utf8 Class Initialized
INFO - 2019-06-23 18:49:00 --> URI Class Initialized
INFO - 2019-06-23 18:49:00 --> URI Class Initialized
INFO - 2019-06-23 18:49:00 --> Router Class Initialized
INFO - 2019-06-23 18:49:00 --> Router Class Initialized
INFO - 2019-06-23 18:49:00 --> Output Class Initialized
INFO - 2019-06-23 18:49:00 --> Output Class Initialized
INFO - 2019-06-23 18:49:00 --> Security Class Initialized
DEBUG - 2019-06-23 18:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:49:00 --> Input Class Initialized
INFO - 2019-06-23 18:49:00 --> Security Class Initialized
INFO - 2019-06-23 18:49:00 --> Language Class Initialized
DEBUG - 2019-06-23 18:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:49:00 --> Language Class Initialized
INFO - 2019-06-23 18:49:00 --> Input Class Initialized
INFO - 2019-06-23 18:49:00 --> Config Class Initialized
INFO - 2019-06-23 18:49:00 --> Language Class Initialized
INFO - 2019-06-23 18:49:00 --> Loader Class Initialized
DEBUG - 2019-06-23 18:49:00 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:49:00 --> Language Class Initialized
INFO - 2019-06-23 18:49:00 --> Helper loaded: url_helper
INFO - 2019-06-23 18:49:00 --> Config Class Initialized
INFO - 2019-06-23 18:49:00 --> Loader Class Initialized
INFO - 2019-06-23 18:49:00 --> Helper loaded: inflector_helper
DEBUG - 2019-06-23 18:49:00 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:49:01 --> Helper loaded: string_helper
INFO - 2019-06-23 18:49:01 --> Helper loaded: url_helper
INFO - 2019-06-23 18:49:01 --> Helper loaded: array_helper
INFO - 2019-06-23 18:49:01 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:49:01 --> Session: Class initialized using 'files' driver.
INFO - 2019-06-23 18:49:01 --> Helper loaded: string_helper
DEBUG - 2019-06-23 18:49:01 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:49:01 --> Helper loaded: array_helper
INFO - 2019-06-23 18:49:01 --> Database Driver Class Initialized
INFO - 2019-06-23 18:49:01 --> Controller Class Initialized
INFO - 2019-06-23 18:49:01 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:49:01 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:49:01 --> Database Driver Class Initialized
INFO - 2019-06-23 18:49:01 --> Controller Class Initialized
INFO - 2019-06-23 18:49:05 --> Config Class Initialized
INFO - 2019-06-23 18:49:05 --> Hooks Class Initialized
DEBUG - 2019-06-23 18:49:05 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:49:06 --> Utf8 Class Initialized
INFO - 2019-06-23 18:49:06 --> URI Class Initialized
INFO - 2019-06-23 18:49:06 --> Router Class Initialized
INFO - 2019-06-23 18:49:06 --> Output Class Initialized
INFO - 2019-06-23 18:49:06 --> Security Class Initialized
DEBUG - 2019-06-23 18:49:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:49:06 --> Input Class Initialized
INFO - 2019-06-23 18:49:06 --> Language Class Initialized
INFO - 2019-06-23 18:49:06 --> Language Class Initialized
INFO - 2019-06-23 18:49:06 --> Config Class Initialized
INFO - 2019-06-23 18:49:06 --> Loader Class Initialized
DEBUG - 2019-06-23 18:49:06 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:49:06 --> Helper loaded: url_helper
INFO - 2019-06-23 18:49:06 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:49:06 --> Helper loaded: string_helper
INFO - 2019-06-23 18:49:06 --> Helper loaded: array_helper
INFO - 2019-06-23 18:49:06 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:49:06 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:49:06 --> Database Driver Class Initialized
INFO - 2019-06-23 18:49:06 --> Controller Class Initialized
INFO - 2019-06-23 18:49:32 --> Config Class Initialized
INFO - 2019-06-23 18:49:32 --> Hooks Class Initialized
INFO - 2019-06-23 18:49:32 --> Config Class Initialized
DEBUG - 2019-06-23 18:49:32 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:49:32 --> Hooks Class Initialized
INFO - 2019-06-23 18:49:32 --> Utf8 Class Initialized
DEBUG - 2019-06-23 18:49:32 --> UTF-8 Support Enabled
INFO - 2019-06-23 18:49:32 --> URI Class Initialized
INFO - 2019-06-23 18:49:32 --> Utf8 Class Initialized
INFO - 2019-06-23 18:49:32 --> URI Class Initialized
INFO - 2019-06-23 18:49:32 --> Router Class Initialized
INFO - 2019-06-23 18:49:32 --> Router Class Initialized
INFO - 2019-06-23 18:49:32 --> Output Class Initialized
INFO - 2019-06-23 18:49:32 --> Output Class Initialized
INFO - 2019-06-23 18:49:32 --> Security Class Initialized
INFO - 2019-06-23 18:49:32 --> Security Class Initialized
DEBUG - 2019-06-23 18:49:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-06-23 18:49:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-06-23 18:49:32 --> Input Class Initialized
INFO - 2019-06-23 18:49:32 --> Input Class Initialized
INFO - 2019-06-23 18:49:32 --> Language Class Initialized
INFO - 2019-06-23 18:49:32 --> Language Class Initialized
INFO - 2019-06-23 18:49:32 --> Language Class Initialized
INFO - 2019-06-23 18:49:32 --> Config Class Initialized
INFO - 2019-06-23 18:49:32 --> Language Class Initialized
INFO - 2019-06-23 18:49:32 --> Config Class Initialized
INFO - 2019-06-23 18:49:32 --> Loader Class Initialized
INFO - 2019-06-23 18:49:32 --> Loader Class Initialized
DEBUG - 2019-06-23 18:49:32 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
DEBUG - 2019-06-23 18:49:32 --> Config file loaded: C:\xampp\htdocs\crapi_admin\application\config/site.php
INFO - 2019-06-23 18:49:32 --> Helper loaded: url_helper
INFO - 2019-06-23 18:49:32 --> Helper loaded: url_helper
INFO - 2019-06-23 18:49:32 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:49:32 --> Helper loaded: inflector_helper
INFO - 2019-06-23 18:49:32 --> Helper loaded: string_helper
INFO - 2019-06-23 18:49:32 --> Helper loaded: string_helper
INFO - 2019-06-23 18:49:32 --> Helper loaded: array_helper
INFO - 2019-06-23 18:49:32 --> Helper loaded: array_helper
INFO - 2019-06-23 18:49:32 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:49:32 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:49:32 --> Database Driver Class Initialized
INFO - 2019-06-23 18:49:32 --> Controller Class Initialized
INFO - 2019-06-23 18:49:32 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-06-23 18:49:32 --> File loaded: C:\xampp\htdocs\crapi_admin\application\modules/api_v1/config/autoload.php
INFO - 2019-06-23 18:49:32 --> Database Driver Class Initialized
INFO - 2019-06-23 18:49:32 --> Controller Class Initialized
