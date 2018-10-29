<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use CyriusPhpAssessment\Cypher\Vigenere;

final class VigenereTest extends TestCase {

    public function testVigenereIsCypherInterface(): void {
      $class = new ReflectionClass('CyriusPhpAssessment\\Cypher\\Vigenere');
        $this->assertEquals(
            $class->implementsInterface('CyriusPhpAssessment\\Cypher\\CypherInterface'),
            true
        );
    }

    /**
     * @expectedException TypeError
     */
    public function testVigenereThrowExceptionOnEmptyConstruction(): void {
        $obj = new Vigenere(1);
    }

    /**
     * @expectedException TypeError
     */
    public function testVigenereThrowExceptionOnBadConstruction(): void {
        $obj = new Vigenere("");
    }

    public function testVigenereShouldEncrypt(): void {
        $cypher = new Vigenere("secretkey");
        $result = $cypher->encrypt("this is a simple message");
        $this->assertEquals(
            $result,
            "llkj ml k wgetnv qxcwyyi"
        );
    }

    public function testVigenereShouldDecrypt(): void {
        $cypher = new Vigenere("secretkey");
        $result = $cypher->decrypt("llkj ml k wgetnv qxcwyyi");
        $this->assertEquals(
            $result,
            "this is a simple message"
        );
    }
}
