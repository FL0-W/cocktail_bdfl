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
class CocktailControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Bdfl\CocktailBdfl\Controller\CocktailController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Bdfl\CocktailBdfl\Controller\CocktailController::class)
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
    public function listActionFetchesAllCocktailsFromRepositoryAndAssignsThemToView()
    {

        $allCocktails = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $cocktailRepository = $this->getMockBuilder(\Bdfl\CocktailBdfl\Domain\Repository\CocktailRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $cocktailRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCocktails));
        $this->inject($this->subject, 'cocktailRepository', $cocktailRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('cocktails', $allCocktails);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCocktailToView()
    {
        $cocktail = new \Bdfl\CocktailBdfl\Domain\Model\Cocktail();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('cocktail', $cocktail);

        $this->subject->showAction($cocktail);
    }
}
