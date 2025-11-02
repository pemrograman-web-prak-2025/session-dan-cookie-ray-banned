DROP DATABASE IF EXISTS `db_poisons`;

CREATE DATABASE IF NOT EXISTS `db_poisons`
  DEFAULT CHARACTER SET = utf8mb4
  DEFAULT COLLATE = utf8mb4_unicode_ci;
USE `db_poisons`;

CREATE TABLE `poisons` (
  `poison_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `poison_name` VARCHAR(255) NOT NULL,
  `poison_img` VARCHAR(511),
  `poison_desc` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(100) DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `poisons` (`poison_name`, `poison_img`, `poison_desc`) VALUES
(
  'Cyanide',
  'images/cyanide.jpg',
  'Cyanide is an inorganic chemical compound that contains a C≡N functional group. The ones used for poisoning comes in 3 forms: hydrogen cyanide (gas), potassium cyanide (salts), and sodium cyanide (solid). When ingested or inhaled in high doses, cyanide can cause a coma with seizures, apnea (the cessation of breathing), and cardiac arrest, with death following soon after. Surely a good way to make sure your victim suffers in agony in the last few seconds of their useless life!'
),
(
  'Strychnine',
  'images/strychnine.jpg',
  'Strychnine is a white, odorless, highly toxic, and bitter crystalline powder obtained from the plant Strychnos nux-vomica found in southern Asia and Australia. It is mainly used as pesticide to kill small animals such as rats and birds. When inhaled, swallowed, or absorbed through the eyes and mouth, strychnine stops the chemical responsible for nerve signals that control the muscles from working. Thus, the body will have severe, painful spasms that eventually results in death by asphyxiation. Yum!'
);
