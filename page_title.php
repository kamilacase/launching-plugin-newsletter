<?php>

class Zero_Page_Title
{
    public function __construct()
    {
    add_filter('document_title_parts', 'filter_title_part');
    }
    function filter_title_part($title) {
    $title['title'] = 'zgeg';
    return $title
}

}
?>