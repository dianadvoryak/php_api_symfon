<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230903121520 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO book_format (id, title, description, comment) VALUE (1, 'eBook', 'Follow real-world API projects from concept to production, and learn hands-on how to describe and design APIs using OpenAPI.', null)");
        $this->addSql("INSERT INTO book_format (id, title, description, comment) VALUE (2, 'print + eBook', 'Designing APIs with Swagger and OpenAPI is a comprehensive guide to designing and describing your first RESTful API using the most widely adopted standards.', 'Following expert instruction from Swagger core contributor Josh Ponelat and API consultant Lukas Rosenstock, you’ll spend each chapter progressively expanding the kind of APIs you’ll want to build in the real world.')");
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM book_format');
    }
}
