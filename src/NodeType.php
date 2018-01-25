<?php
/**
 * Created by PhpStorm.
 * User: jetwaves
 * Date: 18-1-25
 * Time: 下午4:37
 */

namespace Jetwaves\PhpClassEditor;


class NodeType {
    const T_START_OF_PHP = 0;
    const T_COMMENT = 1;
    const T_NAMESPACE = 2;
    const T_USE = 3;
    const T_CLASS = 4;
    const T_ATTRIBUTE = 5;
    const T_FUNCTION = 6;
    const T_ARRAY = 7;
    const T_VARIABLE = 8;
    const T_CODE_BLOCK = 9;     // if-else, for,foreach, while, switch, closure, try-catch
    const T_CODE_LINE = 10;       // normal code line.  basic element.


}

class NodeAccessibility {
    const A_PUBLIC = 0;
    const A_PRIVATE = 1;
    const A_PROTECTED = 2;


}

