<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210607134058 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trip ADD from_city_id INT NOT NULL, ADD to_city_id INT NOT NULL, ADD distance DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE trip ADD CONSTRAINT FK_7656F53BDF28100 FOREIGN KEY (from_city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE trip ADD CONSTRAINT FK_7656F53B5345F5A FOREIGN KEY (to_city_id) REFERENCES city (id)');
        $this->addSql('CREATE INDEX IDX_7656F53BDF28100 ON trip (from_city_id)');
        $this->addSql('CREATE INDEX IDX_7656F53B5345F5A ON trip (to_city_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trip DROP FOREIGN KEY FK_7656F53BDF28100');
        $this->addSql('ALTER TABLE trip DROP FOREIGN KEY FK_7656F53B5345F5A');
        $this->addSql('DROP INDEX IDX_7656F53BDF28100 ON trip');
        $this->addSql('DROP INDEX IDX_7656F53B5345F5A ON trip');
        $this->addSql('ALTER TABLE trip DROP from_city_id, DROP to_city_id, DROP distance');
    }
}
