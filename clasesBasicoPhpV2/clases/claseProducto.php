<?php

class Producto 
{
    private $nombre;
    private $categoria;
    private $precio;
    private $stock;
    private $marca;
    private $tamano;
    private $paisOrigen;

    public function __construct($name, $category, $price, $stock, $brand, $size, $origin) {
        $this->nombre = $name;
        $this->categoria = $category;
        $this->precio = $price;
        $this->stock = $stock;
        $this->marca = $brand;
        $this->tamano = $size;
        $this->paisOrigen = $origin;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function getPrecio() {
        return $this->precio;
    }
    public function getStock() {
        return $this->stock;
    }
    public function getMarca() {
        return $this->marca;
    }
    public function getTamano() {
        return $this->tamano;
    }
    public function getPaisOrigen() {
        return $this->paisOrigen;
    }
    

    public function setNombre($name) {
        return $this->nombre = $name;
    }
    public function setCategoria($category) {
        return $this->categoria = $category;
    }
    public function setPrecio($price) {
        return $this->precio = $price;
    }
    public function setStock($stock) {
        return $this->stock = $stock;
    }
    public function setMarca($brand) {
        return $this->marca = $brand;
    }
    public function setTamano($size) {
        return $this->tamano = $size;
    }
    public function setPaisOrigen($origin) {
        return $this->paisOrigen = $origin;
    }
}

$gaseosa = new Producto("Gaseosa Litro Manzana", "Alimentos", 3500, 15, "Postobon", "Mediano", "Colombia");
$celular = new Producto("Smartphone 128GB", "Electrodomésticos", 700000, 12, "Xiaomi", "Mediano", "China");
$camisa = new Producto("Camisa para Hombre Unicolor", "Ropa", 55000, 20, "KOAJ", "XL", "China");
$reloj = new Producto("Reloj Elegante", "Joyería", 1800000, 7, "Rolex", "Pequeño", "Reino Unido");

echo "<h3>Nombre: </h3>";
echo $gaseosa->getNombre() . "<br><br>";
echo "<h3>Categoria: </h3>";
echo $gaseosa->getCategoria() . "<br><br>";
echo "<h3>Precio: </h3>";
echo $gaseosa->getPrecio() . "<br><br>";
echo "<h3>Stock: </h3>";
echo $gaseosa->getStock() . "<br><br>";
echo "<h3>Marca: </h3>";
echo $gaseosa->getMarca() . "<br><br>";
echo "<h3>Tamaño: </h3>";
echo $gaseosa->getTamano() . "<br><br>";
echo "<h3>País de Origen: </h3>";
echo $gaseosa->getPaisOrigen() . "<br><br>";
echo "-----------------------------------------------------------";


echo "<h3>Nombre: </h3>";
echo $celular->getNombre() . "<br><br>";
echo "<h3>Categoria: </h3>";
echo $celular->getCategoria() . "<br><br>";
echo "<h3>Precio: </h3>";
echo $celular->getPrecio() . "<br><br>";
echo "<h3>Stock: </h3>";
echo $celular->getStock() . "<br><br>";
echo "<h3>Marca: </h3>";
echo $celular->getMarca() . "<br><br>";
echo "<h3>Tamaño: </h3>";
echo $celular->getTamano() . "<br><br>";
echo "<h3>País de Origen: </h3>";
echo $celular->getPaisOrigen() . "<br><br>";
echo "-----------------------------------------------------------";

echo "<h3>Nombre: </h3>";
echo $camisa->getNombre() . "<br><br>";
echo "<h3>Categoria: </h3>";
echo $camisa->getCategoria() . "<br><br>";
echo "<h3>Precio: </h3>";
echo $camisa->getPrecio() . "<br><br>";
echo "<h3>Stock: </h3>";
echo $camisa->getStock() . "<br><br>";
echo "<h3>Marca: </h3>";
echo $camisa->getMarca() . "<br><br>";
echo "<h3>Tamaño: </h3>";
echo $camisa->getTamano() . "<br><br>";
echo "<h3>País de Origen: </h3>";
echo $camisa->getPaisOrigen() . "<br><br>";
echo "-----------------------------------------------------------";


echo "<h3>Nombre: </h3>";
echo $reloj->getNombre() . "<br><br>";
echo "<h3>Categoria: </h3>";
echo $reloj->getCategoria() . "<br><br>";
echo "<h3>Precio: </h3>";
echo $reloj->getPrecio() . "<br><br>";
echo "<h3>Stock: </h3>";
echo $reloj->getStock() . "<br><br>";
echo "<h3>Marca: </h3>";
echo $reloj->getMarca() . "<br><br>";
echo "<h3>Tamaño: </h3>";
echo $reloj->getTamano() . "<br><br>";
echo "<h3>País de Origen: </h3>";
echo $reloj->getPaisOrigen() . "<br><br>";

?>
