<?php

namespace m4grio\SepomexBundle\DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Migration that creates and populates Sepomex data
 *
 * @package m4grio\SepomexBundle\DoctrineMigrations
 * @author  Mario Álvarez <ahoy@m4grio.me>
 */
abstract class SepomexMigration extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()
                ->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE sepomex (id INT AUTO_INCREMENT NOT NULL, d_codigo VARCHAR(5) NOT NULL, d_asenta VARCHAR(100) NOT NULL, d_tipo_asenta VARCHAR(50) NOT NULL, D_mnpio VARCHAR(60) NOT NULL, d_estado VARCHAR(50) NOT NULL, d_ciudad VARCHAR(60) NOT NULL, d_CP VARCHAR(5) NOT NULL, c_estado VARCHAR(2) NOT NULL, c_oficina VARCHAR(5) NOT NULL, c_CP VARCHAR(1) NOT NULL, c_tipo_asenta VARCHAR(2) NOT NULL, c_mnpio VARCHAR(5) NOT NULL, id_asenta_cpcons VARCHAR(5) NOT NULL, d_zona VARCHAR(20) NOT NULL, c_cve_ciudad VARCHAR(2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM');
        $chunk = 0;
        $data = $this->getDataChunks();
        foreach ($data as $statement) {
            $statement = trim($statement);
            if ($statement) {
                $this->addSql($statement);
                $this->write(sprintf('  <info>> %02d</info> chunks of Sepomex data imported', $chunk++));
            }
        }
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()
                ->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE sepomex');
    }

    protected function getRawData()
    {
        $result = file_get_contents(__DIR__.'/sepomex-chunks.sql');

        return $result;
    }

    protected function getDataChunks()
    {
        $result = [];
        $rawData = $this->getRawData();
        $chunks = preg_split('@;@', $rawData, null, PREG_SPLIT_NO_EMPTY);
        if (is_array($chunks)) {
            $chunks = array_filter($chunks, 'strlen');
            $chunks = array_map(function($input) {
                $result = false;
                $clean = trim($input);
                if ($clean) {
                    $result = $clean;
                }

                return $result;
            }, $chunks);
            $result = $chunks;
        }

        return $result;
    }
}
