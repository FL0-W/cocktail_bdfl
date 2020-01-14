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
 * Avis
 */
class Review extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Note
     *
     * @var int
     * @validate NotEmpty
     */
    protected $rate = 0;

    /**
     * comment
     *
     * @var string
     */
    protected $comment = '';

    /**
     * Returns the rate
     *
     * @return int $rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets the rate
     *
     * @param int $rate
     * @return void
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * Returns the comment
     *
     * @return string $comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets the comment
     *
     * @param string $comment
     * @return void
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
}
