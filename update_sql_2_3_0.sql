/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `investment_plans`;
CREATE TABLE `investment_plans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `min_amount` decimal(12,2) NOT NULL,
  `max_amount` decimal(12,2) NOT NULL,
  `interest_rate` decimal(5,2) NOT NULL,
  `duration_in_days` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `recommanded` tinyint(4) DEFAULT NULL COMMENT '0 : off , 1: on',
  `total_investors` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `investments_log`;
CREATE TABLE `investments_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `wallet_id` bigint(20) unsigned DEFAULT NULL,
  `investment_plan_id` bigint(20) unsigned NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `profit` decimal(10,2) NOT NULL DEFAULT 0.00,
  `end_date` datetime NOT NULL,
  `trx` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1: active, 2: completed, 3: cancelled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `investments_log_user_id_foreign` (`user_id`),
  KEY `investments_log_investment_plan_id_foreign` (`investment_plan_id`),
  KEY `investments_log_wallet_id_foreign` (`wallet_id`),
  CONSTRAINT `investments_log_investment_plan_id_foreign` FOREIGN KEY (`investment_plan_id`) REFERENCES `investment_plans` (`id`) ON DELETE CASCADE,
  CONSTRAINT `investments_log_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `investments_log_wallet_id_foreign` FOREIGN KEY (`wallet_id`) REFERENCES `wallets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `notification_templates` (`act`, `name`, `subj`, `email_body`, `sms_body`, `push_notification_body`, `shortcodes`, `email_status`, `sms_status`, `push_notification_status`, `created_at`, `updated_at`) VALUES
('INVESTMENT_SUBSCRIBED_SUCCESSFUL', 'Investment Subscription - Successful', 'Investment Subscription Completed Successfully - {{site_name}}', 'Your subscription of {{title}} with {{amount}} {{currency}} has been completed Successfully.\r\n<br><br>\r\nDetails of your subscription :\r\n<br><br>\r\nAmount : {{amount}} {{currency}} <br>\r\nDuration: {{duration}} Days <br>\r\nTill Date: {{end_date}}\r\n<br><br>\r\nTransaction Number : {{trx}}\r\n<br><br>\r\nYour current Balance is {{post_balance}} {{currency}}', 'Your subscription of {{title}} with {{amount}} {{currency}} has been completed Successfully.', 'Your subscription of {{title}} with {{amount}} {{currency}} has been completed Successfully.', '{\"amount\":\"Amount\",\"currency\":\"Currency\",\"trx\":\"Transaction Code\",\"post_balance\":\"Post Balance\",\"duration\":\"Duration\",\"end_date\":\"End Date\",\"title\":\"Investment Plan\"}', 1, 1, 1, NULL, NULL);


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;