<?php
namespace Bdfl\CocktailBdfl\Controller;

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
 * CocktailController
 */
class CocktailController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * cocktailRepository
     *
     * @var \Bdfl\CocktailBdfl\Domain\Repository\CocktailRepository
     * @inject
     */
    protected $cocktailRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $cocktails = $this->cocktailRepository->findAll();
        $this->view->assign('cocktails', $cocktails);
    }

    /**
     * action show
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Cocktail $cocktail
     * @return void
     */
    public function showAction(\Bdfl\CocktailBdfl\Domain\Model\Cocktail $cocktail)
    {
        $this->view->assign('cocktail', $cocktail);
    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }

    /**
     * action highlight
     *
     * @return void
     */
    public function highlightAction()
    {

    }

    /**
     * action random
     *
     * @return void
     */
    public function randomAction()
    {

    }
}
