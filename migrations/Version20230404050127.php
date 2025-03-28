<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230404050127 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, business_account VARCHAR(25) NOT NULL, event_account VARCHAR(25) DEFAULT NULL, last_event_account VARCHAR(25) DEFAULT NULL, card_number VARCHAR(8) DEFAULT NULL, civility VARCHAR(4) DEFAULT NULL, current_owner_name VARCHAR(100) DEFAULT NULL, last_name VARCHAR(100) DEFAULT NULL, first_name VARCHAR(100) DEFAULT NULL, street_identity VARCHAR(100) DEFAULT NULL, additionnal_adress VARCHAR(100) DEFAULT NULL, zip_code VARCHAR(8) DEFAULT NULL, city VARCHAR(100) DEFAULT NULL, home_phone VARCHAR(12) DEFAULT NULL, mobile_phone VARCHAR(12) DEFAULT NULL, job_phone VARCHAR(12) DEFAULT NULL, email VARCHAR(100) DEFAULT NULL, release_date DATE DEFAULT NULL, purchase_date DATE DEFAULT NULL, last_event_date DATE DEFAULT NULL, brand_name VARCHAR(16) DEFAULT NULL, model_name VARCHAR(10) DEFAULT NULL, version VARCHAR(100) DEFAULT NULL, vin VARCHAR(25) DEFAULT NULL, registration VARCHAR(10) DEFAULT NULL, lead_type VARCHAR(20) DEFAULT NULL, mileage INT DEFAULT NULL, engine_name VARCHAR(20) DEFAULT NULL, seller VARCHAR(20) DEFAULT NULL, seller_vo VARCHAR(20) DEFAULT NULL, billing_comment VARCHAR(50) DEFAULT NULL, vnvo_type VARCHAR(4) DEFAULT NULL, vnvo_number VARCHAR(20) DEFAULT NULL, intermediary VARCHAR(20) DEFAULT NULL, event_date DATE DEFAULT NULL, event_origin VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE customer');
    }
}
