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
class ReviewTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Bdfl\CocktailBdfl\Domain\Model\Review
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Bdfl\CocktailBdfl\Domain\Model\Review();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getRateReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getRate()
        );
    }

    /**
     * @test
     */
    public function setRateForIntSetsRate()
    {
        $this->subject->setRate(12);

        self::assertAttributeEquals(
            12,
            'rate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCommentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getComment()
        );
    }

    /**
     * @test
     */
    public function setCommentForStringSetsComment()
    {
        $this->subject->setComment('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'comment',
            $this->subject
        );
    }
}
