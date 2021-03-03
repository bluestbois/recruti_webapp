<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210303120350 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE event_type_event');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE event_type_event (event_type_id INT NOT NULL, event_id INT NOT NULL, INDEX IDX_6D4C547F401B253C (event_type_id), INDEX IDX_6D4C547F71F7E88B (event_id), PRIMARY KEY(event_type_id, event_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE event_type_event ADD CONSTRAINT FK_6D4C547F401B253C FOREIGN KEY (event_type_id) REFERENCES event_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_type_event ADD CONSTRAINT FK_6D4C547F71F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
    }
}
