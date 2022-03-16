<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201026004423 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE listening (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, text VARCHAR(255) NOT NULL, question1 VARCHAR(255) NOT NULL, answerc1 VARCHAR(255) NOT NULL, answerw1 VARCHAR(255) NOT NULL, answerw11 VARCHAR(255) NOT NULL, question2 VARCHAR(255) NOT NULL, answerc2 VARCHAR(255) NOT NULL, answerw2 VARCHAR(255) NOT NULL, answerw12 VARCHAR(255) NOT NULL, question3 VARCHAR(255) NOT NULL, answerc3 VARCHAR(255) NOT NULL, answerw3 VARCHAR(255) NOT NULL, answerw13 VARCHAR(255) NOT NULL, question4 VARCHAR(255) NOT NULL, answerc4 VARCHAR(255) NOT NULL, answerw4 VARCHAR(255) NOT NULL, answerw14 VARCHAR(255) NOT NULL, question5 VARCHAR(255) NOT NULL, answerc5 VARCHAR(255) NOT NULL, answerw5 VARCHAR(255) NOT NULL, answerw15 VARCHAR(255) NOT NULL, level VARCHAR(255) NOT NULL, language VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE listening');
    }
}
