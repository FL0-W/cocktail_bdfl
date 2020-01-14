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
 * Quantité
 */
class Quantity extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * value
     *
     * @var float
     * @validate NotEmpty
     */
    protected $value = 0.0;

    /**
     * unit
     *
     * @var int
     * @validate NotEmpty
     */
    protected $unit = 0;

    /**
     * Ingrédients
     *
     * @var \Bdfl\CocktailBdfl\Domain\Model\Ingredient
     */
    protected $ingredient = null;

    /**
     * Returns the value
     *
     * @return float $value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value
     *
     * @param float $value
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Returns the unit
     *
     * @return int $unit
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets the unit
     *
     * @param int $unit
     * @return void
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * Returns the ingredient
     *
     * @return \Bdfl\CocktailBdfl\Domain\Model\Ingredient $ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets the ingredient
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Ingredient $ingredient
     * @return void
     */
    public function setIngredient(\Bdfl\CocktailBdfl\Domain\Model\Ingredient $ingredient)
    {
        $this->ingredient = $ingredient;
    }
}
