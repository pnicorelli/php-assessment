<?php

namespace CyriusPhpAssessment\Cypher;

interface CypherInterface{
  public function encrypt($message): string;
  public function decrypt($message): string;
}
