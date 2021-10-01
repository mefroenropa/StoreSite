<?php
return ["
CREATE TABLE `wishlistcategories` (
    `id` bigint(20) NOT NULL,
    `name` int(11) NOT NULL,
    `user_id` bigint(20) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime DEFAULT NULL,
    `deleted_at` datetime DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;
  
  --
  -- Indexes for dumped tables
  --
  
  --
  -- Indexes for table `wishlistcategories`
  --
  ALTER TABLE `wishlistcategories`
    ADD PRIMARY KEY (`id`),
    ADD KEY `user_id` (`user_id`);
  
  --
  -- AUTO_INCREMENT for dumped tables
  --
  
  --
  -- AUTO_INCREMENT for table `wishlistcategories`
  --
  ALTER TABLE `wishlistcategories`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
  COMMIT;
  "];