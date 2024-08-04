<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240720210827 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cars (
          id INT AUTO_INCREMENT NOT NULL,
          car_name VARCHAR(255) NOT NULL,
          car_plate VARCHAR(255) NOT NULL,
          car_driver_first_name VARCHAR(255) NOT NULL,
          car_driver_last_name VARCHAR(255) NOT NULL,
          PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matches (
          id INT AUTO_INCREMENT NOT NULL,
          match_category_id INT NOT NULL,
          match_home_team VARCHAR(255) NOT NULL,
          match_away_team VARCHAR(255) NOT NULL,
          match_date DATE NOT NULL,
          match_time TIME NOT NULL,
          match_address VARCHAR(255) NOT NULL,
          match_city VARCHAR(255) NOT NULL,
          match_venue VARCHAR(255) NOT NULL,
          INDEX IDX_62615BA20DFECCA (match_category_id),
          PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team_category (
          id INT AUTO_INCREMENT NOT NULL,
          category_name VARCHAR(255) NOT NULL,
          category_shortcut VARCHAR(255) NOT NULL,
          PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (
          id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\',
          user_category_id INT DEFAULT NULL,
          user_first_name VARCHAR(255) NOT NULL,
          user_last_name VARCHAR(255) NOT NULL,
          user_email VARCHAR(255) NOT NULL,
          user_username VARCHAR(255) NOT NULL,
          user_password VARCHAR(255) NOT NULL,
          user_address VARCHAR(255) NOT NULL,
          user_city VARCHAR(255) NOT NULL,
          user_postal_code VARCHAR(255) NOT NULL,
          user_school VARCHAR(255) NOT NULL,
          user_date_of_birth DATE NOT NULL,
          user_fines INT NOT NULL,
          user_dress_number INT NOT NULL,
          user_auth_role VARCHAR(255) NOT NULL,
          user_phone_number VARCHAR(255) NOT NULL,
          user_phone_number_mother VARCHAR(255) NOT NULL,
          user_phone_number_father VARCHAR(255) NOT NULL,
          INDEX IDX_1483A5E9BB5D5477 (user_category_id),
          PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (
          id BIGINT AUTO_INCREMENT NOT NULL,
          body LONGTEXT NOT NULL,
          headers LONGTEXT NOT NULL,
          queue_name VARCHAR(190) NOT NULL,
          created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\',
          available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\',
          delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\',
          INDEX IDX_75EA56E0FB7336F0 (queue_name),
          INDEX IDX_75EA56E0E3BD61CE (available_at),
          INDEX IDX_75EA56E016BA31DB (delivered_at),
          PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE
          matches
        ADD
          CONSTRAINT FK_62615BA20DFECCA FOREIGN KEY (match_category_id) REFERENCES team_category (id)');
        $this->addSql('ALTER TABLE
          users
        ADD
          CONSTRAINT FK_1483A5E9BB5D5477 FOREIGN KEY (user_category_id) REFERENCES team_category (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE matches DROP FOREIGN KEY FK_62615BA20DFECCA');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9BB5D5477');
        $this->addSql('DROP TABLE cars');
        $this->addSql('DROP TABLE matches');
        $this->addSql('DROP TABLE team_category');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
