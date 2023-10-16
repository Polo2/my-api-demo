<?php
// api/src/Entity/Book.php
namespace App\Entity;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Put;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/** A book. */
#[ORM\Entity]
#[ApiResource(
    operations: [
        new Get(),
        new Put(),
        new GetCollection(),
        new Post(),
    ]
)]

class Book
{
     /** The ID of this book. */
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
     private ?int $id = null;

     /** The ISBN of this book (or null if doesn't have one). */
    #[ORM\Column(nullable: true)]
     public ?string $isbn = null;

     /** The title of this book. */
    #[ORM\Column]
     public string $title = '';

     /** The description of this book. */
    #[ORM\Column(type: 'text')]
     public string $description = '';

     /** The author of this book. */
    #[ORM\Column]
     public string $author = '';

     /** The publication date of this book. */
    #[ORM\Column]
     public ?\DateTimeImmutable $publicationDate = null;

     /** @var Review[] Available reviews for this book. */
    #[ORM\OneToMany(targetEntity: Review::class, mappedBy: 'book', cascade: ['persist', 'remove'])]
    public iterable $reviews;
    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
