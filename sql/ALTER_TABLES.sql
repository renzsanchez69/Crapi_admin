ALTER TABLE `order_details` ADD `description_request` TEXT NULL AFTER `sub_total`, ADD `status` ENUM('pending','success','falied') NOT NULL DEFAULT 'pending' AFTER `description_request`;
ALTER TABLE `orders` ADD `resto_id` INT(11) NOT NULL AFTER `customer_id`, ADD `order_status` ENUM('pending','success','failed') NOT NULL DEFAULT 'pending' AFTER `resto_id`;

ALTER TABLE `restaurants` CHANGE `longitude` `longitude` DOUBLE NULL DEFAULT NULL, CHANGE `latitude` `latitude` DOUBLE NULL DEFAULT NULL;
ALTER TABLE `customers` CHANGE `longitude` `longitude` DOUBLE NULL DEFAULT NULL, CHANGE `latitude` `latitude` DOUBLE NULL DEFAULT NULL;