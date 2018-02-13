<?
class Utilities {

    public function planText($text){
        $text = strip_tags($text, '<br><p><li>');
        $text = preg_replace ('/<[^>]*>/', PHP_EOL, $text);
        return $text;
    }
}
?>