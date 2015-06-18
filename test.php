<?php
$criteria = $modx->newQuery('modResource');
$criteria->where(array(
    'id:<' => 20
));
$collection = $modx->getCollection('modResource', $criteria);

return collectionToJSON($collection);

/**
 * Processes a collection of objects
 * @param array Collection of objects
 * @return array of JSON
*/
function collectionToJSON($collection){
    /**
     * [ denotes an array
     * { denotes an object
     *
     */
    if (!empty($collection)) {
        $o = '[';
        $c = 0;
        foreach ($collection as $obj) {
            $o .= ($c++ > 0) ? ', ' : '';
            $o .= $obj->toJSON();
        }
        $o .= ']';
    }
    return ($o) ? $o : false;
}