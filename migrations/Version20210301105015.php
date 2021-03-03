<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210301105015 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test_test_categorie (test_id INT NOT NULL, test_categorie_id INT NOT NULL, INDEX IDX_B4ACB9F31E5D0459 (test_id), INDEX IDX_B4ACB9F39073071D (test_categorie_id), PRIMARY KEY(test_id, test_categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test_categorie (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE test_test_categorie ADD CONSTRAINT FK_B4ACB9F31E5D0459 FOREIGN KEY (test_id) REFERENCES test (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE test_test_categorie ADD CONSTRAINT FK_B4ACB9F39073071D FOREIGN KEY (test_categorie_id) REFERENCES test_categorie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test_test_categorie DROP FOREIGN KEY FK_B4ACB9F31E5D0459');
        $this->addSql('ALTER TABLE test_test_categorie DROP FOREIGN KEY FK_B4ACB9F39073071D');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE test_test_categorie');
        $this->addSql('DROP TABLE test_categorie');
    }
}
