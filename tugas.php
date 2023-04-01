<!-- nama : Rofi Ardiatno
nim : G.231.21.0203 -->
<?php
class product
{
    public $name;
    public $price;
    public $discount;
    function getPrice()
    {
        return $this->price;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }
    function getName()
    {
        return $this->name;
    }
    function setName($name)
    {
        $this->name = $name;
    }
    function getDiscount()
    {
        return $this->discount;
    }
    function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}
/**
 *
 */
class CDMusic extends product
{
    public $artist;
    public $genre;
    function __construct($name = "nama", $price = "harga", $discount = "diskon")
    { }
    function getArtist()
    {
        return $this->artist;
    }

    function setArtist($artist)
    {
        $this->artist = $artist;
    }
    function getGenre()
    {
        return $this->genre;
    }
    function setGenre($genre)
    {
        $this->genre = $genre;
    }
    function setPrice($price)
    {
        $this->price = $price;
    }
    function getPrice()
    {
        $harga = $this->price;
        $ppn = ((10 / 100) * $this->price);
        $discount = ((5 / 100) * $this->price);
        return ($harga + $ppn) - $discount;
    }
    function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}
/**
 *
 */
class CDRack extends product
{
    public $capacity;
    public $model;
    function getCapacity()
    {

        return $this->capacity;
    }
    function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }
    function getModel()
    {
        return $this->model;
    }
    function setModel($model)
    {
        $this->model = $model;
    }
    function setPrice($price)
    {
        $this->price = $price;
    }
    function getPrice()
    {
        $harga = $this->price;
        $tambahan = ((15 / 100) * $this->price);
        return $harga + $tambahan;
    }
}
$beli = new product();
$beli_cdm = new CDMusic();
$beli_cdr = new CDRack();

$beli_cdm->setArtist("Denny Caknan");
$beli_cdm->setGenre("Dangdut");
$beli_cdm->setDiscount("5%");
$beli_cdm->setPrice(45000);
echo "CD Music </br>";
echo "Nama Product : " . $beli->getName() . "<br/>";
echo "Artis : " . $beli_cdm->getArtist() . "<br/>";
echo "Genre : " . $beli_cdm->getGenre() . "<br/>";
echo " Discount Sebesar " . $beli_cdm->getDiscount() .
    "<br/>";
echo "Total Harga : Rp." . $beli_cdm->getPrice() . ",-<br/>Harga sudah
termasuk PPN sebesar 10% dan Discount 5%<br/><br/><hr/>";
$beli_cdr->setCapacity("4 x 2 Meter");
$beli_cdr->setModel("Classic Modern");
$beli_cdr->setPrice(1250000);
echo "CD Rack </br>";
echo "Ukuran : " . $beli_cdr->getCapacity() . "<br/>";
echo "Model : " . $beli_cdr->getModel() . "<br/>";
echo "tidak mendapatkan Discount <br/>";
echo "Total Harga : Rp." . $beli_cdr->getPrice() . ",-<br/>Harga  sudah
termasuk ppn sebesar 15% dan tidak mendapatkan discount";
?>