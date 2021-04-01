<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210331221144 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE freelance_test (freelance_id INT NOT NULL, test_id INT NOT NULL, INDEX IDX_AC3A7FEE8DF656B (freelance_id), INDEX IDX_AC3A7FE1E5D0459 (test_id), PRIMARY KEY(freelance_id, test_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job_test (job_id INT NOT NULL, test_id INT NOT NULL, INDEX IDX_5FB3084DBE04EA9 (job_id), INDEX IDX_5FB3084D1E5D0459 (test_id), PRIMARY KEY(job_id, test_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE freelance_test ADD CONSTRAINT FK_AC3A7FEE8DF656B FOREIGN KEY (freelance_id) REFERENCES freelance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE freelance_test ADD CONSTRAINT FK_AC3A7FE1E5D0459 FOREIGN KEY (test_id) REFERENCES test (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE job_test ADD CONSTRAINT FK_5FB3084DBE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE job_test ADD CONSTRAINT FK_5FB3084D1E5D0459 FOREIGN KEY (test_id) REFERENCES test (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE candidature CHANGE job_id job_id INT NOT NULL, CHANGE freelance_id freelance_id INT NOT NULL, CHANGE date date DATE NOT NULL, CHANGE score score INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE freelance_test');
        $this->addSql('DROP TABLE job_test');
        $this->addSql('ALTER TABLE candidature CHANGE job_id job_id INT DEFAULT NULL, CHANGE freelance_id freelance_id INT DEFAULT NULL, CHANGE date date DATE DEFAULT NULL, CHANGE score score INT DEFAULT NULL');
    }
}
