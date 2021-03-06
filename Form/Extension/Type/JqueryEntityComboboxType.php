<?php

/*
 * This file is part of the IoFormBundle package
 *
 * (c) Alessio Baglio <io.alessio@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Io\FormBundle\Form\Extension\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Render a Jquery Combobox Select of an entity
 * Important: you must include combobox.js to enable this widget
 */

class JqueryEntityComboboxType extends EntityType
{
  public function getName()
  {
    return "jquery_entity_combobox";
  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    parent::setDefaultOptions ($resolver);
    $resolver->setDefaults (array (
	  'multiple' => false,
	  'empty_value' => ''
	));
  }
}
