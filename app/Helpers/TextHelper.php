<?php

namespace App\Helpers;

class TextHelper
{
    /**
     * Crea un excerpt cortando por palabras completas
     *
     * @param string $text El texto a recortar
     * @param int $limit Número máximo de palabras
     * @param string $append Texto a añadir al final (por defecto '...')
     * @return string
     */
    public static function wordExcerpt($text, $limit = 27, $append = '...')
    {
        // Limpiamos el texto de HTML si existe
        $text = strip_tags($text);

        // Dividimos el texto en palabras
        $words = str_word_count($text, 2, 'áéíóúüñÁÉÍÓÚÜÑ');

        // Si el texto es más corto que el límite, lo devolvemos completo
        if (count($words) <= $limit) {
            return $text;
        }

        // Tomamos solo las palabras hasta el límite
        $words = array_slice($words, 0, $limit, true);

        // Obtenemos las posiciones y encontramos la última
        $positions = array_keys($words);
        $lastPos = end($positions);

        // Cortamos el texto hasta esa posición
        $excerpt = substr($text, 0, $lastPos);

        // Añadimos el texto adicional
        return rtrim($excerpt) . $append;
    }
}
