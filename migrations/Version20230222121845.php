<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222121845 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fiche_patient ADD rendez_vous_id INT NOT NULL');
        $this->addSql('ALTER TABLE fiche_patient ADD CONSTRAINT FK_2DB8C3191EF7EAA FOREIGN KEY (rendez_vous_id) REFERENCES appointment_request (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2DB8C3191EF7EAA ON fiche_patient (rendez_vous_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fiche_patient DROP FOREIGN KEY FK_2DB8C3191EF7EAA');
        $this->addSql('DROP INDEX UNIQ_2DB8C3191EF7EAA ON fiche_patient');
        $this->addSql('ALTER TABLE fiche_patient DROP rendez_vous_id');
    }
}
