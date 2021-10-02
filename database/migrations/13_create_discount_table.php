<?php
return ["
CREATE TABLE `discounts` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `value` text COLLATE utf8mb4_persian_ci NOT NULL,
  `code` text COLLATE utf8mb4_persian_ci NOT NULL,
  `type` enum('0','1') COLLATE utf8mb4_persian_ci NOT NULL,
  `timeToDate` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),

  ALTER TABLE `discounts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
"];