<?php

namespace Kunstmaan\ArticleBundle\Form;

use Kunstmaan\NodeBundle\Form\PageAdminType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * The admin type for abstract article overview pages
 */
class AbstractArticleOvervoewPageAdminType extends PageAdminType
{
    /**
     * Builds the form.
     *
     * This method is called for each type in the hierarchy starting form the
     * top most type. Type extensions can further modify the form.
     *
     * @see FormTypeExtensionInterface::buildForm()
     *
     * @param FormBuilderInterface $builder The form builder
     * @param array                $options The options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
    }

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolverInterface $resolver The resolver for the options.
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kunstmaan\ArticleBundle\Entity\AbstractOverviewArticlePage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'AbstractArticleOverviewPage';
    }
}
