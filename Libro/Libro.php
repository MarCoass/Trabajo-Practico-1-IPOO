<?php
//\n
class Libro
{
    private $ISBN;
    private $titulo;
    private $anioEdicion;
    private $editorial;
    private $autor;

    public function __construct($isbn, $titulo, $anio, $editorial, $nombre)
    {
        $this->ISBN = $isbn;
        $this->titulo = $titulo;
        $this->anioEdicion = $anio;
        $this->editorial = $editorial;
        $this->autor = $nombre;
    }

    public function getISBN()
    {
        return $this->ISBN;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getAnioEdicion()
    {
        return $this->anioEdicion;
    }
    public function getEditorial()
    {
        return $this->editorial;
    }
    public function getAutor()
    {
        return $this->autor;
    }

    public function setISBN($x)
    {
        $this->ISBN = $x;
    }
    public function setTitulo($x)
    {
        $this->titulo = $x;
    }
    public function setAnioEdicion($x)
    {
        $this->anioEdicion = $x;
    }
    public function setEditorial($x)
    {
        $this->editorial = $x;
    }
    public function setAutor($x)
    {
        $this->autor = $x;
    }

    public function perteneceEditorial($otraEditorial)
    {
        return $this->getEditorial() == $otraEditorial;
    }

    public function aniosDesdeEdicion()
    {
        $anioActual = date("Y");
        return $anioActual - $this->getAnioEdicion();
    }

    public function equals($otroLibro)
    {
        $coincide = false;
        if (
            $this->getISBN() == $otroLibro->getISBN() &&
            $this->getTitulo() == $otroLibro->getTitulo() &&
            $this->getAnioEdicion() == $otroLibro->getAnioEdicion() &&
            $this->getEditorial() == $otroLibro->getEditorial() &&
            $this->getAutor() == $otroLibro->getAutor()
        ) {
            $coincide = true;
        }
        return $coincide;
    }

    public function __toString()
    {
        return "Titulo: " . $this->getTitulo() .
            "\nISBN: " . $this->getISBN() .
            "\nAño de edicion: " . $this->getAnioEdicion() .
            "\nEditorial: " . $this->getEditorial() .
            "\nAutor: " . $this->getAutor()["nombre"] . " " . $this->getAutor()["apellido"] . "\n";
    }
}
