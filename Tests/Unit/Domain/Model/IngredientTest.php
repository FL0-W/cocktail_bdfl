<?php
namespace Bdfl\CocktailBdfl\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Florentin BALFOUONG <florentin.balfouong@etu.u-bordeaux.fr>
 * @author Daphné AUBERT <daphne.aubert@etu.u-bordeaux.fr>
 * @author Lucas ROSSIGNOL <lucas.rossignol@etu.u-bordeaux.fr>
 * @author Benjamin ROOSEBROUCK <benjamin.roosebrouck@etu.u-bordeaux.fr>
 */
class IngredientTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Bdfl\CocktailBdfl\Domain\Model\Ingredient
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Bdfl\CocktailBdfl\Domain\Model\Ingredient();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAlcoholizedReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAlcoholized()
        );
    }

    /**
     * @test
     */
    public function setAlcoholizedForBoolSetsAlcoholized()
    {
        $this->subject->setAlcoholized(true);

        self::assertAttributeEquals(
            true,
            'alcoholized',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAllergenFreeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAllergenFree()
        );
    }

    /**
     * @test
     */
    public function setAllergenFreeForStringSetsAllergenFree()
    {
        $this->subject->setAllergenFree('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'allergenFree',
            $this->subject
        );
    }
}
