<?php

declare(strict_types=1);

namespace App\Services;

use Sonata\BlockBundle\Event\BlockEvent;
use Sonata\BlockBundle\Model\Block;

class ProductColor
{
    public function onBlock(BlockEvent $event)
    {
        $block = new Block();
        $block->setId(uniqid('', true)); // set a fake id
        $block->setSettings($event->getSettings());
        $block->setType('sonata.comment.block.discus');

        $event->addBlock($block);
    }

}
