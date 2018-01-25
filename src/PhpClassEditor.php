<?php
/**
 * Created by PhpStorm.
 * User: jetwaves
 * Date: 18-1-25
 * Time: 下午3:42
 */

namespace Jetwaves\PhpClassEditor;

use Jetwaves\PhpClassEditor\NodeType;

class PhpClassEditor {
    private $_targetFilename;


    function __construct($targetFilename)
    {
        $a = NodeType::TYPE_ARRAY;
    }

    public function targetFilename(){
        return $this->_targetFilename;
    }


    // parse the target php class file to create a "road map"
    private function parseFile(){
        $file = [
            'node' => [
                'type'  => 'class',
                'name' => 'TestFileClass',
                'startLineNumber' => 1,
                'endLineNumber' => 999,
                'content' => [
                    'node1' => [
                        'type' => 'use',
                        'name' => 'filenameAttribute',
                        'originalContent' => 'xxxxx',
                        'lineNumber' => '10'
                    ],
                    'node1' => [
                        'type' => 'attribut',
                        'name' => 'filenameAttribute',
                        'originalContent' => 'xxxxx',
                        'lineNumber' => '10'
                    ],
                    'node2',
                    'node3'
                ]
            ]


        ];
    }

}