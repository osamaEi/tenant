<?php

namespace Database\Seeders\Tenant;

use App\Helpers\ImageDataSeedingHelper;
use App\Mail\TenantCredentialMail;
use App\Models\Admin;
use App\Models\Language;
use App\Models\Menu;
use App\Models\TopbarInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class GeneralData extends Seeder
{
    public function run()
    {
        $this->insertStaticOptionData();
        $this->seed_topbar_info();
    }

    private function insertStaticOptionData()
    {
        DB::statement("INSERT INTO `static_options` (`id`, `option_name`, `option_value`, `created_at`, `updated_at`) VALUES
        (1,'site_title','Electro','2022-08-11 01:14:21','2023-07-31 12:13:16'),
        (3,'site_tag_line','Electronics Shop','2022-08-11 01:14:21','2023-07-31 12:13:16'),
        (5,'home_one_header_button_text','Join With Us','2022-08-11 01:14:21','2022-08-11 01:14:21'),
        (7,'language_selector_status',NULL,'2022-08-11 01:14:21','2023-05-23 13:11:37'),
        (8,'home_page','1','2022-08-11 01:14:21','2023-08-02 19:12:11'),
        (10,'global_footer_variant','01','2022-08-11 01:14:21','2022-11-10 14:29:08'),
        (11,'order_form','02','2022-08-11 01:14:21','2022-08-11 01:14:21'),
        (12,'site_logo','514','2022-08-11 01:14:21','2023-06-18 18:40:47'),
        (13,'site_white_logo','514','2022-08-11 01:14:21','2023-06-18 18:40:47'),
        (14,'site_favicon','496','2022-08-11 01:14:21','2023-05-23 13:10:40'),
        (15,'site_footer_copyright_text','{copy} {year} Copyright All Right Reserved by Electro','2022-08-11 01:45:38','2023-07-31 12:13:16'),
        (17,'dark_mode_for_admin_panel',NULL,'2022-08-11 01:45:38','2022-08-11 01:45:53'),
        (18,'maintenance_mode',NULL,'2022-08-11 01:45:38','2022-08-11 01:45:38'),
        (19,'backend_preloader',NULL,'2022-08-11 01:45:38','2022-08-11 01:45:38'),
        (20,'user_email_verify_status',NULL,'2022-08-11 01:45:38','2023-08-06 17:02:23'),
        (21,'guest_order_system_status',NULL,'2022-08-11 01:45:38','2023-08-06 17:03:41'),
        (22,'timezone','Asia/Dhaka','2022-08-11 01:45:38','2022-09-12 00:48:23'),
        (23,'main_color_one_hexfashion','rgb(255, 128, 93)','2022-08-11 02:23:08','2022-11-12 10:18:07'),
        (24,'main_color_two_hexfashion','#ff805d','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (25,'main_color_three_hexfashion','#599a8d','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (26,'main_color_four_hexfashion','#1e88e5','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (27,'secondary_color_hexfashion','#F7A3A8','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (28,'secondary_color_two_hexfashion','#ffdcd2','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (29,'section_bg_1_hexfashion','#FFFBFB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (30,'section_bg_2_hexfashion','#FFF6EE','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (31,'section_bg_3_hexfashion','#F4F8FB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (32,'section_bg_4_hexfashion','#F2F3FB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (33,'section_bg_5_hexfashion','#F9F5F2','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (34,'section_bg_6_hexfashion','#E5EFF8','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (35,'heading_color_hexfashion','#333333','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (36,'body_color_hexfashion','#666666','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (37,'light_color_hexfashion','#666666','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (38,'extra_light_color_hexfashion','#888888','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (39,'review_color_hexfashion','#FABE50','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (40,'feedback_bg_item_hexfashion','rgb(255, 246, 238)','2022-08-11 02:23:08','2022-11-13 06:14:29'),
        (41,'new_color_hexfashion','#5AB27E','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (42,'main_color_one_furnito','rgb(255, 128, 93)','2022-08-11 02:23:08','2022-11-12 10:18:20'),
        (43,'main_color_two_furnito','rgb(255, 128, 93)','2022-08-11 02:23:08','2022-11-10 14:27:10'),
        (44,'main_color_three_furnito','rgb(89, 154, 141)','2022-08-11 02:23:08','2022-11-10 14:27:10'),
        (45,'main_color_four_furnito','#1e88e5','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (46,'secondary_color_furnito','#F7A3A8','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (47,'secondary_color_two_furnito','#ffdcd2','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (48,'section_bg_1_furnito','#FFFBFB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (49,'section_bg_2_furnito','rgb(255, 246, 238)','2022-08-11 02:23:08','2022-11-12 07:07:39'),
        (50,'section_bg_3_furnito','#F4F8FB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (51,'section_bg_4_furnito','#F2F3FB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (52,'section_bg_5_furnito','#F9F5F2','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (53,'section_bg_6_furnito','#E5EFF8','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (54,'heading_color_furnito','#333333','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (55,'body_color_furnito','#666666','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (56,'light_color_furnito','#666666','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (57,'extra_light_color_furnito','#888888','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (58,'review_color_furnito','#FABE50','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (59,'feedback_bg_item_furnito','rgb(255, 246, 238)','2022-08-11 02:23:08','2022-11-13 06:14:29'),
        (60,'new_color_furnito','#5AB27E','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (61,'main_color_one_medicom','rgb(30, 136, 229)','2022-08-11 02:23:08','2023-03-05 18:06:03'),
        (62,'main_color_two_medicom','rgb(30, 136, 229)','2022-08-11 02:23:08','2023-03-05 19:48:14'),
        (63,'main_color_three_medicom','rgb(30, 136, 229)','2022-08-11 02:23:08','2023-03-05 19:48:14'),
        (64,'main_color_four_medicom','#1e88e5','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (65,'secondary_color_medicom','#F7A3A8','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (66,'secondary_color_two_medicom','#ffdcd2','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (67,'section_bg_1_medicom','#FFFBFB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (68,'section_bg_2_medicom','rgb(255, 246, 238)','2022-08-11 02:23:08','2023-03-05 19:48:14'),
        (69,'section_bg_3_medicom','#F4F8FB','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (70,'section_bg_4_medicom','rgb(244, 248, 251)','2022-08-11 02:23:08','2023-03-05 19:48:14'),
        (71,'section_bg_5_medicom','#F9F5F2','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (72,'section_bg_6_medicom','#E5EFF8','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (73,'heading_color_medicom','#333333','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (74,'body_color_medicom','#666666','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (75,'light_color_medicom','#666666','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (76,'extra_light_color_medicom','#888888','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (77,'review_color_medicom','#FABE50','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (78,'feedback_bg_item_medicom','rgb(229, 239, 248)','2022-08-11 02:23:08','2023-03-05 19:48:14'),
        (79,'new_color_medicom','#5AB27E','2022-08-11 02:23:08','2022-08-11 02:23:08'),
        (80,'body_font_family_hexfashion','Jost','2022-08-11 04:43:05','2022-11-20 12:55:32'),
        (81,'heading_font_family_hexfashion','Jost','2022-08-11 04:43:05','2022-11-20 12:55:32'),
        (82,'heading_font_hexfashion','on','2022-08-11 04:43:05','2022-08-11 05:24:53'),
        (83,'body_font_family_furnito','Jost','2022-08-11 04:43:05','2022-11-21 17:41:48'),
        (84,'heading_font_family_furnito','Jost','2022-08-11 04:43:05','2022-11-21 17:41:48'),
        (85,'heading_font_furnito','on','2022-08-11 04:43:05','2022-11-21 17:41:48'),
        (86,'body_font_family_medicom','Manrope','2022-08-11 04:43:05','2023-03-05 18:04:58'),
        (87,'heading_font_family_medicom','Roboto Slab','2022-08-11 04:43:05','2023-03-05 18:04:35'),
        (88,'heading_font_medicom','on','2022-08-11 04:43:05','2022-08-11 05:26:34'),
        (89,'body_font_variant_hexfashion','a:8:{i:0;s:5:\"0,200\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,600\";i:5;s:5:\"0,700\";i:6;s:5:\"0,800\";i:7;s:5:\"0,900\";}','2022-08-11 04:43:05','2022-11-29 16:14:19'),
        (90,'heading_font_variant_hexfashion','a:16:{i:0;s:5:\"0,200\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,600\";i:5;s:5:\"0,700\";i:6;s:5:\"0,800\";i:7;s:5:\"0,900\";i:8;s:5:\"1,200\";i:9;s:5:\"1,300\";i:10;s:5:\"1,400\";i:11;s:5:\"1,500\";i:12;s:5:\"1,600\";i:13;s:5:\"1,700\";i:14;s:5:\"1,800\";i:15;s:5:\"1,900\";}','2022-08-11 04:43:05','2022-11-29 16:14:19'),
        (91,'body_font_variant_furnito','a:8:{i:0;s:5:\"0,200\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,600\";i:5;s:5:\"0,700\";i:6;s:5:\"0,800\";i:7;s:5:\"0,900\";}','2022-08-11 04:43:05','2022-11-29 16:14:19'),
        (92,'heading_font_variant_furnito','a:8:{i:0;s:5:\"0,200\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,600\";i:5;s:5:\"0,700\";i:6;s:5:\"0,800\";i:7;s:5:\"0,900\";}','2022-08-11 04:43:05','2022-11-29 16:14:19'),
        (93,'body_font_variant_medicom','a:7:{i:0;s:5:\"0,200\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,600\";i:5;s:5:\"0,700\";i:6;s:5:\"0,800\";}','2022-08-11 04:43:05','2023-03-05 18:04:58'),
        (94,'heading_font_variant_medicom','a:8:{i:0;s:5:\"0,100\";i:1;s:5:\"0,200\";i:2;s:5:\"0,300\";i:3;s:5:\"0,400\";i:4;s:5:\"0,500\";i:5;s:5:\"0,600\";i:6;s:5:\"0,700\";i:7;s:5:\"0,800\";}','2022-08-11 04:43:05','2023-03-05 18:04:35'),
        (95,'category_page_item_show','9','2022-08-17 00:22:46','2022-08-22 00:53:40'),
        (96,'tag_page_item_show','9','2022-08-17 00:22:46','2022-08-22 00:53:40'),
        (97,'search_page_item_show','9','2022-08-17 00:22:46','2022-08-22 00:53:40'),
        (98,'blog_avater_image','52','2022-08-17 00:22:46','2022-08-17 00:22:46'),
        (99,'pricing_plan',NULL,'2022-08-21 23:33:07','2022-08-22 00:08:33'),
        (100,'blog_page','5','2022-08-21 23:33:07','2022-11-16 05:14:54'),
        (101,'blogs_page_item_show','9','2022-08-22 00:53:40','2022-08-22 00:53:40'),
        (102,'site_global_currency','USD','2022-09-04 05:39:22','2022-09-04 05:39:22'),
        (103,'site_global_payment_gateway',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
        (104,'site_usd_to_ngn_exchange_rate','','2022-09-04 05:39:22','2023-05-24 15:44:34'),
        (105,'site_euro_to_ngn_exchange_rate','','2022-09-04 05:39:22','2023-05-24 15:44:34'),
        (106,'site_currency_symbol_position','left','2022-09-04 05:39:22','2022-09-04 05:39:22'),
        (107,'site_default_payment_gateway','paypal','2022-09-04 05:39:22','2022-09-04 05:39:22'),
        (108,'site__to_idr_exchange_rate',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
        (109,'site__to_inr_exchange_rate',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
        (110,'site__to_ngn_exchange_rate',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
        (111,'site__to_zar_exchange_rate',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
        (112,'site__to_brl_exchange_rate',NULL,'2022-09-04 05:39:22','2022-09-04 05:39:22'),
        (113,'shop_page','4','2022-09-12 12:31:06','2023-04-16 23:55:18'),
        (114,'site_usd_to_idr_exchange_rate','','2022-10-12 05:57:47','2023-05-24 15:44:34'),
        (115,'site_usd_to_inr_exchange_rate','','2022-10-12 05:57:47','2023-05-24 15:44:34'),
        (116,'site_usd_to_zar_exchange_rate','','2022-10-12 05:57:47','2023-05-24 15:44:34'),
        (117,'site_usd_to_brl_exchange_rate','','2022-10-12 05:57:47','2023-05-24 15:44:34'),
        (119,'site_order_success_page_en_US_title','sdasd asde asd','2022-10-26 12:45:18','2022-10-26 12:45:18'),
        (120,'site_order_success_page_en_US_description','as das dasd asd asd','2022-10-26 12:45:18','2022-10-26 12:45:18'),
        (121,'site_order_success_page_ar_title',NULL,'2022-10-26 12:45:18','2022-10-26 12:45:18'),
        (122,'site_order_success_page_ar_description',NULL,'2022-10-26 12:45:18','2022-10-26 12:45:18'),
        (123,'site_order_cancel_page_en_US_title',NULL,'2022-10-26 12:47:05','2022-10-26 12:53:43'),
        (124,'site_order_cancel_page_en_US_subtitle',NULL,'2022-10-26 12:47:05','2022-10-27 04:58:45'),
        (125,'site_order_cancel_page_en_US_description',NULL,'2022-10-26 12:47:05','2022-10-27 04:58:45'),
        (126,'site_order_cancel_page_ar_title',NULL,'2022-10-26 12:47:05','2022-10-26 12:47:05'),
        (127,'site_order_cancel_page_ar_subtitle',NULL,'2022-10-26 12:47:05','2022-10-26 12:47:05'),
        (128,'site_order_cancel_page_ar_description',NULL,'2022-10-26 12:47:05','2022-10-26 12:47:05'),
        (130,'order_receiving_email','admin@gmail.com','2022-10-27 07:20:10','2022-10-27 07:20:10'),
        (131,'tenant_site_global_email','suzon@gmail.com','2022-10-27 07:20:22','2022-10-27 07:20:22'),
        (132,'stock_threshold_amount','5','2022-10-31 12:37:04','2022-10-31 13:37:03'),
        (133,'stock_warning_message','Following products stock are running low:','2022-11-01 06:31:26','2022-11-01 06:32:18'),
        (134,'track_order','8','2023-01-02 17:33:01','2023-04-18 17:14:04'),
        (135,'breadcrumb_bg_hexfashion','rgb(255, 246, 238)','2023-01-02 17:34:20','2023-01-02 17:45:51'),
        (136,'breadcrumb_bg_furnito','#E5EFF8','2023-01-02 17:34:20','2023-01-02 17:34:20'),
        (137,'breadcrumb_bg_medicom','#E5EFF8','2023-01-02 17:34:20','2023-01-02 17:34:20'),
        (138,'blog_avatar_image','343','2023-01-03 17:51:46','2023-01-03 17:51:57'),
        (139,'main_color_one_bookpoint','rgb(17, 134, 104)','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (140,'main_color_two_bookpoint','rgb(81, 78, 182)','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (141,'main_color_three_bookpoint','#599a8d','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (142,'main_color_four_bookpoint','#1e88e5','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (143,'secondary_color_bookpoint','rgb(19, 120, 94)','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (144,'secondary_color_two_bookpoint','rgb(63, 61, 153)','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (145,'section_bg_1_bookpoint','#FFFBFB','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (146,'section_bg_2_bookpoint','#FFF6EE','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (147,'section_bg_3_bookpoint','#F4F8FB','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (148,'section_bg_4_bookpoint','#F2F3FB','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (149,'section_bg_5_bookpoint','#F9F5F2','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (150,'section_bg_6_bookpoint','#E5EFF8','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (151,'breadcrumb_bg_bookpoint','#E5EFF8','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (152,'heading_color_bookpoint','rgb(29, 38, 53)','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (153,'body_color_bookpoint','rgb(119, 125, 134)','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (154,'light_color_bookpoint','rgb(119, 125, 134)','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (155,'extra_light_color_bookpoint','#888888','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (156,'review_color_bookpoint','#FABE50','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (157,'feedback_bg_item_bookpoint','#333333','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (158,'new_color_bookpoint','#5AB27E','2023-04-13 17:33:16','2023-04-13 17:33:16'),
        (159,'body_font_family_bookpoint','Poppins','2023-04-13 18:10:53','2023-04-13 18:10:53'),
        (160,'heading_font_family_bookpoint','Poppins','2023-04-13 18:10:53','2023-04-13 18:10:53'),
        (161,'heading_font_bookpoint','on','2023-04-13 18:10:53','2023-04-13 18:10:53'),
        (162,'body_font_variant_bookpoint','a:9:{i:0;s:5:\"0,100\";i:1;s:5:\"0,200\";i:2;s:5:\"0,300\";i:3;s:5:\"0,400\";i:4;s:5:\"0,500\";i:5;s:5:\"0,600\";i:6;s:5:\"0,700\";i:7;s:5:\"0,800\";i:8;s:5:\"0,900\";}','2023-04-13 18:10:53','2023-04-13 18:10:53'),
        (163,'heading_font_variant_bookpoint','a:9:{i:0;s:5:\"0,100\";i:1;s:5:\"0,200\";i:2;s:5:\"0,300\";i:3;s:5:\"0,400\";i:4;s:5:\"0,500\";i:5;s:5:\"0,600\";i:6;s:5:\"0,700\";i:7;s:5:\"0,800\";i:8;s:5:\"0,900\";}','2023-04-13 18:10:53','2023-04-13 18:10:53'),
        (164,'topbar_menu','3','2023-04-15 02:01:54','2023-07-31 16:49:35'),
        (178,'terms_condition',NULL,'2023-04-16 23:53:52','2023-04-18 14:34:03'),
        (179,'privacy_policy',NULL,'2023-04-16 23:53:52','2023-04-16 23:53:52'),
        (180,'digital_shop_page','6','2023-04-16 23:54:45','2023-04-16 23:55:18'),
        (181,'main_color_one_aromatic','rgb(248, 58, 38)','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (182,'main_color_two_aromatic','rgb(255, 186, 0)','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (183,'main_color_three_aromatic','rgb(255, 106, 58)','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (184,'main_color_four_aromatic','rgb(255, 105, 92)','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (185,'secondary_color_aromatic','#F7A3A8','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (186,'secondary_color_two_aromatic','#ffdcd2','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (187,'section_bg_1_aromatic','#FFFBFB','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (188,'section_bg_2_aromatic','#FFF6EE','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (189,'section_bg_3_aromatic','#F4F8FB','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (190,'section_bg_4_aromatic','#F2F3FB','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (191,'section_bg_5_aromatic','#F9F5F2','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (192,'section_bg_6_aromatic','#E5EFF8','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (193,'breadcrumb_bg_aromatic','#E5EFF8','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (194,'heading_color_aromatic','#333333','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (195,'body_color_aromatic','#666666','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (196,'light_color_aromatic','#666666','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (197,'extra_light_color_aromatic','rgb(153, 153, 153)','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (198,'review_color_aromatic','#FABE50','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (199,'feedback_bg_item_aromatic','rgb(27, 28, 37)','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (200,'new_color_aromatic','#5AB27E','2023-05-22 19:19:08','2023-05-22 19:19:08'),
        (201,'body_font_family_aromatic','Roboto','2023-05-22 19:20:31','2023-05-22 19:20:31'),
        (202,'heading_font_family_aromatic','Playfair Display','2023-05-22 19:20:31','2023-05-22 19:32:29'),
        (203,'heading_font_aromatic','on','2023-05-22 19:20:31','2023-05-22 19:20:31'),
        (204,'body_font_variant_aromatic','a:6:{i:0;s:5:\"0,100\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,700\";i:5;s:5:\"0,900\";}','2023-05-22 19:20:31','2023-05-22 19:20:31'),
        (205,'heading_font_variant_aromatic','a:6:{i:0;s:5:\"0,400\";i:1;s:5:\"0,500\";i:2;s:5:\"0,600\";i:3;s:5:\"0,700\";i:4;s:5:\"0,800\";i:5;s:5:\"0,900\";}','2023-05-22 19:20:31','2023-05-22 19:32:51'),
        (206,'placeholder_image','293','2023-05-23 13:11:37','2023-07-31 12:13:16'),
        (207,'mysql_database_engine',NULL,'2023-05-23 13:11:37','2023-05-23 13:11:37'),
        (208,'title_shape_image','498','2023-05-23 16:19:21','2023-05-23 16:19:21'),
        (209,'product_title_length','4','2023-05-23 19:20:14','2023-06-24 18:34:15'),
        (210,'product_description_length','30','2023-05-23 19:20:14','2023-05-23 19:20:14'),
        (211,'currency_amount_type_status','on','2023-05-24 15:44:34','2023-05-24 15:47:43'),
        (212,'site_custom_currency_symbol',NULL,'2023-05-24 15:44:34','2023-05-24 15:44:34'),
        (213,'site_custom_currency_thousand_separator',',','2023-05-24 15:44:34','2023-05-24 15:46:15'),
        (214,'site_custom_currency_decimal_separator','.','2023-05-24 15:44:34','2023-05-24 15:44:34'),
        (215,'cash_on_delivery',NULL,'2023-05-24 15:44:34','2023-05-24 15:44:34'),
        (216,'site_usd_to_usd_exchange_rate','','2023-05-24 15:44:34','2023-05-24 15:44:34'),
        (217,'site_disqus_key',NULL,'2023-05-25 13:08:19','2023-05-25 13:08:19'),
        (218,'site_google_captcha_v3_secret_key',NULL,'2023-05-25 13:08:19','2023-05-25 13:08:19'),
        (219,'site_google_captcha_v3_site_key',NULL,'2023-05-25 13:08:19','2023-05-25 13:08:19'),
        (220,'site_third_party_tracking_code',NULL,'2023-05-25 13:08:19','2023-05-25 13:08:19'),
        (221,'site_google_analytics',NULL,'2023-05-25 13:08:19','2023-05-25 13:08:19'),
        (222,'tawk_api_key',NULL,'2023-05-25 13:08:19','2023-05-25 13:08:19'),
        (223,'instagram_access_token','IGQVJXcWU3UjZADZAU8td0hOdWR0eG96QjRmM09hbVFZAck5QdW0zel9lU2lZAWmZAxYTVvRzY2cjB6aGZAMcVNwbmtxd05EZAFpVdXVrVktwVS1zZAUxIdXVzSTluSGhHVmc1dUdnMkdqOVdOby1BbkdQWW93cgZDZD','2023-05-25 13:08:19','2023-05-31 12:15:39'),
        (224,'background_image_one','509','2023-05-25 19:07:13','2023-05-25 19:07:13'),
        (225,'background_image_two','508','2023-05-25 19:07:13','2023-05-25 19:07:13'),
        (226,'background_image_three','510','2023-05-25 19:07:13','2023-05-25 19:07:13'),
        (227,'background_image_four','511','2023-05-25 19:07:13','2023-05-25 19:07:13'),
        (228,'background_image_five','512','2023-05-25 19:07:13','2023-05-25 19:07:13'),
        (229,'main_color_one_casual','rgb(248, 58, 38)','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (230,'main_color_two_casual','rgb(255, 186, 0)','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (231,'main_color_three_casual','rgb(255, 106, 58)','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (232,'main_color_four_casual','rgb(255, 105, 92)','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (233,'secondary_color_casual','#F7A3A8','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (234,'secondary_color_two_casual','#ffdcd2','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (235,'section_bg_1_casual','#FFFBFB','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (236,'section_bg_2_casual','#FFF6EE','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (237,'section_bg_3_casual','#F4F8FB','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (238,'section_bg_4_casual','#F2F3FB','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (239,'section_bg_5_casual','#F9F5F2','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (240,'section_bg_6_casual','#E5EFF8','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (241,'breadcrumb_bg_casual','#E5EFF8','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (242,'heading_color_casual','rgb(27, 28, 37)','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (243,'body_color_casual','#666666','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (244,'light_color_casual','#666666','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (245,'extra_light_color_casual','rgb(153, 153, 153)','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (246,'review_color_casual','#FABE50','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (247,'feedback_bg_item_casual','#333333','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (248,'new_color_casual','#5AB27E','2023-06-20 19:40:34','2023-06-20 19:40:34'),
        (249,'body_font_family_casual','Roboto','2023-06-20 19:42:50','2023-06-20 19:42:50'),
        (250,'heading_font_family_casual','Rubik','2023-06-20 19:42:50','2023-06-20 19:42:50'),
        (251,'heading_font_casual','on','2023-06-20 19:42:50','2023-06-20 19:42:50'),
        (252,'body_font_variant_casual','a:6:{i:0;s:5:\"0,100\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,700\";i:5;s:5:\"0,900\";}','2023-06-20 19:42:50','2023-06-20 19:42:50'),
        (253,'heading_font_variant_casual','a:5:{i:0;s:5:\"0,300\";i:1;s:5:\"0,400\";i:2;s:5:\"0,500\";i:3;s:5:\"0,700\";i:4;s:5:\"0,900\";}','2023-06-20 19:42:50','2023-06-20 19:42:50'),
        (254,'main_color_one_electro','#ff805d','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (255,'main_color_two_electro','#ff805d','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (256,'main_color_three_electro','#ff805d','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (257,'main_color_four_electro','#ff805d','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (258,'secondary_color_electro','#F7A3A8','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (259,'secondary_color_two_electro','#ffdcd2','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (260,'section_bg_1_electro','#FFFBFB','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (261,'section_bg_2_electro','#FFF6EE','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (262,'section_bg_3_electro','#F4F8FB','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (263,'section_bg_4_electro','#F2F3FB','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (264,'section_bg_5_electro','#F9F5F2','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (265,'section_bg_6_electro','#E5EFF8','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (266,'breadcrumb_bg_electro','#E5EFF8','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (267,'heading_color_electro','#333333','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (268,'body_color_electro','#666666','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (269,'light_color_electro','#666666','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (270,'extra_light_color_electro','#888888','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (271,'review_color_electro','#FABE50','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (272,'feedback_bg_item_electro','#333333','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (273,'new_color_electro','#5AB27E','2023-07-31 11:56:37','2023-07-31 11:56:37'),
        (274,'body_font_family_electro','Roboto','2023-07-31 11:58:17','2023-07-31 11:58:17'),
        (275,'heading_font_family_electro','Rubik','2023-07-31 11:58:17','2023-07-31 11:58:17'),
        (276,'heading_font_electro',NULL,'2023-07-31 11:58:17','2023-07-31 11:58:17'),
        (277,'body_font_variant_electro','a:6:{i:0;s:5:\"0,100\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,700\";i:5;s:5:\"0,900\";}','2023-07-31 11:58:17','2023-07-31 11:58:17'),
        (278,'heading_font_variant_electro','a:5:{i:0;s:5:\"0,300\";i:1;s:5:\"0,400\";i:2;s:5:\"0,500\";i:3;s:5:\"0,700\";i:4;s:5:\"0,900\";}','2023-07-31 11:58:17','2023-07-31 11:58:17'),
        (279,'contact_info_show_hide','on','2023-07-31 13:44:23','2023-07-31 16:40:27'),
        (280,'social_info_show_hide','on','2023-07-31 13:44:23','2023-07-31 16:40:27'),
        (281,'topbar_show_hide','on','2023-07-31 13:44:23','2023-07-31 16:44:50'),
        (282,'topbar_menu_show_hide','on','2023-07-31 14:27:02','2023-07-31 16:49:30'),
        (283,'topbar_phone','+1 (195) 565-6342','2023-07-31 14:38:52','2023-07-31 14:38:52'),
        (284,'topbar_email','nitati@mailinator.com','2023-07-31 14:38:52','2023-07-31 14:38:52'),
        (288,'woocommerce_default_unit','6','2023-08-10 16:18:44','2023-08-10 16:18:44'),
        (289,'woocommerce_default_uom','1','2023-08-10 16:18:44','2023-08-10 16:18:44')");
    }

    private function seed_topbar_info()
    {
        DB::statement("INSERT INTO `topbar_infos` (`id`, `icon`, `url`, `created_at`, `updated_at`) VALUES
        (1, 'lab la-twitter', '#', '2022-08-11 01:14:21', '2022-08-11 01:14:21'),
        (2, 'lab la-pinterest-p', '#', '2022-08-11 01:14:21', '2022-08-11 01:14:21'),
        (3, 'las la-user', '#', '2022-08-11 01:14:21', '2022-08-11 01:14:21'),
        (4, 'lab la-facebook-f', '#', '2022-08-11 01:14:21', '2022-08-11 01:14:21')");
    }
}
