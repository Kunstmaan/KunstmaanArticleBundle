<?php

namespace Kunstmaan\ArticleBundle\Tests\Entity;

use Kunstmaan\ArticleBundle\Entity\AbstractArticleOverviewPage;
use PHPUnit_Framework_TestCase;

class ArticleOverViewPage extends AbstractArticleOverviewPage
{
    public function getArticleRepository($em)
    {
        return null;
    }
}

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-04 at 16:54:04.
 */
class AbstractArticleOverviewPageTest extends PHPUnit_Framework_TestCase
{
    public function testGettersAndSetters()
    {
        $entity = new ArticleOverViewPage();
        $this->assertEquals('KunstmaanArticleBundle:AbstractArticleOverviewPage:service', $entity->getControllerAction());
        $this->assertEquals('KunstmaanArticleBundle:AbstractArticleOverviewPage:view.html.twig', $entity->getDefaultView());
        $this->assertTrue(is_array($entity->getPossibleChildTypes()));
        $this->assertTrue(is_array($entity->getPagePartAdminConfigurations()));
    }
}
