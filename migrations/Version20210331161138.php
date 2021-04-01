<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210331161138 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bid (id INT AUTO_INCREMENT NOT NULL, freelance_id INT DEFAULT NULL, candidate_id INT DEFAULT NULL, content VARCHAR(255) NOT NULL, published_at DATETIME NOT NULL, INDEX IDX_4AF2B3F3E8DF656B (freelance_id), INDEX IDX_4AF2B3F391BD8781 (candidate_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendar (id INT AUTO_INCREMENT NOT NULL, project_id INT DEFAULT NULL, title VARCHAR(100) NOT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, description LONGTEXT NOT NULL, background_color VARCHAR(7) NOT NULL, border_color VARCHAR(7) NOT NULL, text_color VARCHAR(7) NOT NULL, INDEX IDX_6EA9A146166D1F9C (project_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE followers (id INT AUTO_INCREMENT NOT NULL, id_recruiter INT NOT NULL, id_follower INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE freelance_candidate (freelance_id INT NOT NULL, candidate_id INT NOT NULL, INDEX IDX_DE50DB83E8DF656B (freelance_id), INDEX IDX_DE50DB8391BD8781 (candidate_id), PRIMARY KEY(freelance_id, candidate_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE member (id INT AUTO_INCREMENT NOT NULL, candidature_id INT DEFAULT NULL, project_id INT DEFAULT NULL, pseudo VARCHAR(255) NOT NULL, localisation VARCHAR(255) DEFAULT NULL, INDEX IDX_70E4FA78B6121583 (candidature_id), INDEX IDX_70E4FA78166D1F9C (project_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, member_id INT DEFAULT NULL, message VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, INDEX IDX_B6BD307F7597D3FE (member_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bid ADD CONSTRAINT FK_4AF2B3F3E8DF656B FOREIGN KEY (freelance_id) REFERENCES freelance (id)');
        $this->addSql('ALTER TABLE bid ADD CONSTRAINT FK_4AF2B3F391BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE calendar ADD CONSTRAINT FK_6EA9A146166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE freelance_candidate ADD CONSTRAINT FK_DE50DB83E8DF656B FOREIGN KEY (freelance_id) REFERENCES freelance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE freelance_candidate ADD CONSTRAINT FK_DE50DB8391BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA78B6121583 FOREIGN KEY (candidature_id) REFERENCES candidature (id)');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA78166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F7597D3FE FOREIGN KEY (member_id) REFERENCES member (id)');
        $this->addSql('ALTER TABLE candidate ADD token VARCHAR(255) DEFAULT NULL, ADD reset_token VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE candidature CHANGE score score INT NOT NULL');
        $this->addSql('ALTER TABLE freelance ADD date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE project ADD color VARCHAR(7) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F7597D3FE');
        $this->addSql('DROP TABLE bid');
        $this->addSql('DROP TABLE calendar');
        $this->addSql('DROP TABLE followers');
        $this->addSql('DROP TABLE freelance_candidate');
        $this->addSql('DROP TABLE member');
        $this->addSql('DROP TABLE message');
        $this->addSql('ALTER TABLE candidate DROP token, DROP reset_token');
        $this->addSql('ALTER TABLE candidature CHANGE score score DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE freelance DROP date');
        $this->addSql('ALTER TABLE project DROP color');
    }
}
