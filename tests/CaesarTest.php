<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use CyriusPhpAssessment\Cypher\Caesar;

final class CaesarTest extends TestCase {

    public function testCaesarIsCypherInterface(): void {
      $class = new ReflectionClass('CyriusPhpAssessment\\Cypher\\Caesar');
        $this->assertEquals(
            $class->implementsInterface('CyriusPhpAssessment\\Cypher\\CypherInterface'),
            true
        );
    }

    /**
     * @expectedException TypeError
     */
    public function testCaesarThrowExceptionOnBadConstruction(): void{
        $obj = new Caesar('secret');
    }

    public function testCaesarShouldEncrypt(): void {
        $obj = new Caesar(12);
        $result = $obj->encrypt("this is a simple message");
        $this->assertEquals(
            $result,
            "ftue ue m euybxq yqeemsq"
        );
    }

    public function testCaesarShouldDecrypt(): void {
        $obj = new Caesar(12);
        $result = $obj->decrypt("ftue ue m euybxq yqeemsq");
        $this->assertEquals(
            $result,
            "this is a simple message"
        );
    }
}
