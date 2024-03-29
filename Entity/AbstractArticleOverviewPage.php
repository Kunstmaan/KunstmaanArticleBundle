<?php

namespace Kunstmaan\ArticleBundle\Entity;

use Kunstmaan\ArticleBundle\PagePartAdmin\AbstractArticleOverviewPagePagePartAdminConfigurator;
use Kunstmaan\ArticleBundle\ViewDataProvider\ArticlePageViewDataProvider;
use Kunstmaan\NodeBundle\Controller\SlugActionInterface;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\NodeBundle\Entity\CustomViewDataProviderInterface;
use Kunstmaan\PagePartBundle\Helper\HasPagePartsInterface;
use Kunstmaan\PagePartBundle\PagePartAdmin\AbstractPagePartAdminConfigurator;

/**
 * The article overview page which shows its articles
 */
abstract class AbstractArticleOverviewPage extends AbstractPage implements HasPagePartsInterface, SlugActionInterface, CustomViewDataProviderInterface
{
    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return [];
    }

    /**
     * @return AbstractPagePartAdminConfigurator[]
     */
    public function getPagePartAdminConfigurations()
    {
        return [new AbstractArticleOverviewPagePagePartAdminConfigurator()];
    }

    /**
     * Return the Article repository
     *
     * @return mixed
     */
    abstract public function getArticleRepository($em);

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return '@KunstmaanArticle/AbstractArticleOverviewPage/view.html.twig';
    }

    /**
     * @deprecated since KunstmaanArticleBundle 5.9 and will be removed in KunstmaanArticleBundle 6.0. Use the `Kunstmaan\NodeBundle\Entity\CustomViewDataProviderInterface` and a custom page render service instead.
     */
    public function getControllerAction()
    {
        return 'KunstmaanArticleBundle:AbstractArticleOverviewPage:service';
    }

    public function getViewDataProviderServiceId(): string
    {
        return ArticlePageViewDataProvider::class;
    }
}
