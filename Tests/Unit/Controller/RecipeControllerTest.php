<?php
namespace Bdfl\CocktailBdfl\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Florentin BALFOUONG <florentin.balfouong@etu.u-bordeaux.fr>
 * @author Daphné AUBERT <daphne.aubert@etu.u-bordeaux.fr>
 * @author Lucas ROSSIGNOL <lucas.rossignol@etu.u-bordeaux.fr>
 * @author Benjamin ROOSEBROUCK <benjamin.roosebrouck@etu.u-bordeaux.fr>
 */
class RecipeControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Bdfl\CocktailBdfl\Controller\RecipeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Bdfl\CocktailBdfl\Controller\RecipeController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllRecipesFromRepositoryAndAssignsThemToView()
    {

        $allRecipes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $recipeRepository = $this->getMockBuilder(\Bdfl\CocktailBdfl\Domain\Repository\RecipeRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $recipeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allRecipes));
        $this->inject($this->subject, 'recipeRepository', $recipeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('recipes', $allRecipes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenRecipeToView()
    {
        $recipe = new \Bdfl\CocktailBdfl\Domain\Model\Recipe();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('recipe', $recipe);

        $this->subject->showAction($recipe);
    }
}
