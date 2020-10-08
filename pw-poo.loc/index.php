<?php
  class Novelty {
    private $title;
    private $description;
    private $author;
    private $category;

    public $imgUrl;

    function __construct($title = '', $description = '', $author = '', $category = null) {
      $this->title = $title;
      $this->description = $description;
      $this->author = $author;
      $this->category = $category;
    }

    public function setTitle ($title) {
      $this->title = $title;
    }

    public function getTitle () {
      return $this->title;
    }

    public function setDescription ($description) {
      $this->description = $description;
    }

    public function getDescription () {
      return $this->description;
    }

    public function setAuthor ($author) {
      $this->author = $author;
    }

    public function getAuthor () {
      return $this->author;
    }

    public function setCategory ($category) {
      $this->category = $category;
    }

    public function getCategory () {
      return $this->category;
    }

    public function setImgUrl ($url = '') {
      if (!empty($url)) {
        return $this->imgUrl = $url;
      } else {
        return $this->imgUrl = "https://image.shutterstock.com/image-vector/no-image-available-icon-vector-260nw-1323742826.jpg";
      }
    }

    public function shortDescription($description) {
      return substr($description, 0, 21);
    }
  }

  $novelty1 = new Novelty ("Novelty");

  $novelty1->setTitle('Novelty1');
  $novelty1->setDescription('Description Novelty 1 Description Novelty 1 Description Novelty 1 Description Novelty 1 Description Novelty 1 Description Novelty 1 Description Novelty 1');
  $novelty1->setAuthor('Author Novelty 1');
  $novelty1->setCategory('Category Novelty 1');

  $title = $novelty1->getTitle();
  $description = $novelty1->getDescription();
  $shortDescription = $novelty1->shortDescription($description);
  $author = $novelty1->getAuthor();
  $category = $novelty1->getCategory();
  $imgUrl = $novelty1->setImgUrl('https://picsum.photos/100/50');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Insarcinare 1 POO</title>
</head>

<body>

    <div class="row mt-5 justify-content-center">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?=$imgUrl;?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$title;?></h5>
                        <p class="card-text"><?=$shortDescription;?></p>
                        <a href="#" class="btn btn-primary">Read More...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>