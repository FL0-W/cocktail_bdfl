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
 * Recette
 */
class Recipe extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Photos
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $photos = null;

    /**
     * Nombre de personnes
     *
     * @var int
     * @validate NotEmpty
     */
    protected $peopleNumber = 0;

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * difficulty
     *
     * @var int
     */
    protected $difficulty = 0;

    /**
     * preparationTime
     *
     * @var string
     * @validate NotEmpty
     */
    protected $preparationTime = '';

    /**
     * Tags
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Tag>
     * @lazy
     */
    protected $tags = null;

    /**
     * Etapes
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Step>
     * @cascade remove
     * @lazy
     */
    protected $steps = null;

    /**
     * reviews
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Review>
     * @cascade remove
     * @lazy
     */
    protected $reviews = null;

    /**
     * Cocktail
     *
     * @var \Bdfl\CocktailBdfl\Domain\Model\Cocktail
     */
    protected $cocktail = null;

    /**
     * ustensiles
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Ustensile>
     * @lazy
     */
    protected $ustensiles = null;

    /**
     * Quantités
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Quantity>
     * @cascade remove
     * @lazy
     */
    protected $quantities = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->photos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->steps = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->reviews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->ustensiles = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->quantities = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

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
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function addPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photos->attach($photo);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photoToRemove The FileReference to be removed
     * @return void
     */
    public function removePhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photoToRemove)
    {
        $this->photos->detach($photoToRemove);
    }

    /**
     * Returns the photos
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $photos
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Sets the photos
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $photos
     * @return void
     */
    public function setPhotos(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $photos)
    {
        $this->photos = $photos;
    }

    /**
     * Returns the peopleNumber
     *
     * @return int $peopleNumber
     */
    public function getPeopleNumber()
    {
        return $this->peopleNumber;
    }

    /**
     * Sets the peopleNumber
     *
     * @param int $peopleNumber
     * @return void
     */
    public function setPeopleNumber($peopleNumber)
    {
        $this->peopleNumber = $peopleNumber;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the difficulty
     *
     * @return int $difficulty
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Sets the difficulty
     *
     * @param int $difficulty
     * @return void
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;
    }

    /**
     * Returns the preparationTime
     *
     * @return string $preparationTime
     */
    public function getPreparationTime()
    {
        return $this->preparationTime;
    }

    /**
     * Sets the preparationTime
     *
     * @param string $preparationTime
     * @return void
     */
    public function setPreparationTime($preparationTime)
    {
        $this->preparationTime = $preparationTime;
    }

    /**
     * Adds a Tag
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Tag $tag
     * @return void
     */
    public function addTag(\Bdfl\CocktailBdfl\Domain\Model\Tag $tag)
    {
        $this->tags->attach($tag);
    }

    /**
     * Removes a Tag
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Tag $tagToRemove The Tag to be removed
     * @return void
     */
    public function removeTag(\Bdfl\CocktailBdfl\Domain\Model\Tag $tagToRemove)
    {
        $this->tags->detach($tagToRemove);
    }

    /**
     * Returns the tags
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Tag> $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets the tags
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Tag> $tags
     * @return void
     */
    public function setTags(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tags)
    {
        $this->tags = $tags;
    }

    /**
     * Adds a Step
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Step $step
     * @return void
     */
    public function addStep(\Bdfl\CocktailBdfl\Domain\Model\Step $step)
    {
        $this->steps->attach($step);
    }

    /**
     * Removes a Step
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Step $stepToRemove The Step to be removed
     * @return void
     */
    public function removeStep(\Bdfl\CocktailBdfl\Domain\Model\Step $stepToRemove)
    {
        $this->steps->detach($stepToRemove);
    }

    /**
     * Returns the steps
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Step> $steps
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Sets the steps
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Step> $steps
     * @return void
     */
    public function setSteps(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $steps)
    {
        $this->steps = $steps;
    }

    /**
     * Adds a Review
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Review $review
     * @return void
     */
    public function addReview(\Bdfl\CocktailBdfl\Domain\Model\Review $review)
    {
        $this->reviews->attach($review);
    }

    /**
     * Removes a Review
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Review $reviewToRemove The Review to be removed
     * @return void
     */
    public function removeReview(\Bdfl\CocktailBdfl\Domain\Model\Review $reviewToRemove)
    {
        $this->reviews->detach($reviewToRemove);
    }

    /**
     * Returns the reviews
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Review> $reviews
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Sets the reviews
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Review> $reviews
     * @return void
     */
    public function setReviews(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $reviews)
    {
        $this->reviews = $reviews;
    }

    /**
     * Returns the cocktail
     *
     * @return \Bdfl\CocktailBdfl\Domain\Model\Cocktail $cocktail
     */
    public function getCocktail()
    {
        return $this->cocktail;
    }

    /**
     * Sets the cocktail
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Cocktail $cocktail
     * @return void
     */
    public function setCocktail(\Bdfl\CocktailBdfl\Domain\Model\Cocktail $cocktail)
    {
        $this->cocktail = $cocktail;
    }

    /**
     * Adds a Ustensile
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Ustensile $ustensile
     * @return void
     */
    public function addUstensile(\Bdfl\CocktailBdfl\Domain\Model\Ustensile $ustensile)
    {
        $this->ustensiles->attach($ustensile);
    }

    /**
     * Removes a Ustensile
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Ustensile $ustensileToRemove The Ustensile to be removed
     * @return void
     */
    public function removeUstensile(\Bdfl\CocktailBdfl\Domain\Model\Ustensile $ustensileToRemove)
    {
        $this->ustensiles->detach($ustensileToRemove);
    }

    /**
     * Returns the ustensiles
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Ustensile> $ustensiles
     */
    public function getUstensiles()
    {
        return $this->ustensiles;
    }

    /**
     * Sets the ustensiles
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Ustensile> $ustensiles
     * @return void
     */
    public function setUstensiles(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ustensiles)
    {
        $this->ustensiles = $ustensiles;
    }

    /**
     * Adds a Quantity
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Quantity $quantity
     * @return void
     */
    public function addQuantity(\Bdfl\CocktailBdfl\Domain\Model\Quantity $quantity)
    {
        $this->quantities->attach($quantity);
    }

    /**
     * Removes a Quantity
     *
     * @param \Bdfl\CocktailBdfl\Domain\Model\Quantity $quantityToRemove The Quantity to be removed
     * @return void
     */
    public function removeQuantity(\Bdfl\CocktailBdfl\Domain\Model\Quantity $quantityToRemove)
    {
        $this->quantities->detach($quantityToRemove);
    }

    /**
     * Returns the quantities
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Quantity> $quantities
     */
    public function getQuantities()
    {
        return $this->quantities;
    }

    /**
     * Sets the quantities
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bdfl\CocktailBdfl\Domain\Model\Quantity> $quantities
     * @return void
     */
    public function setQuantities(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $quantities)
    {
        $this->quantities = $quantities;
    }
}
