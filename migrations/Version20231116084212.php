<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231116084212 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE oignon_burger (oignon_id INT NOT NULL, burger_id INT NOT NULL, INDEX IDX_E8CA36048F038184 (oignon_id), INDEX IDX_E8CA360417CE5090 (burger_id), PRIMARY KEY(oignon_id, burger_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pain_burger (pain_id INT NOT NULL, burger_id INT NOT NULL, INDEX IDX_159D6BD764775A84 (pain_id), INDEX IDX_159D6BD717CE5090 (burger_id), PRIMARY KEY(pain_id, burger_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sauce_burger (sauce_id INT NOT NULL, burger_id INT NOT NULL, INDEX IDX_DF62E3017AB984B7 (sauce_id), INDEX IDX_DF62E30117CE5090 (burger_id), PRIMARY KEY(sauce_id, burger_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE oignon_burger ADD CONSTRAINT FK_E8CA36048F038184 FOREIGN KEY (oignon_id) REFERENCES oignon (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE oignon_burger ADD CONSTRAINT FK_E8CA360417CE5090 FOREIGN KEY (burger_id) REFERENCES burger (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pain_burger ADD CONSTRAINT FK_159D6BD764775A84 FOREIGN KEY (pain_id) REFERENCES pain (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pain_burger ADD CONSTRAINT FK_159D6BD717CE5090 FOREIGN KEY (burger_id) REFERENCES burger (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sauce_burger ADD CONSTRAINT FK_DF62E3017AB984B7 FOREIGN KEY (sauce_id) REFERENCES sauce (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sauce_burger ADD CONSTRAINT FK_DF62E30117CE5090 FOREIGN KEY (burger_id) REFERENCES burger (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oignon_burger DROP FOREIGN KEY FK_E8CA36048F038184');
        $this->addSql('ALTER TABLE oignon_burger DROP FOREIGN KEY FK_E8CA360417CE5090');
        $this->addSql('ALTER TABLE pain_burger DROP FOREIGN KEY FK_159D6BD764775A84');
        $this->addSql('ALTER TABLE pain_burger DROP FOREIGN KEY FK_159D6BD717CE5090');
        $this->addSql('ALTER TABLE sauce_burger DROP FOREIGN KEY FK_DF62E3017AB984B7');
        $this->addSql('ALTER TABLE sauce_burger DROP FOREIGN KEY FK_DF62E30117CE5090');
        $this->addSql('DROP TABLE oignon_burger');
        $this->addSql('DROP TABLE pain_burger');
        $this->addSql('DROP TABLE sauce_burger');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
