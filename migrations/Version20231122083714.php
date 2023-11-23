<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231122083714 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pain_burger DROP FOREIGN KEY FK_159D6BD717CE5090');
        $this->addSql('ALTER TABLE pain_burger DROP FOREIGN KEY FK_159D6BD764775A84');
        $this->addSql('DROP TABLE pain_burger');
        $this->addSql('ALTER TABLE oignon ADD nom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pain ADD nom VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pain_burger (pain_id INT NOT NULL, burger_id INT NOT NULL, INDEX IDX_159D6BD764775A84 (pain_id), INDEX IDX_159D6BD717CE5090 (burger_id), PRIMARY KEY(pain_id, burger_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE pain_burger ADD CONSTRAINT FK_159D6BD717CE5090 FOREIGN KEY (burger_id) REFERENCES burger (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pain_burger ADD CONSTRAINT FK_159D6BD764775A84 FOREIGN KEY (pain_id) REFERENCES pain (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE oignon DROP nom');
        $this->addSql('ALTER TABLE pain DROP nom');
    }
}
