<?php

namespace Braincrafted\BootstrapBundle\Voter;

use Knp\Menu\ItemInterface;

/**
 * Interface implemented by the matching voters
 */
interface VoterInterface
{
    /**
     * Checks whether an item is current.
     *
     * If the voter is not able to determine a result,
     * it should return null to let other voters do the job.
     *
     * @param ItemInterface $item
     *
     * @return boolean|null
     */
    public function matchItem(ItemInterface $item);
}
