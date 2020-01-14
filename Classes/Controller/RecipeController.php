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
 * RecipeController
 */
class RecipeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * recipeRepository
     *
     * @var \Bdfl\CocktailBdfl\Domain\Repository\RecipeRepository
     * @inject
     */
    protected $recipeRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $recipes = $this->recipeRepository->findAll();
        $this->view->assign('recipes', $recipes);
    }

    /**
     * action show
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Recipe $recipe
     * @return void
     */
    public function showAction(\Bdfl\CocktailBdfl\Domain\Model\Recipe $recipe)
    {
        $this->view->assign('recipe', $recipe);
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
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }
}
