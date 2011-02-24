<?php
/**
 * ZFDoctrine
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to kontakt@beberlei.de so I can send you a copy immediately.
 */

/**
 * Proxy to Zend_Paginator_Adapter_Iterator
 *
 * @author Bas Kamer (bas@bushbaby.nl)
 */

class ZFDoctrine_Paginator_Adapter_DoctrineCollection extends Zend_Paginator_Adapter_Iterator
{
    /**
     * Constructor.
     *
     * @param  IteratorAggregate $iteratorAggregate Iterator to paginate
     * @throws Zend_Paginator_Exception
     */
    public function __construct(IteratorAggregate $iteratorAggregate)
    {

        if (!$iteratorAggregate instanceof IteratorAggregate) {
            /**
             * @see Zend_Paginator_Exception
             */
            require_once 'Zend/Paginator/Exception.php';

            throw new Zend_Paginator_Exception('IteratorAggregate must implement getIterator');
        }

        parent::__construct($iteratorAggregate->getIterator());
    }
}