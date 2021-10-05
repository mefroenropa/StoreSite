<?php


return [

    "

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `email` varchar(191) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `avatar` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT '0',
  `is_active` tinyint(5) NOT NULL DEFAULT '0',
  `verify_token` varchar(191) DEFAULT NULL,
  `user_type` varchar(191) NOT NULL,
  `remember_token` varchar(191) DEFAULT NULL,
  `remember_token_expire` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `avatar`, `password`, `status`, `is_active`, `verify_token`, `user_type`, `remember_token`, `remember_token_expire`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Guest@gmail.com', 'مهمان', '220044', '/images/avatar/2021/Oct/05/2021_10_05_08_37_09_76.jpg', '$2y$10NBiefWTu4Ks2.ayTud.6r.FK/rxRaInnAwtDMHT0xa7Yjv9cG51C.', 0, 1, '5f61b5831c2caed80e6adacd2aaae654800e1bca1764fcc0993b2e0a00a08694', 'guest', NULL, NULL, '2021-10-05 10:07:09', NULL, NULL);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `users`
--


ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

    "


];