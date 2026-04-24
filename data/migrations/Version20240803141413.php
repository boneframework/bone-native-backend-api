<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240803141413 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE AccessToken (id INT AUTO_INCREMENT NOT NULL, expiryDateTime DATETIME DEFAULT NULL, userIdentifier INT DEFAULT NULL, identifier LONGTEXT NOT NULL, revoked TINYINT(1) NOT NULL, client INT DEFAULT NULL, INDEX IDX_B39617F5C7440455 (client), PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE AccessToken_Scope (accesstoken_id INT NOT NULL, scope_id INT NOT NULL, INDEX IDX_83FAAB42FDB3DCD1 (accesstoken_id), INDEX IDX_83FAAB42682B5931 (scope_id), PRIMARY KEY(accesstoken_id, scope_id))');
        $this->addSql('CREATE TABLE AuthCode (redirectUri VARCHAR(255) DEFAULT NULL, expiryDateTime DATETIME DEFAULT NULL, userIdentifier INT NOT NULL, identifier LONGTEXT NOT NULL, id INT AUTO_INCREMENT NOT NULL, revoked TINYINT(1) NOT NULL, client INT DEFAULT NULL, INDEX IDX_F1D7D177C7440455 (client), PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE Client (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(40) NOT NULL, description VARCHAR(255) NOT NULL, icon VARCHAR(100) NOT NULL, grantType VARCHAR(20) NOT NULL, redirectUri VARCHAR(255) NOT NULL, identifier VARCHAR(40) NOT NULL, secret VARCHAR(255) DEFAULT NULL, confidential TINYINT(1) NOT NULL, proprietary TINYINT(1) NOT NULL, user_id INT DEFAULT NULL, INDEX IDX_C0E80163A76ED395 (user_id), UNIQUE INDEX identifier_idx (identifier), PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE Client_Scope (client_id INT NOT NULL, scope_id INT NOT NULL, INDEX IDX_7A323D9819EB6921 (client_id), INDEX IDX_7A323D98682B5931 (scope_id), PRIMARY KEY(client_id, scope_id))');
        $this->addSql('CREATE TABLE EmailLink (id INT AUTO_INCREMENT NOT NULL, expiryDate DATETIME NOT NULL, token VARCHAR(255) NOT NULL, user_id INT DEFAULT NULL, INDEX IDX_D0C08DD0A76ED395 (user_id), PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE Person (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(60) DEFAULT NULL, middlename VARCHAR(60) DEFAULT NULL, lastname VARCHAR(60) DEFAULT NULL, aka VARCHAR(50) DEFAULT NULL, dob DATE DEFAULT NULL, birthplace VARCHAR(50) DEFAULT NULL, country VARCHAR(3) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, backgroundImage VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE RefreshToken (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(255) NOT NULL, expiryDateTime DATETIME DEFAULT NULL, revoked TINYINT(1) NOT NULL, accessToken_id INT DEFAULT NULL, INDEX IDX_7142379E4C5BE87 (accessToken_id), PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE Scope (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(40) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE User (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(100) NOT NULL, state INT NOT NULL, registrationDate DATETIME DEFAULT NULL, lastLoginDate DATETIME DEFAULT NULL, person_id INT DEFAULT NULL, class VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_2DA17977217BBB47 (person_id), UNIQUE INDEX email_idx (email), PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE UserApprovedScope (id INT AUTO_INCREMENT NOT NULL, user INT DEFAULT NULL, client INT DEFAULT NULL, scope INT DEFAULT NULL, INDEX IDX_17CDD1F98D93D649 (user), INDEX IDX_17CDD1F9C7440455 (client), INDEX IDX_17CDD1F9AF55D3 (scope), PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE UserSettings (ownerId INT NOT NULL, settingsGroupId INT DEFAULT 1 NOT NULL, settings JSON NOT NULL, id INT AUTO_INCREMENT NOT NULL, UNIQUE INDEX owner_idx (ownerId, settingsGroupId), PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE AccessToken ADD CONSTRAINT FK_B39617F5C7440455 FOREIGN KEY (client) REFERENCES Client (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE AccessToken_Scope ADD CONSTRAINT FK_83FAAB42FDB3DCD1 FOREIGN KEY (accesstoken_id) REFERENCES AccessToken (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE AccessToken_Scope ADD CONSTRAINT FK_83FAAB42682B5931 FOREIGN KEY (scope_id) REFERENCES Scope (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE AuthCode ADD CONSTRAINT FK_F1D7D177C7440455 FOREIGN KEY (client) REFERENCES Client (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE Client ADD CONSTRAINT FK_C0E80163A76ED395 FOREIGN KEY (user_id) REFERENCES User (id)');
        $this->addSql('ALTER TABLE Client_Scope ADD CONSTRAINT FK_7A323D9819EB6921 FOREIGN KEY (client_id) REFERENCES Client (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE Client_Scope ADD CONSTRAINT FK_7A323D98682B5931 FOREIGN KEY (scope_id) REFERENCES Scope (id)');
        $this->addSql('ALTER TABLE EmailLink ADD CONSTRAINT FK_D0C08DD0A76ED395 FOREIGN KEY (user_id) REFERENCES User (id)');
        $this->addSql('ALTER TABLE RefreshToken ADD CONSTRAINT FK_7142379E4C5BE87 FOREIGN KEY (accessToken_id) REFERENCES AccessToken (id)');
        $this->addSql('ALTER TABLE User ADD CONSTRAINT FK_2DA17977217BBB47 FOREIGN KEY (person_id) REFERENCES Person (id)');
        $this->addSql('ALTER TABLE UserApprovedScope ADD CONSTRAINT FK_17CDD1F98D93D649 FOREIGN KEY (user) REFERENCES User (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE UserApprovedScope ADD CONSTRAINT FK_17CDD1F9C7440455 FOREIGN KEY (client) REFERENCES Client (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE UserApprovedScope ADD CONSTRAINT FK_17CDD1F9AF55D3 FOREIGN KEY (scope) REFERENCES Scope (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE AccessToken DROP FOREIGN KEY FK_B39617F5C7440455');
        $this->addSql('ALTER TABLE AccessToken_Scope DROP FOREIGN KEY FK_83FAAB42FDB3DCD1');
        $this->addSql('ALTER TABLE AccessToken_Scope DROP FOREIGN KEY FK_83FAAB42682B5931');
        $this->addSql('ALTER TABLE AuthCode DROP FOREIGN KEY FK_F1D7D177C7440455');
        $this->addSql('ALTER TABLE Client DROP FOREIGN KEY FK_C0E80163A76ED395');
        $this->addSql('ALTER TABLE Client_Scope DROP FOREIGN KEY FK_7A323D9819EB6921');
        $this->addSql('ALTER TABLE Client_Scope DROP FOREIGN KEY FK_7A323D98682B5931');
        $this->addSql('ALTER TABLE EmailLink DROP FOREIGN KEY FK_D0C08DD0A76ED395');
        $this->addSql('ALTER TABLE RefreshToken DROP FOREIGN KEY FK_7142379E4C5BE87');
        $this->addSql('ALTER TABLE User DROP FOREIGN KEY FK_2DA17977217BBB47');
        $this->addSql('ALTER TABLE UserApprovedScope DROP FOREIGN KEY FK_17CDD1F98D93D649');
        $this->addSql('ALTER TABLE UserApprovedScope DROP FOREIGN KEY FK_17CDD1F9C7440455');
        $this->addSql('ALTER TABLE UserApprovedScope DROP FOREIGN KEY FK_17CDD1F9AF55D3');
        $this->addSql('DROP TABLE AccessToken');
        $this->addSql('DROP TABLE AccessToken_Scope');
        $this->addSql('DROP TABLE AuthCode');
        $this->addSql('DROP TABLE Client');
        $this->addSql('DROP TABLE Client_Scope');
        $this->addSql('DROP TABLE EmailLink');
        $this->addSql('DROP TABLE Person');
        $this->addSql('DROP TABLE RefreshToken');
        $this->addSql('DROP TABLE Scope');
        $this->addSql('DROP TABLE User');
        $this->addSql('DROP TABLE UserApprovedScope');
        $this->addSql('DROP TABLE UserSettings');
    }
}
