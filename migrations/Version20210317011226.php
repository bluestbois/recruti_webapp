<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210317011226 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE administrateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidate (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, birthday DATE NOT NULL, gender VARCHAR(1) NOT NULL, nationality VARCHAR(255) NOT NULL, phone_number VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, loe VARCHAR(255) NOT NULL, experience INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, candidate_id INT NOT NULL, job_id INT NOT NULL, freelance_id INT NOT NULL, date DATE NOT NULL, score DOUBLE PRECISION NOT NULL, INDEX IDX_E33BD3B891BD8781 (candidate_id), INDEX IDX_E33BD3B8BE04EA9 (job_id), INDEX IDX_E33BD3B8E8DF656B (freelance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidature_test (candidature_id INT NOT NULL, test_id INT NOT NULL, INDEX IDX_CC61F1EBB6121583 (candidature_id), INDEX IDX_CC61F1EB1E5D0459 (test_id), PRIMARY KEY(candidature_id, test_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, recruiter_id INT DEFAULT NULL, candidate_id INT DEFAULT NULL, post_id INT NOT NULL, content VARCHAR(255) NOT NULL, date DATE NOT NULL, likes INT NOT NULL, INDEX IDX_9474526C156BE243 (recruiter_id), INDEX IDX_9474526C91BD8781 (candidate_id), INDEX IDX_9474526C4B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, nop INT NOT NULL, location VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event_event_type (event_id INT NOT NULL, event_type_id INT NOT NULL, INDEX IDX_CBFBC2AD71F7E88B (event_id), INDEX IDX_CBFBC2AD401B253C (event_type_id), PRIMARY KEY(event_id, event_type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event_candidate (event_id INT NOT NULL, candidate_id INT NOT NULL, INDEX IDX_4E27B07971F7E88B (event_id), INDEX IDX_4E27B07991BD8781 (candidate_id), PRIMARY KEY(event_id, candidate_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE field (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE forum (id INT AUTO_INCREMENT NOT NULL, recruiter_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_852BBECD156BE243 (recruiter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE freelance (id INT AUTO_INCREMENT NOT NULL, project_id INT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, salary INT NOT NULL, INDEX IDX_48ABC675166D1F9C (project_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE freelance_tag (freelance_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_B2D5B8A5E8DF656B (freelance_id), INDEX IDX_B2D5B8A5BAD26311 (tag_id), PRIMARY KEY(freelance_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job (id INT AUTO_INCREMENT NOT NULL, recruiter_id INT NOT NULL, title VARCHAR(255) NOT NULL, date DATE NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_FBD8E0F8156BE243 (recruiter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nationality (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nationality_candidate (nationality_id INT NOT NULL, candidate_id INT NOT NULL, INDEX IDX_8947C8BC1C9DA55 (nationality_id), INDEX IDX_8947C8BC91BD8781 (candidate_id), PRIMARY KEY(nationality_id, candidate_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, recruiter_id INT DEFAULT NULL, candidate_id INT DEFAULT NULL, forum_id INT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date DATE NOT NULL, views INT NOT NULL, likes INT NOT NULL, noc INT NOT NULL, INDEX IDX_5A8A6C8D156BE243 (recruiter_id), INDEX IDX_5A8A6C8D91BD8781 (candidate_id), INDEX IDX_5A8A6C8D29CCBAD0 (forum_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, recruiter_id INT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date DATE NOT NULL, INDEX IDX_2FB3D0EE156BE243 (recruiter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_candidate (project_id INT NOT NULL, candidate_id INT NOT NULL, INDEX IDX_D98ECB93166D1F9C (project_id), INDEX IDX_D98ECB9391BD8781 (candidate_id), PRIMARY KEY(project_id, candidate_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, test_id INT NOT NULL, statement VARCHAR(255) NOT NULL, answer_a VARCHAR(255) NOT NULL, answer_b VARCHAR(255) NOT NULL, answer_c VARCHAR(255) NOT NULL, right_answer INT NOT NULL, points INT NOT NULL, INDEX IDX_B6F7494E1E5D0459 (test_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recruiter (id INT AUTO_INCREMENT NOT NULL, field_id INT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, phone_number VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_DE8633D8443707B0 (field_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag_post (tag_id INT NOT NULL, post_id INT NOT NULL, INDEX IDX_B485D33BBAD26311 (tag_id), INDEX IDX_B485D33B4B89032C (post_id), PRIMARY KEY(tag_id, post_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test_test_categorie (test_id INT NOT NULL, test_categorie_id INT NOT NULL, INDEX IDX_B4ACB9F31E5D0459 (test_id), INDEX IDX_B4ACB9F39073071D (test_categorie_id), PRIMARY KEY(test_id, test_categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test_categorie (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B891BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8BE04EA9 FOREIGN KEY (job_id) REFERENCES job (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8E8DF656B FOREIGN KEY (freelance_id) REFERENCES freelance (id)');
        $this->addSql('ALTER TABLE candidature_test ADD CONSTRAINT FK_CC61F1EBB6121583 FOREIGN KEY (candidature_id) REFERENCES candidature (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE candidature_test ADD CONSTRAINT FK_CC61F1EB1E5D0459 FOREIGN KEY (test_id) REFERENCES test (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C156BE243 FOREIGN KEY (recruiter_id) REFERENCES recruiter (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C91BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C4B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE event_event_type ADD CONSTRAINT FK_CBFBC2AD71F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_event_type ADD CONSTRAINT FK_CBFBC2AD401B253C FOREIGN KEY (event_type_id) REFERENCES event_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_candidate ADD CONSTRAINT FK_4E27B07971F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_candidate ADD CONSTRAINT FK_4E27B07991BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE forum ADD CONSTRAINT FK_852BBECD156BE243 FOREIGN KEY (recruiter_id) REFERENCES recruiter (id)');
        $this->addSql('ALTER TABLE freelance ADD CONSTRAINT FK_48ABC675166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE freelance_tag ADD CONSTRAINT FK_B2D5B8A5E8DF656B FOREIGN KEY (freelance_id) REFERENCES freelance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE freelance_tag ADD CONSTRAINT FK_B2D5B8A5BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F8156BE243 FOREIGN KEY (recruiter_id) REFERENCES recruiter (id)');
        $this->addSql('ALTER TABLE nationality_candidate ADD CONSTRAINT FK_8947C8BC1C9DA55 FOREIGN KEY (nationality_id) REFERENCES nationality (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE nationality_candidate ADD CONSTRAINT FK_8947C8BC91BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D156BE243 FOREIGN KEY (recruiter_id) REFERENCES recruiter (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D91BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D29CCBAD0 FOREIGN KEY (forum_id) REFERENCES forum (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE156BE243 FOREIGN KEY (recruiter_id) REFERENCES recruiter (id)');
        $this->addSql('ALTER TABLE project_candidate ADD CONSTRAINT FK_D98ECB93166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_candidate ADD CONSTRAINT FK_D98ECB9391BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E1E5D0459 FOREIGN KEY (test_id) REFERENCES test (id)');
        $this->addSql('ALTER TABLE recruiter ADD CONSTRAINT FK_DE8633D8443707B0 FOREIGN KEY (field_id) REFERENCES field (id)');
        $this->addSql('ALTER TABLE tag_post ADD CONSTRAINT FK_B485D33BBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tag_post ADD CONSTRAINT FK_B485D33B4B89032C FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE test_test_categorie ADD CONSTRAINT FK_B4ACB9F31E5D0459 FOREIGN KEY (test_id) REFERENCES test (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE test_test_categorie ADD CONSTRAINT FK_B4ACB9F39073071D FOREIGN KEY (test_categorie_id) REFERENCES test_categorie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B891BD8781');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C91BD8781');
        $this->addSql('ALTER TABLE event_candidate DROP FOREIGN KEY FK_4E27B07991BD8781');
        $this->addSql('ALTER TABLE nationality_candidate DROP FOREIGN KEY FK_8947C8BC91BD8781');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D91BD8781');
        $this->addSql('ALTER TABLE project_candidate DROP FOREIGN KEY FK_D98ECB9391BD8781');
        $this->addSql('ALTER TABLE candidature_test DROP FOREIGN KEY FK_CC61F1EBB6121583');
        $this->addSql('ALTER TABLE event_event_type DROP FOREIGN KEY FK_CBFBC2AD71F7E88B');
        $this->addSql('ALTER TABLE event_candidate DROP FOREIGN KEY FK_4E27B07971F7E88B');
        $this->addSql('ALTER TABLE event_event_type DROP FOREIGN KEY FK_CBFBC2AD401B253C');
        $this->addSql('ALTER TABLE recruiter DROP FOREIGN KEY FK_DE8633D8443707B0');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D29CCBAD0');
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B8E8DF656B');
        $this->addSql('ALTER TABLE freelance_tag DROP FOREIGN KEY FK_B2D5B8A5E8DF656B');
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B8BE04EA9');
        $this->addSql('ALTER TABLE nationality_candidate DROP FOREIGN KEY FK_8947C8BC1C9DA55');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C4B89032C');
        $this->addSql('ALTER TABLE tag_post DROP FOREIGN KEY FK_B485D33B4B89032C');
        $this->addSql('ALTER TABLE freelance DROP FOREIGN KEY FK_48ABC675166D1F9C');
        $this->addSql('ALTER TABLE project_candidate DROP FOREIGN KEY FK_D98ECB93166D1F9C');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C156BE243');
        $this->addSql('ALTER TABLE forum DROP FOREIGN KEY FK_852BBECD156BE243');
        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F8156BE243');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D156BE243');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE156BE243');
        $this->addSql('ALTER TABLE freelance_tag DROP FOREIGN KEY FK_B2D5B8A5BAD26311');
        $this->addSql('ALTER TABLE tag_post DROP FOREIGN KEY FK_B485D33BBAD26311');
        $this->addSql('ALTER TABLE candidature_test DROP FOREIGN KEY FK_CC61F1EB1E5D0459');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E1E5D0459');
        $this->addSql('ALTER TABLE test_test_categorie DROP FOREIGN KEY FK_B4ACB9F31E5D0459');
        $this->addSql('ALTER TABLE test_test_categorie DROP FOREIGN KEY FK_B4ACB9F39073071D');
        $this->addSql('DROP TABLE administrateur');
        $this->addSql('DROP TABLE candidate');
        $this->addSql('DROP TABLE candidature');
        $this->addSql('DROP TABLE candidature_test');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE event_event_type');
        $this->addSql('DROP TABLE event_candidate');
        $this->addSql('DROP TABLE event_type');
        $this->addSql('DROP TABLE field');
        $this->addSql('DROP TABLE forum');
        $this->addSql('DROP TABLE freelance');
        $this->addSql('DROP TABLE freelance_tag');
        $this->addSql('DROP TABLE job');
        $this->addSql('DROP TABLE nationality');
        $this->addSql('DROP TABLE nationality_candidate');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE project_candidate');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE recruiter');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE tag_post');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE test_test_categorie');
        $this->addSql('DROP TABLE test_categorie');
    }
}
