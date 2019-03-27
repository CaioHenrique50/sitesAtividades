<?php

class Noticia {

    private $id_noticia;
    private $titulo;
    private $subtitulo;
    private $noticia;
    private $dt_publicacao;
    private $autor;

    function getId_noticia() {
        return $this->id_noticia;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getSubtitulo() {
        return $this->subtitulo;
    }

    function getNoticia() {
        return $this->noticia;
    }

    function getDt_publicacao() {
        return $this->dt_publicacao;
    }

    function getAutor() {
        return $this->autor;
    }

    function setId_noticia($id_noticia) {
        $this->id_noticia = $id_noticia;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setSubtitulo($subtitulo) {
        $this->subtitulo = $subtitulo;
    }

    function setNoticia($noticia) {
        $this->noticia = $noticia;
    }

    function setDt_publicacao($dt_publicacao) {
        $this->dt_publicacao = $dt_publicacao;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

}
