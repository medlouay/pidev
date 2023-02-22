<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230221153633 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment_request CHANGE fichepatient_id fichepatient_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE appointment_request ADD CONSTRAINT FK_AAB4BDB7A17B8E8C FOREIGN KEY (fichepatient_id) REFERENCES fiche_patient (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AAB4BDB7A17B8E8C ON appointment_request (fichepatient_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment_request DROP FOREIGN KEY FK_AAB4BDB7A17B8E8C');
        $this->addSql('DROP INDEX UNIQ_AAB4BDB7A17B8E8C ON appointment_request');
        $this->addSql('ALTER TABLE appointment_request CHANGE fichepatient_id fichepatient_id INT NOT NULL');
    }
}
