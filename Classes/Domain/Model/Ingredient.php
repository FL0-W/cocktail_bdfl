<?php
namespace Bdfl\CocktailBdfl\Domain\Model;

/***
 *
 * This file is part of the "cocktail bdfl" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Florentin BALFOUONG <florentin.balfouong@etu.u-bordeaux.fr>
 *           Daphné AUBERT <daphne.aubert@etu.u-bordeaux.fr>
 *           Lucas ROSSIGNOL <lucas.rossignol@etu.u-bordeaux.fr>
 *           Benjamin ROOSEBROUCK <benjamin.roosebrouck@etu.u-bordeaux.fr>
 *
 ***/

/**
 * Ingrédients
 */
class Ingredient extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Alcoolisé
     *
     * @var bool
     * @validate NotEmpty
     */
    protected $alcoholized = false;

    /**
     * allergenFree
     *
     * @var string
     * @validate NotEmpty
     */
    protected $allergenFree = '';

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the alcoholized
     *
     * @return bool $alcoholized
     */
    public function getAlcoholized()
    {
        return $this->alcoholized;
    }

    /**
     * Sets the alcoholized
     *
     * @param bool $alcoholized
     * @return void
     */
    public function setAlcoholized($alcoholized)
    {
        $this->alcoholized = $alcoholized;
    }

    /**
     * Returns the boolean state of alcoholized
     *
     * @return bool
     */
    public function isAlcoholized()
    {
        return $this->alcoholized;
    }

    /**
     * Returns the allergenFree
     *
     * @return string $allergenFree
     */
    public function getAllergenFree()
    {
        return $this->allergenFree;
    }

    /**
     * Sets the allergenFree
     *
     * @param string $allergenFree
     * @return void
     */
    public function setAllergenFree($allergenFree)
    {
        $this->allergenFree = $allergenFree;
    }
}
