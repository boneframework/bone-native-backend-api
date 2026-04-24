<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240808144505 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE PushToken (token VARCHAR(50) NOT NULL, createdAt DATETIME NOT NULL, id INT AUTO_INCREMENT NOT NULL, updatedAt DATETIME DEFAULT NULL, user_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_1118F48FA76ED395 (user_id), PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE PushToken ADD CONSTRAINT FK_1118F48FA76ED395 FOREIGN KEY (user_id) REFERENCES User (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE PushToken DROP FOREIGN KEY FK_1118F48FA76ED395');
        $this->addSql('DROP TABLE PushToken');
    }
}
