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

      public function setRating(int $_rating)
      {
         if ($_rating > 9) {
            $this->rating = 9;

         } else if ($_rating < 0) {
            $this->rating = 0;

         } else {
            $this->rating = $_rating;
         }
         
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
         return $this->description;
      }
   }

   $avatar = new Movie('Avatar', 'Fantasy', '2005');
   $matrix = new Movie('Matrix', 'Action', '2000');

   $avatar->setRating(-4);
   $matrix->setRating(15);

   $avatar->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nihil sapiente nam reprehenderit ut officia obcaecati nemo, quos laborum voluptas doloribus fugit incidunt vero fugiat assumenda impedit aspernatur fuga soluta?';

   $matrix->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nihil sapiente nam reprehenderit ut officia obcaecati nemo, quos laborum voluptas doloribus fugit incidunt vero fugiat assumenda impedit aspernatur fuga soluta?Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nihil sapiente nam reprehenderit ut officia obcaecati nemo, quos laborum voluptas doloribus fugit incidunt vero fugiat assumenda impedit aspernatur fuga soluta?';

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