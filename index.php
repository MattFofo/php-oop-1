<?php 
   class Movie {
      public $title;
      public $year;
      public $genre;
      public $rating;
      public $description;
      public $thumb;

      public function __construct($_title, $_genre, $_year)
      {
         return $this->title = $_title;
         return $this->genre = $_genre;
         
         return $this->year = $_year;
         
      }

      public function setTitle($_title)
      {
         $this->title = $_title;
      }

      public function getTitle()
      {
         return $this->title;
      }

      public function setRating($_rating)
      {
         $this->rating = $_rating;
      }

      public function getRating()
      {
         return $this->rating;
      }

      public function getThumb()
      {
         return $this->thumb;
      }

      public function getDescription()
      {
         return 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nihil sapiente nam reprehenderit ut officia obcaecati nemo, quos laborum voluptas doloribus fugit incidunt vero fugiat assumenda impedit aspernatur fuga soluta?';
      }
   }

   $avatar = new Movie('Avatar', 'Fantasy', '2005');
   $matrix = new Movie('Matrix', 'Action', '2000');

   $avatar->setRating(5);
   $matrix->setRating(9);

   $matrix->thumb = 'https://picsum.photos/200/300?random=1';
   $avatar->thumb = 'https://picsum.photos/200/300?random=2';
?>

<h1>Titolo: <?= $matrix->getTitle() ?></h1>
<img src="<?= $matrix->getThumb() ?>" alt="">
<h2>Rating: <?= $matrix->getRating() ?></h2>
<p>Description: <?= $matrix->getDescription() ?></p>

<hr>

<h1>Titolo: <?= $avatar->getTitle() ?></h1>
<img src="<?= $avatar->getThumb() ?>" alt="">
<h2>Rating: <?= $avatar->getRating() ?></h2>
<p>Description: <?= $avatar->getDescription() ?></p>


<hr>


