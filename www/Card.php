<!-- Fichier Class, nom commence avec une majuscule -->

<?php
 // Norme : Déclaration de la classe, exactement le même nom que le nom du fichier
class Card
{
  // SYNTAXE PHP 7.4
  // public int $quantity; //public : accessible de partout  portabilité / type / attribut = valeur
  // public float $priceTotal; 

  // on va appeller une fonction magique qui s'appelle __construct (fonction que php gère) permet de créer l'objet
  // public function __construct(int $quantity, float $priceTotal)
  // {
  //   $this->quantity = $quantity;
  //   $this->priceTotal = $priceTotal;
  // }

  //SYNTAXE PHP8
  public function __construct(private int $quantity, private float $priceTotal)
  {

  }

  /**
 * méthode qui retourne le prix total
 * @return float
 */
  public function getPriceTotal(): float
  {
    return $this->priceTotal;
  }


  /**
   * méthode qui permet de modifier le prix total
   * @param float $priceTotal
   * @return void
   */
  public function setPriceTotal(float $priceTotal):void
  {
    $this->priceTotal = $priceTotal;
  }


  /**
   * méthode qui retourne la quantité
   * @return int
   */
  public function getQuantity(): int
  {
    return $this->quantity;
  }
}

  /**
   * méthode qui permet de modifier la quantité
   * @param int $quantity
   * @return void
   */
  public function setQuantity(int $quantity):void
  {
    $this->quantity = $quantity;
  }

