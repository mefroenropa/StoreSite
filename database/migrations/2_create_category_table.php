<?php
return ["
CREATE TABLE `categories` (
  `id` bigint(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `image` text COLLATE utf8mb4_persian_ci NOT NULL,
  `name` varchar(244) COLLATE utf8mb4_persian_ci NOT NULL,
  `englishName` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
COMMIT;"];