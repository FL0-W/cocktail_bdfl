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
class RecipeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Bdfl\CocktailBdfl\Domain\Model\Recipe
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Bdfl\CocktailBdfl\Domain\Model\Recipe();
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
    public function getPhotosReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPhotos()
        );
    }

    /**
     * @test
     */
    public function setPhotosForFileReferenceSetsPhotos()
    {
        $photo = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOnePhotos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePhotos->attach($photo);
        $this->subject->setPhotos($objectStorageHoldingExactlyOnePhotos);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePhotos,
            'photos',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addPhotoToObjectStorageHoldingPhotos()
    {
        $photo = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $photosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $photosObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($photo));
        $this->inject($this->subject, 'photos', $photosObjectStorageMock);

        $this->subject->addPhoto($photo);
    }

    /**
     * @test
     */
    public function removePhotoFromObjectStorageHoldingPhotos()
    {
        $photo = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $photosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $photosObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($photo));
        $this->inject($this->subject, 'photos', $photosObjectStorageMock);

        $this->subject->removePhoto($photo);
    }

    /**
     * @test
     */
    public function getPeopleNumberReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPeopleNumber()
        );
    }

    /**
     * @test
     */
    public function setPeopleNumberForIntSetsPeopleNumber()
    {
        $this->subject->setPeopleNumber(12);

        self::assertAttributeEquals(
            12,
            'peopleNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDifficultyReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getDifficulty()
        );
    }

    /**
     * @test
     */
    public function setDifficultyForIntSetsDifficulty()
    {
        $this->subject->setDifficulty(12);

        self::assertAttributeEquals(
            12,
            'difficulty',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPreparationTimeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPreparationTime()
        );
    }

    /**
     * @test
     */
    public function setPreparationTimeForStringSetsPreparationTime()
    {
        $this->subject->setPreparationTime('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'preparationTime',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTagsReturnsInitialValueForTag()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTags()
        );
    }

    /**
     * @test
     */
    public function setTagsForObjectStorageContainingTagSetsTags()
    {
        $tag = new \Bdfl\CocktailBdfl\Domain\Model\Tag();
        $objectStorageHoldingExactlyOneTags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTags->attach($tag);
        $this->subject->setTags($objectStorageHoldingExactlyOneTags);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTags,
            'tags',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTagToObjectStorageHoldingTags()
    {
        $tag = new \Bdfl\CocktailBdfl\Domain\Model\Tag();
        $tagsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tagsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($tag));
        $this->inject($this->subject, 'tags', $tagsObjectStorageMock);

        $this->subject->addTag($tag);
    }

    /**
     * @test
     */
    public function removeTagFromObjectStorageHoldingTags()
    {
        $tag = new \Bdfl\CocktailBdfl\Domain\Model\Tag();
        $tagsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tagsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($tag));
        $this->inject($this->subject, 'tags', $tagsObjectStorageMock);

        $this->subject->removeTag($tag);
    }

    /**
     * @test
     */
    public function getStepsReturnsInitialValueForStep()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSteps()
        );
    }

    /**
     * @test
     */
    public function setStepsForObjectStorageContainingStepSetsSteps()
    {
        $step = new \Bdfl\CocktailBdfl\Domain\Model\Step();
        $objectStorageHoldingExactlyOneSteps = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSteps->attach($step);
        $this->subject->setSteps($objectStorageHoldingExactlyOneSteps);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSteps,
            'steps',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addStepToObjectStorageHoldingSteps()
    {
        $step = new \Bdfl\CocktailBdfl\Domain\Model\Step();
        $stepsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $stepsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($step));
        $this->inject($this->subject, 'steps', $stepsObjectStorageMock);

        $this->subject->addStep($step);
    }

    /**
     * @test
     */
    public function removeStepFromObjectStorageHoldingSteps()
    {
        $step = new \Bdfl\CocktailBdfl\Domain\Model\Step();
        $stepsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $stepsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($step));
        $this->inject($this->subject, 'steps', $stepsObjectStorageMock);

        $this->subject->removeStep($step);
    }

    /**
     * @test
     */
    public function getReviewsReturnsInitialValueForReview()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getReviews()
        );
    }

    /**
     * @test
     */
    public function setReviewsForObjectStorageContainingReviewSetsReviews()
    {
        $review = new \Bdfl\CocktailBdfl\Domain\Model\Review();
        $objectStorageHoldingExactlyOneReviews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneReviews->attach($review);
        $this->subject->setReviews($objectStorageHoldingExactlyOneReviews);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneReviews,
            'reviews',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addReviewToObjectStorageHoldingReviews()
    {
        $review = new \Bdfl\CocktailBdfl\Domain\Model\Review();
        $reviewsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($review));
        $this->inject($this->subject, 'reviews', $reviewsObjectStorageMock);

        $this->subject->addReview($review);
    }

    /**
     * @test
     */
    public function removeReviewFromObjectStorageHoldingReviews()
    {
        $review = new \Bdfl\CocktailBdfl\Domain\Model\Review();
        $reviewsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($review));
        $this->inject($this->subject, 'reviews', $reviewsObjectStorageMock);

        $this->subject->removeReview($review);
    }

    /**
     * @test
     */
    public function getCocktailReturnsInitialValueForCocktail()
    {
        self::assertEquals(
            null,
            $this->subject->getCocktail()
        );
    }

    /**
     * @test
     */
    public function setCocktailForCocktailSetsCocktail()
    {
        $cocktailFixture = new \Bdfl\CocktailBdfl\Domain\Model\Cocktail();
        $this->subject->setCocktail($cocktailFixture);

        self::assertAttributeEquals(
            $cocktailFixture,
            'cocktail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUstensilesReturnsInitialValueForUstensile()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUstensiles()
        );
    }

    /**
     * @test
     */
    public function setUstensilesForObjectStorageContainingUstensileSetsUstensiles()
    {
        $ustensile = new \Bdfl\CocktailBdfl\Domain\Model\Ustensile();
        $objectStorageHoldingExactlyOneUstensiles = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUstensiles->attach($ustensile);
        $this->subject->setUstensiles($objectStorageHoldingExactlyOneUstensiles);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneUstensiles,
            'ustensiles',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addUstensileToObjectStorageHoldingUstensiles()
    {
        $ustensile = new \Bdfl\CocktailBdfl\Domain\Model\Ustensile();
        $ustensilesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ustensilesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($ustensile));
        $this->inject($this->subject, 'ustensiles', $ustensilesObjectStorageMock);

        $this->subject->addUstensile($ustensile);
    }

    /**
     * @test
     */
    public function removeUstensileFromObjectStorageHoldingUstensiles()
    {
        $ustensile = new \Bdfl\CocktailBdfl\Domain\Model\Ustensile();
        $ustensilesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ustensilesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($ustensile));
        $this->inject($this->subject, 'ustensiles', $ustensilesObjectStorageMock);

        $this->subject->removeUstensile($ustensile);
    }

    /**
     * @test
     */
    public function getQuantitiesReturnsInitialValueForQuantity()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getQuantities()
        );
    }

    /**
     * @test
     */
    public function setQuantitiesForObjectStorageContainingQuantitySetsQuantities()
    {
        $quantity = new \Bdfl\CocktailBdfl\Domain\Model\Quantity();
        $objectStorageHoldingExactlyOneQuantities = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneQuantities->attach($quantity);
        $this->subject->setQuantities($objectStorageHoldingExactlyOneQuantities);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneQuantities,
            'quantities',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addQuantityToObjectStorageHoldingQuantities()
    {
        $quantity = new \Bdfl\CocktailBdfl\Domain\Model\Quantity();
        $quantitiesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $quantitiesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($quantity));
        $this->inject($this->subject, 'quantities', $quantitiesObjectStorageMock);

        $this->subject->addQuantity($quantity);
    }

    /**
     * @test
     */
    public function removeQuantityFromObjectStorageHoldingQuantities()
    {
        $quantity = new \Bdfl\CocktailBdfl\Domain\Model\Quantity();
        $quantitiesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $quantitiesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($quantity));
        $this->inject($this->subject, 'quantities', $quantitiesObjectStorageMock);

        $this->subject->removeQuantity($quantity);
    }
}
